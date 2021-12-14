FROM php:8.0.2-fpm

RUN apt-get update
RUN apt-get install -y git curl zip vim zlib1g-dev unzip 
RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www
