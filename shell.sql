-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2011 at 12:14 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shell`
--

-- --------------------------------------------------------

--
-- Table structure for table `shells`
--

CREATE TABLE IF NOT EXISTS `shells` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `active` int(11) NOT NULL,
  `shellurl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shells`
--

INSERT INTO `shells` (`id`, `url`, `active`, `shellurl`) VALUES
(1, 'http://www.essopalmas.com/images/', 1, 'http://www.essopalmas.com/images/1008190708581410.jpg.php'),
(2, 'http://www.dgmotorsports.com/images/', 1, 'http://www.dgmotorsports.com/images/saver.php'),
(3, 'http://www.dgmotorsports.com/images/sar.php', 1, '1'),
(4, 'http://www.worldmissphotogenic.com/images/news/', 1, 'http://www.worldmissphotogenic.com/images/news/saver.php');
