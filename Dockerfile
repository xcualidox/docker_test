FROM php:7.4-apache
COPY src/index.php /var/www/html/
EXPOSE 80