FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite

# Copy application source
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port (Render sets PORT env var, Apache listens on 80 by default, 
# we might need to configure Apache to listen on $PORT if Render requires it, 
# but usually Render maps external port to 80 for Docker).
EXPOSE 80
