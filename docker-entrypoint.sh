#!/usr/bin/env sh
set -e

# Render provides the public URL and the port the service must bind to.
export APP_URL="${RENDER_EXTERNAL_URL:-${APP_URL:-http://localhost}}"
: "${PORT:=10000}"

# Point Apache at Render's $PORT
sed -ri "s/^Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Writable runtime dirs
mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true

# Discover packages + cache config/views with the runtime environment.
# (No route:cache — routes use closures, which cannot be cached.)
php artisan package:discover --ansi || true
php artisan config:cache
php artisan view:cache

exec apache2-foreground
