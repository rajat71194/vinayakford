-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 07:41 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
  `mobile_no` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
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
  `delivery_date` datetime NOT NULL,
  `consultant_name` varchar(255) NOT NULL,
  `remaining_amt` tinyint(1) NOT NULL,
  `amount` int(11) NOT NULL,
  `finance` tinyint(1) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `insurance` varchar(255) NOT NULL,
  `followup` varchar(1000) NOT NULL,
  `vehicle_reg` varchar(255) NOT NULL,
  `branch` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`, `mobile_no`, `phone_no`, `address`, `engine_chesis_no`, `payment_complete`, `payment_fail_reason`, `payment_type`, `cheque_no`, `document_complete`, `document_ids`, `tax_complete`, `tax_fail_reason`, `registration_no_type`, `document_given_customer`, `no_for_choice`, `no_given_customer`, `document_for_no_choice`, `call_agent_rc`, `rc_dispached_not_reason`, `customer_state`, `active`, `delivery_date`, `consultant_name`, `remaining_amt`, `amount`, `finance`, `bank_name`, `insurance`, `followup`, `vehicle_reg`, `branch`) VALUES
(1, 'Rajat', 'rajat@eail.co', '2147483647', '2147483647', '9806203545', '9806203545', 1, '', 'cheque', 0, 1, '1,2,3', 1, '', 'vip_no', 1, '1', 1, 1, 0, '', 1, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(4, 'adasasd', '', '0', '0', '', '', 1, '', 'cash', 0, 1, '', 1, '', 'choice_no', 1, '1', 1, 1, 0, '', 3, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(5, '', '', '0', '0', '', '', 0, '', 'cash', 0, 0, '', 0, '', 'regular_no', 0, '', 0, 0, 0, '', 3, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(6, '', '', '0', '0', '', '', 0, '', 'cash', 0, 0, '', 0, '', 'regular_no', 0, '', 0, 0, 0, '', 1, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(7, 'dsadsa', 'dasdsa', '0', '0', 'dsad', '4332', 1, '', 'cash', 0, 1, '1', 1, '', 'choice_no', 0, 'on', 0, 0, 0, '', 3, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(8, 'dsdsd', 'rajat@gmail.com', '2147483647', '2147483647', '9806203545', '9806203545', 1, '', 'cheque', 433434, 1, '2,3', 1, '', 'regular_no', 1, '', 0, 0, 0, '', 3, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(9, '', '', '0', '0', '', '', 0, '', '', 0, 0, '', 1, '', 'regular_no', 1, '', 1, 0, 0, '', 4, 0, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(10, 'Rajat Gupta', 'rajat@gmail.com', '9806203545', '2147483647', '9806203545', '9806203545', 1, '', 'cash', 0, 1, '2,3', 1, 'Test', 'choice_no', 0, 'on', 1, 0, 0, '', 2, 1, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(11, 'Dharmendra Deora', 'deoradharmendra@gmail.com', '9630258741', '9658741458', 'Biyabani Indore', '9856214558', 1, '', 'cheque', 9635, 1, '1,3', 1, '', 'regular_no', 1, '0', 1, 0, 0, '', 4, 1, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(12, 'Praveen Chouhan', 'praveen@gmail.com', '9412547485', '9320147857', 'Rajmohalla Indore', '9632547487', 1, '', 'cash', 0, 1, '1,2', 1, '', 'choice_no', 0, '0', 0, 0, 0, '', 3, 1, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(13, 'Ramesh Lal', 'ramesh@gmail.com', '9631478547', '7854741458', 'Gangwal indore', '9874521475', 1, '', 'cheque', 96547, 1, '1,2,3', 0, 'Check Clearance', 'choice_no', 0, 'on', 1, 1, 0, '', 4, 1, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(14, 'Raghvendra Singh', 'ragven@gmail.com', '9541745874', '9321475874', 'Bombay Hospital Indore', '9654148822', 1, '', 'cheque', 4343, 1, '1,2,3', 1, '', 'choice_no', 0, 'on', 1, 0, 1, '', 5, 1, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(15, 'dsadsa', 'dss@ffdf.fd', '4324344444', '4324344444', 'dsadsadsdssa', '43232', 1, '', 'cash', 0, 1, '1', 0, '', '', 0, '', 0, 0, 0, '', 1, 1, '0000-00-00 00:00:00', '', 0, 0, 0, '0', '', '', '', ''),
(16, 'Rajat Gupta', 'rajat@gmail.com', '9806203545', '9806203545', '98062035459', '123456', 1, '', 'cheque', 87654, 1, '1,3', 0, '', '', 0, '', 0, 0, 0, '', 1, 1, '2017-02-27 23:03:00', 'Dharmendra Deora', 1, 100, 0, '', 'self', '9806203545', 'c/o', 'fordfigo');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `email`, `phone`) VALUES
(1, 'Rajat Gupta', 'Developer', 'rajat@gmail.com', 2147483647);

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
