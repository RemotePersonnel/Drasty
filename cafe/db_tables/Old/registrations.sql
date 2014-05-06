-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 01:14 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cafe_23042014`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `client_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `client_name`, `client_email`, `newsletter`, `created`, `modified`) VALUES
(1, 'asdasd', 'asd@dsf.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'asdasd', 'asd123@dsf.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'testclient', 'test@test.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'test', 'test123@test.com', 0, '2014-04-30 12:00:24', '2014-04-30 12:00:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
