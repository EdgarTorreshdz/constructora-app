# Imagen base de PHP 8.2 con Composer
FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libpng-dev nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql zip gd bcmath

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /app

# Copiar archivos
COPY . .

# Instalar dependencias PHP y JS
RUN composer install --no-dev --optimize-autoloader \
    && npm install && npm run build

# Permisos para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && touch storage/logs/laravel.log \
    && chown www-data:www-data storage/logs/laravel.log

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
# Puerto dinámico de Render
CMD php artisan serve --host=0.0.0.0 --port=$PORT
