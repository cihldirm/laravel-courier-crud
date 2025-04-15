-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 05:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradin-backend-test`
--

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `name`, `level`, `registered_date`, `created_at`, `updated_at`) VALUES
(1, 'john Park', 3, '2025-02-27', '2025-04-12 07:44:55', '2025-04-13 06:01:51'),
(2, 'Rose Angel', 2, '2025-03-02', '2025-04-12 14:07:13', '2025-04-12 14:07:13'),
(3, 'Elliana Lane', 1, '2025-03-09', '2025-04-13 12:44:43', '2025-04-13 12:44:43'),
(4, 'Levi Mollina', 5, '2025-01-22', '2025-04-13 12:46:12', '2025-04-13 06:04:38'),
(5, 'shawn johnson', 2, '2025-02-05', '2025-04-13 12:46:29', '2025-04-13 05:58:16'),
(6, 'Damarion cummings', 4, '2025-03-01', '2025-04-13 12:47:56', '2025-04-13 06:04:29'),
(7, 'Budiono Hadi Agung', 2, '2021-11-16', '2025-04-13 05:54:42', '2025-04-13 06:06:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
