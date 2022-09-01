-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 12:39 PM
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
-- Database: `css_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `user_type` tinyint(1) NOT NULL COMMENT '1= admin, 2= staff,3= customer',
  `ticket_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `user_type`, `ticket_id`, `comment`, `date_created`) VALUES
(1, 1, 1, 1, '&lt;p&gt;Sample Comment only&lt;/p&gt; ', '2020-11-09 14:52:16'),
(3, 2, 3, 1, '&lt;p&gt;Sample&amp;nbsp;&lt;/p&gt;', '2020-11-09 15:36:56'),
(4, 1, 1, 1, 'problem founded&amp;nbsp;', '2022-08-07 12:17:47'),
(5, 1, 1, 3, '&lt;p&gt;done&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '2022-08-10 13:31:20'),
(6, 1, 1, 16, '', '2022-08-11 15:09:22'),
(7, 1, 1, 16, 'choltese kaj&amp;nbsp;', '2022-08-11 15:09:35'),
(8, 1, 1, 26, '&lt;p style=&quot;line-height: 1.5;&quot;&gt;&lt;i&gt;Work is processing.&lt;/i&gt;&lt;/p&gt;', '2022-08-20 14:53:35'),
(9, 1, 1, 27, '&lt;p&gt;&lt;b&gt;&lt;i&gt;This Ticket has been closed&lt;/i&gt;&lt;/b&gt;&lt;/p&gt;', '2022-08-29 02:06:41'),
(10, 5, 2, 27, '&lt;p&gt;Why closed?&lt;/p&gt;', '2022-08-29 02:07:20'),
(11, 1, 1, 27, 'no support needed for this item that&amp;#x2019;s why...', '2022-08-29 02:08:59'),
(12, 1, 1, 38, '&lt;p&gt;dtyjdtyj&lt;/p&gt;', '2022-09-01 15:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `address`, `email`, `password`, `date_created`) VALUES
(16, 'Al', 'Amin', '', '01745248596', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'alamin@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:10:59'),
(17, 'nahid', 'hasan', '', '01854782520', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'nahid@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:12:30'),
(18, 'Masud', 'Rana', '', '01587452158', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'masud@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:13:05'),
(19, 'shakkhor', 'Mahmud', '', '01474548754', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'shakkhor@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:14:42'),
(20, 'Toukir', 'Ahamed', '', '01958458745', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'toukir@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:15:45'),
(21, 'Avijit', 'Shaha', '', '01584578458', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'avijit@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:18:34'),
(22, 'obaidullah', 'hasan', '', '01645857459', '300, Alishan Complex (Level-06), Elephant Road, Dhaka-1205', 'ob@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-30 14:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `date_created`) VALUES
(4, 'Router', '', '2022-08-07 12:21:50'),
(5, 'Switch', '', '2022-08-07 12:22:00'),
(6, 'Cabling', '', '2022-08-07 12:22:21'),
(7, 'Security System & Camera', '', '2022-08-07 12:22:29'),
(8, 'Media Converters', '', '2022-08-07 12:22:42'),
(9, 'Network Rack', '', '2022-08-07 12:22:53'),
(10, 'Networking Tools', '', '2022-08-07 12:23:06'),
(11, 'Range Extender', '', '2022-08-07 12:23:20'),
(12, 'Wireless Access Point', '', '2022-08-07 12:23:30'),
(13, 'OLT/GPON/EPON', '', '2022-08-07 12:23:41'),
(14, 'Wireless USB Adapter', '', '2022-08-07 12:23:50'),
(15, '10G Switch', '', '2022-08-07 12:24:30'),
(16, 'Transceiver Module', '', '2022-08-07 12:25:03'),
(17, 'Power Strip', '', '2022-08-07 12:25:39'),
(18, 'Basestation & Data Connectivity', '', '2022-08-07 12:25:50'),
(19, 'Antenna', '', '2022-08-07 12:26:06'),
(20, 'Mouse', '', '2022-08-07 12:26:17'),
(21, 'Keyboard', '', '2022-08-07 12:26:28'),
(22, 'Headset', '', '2022-08-07 12:26:37'),
(23, 'Gaming Chair', '', '2022-08-07 12:26:45'),
(24, 'Microphone', '', '2022-08-07 12:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(30) NOT NULL,
  `department_id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `department_id`, `firstname`, `lastname`, `middlename`, `contact`, `address`, `email`, `password`, `date_created`) VALUES
(5, 0, 'Rownok', 'Ripon', '', '01749475566', 'Dhaka\r\nDhaka', 'sb.rownokripon@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-17 15:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(30) NOT NULL,
  `subject` text NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=Pending,1=on process,2= Closed',
  `department_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `staff_id` int(30) NOT NULL,
  `admin_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `subject`, `contact`, `email`, `address`, `description`, `status`, `department_id`, `customer_id`, `staff_id`, `admin_id`, `date_created`) VALUES
(38, 'test', '01749475566', '', 'fgxnfxjdyhjdyjdtyjkd', '&lt;p&gt;SFDgv frgnhgfjnhg nsrnjh&lt;/p&gt;', 3, 18, 16, 0, 1, '2022-09-01 14:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '1 = Admin,2=support',
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `role`, `username`, `password`, `date_created`) VALUES
(1, 'Administrator', '', '', 1, 'admin', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Ripon', '', '', 2, 'staff', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
