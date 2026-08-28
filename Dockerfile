FROM php:8.1-cli

# system deps
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zlib1g-dev libpng-dev libonig-dev libxml2-dev libsqlite3-dev pkg-config \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip exif pcntl bcmath \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# copy files
COPY . /var/www/html

# remove stale Laravel config cache and install dependencies
RUN rm -f .env bootstrap/cache/config.php \
    && composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && cp .env.example .env \
    && mkdir -p database bootstrap/cache storage/framework/cache storage/framework/sessions storage/framework/views storage/logs \
    && touch database/database.sqlite \
    && php artisan key:generate --ansi \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

EXPOSE 10000
CMD ["sh", "-lc", "if [ -z \"${APP_URL:-}\" ] && [ -n \"${RENDER_EXTERNAL_URL:-}\" ]; then export APP_URL=\"$RENDER_EXTERNAL_URL\"; fi && php artisan migrate --force && php artisan db:seed --class=DatabaseSeeder --force && php artisan config:clear && php artisan route:clear && php artisan view:clear && php artisan config:cache && php artisan route:cache && exec php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
