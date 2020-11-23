-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 01:53 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Organic Bee Honey with Mixed Nuts', '<p>Pure Organic Bee Honey with Mixed Nuts of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Almonds, Macadamia nuts and Hazelnuts.</li>\r\n<li>Exquisite Taste.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '500.00', '0.00', 30, 'p1.jpg', '2020-11-21 17:55:22'),
(2, 'Organic Bee Honey with Sour Sup', '<p>Pure Organic Bee Honey with Sour Sup of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Sour Sup Taste.</li>\r\n<li>Exquisite Flavour.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health with Antioxidants.</li>\r\n</ul>', '450.00', '500.00', 25, 'p2.jpg', '2020-11-23 18:52:49'),
(3, 'Organic Bee Honey with Comb', '<p>Pure Organic Bee Honey with Honeycomb Included.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Honeycomb Taste.</li>\r\n<li>Exquisite Flavor.</li>\r\n<li>Rich with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '450.99', '500.00', 23, 'p3_1.jpg', '2020-11-20 18:47:56'),
(4, 'Organic Raw Bee Honey', '<p>Pure Organic Raw Bee Honey.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Natural Honey Taste.</li>\r\n<li>Rich with Antioxidants.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '400.00', '420.00', 35, 'p0_7.jpg', '2020-11-25 17:42:04');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
