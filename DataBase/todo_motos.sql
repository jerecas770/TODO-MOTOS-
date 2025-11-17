CREATE DATABASE IF NOT EXISTS todo_motos;
USE todo_motos;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    imagen VARCHAR(255)
);

INSERT INTO productos (nombre, descripcion, precio, stock, imagen) VALUES
('Casco Integral LS2', 'Casco integral modelo FF397 Vector', 45000, 12, 'casco1.jpg'),
('Guantes Pro-Biker', 'Guantes reforzados con protección de nudillos', 15000, 25, 'guantes.jpg'),
('Aceite Motul 7100 10w40', 'Lubricante sintético para motos de alta gama', 12000, 40, 'motul.jpg'),
('Cubierta Pirelli Diablo Rosso II', 'Cubierta deportiva para motos 150cc-250cc', 75000, 8, 'pirelli.jpg'),
('Baúl Shad SH46', 'Baúl rígido de 46 litros con doble llave y kit de fijación', 68000, 6, 'baul.jpg');
