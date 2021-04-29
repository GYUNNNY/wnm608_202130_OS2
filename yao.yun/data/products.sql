-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2021 at 09:02 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yyao31_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `category` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `url` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `image_other` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `description`, `price`, `url`, `date_create`, `date_modify`, `image_main`, `image_thumb`, `image_other`) VALUES
(1, 'Single Origin', 'Duromina', 'CRANBERRY · LILAC · SOFT', 16.00, '', '2021-04-21 19:34:59', '2021-04-21 19:34:59', 'images/product1.jpg', 'images/product1_t.jpg', ''),
(2, '', 'Roger Flores', 'APRICOT · CANDIED PECAN · CACAO', 16.00, '', '2021-04-21 20:51:55', '2021-04-21 20:51:55', 'images/product2.jpg', 'images/product2_t.jpg', ''),
(3, 'Single Origin', 'Kayanza Natural', 'BLOOD ORANGE · BLACKBERRY PRESERVES · COMPLEX', 18.00, '', '2021-04-21 20:53:16', '2021-04-21 20:53:16', 'images/product3.jpg', 'images/product3_t.jpg', ''),
(4, 'Single Origin', 'Wuri', 'ROSE · PEACH RINGS · COMPOTE', 25.00, '', '2021-04-21 20:54:07', '2021-04-21 20:54:07', 'images/product4.jpg', 'images/product4_t.jpg', ''),
(5, 'Blend', 'The 1950', 'STONEFRUIT · MULLING SPICE · SWEET TEA', 12.00, '', '2021-04-21 20:54:44', '2021-04-21 20:54:44', 'images/product5.jpg', 'images/product5_t.jpg', ''),
(6, 'Blend', 'NVR House Blend', 'MILK CHOCOLATE · MANDARIN · APPLE', 12.00, '', '2021-04-21 20:55:28', '2021-04-21 20:55:28', 'images/product6.jpg', 'images/product6_t.jpg', ''),
(7, 'Blend', 'Breakfast Blend', 'CITRUS · STONE FROIT · CARAMEL', 14.00, '', '2021-04-21 20:56:18', '2021-04-21 20:56:18', 'images/product7.jpg', 'images/product7_t.jpg', ''),
(8, 'Blend', 'Organic French Roast', 'MOLASSES · PIPE TOBACCO · DARK CHOCOLATE', 14.00, '', '2021-04-21 20:57:03', '2021-04-21 20:57:03', 'images/product8.jpg', 'images/product8_t.jpg', ''),
(9, 'Seasonal Blend', 'Wilder Blend', 'RASPBERRY · FIG · REFRESHING', 18.00, '', '2021-04-21 20:57:42', '2021-04-21 20:57:42', 'images/product9.jpg', 'images/product9_t.jpg', ''),
(10, 'Seasonal Blend', 'The Winter Blossom', 'CHERRY · MARZIPAN · CLEAN', 19.00, '', '2021-04-21 20:58:24', '2021-04-21 20:58:24', 'images/product10.jpg', 'images/product10_t.jpg', ''),
(11, 'Seasonal Blend', 'Starlight House Blend', 'CHOCOLATE · BLUEBERRY PIE · VELVETY', 19.00, '', '2021-04-21 20:59:02', '2021-04-21 20:59:02', 'images/product11.jpg', 'images/product11_t.jpg', ''),
(12, 'Decaf', 'Decaf House Blend', 'CHOCOLATE · LIME · CARAMELIZED SUGAR', 15.00, '', '2021-04-21 20:59:38', '2021-04-21 20:59:38', 'images/product12.jpg', 'images/product12_t.jpg', ''),
(13, 'Decaf', 'Streetlevel', 'RED APPLE · MARMALADE · MOLASSES', 17.00, '', '2021-04-21 21:00:21', '2021-04-21 21:00:21', 'images/product13.jpg', 'images/product13_t.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
