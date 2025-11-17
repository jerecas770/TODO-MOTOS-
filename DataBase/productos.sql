CREATE DATABASE IF NOT EXISTS todomotos;
USE todomotos;

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    imagen VARCHAR(255)
);

INSERT INTO productos (nombre, descripcion, precio, stock, imagen) VALUES
('Casco LS2', 'Casco integral de alta seguridad', 45000, 10, 'ls2.jpg'),
('Guantes Pro Grip', 'Guantes reforzados para moto', 15000, 25, 'progrip.jpg'),
('Aceite Motul 7100', 'Aceite sintético 10W40 para motos', 12000, 40, 'motul.jpg'),
('Cubierta Pirelli Diablo', 'Cubierta deportiva para 150cc', 75000, 8, 'pirelli.jpg'),
('Baúl Shad 42L', 'Baúl trasero rígido para moto', 68000, 6, 'shad.jpg');
