-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2020 at 10:32 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `CustFname` varchar(255) NOT NULL,
  `CustLname` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `profilebic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CustID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `UserID`, `CustFname`, `CustLname`, `Country`, `Address`, `Phone`, `profilebic`) VALUES
(24, 27, 'jet', 'Jun', 'Malaysia', 'No', '0102062626', NULL),
(38, 41, 'Wong', 'Tai bei', 'Bahamas', 'No house also', '0102662020', NULL),
(39, 42, 'Wang', 'Yao Seng', 'America', 'Got house but lost his keys', '101022933', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `ReceiptID` int(11) NOT NULL AUTO_INCREMENT,
  `ReserveID` int(11) NOT NULL,
  PRIMARY KEY (`ReceiptID`),
  KEY `ReserveID` (`ReserveID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

DROP TABLE IF EXISTS `registered_user`;
CREATE TABLE IF NOT EXISTS `registered_user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `RoleID` int(11) NOT NULL,
  PRIMARY KEY (`UserID`),
  KEY `RoleID` (`RoleID`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`UserID`, `Username`, `Password`, `Email`, `RoleID`) VALUES
(27, 'a', '$2y$10$6ObcEu/f7EMT/Qqhe6Y5Ze.CvT7JXt73nJbW0iJtgUpzF4XW0TtSa', 'a@mail.com', 3),
(32, 's', '$2y$10$CZK4olHyZu22C5Ur2FB61.z/HNJEe7ngQaCt6WXNpbg4RbI.IkigO', 's@mail.com', 2),
(41, 'b', '$2y$10$msdtlccdb9fKVd7IbDvJ7eQkiK0vrFcxBZPVIuQn2XQs7X6QNReJC', 'b@mail.com', 3),
(42, 'c', '$2y$10$XLaKneFlHw3YUupVhFAzo.LiwJW/pnVHr.ZpBvPUreg6dvxi7fqn2', 'c@mail.com', 3),
(44, 'admin', '$2y$10$ML96wRiZwrRCr3nAnyYVNuKdwbXT0AZXd803yKSGJbw55k51F6i0C', 'admin@mail.com', 1),
(59, 'v', '$2y$10$HjgqMWg.bSTHsaCSgg58DOPbXvHyDb6I6zEhD2iTJtymkaWlwqVDa', 'v@gmail.com', 3),
(60, 'd', '$2y$10$rIPRVBi.hA9ZVT/lMc2IbOyx2PLcrRmsZgR7DY5Ifx/nNRg/KVsRu', 'd@mail.com', 3),
(61, 'e', '$2y$10$tAuePwuGwEE9nWjAJBACcedDBjTycrOTxjaY.KGADtj28SUY.7Ile', 'e@email.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ReserveID` int(11) NOT NULL AUTO_INCREMENT,
  `RoomID` int(11) DEFAULT NULL,
  `CustID` int(11) DEFAULT NULL,
  `CheckInDate` date NOT NULL,
  `CheckOutDate` date NOT NULL,
  `Payment_Status` varchar(255) NOT NULL,
  PRIMARY KEY (`ReserveID`),
  KEY `RoomID` (`RoomID`),
  KEY `CustID` (`CustID`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_name`
--

DROP TABLE IF EXISTS `role_name`;
CREATE TABLE IF NOT EXISTS `role_name` (
  `RoleID` int(11) NOT NULL AUTO_INCREMENT,
  `RoleName` varchar(255) NOT NULL,
  PRIMARY KEY (`RoleID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role_name`
--

INSERT INTO `role_name` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Staff'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `RoomID` int(11) NOT NULL AUTO_INCREMENT,
  `RoomType` varchar(255) NOT NULL,
  `PricePerNight` int(255) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=InnoDB AUTO_INCREMENT=23123126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `RoomType`, `PricePerNight`) VALUES
(1, 'Family', 100),
(2, 'Deluxe', 100),
(8, 'Premier', 1),
(9, 'Superior', 1),
(10, 'Twin', 1),
(23123125, 'Luxury', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `StaffID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `StaffFname` varchar(255) NOT NULL,
  `StaffLname` varchar(255) NOT NULL,
  PRIMARY KEY (`StaffID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `UserID`, `StaffFname`, `StaffLname`) VALUES
(1, 32, 'Gary moder first name', 'Gary sister last name'),
(13, 44, 'May', 'December'),
(14, 44, 'Buttercup', 'Earthbound');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `registered_user` (`UserID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`ReserveID`) REFERENCES `reservation` (`ReserveID`);

--
-- Constraints for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD CONSTRAINT `registered_user_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `role_name` (`RoleID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `registered_user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
