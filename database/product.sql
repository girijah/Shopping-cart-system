-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 24, 2015 at 06:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Apples', 'apples.jpeg', 'Selected by our experts\r\n\r\n1 medium apple counts as 1 of your 5 a-day\r\n\r\nSource of vitamin C\r\n\r\nClass 1\r\n\r\nBag - Plastic - recyclable at a larger Sainsbury''s', '2.60', 100),
(2, 'Duracell Plus Battery', 'battery.jpeg', 'Long lasting power guaranteed\r\n\r\nBest used in a broad range of regularly used devices\r\n\r\n1.5 V\r\n\r\nLong Lasting Power Guaranteed', '3.80', 100),
(3, 'Sultana Scones', 'scones.jpeg', 'Made with British flour\r\n\r\nSuitable for vegetarians\r\n\r\nUnion Flag', '1.25', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
