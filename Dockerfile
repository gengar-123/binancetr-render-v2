# Dockerfile — PHP 8.3 + Apache for Render
FROM php:8.3-apache

# Enable Apache modules
RUN a2enmod rewrite headers

# Install PHP extensions commonly used by legacy PHP apps
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set Apache doc root (default: /var/www/html)
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Update Apache vhost to allow .htaccess overrides
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Copy app source (Render will build the image from this repo)
COPY . /var/www/html

# Permissions (optional; adjust if your app writes to specific dirs)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

# Render runs Docker images with your CMD; Apache is already the default
# so we don't need to set CMD. The base image starts Apache in the foreground.
