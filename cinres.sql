-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 07:53 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cinres`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE IF NOT EXISTS `cinemas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `layout` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `name`, `location`, `layout`, `created`, `modified`) VALUES
(1, 'Test', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', '2017-03-20 18:10:26', '2017-03-20 18:10:26'),
(2, 'asdhasdh', 'asdhasdh', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', '2017-03-20 18:11:29', '2017-03-20 18:11:29'),
(3, 'MS VALENZUELA CINEMA 100', 'MS VALENZUELA KARUHATAN', 'axg5yYM_460s.jpg', '2017-03-23 07:22:55', '2017-03-23 07:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `color`) VALUES
(1, 'Action', '#f44336'),
(2, 'Romance', '#e91e63'),
(3, 'Drama', '#9c27b0'),
(4, 'Comedy', '#2196f3'),
(5, 'Horror', '#607d8b');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(7);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `rating` int(11) unsigned NOT NULL,
  `genre` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `image`, `rating`, `genre`, `created`, `modified`) VALUES
(1, 'The Shawshank Redemption', 'Lorem ipsum dolor sit amet, ', 'poster-1.jpg', 5, 3, '0000-00-00 00:00:00', '2017-03-21 09:21:54'),
(2, 'Deadpool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales urna eu fermentum fermentum. Curabitur at leo sed diam aliquet vehicula sed quis est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum felis, rhoncus nec nulla vitae, ornare facilisis neque. Nam ut neque dignissim, vehicula nisl vitae, mollis lectus. Donec enim enim, imperdiet et facilisis nec, molestie vestibulum neque. Sed a nulla magna. Suspendisse potenti. Donec finibus sed eros nec pretium. Phasellus dignissim cursus suscipit. Donec ac augue pharetra, venenatis massa a, finibus lorem. Suspendisse facilisis tellus id volutpat scelerisque. Donec eget ligula non orci facilisis blandit. Quisque faucibus iaculis nisi, tempor ornare nisl tempor ut. Pellentesque ornare suscipit augue ac finibus. Cras mi nisl, sodales vitae vestibulum non, iaculis sed neque. Nam imperdiet lacinia mi in accumsan. Pellentesque varius lacus tortor, sed viverra turpis pulvinar vel. Sed id laoreet sapien, sed congue est. Cras consectetur risus at ligula vehicula interdum. Suspendisse at risus neque. Proin ut diam lacus. Aenean congue massa et placerat sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, nisl in pulvinar volutpat, massa felis elementum ligula, porta porttitor neque ante dignissim diam.', 'poster-2.jpg', 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'The Exorcist', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales urna eu fermentum fermentum. Curabitur at leo sed diam aliquet vehicula sed quis est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum felis, rhoncus nec nulla vitae, ornare facilisis neque. Nam ut neque dignissim, vehicula nisl vitae, mollis lectus. Donec enim enim, imperdiet et facilisis nec, molestie vestibulum neque. Sed a nulla magna. Suspendisse potenti. Donec finibus sed eros nec pretium. Phasellus dignissim cursus suscipit. Donec ac augue pharetra, venenatis massa a, finibus lorem. Suspendisse facilisis tellus id volutpat scelerisque. Donec eget ligula non orci facilisis blandit. Quisque faucibus iaculis nisi, tempor ornare nisl tempor ut. Pellentesque ornare suscipit augue ac finibus. Cras mi nisl, sodales vitae vestibulum non, iaculis sed neque. Nam imperdiet lacinia mi in accumsan. Pellentesque varius lacus tortor, sed viverra turpis pulvinar vel. Sed id laoreet sapien, sed congue est. Cras consectetur risus at ligula vehicula interdum. Suspendisse at risus neque. Proin ut diam lacus. Aenean congue massa et placerat sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, nisl in pulvinar volutpat, massa felis elementum ligula, porta porttitor neque ante dignissim diam.', 'poster-3.jpg', 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'asdfasdfg', 'sadgasg', 'replace.jpg', 1, 1, '2017-03-23 09:55:39', '2017-03-23 09:55:39'),
(16, 'asdfasdfg', 'sadgasg', 'replace.jpg', 1, 1, '2017-03-23 09:55:39', '2017-03-23 09:55:39'),
(17, 'asfasdf', 'sdkfsakdflkas', 'poster-1.jpg', 1, 1, '2017-03-30 10:22:55', '2017-03-30 10:22:55'),
(19, 'Beauty and the Beast', 'Kwento ni sir', 'poster-1.jpg', 1, 1, '2017-03-31 07:25:29', '2017-03-31 07:25:29'),
(20, 'asdfasdfkj', 'lajskdfjlasdjf', '', 1, 1, '2017-04-18 07:41:30', '2017-04-18 07:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE IF NOT EXISTS `reserves` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `movie` int(11) NOT NULL,
  `cinema` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `schedule` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `name`, `address`, `image`, `movie`, `cinema`, `seats`, `schedule`, `created`, `modified`) VALUES
(6, 'alsdflaskldf', 'aklsdfkalsdkfj', 'poster-2.jpg', 17, 1, 6, 9, '2017-03-30 10:23:49', '2017-03-30 10:23:49'),
(7, 'askdfjalksf', 'kasjflasdf', 'poster-4.jpg', 17, 1, 1, 9, '2017-03-31 07:21:34', '2017-03-31 07:21:34'),
(8, 'edel', 'Valenzuela City', 'edel.jpg', 19, 3, 1, 10, '2017-03-31 07:29:16', '2017-03-31 07:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `movie` int(11) NOT NULL,
  `cinema` int(11) NOT NULL,
  `cinema_name` varchar(256) NOT NULL,
  `cinema_location` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `movie`, `cinema`, `cinema_name`, `cinema_location`, `price`, `time_start`, `time_end`, `date_start`, `date_end`, `created`, `modified`) VALUES
(1, 1, 1, 'MS MARILAO', 'MS MARILAO 2ND FLOOR CINEMA 29', '250.00', '00:00:00', '00:00:00', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 1, 'asdfasdf', 'asdfasfd', '123123.23', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-03-21 10:30:24', '2017-03-21 10:30:24'),
(6, 4, 1, 'Test', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', '12312.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-03-21 10:36:02', '2017-03-21 10:36:02'),
(7, 4, 2, 'asdhasdh', 'asdhasdh', '300.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-03-23 07:19:51', '2017-03-23 07:19:51'),
(8, 15, 3, 'MS VALENZUELA CINEMA 100', 'MS VALENZUELA KARUHATAN', '123123.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-03-23 09:57:38', '2017-03-23 09:57:38'),
(9, 17, 1, 'Test', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', '1000.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-03-30 10:23:20', '2017-03-30 10:23:20'),
(10, 19, 3, 'MS VALENZUELA CINEMA 100', 'MS VALENZUELA KARUHATAN', '100.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-03-31 07:26:58', '2017-03-31 07:26:58'),
(11, 20, 1, 'Test', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', '123123.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-04-18 07:41:50', '2017-04-18 07:41:50'),
(12, 20, 1, 'Test', 'GalleryComics_V_1920x1080_20141200_LUCI_Cv1_5670c60d8225c8.19515955.jpg', '123123.00', '13:45:00', '13:45:00', '2011-08-19', '2011-08-19', '2017-04-18 07:41:50', '2017-04-18 07:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'admin', 'alexis.munsayac@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(6, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 0),
(7, 'admin2', 'admin@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
