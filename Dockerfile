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

# ---- Etapa 1: instalar dependencias PHP sin scripts (cache-friendly)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# ---- Etapa 2: instalar dependencias JS y build
COPY package.json package-lock.json* vite.config.js ./
COPY resources ./resources
RUN npm install && npm run build

# ---- Etapa 3: copiar todo el código
COPY . .

# Ejecutar los scripts de composer (ahora sí existe artisan)
RUN composer run-script post-autoload-dump || true

# Copiar y dar permisos al entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Usamos entrypoint para limpiar/generar cache de Laravel
ENTRYPOINT ["/entrypoint.sh"]

# Laravel server con puerto dinámico de Render
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]
