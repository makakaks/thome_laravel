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

# Copy application code
COPY . /var/www/html

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ✅ Create .env file during build
RUN echo "APP_NAME=Laravel\n\
APP_ENV=production\n\
APP_KEY=\n\
APP_DEBUG=false\n\
APP_URL=https://thometestdeploy-production.up.railway.app\n\
LOG_CHANNEL=stack\n\
DB_CONNECTION=mysql\n\
DB_HOST=127.0.0.1\n\
DB_PORT=3306\n\
DB_DATABASE=laravel\n\
DB_USERNAME=root\n\
DB_PASSWORD=\n\
CACHE_DRIVER=file\n\
QUEUE_CONNECTION=sync\n\
SESSION_DRIVER=file\n\
SESSION_LIFETIME=120" > /var/www/html/.env

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80

# CMD: generate key and cache config if needed
CMD ["sh", "-c", "\
  if grep -q '^APP_KEY=$' .env || ! grep -q '^APP_KEY=' .env; then \
    php artisan key:generate --force; \
  fi && \
  php artisan config:cache && \
  php artisan route:cache && \
  php artisan view:cache && \
  apache2-foreground"]
