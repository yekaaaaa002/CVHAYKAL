# Gunakan PHP 8.2
FROM php:8.2-apache

# Install ekstensi Laravel yang umum
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Salin semua file ke container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install dependensi Laravel
RUN composer install --no-dev --optimize-autoloader

# Ubah permission storage & bootstrap agar bisa diakses
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Aktifkan mod_rewrite
RUN a2enmod rewrite
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set DocumentRoot ke public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Expose port
EXPOSE 80
