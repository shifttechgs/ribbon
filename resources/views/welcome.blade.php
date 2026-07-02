<!DOCTYPE html>
<html lang="en-ZA" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  {{-- ── Primary Meta ── --}}
  <title>Ribbon Plumbing & Gas Heating | Cape Town — PIRB & SAQCC Registered</title>
  <meta name="description" content="Cape Town's trusted PIRB & SAQCC Gas registered plumbing and gas heating company. 24/7 emergency plumbing, gas geyser installation, leak detection & drain cleaning. Atlantic Seaboard · Southern Suburbs · Northern Suburbs. Call now for a free quote.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url('/') }}">

  {{-- ── Geo ── --}}
  <meta name="geo.region"    content="ZA-WC">
  <meta name="geo.placename" content="Cape Town, Western Cape">
  <meta name="geo.position"  content="-33.9249;18.4241">
  <meta name="ICBM"          content="-33.9249, 18.4241">

  {{-- ── Open Graph ── --}}
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="{{ url('/') }}">
  <meta property="og:title"       content="Ribbon Plumbing & Gas Heating | Cape Town">
  <meta property="og:description" content="PIRB & SAQCC Gas certified. Emergency plumbing, gas geysers, leak detection. Serving Cape Town and surrounds.">
  <meta property="og:locale"      content="en_ZA">

  {{-- ── Twitter Card ── --}}
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="Ribbon Plumbing & Gas Heating | Cape Town">
  <meta name="twitter:description" content="PIRB & SAQCC Gas registered. Emergency plumbing & gas installation across Cape Town.">

  {{-- ── CSRF for AJAX ── --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- ── Google Fonts preconnect ── --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  {{-- ── Vite Assets ── --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- ── JSON-LD Schema ── --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@graph": [
      {
        "@@type": ["LocalBusiness", "Plumber"],
        "@@id": "{{ url('/') }}#business",
        "name": "Ribbon Plumbing And Gas Heating",
        "url": "{{ url('/') }}",
        "telephone": "+27823620297",
        "email": "info@ribbonplumbing.co.za",
        "description": "PIRB and SAQCC Gas registered plumbing and gas installation company serving Cape Town and surrounding areas.",
        "address": {
          "@@type": "PostalAddress",
          "addressLocality": "Cape Town",
          "addressRegion": "Western Cape",
          "postalCode": "8001",
          "addressCountry": "ZA"
        },
        "geo": {
          "@@type": "GeoCoordinates",
          "latitude": -33.9249,
          "longitude": 18.4241
        },
        "openingHoursSpecification": [
          {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
            "opens": "07:00",
            "closes": "17:00"
          },
          {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": "Saturday",
            "opens": "08:00",
            "closes": "13:00"
          }
        ],
        "aggregateRating": {
          "@@type": "AggregateRating",
          "ratingValue": "4.9",
          "reviewCount": "48",
          "bestRating": "5"
        },
        "areaServed": ["Cape Town","Atlantic Seaboard","Sea Point","Green Point","City Bowl","Southern Suburbs","Claremont","Rondebosch","Newlands","Constantia","Bellville","Durbanville","Table View","Helderberg"],
        "hasCredential": [
          { "@@type": "EducationalOccupationalCredential", "name": "PIRB Registration", "credentialCategory": "Professional Registration" },
          { "@@type": "EducationalOccupationalCredential", "name": "SAQCC Gas Registration", "credentialCategory": "Professional Registration" }
        ]
      }
    ]
  }
  </script>
</head>

<body>
  {{-- Skip link --}}
  <a href="#main-content" class="skip-link">Skip to main content</a>

  {{-- ════════════════════════════════════════════════════════
       NAVIGATION
       ════════════════════════════════════════════════════════ --}}
  <header class="site-header site-header--top" id="site-header" role="banner">
    <nav class="nav-container" role="navigation" aria-label="Main navigation">

      <a href="/" class="nav-logo" aria-label="Ribbon Plumbing home">
        <span class="nav-logo-text">
          <span class="logo-ribbon">Ribbon</span><span class="logo-plumbing">&nbsp;Plumbing</span>
        </span>
      </a>

      <ul class="nav-links" role="list">
        <li><a href="#services">Services</a></li>
        <li><a href="#why-us">Why Us</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li><a href="#process">Process</a></li>
        <li><a href="#areas">Areas</a></li>
        <li><a href="#faq">FAQ</a></li>
      </ul>

      <div class="nav-actions">
        <a href="tel:+27823620297" class="btn-phone-nav" data-location="nav" aria-label="Call us">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/>
          </svg>
          082 362 0297
        </a>
        <a href="#contact" class="btn-primary btn-primary--sm">Free Quote</a>
      </div>

      <button class="nav-toggle" id="nav-toggle" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
        </svg>
      </button>
    </nav>
  </header>

  {{-- Mobile menu overlay --}}
  <div class="mobile-menu-overlay" id="mobile-menu-overlay" aria-hidden="true"></div>

  {{-- Mobile menu drawer --}}
  <aside class="mobile-menu" id="mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu">
    <div class="mobile-menu__header">
      <span style="font-family:'Plus Jakarta Sans',sans-serif;font-size:1.25rem;font-weight:800;line-height:1;">
        <span style="color:#fff;">Ribbon</span><span style="color:#F5936A;">&nbsp;Plumbing</span>
      </span>
      <button class="mobile-menu__close" id="mobile-menu-close" aria-label="Close navigation menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <ul class="mobile-menu-nav" role="list">
      <li><a href="#services" class="mobile-nav-link">Services</a></li>
      <li><a href="#why-us"   class="mobile-nav-link">Why Choose Us</a></li>
      <li><a href="#reviews"  class="mobile-nav-link">Reviews</a></li>
      <li><a href="#process"  class="mobile-nav-link">How It Works</a></li>
      <li><a href="#areas"    class="mobile-nav-link">Service Areas</a></li>
      <li><a href="#faq"      class="mobile-nav-link">FAQ</a></li>
      <li><a href="#contact"  class="mobile-nav-link">Get a Quote</a></li>
    </ul>
    <div class="mobile-menu__ctas">
      <a href="tel:+27823620297" class="mobile-menu__phone" data-location="mobile-menu">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/>
        </svg>
        Call Now — 082 362 0297
      </a>
      <a href="#contact" class="mobile-menu__quote mobile-nav-link">Get Free Quote</a>
    </div>
  </aside>

  {{-- ════════════════════════════════════════════════════════
       MAIN CONTENT
       ════════════════════════════════════════════════════════ --}}
  <main id="main-content">

    {{-- ── SECTION 1: HERO ── --}}
    <section class="hero-section" id="hero" aria-label="Hero">

      {{-- Background — replace div contents with a real <img> tag --}}
      <div class="hero-bg" aria-hidden="true">
        <img
          src="https://images.unsplash.com/photo-1646592491489-ebdf758b9d11?w=1920&q=80&auto=format&fit=crop"
          alt=""
          width="1920" height="1280"
          fetchpriority="high"
          loading="eager"
        >
      </div>
      <div class="hero-overlay" aria-hidden="true"></div>

      <div class="hero-inner">

        {{-- ── LEFT: Headline anchored bottom-left ── --}}
        <div class="hero-text">
          <div id="hero-badge" class="hero-badge" aria-label="Rated 5 stars by Cape Town clients">
            <span class="hero-badge__stars" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <span class="hero-badge__txt">PIRB &amp; SAQCC Gas Registered &middot; Cape Town</span>
          </div>

          <h1 id="hero-headline" class="hero-h1">
            <span class="hero-h1-line">Stress-free</span>
            <span class="hero-h1-line"><span class="accent">plumbing</span> &amp; gas</span>
          </h1>

          <p id="hero-sub" class="hero-sub">
            Burst pipes to gas geyser installs &mdash; Ribbon arrives on time and leaves your place spotless. Serving Cape Town, 24/7.
          </p>

        </div>

        {{-- ── RIGHT: Form card (top) + info cards (bottom) ── --}}
        <div id="hero-aside" class="hero-aside">

          <div class="hero-form-card" role="complementary" aria-label="Get a free quote">

            {{-- Card header --}}
            <div class="hero-card-head">
              <h3>Get Your Free Quote</h3>
              <p>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                Fast callback, day or night &middot; No obligation
              </p>
            </div>

            {{-- Tabs --}}
            <div class="hero-card-tabs" role="tablist" aria-label="Property type">
              <button class="hero-card-tab is-active" role="tab" data-hero-tab="residential" aria-selected="true" aria-controls="hero-tab-panel">Residential</button>
              <button class="hero-card-tab" role="tab" data-hero-tab="commercial" aria-selected="false" aria-controls="hero-tab-panel">Commercial</button>
            </div>

            {{-- Success state (hidden until submit) --}}
            <div class="hero-card-success" id="hero-card-success" role="alert" aria-live="polite">
              <div class="hero-card-success__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.75l6 6 9-13.5"/></svg>
              </div>
              <h3>We'll Call You Back!</h3>
              <p>Quote request received &mdash; we'll call you straight back. For emergencies, call us now.</p>
              <a href="tel:+27823620297" class="btn-primary btn-primary--sm" style="margin:0 auto;" data-location="hero-success">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/></svg>
                Call Now
              </a>
            </div>

            {{-- Form --}}
            <div id="hero-tab-panel">
              <form id="hero-quote-form" class="hero-card-body" novalidate aria-label="Quote request">
                @csrf
                <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none;" aria-hidden="true">
                  <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>
                <input type="hidden" name="property_type" id="f-hero-property-type" value="residential">

                <div class="hero-card-row">
                  <div>
                    <label for="f-hero-name" class="hero-card-label">Full Name</label>
                    <input type="text" id="f-hero-name" name="name" class="hero-card-input" placeholder="Jane Smith" autocomplete="name" required>
                  </div>
                  <div>
                    <label for="f-hero-phone" class="hero-card-label">Phone</label>
                    <input type="tel" id="f-hero-phone" name="phone" class="hero-card-input" placeholder="082 362 0297" autocomplete="tel" required>
                  </div>
                </div>

                <div class="hero-card-row">
                  <div>
                    <label for="f-hero-email" class="hero-card-label">Email</label>
                    <input type="email" id="f-hero-email" name="email" class="hero-card-input" placeholder="jane@email.com" autocomplete="email">
                  </div>
                  <div>
                    <label for="f-hero-service" class="hero-card-label">Service</label>
                    <select id="f-hero-service" name="service" class="hero-card-input hero-card-select" required>
                      <option value="" disabled selected>Select Service</option>
                    <option value="emergency-plumbing">Emergency Plumbing</option>
                    <option value="gas-geyser">Gas Geyser Installation</option>
                    <option value="leak-detection">Leak Detection</option>
                    <option value="drain-cleaning">Drain Cleaning & Unblocking</option>
                    <option value="pipe-repair">Pipe Repair & Replacement</option>
                    <option value="gas-installation">Gas Installation</option>
                    <option value="other">Other / Not Sure</option>
                    </select>
                  </div>
                </div>

                <button type="submit" class="hero-card-submit" data-hero-submit>
                  Get My Free Quote
                </button>
              </form>
            </div>
          </div>{{-- /.hero-form-card --}}

          {{-- Social proof + urgency metrics --}}
          <div class="hero-proof" aria-label="Ratings and response times">
            <div class="hero-proof__cell">
              <span class="hero-proof__stars" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
              <span class="hero-proof__num">4.9</span>
              <span class="hero-proof__lbl">48 Google reviews</span>
            </div>
            <span class="hero-proof__div" aria-hidden="true"></span>
            <div class="hero-proof__cell">
              <span class="hero-proof__num hero-proof__num--accent">&lt;60<span class="hero-proof__unit">min</span></span>
              <span class="hero-proof__lbl">Avg. response</span>
            </div>
            <span class="hero-proof__div" aria-hidden="true"></span>
            <div class="hero-proof__cell">
              <span class="hero-proof__num hero-proof__num--accent">24/7</span>
              <span class="hero-proof__lbl">Emergency callout</span>
            </div>
          </div>
        </div>{{-- /.hero-aside --}}
      </div>{{-- /.hero-inner --}}
    </section>

    {{-- ── SECTION 2: TRUST BAR ── --}}
    <section class="trust-bar" aria-label="Credentials and coverage">
      <div class="container">
        <div class="trust-bar__rating">
          <span class="trust-bar__stars" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
          <span class="trust-bar__rating-txt"><strong>4.9</strong>/5 &middot; rated by <strong>48</strong> Cape Town homeowners</span>
        </div>
      </div>

      {{-- Reviews trust scroll --}}
      @php
        $trustReviews = [
          ['i'=>'S','n'=>'Sarah M.','l'=>'Sea Point','q'=>'Burst pipe at 11pm and they were at my door within the hour. Fixed it cleanly.'],
          ['i'=>'T','n'=>'Thabo K.','l'=>'Claremont','q'=>'The only company that included the Gas CoC in the geyser quote without me asking.'],
          ['i'=>'P','n'=>'Priya N.','l'=>'Rondebosch','q'=>'Found a hidden leak in 20 minutes. Saved me from major renovations.'],
          ['i'=>'J','n'=>'Johan v.d.W.','l'=>'Constantia','q'=>'Re-piped the whole house in three days, on budget. Tidy and professional.'],
          ['i'=>'L','n'=>'Lerato D.','l'=>'Bellville','q'=>'Zero comebacks across my whole rental portfolio since switching to Ribbon.'],
          ['i'=>'M','n'=>'Mark O.','l'=>'Newlands','q'=>'Installed a gas hob and handed over the CoC on the spot. Faultless.'],
        ];
      @endphp
      <div class="trust-reviews" aria-label="What our customers say">
        <div class="trust-reviews__track" aria-hidden="true">
          @foreach(array_merge($trustReviews, $trustReviews) as $r)
            <article class="trust-review">
              <div class="trust-review__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              <p class="trust-review__quote">&ldquo;{{ $r['q'] }}&rdquo;</p>
              <footer class="trust-review__by">
                <span class="trust-review__avatar">{{ $r['i'] }}</span>
                <span class="trust-review__meta">
                  <span class="trust-review__name">{{ $r['n'] }}</span>
                  <span class="trust-review__loc">{{ $r['l'] }}, Cape Town</span>
                </span>
              </footer>
            </article>
          @endforeach
        </div>
      </div>

      {{-- Areas-served marquee --}}
      @php
        $areas = ['Sea Point','Green Point','City Bowl','Claremont','Rondebosch','Newlands','Constantia','Bishopscourt','Bellville','Durbanville','Table View','Milnerton','Helderberg','Somerset West'];
      @endphp
      <div class="trust-marquee trust-marquee--reverse" aria-label="Areas we serve">
        <div class="trust-marquee__track" aria-hidden="true">
          @foreach(array_merge($areas, $areas) as $area)
            <span class="trust-marquee__item">{{ $area }}</span>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ── SECTION 3: SERVICES ── --}}
    <section class="services-section" id="services" aria-labelledby="services-heading">
      <div class="container">
        <header class="services-head">
          <div class="services-head__lead">
            <span class="section-overline">What We Do</span>
            <h2 class="services-head__title" id="services-heading">Plumbing &amp; gas,<br>done right the first time</h2>
          </div>
          <p class="services-head__intro">From the Atlantic Seaboard to the Southern Suburbs — one PIRB &amp; SAQCC-certified team for every plumbing and gas job, big or small.</p>
        </header>

        <div class="services-grid" role="list">

          <article class="service-card service-card--feature" role="listitem">
            <div class="service-card__media" style="background-image:url('https://images.unsplash.com/photo-1676210134190-3f2c0d5cf58d?w=1200&q=80&auto=format&fit=crop')" aria-hidden="true"></div>
            <div class="service-card__head">
              <div class="service-card__icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
              </div>
              <span class="service-card__tag">24/7 &middot; No call-out penalty</span>
            </div>
            <h3 class="service-card__title">Emergency Plumbing</h3>
            <p class="service-card__desc">Burst pipes, flooding, geyser failures — we answer day or night and get to you fast, across every Cape Town suburb. Blocked drains and no-water emergencies too.</p>
            <a href="#contact" class="service-card__link">
              Request help now
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
          </article>

          <article class="service-card" role="listitem">
            <div class="service-card__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/>
                <path d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"/>
              </svg>
            </div>
            <h3 class="service-card__title">Gas Geyser Installation</h3>
            <p class="service-card__desc">SAQCC Gas certified supply and installation of gas geysers. We handle the full job: gas line, ventilation, Certificate of Compliance (CoC). Cut your electricity bill by up to 40%.</p>
            <a href="#contact" class="service-card__link">
              Get a quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
          </article>

          <article class="service-card" role="listitem">
            <div class="service-card__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
              </svg>
            </div>
            <h3 class="service-card__title">Leak Detection</h3>
            <p class="service-card__desc">Non-destructive leak detection using electronic equipment. We find hidden leaks in walls, floors and underground pipes without unnecessary digging or cutting.</p>
            <a href="#contact" class="service-card__link">
              Book detection
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
          </article>

          <article class="service-card" role="listitem">
            <div class="service-card__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
              </svg>
            </div>
            <h3 class="service-card__title">Drain Cleaning & Unblocking</h3>
            <p class="service-card__desc">Blocked kitchen, bathroom or sewer drain? High-pressure jetting and drain snake equipment clears blockages fast. Same-day service available across Cape Town.</p>
            <a href="#contact" class="service-card__link">
              Book today
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
          </article>

          <article class="service-card" role="listitem">
            <div class="service-card__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z"/>
              </svg>
            </div>
            <h3 class="service-card__title">Pipe Repair & Replacement</h3>
            <p class="service-card__desc">Burst pipes, corroded copper, leaking joints — patching, relining or full repipe. We work with copper, HDPE and PEX pipe to SANS 10252 standards.</p>
            <a href="#contact" class="service-card__link">
              Get a quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
          </article>

          <article class="service-card" role="listitem">
            <div class="service-card__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
              </svg>
            </div>
            <h3 class="service-card__title">Gas Installation</h3>
            <p class="service-card__desc">Gas hobs, gas fireplaces, braai connections and full gas line installations. Every installation is tested, inspected and issued with a valid SAQCC Gas CoC — legally required in Cape Town.</p>
            <a href="#contact" class="service-card__link">
              Book now
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
          </article>

          {{-- CTA card --}}
          <a href="#contact" class="service-card service-card--cta" role="listitem" data-location="services-cta">
            <div class="service-card__media" style="background-image:url('https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?w=1200&q=80&auto=format&fit=crop')" aria-hidden="true"></div>
            <div class="service-card__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8.25 3.75H19.5a.75.75 0 01.75.75v9.75a.75.75 0 01-.75.75h-6.375l-4.5 3v-3H4.5a.75.75 0 01-.75-.75V4.5a.75.75 0 01.75-.75h3.75z"/>
              </svg>
            </div>
            <h3 class="service-card__title">Not sure what you need?</h3>
            <p class="service-card__desc">Describe the problem and we'll advise you — free, and no obligation to book.</p>
            <span class="service-card__link">
              Get free advice
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </span>
          </a>

        </div>
      </div>
    </section>

    {{-- ── SECTION 4: WHY CHOOSE US ── --}}
    <section class="whyus" id="why-us" aria-labelledby="whyus-heading">
      <div class="container whyus__grid">

        <div class="whyus__aside">
          <span class="section-overline">Why Ribbon Plumbing</span>
          <h2 class="whyus__title" id="whyus-heading">Four reasons Cape&nbsp;Town keeps our number</h2>
          <p class="whyus__intro">No call-out lottery, no surprise invoices &mdash; just certified, guaranteed work from a team that treats your home like its own.</p>
          <a href="#contact" class="btn-primary" data-location="whyus">
            Get a Free Quote
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
          </a>
          <div class="whyus__stat">
            <span class="whyus__stat-num">4.9&#9733;</span>
            <span class="whyus__stat-lbl">rated by 48 Cape Town homeowners</span>
          </div>
        </div>

        <div class="whyus__list">

          <article class="whyus-card">
            <div class="whyus-card__top">
              <span class="whyus-card__idx" aria-hidden="true">01</span>
              <span class="whyus-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
            </div>
            <h3 class="whyus-card__title">We arrive when we say we will</h3>
            <p class="whyus-card__copy">A 60-minute arrival window &mdash; not a 4-hour wait. Our team is spread across Cape Town, so we reach most suburbs fast.</p>
            <span class="whyus-card__chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 12.75l6 6 9-13.5"/></svg>
              60-minute target for emergencies
            </span>
          </article>

          <article class="whyus-card">
            <div class="whyus-card__top">
              <span class="whyus-card__idx" aria-hidden="true">02</span>
              <span class="whyus-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 01-.75.75h-.75m-6-1.5H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75m15 0v-.75c0-.414-.336-.75-.75-.75H3"/></svg>
              </span>
            </div>
            <h3 class="whyus-card__title">You know the price before we start</h3>
            <p class="whyus-card__copy">No surprise invoices. We assess the job and give you a written price &mdash; parts, labour and VAT included. Work only starts once you've agreed.</p>
            <span class="whyus-card__chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 12.75l6 6 9-13.5"/></svg>
              Written fixed quote &mdash; always
            </span>
          </article>

          <article class="whyus-card">
            <div class="whyus-card__top">
              <span class="whyus-card__idx" aria-hidden="true">03</span>
              <span class="whyus-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
              </span>
            </div>
            <h3 class="whyus-card__title">Dual-certified for plumbing <em>and</em> gas</h3>
            <p class="whyus-card__copy">Most plumbers can't legally touch your gas, and most gas fitters can't clear a drain. We hold both PIRB and SAQCC Gas registrations &mdash; one team handles it all.</p>
            <span class="whyus-card__chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 12.75l6 6 9-13.5"/></svg>
              PIRB + SAQCC Gas CoC issued
            </span>
          </article>

          <article class="whyus-card">
            <div class="whyus-card__top">
              <span class="whyus-card__idx" aria-hidden="true">04</span>
              <span class="whyus-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
            </div>
            <h3 class="whyus-card__title">12-month workmanship guarantee</h3>
            <p class="whyus-card__copy">If anything we repaired or installed develops a fault within 12 months, we come back and fix it at no charge. No arguments, no small print.</p>
            <span class="whyus-card__chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 12.75l6 6 9-13.5"/></svg>
              All work guaranteed for 12 months
            </span>
          </article>

        </div>
      </div>
    </section>

    {{-- ── SECTION 5: REVIEWS ── --}}
    <section class="reviews-section" id="reviews" aria-labelledby="reviews-heading">
      <div class="container reviews-layout">

        <div class="reviews-intro">
          <span class="section-overline">Customer Reviews</span>
          <h2 class="section-h2" id="reviews-heading">Loved by Cape&nbsp;Town homeowners</h2>

          <div class="reviews-rating-badge" role="group" aria-label="Overall Google rating">
            <div class="reviews-score" aria-label="Rating: 4.9 out of 5">4.9</div>
            <div>
              <div class="reviews-stars" aria-hidden="true">
                @for ($s = 0; $s < 5; $s++)
                  <svg viewBox="0 0 24 24"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                @endfor
              </div>
              <p class="reviews-meta">Based on 48 Google reviews</p>
            </div>
          </div>

          <a href="https://www.google.com/search?q=Ribbon+Plumbing+And+Gas+Heating+Cape+Town+reviews" class="reviews-cta__link" target="_blank" rel="noopener" data-location="reviews">
            <svg class="g-logo" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Read all 48 reviews on Google
            <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
          </a>

          <div class="reviews-intro__media">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=900&q=80&auto=format&fit=crop" alt="A satisfied Cape Town homeowner shaking hands with a Ribbon plumber" width="900" height="601" loading="lazy">
          </div>
        </div>

        @php
          $reviews = [
            ['initial'=>'S','name'=>'Sarah M.','location'=>'Sea Point, Cape Town','color'=>'#EB5E28','quote'=>'Had a burst pipe at 11pm and they were at my door within the hour. Fixed it cleanly, didn\'t charge a fortune and cleaned up after themselves. Exactly what you want in a panic.'],
            ['initial'=>'T','name'=>'Thabo K.','location'=>'Claremont, Cape Town','color'=>'#C4892F','quote'=>'Got three quotes for a gas geyser installation. Ribbon was the only company that explained the full process and included the CoC in the quote without me having to ask. Very professional.'],
            ['initial'=>'P','name'=>'Priya N.','location'=>'Rondebosch, Cape Town','color'=>'#B15A73','quote'=>'Water was seeping through my bathroom wall and two previous plumbers couldn\'t find it. Ribbon found the source in 20 minutes with leak detection. Saved me from major renovations.'],
            ['initial'=>'J','name'=>'Johan v.d.W.','location'=>'Constantia, Cape Town','color'=>'#4E6E8E','quote'=>'Replaced all the old galvanised pipes in my home. Big job, done in three days, on budget. The team was tidy, communicated daily and the workmanship is excellent. Can\'t fault them.'],
            ['initial'=>'L','name'=>'Lerato D.','location'=>'Bellville, Cape Town','color'=>'#6E8F6A','quote'=>'I manage a rental portfolio in Bellville and Parow. Since switching to Ribbon for all maintenance, I\'ve had zero comebacks on their work. They invoice correctly and deal with tenants professionally.'],
            ['initial'=>'M','name'=>'Mark O.','location'=>'Newlands, Cape Town','color'=>'#9A6A48','quote'=>'Installed a gas hob and connected the gas line. The technician knew exactly what he was doing, explained every step, and handed over the CoC on the spot. Will use again for our Airbnb.'],
          ];
          $reviewCols = [
            [$reviews[0], $reviews[2], $reviews[4]],
            [$reviews[1], $reviews[3], $reviews[5]],
          ];
        @endphp

        <div class="reviews-wall" aria-label="Customer reviews">
          @foreach($reviewCols as $ci => $col)
            <div class="reviews-wall__col">
              <div class="reviews-wall__track reviews-wall__track--{{ $ci + 1 }}">
                @foreach(array_merge($col, $col) as $i => $review)
                  <article class="review-card"@if($i >= count($col)) aria-hidden="true"@endif>
                    <div class="review-card__header">
                      <div class="review-card__stars" aria-label="5 out of 5 stars">
                        @for ($s = 0; $s < 5; $s++)
                          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                        @endfor
                      </div>
                      <span class="review-card__platform">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-label="Google review" role="img">
                          <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                          <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                          <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                          <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        Google
                      </span>
                    </div>
                    <blockquote class="review-card__body">
                      <p>&ldquo;{{ $review['quote'] }}&rdquo;</p>
                    </blockquote>
                    <footer class="review-card__footer">
                      <div class="review-card__avatar" style="background-color:{{ $review['color'] }}" aria-hidden="true">{{ $review['initial'] }}</div>
                      <div>
                        <p class="review-card__name">{{ $review['name'] }}</p>
                        <p class="review-card__location">{{ $review['location'] }}</p>
                      </div>
                    </footer>
                  </article>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ── SECTION: PROCESS ── --}}
    <section class="process-section" id="process" aria-labelledby="process-heading">
      <div class="container">
        <header class="section-header">
          <span class="section-overline">How It Works</span>
          <h2 class="section-h2" id="process-heading">From your call to a job well done</h2>
          <p class="section-body">Four simple steps &mdash; no runaround, no surprises.</p>
        </header>

        <ol class="process-steps">
          <li class="process-step">
            <span class="process-step__num">01</span>
            <span class="process-step__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/></svg>
            </span>
            <h3 class="process-step__title">Get in touch</h3>
            <p class="process-step__desc">Call, WhatsApp or send the form. Tell us what&rsquo;s wrong and we&rsquo;ll advise you straight away &mdash; any time, day or night.</p>
          </li>
          <li class="process-step">
            <span class="process-step__num">02</span>
            <span class="process-step__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
            </span>
            <h3 class="process-step__title">Free assessment &amp; fixed quote</h3>
            <p class="process-step__desc">We assess the job and give you a written, fixed price &mdash; parts, labour and VAT included. No obligation to proceed.</p>
          </li>
          <li class="process-step">
            <span class="process-step__num">03</span>
            <span class="process-step__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg>
            </span>
            <h3 class="process-step__title">We fix it, cleanly</h3>
            <p class="process-step__desc">Our PIRB &amp; SAQCC-certified team does the work right the first time, on schedule, and leaves your place spotless.</p>
          </li>
          <li class="process-step">
            <span class="process-step__num">04</span>
            <span class="process-step__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
            </span>
            <h3 class="process-step__title">Guaranteed &amp; signed off</h3>
            <p class="process-step__desc">You get a 12-month workmanship guarantee, plus a valid Gas CoC on every gas job &mdash; legally required in Cape Town.</p>
          </li>
        </ol>
      </div>
    </section>

    {{-- ── SECTION: SERVICE AREAS ── --}}
    <section class="areas-section" id="areas" aria-labelledby="areas-heading">
      <div class="container areas-grid">
        <div class="areas-intro">
          <span class="section-overline">Where We Work</span>
          <h2 class="areas-title" id="areas-heading">Serving every corner of Cape Town</h2>
          <p class="areas-lead">From the Atlantic Seaboard to the Helderberg &mdash; if you&rsquo;re in the Cape Town metro, a certified Ribbon team can reach you fast.</p>
          <a href="#contact" class="btn-primary" data-location="areas">
            Check your area
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
          </a>
        </div>

        @php
          $regions = [
            ['name'=>'Atlantic Seaboard','areas'=>'Sea Point · Green Point · Camps Bay · Bantry Bay · Clifton'],
            ['name'=>'City Bowl','areas'=>'Gardens · Tamboerskloof · Oranjezicht · Vredehoek · Woodstock'],
            ['name'=>'Southern Suburbs','areas'=>'Claremont · Rondebosch · Newlands · Constantia · Bishopscourt · Wynberg'],
            ['name'=>'Northern Suburbs','areas'=>'Bellville · Durbanville · Parow · Brackenfell · Kraaifontein'],
            ['name'=>'West Coast','areas'=>'Table View · Milnerton · Bloubergstrand · Parklands · Sunningdale'],
            ['name'=>'Helderberg','areas'=>'Somerset West · Strand · Gordon&rsquo;s Bay'],
          ];
        @endphp
        <div class="areas-cols" role="list">
          @foreach($regions as $region)
            <div class="area-card" role="listitem">
              <div class="area-card__head">
                <span class="area-card__pin" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                </span>
                <h3 class="area-card__name">{{ $region['name'] }}</h3>
              </div>
              <p class="area-card__areas">{!! $region['areas'] !!}</p>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ── SECTION: FAQ ── --}}
    <section class="faq-section" id="faq" aria-labelledby="faq-heading">
      <div class="container faq-grid">
        <div class="faq-intro">
          <span class="section-overline">FAQ</span>
          <h2 class="section-h2" id="faq-heading">Questions, answered</h2>
          <p class="section-body">Everything you need to know before you book. Still unsure?</p>
          <a href="tel:+27823620297" class="faq-call" data-location="faq">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/></svg>
            Talk to us: 082 362 0297
          </a>
        </div>

        @php
          $faqs = [
            ['q'=>'Do you offer 24/7 emergency callouts?','a'=>'Yes. Burst pipes and gas leaks don&rsquo;t wait for business hours, and neither do we. Call 082 362 0297 any time, day or night, anywhere in the Cape Town metro.'],
            ['q'=>'Are you PIRB and SAQCC Gas registered?','a'=>'Both. That means we can legally and safely carry out plumbing and gas work &mdash; and issue a valid Certificate of Compliance. Most operators hold one registration; we hold both.'],
            ['q'=>'Will I get a Certificate of Compliance (CoC)?','a'=>'Every gas installation is tested, inspected and issued with a SAQCC Gas CoC. It&rsquo;s legally required in Cape Town, protects your insurance, and it&rsquo;s always included in your quote.'],
            ['q'=>'Do you charge a call-out fee?','a'=>'We give you an upfront, written fixed price before any work starts &mdash; parts, labour and VAT included. No surprise call-out penalties, even for after-hours emergencies.'],
            ['q'=>'How much does a gas geyser installation cost?','a'=>'It depends on the unit and your existing gas setup, but most Cape Town installations run R7,000&ndash;R10,500 including the CoC. We&rsquo;ll always give you an exact fixed quote first.'],
            ['q'=>'Do you guarantee your work?','a'=>'Yes &mdash; 12 months on all workmanship. If anything we installed or repaired develops a fault within the year, we come back and put it right at no charge.'],
          ];
        @endphp
        <div class="faq-list">
          @foreach($faqs as $faq)
            <details class="faq-item">
              <summary class="faq-question">
                <span>{{ $faq['q'] }}</span>
                <span class="faq-toggle" aria-hidden="true"></span>
              </summary>
              <div class="faq-answer"><p>{!! $faq['a'] !!}</p></div>
            </details>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ── SECTION 6: CTA + QUOTE FORM ── --}}
    <section class="cta-section" id="contact" aria-labelledby="cta-heading">
      <div class="container">
        <div class="cta-grid">

          <div class="cta-text">
            <span class="cta-overline">Get in Touch</span>
            <h2 class="cta-h2" id="cta-heading">Get a Free Quote — Today</h2>
            <p class="cta-body">Fill in the form and we'll call you straight back — day or night. Mid-emergency? Call us now and we'll get moving.</p>

            <ul class="cta-checklist" aria-label="Benefits">
              <li>Free assessment with no obligation to proceed</li>
              <li>Written fixed-price quote before any work starts</li>
              <li>PIRB &amp; SAQCC Gas certified technicians</li>
              <li>We serve all Cape Town suburbs</li>
              <li>12-month workmanship guarantee on all jobs</li>
            </ul>

            <div class="cta-direct-call">
              <p>Prefer to call directly?</p>
              <a href="tel:+27823620297" data-location="cta-section">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/>
                </svg>
                082 362 0297
              </a>
            </div>
          </div>

          <div class="quote-form-container">
            <h3 class="quote-form-title">Request a Free Quote</h3>
            <p class="quote-form-sub">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
              PIRB &amp; SAQCC Gas registered &middot; No obligation
            </p>

            <div id="form-network-error" style="display:none;padding:.875rem 1rem;background:var(--color-error-light);border:1px solid rgba(239,68,68,.35);border-radius:8px;color:#B91C1C;font-size:.875rem;margin-bottom:1rem;">
              Something went wrong. Call us on <a href="tel:+27823620297" style="color:var(--color-primary);font-weight:700;">082 362 0297</a> or try again.
            </div>

            <div class="form-success" id="form-success" role="alert" aria-live="polite">
              <div class="form-success__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.75l6 6 9-13.5"/></svg>
              </div>
              <h3>Quote Request Received!</h3>
              <p>We'll call you straight back &mdash; day or night. Mid-emergency? Call us now and we'll get moving.</p>
              <a href="tel:+27823620297" class="btn-primary" data-location="form-success" style="margin:0 auto;width:fit-content;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/></svg>
                Call Now
              </a>
            </div>

            <form id="quote-form" class="quote-form" novalidate aria-label="Quote request form">
              @csrf
              <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none;" aria-hidden="true">
                <input type="text" name="website" tabindex="-1" autocomplete="off">
              </div>

              <div class="form-row--2col">
                <div class="form-group">
                  <label for="f-name" class="form-label">Full Name <span aria-hidden="true" style="color:var(--color-error);">*</span></label>
                  <input type="text" id="f-name" name="name" class="form-input" placeholder="e.g. Sarah Johnson" autocomplete="name" required aria-required="true" aria-describedby="error-name">
                  <span class="form-error-msg" id="error-name" data-error="name" role="alert"></span>
                </div>
                <div class="form-group">
                  <label for="f-phone" class="form-label">Phone Number <span aria-hidden="true" style="color:var(--color-error);">*</span></label>
                  <input type="tel" id="f-phone" name="phone" class="form-input" placeholder="e.g. 082 000 0000" autocomplete="tel" required aria-required="true" aria-describedby="error-phone">
                  <span class="form-error-msg" id="error-phone" data-error="phone" role="alert"></span>
                </div>
              </div>

              <div class="form-group">
                <label for="f-email" class="form-label">Email Address <span style="color:var(--color-gray-500);font-weight:400;">(optional)</span></label>
                <input type="email" id="f-email" name="email" class="form-input" placeholder="you@email.com" autocomplete="email" aria-describedby="error-email">
                <span class="form-error-msg" id="error-email" data-error="email" role="alert"></span>
              </div>

              <div class="form-group">
                <label for="f-service" class="form-label">Service Required <span aria-hidden="true" style="color:var(--color-error);">*</span></label>
                <select id="f-service" name="service" class="form-input form-select" required aria-required="true" aria-describedby="error-service">
                  <option value="" disabled selected>Select a service…</option>
                  <option value="emergency-plumbing">Emergency Plumbing</option>
                  <option value="gas-geyser">Gas Geyser Installation</option>
                  <option value="leak-detection">Leak Detection</option>
                  <option value="drain-cleaning">Drain Cleaning & Unblocking</option>
                  <option value="pipe-repair">Pipe Repair & Replacement</option>
                  <option value="gas-installation">Gas Installation (hob, braai, line)</option>
                  <option value="other">Other / Not Sure</option>
                </select>
                <span class="form-error-msg" id="error-service" data-error="service" role="alert"></span>
              </div>

              <div class="form-group">
                <label for="f-message" class="form-label">Brief Description <span style="color:var(--color-gray-500);font-weight:400;">(optional)</span></label>
                <textarea id="f-message" name="message" class="form-input form-textarea" placeholder="e.g. Kitchen drain blocked, also has a dripping tap. Based in Sea Point, Cape Town."></textarea>
              </div>

              <button type="submit" class="btn-primary btn-primary--full" data-submit-btn>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-btn-loader style="display:none;animation:spin .8s linear infinite;">
                  <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                </svg>
                <span data-btn-text>Get My Free Quote</span>
              </button>

              <p class="form-privacy-note">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="display:inline;vertical-align:middle;margin-right:4px;"><path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                Your details are private. We never share or sell your information.
              </p>
            </form>
          </div>

        </div>
      </div>
    </section>

  </main>

  {{-- ════════════════════════════════════════════════════════
       FOOTER
       ════════════════════════════════════════════════════════ --}}
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">

        <div>
          <span style="font-family:'Plus Jakarta Sans',sans-serif;font-size:1.375rem;font-weight:800;display:block;margin-bottom:0.25rem;">
            <span style="color:#fff;">Ribbon</span><span style="color:#F5936A;">&nbsp;Plumbing</span>
          </span>
          <p class="footer-tagline">& Gas Heating — Cape Town</p>
          <p class="footer-desc">PIRB &amp; SAQCC Gas certified plumbing and gas installation. Honest pricing. Fast service. Guaranteed work across Cape Town.</p>
          <div class="footer-social" aria-label="Social media">
            <a href="#" aria-label="Follow on Facebook" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="#" aria-label="Follow on Instagram" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a href="https://wa.me/270000000000" aria-label="Chat on WhatsApp" rel="noopener noreferrer" data-location="footer">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </a>
          </div>
        </div>

        <div>
          <p class="footer-heading">Services</p>
          <ul class="footer-links">
            <li><a href="#services">Emergency Plumbing</a></li>
            <li><a href="#services">Gas Geyser Installation</a></li>
            <li><a href="#services">Leak Detection</a></li>
            <li><a href="#services">Drain Cleaning</a></li>
            <li><a href="#services">Pipe Repair</a></li>
            <li><a href="#services">Gas Installation</a></li>
          </ul>
        </div>

        <div>
          <p class="footer-heading">Cape Town Areas</p>
          <ul class="footer-links">
            <li><a href="#contact">Atlantic Seaboard</a></li>
            <li><a href="#contact">City Bowl</a></li>
            <li><a href="#contact">Southern Suburbs</a></li>
            <li><a href="#contact">Northern Suburbs</a></li>
            <li><a href="#contact">West Coast</a></li>
            <li><a href="#contact">Helderberg</a></li>
          </ul>
        </div>

        <div>
          <p class="footer-heading">Contact</p>
          <address style="font-style:normal;">
            <div class="footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/></svg>
              <a href="tel:+27823620297" data-location="footer">082 362 0297</a>
            </div>
            <div class="footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
              <a href="mailto:info@ribbonplumbing.co.za">info@ribbonplumbing.co.za</a>
            </div>
            <div class="footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
              Cape Town, Western Cape, South Africa
            </div>
          </address>
          <div style="margin-top:1.5rem;">
            <p class="footer-heading" style="font-size:.75rem;margin-bottom:.5rem;">HOURS</p>
            <p style="font-size:.875rem;line-height:1.8;color:var(--text-on-dark-muted);">
              Mon – Fri: 7:00am – 5:00pm<br>
              Saturday: 8:00am – 1:00pm<br>
              <span style="color:var(--color-accent);">Emergencies: 24/7</span>
            </p>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Ribbon Plumbing And Gas Heating. All rights reserved.</p>
        <nav class="footer-legal" aria-label="Legal">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">POPIA Compliance</a>
        </nav>
        <p style="display:flex;align-items:center;gap:.375rem;font-size:.75rem;">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
          PIRB Reg. No. XXXXX &nbsp;·&nbsp; SAQCC Gas Reg. No. XXXXX
        </p>
      </div>
    </div>
  </footer>

  {{-- Mobile sticky bottom bar --}}
  <div class="mobile-cta-bar" role="navigation" aria-label="Quick contact">
    <a href="tel:+27823620297" class="mobile-cta-bar__call" data-location="mobile-bar">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z"/>
      </svg>
      Call Now
    </a>
    <a href="https://wa.me/270000000000?text=Hi%2C%20I%20need%20a%20plumbing%20quote%20in%20Cape%20Town" class="mobile-cta-bar__whatsapp" data-location="mobile-bar" target="_blank" rel="noopener noreferrer">
      <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      WhatsApp
    </a>
  </div>

  {{-- WhatsApp FAB — desktop only --}}
  <a href="https://wa.me/270000000000?text=Hi%2C%20I%20need%20a%20plumbing%20quote%20in%20Cape%20Town" class="whatsapp-fab" aria-label="Chat on WhatsApp" target="_blank" rel="noopener noreferrer" data-location="fab">
    <svg viewBox="0 0 24 24" fill="white" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

  <style>@keyframes spin { to { transform: rotate(360deg); } }</style>

</body>
</html>

