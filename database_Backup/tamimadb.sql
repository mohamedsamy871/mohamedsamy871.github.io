-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 09:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamimadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Id` int(11) NOT NULL,
  `BranchName` varchar(256) NOT NULL,
  `ImageLink` varchar(256) NOT NULL,
  `Phone` varchar(256) NOT NULL,
  `LocationLink` varchar(256) NOT NULL,
  `Email` text DEFAULT NULL,
  `WorkingHours` text DEFAULT NULL,
  `FridayWorkingHours` text DEFAULT NULL,
  `Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Id`, `BranchName`, `ImageLink`, `Phone`, `LocationLink`, `Email`, `WorkingHours`, `FridayWorkingHours`, `Address`) VALUES
(1, 'hyatt plaza', 'assets/imgs/dbimages/branches/hayatplaza.jpg', '44697706', 'https://www.google.com/maps/place/Hyatt+Plaza/@25.2596657,51.4399185,15.5z/data=!4m12!1m6!3m5!1s0x3e45da2266f0947d:0xc86fdf149730f7c8!2sHyatt+Plaza!8m2!3d25.2568742!4d51.437565!3m4!1s0x3e45da2266f0947d:0xc86fdf149730f7c8!8m2!3d25.2568742!4d51.437565?hl=en', 'hyattplaza@tamimagroup.com', '9AM-11PM', '9AM-11AM & 12:30PM-11PM', 'Bldg No.750, Zone 54, 364 St. Doha Qatar'),
(2, 'markhiya', 'assets/imgs/dbimages/branches/markhiya.jpg', '44118171', 'https://www.google.com/maps/place/25%C2%B019\'17.8%22N+51%C2%B029\'19.2%22E/@25.3216684,51.4867877,17.25z/data=!4m5!3m4!1s0x0:0x39ddb13a46d5cb89!8m2!3d25.3216152!4d51.4886742?hl=en', 'markhiya@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', 'Unit No. 29, Bldg No.252, Zone 33, 370 St. Doha Qatar'),
(3, 'Vendome Mall', 'assets/imgs/dbimages/branches/vendome.jpg', '44935441', 'https://www.google.com/maps/place/25%C2%B024\'14.2%22N+51%C2%B031\'16.5%22E/@25.403944,51.5190515,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xd3a2ddcc03aa37ae!8m2!3d25.403944!4d51.5212402?hl=en', 'vendome@tamimagroup.com', '9AM-11PM', '9AM-11PM & 12:30PM-11PM', 'Bldg No.106, Zone 69, 347 St. Doha Qatar'),
(4, 'Qatar mall', 'assets/imgs/dbimages/branches/moq.jpg', '40388255', 'https://www.google.com/maps/place/25%C2%B019\'32.0%22N+51%C2%B020\'58.6%22E/@25.3255634,51.3474169,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xf757626a4843a867!8m2!3d25.3255634!4d51.3496056?hl=en', 'mallofqatar@tamimagroup.com', '9AM-11PM', '9AM-11PM & 12:30PM-11PM', 'Bldg No.800, Zone 51, 373 St. Doha Qatar'),
(5, 'GHARAFA', 'assets/imgs/dbimages/branches/gharafa.jpg', '44150208', 'https://www.google.com/search?q=TAMIMA+aLGHARAFA&tbm=lcl&ei=C6ehY5PbOuiykdUP0Z2iiA4&ved=0ahUKEwjTjLn5lYj8AhVoWaQEHdGOCOEQ4dUDCAk&uact=5&oq=TAMIMA+aLGHARAFA&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyBwghEKABEAo6BQgAEIAEOgUIIRCgAVCRFVi5H2DgImgBcAB4AIAB7gGIAdwKkgEFMC40L', 'gharafa@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', 'Unit No. 15, Bldg No.90 ,Zone 51, 780 St. Doha Qatar'),
(6, 'AL RAYAN', 'assets/imgs/dbimages/branches/alrayan.jpg', '44414971', 'https://www.google.com/maps/place/25%C2%B017\'53.2%22N+51%C2%B025\'12.8%22E/@25.2981052,51.4180269,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xc560171642378baf!8m2!3d25.2981052!4d51.4202156?hl=en', 'rayyan@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', ' Bldg No.26, Zone 53, 989 St. Doha Qatar'),
(7, 'AL SADD', 'assets/imgs/dbimages/branches/alsaad.jpg', '44422658', 'https://www.google.com/search?q=TAMIMA%20aL%20SADD&ei=9qahY9z9GrWg8gLlqJ_4Cw&ved=2ahUKEwj086TzlYj8AhUSQUEAHXQkD9EQvS56BAgTEAE&uact=5&oq=TAMIMA+aL+SADD&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIFCAAQgAQ6BAgAEEc6CggAEEcQ1gQQsAM6BQgAEJECOgsIABCxAxCDARCRAjoLCAAQgAQQsQMQgw', 'alsadd@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', ' Bldg No.64, Zone 38 , 343 St. Doha Qatar'),
(8, 'SALWA', 'assets/imgs/dbimages/branches/salwa.jpg', '44350885', 'https://www.google.com/maps/place/25%C2%B016\'10.2%22N+51%C2%B030\'18.0%22E/@25.2696388,51.503903,18z/data=!4m5!3m4!1s0x0:0xde3378ced8e8d8c0!8m2!3d25.2695103!4d51.5049973?hl=en', 'salwa@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', ' Bldg No.106, Zone 39, 340 St. Doha Qatar'),
(9, 'SOUQ AL ALI', 'assets/imgs/dbimages/branches/souqali.jpg', '44866469', 'https://www.google.com/maps/place/25%C2%B019\'11.7%22N+51%C2%B028\'09.8%22E/@25.3201441,51.4687605,18.75z/data=!4m5!3m4!1s0x0:0xd666b3a7b4d7dcfd!8m2!3d25.31991!4d51.4693985?hl=en', 'souqali@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', ' Bldg No. 7, Zone 52, 902 St. Doha Qatar'),
(10, 'SOUQ WAQIF', 'assets/imgs/dbimages/branches/souqwaqif.jpg', '55515281', 'https://www.google.com/maps/place/25%C2%B017\'21.6%22N+51%C2%B031\'56.9%22E/@25.2894768,51.5311954,17.75z/data=!4m5!3m4!1s0x0:0x78b557d420c665fe!8m2!3d25.2893372!4d51.5324707?hl=en', 'souqwaqif@tamimagroup.com', '9AM-12PM & 4PM-10PM', '4PM-10PM', ' Bldg No.106, Zone 1, 950 St. Doha Qatar'),
(11, 'EZDAN-AL-WAKRA', 'assets/imgs/dbimages/branches/ezdan.jpg', '44758808\r\n', 'https://www.google.com/maps/place/25%C2%B010\'14.5%22N+51%C2%B035\'14.5%22E/@25.1745124,51.5830105,16z/data=!4m5!3m4!1s0x0:0x3b04c67eddfd16e7!8m2!3d25.1707058!4d51.5873642?hl=en', 'ezdanwakrah@tamimagroup.com', '9AM-11PM', '9AM-11PM & 12:30PM-11PM', ' Bldg No.240, Zone 90, 201 St. Doha Qatar'),
(12, 'DOHA FESTIVAL', 'assets/imgs/dbimages/branches/dfc.jpg', '44373811', 'https://www.google.com/maps/place/25%C2%B023\'06.5%22N+51%C2%B026\'30.9%22E/@25.3851433,51.4397287,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xd51865ee1a5c06c4!8m2!3d25.3851433!4d51.4419174?hl=en', 'dfc@tamimagroup.com', '10AM-11PM', '10AM-11PM & 12:30PM-11PM', ' Bldg No.80, Zone 70, 615 St. Doha Qatar');

-- --------------------------------------------------------

--
-- Table structure for table `clientmessages`
--

CREATE TABLE `clientmessages` (
  `Id` int(11) NOT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `MessageSubject` text DEFAULT NULL,
  `MessageContent` text DEFAULT NULL,
  `TypeOfMessage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientmessages`
--

INSERT INTO `clientmessages` (`Id`, `FName`, `LName`, `Email`, `MessageSubject`, `MessageContent`, `TypeOfMessage`) VALUES
(26, 'mohamed', 'samy', 'fff@fff.com', NULL, 'dsdsd', 'contactMessage'),
(27, 'mohamed', 'samy', 'info@yanabee.tv', NULL, 'dddd', 'contactMessage'),
(28, 'mohamed', 'samy', 'dddddddddddddddddd@gmail.com', NULL, 'fff', 'contactMessage'),
(29, 'mohamed', 'samy', 'mohamedsamy871@gmail.com', NULL, 'ddd', 'contactMessage'),
(30, 'mohamed', 'samy', 'fff@fff.com', NULL, 'ffff', 'contactMessage'),
(31, '', '', 'mohamedsamy871@gmail.com', NULL, '', 'subscribeMessage'),
(32, 'mohamed', '', 'mohamedsamy871@gmail.com', NULL, 'ddddddddddddd', ''),
(33, 'mohamed', '', 'mohamedsamy871@gmail.com', NULL, 'ddddddd', 'BranchesMessage'),
(34, '', '', 'mohamedsamy871@gmail.com', NULL, '', 'subscribeMessage'),
(35, '', '', 'info@yanabee.tv', NULL, '', 'subscribeMessage'),
(36, 'mohamed', 'samy', 'mohamedsamy871@gmail.com', NULL, 'ggggggg', 'contactMessage'),
(37, '', '', 'info@yanabee.tv', NULL, '', 'subscribeMessage'),
(38, 'mohamed', '', 'mohamedsamy871@gmail.com', NULL, 'tttttt', 'branchesMessage'),
(39, '', '', 'mohamedsamy871@gmail.com', NULL, '', 'subscribeMessage'),
(40, '', '', 'info@yanabee.tv', NULL, '', 'subscribeMessage'),
(41, '', '', 'info@yanabee.tv', NULL, '', 'subscribeMessage'),
(42, '', '', 'info@waffles-eg.com', NULL, '', 'subscribeMessage'),
(43, '', '', 'mohamedsamy871@gmail.com', NULL, '', 'subscribeMessage'),
(44, 'mohamed', '', 'mohamedsamy871@gmail.com', NULL, 'cddd', 'branchesMessage');

-- --------------------------------------------------------

--
-- Table structure for table `homepagephotos`
--

CREATE TABLE `homepagephotos` (
  `Id` int(11) NOT NULL,
  `FirstWidget` text DEFAULT NULL,
  `SecondWidget` text DEFAULT NULL,
  `ThirdWidget` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepagephotos`
--

INSERT INTO `homepagephotos` (`Id`, `FirstWidget`, `SecondWidget`, `ThirdWidget`) VALUES
(1, 'assets/imgs/dbimages/homepage/firstwidget.jpg', 'assets/imgs/dbimages/homepage/secondwidget1.jpg', 'assets/imgs/dbimages/homepage/thirdwidget.jpg'),
(2, '', 'assets/imgs/dbimages/homepage/secondwidget2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `ImageUrl` text DEFAULT NULL,
  `LargeImageUrl` text DEFAULT NULL,
  `ProductType` text DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Size` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Description`, `ImageUrl`, `LargeImageUrl`, `ProductType`, `Price`, `Size`) VALUES
(2, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/001.jpg', 'assets/imgs/dbimages/large/men/001.png', 'men', 100, '5to7'),
(3, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/001.jpg', 'assets/imgs/dbimages/large/women/001.png', 'women', 100, '5to7'),
(4, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/002.jpg', 'assets/imgs/dbimages/large/women/002.png', 'women', 100, '5to7'),
(5, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/003.jpg', 'assets/imgs/dbimages/large/women/003.png', 'women', 100, '7to9'),
(6, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/002.jpg', 'assets/imgs/dbimages/large/men/002.png', 'men', 100, '7to9'),
(7, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/003.jpg', 'assets/imgs/dbimages/large/men/003.png', 'men', 100, '9to11'),
(8, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/004.jpg', 'assets/imgs/dbimages/large/men/004.png', 'men', 100, '11to13'),
(9, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/005.jpg', 'assets/imgs/dbimages/large/men/005.png', 'men', 100, '5to7'),
(10, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/006.jpg', 'assets/imgs/dbimages/large/men/006.png', 'men', 100, '11to13'),
(11, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/001.jpg', 'assets/imgs/dbimages/large/kids/001.png', 'kids', 100, '5to7'),
(12, 'KidsShoe', 'Tp 10067', 'assets/imgs/dbimages/kids/002.jpg', 'assets/imgs/dbimages/large/kids/002.png', 'kids', 100, '5to7'),
(13, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/003.jpg', 'assets/imgs/dbimages/large/kids/003.png', 'kids', 100, '7to9'),
(14, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/001.jpg', 'assets/imgs/dbimages/large/wallets/001.png', 'wallets', 100, '5to7'),
(15, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/002.jpg', 'assets/imgs/dbimages/large/wallets/002.png', 'wallets', 100, '5to7'),
(16, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/003.jpg', 'assets/imgs/dbimages/large/wallets/003.png', 'wallets', 100, '5to7'),
(17, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/004.jpg', 'assets/imgs/dbimages/large/wallets/004.png', 'wallets', 100, '5to7'),
(18, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/005.jpg', 'assets/imgs/dbimages/large/wallets/005.png', 'wallets', 100, '5to7'),
(19, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/004.jpg', 'assets/imgs/dbimages/large/women/004.png', 'women', 100, '9to11'),
(20, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/004.jpg', 'assets/imgs/dbimages/large/kids/004.png', 'kids', 100, '7to9'),
(21, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/005.jpg', 'assets/imgs/dbimages/large/kids/005.png', 'kids', 100, '5to7'),
(22, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/006.jpg', 'assets/imgs/dbimages/large/kids/006.png', 'kids', 100, '5to7'),
(23, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/007.jpg', 'assets/imgs/dbimages/large/kids/007.png', 'kids', 100, '5to7'),
(24, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/008.jpg', 'assets/imgs/dbimages/large/kids/008.png', 'kids', 100, '5to7'),
(25, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/009.jpg', 'assets/imgs/dbimages/large/kids/009.png', 'kids', 100, '5to7'),
(26, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/010.jpg', 'assets/imgs/dbimages/large/kids/010.png', 'kids', 100, '7to9'),
(27, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/011.jpg', 'assets/imgs/dbimages/large/kids/011.png', 'kids', 100, '7to9'),
(28, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/012.jpg', 'assets/imgs/dbimages/large/kids/012.png', 'kids', 100, '7to9'),
(29, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/013.jpg', 'assets/imgs/dbimages/large/kids/013.png', 'kids', 100, '7to9'),
(30, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/014.jpg', 'assets/imgs/dbimages/large/kids/014.png', 'kids', 100, '7to9'),
(31, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/015.jpg', 'assets/imgs/dbimages/large/kids/015.png', 'kids', 100, '7to9'),
(32, 'Kids Shoe', 'Tp 10067', 'assets/imgs/dbimages/kids/016.jpg', 'assets/imgs/dbimages/large/kids/016.png', 'kids', 100, '5to7'),
(33, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/007.jpg', 'assets/imgs/dbimages/large/men/007.png', 'men', 100, '11to13'),
(34, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/008.jpg', 'assets/imgs/dbimages/large/men/008.png', 'men', 100, '11to13'),
(35, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/009.jpg', 'assets/imgs/dbimages/large/men/009.png', 'men', 100, '11to13'),
(36, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/010.jpg', 'assets/imgs/dbimages/large/men/010.png', 'men', 100, '9to11'),
(37, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/011.jpg', 'assets/imgs/dbimages/large/men/011.png', 'men', 100, '9to11'),
(38, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/012.jpg', 'assets/imgs/dbimages/large/men/012.png', 'men', 100, '9to11'),
(39, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/013.jpg', 'assets/imgs/dbimages/large/men/013.png', 'men', 100, '9to11'),
(40, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/014.jpg', 'assets/imgs/dbimages/large/men/014.png', 'men', 100, '9to11'),
(41, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/015.jpg', 'assets/imgs/dbimages/large/men/015.png', 'men', 100, '9to11'),
(42, 'Men Shoe', 'Tp 10067', 'assets/imgs/dbimages/men/016.jpg', 'assets/imgs/dbimages/large/men/016.png', 'men', 100, '9to11'),
(43, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/005.jpg', 'assets/imgs/dbimages/large/women/005.png', 'women', 100, '9to11'),
(44, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/006.jpg', 'assets/imgs/dbimages/large/women/006.png', 'women', 100, '9to11'),
(45, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/007.jpg', 'assets/imgs/dbimages/large/women/007.png', 'women', 100, '9to11'),
(46, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/008.jpg', 'assets/imgs/dbimages/large/women/008.png', 'women', 100, '9to11'),
(47, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/009.jpg', 'assets/imgs/dbimages/large/women/009.png', 'women', 100, '9to11'),
(48, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/010.jpg', 'assets/imgs/dbimages/large/women/010.png', 'women', 100, '11to13'),
(49, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/011.jpg', 'assets/imgs/dbimages/large/women/011.png', 'women', 100, '11to13'),
(50, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/012.jpg', 'assets/imgs/dbimages/large/women/012.png', 'women', 100, '11to13'),
(51, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/013.jpg', 'assets/imgs/dbimages/large/women/013.png', 'women', 100, '11to13'),
(52, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/014.jpg', 'assets/imgs/dbimages/large/women/014.png', 'women', 100, '11to13'),
(53, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/015.jpg', 'assets/imgs/dbimages/large/women/015.png', 'women', 100, '11to13'),
(54, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/016.jpg', 'assets/imgs/dbimages/large/women/016.png', 'women', 100, '11to13'),
(55, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/017.jpg', 'assets/imgs/dbimages/large/women/017.png', 'women', 100, '11to13'),
(56, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/018.jpg', 'assets/imgs/dbimages/large/women/018.png', 'women', 100, '11to13'),
(57, 'women shoe', 'Tp 10067', 'assets/imgs/dbimages/women/019.jpg', 'assets/imgs/dbimages/large/women/019.png', 'women', 100, '11to13'),
(58, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/006.jpg', 'assets/imgs/dbimages/large/wallets/006.png', 'wallets', 100, '5to7'),
(59, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/007.jpg', 'assets/imgs/dbimages/large/wallets/007.png', 'wallets', 100, '5to7'),
(60, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/008.jpg', 'assets/imgs/dbimages/large/wallets/008.png', 'wallets', 100, '5to7'),
(61, 'Wallets ', 'Tp 10067', 'assets/imgs/dbimages/wallets/009.jpg', 'assets/imgs/dbimages/large/wallets/009.png', 'wallets', 100, '5to7');

-- --------------------------------------------------------

--
-- Table structure for table `salespagephotos`
--

CREATE TABLE `salespagephotos` (
  `Id` int(11) NOT NULL,
  `FirstWidget` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salespagephotos`
--

INSERT INTO `salespagephotos` (`Id`, `FirstWidget`) VALUES
(1, 'assets/imgs/dbimages/salespage/firstwidget.png'),
(2, ''),
(3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `clientmessages`
--
ALTER TABLE `clientmessages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `homepagephotos`
--
ALTER TABLE `homepagephotos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `salespagephotos`
--
ALTER TABLE `salespagephotos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clientmessages`
--
ALTER TABLE `clientmessages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `homepagephotos`
--
ALTER TABLE `homepagephotos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `salespagephotos`
--
ALTER TABLE `salespagephotos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
