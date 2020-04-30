FROM php:5.5-fpm-alpine

RUN apk add --update --no-cache --virtual=.build-dependencies \
    binutils autoconf gcc g++ make tzdata \
 && apk add bash \
 && pecl install xdebug-2.5.5 \
 && apk del .build-dependencies \
 && docker-php-ext-install pdo_mysql mysqli mbstring xml mcrypt gd mysqlnd \
 && docker-php-ext-enable xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
