FROM php:8.1-apache

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

ENV APACHE_DOCUMENT_ROOT /var/www/html

CMD ["apache2-foreground"]
