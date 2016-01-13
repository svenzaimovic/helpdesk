-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2016 at 12:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpdesk-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `change`
--

CREATE TABLE IF NOT EXISTS `change` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` text NOT NULL,
  `title` text NOT NULL,
  `explain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `change`
--

INSERT INTO `change` (`id`, `number`, `title`, `explain`) VALUES
(1, '234', 'sf', 'dsf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `description`) VALUES
(0, 'sad', 'asdfasdf@lala.lala', 'adsa');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` text NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `number`, `title`, `category`, `description`) VALUES
(1, '123', 'sdfa', 'app', 'afds');

-- --------------------------------------------------------

--
-- Table structure for table `event_resolve`
--

CREATE TABLE IF NOT EXISTS `event_resolve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` text NOT NULL,
  `title` text NOT NULL,
  `explanation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_resolve`
--

INSERT INTO `event_resolve` (`id`, `number`, `title`, `explanation`) VALUES
(1, '213', 'asda', 'sadas'),
(2, '213', 'asda', 'sadas');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE IF NOT EXISTS `incident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`id`, `number`, `title`, `category`, `description`) VALUES
(1, 123, 'lala', 'app', 'lala'),
(2, 123, 'lala', 'app', 'lala'),
(3, 123, 'dsa', 'account', 'asdads'),
(4, 123, 'dsa', 'account', 'asdads'),
(5, 123, 'dsa', 'account', 'asdads'),
(6, 213, 'adsa', 'account', 'adsa'),
(7, 213, 'asd', 'account', 'asdsad'),
(8, 123, 'ads', 'account', 'adsas'),
(9, 2312, 'sadas', 'data', 'asdas'),
(10, 123, 'sad', 'account', 'adsas'),
(11, 123, 'dasd', 'app', 'asdas'),
(12, 123, 'dasd', 'app', 'asdas'),
(13, 213, 'ecxyc', 'account', 'xycyxc'),
(14, 123, 'asd', 'account', 'asda'),
(15, 1, 'Some title', 'account', 'some text'),
(16, 123, 'sda', 'account', 'adsd'),
(17, 567, 'ggh', 'app', 'jgj'),
(18, 123, 'dasd', 'account', 'adsad'),
(19, 23, 'yxcy', 'app', 'yxcyx');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user` text NOT NULL,
  `group` text NOT NULL,
  `table` text NOT NULL,
  `assigned` text NOT NULL,
  `source` text NOT NULL,
  `category` text NOT NULL,
  `impact` text NOT NULL,
  `urgency` text NOT NULL,
  `services` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `title`, `description`, `user`, `group`, `table`, `assigned`, `source`, `category`, `impact`, `urgency`, `services`) VALUES
(1, 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', '?', '?'),
(2, 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', '?', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'faruk', 'faruk', 'echo.faruk@gmail.com', '$2y$10$COzUD4XUM9WGpzMloU8ew.CLDGHXQR0qK1MXLZodcFGEcvHIIhRQS', '2016-01-13', '2016-01-13'),
(2, 'lejla', 'lala', 'lalal@lala.lala', '$2y$10$.WoVl2.vthRRIQv9jFsAM.F6tcrVvXmLZIrLjlprmP.EIvqORCsy.', '2016-01-13', '2016-01-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
