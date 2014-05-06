-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 06:40 AM
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
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `customers` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `customers`, `created`, `modified`) VALUES
(1, '0-20(free)', '20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '20-50(fee apply)', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '50-100(fee apply)', '100', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '100 and above (fee apply)', '100 and above', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `store_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `store_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `package` int(11) NOT NULL DEFAULT '1',
  `role` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `store_name`, `store_number`, `package`, `role`, `created`, `modified`, `status`) VALUES
(1, 'drasty@openxcell.info', 'f99c67e80408c56ef1e41f411fb478044eaf2165', 'AdminStore', 'more than 30', 1, 'admin', '2014-04-30 11:37:25', '2014-04-30 11:37:25', 1),
(2, 'test@test.com', 'c7e23b68746b94946457fc23ac6f7f6871d48523', 'teststore', '1 store', 1, 'client', '2014-04-30 11:40:37', '2014-04-30 11:40:37', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
