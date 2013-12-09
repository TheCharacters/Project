-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 08:49 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music_team2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE IF NOT EXISTS `bands` (
  `band_id` int(11) NOT NULL AUTO_INCREMENT,
  `band_name` text NOT NULL,
  `band_founded` int(11) NOT NULL,
  `band_city` text NOT NULL,
  `band_state` text NOT NULL,
  `band_bio` longtext NOT NULL,
  `band_members` longtext NOT NULL,
  `visits` int(11) NOT NULL,
  PRIMARY KEY (`band_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bands_songs`
--

CREATE TABLE IF NOT EXISTS `bands_songs` (
  `band_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  PRIMARY KEY (`band_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `song_id` int(11) NOT NULL AUTO_INCREMENT,
  `song_name` text NOT NULL,
  `song_year` int(4) NOT NULL,
  `plays` int(11) NOT NULL,
  `band_id` int(11) NOT NULL,
  PRIMARY KEY (`song_id`),
  KEY `band_id` (`band_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `page` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bands`
--
ALTER TABLE `bands`
  ADD CONSTRAINT `bands_ibfk_1` FOREIGN KEY (`band_id`) REFERENCES `songs` (`band_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
