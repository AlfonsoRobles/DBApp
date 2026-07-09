# Imagen base con PHP CLI
FROM php:8.2-cli

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Directorio de trabajo
WORKDIR /app

# Copiar tu aplicación al contenedor
COPY . /app

# Exponer el puerto 8080
EXPOSE 8080

# Comando para iniciar el servidor embebido de PHP
CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]
