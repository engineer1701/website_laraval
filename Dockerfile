FROM php:8.1-fpm

# system deps
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zlib1g-dev libpng-dev libonig-dev libxml2-dev libsqlite3-dev pkg-config \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip exif pcntl bcmath

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# copy files
COPY . /var/www/html

# install PHP deps
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# generate app key (safe during build - will be overridden by env in production)
RUN php artisan key:generate --ansi || true

# permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html/storage || true

EXPOSE 9000
CMD ["php-fpm"]
