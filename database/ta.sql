-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 03:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_email`, `password`) VALUES
(1, 'admin123@gmail.com', 'admin'),
(2, 'awaisarshad5660@gmail.com', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `id` int(50) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `hall` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `function` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `tprice` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `screenshoot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `user_id`, `name`, `number`, `cnic`, `email`, `date`, `time`, `guest`, `hall`, `menu`, `function`, `status`, `price`, `tprice`, `advance`, `screenshoot`) VALUES
(1, '1', 'SHAHEEN ZAFAR', '03427038510', '3310629134401', 'shaheenzafar.awan@gmail.com', '2024-05-18', 'evening', '250', '4', '2,3', 'Walima', 'approved', '400', '100000', '890', 'pic.jpg'),
(2, '2', 'Usama Bin Umar', '03016363030', '3310629134401', 'balochusama456@gmail.com', '2024-05-14', 'morning', '76', '2', '2', 'Birthday', 'pending', '50', '3800', '566', 'pic.jpg'),
(3, '1', 'SHAHEEN ZAFAR', '03427038510', '3310629134401', 'shaheenzafar.awan@gmail.com', '2024-05-15', 'morning', '454', '5', '2', 'Barat', 'pending', '50', '22700', '646545', 'daniel-lopez.png'),
(12, '1', 'SHAHEEN ZAFAR', '03427038510', '3310629134401', 'shaheenzafar.awan@gmail.com', '2024-05-14', 'evening', '231', '2', '2', 'Barat', 'pending', '50', '11550', '21312', 'daniel-lopez.png'),
(13, '1', 'SHAHEEN ZAFAR', '03427038510', '3310629134401', 'shaheenzafar.awan@gmail.com', '2024-05-14', 'evening', '23', '4', '2', 'Barat', 'pending', '50', '1150', '232', 'daniel-lopez.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `date`) VALUES
(1, 'cold drinks', '2024-05-03'),
(4, 'sweets', '2024-05-05'),
(5, 'main', '2024-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `replay` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `replay`, `status`) VALUES
(1, 'sfsf', 'admin123@gmail.com', 'dfd', '', 'pending'),
(2, 'SHAHEEN ZAFAR', 'shaheenzafar.awan@gmail.com', 'nebwnw', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `expanse`
--

CREATE TABLE `expanse` (
  `eid` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `category` text NOT NULL,
  `vender` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expanse`
--

INSERT INTO `expanse` (`eid`, `item`, `quantity`, `category`, `vender`, `price`, `date`) VALUES
(6, 'milk', 13, 'litter', '3', '400', '2024-05-15'),
(7, 'water', 1000, 'litter', '3', '55000', '2024-05-14'),
(8, 'meet', 10, 'kg', '3', '50', '2024-05-15'),
(9, 'meet', 13, 'kg', '3', '32', '2024-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hid` int(255) NOT NULL,
  `hall` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hid`, `hall`, `capacity`, `date`) VALUES
(2, 'hall 2', '250', '2024-04-26'),
(4, 'hall 1', '300', '2024-05-05'),
(5, 'Both', '550', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `cid`, `item`, `price`, `date`) VALUES
(1, '4', 'gulab jamun', '50', '2024-05-05'),
(2, '1', 'coke', '50', '2024-05-05'),
(3, '5', 'rice', '350', '2024-05-05'),
(4, '5', 'korma', '500', '2024-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset`
--

CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `id` int(50) NOT NULL,
  `occassion` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`id`, `occassion`, `img`, `date`) VALUES
(1, 'barat', 'background.jpg', '2024-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `saman`
--

CREATE TABLE `saman` (
  `sid` int(255) NOT NULL,
  `vid` varchar(255) NOT NULL,
  `hid` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `purchase_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saman`
--

INSERT INTO `saman` (`sid`, `vid`, `hid`, `item`, `quantity`, `price`, `purchase_date`) VALUES
(7, '3', '2', 'glass', '5', '700', '2024-05-15'),
(8, '3', '4', 'glass', '200', '20000', '2024-05-05'),
(9, '3', '4', 'jugs', '400', '40000', '2024-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(50) NOT NULL,
  `category` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `experiance` varchar(250) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `salary_status` text NOT NULL,
  `paid_month` text NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `category`, `name`, `number`, `email`, `experiance`, `salary`, `salary_status`, `paid_month`, `file`, `status`, `date`) VALUES
(1, 'waiter', 'dfd', '343', 'admin123@gmail.com', '3', '120000', 'paid', '5', 'pic.jpg', 'approved', '2024-05-15'),
(3, 'designer', 'shaheen zafar', '03427038510', 'balochusama456@gmail.com', '21', '2300000', 'paid', '5', 'paul-hinz.jpg', 'approved', '2024-05-14'),
(4, 'hr', 'saqib ali', '03453768250', 'balochusama456@gmail.com', '76', '65453', 'paid', '5', 'kai-seidler.jpg', 'approved', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `number`, `cnic`, `email`, `date`) VALUES
(1, 'SHAHEEN ZAFAR', '03427038510', '3310629134401', 'shaheenzafar.awan@gmail.com', '2024-05-14'),
(2, 'Usama Bin Umar', '03016363030', '3310629134401', 'balochusama456@gmail.com', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vid`, `name`, `number`, `email`, `date`) VALUES
(3, 'asad', '03074844311', 'admin123@gmail.com', '2024-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expanse`
--
ALTER TABLE `expanse`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `pass_reset`
--
ALTER TABLE `pass_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saman`
--
ALTER TABLE `saman`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expanse`
--
ALTER TABLE `expanse`
  MODIFY `eid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pass_reset`
--
ALTER TABLE `pass_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saman`
--
ALTER TABLE `saman`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
