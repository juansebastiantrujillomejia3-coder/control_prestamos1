CREATE DATABASE control_prestamos
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE control_prestamos;

CREATE TABLE prestamos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    equipo VARCHAR(100) NOT NULL,
    tipo_equipo VARCHAR(50) NOT NULL,
    instructor VARCHAR(100) NOT NULL,
    fecha_prestamo DATE NOT NULL,
    estado ENUM('En préstamo', 'Devuelto') DEFAULT 'En préstamo',
    activo TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
