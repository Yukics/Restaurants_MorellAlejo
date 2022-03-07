FROM php:8.0.0-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN echo "session.save_path=\"/tmp\"" >> /usr/local/etc/php/php.ini