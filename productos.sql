CREATE DATABASE todomotos;
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
('Casco integral Shark', 'Casco homologado de alta protección, color negro mate.', 85000.00, 10, 'img/casco_shark.jpg'),
('Guantes Alpinestars', 'Guantes de cuero reforzado, ideales para uso urbano.', 35000.00, 20, 'img/guantes_alpinestars.jpg'),
('Aceite Motul 7100', 'Aceite sintético 10W40 para motos 4T.', 22000.00, 15, 'img/aceite_motul.jpg'),
('Cubierta Pirelli Diablo', 'Cubierta trasera 160/60 R17, excelente agarre.', 98000.00, 8, 'img/pirelli_diablo.jpg'),
('Baúl Givi E370', 'Baúl trasero 39L con respaldo y soporte universal.', 125000.00, 5, 'img/baul_givi.jpg');
