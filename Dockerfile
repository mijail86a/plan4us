FROM php:7.0-apache
RUN add-apt-repository ppa:ondrej/php && \
	apt-get update && \
	apt search php7 && \
    apt-get install -y php7.0-mysql && \
    apt-get clean
COPY plan4us/* /var/www/html/