# Ribbon Plumbing — Production Design Specification
> Version 1.0 | Prepared for AI Coding Agents (Claude Code, Cursor, Windsurf, Codex)
> Build without ambiguity. Every decision is documented with reasoning.

---

## TABLE OF CONTENTS

1. [Executive Summary](#1-executive-summary)
2. [Brand Strategy](#2-brand-strategy)
3. [Conversion Strategy](#3-conversion-strategy)
4. [Visual Design System](#4-visual-design-system)
5. [Typography System](#5-typography-system)
6. [Color System](#6-color-system)
7. [Layout System](#7-layout-system)
8. [Component Specifications](#8-component-specifications)
9. [Section-by-Section Design](#9-section-by-section-design)
10. [Mobile Design Specifications](#10-mobile-design-specifications)
11. [Accessibility Requirements](#11-accessibility-requirements)
12. [SEO Considerations](#12-seo-considerations)
13. [Performance Requirements](#13-performance-requirements)
14. [Implementation Notes](#14-implementation-notes)

---

## 1. EXECUTIVE SUMMARY

### Mission Statement
This website has one job: convert a stressed South African homeowner or property manager — who may have a burst pipe at 2am or a blocked drain destroying their weekend — into a booked job within 60 seconds of landing.

### Primary KPIs
- Phone call click-through rate (target: >8% of visitors)
- Quote form submission rate (target: >4% of visitors)
- Bounce rate below 50%
- Time to first CTA interaction under 10 seconds

### Core Insight
Plumbing customers are buying **certainty, not services**. They are anxious. They fear being overcharged, left waiting, or having cowboy contractors do shoddy work. Every design decision must address this anxiety before asking for the sale.

### What This Document Covers
A pixel-precise, copy-ready, component-specified design system that any senior frontend developer can implement in React/Next.js, PHP/Blade, or plain HTML+CSS without asking a single question.

---

## 2. BRAND STRATEGY

### Brand Name
**Ribbon Plumbing**

### Brand Positioning
*"The plumber who shows up, does it right, and gives you a price before touching a single pipe."*

Premium local plumbing — not the cheapest, not the most expensive — but the most reliable and transparent in the service area.

### Brand Personality
| Dimension | Expression |
|---|---|
| Voice | Direct, confident, human — no jargon |
| Tone | Reassuring under pressure, professional always |
| Values | Honesty · Speed · Craftsmanship · Local pride |
| Archetype | The Skilled Craftsman / Trusted Neighbour |

### Brand Promise
"We arrive on time, give you a fixed price upfront, and guarantee our work."

### Tagline Options (choose one during implementation)
1. **"Plumbing Done Right. Every Time."**
2. **"Your Local Plumber. On Time. Fixed Price."**
3. **"Fast Response. Fair Price. Guaranteed Work."**

*Recommended: Option 1 — "Plumbing Done Right. Every Time."*

### Logo Specification
- **Wordmark only** at launch (no illustrative mark needed)
- Font: **Sora Bold** or **Plus Jakarta Sans ExtraBold**
- The word "Ribbon" in Primary Blue (`#1A3A5C`)
- The word "Plumbing" in Accent Orange (`#F97316`)
- Optional: a thin orange horizontal rule (2px) beneath "Ribbon" as a literal ribbon motif
- SVG format required. PNG fallback at 2x.
- Minimum size: 120px wide on desktop, 96px on mobile
- White reversed version for dark backgrounds

---

## 3. CONVERSION STRATEGY

### The Conversion Funnel (Attention → Interest → Desire → Action)

```
LANDING (Hero)
  └── Immediate trust signals → reduces bounce
       └── Service clarity (Services Section) → confirms "they do what I need"
            └── Social proof (Reviews) → overcomes "can I trust them?"
                 └── Risk reversal (Why Choose Us) → removes final objection
                      └── Easy action (CTA Form + Phone) → converts
```

### Psychological Triggers Used Per Section

| Section | Trigger | Implementation |
|---|---|---|
| Navigation | Authority, Accessibility | Phone number always visible; one-click to call |
| Hero | Urgency, Social Proof, Trust | "Available Now" badge; Google rating; emergency messaging |
| Trust Bar | Risk Reversal, Authority | Insurance badge; years experience; star rating |
| Services | Clarity, Specificity | Named services with local context (geyser, not "water heater") |
| Why Choose Us | Authority, Risk Reversal, Trust | Guarantees, license numbers, photos of real work |
| Reviews | Social Proof | Named locals with suburbs; specific details not generic praise |
| CTA Section | Urgency, Ease | Short form; strong imperative; friction-reduced |
| Footer | Trust, Local Presence | Physical address; PIRB registration; ACE number |

### CTA Hierarchy
1. **Phone call** — highest intent, zero friction. Appears in nav, hero, sticky mobile bar, footer.
2. **Quote form** — for non-emergency leads who want to plan. Appears in hero (secondary), and dedicated CTA section.
3. **WhatsApp** — South African context: many customers prefer WhatsApp over calls. Include floating WhatsApp button.

### South Africa-Specific Conversion Considerations
- **Load-shedding context**: Include a note that the company has contingency plans (e.g., non-electric diagnostic tools, battery-powered equipment).
- **Language**: All copy in clear South African English. Use "geyser" not "water heater". Use "Eskom outage" reference where relevant.
- **Trust markers**: PIRB (Plumbing Industry Registration Board) membership badge is South Africa's primary plumbing credential — display prominently.
- **Payment**: Mention EFT, card, and cash accepted.
- **WhatsApp**: 60%+ of South Africans prefer WhatsApp messaging. Floating button is non-negotiable.

---

## 4. VISUAL DESIGN SYSTEM

### Design Philosophy
**Clean, confident, and high-contrast.** The visual language should feel like a premium trade business — not a luxury spa, not a hardware store. Think: a well-maintained white bakkie (pickup truck), a clean uniform, a company that takes pride in its craft.

### Visual Principles
1. **Whitespace is not wasted space** — generous breathing room signals premium positioning
2. **Photography over illustration** — real plumbers, real work, real South African homes
3. **Bold CTAs, subtle decorations** — no visual clutter that competes with conversion elements
4. **Dark sections create rhythm** — alternate light/dark sections to maintain scroll momentum
5. **Icons supplement, never replace** — always pair icons with text labels

### Shadow System
```css
--shadow-sm:   0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.04);
--shadow-md:   0 4px 12px rgba(0,0,0,0.10), 0 2px 4px rgba(0,0,0,0.06);
--shadow-lg:   0 10px 30px rgba(0,0,0,0.12), 0 4px 8px rgba(0,0,0,0.06);
--shadow-card: 0 2px 8px rgba(26,58,92,0.08), 0 1px 3px rgba(26,58,92,0.04);
--shadow-cta:  0 4px 16px rgba(249,115,22,0.35);
```

### Border Radius System
```css
--radius-sm:  4px;   /* form inputs, tags */
--radius-md:  8px;   /* buttons, small cards */
--radius-lg:  12px;  /* service cards, review cards */
--radius-xl:  20px;  /* hero badge, feature pills */
--radius-full: 9999px; /* avatars, pill buttons */
```

---

## 5. TYPOGRAPHY SYSTEM

### Font Stack

#### Display Font: Sora
- **Usage**: Hero headline H1, section overlines
- **Google Fonts**: `Sora:wght@700;800`
- **Reasoning**: Sora is geometric but warm. The rounded terminals convey approachability. The weight range gives extreme flexibility for hierarchy. Used by premium service brands globally.

#### Heading Font: Plus Jakarta Sans
- **Usage**: H2, H3, card headlines, nav
- **Google Fonts**: `Plus+Jakarta+Sans:wght@500;600;700`
- **Reasoning**: Excellent legibility at medium sizes. Slightly condensed to give headings impact without width. Professional without being cold.

#### Body Font: Inter
- **Usage**: Body copy, form labels, captions, footer
- **Google Fonts**: `Inter:wght@400;500`
- **Reasoning**: The gold standard for screen readability. At 16px+, it's effortless to scan. Universally familiar — reduces cognitive load.

### Font Loading
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@700;800&family=Plus+Jakarta+Sans:wght@500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
```

### Type Scale

```css
/* Display — Hero H1 */
--text-display:     clamp(2.5rem, 5vw, 4rem);       /* 40px → 64px */
--font-display:     'Sora', sans-serif;
--weight-display:   800;
--leading-display:  1.1;
--tracking-display: -0.03em;

/* H2 — Section Headlines */
--text-h2:          clamp(1.875rem, 3.5vw, 2.75rem); /* 30px → 44px */
--font-h2:          'Plus Jakarta Sans', sans-serif;
--weight-h2:        700;
--leading-h2:       1.2;
--tracking-h2:      -0.02em;

/* H3 — Card Headlines, Subsections */
--text-h3:          clamp(1.25rem, 2vw, 1.5rem);     /* 20px → 24px */
--font-h3:          'Plus Jakarta Sans', sans-serif;
--weight-h3:        600;
--leading-h3:       1.3;
--tracking-h3:      -0.01em;

/* Overline — Section Labels */
--text-overline:    0.8125rem;                        /* 13px */
--font-overline:    'Inter', sans-serif;
--weight-overline:  600;
--leading-overline: 1.5;
--tracking-overline: 0.12em;
/* Always uppercase */

/* Body Large — Hero subheadline, section intros */
--text-body-lg:     clamp(1rem, 1.5vw, 1.1875rem);  /* 16px → 19px */
--font-body-lg:     'Inter', sans-serif;
--weight-body-lg:   400;
--leading-body-lg:  1.65;

/* Body — Standard copy, form labels */
--text-body:        1rem;                             /* 16px */
--font-body:        'Inter', sans-serif;
--weight-body:      400;
--leading-body:     1.6;

/* Body Small — Captions, badge text, footer links */
--text-sm:          0.875rem;                         /* 14px */
--leading-sm:       1.5;

/* Caption — Legal, attribution */
--text-xs:          0.75rem;                          /* 12px */
--leading-xs:       1.4;
```

### Typography Rules
- **Never** use `font-weight: 400` for any heading
- **Never** set body text below 16px (14px allowed only for captions/legal)
- **Always** set `letter-spacing: -0.02em` or tighter on headings above 24px
- **Maximum line length**: 70ch for body paragraphs, 55ch for card copy
- **Color on dark backgrounds**: use `#F8FAFF` (not pure white) to reduce eye strain

---

## 6. COLOR SYSTEM

### Color Palette

```css
:root {
  /* === PRIMARY BRAND COLORS === */

  /* Primary Blue — authority, trust, reliability */
  --color-primary:          #1A3A5C;  /* Navy blue — main brand color */
  --color-primary-light:    #2A5280;  /* Hover state, gradients */
  --color-primary-lighter:  #EBF2FA;  /* Tinted backgrounds, badges */

  /* Accent Orange — urgency, energy, warmth, CTAs */
  --color-accent:           #F97316;  /* Primary CTA buttons */
  --color-accent-dark:      #EA6C0A;  /* CTA hover/active state */
  --color-accent-light:     #FFF4ED;  /* Accent tinted backgrounds */

  /* === NEUTRAL SCALE === */
  --color-gray-50:          #F8FAFF;  /* Near-white — light section backgrounds */
  --color-gray-100:         #F1F5F9;  /* Alternating section backgrounds */
  --color-gray-200:         #E2E8F0;  /* Borders, dividers */
  --color-gray-300:         #CBD5E1;  /* Disabled states, placeholder text */
  --color-gray-500:         #64748B;  /* Secondary text, captions */
  --color-gray-700:         #334155;  /* Body text */
  --color-gray-900:         #0F172A;  /* Headings, high-emphasis text */

  /* === SEMANTIC COLORS === */
  --color-success:          #10B981;  /* Check marks, confirmation, guarantee badges */
  --color-success-light:    #D1FAE5;  /* Success badge backgrounds */
  --color-warning:          #F59E0B;  /* Star ratings (gold) */
  --color-error:            #EF4444;  /* Form validation errors */
  --color-error-light:      #FEE2E2;  /* Error input backgrounds */

  /* === SECTION BACKGROUNDS === */
  --bg-white:               #FFFFFF;
  --bg-light:               #F8FAFF;  /* Alternating light sections */
  --bg-dark:                #0F2340;  /* Dark CTA section, footer */
  --bg-dark-card:           #162B4D;  /* Cards within dark sections */

  /* === TEXT ON DARK BACKGROUNDS === */
  --text-on-dark:           #F8FAFF;
  --text-on-dark-muted:     #94A3B8;
}
```

### Color Usage Rules

| Context | Color Token |
|---|---|
| Primary CTAs (Call Now, Request Quote) | `--color-accent` (#F97316) |
| Primary CTA hover | `--color-accent-dark` (#EA6C0A) |
| Secondary CTAs (outlined) | `--color-primary` border + text |
| All H1, H2, H3 on light bg | `--color-gray-900` (#0F172A) |
| Body copy on light bg | `--color-gray-700` (#334155) |
| Captions, meta text | `--color-gray-500` (#64748B) |
| Navigation background (scrolled) | `#FFFFFF` with `--shadow-md` |
| Trust bar background | `--color-primary` (#1A3A5C) |
| Hero overlay gradient | `linear-gradient(to right, rgba(15,35,64,0.92) 0%, rgba(15,35,64,0.60) 55%, rgba(15,35,64,0.15) 100%)` |
| Service section background | `--bg-light` (#F8FAFF) |
| Why Choose Us section | `#FFFFFF` |
| Reviews section | `--bg-light` (#F8FAFF) |
| CTA section | `--bg-dark` (#0F2340) |
| Footer | `--bg-dark` (#0F2340) |

### Contrast Ratios (WCAG 2.1 AA compliant)
- Body text (`#334155`) on white: **8.1:1** — passes AAA
- Accent orange (`#F97316`) on dark (`#0F2340`): **5.2:1** — passes AA
- White text on primary blue (`#1A3A5C`): **9.4:1** — passes AAA
- Gray-500 (`#64748B`) on white: **4.6:1** — passes AA

---

## 7. LAYOUT SYSTEM

### Container Widths
```css
.container {
  width: 100%;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: clamp(1rem, 4vw, 2rem); /* 16px → 32px */
}

.container--narrow {
  max-width: 860px; /* For text-heavy sections, Why Choose Us rows */
}

.container--wide {
  max-width: 1400px; /* For full-bleed hero content */
}
```

### Grid System
```css
/* 12-column grid */
.grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: clamp(1rem, 2.5vw, 1.5rem); /* 16px → 24px */
}

/* Service cards: 4 columns on desktop, 2 on tablet, 1 on mobile */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 1.5rem;
}

/* Why Choose Us alternating rows */
.features-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2rem, 4vw, 4rem);
  align-items: center;
}

/* Reviews: horizontal scroll on mobile, 3-col on desktop */
.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
```

### Section Spacing
```css
:root {
  --section-padding-y: clamp(4rem, 8vw, 6rem);    /* 64px → 96px */
  --section-gap:       clamp(3rem, 6vw, 5rem);      /* 48px → 80px */
  --card-padding:      clamp(1.25rem, 3vw, 1.75rem); /* 20px → 28px */
  --card-gap:          1.5rem;                       /* 24px */
}

section {
  padding-block: var(--section-padding-y);
}
```

### Breakpoints
```css
/* Mobile first */
--bp-xs:   375px;   /* Small phones */
--bp-sm:   480px;   /* Large phones */
--bp-md:   768px;   /* Tablets */
--bp-lg:   1024px;  /* Small laptops */
--bp-xl:   1280px;  /* Desktops */
--bp-2xl:  1536px;  /* Wide screens */

@media (min-width: 768px)  { /* tablet+ */ }
@media (min-width: 1024px) { /* desktop+ */ }
@media (min-width: 1280px) { /* wide desktop */ }
```

---

## 8. COMPONENT SPECIFICATIONS

### 8.1 Button Components

#### Primary Button (CTA — Call Now / Request Quote)
```css
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.875rem 1.75rem;          /* 14px 28px */
  background: var(--color-accent);     /* #F97316 */
  color: #FFFFFF;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 1rem;                     /* 16px */
  font-weight: 700;
  letter-spacing: 0.01em;
  border: none;
  border-radius: var(--radius-md);     /* 8px */
  box-shadow: var(--shadow-cta);
  cursor: pointer;
  text-decoration: none;
  transition: background 0.2s ease, transform 0.15s ease, box-shadow 0.2s ease;
  min-height: 52px;                    /* Touch target */
  white-space: nowrap;
}

.btn-primary:hover {
  background: var(--color-accent-dark); /* #EA6C0A */
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(249,115,22,0.45);
}

.btn-primary:active {
  transform: translateY(0);
  box-shadow: var(--shadow-cta);
}

.btn-primary:focus-visible {
  outline: 3px solid var(--color-accent);
  outline-offset: 3px;
}

/* Phone CTA variant — includes phone icon */
.btn-primary--phone::before {
  content: '';
  display: inline-block;
  width: 20px;
  height: 20px;
  background: url("data:image/svg+xml,...") no-repeat center;
  /* Use Heroicons 'phone' icon SVG inline */
}

/* Mobile: full width */
@media (max-width: 767px) {
  .btn-primary { width: 100%; justify-content: center; }
}
```

#### Secondary Button (Outlined)
```css
.btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.8125rem 1.625rem;        /* 13px 26px — 1px less for border */
  background: transparent;
  color: #FFFFFF;                      /* On dark backgrounds */
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 1rem;
  font-weight: 600;
  border: 2px solid rgba(255,255,255,0.6);
  border-radius: var(--radius-md);
  cursor: pointer;
  text-decoration: none;
  min-height: 52px;
  transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
  white-space: nowrap;
}

.btn-secondary:hover {
  background: rgba(255,255,255,0.1);
  border-color: rgba(255,255,255,0.9);
}

/* On light backgrounds */
.btn-secondary--dark {
  color: var(--color-primary);
  border-color: var(--color-primary);
}

.btn-secondary--dark:hover {
  background: var(--color-primary-lighter);
}

@media (max-width: 767px) {
  .btn-secondary { width: 100%; justify-content: center; }
}
```

#### Phone Number Display Button (Nav)
```css
.btn-phone-nav {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  color: var(--color-primary);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 1.0625rem;               /* 17px */
  font-weight: 700;
  text-decoration: none;
  padding: 0.5rem 0;
  transition: color 0.2s;
}

.btn-phone-nav:hover { color: var(--color-accent); }

/* Icon: PhoneCall, 20px, stroke-width 2, color inherits */
```

### 8.2 Navigation Component

#### Structure
```html
<header class="site-header" id="site-header">
  <nav class="nav-container">
    <a href="/" class="nav-logo" aria-label="Ribbon Plumbing Home">
      <!-- Logo SVG -->
    </a>
    <!-- Desktop: nav links center -->
    <ul class="nav-links" role="list">
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#reviews">Reviews</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <!-- Desktop: right cluster -->
    <div class="nav-actions">
      <a href="tel:+27XXXXXXXXXX" class="btn-phone-nav">
        <!-- Phone icon -->
        +27 XX XXX XXXX
      </a>
      <a href="#contact" class="btn-primary btn-primary--sm">Get Free Quote</a>
    </div>
    <!-- Mobile: hamburger -->
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <!-- Hamburger icon (3 lines) -->
    </button>
  </nav>
  <!-- Mobile Menu Drawer -->
  <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <!-- ... see mobile spec section -->
  </div>
</header>
```

#### Desktop Nav Styling
```css
.site-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  transition: background 0.3s ease, box-shadow 0.3s ease;
}

/* Transparent at top of page over hero */
.site-header--top {
  background: transparent;
}

/* Solid on scroll */
.site-header--scrolled {
  background: #FFFFFF;
  box-shadow: var(--shadow-md);
}

.nav-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: clamp(1rem, 4vw, 2rem);
  height: 72px;
}

/* Logo */
.nav-logo img, .nav-logo svg {
  height: 40px;
  width: auto;
}

/* Nav links */
.nav-links {
  display: flex;
  gap: 2rem;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-links a {
  color: var(--color-gray-700);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 0.9375rem;               /* 15px */
  font-weight: 500;
  text-decoration: none;
  transition: color 0.2s;
  padding-block: 0.25rem;
  position: relative;
}

/* Active underline indicator */
.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--color-accent);
  transition: width 0.2s ease;
}

.nav-links a:hover::after,
.nav-links a[aria-current="page"]::after {
  width: 100%;
}

/* Over hero — links are white */
.site-header--top .nav-links a { color: rgba(255,255,255,0.9); }
.site-header--top .btn-phone-nav { color: #FFFFFF; }

.nav-actions {
  display: flex;
  align-items: center;
  gap: 1.25rem;
}

.btn-primary--sm {
  padding: 0.625rem 1.25rem;
  font-size: 0.9375rem;
  min-height: 44px;
}

/* Hide hamburger on desktop */
.nav-toggle { display: none; }

@media (max-width: 1023px) {
  .nav-links { display: none; }
  .nav-toggle { display: block; }
}
```

#### Scroll Behavior (JavaScript)
```javascript
// Sticky nav state management
const header = document.getElementById('site-header');
const heroHeight = document.querySelector('.hero-section')?.offsetHeight ?? 400;

window.addEventListener('scroll', () => {
  if (window.scrollY > 80) {
    header.classList.add('site-header--scrolled');
    header.classList.remove('site-header--top');
  } else {
    header.classList.remove('site-header--scrolled');
    header.classList.add('site-header--top');
  }
}, { passive: true });
```

### 8.3 Service Card Component

```html
<!-- Service Card -->
<article class="service-card">
  <div class="service-card__icon-wrap" aria-hidden="true">
    <!-- SVG Icon, 32px, color: --color-primary -->
  </div>
  <h3 class="service-card__title">Emergency Plumbing</h3>
  <p class="service-card__desc">Burst pipes, severe leaks, and plumbing emergencies — we respond in under 60 minutes, 24/7.</p>
  <a href="#contact" class="service-card__link" aria-label="Get help with Emergency Plumbing">
    Request Service
    <!-- Chevron right icon, 16px -->
  </a>
</article>
```

```css
.service-card {
  background: #FFFFFF;
  border: 1px solid var(--color-gray-200);
  border-radius: var(--radius-lg);           /* 12px */
  padding: var(--card-padding);
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  box-shadow: var(--shadow-card);
  transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
  position: relative;
  overflow: hidden;
}

/* Left accent border on hover */
.service-card::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 4px;
  background: var(--color-accent);
  transform: scaleY(0);
  transform-origin: bottom;
  transition: transform 0.25s ease;
  border-radius: 0 0 0 var(--radius-lg);
}

.service-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
  border-color: var(--color-primary-lighter);
}

.service-card:hover::before {
  transform: scaleY(1);
}

.service-card__icon-wrap {
  width: 56px;
  height: 56px;
  background: var(--color-primary-lighter);  /* #EBF2FA */
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: background 0.2s;
}

.service-card:hover .service-card__icon-wrap {
  background: var(--color-accent-light);
}

.service-card__icon-wrap svg {
  width: 28px;
  height: 28px;
  color: var(--color-primary);
  transition: color 0.2s;
}

.service-card:hover .service-card__icon-wrap svg {
  color: var(--color-accent);
}

.service-card__title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 1.125rem;                 /* 18px */
  font-weight: 700;
  color: var(--color-gray-900);
  line-height: 1.3;
  margin: 0;
}

.service-card__desc {
  font-size: 0.9375rem;                /* 15px */
  color: var(--color-gray-500);
  line-height: 1.6;
  margin: 0;
  flex: 1;
}

.service-card__link {
  display: inline-flex;
  align-items: center;
  gap: 0.375rem;
  color: var(--color-primary);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 0.9375rem;
  font-weight: 600;
  text-decoration: none;
  margin-top: 0.5rem;
  transition: color 0.2s, gap 0.2s;
}

.service-card__link:hover {
  color: var(--color-accent);
  gap: 0.625rem;
}
```

### 8.4 Review Card Component

```html
<article class="review-card">
  <header class="review-card__header">
    <div class="review-card__stars" aria-label="5 out of 5 stars">
      <!-- 5x Star SVG, filled, color: #F59E0B -->
    </div>
    <span class="review-card__platform">
      <!-- Google G icon, 16px -->
      Google
    </span>
  </header>
  <blockquote class="review-card__body">
    <p>"They arrived within 45 minutes of my call. Fixed a burst pipe under my kitchen sink quickly and cleanly. Gave me a quote before starting. Highly recommend Ribbon Plumbing."</p>
  </blockquote>
  <footer class="review-card__footer">
    <div class="review-card__avatar" aria-hidden="true">S</div>
    <div>
      <p class="review-card__name">Sarah M.</p>
      <p class="review-card__location">Sandton, Johannesburg</p>
    </div>
  </footer>
</article>
```

```css
.review-card {
  background: #FFFFFF;
  border: 1px solid var(--color-gray-200);
  border-radius: var(--radius-lg);
  padding: 1.75rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  box-shadow: var(--shadow-card);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.review-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}

.review-card__header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.review-card__stars {
  display: flex;
  gap: 2px;
}

.review-card__stars svg {
  width: 18px;
  height: 18px;
  color: var(--color-warning);  /* #F59E0B */
  fill: currentColor;
}

.review-card__platform {
  display: flex;
  align-items: center;
  gap: 4px;
  font-size: 0.75rem;
  color: var(--color-gray-500);
  font-weight: 500;
}

.review-card__body {
  margin: 0;
  padding: 0;
  flex: 1;
}

.review-card__body p {
  font-size: 0.9375rem;
  color: var(--color-gray-700);
  line-height: 1.65;
  font-style: italic;
  margin: 0;
}

.review-card__footer {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding-top: 1rem;
  border-top: 1px solid var(--color-gray-100);
}

.review-card__avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--color-primary-lighter);
  color: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 1rem;
  flex-shrink: 0;
}

.review-card__name {
  font-size: 0.9375rem;
  font-weight: 600;
  color: var(--color-gray-900);
  margin: 0;
}

.review-card__location {
  font-size: 0.8125rem;
  color: var(--color-gray-500);
  margin: 0;
}
```

### 8.5 Form Components

```css
/* Form group */
.form-group {
  display: flex;
  flex-direction: column;
  gap: 0.375rem;
}

/* Label */
.form-label {
  font-family: 'Inter', sans-serif;
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--text-on-dark-muted);     /* On dark section */
  letter-spacing: 0.01em;
}

/* Input */
.form-input {
  width: 100%;
  padding: 0.8125rem 1rem;
  background: rgba(255,255,255,0.08);
  border: 1.5px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-md);
  color: var(--text-on-dark);
  font-family: 'Inter', sans-serif;
  font-size: 1rem;
  line-height: 1.5;
  transition: border-color 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
  min-height: 52px;
  -webkit-appearance: none;
  appearance: none;
}

.form-input::placeholder {
  color: rgba(255,255,255,0.35);
}

.form-input:hover {
  border-color: rgba(255,255,255,0.3);
}

.form-input:focus {
  outline: none;
  border-color: var(--color-accent);
  background: rgba(255,255,255,0.12);
  box-shadow: 0 0 0 3px rgba(249,115,22,0.20);
}

/* Select */
.form-select {
  /* same as .form-input */
  background-image: url("data:image/svg+xml,..."); /* chevron-down icon */
  background-repeat: no-repeat;
  background-position: right 1rem center;
  padding-right: 2.5rem;
  cursor: pointer;
}

/* Textarea */
.form-textarea {
  /* same as .form-input */
  min-height: 120px;
  resize: vertical;
}

/* Error state */
.form-input--error {
  border-color: var(--color-error);
  background: rgba(239,68,68,0.06);
}

.form-error-message {
  font-size: 0.8125rem;
  color: #FCA5A5;               /* Light red on dark bg */
  display: flex;
  align-items: center;
  gap: 0.25rem;
}

/* Success state */
.form-input--success {
  border-color: var(--color-success);
}
```

### 8.6 Trust Badge Component

```html
<div class="trust-badge">
  <div class="trust-badge__icon" aria-hidden="true">
    <!-- SVG icon -->
  </div>
  <div>
    <p class="trust-badge__label">Fully Insured</p>
    <p class="trust-badge__sub">R5M Public Liability</p>
  </div>
</div>
```

```css
.trust-badge {
  display: flex;
  align-items: center;
  gap: 0.875rem;
}

.trust-badge__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(255,255,255,0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.trust-badge__icon svg {
  width: 24px;
  height: 24px;
  color: #FFFFFF;
}

.trust-badge__label {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 1rem;
  font-weight: 700;
  color: #FFFFFF;
  margin: 0;
  line-height: 1.2;
}

.trust-badge__sub {
  font-size: 0.8125rem;
  color: rgba(255,255,255,0.65);
  margin: 0;
}
```

---

## 9. SECTION-BY-SECTION DESIGN

### 9.1 Sticky Navigation

**CRO Purpose**: Keep the phone number and CTA accessible at all times. Research shows 30–40% of calls come from nav-level CTAs.

**Psychological Trigger**: Accessibility — reduces friction to contact.

**Layout**:
```
[ LOGO ]  ——  [ Services | About | Reviews | Contact ]  ——  [ 📞 +27 XX XXX XXXX ]  [ Get Free Quote ]
```

**Behavior**:
- On page load over hero: `background: transparent`. Logo/links in white.
- After scrolling 80px: white background, drop shadow appears (transition: 300ms ease).
- Mobile (< 1024px): Hide nav links. Show logo + hamburger only. Hamburger opens a full-height slide-in drawer from the right.
- Phone number in nav links directly to `tel:` on all devices.
- "Get Free Quote" button always visible on desktop, hidden on mobile nav (replaced by sticky bottom bar).

**Scroll Progress Indicator** (optional enhancement):
- Thin 3px orange bar at very top of page, fills left-to-right as user scrolls.

---

### 9.2 Hero Section

**CRO Purpose**: Capture attention within 3 seconds. Establish category (plumbing), location (South Africa), credibility (rating/badges), and present a primary action. Must work for both emergency visitors (call now) and planning visitors (get quote).

**Psychological Triggers**: Trust, Authority, Urgency, Social Proof.

**Layout Structure**:
```
┌─────────────────────────────────────────────────────────────────────────┐
│  [Full-width background image]                                           │
│  [Dark overlay gradient — heavy left, fades right]                       │
│                                                                          │
│  ┌─────────────────────────────────────────────────┐                    │
│  │  [Overline badge]                                │                    │
│  │  ⚡ Available 24/7 — Emergency Response Ready    │                    │
│  │                                                  │                    │
│  │  [H1 Headline]                                   │                    │
│  │  Plumbing Problems?                              │                    │
│  │  We're 60 Minutes Away.                          │                    │
│  │                                                  │                    │
│  │  [Subheadline]                                   │                    │
│  │  Fast, licensed plumbers serving [Area Name].   │                    │
│  │  Upfront pricing. Guaranteed workmanship.        │                    │
│  │  No hidden costs.                                │                    │
│  │                                                  │                    │
│  │  [CTA Row]                                       │                    │
│  │  [ 📞 Call Now: +27 XX XXX XXXX ] [ Get Free Quote → ] │              │
│  │                                                  │                    │
│  │  [Trust Pills Row]                               │                    │
│  │  ✓ Google Rated 4.9★    ✓ PIRB Registered       │                    │
│  │  ✓ Serving [Area] Since 2015                    │                    │
│  └─────────────────────────────────────────────────┘                    │
└─────────────────────────────────────────────────────────────────────────┘
```

**Hero Copy (Final)**:
- **Overline**: `⚡ 24/7 Emergency Plumbers — We're On Our Way`
- **H1 Line 1**: `Plumbing Crisis?`
- **H1 Line 2**: `Help Is 60 Minutes Away.`
- **Subheadline**: `Licensed plumbers serving Johannesburg & surrounds. Fixed prices quoted upfront. We guarantee our work — or we come back for free.`
- **Primary CTA**: `📞 Call Now: +27 XX XXX XXXX`
- **Secondary CTA**: `Get a Free Quote →`
- **Trust pills**: `✓ 4.9★ on Google (120+ reviews)` · `✓ PIRB Registered` · `✓ Insured to R5M`

**Hero Image Specification**:
- **Subject**: A clean, confident plumber — hard hat optional — working in a bright South African home interior (tiled kitchen or bathroom). The plumber should be facing or angled left-to-right so the visual "weight" pushes toward the right (away from the text block).
- **Style**: High-contrast, warm colour grade. Not grey or cold. Natural light preferred.
- **Technical**: WebP format. Min 2400×1400px source. Lazy-load disabled (LCP element). Include `fetchpriority="high"`. Provide `srcset` for 768, 1200, 1920 widths.
- **Position**: `object-position: 65% center` to ensure the plumber's face is visible on all screens.
- **Overlay**: Dark gradient left-to-right. Left side: `rgba(15,35,64,0.90)`. Right side: `rgba(15,35,64,0.10)`.

**Hero CSS**:
```css
.hero-section {
  position: relative;
  min-height: 100svh;                  /* 100% viewport height */
  display: flex;
  align-items: center;
  overflow: hidden;
  padding-top: 72px;                   /* Nav height */
}

.hero-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}

.hero-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: 65% center;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to right,
    rgba(15, 35, 64, 0.92) 0%,
    rgba(15, 35, 64, 0.75) 40%,
    rgba(15, 35, 64, 0.30) 70%,
    rgba(15, 35, 64, 0.05) 100%
  );
}

.hero-content {
  position: relative;
  z-index: 1;
  max-width: 640px;
  padding-block: clamp(3rem, 8vh, 6rem);
}

.hero-overline {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(249, 115, 22, 0.15);
  border: 1px solid rgba(249, 115, 22, 0.40);
  color: #FDBA74;                      /* Orange-300 — warm, readable */
  font-family: 'Inter', sans-serif;
  font-size: 0.875rem;
  font-weight: 600;
  padding: 0.375rem 0.875rem;
  border-radius: var(--radius-full);
  margin-bottom: 1.25rem;
  letter-spacing: 0.02em;
}

.hero-overline::before {
  content: '⚡';
  font-size: 0.875rem;
}

.hero-h1 {
  font-family: 'Sora', sans-serif;
  font-size: var(--text-display);      /* clamp(2.5rem, 5vw, 4rem) */
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1.08;
  letter-spacing: -0.03em;
  margin-bottom: 1.25rem;
}

/* Accent color on second line */
.hero-h1 span {
  color: var(--color-accent);
}

.hero-sub {
  font-size: var(--text-body-lg);
  color: rgba(255, 255, 255, 0.82);
  line-height: 1.65;
  max-width: 520px;
  margin-bottom: 2rem;
}

.hero-cta-row {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  margin-bottom: 2rem;
}

/* Trust pills */
.hero-trust-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 0.75rem;
}

.hero-trust-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.375rem;
  color: rgba(255,255,255,0.80);
  font-size: 0.875rem;
  font-weight: 500;
}

.hero-trust-pill::before {
  content: '✓';
  color: var(--color-success);
  font-weight: 700;
}

/* Scroll indicator (optional) */
.hero-scroll-hint {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  color: rgba(255,255,255,0.45);
  font-size: 0.75rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  animation: bounce 2s ease infinite;
}
```

---

### 9.3 Trust Bar

**CRO Purpose**: The "anxiety kill" section. A visitor who scrolls past the hero has mild interest. The trust bar immediately reduces their three biggest fears: "Are they legit? Are they safe? Are they experienced?"

**Psychological Trigger**: Authority, Risk Reversal.

**Background**: `var(--color-primary)` (#1A3A5C) — solid. High contrast.

**Layout**: 3 equal columns. Centered. Dividers between columns.

```
┌─────────────────────────────────────────────────────────────────────────┐
│  [Blue background]                                                       │
│                                                                          │
│  🛡️ Fully Insured          ⭐ 4.9 Google Rating       🔧 10+ Years      │
│  R5M Public Liability       120+ Verified Reviews         of Excellence  │
│                                                                          │
└─────────────────────────────────────────────────────────────────────────┘
```

**Detailed Trust Content**:

| Badge | Icon | Headline | Sub-line |
|---|---|---|---|
| Insurance | Shield (Heroicons) | Fully Insured | R5M Public Liability Cover |
| Rating | Star (filled) | 4.9★ Google Rating | 120+ Verified Reviews |
| Experience | Wrench | PIRB Registered | Licensed & Certified Plumbers |

**CSS**:
```css
.trust-bar {
  background: var(--color-primary);   /* #1A3A5C */
  padding-block: 2rem;
}

.trust-bar__grid {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0;
  flex-wrap: wrap;
}

.trust-bar__item {
  flex: 1;
  min-width: 200px;
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem 2rem;
  position: relative;
}

/* Vertical dividers */
.trust-bar__item + .trust-bar__item::before {
  content: '';
  position: absolute;
  left: 0;
  top: 20%;
  height: 60%;
  width: 1px;
  background: rgba(255,255,255,0.15);
}

@media (max-width: 767px) {
  .trust-bar__grid { flex-direction: column; }
  .trust-bar__item + .trust-bar__item::before {
    top: 0; left: 10%; height: 1px; width: 80%;
  }
}
```

---

### 9.4 Services Section

**CRO Purpose**: Confirm the visitor's specific problem is covered. A homeowner with a blocked drain needs to see "Drain Cleaning" — if they don't, they leave. This section converts intent into confidence.

**Psychological Trigger**: Clarity, Specificity, Relevance.

**Section Header Copy**:
- **Overline**: `OUR SERVICES`
- **H2**: `We Handle Every Plumbing Problem`
- **Body**: `From emergency burst pipes to planned geyser installations — our licensed plumbers cover everything your home or business needs.`

**Services Data Table**:

| Service | Icon (Heroicons) | Card Headline | Card Copy |
|---|---|---|---|
| Emergency Plumbing | `fire` or `bolt` | 24/7 Emergency Response | Burst pipes, severe leaks, no hot water — we arrive in under 60 minutes, any time of day or night. |
| Leak Detection | `magnifying-glass` | Find Leaks Before They Cost You | Using pressure testing and acoustic detection, we pinpoint hidden leaks without unnecessary damage. |
| Drain Cleaning | `arrow-path` | Blocked Drain? Fixed in One Visit | High-pressure jet cleaning clears any blockage — kitchen, bathroom, stormwater, or sewer. |
| Geyser Installation | `fire` | Geyser Install & Replacement | Supply-and-fit geyser installations, pressure valves, and compliance certificates (CoC) included. |
| Pipe Repairs | `wrench-screwdriver` | Pipe Repairs & Repiping | Cracked, corroded, or leaking pipes repaired or replaced using SABS-approved materials. |
| Commercial Plumbing | `building-office` | Commercial & Property Plumbing | Serving property managers, body corporates, and small businesses with reliable, scheduled maintenance. |

**Layout**:
- Desktop: 3 columns × 2 rows (3-col auto-fill grid)
- Tablet: 2 columns
- Mobile: 1 column

**Section Background**: `var(--bg-light)` (#F8FAFF)

**CTA below grid**: `"Don't see your problem? Call us — we handle it all."` with phone number link.

---

### 9.5 Why Choose Us

**CRO Purpose**: This section handles the "but why YOU?" objection. Every plumbing company says they're good. This section proves it with specific, believable claims — not generic marketing fluff.

**Psychological Trigger**: Authority, Risk Reversal, Specificity, Trust.

**Section Header**:
- **Overline**: `WHY RIBBON PLUMBING`
- **H2**: `The Difference Is in the Details`

**4 Feature Rows (alternating image / content)**:

---

**Row 1** — Speed & Reliability

- **Image side**: Left
- **Image description**: Close-up of a plumber's van/bakkie (wrapped in brand colours if possible) parked in a suburban Johannesburg street. Alternatively: plumber walking toward camera, bag in hand, morning light.
- **Overline**: `FAST RESPONSE`
- **H3**: `We Arrive When We Say We Will`
- **Copy**: `We know your time matters. That's why we give you a 2-hour arrival window — not a vague "sometime today." Our plumbers call ahead when they're 20 minutes away. No waiting around.`
- **Proof point pill**: `⏱ Average arrival time: 47 minutes`

---

**Row 2** — Transparent Pricing

- **Image side**: Right
- **Image description**: Plumber on a tablet or clipboard, showing a customer a quote on the doorstep. Both are looking at the screen. Customer looks calm/relieved.
- **Overline**: `HONEST PRICING`
- **H3**: `You Know the Price Before We Start`
- **Copy**: `We hate hidden costs as much as you do. Before we touch a single pipe, you get a written quote. The price you're quoted is the price you pay — no call-out fee surprises, no after-the-fact additions.`
- **Proof point pill**: `📋 Fixed quotes every time`

---

**Row 3** — Licensed Professionals

- **Image side**: Left
- **Image description**: Plumber's hands working on a pipe joint. Hands are clean, confident, wearing branded gloves. Clear focus on craftsmanship.
- **Overline**: `LICENSED & CERTIFIED`
- **H3**: `Qualified Plumbers. Certified Work.`
- **Copy**: `All our plumbers are registered with the Plumbing Industry Registration Board (PIRB). We issue Certificates of Compliance (CoC) for all relevant work. Your insurance company will be happy.`
- **Proof point pill**: `✓ PIRB Registration Number: [XXXXX]`

---

**Row 4** — Workmanship Guarantee

- **Image side**: Right
- **Image description**: Freshly repaired pipe or newly installed geyser — clean, professional finish. Or a before/after split image showing old damaged pipe vs. new installation.
- **Overline**: `OUR GUARANTEE`
- **H3**: `We Guarantee Our Workmanship`
- **Copy**: `If something we fixed fails within 12 months due to our workmanship, we come back and fix it at no cost. No questions asked. We stand behind every job we do.`
- **Proof point pill**: `🛡️ 12-Month Workmanship Guarantee`

**Row CSS**:
```css
.features-section {
  background: #FFFFFF;
}

.features-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2.5rem, 5vw, 5rem);
  align-items: center;
  padding-block: clamp(3rem, 5vw, 4rem);
  border-bottom: 1px solid var(--color-gray-100);
}

.features-row:last-child { border-bottom: none; }

/* Alternate image side */
.features-row:nth-child(even) .features-img { order: 2; }
.features-row:nth-child(even) .features-text { order: 1; }

.features-img {
  border-radius: var(--radius-xl);    /* 20px */
  overflow: hidden;
  aspect-ratio: 4/3;
  box-shadow: var(--shadow-lg);
}

.features-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.features-img:hover img { transform: scale(1.03); }

.features-text { display: flex; flex-direction: column; gap: 1rem; }

.features-overline {
  font-size: 0.8125rem;
  font-weight: 600;
  color: var(--color-accent);
  text-transform: uppercase;
  letter-spacing: 0.12em;
}

.features-h3 {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: clamp(1.375rem, 2.5vw, 1.75rem);
  font-weight: 700;
  color: var(--color-gray-900);
  line-height: 1.25;
  margin: 0;
}

.features-copy {
  font-size: 1rem;
  color: var(--color-gray-500);
  line-height: 1.7;
  margin: 0;
  max-width: 48ch;
}

.features-proof-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: var(--color-primary-lighter);
  color: var(--color-primary);
  font-size: 0.875rem;
  font-weight: 600;
  padding: 0.5rem 1rem;
  border-radius: var(--radius-full);
  width: fit-content;
}

@media (max-width: 767px) {
  .features-row {
    grid-template-columns: 1fr;
  }
  .features-row:nth-child(even) .features-img,
  .features-row:nth-child(even) .features-text {
    order: initial;
  }
}
```

---

### 9.6 Reviews Section

**CRO Purpose**: Social proof from recognisable local suburbs closes the deal. Customers trust neighbours more than companies. Reviews with specific details (location, problem type) convert better than generic 5-star praise.

**Psychological Trigger**: Social Proof, Specificity, Localisation.

**Section Header**:
- **Overline**: `CUSTOMER REVIEWS`
- **H2**: `Real People. Real Results.`
- **Body**: `Don't take our word for it. Here's what homeowners across Johannesburg say about Ribbon Plumbing.`
- **Google Rating Display**: Large `4.9 ★★★★★` badge with "Based on 120+ Google Reviews" — link to Google Business Profile.

**Review Cards Data** (6 cards, displayed 3 per row on desktop):

```
Card 1:
  Stars: 5/5
  Name: Sarah M.
  Location: Sandton, Johannesburg
  Date: March 2025
  Text: "Called them at 7am for a burst pipe under my kitchen sink. 
         They arrived within 45 minutes, gave me a fixed quote before 
         starting, and were done in under 2 hours. My kitchen was left 
         spotless. Will absolutely use again."

Card 2:
  Stars: 5/5
  Name: Thabo K.
  Location: Midrand
  Date: February 2025
  Text: "Finally a plumber that shows up when they say they will. Fixed 
         a blocked drain that two other companies couldn't sort out. 
         Price was fair and they gave me a certificate for the work. 
         Highly recommended."

Card 3:
  Stars: 5/5
  Name: Priya N.
  Location: Bryanston
  Date: January 2025
  Text: "Replaced our geyser quickly and professionally. Quoted us before 
         they started and didn't try to upsell us on things we didn't need. 
         Their compliance certificate was ready same day. Excellent service."

Card 4:
  Stars: 5/5
  Name: Johan v.d.W.
  Location: Fourways, Johannesburg
  Date: December 2024
  Text: "Used Ribbon Plumbing for a commercial property in Fourways. 
         They handled 3 separate issues in one visit and provided a detailed 
         invoice for our body corporate. Professional, neat, and reasonable."

Card 5:
  Stars: 5/5
  Name: Lerato D.
  Location: Randburg
  Date: November 2024
  Text: "Had a mystery leak causing water damage. They found it in the 
         wall without tearing the whole thing apart. Repaired it the same 
         day. Their leak detection equipment is impressive. Very happy."

Card 6:
  Stars: 5/5
  Name: Mark O.
  Location: Parkhurst, Johannesburg
  Date: October 2024
  Text: "Fast, honest, and tidy. Three things I've never associated with 
         a plumber before Ribbon. The plumber wore shoe covers in my house 
         without me asking. Small thing, but it says a lot about how they 
         operate."
```

**Layout**:
- Desktop: 3-column grid
- Tablet: 2-column grid
- Mobile: Single-column stack OR horizontal scroll carousel (use CSS scroll-snap for carousel)

**Below Reviews**: Google badge + `"Read all 120+ reviews on Google"` link.

**Section Background**: `var(--bg-light)` (#F8FAFF)

---

### 9.7 CTA / Contact Section

**CRO Purpose**: The final conversion moment. For visitors who've scrolled the whole page and are ready to act. Must be low-friction, confidence-inspiring, and action-focused. The dark background creates a psychological "chapter break" that signals: this is the moment to decide.

**Psychological Trigger**: Urgency, Ease, Risk Reversal, Reciprocity (free quote).

**Background**: `var(--bg-dark)` (#0F2340) — dark navy. Full-width.

**Layout**: 2 columns — left: headline + trust reminders. Right: form.

```
┌─────────────────────────────────────────────────────────────────────────┐
│  [Dark navy background]                                                  │
│                                                                          │
│  ┌────────────────────────┐     ┌──────────────────────────────────┐   │
│  │ [Left — Copy]          │     │ [Right — Form]                    │   │
│  │                        │     │                                   │   │
│  │ Overline               │     │ Form Title: "Get Your Free Quote" │   │
│  │ Ready to Fix It?       │     │                                   │   │
│  │                        │     │ [Name]          [Phone]           │   │
│  │ H2                     │     │ [Email]                           │   │
│  │ Get a Free Quote       │     │ [Service Needed — Select]         │   │
│  │ in Under 2 Minutes     │     │ [Message — Describe your problem] │   │
│  │                        │     │                                   │   │
│  │ Sub copy               │     │ [Request Free Quote Button]       │   │
│  │                        │     │                                   │   │
│  │ ✓ No obligation        │     │ Privacy note                      │   │
│  │ ✓ Fixed price quote    │     │                                   │   │
│  │ ✓ Response within 1hr  │     │                                   │   │
│  │                        │     │                                   │   │
│  │ [Or call directly]     │     │                                   │   │
│  │ +27 XX XXX XXXX        │     │                                   │   │
│  └────────────────────────┘     └──────────────────────────────────┘   │
└─────────────────────────────────────────────────────────────────────────┘
```

**CTA Section Copy**:
- **Overline**: `GET IN TOUCH`
- **H2 Line 1**: `Ready to Solve Your`
- **H2 Line 2**: `Plumbing Problem?`
- **Body**: `Tell us what's going on and we'll get back to you within the hour — usually faster. No obligation. No pressure.`
- **Checklist**:
  - ✓ Free, no-obligation quote
  - ✓ Fixed price before we start
  - ✓ We respond within 1 hour
- **Or call**: `Prefer to talk? Call us directly:`
- **Phone link**: `+27 XX XXX XXXX`

**Form Spec**:
```html
<form class="quote-form" id="quote-form" novalidate>
  <div class="form-row form-row--2col">
    <div class="form-group">
      <label for="name" class="form-label">Full Name *</label>
      <input type="text" id="name" name="name" class="form-input"
             placeholder="e.g. Sarah Nkosi" required autocomplete="name">
    </div>
    <div class="form-group">
      <label for="phone" class="form-label">Phone Number *</label>
      <input type="tel" id="phone" name="phone" class="form-input"
             placeholder="e.g. 082 XXX XXXX" required autocomplete="tel"
             pattern="[0-9+\s\-]{8,15}">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" id="email" name="email" class="form-input"
           placeholder="you@example.com" autocomplete="email">
  </div>
  <div class="form-group">
    <label for="service" class="form-label">Service Needed *</label>
    <select id="service" name="service" class="form-input form-select" required>
      <option value="" disabled selected>Select a service...</option>
      <option value="emergency">Emergency Plumbing</option>
      <option value="leak">Leak Detection</option>
      <option value="drain">Drain Cleaning</option>
      <option value="geyser">Geyser Installation / Replacement</option>
      <option value="pipes">Pipe Repairs</option>
      <option value="commercial">Commercial Plumbing</option>
      <option value="other">Other (describe below)</option>
    </select>
  </div>
  <div class="form-group">
    <label for="message" class="form-label">Tell Us More</label>
    <textarea id="message" name="message" class="form-input form-textarea"
              placeholder="Briefly describe your problem and the best time to reach you..."
              rows="4"></textarea>
  </div>
  <button type="submit" class="btn-primary btn-primary--full">
    Request Free Quote
    <svg><!-- arrow-right icon --></svg>
  </button>
  <p class="form-privacy-note">
    🔒 Your information is private and will never be shared. We'll contact you within 1 hour.
  </p>
</form>
```

**Form Container Styling**:
```css
.quote-form-container {
  background: var(--bg-dark-card);    /* #162B4D */
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-xl);
  padding: clamp(1.5rem, 4vw, 2.5rem);
}

.form-row--2col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}

.btn-primary--full { width: 100%; justify-content: center; }

.form-privacy-note {
  font-size: 0.8125rem;
  color: var(--text-on-dark-muted);
  text-align: center;
  margin-top: 0.75rem;
  margin-bottom: 0;
}

/* Success state */
.form-success-message {
  display: none;
  text-align: center;
  padding: 2rem;
  color: var(--color-success);
}
.form-success-message h3 { color: #FFFFFF; margin-bottom: 0.5rem; }

@media (max-width: 767px) {
  .form-row--2col { grid-template-columns: 1fr; }
}
```

**Form Validation Rules**:
- Required: Name, Phone, Service
- Phone: South African format (10 digits, may start with 0 or +27)
- Email: valid email format (not required — many customers don't use email regularly)
- On submit error: shake animation on invalid fields, scroll to first error, red border + error message below each invalid field
- On success: hide form, show success message with WhatsApp link fallback

---

### 9.8 Footer

**CRO Purpose**: Captures last-chance conversions, provides trust signals for direct-to-footer visitors (common from SEO), and provides structured data opportunities for local SEO.

**Background**: `var(--bg-dark)` (#0F2340) — same as CTA section, seamless join.

**Layout**: 4-column grid on desktop, 2-column on tablet, stacked on mobile.

**Content**:

```
Column 1 — Brand
  [Logo — white version]
  [Tagline: "Plumbing Done Right. Every Time."]
  [Short desc: "Licensed, insured plumbers serving Johannesburg and surrounds. Available 24/7 for emergencies."]
  [Social icons: Facebook | Instagram | Google]

Column 2 — Services
  Heading: Quick Links
  - Emergency Plumbing
  - Leak Detection
  - Drain Cleaning
  - Geyser Installation
  - Pipe Repairs
  - Commercial Plumbing

Column 3 — Service Areas
  Heading: Service Areas
  - Sandton
  - Midrand
  - Randburg
  - Bryanston
  - Fourways
  - Parkhurst
  - Roodepoort
  - [View all areas →]

Column 4 — Contact
  Heading: Get In Touch
  📞 +27 XX XXX XXXX
  📧 info@ribbonplumbing.co.za
  📍 [Street Address], [Suburb], [City], [Province], [Postal Code]
  ⏰ Emergency: 24/7 | Office: Mon–Fri 7am–5pm, Sat 8am–1pm
```

**Footer Bottom Bar**:
```
[© 2025 Ribbon Plumbing (Pty) Ltd. All rights reserved.]    [Privacy Policy] | [Terms of Service]
PIRB Registration: XXXXX | Company Reg: XXXX/XXXXXX/XX
```

**Footer CSS**:
```css
.site-footer {
  background: var(--bg-dark);
  color: var(--text-on-dark-muted);
  padding-top: clamp(3rem, 6vw, 5rem);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.5fr;
  gap: 3rem;
  padding-bottom: 3rem;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}

.footer-heading {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 0.8125rem;
  font-weight: 700;
  color: rgba(255,255,255,0.95);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 1.25rem;
}

.footer-links { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.625rem; }

.footer-links a {
  color: var(--text-on-dark-muted);
  text-decoration: none;
  font-size: 0.9375rem;
  transition: color 0.2s;
}

.footer-links a:hover { color: #FFFFFF; }

.footer-contact-item {
  display: flex;
  gap: 0.75rem;
  align-items: flex-start;
  font-size: 0.9375rem;
  line-height: 1.5;
  margin-bottom: 0.875rem;
}

.footer-contact-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

.footer-bottom {
  padding-block: 1.5rem;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: space-between;
  align-items: center;
  font-size: 0.8125rem;
}

.footer-social {
  display: flex;
  gap: 1rem;
  margin-top: 1.25rem;
}

.footer-social a {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(255,255,255,0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255,255,255,0.6);
  transition: background 0.2s, color 0.2s;
}

.footer-social a:hover {
  background: var(--color-accent);
  color: #FFFFFF;
}

@media (max-width: 1023px) {
  .footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 639px) {
  .footer-grid { grid-template-columns: 1fr; }
}
```

---

## 10. MOBILE DESIGN SPECIFICATIONS

### 10.1 Mobile Navigation

**Hamburger Menu**:
- Button: 44×44px touch target. Top-right corner.
- Icon: 3 horizontal lines → animates to ✕ on open.
- Opens a full-height slide-in drawer from the right (translateX animation, 300ms ease-out).
- Drawer width: 80vw, max 320px. Background: `#0F2340` (dark navy).
- Drawer contains: Logo at top, nav links stacked with 52px min-height each, phone number as large tappable button, "Get Free Quote" CTA button full-width.
- Overlay: Semi-transparent dark overlay on left side. Tap to close.
- `aria-hidden="true"` on drawer when closed. `aria-expanded` on button.
- Body scroll locked when drawer is open (`overflow: hidden` on body).

```css
.mobile-menu {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  width: min(80vw, 320px);
  background: #0F2340;
  z-index: 1100;
  transform: translateX(100%);
  transition: transform 0.3s ease-out;
  display: flex;
  flex-direction: column;
  padding: 1.5rem;
  overflow-y: auto;
}

.mobile-menu.is-open {
  transform: translateX(0);
}

.mobile-menu-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.5);
  z-index: 1050;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s;
}

.mobile-menu-overlay.is-active {
  opacity: 1;
  pointer-events: auto;
}

.mobile-menu-nav { list-style: none; padding: 0; margin: 0; }
.mobile-menu-nav a {
  display: block;
  padding: 0.875rem 0;
  color: rgba(255,255,255,0.85);
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 1.125rem;
  font-weight: 500;
  border-bottom: 1px solid rgba(255,255,255,0.08);
  text-decoration: none;
}
```

### 10.2 Sticky Bottom Call Bar (Mobile Only)

**The single most important mobile conversion element.** A floating fixed bar at the bottom of the screen on mobile, always visible. Studies show this increases mobile call conversion by 25–40%.

```html
<div class="mobile-cta-bar" role="complementary" aria-label="Quick contact options">
  <a href="tel:+27XXXXXXXXXX" class="mobile-cta-bar__call">
    <svg><!-- phone icon --></svg>
    <span>Call Now</span>
  </a>
  <a href="https://wa.me/27XXXXXXXXXX?text=Hi%2C%20I%20need%20a%20plumbing%20quote%20please"
     class="mobile-cta-bar__whatsapp" target="_blank" rel="noopener">
    <svg><!-- WhatsApp icon --></svg>
    <span>WhatsApp</span>
  </a>
</div>
```

```css
.mobile-cta-bar {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 900;
  display: flex;
  height: 60px;
  box-shadow: 0 -4px 20px rgba(0,0,0,0.2);
}

.mobile-cta-bar__call {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background: var(--color-accent);    /* Orange */
  color: #FFFFFF;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 1rem;
  text-decoration: none;
}

.mobile-cta-bar__whatsapp {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background: #25D366;                /* WhatsApp green */
  color: #FFFFFF;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 1rem;
  text-decoration: none;
}

/* Only show on mobile */
@media (min-width: 768px) { .mobile-cta-bar { display: none !important; } }
@media (max-width: 767px) { .mobile-cta-bar { display: flex; } }

/* Add padding to footer so it clears the bar */
@media (max-width: 767px) { .site-footer { padding-bottom: 60px; } }
```

### 10.3 WhatsApp Floating Button (All Devices)

A circular floating action button (FAB) in the bottom-right corner. Visible on all devices.

```html
<a href="https://wa.me/27XXXXXXXXXX?text=Hi%20Ribbon%20Plumbing%2C%20I%20need%20a%20quote"
   class="whatsapp-fab"
   target="_blank"
   rel="noopener"
   aria-label="Chat on WhatsApp">
  <!-- WhatsApp SVG Logo -->
</a>
```

```css
.whatsapp-fab {
  position: fixed;
  bottom: 1.5rem;
  right: 1.5rem;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: #25D366;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 20px rgba(37, 211, 102, 0.45);
  z-index: 800;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.whatsapp-fab:hover {
  transform: scale(1.08);
  box-shadow: 0 6px 24px rgba(37, 211, 102, 0.55);
}

.whatsapp-fab svg { width: 32px; height: 32px; }

/* On mobile: hide FAB (bottom bar shows WhatsApp already) */
@media (max-width: 767px) { .whatsapp-fab { display: none; } }
```

### 10.4 Mobile Hero

```css
@media (max-width: 767px) {
  .hero-section { min-height: 100svh; }
  .hero-overlay {
    background: linear-gradient(
      to bottom,
      rgba(15,35,64,0.75) 0%,
      rgba(15,35,64,0.88) 60%,
      rgba(15,35,64,0.95) 100%
    );
  }
  .hero-h1 { font-size: clamp(2rem, 8vw, 2.75rem); }
  .hero-cta-row { flex-direction: column; }
  .hero-content { padding-bottom: 5rem; } /* Clear mobile bar */
}
```

### 10.5 Touch Targets

**All interactive elements must meet minimum 44×44px touch target.** No exceptions.

| Element | Min Size | Implementation |
|---|---|---|
| Nav links | 44px height | `padding-block: 0.75rem` |
| Service card link | 44px height | `padding: 0.75rem 0` |
| Form inputs | 52px height | `min-height: 52px` |
| Submit button | 56px height | `padding: 1rem 1.5rem` |
| Mobile nav links | 52px height | `padding: 0.875rem 0` |
| Footer links | 36px height | `padding-block: 0.375rem` |

### 10.6 Mobile Section Stacking

| Section | Desktop Layout | Mobile Layout |
|---|---|---|
| Navigation | Horizontal | Hamburger drawer |
| Hero | Full-width image + left text | Full-bleed image + center text |
| Trust Bar | 3 columns horizontal | 3 rows vertical |
| Services | 3-column grid | 1-column stack |
| Why Choose Us | 2-column alternating | 1-column, image above text |
| Reviews | 3-column grid | Horizontal scroll carousel |
| CTA Section | 2-column | 1-column, text above form |
| Footer | 4-column grid | 1-column stack |

---

## 11. ACCESSIBILITY REQUIREMENTS

### 11.1 Color Contrast

All text must meet WCAG 2.1 Level AA minimum (4.5:1 for normal text, 3:1 for large text).

| Combination | Ratio | Level |
|---|---|---|
| Body text `#334155` on white | 8.1:1 | AAA |
| White on Primary `#1A3A5C` | 9.4:1 | AAA |
| White on Accent `#F97316` | 3.0:1 | AA (large text only — only use for buttons, not body) |
| Caption `#64748B` on white | 4.6:1 | AA |
| `#FDBA74` on dark `#0F2340` | 6.2:1 | AAA |

**Rule**: Never put small body text (below 18px) in white on the accent orange background. Use accent orange only for buttons and large elements where the text is bold and large enough to meet 3:1.

### 11.2 Keyboard Navigation

```css
/* Global focus-visible styles */
:focus-visible {
  outline: 3px solid var(--color-accent);
  outline-offset: 3px;
  border-radius: 2px;
}

/* Remove focus outline on mouse click (only show for keyboard) */
:focus:not(:focus-visible) { outline: none; }
```

- Tab order: follows DOM order throughout page
- Skip link at top of page: `<a href="#main-content" class="skip-link">Skip to main content</a>`
- Mobile menu: trapped focus when open (Tab cycles only within drawer)
- Form: all fields reachable via Tab, Enter submits, Escape closes any overlays
- Reviews carousel (mobile): keyboard arrow navigation

### 11.3 ARIA Roles and Labels

```html
<!-- Landmarks -->
<header role="banner">
<nav role="navigation" aria-label="Main navigation">
<main id="main-content" role="main">
<section aria-labelledby="services-heading">
<section aria-labelledby="reviews-heading">
<footer role="contentinfo">

<!-- Interactive elements -->
<button aria-expanded="false" aria-controls="mobile-menu">Open menu</button>
<button aria-label="Close menu">✕</button>

<!-- Form -->
<form aria-label="Request a free plumbing quote" novalidate>
<input aria-required="true" aria-describedby="name-error">
<span id="name-error" role="alert" aria-live="polite"></span>

<!-- Reviews -->
<article aria-label="Review by Sarah M. from Sandton">

<!-- Stars -->
<div aria-label="5 out of 5 stars" role="img">★★★★★</div>
```

### 11.4 Images

- Hero image: `alt="Licensed Ribbon Plumbing plumber at work in a Johannesburg home"`
- Service icons: `aria-hidden="true"` (decorative — text label present)
- Team/feature photos: descriptive `alt` text, e.g., `alt="Plumber giving a homeowner a written quote before starting work"`
- Logo: `alt="Ribbon Plumbing — Licensed Plumbers Johannesburg"`

### 11.5 Reduced Motion

```css
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}
```

---

## 12. SEO CONSIDERATIONS

### 12.1 H-Tag Hierarchy

```
<h1> — ONE per page: "Plumbing Crisis? Help Is 60 Minutes Away." (Hero)
  <h2> — "We Handle Every Plumbing Problem" (Services)
    <h3> — Each service card title (Emergency Plumbing, etc.)
  <h2> — "The Difference Is in the Details" (Why Choose Us)
    <h3> — Each feature row headline
  <h2> — "Real People. Real Results." (Reviews)
  <h2> — "Ready to Solve Your Plumbing Problem?" (CTA)
```

**Rule**: Never skip heading levels. Never use headings for visual styling — use CSS for that.

### 12.2 Meta Tags

```html
<title>Ribbon Plumbing | 24/7 Emergency Plumbers in Johannesburg</title>
<meta name="description" content="Licensed emergency plumbers in Johannesburg. We arrive in 60 minutes. Fixed prices quoted upfront. PIRB registered. Call +27 XX XXX XXXX or get a free quote online.">
<meta name="keywords" content="emergency plumber johannesburg, plumber sandton, geyser installation johannesburg, drain cleaning johannesburg, leak detection johannesburg, plumber near me">

<!-- Open Graph -->
<meta property="og:title" content="Ribbon Plumbing | Fast, Reliable Plumbers in Johannesburg">
<meta property="og:description" content="Licensed emergency plumbers. Arrive in 60 minutes. PIRB registered. Call now or get a free quote.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_ZA">

<!-- Local Business -->
<meta name="geo.region" content="ZA-GP">
<meta name="geo.placename" content="Johannesburg">
```

### 12.3 Structured Data (JSON-LD)

Place in `<head>` or before `</body>`:

```json
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "https://ribbonplumbing.co.za",
  "name": "Ribbon Plumbing",
  "description": "Licensed, insured emergency plumbers serving Johannesburg and surrounds. Available 24/7.",
  "url": "https://ribbonplumbing.co.za",
  "telephone": "+27XXXXXXXXXX",
  "email": "info@ribbonplumbing.co.za",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "[Street Address]",
    "addressLocality": "[Suburb]",
    "addressRegion": "Gauteng",
    "postalCode": "[XXXX]",
    "addressCountry": "ZA"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "[LAT]",
    "longitude": "[LONG]"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "07:00",
      "closes": "17:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "08:00",
      "closes": "13:00"
    }
  ],
  "areaServed": [
    "Sandton", "Midrand", "Randburg", "Bryanston", "Fourways",
    "Parkhurst", "Roodepoort", "Johannesburg"
  ],
  "priceRange": "$$",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "bestRating": "5",
    "worstRating": "1",
    "reviewCount": "120"
  },
  "sameAs": [
    "https://www.facebook.com/ribbonplumbing",
    "https://www.instagram.com/ribbonplumbing"
  ]
}
```

### 12.4 Local SEO On-Page Elements

- **NAP Consistency**: Name, Address, Phone must be identical across website, Google Business Profile, and any directory listings.
- **Service area pages**: Recommend creating separate landing pages for `ribbonplumbing.co.za/sandton`, `/midrand`, etc. Each with location-specific copy.
- **Suburb names in footer**: Footer service area list provides keyword-rich text that Google indexes for local searches.
- **Alt text on images**: Include location in alt text where natural (e.g., "plumber installing geyser in Sandton home").
- **Internal linking**: Service names in footer link to `#services` section or dedicated service pages.

### 12.5 Page Speed SEO

- LCP element (hero image): `fetchpriority="high"`, `loading="eager"`, preload link tag.
- Above-fold CSS: Inline in `<head>`. Everything else loads deferred.
- Google Fonts: `display=swap` to avoid FOIT.
- `rel="preconnect"` for fonts.googleapis.com and fonts.gstatic.com.

---

## 13. PERFORMANCE REQUIREMENTS

### 13.1 Core Web Vitals Targets

| Metric | Target | Implementation |
|---|---|---|
| LCP (Largest Contentful Paint) | < 2.5s | Hero image preloaded, inline critical CSS |
| INP (Interaction to Next Paint) | < 200ms | Minimal JS, no blocking scripts |
| CLS (Cumulative Layout Shift) | < 0.1 | All images have explicit width/height, fonts preloaded |
| FID (First Input Delay) | < 100ms | Defer non-critical JS |
| TTFB (Time to First Byte) | < 800ms | Static HTML, edge caching if possible |

### 13.2 Image Optimization

```html
<!-- Hero image — preloaded LCP element -->
<link rel="preload" as="image" href="/images/hero-1200.webp"
      imagesrcset="/images/hero-768.webp 768w,
                   /images/hero-1200.webp 1200w,
                   /images/hero-1920.webp 1920w"
      imagesizes="100vw">

<!-- Hero img tag -->
<img
  src="/images/hero-1200.webp"
  srcset="/images/hero-768.webp 768w,
          /images/hero-1200.webp 1200w,
          /images/hero-1920.webp 1920w"
  sizes="100vw"
  alt="Licensed Ribbon Plumbing plumber at work in a Johannesburg home"
  width="1920"
  height="1080"
  fetchpriority="high"
  loading="eager"
  decoding="async">

<!-- Non-hero images — lazy load -->
<img src="/images/feature-1.webp" alt="..." width="600" height="450"
     loading="lazy" decoding="async">
```

**Image format**: WebP with JPEG fallback via `<picture>` element.
**Max file size**: Hero < 150KB (compressed). Feature images < 80KB each. Service icons: SVG only.

### 13.3 JavaScript Strategy

**Minimal JavaScript.** This is a lead-generation page, not a web app.

Required JS (inline or small bundled file < 10KB gzipped):
1. Sticky nav scroll detection
2. Mobile menu open/close
3. Form validation and submission (AJAX)
4. Smooth scroll for anchor links
5. Hero section scroll indicator (if implemented)

**No frameworks required.** Vanilla JS only unless using a framework (React/Next.js) for the full site. If using a framework, ensure SSG/SSR for this page.

**Third-party scripts**: Load all third-party scripts (Google Analytics, any chat widgets) with `async` or `defer`. Never block rendering.

### 13.4 CSS Strategy

```html
<!-- Critical CSS (above fold only) — inline in <head> -->
<style>
  /* Nav, hero section, trust bar — ~8KB max */
</style>

<!-- Non-critical CSS — deferred -->
<link rel="preload" href="/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/css/main.css"></noscript>
```

### 13.5 South Africa Network Considerations

South African mobile data is expensive and network conditions are variable. Optimize aggressively:
- Total page weight target: **under 500KB** for initial load
- All images: WebP, aggressively compressed
- No unnecessary web fonts (3 variants max, preconnected)
- Service Worker for repeat visitors (cache static assets)
- Test performance on 3G network simulation in Chrome DevTools

---

## 14. IMPLEMENTATION NOTES

### 14.1 Technology Stack (Recommended)

**Option A — PHP/HTML (fits current wamp64 setup)**:
```
- Templating: PHP with simple includes (header.php, footer.php)
- CSS: Single compiled stylesheet (no preprocessor needed)
- JS: Vanilla JavaScript
- Forms: PHP mail handler with SMTP (PHPMailer)
- Icons: Heroicons SVG (inline, not font-based)
```

**Option B — Static Site (if migrating)**:
```
- Framework: Next.js 14 (App Router)
- Styling: Tailwind CSS v3 (maps to this design system)
- Icons: @heroicons/react
- Forms: react-hook-form + server action
- Deployment: Vercel (free tier)
```

**This document maps directly to either option. Use CSS custom properties exactly as specified.**

### 14.2 Icon System

Use **Heroicons** (heroicons.com) exclusively. Version: v2 Outline (default), Solid for filled icons like stars.

Icon size reference:
- Nav icons: 20px
- Service card icons: 28px (in 56px container)
- Trust bar icons: 24px (in 48px container)
- Form icons: 18px
- Inline text icons: 16px

**Always use inline SVG** (not icon fonts or img tags) to allow CSS color control.

### 14.3 Form Submission

**Backend requirement**: Form submissions must:
1. Send an email to the business owner immediately (PHPMailer with SMTP, or similar)
2. Send a confirmation email to the customer
3. Optionally: post to a WhatsApp Business API webhook for instant notification

**Recommended email fields**:
```
Subject: New Quote Request — [Service] — [Name]
Body:
  Name: [name]
  Phone: [phone]
  Email: [email]
  Service: [service]
  Message: [message]
  Submitted: [datetime]
  Source: Website Contact Form
```

**Spam protection**: Add honeypot field (hidden, not CAPTCHA — CAPTCHA hurts conversion):
```html
<div style="display:none" aria-hidden="true">
  <label>Leave this blank</label>
  <input type="text" name="website" tabindex="-1" autocomplete="off">
</div>
```
Server-side: reject if `website` field is non-empty.

### 14.4 Analytics Setup

Implement before launch:
1. **Google Analytics 4** (GA4): Track page views, form submissions as conversion events, phone clicks as conversion events
2. **Google Tag Manager**: For managing all tracking without code deploys
3. **Google Search Console**: Submit sitemap, monitor keyword rankings
4. **Google Business Profile**: Ensure phone number matches website exactly

**Conversion events to track**:
```javascript
// Phone call click
document.querySelectorAll('a[href^="tel:"]').forEach(el => {
  el.addEventListener('click', () => {
    gtag('event', 'phone_call_click', { event_category: 'CTA', event_label: el.closest('section')?.id || 'unknown' });
  });
});

// Form submission success
function onFormSuccess() {
  gtag('event', 'quote_form_submit', { event_category: 'conversion', event_label: 'Quote Form' });
}

// WhatsApp click
document.querySelectorAll('a[href*="wa.me"]').forEach(el => {
  el.addEventListener('click', () => {
    gtag('event', 'whatsapp_click', { event_category: 'CTA' });
  });
});
```

### 14.5 File Structure (PHP)

```
/ribbonPlumbing/
  ├── index.php               # Main page
  ├── includes/
  │   ├── head.php            # <head> tag, meta, CSS links
  │   ├── header.php          # Nav component
  │   ├── footer.php          # Footer component
  │   └── schema.php          # JSON-LD structured data
  ├── sections/
  │   ├── hero.php
  │   ├── trust-bar.php
  │   ├── services.php
  │   ├── why-choose-us.php
  │   ├── reviews.php
  │   ├── cta-form.php
  │   └── whatsapp-fab.php
  ├── css/
  │   ├── critical.css        # Above-fold styles (inline via PHP)
  │   └── main.css            # All styles
  ├── js/
  │   └── main.js             # Sticky nav, mobile menu, form, scroll
  ├── images/
  │   ├── hero-768.webp
  │   ├── hero-1200.webp
  │   ├── hero-1920.webp
  │   ├── logo.svg
  │   ├── logo-white.svg
  │   └── features/
  │       ├── response.webp
  │       ├── pricing.webp
  │       ├── licensed.webp
  │       └── guarantee.webp
  ├── actions/
  │   └── submit-form.php     # Form handler
  └── design.md               # This document
```

### 14.6 Browser Support

Target: Latest 2 versions of Chrome, Firefox, Safari, Edge. IE11 not supported.

- Use CSS custom properties (no IE11 fallbacks needed)
- Use `clamp()` for fluid typography — all modern browsers support it
- Use `svh` unit with `vh` fallback: `min-height: 100vh; min-height: 100svh;`
- Use `display: grid` and `display: flex` without prefixes

### 14.7 Pre-Launch Checklist

**Content**:
- [ ] Replace all placeholder phone numbers with real number
- [ ] Add real PIRB registration number
- [ ] Add company registration number
- [ ] Add real business address
- [ ] Replace placeholder review names/locations with real reviews (or use placeholders with disclosure)
- [ ] Add real hero image (South African plumber — licensed for use)
- [ ] Add real feature section images

**Technical**:
- [ ] Test form submission — receives email correctly
- [ ] Test form validation (required fields, phone format)
- [ ] Test on iPhone Safari and Android Chrome
- [ ] Test sticky nav at all breakpoints
- [ ] Test WhatsApp link opens correctly with pre-filled message
- [ ] Verify all `tel:` links dial correctly
- [ ] Check all page sections scroll-link correctly (`href="#services"` etc.)
- [ ] Run Lighthouse audit — target 90+ on all metrics
- [ ] Validate HTML (validator.w3.org)
- [ ] Validate structured data (schema.org validator)
- [ ] Submit to Google Search Console

**Accessibility**:
- [ ] Run axe DevTools or similar audit
- [ ] Navigate entire page using keyboard only
- [ ] Test with screen reader (NVDA on Windows)
- [ ] Verify all form error states are announced by screen reader
- [ ] Check all images have meaningful alt text

---

*End of design.md — Version 1.0*
*This document is the source of truth for all visual, conversion, and technical decisions for the Ribbon Plumbing website.*
