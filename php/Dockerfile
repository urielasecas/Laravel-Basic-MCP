FROM composer:2 AS composer
FROM php:8.4-apache
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
WORKDIR /var/www/html
RUN apt-get update \
    && apt-get install -y --no-install-recommends libicu-dev libonig-dev libzip-dev \
    && docker-php-ext-install intl mbstring pdo_mysql zip \
    && a2enmod rewrite \
    && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && rm -rf /var/lib/apt/lists/*
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint
ENTRYPOINT ["docker-entrypoint"]
CMD ["apache2-foreground"]
