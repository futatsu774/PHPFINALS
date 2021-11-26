-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 09:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `testdummy`
--

CREATE TABLE `testdummy` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testdummy`
--

INSERT INTO `testdummy` (`id`, `firstname`, `lastname`, `email`, `birthday`, `gender`, `nid`, `address`, `dept`, `degree`, `contact`) VALUES
(4, 'testdummy', '', '', '', '', '', '', '0', '0', '12345'),
(8, 'hello', '', '', '', '', '', '', '0', '0', '56'),
(9, 'DERICd', 'TULALIAN', '0derictulalian@gmail.com', '2021-11-04', 'Other', '3123', 'Unit 2811 Tower 1 Sun Residences Q.C.', 'HR', 'IT', '313131'),
(10, '5', 'TULALIANada', 'lian@gmail.com', '2021-11-20', 'Female', '2', 'qv', '42', 'dqq', '434342'),
(11, 'dadaddadda', '3333', 'ada@gmail.com', '2021-11-04', 'Other', '3', 'arfvvva', 'hg', 'z', '313131');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('user', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testdummy`
--
ALTER TABLE `testdummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testdummy`
--
ALTER TABLE `testdummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
