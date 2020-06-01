FROM php:7.3-rc-apache-stretch
RUN apt-get update && \
	apt search php7 && \
    apt-get clean
COPY plan4us/* /var/www/html/