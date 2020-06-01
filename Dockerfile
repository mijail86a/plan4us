FROM php:7.0-apache
RUN sudo add-apt-repository ppa:ondrej/php && \
	sudo apt-get update && \
	sudo apt search php7 && \
    sudo apt-get install -y php7.0-mysql && \
    apt-get clean
COPY plan4us/* /var/www/html/