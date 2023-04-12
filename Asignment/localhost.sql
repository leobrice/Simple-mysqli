-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `jriit_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `jriit_db`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` enum('male','female') DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Department`, `DOB`, `Gender`, `Age`) VALUES
(17,	'fname',	'lname',	'department',	'2022-09-09',	'female',	78),
(18,	'HFBWE',	'HBDVSJK',	'BVX',	'2009-09-08',	'male',	43),
(20,	'rewq',	'lew',	'ict',	'2000-01-01',	'male',	22),
(21,	'',	'',	'',	'2002-09-09',	'male',	21),
(22,	'',	'',	'',	NULL,	NULL,	NULL),
(23,	'Debora',	'Mushi',	'det',	'2021-01-07',	'female',	23)
ON DUPLICATE KEY UPDATE `UserID` = VALUES(`UserID`), `FirstName` = VALUES(`FirstName`), `LastName` = VALUES(`LastName`), `Department` = VALUES(`Department`), `DOB` = VALUES(`DOB`), `Gender` = VALUES(`Gender`), `Age` = VALUES(`Age`);

-- 2023-03-22 22:31:18
