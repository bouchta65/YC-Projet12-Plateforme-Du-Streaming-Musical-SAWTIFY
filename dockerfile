# Use official PHP image with Apache
FROM php:8.0-apache

# Install necessary packages for PostgreSQL and PHP extensions
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Enable Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Fix AllowOverride issue (allow .htaccess overrides inside the correct <Directory> block)
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set correct permissions for the web server user (www-data)
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Expose port 80 for web server access
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
