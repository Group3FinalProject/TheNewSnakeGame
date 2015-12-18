-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2015 at 03:40 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL DEFAULT 'anonymous',
  `score` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Geethu', 'geethuannsunny@gmail.com', '4045f56cd6a8d853f2fd7d66cffad1bf'),
(2, 'merin', 'merin@gmail.com', '834540efae200e7b2d7668c8392e5571'),
(3, 'tresa', 'tresa@gmail.com', '5d78bf8bf2634409f6cf7c9ae26af980');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
