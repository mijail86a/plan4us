FROM php:7.0-apache
RUN apt-get update && \
    apt-get install -y php7-mysql && \
    apt-get clean
COPY plan4us/* /var/www/html/