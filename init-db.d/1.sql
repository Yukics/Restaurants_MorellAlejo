-- USE `restaurants_db`;

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET time_zone = '+00:00';

CREATE TABLE `restaurants` (
    `name` VARCHAR(30), 
    `description` VARCHAR(50), 
    `address` VARCHAR(100), 
    `phone` VARCHAR(20), 
    `pic` VARCHAR(120)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `restaurants` (`name`, `address`, `phone`, `description`, `pic`) VALUES 
('Japo Santa Catalina', 'Carrer de Sant Magí, 25, 07013 Palma de Mallorca, Mallorca España', '+34 971 73 83 21', 'Japanese Food', 'https://media-cdn.tripadvisor.com/media/photo-s/1d/1d/ae/1c/carpaccio-rol.jpg'), 
('Cannibal Cantina Bistro','Plaça de Sant Antoni 8, 07002 Palma de Mallorca, Mallorca España', '+34 662 54 20 89', 'Gourmet sheeeeeeet', 'https://media-cdn.tripadvisor.com/media/photo-p/18/94/a0/c8/cannibal-cantina-bistro.jpg'), 
('Izakaya Mallorca','Carrer dEspartero, 15, 07014 Palma de Mallorca, Mallorca España', '+34 871 03 76 33', 'Japo traditional food', 'https://media-cdn.tripadvisor.com/media/photo-s/1d/39/e8/cb/izakaya-mallorca.jpg'), 
('FaBrick food & more','Calle San Magín 84, 07013 Palma de Mallorca, Mallorca España', '+34 610 89 06 21', 'Innovative cuisine', 'https://media-cdn.tripadvisor.com/media/photo-s/17/d0/c3/7a/fabrick-food-more.jpg'),
('Pizzeria Los Dos Hermanos','Carrer de la Reina Maria Cristina, 61, 07004 Palma de Mallorca, Mallorca España', '+34 871 53 09 63', 'Italian Food', 'https://media-cdn.tripadvisor.com/media/photo-p/1b/d4/05/f6/genovese-pesto-de-albahaca.jpg');
