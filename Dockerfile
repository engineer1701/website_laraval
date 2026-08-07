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
RUN rm -f bootstrap/cache/config.php \
    && composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && if [ ! -f .env ]; then cp .env.example .env; fi \
    && mkdir -p database && touch database/database.sqlite \
    && php artisan key:generate --ansi \
    && chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html/storage

EXPOSE 10000
CMD ["sh", "-lc", "rm -f bootstrap/cache/config.php && cp .env.example .env && mkdir -p database && touch database/database.sqlite && if [ -n \"$APP_KEY\" ]; then sed -i \"s|^APP_KEY=.*|APP_KEY=$APP_KEY|\" .env; fi && php artisan key:generate --ansi --force 2>/dev/null || true && php artisan migrate --force && php artisan db:seed --class=DatabaseSeeder --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
