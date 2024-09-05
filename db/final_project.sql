-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2022 at 02:29 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(20) NOT NULL,
  `cust_email` varchar(20) NOT NULL,
  `cust_pass` int(11) NOT NULL,
  `cust_phone` varchar(15) NOT NULL,
  `cust_pincode` varchar(15) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `cust_name`, `cust_email`, `cust_pass`, `cust_phone`, `cust_pincode`, `cust_address`) VALUES
(1, 'Atharv Giri', 'NAKIA@gmail.com', 123, '9999999', '4242', 'Japan'),
(2, 'JapeEDITED', 'majan@gmail.com', 98, '9999999', '4242', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `hawker_details`
--

DROP TABLE IF EXISTS `hawker_details`;
CREATE TABLE IF NOT EXISTS `hawker_details` (
  `Hawkid` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(11) NOT NULL,
  `hawk_name` varchar(50) NOT NULL,
  `hawk_number` int(12) NOT NULL,
  `Hawk_Landmark` varchar(255) NOT NULL,
  `Hawk_Pincode` int(10) NOT NULL,
  `Type_of_product` varchar(20) NOT NULL,
  PRIMARY KEY (`Hawkid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hawker_details`
--

INSERT INTO `hawker_details` (`Hawkid`, `password`, `hawk_name`, `hawk_number`, `Hawk_Landmark`, `Hawk_Pincode`, `Type_of_product`) VALUES
(1, '1234', ' Atharv  ', 12345, 'kop', 201212, 'BAKER'),
(2, '123', 'Krushna', 123456789, 'Kop', 12345, 'VEGETABLE'),
(3, '123', 'Rugved_Test', 9999999, 'Japan', 4242, 'BAKER'),
(4, '12345', 'Pratik', 789456123, 'Shirdi', 12345, 'FRUIT'),
(14, '753', 'GREEN TEA', 12345, 'kop', 201212, 'VEGETABLE'),
(15, '9999', 'GREEN TEA', 12345, 'kop', 201212, 'VEGETABLE'),
(16, '1234', 'Beer', 900, 'kop', 201212, 'BAKER'),
(17, '456', 'Wine', 89898, 'kop', 201212, 'VEGETABLE'),
(18, '789', 'TESTEDITPROFILE', 9999999, 'Japan', 4242, 'VEGETABLE'),
(19, '123', 'Origin', 912344, 'MUMBAI', 4242, 'BAKER'),
(20, '0987', 'adada', 5674, 'DELHI', 4242, 'BAKER');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `temp_id` int(100) NOT NULL AUTO_INCREMENT,
  `Hawk_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `PriceOfProduct` int(50) NOT NULL,
  PRIMARY KEY (`temp_id`),
  KEY `test` (`Hawk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`temp_id`, `Hawk_id`, `product_name`, `PriceOfProduct`) VALUES
(2, 2, ' OARNG ', 30),
(3, 3, 'Dragon Fruit', 100),
(6, 3, 'MUSKMELON', 50),
(9, 3, ' CRANE BERRY  ', 80);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `test` FOREIGN KEY (`Hawk_id`) REFERENCES `hawker_details` (`Hawkid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
