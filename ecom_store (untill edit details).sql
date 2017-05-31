-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 05:20 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(8, 'Disposable Basic Sets', 'This set is consist of some basic items needed for dressing.'),
(9, 'Procedural Disposable', 'This set is consist of some basic items needed for dressing.'),
(10, 'Disposable Consumables', 'This set is consist of some basic items needed for dressing.'),
(11, 'Surgery Sets', 'This set is consist of some basic items needed for dressing.'),
(13, 'Premium Sets', 'Premium sets used in the operation theater.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(4, 'Sharvin singham', 'sharvinbala@gmail.com', 'sharvin', 'Malaysia', 'Kuala Lumpur', '1212121212', 'Kuala Lumpur', 'flag.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(1, 4, 175, 1972433315, 5, '2017-05-31 02:10:26', 'Complete'),
(2, 4, 66, 744736979, 2, '2017-05-31 02:11:30', 'Complete'),
(3, 4, 184, 990576475, 4, '2017-05-30 15:16:21', 'pending'),
(4, 4, 50, 58288485, 2, '2017-05-30 16:12:15', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 0, 0, '', 0, 0, '31/5/2017'),
(2, 0, 0, '', 0, 0, '31/5/2017'),
(3, 0, 0, '', 0, 0, '31/5/2017'),
(4, 0, 0, '', 0, 0, '1212'),
(5, 0, 0, '', 0, 0, '1212'),
(6, 0, 0, '', 0, 0, '222'),
(7, 0, 0, '', 0, 0, '222'),
(8, 0, 0, '', 0, 0, '222'),
(9, 0, 0, '', 0, 0, '222'),
(10, 0, 0, '', 0, 0, '222'),
(11, 0, 0, '', 0, 0, '31/5/2017'),
(12, 0, 0, '', 0, 0, '31/5/2017'),
(13, 0, 0, '', 0, 0, '123'),
(14, 1972433315, 125, 'Bank Code', 123132, 0, '31/5/2017'),
(15, 744736979, 125, 'Bank Code', 12312, 0, '31/5/2017');

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(2, 12, 12, '2017-05-30 07:41:45', 'Dental Examination 1', 'dental examination set.JPG', 'dental examination set.JPG', 'dental examination set.JPG', 46, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Product Code: DES 1</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Packing: 50 sets</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Contents:&nbsp;</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc Plastic Tray 500ml</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc Plastic Forceps With Center Lock</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc Disposable Probe</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc Dental Bib</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc C Fold Hand Towel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc Yellow Limpet Bag</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc Disposable Mouth Mirror</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp; &nbsp; &nbsp;1pc 3ply Face Mask With Shield</li>\r\n</ol>', 'dental examination set 1'),
(4, 14, 11, '2017-05-28 14:54:36', 'Catherization Set', 'catherization set.JPG', 'catherization set.JPG', 'catherization set.JPG', 35, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;"><strong>Product Code: CAT 1</strong></p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;"><strong>Packing: 25 sets</strong></p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;"><strong>Contents:</strong></p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Plastic Tray 750ml</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 700mm Sterile Field</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Patient Drape</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Yellow Limpet Bag</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 3ml Lubricating Gel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 10ml Syringer (Luer Lock)</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Urine Container</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Plastic Gallipot 60ml</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1 pair Surgical Gloves (Size: 7)</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Plastic Forceps With Center Lock</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Gauze Swab (7.5cm x 7.5cm x 8ply)</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">3pcs C Fold Hand Towel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">8pcs Cotton Balls - 0.5g each</li>\r\n</ol>', 'Catherization Set'),
(5, 15, 9, '2017-05-29 10:12:39', 'Disposable Chemo Sets', 'chemo-set.JPG', 'chemo-set.JPG', 'chemo-set.JPG', 25, '<p style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; color: #777777;">Product Code: CS 3</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; color: #777777;">Pacing: 25 sets/carton</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; color: #777777;">Contents:</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Chemo Gown</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Round Cap</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Disposable Goggles</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Chemo Gloves</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Boot Cover</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Sleeve Cover</li>\r\n</ol>', 'premium sets, chemo sets'),
(6, 11, 9, '2017-05-29 15:59:39', 'PD Dressing Set', 'PD-Dressing Set.JPG', 'PD-Dressing Set.JPG', 'PD-Dressing Set.JPG', 33, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Product Code: DDS-166-Basic</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Packing: 100 sets</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Contents:</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Hard Tray With 3 Compartments</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Sterile Field</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs 450mm Drape With 6cm Key Hole</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs C Fold Hand Towel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Gallipot 60ml</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pc Plastic Forceps With Center Lock</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">5pcs Gauze Swabs (5.0cm x 5.0cm x 8 ply)</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">10 pcs Cotton Balls 0.5g</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">15 pcs Gauze Swab (7.5cm x 7.5cm x 8 ply)</li>\r\n</ol>', 'pd dressing set'),
(7, 10, 9, '2017-05-31 03:14:05', 'Delivery Set', 'delivery set.JPG', 'delivery set.JPG', 'delivery set.JPG', 25, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Product Code: DVS 1</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Packing: 25 sets</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Contents:</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Plastic Tray 750ml</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 500mm SMS Drape</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Under Pad (17" x 24")</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Umbilical Cord Clamp</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Yellow Limpet Bag</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc String 1.5 meter</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Amniotic Hook</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">3pcs Sanitary Pad (Loop Type)</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">3pcs C Fold Hand Towel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">30cs Cotton Balls - 0.5g</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1 pair Surgical Gloves (Size 7)</li>\r\n</ol>', 'delivery set'),
(8, 14, 9, '2017-05-31 03:15:52', 'IV Introducer & Removal', 'iv introducer.JPG', 'iv introducer.JPG', 'iv introducer.JPG', 33, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Produce Code: IVS 1</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Packing: 100 sets</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Contents:</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Plaster</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Sterile Field</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Yellow Limpet Bag</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Plastic Gallipot 60ml</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 3 ply Non Woven Face Mask</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Cotton Balls - 0.5g each</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Gauze Swab (7.5cm x 7.5cm x 8 ply)</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Alchohol Swab</li>\r\n</ol>', 'in introducer'),
(9, 8, 8, '2017-05-31 03:18:09', 'Disposable Set 364', 'bds-364.JPG', 'bds-364.JPG', 'bds-364.JPG', 40, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Product Code: BDS 364 Premium</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Packing: 100 sets</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Contents:</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Hard Tray</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">3pcs Forceps</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">6pcs Cotton Balls</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">4pcs Gauze Balls</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">4pcs Gauze Swabs</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Limpet Bag</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Hand Towel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Patient Drape</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Sterile Field</li>\r\n</ol>', 'Disposable Set 364'),
(10, 8, 8, '2017-05-31 03:19:08', 'Disposable Set 254', 'BDS-254-Premium.JPG', 'BDS-254-Premium.JPG', 'BDS-254-Premium.JPG', 25, '<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Product Code: BDS-254-<a style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #333333;" href="https://hitechinfinity.000webhostapp.com/">Premium</a></p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Packing: 100 sets</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; min-height: 1px; color: #777777;">Contents:</p>\r\n<ol style="box-sizing: border-box; margin: 0px 0px 9px; padding: 0px 0px 0px 15px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #777777;">\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Hard Tray</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">2pcs Forceps</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">5pcs Cotton Balls</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">4pcs Gauze Swabs</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Limpet Bag</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc Hand Towel</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Patient Drape</li>\r\n<li style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">1pc 450mm Sterile Field</li>\r\n</ol>', 'basic disposable set');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(8, 'Disposable Basic Sets', 'This set is consist of some basic items needed for dressing.'),
(9, 'Pediatric Sets', 'This set is consist of some basic items needed for dressing.'),
(10, 'Gynecology Consumables', 'This set is consist of some basic items needed for dressing.'),
(11, 'Dialysis Set', 'This set is consist of some basic items needed for dressing.'),
(12, 'Dental Sets', 'This set is consist of some basic items needed for dressing.'),
(13, 'Dental Consumables', 'This set is consist of some basic items needed for dressing.'),
(14, 'Minor Surgery', 'This set is consist of some basic items needed for dressing.'),
(15, 'Premium Sets', 'Premium sets used often in the operation theater.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_int` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_int`, `slide_name`, `slide_image`) VALUES
(1, 'slide number 1', 'banner 1.jpg'),
(2, 'slide number 2', 'banner 2.jpg'),
(3, 'slide number 3', 'banner 3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_int`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_int` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
