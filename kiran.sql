-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 09:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kiran`
--
CREATE DATABASE IF NOT EXISTS `kiran` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kiran`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `email`, `message`, `id`) VALUES
('sanskruti', 'sans@gmail.com', 'its awsome', 1),
('pallavi', 'pallu@gmail.com', 'nice', 2),
('rani', 'rani@yahoo.com', 'very good!', 3),
('rani', 'rani@yahoo.com', 'very good!', 6),
('rani', 'rani@yahoo.com', 'very good!', 7),
('rani', 'rani@yahoo.com', 'very good!', 8),
('rani', 'rani@yahoo.com', 'very good!', 9);

-- --------------------------------------------------------

--
-- Table structure for table `interior_news`
--

CREATE TABLE IF NOT EXISTS `interior_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `interior_news`
--

INSERT INTO `interior_news` (`id`, `news`) VALUES
(1, 'Hurry up..!! New ranges available...come fast');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
