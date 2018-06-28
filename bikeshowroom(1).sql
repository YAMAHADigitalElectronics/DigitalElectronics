-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 06:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeshowroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikecomment`
--

CREATE TABLE `bikecomment` (
  `bikeId` varchar(10) NOT NULL,
  `commentId` int(10) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `mailId` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikecomment`
--

INSERT INTO `bikecomment` (`bikeId`, `commentId`, `userName`, `mailId`, `comment`, `status`) VALUES
('y123', 1, 'kasthu', 'kasthu@gmail.com', 'It''s a good bike model with a good pickup.\r\nThis sticker colour is very nice.Service also so good.', 'Checked!'),
('y125', 2, 'Ram', 'ram@gmail.com', 'It''s one of my dream bike. It takes a lot of fuel , even though nice to ride. I can manage it.I give a positive feedback to those who want to purchase this bike.', 'Checked!'),
('123', 5, 'kk', 'k@g', 'mki', 'Checked!'),
('y2', 7, 'Ravi', 'ra@gmail.com', 'helo', 'Checked!'),
('y2', 8, 'ghgdgh', 'cgjg@hhk.lk', 'hdgfhhf', 'Checked!'),
('y3', 9, 'dusi', 'dusi@gmail.lk', 'afgkaf', 'Checked!'),
('y2', 10, 'vvh', 'cnvskv@ff.lk', 'cdaf', 'Checked!'),
('kfsnvs', 13, 'Marvel', 'marvelcoders123@gmail.com', 'Coders', 'Pending'),
('y1', 14, 'madu', 'madu123@gmail.com', 'your service is highly satisfied', 'Pending'),
('y2', 15, 'antony', 'antonyarulmalar@gmail.com', 'fffff', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `modelNo` varchar(20) NOT NULL,
  `modelName` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `warranty` varchar(200) NOT NULL,
  `price` varchar(30) NOT NULL,
  `imgLocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`modelNo`, `modelName`, `category`, `colour`, `warranty`, `price`, `imgLocation`) VALUES
('y1', 'Fazer', 'Men', 'White', '30000km', '450000/=', '68703-pic4.jpg'),
('y2', 'Fassino', 'Women', 'Blue', '35000km', '280000/=', '40874-pic7.jpg'),
('y3', 'Ray-Z', 'Women', 'Red', '38000km', '300000/=', '81193-pic5.jpg'),
('y4', 'FZ', 'Men', 'Blue', '30000km', '480000/=', '31732-pic2.jpg'),
('y5', 'FZ-V2', 'Men', 'Red', '30000km', '480000/=', '77779-pic3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mailId` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `complaints` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `firstName`, `lastName`, `mailId`, `phone`, `complaints`, `status`) VALUES
(12, 'Marvel', 'Coders', 'marvelcoders123@gmail.com', '702179089', 'jggjggjhj', 'Replied'),
(15, 'Marvel', 'Coders22', 'marvelcoders123@gmail.com', '70217908932', 'gjgjvhkhkb', 'Replied'),
(16, 'kasthu', 'Raj', 'kas@gmail.com', '077895623', 'fhwfsdbvdsv', 'Replied'),
(19, 'Marvel', 'Coders', 'marvelcoders123@gmail.com', '0702179089', 'bjadvbadjvaj', 'Replied'),
(20, 'Marvel', 'Coders', 'marvelcoders123@gmail.com', '702179089', 'sd;khdsklfhlk', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `oderstable`
--

CREATE TABLE `oderstable` (
  `id` int(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `mailId` varchar(35) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `preorders` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oderstable`
--

INSERT INTO `oderstable` (`id`, `firstName`, `lastName`, `mailId`, `phone`, `preorders`, `status`) VALUES
(2, 'Marvel', 'Coders', 'marvelcoders123@gmail.com', '702179089', 'hgkhk,lhjlhhjjhjh', 'Replied'),
(3, 'kasthu', 'raajan', 'kasthuriraajan94@gmail.com', '0712458963', 'hello', 'Replied'),
(4, 'Marvel', 'Coders', 'marvelcoders123@gmail.com', '702179089', 'sdjvgsdkuvskjv', 'Pending'),
(5, 'antony', 'arulmalar', 'antonyarulmalar@gmail.com', '', 'i want it', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `partimage`
--

CREATE TABLE `partimage` (
  `id` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subCategory` varchar(20) NOT NULL,
  `imgLocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partimage`
--

INSERT INTO `partimage` (`id`, `category`, `subCategory`, `imgLocation`) VALUES
(1, 'fazer', 'fork', '59026-part10.png'),
(2, 'FZ-02', 'Brake', '15517-pic9.png'),
(3, 'FZ', 'Tank', '59234-pic2.png'),
(4, 'Fassino', 'RearWheel', '20456-pic5.png'),
(5, 'FZ', 'Cover', '18212-pic7.png'),
(6, '', '', '75537-');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `partNo` varchar(10) NOT NULL,
  `pageRefNo` varchar(10) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `partName` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subCategory` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`partNo`, `pageRefNo`, `barcode`, `partName`, `category`, `subCategory`) VALUES
('01', '01', '123456', 'Brake', 'fz2', 'front');

-- --------------------------------------------------------

--
-- Table structure for table `partscomment`
--

CREATE TABLE `partscomment` (
  `commentId` int(10) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `mailId` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partscomment`
--

INSERT INTO `partscomment` (`commentId`, `userName`, `mailId`, `comment`, `status`) VALUES
(1, 'bfd', 'sbc', 'cabdcjlalj', 'Checked!'),
(2, 'Ideal', 'idealcoders.uof@gmail.com', 'bckhqcdkqd', 'Pending'),
(3, 'Ideal Coders', 'idealcoders.uof@gmail.com', 'dchafycq', 'Pending'),
(4, 'antony', 'antonyarulmalar@gmail.com', 'good', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `servstation`
--

CREATE TABLE `servstation` (
  `stationId` varchar(10) NOT NULL,
  `stationName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `longtitude` varchar(20) NOT NULL,
  `lattitude` varchar(20) NOT NULL,
  `mailId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servstation`
--

INSERT INTO `servstation` (`stationId`, `stationName`, `address`, `phoneNo`, `longtitude`, `lattitude`, `mailId`) VALUES
('12', 'wgjv', 'qnfklq', 'nflqnf', 'dnvl', 'dnvl', 'dvln');

-- --------------------------------------------------------

--
-- Table structure for table `showroom`
--

CREATE TABLE `showroom` (
  `sRoomId` varchar(10) NOT NULL,
  `sRoomName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `longtitude` varchar(20) NOT NULL,
  `lattitude` varchar(20) NOT NULL,
  `mailId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showroom`
--

INSERT INTO `showroom` (`sRoomId`, `sRoomName`, `address`, `phoneNo`, `longtitude`, `lattitude`, `mailId`) VALUES
('1', 'Jaffna', 'Stanly road', '64545', '1212', '1212', '212221');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(5) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `NICNo` varchar(12) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `mailId` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fName`, `lName`, `NICNo`, `phoneNo`, `mailId`, `userName`, `password`, `type`) VALUES
(1, 'Admin', 'Admin', '940521095v', '0778989562', 'digitalyamaha@gmail.com', 'digital', '202cb962ac59075b964b07152d234b70', 'admin'),
(13, 'Marvel', '', '940523260V', '702179089', 'marvelcoders123@gmail.com', '789', '68053af2923e00204c3ca7c6a3150cf7', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikecomment`
--
ALTER TABLE `bikecomment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`modelNo`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oderstable`
--
ALTER TABLE `oderstable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partimage`
--
ALTER TABLE `partimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`barcode`);

--
-- Indexes for table `partscomment`
--
ALTER TABLE `partscomment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `servstation`
--
ALTER TABLE `servstation`
  ADD PRIMARY KEY (`stationId`);

--
-- Indexes for table `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`sRoomId`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikecomment`
--
ALTER TABLE `bikecomment`
  MODIFY `commentId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `oderstable`
--
ALTER TABLE `oderstable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `partimage`
--
ALTER TABLE `partimage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `partscomment`
--
ALTER TABLE `partscomment`
  MODIFY `commentId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
