# Use an official PHP image as the base image
FROM php:8.2-apache

# Copy the PHP code to the Apache web root directory
COPY ./webroot/index.php /var/www/html/
COPY ./app /var/www/app

# Expose port 80 to allow external access to the Apache web server
EXPOSE 80

# Start the Apache web server
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
