-- Crear base de datos
CREATE DATABASE IF NOT EXISTS mi_base2 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mi_base2;

-- Crear tabla usuarios3
CREATE TABLE IF NOT EXISTS usuarios3 (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL UNIQUE
);

-- Insertar registros de prueba
INSERT INTO usuarios3 (nombre, correo) VALUES
('Juan Pérez', 'juan.perez@example.com'),
('María López', 'maria.lopez@example.com'),
('Carlos García', 'carlos.garcia@example.com'),
('Ana Torres', 'ana.torres@example.com');
