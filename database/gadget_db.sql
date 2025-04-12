-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 01:22 PM
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
-- Database: `gadget_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `a_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `reg_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`a_id`, `p_id`, `qty`, `reg_id`) VALUES
(35, 42, 1, 11),
(36, 42, 1, 10),
(38, 43, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cname`) VALUES
(16, 'Airpod'),
(17, 'Head Phone'),
(18, 'Smart Watch'),
(20, 'Airpod'),
(21, 'mobail');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `msg`, `date`) VALUES
(3, 'ravi', 'ravi@gmail.com', 'hi hello\r\n', '2022-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

CREATE TABLE `ordermaster` (
  `o_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordermaster`
--

INSERT INTO `ordermaster` (`o_id`, `p_id`, `qty`, `name`, `city`, `address`, `u_id`) VALUES
(139, 39, 1, 'ravi', 'surendranagar', 'main road', 10),
(140, 39, 1, 'dhruti', 'surendranagar', 'main bazar', 11),
(141, 43, 1, 'ravi', 'surendranagar', 'main road', 10),
(142, 40, 2, 'dhruti', 'surendranagar', 'main bazar', 11);

-- --------------------------------------------------------

--
-- Table structure for table `payment_pending`
--

CREATE TABLE `payment_pending` (
  `pay_id` int(5) NOT NULL,
  `a_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `reg_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_pending`
--

INSERT INTO `payment_pending` (`pay_id`, `a_id`, `p_id`, `qty`, `reg_id`) VALUES
(18, 36, 42, 1, 10),
(19, 38, 43, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_id` int(5) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `detail` mediumtext NOT NULL,
  `price` int(7) NOT NULL,
  `rent` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `c_id`, `photo`, `detail`, `price`, `rent`) VALUES
(39, 'Apple AirPods second Generation', 16, 'product/WhatsApp Image 2021-12-30 at 11.11.56 AM.jpeg', 'Active noise cancellation for immersive sound\r\nTransparency mode for hearing and connecting with the world around you\r\nThree sizes of soft, tapered silicone tips for a customisable fit\r\nSweat and water resistant\r\nAdaptive EQ automatically tunes music to the shape of your ear\r\nEasy setup for all your Apple devices\r\nQuick access to Siri by saying “Hey Siri”\r\nThe wireless charging case delivers more than 24 hours of battery life', 2599, 500),
(40, 'APPLE Airpods Max Bluetooth Headset', 16, 'product/WhatsApp Image 2021-12-30 at 11.10.43 AM (7).jpeg', 'AirPods Max reimagine over-ear headphones. An Apple designed dynamic driver provides immersive high fidelity audio. Every detail, from canopy to cushions, has been designed for an exceptional fit. Industry leading Active Noise Cancellation blocks outside noise, while Transparency mode lets it in. And spatial audio with dynamic head tracking provides theatre like sound that surrounds you.', 2100, 400),
(41, '  Samsung Active 2 ', 18, 'product/WhatsApp Image 2021-12-30 at 11.10.43 AM (8).jpeg', 'BASKET\r\nSamsung Active 2 Smartwatch With On/off Samsung Logo\r\n₹2,899.00 onwards(select a variant below to get exact price)\r\nFlat ₹199 OFF on all orders above ₹1\r\nColors\r\nNow Samsung Active2 With On/off Samsung logo\r\n\r\nDESCRIPTION FC ADDITIONAL INFORMATION\r\nDescription\r\n 1.4″ 2.5D Curve HD Screen FULL Touch\r\n Heart Sensor With Real Time Monitor 24/7\r\n Built In Sedentary Reminder/Drinking Water / Sleep Monitoring / Remote Photo / Music Control / Alarm Clock / Timer\r\n Bt Calling Dialer\r\n Various Sport Mode Tracker\r\n IP68 Waterproof Rating\r\n Message / Whatsapp / WeChat Notification Alert\r\n 230mAh Battery Capacity\r\n Working Time Upto 7 days\r\n Charging Time 2 Hours\r\n Blood Oxygen / Blood Pressure sensor / Step Counter / Timer / Stop Watch Etc.\r\n Clip Box Pin Magnetic Wireless Charging\r\n', 2899, 500),
(42, 'Apple AirPods second Generation', 20, 'product/WhatsApp Image 2021-12-30 at 11.11.56 AM.jpeg', 'airpods pro japan', 2100, 400),
(43, 'watch', 18, 'product/watch2.jpg', 'Fast track smart watch', 2300, 400);

-- --------------------------------------------------------

--
-- Table structure for table `rentmaster`
--

CREATE TABLE `rentmaster` (
  `rent_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(30) NOT NULL,
  `u_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentmaster`
--

INSERT INTO `rentmaster` (`rent_id`, `p_id`, `cname`, `address`, `city`, `u_id`, `start_date`, `end_date`) VALUES
(14, 43, 'dhruti', 'main bazar', 'surendranagar', 11, '2025-04-08', '2025-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `rentorder`
--

CREATE TABLE `rentorder` (
  `r_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentorder`
--

INSERT INTO `rentorder` (`r_id`, `p_id`, `start_date`, `end_date`, `u_id`) VALUES
(25, 43, '2025-04-11', '2025-04-12', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rent_pending`
--

CREATE TABLE `rent_pending` (
  `rp_no` int(4) NOT NULL,
  `r_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `u_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` int(5) NOT NULL,
  `revdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `p_id` int(5) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `revdate`, `p_id`, `msg`) VALUES
(1, '2025-03-21 11:40:14.000000', 39, 'very good product'),
(2, '2025-03-23 11:32:44.000000', 39, 'must buy'),
(3, '2025-03-24 04:32:38.000000', 39, 'aaa'),
(4, '2025-03-24 04:49:48.000000', 40, 'must buy'),
(5, '2025-03-24 06:15:31.000000', 41, 'good quality'),
(6, '2025-03-24 06:31:50.000000', 39, 'test 39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `password`, `birthdate`, `city`, `address`) VALUES
(10, 'ravi', 'ravi@gmail.com', 'ravi', '1999-04-13', 'surendranagar', 'main road'),
(11, 'dhruti', 'dhrutimendha@gmail.com', '12345', '2001-11-18', 'surendranagar', 'main bazar'),
(12, 'dhruti', 'dhrutihmend@gmail.com', '12345', '2002-01-22', 'surendranagar', 'new  juction road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `ordermaster`
--
ALTER TABLE `ordermaster`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment_pending`
--
ALTER TABLE `payment_pending`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rentmaster`
--
ALTER TABLE `rentmaster`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `rentorder`
--
ALTER TABLE `rentorder`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `rent_pending`
--
ALTER TABLE `rent_pending`
  ADD PRIMARY KEY (`rp_no`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordermaster`
--
ALTER TABLE `ordermaster`
  MODIFY `o_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `payment_pending`
--
ALTER TABLE `payment_pending`
  MODIFY `pay_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rentmaster`
--
ALTER TABLE `rentmaster`
  MODIFY `rent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rentorder`
--
ALTER TABLE `rentorder`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rent_pending`
--
ALTER TABLE `rent_pending`
  MODIFY `rp_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
