-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2014 at 01:04 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `slogan` varchar(150) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `suburb` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `status`, `name`, `slogan`, `contact`, `suburb`, `state`, `postcode`, `created`, `modified`) VALUES
(1, 17, 1, 'Remote App', 'Remoteapp slogan', 'Remoteapp contact', 'Remoteapp slogan', 'Remoteapp state', 'Remoteapp postcode', '2014-05-07 10:05:16', '2014-05-07 12:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `store_services`
--

CREATE TABLE IF NOT EXISTS `store_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `store_service_hours`
--

CREATE TABLE IF NOT EXISTS `store_service_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sun` time NOT NULL,
  `mon` time NOT NULL,
  `tues` time NOT NULL,
  `wed` time NOT NULL,
  `thurs` time NOT NULL,
  `fri` time NOT NULL,
  `sat` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `store_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `package` int(11) NOT NULL DEFAULT '1',
  `role` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `store_number`, `package`, `role`, `created`, `modified`, `status`) VALUES
(1, 'drasty@openxcell.info', 'f99c67e80408c56ef1e41f411fb478044eaf2165', 'more than 30', 1, 'admin', '2014-04-30 11:37:25', '2014-04-30 11:37:25', 1),
(17, 'remoteapp@test.com', 'c7e23b68746b94946457fc23ac6f7f6871d48523', '1 store', 1, 'client', '2014-05-07 10:05:16', '2014-05-07 10:05:16', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
