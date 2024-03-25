-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 02:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veecla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `office` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `username`, `password`, `office`, `mobile`, `address`, `image`) VALUES
(1, 'Victory Onyeonu', 'veeclaconcept@gmail.com', 'veecla', 'Veecla123', 'CEO', '0810585612', 'Delta state, Nigeria', 'CEO.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_product` int(11) DEFAULT 1,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_quantity`, `users_id`, `product_id`, `date_added`, `is_product`, `product_image`) VALUES
(118, 'hp elite book', 34, 2, 41, 58, '2024-03-23 13:13:45', 1, 'veecla5c46ce919f3c6e3c1f2c0511e23b90ac'),
(119, 'lip gloss', 1, 11, 41, 51, '2024-03-23 13:14:34', 1, 'veeclab23eb48dd7c07a45136246ce1ea9bf5c'),
(121, 'hp elite book', 34, 3, 45, 58, '2024-03-24 02:28:06', 1, 'veecla5c46ce919f3c6e3c1f2c0511e23b90ac'),
(122, 'hp elite book', 34, 7, 47, 58, '2024-03-24 11:21:58', 1, 'veecla5c46ce919f3c6e3c1f2c0511e23b90ac');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `information` longtext NOT NULL,
  `newImage` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `topic`, `content`, `information`, `newImage`) VALUES
(1, 'sfsdfs', 'sffsdfsd', 'sdfdsfsdf', 'veeclaf447fe6e745b58cf1c81e99ed06b82ef');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_info` longtext NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `is_product` tinyint(4) DEFAULT 0,
  `dateAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `related_image` varchar(1000) NOT NULL,
  `applied_image` varchar(1000) NOT NULL,
  `product_unit` int(11) NOT NULL,
  `product_category` varchar(128) NOT NULL,
  `product_video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_price`, `product_info`, `product_image`, `is_product`, `dateAdded`, `related_image`, `applied_image`, `product_unit`, `product_category`, `product_video`) VALUES
(45, 'Neutral Lip gloss', 'Neutral Lip gloss, specifically for casuals and it is applied on minor occasions and not for big events.,', 122, 'very good aswr', 'veecla2320d7c495445719fbc485c9a74a38fe', 0, '2024-02-21 17:40:59', 'veecla2320d7c495445719fbc485c9a74a38fe', 'veecla2320d7c495445719fbc485c9a74a38fe', 8, 'liptreat', ''),
(46, 'Neutral Lip gloss', 'Neutral Lip gloss, specifically for casuals and it is applied on minor occasions and not for big events.,', 122, 'very good aswr', 'veecla2320d7c495445719fbc485c9a74a38fe', 0, '2024-02-21 17:42:22', 'veecla2320d7c495445719fbc485c9a74a38fe', 'veecla2320d7c495445719fbc485c9a74a38fe', 8, 'liptreat', ''),
(47, 'lip gloss', 'A transparent gloss that provides a natural, glossy shine without adding color. Shimmer Lip Gloss:', 15, 'many one', 'veecla41b1f43c0d2a46383ec3aa9fd84456c1', 0, '2024-02-21 17:49:04', 'veecla8a914b450d840e540137ce669b705354', 'veecla8a914b450d840e540137ce669b705354', 4, 'accessories', ''),
(48, 'iphone 20pro max', 'very good iphone ', 8000, 'love me like you do', 'veecla8a8b574e438735bef7f1a7165d2f3377', 0, '2024-02-21 18:22:08', 'veecla8a8b574e438735bef7f1a7165d2f3377', 'veecla8a8b574e438735bef7f1a7165d2f3377', 9, 'lipcare', ''),
(49, 'goods', 'goods and services', 20, 'very good', 'veecla11c247da1b2b3ca2aecb4f88521b52db', 0, '2024-02-21 18:42:41', 'veecla11c247da1b2b3ca2aecb4f88521b52db', 'veecla11c247da1b2b3ca2aecb4f88521b52db', 1, 'lipcare', ''),
(50, 'phone', 'Neutral Lip gloss, specifically for casuals and it is applied on minor occasions and not for big events.,', 12, 'njklsdjkjakljklj', 'veeclaecb4f0de2155d3b1a9d441bda80cf215', 0, '2024-02-21 18:44:59', 'veeclaecb4f0de2155d3b1a9d441bda80cf215', 'veeclaecb4f0de2155d3b1a9d441bda80cf215', 3, 'lipcare', ''),
(51, 'lip gloss', 'Neutral Lip gloss, specifically for casuals and it is applied on minor occasions and not for big events.,', 1, '1', 'veeclab23eb48dd7c07a45136246ce1ea9bf5c', 0, '2024-02-21 18:46:06', 'veecla5eece96d222b7b58e9a655cd8e501236', 'veeclab23eb48dd7c07a45136246ce1ea9bf5c', 1, 'lipcare', ''),
(53, 'hp elite book', 'this is the latest best and quality hp laptop on sales', 800, 'this is the latest best and quality hp laptop on sales', 'veecla8a914b450d840e540137ce669b705354', 0, '2024-02-28 02:18:11', 'veecla2320d7c495445719fbc485c9a74a38fe', 'veeclac97c1ade7ee140b94ed78d01aeab7ff3', 7, 'accessories', 'veecla78ec95074c5d70d5aba1e1558084939a'),
(54, 'hp elite book', 'this is the latest best and quality hp laptop on sales', 900, 'this is the latest best and quality hp laptop on sales', 'veeclae4fbf878b23e25b38b03dc0deb2ad711', 0, '2024-02-28 02:29:38', 'veecla030fe40d984dc734e9664af7977c971f', 'veecla71d4d6e37ae695925e7ed3abe7a6564e', 3, 'liptreat', 'veeclac1a0c2da1efe368a99ec08c7dce998bf'),
(55, 'hp elite book', 'this is the latest best and quality hp laptop on sales', 566, 'this is the latest best and quality hp laptop on sales', 'veecla53d47ebff4a416ea5ea503e8309ff78e', 0, '2024-02-28 02:44:43', 'veecla3057f4ad6ec19ae46685eb7804088956', 'veecladabcf22bd9d9e943de7f73391d68f97d', 3, 'liptreat', 'veecla3b706c248103f83e65b441d2f8bf810f'),
(56, 'hp elite book', 'this is the latest best and quality hp laptop on sales', 3000, 'this is the latest best and quality hp laptop on sales', 'veecla119d3c64d3388f698ad333d6aaebcd61', 0, '2024-02-28 03:07:45', 'veecla2320d7c495445719fbc485c9a74a38fe', 'veecla2320d7c495445719fbc485c9a74a38fe', 4, 'liptreat', 'veecla28a441f359b2a1b611db5e90b1360fd2'),
(57, 'hp elite book', 'this is the latest best and quality hp laptop on sales', 40000, 'this is the latest best and quality hp laptop on sales', 'veecla6e44b194a776badab053521e9f142b21', 0, '2024-02-28 03:12:26', 'veecla6e44b194a776badab053521e9f142b21', 'veecla6e44b194a776badab053521e9f142b21', 12, 'liptreat', 'veeclac12f4bd1e2873adf24f521cff2cbc453'),
(58, 'hp elite book', 'dfssdf', 34, 'fewfwfwef', 'veecla5c46ce919f3c6e3c1f2c0511e23b90ac', 0, '2024-02-28 03:28:04', 'veecla5c46ce919f3c6e3c1f2c0511e23b90ac', 'veecla105fcf907112b6d7cf309df9b165af73', 2, 'liptreat', 'veecla28a441f359b2a1b611db5e90b1360fd2'),
(59, 'hghgghg', 'fghfgh', 6556, 'hjfgfgfgfgfg', 'veeclaf143384a5c2229e26c63a7e543c32195', 0, '2024-02-28 03:37:22', 'veeclaf143384a5c2229e26c63a7e543c32195', 'veeclaf143384a5c2229e26c63a7e543c32195', 56, 'liptreat', 'veeclac12f4bd1e2873adf24f521cff2cbc453'),
(60, 'lippy', 'everything lipy things', 200, 'good', 'veeclab9fb9d37bdf15a699bc071ce49baea53', 0, '2024-03-01 01:14:34', 'veecla919457ae0e14dc799c26db75c9815e06', 'veecla33692fa69174d046fe5c1bcd71adc82e', 2, 'skincare', 'veecla98fa0fec227810f3f2ec9dcd3748780e');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `profilePhoto` varchar(1000) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `productImage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `product_id`, `comments`, `profilePhoto`, `date_added`, `productImage`) VALUES
(200, 'influence', 'influence@gmail.com', 32, 'good', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:19:48', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(201, 'influence', 'influence@gmail.com', 32, 'good again', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:20:34', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(202, 'influence', 'influence@gmail.com', 32, 'nice', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:21:28', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(203, 'influence', 'influence@gmail.com', 32, 'good', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:43:34', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(204, 'influence', 'influence@gmail.com', 32, 'goody times', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:47:22', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(205, 'influence', 'influence@gmail.com', 32, 'Good one', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:49:06', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(206, 'influence', 'influence@gmail.com', 35, 'hello people', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:49:53', 'veecla77afd89c0817ea5068c766d20456c017'),
(207, 'influence', 'influence@gmail.com', 35, 'hello people', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:50:45', 'veecla77afd89c0817ea5068c766d20456c017'),
(208, 'influence', 'influence@gmail.com', 35, 'hack it all', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:51:35', 'veecla77afd89c0817ea5068c766d20456c017'),
(209, 'influence', 'influence@gmail.com', 35, 'hacking', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:52:30', 'veecla77afd89c0817ea5068c766d20456c017'),
(210, 'influence', 'influence@gmail.com', 35, 'hacking', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:52:55', 'veecla77afd89c0817ea5068c766d20456c017'),
(211, 'influence', 'influence@gmail.com', 35, 'hacking', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:53:13', 'veecla77afd89c0817ea5068c766d20456c017'),
(212, 'influence', 'influence@gmail.com', 35, 'hacking', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:53:24', 'veecla77afd89c0817ea5068c766d20456c017'),
(213, 'influence', 'influence@gmail.com', 35, 'hacking', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:53:56', 'veecla77afd89c0817ea5068c766d20456c017'),
(214, 'influence', 'influence@gmail.com', 35, 'hacking', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:54:03', 'veecla77afd89c0817ea5068c766d20456c017'),
(215, 'influence', 'influence@gmail.com', 32, 'werey', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:54:21', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(216, 'influence', 'influence@gmail.com', 33, 'oslkfjfdks', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:57:40', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(217, 'influence', 'influence@gmail.com', 34, 'kkfsdjfksfsdh', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 20:58:07', 'veecla008a41bd93fea7ea7f49544606e8848b'),
(218, 'influence', 'influence@gmail.com', 32, 'nice product to be honest', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 21:20:05', 'veecla7344d9c2f35bbe5d65899697bf2c5659'),
(219, 'shashabanks', 'anita@gmail.com', 33, 'nice one', 'veecla3889c96f1c2106df3004a0f14e2728ed', '2023-12-16 21:23:11', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(220, 'shashabanks', 'anita@gmail.com', 33, 'story', 'veecla3889c96f1c2106df3004a0f14e2728ed', '2023-12-16 21:25:05', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(221, 'influence', 'influence@gmail.com', 31, 'I am the first to comment', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-16 21:29:30', 'veeclaca334e42aa09953cb13fcc443765d502'),
(222, 'shashabanks', 'anita@gmail.com', 33, 'make it four\r\n', 'veecla3889c96f1c2106df3004a0f14e2728ed', '2023-12-16 21:43:44', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(223, 'shashabanks', 'anita@gmail.com', 33, 'and five\r\n', 'veecla3889c96f1c2106df3004a0f14e2728ed', '2023-12-16 21:44:06', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(224, 'shashabanks', 'anita@gmail.com', 33, 'and six\r\n', 'veecla3889c96f1c2106df3004a0f14e2728ed', '2023-12-16 21:44:27', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(225, 'influence', 'influence@gmail.com', 35, 'this is the best product', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 00:41:01', 'veecla77afd89c0817ea5068c766d20456c017'),
(226, 'influence', 'influence@gmail.com', 35, 'productivity', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 00:45:12', 'veecla77afd89c0817ea5068c766d20456c017'),
(227, 'influence', 'influence@gmail.com', 35, 'very good', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 00:47:33', 'veecla77afd89c0817ea5068c766d20456c017'),
(228, 'influence', 'influence@gmail.com', 35, 'we are good', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 00:49:23', 'veecla77afd89c0817ea5068c766d20456c017'),
(229, 'influence', 'influence@gmail.com', 35, 'error is always none', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 00:50:45', 'veecla77afd89c0817ea5068c766d20456c017'),
(230, 'influence', 'influence@gmail.com', 33, 'good man', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 02:38:01', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(231, 'influence', 'influence@gmail.com', 33, 'stones craft', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 02:39:07', 'veecla95f216f8dcbf53c042ee0a98c126deff'),
(232, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:35:21', 'veecla77afd89c0817ea5068c766d20456c017'),
(233, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:36:41', 'veecla77afd89c0817ea5068c766d20456c017'),
(234, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:37:12', 'veecla77afd89c0817ea5068c766d20456c017'),
(235, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:39:26', 'veecla77afd89c0817ea5068c766d20456c017'),
(236, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:39:36', 'veecla77afd89c0817ea5068c766d20456c017'),
(237, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:39:46', 'veecla77afd89c0817ea5068c766d20456c017'),
(238, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:39:56', 'veecla77afd89c0817ea5068c766d20456c017'),
(239, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:40:06', 'veecla77afd89c0817ea5068c766d20456c017'),
(240, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:40:16', 'veecla77afd89c0817ea5068c766d20456c017'),
(241, 'influence', 'influence@gmail.com', 35, 'hola', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:40:26', 'veecla77afd89c0817ea5068c766d20456c017'),
(242, 'influence', 'influence@gmail.com', 35, 'good\r\n', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:41:34', 'veecla77afd89c0817ea5068c766d20456c017'),
(243, 'influence', 'influence@gmail.com', 35, 'good\r\n', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-17 17:42:17', 'veecla77afd89c0817ea5068c766d20456c017'),
(244, 'influence', 'influence@gmail.com', 37, 'nothin', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2023-12-31 10:37:59', 'veecla2c9cf625868ae211fcc8b3c0c5fddaaf'),
(245, 'influence', 'influence@gmail.com', 42, 'i love the woman', 'veecla23c6161c5b4dafe8becc8e29452f00b2', '2024-01-18 02:47:42', 'veecla0474bf67e1c4d7e7096f8c3248c48f5e');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `date_subscribed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`, `date_subscribed`) VALUES
(1, 'joshua', 'joshuajulius2030@gmail.com', '2024-03-24 09:14:45'),
(2, 'joshu', 'joshuajulius2030@gmail.com', '2024-03-24 09:14:45'),
(3, 'influence', 'joshuajulius2030@gmail.com', '2024-03-24 09:14:45'),
(4, 'joshua', 'joshuajulius2030@gmail.com', '2024-03-24 09:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fullName` varchar(255) NOT NULL,
  `profileImage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created_at`, `last_activity`, `fullName`, `profileImage`) VALUES
(13, 'romanreigns', 'romanreigns@gmail.com', '$2y$10$YcrdtVqcGm81I8fSRjKfLuD40BxKeY6IZvv2kfYtAHNL1MKXex3Xy', 0, '2023-12-06 22:07:25', '2023-12-14 13:06:23', 'Roman Reigns', 'veecla231be4a50090c4a6ffce40dd1e40ee8c'),
(15, 'sethrollins', 'sethrollins@gmail.com', '$2y$10$U.M99fTrubL.RZuvuD32FupiA4MRBW8C0JHUT6gUbwIJwgH6XbR6K', 0, '2023-12-06 22:29:40', '2023-12-07 23:08:27', 'seth rollins', 'veecla231be4a50090c4a6ffce40dd1e40ee8c'),
(16, 'deanambrose', 'deanambrose@gmail.com', '$2y$10$auNCt5c4OGDWou3g4NOjLeMz2h7E9aS7GQfw3qlRPL3NKF7NcZpFq', 0, '2023-12-06 22:34:32', '2023-12-07 23:12:03', 'dean ambrose', 'veecla231be4a50090c4a6ffce40dd1e40ee8c'),
(24, 'kurtangle', 'kurtangle@gmail.com', '$2y$10$o.wLh.IU6h6zaXOEy6oKE.We2At6NJ0C10bcCK/6Yxt5tD3ItG0FW', 0, '2023-12-10 07:00:51', '2023-12-12 18:05:41', 'kurt Angle', 'veecla050c5e5f21579496dc9551faa7e95205'),
(25, 'shashabanks', 'anita@gmail.com', '$2y$10$t.H7sgivABRzXMHH9Uwu/.M8aGwz7uKQs2BWqWcrWL/3K5uVUxTia', 0, '2023-12-13 05:46:06', '2023-12-16 21:41:13', 'moseri anita', 'veecla3889c96f1c2106df3004a0f14e2728ed'),
(41, 'michealjack', 'michealjack@gmail.com', '$2y$10$c5nQ7XY4ntWX5.t0YfeGDeRUUiHPt8ROluq6icedWUH.oObC6FdMK', 0, '2024-03-01 02:25:36', '2024-03-23 08:42:58', 'micheal jackson', 'veeclac97c1ade7ee140b94ed78d01aeab7ff3'),
(47, 'influence', 'joshuajulius2030@gmail.com', '$2y$10$mtluetiWR9sVY/SuGswmN.lGUyRS4myvfO8u8dVY1MYL9FoYaoSTm', 0, '2024-03-24 09:42:24', '2024-03-24 11:35:26', 'joshua julius', 'veeclac97c1ade7ee140b94ed78d01aeab7ff3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
