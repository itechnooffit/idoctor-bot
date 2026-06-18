FROM php:8.1-apache

RUN apt-get update && apt-get install -y libcurl4-openssl-dev && docker-php-ext-install curl mysqli pdo pdo_mysql

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html
RUN a2enmod rewrite

EXPOSE 80
