FROM php:7.0-apache
RUN apt-get update && \
    apt-get clean
COPY plan4us /var/www/html/