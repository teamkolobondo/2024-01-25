create database practica;
use practica;
CREATE TABLE `practica`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `unidades` INT NULL,
  `precio` FLOAT NULL,
  `caducidad` DATE NULL,
  `descuento` TINYINT NULL,
  `imagen` TEXT(400) NULL,
  PRIMARY KEY (`id`));
