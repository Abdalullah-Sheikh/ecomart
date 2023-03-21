-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 12:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(5, 'Winter Shirt (Blue)\r\n', 'q12gr', 'assets\\img\\shirt\\2\\4.jpg', 85.00),
(6, 'Skinny Jeans Pant\r\n', 'aer123d', 'assets\\img\\pant\\1\\1.jpg', 45.00),
(8, 'Eastland Lumber Up Boots\r\n', 'kncadgh', 'assets\\img\\shoe\\1.jpg', 38.00),
(10, 'Varsi Leather Bag\r\n', 'uygujn45', 'assets/img/bag/2.jpg', 65.00),
(11, 'Fit Twill Shirt for Woman\r\n', 'ut6rfyb', 'assets/img/product/800_1034/Image-15-1.jpg', 62.00),
(12, 'Grand Atlantic Chukka Boots', 'kjuhxca2', 'assets/img/product/800_1034/Image-3-1.jpg', 24.00),
(13, 'Women\'s Faux-Trim Shirt', 'jnug2f4', 'assets/img/product/800_1034/Image-4-1.jpg', 84.00),
(15, 'Soft Touch Interlock Polo', 'aqhu123a', 'assets/img/product/800_1034/Image-16-1.jpg', 45.00),
(16, 'Ecomart Smart Watch', 'afas412a', 'assets/img/product/product-img1.jpg', 30.00),
(17, 'Ecomart Smart Glass', 'y5481scq', 'assets/img/sunglass/2.jpg', 25.00),
(18, 'Cotton Shirt fot Men (Brown)', 'jnbyaca', 'assets/img/shirt/2/1.jpg', 85.00),
(19, 'Cotton Shirt (Orange)', 'hbg1ad', 'assets/img/shirt/3/4.jpg', 32.00),
(20, 'Ribbed Cotton Bodysuits', 'mnih758', 'assets/img/product/800_1034/Image-1-1.jpg', 71.00),
(21, 'Men\'s Tricot Track Jacket', 'qlcj41', 'assets/img/jacket/1/1.jpg', 35.00),
(22, 'Wedding Diamond Ring', 's1zcd13s', 'assets/img/product/800_1034/Image-6-1.jpg', 64.00),
(23, 'Varsi Leather Bag', 'zvsdf51', 'assets/img/product/800_1034/Image-14-1.jpg', 85.00),
(24, 'Comfort winter T-Shirt', 'khyu6q', 'assets/img/shirt/1/5.jpg', 26.00),
(25, 'Girls Metallic Coat', 'lguhqu7q', 'assets/img/product/800_1034/Image-13-1.jpg', 38.00),
(26, 'Packable Quilted Puffer Jacket', '451agjzvc', 'assets/img/jacket/2/2.jpg', 28.00),
(27, 'Men\'s Classic Stretch Shirt', 'kjqeo4', 'assets/img/product/800_1034/Image-12-1.jpg', 63.00),
(28, 'Tinted Sunglasses', 'mq1Rtac', 'assets/img/product/800_1034/Image-11-1.jpg', 48.00),
(29, 'Denim Official Coat', 'h1Fygar', 'assets/img/product/800_1034/Image-7-1.jpg', 35.00),
(30, 'Skinny Cotton Pant', 'sbRlak4', 'assets/img/product/800_1034/Image-10-1.jpg', 61.00),
(31, 'Fit Twill Shirt for Woman', 'ki14FDfax', 'assets/img/product/800_1034/Image-9-1.jpg', 34.00),
(32, 'Baby Dress for Girl', 'g5aehoca', 'assets/img/product/800_1034/Image-8-1.jpg', 35.00),
(33, 'Polarized Sunglasses', '9gadqc', 'assets/img/sunglass/1.jpg', 35.00),
(34, 'Men\'s Flat-Front Shorts', 'da45gaR', 'assets/img/pant/2/3.jpg', 30.00),
(36, 'Faux-Trim Shirt', 'licaw13', 'assets/img/jacket/2/3.jpg', 84.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
