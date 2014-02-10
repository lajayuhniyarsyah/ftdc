-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Feb 10, 2014 at 09:22 PM
-- Server version: 5.6.12
-- PHP Version: 5.3.9-ZS5.6.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpfemaleteam`
--
CREATE DATABASE IF NOT EXISTS `phpfemaleteam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpfemaleteam`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` int(3) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`, `active`, `level`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'female', 'fe01ce2a7fbac8fafaed7c982a04e229', 1, 1, NULL, 1, '2014-02-09 03:08:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apps_category`
--

CREATE TABLE IF NOT EXISTS `apps_category` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(2, 'Web', 'Web app', '2013-12-15 02:40:07', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id`, `name`, `address`, `phone`, `mobile`, `email`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'Developer 1', 'Addr Dev 1', '02176868', '08867879', 'mail@mail,com', '2013-12-13 00:00:00', 1, '2013-12-13 08:47:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `femaleteam_candidate`
--

CREATE TABLE IF NOT EXISTS `femaleteam_candidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(64) NOT NULL,
  `birth_place` varchar(32) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(64) NOT NULL,
  `facebook` varchar(90) NOT NULL,
  `phonenumber` varchar(16) NOT NULL,
  `domisili` varchar(64) NOT NULL,
  `full_address` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `femaleteam_candidate`
--

INSERT INTO `femaleteam_candidate` (`id`, `full_name`, `birth_place`, `birth_date`, `email`, `facebook`, `phonenumber`, `domisili`, `full_address`, `status`) VALUES
(14, 'La Jayuhni Yarsyah', 'Jakarta', '1999-11-25', 'jacx@mail.com', '', '08989074014', 'Jakarta', 'SCAC', 1),
(15, 'Anita Hapsari', 'Demo', '1985-07-18', 'anita.hapsari@gmail.com', '', '085617726637', 'Jakarta', 'Jl. Salemba Raya', 1),
(17, 'Eksa Aja', 'Maluku', '1970-06-23', 'eksa@gmail.com', 'Eksa Aja', '02185557767', 'Jakarta', 'Jl. Cempaka Putih Timur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `femaleteam_candidate_photo`
--

CREATE TABLE IF NOT EXISTS `femaleteam_candidate_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `file` varchar(30) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `candidate_id` (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `femaleteam_candidate_photo`
--

INSERT INTO `femaleteam_candidate_photo` (`id`, `candidate_id`, `file`, `uploaded_on`) VALUES
(1, 14, '35138721513423.jpg', '2013-12-24 15:24:57'),
(2, 14, '14138721513421.jpg', '2013-12-24 15:25:01'),
(3, 14, '92138780165516.jpg', '2013-12-24 15:25:04'),
(4, 15, '9513878016557.jpg', '2013-12-24 15:25:06'),
(5, 17, '53138789956394.jpg', '2013-12-24 15:39:23'),
(6, 17, '93138789956353.jpg', '2013-12-24 15:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `femaleteam_candidate_status`
--

CREATE TABLE IF NOT EXISTS `femaleteam_candidate_status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `femaleteam_candidate_status`
--

INSERT INTO `femaleteam_candidate_status` (`id`, `status_name`) VALUES
(1, 'Mahasiswi');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `key` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `username`, `password`, `full_name`, `phone`, `status`, `key`, `created`) VALUES
(2, 'jayu@gmail.com', 'jayu', 'demo', 'La Jayuhni Yarsyah', '02188776655', 0, 'deLV3UbUsObBA1387060169', '2013-12-15 05:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `description` longtext NOT NULL,
  `feature` longtext NOT NULL,
  `version` varchar(10) NOT NULL,
  `license` varchar(10) NOT NULL,
  `developer` int(11) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `femaleteam_candidate_photo`
--
ALTER TABLE `femaleteam_candidate_photo`
  ADD CONSTRAINT `femaleteam_candidate_photo_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `femaleteam_candidate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
