-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 04:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A+', '2022-12-17 16:13:55', NULL, NULL),
(2, 'B+', '2022-12-17 16:13:55', NULL, NULL),
(3, 'O+', '2022-12-17 16:14:32', NULL, NULL),
(4, 'AB+', '2022-12-17 16:14:32', NULL, NULL),
(5, 'A-', '2022-12-17 16:14:32', NULL, NULL),
(6, 'O-', '2022-12-17 16:14:32', NULL, NULL),
(7, 'B-', '2022-12-17 16:14:32', NULL, NULL),
(8, 'AB-', '2022-12-17 16:15:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_group` int(11) NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `last_date_of_donation` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `user_id`, `blood_group`, `present_address`, `last_date_of_donation`, `gender`, `created_at`) VALUES
(1, 1, 1, 'dhaka', '17-12-22', 'male', '2022-12-24 22:38:22'),
(2, 2, 3, 'Dhanmondi, Dhaka', '2022-12-22', 'Male', '2022-12-24 22:38:22'),
(3, 8, 3, 'Kallayanpur, Shamoly', '2023-01-02', 'Male', '2023-01-02 01:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `requested_by` int(11) NOT NULL,
  `hostpital_name` varchar(255) NOT NULL,
  `hostpital_address` varchar(500) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `request_type` varchar(20) NOT NULL DEFAULT 'blood',
  `units` varchar(40) NOT NULL,
  `blood_group` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `donation_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `patient_name`, `requested_by`, `hostpital_name`, `hostpital_address`, `phone_number`, `request_type`, `units`, `blood_group`, `donation_date`, `donation_time`) VALUES
(1, 'Rukiya Akhter', 1, 'Square Hospital', 'Dhanmondi, Dhaka', '01700112343', 'plasma', '2', 4, '2022-12-20', '10:30:00'),
(2, 'Sharukh Khan', 1, 'Ibn Sina', 'Dhanmondi, Dhaka', '01700112343', 'blood', '1', 2, '2022-12-21', '12:30:00'),
(3, 'Nurul Islam', 1, 'Khidmah', 'Khilgaon, Dhaka', '01700112343', 'blood', '2', 7, '2022-12-26', '10:30:00'),
(4, 'Supti Akter', 1, 'Hikmah', 'Khilgaon, Dhaka', '01700112343', 'plasma', '1', 2, '2022-12-30', '10:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `confirm_password`, `role`) VALUES
(1, 'rafi', 'ahmed', '03843753754', 'smrafi@gmail.com', '123456789', '123456789', 'admin'),
(2, 'Sumon', 'Ahmed', '01700112233', 'sumon@gmail.com', '1234', '1234', 'user'),
(3, 'Nazmul', ' Chowdhuri', '01715562612', 'nazmul@gmail.com', '12345678', '12345678', 'user'),
(5, 'Mamun', 'Mia', '01715562612', 'mamun@yahoo.com', '12345678', '12345678', 'user'),
(6, 'Sadi', 'Mahmud', '01715562612', 'sadi@gmail.com', '12345678', '12345678', 'user'),
(7, 'Ripon', 'Mia', '01739722222', 'ripon@gmail.com', '12345678', '12345678', 'user'),
(8, 'Sajib', 'Adhikary', '01715562612', 'tosajib@gmail.com', '', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_group` (`blood_group`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`blood_group`) REFERENCES `blood_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donors_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
