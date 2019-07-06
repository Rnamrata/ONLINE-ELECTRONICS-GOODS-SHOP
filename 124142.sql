-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 01:20 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `124142`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(10) NOT NULL,
  `adminusername` varchar(20) NOT NULL,
  `adminpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminusername`, `adminpassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(8, 'Xiaomi'),
(9, 'Apple'),
(10, 'Samsung'),
(11, 'Qkz'),
(12, '1 More'),
(13, 'Huawei'),
(14, 'HP'),
(15, 'Dell');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(11, 'Mobile Phone'),
(12, 'Wired HeadPhone'),
(13, 'Wireless Headphone'),
(14, 'Tablet'),
(15, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_qty` int(100) NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_qty`, `product_keywords`) VALUES
(66, 11, 8, 'Xiaomi A1', 19990, 'Xiaomi Mi A1 Android smartphone. Announced Sep 2017. Features 5.5â€³ LTPS IPS LCD display, Snapdragon 625 chipset, Dual: 12 MP (f/2.2, 26mm, 1.25 Âµm) + 12 MP primary camera, 5 MP front camera, 3080 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3.', '1504231629728224001.jpg', 1000, 'A1 Xiaomi Mobile'),
(67, 11, 8, 'Xiaomi Note 5 Pro', 17000, 'Xiaomi Redmi Note 5 Pro Android smartphone. Announced Feb 2018. Features 5.99â€³ IPS LCD display, Snapdragon 636 chipset, Dual: 12 MP (f/2.2, 1.25 Î¼m) + 5 MP primary camera, 20 MP front camera, 4000 mAh battery, 64 GB storage, 6 GB RAM, Corning Gorilla Glass (unspecified version).', 'xiaomi-redmi-note-5-pro-vs-redmi-note-5-vs-redmi-note-4.jpg', 1000, 'xiaomi note 5 pro mobile'),
(68, 11, 9, 'Iphone X', 92000, 'Apple iPhone X 64GB: 5.8-inch Super Retina HD display; A11 Bionic chip with 64-bit architecture; 12MP wide-angle and telephoto cameras with dual OIS, Portrait mode and Portrait Lighting; 3D Touch; iOS 11 and iCloud; 7.7mm thin.', 'Untitled_design_36_9a977249-ff36-4cb4-b3ea-a31f54b8ed0b_large.png', 1000, 'iphone 10 flagship mobile'),
(69, 11, 9, 'Iphone 8+', 69000, 'Apple iPhone 8 smartphone. Announced Sep 2017. Features 4.7â€³ LED-backlit IPS LCD display, Apple A11 Bionic chipset, 12 MP primary camera, 7 MP front camera, 1821 mAh battery, 256 GB storage, 2 GB RAM, IP67 certified, Ion-strengthened glass.', 'iphone8-plus-spgray-select-2017.jpg', 1000, 'iphone 8 plus + flagship mobile'),
(70, 14, 9, 'Ipad Pro', 66000, 'The iPad Pro is a line of iPad tablet computers designed, developed, and marketed by Apple Inc., that runs the iOS mobile operating system. It is currently available in two screen sizes, 10.5-inch (27 cm) and 12.9-inch (33 cm), each with three options for internal storage capacities: 64, 256, or 512 GB;', 'ipad-pro-12in-wifi-select-spacegray-201706.png', 12, 'ipad apple'),
(71, 13, 12, '1more mk801', 2999, 'Superb sound - the diaphragms use peek, a highly flexible polymer, for enriched bass. They are Plated with aerospace grade metal for faster response time to produce sizzling highs and precise midrange. Expertly Tuned - by Grammy Award Winning Sound Engineer, Luca Bignardi ', '717RjwNPtlL._SY500_.jpg', 26, '1more mk801'),
(72, 12, 12, '1more E1003-RG', 1900, 'DYNAMIC DRIVER- Dual layer composite driver with aerospace grade titanium delivers sizzling highs, present mids, and powerful bass. ', 'index.jpg', 25, '1more E1003-RG'),
(74, 14, 10, 'samsung s3 tab', 68000, 'Samsung Galaxy Tab 4 7.0 Android tablet. Announced Apr 2014. Features 7.0â€³ TFT display, Marvell PXA1088 chipset, 3.15 MP primary camera, 1.3 MP front camera, 4000 mAh battery, 16 GB storage, 1.5 GB RAM.', 'samsung s3 tab.jpg', 2, 'samsung s3 tab'),
(75, 11, 10, 'Samsung S8+', 55000, 'Samsung Galaxy S8+ Android smartphone. Announced Mar 2017. Features 6.2â€³ Super AMOLED display, Exynos 8895 Octa chipset, 12 MP primary camera, 8 MP front camera, 3500 mAh battery, 128 GB storage, 6 GB RAM, IP68 certified, Corning Gorilla Glass 5.', '5770949cv20d.jpg', 3, 'Samsung S8+ plus'),
(76, 11, 10, 'Samsung S9+', 79000, 'Samsung Galaxy S9+ Features 6.2â€³ Super AMOLED display, Exynos 9810 Octa chipset, Dual: 12 MP (f/1.5-2.4,  Dual Pixel PDAF) + 12MP primary camera, 8 MP front camera, 3500 mAh battery, 648 GB storage, 6 GB RAM, IP68 certified, Corning Gorilla', 'vfcon088404.jpg', 2, 'Samsung S9+ plus'),
(78, 15, 14, 'HP 15-BW099AU', 22000, 'Model - HP 15-BW099AU, Processor - AMD Dual Core E2-9000E, Processor Clock Speed - 1.5-2.0GHz, CPU Cache - 1MB, Display Size - 15.6", Display Type - LED Display, Display Resolution - 1366 x 768, RAM - 4GB,', 'hp1.jpg', 200, 'HP 15'),
(79, 15, 14, 'HP 15-BS520TU', 26100, 'Processor - Intel PQC N3710\r\nProcessor Clock Speed - 1.6-2.5GHz\r\nDisplay Size - 15.6"\r\nRAM - 4GB\r\nRAM Type - DDR3 1600MHz\r\nHDD - 500GB\r\nOperating System - Free Dos', 'hp2.jpg', 200, 'HP 15'),
(81, 15, 15, 'Dell Vostro 5468', 53500, 'Dell Vostro 5468 7th Gen Intel Core i5 7200U (2.50GHz, 4GB DDR4, 1TB) 2GB NVIDIA GeForce 930M, 14 Inch Gray Notebook (3 Yr Warranty)', 'dell3.jpg', 200, 'Dell Vostro'),
(83, 15, 15, 'Dell Inspiron 15-5570', 37000, 'Generation - 6th Gen\r\nProcessor - Intel Core i3 6006U\r\nProcessor Clock Speed - 2.0GHz\r\nDisplay Size - 15.6"\r\nRAM - 4GB\r\nRAM Type - DDR4 2133MHz', 'dell2.jpg', 200, 'Dell Inspiron '),
(84, 14, 13, 'Huawei MediaPad T1', 9990, 'Model - Huawei MediaPad T1-701u\r\nProcessor Type - Spreadtrum SC7731G Quad Core A7\r\nRAM - 1GB\r\nProcessor Speed - 1.20GHz\r\nInternal Memory - 8GB', 'tab1.jpg', 250, 'Huawei MediaPad'),
(85, 14, 13, 'Huawei MediaPad T3', 19700, 'Model - Huawei MediaPad T3 10\r\nProcessor Type - Qualcomm MSM8917 Quad Core A53 \r\nRAM - 2GB Internal Memory - 16GB ROM\r\nDisplay Size - 9.6"\r\nScreen Resolution - 1280 x 800', 'tab2.jpg', 250, 'Huawei MediaPad'),
(86, 12, 11, 'Qkz-DM7', 1200, 'Plug Type: Line Type\r\nLine Length: 1.2m\r\nSensitivity: 120Â±2dB\r\nConnectors: 3.5mm\r\nFrequency Response Range: 8-22000Hz   \r\n\r\n', 'qkz1.jpg', 1000, 'Qkz'),
(87, 12, 11, 'Qkz-W1pro', 1100, ' Sensitivity: 100Â±3dB \r\n Connectors: 3.5mm \r\n Volume Control: No \r\n Frequency Response Range: 5-40000Hz \r\n Line Length: 1.2m ', 'qkz2.jpg', 1000, 'Qkz-W1'),
(88, 13, 12, '1More ibfree', 2500, 'Item Weight :0.3 ounces\r\nProduct Dimensions :1.8 x 3.5 x 4.8 inches\r\nUPC: 	190280100276\r\nColor:Green', '1more.jpg', 1000, '1 More'),
(89, 13, 11, 'Qkz-qg8', 2600, 'Sensitivity: 122Â±3dB\r\nConnectors: USB\r\nResistance: 320Î©\r\nFrequency Response Range: 8-22000HzSupport\r\nColor classification: Black', 'qkz3.jpg', 500, 'qkz'),
(90, 13, 8, 'Mi Bluetooth Headset', 999, 'Wireless Interface 	Bluetooth 4.1\r\nBluetooth chip: 	CSR8610\r\nSupport to connect 2 devices at the same time: 	+\r\nTemperature conditions from -20 Â° C to + 70 Â° C\r\nOpening hours of talk time 5 h.', 'mi1.jpg', 200, 'mi bluetooth');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(4, 'Siam', 'Abed', 'asfsaffas@gmail.com', '29a2ec31f7f0d55665090a253535ddab', '0188320690', '2323fqwesa', '243142vdf'),
(5, 'AD', 'Sdffd', 'demo@demo.com', 'f1b708bba17f1ce948dc979f4d7092bc', '0000000000', 'ghk', 'bn'),
(6, 'Siam', 'Abed', 's@s.com', '670b14728ad9902aecba32e22fa4f6bd', '0000000000', 'ghhdghdg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
