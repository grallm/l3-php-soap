-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2020 at 11:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `services_soap_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(36) NOT NULL,
  `constructor` varchar(36) NOT NULL,
  `engine` varchar(36) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `constructor`, `engine`, `image`) VALUES
(1, 'DS3', 'Citroen', 'BLUEHDI', 'https://images-na.ssl-images-amazon.com/images/I/412Ew2CAyEL._AC_SX466_.jpg'),
(2, 'Panamera', 'Porsche', 'V8', 'https://cnet2.cbsistatic.com/img/zEpC0lVAz_AkeyS40jm9M0ikfnc=/1200x675/2020/08/25/eeaf87ca-f25b-4fbf-a6ac-2ae06b6c0a4b/panamera-ogi.jpg'),
(3, 'Taycan', 'Porsche', 'Electrical', 'https://electrek.co/wp-content/uploads/sites/3/2020/04/taycan-4s-3.jpg?quality=82&strip=all'),
(4, '3008', 'Peugeot', 'BLUEHDI', 'https://cdn.motor1.com/images/mgl/2X8nx/s1/peugeot-3008-restyle-2020.jpg'),
(5, '306', 'Peugeot', 'VMax V14', 'https://upload.wikimedia.org/wikipedia/commons/e/ec/2000_Peugeot_306_Meridian_1.6.jpg'),
(6, '508', 'Peugeot', 'BLUEHDI', 'https://car-images.bauersecure.com/pagefiles/96385/508hybrid_050.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);
