-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2019 at 10:56 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `emp_fname` varchar(100) NOT NULL,
  `emp_lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `emp_fname`, `emp_lname`, `email`, `phone`, `salary`) VALUES
(1, '', '', '', '', 0),
(2, 'dsfdsaf', 'dasf', 'dafsd', '453545435', 0),
(3, 'dsfdsaf', 'dasf', 'dafsd', '453545435', 0),
(4, 'dsfdsafttt', 'dasf', 'dafsd', '453545435', 0),
(5, 'dsfdsaftttrerewr', 'dasf', 'dafsd', '453545435', 0),
(6, 'vinnarasu', 'arasu', 'vinnu@gmail.com', '9738756665', 0),
(7, 'navya', 'reddy', 'navya@gmail.com', '9010916404', 0),
(8, 'sdvjsdrev ', 'reddy', 'navya@gmail.com', '9010916404', 0),
(9, 'sdvjsdrev ', 'reddy', 'navya@gmail.com', '9010916404', 0),
(10, 'babe', 'reddy', 'babe@gmail.com', '1871987156245', 0),
(11, 'navya', 'reddy', 'navya@gmail.com', '9010916404', 500),
(12, 'bittu', 'reddy', 'bittu@gmail.com', '9010916404', 0),
(13, 'sunaina', 'reddy', 'su@gmail.com', '15123687777789', 500000),
(14, 'navya', 'reddy', 'navya@gmail.com', '9010916404', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `JOB_DESCRIPTION` text NOT NULL,
  `QUALIFICATION` text NOT NULL,
  `EXPERIENCE` text NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `jid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`JOB_DESCRIPTION`, `QUALIFICATION`, `EXPERIENCE`, `Salary`, `jid`) VALUES
('ddassadss', 'asd', '2', '22', 1),
('', '', '', '', 2),
('dddasdaD', 'SADd', '2132234', '234234', 3),
('dddasdaD', 'SADd', '2132234', '234234', 4),
('', '', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `invent`
--

CREATE TABLE `invent` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invent`
--

INSERT INTO `invent` (`id`, `product_id`, `quantity`, `branch`) VALUES
(1, '', '', ''),
(2, '37', '34', 'select your area'),
(3, '38', '29', 'jaya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `type`, `email`, `phno`) VALUES
(1, 'admin', '123', 1, '', ''),
(2, 'hr', '123', 2, '', ''),
(4, 'employee', '123', 3, '', ''),
(5, '', '', 0, '', ''),
(6, '', '', 3, 'navya@gmail.com', ''),
(7, '', '', 3, 'nsvbhg@gmail.com', ''),
(8, 'bittu', '', 3, 'biitu@gmail.com', ''),
(9, 'bittu', '123', 3, 'biitu@gmail.com', ''),
(10, 'jon', '123', 3, 'jon@gmail.com', ''),
(11, 'sun', '456', 3, 'sun@gmail.com', '9010916404'),
(12, 'sun', '456', 3, 'sun@gmail.com', '9010916404'),
(13, 'vin', '789', 3, 'vin@gmail.com', '6361567775'),
(14, 'rahul', '369', 3, 'rahul@gmail.com', '9066184228'),
(15, 'krish', '123', 3, 'krish@gmail.com', '9066184228');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_des` varchar(300) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_avail` int(11) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_des`, `product_category`, `product_avail`, `product_discount`, `product_stock`, `product_price`, `pimage`) VALUES
(35, '10 INCH SOR HOUSING WALL HANGI', '', 'RAW MATERIAL', 10, 0, 10, 300, 'uploads/10 inch blue housing-400x400.jpg'),
(36, '10 INCH SOR HOUSING WITH WHITE', 'RAW MATERIAL', '', 10, 0, 10, 265, 'uploads/10 housign wiht pp-400x400.png'),
(37, '10 INCH CLEAR HOUSING DOR', 'RAW MATERIAL', '', 10, 0, 10, 450, 'uploads/10 inch clear housing DOR-400x400.png'),
(38, '10 INCH REGULAR SOR HOUSING', 'RAW MATERIAL', '', 10, 0, 10, 500, 'uploads/10 inch sor regular kit housing-400x400.jpg'),
(39, '10 INCH REGULAR SOR HOUSING', 'RAW MATERIAL', '', 10, 0, 10, 500, 'uploads/10 inch sor wall hanging housing-400x400.jpg'),
(40, '10 INCH WATER PIRIFIER FILTER ', 'RAW MATERIAL', '', 10, 0, 10, 800, 'uploads/10-Inch-Water-Purifier-Filter-UDF-GAC-GRANULAR-ACTIVATED-CARBON-5-MICRONTASTE-ODOR-CARBON-WATER-FILTER.jpg'),
(41, 'COTTON FILTER FOR REVERSE OSMO', 'RAW MATERIAL', '', 10, 0, 10, 1000, 'uploads/20-Inch-5-Micron-PP-Cotton-Filter-20-PP-Sediment-Filter-Cartridge-For-Reverse-Osmosis-Commercial_large.jpg'),
(42, 'GROOVING 150 GMS', 'RAW MATERIAL', '', 10, 0, 10, 250, 'uploads/71rIvygEM6L._SY741_.jpg'),
(43, 'FILTERS', 'RAW MATERIAL', '', 10, 0, 10, 1500, 'uploads/71TOX1-8jwL._AC._SR180,230.jpg'),
(44, '10 INCH REGULAR SOR HOUSING', 'RAW MATERIAL', '', 10, 0, 10, 254, 'uploads/193074743062lg.jpg'),
(45, 'BODY CLAMP', 'RAW MATERIAL', '', 10, 0, 10, 60, 'uploads/body clamp.jpg'),
(46, 'BOOSTER PUMP HEAD', 'RAW MATERIAL', '', 10, 0, 10, 498, 'uploads/booster pump head.jpg'),
(47, 'BRACKISH WATER RO MEMBRANES', 'RAW MATERIAL', '', 10, 0, 10, 6, 'uploads/brackish water ro membranes.JPG'),
(48, 'C-CLAMP', 'RAW MATERIAL', '', 10, 0, 10, 250, 'uploads/c clamo.jpg'),
(49, 'CHROME SILVER', 'RAW MATERIAL', '', 10, 0, 10, 85, 'uploads/chrome silver.jpg'),
(50, 'FLOAT VALVE', 'RAW MATERIAL', '', 10, 0, 10, 500, 'uploads/float-valve.jpg'),
(51, '10 INCH REGULAR SOR HOUSING', 'RAW MATERIAL', '', 10, 0, 10, 950, 'uploads/download.jpg'),
(52, 'F.R', 'RAW MATERIAL', '', 10, 0, 10, 150, 'uploads/fr.png'),
(53, 'GAC', 'RAW MATERIAL', '', 10, 0, 10, 500, 'uploads/gac.jpg'),
(54, 'GOLD-950', 'RAW MATERIAL', '', 10, 0, 10, 950, 'uploads/gold 950.jpg'),
(55, 'HITECH RO BOOSTER PUMP', 'RAW MATERIAL', '', 10, 0, 10, 1700, 'uploads/Hitech-RO-Booster-Pump-Motor-SDL590861745-1-b441e.jpeg'),
(56, 'REVERSE OSMOSIS MEMBRANE', 'RAW MATERIAL', '', 10, 0, 10, 2500, 'uploads/reverse-osmosis-membrane-500x500-01-1.png'),
(57, 'FILTER BOWL MEMBRANE', 'RAW MATERIAL', '', 10, 0, 10, 2500, 'uploads/ro-wrench-spanner-key-for-10inch-pre-filter-bowl-membrane-original-imaexaqncdm4ryne.jpeg'),
(58, 'WOUND FILTER', 'RAW MATERIAL', '', 10, 0, 10, 800, 'uploads/wound filter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `edu` varchar(2500) NOT NULL,
  `exp` varchar(2500) NOT NULL,
  `ainfo` varchar(2500) NOT NULL,
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `email`, `edu`, `exp`, `ainfo`, `id`, `num`) VALUES
('vinn', 'vinn@gmail.com', 'msc', 'none', 'none', 2, '9010916409'),
('vinn', 'vinn@gmail.com', 'msc', 'none', 'none', 3, '9010916404');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `product_id` int(11) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product_id`, `pname`, `pprice`, `pimage`) VALUES
(1, 'vdegfw', 2500, 'sales/41ozTtcp+RL._SL250_.jpg'),
(2, 'filter2', 11500, 'sales/81rmzZCbS8L._SL1500_.jpg'),
(3, 'filter3', 12000, 'sales/9576221-eureka-forbes-aquaguard-reviva-ro-water-purifier-picture-large.jpg'),
(4, 'AQUAGUARD-MAGNA', 8500, 'sales/aquaguard-magna-hd-ro-uv-original-imaehafjkeswzg8g.jpeg'),
(5, 'EUREKA-FORBES', 6500, 'sales/eureka_forbes-wp-8482-min.jpg'),
(6, 'EUREKA-FORBES-AQUASURE', 6500, 'sales/eureka-forbes-aquasure-aquaguard-maxima-uv-water-purifier-large.jpeg'),
(7, 'MAGNA', 9500, 'sales/magna-hd-ro_uv_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `pname` varchar(1000) NOT NULL,
  `pid` int(100) NOT NULL,
  `dateofpurchase` int(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `reason` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`pname`, `pid`, `dateofpurchase`, `uemail`, `reason`) VALUES
('bag', 123, 5071998, 'navya@gmail.com', 'bjhhj birgyvr3hcveghw'),
('headphones', 156, 123522, 'navya@gmail.com', 'quALITY IS bad'),
('lipstick', 5623, 517, 'me@gmail.com', 'not a worthy product'),
('', 5624, 0, '', ''),
('', 5625, 0, '', ''),
('', 5626, 0, '', ''),
('head', 5627, 0, '', ''),
('', 5628, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `unum` varchar(10) NOT NULL,
  `ualnum` varchar(10) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uaddress` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `unum`, `ualnum`, `uemail`, `uaddress`) VALUES
(1, 'jones', '123456789', '9874561230', 'jones@gmail.com', 'bangalore'),
(2, 'Rahul B George', '9008522228', '256413987', 'rahul.bgeorge@gmail.com', 'baangalore'),
(3, 'navya', '6361537775', '9010916404', 'navya@gmail.com', 'arekere'),
(4, 'kavya', '1234567890', '1234567890', 'kavya@gmail.com', 'bangalore'),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '4', '4', '4', '4', '44'),
(8, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `invent`
--
ALTER TABLE `invent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invent`
--
ALTER TABLE `invent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5629;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
