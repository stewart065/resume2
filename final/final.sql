-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 07:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `characterse`
--

CREATE TABLE `characterse` (
  `id` int(11) NOT NULL,
  `Reference` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `comapnyname` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Reference2` varchar(60) NOT NULL,
  `title2` varchar(60) NOT NULL,
  `comapnyname2` varchar(60) NOT NULL,
  `Email2` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `characterse`
--

INSERT INTO `characterse` (`id`, `Reference`, `title`, `comapnyname`, `Email`, `Reference2`, `title2`, `comapnyname2`, `Email2`) VALUES
(5, 'leonard balabat', 'teacher', 'CRMC', 'leonard@gmail.com', 'windel pelayo', 'manager', 'TechTalk,CRMC', 'windel@gmail.com'),
(6, 'EVANGELINE GELIG DAUBA', '12', '12', 'clientstewart21@gmail.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `educ`
--

CREATE TABLE `educ` (
  `id` int(11) NOT NULL,
  `year` varchar(60) NOT NULL,
  `school` varchar(60) NOT NULL,
  `year2` varchar(60) NOT NULL,
  `school2` varchar(60) NOT NULL,
  `year3` varchar(60) NOT NULL,
  `school3` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educ`
--

INSERT INTO `educ` (`id`, `year`, `school`, `year2`, `school2`, `year3`, `school3`, `image`) VALUES
(6, '2016-2015', 'Araneta learning center', '2020-2021', 'jovencio national high school', '2023-2024', 'Cebu Roosvelt Memorial Colleges', ''),
(7, '2016-2015', 'Araneta learning center', '2020-2021', 'jovencio national high school', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `expr`
--

CREATE TABLE `expr` (
  `id` int(11) NOT NULL,
  `ComapnyName` varchar(40) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `YearMonth` date NOT NULL,
  `Experience` varchar(500) NOT NULL,
  `ComapnyName2` varchar(40) NOT NULL,
  `Position2` varchar(40) NOT NULL,
  `YearMonth2` date NOT NULL,
  `Experience2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expr`
--

INSERT INTO `expr` (`id`, `ComapnyName`, `Position`, `YearMonth`, `Experience`, `ComapnyName2`, `Position2`, `YearMonth2`, `Experience2`) VALUES
(4, 'awys company', 'manager', '2023-02-10', 'adasd', 'nets company', 'asdasd', '2023-02-28', 'dasasdlasjkdaldad'),
(5, 'cccccccccccccccc', 'ccccccccccccccccccccc', '2023-12-31', 'i was the manager in the awys company and i its really good that i experience in there company', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(6, 'IMG-63dca097f3edc1.55588013.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `firstname`, `lastname`, `middlename`, `phone`, `email`, `gender`, `street`, `city`, `state`, `zip`) VALUES
(5, 'EVANGELINE', 'DAUBA', 'GELIG', 2147483647, 'clientstewart21@gmai', 'female', 'Simbuawan', 'BOGO', 'CEBU', 6010),
(6, 'EVANGELINE', 'DAUBA', 'GELIG', 2147483647, 'clientstewart21@gmai', 'female', 'Simbuawan', 'BOGO', 'CEBU', 6010),
(7, 'EVANGELINE', 'DAUBA', 'GELIG', 2147483647, 'clientstewart21@gmai', 'female', 'Simbuawan', 'BOGO', 'CEBU', 6010);

-- --------------------------------------------------------

--
-- Table structure for table `personaldetail`
--

CREATE TABLE `personaldetail` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Birth` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Citizenship` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Father` varchar(20) NOT NULL,
  `Mother` varchar(20) NOT NULL,
  `About` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personaldetail`
--

INSERT INTO `personaldetail` (`id`, `Date`, `Birth`, `Status`, `Citizenship`, `Religion`, `Height`, `Weight`, `Father`, `Mother`, `About`) VALUES
(5, '2023-02-11', 'Cebu', 'Single', 'Filipino', 'Catholic', 165, 23, 'gwapo', 'cute', 'sdmalsdajslkdjalkdjasldjsajdjdlakjdlajdjsjlkasjkljlkasjkskjda'),
(6, '2023-12-31', '', 'CEBU', 'Filipino', 'Catholic', 165, 67, 'gwapo', 'cute', 'qwertgcxdgbvcghnbvm');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`) VALUES
(5, 'client', 'client23', 'admin123'),
(6, 'shutuu', 'sheet', 'sheet'),
(7, 'client', 'client', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characterse`
--
ALTER TABLE `characterse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educ`
--
ALTER TABLE `educ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expr`
--
ALTER TABLE `expr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldetail`
--
ALTER TABLE `personaldetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characterse`
--
ALTER TABLE `characterse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `educ`
--
ALTER TABLE `educ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expr`
--
ALTER TABLE `expr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personaldetail`
--
ALTER TABLE `personaldetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
