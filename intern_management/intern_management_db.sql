-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2026 at 04:25 AM
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
-- Database: `intern_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_intern`
--

CREATE TABLE `add_intern` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_intern`
--

INSERT INTO `add_intern` (`id`, `name`, `email`, `password`, `mobile`, `created_at`) VALUES
(1, 'Onkar Koli', 'ok123@gmail.com', 'ok123', '9856321475', '2026-02-24 07:20:41'),
(2, 'Mayur Gurav', 'mg123@gmail.com', 'mg123', '8563214700', '2026-02-24 07:23:28'),
(9, 'Parth More', 'pm123@gmail.com', 'pm123', '9632587410', '2026-02-24 07:42:31'),
(11, 'Sakshi Banne', 'sb123@gmail.com', 'sb123', '7412589630', '2026-02-24 07:44:35'),
(12, 'Pravin Singh', 'ps123@gmail.com', 'ps123', '9632145870', '2026-02-24 07:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `intern_id` int(11) NOT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `status` enum('Present','Absent','Half Day') NOT NULL DEFAULT 'Absent',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `intern_id`, `in_time`, `out_time`, `status`, `date`) VALUES
(4, 9, '11:00:23', '05:00:38', 'Present', '2026-03-09'),
(5, 12, '12:43:52', '12:44:08', 'Present', '2026-03-09'),
(11, 9, '01:31:41', '01:34:05', 'Present', '2026-03-10'),
(12, 2, '02:56:22', '02:59:41', 'Present', '2026-03-10'),
(13, 11, '03:36:13', '03:37:05', 'Present', '2026-03-10'),
(16, 12, '04:28:33', '04:28:45', 'Present', '2026-03-10'),
(17, 11, '11:00:32', '01:28:33', 'Present', '2026-03-11'),
(18, 9, '01:29:30', '01:32:00', 'Present', '2026-03-11'),
(19, 2, '01:42:17', '01:42:58', 'Present', '2026-03-11'),
(20, 12, '02:47:01', NULL, 'Present', '2026-03-11'),
(21, 12, '12:25:34', '01:13:57', 'Present', '2026-03-16'),
(22, 12, '11:53:03', '11:55:12', 'Present', '2026-03-17'),
(23, 2, '12:44:26', '12:47:11', 'Present', '2026-03-17'),
(24, 9, '11:41:43', '12:03:24', 'Present', '2026-03-18'),
(25, 11, '12:04:18', '12:16:27', 'Present', '2026-03-18'),
(26, 12, '12:18:21', '12:19:08', 'Present', '2026-03-18'),
(27, 12, '12:42:43', '12:43:06', 'Half Day', '2026-03-20'),
(28, 1, '12:57:34', '12:58:26', 'Present', '2026-03-20'),
(29, 1, '01:31:16', '01:32:01', 'Present', '2026-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin123@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(10) NOT NULL,
  `intern_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Pending','Completed','In Process') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `intern_id`, `task_name`, `task_description`, `created_at`, `status`) VALUES
(41, 11, 'Run PHP code', 'start xampp server, in browser type localhost and then access it', '2026-03-05 06:35:59', 'Pending'),
(42, 11, 'Clone Website', 'Choose any Dating web app make it clone ', '2026-03-05 06:37:25', 'Pending'),
(43, 9, 'Make Home Page', 'Add contents like header, images, cards, heading section, footers, paragraphs for the images, etc.', '2026-03-18 06:15:06', 'Completed'),
(45, 12, 'Create Database and Tables', 'Database = \"intern_management\", Tables = addintern, task, attendance. ', '2026-03-09 05:41:00', 'Completed'),
(46, 2, 'Add Profile', 'Add profile images, their name, add some posts, comments and like the pages, add some paragraph contents', '2026-03-05 05:47:33', 'Pending'),
(48, 12, 'create table = Task', 'Add task through the Form Section in the webpage', '2026-03-06 08:48:12', 'Completed'),
(50, 11, 'navbar 2', 'add home, about, contact, profile, and other menus and logos', '2026-03-05 07:48:56', 'Completed'),
(52, 1, 'OTT App', 'Add move image, Their Headings, add different navbars in the bottom, ', '2026-03-06 05:51:13', 'In Process'),
(53, 12, 'Intern Attendance ', 'Add table attendance when user login in_time Present and logout out_time Absent', '2026-03-09 09:47:50', 'In Process'),
(54, 2, 'Make design', 'Design on webpage make html webpage and that page upload on facebook', '2026-03-07 06:59:52', 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_intern`
--
ALTER TABLE `add_intern`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_intern` (`intern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_intern`
--
ALTER TABLE `add_intern`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `add_intern` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_intern` FOREIGN KEY (`intern_id`) REFERENCES `add_intern` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
