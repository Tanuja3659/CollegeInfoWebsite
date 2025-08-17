FROM php:8.2-apache

# Make Composer happier in Docker and avoid memory errors
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_MEMORY_LIMIT=-1 \
    APACHE_DOCUMENT_ROOT=/var/www/html/public

# Install system packages & PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    libonig-dev libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && a2enmod rewrite

# Point Apache to /public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf /etc/apache2/conf-available/*.conf

# Use production PHP config
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# App code
WORKDIR /var/www/html
COPY . .

# Install PHP deps (no dev)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

EXPOSE 80

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

CMD ["apache2-foreground"]
