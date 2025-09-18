# Imagen base de PHP 8.2 con Composer
FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libpng-dev nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql zip gd

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /app

# Copiar archivos
COPY . .

# Instalar dependencias PHP y JS
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Puerto dinámico de Render
CMD php artisan serve --host=0.0.0.0 --port=$PORT
