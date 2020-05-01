-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 03:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 1, 'first title', 'first titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst titlefirst title', 'https://biplob.herokuapp.com/index.html', '2020-04-29 12:40:53'),
(2, 2, 'Second title', 'Second titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond titleSecond title', 'https://www.linkedin.com/pulse/data-science-resources-md-badiuzzaman-biplob/', '2020-04-29 12:40:53'),
(3, 1, '', '', '', '2020-05-01 06:18:10'),
(4, 1, 'Last share', 'Last shareLast shareLast shareLast shareLast shareLast shareLast shareLast shareLast shareLast share', 'https://www.linkedin.com/pulse/data-science-resources-md-badiuzzaman-biplob/', '2020-05-01 06:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
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
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
