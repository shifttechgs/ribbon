<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    // Honeypot: silently accept bots without sending anything
    if ($request->filled('website')) {
        return response()->json(['success' => true]);
    }

    $validated = $request->validate([
        'name'    => ['required', 'string', 'max:100'],
        'phone'   => ['required', 'string', 'max:30', 'regex:/^[0-9+\s\-()\/.]{7,}$/'],
        'email'   => ['nullable', 'email', 'max:150'],
        'service' => ['required', 'string', 'in:emergency-plumbing,gas-geyser,leak-detection,drain-cleaning,pipe-repair,gas-installation,other'],
        'message' => ['nullable', 'string', 'max:1500'],
    ]);

    $serviceLabels = [
        'emergency-plumbing' => 'Emergency Plumbing',
        'gas-geyser'         => 'Gas Geyser Installation',
        'leak-detection'     => 'Leak Detection',
        'drain-cleaning'     => 'Drain Cleaning & Unblocking',
        'pipe-repair'        => 'Pipe Repair & Replacement',
        'gas-installation'   => 'Gas Installation',
        'other'              => 'Other / Not Sure',
    ];
    $serviceLabel = $serviceLabels[$validated['service']] ?? $validated['service'];
    $propertyType = $request->input('property_type') === 'commercial' ? 'Commercial' : 'Residential';

    $body = implode("\n", [
        'New quote request from the Ribbon Plumbing website',
        str_repeat('-', 42),
        'Name:      ' . $validated['name'],
        'Phone:     ' . $validated['phone'],
        'Email:     ' . ($validated['email'] ?? 'not provided'),
        'Service:   ' . $serviceLabel,
        'Property:  ' . $propertyType,
        'Message:   ' . ($validated['message'] ?? '-'),
        str_repeat('-', 42),
        'Submitted: ' . now()->timezone('Africa/Johannesburg')->format('D, d M Y H:i') . ' (SAST)',
    ]);

    // Record every lead first so it is never lost, even if email delivery fails.
    Log::info('Quote request', $validated + ['property_type' => $propertyType]);

    try {
        Mail::raw($body, function ($message) use ($validated, $serviceLabel) {
            $message->to(config('mail.to.address'), config('mail.to.name'))
                ->subject("New Quote Request — {$serviceLabel} — {$validated['name']}");

            // Let the business hit "reply" and reach the customer directly.
            if (! empty($validated['email'])) {
                $message->replyTo($validated['email'], $validated['name']);
            }
        });
    } catch (\Throwable $e) {
        // Lead is already captured in the log above; don't break the visitor's submission.
        Log::error('Quote request email failed to send: ' . $e->getMessage());
    }

    return response()->json(['success' => true]);
});
