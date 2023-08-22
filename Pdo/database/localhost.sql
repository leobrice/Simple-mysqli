-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `simple_pdo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `simple_pdo`;

DROP TABLE IF EXISTS `Students`;
CREATE TABLE `Students` (
  `student_id` int(3) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_age` int(5) NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Students` (`student_id`, `student_name`, `student_email`, `student_age`, `addedAt`) VALUES
(2,	'Tetron',	'retina@gmail.com',	24,	'2023-08-21 20:52:38'),
(3,	'Edu',	'gaspa@gmail.com',	21,	'2023-08-21 20:39:09'),
(4,	'Karim',	'karim@gmail.com',	19,	'2023-08-22 09:23:21'),
(5,	'blanco',	'blanco@gmail.com',	26,	'2023-08-22 09:23:49'),
(6,	'Carol',	'andyco@gmail.com',	24,	'2023-08-22 09:35:01'),
(7,	'Naima',	'helpt@nai.co.tz',	32,	'2023-08-22 10:31:51'),
(8,	'Yuri Boyd',	'abu@abu.com',	22,	'2023-08-22 11:49:07'),
(9,	'Karim',	'briceleo005@gmail.com',	32,	'2023-08-22 09:55:32'),
(10,	'Bryce',	'bryc@gmail.com',	21,	'2023-08-21 20:39:09'),
(11,	'Tetron',	'retina@gmail.com',	24,	'2023-08-21 20:52:38'),
(12,	'Edu',	'gaspa@gmail.com',	21,	'2023-08-21 20:39:09'),
(13,	'Karim',	'karim@gmail.com',	19,	'2023-08-22 09:23:21'),
(14,	'blanco',	'blanco@gmail.com',	26,	'2023-08-22 09:23:49'),
(15,	'Carol',	'andyco@gmail.com',	24,	'2023-08-22 09:35:01'),
(16,	'Naima',	'helpt@nai.co.tz',	32,	'2023-08-22 10:31:51'),
(17,	'Yuri Boyd',	'abu@abu.com',	22,	'2023-08-22 11:49:07'),
(18,	'Karim',	'briceleo005@gmail.com',	32,	'2023-08-22 09:55:32'),
(25,	'Tetron',	'retina@gmail.com',	24,	'2023-08-21 20:52:38'),
(26,	'Edu',	'gaspa@gmail.com',	21,	'2023-08-21 20:39:09'),
(27,	'Karim',	'karim@gmail.com',	19,	'2023-08-22 09:23:21'),
(28,	'blanco',	'blanco@gmail.com',	26,	'2023-08-22 09:23:49'),
(29,	'Carol',	'andyco@gmail.com',	24,	'2023-08-22 09:35:01'),
(30,	'Naima',	'helpt@nai.co.tz',	32,	'2023-08-22 10:31:51'),
(31,	'Yuri Boyd',	'abu@abu.com',	22,	'2023-08-22 11:49:07'),
(32,	'Karim',	'briceleo005@gmail.com',	32,	'2023-08-22 09:55:32'),
(34,	'Tetron',	'retina@gmail.com',	24,	'2023-08-21 20:52:38'),
(35,	'Edu',	'gaspa@gmail.com',	21,	'2023-08-21 20:39:09'),
(36,	'Karim',	'karim@gmail.com',	19,	'2023-08-22 09:23:21'),
(37,	'blanco',	'blanco@gmail.com',	26,	'2023-08-22 09:23:49'),
(38,	'Carol',	'andyco@gmail.com',	24,	'2023-08-22 09:35:01'),
(39,	'Naima',	'helpt@nai.co.tz',	32,	'2023-08-22 10:31:51'),
(40,	'Yuri Boyd',	'abu@abu.com',	22,	'2023-08-22 11:49:07'),
(41,	'Karim',	'briceleo005@gmail.com',	32,	'2023-08-22 09:55:32');

-- 2023-08-22 13:03:08
