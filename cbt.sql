-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2023 at 06:38 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_key`
--

DROP TABLE IF EXISTS `answer_key`;
CREATE TABLE IF NOT EXISTS `answer_key` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a1` varchar(50) NOT NULL,
  `a2` varchar(50) NOT NULL,
  `a3` varchar(50) NOT NULL,
  `a4` varchar(50) NOT NULL,
  `a5` varchar(50) NOT NULL,
  `a6` varchar(50) NOT NULL,
  `a7` varchar(50) NOT NULL,
  `a8` varchar(50) NOT NULL,
  `a9` varchar(50) NOT NULL,
  `a10` varchar(50) NOT NULL,
  `qset` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_key`
--

INSERT INTO `answer_key` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `qset`) VALUES
(2, 'C', 'D', 'A', 'D', 'C', 'B', 'A', 'A', 'D', 'B', 'A'),
(3, 'A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'A', 'D', 'B'),
(4, 'C', 'C', 'A', 'B', 'C', 'D', 'D', 'A', 'C', 'B', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE IF NOT EXISTS `codes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `passcode` varchar(10) NOT NULL,
  `validity` int NOT NULL DEFAULT '1',
  `qset` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `name`, `passcode`, `validity`, `qset`) VALUES
(27, 'Okpon Supreme Okon', '9eb9d10687', 1, 'A'),
(28, 'Effiong Rose Okon', 'aec30ea971', 1, 'A'),
(29, 'Ekpe Emem Atta', '6ae03f664f', 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `score`, `passcode`) VALUES
(32, 'ubong', '97', 'c838466c07'),
(33, 'peter Goodfirday', '73', '9381aaa552');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `a` varchar(123) NOT NULL,
  `b` varchar(123) NOT NULL,
  `c` varchar(123) NOT NULL,
  `d` varchar(123) NOT NULL,
  `numassign` int NOT NULL,
  `qset` text NOT NULL,
  `answerki` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `a`, `b`, `c`, `d`, `numassign`, `qset`, `answerki`) VALUES
(1, ' One of these is NOT a component of a database', 'tables', 'forms', 'records', 'macros', 1, 'A', 'C'),
(2, '_____ is an organised collection of information', 'query', 'data', 'field', 'database', 2, 'A', 'D'),
(3, 'In a database, rows and columns are represented by_____', 'fields and records', 'cells and integers', 'forms and tables', 'data and database', 3, 'A', 'A'),
(5, 'A table can be best linkend to a ________', 'a chair', 'a computer screen', 'roof', 'foundation of a building', 4, 'A', 'D'),
(6, 'The best data type for inputing objects such as images into a database is _______', 'text', 'hyperlink', 'OLE objects', 'currency', 5, 'A', 'C'),
(7, 'An easy way to sort data in a database is through_____', 'command prompt', 'query', 'tables', 'property sheet', 6, 'A', 'B'),
(8, 'A step by step guide to building to building a form can be achived with_______', 'form wizard', 'form design', 'form witch', 'form book', 7, 'A', 'A'),
(9, 'which of these component of a database is specifically built for users of a database?', 'form', 'tables', 'chairs', 'records', 8, 'A', 'A'),
(10, 'Which of these field properties will you use to change a color of a text in a database', 'font weight', 'font size', 'back color', 'fore color', 9, 'A', 'D'),
(11, '_______ is a summarised entry of a data in a database', 'records', 'reports', 'forms', 'fields', 10, 'A', 'B'),
(12, 'Bakit di ka crush ng Crush mo ?', 'Pangit kasi ako', 'May mahal na siyang iba', 'Nagpapakipot lang yun', 'Wala akong pakialam', 1, 'B', 'A'),
(13, 'Nasaan ang Hustisya ?', 'Nasa Bundok nag-aaral', 'Nasa Commonwealth Market', 'Nasa Kubeta Nangingitlog', 'Nasa Puso mo', 2, 'B', 'A'),
(14, 'Paano mo malalaman kung Siya na ang Forever mo ?', 'Kapag nalulungkot ka pag wala siya', 'Kapag nagseselos ka pag may kasama siyang iba', 'Kapag napa-panaginipan mo siya gabi-gabi', 'Kapag hindi mo kayang mabuhay ng wala siya', 3, 'B', 'B'),
(15, 'What is the English of Kinikilig ?', 'None of the Below', 'Ice Ice Baby', 'Chill Pa More', 'Crazy Love', 4, 'B', 'B'),
(16, 'Who is the Father of Jose Rizal ?', 'Mario Brothers', 'Mario Sisters', 'Reginald Mallillin', 'Montalban Rizal', 5, 'B', 'C'),
(17, 'Anong Pinagkaiba ng Manok sa Langaw?', 'Pareho lang sila', 'Ang manok tumitilaok', 'Mas Cute ang Langaw', 'Ang Manok ay Langaw', 6, 'B', 'C'),
(18, 'Bakit Itim ang Uwak at Bakit Puti ang Kalapati?', 'Kasi Trip nila yun', 'Kasi Pula ang Red', 'Kasi pag kalbo walang buhok', 'Kasi may multo sa likod mo', 7, 'B', 'D'),
(19, 'Naniniwala ka ba sa Forever?', 'OO', 'HINDI', 'KONTI LANG', 'WALA AKONG PAKIALAM', 8, 'B', 'D'),
(20, 'What is Love!', 'Kalabaw', 'Baka', 'Kambing', 'Hayop', 9, 'B', 'A'),
(21, 'Who killed Magellan?', 'Lapu-Lapu', 'Maya-Maya', 'Rodrigo Duterte', 'Bembol Rocco', 10, 'B', 'D'),
(22, 'Who killed Magellan?', 'Lapu-Lapu', 'Maya-Maya', 'Rodrigo Duterte', 'Bembol Rocco', 1, 'C', 'C'),
(23, 'Bakit di ka crush ng Crush mo ?', 'Pangit kasi ako', 'May mahal na siyang iba', 'Nagpapakipot lang yun', 'Wala akong pakialam', 2, 'C', 'C'),
(24, 'What is Love!', 'Kalbo', 'Bayaw', 'Abnormal', 'Siraulo', 3, 'C', 'A'),
(25, 'Nasaan ang Hustisya ?', 'Nasa Bundok nag-aaral', 'Nasa Commonwealth Market', 'Nasa Kubeta Nangingitlog', 'Nasa Puso mo', 4, 'C', 'B'),
(26, 'Naniniwala ka ba sa Forever?', 'OO', 'HINDI', 'KONTI LANG', 'WALA AKONG PAKIALAM', 5, 'C', 'C'),
(27, 'Who is the Father of Jose Rizal ?', 'Mario Brothers', 'Mario Sisters', 'Reginald Mallillin', 'Montalban Rizal', 6, 'C', 'D'),
(28, 'What is the English of Kinikilig ?', 'None of the Below', 'Ice Ice Baby', 'Chill Pa More', 'Crazy Love', 7, 'C', 'D'),
(29, 'Bakit Itim ang Uwak at Bakit Puti ang Kalapati?', 'Kasi Trip nila yun', 'Kasi Pula ang Red', 'Kasi pag kalbo walang buhok', 'Kasi may multo sa likod mo', 8, 'C', 'A'),
(30, 'Anong Pinagkaiba ng Manok sa Langaw?', 'Pareho lang sila', 'Ang manok tumitilaok', 'Mas Cute ang Langaw', 'Ang Manok ay Langaw', 9, 'C', 'C'),
(31, 'Paano mo malalaman kung Siya na ang Forever mo ?', 'Kapag nalulungkot ka pag wala siya', 'Kapag nagseselos ka pag may kasama siyang iba', 'Kapag napa-panaginipan mo siya gabi-gabi', 'Kapag hindi mo kayang mabuhay ng wala siya', 10, 'C', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(2500) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'f4df4fe8e5ebe68f82c299a0b4cf4f70', 1),
(2, 'coco', 'ac0ddf9e65d57b6a56b2453386cd5db5', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
