-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2023 at 12:20 PM
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
-- Database: `Health`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Id`, `userName`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `day_id` varchar(20) NOT NULL,
  `appoint_time` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `user_id`, `day_id`, `appoint_time`, `status`) VALUES
(1, '', 'MONDAY', '9:00am - 9:30am', ''),
(2, '', 'MONDAY', '10:00am - 10:30am', ''),
(3, '11', 'MONDAY', '11:30am - 12:00pm', 'approved'),
(4, '8', 'MONDAY', '1:00pm - 1:30pm', 'approved'),
(5, '', 'TUESDAY', '9:30am - 10:00am', ''),
(6, '', 'TEUSDAY', '10:30am - 11:00am', ''),
(7, '', 'TUESDAY', '11:30am - 12:00pm', ''),
(8, '', 'TEUSDAY', '1:00pm - 1:30pm', ''),
(9, '', 'TEUSDAY', '1:30pm - 2:00pm', ''),
(10, '', 'WEDNESDAY', '9:00am - 9:30am', ''),
(11, '', 'WEDNESDAY', '10:00am - 10:30am', ''),
(12, '', 'WEDNESDAY', '11:00am - 11:30am', ''),
(13, '', 'WEDNESDAY', '12:00pm - 12:30pm', ''),
(14, '', 'WEDNESDAY', '1:30pm - 2:00pm', ''),
(15, '', 'THURSDAY', '12:00pm - 12:30pm', ''),
(16, '', 'FRIDAY', '10:00am - 10:30am', ''),
(17, '', 'FRIDAY', '1:00pm - 1:30pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE `Register` (
  `Id` int(11) NOT NULL,
  `fullName` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`Id`, `fullName`, `email`, `uname`, `phone`, `password`) VALUES
(2, 'Abdultawab Nasir', 'abdultawabnasir1@gmail.com', 'abdultawab001', '07011527373', '$2y$10$6D06xS/0HWYu4AIt/AXm..xwM4KisAFs4kxfzBqxLyygydTApyT06'),
(4, 'Abdultawab', 'hauwabala3693@gmail.com', 'abdultawab002', '07061489655', '$2y$10$iz2LtiVt5lOxIBSAwIXYCu4olJ4KRHnHg7QGAPiqIdcLoReNVQObC'),
(5, 'Nana Abdull', 'nafisaabdulazeez@gmail.com', 'nana022', '09011432567', '$2y$10$kwXucqxLpZMTUNfznqoU1OfoMZa4Pzml15P3lSgJudKdRvpzi0DU2'),
(6, 'shalom', 'shalom11@gmail.com', 'shalom001', '09011223344', '$2y$10$j.TApUMCF19ihwqgZtWAQOHZ8xVksuNBNTjHupgmVH7u8Eh7eCSTK'),
(7, 'Husna', 'husnaibrahimisa@gmail.com', 'husna001', '09060008054', '$2y$10$5M8OlcRNAFxkETwpoKwVR.gw2hWTs0kf9cxPTyzgk2a1SgTJfeWa.'),
(8, 'salma', 'salmasulyman999@gmail.com', 'SArray', '9875432284', '$2y$10$Ia6NSdM9jceV4SI0v79NLujBd2d/iCFhjgCSKuPn/3GLKbCqWbkce'),
(9, 'kamal', 'kamal@gmail.com', 'kamal001', '09011223344', '$2y$10$pFnel3O1xigYGIZ6oiykmuYp08wrexlYa7d9DFsEkTfwVp9Lrrmqq'),
(10, 'sam', 'sam@gmail.com', 'sam001', '70690495450', '$2y$10$Y3DipKm9vmDOINiax3aD9uq8njNcrda722hb8iCoj4VR9KlMccxaO'),
(11, 'mike', 'mike@gmail.com', 'mike001', '779594924395', '$2y$10$emcO7dE0T8f3H/aratVWI.RIJAQ3NgAfzgqU5yy5NC6wjDbU8rgLK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `Register`
--
ALTER TABLE `Register`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`,`uname`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Register`
--
ALTER TABLE `Register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
