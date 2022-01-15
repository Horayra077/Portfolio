-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 11:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`, `date_submitted`) VALUES
(1, 'Sadbin Shakil', 'sadbin@gmail.com', 'hire', 'hello, are you join my company?', '2022-01-11 12:31:31'),
(3, 'Rakibul Shezan', 'shezan@gmail.com', 'hire', 'hello, are you joining my company? within 10 days.\r\n', '2022-01-11 12:31:31'),
(61, 'Nafiz Zawad', 'zawad@gmail.com', 'hire', 'Welcome to my company!', '2022-01-11 13:33:36'),
(62, 'Ankon', 'ankon@gmail.com', 'hire', 'Hello, aadfghjk', '2022-01-11 13:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `profile_dob` varchar(255) NOT NULL,
  `profile_address` varchar(255) NOT NULL,
  `profile_zip` varchar(255) NOT NULL,
  `profile_email` varchar(255) NOT NULL,
  `profile_phone` varchar(255) NOT NULL,
  `profile_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_name`, `profile_dob`, `profile_address`, `profile_zip`, `profile_email`, `profile_phone`, `profile_about`) VALUES
(3, 'Md. Abuhorayra', 'January 01, 1999', 'House 32, Block F, Road 3, Banasree, Dhaka, Bangladesh', '1219', 'horayra5@gmail.com', '01828144086', 'My name is Md. Abuhorayra. Currently, I am staying in Dhaka. I did my graduation in Computer science and engineering from East-West University. Currently, I am a fresh graduate. My strength is I am a self-motivated, hardworking, and disciplined person. My short-term goal is to get a job in a reputed company and long term goal is to be a project manager. That’s all about me.');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_detail` varchar(255) NOT NULL,
  `project_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_detail`, `project_image`) VALUES
(2, 'Content Management System (CMS) Website', 'Used CORE PHP, MySQL, HTML, CSS, and Bootstrap in this project.', 0x776f726b312e6a7067),
(4, 'E-commerce Website', 'Used Python(Django), HTML, CSS, and PostgreSQL  \r\nhere customers can browse products and shop online.', 0x776f726b322e6a7067),
(5, 'Online food delivery System', 'Database Systems project using Oracle Apex platform.', 0x776f726b332e6a7067),
(6, 'Nationality Prediction Using Machine Learning', 'Used Naive Bayes and Neural Networks', 0x776f726b342e6a7067),
(7, 'Math Puzzle Using C++', 'For solving this problem of Math Puzzle, I used the programming language C++', 0x776f726b352e6a7067),
(10, 'Resolving Overbooked Flight Using C++', 'Stack and Queue-based mini-project and a part of the Flight Management System project.', 0x776f726b362e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `overall` int(11) NOT NULL,
  `last_week` int(11) NOT NULL,
  `last_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `overall`, `last_week`, `last_month`) VALUES
(11, 'HTML', 95, 80, 55),
(12, 'CSS', 98, 28, 60),
(13, 'PHP', 68, 28, 60),
(14, 'Laravel', 72, 28, 60),
(15, 'MySQL', 63, 28, 60),
(16, 'C/C++', 95, 48, 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `username`, `user_email`, `user_password`) VALUES
(1, 'Md.', 'Abuhorayra', 'horayra', 'horayra5@gmail.com', '1234'),
(4, 'Rakibul ', 'Shezan', 'shezan', 'shezan@gmail.com', '2123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
