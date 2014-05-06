-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 01:41 PM
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
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `status`, `name`, `created`, `modified`) VALUES
(1, 6, 1, '', '2014-05-05 10:36:23', '2014-05-05 10:36:23'),
(2, 7, 1, '', '2014-05-05 10:36:59', '2014-05-05 10:36:59'),
(3, 8, 1, '', '2014-05-05 10:40:52', '2014-05-05 10:40:52'),
(4, 9, 1, '', '2014-05-05 10:44:30', '2014-05-05 10:44:30'),
(5, 10, 1, '', '2014-05-05 10:46:22', '2014-05-05 10:46:22'),
(6, 11, 1, '', '2014-05-05 10:47:17', '2014-05-05 10:47:17'),
(7, 12, 1, '', '2014-05-05 10:49:44', '2014-05-05 10:49:44'),
(8, 13, 1, '', '2014-05-05 10:52:25', '2014-05-05 10:52:25'),
(9, 14, 1, 'dsf', '2014-05-05 10:55:26', '2014-05-05 10:55:26'),
(10, 15, 1, 'asdasd', '2014-05-05 10:56:35', '2014-05-05 10:56:35'),
(11, 16, 1, 'abcd', '2014-05-05 11:14:43', '2014-05-05 11:14:43');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `store_number`, `package`, `role`, `created`, `modified`, `status`) VALUES
(1, 'drasty@openxcell.info', 'f99c67e80408c56ef1e41f411fb478044eaf2165', 'more than 30', 1, 'admin', '2014-04-30 11:37:25', '2014-04-30 11:37:25', 1),
(2, 'test@test.com', 'c7e23b68746b94946457fc23ac6f7f6871d48523', '1 store', 1, 'client', '2014-04-30 11:40:37', '2014-04-30 11:40:37', 1),
(3, 'ty@df.com', '89c83fe2130ac25957d5928390c616f629492344', '1 store', 1, 'client', '2014-05-05 10:22:40', '2014-05-05 10:22:40', 1),
(4, 'dfg@erg.com', '89c83fe2130ac25957d5928390c616f629492344', '1 store', 1, 'client', '2014-05-05 10:25:27', '2014-05-05 10:25:27', 1),
(5, 'sd@rth.com', '3b0e8a242c73a1a066a5f413e261778828680fd4', '1 store', 1, 'client', '2014-05-05 10:28:29', '2014-05-05 10:28:29', 1),
(6, 'dfgdf@gmail.com', 'd187aec787a8893ecf6557718efec7ba5b8e6474', '1 store', 1, 'client', '2014-05-05 10:36:23', '2014-05-05 10:36:23', 1),
(7, 'ssdfsdf@gmail.com', '89c83fe2130ac25957d5928390c616f629492344', '2-10', 1, 'client', '2014-05-05 10:36:59', '2014-05-05 10:36:59', 1),
(8, 'aaaa@aaa.com', '89c83fe2130ac25957d5928390c616f629492344', '10-30', 1, 'client', '2014-05-05 10:40:52', '2014-05-05 10:40:52', 1),
(9, 'fg2@SF.COM', '2a76308fbd9b882aa9cf945397409ae73ae100ab', '2-10', 1, 'client', '2014-05-05 10:44:30', '2014-05-05 10:44:30', 1),
(10, 'ASDAS@GMAIL.COM', '86115e2edbb560e57cfa6a0f9fb3c47680289a29', '2-10', 1, 'client', '2014-05-05 10:46:22', '2014-05-05 10:46:22', 1),
(11, 'dfg@gmail.com', '9600e489c3c7ca141c8378ce1e655312eff7fc82', '1 store', 1, 'client', '2014-05-05 10:47:16', '2014-05-05 10:47:16', 1),
(12, 'sdf@rth.com', '89c83fe2130ac25957d5928390c616f629492344', '1 store', 1, 'client', '2014-05-05 10:49:44', '2014-05-05 10:49:44', 1),
(13, 'asd@esf.com', '89c83fe2130ac25957d5928390c616f629492344', '1 store', 1, 'client', '2014-05-05 10:52:25', '2014-05-05 10:52:25', 1),
(14, 'wed@reg.com', '89c83fe2130ac25957d5928390c616f629492344', '1 store', 1, 'client', '2014-05-05 10:55:26', '2014-05-05 10:55:26', 1),
(15, 'asd@erf.com', '82f200155dda36fe5c59455c2b98cb684a4924c6', '1 store', 1, 'client', '2014-05-05 10:56:35', '2014-05-05 10:56:35', 1),
(16, 'abcd@xyz.com', '89c83fe2130ac25957d5928390c616f629492344', '1 store', 1, 'client', '2014-05-05 11:14:43', '2014-05-05 11:14:43', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
