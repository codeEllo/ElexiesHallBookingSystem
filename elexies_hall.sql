-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 07:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elexies_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADM_ID` varchar(10) NOT NULL,
  `ADM_NAME` varchar(50) NOT NULL,
  `ADM_PHONE` varchar(15) NOT NULL,
  `ADM_EMAIL` varchar(50) NOT NULL,
  `ADM_PASS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADM_ID`, `ADM_NAME`, `ADM_PHONE`, `ADM_EMAIL`, `ADM_PASS`) VALUES
('A100', 'ANNIE', '012356', 'admin2@admin.com', '1234'),
('AD001', 'SYA', '12344', 'admin@admin.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` varchar(10) NOT NULL,
  `CLIENT_NAME` varchar(50) NOT NULL,
  `CLIENT_PHONE` varchar(15) NOT NULL,
  `CLIENT_EMAIL` varchar(50) NOT NULL,
  `CLIENT_PASS` varchar(10) NOT NULL,
  `ADM_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`CLIENT_ID`, `CLIENT_NAME`, `CLIENT_PHONE`, `CLIENT_EMAIL`, `CLIENT_PASS`, `ADM_ID`) VALUES
('C001', 'KIRA', '0123456789', 'KIRA@K.COM', 'hjghhll', 'AD001'),
('C002', 'MIKASA', '0123456789', 'MIK@gmail.COM', 'mikasa2', 'AD001');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `HALL_ID` varchar(10) NOT NULL,
  `HALL_TYPE` varchar(20) NOT NULL,
  `HALL_PRICE` decimal(8,2) NOT NULL,
  `HALL_CAPACITY` int(6) NOT NULL,
  `ADM_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`HALL_ID`, `HALL_TYPE`, `HALL_PRICE`, `HALL_CAPACITY`, `ADM_ID`) VALUES
('B001', 'BRONZE', '500.00', 200, 'AD001'),
('G001', 'GOLDEN', '1000.00', 1200, 'AD001'),
('S001', 'SILVER', '750.00', 500, 'AD001');

-- --------------------------------------------------------

--
-- Table structure for table `hall_booking`
--

CREATE TABLE `hall_booking` (
  `BOOK_ID` int(100) NOT NULL,
  `BOOK_START` date NOT NULL,
  `BOOK_END` date NOT NULL,
  `BOOK_EVENT` varchar(20) NOT NULL,
  `BOOK_NAME` varchar(50) NOT NULL,
  `BOOK_PRICE` decimal(8,2) NOT NULL,
  `BOOK_STATUS` varchar(20) NOT NULL,
  `CLIENT_ID` varchar(10) NOT NULL,
  `HALL_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_booking`
--

INSERT INTO `hall_booking` (`BOOK_ID`, `BOOK_START`, `BOOK_END`, `BOOK_EVENT`, `BOOK_NAME`, `BOOK_PRICE`, `BOOK_STATUS`, `CLIENT_ID`, `HALL_ID`) VALUES
(2000, '2021-01-15', '2021-01-17', 'Public', 'PAPE', '3000.00', 'PENDING', 'C002', 'G001'),
(2001, '2021-01-10', '2021-01-12', 'Corporate/Company', 'Conference', '3000.00', 'PENDING', 'C001', 'G001'),
(2003, '2021-01-17', '2021-01-18', 'Private/Parties', 'MEETING', '1500.00', 'PENDING', 'C002', 'S001');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `RPT_ID` varchar(10) NOT NULL,
  `BOOK_ID` int(100) NOT NULL,
  `HALL_ID` varchar(10) NOT NULL,
  `CLIENT_ID` varchar(10) NOT NULL,
  `BOOK_PRICE` decimal(8,2) NOT NULL,
  `ADM_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADM_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENT_ID`),
  ADD KEY `ADM_ID` (`ADM_ID`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`HALL_ID`),
  ADD KEY `ADM_ID` (`ADM_ID`);

--
-- Indexes for table `hall_booking`
--
ALTER TABLE `hall_booking`
  ADD PRIMARY KEY (`BOOK_ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `HALL_ID` (`HALL_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`RPT_ID`),
  ADD UNIQUE KEY `BOOK_PRICE` (`BOOK_PRICE`),
  ADD KEY `HALL_ID` (`HALL_ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `ADM_ID` (`ADM_ID`),
  ADD KEY `BOOK_ID` (`BOOK_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_booking`
--
ALTER TABLE `hall_booking`
  MODIFY `BOOK_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`ADM_ID`) REFERENCES `admin` (`ADM_ID`);

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `hall_ibfk_1` FOREIGN KEY (`ADM_ID`) REFERENCES `admin` (`ADM_ID`);

--
-- Constraints for table `hall_booking`
--
ALTER TABLE `hall_booking`
  ADD CONSTRAINT `hall_booking_ibfk_1` FOREIGN KEY (`CLIENT_ID`) REFERENCES `client` (`CLIENT_ID`),
  ADD CONSTRAINT `hall_booking_ibfk_2` FOREIGN KEY (`HALL_ID`) REFERENCES `hall` (`HALL_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`ADM_ID`) REFERENCES `admin` (`ADM_ID`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`CLIENT_ID`) REFERENCES `client` (`CLIENT_ID`),
  ADD CONSTRAINT `report_ibfk_4` FOREIGN KEY (`HALL_ID`) REFERENCES `hall` (`HALL_ID`),
  ADD CONSTRAINT `report_ibfk_5` FOREIGN KEY (`BOOK_PRICE`) REFERENCES `hall_booking` (`BOOK_PRICE`),
  ADD CONSTRAINT `report_ibfk_6` FOREIGN KEY (`BOOK_ID`) REFERENCES `hall_booking` (`BOOK_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
