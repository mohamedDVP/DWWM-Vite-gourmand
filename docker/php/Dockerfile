FROM php:8.5-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

RUN docker-php-ext-install \
    intl \
    zip \
    pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf