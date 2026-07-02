# Ribbon Plumbing & Gas Heating

Marketing / lead-generation website for **Ribbon Plumbing And Gas Heating** — a PIRB & SAQCC-Gas registered plumbing and gas company serving Cape Town. A single-page site whose job is to turn visitors into phone calls, WhatsApp messages, and quote-form submissions.

Built with **Laravel** (PHP 8.3), **Vite**, and hand-written vanilla CSS/JS. Design system: warm-black `#252422` + vivid-vermillion `#EB5E28` on a cream paper background.

---

## Page structure

Hero → Trust review scroll → Services (bento) → Why Us (sticky-stack) → Reviews (image + scrolling wall) → Process → Service Areas → FAQ → Contact/CTA → Footer.

---

## Local setup

Requirements: **PHP 8.3+**, **Composer**, **Node 20+**.

```bash
# 1. Install dependencies
composer install
npm install

# 2. Environment
cp .env.example .env
php artisan key:generate

# 3. Database (SQLite by default)
touch database/database.sqlite      # Windows: type nul > database\database.sqlite
php artisan migrate

# 4. Run (two terminals)
php artisan serve                   # http://127.0.0.1:8000
npm run dev                         # Vite dev server (hot reload)
```

Production asset build:

```bash
npm run build
```

---

## Contact form email

The `/contact` route validates the submission, **logs every lead** (so none are lost), and **emails it** to `CONTACT_EMAIL` with the customer set as `Reply-To`. Both the hero form and the footer contact form post here.

Configure in `.env`:

```dotenv
MAIL_MAILER=smtp                    # use "log" for local dev (writes to storage/logs/laravel.log)
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_SCHEME=smtp
MAIL_USERNAME=your-smtp-user
MAIL_PASSWORD=your-smtp-password
MAIL_FROM_ADDRESS="noreply@yourdomain.co.za"
MAIL_FROM_NAME="Ribbon Plumbing And Gas Heating"
CONTACT_EMAIL="where-leads-should-go@yourdomain.co.za"
```

> Use a `MAIL_FROM_ADDRESS` on a domain you control with SPF/DKIM configured, or leads may land in spam.

---

## Deploy to Render (Docker Blueprint)

Render has no native PHP runtime, so the app ships as a Docker container (`Dockerfile` + `docker-entrypoint.sh`), described declaratively in `render.yaml`.

1. **Push** this repo to GitHub (done).
2. In Render: **New → Blueprint**, connect the `shifttechgs/ribbon` repo. Render reads `render.yaml` and creates the `ribbon-plumbing` web service.
3. Set the secret env vars (marked `sync: false`) when prompted:
   - `APP_KEY` — run `php artisan key:generate --show` locally and paste the `base64:…` value.
   - `MAIL_USERNAME`, `MAIL_PASSWORD` — your SMTP credentials.
4. **Apply** → Render builds the image and deploys. `APP_URL` is set automatically from the Render URL.

Notes:
- **No database required** in production: sessions/cache use the `file` driver and the queue is `sync`, so there are no migrations to run.
- The **free plan sleeps** after inactivity (slow first request). Use `starter` for a production site (edit `plan:` in `render.yaml`).
- Logs (including captured leads) stream to Render's log viewer via `LOG_CHANNEL=stderr`.
- `autoDeploy` is on — pushing to the deploy branch redeploys automatically.

---

## Project notes

- `docs/` holds the original strategy documents (business, SEO, design, instructions). The design/palette has since evolved — treat the live CSS as the source of truth.
- Finalise before launch: reviewer photo, service-card background photos, footer registration numbers (`PIRB Reg. No. XXXXX`), and the "Read all reviews on Google" link (point it at your Google Business Profile).
