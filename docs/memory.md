# Ribbon Plumbing And Gas Heating — AI Agent Memory
> Last Updated: 2026-06-18
> Update this file whenever a significant decision is made or a new component/page is added.

---

## PROJECT IDENTITY

| Field | Value |
|---|---|
| **Business Name** | Ribbon Plumbing And Gas Heating |
| **Short Name** | Ribbon Plumbing |
| **Location** | Cape Town, Western Cape, South Africa |
| **Founded** | Late 2024 |
| **Website Domain** | ribbonplumbing.co.za (confirm with client) |
| **Primary Phone** | [TO BE CONFIRMED] |
| **WhatsApp** | [TO BE CONFIRMED — same number or separate] |
| **Email** | info@ribbonplumbing.co.za (confirm with client) |
| **Facebook** | facebook.com/people/Ribbon-Plumbing-And-Gas-Heating/61568242348054 |
| **PIRB Number** | [TO BE CONFIRMED with client] |
| **SAQCC Gas Number** | [TO BE CONFIRMED with client] |
| **Stack** | PHP 8.x · Apache (WAMP64) · Vanilla CSS · Vanilla JS |

**Mission**: Convert Cape Town homeowners and property managers with plumbing or gas problems into booked jobs.

**Primary Goal**: Phone calls (click-to-call)
**Secondary Goal**: WhatsApp messages
**Tertiary Goal**: Quote form submissions

---

## BRAND MEMORY

### Colors
```css
--color-primary:          #1A3A5C   /* Navy blue */
--color-primary-light:    #2A5280
--color-primary-lighter:  #EBF2FA
--color-accent:           #F97316   /* Orange — ALL CTAs */
--color-accent-dark:      #EA6C0A   /* CTA hover */
--color-accent-light:     #FFF4ED
--color-gray-900:         #0F172A   /* Heading text */
--color-gray-700:         #334155   /* Body text */
--color-gray-500:         #64748B   /* Captions */
--color-gray-200:         #E2E8F0   /* Borders */
--color-gray-100:         #F1F5F9
--bg-white:               #FFFFFF
--bg-light:               #F8FAFF
--bg-dark:                #0F2340   /* CTA section + footer */
--bg-dark-card:           #162B4D
--color-success:          #10B981
--color-warning:          #F59E0B   /* Stars */
--color-error:            #EF4444
```

### Fonts
| Role | Font | Weights | File |
|---|---|---|---|
| Display / H1 | Sora | 700, 800 | Google Fonts |
| H2, H3, Nav, Buttons | Plus Jakarta Sans | 500, 600, 700 | Google Fonts |
| Body, Forms, Captions | Inter | 400, 500 | Google Fonts |

### Type Scale
```
H1 Display:  clamp(2.5rem, 5vw, 4rem)    Sora 800     tracking -0.03em
H2:          clamp(1.875rem, 3.5vw, 2.75rem)  Plus Jakarta Sans 700  -0.02em
H3:          clamp(1.25rem, 2vw, 1.5rem)  Plus Jakarta Sans 600   -0.01em
Overline:    0.8125rem  Inter 600  uppercase  tracking 0.12em
Body Large:  clamp(1rem, 1.5vw, 1.1875rem)  Inter 400  line-height 1.65
Body:        1rem  Inter 400  line-height 1.6
Small:       0.875rem   Caption: 0.75rem
```

### Tone of Voice
- Direct, calm, professional, locally grounded
- South African English — "geyser" not "water heater", "CoC" in full on first use
- Never corporate jargon. Never "we are proud to offer…"
- Emergency tone: Action-oriented. "We're on our way." "Help is coming."
- Billing tone: Transparent. "Fixed price quoted before we start."
- Bilingual awareness: Many Cape Town customers are Afrikaans-speaking

### CTA Language
- Primary phone: "Call Now" / "📞 Call Now: [number]"
- Primary form: "Request Free Quote" / "Get a Free Quote"
- WhatsApp: "Chat on WhatsApp" / "WhatsApp Us"
- Urgency: "Available 24/7" / "Emergency Response" / "We're On Our Way"
- Trust closer: "Fixed price. 12-month guarantee. PIRB registered."

---

## BUSINESS MEMORY

### Services Offered
**Plumbing:**
- Emergency Plumbing (24/7)
- Burst Pipe Repair
- Leak Detection
- Drain Cleaning & Unblocking
- Geyser Repair & Replacement (electric, solar, gas)
- Pipe Repairs & Installation
- Bathroom & Kitchen Plumbing
- Commercial Plumbing

**Gas (SAQCC Gas registered):**
- Gas Geyser Installation
- Gas Line Installation
- Gas Hob & Appliance Installation
- Gas Compliance Certificate (CoC)
- Gas System Repairs & Servicing

### Service Areas (Cape Town Metro)
- Atlantic Seaboard: Sea Point, Green Point, Camps Bay, Mouille Point, Fresnaye
- City Bowl: CBD, Gardens, Tamboerskloof, De Waterkant
- Southern Suburbs: Claremont, Rondebosch, Newlands, Kenilworth, Wynberg, Plumstead, Constantia, Tokai, Pinelands
- Northern Suburbs: Bellville, Durbanville, Parow, Goodwood, Brackenfell, Table View, Milnerton, Bloubergstrand
- Helderberg: Somerset West, Strand, Gordon's Bay

### Key Differentiators
1. PIRB registered (plumbing) + SAQCC Gas certified (gas) — both under one company
2. Fixed price quoted in writing before any work starts
3. 12-month workmanship guarantee on all work
4. Gas Certificate of Compliance (CoC) issued for all gas installations
5. Available 24/7 for emergencies
6. 2-hour arrival window commitment (not vague "sometime today")
7. Call 20 minutes before arrival

### Guarantees & Trust Signals
- 12-Month Workmanship Guarantee
- Fixed Price Promise (quote before starting)
- PIRB Registration: [NUMBER — confirm with client]
- SAQCC Gas Registration: [NUMBER — confirm with client]
- Public Liability Insurance: R5M+ [confirm with client]
- Google Rating: [confirm — target 4.9+]

### Pricing Context (Cape Town 2025)
- Emergency call-out: R500–R1,000
- Standard hourly: R400–R900/hr
- Emergency hourly: R600–R1,300/hr (1.5–2× standard)
- Geyser replacement (electric, supply + install): R7,000–R10,500
- Gas geyser installation: R3,450–R9,500+

---

## DESIGN MEMORY

### Design References Used
- Hero layout inspiration: plumbee.framer.website
- Site structure inspiration: springkleaners.onrender.com
- Full spec documented in: `design.md`

### Layout Decisions
| Decision | Rationale |
|---|---|
| Section background alternation: White → #F8FAFF → White → Dark | Maintains scroll rhythm, prevents visual fatigue |
| Hero overlay: left-heavy dark gradient | Text readable on left; photo visible on right |
| Trust bar: solid navy background | Immediately reduces anxiety post-hero |
| CTA section: dark navy background | Creates psychological "decision moment" |
| Footer: same dark navy as CTA section | Visual continuity |

### Navigation Structure
- Desktop: Logo left · Links center · Phone + CTA button right
- Transparent at top (over hero) → white with shadow after 80px scroll
- Mobile: Logo + hamburger only. Drawer slides from right.
- Links: Services · About · Reviews · Contact

### Site Sections (Homepage)
1. Sticky Navigation
2. Hero (full-viewport, background image, left-aligned content)
3. Trust Bar (3 badges: Insured · Google Rating · PIRB Registered)
4. Services (3-col card grid, icon + headline + copy + link)
5. Why Choose Us (4 alternating image+text rows)
6. Reviews (3-col card grid, 6 review cards)
7. CTA Section (2-col: copy+checklist left, form right)
8. Footer (4-col grid: brand · links · service areas · contact)

### Component Decisions
- Service cards: Left orange accent border appears on hover
- Review cards: Star rating + Google icon top row; blockquote body; avatar + name + suburb footer
- Feature rows: Image border-radius 20px with zoom-on-hover; proof pill with icon + text
- Buttons: min-height 52px (desktop), full-width (mobile)
- Floating WhatsApp FAB: 56px circle, bottom-right, desktop only
- Mobile bottom bar: Fixed, full-width, 2-column (Call | WhatsApp)

### Mobile Decisions
- Mobile bottom sticky bar (60px) replaces floating buttons on phones
- WhatsApp FAB hidden on mobile (bar handles it)
- Hero overlay changes direction on mobile (top-to-bottom gradient for full-cover legibility)
- All grid columns collapse to 1-column on mobile
- Reviews become horizontal scroll carousel (CSS scroll-snap)
- Minimum touch target: 44×44px everywhere

---

## SEO MEMORY

> Full strategy in `seo.md`. Summary only here.

### Primary Keywords
| Keyword | Intent | Priority |
|---|---|---|
| emergency plumber Cape Town | Immediate emergency | Critical |
| plumber Cape Town | General service intent | Critical |
| 24 hour plumber Cape Town | Emergency | Critical |
| geyser repair Cape Town | Service intent | High |
| blocked drain Cape Town | Service intent | High |
| gas geyser installation Cape Town | Gas service | High |
| burst pipe repair Cape Town | Emergency | High |
| gas installation Cape Town | Gas service | High |
| gas compliance certificate Cape Town | Documentation need | Medium |
| plumber near me | Location-implicit | Critical (Maps) |

### Local SEO Strategy
- Google Business Profile: Primary ranking signal for Maps 3-pack
- Suburb landing pages: One page per major suburb (12+ planned)
- Review velocity: 2–4 new Google reviews per week target
- NAP consistency: Name, Address, Phone identical everywhere

### URL Structure
```
/ (home)
/emergency-plumber-cape-town
/services/
/geyser-repair-cape-town
/gas-installation-cape-town
/blocked-drains-cape-town
/leak-detection-cape-town
/gas-compliance-certificate-cape-town
/plumber-sea-point
/plumber-claremont
/plumber-table-view
[etc. — see seo.md for full list]
```

### On-Page SEO Rules
- H1: one per page, contains primary keyword + "Cape Town"
- Title: `[Primary Keyword] | Ribbon Plumbing Cape Town` (max 60 chars)
- Meta description: includes keyword + CTA (max 155 chars)
- Schema: LocalBusiness + PlumbingService + FAQPage where applicable

---

## CONVERSION MEMORY

### CTA Hierarchy
1. **Phone call** — tel: link, orange button, sticky nav, mobile bar, hero
2. **WhatsApp** — wa.me link, floating button (desktop), mobile bar, CTA section
3. **Quote form** — CTA section, contact page, service pages

### Lead Capture
- Form fields: Name (required), Phone (required), Service (required dropdown), Email (optional), Message (optional)
- Anti-spam: Honeypot field `name="website"` — hidden, rejected server-side if populated
- Response time standard: Call/WhatsApp back within 5 minutes of submission

### Contact Methods on Site
```
Phone:     tel:[number]           → Calls directly
WhatsApp:  wa.me/27[number]?text= → Pre-filled message
Email:     info@ribbonplumbing.co.za
Form:      /actions/submit-form.php (AJAX, PHP handler)
```

---

## TECHNICAL MEMORY

### Architecture Decisions
| Decision | Why |
|---|---|
| PHP includes (no framework) | Matches existing wamp64 setup; no build step needed |
| Vanilla CSS with custom properties | No preprocessor dependency; agents can read/write it easily |
| Vanilla JS only | No dependency management; no framework mismatch risk |
| Critical CSS inlined via PHP | Eliminates render-blocking CSS for LCP performance |
| WebP images with srcset | Performance requirement; < 500KB initial load |
| Heroicons SVG (inline) | CSS color control; no icon font flicker; accessible |
| Honeypot spam filter | Better UX than CAPTCHA; adequate for local service business volume |

### Reusable Components Registry
| Component | File | Notes |
|---|---|---|
| Site Header / Nav | `includes/header.php` | Transparent→white on scroll; mobile drawer |
| Site Footer | `includes/footer.php` | 4-col grid; dark navy background |
| Hero Section | `sections/hero.php` | Full viewport; background image; left-aligned content |
| Trust Bar | `sections/trust-bar.php` | 3 badges on navy background |
| Services Grid | `sections/services.php` | 3-col auto-fill grid; 6 cards |
| Why Choose Us | `sections/why-choose-us.php` | 4 alternating image/text rows |
| Reviews | `sections/reviews.php` | 3-col grid; 6 review cards |
| CTA + Form | `sections/cta-form.php` | 2-col dark section; AJAX form |
| WhatsApp FAB | `sections/whatsapp-fab.php` | Fixed bottom-right; desktop only |
| Mobile Bottom Bar | `includes/header.php` (or own file) | Fixed bottom; Call + WhatsApp |
| JSON-LD Schema | `includes/schema.php` | LocalBusiness + PlumbingService |
| Head / Meta | `includes/head.php` | Google Fonts, critical CSS, preloads |
| Form Handler | `actions/submit-form.php` | PHPMailer SMTP; honeypot check |

*Add new components to this registry when created.*

### Pages Registry
| Page | File | Status | Primary Keyword |
|---|---|---|---|
| Homepage | `index.php` | Pending build | plumber cape town |
| Emergency Plumbing | `pages/emergency-plumbing.php` | Pending | emergency plumber cape town |
| Geyser Repair | `pages/geyser-repair.php` | Pending | geyser repair cape town |
| Gas Installation | `pages/gas-installation.php` | Pending | gas installation cape town |
| Blocked Drains | `pages/blocked-drains.php` | Pending | blocked drain cape town |
| Leak Detection | `pages/leak-detection.php` | Pending | leak detection cape town |
| Gas CoC | `pages/gas-coc.php` | Pending | gas compliance certificate cape town |
| About | `pages/about.php` | Pending | — |
| Contact | `pages/contact.php` | Pending | — |

*Update status to "Live" when deployed. Add suburb pages as created.*

### Folder Conventions
```
sections/       → Homepage sections (PHP partials)
includes/       → Global components (nav, footer, head, schema)
pages/          → Individual standalone pages
pages/locations/→ Suburb landing pages
css/            → critical.css + main.css
js/             → main.js (single JS file for MVP)
images/         → WebP images, SVG logos
actions/        → Server-side handlers (form submission)
```

---

## KNOWN CONSTRAINTS

### Things Agents Must NEVER Change
1. The mobile sticky bottom bar (Call + WhatsApp) — removing it kills mobile conversions
2. The WhatsApp floating button on desktop — critical conversion element
3. Existing page URLs — changing them breaks SEO and any existing links
4. The honeypot field on forms — removing it opens spam vector
5. Google Fonts `display=swap` parameter — removing it causes FOIT
6. `fetchpriority="high"` and `loading="eager"` on hero image — LCP performance critical
7. `aria-*` attributes on any component — accessibility compliance
8. Phone number `tel:` link format — must be international format `+27XXXXXXXXXX`

### Branding Restrictions
- Logo: Never stretch, recolor, or recreate. Use provided SVG.
- Colors: Never add new colors to the system without updating `design.md` and this file
- Fonts: Only Sora, Plus Jakarta Sans, Inter. Never substitute or add others.
- Orange (#F97316) is for CTAs only — never use for headings, body text, or decorative elements

### Design Restrictions
- Section backgrounds must follow the established alternation pattern
- Cards must use `border-radius: 12px` — not rounded-full, not sharp
- Buttons must maintain `min-height: 52px` for touch targets
- Never use `border-radius` greater than 20px on section containers

### SEO Restrictions
- Never change `<h1>` content without verifying keyword strategy in `seo.md`
- Never remove internal links to/from high-priority service pages
- Never add `noindex` to any public-facing page without explicit instruction
- Never change the canonical URL structure of any live page

### Copy Restrictions
- Always say "geyser" (not "water heater" or "hot water cylinder")
- Always say "gas CoC" or "Gas Certificate of Compliance" (not just "certificate")
- Always say "PIRB registered" (not just "registered plumber")
- Always say "SAQCC Gas" (not just "gas registered")
- Location: **Cape Town** — never Johannesburg or any other city

---

## FUTURE IMPROVEMENTS BACKLOG

### High Priority
1. Build suburb landing pages (Sea Point, Claremont, Table View, Bellville, Rondebosch) — direct SEO impact
2. Implement blog section + first 5 posts (emergency guide, gas geyser guide, blocked drain guide, CoC guide, Cape Town water system guide)
3. Set up Google Analytics 4 event tracking (phone calls, WhatsApp clicks, form submissions)
4. Add real photos of completed work (plumbing + gas) to replace placeholder imagery
5. Implement CRM integration — connect form to Jobber or similar trade CRM

### Medium Priority
6. Add individual service pages (leak detection, commercial plumbing, bathroom plumbing)
7. Create dedicated gas services hub page
8. Add FAQ page with schema markup (FAQPage structured data)
9. Set up Google Ads call tracking number (different from main number for attribution)
10. Afrikaans translation or bilingual callouts for Northern Suburbs audience
11. WhatsApp Business automation — instant response with "Thanks, we'll call you in 5 min"
12. Before/after photo gallery section or page

### Low Priority
13. Live chat integration (if call volume is too high to answer all immediately)
14. Online booking calendar for non-emergency appointments
15. Customer portal for invoice access and job history
16. Service area map (Google Maps embed showing coverage)
17. Team page with technician profiles (builds trust)
18. Video testimonials section
19. Maintenance contract sign-up landing page
20. Solar geyser installation page (requires additional certification — Phase 2 service)

---

*Update this file every session. Date the Last Updated line.*
