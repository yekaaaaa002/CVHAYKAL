# Gunakan PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi Laravel dan tools untuk composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Aktifkan mod_rewrite
RUN a2enmod rewrite

# Salin Composer dari image resmi
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Salin semua file ke container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Set DocumentRoot ke public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Install dependensi Laravel
RUN composer install --no-dev --optimize-autoloader

# Generate APP_KEY jika belum ada
RUN php artisan key:generate || true

# Set permission folder storage & bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port Apache
EXPOSE 80

# Jalankan Apache di foreground
CMD ["apache2-foreground"]
