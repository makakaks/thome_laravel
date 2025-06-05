FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git zip unzip curl libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set Apache DocumentRoot to Laravel public directory
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set permissions for Laravel directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Ensure .env exists and generate APP_KEY (only if .env exists)
RUN if [ -f .env ]; then \
        composer install --no-dev --optimize-autoloader && \
        php artisan key:generate && \
        php artisan config:cache && \
        php artisan route:cache && \
        php artisan view:cache ; \
    else \
        echo ".env file missing! Please add it before build." && exit 1 ; \
    fi

EXPOSE 80

CMD ["apache2-foreground"]
