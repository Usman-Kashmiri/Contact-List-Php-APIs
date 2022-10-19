-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 12:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactlistdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

CREATE TABLE `contactlist` (
  `id` text NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `image_path` text NOT NULL,
  `contact_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactlist`
--

INSERT INTO `contactlist` (`id`, `first_name`, `last_name`, `phone_no`, `email_address`, `image_path`, `contact_address`) VALUES
('1', 'Maqsood', 'Makenik', '090078601', 'maqsood@mycontacts.com', 'https://cdn.britannica.com/97/194197-050-5BD88874/Vin-Diesel-The-Fast-and-the-Furious.jpg', 'Machar kaloni'),
('2', 'Pervaiz', 'Plumber', '090078602', 'pervaizbhai@mycontacts.com', 'https://images7.memedroid.com/images/UPLOADED975/5f16b7dd537c4.jpeg', 'Pehalvan Chonk'),
('3', 'Muneeb', 'Munshee', '090078603', 'muneeb@mycontacts.com', 'https://imgix.ranker.com/user_node_img/50071/1001409102/original/it_s-nice-i-guess-photo-u1?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=375', 'Sohrab Goth mundi'),
('4', 'Mubeen', 'Mochi', '090078604', 'mubeen@mycontacts.com', 'https://cdnb.artstation.com/p/assets/images/images/006/662/853/medium/vic-guzman-gru3d.jpg?1500307301', 'Mochi Moor Gulshan-e-Iqbal 13-D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
