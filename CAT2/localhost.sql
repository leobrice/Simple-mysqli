-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `JRStaff` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `JRStaff`;

DROP TABLE IF EXISTS `Staff`;
CREATE TABLE `Staff` (
  `STAFFID` int(3) NOT NULL AUTO_INCREMENT,
  `FIRST NAME` varchar(255) NOT NULL,
  `LAST NAME` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMPCONTRACT` enum('FULL TIME','PART TIME') NOT NULL,
  `SEX` enum('MALE','FEMALE') NOT NULL,
  `DESIGNATION` enum('ADMIN','LECTURER') NOT NULL,
  `DEPARTMENT` enum('ICT','ACCOUNTS','DBA','MARKETING') NOT NULL,
  `REGION` varchar(20) NOT NULL,
  `POSTAL ADDRESS` varchar(20) NOT NULL,
  `PHONE` int(12) NOT NULL,
  `E-MAIL` varchar(30) NOT NULL,
  `RESIDENT AREA` varchar(255) NOT NULL,
  PRIMARY KEY (`STAFFID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Staff` (`STAFFID`, `FIRST NAME`, `LAST NAME`, `USERNAME`, `PASSWORD`, `EMPCONTRACT`, `SEX`, `DESIGNATION`, `DEPARTMENT`, `REGION`, `POSTAL ADDRESS`, `PHONE`, `E-MAIL`, `RESIDENT AREA`) VALUES
(1,	'ROGERS',	'AARON',	'ROGER',	'123',	'PART TIME',	'MALE',	'LECTURER',	'ICT',	'ARUSHA',	'1',	987296476,	'roger@gmiail.com',	'Arusha'),
(2,	'BAKARI',	'AYUBU',	'BAKARI',	'123',	'FULL TIME',	'MALE',	'LECTURER',	'ICT',	'ARUSHA',	'2',	987673541,	'bakari@bakari.com',	'Sakina'),
(3,	'LUCY',	'PETER',	'LUCY',	'123',	'FULL TIME',	'FEMALE',	'LECTURER',	'ACCOUNTS',	'ARUSHA',	'1',	39980941,	'lucy@lucy',	'Sakina'),
(4,	'THOMAS',	'MALITI',	'THOMAS',	'123',	'FULL TIME',	'MALE',	'LECTURER',	'DBA',	'ARUSHA',	'1',	984327,	'thomas@gmail.com',	'Arusha'),
(5,	'SUHAILA',	'SULEMAIN',	'SUHAILA',	'123',	'FULL TIME',	'FEMALE',	'ADMIN',	'ACCOUNTS',	'ARUSHA',	'1',	1245465768,	'suhaila@suhaila.com',	'Arusha'),
(6,	'LESNET',	'LUKUMAY',	'LESNET',	'123',	'FULL TIME',	'MALE',	'LECTURER',	'ICT',	'ARUSHA',	'1',	849785175,	'lukumay@lukumay',	'A'),
(7,	'ZAINAB',	'IBRAHIM',	'ZAINAB',	'123',	'FULL TIME',	'FEMALE',	'ADMIN',	'ACCOUNTS',	'ARUSHA',	'1',	8439729,	'zainab@zainab',	'Arusha'),
(8,	'SOPHIA',	'HARYA',	'SOPHIA',	'123',	'FULL TIME',	'FEMALE',	'ADMIN',	'MARKETING',	'ARUSHA',	'1',	83592017,	'sophia@sophia',	'Arusha'),
(9,	'nig',	'nw',	'nv1',	'fnview',	'FULL TIME',	'MALE',	'ADMIN',	'ICT',	'nfwj``',	'nvin',	352151,	'm.m',	'icw'),
(10,	'vsdsd',	'vvds',	'vsdqdv',	'dw',	'FULL TIME',	'MALE',	'ADMIN',	'ICT',	'vq',	'1',	341,	'nm.@email',	'r2r');

-- 2023-04-12 22:48:27
