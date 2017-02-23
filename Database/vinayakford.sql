-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 08:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vinayakford`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `engine_chesis_no` text NOT NULL,
  `payment_complete` tinyint(1) NOT NULL,
  `payment_fail_reason` varchar(1000) NOT NULL,
  `payment_type` varchar(1000) NOT NULL,
  `cheque_no` int(11) NOT NULL,
  `document_complete` tinyint(1) NOT NULL,
  `document_ids` varchar(1000) NOT NULL,
  `tax_complete` tinyint(1) NOT NULL,
  `tax_fail_reason` varchar(2000) NOT NULL,
  `registration_no_type` varchar(1000) NOT NULL,
  `document_given_customer` tinyint(1) NOT NULL,
  `no_for_choice` varchar(255) NOT NULL,
  `no_given_customer` tinyint(1) NOT NULL,
  `document_for_no_choice` tinyint(1) NOT NULL,
  `call_agent_rc` int(11) NOT NULL,
  `rc_dispached_not_reason` varchar(1000) NOT NULL,
  `customer_state` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`, `mobile_no`, `phone_no`, `address`, `engine_chesis_no`, `payment_complete`, `payment_fail_reason`, `payment_type`, `cheque_no`, `document_complete`, `document_ids`, `tax_complete`, `tax_fail_reason`, `registration_no_type`, `document_given_customer`, `no_for_choice`, `no_given_customer`, `document_for_no_choice`, `call_agent_rc`, `rc_dispached_not_reason`, `customer_state`, `active`) VALUES
(1, 'Rajat', 'rajat@eail.co', 2147483647, 2147483647, '9806203545', '9806203545', 1, '', 'cheque', 0, 1, '', 1, '', 'vip_no', 1, '1', 1, 1, 0, '', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `taken` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Rajat', 'rajat@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
