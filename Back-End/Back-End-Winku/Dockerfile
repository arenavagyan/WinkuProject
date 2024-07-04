# Use the official PHP 8.2 Apache image as a base image
FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Copy Apache configuration file
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Install PHP dependencies
RUN composer install


# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
