FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    curl \
    npm

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
