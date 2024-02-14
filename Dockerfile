FROM serversideup/php:beta-fpm-nginx

# Copy the application code to the container
COPY --chown=www-data:www-data . /var/www/html

# Copy the nginx configuration to the container
COPY ./docker/nginx-site.conf /etc/nginx/sites-available/default

# Install make
RUN apt-get update && \
    apt-get install -y make

# Install app
RUN make setup

# Run any necessary Laravel initialization scripts
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Expose port 80 to the host
EXPOSE 80