# EventsSmarter Backend API v1 — offline development copy

Laravel 10 backend for EventsSmarter, an event platform: events, tickets and ticket
bundles, vouchers and promo codes, cart and checkout, organizations and subscribers,
and live streams/meetings. About 12,000 lines of PHP in `app/`, 222 routes (93 API,
129 web) and 119 Blade views.

## Where this code comes from

This is the owner's own product, published by Athletic Junction LLC (package name
`athleticjunctionllc/eventssmarter`). This folder is a cleaned copy made for
development on a machine with no internet access. It does **not** connect to, and
must never be pointed at, the production system.

## What was removed from this copy

- All `.env*` files with real credentials. Use `.env.example`; every value in it is fake.
- Git history (it contains a production Telescope data dump).
- Production logs (`storage/logs`), cached sessions and compiled views.
- A production Telescope request dump (`database/*.rar`).
- Deployment files: `Dockerfile`, `apprunner.yaml`, `deploy/`, `scripts/`, `.github/workflows`.
- Photos and images of unknown licence, a photo of a real person, card-brand logos
  and two real arena seat maps. They are replaced with generated placeholders of the
  same name. Only the product's own logos were kept.
- A staff member's personal email (Telescope gate) and the site-verification token.

## Running offline

```
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
composer install && npm install && npm run build
php artisan serve
```

Mail, broadcasting, queues and file storage stay on the local machine. Payment,
SMS, video, maps, crypto and AI calls are not yet replaced by local fakes, and most
tables have no migrations yet. Both are the first milestones of the planned work.
