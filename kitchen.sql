-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 08:15 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(30) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `detail`, `image`) VALUES
(1, '<p>Over the past 10 years, HomeTown has been bringing the latest designs &amp; fashion to Indian homes. HomeTown offers the widest and best in class range in furniture, home furnishings &amp; decor, modular kitchens, home improvement and more. Part of the Future Group, HomeTown brings an enjoyable a', 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `email` varchar(365) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` longtext NOT NULL,
  `address_type` varchar(150) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `email`, `name`, `mobile`, `address`, `address_type`, `time_stamp`, `city`) VALUES
(1, 'patelbhargav384@gmail.com', 'Bhargav', '8200083178', 'Ambica Society', 'Home', '2020-01-10 15:30:37', 'Kalol'),
(2, 'patelbhargav384@gmail.com', 'Bhargav Jitendrabhai Patel', '8200083178', '3,Garden villa, Oppo G.E.B, Kadi-Kalol Road, Kadi.', 'Office', '2020-01-22 09:38:30', 'Ahmedabad'),
(3, 'john1999@gmail.com', 'John Mathews', '7895462412', '01, Rugato Way, MA', 'Home', '2020-01-23 09:57:11', 'Boston'),
(4, 'patelbhargav384@gmail.com', 'paresh', '8080909099', 'ahmedabad', 'Home', '2020-01-24 12:47:23', 'ahmedabad'),
(5, 'john1999@gmail.com', 'paresh', '33232332323', 'hari avenue', 'Home', '2020-01-25 08:52:16', 'ahmedsanabd'),
(6, 'john1999@gmail.com', 'jayesh', '999990909', 'bhavnagar-para', 'Home', '2020-01-25 11:48:09', 'bhavnagar'),
(7, 'john1999@gmail.com', 'hitesh', '9898989899', 'limbdi', 'Home', '2020-01-25 12:42:11', 'vadodara'),
(8, 'Chiragkumar7691@gmail.com', 'Chirag kumar', ' 9587936752', 'Ahmedabad', 'Office', '2020-01-26 08:39:31', 'ahmedabad'),
(9, 'admin123@gmail.com', 'Chirag kumar', ' 9587936752', 'Ahmedabad', 'Home', '2020-01-27 10:15:29', 'ahmedabad'),
(10, 'gaurangkabra97@gmail.com', 'Chirag kumar', ' 91958793675', 'Ahmedabad', 'Office', '2020-01-28 05:44:29', 'ahmedabad'),
(11, 'gaurangkabra97@gmail.com', 'Chirag kumar', ' 91958793675', 'Ahmedabad1', 'Home', '2020-01-28 06:15:26', 'ahmedabad1'),
(12, 'kumarChirag2002@gmail.com', 'Chirag kumar', ' 91958793675', 'Ahmedabad', 'Office', '2020-01-30 14:29:12', 'ahmedabad'),
(13, 'anuppatel98@gmail.com', 'David Shrivastav', ' 91958793675', '6, Shayano city, Chanakyapuri', 'Home', '2020-01-31 07:39:03', 'Ahmedabad'),
(14, 'heena.thakkar.it@gmail.com', 'jjbjb', '9898025987', 'nbjbj', 'Home', '2020-01-31 10:09:18', 'jhbjhb'),
(15, 'kumarchirag@gmail.com', 'Chirag kumar', ' 91958793675', 'Ahmedabad', 'Home', '2020-02-09 13:13:47', 'ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `contact`) VALUES
(1, 'gaurang', 'gaurangkabra97@gmail.com', 'gaurangkabra97', ' '),
(2, 'chirag', 'Chiragkumar7691@gmail.com', '5252', ' 8141379057'),
(3, 'bhargav', 'patelbhargav384@gmail.com', 'bhargav2786', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(1, 'abc1.jpg'),
(2, 'si.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(30) NOT NULL,
  `c_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Kitchenware'),
(2, 'Tableware'),
(3, 'Cookware'),
(4, 'pan');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `chk_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `P_stocks` int(100) NOT NULL,
  `email` varchar(365) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`chk_id`, `p_id`, `P_stocks`, `email`, `quantity`, `price`) VALUES
(15, 23, 0, 'heena.thakkar.it@gmail.com', 1, 499),
(16, 12, 0, 'heena.thakkar.it@gmail.com', 1, 9500);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `sub` varchar(400) NOT NULL,
  `msg` varchar(600) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `sub`, `msg`, `timestamp`) VALUES
(9, 'Chirag kumar', 'Chiragkumar7691@gmail.com', 'order', 'how to change order date ', '2020-01-30'),
(10, 'kitchen', 'Chiragkumar7691@gmail.com', 'profile', 'how to update profile\r\n', '2020-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `freq`
--

CREATE TABLE `freq` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL,
  `detail2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freq`
--

INSERT INTO `freq` (`id`, `detail`, `detail2`) VALUES
(1, '<p>How to Login using Mobaile no.</p>\r\n', '   <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">\r\n								<button> Sign In</button> </a>\r\n'),
(2, '<p>How to change profile&nbsp;</p>\r\n', '<p><a href=\"profile.php\">Profile&nbsp;</a></p>\r\n'),
(3, '<p>Is it necessary to have an account to shop on Kitchen World?</p>\r\n', '<p>Yes, it&#39;s necessary to log into your Kitchen World&nbsp;account to shop. Shopping as a logged-in user is fast &amp; convenient and also provides extra security.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You&#39;ll have access to a personalised shopping experience including&nbsp;</p>\r\n'),
(4, '<p>Why do I see a shipping charge for an item with the Kitchen World?</p>\r\n', '<p>Sellers may charge a nominal fee for shipping, even for products with the Kitchen World, if the order is less than â‚¹ 500.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Shipping is free for items with the Kitchen World&nbsp;if the order value is more than â‚¹ 500.</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `offer_product`
--

CREATE TABLE `offer_product` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_product`
--

INSERT INTO `offer_product` (`o_id`, `p_id`, `o_price`) VALUES
(1, 1, 1000),
(2, 5, 2000),
(3, 6, 3000),
(4, 19, 900);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `email`, `order_id`, `p_id`, `qty`, `price`, `date`) VALUES
(1, 'Chiragkumar7691@gmail.com', 'ORD15812807761857825680', 1, 1, 5000, '2020-02-09'),
(2, 'Chiragkumar7691@gmail.com', 'ORD15812807761857825680', 3, 1, 3000, '2020-02-09'),
(3, 'Chiragkumar7691@gmail.com', 'ORD15812807761857825680', 6, 1, 10000, '2020-02-09'),
(4, 'Chiragkumar7691@gmail.com', 'ORD15812807761857825680', 19, 1, 270, '2020-02-09'),
(5, 'Chiragkumar7691@gmail.com', 'ORD15812807761857825680', 8, 1, 9000, '2020-02-09'),
(6, 'Chiragkumar7691@gmail.com', 'ORD1581309226555596038', 1, 1, 5000, '2020-02-10'),
(7, 'Chiragkumar7691@gmail.com', 'ORD1581309226555596038', 4, 1, 4000, '2020-02-10'),
(8, 'gaurangkabra97@gmail.com', 'ORD15813105822001682510', 5, 1, 12000, '2020-02-10'),
(9, 'Chiragkumar7691@gmail.com', 'ORD15813106521620900349', 4, 1, 4000, '2020-02-10'),
(10, 'Chiragkumar7691@gmail.com', 'ORD15813106521620900349', 8, 1, 9000, '2020-02-10'),
(11, 'kumarChirag2002@gmail.com', 'ORD1581316014472369325', 2, 1, 3000, '2020-02-10'),
(12, 'kumarChirag2002@gmail.com', 'ORD1581316014472369325', 1, 1, 5000, '2020-02-10'),
(13, 'chiragkumar7691@gmail.com', 'ORD1581396679919643778', 2, 1, 3000, '2020-02-11'),
(14, 'chiragkumar7691@gmail.com', 'ORD1581398381149173025', 46, 1, 28999, '2020-02-11'),
(15, 'chiragkumar7691@gmail.com', 'ORD1581398381149173025', 9, 1, 27000, '2020-02-11'),
(16, 'chiragkumar7691@gmail.com', 'ORD1581404997839047866', 1, 5, 20000, '2020-02-11'),
(17, 'chiragkumar7691@gmail.com', 'ORD1581404997839047866', 4, 1, 4000, '2020-02-11'),
(18, 'Chiragkumar7691@gmail.com', 'ORD1581506455309448319', 1, 1, 5000, '2020-02-12'),
(19, 'Chiragkumar7691@gmail.com', 'ORD1581506455309448319', 5, 1, 12000, '2020-02-12'),
(20, 'Chiragkumar7691@gmail.com', 'ORD1581509248381538505', 4, 1, 4000, '2020-02-12'),
(21, 'Chiragkumar7691@gmail.com', 'ORD1581509248381538505', 3, 1, 3000, '2020-02-12'),
(22, 'Chiragkumar7691@gmail.com', 'ORD1581509248381538505', 2, 1, 3000, '2020-02-12'),
(23, 'Chiragkumar7691@gmail.com', 'ORD15815093631079193947', 8, 1, 9000, '2020-02-12'),
(24, 'Chiragkumar7691@gmail.com', 'ORD15815093631079193947', 7, 1, 13000, '2020-02-12'),
(25, 'Chiragkumar7691@gmail.com', 'ORD1581736178329661112', 2, 1, 3000, '2020-02-15'),
(26, 'Chiragkumar7691@gmail.com', 'ORD1581736178329661112', 5, 1, 12000, '2020-02-15'),
(27, 'Chiragkumar7691@gmail.com', 'ORD1581736178329661112', 6, 1, 10000, '2020-02-15'),
(28, 'Chiragkumar7691@gmail.com', 'ORD15817407971482304958', 1, 1, 5000, '2020-02-15'),
(29, 'Chiragkumar7691@gmail.com', 'ORD15817407971482304958', 5, 1, 12000, '2020-02-15'),
(30, 'Chiragkumar7691@gmail.com', 'ORD15817409212082248200', 5, 1, 12000, '2020-02-15'),
(31, 'Chiragkumar7691@gmail.com', 'ORD15817409212082248200', 6, 1, 10000, '2020-02-15'),
(32, 'Chiragkumar7691@gmail.com', 'ORD15817410041791454222', 5, 1, 12000, '2020-02-15'),
(33, 'Chiragkumar7691@gmail.com', 'ORD158220521774230725', 46, 1, 28999, '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `order_re`
--

CREATE TABLE `order_re` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `address_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `payment_type` varchar(250) NOT NULL,
  `order_status` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_re`
--

INSERT INTO `order_re` (`id`, `order_id`, `address_id`, `amount`, `quantity`, `payment_type`, `order_status`, `email`, `date`) VALUES
(4, 'ORD15812807761857825680', 8, 27270, '5', 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-10'),
(5, 'ORD1581309226555596038', 8, 9000, '2', 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-10'),
(6, 'ORD1581396679919643778', 8, 3000, '1', 'COD', 'Success', 'chiragkumar7691@gmail.com', '2020-02-11'),
(7, 'ORD1581316014472369325', 12, 8000, '2', 'COD', 'Success', 'kumarChirag2002@gmail.com', '2020-02-11'),
(8, 'ORD15813105822001682510', 10, 12000, '1', 'COD', 'Success', 'gaurangkabra97@gmail.com', '2020-02-12'),
(9, 'ORD15813106521620900349', 8, 13000, '2', 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-12'),
(10, 'ORD1581398381149173025', 8, 55999, '2', 'COD', 'Success', 'chiragkumar7691@gmail.com', '2020-02-13'),
(11, 'ORD1581404997839047866', 8, 24000, '6', 'COD', 'Success', 'chiragkumar7691@gmail.com', '2020-02-13'),
(12, 'ORD1581506455309448319', 8, 17000, '2', 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-13'),
(15, 'ORD1581736178329661112', 8, 25000, '3', 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(16, 'ORD15817407971482304958', 8, 17000, '2', 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `ord_id` varchar(255) NOT NULL,
  `address_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `quantity` int(250) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `email` varchar(365) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `ord_id`, `address_id`, `amount`, `quantity`, `payment_type`, `order_status`, `email`, `date`) VALUES
(1, 'ORD15812807761857825680', 8, 27270, 5, 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-09'),
(2, 'ORD1581309226555596038', 8, 9000, 2, 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-10'),
(3, 'ORD15813105822001682510', 10, 12000, 1, 'COD', 'Success', 'gaurangkabra97@gmail.com', '2020-02-12'),
(4, 'ORD15813106521620900349', 8, 13000, 2, 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-12'),
(5, 'ORD1581316014472369325', 12, 8000, 2, 'COD', 'Success', 'kumarChirag2002@gmail.com', '2020-02-11'),
(6, 'ORD1581396679919643778', 8, 3000, 1, 'COD', 'Success', 'chiragkumar7691@gmail.com', '2020-02-11'),
(7, 'ORD1581398381149173025', 8, 55999, 2, 'COD', 'Success', 'chiragkumar7691@gmail.com', '2020-02-13'),
(8, 'ORD1581404997839047866', 8, 24000, 6, 'COD', 'Success', 'chiragkumar7691@gmail.com', '2020-02-13'),
(9, 'ORD1581506455309448319', 8, 17000, 2, 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-13'),
(10, 'ORD1581509248381538505', 8, 10000, 3, 'COD', 'Return', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(11, 'ORD15815093631079193947', 8, 22000, 2, 'COD', 'Return', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(12, 'ORD1581736178329661112', 8, 25000, 3, 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(13, 'ORD15817407971482304958', 8, 17000, 2, 'COD', 'Success', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(14, 'ORD15817409212082248200', 8, 22000, 2, 'COD', 'Pending', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(15, 'ORD15817410041791454222', 8, 12000, 1, 'COD', 'Pending', 'Chiragkumar7691@gmail.com', '2020-02-15'),
(16, 'ORD158220521774230725', 8, 28999, 1, 'COD', 'Pending', 'Chiragkumar7691@gmail.com', '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `exp_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `otp`, `mobile`, `email`, `exp_time`) VALUES
(1, 1374, '0', 'chiragkumar7691@gmail.com', '2015-02-20 08:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment status` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `amount`, `qty`, `payment status`, `date`) VALUES
(4, 'ORD15812807761857825680', '27270', 5, 'Success', '2020-02-10'),
(5, 'ORD1581309226555596038', '9000', 2, 'Success', '2020-02-10'),
(6, 'ORD1581396679919643778', '3000', 1, 'Success', '2020-02-11'),
(7, 'ORD1581316014472369325', '8000', 2, 'Success', '2020-02-11'),
(8, 'ORD15813105822001682510', '12000', 1, 'Success', '2020-02-12'),
(9, 'ORD15813106521620900349', '13000', 2, 'Success', '2020-02-12'),
(10, 'ORD1581398381149173025', '55999', 2, 'Success', '2020-02-13'),
(11, 'ORD1581404997839047866', '24000', 6, 'Success', '2020-02-13'),
(12, 'ORD1581506455309448319', '17000', 2, 'Success', '2020-02-13'),
(15, 'ORD1581736178329661112', '25000', 3, 'Success', '2020-02-15'),
(16, 'ORD15817407971482304958', '17000', 2, 'Success', '2020-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(30) NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `detail`) VALUES
(1, '<h6>Privacy Policy</h6>\r\n\r\n<p>&nbsp;At kitchen world, we are extremely proud of our commitment to protect your privacy. We value your trust in us. We work hard to earn your confidence so that you can enthusiastically use our services and recommend your friends and family to participate in dealing with us. Please read the following policy to understand how your personal information will be treated as you make full use of our Site.</p>\r\n\r\n<p><strong>Note:</strong></p>\r\n\r\n<p>Our privacy policy is s');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(30) NOT NULL,
  `c_name` int(30) NOT NULL,
  `s_name` int(30) NOT NULL,
  `p_name` longtext NOT NULL,
  `price` int(6) NOT NULL,
  `offer_price` int(6) NOT NULL,
  `P_stocks` int(100) NOT NULL,
  `detail` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `sub_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_name`, `s_name`, `p_name`, `price`, `offer_price`, `P_stocks`, `detail`, `image`, `sub_image`) VALUES
(1, 1, 1, 'Prestige Stove 4 Gas Burner', 6000, 5000, 2, '<p>Four Gas Burner Gas Stove</p>\r\n', 'prestige_stove.jpg', ''),
(2, 1, 1, 'Piegon Stove 2 Gas Burner', 4000, 3000, 6, '<p>Piegon 2 Burner Stove&nbsp;</p>\r\n', 'Piegon.jpg', ''),
(3, 1, 1, 'Havells Instant Induction Cooktop', 5000, 3000, 9, '<p>Havells Insta Cook PT 1600-Watt Induction Cooktop</p>\r\n', 'Havells_induction.jpg', ''),
(4, 1, 1, 'Prestige Instant Induction Cooktop', 6000, 4000, 27, '<p>Prestige Insta Cook PT 1600-Watt Induction Cooktop&nbsp;</p>\r\n', 'prestige_induction.jpg', ''),
(5, 1, 2, 'Samsung Oven', 150000, 12000, 1, '<p>Samsung 23 L Solo Microwave Oven (MS23F301TAK/TL, Black)</p>\r\n', 'samsung_oven.jpg', ''),
(6, 1, 2, 'LG Oven', 13000, 10000, 4, '<h2>MC2146BP</h2>\r\n\r\n<h1>LG All In One Microwave Oven</h1>\r\n', 'lg_oven.jpg', ''),
(7, 1, 2, 'Phillips Toaster Oven', 150000, 13000, 1, '<h1>Phillips Toaster oven&nbsp;</h1>\r\n\r\n<p>HD4496</p>\r\n\r\n<p><strong>Delicious hot food easily</strong></p>\r\n\r\n<p>The multi-purpose toaster oven that does almost anything! Bakes, broils, toasts and warms, with lots of easy-cook features for delicious ', 'phillips_toaster_oven.jpg', ''),
(8, 1, 2, 'LG Microwave Oven', 12000, 9000, 8, '<h1><strong>LG Microwave Oven</strong></h1>\r\n\r\n<p><strong>Delicious hot food easily</strong></p>\r\n\r\n<p>The multi-purpose toaster oven that does almost anything! Bakes, broils, toasts and warms, with lots of easy-cook features for delicious results ev</p>\r\n', 'lg_microwave_oven.png', ''),
(9, 1, 4, 'Elica Kitchen Chimney', 30000, 27000, 2, '<h1>Elica Kitchen Chimney 60 cm 1100 m3/h (TCG BF 60 NERO, Black)</h1>\r\n\r\n<p>TCG kitchen chimney promises you with a power packed performance always! Taking good care of your kitchen environment by keeping it clean and tidy always is what this chimne</p>\r\n', 'elica_chimney.jpg', ''),
(10, 1, 4, 'Glen Curved Chimney', 17000, 15000, 0, '<h1>Glen 60cm, 1000 m3/h Curved Glass Kitchen Chimney (6071 EX Black, Baffle Filter, Push button control, Black)</h1>\r\n\r\n<ul>\r\n	<li>Type: Curved Glass Chimney, Wall Mounted| Colour: Black</li>\r\n	<li>Size: 60cm (2-4 burner stove for wall mounted chimneys)</li>\r\n	<li>Suction Capacity: 1000 m3/hr (For kitchen size 100-150 sqft &amp; medium frying/grilling)</li>\r\n	<li>Filter: Baffle Filters| Control Type: Push button control | Max noise(dB): 5</li>\r\n</ul>\r\n', 'glen_chimney.jpg', ''),
(11, 1, 4, 'TOPAZ Smart Chimney', 24000, 21000, 0, '<p>&nbsp;</p>\r\n\r\n<h1>TOPAZ SMART 3D T2S2 BK TC LTW</h1>\r\n\r\n<p><img alt=\"\" src=\"https://faberindia.com/images/FeatureIcon/Width-icon.jpg\" />&nbsp;Width:90 cm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://faberindia.com/images/FeatureIcon/Suction-icon.jpg\" />&nbsp;Suction:1095 m&sup3;/hr</p>\r\n\r\n<p><img alt=\"\" src=\"https://faberindia.com/images/FeatureIcon/Filter-icon.jpg\" />&nbsp;Filter:3 layer baffle filter&nbsp; &nbsp;<img alt=\"\" src=\"https://faberindia.com/images/FeatureIcon/Control-icon.jpg\" />&nbsp;Control:Touch</p>\r\n\r\n<p><img alt=\"\" src=\"https://faberindia.com/images/FeatureIcon/Lamp-icon.jpg\" />&nbsp;Lamp:LED 2 x 1.1 watt</p>\r\n', 'topaz_chimney.jpg', ''),
(12, 1, 4, 'Sunflame Glass Chimney', 12000, 9500, 13, '<h1>Sunflame 60 cm 1100 m&sup3;/hr Curved Glass Kitchen Chimney (BELLA 60 BK, 2 Baffle Filters, Black)</h1>\r\n\r\n<ul>\r\n	<li>Warranty: 5 years on Motor and 1 year on comprehensive from Date of Purchase</li>\r\n	<li>Size:60 cm (2-4 burner stove for wall mounted chimneys)</li>\r\n	<li>Type: Curved Glass, Wall Mounted</li>\r\n	<li>Voltage: 230V AC, 50Hz</li>\r\n</ul>\r\n', 'Sunflame_chimney.jpg', ''),
(13, 1, 3, 'Prestige Sandwich Toaster', 1500, 1300, 0, '<h1>Prestige PSMFB 800 Watt Sandwich Toaster with Fixed Plates, Black</h1>\r\n\r\n<ul>\r\n	<li>Content: Prestige sandwich toaster with fixed sandwich plate - Psmfb</li>\r\n	<li>Net quantity: 1 unit</li>\r\n	<li>Voltage: 230V; Wattage: 800W</li>\r\n	<li>Warranty: 1 year</li>\r\n	<li>Troubleshooting guidelines: Do not try to close the toaster with too much pressure. Do not use sharp objects on the non stick coating</li>\r\n	<li>Power - 800 watts, fixed sandwich, non stick heating plates</li>\r\n	<li>Great features - Elegant black finish body, fixed sandwich plates, non-stick heating plates</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Includes: Main unit, user manual, warranty card</li>\r\n	<li>Product dimensions: 25cm(Length)x22cm(Width)x9cm(Height)</li>\r\n	<li>Weight: 1.06kg</li>\r\n</ul>\r\n', 'prestige_toaster.jpg', ''),
(14, 1, 3, 'Philips 600 W Pop Up Toaster', 2150, 1900, 23, '<h1>Philips HD2583/90 (882258390280) 600 W Pop Up Toaster&nbsp;&nbsp;(Black)</h1>\r\n\r\n<p>This compact toaster comes with 8 settings and 2 large variable slots, so you can have even toasting result regardless of different bread types. The integrated bun rack also allows you to warm your favorite buns, pastries and rolls easily.</p>\r\n\r\n<ul>\r\n	<li>Number of Slices: 2</li>\r\n	<li>Power Consumption: 600 W</li>\r\n	<li>Auto Pop Up</li>\r\n	<li>Automatic Switch Off</li>\r\n	<li>H x W: 21.4 x 32.4 cm</li>\r\n</ul>\r\n', 'philips_popup_toaster.jpg', ''),
(15, 1, 3, 'Philips Stainless Steel Toaster', 2200, 2000, 0, '<h1>Philips Stainless Steel Toaster HD2628/22</h1>\r\n\r\n<p>Product Type&nbsp; &nbsp;Toaster</p>\r\n\r\n<p>Brand&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Philips</p>\r\n\r\n<p>Power&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 950W</p>\r\n\r\n<p>Color&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Stainless Steel</p>\r\n\r\n<p>Features&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cord storage, Automatic safety shut-off, 2 slot metal, 2 function, Brushed metal, Wide slot</p>\r\n', 'philips_stainless_toaster.jpg', ''),
(16, 1, 3, 'Whirlpool Digital Pop up Toaster', 7000, 5600, 5, '<h1>Whirlpool Digital Pop up Toaster</h1>\r\n\r\n<p>8- Browning levels<br />\r\nensuring ultimate flexibility, electronic control technology allows you to select one of 8- temperature settings so you can choose the exact temperature for your toast.<br />\r\n(Choose your ideal temperature from a choice of eight- setting levels)</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'whirlpool_toaster.png', ''),
(17, 2, 6, 'Cloudsell Royal Square Half Plate', 1099, 706, 0, '<h1>Cloudsell Royal Square Half Plate, Melamine, Printed Design, Pack of 6 pcs. Half Plate&nbsp;&nbsp;(6 Half Plate)</h1>\r\n\r\n<p>Cloudsell 6-Piece half Plates Set Bring an elegant sense of contemporary style to the kitchen and dining room with this everyday Cloudsell plate set. A nice choice for family meals and casual gatherings. High-Quality Melamine for Everyday Use The high-quality dinner plate set offers reliable strength and durability, as well as a lightweight design for easy handling. The melamine set is also BPA-free, so there&#39;s no need to worry about BPA seeping into food like with some plastic dishes and containers. Simple Style The sleek white color with Printed design complements existing dinnerware pieces, table linen, and surrounding decor, making it a versatile household item. Choosing sellers other than Cloudsell might result in quality difference. This is exclusive in house design &amp; product of Brand Cloudsell.</p>\r\n', 'plates1.jpeg', ''),
(18, 2, 6, 'AVORA Orange Leaf Half Plate', 999, 678, 0, '<h1>AVORA Orange Leaf Melamine Square Half Plate, Color Printed Serving Plates, White Half Plate&nbsp;&nbsp;(6 Half Plate)</h1>\r\nAvora Kitchenwre Printed Design Dinner Set Half Plate - Pack of 6 Pcs. Bring an elegant sense of contemporary style to the kitchen and dining room with this everyday Avora Kitchenwre plate set. A nice choice for family meals and casual gatherings. High-Quality Melamine for Everyday Use The high-quality dinner plate set offers reliable strength and durability, as well as a lightweight design for easy handling. The melamine set is also BPA-free, so there\'s no need to worry about BPA seeping into food like with some plastic dishes and containers. The sleek white color with Printed design complements existing dinnerware pieces, table linen, and surrounding decor, making it a versatile household item. Choosing sellers other than Avora Kitchenwre might result in quality difference. This is exclusive inhouse design & product of Brand Avora Kitchenwre\r\n', 'plates2.jpeg', ''),
(19, 2, 6, 'Coconut Thali 9\" Half Plate  ', 481, 270, 9, '<h1>Coconut Thali 9&quot; Half Plate &nbsp;(Half Plate)</h1>\r\n\r\n<p>Coconut is range of innovative and quality products for home and kitchen. Made from superior grade stainless, which is 100 % food grade. Stainless steel will not crack , rust or peel. Stainless steel thali of 9 inches</p>\r\n', 'plates3.jpeg', ''),
(20, 2, 6, 'Shiv Stainless Steel Plate Set of 6', 899, 750, 0, '<h1>Shiv Stainless Steel pav bhaji Plate/Snacks/Dinner/Serving Plate Set of 6 Size-4 Sectioned Plate&nbsp;&nbsp;(8 Sectioned Plate)</h1>\r\n', 'plates4.jpeg', ''),
(21, 2, 7, 'Shalom 221 Pack of 14 Dinner Set  (Melamine)', 1599, 1100, 10, '<h1>Shalom 221 Pack of 14 Dinner Set&nbsp;&nbsp;(Melamine)</h1>\r\n\r\n<p>Round dinner set white- microwave safe, 100% virgin food grade melamine, scratch resistant, freezer safe, dishwasher safe, refrigerator safe, non discolorable, odor free, convenient to use - refrigerator to microwave to dining table, convenient to use an. With Free Soup Bowl set</p>\r\n', 'bowl1.jpeg', ''),
(22, 2, 7, 'Borosil Mimosa Opalware Pudding Set,7-Pices', 550, 510, 0, '<h1>Larah by Borosil Mimosa Opalware Pudding Set, 7-Pieces, White</h1>\r\n\r\n<ul>\r\n	<li>100 percent bone ash free</li>\r\n	<li>Chip resistance</li>\r\n	<li>Dish washer safe</li>\r\n	<li>Microwave safe</li>\r\n	<li>Light weight</li>\r\n	<li>Extra strong - toughened glass</li>\r\n	<li>Color: White, Material: Opalware</li>\r\n	<li>Package Contents: 1 qty Serving Bowl &amp; 6 qty Veg Bowl</li>\r\n</ul>\r\n', 'bowl2.jpg', ''),
(23, 2, 7, 'Kitchen Pro Air Tight Lid Bowl 5 Pcs', 1000, 499, 10, '<h1>Kitchen Pro Stainless Steel Air Tight Lid Bowl Set of 5 Pcs</h1>\r\n\r\n<ul>\r\n	<li>Stain Resistant</li>\r\n	<li>Freezer Safe</li>\r\n	<li>Dishwasher Safe</li>\r\n	<li>Color: Multi, Material: Stainless Steel</li>\r\n	<li>Package Contents: Fuse</li>\r\n</ul>\r\n', 'bowl3.jpg', ''),
(24, 2, 7, 'Tupperware SS Plastic 1.5 L Bowl Set of 2', 960, 469, 0, '<h1>Tupperware SS Plastic 1.5 L Bowl (Yellow and Green) Set of 2</h1>\r\n\r\n<ul>\r\n	<li>Material: Plastic</li>\r\n	<li>Colour: Yellow and Green</li>\r\n	<li>Set of 2</li>\r\n</ul>\r\n', 'bowl4.jpg', ''),
(25, 2, 8, 'Solimo 6 Piece Stainless Steel Table Spoon & Fork Set', 500, 299, 0, '<h1>Solimo 6 Piece Stainless Steel Table Spoon &amp; Fork Set, Stripes (Contains: 3 Table Spoons, 3 Forks)</h1>\r\n\r\n<ul>\r\n	<li>6 piece cutlery set contains: 3 Table spoons, 3 Forks</li>\r\n	<li>Made from 100% food grade stainless steel which prevents rusting</li>\r\n	<li>1.5mm thick stem to ensure durability</li>\r\n	<li>Smooth edges for safety</li>\r\n	<li>Easy to clean &amp; elegant design makes it ideal for everyday use</li>\r\n</ul>\r\n', 'spoon2.jpg', ''),
(26, 2, 8, 'Ritu Aluminium Desert Spoon Set, 6-Pieces, Multicolor', 200, 192, 0, '<h1>Ritu Aluminium Desert Spoon Set, 6-Pieces, Multicolor</h1>\r\n\r\n<ul>\r\n	<li>Must for those who love Desserts</li>\r\n	<li>ISO 9001 : 2008 Certified Company</li>\r\n	<li>Color: Multicolor, Material: Aluminium</li>\r\n	<li>Package Contents: 6-Pieces Desert Spoon</li>\r\n</ul>\r\n', 'spoon4.jpg', ''),
(27, 2, 8, 'AGROMECH SS SODA SPOON Stainless Steel Long Drink Spoon Set', 299, 134, 0, '<h1>AGROMECH SS SODA SPOON Stainless Steel Long Drink Spoon Set&nbsp;&nbsp;(Pack of 6)</h1>\r\n', 'spoon1.jpeg', ''),
(28, 2, 8, 'MartsIndia Serving Spoons Set of 2 Indian Dinnerware Serveware Copper', 399, 250, 0, '<h1>MartsIndia Serving Spoons Set of 2 Indian Dinnerware Serveware Copper, Steel Serving Spoon Set&nbsp;&nbsp;(Pack of 2)</h1>\r\n\r\n<p>The Handmade Stainless Steel and Copper Serving Spoons are traditional Indian dinnerware serving pieces that are handcrafted using techniques that have been employed in North India for generations. A single Indian metalworker is responsible for making each spoon, resulting in a level of quality that just can&#39;t be duplicated in silverware that is made along assembly lines. With their generously sized bowls, the spoons make dishing out food quick and easy, and they are 8 inches long, which is the standard size for spoons of this kind.</p>\r\n', 'spoon3.jpeg', ''),
(29, 2, 9, 'Tuelip Stainless Steel Baby Fork, Fruit Fork, Salad Fork Set  (Pack of 6)', 599, 286, 0, '<h1>Tuelip Stainless Steel Baby Fork, Fruit Fork, Salad Fork Set&nbsp;&nbsp;(Pack of 6)</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>\r\n			<ul>\r\n				<li>Tuelip</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Number</td>\r\n			<td>\r\n			<ul>\r\n				<li>GP-Small-Fork-Set-6</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Color</td>\r\n			<td>\r\n			<ul>\r\n				<li>Silver</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>Baby Fork, Fruit Fork, Salad Fork</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Disposable</td>\r\n			<td>\r\n			<ul>\r\n				<li>No</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Material</td>\r\n			<td>\r\n			<ul>\r\n				<li>Stainless Steel</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'fork1.jpeg', ''),
(30, 2, 9, 'AVMART Premium Stainless Steel Set of 6 Table Fork', 699, 195, 0, '<h1>AVMART Premium Stainless Steel Set of 6 Table Fork Set Steel Dessert Fork Set&nbsp;&nbsp;(Pack of 6)</h1>\r\n\r\n<p>Make meals an elegant affair with well-designed, 100% food grade stainless steel cutlery. Add a touch of design to the table with practical, well-designed cutlery. These pieces have thick stems for durability, and soft-curved edges for safety, style and functionality. Our ranges will suit both basic and formal table settings.Each piece in the AVMART Cutlery Set has delicate and Antique design elements on them that will never go out of style no matter how often you use them. Moreover, these stylish pieces can be used everyday as they are designed with thick stems for durability. Its smooth edges also ensure safety.Switch to durability and ease of use with a AVMART Cutlery Set. 100% food grade stainless steel ensures the pieces are durable, easy to clean and don&rsquo;t rust over time.</p>\r\n', 'fork2.jpeg', ''),
(31, 2, 9, 'Solimo 6 Piece Stainless Steel Fork Set, Stripes, Silver', 500, 299, 0, '<h1>Solimo 6 Piece Stainless Steel Fork Set, Stripes, Silver</h1>\r\n\r\n<ul>\r\n	<li>6 piece cutlery set contains: 6 Forks</li>\r\n	<li>Made from 100% food grade stainless steel which prevents rusting</li>\r\n	<li>1.5mm thick stem to ensure durability</li>\r\n	<li>Smooth edges for safety</li>\r\n	<li>Easy to clean &amp; elegant design makes it ideal for everyday use</li>\r\n</ul>\r\n', 'fork3.jpg', ''),
(32, 2, 9, 'M2 Look Stainless Steel Fork Set of 6 Pices Table Fork', 399, 176, 0, '<h1>M2 Look Stainless Steel Fork Set of 6 Pcs</h1>\r\n\r\n<ul>\r\n	<li>Package Content: 6 Pcs Dinner Spoon</li>\r\n	<li>Easy to clean and the design makes it ideal for everyday use</li>\r\n	<li>Made from 100% food grade stainless steel which prevents rusting</li>\r\n	<li>Mirror finish, resists rust</li>\r\n	<li>Pairs With Any Dining / Cutlery Set &amp; Decor</li>\r\n</ul>\r\n', 'fork4.jpg', ''),
(33, 3, 10, 'Pigeon Essentials Tawa 28 cm diameter ', 900, 700, 0, '<h1>Pigeon Essentials Tawa 28 cm diameter&nbsp;&nbsp;(Aluminium, Non-stick, Induction Bottom)</h1>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>\r\n			<ul>\r\n				<li>Pigeon</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name</td>\r\n			<td>\r\n			<ul>\r\n				<li>Essentials</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Number</td>\r\n			<td>\r\n			<ul>\r\n				<li>12605</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Color</td>\r\n			<td>\r\n			<ul>\r\n				<li>Blue</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>Tawa</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pan Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>Flat</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Induction Bottom</td>\r\n			<td>\r\n			<ul>\r\n				<li>Yes</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Material</td>\r\n			<td>\r\n			<ul>\r\n				<li>Aluminium</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Handle Features</td>\r\n			<td>\r\n			<ul>\r\n				<li>Smooth Handles</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lid Included</td>\r\n			<td>\r\n			<ul>\r\n				<li>No</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Non-stick</td>\r\n			<td>\r\n			<ul>\r\n				<li>Yes</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'tawa1.jpeg', ''),
(34, 3, 10, 'Sumeet Nonstick Dosa Tawa 30 cm diameter', 920, 726, 0, '<h1>Sumeet 4mm Nonstick No. 13 SARAL Dosa Tawa 30 cm diameter&nbsp;&nbsp;(Aluminium, Non-stick)</h1>\r\n\r\n<p>Tava Pans Are Widely Used To Cook Dosas, Rotis And Parathas. Tava Pans Are Also Essential In Cooking Cutlets, Pancakes, French Toasts, and Many More. Aluminium Tava Are Particularly Preferred For Their Heavy Gauge And Well-Balanced Pans That Make Cooking Easy And The Results Delicious, Gives Nutritious Diet And A Worry-Free Living.Cooking In Non-Stick Cookware Reduces Oil Consumption And Thus Significantly Minimizes The Risks Of cholestrol-Related Diseases.A Perfect Stylish Heavy Duty Body Large Saral Tawa And Textured Aluminium Base Ensure Efficient And Even Heat Distribution Throughout. You&#39;ll Like The strong Loop Handles That Make It Easy To Pick Up And Move Around The Kitchen.Non-Stick Interior For Easy Cooking And Clean Up. Exceptionally Best Saral Tawa Pan Made With Quality Material For Long Last Performance. Size 30.5 Cm</p>\r\n', 'tawa2.jpeg', ''),
(35, 3, 10, 'Cello Non Stick Tawa Induction Base', 999, 699, 0, '<h1>Cello Non Stick Dosa Tawa Induction Base with Detachable Handle, Hammered Toned</h1>\r\n\r\n<ul>\r\n	<li>Non stick coating for healthy cooking</li>\r\n	<li>Scratch free outer hammer tone coating</li>\r\n	<li>Sturdy bakelite handles used for longer life</li>\r\n	<li>100 percent flameproof</li>\r\n	<li>Suitable for both induction and lpg stove</li>\r\n	<li>Easy to clean</li>\r\n	<li>Ergonomic detachable handles</li>\r\n	<li>Color: Black, Material: Aluminium</li>\r\n	<li>Package Contents: 1 Dosa Tawa</li>\r\n</ul>\r\n', 'tawa3.jpg', ''),
(36, 3, 10, 'Hawkins Futura Hard Anodised Tawa, 26cm, Black', 875, 743, 0, '<h1>Hawkins Futura Hard Anodised Tawa, 26cm, Black</h1>\r\n\r\n<ul>\r\n	<li>Not spoilt by heat</li>\r\n	<li>Gas Stovetop Compatible; Metal ladles can be used</li>\r\n	<li>Carton dimensions (WxDxH): 411 x 280 x 88 mm; Product weight in carton: 1.2 kg; Thickness: 4.88 mm</li>\r\n	<li>Non-toxic, non-staining</li>\r\n	<li>Stays looking new for years</li>\r\n	<li>Cooks some foods faster and crisper</li>\r\n	<li>Color: Black, Material: Hard-Anodized Aluminum</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Warranty Information: 5 Years</li>\r\n	<li>Futura is brought to you by Hawkins</li>\r\n</ul>\r\n', 'tawa4.jpg', ''),
(37, 3, 11, 'Impex Milk Pan 18 cm diameter Non-stick, Induction Bottom', 590, 425, 0, '<h1>Impex Milk Pan 18 cm diameter&nbsp;&nbsp;(Aluminium, Non-stick, Induction Bottom)</h1>\r\n\r\n<p>Brand</p>\r\n\r\n<ul>\r\n	<li>Impex</li>\r\n</ul>\r\n\r\n<p>Model Number</p>\r\n\r\n<ul>\r\n	<li>Aluminium Milk Pan 18 cm (IMP 1875)</li>\r\n</ul>\r\n\r\n<p>Color</p>\r\n\r\n<ul>\r\n	<li>Maroon</li>\r\n</ul>\r\n\r\n<p>Capacity</p>\r\n\r\n<ul>\r\n	<li>1.5 L</li>\r\n</ul>\r\n\r\n<p>Type</p>\r\n\r\n<ul>\r\n	<li>Pan</li>\r\n</ul>\r\n\r\n<p>Pan Type</p>\r\n\r\n<ul>\r\n	<li>Milk</li>\r\n</ul>\r\n\r\n<p>Induction Bottom</p>\r\n\r\n<ul>\r\n	<li>Yes</li>\r\n</ul>\r\n\r\n<p>Material</p>\r\n\r\n<ul>\r\n	<li>Aluminium</li>\r\n</ul>\r\n\r\n<p>Lid Included</p>\r\n\r\n<ul>\r\n	<li>No</li>\r\n</ul>\r\n\r\n<p>Non-stick</p>\r\n\r\n<ul>\r\n	<li>Yes</li>\r\n</ul>\r\n', 'pan1.jpeg', ''),
(38, 3, 11, 'SmartBuy Induction Bottom Pan 26 cm diameter ', 2000, 1789, 0, '<h1>SmartBuy Induction Bottom Pan 26 cm diameter&nbsp;&nbsp;(Aluminium, Non-stick, Induction Bottom)</h1>\r\n\r\n<p>This pan is compatible with, both, gas stoves and induction cooktops. As a result, you get the flexibility of cooking over almost any medium you want.</p>\r\n', 'pan2.jpeg', ''),
(39, 3, 11, 'TTK Prestige Platina Stainless Steel Fry Pan, 220 mm', 990, 877, 0, '<h1>TTK Prestige Platina Stainless Steel Fry Pan, 220 mm, Silver</h1>\r\n\r\n<ul>\r\n	<li>Even heat distribution</li>\r\n	<li>Strong and durable</li>\r\n	<li>Color: Silver, Material: Stainless Steel</li>\r\n	<li>Package Contents: 1-Piece Fry Pan (220mm)</li>\r\n	<li>Warranty: 5 year manufacturer warranty</li>\r\n</ul>\r\n', 'pan3.jpg', ''),
(40, 3, 11, 'Prestige Hard Anodised Tadka Pan, 100 mm', 390, 330, 0, '<h1>Prestige Hard Anodised Tadka Pan, 100 mm</h1>\r\n\r\n<ul>\r\n	<li>Content: Prestige Hard Anodised Tadka Pan Dia 100 mm</li>\r\n	<li>Net Quantity: 1 Unit</li>\r\n	<li>Color: Black, Material: Hard-Anodized Aluminum</li>\r\n	<li>Teflon (TM) Select 3 layer coating: Long lasting, metal spoon friendly non-stick coating</li>\r\n	<li>Riveted handle made of Bakelite: Cool touch handle that does not become loose over time</li>\r\n	<li>2-Way non-stick coating: Easy-cleaning even on the exterior</li>\r\n	<li>Heats evenly, cooks faster</li>\r\n</ul>\r\n', 'pan4.jpg', ''),
(41, 3, 12, 'Modebell Aluminium Cooking Kadhai - 1.70 LTR ', 700, 635, 0, '<h1>Modebell Premium Aluminium Cooking Kadhai - 1.70 LTR Silver</h1>\r\n\r\n<ul>\r\n	<li>Package content : 1medium size kitchen spicy cooking cum serving kadai ( 2 no.)</li>\r\n	<li>Pure grade aluminium enables faster and even heat distribution (Material- Aluminum, colour- silver )</li>\r\n	<li>Features:-long term valueable product ideal for day to day usage</li>\r\n	<li>Suitable for use on gas &amp; hot plates, vibrant color with designer soft touch handle</li>\r\n	<li>With its extra thick durable body and sleek rubberized handles, the cookware looks good and cooks even better. Add to that its spoon friendly and extremely durable body makes it perfect for every kitchen.</li>\r\n</ul>\r\n', 'kadhai1.jpg', ''),
(42, 3, 12, 'Sphere DEEP KADHAI WITH GLASS LID (2 LTR)', 900, 745, 0, '<h1>Sphere DEEP KADHAI WITH GLASS LID (2 LTR)</h1>\r\n\r\n<p>PFOA FREE GREBLON COATING.OUTER HTR ,STRONG AND UNBREAKABLE BAKELITE HANDLE &amp; METAL SPOON FRIENDLY.</p>\r\n', 'kadhai2.jpg', ''),
(43, 3, 12, 'Hawkins Futura Non-Stick Kadhai,2.5 Litr/26cm', 1175, 996, 0, '\r\n\r\n<ul>\r\n	<li>Made with a unique patented process</li>\r\n	<li>Gas Stovetop Compatible; Thickness: 3.25 mm ; Material: Hard Anodised ; Dishwasher Safe: No ; Induction Bottom: No</li>\r\n	<li>High quality non-stick coating (made in Germany)</li>\r\n	<li>Locked firmly into the tough hard anodised surface underneath</li>\r\n	<li>Lasts longer than ordinary non-stick</li>\r\n	<li>Conducts heat fast and evenly</li>\r\n	<li>Color: Black, Material: Non-Stick</li>\r\n</ul>\r\n', 'kadhai3.jpg', ''),
(44, 3, 12, 'Prestige Non-Stick Flat Base Kadai with Lid, 2.2 Liters', 1140, 899, 0, '<h1>Prestige Omega Select Plus Non-Stick Flat Base Kadai with Lid, 20cm, 2.2 Liters, Black</h1>\r\n\r\n<ul>\r\n	<li>Content: Omega Select Plus Kadai 200 mm with Lid ; 2.2 Litres; Base:25cm</li>\r\n	<li>Base: Non-Induction; Gas Stovetop Compatible ; Dishwasher Safe ; Other Features: Metal Spoon Friendly ; Handle Features: Sturdy Handles</li>\r\n	<li>Color: Black, Material: Nonstick</li>\r\n	<li>Scratch and abrasion resistant technology; Sturdy handles</li>\r\n	<li>Metal spoon friendly; Residue free cooking</li>\r\n</ul>\r\n', 'kadhai4.jpg', ''),
(45, 1, 13, 'Samsung 192 L 2 Star Direct-Cool Single-door ', 12999, 1599, 8, '<p>Samsung 192 L 2 Star Direct-Cool Single-door Refrigerator (RR19R2412SE/NL, Elective Silver)</p>\r\n', 'samsung3.jpg', ''),
(46, 1, 13, 'Samsung 253 Double Door', 31250, 28999, 5, '<p><span style=\"background-color:#ffffff; color:#111111\">Samsung 253 L 4 Star Frost Free Double Door Refrigerator(RT28M3424S8/HL, Elegant Inox, Inverter Compressor)</span></p>\r\n', 'doubles.png', ''),
(47, 4, 15, 'Twin Fork', 200, 150, 3, '<p>AAASSSSfgf fgggggggggggggggggg&nbsp;</p>\r\n', 'anjali.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `refundandreturn`
--

CREATE TABLE `refundandreturn` (
  `id` int(30) NOT NULL,
  `detail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refundandreturn`
--

INSERT INTO `refundandreturn` (`id`, `detail`) VALUES
(1, '<p>Returns Policy</p>\r\n\r\n<p>Returns is a scheme provided by respective sellers directly under this policy in terms of which the option of exchange, replacement and/ or refund is offered by the respective sellers to you. All products listed under a particular category may not have the same returns po'),
(2, '<p>All Electronics&nbsp;and Large appliances&nbsp;</p>\r\n\r\n<p>15 days Replacement only</p>\r\n\r\n<p>For products requiring installation, returns shall be eligible only when such products are installed by the brand&#39;s authorized personnel.</p>\r\n\r\n<p>In order to help you resolve issues with your produc');

-- --------------------------------------------------------

--
-- Table structure for table `return&refund`
--

CREATE TABLE `return&refund` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return&refund`
--

INSERT INTO `return&refund` (`id`, `detail`) VALUES
(1, '<p>Returns Policy</p>\r\n\r\n<p>Returns is a scheme provided by respective sellers directly under this policy in terms of which the option of exchange, replacement and/ or refund is offered by the respective sellers to you. All products listed under a particular category may not have the same returns policy. For all products, the policy on the product page shall prevail over the general returns policy. Do refer the respective item&#39;s applicable return policy on the product page for any exceptions to the table below.</p>\r\n'),
(2, '<p>All Electronics&nbsp;and Large appliances&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>15 days Replacement only</p>\r\n\r\n<p>For products requiring installation, returns shall be eligible only when such products are installed by the brand&#39;s authorized personnel.</p>\r\n\r\n<p>In order to help you resolve issues with your product, we may troubleshoot your product eithe&nbsp;&nbsp;&nbsp;r through online tools, over the phone, and/or through an in-person technical visit.</p>\r\n\r\n<p>If a defect is determined within the Returns Window, a replacement of the same model will be provided at no a&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `return_order`
--

CREATE TABLE `return_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(200) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `address` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_order`
--

INSERT INTO `return_order` (`id`, `order_id`, `amount`, `quantity`, `payment_type`, `address`, `status`, `date`) VALUES
(1, 'ORD1581509248381538505', '10000', '3', 'COD', 8, 'Return', '2020-02-15'),
(2, 'ORD15815093631079193947', '22000', '2', 'COD', 8, 'Return', '2020-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slide_image` varchar(250) NOT NULL,
  `slide_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_image`, `slide_name`) VALUES
(7, 'banner3.jpg', 'banner2'),
(9, 'banner1.jpg', 'slide1'),
(10, 'banner2.jpg', 'mix_items');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `s_id` int(30) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `s_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`s_id`, `c_name`, `s_name`) VALUES
(1, '1', 'Cooktops'),
(2, '1', 'Oven'),
(3, '1', 'Toasters '),
(4, '1', 'Chimney'),
(6, '2', 'Plates'),
(7, '2', 'Bowls'),
(8, '2', 'Spoons'),
(9, '2', 'Forks'),
(10, '3', 'Tawa'),
(11, '3', 'Pans'),
(12, '3', 'Kadhai'),
(13, '1', ' Rafrigerator'),
(15, '4', 'Fork');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL,
  `detail2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `detail`, `detail2`) VALUES
(1, '<p><strong><span style=\"font-size:16px\">Personal Information</span></strong></p>\r\n', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;When you use our Website, we collect and store&nbsp; your personal information which is provided by you from time to time .Our primary goal in doing so id to provide&nbsp;you a&nbsp;safe,efficient,smooth and coutomize experience.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `address`, `mobile`, `password`, `date`) VALUES
(1, 'Chirag kumar', 'Chiragkumar7691@gmail.com', 'sattadhare', '8141379057', '2020', '2020-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `visitore`
--

CREATE TABLE `visitore` (
  `id` int(11) NOT NULL,
  `visitore_store` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitore`
--

INSERT INTO `visitore` (`id`, `visitore_store`) VALUES
(1, 1472);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`chk_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freq`
--
ALTER TABLE `freq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_product`
--
ALTER TABLE `offer_product`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_re`
--
ALTER TABLE `order_re`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `refundandreturn`
--
ALTER TABLE `refundandreturn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return&refund`
--
ALTER TABLE `return&refund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_order`
--
ALTER TABLE `return_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitore`
--
ALTER TABLE `visitore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `chk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freq`
--
ALTER TABLE `freq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offer_product`
--
ALTER TABLE `offer_product`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_re`
--
ALTER TABLE `order_re`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `refundandreturn`
--
ALTER TABLE `refundandreturn`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `return&refund`
--
ALTER TABLE `return&refund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `return_order`
--
ALTER TABLE `return_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `s_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitore`
--
ALTER TABLE `visitore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
