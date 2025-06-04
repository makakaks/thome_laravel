FROM php:8.2-apache

# ติดตั้ง dependencies ที่ Laravel ต้องการ
RUN apt-get update && apt-get install -y \
    git curl zip unzip libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring xml zip

# เปิดใช้งาน Apache Rewrite Module
RUN a2enmod rewrite

# คัดลอก source code ไปยัง container
COPY . /var/www/html/

# ตั้ง working directory
WORKDIR /var/www/html

# ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ตั้ง permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ติดตั้ง dependencies ของ Laravel
RUN composer install --no-dev --optimize-autoloader

# เปิดพอร์ต 80
EXPOSE 80
