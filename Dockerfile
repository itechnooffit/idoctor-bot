FROM php:8.1-apache
RUN a2dismod mpm_event || true
RUN a2enmod mpm_prefork
COPY . /var/www/html/
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
CMD ["apache2-foreground"]
