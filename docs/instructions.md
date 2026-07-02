# Ribbon Plumbing And Gas Heating — AI Agent Operating Manual
> Read this before touching any file in this repository.
> Source of truth: `business.md` (commercial), `design.md` (visual), `seo.md` (search), `memory.md` (state).

---

## 1. PROJECT OVERVIEW

### What This Project Is
A lead-generation website for **Ribbon Plumbing And Gas Heating**, a licensed plumbing and gas installation company based in **Cape Town, Western Cape, South Africa**.

### Why It Exists
To convert online visitors into phone calls, WhatsApp messages, and quote requests. Every design decision, every line of copy, every component exists to serve this goal.

### This Is NOT
- A portfolio website
- A brochure site
- A brand awareness campaign
- An e-commerce store

### Business Objectives
1. Generate inbound phone calls from people with plumbing or gas emergencies
2. Generate quote request form submissions for planned work
3. Build Google ranking for Cape Town plumbing and gas keywords
4. Establish trust and credibility for a new business (launched late 2024)

### Conversion Objectives
| Priority | Action | Metric |
|---|---|---|
| 1 | Phone call click | >8% of visitors |
| 2 | WhatsApp message | >4% of visitors |
| 3 | Form submission | >3% of visitors |

### Success Metrics
- Google Maps 3-pack ranking for "plumber Cape Town" within 6 months
- 50+ Google reviews at 4.8+ within 6 months
- Under 50% bounce rate
- Page load time under 2.5s on mobile (LCP)

---

## 2. BUSINESS CONTEXT

### Company
**Ribbon Plumbing And Gas Heating** — Cape Town, Western Cape, South Africa

### What They Do
- Plumbing: Emergency, burst pipes, leak detection, drain cleaning, geyser repair/replacement, pipe repairs, bathroom/kitchen, commercial
- Gas: Gas geyser installation, gas line installation, gas appliance installation, gas CoC (Certificate of Compliance), gas system repairs
- Unique differentiator: Both PIRB (plumbing) and SAQCC Gas (gas installation) certified under one company

### Target Audience (Priority Order)
1. Homeowners with plumbing or gas emergencies (call-now intent)
2. Homeowners planning upgrades (gas geyser, new bathroom)
3. Property managers and body corporates
4. Airbnb hosts in Cape Town
5. Commercial clients (small businesses, sectional title schemes)

### Service Areas
Cape Town metro: Atlantic Seaboard (Sea Point, Green Point, Camps Bay), Southern Suburbs (Claremont, Rondebosch, Wynberg, Constantia), Northern Suburbs (Bellville, Durbanville, Table View, Milnerton), City Bowl, Helderberg (Somerset West, Strand).

### USP
The only Cape Town contractor combining PIRB-registered plumbing + SAQCC Gas-certified installations under one team. Fixed prices quoted before starting. 12-month workmanship guarantee. CoC issued for all gas work.

### Customer Pain Points
- Plumbers who don't show up or give vague ETAs
- Surprise invoices (quoted one price, charged another)
- Unregistered operators who can't issue CoCs
- Single-trade operators (plumbing OR gas, not both)
- Cowboys who don't clean up after themselves

### Brand Voice
Direct, calm, professional, locally grounded. Never corporate. Never jargon-heavy. Say "geyser" not "water heater". Say "gas CoC" in full. South African English throughout.

---

## 3. TECHNICAL CONTEXT

### Primary Stack
- **Language**: PHP 8.x
- **Server**: Apache via WAMP64 (local dev: C:\wamp64_3.3.4\www\projects\ribbonPlumbing)
- **Templating**: PHP includes (header.php, footer.php, section files)
- **Styling**: Single compiled CSS file with CSS custom properties (no preprocessor required)
- **JavaScript**: Vanilla JS only — no framework, no jQuery
- **Forms**: PHP mail handler (PHPMailer + SMTP) — file at `/actions/submit-form.php`
- **Icons**: Heroicons v2 SVG — always inline, never icon fonts
- **Fonts**: Google Fonts — Sora (display), Plus Jakarta Sans (headings), Inter (body)

### Folder Structure
```
/ribbonPlumbing/
  ├── index.php                 # Main homepage
  ├── includes/
  │   ├── head.php              # <head> — meta, CSS, preconnects
  │   ├── header.php            # Sticky nav component
  │   ├── footer.php            # Footer component
  │   └── schema.php            # JSON-LD structured data
  ├── sections/
  │   ├── hero.php
  │   ├── trust-bar.php
  │   ├── services.php
  │   ├── why-choose-us.php
  │   ├── reviews.php
  │   ├── cta-form.php
  │   └── whatsapp-fab.php
  ├── pages/                    # Individual service and location pages
  │   ├── emergency-plumbing.php
  │   ├── geyser-repair.php
  │   ├── gas-installation.php
  │   ├── blocked-drains.php
  │   ├── leak-detection.php
  │   └── locations/            # Suburb landing pages
  ├── css/
  │   ├── critical.css          # Above-fold only (inlined via PHP)
  │   └── main.css              # Full stylesheet
  ├── js/
  │   └── main.js               # Sticky nav, mobile menu, form, scroll
  ├── images/
  │   ├── hero-768.webp
  │   ├── hero-1200.webp
  │   ├── hero-1920.webp
  │   ├── logo.svg
  │   ├── logo-white.svg
  │   └── features/
  ├── actions/
  │   └── submit-form.php       # Form handler
  ├── business.md               # Business intelligence (source of truth)
  ├── design.md                 # Visual design system
  ├── seo.md                    # SEO strategy
  ├── instructions.md           # This file
  └── memory.md                 # Agent memory
```

### Routing
- No framework router. PHP files map directly to URLs.
- Suburb pages: `/plumber-sea-point.php` → `pages/locations/sea-point.php`
- Friendly URLs via `.htaccess` rewrite rules if needed.

### State Management
None. This is a static-like PHP site. No sessions, no auth, no database required for MVP.

### API Integrations
- **Email**: PHPMailer via SMTP (form submissions)
- **Analytics**: Google Analytics 4 (GA4) via gtag.js — deferred, non-blocking
- **Maps**: Not embedded in MVP (link to Google Maps for address)

### Forms
- Single quote request form on homepage CTA section and contact page
- Short emergency form on emergency plumbing page
- All forms: honeypot anti-spam (hidden `website` field), client-side validation, AJAX submission, success/error states
- Required fields: Name, Phone, Service (dropdown). Email optional.

### Analytics Events (Required)
```javascript
// Track in GA4
phone_call_click      // Any tel: link click
whatsapp_click        // Any WhatsApp link click
quote_form_submit     // Successful form submission
```

---

## 4. DESIGN RULES

> Full specification in `design.md`. These are the non-negotiable rules agents must follow.

### Color System
```css
--color-primary:       #1A3A5C;   /* Navy blue — headings, nav, trust bar */
--color-accent:        #F97316;   /* Orange — ALL CTAs, active states */
--color-accent-dark:   #EA6C0A;   /* Orange hover */
--color-gray-900:      #0F172A;   /* Heading text */
--color-gray-700:      #334155;   /* Body text */
--color-gray-500:      #64748B;   /* Captions, meta */
--color-gray-200:      #E2E8F0;   /* Borders */
--bg-light:            #F8FAFF;   /* Alternating section backgrounds */
--bg-dark:             #0F2340;   /* CTA section, footer */
--color-success:       #10B981;   /* Checkmarks, confirmations */
--color-warning:       #F59E0B;   /* Star ratings */
```

**Rules**:
- ALL primary CTAs use `--color-accent` (#F97316) — no exceptions
- Never use `color-accent` for body text or heading text
- Dark sections use `--bg-dark` (#0F2340)
- Never introduce new colors without updating `design.md` and `memory.md`

### Typography System
```css
/* Display / H1 */   font: 800 clamp(2.5rem,5vw,4rem) 'Sora', sans-serif;
/* H2 */             font: 700 clamp(1.875rem,3.5vw,2.75rem) 'Plus Jakarta Sans', sans-serif;
/* H3 */             font: 600 clamp(1.25rem,2vw,1.5rem) 'Plus Jakarta Sans', sans-serif;
/* Body */           font: 400 1rem/1.6 'Inter', sans-serif;
/* Overline */       font: 600 0.8125rem/1.5 'Inter'; text-transform: uppercase; letter-spacing: 0.12em;
```

**Rules**:
- Minimum body text: 16px (14px for captions only)
- All headings above 24px: `letter-spacing: -0.02em` or tighter
- Max line length: 70ch body, 55ch card copy
- Never skip heading levels (H1 → H2 → H3)

### Spacing System
```css
--section-padding-y: clamp(4rem, 8vw, 6rem);
--card-padding:      clamp(1.25rem, 3vw, 1.75rem);
--radius-sm:  4px; --radius-md: 8px; --radius-lg: 12px; --radius-xl: 20px;
```

### Component Patterns
- **Buttons**: Always `min-height: 52px`. Primary = orange. Secondary = outlined.
- **Cards**: `border-radius: 12px`, `box-shadow: var(--shadow-card)`, hover lifts 4px
- **Section alternation**: White → Light (`#F8FAFF`) → White → Dark → Dark (footer)
- **Section headers**: Always Overline (uppercase, orange) → H2 → optional body paragraph
- **Icons**: 28px in 56px container on cards, always `aria-hidden="true"` when decorative

### Breakpoints
```
Mobile:  < 768px     Tablet: 768–1023px     Desktop: ≥ 1024px
```
Always build mobile-first. Test on 375px minimum.

---

## 5. DEVELOPMENT STANDARDS

### Code Quality
- **PHP**: Clean includes, no business logic in view files
- **CSS**: Use custom properties for all colors, spacing, typography — no hardcoded hex values in component CSS
- **JS**: Vanilla only, no dependencies. Functions named descriptively. No inline event handlers in HTML.
- **HTML**: Semantic tags (`<header>`, `<main>`, `<section>`, `<article>`, `<footer>`, `<nav>`)

### Naming Conventions
```
PHP files:        kebab-case.php         (service-card.php)
CSS classes:      BEM — block__element--modifier (service-card__title)
JS functions:     camelCase              (initMobileMenu)
JS variables:     camelCase              (isMenuOpen)
Image files:      kebab-case             (hero-1200.webp)
CSS variables:    --kebab-case           (--color-accent)
```

### Component Structure Rules
Every reusable component must:
1. Live in `sections/` (page sections) or `includes/` (global components)
2. Accept data via PHP variables passed before include
3. Have its CSS in `main.css` under a clearly labeled comment block
4. Be referenced in `memory.md` component registry

### Accessibility Requirements (Non-Negotiable)
- All interactive elements: minimum 44×44px touch target
- All images: meaningful `alt` text (decorative icons: `aria-hidden="true"`)
- All forms: `<label>` linked to input via `for`/`id`; errors announced via `aria-live="polite"`
- Keyboard: Tab order follows DOM; skip link at top of page; focus-visible style on all interactive elements
- Color contrast: minimum 4.5:1 for body text, 3:1 for large/bold text (see `design.md` section 11 for verified pairs)
- Mobile menu: trapped focus when open; `aria-expanded` on toggle button; `aria-hidden` on drawer when closed
- Reduced motion: wrap all animations in `@media (prefers-reduced-motion: reduce)`

### SEO Requirements Per Page
- One `<h1>` per page — never zero, never two
- `<title>` max 60 characters; includes primary keyword + location + brand
- `<meta name="description">` max 155 characters; includes CTA language
- All images: `width` and `height` attributes set (prevents CLS)
- Hero image: `loading="eager" fetchpriority="high"` with `<link rel="preload">`
- All other images: `loading="lazy" decoding="async"`
- Internal links: use descriptive anchor text, never "click here"
- Schema: LocalBusiness + PlumbingService JSON-LD on every page (in `schema.php`)

### Performance Requirements
| Metric | Target |
|---|---|
| LCP | < 2.5s |
| INP | < 200ms |
| CLS | < 0.1 |
| Total page weight | < 500KB initial load |
| Images | WebP format, srcset for 768/1200/1920 |
| Google Fonts | `display=swap`, preconnect |
| Third-party JS | `async` or `defer` always |
| Critical CSS | Inlined in `<head>` via PHP |

---

## 6. CONVERSION RULES

### CTA Placement (Required on Every Page)
1. **Sticky navigation**: Phone number (right side, desktop) + "Get Free Quote" button
2. **Hero section**: Primary CTA = Call Now. Secondary CTA = Get Free Quote.
3. **After services section**: "Have an emergency? Call us now" inline text CTA
4. **CTA/contact section**: Full form + phone number + WhatsApp link
5. **Footer**: Phone number, WhatsApp, email all clickable
6. **Mobile**: Sticky bottom bar (Call + WhatsApp) always visible

### Trust Signal Requirements
Every page must display (in nav, hero, or trust bar within first screenful):
- Google rating + review count
- PIRB Registration badge
- SAQCC Gas Registration badge
- "12-Month Guarantee" indicator

### Form Requirements
- Required: Name, Phone, Service dropdown
- Optional: Email, Message
- Honeypot: `<input name="website" style="display:none">` — reject server-side if populated
- Submit button: Orange (`--color-accent`), full width on mobile, min 56px height
- Success state: Hide form, show thank-you with phone + WhatsApp links
- Error state: Red border on invalid fields, error message below each, scroll to first error

### Mobile Sticky Bottom Bar (Required)
```html
<!-- Must appear on all mobile pages. Cannot be removed. -->
<div class="mobile-cta-bar">
  <a href="tel:+27XXXXXXXXXX" class="mobile-cta-bar__call">Call Now</a>
  <a href="https://wa.me/27XXXXXXXXXX" class="mobile-cta-bar__whatsapp">WhatsApp</a>
</div>
```

### WhatsApp Floating Button (Required)
- Always visible on desktop (bottom-right, above footer scroll position)
- Hidden on mobile (replaced by sticky bottom bar)
- Pre-filled message: `?text=Hi%20Ribbon%20Plumbing%2C%20I%20need%20a%20quote`

---

## 7. AI AGENT RULES

### Before Starting Any Task
1. Read `memory.md` — check what components exist, what decisions have been made
2. Read the relevant section of `design.md` for the component/section you're touching
3. Read the relevant section of `business.md` for copy/messaging guidance
4. Check `seo.md` if creating or editing any page that appears in site architecture

### Before Creating a New Page
- [ ] Check `memory.md` → Pages Registry: does this page already exist?
- [ ] Confirm the URL structure matches `seo.md` URL conventions
- [ ] Confirm the page has an `<h1>` that matches the target keyword
- [ ] Confirm the page includes schema markup via `schema.php`
- [ ] Confirm the page includes all required CTAs (phone, WhatsApp, form)
- [ ] Add the new page to `memory.md` → Pages Registry

### Before Creating a New Component
- [ ] Check `memory.md` → Components Registry: does something similar already exist?
- [ ] Check `design.md` for exact component specification if it's a design-system component
- [ ] Name the component file using kebab-case
- [ ] Add CSS in `main.css` under a labeled section comment
- [ ] Add to `memory.md` → Components Registry

### Before Modifying a Form
- [ ] Check current form has honeypot field
- [ ] Ensure validation logic in JS is preserved
- [ ] Ensure server-side handler in `actions/submit-form.php` still matches field names
- [ ] Test success and error states after change

### Before Updating SEO Elements
- [ ] Check `seo.md` for target keyword for this page
- [ ] Confirm `<title>` stays under 60 characters
- [ ] Confirm `<meta description>` stays under 155 characters
- [ ] Confirm H1 contains primary keyword
- [ ] Do not change the URL of any existing published page (breaks SEO)

### Agents Must Never
- Add a color not defined in the CSS custom properties (`:root` block in `main.css`)
- Use a font not in the Google Fonts link (Sora, Plus Jakarta Sans, Inter only)
- Remove any accessibility attribute (`aria-*`, `role`, `alt`, `for`, `id` on form elements)
- Change the URL structure of any existing page
- Remove the mobile sticky bottom bar
- Remove the WhatsApp floating button
- Skip the honeypot field on any form
- Use `!important` in CSS except for the single `.mobile-cta-bar { display: none !important; }` exception
- Hard-code hex colors in component CSS — always use custom property tokens
- Add jQuery or any JS library
- Change `display=swap` on Google Fonts link

### Agents Should Always
- Reuse existing PHP includes instead of duplicating code
- Test their work mentally at 375px (iPhone SE) and 1280px (desktop)
- Add new components to `memory.md`
- Write semantic HTML (no `<div>` where a semantic tag exists)
- Ensure all new images have explicit `width` and `height` HTML attributes

---

## 8. DEFINITION OF DONE

A task is complete when the changed or created component/page:

- [ ] Renders correctly at 375px, 768px, and 1280px
- [ ] Passes basic accessibility: all interactive elements have accessible names, focus styles visible
- [ ] Contains no hardcoded colors or fonts outside CSS custom properties
- [ ] Has correct semantic HTML structure (no heading skips, semantic landmarks)
- [ ] SEO-critical pages: correct `<title>`, `<meta description>`, `<h1>`, schema markup
- [ ] All phone numbers link via `tel:`, all WhatsApp links via `wa.me`
- [ ] Images have `alt`, `width`, `height` attributes; use WebP format
- [ ] Form pages: honeypot present, validation working, success/error states functioning
- [ ] `memory.md` updated with any new pages or components added
- [ ] PHP syntax valid (no parse errors; test with `php -l filename.php`)
- [ ] No unused CSS classes or JS functions introduced

---

*This document is the law. Do not deviate without updating it first.*
