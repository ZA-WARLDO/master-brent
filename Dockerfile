FROM php:8.2-fpm-alpine

USER root
RUN apk add --no-cache nginx wget php php-fpm  php-pdo php-pdo_mysql

RUN docker-php-ext-install pdo_mysql

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app
COPY ./src /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && \
    /usr/local/bin/composer install --no-dev

RUN chown -R www-data: /app

RUN chmod a+x /app/docker/startup.sh
CMD sh /app/docker/startup.sh
