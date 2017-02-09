-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 04:15 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinayakford`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `email`, `phone`) VALUES
(1, 'Tiger Nixon', 'System Architect', 't.nixon@datatables.ne', 1234567891),
(2, 'Garrett Winters', 'Accountant', 'g.winters@datatables.net', 1234567892),
(3, 'Ashton Cox', 'Junior Technical Author', 'a.cox@datatables.net', 1234567898),
(4, 'Vipin Sharma', 'Senior Javascript Developer', 'vipin@ignisitsolutions.com', 1234567894),
(5, 'Yamini Bangur', 'Junior Joomla Developer', 'yamini@ignisitsolutions.com', 1234567895),
(7, 'Dharmendra deora', 'Developer', 'deoradharmendra@gmail.com', 1234567899);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `taken` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `employee_id`, `name`, `email`, `phone`, `address`, `reason`, `date`, `taken`) VALUES
(1, 7, 'sandeep', 'sandeep@test.com', '1234567891', 'Aanand bazaar', 'Tax payment', '2017-01-05 03:18:08', 1),
(2, 7, 'varun jain', 'varun@test.com', '1234567892', 'Saket Square', 'Tax payment', '2017-01-06 07:00:00', 0),
(3, 7, 'puni jain', 'punit@test.com', '1234567893', 'LIG Square', 'documents submission', '2017-01-04 07:00:00', 0),
(6, 1, 'dharmendra Deora', 'deoradharmendra@gmail.com', '(787) 878-7878', 'dddddddddd', 'ddddddddddd', '2017-01-04 05:00:00', 1),
(7, 5, 'Sapan J', 'sapan@test.com', '(789) 798-7987', 'gdhgsdjhs', 'jhkjhdkj', '2017-01-05 05:00:00', 0),
(8, 1, 'mini', 'mini@test.com', '(787) 878-7878', 'mmmm', 'mmmmmm', '2017-01-07 02:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
