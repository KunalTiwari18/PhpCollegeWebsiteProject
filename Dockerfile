FROM php:8.2-apache

# Copy files to Apache directory
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
