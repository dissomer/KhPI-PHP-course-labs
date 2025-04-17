-- Adminer 4.8.1 MySQL 8.4.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1,	'user1',	'user1@gmail.com',	'ee11cbb19052e40b07aac0ca060c23ee'),
(2,	'user2',	'user2@gmail.com',	'ee11cbb19052e40b07aac0ca060c23ee'),
(3,	'user3',	'user3@gmail.com',	'ee11cbb19052e40b07aac0ca060c23ee');

-- 2025-04-17 03:28:49
