-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `blogview`;
CREATE TABLE `blogview` (
  `blogitemID` int(11) NOT NULL AUTO_INCREMENT,
  `entryTitle` text NOT NULL,
  `entrySummary` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `submitter` text NOT NULL,
  PRIMARY KEY (`blogitemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogview` (`blogitemID`, `entryTitle`, `entrySummary`, `category`, `submitter`) VALUES
(1,	'Today at work\r\n',	'Today I went to work and did lots of very complicated coding things. I was very pleased that I managed to finish them ',	'Work',	'Adam'),
(11,	'University Lecturer\r\n',	'This week in university I had an amazing lecture. I can’t remember the name of the lecturer but he was really really good.',	'University',	'Brian\r\n'),
(21,	'Dads new television\r\n\r\n',	'Today dad bought a new television. He likes to watch the F1 on it a lot.\r\n',	'Family',	'Charlie\r\n');

-- 2016-05-04 10:10:08
