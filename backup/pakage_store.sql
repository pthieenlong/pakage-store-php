-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2022 at 01:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakage_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(6) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `title`) VALUES
(1, 'Action'),
(2, 'FPS'),
(3, 'RPG'),
(4, 'Adventure'),
(5, 'Sport'),
(6, 'Simulate'),
(7, 'Horror'),
(8, 'History'),
(9, 'Puzzle'),
(10, 'Casual'),
(11, 'Music'),
(12, 'Indie');

-- --------------------------------------------------------

--
-- Table structure for table `Producer`
--

CREATE TABLE `Producer` (
  `id` int(6) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Producer`
--

INSERT INTO `Producer` (`id`, `title`) VALUES
(1, 'STEAM'),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `sale_percent` float NOT NULL,
  `cate_id` int(6) NOT NULL,
  `producer_id` int(6) NOT NULL,
  `quantity` int(3) NOT NULL DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `name`, `price`, `sale_percent`, `cate_id`, `producer_id`, `quantity`) VALUES
(1, 'Elden Ring', 800000, 0.01, 3, 1, 50),
(2, 'Grand Theft Auto V - GTA V', 460000, 0, 1, 1, 50),
(3, 'Assassin\'s Creed® Odyssey - Gold Edition', 1560000, 0, 1, 1, 50),
(4, 'Dying Light', 325000, 0, 7, 1, 50),
(5, 'Dying Light 2', 550000, 0, 7, 1, 50),
(6, 'Outlast', 180000, 0, 7, 1, 50),
(7, 'Outlast 2', 290000, 0, 7, 1, 50),
(8, 'Stardew Valley', 160000, 0, 12, 1, 50),
(9, 'Pokemon', 190000, 0.5, 4, 1, 50),
(10, 'Minecraft', 650000, 0, 4, 1, 50),
(11, 'We were here', 150000, 0, 9, 1, 50),
(12, 'The Sims', 490000, 0.3, 10, 1, 50),
(13, 'Among Us', 65000, 0, 12, 1, 50),
(14, 'Goose Goose Duck', 0, 0, 12, 1, 50),
(15, 'Assassin\'s Creed Unity', 1900000, 0, 8, 1, 50),
(16, 'Fallout 4', 185000, 0, 1, 1, 50),
(17, 'The Witcher 3: Wild Hunt', 160000, 0, 1, 1, 50),
(18, 'Battle Field 4', 560000, 0, 2, 1, 50),
(19, 'MONSTER HUNTER: WORLD', 490000, 0, 3, 1, 50),
(20, 'Cyperpunk 2077', 1099000, 0, 1, 1, 50),
(21, 'Payday 2', 125000, 0, 2, 1, 50),
(22, 'Far Cry 5', 600000, 0, 1, 1, 50),
(23, 'Age of Empires', 150000, 0.5, 8, 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `id` varchar(1) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`id`, `title`) VALUES
('0', 'admin'),
('1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(6) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `role_id` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `role_id`) VALUES
(11, 'admin', 'admin', 'admin@pakage.com', 'admin', '', '0'),
(13, 'pthieenlong', '123456789', 'longptps19740@st.hcmuaf.edu.vn', 'Pham Thien Long', '0373118242', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Producer`
--
ALTER TABLE `Producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer_id` (`producer_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Producer`
--
ALTER TABLE `Producer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `cate_id` FOREIGN KEY (`cate_id`) REFERENCES `Category` (`id`),
  ADD CONSTRAINT `producer_id` FOREIGN KEY (`producer_id`) REFERENCES `Producer` (`id`);

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
