# Dockerfile — PHP 8.3 + Apache for Render
FROM php:8.3-apache

# Enable Apache modules + install MySQL client (for importing .sql, mysql CLI)
RUN a2enmod rewrite headers \
 && apt-get update \
 && apt-get install -y --no-install-recommends default-mysql-client \
 && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache doc root
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Allow .htaccess overrides
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# App source
COPY . /var/www/html

# Permissions (adjust if your app writes elsewhere)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
