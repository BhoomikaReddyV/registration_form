FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files into container
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 8080 for Render
EXPOSE 8080

# Apache listens on port 8080 instead of 80
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf

CMD ["apache2-foreground"]
