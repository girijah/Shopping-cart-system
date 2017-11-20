-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Host: elephant.ecs.westminster.ac.uk:3306
-- Generation Time: Feb 12, 2016 at 12:21 PM
-- Server version: 5.5.47
-- PHP Version: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `w1560234_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `prodId` int(4) NOT NULL AUTO_INCREMENT,
  `prodName` varchar(30) COLLATE utf8_bin NOT NULL,
  `prodPicName` varchar(50) COLLATE utf8_bin NOT NULL,
  `prodDescrip` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Ambrosia Devon Custard 400g', 'AmbrosiaDevonCustard400g.jpeg', 'Devon Custard  Creamy & delicious  A source of calcium  No artificial colours  No preservatives  100% natural flavours  Full of dairy goodness  Suitable for vegetarians', 1.00, 15),
(3, 'Ariel Washing Liquid 2L', 'ArielWashingLiquid2L.jpeg', 'Outstanding stain removal in the 1st wash  Comes with the innovative pre-treat cap which allows to dose correctly and enables targeted action on tough stains  Thanks to its formula and innovative pre-treat cap, Ariel removes stains as of the first wash', 5.00, 15),
(4, 'BBQ Chicken Tikka Kebabs', 'BBQChickenTikkaKebabs.jpeg', 'Diced chicken thigh fillet kebabs with a tikka marinade', 3.00, 15),
(5, 'Bulmers Pear Cider 568ml', 'BulmersPearCider568ml.jpeg', 'Bulmers Pear Cider compliments the colourful Bulmers range, offering a flavour for everyone, perfect for mixed group drinking occasions.', 2.00, 15),
(6, 'Semi Skimmed Milk 1L', 'SemiSkimmedMilk1L.jpeg', 'Fresh British Pasteurised Filtered Homogenised Standardised Semi Skimmed Milk  Great taste 2015  Easy to digest', 1.00, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
