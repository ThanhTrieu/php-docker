FROM php:8.0-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
	libzip-dev\
    libpng-dev \
    libonig-dev \
    libxml2-dev \
	libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
	libmcrypt-dev \
	jpegoptim optipng pngquant gifsicle \
    libgd-dev \
    vim \
    sudo \
    unzip \
    gnupg2

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

EXPOSE 9000
