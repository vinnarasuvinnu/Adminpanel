-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 12:10 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

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
-- Table structure for table `addreq`
--

CREATE TABLE `addreq` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `timeset` varchar(255) NOT NULL,
  `emplyees` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addreq`
--

INSERT INTO `addreq` (`id`, `project_name`, `description`, `project`, `timeset`, `emplyees`, `start`, `end`) VALUES
(1, '', '', '', '', '', '2019-04-11', '2019-04-10'),
(2, '3', '3', '3', '', '33', '2019-04-07', '2019-04-27'),
(3, '3', '3', '3', '', '33', '2019-04-07', '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'admin', '$2y$10$q25ZGM9vBRIFRbYKBVBxT.5xZa3iuRLIjY96f1LDj9tkrd3yn9QSu', 'Harry', 'Den', 'male6.jpg', '2018-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time DEFAULT NULL,
  `num_hr` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(13, 1, '2018-04-27', '08:00:00', 1, '17:00:00', 8),
(14, 1, '2018-04-28', '08:00:00', 1, '17:00:00', 8),
(15, 1, '2018-05-04', '08:00:00', 1, '17:00:00', 8),
(16, 1, '2018-05-02', '08:00:00', 1, '17:00:00', 8),
(17, 1, '2018-05-01', '08:00:00', 1, '17:00:00', 8),
(18, 1, '2018-05-03', '08:00:00', 1, '17:00:00', 8),
(74, 1, '2018-04-30', '08:00:00', 1, '16:44:23', 7.7333333333333),
(75, 3, '2018-04-18', '08:00:00', 1, '17:00:00', 8),
(76, 4, '2018-04-19', '08:00:00', 1, '17:00:00', 8),
(77, 4, '2018-04-27', '08:00:00', 1, '17:00:00', 7),
(78, 4, '2018-04-28', '08:00:00', 1, '17:00:00', 8),
(79, 4, '2018-05-01', '08:30:00', 1, '17:00:00', 8),
(80, 4, '2018-05-03', '08:00:00', 1, '17:00:00', 0),
(81, 4, '2018-05-05', '08:00:00', 1, '17:00:00', 9),
(83, 4, '2018-05-31', '12:00:00', 0, '18:00:00', 5),
(84, 4, '2018-05-18', '08:00:00', 1, '17:00:00', 7),
(85, 4, '2018-05-09', '09:00:00', 1, '18:00:00', 8),
(86, 5, '2018-07-11', '07:41:00', 1, '16:00:00', 7),
(87, 1, '2018-07-11', '06:27:00', 1, '15:00:00', 6),
(88, 6, '2018-07-11', '07:45:00', 1, '14:48:00', 3.8),
(89, 7, '2018-07-11', '07:56:00', 1, '17:00:00', 8),
(90, 8, '2018-07-11', '06:05:12', 1, '16:00:00', 7),
(91, 9, '2018-07-11', '18:12:06', 0, '00:00:00', 0),
(92, 10, '2018-07-11', '18:13:01', 0, '00:00:00', 0),
(93, 11, '2018-07-11', '18:14:30', 0, '00:00:00', 0),
(94, 12, '2018-07-11', '18:16:14', 0, '00:00:00', 0),
(95, 13, '2018-07-11', '18:17:32', 0, '00:00:00', 0),
(96, 14, '2018-07-11', '18:18:33', 0, '00:00:00', 0),
(97, 15, '2018-07-11', '18:19:26', 0, '00:00:00', 0),
(98, 16, '2018-07-11', '18:20:26', 0, '00:00:00', 0),
(99, 17, '2018-07-11', '18:21:41', 0, '00:00:00', 0),
(100, 18, '2018-07-12', '23:46:31', 1, '00:00:00', 0),
(101, 19, '2018-07-12', '23:50:28', 1, '00:00:00', 0),
(102, 20, '2018-07-12', '23:52:48', 1, '00:00:00', 0),
(103, 21, '2018-07-12', '23:54:50', 1, '00:00:00', 0),
(104, 22, '2018-07-12', '23:56:02', 1, '00:00:00', 0),
(105, 23, '2018-07-12', '13:57:00', 0, '00:00:00', 12.95),
(106, 1, '2019-02-21', '12:09:50', 0, '12:10:09', 0),
(107, 3, '2019-02-21', '12:11:12', 0, '00:00:00', 0),
(108, 22, '2019-02-21', '12:22:05', 0, '12:30:19', 0.13333333333333),
(109, 8, '2019-02-21', '16:34:30', 0, '00:00:00', 0),
(110, 7, '2019-02-23', '12:10:07', 0, '00:00:00', 0),
(111, 1, '2019-03-29', '23:14:35', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `employee_id`, `amount`) VALUES
(2, '2018-05-02', '1', 1000),
(3, '2018-05-02', '1', 1000),
(4, '2018-07-12', '5', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_num` varchar(255) NOT NULL,
  `c_alnum` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `c_name`, `c_num`, `c_alnum`, `c_email`, `c_address`) VALUES
(1, 'aqua', '43243423', '342342', 'mail@gmail.com', 'new addres'),
(2, 'aqua', '43243423', '342342', 'mail@gmail.com', 'new addres');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(1, 'SSS', 100),
(2, 'Pagibig', 150),
(3, 'PhilHealth', 150),
(4, 'Project Issues', 1500);

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
(14, 'navya', 'reddy', 'navya@gmail.com', '9010916404', 500000),
(15, '88', '8', '88', '8', 7777),
(16, '3243243424324', '3424', '4324', '3242', 34),
(17, 'vinnu', 'arasu', '3@gmail.com', '7200171465', 7777),
(18, 'vinnu', 'arasu', 'v@gmail.com', '7200171340', 324);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `salary` int(11) NOT NULL DEFAULT '10000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`, `salary`) VALUES
(1, 'ABC123456789', 'Christine', 'Smith', 'Brgy. Mambulac, Silay City', '2018-04-02', '09000035719', 'Female', 1, 2, 'desktop.jpg', '2018-04-28', 10000),
(3, 'DYE473869250', 'Julyn', 'Divinagracia', 'E.B. Magalona', '1992-05-02', '09123456789', 'Female', 2, 2, '', '2018-04-30', 10000),
(4, 'JIE625973480', 'Gemalyn', 'Cepe', 'Carmen, Bohol', '1995-10-02', '09468029840', 'Female', 2, 3, '', '2018-04-30', 10000),
(5, 'TQO238109674', 'Bruno', 'Den', 'Test', '1995-08-23', '5454578965', 'Male', 1, 2, 'thanossmile.jpg', '2018-07-11', 10000),
(6, 'EDQ203874591', 'Henry', 'Doe', 'New St. Esp', '1991-07-25', '9876543210', 'Male', 2, 4, 'male.png', '2018-07-11', 10000),
(7, 'TWY781946302', 'Johnny', 'Jr', 'Esp', '1995-07-11', '8467067344', 'Male', 1, 2, 'profile.jpg', '2018-07-11', 10000),
(8, 'GWZ071342865', 'Tonny', 'Jr', 'Esp 12 South Street', '1994-07-19', '9876543210', 'Male', 1, 2, 'profile.jpg', '2018-07-11', 10000),
(9, 'HEL079321846', 'Jacob', 'Carter', 'St12 N1', '1995-07-18', '5454578965', 'Male', 1, 2, 'profile.jpg', '2018-07-11', 10000),
(10, 'OCN273564901', 'Benjamin', 'Cohen', 'TEST', '1991-07-25', '78548852145', 'Male', 2, 3, 'profile.jpg', '2018-07-11', 10000),
(11, 'PGX413705682', 'Ethan', 'Carson', 'DEMO', '1994-07-19', '8467067344', 'Male', 1, 2, 'profile.jpg', '2018-07-11', 10000),
(12, 'YWX536478912', 'Daniel', 'Cooper', 'Test', '1995-07-11', '9876543210', 'Male', 2, 4, 'profile.jpg', '2018-07-11', 10000),
(13, 'ALB590623481', 'Emma', 'Wallis', 'Test', '1994-07-19', '9632145655', 'Female', 1, 3, 'female4.jpg', '2018-07-11', 10000),
(14, 'IOV153842976', 'Sophia', 'Maguire', 'Test', '1995-07-11', '5454578965', 'Female', 2, 2, 'profile.jpg', '2018-07-11', 10000),
(15, 'CAB835624170', 'Mia', 'Hollister', 'Test', '1995-07-18', '9632145655', 'Female', 2, 3, 'profile.jpg', '2018-07-11', 10000),
(16, 'MGZ312906745', 'Emily', 'JK', 'Test', '1996-07-24', '9876543210', 'Female', 2, 3, 'profile.jpg', '2018-07-11', 10000),
(17, 'HSP067892134', 'Nakia', 'Grey', 'Test', '1995-10-24', '8467067344', 'Female', 1, 2, 'profile.jpg', '2018-07-11', 10000),
(18, 'BVH081749563', 'Dave', 'Cruze', 'Demo', '1990-01-02', '5454578965', 'Male', 2, 2, 'profile.jpg', '2018-07-11', 10000),
(19, 'ZTC714069832', 'Logan', 'Paul', 'Esp 16', '1994-12-30', '0202121255', 'Male', 1, 1, 'profile.jpg', '2018-07-11', 10000),
(20, 'VFT157620348', 'Jack', 'Adler', 'Test', '1991-07-25', '6545698880', 'Male', 1, 4, 'profile.jpg', '2018-07-11', 10000),
(21, 'XRF342608719', 'Mason', 'Beckett', 'Demo', '1996-07-24', '8467067344', 'Male', 2, 1, 'profile.jpg', '2018-07-11', 10000),
(22, 'LVO541238690', 'Lucas', 'Cooper', 'Demo', '1995-07-18', '9632145655', 'Male', 2, 1, 'profile.jpg', '2018-07-11', 10000),
(23, 'AEI036154829', 'Alex', 'Cohen', 'Demo', '1995-08-23', '9632145655', 'Male', 1, 2, 'profile.jpg', '2018-07-11', 10000);

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
('', '', '', '', 5),
('newjob', 'myjob', '2 years', '10000', 6),
('1', '1', '1', '1', 7);

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `godown` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product`, `qty`, `godown`) VALUES
(1, 'myproduct', 1042, 'mys'),
(2, 'newproduct', 41, 'mys'),
(3, 'newproduct', 34, 'jaya');

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
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `employee_id`, `hours`, `rate`, `date_overtime`) VALUES
(4, '6', 240, 1500, '2031-11-08'),
(5, '4', 283.33333333333, 3600, '2018-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(1, 'Programmer', 100),
(2, 'Writer', 50),
(3, 'Marketing ', 35),
(4, 'Graphic Designer', 75);

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
(58, 'WOUND FILTER', 'RAW MATERIAL', '', 10, 0, 10, 800, 'uploads/wound filter.jpg'),
(59, '1', '1', '1', 1, 11, 1, 1, 'uploads/Screenshot from 2019-03-28 12-35-50.png'),
(60, '2', '2', '2', 22, 2, 2, 2, 'uploads/Screenshot from 2019-03-25 16-13-46.png'),
(61, '7', '7', '7', 7, 7, 7, 7, 'uploads/Screenshot from 2019-03-12 14-05-27.png'),
(62, '5', '5', '5', 5, 5, 5, 5, 'uploads/Screenshot from 2019-03-04 11-45-02.png'),
(63, '1', '1', '11', 1, 1, 1, 1, 'uploads/clogo.jpg'),
(64, '333', '3', '3', 3, 3, 3, 3, 'uploads/clogo.jpg'),
(65, '7', '7', '7', 7, 77, 7, 7, 'uploads/clogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `product_id`, `user_id`) VALUES
(1, 40, 5),
(2, 40, 3),
(3, 47, 9);

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
-- Table structure for table `reqtic`
--

CREATE TABLE `reqtic` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `problem` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reqtic`
--

INSERT INTO `reqtic` (`id`, `email`, `problem`, `status`) VALUES
(1, 'v@gmail.com', 'problem', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `product_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `pprice` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product_id`, `sub_id`, `pprice`, `count`) VALUES
(12, 43, 33399, 8);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `product_id` int(11) NOT NULL,
  `pid` int(100) NOT NULL,
  `dateofpurchase` date NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `reason` varchar(2500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`product_id`, `pid`, `dateofpurchase`, `uemail`, `reason`, `status`) VALUES
(39, 5630, '2019-04-03', '', '', 3),
(38, 5631, '2019-04-19', 'vinnu@gmail.com', 'my only reason', 0);

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
(8, '', '', '', '', ''),
(9, 'vinnu', '991023912', '3423423', 'vinarasu77@gmail.com', '3213123'),
(10, 'ashish', '342423', '34324', 'vinarasu77@gmail.com', 'fasdfsfasd'),
(11, '', '', '', '', ''),
(12, '0', '0', '0', '0', '0'),
(13, 'myname78', '92132321', '342424', 'vinnu@gmail.com', 'address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addreq`
--
ALTER TABLE `addreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqtic`
--
ALTER TABLE `reqtic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addreq`
--
ALTER TABLE `addreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `invent`
--
ALTER TABLE `invent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reqtic`
--
ALTER TABLE `reqtic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5632;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
