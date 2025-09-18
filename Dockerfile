# Imagen base de PHP 8.2 con Composer
FROM php:8.2-cli

# Instalar dependencias del sistema y extensiones necesarias
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libpng-dev nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql zip gd

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /app

# Copiar primero archivos de dependencias (para cachear capas)
COPY composer.json composer.lock artisan ./

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Copiar archivos de npm y construir assets
COPY package.json package-lock.json* vite.config.js ./
RUN npm install && npm run build

# Ahora sí copiamos TODO el código
COPY . .

# Generar caches
RUN php artisan config:clear && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Arrancar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]
