-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2020 at 07:19 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES
('', 'email', 'subject', 'message'),
('', 'email', 'subject', 'message'),
('', 'email', 'subject', 'message'),
('', 'email', 'subject', 'message'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Rupesh Mohanty', 'rupeshmohanty67@gmail.com', 'New to the club', 'Hi i am new to the club!'),
('', '', '', ''),
('Rupesh Mohanty', 'rupeshmohanty67@gmail.com', 'Hola', 'Hello there!'),
('Suryansu Dash', 'suryansudash5@gmail.com', 'I ordered a phone but had some problem with the payment method.', 'I had some issue related to the online payment method for a phone i ordered.'),
('Suryansu Dash', 'suryansudash5@gmail.com', 'I ordered a phone but had some problem with the payment method.', 'I had some issue related to the online payment method for a phone i ordered.'),
('', '', '', '');
