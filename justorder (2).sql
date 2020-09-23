-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 04:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justorder`
--
CREATE DATABASE IF NOT EXISTS `justorder` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `justorder`;

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

DROP TABLE IF EXISTS `add_to_cart`;
CREATE TABLE `add_to_cart` (
  `cart` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`cart`, `u_id`, `p_id`, `s_id`, `quantity`, `total_price`, `status`) VALUES
(2, 2, 25, 3, 0, 0, 'In My Cart'),
(17, 1, 3, 1, 1, 70, 'In My Cart'),
(19, 1, 27, 1, 1, 302, 'In My Cart'),
(21, 1, 28, 1, 1, 72, 'In My Cart'),
(29, 3, 25, 3, 8, 3787, 'In My Cart'),
(72, 3, 3, 1, 1, 70, 'In My Cart'),
(100, 3, 25, 3, 1, 476, 'In My Cart');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--
-- Error reading structure for table justorder.basket: #1932 - Table 'justorder.basket' doesn't exist in engine
-- Error reading data for table justorder.basket: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `justorder`.`basket`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `deliverycompany`
--

DROP TABLE IF EXISTS `deliverycompany`;
CREATE TABLE `deliverycompany` (
  `dlv_com_id` int(255) NOT NULL,
  `dlv_com_name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `location` int(255) NOT NULL,
  `num_driver` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliverycompany`
--

INSERT INTO `deliverycompany` (`dlv_com_id`, `dlv_com_name`, `phone`, `location`, `num_driver`) VALUES
(1, 'BeirutDel', 76649439, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `driver1`
--

DROP TABLE IF EXISTS `driver1`;
CREATE TABLE `driver1` (
  `driver_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `com_id` int(255) NOT NULL,
  `phone` int(14) NOT NULL,
  `latiu` varchar(255) NOT NULL,
  `longu` double NOT NULL,
  `addressd` varchar(255) NOT NULL,
  `distance` double NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver1`
--

INSERT INTO `driver1` (`driver_id`, `email`, `password`, `fname`, `lname`, `address`, `com_id`, `phone`, `latiu`, `longu`, `addressd`, `distance`, `status`) VALUES
(1, 'raed@gmail.com', '102030Am', 'raed', 'abed el khalek', 'Majdelbaana , raed abed el khalek house', 1, 70658112, '37.4219983', -122.084, '37.4219983,-122.084', 7305.1749937571885, 'BUSY'),
(3, 'ak@gmail.com', '102030Am', 'ali', 'kammouh', 'beirut , tarik , jdideh, rawess bdlg', 1, 76649439, '37.4219482', -122.508, '', 7312.767064112519, 'online'),
(4, 'wissam@gmail.com', '102030Am', 'wissam', 'jenior', 'beirut, Moasytbeh,jounblat street, bldg AK', 1, 3117276, '0', 0, '0', 0, 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

DROP TABLE IF EXISTS `order1`;
CREATE TABLE `order1` (
  `o_id` int(255) NOT NULL,
  `u_id` int(255) NOT NULL,
  `s_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `d_id` int(255) DEFAULT NULL,
  `total_price` int(255) NOT NULL,
  `quan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `latiu` varchar(255) DEFAULT NULL,
  `longu` varchar(255) DEFAULT NULL,
  `loca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`o_id`, `u_id`, `s_id`, `p_id`, `d_id`, `total_price`, `quan`, `status`, `latiu`, `longu`, `loca`) VALUES
(123, 3, 1, 3, NULL, 300, 3, 'waiting for confirmation', '37.4219983 ', ' -122.084', '37.4219983,-122.084'),
(298, 3, 1, 25, NULL, 946, 2, 'WAITING FOR CONFORMATION', NULL, NULL, ''),
(764, 3, 1, 30, NULL, 299, 1, 'waiting for confirmation', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `p_id` int(255) NOT NULL,
  `id_s` int(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `quantity` int(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` text,
  `brand` text NOT NULL,
  `size` varchar(25) NOT NULL,
  `color` text NOT NULL,
  `warranty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `id_s`, `imagename`, `quantity`, `price`, `description`, `category`, `brand`, `size`, `color`, `warranty`) VALUES
(3, 1, '1497620049503.jpg', 4, 67, '9 \"  Tablet', 'offer', 'chinese', '9', 'All', 1),
(25, 3, 'IMG-20160922-WA0019.jpg', 6, 473, 'laptop', 'offer', 'toshiba', '15', 'black', 1),
(27, 1, 'IMG-20160902-WA0060.jpg', 5, 299, 'package', 'Laptops', 'toshiba', '15', 'black', 1),
(28, 1, 'IMG-20160902-WA0058.jpg', 6, 69, 'TABLET', 'offer', 'chinese', '7', 'ALL', 1),
(30, 1, 'IMG-20160902-WA0060.jpg', 4, 299, 'LENOVO', 'offer', 'LENOVO', '15', 'black', 1),
(31, 1, 'IMG-20160927-WA0002.jpg', 6, 327, 'package', 'offer', 'LENOVO', '15', 'black', 1),
(32, 1, '1498436370656.jpg', 10, 260, 'Playstation 4 ', 'console', 'Playstation', '25', 'black', 1),
(33, 1, '1497633422183.jpg', 6, 10, 'Bluetooth Headphone', 'Gadgets', 'chinese', '5', 'Blue', 1),
(34, 1, 'IMG-20160903-WA0005.jpg', 5, 13, 'wirless hdmi', 'Gadgets', 'chinese', '2', 'black', 1),
(36, 1, 'IMG-20160905-WA0019.jpg', 10, 377, '[laptop 4 g ram 500g hdd', 'Laptops', 'toshiba', '15', 'black', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `s_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` text NOT NULL,
  `gender` text,
  `country` text,
  `phone` int(8) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) DEFAULT NULL,
  `Birthday` date NOT NULL,
  `Store_name` char(255) NOT NULL,
  `locationS` varchar(255) NOT NULL,
  `latis` varchar(255) NOT NULL,
  `lo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`s_id`, `fname`, `lname`, `gender`, `country`, `phone`, `address`, `email`, `password`, `admin`, `Birthday`, `Store_name`, `locationS`, `latis`, `lo`) VALUES
(1, 'Ali', 'Kammouh', 'M', 'Lebanon', 3117276, 'Lebanon/Beirut/ Tarik jdideh\r\nRawass street/ Kaskass bldg / 6th floor', 'alikammouh1@gmail.com', '11210187Am', 1, '1989-11-06', 'Beirutelecom', '37.415458, -122.085234', '33.8782997', '35.5000992'),
(3, 'hello', 'world', 'M', 'Lebanon', 70707070, 'lebanon/beirut                    ', 'store@gmail.com', '123456789Am', 1, '2019-11-19', 'store', '33.8809891,35.4929352', '33.8809891', '35.4929352');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` text NOT NULL,
  `Birthday` date NOT NULL,
  `gender` text,
  `country` text,
  `phone` int(8) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `Birthday`, `gender`, `country`, `phone`, `address`, `email`, `password`) VALUES
(1, 'raed', 'Abdel el khalek', '1989-12-12', 'M', 'Palestine', 70658112, 'Jabal                      \r\n                        ', '10931444@students.liu.edu.lb', '10931444Ra'),
(2, 'raed', 'km', '2019-09-11', 'M', 'Lebanon', 70707070, 'beirut / lebanon / str 52              ', 'raed@gmail.com', '123456789Am'),
(3, 'hadi', 'halawi', '1994-11-06', 'M', 'Lebanon', 76760477, 'lebanon                     ', 'hadi@gmail.com', '102030Am'),
(4, 'Ali', 'Kammouh', '2020-06-17', 'M', 'Lebanon', 3117276, 'Lebanon/Beirut/ Tarik jdideh\r\nRawass street/ Kaskass bldg / 6th floor', 'alikammouh1@gmail.com', '1234'),
(5, 'test', 'test', '1998-02-12', 'M', ' Lebanon ', 3112101, 'beirut', 'test@gmail.com', '102030Am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`cart`),
  ADD KEY `fk_u_id` (`u_id`),
  ADD KEY `fk_P_id` (`p_id`),
  ADD KEY `fk_S_id` (`s_id`);

--
-- Indexes for table `deliverycompany`
--
ALTER TABLE `deliverycompany`
  ADD PRIMARY KEY (`dlv_com_id`,`phone`) USING BTREE;

--
-- Indexes for table `driver1`
--
ALTER TABLE `driver1`
  ADD PRIMARY KEY (`driver_id`,`phone`),
  ADD KEY `fk_id` (`com_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `constraint_fk` (`s_id`),
  ADD KEY `constraint_fk1` (`u_id`),
  ADD KEY `constraint_fk2` (`p_id`),
  ADD KEY `fk_d_id` (`d_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`) USING BTREE,
  ADD KEY `fk_u_p` (`id_s`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`s_id`,`phone`,`email`,`Store_name`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`,`email`,`phone`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `deliverycompany`
--
ALTER TABLE `deliverycompany`
  MODIFY `dlv_com_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver1`
--
ALTER TABLE `driver1`
  MODIFY `driver_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD CONSTRAINT `fk_P_id` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_S_id` FOREIGN KEY (`s_id`) REFERENCES `store` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_u_id` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `driver1`
--
ALTER TABLE `driver1`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`com_id`) REFERENCES `deliverycompany` (`dlv_com_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `constraint_fk` FOREIGN KEY (`s_id`) REFERENCES `store` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint_fk1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint_fk2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_d_id` FOREIGN KEY (`d_id`) REFERENCES `driver1` (`driver_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_u_p` FOREIGN KEY (`id_s`) REFERENCES `store` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
