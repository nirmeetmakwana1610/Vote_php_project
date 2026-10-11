-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 07:57 AM
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
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(11) NOT NULL,
  `A_Name` varchar(20) DEFAULT NULL,
  `A_Pass` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `A_Name`, `A_Pass`) VALUES
(1, 'Admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `candidads_info`
--

CREATE TABLE `candidads_info` (
  `C_Id` int(11) NOT NULL,
  `C_Name` varchar(60) DEFAULT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `C_Photo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidads_info`
--

INSERT INTO `candidads_info` (`C_Id`, `C_Name`, `P_Id`, `C_Photo`) VALUES
(1, 'dilipbhai sanghani', 1, 'Candidates_photo/dilipbhai sanghani.jpeg'),
(2, 'Kejrival', 2, 'Candidates_photo/download.webp');

-- --------------------------------------------------------

--
-- Table structure for table `party_info`
--

CREATE TABLE `party_info` (
  `P_Id` int(11) NOT NULL,
  `P_Name` varchar(50) DEFAULT NULL,
  `P_Logo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `party_info`
--

INSERT INTO `party_info` (`P_Id`, `P_Name`, `P_Logo`) VALUES
(1, 'BJP', 'Party_logos/bjp.png'),
(2, 'App', 'Party_logos/blp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `Total_vote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_id`, `c_id`, `p_id`, `Total_vote`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `v_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `a` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`v_id`, `c_id`, `u_id`, `date_time`, `a`) VALUES
(1, 1, 1, '14/10/2024 08:10:25 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `v_user`
--

CREATE TABLE `v_user` (
  `U_Id` int(11) NOT NULL,
  `U_Name` varchar(60) DEFAULT NULL,
  `U_Pass` varchar(12) DEFAULT NULL,
  `U_email` varchar(60) DEFAULT NULL,
  `U_Mobil` varchar(15) DEFAULT NULL,
  `Created_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `v_user`
--

INSERT INTO `v_user` (`U_Id`, `U_Name`, `U_Pass`, `U_email`, `U_Mobil`, `Created_at`) VALUES
(1, 'Nandani Dharajiya', 'Nandani@123', 'nandanidharajiya888@gmail.com', '88888888888', '14/10/2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `candidads_info`
--
ALTER TABLE `candidads_info`
  ADD PRIMARY KEY (`C_Id`),
  ADD KEY `P_Id` (`P_Id`);

--
-- Indexes for table `party_info`
--
ALTER TABLE `party_info`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `v_user`
--
ALTER TABLE `v_user`
  ADD PRIMARY KEY (`U_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidads_info`
--
ALTER TABLE `candidads_info`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `party_info`
--
ALTER TABLE `party_info`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `v_user`
--
ALTER TABLE `v_user`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidads_info`
--
ALTER TABLE `candidads_info`
  ADD CONSTRAINT `candidads_info_ibfk_1` FOREIGN KEY (`P_Id`) REFERENCES `party_info` (`P_Id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidads_info` (`C_Id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `party_info` (`P_Id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidads_info` (`C_Id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `v_user` (`U_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
