Blvck Paris Clothing eCommerce
Welcome to the Blvck Paris Clothing eCommerce project repository! This project aims to create an online platform for Blvck Paris Clothing, offering a seamless shopping experience for customers to explore and purchase stylish streetwear and essentials.

Database Setup
To set up the database for the Blvck Paris Clothing eCommerce project, follow these steps:

Create a new MySQL database with a proper name.
Copy the following code and create a file with the name that you used to create the database (Example - YourDBName.sql).
Use a tool like phpMyAdmin or MySQL command line to import the create SQL dump file (YourDBName.sql).


Sql Code 

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 06:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `YourDBName`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `product_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `color`, `size`, `added_on`, `product_name`, `price`) VALUES
(47, 11, 131, 1, '0', 'XS', '2024-03-16 08:07:59', 'Blvck Sweater Black', 47800.00),
(51, 10, 129, 1, '0', 'S', '2024-03-17 13:49:28', 'Charcoal Hoodie', 47800.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `country` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `country`, `address`, `phone_number`) VALUES
(9, 'John', 'Doe', 'johndoe@example.com', 'password123', '2023-05-12 09:30:45', 'USA', '123 Main Street, Anytown, CA', '1234567890'),
(10, 'Jane', 'Smith', 'janesmith@example.com', 'password456', '2023-05-13 10:45:32', 'Canada', '456 Elm Street, Somewhere, ON', '9876543210'),
(11, 'Michael', 'Johnson', 'michaeljohnson@example.com', 'password789', '2023-05-14 11:15:28', 'UK', '789 Maple Avenue, Nowhere, LDN', '5551234567'),
(12, 'Emily', 'Brown', 'emilybrown@example.com', 'passwordabc', '2023-05-15 12:30:59', 'Australia', '321 Oak Street, Anyplace, NSW', '7778889999');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
