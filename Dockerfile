FROM php:8.1-apache

RUN apt-get update && apt-get install -y libcurl4-openssl-dev && \
    docker-php-ext-install curl mysqli pdo pdo_mysql

RUN a2enmod rewrite

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

EXPOSE ${PORT}

CMD ["apache2-foreground"]
