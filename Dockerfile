# Imagen base con PHP y Apache
FROM php:8.2-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar tu aplicación al contenedor
COPY . /var/www/html/

# Dar permisos al servidor web
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80
