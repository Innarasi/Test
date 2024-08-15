-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 10:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u-bung system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `firstname_cust` char(25) NOT NULL,
  `lastname_cust` char(25) NOT NULL,
  `contactnum_cust` int(10) NOT NULL,
  `address_cust` varchar(100) NOT NULL,
  `email_cust` varchar(100) NOT NULL,
  `password_cust` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`firstname_cust`, `lastname_cust`, `contactnum_cust`, `address_cust`, `email_cust`, `password_cust`) VALUES
('sarah', 'ahmad', 147854569, 'no 44, indera mahkota', 'eila@gmail.com', '145789'),
('imarawati', 'rashid', 123456789, '21 kuantan', 'eima95@gmail.com', '124567'),
('wong', 'yee', 11123468, '15melaka', 'eima@gmail.com', '123456'),
('IMARAWATI', 'RASHID', 11233237, 'No. 44, Lorong Shahzan IM 13,', 'eimarashid88@gmail.com', '142145'),
('IMARAWATI', 'RASHID', 11233237, 'No. 44, Lorong Shahzan IM 13,', 'eimarashid88@gmail.com', '142145'),
('', '', 0, '', 'eimarashid88@gmail.com', '142145'),
('', '', 0, '', 'eima', ''),
('', '', 0, '', '', ''),
('', '', 0, '', '', '142');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_quantity` int(11) NOT NULL,
  `menu_price` int(11) NOT NULL,
  `menu_totalprice` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
