# syntax=docker/dockerfile:1

# ---------- Stage 1: build front-end assets (Vite) ----------
FROM node:20-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
# Full source so Tailwind can scan the Blade templates for used classes
COPY . .
RUN npm run build

# ---------- Stage 2: PHP + Apache runtime ----------
FROM php:8.3-apache

# System libraries + PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip libzip-dev libonig-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# App source + compiled assets
COPY . .
COPY --from=assets /app/public/build ./public/build

# PHP dependencies (production). package:discover runs at container start.
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts \
    && chown -R www-data:www-data storage bootstrap/cache

# Serve Laravel's /public directory, with .htaccess rewrites enabled
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && printf '<Directory ${APACHE_DOCUMENT_ROOT}>\n    AllowOverride All\n    Require all granted\n</Directory>\n' > /etc/apache2/conf-available/laravel.conf \
    && a2enconf laravel

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN sed -i 's/\r$//' /usr/local/bin/docker-entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
