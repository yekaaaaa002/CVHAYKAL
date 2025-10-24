# Gunakan PHP 8.2 (stabil dan didukung Railway)
FROM php:8.2-apache

# Install ekstensi Laravel yang umum
RUN docker-php-ext-install pdo pdo_mysql

# Salin semua file ke container
COPY . /var/www/html/

# Ubah permission storage & bootstrap agar bisa diakses
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Aktifkan mod_rewrite untuk Laravel route
RUN a2enmod rewrite
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# **Ganti DocumentRoot ke folder public**
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/
