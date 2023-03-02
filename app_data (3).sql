-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` longtext NOT NULL,
  `phone` varchar(25) NOT NULL,
  `date_added` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `priv` int(3) NOT NULL DEFAULT 0,
  `sales` varchar(10) NOT NULL DEFAULT '',
  `marketplace` varchar(10) NOT NULL DEFAULT '',
  `farms` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(10) NOT NULL DEFAULT '',
  `cities` varchar(10) NOT NULL DEFAULT '',
  `investments` varchar(10) NOT NULL DEFAULT '',
  `colormap` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `fullname`, `phone`, `date_added`, `type`, `priv`, `sales`, `marketplace`, `farms`, `users`, `cities`, `investments`, `colormap`, `status`) VALUES
(4, 'administracion@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Promoter', '08108846921', '02/05/2020', 'super admin', 11, '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_payments`
--

CREATE TABLE `admin_payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(25) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `description` varchar(100) NOT NULL DEFAULT '',
  `month` varchar(15) NOT NULL,
  `date_paid` varchar(20) NOT NULL,
  `week` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_payments`
--

INSERT INTO `admin_payments` (`id`, `payment_id`, `user_id`, `amount`, `description`, `month`, `date_paid`, `week`, `year`, `status`) VALUES
(1, '5eb76493c9f4c', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '09-May-2020', '19', '2020', 'paid'),
(2, '5eb764cdcab34', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '09-May-2020', '19', '2020', 'paid'),
(3, '5eb7d8c0cca87', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(4, '5eb7d96629d53', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(5, '5eb7d9bfa86e4', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(6, '5eb7d9c7730ae', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(7, '5eb7da14a30b8', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(8, '5eb7da4d38fa2', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(9, '5eb7da6f78c91', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(10, '5eb7dabf4c45b', 'POMG-1588385014', 30, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid'),
(11, '5eb7db68e91c3', 'POMG-1588385014', 60, 'Promotion commisison', '2020-May', '10-May-2020', '19', '2020', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `advert_id` varchar(25) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `channel` varchar(50) NOT NULL DEFAULT '',
  `ad_type` varchar(50) NOT NULL DEFAULT '',
  `advertiser_id` varchar(25) NOT NULL DEFAULT '',
  `file` varchar(500) NOT NULL DEFAULT '',
  `file_type` varchar(25) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `link` varchar(500) NOT NULL DEFAULT 'n/a',
  `amount_per_share` double NOT NULL DEFAULT 0,
  `budget` double NOT NULL DEFAULT 0,
  `no_of_shares` int(11) NOT NULL DEFAULT 0,
  `amount_spent` double NOT NULL DEFAULT 0,
  `country` varchar(50) NOT NULL DEFAULT '',
  `month_created` varchar(25) NOT NULL DEFAULT '',
  `status` varchar(25) NOT NULL DEFAULT '',
  `date_created` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `advert_id`, `title`, `channel`, `ad_type`, `advertiser_id`, `file`, `file_type`, `description`, `link`, `amount_per_share`, `budget`, `no_of_shares`, `amount_spent`, `country`, `month_created`, `status`, `date_created`) VALUES
(1, '5eb1b5209a727', 'Man kills himself and ran away', 'n/a', 'viral', 'POMG-1588384756', 'n/a', 'n/a', 'Man kills himself and ran away Man kills himself and ran away Man kills Man kills himself and ran away Man kills himself and ran away Man kills himself and ran away Man kills himself and ran away. Man kills himself and ran away. Man kills himself and ran away. Man kills himself and ran away. Man kills himself and ran awayhimself and ran away Man kills himself and ran away. Man kills himself and ran away. Man kills himself and ran away.  Man kills himself and ran away. Man kills himself and ran away', 'https://postomg.com', 100, 5000, 0, 0, '', 'May-2020', 'sharing', '05-May-2020'),
(2, '5eb1b5b46db44', 'Sinzu wire wire on it again as German client pays', 'n/a', 'viral', 'POMG-1588384756', 'n/a', 'n/a', 'Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays  Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays Sinzu wire wire on it again as German client pays ', 'https://postomg.com', 50, 1000, 0, 0, '', 'May-2020', 'pending', '05-May-2020'),
(3, '5eb1c055c1162', 'Apple goodness', 'instagram', 'content', 'POMG-1588384756', 'apple.jpg', 'upload', 'The best deal you can ever get The best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\n', 'https://postomg.com', 50, 2000, 0, 0, '', 'May-2020', 'pending', '05-May-2020'),
(4, '5eb1c1884b5ca', 'iPhone-X pro hot deal', 'twitter', 'content', 'POMG-1588384756', 'ip3.jpg', 'upload', 'The best deal you can ever get The best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\nThe best deal you can ever get\r\n', 'https://postomg.com', 100, 3000, 8, 800, '', 'May-2020', 'sharing', '05-May-2020'),
(6, '5eb1c32835cc9', 'Macbood hot deal', 'facebook', 'content', 'POMG-1588384756', 'working-macbook-computer-keyboard-34577.jpg', 'upload', 'Contact now to grab a copy of this goodness.', 'https://postomg.com', 200, 5000, 1, 200, '', 'May-2020', 'sharing', '05-May-2020'),
(7, '5eb1c4038942c', 'Working galore', 'facebook', 'content', 'POMG-1588384756', '5eb1c4038942c.jpg', 'upload', 'Work and earn', 'https://facebook.com', 50, 1000, 0, 0, '', 'May-2020', 'pending', '05-May-2020'),
(8, '5eb1cde3b3cac', 'Wonderful piece', 'instagram', 'content', 'POMG-1588384756', 'https://postomg.com//ads/73696521382475498100.jpg', 'postomg', 'Get your self a copy this beauty', 'https://postomg.com/40/costumes', 50, 1000, 0, 0, '', 'May-2020', 'pending', '05-May-2020'),
(9, '5eb5dc200ae03', 'Of lagos', 'n/a', 'youtube', 'POMG-1588384756', 'n/a', 'n/a', 'Mayor the rapper, of lagos mayorkun', 'https://www.youtube.com/watch?v=kW0ArGFsxw8', 50, 2000, 0, 0, '', 'May-2020', 'sharing', '08-May-2020'),
(10, '5eb6936bb5d03', 'Mayokun', 'n/a', 'youtube', 'POMG-1588384756', 'n/a', 'n/a', 'teytwey', 'https://www.youtube.com/watch?v=kW0ArGFsxw8', 50, 1000, 0, 0, '', 'May-2020', 'sharing', '09-May-2020'),
(11, '5eb7de8b9a3c3', 'World smartest man is a dumb ass', 'n/a', 'viral', 'POMG-1588385014', 'n/a', 'n/a', 'A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck, A study showed that the world\'s smartest man is dumb as fuck.', 'https://google.com', 25, 5000, 0, 0, '', 'May-2020', 'pending', '10-May-2020');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '',
  `p_id` int(11) NOT NULL DEFAULT 0,
  `staff_id` varchar(50) NOT NULL DEFAULT '',
  `admin_id` int(11) NOT NULL DEFAULT 0,
  `qty` double NOT NULL DEFAULT 1,
  `price` double NOT NULL DEFAULT 0,
  `og_price` double NOT NULL DEFAULT 0,
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `date_added` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `p_id`, `staff_id`, `admin_id`, `qty`, `price`, `og_price`, `shop_id`, `date_added`) VALUES
(106, '5ed50161d04c5', 1207, '', 11, 1, 220000, 220000, 0, '27-Aug-2020'),
(107, '5edf7e131a9cb', 1212, '', 11, 1, 245000, 245000, 0, '27-Aug-2020'),
(108, '5ee89ed72a76f', 1213, '', 11, 1, 150000, 150000, 0, '27-Aug-2020'),
(109, '5eecf4cc74265', 1215, '', 11, 1, 75000, 75000, 0, '27-Aug-2020');

-- --------------------------------------------------------

--
-- Table structure for table `category_four`
--

CREATE TABLE `category_four` (
  `id` int(11) NOT NULL,
  `category_three` int(11) NOT NULL,
  `store_key` varchar(255) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `cr_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_four`
--

INSERT INTO `category_four` (`id`, `category_three`, `store_key`, `category_name`, `cr_date`) VALUES
(1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Hp Laptops', '13-12-2022'),
(2, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Dell Laptops', '13-12-2022'),
(3, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Asus Laptop', '13-12-2022'),
(4, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'MSI Laptop', '13-12-2022'),
(5, 2, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Benz', '13-12-2022'),
(6, 2, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Vw Be', '13-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `category_one`
--

CREATE TABLE `category_one` (
  `id` int(11) NOT NULL,
  `store_key` varchar(255) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `cr_date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_one`
--

INSERT INTO `category_one` (`id`, `store_key`, `category_name`, `cr_date`, `status`) VALUES
(1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Electronics', '13-12-2022', 1),
(2, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Cars', '13-12-2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_three`
--

CREATE TABLE `category_three` (
  `id` int(11) NOT NULL,
  `category_two` int(11) NOT NULL,
  `store_key` varchar(255) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `cr_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_three`
--

INSERT INTO `category_three` (`id`, `category_two`, `store_key`, `category_name`, `cr_date`) VALUES
(1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Laptops', '13-12-2022'),
(2, 2, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Home Trucks', '13-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `category_two`
--

CREATE TABLE `category_two` (
  `id` int(11) NOT NULL,
  `category_one` int(11) NOT NULL,
  `store_key` varchar(255) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `cr_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_two`
--

INSERT INTO `category_two` (`id`, `category_one`, `store_key`, `category_name`, `cr_date`) VALUES
(1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Gadgets', '13-12-2022'),
(2, 2, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Trucks', '13-12-2022'),
(3, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Iphones', '19-12-2022'),
(4, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Samsung', '19-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `store_key` varchar(220) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT 0,
  `date_added` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `client_type` varchar(25) NOT NULL,
  `client_key` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `store_key`, `client_name`, `phone`, `email`, `status`, `date_added`, `address`, `client_type`, `client_key`) VALUES
(6, '6241e664ef7671e9945829bd1d401f275bc7693e', 'okoro nnanna', '0930030302', 'okoro@yahoo.com', 1, '20-May-2020', 'now 1 wne ', 'Supplier', '605813'),
(7, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Lawrence', '0967487847', 'lawrence28@gmail.com', 1, '20-May-2020', 'No1 new cloase aba road', 'Supplier', '5ec584bf09a77'),
(8, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Lingard Jesse', '94768496749', 'lingz@gmail.com', 1, '20-May-2020', 'Manchester, England', 'Supplier', '5ec58cffc904f'),
(9, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Isaac Osaro', '094756475', 'osaro@gmail.com', 1, '20-May-2020', 'Eleme, portharcourt', 'Customer', '5ec5b84e81b94'),
(10, '6241e664ef7671e9945829bd1d401f275bc7693e', 'King Joshua', '035685676', 'king@gmail.com', 1, '20-May-2020', 'Portharcourt, rivers state', 'Customer', '5ec5b86817960'),
(12, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Joshua Beinmote', '0975865867', 'josh@gmail.com', 1, '17-Jun-2020', 'NTA road, portharcourt', 'Customer', '5eea32a9dfb43');

-- --------------------------------------------------------

--
-- Table structure for table `customads_category`
--

CREATE TABLE `customads_category` (
  `id` int(11) NOT NULL,
  `user_key` varchar(222) NOT NULL,
  `category_postomg` varchar(50) NOT NULL,
  `custom_code` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `date_added` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customads_category`
--

INSERT INTO `customads_category` (`id`, `user_key`, `category_postomg`, `custom_code`, `status`, `date_added`) VALUES
(67, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Finest Seller', 2291, 1, '19-12-2022'),
(68, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Popular', 8587, 1, '19-12-2022'),
(69, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Top Sellers', 4823, 1, '19-12-2022'),
(71, '6241e664ef7671e9945829bd1d401f275bc7693e', 'New Arrivals', 6506, 1, '19-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `customer_lentose`
--

CREATE TABLE `customer_lentose` (
  `id` int(11) NOT NULL,
  `key_grant` varchar(256) NOT NULL,
  `vendor_code` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(33) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `phone2` varchar(33) NOT NULL,
  `status` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `created_on` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_lentose`
--

INSERT INTO `customer_lentose` (`id`, `key_grant`, `vendor_code`, `vendor_name`, `address`, `city`, `state`, `zip`, `phone`, `phone2`, `status`, `note`, `email`, `website`, `created_on`) VALUES
(5, '6241e664ef7671e9945829bd1d401f275bc7693e', 775763, 'Xewilson adaes', 'No112 Elekiahia phcs', 'phcen', 'River State', '234', '+9038874848', '+23480372625363', '', 'A this is a working page', 'Awilson@gmail.com', 'www.wilson.com', '22-11-2022'),
(6, '6241e664ef7671e9945829bd1d401f275bc7693e', 775763, 'edwin adaexxxx', 'No112 Elekiahia phc', 'phc', 'River State', '234', '09038874848', '08037262536', '', 'This is a working page', 'Wilson@gmail.com', 'www.Wilson.com', '22-11-2022'),
(10, '6241e664ef7671e9945829bd1d401f275bc7693e', 376528, 'wefagfd', 'fkiysdfdsafsdf', 'fhjkigf', 'hgf', 'hgf', 'gh', 'f', '', 'hgjf', 'hgfd@mail.com', 'hgj', '24-11-2022'),
(11, '6241e664ef7671e9945829bd1d401f275bc7693e', 222949, 'edwin eke', 'noo12233', 'lhgli', 'ug', 'ilgv', 'ug', 'kj', '', 'ji', 'bjv@gmail.com', '', '28-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `custom_category`
--

CREATE TABLE `custom_category` (
  `id` int(11) NOT NULL,
  `user_key` varchar(222) NOT NULL,
  `category_postomg` varchar(50) NOT NULL,
  `custom_code` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `date_added` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `custom_category`
--

INSERT INTO `custom_category` (`id`, `user_key`, `category_postomg`, `custom_code`, `status`, `date_added`) VALUES
(32, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Charger', 832283, 1, '27-May-2020'),
(33, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Samsung phones', 778321, 1, '27-May-2020'),
(39, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Apples', 567173, 1, '27-May-2020'),
(52, '6241e664ef7671e9945829bd1d401f275bc7693e', 'beans', 829348, 0, '27-May-2020'),
(53, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Sony phones', 0, 1, '27-May-2020'),
(54, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Nokia', 0, 1, '19-Jun-2020'),
(65, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Jbl Speackers', 11602, 1, '21-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `debt_payments`
--

CREATE TABLE `debt_payments` (
  `id` int(11) NOT NULL,
  `debt_id` int(11) NOT NULL DEFAULT 0,
  `amount_paid` double NOT NULL DEFAULT 0,
  `payment_method` varchar(15) NOT NULL DEFAULT 'Cash',
  `date_paid` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `debt_payments`
--

INSERT INTO `debt_payments` (`id`, `debt_id`, `amount_paid`, `payment_method`, `date_paid`) VALUES
(1, 2, 25000, 'Cash', '13-Jun-2020'),
(2, 3, 35000, 'Cash', '13-Jun-2020'),
(3, 2, 10000, 'Cash', '14-Jun-2020'),
(4, 2, 5000, 'Bank payment', '19-Jun-2020');

-- --------------------------------------------------------

--
-- Table structure for table `debt_profile`
--

CREATE TABLE `debt_profile` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `store_key` varchar(50) NOT NULL DEFAULT '',
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `opened_by` varchar(50) NOT NULL DEFAULT '',
  `amount_total` double NOT NULL DEFAULT 0,
  `amount_paid` double NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0,
  `date_opened` varchar(25) NOT NULL DEFAULT '',
  `date_cleared` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `debt_profile`
--

INSERT INTO `debt_profile` (`id`, `customer_id`, `store_key`, `shop_id`, `opened_by`, `amount_total`, `amount_paid`, `status`, `date_opened`, `date_cleared`) VALUES
(2, 9, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '11', 100000, 65000, 0, '13-Jun-2020', ''),
(3, 10, '6241e664ef7671e9945829bd1d401f275bc7693e', 8, '11', 50000, 50000, 1, '13-Jun-2020', '13-Jun-2020');

-- --------------------------------------------------------

--
-- Table structure for table `e_shop_carts`
--

CREATE TABLE `e_shop_carts` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` float NOT NULL,
  `user_key` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `cus_email` varchar(150) NOT NULL,
  `added_date` varchar(40) NOT NULL,
  `unpaid` varchar(20) NOT NULL DEFAULT 'no',
  `paid` varchar(22) NOT NULL DEFAULT 'no',
  `approved` varchar(22) NOT NULL DEFAULT 'no',
  `delivering` varchar(22) NOT NULL DEFAULT 'no',
  `delivered` varchar(22) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_shop_carts`
--

INSERT INTO `e_shop_carts` (`id`, `pid`, `qty`, `user_key`, `amount`, `cus_email`, `added_date`, `unpaid`, `paid`, `approved`, `delivering`, `delivered`) VALUES
(3, 0, 0, '', 0, '', '', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `e_shop_members`
--

CREATE TABLE `e_shop_members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email_e` varchar(255) NOT NULL,
  `password_e` varchar(100) NOT NULL,
  `host_key` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_shop_members`
--

INSERT INTO `e_shop_members` (`id`, `first_name`, `last_name`, `email_e`, `password_e`, `host_key`, `created_date`) VALUES
(1, 'edwin', 'ekeh', 'edwineke25@gmail.com', '12345', '6241e664ef7671e9945829bd1d401f275bc7693e', '2023-01-01 23:02:35'),
(2, 'alex', 'obinna', 'alex@gmail.com', '12345', '6241e664ef7671e9945829bd1d401f275bc7693e', '2023-01-01 23:02:35'),
(3, '', '', '', '', '', '2023-01-10 12:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `log_id` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  `player` varchar(100) NOT NULL,
  `player_role` varchar(100) NOT NULL,
  `time_of_action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `log_id`, `action`, `player`, `player_role`, `time_of_action`) VALUES
(16, 'HAL-H1TYL5SB6W', 'Land title declined', 'Elochukwu Azubuike', 'lawyer', '22-Oct-2019'),
(17, 'HAL-RHSF6BUK8V', 'Land title declined', 'Elochukwu Azubuike', 'lawyer', '23-Oct-2019'),
(18, 'HAL-51MNR8CYBW', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '23-Oct-2019'),
(19, 'HAL-GIOU08ERLS', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '23-Oct-2019'),
(20, 'HAL-GIOU08ERLS', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '23-Oct-2019'),
(21, 'HAL-LHUX7MYZ9B', 'Land title verification request', 'Message Akunna', 'developer', '23-Oct-2019'),
(22, 'HAL-LHUX7MYZ9B', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '23-Oct-2019'),
(23, 'HAL-LHUX7MYZ9B', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '23-Oct-2019'),
(24, 'HAL-W6FUM934BD', 'Land legal search request', 'Message Akunna', 'developer', '28-Oct-2019'),
(25, 'HAL-528QBAJLGW', 'Land legal and valuation search request', 'Message Akunna', 'developer', '28-Oct-2019'),
(26, 'HAL-2OSAYIH8DL', 'Land legal search request', 'Message Akunna', 'developer', '28-Oct-2019'),
(27, 'HAL-I4QKYF9H28', 'Land valuation request', 'Message Akunna', 'developer', '28-Oct-2019'),
(28, 'HAL-G9LOYCVFQN', 'Land legal search request', 'Message Akunna', 'developer', '28-Oct-2019'),
(29, '', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '01-Nov-2019'),
(30, '', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '01-Nov-2019'),
(31, 'HAL-G9LOYCVFQN', 'Land title approved', 'Elochukwu Azubuike', 'lawyer', '01-Nov-2019'),
(32, 'HAL-I4QKYF9H28', 'Land title approved', 'Maven Harry', 'valuer-surveyor', '01-Nov-2019'),
(33, 'HGA_FSGGS', 'Mortgage Initial payment made', 'Elochukwu Azubuike', 'user', '01-Nov-2019'),
(34, 'HGA_FSGGS', 'Mortgage monthly payment made', 'ELochukwu Azubuike', 'user', '01-Nov-2019'),
(35, 'MTA-Z7OSBQ2KF4', 'Initial mortgage payment', 'Alisi Daniel', 'user', '09-Nov-2019'),
(36, 'HAL-2OSAYIH8DL', 'Land legal search reported', 'Elochukwu Azubuike', 'lawyer', '12-Nov-2019'),
(37, 'HAL-2OSAYIH8DL', 'Land valuation search reported', 'Maven Harry', 'valuer-surveyor', '12-Nov-2019'),
(38, 'HAL-T1LZO4HFAK', 'Land title verification process started', 'Elochukwu Azubuike', 'lawyer', '14-Nov-2019'),
(39, 'HAL-H1TYL5SB6W', 'Land title verification modification', 'Message Akunna', 'developer', '15-Nov-2019'),
(40, 'MTA-R2K8FUTLJD', 'Initial mortgage payment', 'Alisi Daniel', 'user', '22-Nov-2019'),
(41, 'MTA-R2K8FUTLJD', 'Monthly mortgage payment', 'Alisi Daniel', 'user', '22-Nov-2019'),
(42, 'MTA-IF201NOEU5', 'Appliction Approved', 'HA-DKXRNAB7W9', 'mortgage-bank', '25-Nov-2019'),
(43, 'MTA-IF201NOEU5', 'Initial mortgage payment', 'Alisi Daniel', 'user', '25-Nov-2019'),
(44, 'MTA-IF201NOEU5', 'Refinance Request', 'HA-DKXRNAB7W9', 'mortgage-bank', '25-Nov-2019'),
(45, 'MTA-IF201NOEU5', 'Refinance Request', 'HA-DKXRNAB7W9', 'mortgage-bank', '25-Nov-2019'),
(46, 'MTA-IF201NOEU5', 'Refinance Request', 'HA-DKXRNAB7W9', 'mortgage-bank', '25-Nov-2019'),
(47, 'MTA-SY21VI54O6', 'Appliction Approved', 'HA-DKXRNAB7W9', 'mortgage-bank', '26-Nov-2019'),
(48, 'MTA-SY21VI54O6', 'Initial mortgage payment', 'Alisi Daniel', 'user', '26-Nov-2019'),
(49, 'HAL-8TCODK14A6', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(50, 'HAL-7ZXDCLV56K', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(51, 'HAL-S9G2P68KVJ', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(52, 'HAL-58S4J3N2AV', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(53, 'HAL-KT3AB9PDCX', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(54, 'HAL-LPTCN192JU', 'Land title verification request', 'Alisi Daniel', 'user', '10-Dec-2019'),
(55, 'HAL-8SQZ1K47N6', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(56, 'HAL-ZXFUY5RPN2', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(57, 'HAL-W3BX6PM4A8', 'Land title verification request', 'Alisi Daniel', 'user', '10-Dec-2019'),
(58, 'HAL-2J7ZMVN1ST', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(59, 'HAL-QU5IBTHC1X', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(60, 'HAL-QA32RG0WPF', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(61, 'HAL-G5FUN61S7T', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(62, 'HAL-T463HOB79S', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(63, 'HAL-6YFWH1RBVK', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(64, 'HAL-W3BX6PM4A8', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '10-Dec-2019'),
(65, 'HAL-YQSCWDEBP4', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(66, 'HAL-W3BX6PM4A8', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '10-Dec-2019'),
(67, 'HAL-Y2MOE0791F', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(68, 'HAL-LPTCN192JU', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '10-Dec-2019'),
(69, 'HAL-LPTCN192JU', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '10-Dec-2019'),
(70, 'HAL-WZ45MAJ7SF', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(71, 'HAL-T3AY1SILG4', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(72, 'HAL-CVNHPQMK35', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(73, 'HAL-VUTE4FD76L', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(74, 'HAL-Z0F23XPCBA', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(75, 'HAL-OD3YNM2ZT1', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(76, 'HAL-ZF24KXUJ3R', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(77, 'HAL-HLNP0Y9K8T', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(78, 'HAL-RDE6HCVJ30', 'Land title verification request', 'Message Akunna', 'developer', '10-Dec-2019'),
(79, 'HAL-0R1BWK8YXL', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(80, 'HAL-1PV4N78EG5', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(81, 'HAL-EAF2XS1MI9', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(82, 'HAL-8RUJA67WDB', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(83, 'HAL-QZYOUTGM6V', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(84, 'HAL-U6VK7DZMAH', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(85, 'HAL-5L4JMFZYVE', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(86, 'HAL-48MUDI7Z32', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(87, 'HAL-HG09BD4V3Q', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(88, 'HAL-QTJ4SE36GL', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(89, 'HAL-MWOSDBIE8J', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(90, 'HAL-LQN3MHRWAD', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(91, 'HAL-CZX6DJGQYE', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(92, 'HAL-DRIPK7BUG1', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(93, 'HAL-B02OUXI5G6', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(94, 'HAL-2S3ENQX5V1', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(95, 'HAL-HBZMJOLDQU', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(96, 'HAL-XL7NOB6KD0', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(97, 'HAL-ZVIWKGLYT2', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(98, 'HAL-1EVGIXK803', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(99, 'HAL-J1O2SBW6K5', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(100, 'HAL-OMNDL6I258', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(101, 'HAL-3PJHDQOTGI', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(102, 'HAL-J5ZA8YIO1T', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(103, 'HAL-QZB8S1HX52', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(104, 'HAL-1XQCVMAU7P', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(105, 'HAL-TPCUHZXSOD', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(106, 'HAL-NZK6HRYJPA', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(107, 'HAL-84WMF0IKZG', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(108, 'HAL-JZ1OKAGRVH', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(109, 'HAL-SI8XB02PAQ', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(110, 'HAL-WMZKNILO9P', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(111, 'HAL-1SBWAD2ELG', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(112, 'HAL-TNQWM9SO34', 'Land title verification request', 'Message Akunna', 'developer', '11-Dec-2019'),
(113, 'HAL-0T4X5DYQRV', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(114, 'HAL-8A39G16KFV', 'Land title verification request', 'Alisi Daniel', 'user', '11-Dec-2019'),
(115, 'HAL-1EVGIXK803', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(116, 'HAL-1EVGIXK803', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(117, 'HAL-ZVIWKGLYT2', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(118, 'HAL-ZVIWKGLYT2', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(119, 'HAL-XL7NOB6KD0', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(120, 'HAL-XL7NOB6KD0', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(121, 'HAL-HBZMJOLDQU', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(122, 'HAL-HBZMJOLDQU', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(123, 'HAL-7LJIKW91VF', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(124, 'HAL-2S3ENQX5V1', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(125, 'HAL-2S3ENQX5V1', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(126, 'HAL-B02OUXI5G6', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(127, 'HAL-B02OUXI5G6', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(128, 'HAL-MLXW62BASG', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(129, 'HAL-G5FUN61S7T', 'Land title verification process started', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(130, 'HAL-G5FUN61S7T', 'Land title approved', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(131, 'HAL-QA32RG0WPF', 'Land title verification process started', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(132, 'HAL-K6J5W4ANRT', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(133, 'HAL-QA32RG0WPF', 'Land title approved', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(134, 'HAL-QU5IBTHC1X', 'Land title verification process started', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(135, 'HAL-QU5IBTHC1X', 'Land title approved', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(136, 'HAL-2J7ZMVN1ST', 'Land title verification process started', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(137, 'HAL-2J7ZMVN1ST', 'Land title verification process started', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(138, 'HAL-2J7ZMVN1ST', 'Land title approved', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(139, 'HAL-ZXFUY5RPN2', 'Land title verification process started', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(140, 'HAL-DOS120KHZC', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(141, 'HAL-ZXFUY5RPN2', 'Land title approved', 'Houseafrica Lawyer', 'lawyer', '13-Dec-2019'),
(142, 'HAL-6YFWH1RBVK', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(143, 'HAL-T463HOB79S', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(144, 'HAL-T463HOB79S', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(145, 'HAL-6YFWH1RBVK', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(146, 'HAL-Q36AOJ05TL', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(147, 'HAL-VUTE4FD76L', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(148, 'HAL-CVNHPQMK35', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(149, 'HAL-VUTE4FD76L', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(150, 'HAL-CVNHPQMK35', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(151, 'HAL-T3AY1SILG4', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(152, 'HAL-T3AY1SILG4', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(153, 'HAL-WZ45MAJ7SF', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(154, 'HAL-Y2MOE0791F', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(155, 'HAL-Y2MOE0791F', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(156, 'HAL-WZ45MAJ7SF', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(157, 'HAL-RDE6HCVJ30', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(158, 'HAL-RDE6HCVJ30', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(159, 'HAL-HLNP0Y9K8T', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(160, 'HAL-ZF24KXUJ3R', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(161, 'HAL-HLNP0Y9K8T', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(162, 'HAL-ZF24KXUJ3R', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(163, 'HAL-OD3YNM2ZT1', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(164, 'HAL-Z0F23XPCBA', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(165, 'HAL-OD3YNM2ZT1', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(166, 'HAL-Z0F23XPCBA', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(167, 'HAL-QZYOUTGM6V', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(168, 'HAL-8RUJA67WDB', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(169, 'HAL-EAF2XS1MI9', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(170, 'HAL-1PV4N78EG5', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(171, 'HAL-0R1BWK8YXL', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(172, 'HAL-QZYOUTGM6V', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(173, 'HAL-8RUJA67WDB', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(174, 'HAL-EAF2XS1MI9', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(175, 'HAL-1PV4N78EG5', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(176, 'HAL-0R1BWK8YXL', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(177, 'HAL-HG09BD4V3Q', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(178, 'HAL-48MUDI7Z32', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(179, 'HAL-5L4JMFZYVE', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(180, 'HAL-U6VK7DZMAH', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(181, 'HAL-HG09BD4V3Q', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(182, 'HAL-48MUDI7Z32', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(183, 'HAL-5L4JMFZYVE', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(184, 'HAL-U6VK7DZMAH', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(185, 'HAL-PWBUKACN8Y', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(186, 'HAL-QZB8S1HX52', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(187, 'HAL-J5ZA8YIO1T', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(188, 'HAL-3PJHDQOTGI', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(189, 'HAL-OMNDL6I258', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(190, 'HAL-J1O2SBW6K5', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(191, 'HAL-QZB8S1HX52', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(192, 'HAL-J5ZA8YIO1T', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(193, 'HAL-3PJHDQOTGI', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(194, 'HAL-OMNDL6I258', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(195, 'HAL-J1O2SBW6K5', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(196, 'HAL-7W62OLKE0D', 'Land title verification request', 'Message Akunna', 'developer', '13-Dec-2019'),
(197, 'HAL-7W62OLKE0D', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(198, 'HAL-7W62OLKE0D', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(199, 'HAL-Q36AOJ05TL', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(200, 'HAL-Q36AOJ05TL', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '13-Dec-2019'),
(201, 'HAL-DRIPK7BUG1', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(202, 'HAL-DRIPK7BUG1', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(203, 'HAL-CZX6DJGQYE', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(204, 'HAL-CZX6DJGQYE', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(205, 'HAL-LQN3MHRWAD', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(206, 'HAL-LQN3MHRWAD', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(207, 'HAL-MWOSDBIE8J', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(208, 'HAL-MWOSDBIE8J', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(209, 'HAL-QTJ4SE36GL', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(210, 'HAL-QTJ4SE36GL', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(211, 'HAL-0T4X5DYQRV', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(212, 'HAL-0T4X5DYQRV', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(213, 'HAL-8A39G16KFV', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(214, 'HAL-8A39G16KFV', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(215, 'HAL-1XQCVMAU7P', 'Land title verification process started', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(216, 'HAL-1XQCVMAU7P', 'Land title approved', 'HouseAfrica Lawyer', 'lawyer', '14-Dec-2019'),
(217, 'HAL-SBHO6ZWF9Q', 'Land title verification request', 'Message Akunna', 'developer', '15-Dec-2019'),
(218, 'HAL-6NTPD2W3R9', 'Land title verification request', 'Message Akunna', 'developer', '15-Dec-2019'),
(219, 'HAL-UFR5SO47J1', 'Land valuation report submitted', 'Maven Harry', 'valuer-surveyor', '24-Feb-2020'),
(220, 'HAL-YNE4SHPQTZ', 'Land valuation report submitted', 'Zennith Bank Dline Portharcourt', 'mortgage-bank', '25-Feb-2020'),
(221, 'HAL-YNE4SHPQTZ', 'Land valuation report submitted', 'Alisi Daniel', 'user', '25-Feb-2020'),
(222, 'HAL-YNE4SHPQTZ', 'Land valuation report submitted', 'Alisi Daniel', 'user', '25-Feb-2020'),
(223, 'HAL-YNE4SHPQTZ', 'Land valuation report submitted', 'Alisi Daniel', 'user', '25-Feb-2020'),
(224, 'HAL-YNE4SHPQTZ', 'Land valuation report submitted', 'Alisi Daniel', 'user', '25-Feb-2020'),
(225, 'HAL-UFR5SO47J1', 'Land valuation report submitted', 'Zennith Bank Dline Portharcourt', 'mortgage-bank', '26-Feb-2020'),
(226, 'HAL-A91INOW85V', 'verification', 'Alisi Daniel', 'user', '26-Feb-2020'),
(227, 'HAL-4DKGPH6ABJ', 'verification', 'Alisi Daniel', 'user', '27-Feb-2020'),
(228, 'HAL-UJ5CZQOMGF', 'Land title upload', 'Melody Chenda', 'mortgage-bank', '28-Feb-2020'),
(229, 'HAL-2Q1MUB308C', 'Land title upload', 'Melody Chenda', 'mortgage-bank', '28-Feb-2020'),
(230, 'HAL-69V301CHJN', 'Land title upload', 'Melody Chenda', 'mortgage-bank', '28-Feb-2020'),
(231, 'HAL-769T2ACLHE', 'Land title upload', 'Melody Chinda', 'mortgage-bank', '28-Feb-2020'),
(232, 'HAL-W0KTOSG5DM', 'Land valuation report submitted', 'Maven Harry', 'valuer-surveyor', '29-Feb-2020'),
(233, 'HAL-W0KTOSG5DM', 'Land valuation report submitted', 'Maven Harry', 'valuer-surveyor', '29-Feb-2020'),
(234, 'HAL-A91INOW85V', 'Land legal search reported', 'Elochukwu Azubuike', 'lawyer', '02-Mar-2020'),
(235, 'HAL-A91INOW85V', 'Land legal search reported', 'Elochukwu Azubuike', 'lawyer', '02-Mar-2020'),
(236, 'HAL-A91INOW85V', 'Land legal search reported', 'Elochukwu Azubuike', 'lawyer', '02-Mar-2020'),
(237, 'HAL-A91INOW85V', 'Land valuation report submitted', 'Alisi Daniel', 'user', '02-Mar-2020'),
(238, '1583169210', 'Report download', 'Elochukwu Azubuike', 'lawyer', '02-Mar-2020'),
(239, '1583169601', 'Report download', 'Elochukwu Azubuike', 'lawyer', '02-Mar-2020'),
(240, '1583170177', 'Report download', 'Elochukwu Azubuike', 'lawyer', '02-Mar-2020'),
(241, '1583328106', 'Report download', 'Alisi Daniel', 'user', '04-Mar-2020'),
(242, 'HAL-F3SX752CAW', 'Land title upload', 'Plot of land at Maitama', 'user', '05-Mar-2020'),
(243, 'HAL-YPHSTO0JK8', 'verification', 'Alisi Daniel', 'user', '06-Mar-2020'),
(244, 'HAL-GM4O6EW0P9', 'verification', 'Alisi Daniel', 'user', '06-Mar-2020'),
(245, 'HAL-EY4V78D9CA', 'verification', 'Alisi Daniel', 'user', '06-Mar-2020'),
(246, 'HAL-C5KHVXR3YG', 'verification', 'Alisi Daniel', 'user', '06-Mar-2020'),
(247, '1583504698', 'Report download', 'Elochukwu Azubuike', 'lawyer', '06-Mar-2020'),
(248, 'HAL-GM4O6EW0P9', 'Search payment', 'Alisi Daniel', 'user', '06-Mar-2020'),
(249, 'HAL-6PQ15M8BRN', 'verification', 'Alisi Daniel', 'user', '06-Mar-2020'),
(250, 'HAL-D6LR9GAK4F', 'Title search and valuation', 'Alisi Daniel', 'user', '06-Mar-2020'),
(251, 'HAL-DQIPVEFXBY', 'mortgage', 'Zennith Bank Dline Portharcourt', 'mortgage-bank', '10-Mar-2020'),
(252, 'HAL-WO8KMBJ9S2', 'mortgage', 'Zennith Bank Dline Portharcourt', 'mortgage-bank', '10-Mar-2020'),
(253, 'HAL-WO8KMBJ9S2', 'Land valuation report submitted', 'Maven Harry', 'valuer-surveyor', '10-Mar-2020'),
(254, 'HAL-WO8KMBJ9S2', 'Land legal search reported', 'Elochukwu Azubuike', 'lawyer', '10-Mar-2020'),
(255, 'HAL-WO8KMBJ9S2', 'Land legal search reported', 'Elochukwu Azubuike', 'lawyer', '10-Mar-2020'),
(256, 'HAL-B1TKC2WL3X', 'verification', 'Message Akunna', 'developer', '16-Mar-2020'),
(257, 'HAL-P92TBGULNW', 'verification', 'Message Akunna', 'developer', '20-Mar-2020'),
(258, 'HAL-P92TBGULNW', 'Search payment', 'Message Akunna', 'developer', '20-Mar-2020'),
(259, 'HAL-P92TBGULNW', 'Search payment', 'Message Akunna', 'developer', '20-Mar-2020'),
(260, 'HAL-GVX5KDSH7R', 'Land valuation report submitted', 'Maven Harry', 'valuer-surveyor', '20-Mar-2020'),
(261, 'HAL-GVX5KDSH7R', 'Land valuation report submitted', 'Maven Harry', 'valuer-surveyor', '20-Mar-2020');

-- --------------------------------------------------------

--
-- Table structure for table `member_data`
--

CREATE TABLE `member_data` (
  `id` int(11) NOT NULL,
  `business_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `phone_number` varchar(22) NOT NULL,
  `city` varchar(222) NOT NULL,
  `bis_location` varchar(222) NOT NULL,
  `key_grant` varchar(222) NOT NULL,
  `country` varchar(111) NOT NULL,
  `address_store` varchar(255) NOT NULL,
  `state` varchar(111) NOT NULL,
  `currency` varchar(111) NOT NULL,
  `username` varchar(100) NOT NULL,
  `last_seen` varchar(30) NOT NULL,
  `registered_date` varchar(20) NOT NULL,
  `banner` varchar(222) NOT NULL,
  `plans` int(11) NOT NULL,
  `subscription_start` varchar(122) NOT NULL,
  `subscription_end` varchar(133) NOT NULL,
  `facebook` varchar(222) NOT NULL,
  `instagram` varchar(222) NOT NULL,
  `twitter` varchar(222) NOT NULL,
  `youtube` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `custom_email` varchar(140) NOT NULL,
  `account_activation` int(11) NOT NULL,
  `account_activation_status` int(11) NOT NULL,
  `account_setup` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `package` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member_data`
--

INSERT INTO `member_data` (`id`, `business_name`, `email`, `password`, `phone_number`, `city`, `bis_location`, `key_grant`, `country`, `address_store`, `state`, `currency`, `username`, `last_seen`, `registered_date`, `banner`, `plans`, `subscription_start`, `subscription_end`, `facebook`, `instagram`, `twitter`, `youtube`, `description`, `custom_email`, `account_activation`, `account_activation_status`, `account_setup`, `status`, `package`) VALUES
(11, 'yelocode', 'edwineke24@gmail.com', '1', '080336255713', 'Port-Harcourt', 'Port hacourt', '6241e664ef7671e9945829bd1d401f275bc7693e', 'Beijing', 'No1 eleven advene, okoro rad', 'River State', '&#8358;', 'Doe_nnis', '2018-12-03', '2018-12-03', '', 0, '', '', '', '', '', '', 'PHPMailer defaults to English, but in the language folder you\'ll find many translations for PHPMailer error messages that you may encounter. Their filenames contain ISO 639-1 language code for the translations, for example fr for French. To specify a language, you need to tell PHPMailer which one to use, like this', '', 0, 0, 0, 1, 2),
(13, 'fetonafashionworld', 'info@fetonafashionworld.com', 'fetonafashionworld', '07064998397', 'Port Harcourt', 'Port Harcourt', 'e3af09299f9d897bc36168aea4fc88a5b79735d7', 'Nigeria', '26 Ezimgbu link Rd, off stadium Road, Port Harcourt, Rivers State Nigeria', 'River State', 'â‚¦', '', '2018-12-19', '2018-12-19', './banners/78312354650694087192.jpg', 50, '2019-01-17', '2019-02-17\n', 'https://web.facebook.com/fetonafashionworld', 'https://www.instagram.com/fetonafashionworld/', 'https://twitter.com/fetonafashion', 'https://www.youtube.com/channel/UCltHM6gu09FjZEblN_GV78w', '', '', 96565, 1, 1, 0, 0),
(16, 'hitechng', 'hitechng@gmail.com', '12345', '08036692937', '', 'Port hacourt', '5bfa3b2755aecc8a56e51594201c9acd0a340479', 'Nigeria', 'No. 21 Potts Johnson Street, Off Station Rd B/Stop or The Civic Centre Complex Port Harcourt Township', 'River State', '&#8358;', '', '2018-12-28', '2018-12-28', './banners/ele.jpg', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(17, 'babywini', 'chizzywinifred@gmail.com', 'chizzy84449', '09094874543', '', 'Port hacourt', '1bcb1766a013c5ba2bf230fb47ad06427f2d1b40', 'Nigeria', '', 'River State', '&#8358;', '', '2018-12-28', '2018-12-28', './banners/car1.jpg', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(18, 'softlineclothings', 'chukwuwiekedickson@gmail.com', '08138329403', '08138329403', '', 'Port hacourt', '2812d19bb0f5335a4e773a3e8d1151d0cff313fc', 'Nigeria', 'port harcourt', 'River State', 'â‚¦', '', '2019-01-04', '2019-01-04', './banners/40592256860183743971.jpg', 500, '2019-01-17', '2019-02-17\n', '', '', '', '', '', '', 94404, 1, 1, 0, 0),
(19, 'phonex', 'lawsonnelyeke@gmail.com', '5656@@..', '08125739483', '', 'Port hacourt', 'ed3f0441e0522b1c214d2e05c68d7c1778b3b7ee', 'Nigeria', '', 'River State', '&#8358;', '', '2019-01-05', '2019-01-05', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(20, 'smartphonehub', 'multiblinkz@gmail.com', 'Bigmike@6', '08055262928', '', 'Port hacourt', 'efeee439ee4e4af10769bc4a40d408a913ce9f59', 'Nigeria', '', 'River State', '&#8358;', '', '2019-01-06', '2019-01-06', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(22, 'phoneaffairs', 'exceedingcares@gmail.com', 'screen2', '07037135516', 'River State, Port hacourt', 'garrison', '5934a97705fc6acd078ddce306bbd63a9b57ef0b', 'Nigeria', 'garrison', 'River State', 'â‚¦', '', '2019-01-10', '2019-01-10', './banners/63309757684820912541.jpg', 0, '', '', '', '', '', '', '', '', 32023, 1, 1, 0, 0),
(23, 'fineoption', 'fineoption@gmail.com', '11111', '07037135516', '', 'rumuola', 'b42de3a5146e75047564e6dce39877fe2aee1b26', 'Nigeria', '2 rumuadaolu market road, by everyday enporium rumuola PH', 'River State', '&#8358;', '', '2019-01-13', '2019-01-13', './banners/fun.jpeg', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(24, 'miras_place', 'amaechink@gmail.com', '90062cf733c437f9e614b9e5e11048e43d48635d', '09056204037', '', 'free_ads', '098b43350aa716c21a7aa65c8e1688a357b1fb87', 'Nigeria', '', 'River State', '&#8358;', '', '2019-01-29', '2019-01-29', '', 150, '2019-01-17', '2019-12-17', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(25, 'bumyli', 'favour.okako@yahoo.com', 'hrmanager16', '08120096371', 'Port Harcourt', 'Port Harcourt', '208e08ea88cc33f25b69221704ebbd13599d48ca', 'Nigeria', 'Port Harcourt', 'River State', '&#8358;', '', '2019-01-31', '2019-01-31', './banners/20750938164215634789.jpg', 50, '2019-03-02', '2019-04-02\n', 'https://web.facebook.com/bumylifood/', 'instagram.com/bumylifood', '', '', 'Welcome to Bumyli Foods, our aim is to provide you with well, prepared, tasty Nigerian meals.\r\n\r\nEnjoy your favorite meals delivered straight to your door, order your lunch, dinner, meals for meetings, special events and for the weekend.\r\nPlace your order by visiting www.postomg/bumyli or call 08027496396 or wattsapp 09028927416', 'bumyli_food@postomg.com', 0, 0, 0, 0, 0),
(26, 'goddickfurnitures', 'chimajoeakin@gmail.com', 'goddick8987', '08063553349', 'phc', 'port_harcourt', 'fbacca75a0855b9a966ca637590c6ab87711bfee', 'Nigeria', '', 'river state', '&#8358;', '', '2019-02-01', '2019-02-01', './banners/fun.jpeg', 50, '2019-02-01', '2019-03-01\n', '', 'www.instagram.com/goddick_furnitures', '', '', '', '', 0, 0, 0, 0, 0),
(27, 'Jondil', 'kanu25@yahoo.com', 'uzoaku', '+234 803 275 4030', 'phc', 'port_harcourt', 'd1bdd4efeb1647ae33f441e4929acac532cf0d7f', 'Nigeria', 'port harcourt', 'river state', 'â‚¦', '', '2019-02-04', '2019-02-04', './banners/65397350714091248286.jpg', 0, '', '', '', '', '', '', '', '', 212323, 1, 1, 0, 0),
(28, 'Fairswap', 'fairswap@gmail.com', '1', '08036255713', '', 'free_ads', 'a9745467e2149e1804d01a5222fa6e817877c6ab', 'Nigeria', '', '', '&#8358;', '', '2019-02-17', '2019-02-17', './banners/10038351279728649654.jpg', 0, '', '', '', '', '', '', '', '', 32323, 1, 0, 0, 0),
(29, 'Favourite_kitchen ', 'uchefavour335@gmail.com', '07059097429', '07059097429,0907878192', 'Port harcourt', 'port harcourt', '4883eb8151e43d2af1cfec3d0fb067a6c51245ff', 'Nigeria', 'Port Harcourt', '', '&#8358;', '', '2019-03-01', '2019-03-01', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(30, 'sinha', 'sinhaservices@gmail.com', '12345678', '7696280869', 'location', 'location', '108115082a35705f7cde9b3204f28da0c278d564', 'India', '', '', '&#8358;', '', '2019-03-04', '2019-03-04', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(31, 'goodyfabrics', 'naomiblizz22@gmail.com', 'chibuzorgoodness', '09099176807', 'location', 'location', '01bd8de54cebf74d43b69d6e70282de887c3a386', 'Nigeria', '', '', '&#8358;', '', '2019-03-05', '2019-03-05', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(32, 'WILSONWEARS', 'sichogen@gmail.com', 'welcome.1', '07037262673', 'Port Harcourt', 'Rivers State', '1f26fd297323bddc74a5d98bf6e998377681a133', 'Nigeria', '11, Elekahia Road, Rebisi 500102 Port Harcourt', '', '&#8358;', '', '2019-03-07', '2019-03-07', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(33, 'Numasta Tour', 'pangandarannumasta@gmail.com', 'bismillah99x', '08156110900', '', 'free_ads', 'de0938944738b3fd41ab4f5de52854d562abbf4e', 'Indonesia', '', '', '&#8358;', '', '2019-03-11', '2019-03-11', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(34, 'Goody-fabrics', 'naomiblizz2@gmail.com', 'devinekitchen', '08165072433', '', 'free_ads', '07faf6cc25eeeab9980971b3ca32d6c26f5af487', 'Nigeria', '', '', '&#8358;', '', '2019-03-24', '2019-03-24', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(36, 'yelocodetech', 'edwineke25@yahoo.com', '3dw1n3k3', '08036255713', '', 'nigeria', '95d2e494766260f0d66315cddd5bd093c7cd630a', 'Nigeria', '', '', '&#8358;', '', '2019-04-30', '2019-04-30', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(37, 'crispymautomobiles', 'crispymautomobiles@gmail.com', 'Blessed$1', '07035403105', 'river state', 'port-harcourt', '0738e5983f7f0c07c5d4f28b5e5bf19afc889828', 'Nigeria', 'Nigeria, Lagos state', '', 'â‚¦', '', '2019-05-02', '2019-05-02', './banners/68285193203976714045.jpg', 0, '', '', 'https://web.facebook.com/crispymautomobiles', 'https://www.instagram.com/crispymautomobiles', '', '', '', '', 232323, 1, 1, 0, 0),
(39, 'jnj_trends', 'jessynnama@gmail.com', 'jessicaaa', '08038205654', '', 'free_ads', 'f3208f4af50c6fd7367703f7146bcd0d03671002', 'Nigeria', '', '', '', '', '2019-05-18', '2019-05-18', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(46, 'phoenix', 'alexanderesther44@gmail.com', 'esther', '07014737821', '', 'free_ads', 'b6fd62c0c81133ef5610ab5d0a11c5afbdece8b2', 'Nigeria', '', '', '', '', '2019-06-13', '2019-06-13', '', 0, '', '', '', '', '', '', '', '', 32679, 1, 0, 0, 0),
(47, 'greenlodge', 'edwineke321@gmail.com', '1', '08036255719', '', 'free_ads', '4edb2b985d64b6ded980167161f34ed8800e346e', 'Nigeria', '', '', '', '', '2019-06-13', '2019-06-13', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(48, 'chopnlife', 'chigozie.emenike@ucagro.com', 'Qwerty123..', '07772739456', '', 'free_ads', 'e05e7dfa700b437856d16dd6d501937d2bd5b786', 'United Kingdom', 'Port Harcourt', '', 'â‚¦', '', '2019-06-17', '2019-06-17', '', 0, '', '', '', '', '', '', '', '', 67405, 1, 1, 0, 0),
(49, 'royalty', 'afonimeroyal@gmail.com', 'royaljunior', '08083133135', '', 'free_ads', 'b109d8475863e363272d97f8fda647bba1373768', 'Nigeria', '', '', '', '', '2019-06-24', '2019-06-24', '', 0, '', '', '', '', '', '', '', '', 83301, 1, 0, 0, 0),
(53, 'smartphonehub', 'smartphonehub@gmail.com', '1', '08036255716', 'river state', 'port-harcourt', 'f7df85de47d1da6c361bb99063183ccd157d3880', 'Nigeria', '26 Ezimgbu link Rd, off stadium Road, Port Harcourt, Rivers State Nigeria', '', 'â‚¦', '', '2019-06-30', '2019-06-30', '', 0, '', '', '', '', '', '', '', '', 155438373, 1, 1, 0, 0),
(54, 'webdeveloper', 'centakpa@gmail.com', 'nwanneka', '07030210223', '', 'free_ads', '1a3ecfe4a35ada78e710325f8ee9162d5458b3d6', 'Nigeria', '11  Elekahia Road', '', 'â‚¦', '', '2019-07-02', '2019-07-02', '', 0, '', '', '', '', '', '', '', '', 450793186, 1, 1, 0, 0),
(55, 'automobile', 'ahmadmotors00@gmail.com', 'mother123', '+971588043974', '', 'free_ads', '06c78c56e6ed03e0a6a8461bd8d5d05df7b6f7ab', 'Turkey', 'turkey', '', 'Â¤', '', '2019-07-22', '2019-07-22', '', 0, '', '', '', '', '', '', '', '', 285454259, 1, 1, 0, 0),
(56, 'brookoffshore', 'chinemeukenye@yahoo.com', 'brook', '08036255713', '', 'free_ads', '88c10400afc54b66f7e42757ff787fbce81582bb', 'Nigeria', 'phc', '', 'â‚¦', '', '2019-08-15', '2019-08-15', '', 0, '', '', '', '', '', '', '', '', 22801813, 1, 1, 0, 0),
(57, 'oyoeffiominternational', 'oyoeffiom@gmail.com', 'nation', '08039314268', '', 'free_ads', '1c828405b83d93fbb192aab1a847742800590859', 'Nigeria', '', '', '', '', '2019-08-16', '2019-08-16', '', 0, '', '', '', '', '', '', '', '', 225669894, 0, 0, 0, 0),
(58, 'kiddiesaffairs', 'kiddiesaffairs@gmail.com', '1', '07037135516', '', 'Port hacourt, River State, Nigeria', '2866c665233bf3d02c7ff1f0b4f3ec1cadd08ea4', 'Nigeria', 'Port hacourt, River State, Nigeria', '', 'â‚¦', '', '2019-09-05', '2019-09-05', '', 0, '', '', '', '', '', '', '', '', 380502987, 1, 1, 0, 0),
(59, 'ts_pharmaceutical_companies', 'edwineke26@yahoo.com', '1', '07012136030', 'port harcourt and lagos', 'port_harcourt_and_lagos', '21875a658a6daa8fef33f38ea404d3f863c56003', 'Nigeria', 'port harcourt and lagos', '', 'â‚¦', '', '2019-09-10', '2019-09-10', '', 0, '', '', '', '', '', '', 'port harcourt and lagos', '', 61576823, 1, 1, 0, 0),
(60, 'lawsonweb', 'chidieke23@yahoo.com', 'micr0ch3ap', '08149517044', '', 'free_ads', '20d3783b5e2efbe67d43addf0b4d3268a99ee188', 'Nigeria', '', '', '', '', '2019-09-16', '2019-09-16', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(61, 'gozeck', 'chinpluto@gmail.com', 'kelechi77', '+2348039233234', 'Port Harcourt', 'Rivers State', 'bbf65bf5c78a2098f60481688f421e34859af204', 'Nigeria', '11, Market Road, Elekahia, Port Harcourt.', '', 'â‚¦', '', '2019-09-23', '2019-09-23', '', 0, '', '', 'https://web.facebook.com/gozeckboss', 'https://instagram.com/promisewebgod', '', '', 'We sell electronics', '', 457518282, 1, 1, 0, 0),
(62, 'justsales', 'johnbako064@gmail.com', '789YHG(*', '08050734422', 'Lagos', 'free_ads', '31992c6a10254608d52a04b725a9df0f7762eb02', 'Nigeria', 'Lagos', '', 'â‚¦', '', '2019-09-25', '2019-09-25', '', 0, '', '', '', '', '', '', '', '', 799030288, 1, 1, 0, 0),
(63, 'how', 'ayoolajoa@yahoo.com', 'Sola19te', '08179063881', '', 'free_ads', '19b4bfb83ada17c79c8501550e53f3804cb3a027', 'Nigeria', 'Minna', '', 'â‚¦', '', '2019-10-08', '2019-10-08', '', 0, '', '', '', '', '', '', '', '', 970172435, 1, 1, 0, 0),
(64, 'berthametz', 'eplersue@gmail.com', 'x26TqAgLwg0kiLB', '(184) 320-5334 x909', '', 'free_ads', '1fdda33d3eef77f4fa4c4f7751a748702e173472', 'United Arab Erimates', '', '', '', '', '2019-12-16', '2019-12-16', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(65, 'alexieyost', 'raphaelvarella1993@gmail.com', '1L_hEZPOaRuGo1g', '1-044-922-6375 x290', '', 'free_ads', '0923e7e3de0d8731db7bce8651f8e7203016ed3f', 'United Arab Erimates', '', '', '', '', '2019-12-16', '2019-12-16', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(66, 'animate', 'victordavid252@gmail.com', '1234', '0900000', '', 'free_ads', '1a89e39115e1acbbde7ab8283bbe7d02df32310b', 'Bahamas', 'USA', '', 'Â¤', '', '2019-12-17', '2019-12-17', '', 0, '', '', '', '', '', '', '', '', 393982661, 1, 1, 0, 0),
(67, 'aliyahmorar', 'dona@somhotels.es', 'QKiOhS12IXOtDMa', '(642) 071-2177 x418', '', 'free_ads', '7d0e2307c53ba515797af28706090c35c62222bc', 'United Arab Erimates', '', '', '', '', '2019-12-17', '2019-12-17', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(68, 'miraclewatsica', 'roy-muellers@t-online.de', 'EvoDntg9infhNlA', '(838) 312-6469 x851', '', 'free_ads', '52b8ac2a2b356d8638722843fa4dd3af845d4de0', 'United Arab Erimates', '', '', '', '', '2019-12-17', '2019-12-17', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(69, 'lamberthowe', 'mertie1953@yahoo.com', 'jJlbbAE83E_Y_Rx', '717-615-0762', '', 'free_ads', 'c7bdeabc45f5968aab7323ab4f3a949b4703195d', 'United Arab Erimates', '', '', '', '', '2019-12-17', '2019-12-17', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(70, 'keiradickinson', 'lnortonramirez@gmail.com', 'y9mxU2isnZov2LC', '419.717.7116 x63363', '', 'free_ads', '1630aec7c9d22a287f0b0fabdb07aba3851fa907', 'United Arab Erimates', '', '', '', '', '2019-12-18', '2019-12-18', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(71, 'randalwisozk', 'coley916@aol.com', 'lEc0A7HXEYfsRCz', '660.128.6650 x66096', '', 'free_ads', 'e2a19bc6bff0651bac8385845949c30ab8ded6df', 'United Arab Erimates', '', '', '', '', '2019-12-18', '2019-12-18', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(72, 'dannyryan', 'craig.rogers19@gmail.com', 'I1mt6m0lDwwS0QE', '(498) 169-2860 x1533', '', 'free_ads', 'b3bb7108e680e864257e132e733c5274e953c1e6', 'United Arab Erimates', '', '', '', '', '2019-12-19', '2019-12-19', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(73, 'kellentowne', 'cirinzo@me.com', 'g1QCnMDb29ae8D8', '296.115.5643', '', 'free_ads', 'a64e093e8ddc56906eaaa072cf8ad46c5a2ae6c6', 'United Arab Erimates', '', '', '', '', '2019-12-19', '2019-12-19', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(74, 'chismarine', 'chismarine@gmail.com', '1', '080263553562', '', 'free_ads', '024cc63ee08f970548b8574f43bf614a37aeebee', 'Nigeria', '', '', '', '', '2020-02-06', '2020-02-06', '', 0, '', '', '', '', '', '', '', '', 297362, 1, 1, 0, 0),
(75, 'chismarineone', 'chismarine1@gmail.com', '1', '09075738905', '', 'free_ads', '024cc63ee08f970548b8574f43bf614a37aeebee', 'Nigeria', '', '', '', '', '2020-02-06', '2020-02-06', '', 0, '', '', '', '', '', '', '', '', 7832, 1, 1, 0, 0),
(76, 'concepcionthiel', 'juliakarell@gmail.com', 'z8j6eVWl5XVynt4', '(521) 376-0787 x06265', '', 'free_ads', '09fdb409ff86f237efdfe3c60648954537741b3a', 'United Arab Erimates', '', '', '', '', '2020-02-23', '2020-02-23', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(77, 'cornellmuller', 'jnthnkatz@aol.com', 'zaIdlRUJdUjFy5B', '(578) 989-0607 x8197', '', 'free_ads', '987d204b93b8d55e234032f44de0eaea11b34787', 'United Arab Erimates', '', '', '', '', '2020-02-24', '2020-02-24', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(78, 'theoflatleydvm', 'jingle@handknitholiday.com', 'iuHjCKyRxjSF6sV', '170.182.7441 x383', '', 'free_ads', '21751591d09433059813da19b22b4de8f5571ed5', 'United Arab Erimates', '', '', '', '', '2020-02-24', '2020-02-24', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(79, 'ruthiehagenes', 'thartman@woodlandsdermatology.com', 'lmYyLL_sVx6ioRS', '1-852-987-6516 x3482', '', 'free_ads', '639bebb9cd4361d191d598ab2dee6cf8a1944832', 'United Arab Erimates', '', '', '', '', '2020-02-24', '2020-02-24', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(80, 'brandyswaniawski', 'amarietti@sbcglobal.net', 'UZZvGoAedxAW9e6', '101-930-9617', '', 'free_ads', '8c31cd5aa01ef760f2ea04b97db0516b318b999e', 'United Arab Erimates', '', '', '', '', '2020-02-24', '2020-02-24', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(81, 'nasirhessel', 'barketts@shaw.ca', 'ao1346xZXDNcVJz', '276.804.2986 x2589', '', 'free_ads', 'e8d0d8af04e9765a03e77c266806b552dfacf661', 'United Arab Erimates', '', '', '', '', '2020-02-25', '2020-02-25', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(82, 'mrsclarkgerhold', 'lauren_core@hotmail.com', '9vGKKVv0C9DSezD', '(321) 814-7265', '', 'free_ads', '662a52271eca47e5707c27638a93d8a6992ed0ea', 'United Arab Erimates', '', '', '', '', '2020-03-21', '2020-03-21', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(83, 'andreannegutkowski', 'gietzenlowvolt@gmail.com', 'qqsC8X0EEPXGJHX', '237-868-0946 x01688', '', 'free_ads', 'c0e9e05a103e6c2c1139bfa0b4826e1fe045f0ae', 'United Arab Erimates', '', '', '', '', '2020-03-25', '2020-03-25', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(84, 'lunadare', 'briancheshire@comcast.net', '4hpnBheTAUs2D91', '(601) 446-9965 x876', '', 'free_ads', 'e32951874260239d6c7c97c8a988e20d2b50fc92', 'United Arab Erimates', '', '', '', '', '2020-03-28', '2020-03-28', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(85, 'cameronstoltenberg', 'wspdank@yahoo.com', 'mI1lLEF3NxpYYWk', '779-625-1557 x279', '', 'free_ads', '0ee9792a96fc3e6b1fd795a18e103e485ac9101e', 'United Arab Erimates', '', '', '', '', '2020-03-28', '2020-03-28', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(86, 'columbusmurphy', 'sarahborgers1999@hotmail.com', 'm0R98s2st84QXTn', '065.962.2698 x62236', '', 'free_ads', '0b486e1401d843df9a725693c3bf42aa2d35c6c9', 'United Arab Erimates', '', '', '', '', '2020-03-29', '2020-03-29', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(87, 'darylweimannphd', 'phair_88@hotmail.com', 'rZ5ZvVlhLLjksmw', '760-107-5274 x191', '', 'free_ads', 'cefefe8b633d8933b78ec7906d30942a18c52b5d', 'United Arab Erimates', '', '', '', '', '2020-03-30', '2020-03-30', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(88, 'corneliushickle', 'lmbishop45@gmail.com', 'p3PurSBcLnKSrs3', '899.253.9844 x39150', '', 'free_ads', '37d8edf8729a63f60e543632d489109444a0cba6', 'United Arab Erimates', '', '', '', '', '2020-04-03', '2020-04-03', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(89, 'westonschmeler', 'doudriegej@gmail.com', 'bBmgraklp9QVmYR', '046.736.4581', '', 'free_ads', '8421db90317b1c3c4eb8c35d3582b9b8d0f46daf', 'United Arab Erimates', '', '', '', '', '2020-04-10', '2020-04-10', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(90, 'kaylieherzog', 'ziffee@gmail.com', 'rwhC5vXOUrie6Ej', '(824) 319-4023', '', 'free_ads', '7b6d419cb179e4fe74c4d5d1f858b10ada8a9b82', 'United Arab Erimates', '', '', '', '', '2020-04-14', '2020-04-14', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(91, 'zackarykoepp', 'deanna-cartea@hotmail.com', '83VbIbcf8b998jk', '(239) 813-5753', '', 'free_ads', '02532e2c4587204384bdb15b04b221deea057ab3', 'United Arab Erimates', '', '', '', '', '2020-04-15', '2020-04-15', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(92, 'luciesauer', 'wackyd123@aol.com', 'gsukzVC7MpuSXHk', '(234) 799-0637', '', 'free_ads', '7a60645431c5499e2782a23ce9a1f9bfea6a4de0', 'United Arab Erimates', '', '', '', '', '2020-04-15', '2020-04-15', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(93, 'cesargoodwin', 'lbiittner5707@gmail.com', 'n82f8S6NCCsO7Wh', '976-425-4181 x25442', '', 'free_ads', '24e6c069b5168021c8be9a0bdce67d6f0f7c0cd6', 'United Arab Erimates', '', '', '', '', '2020-04-17', '2020-04-17', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(94, 'reannabeahan', 'justin.j.gilbert@gmail.com', 'SNJ766Ba53Jd6US', '(665) 058-4016 x518', '', 'free_ads', '30a179471af833e4342ab307971bf1cad66165e9', 'United Arab Erimates', '', '', '', '', '2020-04-17', '2020-04-17', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(95, 'lalas', 'achor.wachuku80@gmail.com', '##########', '+2348033383098', '', 'free_ads', 'f56ee08569141b64851761800a40a3ab810a693f', 'Nigeria', 'Port Harcourt', '', 'â‚¦', '', '2020-04-21', '2020-04-21', '', 0, '', '', '', '', '', '', '', '', 742126230, 1, 1, 0, 0),
(96, 'mrsjamelbeahan', 'robert@ngslater.com', 'PajK0z07OiCV6Vg', '1-622-143-9570', '', 'free_ads', 'f9be34a5a8665a1eb68fbf8c138aba6960b63ebd', 'United Arab Erimates', '', '', '', '', '2020-04-25', '2020-04-25', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(97, 'francisbosco', 'tammylemieux1@gmail.com', 'RUih9cDOLxTfNAK', '(323) 933-1843 x703', '', 'free_ads', '6fb970e0549e299729e52d02c2c5bf4f89873e53', 'United Arab Erimates', '', '', '', '', '2020-04-29', '2020-04-29', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(98, 'abbieritchie', 'tba10@comcast.net', '4p7fMLYndesYgi4', '14973959278', '', 'free_ads', '087ee7504c8ca51d03385c5b12cafe4e72160063', 'United Arab Erimates', '', '', '', '', '2020-04-29', '2020-04-29', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(99, 'arahammes', 'anthonykeung26@gmail.com', 'FbHY7Qhdo5g8c1l', '17661405680', '', 'free_ads', '7395ee7c31485c9d9315f0e1ba60a1b685dd5448', 'United Arab Erimates', '', '', '', '', '2020-04-30', '2020-04-30', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0),
(100, 'chelseyankunding', 'khurley5@att.net', 'oIujKvaL84eDu_6', '13870276881', '', 'free_ads', '876f37fb90d3b650900cad2fff18e91c21bb46e1', 'United Arab Erimates', '', '', '', '', '2020-05-01', '2020-05-01', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package` int(1) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `max_shop` int(11) NOT NULL,
  `max_product` int(11) NOT NULL,
  `max_staffs` double NOT NULL DEFAULT 1,
  `price` double NOT NULL DEFAULT 0,
  `yearly_price` double NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package`, `package_name`, `max_shop`, `max_product`, `max_staffs`, `price`, `yearly_price`, `status`, `date_added`) VALUES
(1, 0, 'basic', 3, 15, 6, 10000, 100000, 1, '2020-05-18'),
(2, 1, 'bronze', 5, 30, 10, 25000, 200000, 1, '2020-05-18'),
(3, 2, 'silver', 10, 100, 20, 50000, 500000, 1, '2020-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL DEFAULT '',
  `task_id` varchar(25) NOT NULL DEFAULT '',
  `advert_id` varchar(100) NOT NULL DEFAULT '',
  `user_id` varchar(25) NOT NULL DEFAULT '',
  `amount_paid` double NOT NULL DEFAULT 0,
  `payment_description` varchar(500) NOT NULL DEFAULT '',
  `payment_for` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(25) NOT NULL DEFAULT '',
  `month_created` varchar(25) NOT NULL DEFAULT '',
  `date_created` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `task_id`, `advert_id`, `user_id`, `amount_paid`, `payment_description`, `payment_for`, `status`, `month_created`, `date_created`) VALUES
(34, 'tok_1GXStuD8wZnwXYopoMI1K3Hk', '', 'tok_1GXStuD8wZnwXYopoMI1K3Hk', 'USER-1586514893', 771.25, 'Payment for items purchased', '', 'succeeded', 'Apr', '2020-Apr-13'),
(35, 'tok_1GXaULD8wZnwXYopxb0fKWGQ', '', 'tok_1GXaULD8wZnwXYopxb0fKWGQ', 'USER-1586514893', 1060, 'Payment for items purchased', '', 'succeeded', 'Apr', '2020-Apr-13'),
(36, 'tok_1GXaZ8D8wZnwXYopNax55aVB', '', 'tok_1GXaZ8D8wZnwXYopNax55aVB', 'USER-1586514893', 1060, 'Payment for items purchased', '', 'succeeded', 'Apr', '2020-Apr-13'),
(37, 'tok_1GXackD8wZnwXYopOQaB1iV8', '', 'tok_1GXackD8wZnwXYopOQaB1iV8', 'USER-1586514893', 1060, 'Payment for items purchased', '', 'succeeded', 'Apr', '2020-Apr-13'),
(38, 'tok_1GXag5D8wZnwXYopdHiJ33Wg', '', 'tok_1GXag5D8wZnwXYopdHiJ33Wg', 'USER-1586514893', 1060, 'Payment for items purchased', '', 'succeeded', 'Apr', '2020-Apr-13'),
(49, 'tok_1GXbYAD8wZnwXYopkMSCmxNy', '', 'tok_1GXbYAD8wZnwXYopkMSCmxNy', 'USER-1586514893', 1480, 'Payment for items purchased', '', 'succeeded', 'Apr', '2020-Apr-13'),
(50, 'USER-1586475650_1586953347', '', 'tok_1GXbYAD8wZnwXYopkMSCmxNy', 'USER-1586514893', 1400, 'credit', '', 'paid', 'Apr', '2020-Apr-15'),
(51, 'USER-1586475650_1586953445', '', 'tok_1GXbYAD8wZnwXYopkMSCmxNy', 'POMG-1588384756', 50000, 'credit', '', 'paid', 'Apr', '2020-Apr-15'),
(53, '1588704037', 'n/a', '5eb1b32578de1', 'POMG-1588384756', 5000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(54, '1588704544', 'n/a', '5eb1b5209a727', 'POMG-1588384756', 5000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(55, '1588704692', 'n/a', '5eb1b5b46db44', 'POMG-1588384756', 1000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(56, '1588707215', 'n/a', '5eb1bf8f59f01', 'POMG-1588384756', 1000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(57, '1588707413', 'n/a', '5eb1c055c1162', 'POMG-1588384756', 2000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(58, '1588707720', 'n/a', '5eb1c1884b5ca', 'POMG-1588384756', 3000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(59, '1588707873', 'n/a', '5eb1c221888b0', 'POMG-1588384756', 5000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(60, '1588707972', 'n/a', '5eb1c2840a2de', 'POMG-1588384756', 1500, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(61, '1588708027', 'n/a', '5eb1c2bbbc2e6', 'POMG-1588384756', 1000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(62, '1588708136', 'n/a', '5eb1c32835cc9', 'POMG-1588384756', 5000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(63, '1588708355', 'n/a', '5eb1c4038942c', 'POMG-1588384756', 1000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(64, '1588710883', 'n/a', '5eb1cde3b3cac', 'POMG-1588384756', 1000, 'debit', '', 'completed', 'May-2020', '05-May-2020'),
(65, '5eb42b3651423', 'n/a', 'n/a', 'POMG-1588384756', 2000, 'withdrawal', '', 'pending', 'May-2020', '07-May-2020'),
(66, '1588976672', 'n/a', '5eb5dc200ae03', 'POMG-1588384756', 2000, 'debit', '', 'completed', 'May-2020', '08-May-2020'),
(67, '1589023595', 'n/a', '5eb6936bb5d03', 'POMG-1588384756', 1000, 'debit', '', 'completed', 'May-2020', '09-May-2020'),
(68, 'POMG-LU7K3LX911', 'n/a', 'n/a', 'POMG-1588385014', 5000, 'credit', '', 'success', 'May-2020', '09-May-2020'),
(69, 'POMG-RMSFDBGKXO', 'n/a', 'n/a', 'POMG-1588385014', 5000, 'credit', '', 'success', 'May-2020', '09-May-2020'),
(70, '5eb76493c9f4c', '5eb76493c9f4c', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '09-May-2020'),
(71, '5eb764cdcab34', '5eb764cdcab34', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '09-May-2020'),
(72, '5eb7d8c0cca87', '5eb7d8c0cca87', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(73, '5eb7d96629d53', '5eb7d96629d53', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(74, '5eb7d9bfa86e4', '5eb7d9bfa86e4', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(75, '5eb7d9c7730ae', '5eb7d9c7730ae', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(76, '5eb7da14a30b8', '5eb7da14a30b8', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(77, '5eb7da4d38fa2', '5eb7da4d38fa2', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(78, '5eb7da6f78c91', '5eb7da6f78c91', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(79, '5eb7dabf4c45b', '5eb7dabf4c45b', '5eb1c1884b5ca', 'POMG-1588385014', 70, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(80, '5eb7db68e91c3', '5eb7db68e91c3', '5eb1c32835cc9', 'POMG-1588385014', 140, 'credit', '', 'completed', 'May-2020', '10-May-2020'),
(81, '5eb7dc80588e4', 'n/a', 'n/a', 'POMG-1588385014', 5000, 'withdrawal', '', 'completed', 'May-2020', '10-May-2020'),
(82, '1589108363', 'n/a', '5eb7de8b9a3c3', 'POMG-1588385014', 5000, 'debit', '', 'completed', 'May-2020', '10-May-2020');

-- --------------------------------------------------------

--
-- Table structure for table `product_listings`
--

CREATE TABLE `product_listings` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '',
  `ad_type` varchar(225) NOT NULL DEFAULT '',
  `qty` float NOT NULL DEFAULT 0,
  `tittle` varchar(225) NOT NULL DEFAULT '',
  `photo1` varchar(225) NOT NULL DEFAULT '',
  `photo2` varchar(225) NOT NULL DEFAULT '',
  `photo3` varchar(225) NOT NULL DEFAULT '',
  `photo4` varchar(225) NOT NULL DEFAULT '',
  `photo_sizes` int(11) NOT NULL DEFAULT 0,
  `conditions` varchar(33) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT 0,
  `price_enter` double NOT NULL DEFAULT 0,
  `brand` varchar(222) NOT NULL DEFAULT '',
  `additional` varchar(222) NOT NULL DEFAULT '',
  `model` varchar(222) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `category_id_custom` int(11) NOT NULL DEFAULT 0,
  `user_key` varchar(222) NOT NULL DEFAULT '',
  `meta_tag` varchar(222) NOT NULL DEFAULT '',
  `sub_category` varchar(225) NOT NULL DEFAULT '',
  `post_date` varchar(22) NOT NULL DEFAULT '',
  `post_time` varchar(22) NOT NULL DEFAULT '',
  `viewed` int(11) NOT NULL DEFAULT 0,
  `product_setup` int(11) NOT NULL DEFAULT 0,
  `cart_active` int(11) NOT NULL DEFAULT 0,
  `tracker_item` int(11) NOT NULL DEFAULT 0,
  `cost_price` double NOT NULL DEFAULT 0,
  `barcode` varchar(25) NOT NULL DEFAULT '',
  `days_heald` varchar(30) NOT NULL DEFAULT '',
  `expiration` varchar(30) NOT NULL DEFAULT '',
  `damage_product` float NOT NULL DEFAULT 0,
  `damage_date` varchar(30) NOT NULL DEFAULT '',
  `product_supplier` varchar(200) NOT NULL DEFAULT '',
  `product_code` int(11) NOT NULL DEFAULT 0,
  `reorder_level` float NOT NULL DEFAULT 0,
  `unit_stock` varchar(30) NOT NULL DEFAULT '',
  `unit_price` double NOT NULL DEFAULT 0,
  `custom_inventory` varchar(100) NOT NULL DEFAULT '',
  `manufacturer` varchar(200) NOT NULL DEFAULT '',
  `tax` float NOT NULL DEFAULT 0,
  `out_of_stock` varchar(30) NOT NULL DEFAULT '',
  `expired_product` int(11) NOT NULL DEFAULT 0,
  `batch` varchar(20) NOT NULL DEFAULT '',
  `warehouse_code` varchar(20) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_listings`
--

INSERT INTO `product_listings` (`id`, `product_id`, `ad_type`, `qty`, `tittle`, `photo1`, `photo2`, `photo3`, `photo4`, `photo_sizes`, `conditions`, `price`, `price_enter`, `brand`, `additional`, `model`, `description`, `category_id`, `category_id_custom`, `user_key`, `meta_tag`, `sub_category`, `post_date`, `post_time`, `viewed`, `product_setup`, `cart_active`, `tracker_item`, `cost_price`, `barcode`, `days_heald`, `expiration`, `damage_product`, `damage_date`, `product_supplier`, `product_code`, `reorder_level`, `unit_stock`, `unit_price`, `custom_inventory`, `manufacturer`, `tax`, `out_of_stock`, `expired_product`, `batch`, `warehouse_code`, `status`) VALUES
(40, '', 'featured', 0, 'costumes', './ads/73696521382475498100.jpg', '', '', '', 0, 'new', 0, 18000, 'costumes', 'Jewelries', 'costumes', 'costumes', 5, 0, 'e3af09299f9d897bc36168aea4fc88a5b79735d7', '', 'Jewelries', '2018-12-21', '', 549, 2, 0, 0, 0, '0', '', '', 0, '', '', 0, 0, '0', 0, '', '', 0, '', 0, '', '', 0),
(690, '', '', 14, 'SLICED BEETS', '', '', '', '', 0, '', 0, 0, '', '', '', 'SLICED BEETS', 0, 712208, '88c10400afc54b66f7e42757ff787fbce81582bb', '', '', '2019-08-16 09:22:41am', '', 10, 0, 0, 0, 0, '0', '', '', 0, '', 'Supplier A', 0, 5, '0', 0, 'yes', '', 0, 'no', 0, '', '', 0),
(1206, '5ed501074b226', '', 10, 'Samsung Galaxy note 10', '', '', '', '', 0, 'New', 220000, 220000, '', '', 'Galaxy', 'The latest Samsung galaxy note', 0, 33, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '01-Jun-2020', '1591017735', 0, 0, 0, 0, 200000, '87657465', '', '2020-06-11', 0, '', '8', 0, 3, 'Piece', 0, 'yes', 'Samsung Electronics', 0, '', 0, 'BTCH-4865856', '', 1),
(1207, '5ed50161d04c5', '', 10, 'Samsung Galaxy note 10', '', '', '', '', 0, 'New', 220000, 220000, '', '', 'Galaxy', 'The latest Samsung galaxy note', 0, 33, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '01-Jun-2020', '1591017825', 0, 0, 0, 0, 200000, '87657465', '', '2020-06-11', 0, '', '8', 0, 3, 'Piece', 0, 'yes', 'Samsung Electronics', 0, '', 0, 'BTCH-4865856', '', 1),
(1212, '5edf7e131a9cb', '', 25, 'iPhone X', '', '', '', '', 0, 'New', 0, 245000, '', '', 'x-series', 'Come alive with the all new apple iphone-X.', 0, 39, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '09-Jun-2020', '1591705107', 0, 0, 0, 0, 190000, 'CTYTTEWF', '', '2020-09-26', 0, '', '7', 0, 2, 'Piece', 0, 'yes', 'Apple inc', 0, '', 0, 'REWRERTTEY', '', 1),
(1213, '5ee89ed72a76f', '', 12, 'Sony vio', '', '', '', '', 0, 'New', 0, 150000, '', '', 'VIO', 'Sony at it\'s best', 0, 53, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '16-Jun-2020', '1592303319', 0, 0, 0, 0, 125000, 'AFR1212121', '', '2020-10-23', 0, '', '7', 0, 5, 'Piece', 0, 'yes', 'Sony electronics', 0, '', 0, '9823', '', 1),
(1215, '5eecf4cc74265', '', 25, 'Nokia 6', '', '', '', '', 0, 'New', 0, 75000, '', '', 'r300op', '', 0, 54, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '19-Jun-2020', '1592587468', 0, 0, 0, 0, 65000, '293994', '', '12/12/2019', 0, '', '0', 0, 8, 'Piece', 0, 'yes', '', 0, '', 0, '12op394', '', 1),
(1216, '5eecf4f864362', '', 25, 'Xperia-Z', '', '', '', '', 0, 'New', 0, 75000, '', '', 'r300op', '', 0, 53, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '19-Jun-2020', '1592587512', 0, 0, 0, 0, 65000, '293994', '', '12/12/2019', 0, '', '0', 0, 8, 'Piece', 0, 'yes', '', 0, '', 0, '12op394', '', 1),
(1217, '5f1ecf6278f74', '', 14, 'rice', '', '', '', '', 0, 'new', 0, 13949, '', '', 'r300op', '', 0, 54, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '27-Jul-2020', '1595854690', 0, 0, 0, 0, 12223, '293994', '', '12/12/2019', 0, '', '0', 0, 8, 'kg', 0, 'yes', '', 0, '', 0, '12op394', '', 0),
(1218, '5edf7e131a9cb', '', 25, 'iPhone X', '', '', '', '', 0, 'New', 0, 245000, '', '', 'x-series', 'Come alive with the all new apple iphone-X.', 0, 39, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '09-Jun-2020', '1591705107', 0, 0, 0, 0, 190000, 'CTYTTEWF', '', '2020-09-26', 0, '', '7', 0, 2, 'Piece', 0, 'yes', 'Apple inc', 0, '', 0, 'REWRERTTEY', '', 1),
(1219, '5ed501074b226', '', 10, 'Samsung Galaxy note 10', '', '', '', '', 0, 'New', 220000, 220000, '', '', 'Galaxy', 'The latest Samsung galaxy note', 0, 33, '6241e664ef7671e9945829bd1d401f275bc7693e', '', '', '01-Jun-2020', '1591017735', 0, 0, 0, 0, 200000, '87657465', '', '2020-06-11', 0, '', '8', 0, 3, 'Piece', 0, 'yes', 'Samsung Electronics', 0, '', 0, 'BTCH-4865856', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_tables`
--

CREATE TABLE `product_tables` (
  `pid` int(11) NOT NULL,
  `key_grant` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `category_inventory` int(11) NOT NULL,
  `items_name` varchar(255) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `description_inventory` varchar(255) NOT NULL,
  `attribute` varchar(255) NOT NULL,
  `item_size` varchar(255) NOT NULL,
  `on_hand_qty` float NOT NULL,
  `aval_qty` float NOT NULL,
  `reorder_point` float NOT NULL,
  `unit_measurement` varchar(50) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `upc` varchar(100) NOT NULL,
  `alt_look_up` varchar(100) NOT NULL,
  `regular_price` float NOT NULL,
  `order_price` float NOT NULL,
  `average_unit_cost` float NOT NULL,
  `tax` float NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL,
  `cat1` int(11) NOT NULL,
  `cat2` int(11) NOT NULL,
  `cat3` int(11) NOT NULL,
  `cat4` int(11) NOT NULL,
  `cr_date` varchar(20) NOT NULL,
  `ads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tables`
--

INSERT INTO `product_tables` (`pid`, `key_grant`, `item_type`, `category_inventory`, `items_name`, `vendor_id`, `description_inventory`, `attribute`, `item_size`, `on_hand_qty`, `aval_qty`, `reorder_point`, `unit_measurement`, `barcode`, `upc`, `alt_look_up`, `regular_price`, `order_price`, `average_unit_cost`, `tax`, `photo1`, `photo2`, `photo3`, `photo4`, `cat1`, `cat2`, `cat3`, `cat4`, `cr_date`, `ads`) VALUES
(33, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Inventory', 39, 'Benz ouv 2021 latest', 5, 'Whether we&rsquo;re exploring ways to make motoring more sustainable with eMobility, or pushing the boundaries of design and technology with our future cars, innovation underpins everything we do at Mercedes-Benz. Since inventing the car, we&rsquo;ve neve', 'black', '', 22, 22, 2, 'kg', '', '', '', 44000, 34000, 34000, 0, '../ads/265614103734578909821157181912_postomg.jpg', '../ads/81509643147296738025460887083_postomg.jpg', '../ads/02519281638643547970169666043_postomg.jpg', '../ads/20578126744319036958183150205_postomg.jpg', 1, 1, 1, 4, '', 0),
(39, '6241e664ef7671e9945829bd1d401f275bc7693e', 'Inventory', 0, 'Casual Crossbody Shoulder Chest Bag-Grey', 5, 'EILIFINTE B06 Casual Crossbody Shoulder Chest Bag-Grey', 'EILIFINTE B06 Casual Crossbody Shoulder Chest Bag-Grey', '34', 35, 44, 4, 'kg', '', '', '', 60000, 7000, 0, 0, '../ads/67756885942323409101112178080_postomg.jpg', '../ads/78390166895270534241126859688_postomg.jpg', '../ads/84783055021499626731302254843_postomg.jpg', '../ads/55306219389764872401453803065_postomg.jpg', 1, 1, 1, 2, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `promoter_id` varchar(50) NOT NULL,
  `advertiser_id` varchar(50) NOT NULL,
  `advert_id` varchar(25) NOT NULL,
  `channel` varchar(15) NOT NULL DEFAULT '',
  `amount` double NOT NULL,
  `status` int(2) NOT NULL,
  `country` varchar(50) NOT NULL DEFAULT '',
  `month` varchar(15) NOT NULL,
  `date_shared` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `promoter_id`, `advertiser_id`, `advert_id`, `channel`, `amount`, `status`, `country`, `month`, `date_shared`) VALUES
(1, 'POMG-1588385014', 'POMG-1588384756', '5eb1c1884b5ca', '', 70, 1, '', '2020-May', '10-May-2020'),
(2, 'POMG-1588385014', 'POMG-1588384756', '5eb1c32835cc9', '', 140, 1, '', '2020-May', '10-May-2020');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '',
  `store_key` varchar(50) NOT NULL DEFAULT '',
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `ordered_by` varchar(50) NOT NULL DEFAULT '0',
  `qty` int(11) NOT NULL DEFAULT 1,
  `returned` int(11) NOT NULL DEFAULT 0,
  `supplier_id` int(11) NOT NULL DEFAULT 0,
  `supplier_name` varchar(100) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0,
  `note` longtext NOT NULL,
  `date_requested` varchar(25) NOT NULL DEFAULT '',
  `date_supplied` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `product_id`, `store_key`, `shop_id`, `ordered_by`, `qty`, `returned`, `supplier_id`, `supplier_name`, `price`, `status`, `note`, `date_requested`, `date_supplied`) VALUES
(1, '5edf7e131a9cb', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '11', 25, 6, 7, 'Lawrence', 200000, 1, 'Sharp sharp order', '11-Jun-2020', '11-Jun-2020'),
(2, '5ed50161d04c5', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '11', 20, 1, 6, 'okoro nnanna', 250000, 2, 'new arrival', '11-Jun-2020', '12-Jun-2020'),
(3, '5ee89ed72a76f', '6241e664ef7671e9945829bd1d401f275bc7693e', 8, '11', 10, 0, 8, 'Lingard Jesse', 130000, 0, 'Quick order', '17-Jun-2020', ''),
(4, '5ee89ed72a76f', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '5ec52e80d7784', 15, 0, 6, 'okoro nnanna', 55000, 1, 'Quick order, product on high demand.', '17-Jun-2020', '17-Jun-2020');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL DEFAULT '',
  `recipient` varchar(25) NOT NULL DEFAULT '',
  `rating` double NOT NULL DEFAULT 0,
  `user_remark` varchar(500) NOT NULL DEFAULT '',
  `date_rated` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `user`, `recipient`, `rating`, `user_remark`, `date_rated`) VALUES
(3, 'USER-1586514893', '4', 4, 'A very nice product, received as ordered', '2020-Apr-25'),
(4, 'USER-1586514893', '8', 3, '', '2020-Apr-25');

-- --------------------------------------------------------

--
-- Table structure for table `returned_products`
--

CREATE TABLE `returned_products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '',
  `store_key` varchar(100) NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL DEFAULT 1,
  `product_condition` varchar(25) NOT NULL DEFAULT '',
  `channel` varchar(25) NOT NULL DEFAULT '',
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `sales_id` varchar(50) NOT NULL DEFAULT '',
  `returned_by` varchar(100) NOT NULL DEFAULT '',
  `date_returned` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `returned_products`
--

INSERT INTO `returned_products` (`id`, `product_id`, `store_key`, `quantity`, `product_condition`, `channel`, `shop_id`, `sales_id`, `returned_by`, `date_returned`) VALUES
(1, '5ed50161d04c5', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, 'Good', 'consumer', 1, '5ee0cbaadac54', 'Doe_nnis', '11-Jun-2020'),
(2, '5ed501074b226', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, 'Bad', 'consumer', 1, '5ee0cbaadac54', 'Doe_nnis', '11-Jun-2020'),
(3, '5edf7e131a9cb', '6241e664ef7671e9945829bd1d401f275bc7693e', 5, '', 'supplier', 1, '1', 'Doe_nnis', '12-Jun-2020'),
(4, '5edf7e131a9cb', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, 'Factory Error', 'supplier', 1, '1', 'Doe_nnis', '12-Jun-2020'),
(5, '5ed50161d04c5', '6241e664ef7671e9945829bd1d401f275bc7693e', 1, 'Factory Error', 'supplier', 1, '2', 'Edwin Eke', '17-Jun-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales_id` varchar(25) NOT NULL DEFAULT '',
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `store_key` varchar(100) NOT NULL DEFAULT '',
  `product_id` varchar(50) NOT NULL DEFAULT '',
  `shop_prod_id` int(11) NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL DEFAULT 1,
  `price_sold` double NOT NULL DEFAULT 0,
  `selling_price` double NOT NULL DEFAULT 0,
  `cost_price` double NOT NULL DEFAULT 0,
  `seller_id` varchar(50) NOT NULL DEFAULT '',
  `seller_name` varchar(100) NOT NULL DEFAULT '',
  `seller_type` varchar(25) NOT NULL DEFAULT '',
  `returned` int(11) NOT NULL DEFAULT 0,
  `date_sold` varchar(25) NOT NULL DEFAULT '',
  `week` int(11) NOT NULL DEFAULT 1,
  `month` varchar(20) NOT NULL,
  `payment_method` varchar(15) NOT NULL DEFAULT 'Cash',
  `customer` int(11) NOT NULL DEFAULT 0,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(100) NOT NULL DEFAULT '',
  `shop_address` varchar(100) NOT NULL DEFAULT '',
  `store_key` varchar(100) NOT NULL DEFAULT '',
  `manager_id` varchar(25) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT 0,
  `shop_type` varchar(25) NOT NULL DEFAULT 'shop',
  `date_added` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_address`, `store_key`, `manager_id`, `status`, `shop_type`, `date_added`) VALUES
(1, 'phone affairs dline branch', 'Dline portharcourt', '6241e664ef7671e9945829bd1d401f275bc7693e', '5ec52e80d7784', 1, 'default', '19-May-2020'),
(2, 'phone affairs maitama branch', 'No 18 mississippi street, Maitama', '6241e664ef7671e9945829bd1d401f275bc7693e', '', 1, 'shop', '19-May-2020'),
(8, 'phone affairs lekki branch', 'Lekki, lagos Nigeria', '6241e664ef7671e9945829bd1d401f275bc7693e', '', 1, 'shop', '19-May-2020'),
(9, 'Head office', 'garrison', '5934a97705fc6acd078ddce306bbd63a9b57ef0b', '', 1, 'default', '08-Jun-2020');

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE `shop_products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '',
  `qty` int(11) NOT NULL DEFAULT 1,
  `reorder` double NOT NULL DEFAULT 1,
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `store_key` varchar(100) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT 1,
  `date_added` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `product_id`, `qty`, `reorder`, `shop_id`, `store_key`, `status`, `date_added`) VALUES
(1, '5ed50161d04c5', 9, 1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '01-Jun-2020'),
(6, '5edf7e131a9cb', 37, 1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '09-Jun-2020'),
(7, '5ed501074b226', 38, 1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '01-Jun-2020'),
(8, '5ee89ed72a76f', 23, 30, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '16-Jun-2020'),
(19, '5eecf4cc74265', 20, 1, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '19-Jun-2020'),
(22, '5eecf4f864362', 64, 12, 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '04-Aug-2020');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `account_type` varchar(15) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT 0,
  `store_key` varchar(100) NOT NULL DEFAULT '',
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(100) NOT NULL DEFAULT '',
  `priv` int(1) NOT NULL DEFAULT 0,
  `date_added` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `account_type`, `status`, `store_key`, `shop_id`, `password`, `profile_photo`, `priv`, `date_added`) VALUES
(2, '5ec52e80d7784', 'Edwin', 'Eke', 'edwinnelly25@gmail.com', '0987654321', 'Yelocode systems, elekahia, Rivers', 'Manager', 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '3c7a591985b5e780ebcc40916fdeb443b8541c2a', '', 1, '20-May-2020'),
(3, '5ec52f0e3faff', 'Lawson', 'Chuks', 'lawson@postomg.com', '0936743646', 'Elekahia town hall, Portharcourt, rivers state', 'Sales person', 1, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, '7349bf9866fb7b167a2e132224aa1eae90fc8e64', '', 1, '20-May-2020');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `store_key` varchar(100) NOT NULL DEFAULT '',
  `package_id` int(1) NOT NULL DEFAULT 0,
  `amount_paid` double NOT NULL DEFAULT 0,
  `payment_id` varchar(50) NOT NULL DEFAULT '',
  `subscription_starts` varchar(25) NOT NULL DEFAULT '',
  `subscription_ends` double NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `duration` varchar(25) NOT NULL DEFAULT '',
  `end_date` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `store_key`, `package_id`, `amount_paid`, `payment_id`, `subscription_starts`, `subscription_ends`, `status`, `duration`, `end_date`) VALUES
(1, '6241e664ef7671e9945829bd1d401f275bc7693e', 0, 0, '', '17-Jun-2020', 1608235550, 1, '6 months', '17-Dec-2020'),
(2, '6241e664ef7671e9945829bd1d401f275bc7693e', 1, 25000, 'PGINV-YM3EZ3PPS1', '18-Jun-2020', 1595103910, 1, '1 month', '18-Jul-2020'),
(3, '6241e664ef7671e9945829bd1d401f275bc7693e', 2, 50000, 'PGINV-L8L5ULDXKC', '18-Jun-2020', 1595104059, 1, '1 month', '18-Jul-2020');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_lentose`
--

CREATE TABLE `supplier_lentose` (
  `id` int(11) NOT NULL,
  `key_grant` varchar(256) NOT NULL,
  `vendor_code` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(33) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `phone2` varchar(33) NOT NULL,
  `status` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `created_on` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_lentose`
--

INSERT INTO `supplier_lentose` (`id`, `key_grant`, `vendor_code`, `vendor_name`, `address`, `city`, `state`, `zip`, `phone`, `phone2`, `status`, `note`, `email`, `website`, `created_on`) VALUES
(5, '6241e664ef7671e9945829bd1d401f275bc7693e', 775763, 'wilson edwin', 'No112 Elekiahia phc', 'phc', 'River State', '234', '09038874848', '08037262536', '', 'this is a working page', 'wilson@gmail.com', 'www.wilson.com', '22-11-2022'),
(10, '6241e664ef7671e9945829bd1d401f275bc7693e', 1135554, 'sinduy', 'tjrdutrdghg', 'c', 'hgch', 'gc', 'cghg', 'cgc', '', 'h', '', 'test@mail.com', '24-11-2022'),
(12, '6241e664ef7671e9945829bd1d401f275bc7693e', 746182, 'ify ify', 'edswfgvasf', 'dfsdf', 'dsaf', 'fa', '232433232', '232323', '', 'dfsvdfv', '', '', '05-01-2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT 'n/a',
  `last_name` varchar(50) NOT NULL DEFAULT 'n/a',
  `password` varchar(500) NOT NULL DEFAULT '',
  `profile_photo` varchar(500) NOT NULL DEFAULT 'n/a',
  `phone` varchar(25) NOT NULL DEFAULT '',
  `fb_name` varchar(100) NOT NULL DEFAULT '',
  `tw_name` varchar(100) NOT NULL DEFAULT '',
  `ig_name` varchar(100) NOT NULL DEFAULT '',
  `bank_params` longtext NOT NULL,
  `rating_params` longtext NOT NULL,
  `fb_followers` int(11) NOT NULL DEFAULT 0,
  `tw_followers` int(11) NOT NULL DEFAULT 0,
  `ig_followers` int(11) NOT NULL DEFAULT 0,
  `fb_link` varchar(500) NOT NULL DEFAULT '',
  `ig_link` varchar(500) NOT NULL DEFAULT '',
  `tw_link` varchar(500) NOT NULL DEFAULT '',
  `state` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(500) NOT NULL DEFAULT 'n/a',
  `about_me` varchar(500) NOT NULL DEFAULT 'lets know you',
  `wallet` double NOT NULL DEFAULT 0,
  `fund` double NOT NULL DEFAULT 0,
  `lwt` varchar(50) NOT NULL DEFAULT '',
  `lwa` double NOT NULL DEFAULT 0,
  `lct` varchar(50) NOT NULL DEFAULT '',
  `lca` double NOT NULL DEFAULT 0,
  `cb` double NOT NULL DEFAULT 0,
  `store_key` varchar(500) NOT NULL DEFAULT 'n/a',
  `country` varchar(50) NOT NULL DEFAULT 'Nigeria',
  `status` int(2) NOT NULL DEFAULT 0,
  `month_joined` varchar(25) NOT NULL DEFAULT '',
  `date_joined` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `email`, `first_name`, `last_name`, `password`, `profile_photo`, `phone`, `fb_name`, `tw_name`, `ig_name`, `bank_params`, `rating_params`, `fb_followers`, `tw_followers`, `ig_followers`, `fb_link`, `ig_link`, `tw_link`, `state`, `address`, `about_me`, `wallet`, `fund`, `lwt`, `lwa`, `lct`, `lca`, `cb`, `store_key`, `country`, `status`, `month_joined`, `date_joined`) VALUES
(1, 'POMG-1588384756', 'tadashimelo', 'tadashimelo@gmail.com', 'Elochukwu', 'Azubuike', 'd19b994790dbc22ed5bed3c81c8d094d7eeb53f2', '5ec5bafb7f9f4.jpeg', '08108846812', 'tadashimelo', 'tadashimelo', 'tadashimelo', '{\"bank_name\":\"First Bank\",\"account_type\":\"Savings\",\"account_name\":\"Azubuike Elochukwu\",\"account_number\":\"309365654\"}', 'n/a', 2000, 15, 190, 'https://facebook.com/tadashimelo', 'https://instagram.com/tadashimelo', 'https://twitter.com/tadashimelo', 'Anambra', 'Psychiatric road, portharcourt', 'The very best of human to ever grace the earth.', 13500, 0, '1589023595', 1000, '15078867565', 50000, 13500, 'e3af09299f9d897bc36168aea4fc88a5b79735d7', 'Nigeria', 11, 'May-2020', '01-May-2020'),
(2, 'POMG-1588385014', 'insurmountable', 'insurmountable@gmail.com', 'Ifechukwu', 'Azubuike', 'fa46d694c1f02c5be0856be4b0722efa99c331fd', '5ec11f2965d50.jpeg', '08108846813', 'tadashimelo', 'tadashimelo', 'tadashimelo', '{\"bank_name\":\"United Bank for Africa (UBA)\",\"account_type\":\"Savings\",\"account_name\":\"Ifechukwu Azubuike\",\"account_number\":\"0387567656\"}', 'n/a', 1000, 3660, 2000, 'https://facebook.com/tadashimelo', 'https://instagram.com/tadashimelo', 'https://twitter.com/tadashimelo', 'Anambra', 'Benin', 'Muy persona interesante', 840, 0, '1589108363', 5000, '1589107560', 140, 840, 'n/a', 'Nigeria', 11, 'May-2020', '01-May-2020'),
(4, 'POMG-5ebb2cf349809', 'gabilicious', 'gabi@gmail.com', 'Gabriel', 'Eze', 'd19b994790dbc22ed5bed3c81c8d094d7eeb53f2', '5ebf3fb70ae9c.jpeg', '027864867', 'chuqdennis', 'chuqdennis', 'chuqdennis', 'n/a', 'n/a', 3400, 564, 593, 'https://facebook.com/chuqdennis', 'https://instagram.com/chuqdennis', 'https://twitter/chuqdennis', 'Federal Capital Territory', 'Lugbe Abuja Municipal', 'I\'m the Gabilicious Gabbi, there can only be one Gabbi.', 0, 0, '', 0, '', 0, 0, 'n/a', 'Nigeria', 9, 'May-2020', '12-May-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_payments`
--
ALTER TABLE `admin_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_four`
--
ALTER TABLE `category_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_one`
--
ALTER TABLE `category_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_three`
--
ALTER TABLE `category_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_two`
--
ALTER TABLE `category_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customads_category`
--
ALTER TABLE `customads_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_lentose`
--
ALTER TABLE `customer_lentose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_category`
--
ALTER TABLE `custom_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debt_payments`
--
ALTER TABLE `debt_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debt_profile`
--
ALTER TABLE `debt_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_shop_carts`
--
ALTER TABLE `e_shop_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_shop_members`
--
ALTER TABLE `e_shop_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_data`
--
ALTER TABLE `member_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_listings`
--
ALTER TABLE `product_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tables`
--
ALTER TABLE `product_tables`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `returned_products`
--
ALTER TABLE `returned_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_lentose`
--
ALTER TABLE `supplier_lentose`
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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_payments`
--
ALTER TABLE `admin_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `category_four`
--
ALTER TABLE `category_four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_one`
--
ALTER TABLE `category_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_three`
--
ALTER TABLE `category_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_two`
--
ALTER TABLE `category_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customads_category`
--
ALTER TABLE `customads_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `customer_lentose`
--
ALTER TABLE `customer_lentose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `custom_category`
--
ALTER TABLE `custom_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `debt_payments`
--
ALTER TABLE `debt_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `debt_profile`
--
ALTER TABLE `debt_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_shop_carts`
--
ALTER TABLE `e_shop_carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_shop_members`
--
ALTER TABLE `e_shop_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `member_data`
--
ALTER TABLE `member_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `product_listings`
--
ALTER TABLE `product_listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1220;

--
-- AUTO_INCREMENT for table `product_tables`
--
ALTER TABLE `product_tables`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `returned_products`
--
ALTER TABLE `returned_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_lentose`
--
ALTER TABLE `supplier_lentose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
