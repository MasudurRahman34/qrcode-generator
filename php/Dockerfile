FROM php:8.2-fpm-alpine

# Install system dependencies and PHP GD extension
RUN apk update && apk add --no-cache \
    libpng \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    zlib-dev \
    libzip-dev \
    curl \
    unzip \
    git \
    bash \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy files from host to container
COPY . .

# Install PHP dependencies using Composer
RUN composer install
