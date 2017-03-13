-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 11:24 AM
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
  `prospect_id` int(11) NOT NULL,
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
  `vehicle_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`prospect_id`, `id`, `customer_name`, `email`, `mobile_no`, `phone_no`, `address`, `engine_chesis_no`, `payment_complete`, `payment_fail_reason`, `payment_type`, `cheque_no`, `document_complete`, `document_ids`, `tax_complete`, `tax_fail_reason`, `registration_no_type`, `document_given_customer`, `no_for_choice`, `no_given_customer`, `document_for_no_choice`, `call_agent_rc`, `rc_dispached_not_reason`, `customer_state`, `active`, `delivery_date`, `consultant_name`, `remaining_amt`, `amount`, `finance`, `bank_name`, `insurance`, `followup`, `vehicle_reg`, `branch`, `vehicle_name`) VALUES
(100002, 1, 'Rajat', 'rajat@email.com', '9856475487', '9856475487', '9806203545', '9806203545', 1, '', 'cash', 0, 1, '1,2,3', 1, '', 'vip_no', 1, '1', 1, 1, 0, '', 1, 1, '2017-03-01 00:00:00', 'Sachin Singh', 1, 85200, 1, '14555', 'vapl', 'Vinayak Have Collection of cars', 'normal', 'indore', 'Ford EcoSport'),
(100011, 10, 'Rajat Gupta', 'rajat@gmail.com', '9806203545', '2147483647', '9806203545', '9806203545', 1, '', 'cash', 0, 1, '2,3', 1, 'Test', 'choice_no', 0, 'on', 1, 0, 0, '', 5, 1, '2017-03-07 00:00:00', 'Bhim Singh', 0, 0, 0, '', 'vapl', 'Knowledge Ford', 'normal', 'indore', 'Ford EcoSport'),
(100012, 11, 'Dharmendra Deora', 'deoradharmendra@gmail.com', '9630258741', '9658741458', 'Biyabani Indore', '9856214558', 1, '', 'cheque', 9635, 1, '1,3', 1, '', 'regular_no', 1, '0', 1, 0, 0, '', 1, 1, '2017-03-02 00:00:00', 'Mahendra Singh', 1, 1000, 0, '', 'vapl', 'Loyal', 'normal', 'indore', 'Ford EcoSport'),
(100013, 12, 'Praveen Chouhan', 'praveen@gmail.com', '9412547485', '9320147857', 'Rajmohalla Indore', '9632547487', 1, '', 'cash', 0, 1, '1,2', 1, '', 'choice_no', 0, '0', 0, 0, 0, '', 1, 1, '2017-03-03 04:09:14', 'Vinod Misra', 1, 3000, 0, '', 'vapl', 'Ford Rocks', 'normal', 'indore', 'Ford EcoSport'),
(100014, 13, 'Ramesh Lal', 'ramesh@gmail.com', '9631478547', '7854741458', 'Gangwal indore', '9874521475', 1, '', 'cheque', 96547, 1, '1,2,3', 0, 'Check Clearance', 'choice_no', 0, 'on', 1, 1, 0, '', 1, 1, '2017-03-01 00:00:00', 'Ramlal', 1, 0, 0, '', 'vapl', 'Good Service', 'normal', 'indore', 'Ford EcoSport'),
(100015, 14, 'Raghvendra Singh', 'ragven@gmail.com', '9541745874', '9321475874', 'Bombay Hospital Indore', '9654148822', 1, '', 'cheque', 4343, 1, '1,2,3', 1, '', 'choice_no', 0, 'on', 1, 0, 1, '', 5, 1, '2017-03-08 08:20:16', 'Nilesh Lal', 0, 0, 0, '', 'vapl', 'Modesty Ford', 'normal', 'indore', 'Ford EcoSport'),
(100018, 17, 'Mankunwar Deora', 'deoradharmendra@gmail.com', '9770348768', '0731434095', '33/2 Biyabani Dhar Road Indore', '10588', 1, '', 'cheque', 255, 1, '2,3', 1, 'testkbjgg', 'regular_no', 1, '0', 1, 0, 0, '', 4, 1, '2017-03-12 21:03:00', 'Ankit Maltare', 1, 0, 1, 'ICICI BANK RAJMOHALLA', 'vapl', 'She want to extra accessories in Figo', 'c/o', 'indore', 'Ford Mustang'),
(100019, 18, 'bnhnhmg', '', '2354253355', '', 'bmdngmnmnncbnm,', '5555555555', 1, '', 'cash', 0, 1, '1,2,3', 0, '', '', 0, '', 0, 0, 0, '', 1, 1, '2017-03-12 20:52:00', 'xbmnmxnm', 0, 0, 1, 'hjdghjgh', 'vapl', '', 'normal', 'indore', 'Ford Classic');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `employee_id`, `name`, `email`, `phone`, `address`, `reason`, `date`, `taken`) VALUES
(1, 1, 'Rajat Gupta', 'rajatgupta.gupta1@gmail.com', '(980) 620-3545', 'Test', 'Test', '2017-03-03 00:00:00', 1);

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
(1, 'Rajat', 'rajat@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
