FROM serversideup/php:8.2-fpm-nginx

# Copy laravel project files
COPY . /var/www/html

COPY ./docker/nginx-site.conf /var/www/html/conf/nginx/nginx-site.conf

# Storage Volume
VOLUME /var/www/html/storage

WORKDIR /var/www/html

# Custom cache invalidation / optional
#ARG CACHEBUST=1

RUN make setup

# Fix permissions
RUN chown -R www-data:www-data /var/www/html

USER www-data