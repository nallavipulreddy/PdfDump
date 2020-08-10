-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2020 at 07:06 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_details`
--

DROP TABLE IF EXISTS `assessment_details`;
CREATE TABLE IF NOT EXISTS `assessment_details` (
  `assessment_id` varchar(255) NOT NULL,
  `assessment_name` varchar(255) NOT NULL,
  `assessment_date` date NOT NULL,
  `assessment_creator` varchar(255) NOT NULL,
  `assessment_module` varchar(255) NOT NULL,
  `assessment_law` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_contact` int(10) NOT NULL,
  `validator_name` varchar(255) NOT NULL,
  PRIMARY KEY (`assessment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment_details`
--

INSERT INTO `assessment_details` (`assessment_id`, `assessment_name`, `assessment_date`, `assessment_creator`, `assessment_module`, `assessment_law`, `company_name`, `company_contact`, `validator_name`) VALUES
('A001', 'ABC Assessment 1', '2020-07-01', 'Devendra Gupta', 'Maturity', 'ISO27001', 'ABC', 9009001, 'Ramesh'),
('A002', 'ABC Assessment 2', '2020-07-04', 'Sameer Anja', 'Internal Audit', 'BS10012', 'ABC', 9009002, 'Suresh'),
('A003', 'ABC Assessment 3', '2020-07-03', 'Shivangi Nadkarni', 'Vendor', 'BCI-DSS', 'ABC', 9009003, 'Kalpesh'),
('A004', 'ABC Assessment 4', '2020-07-04', 'Sandeep Rao', 'Client', 'HiTrust', 'ABC', 9009004, 'Somesh'),
('A005', 'ABC Assessment 5', '2020-07-05', 'Pooja Gandhi', 'Maturity', 'RBI ', 'ABC', 9009005, 'Ramesh'),
('A006', 'ABC Assessment 6', '2020-07-06', 'Vikash Kumar', 'Internal Audit', 'SEBI', 'ABC', 9009006, 'Suresh'),
('A007', 'ABC Asessment 7', '2020-07-07', 'Pooja Bhargava', 'Vendor', 'ISO27001', 'ABC', 9009007, 'Kalpesh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
