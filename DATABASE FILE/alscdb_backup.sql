-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 06:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alscdb`
--
CREATE DATABASE IF NOT EXISTS `alscdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alscdb`;

-- --------------------------------------------------------

--
-- Table structure for table `store_customers`
--

CREATE TABLE `store_customers` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `b2_last_name` text NOT NULL,
  `b2_first_name` text NOT NULL,
  `b2_middle_name` text NOT NULL,
  `city_prov` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `address_abroad` text NOT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(11) NOT NULL,
  `viber` varchar(25) NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `employment_status` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_customers`
--

INSERT INTO `store_customers` (`id`, `last_name`, `first_name`, `middle_name`, `address`, `b2_last_name`, `b2_first_name`, `b2_middle_name`, `city_prov`, `zip_code`, `address_abroad`, `birthdate`, `age`, `viber`, `gender`, `civil_status`, `employment_status`, `email`, `phone`) VALUES
(70, 'SANCHEZsfewgw', 'LIEZLwc', 'SG', 'CULYANIN', '', '', '', 'PULILAN, BULACAN', '3002', '', '2022-11-08', 0, '', 'M', 'Single', 'Employed', 'sanchez@gmail.com', '09123454546'),
(97, 'DIAZ', 'FRANCIS', '', 'Bocaue', '', '', '', 'Bulacan', '3000', '', '2022-10-11', 0, '', 'M', 'Single', 'Employed', 'sample@gmail.com', '09128457581'),
(110, 'Tantoco', 'Donita Rose', 'Pingol', 'San Pablo', 'Tantoco', 'Janry Kiel', 'Pingol', 'Malolos', '3000', 'California', '1996-12-09', 25, '+639678755116', 'F', 'Married', 'OCW', 'donitarosetantoco2028@gmail.com', '09678755116'),
(113, 'gr', 'g', 'gwe', 'gr', 'gew', 'gew', 'gwe', 'gew', '53253', 'sef', '2022-11-22', -1, '352', 'M', 'Single', 'Employed', 'ewfefwff', '32523'),
(114, 'wfe', 'few', 'fwe', 'fwe', '', '', '', 'fwe', '32423', '', '2016-10-11', 6, '31424', 'M', 'Single', 'Employed', 'sample@gmail.com', '42124');

-- --------------------------------------------------------

--
-- Table structure for table `t_agents`
--

CREATE TABLE `t_agents` (
  `c_code` int(11) NOT NULL,
  `c_last_name` text DEFAULT NULL,
  `c_first_name` text DEFAULT NULL,
  `c_middle_initial` text DEFAULT NULL,
  `c_nick_name` text DEFAULT NULL,
  `c_sex` text DEFAULT NULL,
  `c_birthdate` date DEFAULT NULL,
  `c_birth_place` text DEFAULT NULL,
  `c_address_ln1` text DEFAULT NULL,
  `c_address_ln2` text DEFAULT NULL,
  `c_tel_no` text DEFAULT NULL,
  `c_civil_status` text DEFAULT NULL,
  `c_sss_no` text DEFAULT NULL,
  `c_tin` text DEFAULT NULL,
  `c_status` text DEFAULT NULL,
  `c_recruited_by` text DEFAULT NULL,
  `c_hire_date` date DEFAULT NULL,
  `c_position` text DEFAULT NULL,
  `c_network` text DEFAULT NULL,
  `c_division` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_agents`
--

INSERT INTO `t_agents` (`c_code`, `c_last_name`, `c_first_name`, `c_middle_initial`, `c_nick_name`, `c_sex`, `c_birthdate`, `c_birth_place`, `c_address_ln1`, `c_address_ln2`, `c_tel_no`, `c_civil_status`, `c_sss_no`, `c_tin`, `c_status`, `c_recruited_by`, `c_hire_date`, `c_position`, `c_network`, `c_division`) VALUES
(111, 'Tantoco', 'Donita Rose', 'Pingol', 'downits', 'M', '2022-11-23', 'Malolos', 'Bulacan, Bulacan', 'San Pablo', '567890', 'Divorced', '12345', '123456789', 'Inactive', 'Francis Diazss', '2022-11-16', 'PD', '13', 'Ingenious'),
(152, 'Sassa', 'Gurl', '', 'sasa', 'F', '1996-08-09', 'Bulacan', 'Bulacan, Bulacan', '', '12345678901', 'Single', '', '', 'Active', 'Francis Diaz', '2022-11-21', 'PSMI', '19', 'Aspen');

-- --------------------------------------------------------

--
-- Table structure for table `t_csr`
--

CREATE TABLE `t_csr` (
  `c_csr_no` bigint(20) NOT NULL,
  `c_lot_lid` bigint(8) NOT NULL,
  `c_date_of_sale` date DEFAULT current_timestamp(),
  `c_b1_last_name` text DEFAULT NULL,
  `c_b1_first_name` text DEFAULT NULL,
  `c_b1_middle_name` text DEFAULT NULL,
  `c_b2_last_name` text DEFAULT NULL,
  `c_b2_first_name` text DEFAULT NULL,
  `c_b2_middle_name` text DEFAULT NULL,
  `c_address` text DEFAULT NULL,
  `c_city_prov` text DEFAULT NULL,
  `c_zip_code` text DEFAULT NULL,
  `c_address_abroad` text DEFAULT NULL,
  `c_billing_address` text NOT NULL,
  `c_birthday` date DEFAULT NULL,
  `c_age` int(11) DEFAULT NULL,
  `c_sex` text DEFAULT NULL,
  `c_mobile_no` text DEFAULT NULL,
  `c_mobile_abroad` text NOT NULL,
  `c_viber_no` text DEFAULT NULL,
  `c_civil_status` text DEFAULT NULL,
  `c_email` text DEFAULT NULL,
  `c_employment_status` text DEFAULT NULL,
  `c_lot_area` double DEFAULT NULL,
  `c_price_sqm` double DEFAULT NULL,
  `c_lot_discount` double DEFAULT NULL,
  `c_lot_discount_amt` double DEFAULT NULL,
  `c_house_model` text DEFAULT NULL,
  `c_floor_area` double DEFAULT NULL,
  `c_house_price_sqm` double DEFAULT NULL,
  `c_house_discount` double DEFAULT NULL,
  `c_house_discount_amt` double DEFAULT NULL,
  `c_tcp_discount` double DEFAULT NULL,
  `c_tcp_discount_amt` double DEFAULT NULL,
  `c_tcp` double DEFAULT NULL,
  `c_vat_amount` double DEFAULT NULL,
  `c_net_tcp` double DEFAULT NULL,
  `c_reservation` double DEFAULT NULL,
  `c_payment_type1` text DEFAULT NULL,
  `c_payment_type2` text DEFAULT NULL,
  `c_down_percent` double DEFAULT NULL,
  `c_net_dp` double DEFAULT NULL,
  `c_no_payments` int(11) DEFAULT NULL,
  `c_monthly_down` double DEFAULT NULL,
  `c_first_dp` double DEFAULT NULL,
  `c_full_down` double DEFAULT NULL,
  `c_amt_financed` double DEFAULT NULL,
  `c_terms` int(11) DEFAULT NULL,
  `c_interest_rate` double DEFAULT NULL,
  `c_fixed_factor` double DEFAULT NULL,
  `c_monthly_payment` double DEFAULT NULL,
  `c_start_date` date DEFAULT NULL,
  `c_csr_status` text NOT NULL,
  `c_reserve_status` text NOT NULL,
  `c_ra_status` text NOT NULL,
  `c_remarks` text NOT NULL,
  `c_date_created` date NOT NULL DEFAULT current_timestamp(),
  `c_date_updated` date NOT NULL DEFAULT current_timestamp(),
  `c_created_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_csr`
--

INSERT INTO `t_csr` (`c_csr_no`, `c_lot_lid`, `c_date_of_sale`, `c_b1_last_name`, `c_b1_first_name`, `c_b1_middle_name`, `c_b2_last_name`, `c_b2_first_name`, `c_b2_middle_name`, `c_address`, `c_city_prov`, `c_zip_code`, `c_address_abroad`, `c_billing_address`, `c_birthday`, `c_age`, `c_sex`, `c_mobile_no`, `c_mobile_abroad`, `c_viber_no`, `c_civil_status`, `c_email`, `c_employment_status`, `c_lot_area`, `c_price_sqm`, `c_lot_discount`, `c_lot_discount_amt`, `c_house_model`, `c_floor_area`, `c_house_price_sqm`, `c_house_discount`, `c_house_discount_amt`, `c_tcp_discount`, `c_tcp_discount_amt`, `c_tcp`, `c_vat_amount`, `c_net_tcp`, `c_reservation`, `c_payment_type1`, `c_payment_type2`, `c_down_percent`, `c_net_dp`, `c_no_payments`, `c_monthly_down`, `c_first_dp`, `c_full_down`, `c_amt_financed`, `c_terms`, `c_interest_rate`, `c_fixed_factor`, `c_monthly_payment`, `c_start_date`, `c_csr_status`, `c_reserve_status`, `c_ra_status`, `c_remarks`, `c_date_created`, `c_date_updated`, `c_created_by`) VALUES
(5, 14102332, '2022-11-10', 'wfe', 'few', 'fwe', '', '', '', 'fwe', 'fwe', '32423', '', '', '2016-10-11', 6, 'M', '42124', '', '31424', 'Single', 'sample@gmail.com', 'Employed', 32, 23, 0, 0, 'Dahlia', 0, 0, 0, 0, 0, 0, 736, 0, 736, 0, 'Spot Cash', 'Monthly Amortization', 0, 0, 0, 0, 0, 0, 736, 0, 0, 0, 0, '2023-01-10', 'Approved', 'Paid', '', '', '2022-11-10', '2022-11-10', 'marisa'),
(6, 14102332, '2022-11-10', 'Tantoco', 'Donita Rose', 'Pingol', 'Tantoco', 'Janry Kiel', 'Pingol', 'San Pablo', 'Malolos', '3000', 'California', '', '1996-12-09', 25, 'F', '09678755116', '', '+639678755116', 'Married', 'donitarosetantoco2028@gmail.com', 'OCW', 32, 23, 0, 0, 'Dahlia', 0, 0, 0, 0, 0, 0, 736, 0, 736, 0, 'Spot Cash', 'Monthly Amortization', 0, 0, 0, 0, 0, 0, 736, 0, 0, 0, 0, '2023-01-10', 'Approved', 'Paid', '', '', '2022-11-10', '2022-11-10', 'marisa'),
(7, 14100101, '2022-11-14', 'DIAZ', 'FRANCIS', '', '', '', '', 'Bocaue', 'Bulacan', '3000', '', '', '2022-10-11', 0, 'M', '09128457581', '', '', 'Single', 'sample@gmail.com', 'Employed', 150, 7000, 0, 0, 'Azalea', 0, 0, 0, 0, 0, 0, 1050000, 126000, 1176000, 0, 'No DownPayment', 'Deferred Cash Payment', 0, 0, 0, 0, 0, 0, 1176000, 120, 0, 0, 9800, '2022-12-14', 'Approved', 'Paid', '', '', '2022-11-14', '2022-11-14', 'judedel');

-- --------------------------------------------------------

--
-- Table structure for table `t_csr_comments`
--

CREATE TABLE `t_csr_comments` (
  `comment_id` int(11) NOT NULL,
  `c_csr_no` text NOT NULL,
  `name` text NOT NULL,
  `comment` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `reply_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_csr_comments`
--

INSERT INTO `t_csr_comments` (`comment_id`, `c_csr_no`, `name`, `comment`, `created_at`, `reply_of`) VALUES
(64, '5', 'judedel', '212', '2022-11-14 15:02:59', 0),
(65, '5', 'judedel', '1212', '2022-11-14 15:09:44', 0),
(66, '6', 'judedel', 'i love you', '2022-11-14 15:13:37', 0),
(67, '6', 'judedel', '121212', '2022-11-14 15:15:29', 0),
(68, '6', 'judedel', '11111', '2022-11-14 15:19:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_csr_commission`
--

CREATE TABLE `t_csr_commission` (
  `c_csr_no` bigint(11) NOT NULL,
  `c_code` bigint(20) NOT NULL,
  `c_position` text NOT NULL,
  `c_agent` text NOT NULL,
  `c_amount` double NOT NULL,
  `c_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_csr_commission`
--

INSERT INTO `t_csr_commission` (`c_csr_no`, `c_code`, `c_position`, `c_agent`, `c_amount`, `c_rate`) VALUES
(3, 152, ' PSMI ', 'Sassa , Gurl ', 41928.25, 1),
(5, 111, ' PD ', 'Tantoco , Donita Rose ', 7.36, 1),
(6, 152, ' PSMI ', 'Sassa , Gurl ', 7.36, 1),
(7, 0, '', 'A , P ', 21000, 2),
(7, 0, '', 'A , P ', 31500, 3),
(8, 152, ' PSMI ', 'Sassa , Gurl ', 7.36, 1),
(9, 152, ' PSMI ', 'Sassa , Gurl ', 27720, 3),
(10, 0, '', 'A , P ', 14.72, 2),
(10, 0, '', 'A , P ', 22.08, 3),
(11, 152, ' PSMI ', 'Sassa , Gurl ', 22.08, 3),
(12, 152, ' PSMI ', 'Sassa , Gurl ', 7.36, 1),
(12, 111, ' PD ', 'Tantoco , Donita Rose ', 14.72, 2),
(2, 152, ' PSMI ', 'Sassa , Gurl ', 0, 0),
(2, 152, ' PSMI ', 'Sassa , Gurl ', 0, 0),
(1, 152, ' PSMI ', 'Sassa , Gurl ', 7.36, 1),
(1, 111, ' PD ', 'Tantoco , Donita Rose ', 14.72, 2),
(3, 152, ' PSMI ', 'Sassa , Gurl ', 22.08, 3),
(3, 152, ' PSMI ', 'Sassa , Gurl ', 22.08, 3),
(5, 152, ' PSMI ', 'Sassa , Gurl ', 14.72, 2),
(5, 152, ' PSMI ', 'Sassa , Gurl ', 7.36, 1),
(6, 152, ' PSMI ', 'Sassa , Gurl ', 7.36, 1),
(6, 152, ' PSMI ', 'Sassa , Gurl ', 14.72, 2),
(7, 152, ' PSMI ', 'Sassa , Gurl ', 10500, 1),
(7, 111, ' PD ', 'Tantoco , Donita Rose ', 21000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_division`
--

CREATE TABLE `t_division` (
  `c_code` int(11) NOT NULL,
  `c_division` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_division`
--

INSERT INTO `t_division` (`c_code`, `c_division`) VALUES
(0, 'c_division'),
(1, 'Achievers - Direct'),
(1, 'Amazing'),
(1, 'Blue Lane 1'),
(1, 'Faith'),
(1, 'Acts'),
(1, 'Awesome'),
(1, 'Adrenaline'),
(2, 'Admiral-direct'),
(2, 'Baguettes'),
(2, 'Abundance'),
(3, 'Baguettes'),
(3, 'Excellent'),
(3, 'Altitude - Direct'),
(3, 'Magnificent'),
(3, 'Excel'),
(3, 'Celestial'),
(3, 'Fortune'),
(3, 'Admiral'),
(3, 'Governors'),
(4, 'Alpha'),
(4, 'Astra'),
(4, 'Atlas'),
(4, 'Absolute'),
(4, 'Anthurium - Direct'),
(4, 'Altruist'),
(4, 'Advent'),
(4, 'Aquarius'),
(5, 'Peak'),
(5, 'Fortitude'),
(5, 'Phoenix'),
(5, 'Bromeliads - Direct'),
(6, 'Prince'),
(6, 'Crown'),
(6, 'Prestige 1'),
(6, 'Prime'),
(6, 'Calypso - Direct'),
(6, 'Phenomenal'),
(6, 'Optimist'),
(6, 'Power'),
(7, 'Apex'),
(7, 'Brilliant'),
(7, 'Dynamic'),
(7, 'Genesis'),
(7, 'Paramount'),
(7, 'Elegance'),
(7, 'Cattleya - Direct'),
(7, 'Abba'),
(7, 'Grandslam'),
(7, 'Victorious'),
(7, 'Surmount'),
(7, 'Champion'),
(7, 'Benevolent'),
(8, 'Majesty'),
(8, 'Cherry Blossom - Direct'),
(8, 'Miracle'),
(8, 'Angels'),
(8, 'Righteous'),
(9, 'Pyramid'),
(9, 'Saviour'),
(9, 'Sun'),
(9, 'Lucky Charms'),
(9, 'Christop - Direct'),
(9, 'Green Peridot'),
(10, 'Achievers'),
(10, 'Blue Lane 1'),
(10, 'Chronicles - Direct'),
(10, 'Faith'),
(10, 'Amazing'),
(11, 'Gold'),
(11, 'Chrysanthemum - Direct'),
(11, 'Titanium'),
(12, 'Lighthouse'),
(12, 'Olympus'),
(12, 'Cornerstone - Direct'),
(12, 'Infinity'),
(13, 'Ingenious'),
(14, 'Crown-direct'),
(14, 'Empress'),
(14, 'Duchess'),
(15, 'Diamond - Direct'),
(15, 'Jabez'),
(15, 'Edifice'),
(15, 'Pearl'),
(16, 'Eagle-direct'),
(17, 'Obsidian'),
(17, 'Felsite-direct'),
(18, 'Gem-direct'),
(18, 'Heart'),
(18, 'Mahogany'),
(18, 'Topstar'),
(19, 'Emmanuel'),
(19, 'Pinnacle'),
(19, 'Virgo'),
(19, 'Aspen'),
(19, 'Gladiolus-direct'),
(19, 'Crest'),
(19, 'Taurus'),
(20, 'Gold'),
(20, 'Champion'),
(20, 'Grandslam-direct'),
(20, 'Abba'),
(20, 'Titanium'),
(20, 'Admiral'),
(20, 'Governors'),
(20, 'Magnificent'),
(20, 'Baguettes'),
(21, 'Felsite'),
(21, 'Granite 1'),
(21, 'Igneous'),
(21, 'Iris'),
(21, 'Hyacinth - Direct'),
(21, 'Waterlily'),
(21, 'Love'),
(21, 'Obsidian'),
(21, 'Chrysoprase'),
(22, 'Igneous - Direct'),
(22, 'Ebenezer'),
(22, 'Rubellite'),
(22, 'Stibnite'),
(23, 'Citrine'),
(23, 'Crusader'),
(23, 'Lifestream'),
(23, 'Marigold'),
(23, 'Tanzanite'),
(23, 'Treasure'),
(23, 'Jasmine - Direct'),
(23, 'Rainbow'),
(23, 'Horizon'),
(23, 'Sunbeam'),
(23, 'Shalom'),
(23, 'Aster'),
(23, 'Hollyhocks'),
(24, 'Crest'),
(24, 'Zenith'),
(24, 'Aspen'),
(24, 'Vertex'),
(24, 'Lotus - Direct'),
(24, 'Virgo'),
(24, 'Geranium'),
(24, 'Yellow Bell'),
(24, 'Pinnacle'),
(24, 'Gladiolus'),
(24, 'Emmanuel'),
(25, 'Pioneer'),
(25, 'Provident'),
(25, 'Paragon'),
(25, 'Predominant'),
(25, 'Magnolia - Direct'),
(25, 'Phyre'),
(25, 'Pine'),
(25, 'Prime'),
(25, 'Path Finder'),
(26, 'Righteous'),
(26, 'Clarion'),
(26, 'Majesty-direct'),
(26, 'Miracle'),
(26, 'Angels'),
(27, 'Felsite'),
(28, 'Blazing Star'),
(28, 'Aster'),
(28, 'Marigold-direct'),
(29, 'Jasper'),
(29, 'Gemini'),
(29, 'Magnolia'),
(29, 'Lotus'),
(29, 'Carnelian'),
(29, 'Everlasting'),
(29, 'Granite'),
(29, 'Cattleya'),
(29, 'Emerald'),
(29, 'Opal'),
(29, 'Silver'),
(29, 'Amethyst'),
(29, 'Sapphire'),
(29, 'Galaxy'),
(29, 'Alexandrite'),
(29, 'Blue Star'),
(29, 'Uranium'),
(29, 'Zircon'),
(29, 'Garnet'),
(29, 'Ivory'),
(29, 'Platinum'),
(29, 'Rose'),
(29, 'Bluestar'),
(29, 'Onyx'),
(29, 'Crystal'),
(29, 'Adamantine'),
(29, 'House Account'),
(29, 'Adventurer'),
(29, 'Amethyst-direct'),
(29, 'Pearl'),
(29, 'Topaz'),
(29, 'Rosequartz'),
(29, 'Jade'),
(29, 'Galaxy 16'),
(29, 'Zirconuim'),
(29, 'Morning Glory'),
(29, 'Sunflower'),
(29, 'Cetrine Quartz'),
(29, 'Opal Quartz'),
(29, 'Rock Quartz'),
(29, 'Chrystaline Quartz'),
(29, 'Citrine Quartz'),
(29, 'Turquoise'),
(29, 'Mercury'),
(29, 'Jet'),
(29, 'Jewels'),
(29, 'Broker'),
(29, 'Prestige'),
(29, 'Prestige I'),
(29, 'Jam Asia'),
(29, 'Golden Lion'),
(29, 'Chalcedony Quartz'),
(29, 'Sardonyx Quartz'),
(29, 'Moonstone'),
(29, 'Ruby Quartz'),
(29, 'Beryl'),
(29, 'Jasper Ii'),
(29, 'Silver I'),
(29, 'Sigya'),
(29, 'Amethyst I'),
(29, 'Mega'),
(29, 'White Stone'),
(29, 'Golden Eagle'),
(29, 'Pisces'),
(29, 'D Exponent'),
(29, 'Logistics'),
(29, 'Carnation'),
(29, 'West Avenue Network'),
(29, 'Task Force'),
(29, 'D Exponent I'),
(29, 'Cmo-direct Group'),
(29, 'Eagles International'),
(29, 'Magnificent'),
(29, 'Broker Intl I'),
(29, 'Antorium'),
(29, 'Broker-fareast'),
(29, 'Aquarius'),
(29, 'Broker Int. Ii'),
(29, 'Concordia Garcia'),
(29, 'Int. Operation'),
(29, 'Broker Int.'),
(29, 'House Accounts'),
(29, 'Copper'),
(29, 'Gold-2'),
(29, 'Diamond-2'),
(29, 'Aster'),
(29, 'Rockquartz'),
(29, 'Milestone'),
(29, 'Manila Group'),
(29, 'Bulacan Group'),
(29, 'Broker Int.-direct'),
(30, 'Altarose'),
(30, 'Ascend'),
(30, 'Gem'),
(30, 'Summit'),
(30, 'Pampanga - Direct'),
(30, 'Magnificat'),
(30, 'Marvelous'),
(30, 'Oasis'),
(30, 'Everest'),
(30, 'Juggernaut'),
(31, 'Precious - Direct'),
(31, 'Prominent'),
(31, 'Benevolent'),
(32, 'Power'),
(32, 'Prestige-direct'),
(32, 'Creative'),
(32, 'Strong'),
(32, 'Ingenious'),
(32, 'Innovative'),
(33, 'Prince- Direct'),
(33, 'Elite'),
(33, 'Royal'),
(33, 'Sunrise'),
(34, 'Marketing'),
(35, 'Reb'),
(36, 'Sampaguita'),
(36, 'Skyscraper'),
(36, 'Starlight'),
(36, 'Stargazer - Direct'),
(36, 'Gardenia'),
(36, 'Shamrock'),
(36, 'Smilax'),
(37, 'Atlas'),
(37, 'Advent'),
(37, 'Aquarius'),
(37, 'Gem'),
(37, 'Altarose'),
(37, 'Oasis'),
(37, 'The New Anthurium- Direct'),
(38, 'Treasure-direct'),
(38, 'Horizon'),
(38, 'Sunbeam'),
(38, 'Citrine'),
(38, 'Shalom'),
(38, 'Sun'),
(38, 'Green Peridot'),
(39, 'Sm/pc'),
(39, 'Employee Referral');

-- --------------------------------------------------------

--
-- Table structure for table `t_lots`
--

CREATE TABLE `t_lots` (
  `c_site` smallint(6) DEFAULT NULL,
  `c_block` smallint(6) DEFAULT NULL,
  `c_lot` smallint(6) DEFAULT NULL,
  `c_lid` int(11) NOT NULL,
  `c_lot_area` decimal(10,0) DEFAULT NULL,
  `c_price_sqm` double DEFAULT NULL,
  `c_remarks` text DEFAULT NULL,
  `c_status` varchar(255) DEFAULT NULL,
  `c_lot_type` varchar(255) DEFAULT NULL,
  `c_title` varchar(255) DEFAULT NULL,
  `c_lot_type_remarks` varchar(255) DEFAULT NULL,
  `c_title_owner` varchar(255) DEFAULT NULL,
  `c_previous_owner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_lots`
--

INSERT INTO `t_lots` (`c_site`, `c_block`, `c_lot`, `c_lid`, `c_lot_area`, `c_price_sqm`, `c_remarks`, `c_status`, `c_lot_type`, `c_title`, `c_lot_type_remarks`, `c_title_owner`, `c_previous_owner`) VALUES
(150, 5, 5, 15000505, '5', 5, 't', 'On Hold', NULL, NULL, NULL, NULL, NULL),
(141, 23, 32, 14102332, '32', 23, 'fe', 'Sold', NULL, NULL, NULL, NULL, NULL),
(141, 1, 1, 14100101, '150', 7000, '', 'Available', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_model_house`
--

CREATE TABLE `t_model_house` (
  `c_code` int(11) NOT NULL,
  `c_model` text NOT NULL,
  `c_acronym` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_model_house`
--

INSERT INTO `t_model_house` (`c_code`, `c_model`, `c_acronym`) VALUES
(4, 'Dahlia', 'DAL'),
(5, 'Elizabeth', 'ELZ'),
(64, 'Modified Laura', 'MLA'),
(141, 'Azalea', 'AZA');

-- --------------------------------------------------------

--
-- Table structure for table `t_network`
--

CREATE TABLE `t_network` (
  `c_code` int(11) NOT NULL,
  `c_network` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_network`
--

INSERT INTO `t_network` (`c_code`, `c_network`) VALUES
(1, 'ACHIEVERS'),
(2, 'ADMIRAL'),
(3, 'ALTITUDE'),
(4, 'ANTHURIUM'),
(5, 'BROMELIADS'),
(6, 'CALYPSO'),
(7, 'CATTLEYA'),
(8, 'CHERRY BLOSSOM'),
(9, 'CHRISTOP'),
(10, 'CHRONICLES'),
(11, 'CHRYSANTHEMUM'),
(12, 'CORNERSTONE'),
(13, 'CREATIVE'),
(14, 'CROWN'),
(15, 'DIAMOND'),
(16, 'EAGLE'),
(17, 'FELSITE'),
(18, 'GEM'),
(19, 'GLADIOLUS'),
(20, 'GRANDSLAM'),
(21, 'HYACINTH'),
(22, 'IGNEOUS'),
(23, 'JASMINE'),
(24, 'LOTUS'),
(25, 'MAGNOLIA'),
(26, 'MAJESTY'),
(27, 'MANILA GROUP'),
(28, 'MARIGOLD'),
(29, 'OTHERS'),
(30, 'PAMPANGA'),
(31, 'PRECIOUS'),
(32, 'PRESTIGE 1'),
(33, 'PRINCE'),
(34, 'PSMI'),
(35, 'RE/MAX PREMIERE INC.'),
(36, 'STARGAZER'),
(37, 'THE NEW ANTHURIUM'),
(38, 'TREASURE'),
(39, 'VP/DIRECTOR OF SALES');

-- --------------------------------------------------------

--
-- Table structure for table `t_network_division`
--

CREATE TABLE `t_network_division` (
  `c_code` int(11) NOT NULL,
  `c_network` text NOT NULL,
  `c_division` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_network_division`
--

INSERT INTO `t_network_division` (`c_code`, `c_network`, `c_division`) VALUES
(0, 'CATTLEYA', 'Apex'),
(3, 'CATTLEYA', 'Brilliant'),
(5, 'CATTLEYA', 'Dynamic'),
(7, 'CATTLEYA', 'Genesis'),
(8, 'CATTLEYA', 'Paramount'),
(9, 'ALTITUDE', 'Baguettes'),
(10, 'ALTITUDE', 'Excellent'),
(12, 'ANTHURIUM', 'Alpha'),
(13, 'ANTHURIUM', 'Astra'),
(14, 'ANTHURIUM', 'Atlas'),
(15, 'CALYPSO', 'Prince'),
(16, 'CALYPSO', 'Crown'),
(17, 'CALYPSO', 'Prestige 1'),
(18, 'CALYPSO', 'Prime'),
(20, 'CHERRY BLOSSOM', 'Majesty'),
(22, 'CHRISTOP', 'Pyramid'),
(23, 'CHRISTOP', 'Saviour'),
(24, 'CHRISTOP', 'Sun'),
(25, 'CHRYSANTHEMUM', 'Gold'),
(26, 'CORNERSTONE', 'Lighthouse'),
(27, 'CORNERSTONE', 'Olympus'),
(28, 'HYACINTH', 'Felsite'),
(29, 'HYACINTH', 'Granite 1'),
(30, 'HYACINTH', 'Igneous'),
(31, 'JASMINE', 'Citrine'),
(32, 'JASMINE', 'Crusader'),
(33, 'JASMINE', 'Lifestream'),
(35, 'JASMINE', 'Marigold'),
(37, 'JASMINE', 'Tanzanite'),
(38, 'LOTUS', 'Crest'),
(43, 'LOTUS', 'Zenith'),
(44, 'MAGNOLIA', 'Pioneer'),
(47, 'MAGNOLIA', 'Provident'),
(48, 'PAMPANGA', 'Altarose'),
(49, 'PAMPANGA', 'Ascend'),
(50, 'PAMPANGA', 'Gem'),
(52, 'PAMPANGA', 'Summit'),
(53, 'STARGAZER', 'Sampaguita'),
(54, 'STARGAZER', 'Skyscraper'),
(55, 'STARGAZER', 'Starlight'),
(56, 'ANTHURIUM', 'Absolute'),
(57, 'ALTITUDE', 'Altitude - Direct'),
(58, 'ANTHURIUM', 'Anthurium - Direct'),
(59, 'ANTHURIUM', 'Altruist'),
(60, 'CALYPSO', 'Calypso - Direct'),
(61, 'CATTLEYA', 'Elegance'),
(62, 'CATTLEYA', 'Cattleya - Direct'),
(63, 'CHRISTOP', 'Lucky Charms'),
(64, 'HYACINTH', 'Iris'),
(65, 'JASMINE', 'Treasure'),
(66, 'CHERRY BLOSSOM', 'Cherry Blossom - Direct'),
(67, 'CHRISTOP', 'Christop - Direct'),
(68, 'CHRYSANTHEMUM', 'Chrysanthemum - Direct'),
(69, 'CORNERSTONE', 'Cornerstone - Direct'),
(70, 'HYACINTH', 'Hyacinth - Direct'),
(71, 'JASMINE', 'Jasmine - Direct'),
(72, 'LOTUS', 'Aspen'),
(74, 'LOTUS', 'Vertex'),
(75, 'LOTUS', 'Lotus - Direct'),
(76, 'MAGNOLIA', 'Paragon'),
(77, 'MAGNOLIA', 'Predominant'),
(78, 'MAGNOLIA', 'Magnolia - Direct'),
(79, 'PAMPANGA', 'Pampanga - Direct'),
(80, 'STARGAZER', 'Stargazer - Direct'),
(81, 'OTHERS', 'Jasper'),
(82, 'OTHERS', 'Gemini'),
(83, 'OTHERS', 'Magnolia'),
(84, 'OTHERS', 'Lotus'),
(85, 'OTHERS', 'Carnelian'),
(86, 'OTHERS', 'Everlasting'),
(87, 'OTHERS', 'Granite'),
(88, 'OTHERS', 'Cattleya'),
(89, 'OTHERS', 'Emerald'),
(90, 'OTHERS', 'Opal'),
(91, 'OTHERS', 'Silver'),
(92, 'OTHERS', 'Amethyst'),
(93, 'OTHERS', 'Sapphire'),
(94, 'OTHERS', 'Galaxy'),
(95, 'OTHERS', 'Alexandrite'),
(96, 'OTHERS', 'Blue Star'),
(97, 'OTHERS', 'Uranium'),
(98, 'OTHERS', 'Zircon'),
(99, 'OTHERS', 'Garnet'),
(100, 'OTHERS', 'Ivory'),
(101, 'OTHERS', 'Platinum'),
(102, 'OTHERS', 'Rose'),
(103, 'OTHERS', 'Bluestar'),
(104, 'OTHERS', 'Onyx'),
(105, 'OTHERS', 'Crystal'),
(106, 'OTHERS', 'Adamantine'),
(107, 'OTHERS', 'House Account'),
(108, 'OTHERS', 'Adventurer'),
(109, 'OTHERS', 'Amethyst-direct'),
(110, 'OTHERS', 'Pearl'),
(111, 'OTHERS', 'Topaz'),
(112, 'OTHERS', 'Rosequartz'),
(113, 'OTHERS', 'Jade'),
(114, 'OTHERS', 'Galaxy 16'),
(115, 'OTHERS', 'Zirconuim'),
(116, 'OTHERS', 'Morning Glory'),
(117, 'OTHERS', 'Sunflower'),
(118, 'OTHERS', 'Cetrine Quartz'),
(119, 'OTHERS', 'Opal Quartz'),
(120, 'OTHERS', 'Rock Quartz'),
(121, 'OTHERS', 'Chrystaline Quartz'),
(122, 'OTHERS', 'Citrine Quartz'),
(123, 'OTHERS', 'Turquoise'),
(124, 'OTHERS', 'Mercury'),
(125, 'OTHERS', 'Jet'),
(126, 'OTHERS', 'Jewels'),
(127, 'OTHERS', 'Broker'),
(128, 'OTHERS', 'Prestige'),
(129, 'OTHERS', 'Prestige I'),
(130, 'OTHERS', 'Jam Asia'),
(131, 'OTHERS', 'Golden Lion'),
(132, 'OTHERS', 'Chalcedony Quartz'),
(133, 'OTHERS', 'Sardonyx Quartz'),
(134, 'OTHERS', 'Moonstone'),
(135, 'OTHERS', 'Ruby Quartz'),
(136, 'OTHERS', 'Beryl'),
(137, 'OTHERS', 'Jasper Ii'),
(138, 'OTHERS', 'Silver I'),
(139, 'OTHERS', 'Sigya'),
(140, 'OTHERS', 'Amethyst I'),
(141, 'OTHERS', 'Mega'),
(142, 'OTHERS', 'White Stone'),
(143, 'OTHERS', 'Golden Eagle'),
(144, 'OTHERS', 'Pisces'),
(145, 'OTHERS', 'D Exponent'),
(146, 'OTHERS', 'Logistics'),
(147, 'OTHERS', 'Carnation'),
(148, 'OTHERS', 'West Avenue Network'),
(149, 'OTHERS', 'Task Force'),
(150, 'OTHERS', 'D Exponent I'),
(151, 'OTHERS', 'Cmo-direct Group'),
(152, 'OTHERS', 'Eagles International'),
(153, 'OTHERS', 'Magnificent'),
(154, 'OTHERS', 'Broker Intl I'),
(155, 'OTHERS', 'Antorium'),
(156, 'OTHERS', 'Broker-fareast'),
(157, 'OTHERS', 'Aquarius'),
(158, 'OTHERS', 'Broker Int. Ii'),
(159, 'OTHERS', 'Concordia Garcia'),
(160, 'OTHERS', 'Int. Operation'),
(161, 'OTHERS', 'Broker Int.'),
(162, 'OTHERS', 'House Accounts'),
(163, 'OTHERS', 'Copper'),
(164, 'OTHERS', 'Gold-2'),
(165, 'OTHERS', 'Diamond-2'),
(166, 'OTHERS', 'Aster'),
(167, 'OTHERS', 'Rockquartz'),
(168, 'OTHERS', 'Milestone'),
(169, 'ALTITUDE', 'Magnificent'),
(170, 'ALTITUDE', 'Excel'),
(171, 'ANTHURIUM', 'Advent'),
(173, 'CATTLEYA', 'Abba'),
(174, 'CATTLEYA', 'Grandslam'),
(175, 'CATTLEYA', 'Victorious'),
(176, 'CHRYSANTHEMUM', 'Titanium'),
(177, 'HYACINTH', 'Waterlily'),
(178, 'JASMINE', 'Rainbow'),
(179, 'JASMINE', 'Horizon'),
(180, 'JASMINE', 'Sunbeam'),
(183, 'STARGAZER', 'Gardenia'),
(184, 'CHRONICLES', 'Achievers'),
(185, 'CHRONICLES', 'Blue Lane 1'),
(186, 'BROMELIADS', 'Peak'),
(187, 'BROMELIADS', 'Fortitude'),
(188, 'BROMELIADS', 'Phoenix'),
(189, 'BROMELIADS', 'Bromeliads - Direct'),
(190, 'CHRONICLES', 'Chronicles - Direct'),
(191, 'CALYPSO', 'Phenomenal'),
(192, 'PAMPANGA', 'Magnificat'),
(193, 'CATTLEYA', 'Surmount'),
(194, 'ALTITUDE', 'Celestial'),
(195, 'ALTITUDE', 'Fortune'),
(196, 'CHRISTOP', 'Green Peridot'),
(198, 'LOTUS', 'Virgo'),
(199, 'OTHERS', 'Manila Group'),
(200, 'OTHERS', 'Bulacan Group'),
(201, 'CHERRY BLOSSOM', 'Miracle'),
(202, 'PAMPANGA', 'Marvelous'),
(206, 'PAMPANGA', 'Oasis'),
(207, 'CALYPSO', 'Optimist'),
(208, 'PRECIOUS', 'Precious - Direct'),
(209, 'PRECIOUS', 'Prominent'),
(210, 'DIAMOND', 'Diamond - Direct'),
(211, 'DIAMOND', 'Jabez'),
(212, 'PRECIOUS', 'Benevolent'),
(213, 'CHRONICLES', 'Faith'),
(214, 'ALTITUDE', 'Admiral'),
(215, 'DIAMOND', 'Edifice'),
(216, 'LOTUS', 'Geranium'),
(217, 'CHERRY BLOSSOM', 'Angels'),
(218, 'ALTITUDE', 'Governors'),
(219, 'PAMPANGA', 'Everest'),
(220, 'DIAMOND', 'Pearl'),
(221, 'LOTUS', 'Yellow Bell'),
(222, 'PAMPANGA', 'Juggernaut'),
(223, 'CORNERSTONE', 'Infinity'),
(224, 'LOTUS', 'Pinnacle'),
(225, 'JASMINE', 'Shalom'),
(226, 'CATTLEYA', 'Champion'),
(227, 'OTHERS', 'Broker Int.-direct'),
(228, 'TREASURE', 'Treasure-direct'),
(229, 'GRANDSLAM', 'Gold'),
(230, 'TREASURE', 'Horizon'),
(231, 'TREASURE', 'Sunbeam'),
(232, 'GRANDSLAM', 'Champion'),
(233, 'LOTUS', 'Gladiolus'),
(234, 'TREASURE', 'Citrine'),
(236, 'GRANDSLAM', 'Grandslam-direct'),
(237, 'JASMINE', 'Aster'),
(238, 'TREASURE', 'Shalom'),
(239, 'GRANDSLAM', 'Abba'),
(240, 'GRANDSLAM', 'Titanium'),
(241, 'MAGNOLIA', 'Phyre'),
(242, 'ANTHURIUM', 'Aquarius'),
(243, 'THE NEW ANTHURIUM', 'Atlas'),
(244, 'THE NEW ANTHURIUM', 'Advent'),
(245, 'THE NEW ANTHURIUM', 'Aquarius'),
(246, 'THE NEW ANTHURIUM', 'Gem'),
(247, 'THE NEW ANTHURIUM', 'Altarose'),
(248, 'THE NEW ANTHURIUM', 'Oasis'),
(249, 'THE NEW ANTHURIUM', 'The New Anthurium- Direct'),
(250, 'CHRONICLES', 'Amazing'),
(251, 'LOTUS', 'Emmanuel'),
(252, 'GLADIOLUS', 'Emmanuel'),
(253, 'ACHIEVERS', 'Achievers - Direct'),
(254, 'ACHIEVERS', 'Amazing'),
(255, 'ACHIEVERS', 'Blue Lane 1'),
(256, 'ACHIEVERS', 'Faith'),
(257, 'GLADIOLUS', 'Pinnacle'),
(258, 'GLADIOLUS', 'Virgo'),
(259, 'GLADIOLUS', 'Aspen'),
(260, 'GLADIOLUS', 'Gladiolus-direct'),
(261, 'GLADIOLUS', 'Crest'),
(262, 'MAGNOLIA', 'Pine'),
(263, 'GEM', 'Gem-direct'),
(264, 'PRINCE', 'Prince- Direct'),
(265, 'PRINCE', 'Elite'),
(266, 'GRANDSLAM', 'Admiral'),
(267, 'GEM', 'Heart'),
(268, 'GRANDSLAM', 'Governors'),
(269, 'MAGNOLIA', 'Prime'),
(270, 'GEM', 'Mahogany'),
(271, 'ACHIEVERS', 'Acts'),
(272, 'CALYPSO', 'Power'),
(273, 'PRESTIGE 1', 'Power'),
(274, 'IGNEOUS', 'Igneous - Direct'),
(275, 'CREATIVE', 'Ingenious'),
(276, 'PRESTIGE 1', 'Prestige-direct'),
(277, 'IGNEOUS', 'Ebenezer'),
(278, 'HYACINTH', 'Love'),
(279, 'PRESTIGE 1', 'Creative'),
(280, 'GLADIOLUS', 'Taurus'),
(281, 'GRANDSLAM', 'Magnificent'),
(282, 'IGNEOUS', 'Rubellite'),
(283, 'ACHIEVERS', 'Awesome'),
(284, 'PRINCE', 'Royal'),
(285, 'PRINCE', 'Sunrise'),
(286, 'STARGAZER', 'Shamrock'),
(287, 'HYACINTH', 'Obsidian'),
(288, 'CATTLEYA', 'Benevolent'),
(289, 'ACHIEVERS', 'Adrenaline'),
(290, 'MARIGOLD', 'Blazing Star'),
(291, 'FELSITE', 'Obsidian'),
(292, 'CROWN', 'Crown-direct'),
(293, 'MARIGOLD', 'Aster'),
(294, 'EAGLE', 'Eagle-direct'),
(295, 'FELSITE', 'Felsite-direct'),
(296, 'MARIGOLD', 'Marigold-direct'),
(297, 'CROWN', 'Empress'),
(298, 'JASMINE', 'Hollyhocks'),
(299, 'GRANDSLAM', 'Baguettes'),
(300, 'IGNEOUS', 'Stibnite'),
(301, 'CROWN', 'Duchess'),
(302, 'CHERRY BLOSSOM', 'Righteous'),
(303, 'ADMIRAL', 'Admiral-direct'),
(304, 'MAJESTY', 'Righteous'),
(305, 'ADMIRAL', 'Baguettes'),
(306, 'MAJESTY', 'Clarion'),
(307, 'MAJESTY', 'Majesty-direct'),
(308, 'HYACINTH', 'Chrysoprase'),
(309, 'MAJESTY', 'Miracle'),
(310, 'MAJESTY', 'Angels'),
(311, 'TREASURE', 'Sun'),
(312, 'TREASURE', 'Green Peridot'),
(313, 'STARGAZER', 'Smilax'),
(314, 'ADMIRAL', 'Abundance'),
(315, 'GEM', 'Topstar'),
(316, 'MAGNOLIA', 'Path Finder'),
(317, 'MANILA GROUP', 'Felsite'),
(318, 'PRESTIGE 1', 'Strong'),
(319, 'PRESTIGE 1', 'Ingenious'),
(320, 'PRESTIGE 1', 'Innovative'),
(321, 'PSMI', 'Marketing'),
(322, 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(323, 'RE/MAX PREMIERE INC.', 'Reb'),
(324, 'VP/DIRECTOR OF SALES', 'Employee Referral');

-- --------------------------------------------------------

--
-- Table structure for table `t_projects`
--

CREATE TABLE `t_projects` (
  `c_code` smallint(6) NOT NULL,
  `c_name` text DEFAULT NULL,
  `c_acronym` text DEFAULT NULL,
  `c_address` text DEFAULT NULL,
  `c_province` text DEFAULT NULL,
  `c_status` smallint(6) DEFAULT NULL,
  `c_zip` smallint(6) DEFAULT NULL,
  `c_rate` double DEFAULT NULL,
  `c_reservation` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_projects`
--

INSERT INTO `t_projects` (`c_code`, `c_name`, `c_acronym`, `c_address`, `c_province`, `c_status`, `c_zip`, `c_rate`, `c_reservation`) VALUES
(110, 'GRAND ROYALE 1-A', 'GR-1A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(133, 'GRAND ROYALE 1-B', 'GR-1B', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(141, 'GRAND ROYALE 7-E', 'GR-7E', 'Lugam', 'Malolos City', 1, 3000, 0, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `t_reservation`
--

CREATE TABLE `t_reservation` (
  `c_csr_no` bigint(20) NOT NULL,
  `c_lot_id` bigint(20) NOT NULL,
  `c_or_no` text NOT NULL,
  `c_reserve_date` date NOT NULL,
  `c_amount_paid` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_reservation`
--

INSERT INTO `t_reservation` (`c_csr_no`, `c_lot_id`, `c_or_no`, `c_reserve_date`, `c_amount_paid`) VALUES
(5, 14102332, '12345', '2022-11-11', 11111),
(6, 14102332, '121334', '2022-11-11', 12345),
(7, 14100101, '1212121', '2022-11-11', 222222);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_hired` date NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` text NOT NULL,
  `image_url` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `middle_name`, `username`, `email`, `date_hired`, `phone`, `password`, `user_type`, `image_url`) VALUES
(0, 'Alba', 'Chellamel', 'Pingol', 'donits', 'donitarosetantoco2028@gmail.com', '2022-11-30', '1234567890', '21232f297a57a5a743894a0e4a801fc3', 'IT Admin', ''),
(1, 'DELA CRUZ', 'JUDE', 'PANGILINAN', 'judedel', 'jaevoli@gmail.com', '2022-11-09', '09561305511', '21232f297a57a5a743894a0e4a801fc3', 'IT Admin', ''),
(2, 'DIAZ', 'FRANCIS', '', 'agent', 'sample@gmail.com', '2022-11-08', '09128457581', 'b33aed8f3134996703dc39f9a7c95783', 'Agent', ''),
(3, 'AMURAO', 'MARISA', 'PANGILINAN', 'marisa', 'thomas@mail.com', '2022-11-17', '09561305511', 'b33aed8f3134996703dc39f9a7c95783', 'Agent', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_customers`
--
ALTER TABLE `store_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_agents`
--
ALTER TABLE `t_agents`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `t_csr`
--
ALTER TABLE `t_csr`
  ADD PRIMARY KEY (`c_csr_no`);

--
-- Indexes for table `t_csr_comments`
--
ALTER TABLE `t_csr_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `t_model_house`
--
ALTER TABLE `t_model_house`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `t_projects`
--
ALTER TABLE `t_projects`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `t_reservation`
--
ALTER TABLE `t_reservation`
  ADD PRIMARY KEY (`c_csr_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_customers`
--
ALTER TABLE `store_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `t_csr`
--
ALTER TABLE `t_csr`
  MODIFY `c_csr_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_csr_comments`
--
ALTER TABLE `t_csr_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Database: `ibilling`
--
CREATE DATABASE IF NOT EXISTS `ibilling` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ibilling`;

-- --------------------------------------------------------

--
-- Table structure for table `account_balances`
--

CREATE TABLE `account_balances` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL DEFAULT 0,
  `currency_id` int(11) NOT NULL DEFAULT 0,
  `balance` decimal(16,4) NOT NULL DEFAULT 0.0000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clx_integrations`
--

CREATE TABLE `clx_integrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_accounts`
--

CREATE TABLE `crm_accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(200) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `o` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `balance` decimal(16,2) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `notes` text NOT NULL,
  `options` text DEFAULT NULL,
  `tags` text NOT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL,
  `ts` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `web` varchar(200) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `tax_number` varchar(100) DEFAULT NULL,
  `entity_number` varchar(100) DEFAULT NULL,
  `currency` int(11) DEFAULT 0,
  `pmethod` varchar(100) DEFAULT NULL,
  `autologin` varchar(100) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `lastloginip` varchar(100) DEFAULT NULL,
  `stage` varchar(50) DEFAULT NULL,
  `timezone` varchar(50) DEFAULT NULL,
  `isp` varchar(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `gid` int(11) NOT NULL DEFAULT 0,
  `sid` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `country_code` varchar(20) DEFAULT NULL,
  `country_idd` varchar(20) DEFAULT NULL,
  `signed_up_by` varchar(100) DEFAULT NULL,
  `signed_up_ip` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `ct` varchar(200) DEFAULT NULL,
  `assistant` varchar(200) DEFAULT NULL,
  `asst_phone` varchar(100) DEFAULT NULL,
  `second_email` varchar(100) DEFAULT NULL,
  `second_phone` varchar(100) DEFAULT NULL,
  `taxexempt` varchar(50) DEFAULT NULL,
  `latefeeoveride` varchar(50) DEFAULT NULL,
  `overideduenotices` varchar(50) DEFAULT NULL,
  `separateinvoices` varchar(50) DEFAULT NULL,
  `disableautocc` varchar(50) DEFAULT NULL,
  `billingcid` int(10) NOT NULL DEFAULT 0,
  `securityqid` int(10) NOT NULL DEFAULT 0,
  `securityqans` text DEFAULT NULL,
  `cardtype` varchar(200) DEFAULT NULL,
  `cardlastfour` varchar(20) DEFAULT NULL,
  `cardnum` text DEFAULT NULL,
  `startdate` varchar(50) DEFAULT NULL,
  `expdate` varchar(50) DEFAULT NULL,
  `issuenumber` varchar(200) DEFAULT NULL,
  `bankname` varchar(200) DEFAULT NULL,
  `banktype` varchar(200) DEFAULT NULL,
  `bankcode` varchar(200) DEFAULT NULL,
  `bankacct` varchar(200) DEFAULT NULL,
  `gatewayid` int(10) NOT NULL DEFAULT 0,
  `language` text DEFAULT NULL,
  `pwresetkey` varchar(100) DEFAULT NULL,
  `emailoptout` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pwresetexpiry` datetime DEFAULT NULL,
  `c1` varchar(200) DEFAULT NULL,
  `c2` varchar(200) DEFAULT NULL,
  `c3` varchar(200) DEFAULT NULL,
  `c4` varchar(200) DEFAULT NULL,
  `c5` varchar(200) DEFAULT NULL,
  `is_email_verified` int(1) NOT NULL DEFAULT 0,
  `is_phone_veirifed` int(1) NOT NULL DEFAULT 0,
  `photo_id_type` varchar(100) DEFAULT NULL,
  `photo_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_accounts`
--

INSERT INTO `crm_accounts` (`id`, `account`, `fname`, `lname`, `company`, `jobtitle`, `cid`, `o`, `phone`, `email`, `username`, `address`, `city`, `state`, `zip`, `country`, `balance`, `status`, `notes`, `options`, `tags`, `password`, `token`, `ts`, `img`, `web`, `facebook`, `google`, `linkedin`, `twitter`, `skype`, `tax_number`, `entity_number`, `currency`, `pmethod`, `autologin`, `lastlogin`, `lastloginip`, `stage`, `timezone`, `isp`, `lat`, `lon`, `gname`, `gid`, `sid`, `role`, `country_code`, `country_idd`, `signed_up_by`, `signed_up_ip`, `dob`, `ct`, `assistant`, `asst_phone`, `second_email`, `second_phone`, `taxexempt`, `latefeeoveride`, `overideduenotices`, `separateinvoices`, `disableautocc`, `billingcid`, `securityqid`, `securityqans`, `cardtype`, `cardlastfour`, `cardnum`, `startdate`, `expdate`, `issuenumber`, `bankname`, `banktype`, `bankcode`, `bankacct`, `gatewayid`, `language`, `pwresetkey`, `emailoptout`, `created_at`, `updated_at`, `pwresetexpiry`, `c1`, `c2`, `c3`, `c4`, `c5`, `is_email_verified`, `is_phone_veirifed`, `photo_id_type`, `photo_id`) VALUES
(1, 'test', '', '', '', '', 0, 1, '', '', NULL, '', '', '', '', 'United States', '0.00', 'Active', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2017-11-13 05:12:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(2, 'test 2', '', '', '', '', 0, 1, '', 'customer@example.com', NULL, '', '', '', '', 'United States', '0.00', 'Active', '', NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2017-11-13 05:12:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crm_customfields`
--

CREATE TABLE `crm_customfields` (
  `id` int(10) NOT NULL,
  `ctype` text DEFAULT NULL,
  `relid` int(10) NOT NULL DEFAULT 0,
  `fieldname` text DEFAULT NULL,
  `fieldtype` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `fieldoptions` text DEFAULT NULL,
  `regexpr` text DEFAULT NULL,
  `adminonly` text DEFAULT NULL,
  `required` text DEFAULT NULL,
  `showorder` text DEFAULT NULL,
  `showinvoice` text DEFAULT NULL,
  `sorder` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_customfieldsvalues`
--

CREATE TABLE `crm_customfieldsvalues` (
  `id` int(10) NOT NULL,
  `fieldid` int(10) NOT NULL,
  `relid` int(10) NOT NULL,
  `fvalue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_groups`
--

CREATE TABLE `crm_groups` (
  `id` int(11) NOT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `parent` varchar(200) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `exempt` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `separateinvoices` text DEFAULT NULL,
  `sorder` int(10) DEFAULT NULL,
  `c1` varchar(200) DEFAULT NULL,
  `c2` varchar(200) DEFAULT NULL,
  `c3` varchar(200) DEFAULT NULL,
  `c4` varchar(200) DEFAULT NULL,
  `c5` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_industries`
--

CREATE TABLE `crm_industries` (
  `id` int(11) NOT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `is_default` int(1) NOT NULL DEFAULT 0,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_industries`
--

INSERT INTO `crm_industries` (`id`, `industry`, `is_active`, `is_default`, `sorder`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture', 1, 0, 0, NULL, NULL),
(2, 'Apparel', 1, 0, 0, NULL, NULL),
(3, 'Banking', 1, 0, 0, NULL, NULL),
(4, 'Biotechnology', 1, 0, 0, NULL, NULL),
(5, 'Chemicals', 1, 0, 0, NULL, NULL),
(6, 'Communications', 1, 0, 0, NULL, NULL),
(7, 'Construction', 1, 0, 0, NULL, NULL),
(8, 'Consulting', 1, 0, 0, NULL, NULL),
(9, 'Education', 1, 0, 0, NULL, NULL),
(10, 'Electronics', 1, 0, 0, NULL, NULL),
(11, 'Energy', 1, 0, 0, NULL, NULL),
(12, 'Engineering', 1, 0, 0, NULL, NULL),
(13, 'Entertainment', 1, 0, 0, NULL, NULL),
(14, 'Environmental', 1, 0, 0, NULL, NULL),
(15, 'Finance', 1, 0, 0, NULL, NULL),
(16, 'Food & Beverage', 1, 0, 0, NULL, NULL),
(17, 'Government', 1, 0, 0, NULL, NULL),
(18, 'Healthcare', 1, 0, 0, NULL, NULL),
(19, 'Hospitality', 1, 0, 0, NULL, NULL),
(20, 'Insurance', 1, 0, 0, NULL, NULL),
(21, 'Machinery', 1, 0, 0, NULL, NULL),
(22, 'Manufacturing', 1, 0, 0, NULL, NULL),
(23, 'Media', 1, 0, 0, NULL, NULL),
(24, 'Not For Profit', 1, 0, 0, NULL, NULL),
(25, 'Other', 1, 0, 0, NULL, NULL),
(26, 'Recreation', 1, 0, 0, NULL, NULL),
(27, 'Retail', 1, 0, 0, NULL, NULL),
(28, 'Shipping', 1, 0, 0, NULL, NULL),
(29, 'Technology', 1, 0, 0, NULL, NULL),
(30, 'Telecommunications', 1, 0, 0, NULL, NULL),
(31, 'Transportation', 1, 0, 0, NULL, NULL),
(32, 'Utilities', 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crm_leads`
--

CREATE TABLE `crm_leads` (
  `id` int(11) NOT NULL,
  `secret` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `oid` int(11) NOT NULL DEFAULT 0,
  `salutation` varchar(200) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `suffix` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `website` varchar(200) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `employees` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `viewed_at` datetime DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `iid` int(11) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `assigned` int(11) NOT NULL DEFAULT 0,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `date_converted` datetime DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT 0,
  `ratings` varchar(50) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `lost` int(1) NOT NULL DEFAULT 0,
  `junk` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0,
  `memo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_lead_sources`
--

CREATE TABLE `crm_lead_sources` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `is_default` int(1) NOT NULL DEFAULT 1,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_lead_sources`
--

INSERT INTO `crm_lead_sources` (`id`, `sname`, `is_active`, `is_default`, `sorder`, `created_at`, `updated_at`) VALUES
(1, 'Advertisement', 1, 1, 0, NULL, NULL),
(2, 'Customer Event', 1, 1, 0, NULL, NULL),
(3, 'Employee Referral', 1, 1, 0, NULL, NULL),
(4, 'Google AdWords', 1, 1, 0, NULL, NULL),
(5, 'Other', 1, 1, 0, NULL, NULL),
(6, 'Partner', 1, 1, 0, NULL, NULL),
(7, 'Purchased List', 1, 1, 0, NULL, NULL),
(8, 'Trade Show', 1, 1, 0, NULL, NULL),
(9, 'Webinar', 1, 1, 0, NULL, NULL),
(10, 'Website', 1, 1, 0, NULL, NULL),
(11, 'Facebook', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crm_lead_status`
--

CREATE TABLE `crm_lead_status` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `is_default` int(1) NOT NULL DEFAULT 0,
  `is_converted` int(1) NOT NULL DEFAULT 0,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_lead_status`
--

INSERT INTO `crm_lead_status` (`id`, `sname`, `is_active`, `is_default`, `is_converted`, `sorder`, `created_at`, `updated_at`) VALUES
(1, 'Unqualified', 1, 0, 0, 0, NULL, NULL),
(2, 'New', 1, 1, 0, 0, NULL, NULL),
(3, 'Working', 1, 0, 0, 0, NULL, NULL),
(4, 'Nurturing', 1, 0, 0, 0, NULL, NULL),
(5, 'Qualified', 1, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crm_salutations`
--

CREATE TABLE `crm_salutations` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `is_default` int(1) NOT NULL DEFAULT 0,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crm_salutations`
--

INSERT INTO `crm_salutations` (`id`, `sname`, `is_active`, `is_default`, `sorder`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 1, 0, 0, NULL, NULL),
(2, 'Ms.', 1, 0, 0, NULL, NULL),
(3, 'Mrs.', 1, 0, 0, NULL, NULL),
(4, 'Dr.', 1, 0, 0, NULL, NULL),
(5, 'Prof.', 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ib_doc_rel`
--

CREATE TABLE `ib_doc_rel` (
  `id` int(11) NOT NULL,
  `rtype` varchar(100) NOT NULL DEFAULT 'contact',
  `rid` int(11) NOT NULL DEFAULT 0,
  `did` int(11) NOT NULL DEFAULT 0,
  `can_download` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ib_invoice_access_log`
--

CREATE TABLE `ib_invoice_access_log` (
  `id` int(11) NOT NULL,
  `lid` int(11) NOT NULL DEFAULT 0,
  `cid` int(11) NOT NULL DEFAULT 0,
  `iid` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `customer` varchar(200) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `referer` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `country_iso` varchar(20) DEFAULT NULL,
  `viewed_at` varchar(200) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lon` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sys_accounts`
--

CREATE TABLE `sys_accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `balance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `bank_name` varchar(200) DEFAULT NULL,
  `account_number` varchar(200) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `contact_phone` varchar(100) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `ib_url` varchar(200) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `e` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_activity`
--

CREATE TABLE `sys_activity` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `msg` text NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT '',
  `stime` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `o` int(11) NOT NULL DEFAULT 0,
  `oname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_api`
--

CREATE TABLE `sys_api` (
  `id` int(11) NOT NULL,
  `label` text DEFAULT NULL,
  `ip` text DEFAULT NULL,
  `apikey` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_api`
--

INSERT INTO `sys_api` (`id`, `label`, `ip`, `apikey`) VALUES
(1, 'export', '', '8p5sfjovosh574h5wzggxrpd5lu93o97o95mynfh');

-- --------------------------------------------------------

--
-- Table structure for table `sys_appconfig`
--

CREATE TABLE `sys_appconfig` (
  `id` int(11) NOT NULL,
  `setting` text NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_appconfig`
--

INSERT INTO `sys_appconfig` (`id`, `setting`, `value`) VALUES
(1, 'CompanyName', 'iBilling'),
(29, 'theme', 'ibilling'),
(37, 'currency_code', '$'),
(56, 'language', 'en'),
(57, 'show-logo', '1'),
(58, 'nstyle', 'dark'),
(63, 'dec_point', '.'),
(64, 'thousands_sep', ','),
(65, 'timezone', 'America/New_York'),
(66, 'country', 'United States'),
(67, 'country_code', 'US'),
(68, 'df', 'Y-m-d'),
(69, 'caddress', 'iBilling <br> 424 Grandview Avenue <br>Staten Island <br> NYC - 10301'),
(70, 'account_search', '1'),
(71, 'redirect_url', 'dashboard'),
(72, 'rtl', '0'),
(73, 'ckey', '0982995697'),
(74, 'networth_goal', '200000'),
(75, 'sysEmail', 'demo@example.com'),
(76, 'url_rewrite', '0'),
(77, 'build', '4900'),
(78, 'animate', '0'),
(79, 'pdf_font', 'dejavusanscondensed'),
(80, 'accounting', '1'),
(81, 'invoicing', '1'),
(82, 'quotes', '1'),
(83, 'client_dashboard', '1'),
(84, 'contact_set_view_mode', 'search'),
(85, 'invoice_terms', ''),
(86, 'console_notify_invoice_created', '0'),
(87, 'i_driver', 'v2'),
(88, 'purchase_code', ''),
(89, 'c_cache', ''),
(90, 'mininav', '0'),
(91, 'hide_footer', '1'),
(92, 'design', 'default'),
(93, 'default_landing_page', 'login'),
(94, 'recaptcha', '0'),
(95, 'recaptcha_sitekey', ''),
(96, 'recaptcha_secretkey', ''),
(97, 'home_currency', 'USD'),
(98, 'currency_decimal_digits', 'true'),
(99, 'currency_symbol_position', 'p'),
(100, 'thousand_separator_placement', '3'),
(101, 'dashboard', 'canvas'),
(102, 'header_scripts', ''),
(103, 'footer_scripts', ''),
(104, 'ib_key', 'vLBLfhA6DNi1R2MFHO8IvFWr4Cn9665eHUF+L/sqAKM='),
(105, 'ib_s', 'PNhjeZ0sOFF3JNfzT2mLxvNNKPeh6ltqpE+G5LVSDSvgp/z79Sco7W4tJEoXYIl8'),
(106, 'ib_u_t', '1668221559'),
(107, 'ib_u_a', '0'),
(108, 'momentLocale', 'en'),
(109, 'contentAnimation', 'animated fadeIn'),
(110, 'calendar', '1'),
(111, 'leads', '1'),
(112, 'tasks', '1'),
(113, 'orders', '1'),
(114, 'show_quantity_as', ''),
(115, 'gmap_api_key', ''),
(116, 'license_key', ''),
(117, 'local_key', ''),
(118, 'add_fund', '0'),
(119, 'add_fund_minimum_deposit', '100'),
(120, 'add_fund_maximum_deposit', '2500'),
(121, 'add_fund_maximum_balance', '25000'),
(122, 'add_fund_require_active_order', '0'),
(123, 'sales_target', '10000'),
(124, 'industry', 'default'),
(125, 'inventory', '1'),
(126, 'secondary_currency', ''),
(127, 'customer_custom_username', '0'),
(128, 'documents', '1'),
(129, 'projects', '1'),
(130, 'purchase', '1'),
(131, 'suppliers', '1'),
(132, 'support', '1'),
(133, 'hrm', '1'),
(134, 'companies', '1'),
(135, 'plugins', '1'),
(136, 'country_flag_code', 'us'),
(137, 'graph_primary_color', '2196f3'),
(138, 'graph_secondary_color', 'eb3c00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_cart`
--

CREATE TABLE `sys_cart` (
  `id` int(11) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `items` text DEFAULT NULL,
  `total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `ip` varchar(100) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `language` varchar(200) DEFAULT NULL,
  `coupon` varchar(200) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `item_count` int(11) NOT NULL DEFAULT 0,
  `cid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `lid` int(11) NOT NULL DEFAULT 0,
  `currency_id` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `memo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cats`
--

CREATE TABLE `sys_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('Income','Expense') NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `total_amount` decimal(16,4) DEFAULT 0.0000,
  `budget` decimal(16,4) DEFAULT 0.0000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_cats`
--

INSERT INTO `sys_cats` (`id`, `name`, `type`, `sorder`, `total_amount`, `budget`, `created_at`, `updated_at`) VALUES
(14, 'Advertising', 'Expense', 1, '0.0000', '0.0000', NULL, NULL),
(15, 'Bank and Credit Card Interest', 'Expense', 23, '0.0000', '0.0000', NULL, NULL),
(16, 'Car and Truck', 'Expense', 24, '0.0000', '0.0000', NULL, NULL),
(17, 'Commissions and Fees', 'Expense', 25, '0.0000', '0.0000', NULL, NULL),
(18, 'Contract Labor', 'Expense', 26, '0.0000', '0.0000', NULL, NULL),
(19, 'Contributions', 'Expense', 27, '0.0000', '0.0000', NULL, NULL),
(20, 'Cost of Goods Sold', 'Expense', 28, '0.0000', '0.0000', NULL, NULL),
(21, 'Credit Card Interest', 'Expense', 29, '0.0000', '0.0000', NULL, NULL),
(22, 'Depreciation', 'Expense', 31, '0.0000', '0.0000', NULL, NULL),
(23, 'Dividend Payments', 'Expense', 32, '0.0000', '0.0000', NULL, NULL),
(24, 'Employee Benefit Programs', 'Expense', 33, '0.0000', '0.0000', NULL, NULL),
(25, 'Entertainment', 'Expense', 34, '0.0000', '0.0000', NULL, NULL),
(26, 'Gift', 'Expense', 35, '0.0000', '0.0000', NULL, NULL),
(27, 'Insurance', 'Expense', 36, '0.0000', '0.0000', NULL, NULL),
(28, 'Legal, Accountant &amp; Other Professional Services', 'Expense', 37, '0.0000', '0.0000', NULL, NULL),
(29, 'Meals', 'Expense', 38, '0.0000', '0.0000', NULL, NULL),
(30, 'Mortgage Interest', 'Expense', 39, '0.0000', '0.0000', NULL, NULL),
(31, 'Non-Deductible Expense', 'Expense', 40, '0.0000', '0.0000', NULL, NULL),
(33, 'Other Business Property Leasing', 'Expense', 22, '0.0000', '0.0000', NULL, NULL),
(34, 'Owner Draws', 'Expense', 21, '0.0000', '0.0000', NULL, NULL),
(35, 'Payroll Taxes', 'Expense', 8, '0.0000', '0.0000', NULL, NULL),
(37, 'Phone', 'Expense', 9, '0.0000', '0.0000', NULL, NULL),
(38, 'Postage', 'Expense', 10, '0.0000', '0.0000', NULL, NULL),
(39, 'Rent', 'Expense', 12, '0.0000', '0.0000', NULL, NULL),
(40, 'Repairs &amp; Maintenance', 'Expense', 11, '0.0000', '0.0000', NULL, NULL),
(41, 'Supplies', 'Expense', 13, '0.0000', '0.0000', NULL, NULL),
(42, 'Taxes and Licenses', 'Expense', 14, '0.0000', '0.0000', NULL, NULL),
(43, 'Transfer Funds', 'Expense', 15, '0.0000', '0.0000', NULL, NULL),
(44, 'Travel', 'Expense', 16, '0.0000', '0.0000', NULL, NULL),
(45, 'Utilities', 'Expense', 17, '0.0000', '0.0000', NULL, NULL),
(46, 'Vehicle, Machinery &amp; Equipment Rental or Leasing', 'Expense', 18, '0.0000', '0.0000', NULL, NULL),
(47, 'Wages', 'Expense', 19, '0.0000', '0.0000', NULL, NULL),
(48, 'Regular Income', 'Income', 1, '0.0000', '0.0000', NULL, NULL),
(49, 'Owner Contribution', 'Income', 12, '0.0000', '0.0000', NULL, NULL),
(50, 'Interest Income', 'Income', 11, '0.0000', '0.0000', NULL, NULL),
(51, 'Expense Refund', 'Income', 10, '0.0000', '0.0000', NULL, NULL),
(52, 'Other Income', 'Income', 9, '0.0000', '0.0000', NULL, NULL),
(53, 'Salary', 'Income', 8, '0.0000', '0.0000', NULL, NULL),
(54, 'Equities', 'Income', 7, '0.0000', '0.0000', NULL, NULL),
(55, 'Rent &amp; Royalties', 'Income', 6, '0.0000', '0.0000', NULL, NULL),
(56, 'Home equity', 'Income', 5, '0.0000', '0.0000', NULL, NULL),
(57, 'Part Time Work', 'Income', 3, '0.0000', '0.0000', NULL, NULL),
(58, 'Account Transfer', 'Income', 4, '0.0000', '0.0000', NULL, NULL),
(60, 'Health Care', 'Expense', 20, '0.0000', '0.0000', NULL, NULL),
(63, 'Loans', 'Expense', 30, '0.0000', '0.0000', NULL, NULL),
(64, 'Selling Software', 'Income', 2, '0.0000', '0.0000', NULL, NULL),
(65, 'Software Customization', 'Income', 13, '0.0000', '0.0000', NULL, NULL),
(66, 'Envato', 'Income', 0, '0.0000', '0.0000', NULL, NULL),
(67, 'Salary', 'Expense', 7, '0.0000', '0.0000', NULL, NULL),
(68, 'Paypal', 'Expense', 6, '0.0000', '0.0000', NULL, NULL),
(69, 'Office Equipment', 'Expense', 5, '0.0000', '0.0000', NULL, NULL),
(70, 'Staff Entertaining', 'Expense', 3, '0.0000', '0.0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_companies`
--

CREATE TABLE `sys_companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `logo_url` varchar(200) DEFAULT NULL,
  `logo_path` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `emails` text DEFAULT NULL,
  `phones` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `pid` int(11) NOT NULL DEFAULT 0,
  `oid` int(11) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0,
  `assigned` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `ratings` varchar(50) DEFAULT NULL,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0,
  `c1` text DEFAULT NULL,
  `c2` text DEFAULT NULL,
  `c3` text DEFAULT NULL,
  `c4` text DEFAULT NULL,
  `c5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_currencies`
--

CREATE TABLE `sys_currencies` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `iso_code` varchar(10) DEFAULT NULL,
  `symbol` varchar(20) DEFAULT NULL,
  `rate` decimal(16,8) NOT NULL DEFAULT 1.00000000,
  `prefix` varchar(20) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `format` varchar(100) DEFAULT NULL,
  `decimal_separator` varchar(10) DEFAULT NULL,
  `thousand_separator` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `available_in` text DEFAULT NULL,
  `isdefault` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_currencies`
--

INSERT INTO `sys_currencies` (`id`, `cname`, `iso_code`, `symbol`, `rate`, `prefix`, `suffix`, `format`, `decimal_separator`, `thousand_separator`, `created_at`, `created_by`, `updated_at`, `updated_by`, `available_in`, `isdefault`, `trash`, `archived`) VALUES
(1, 'USD', 'USD', '$', '1.00000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_documents`
--

CREATE TABLE `sys_documents` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `file_o_name` varchar(200) DEFAULT NULL,
  `file_r_name` varchar(200) DEFAULT NULL,
  `file_mime_type` varchar(200) DEFAULT NULL,
  `file_path` varchar(200) DEFAULT NULL,
  `file_dl_token` varchar(200) DEFAULT NULL,
  `file_owner` int(11) NOT NULL DEFAULT 0,
  `version` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `sha1` varchar(40) DEFAULT NULL,
  `md5` varchar(32) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `gid` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `contacts` text DEFAULT NULL,
  `deals` text DEFAULT NULL,
  `leads` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `customer_can_download` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0,
  `is_global` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_emailconfig`
--

CREATE TABLE `sys_emailconfig` (
  `id` int(11) NOT NULL,
  `method` varchar(50) NOT NULL,
  `host` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `apikey` varchar(200) NOT NULL,
  `port` varchar(10) NOT NULL,
  `secure` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_emailconfig`
--

INSERT INTO `sys_emailconfig` (`id`, `method`, `host`, `username`, `password`, `apikey`, `port`, `secure`) VALUES
(1, 'phpmail', 'smtp.gmail.com', 'you@gmail.com', '123456', '', '587', 'tls');

-- --------------------------------------------------------

--
-- Table structure for table `sys_email_logs`
--

CREATE TABLE `sys_email_logs` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `iid` int(11) NOT NULL DEFAULT 0,
  `rel_type` varchar(100) DEFAULT NULL,
  `rel_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_email_templates`
--

CREATE TABLE `sys_email_templates` (
  `id` int(11) NOT NULL,
  `tplname` varchar(128) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 1,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `send` varchar(50) DEFAULT 'Active',
  `core` enum('Yes','No') DEFAULT 'Yes',
  `hidden` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_email_templates`
--

INSERT INTO `sys_email_templates` (`id`, `tplname`, `language_id`, `subject`, `message`, `send`, `core`, `hidden`) VALUES
(3, 'Invoice:Invoice Created', 1, '{{business_name}} Invoice', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\"><div style=\"padding:5px;font-size:11pt;font-weight:bold\">   Greetings,</div>	<div style=\"padding:5px\">		This email serves as your official invoice from <strong>{{business_name}}. </strong>	</div><div style=\"padding:10px 5px\">    Invoice URL: <a href=\"{{invoice_url}}\" target=\"_blank\">{{invoice_url}}</a><a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{app_url}}\"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style=\"padding:5px\"><span style=\"font-size: 13.3333330154419px; line-height: 21.3333320617676px;\">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style=\"padding:0px 5px\">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>', 'Yes', 'Yes', 0),
(7, 'Admin:Password Change Request', 1, '{{business_name}} password change request', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\"><div style=\"padding:5px;font-size:11pt;font-weight:bold\">   Hi {{name}},</div>	<div style=\"padding:5px\">		This is to confirm that we have received a Forgot Password request for your Account Username - {{username}} <br>From the IP Address - {{ip_address}}	</div>	<div style=\"padding:5px\">		Click this linke to reset your password- <br><a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{password_reset_link}}\">{{password_reset_link}}</a>	</div><div style=\"padding:5px\">Please note: until your password has been changed, your current password will remain valid. The Forgot Password Link will be available for a limited time only.</div><div style=\"padding:0px 5px\">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>', 'Yes', 'Yes', 0),
(10, 'Admin:New Password', 1, '{{business_name}} New Password for Admin', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\">\n\n<div style=\"padding:5px;font-size:11pt;font-weight:bold\">\n   Hello {{name}}\n</div>\n\n\n	<div style=\"padding:5px\">\n		Here is your new password for <strong>{{business_name}}. </strong>\n	</div>\n\n	\n<div style=\"padding:10px 5px\">\n    Log in URL: <a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{login_url}}\">{{login_url}}</a><br>Username: {{username}}<br>Password: {{password}}</div>\n\n<div style=\"padding:5px\">For security reason, Please change your password after login. </div>\n\n<div style=\"padding:0px 5px\">\n	<div>Best Regards,<br>{{business_name}} Team</div>\n\n</div>\n\n</div>', 'Yes', 'Yes', 0),
(12, 'Invoice:Invoice Payment Reminder', 1, '{{business_name}} Invoice Payment Reminder', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\"><div style=\"padding:5px;font-size:11pt;font-weight:bold\">   Greetings,</div>	<div style=\"padding:5px\">		This is a billing reminder that your invoice no. {{invoice_id}} which was generated on {{invoice_date}} is due on {{invoice_due_date}}. 	</div><div style=\"padding:10px 5px\">    Invoice URL: <a href=\"{{invoice_url}}\" target=\"_blank\">{{invoice_url}}</a><a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{app_url}}\"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style=\"padding:5px\"><span style=\"font-size: 13.3333330154419px; line-height: 21.3333320617676px;\">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style=\"padding:0px 5px\">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>', 'Yes', 'Yes', 0),
(13, 'Invoice:Invoice Overdue Notice', 1, '{{business_name}} Invoice Overdue Notice', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\"><div style=\"padding:5px;font-size:11pt;font-weight:bold\">   Greetings,</div>	<div style=\"padding:5px\">		This is the notice that your invoice no. {{invoice_id}} which was generated on {{invoice_date}} is now overdue.	</div>	<div style=\"padding:10px 5px\">    Invoice URL: <a href=\"{{invoice_url}}\" target=\"_blank\">{{invoice_url}}</a><a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{app_url}}\"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style=\"padding:5px\"><span style=\"font-size: 13.3333330154419px; line-height: 21.3333320617676px;\">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style=\"padding:0px 5px\">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>', 'Yes', 'Yes', 0),
(14, 'Invoice:Invoice Payment Confirmation', 1, '{{business_name}} Invoice Payment Confirmation', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\">\n\n<div style=\"padding:5px;font-size:11pt;font-weight:bold\">\n   Greetings,\n</div>\n\n\n\n	<div style=\"padding:5px\">\n		This is a payment receipt for Invoice {{invoice_id}} sent on {{invoice_date}}.\n	</div>\n\n\n	<div style=\"padding:5px\">\n		Login to your client Portal to view this invoice.\n	</div>\n\n\n<div style=\"padding:10px 5px\">\n    Invoice URL: <a href=\"{{invoice_url}}\" target=\"_blank\">{{invoice_url}}</a><a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{app_url}}\"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div>\n\n\n<div style=\"padding:5px\"><span style=\"font-size: 13.3333330154419px; line-height: 21.3333320617676px;\">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div>\n\n\n<div style=\"padding:0px 5px\">\n	<div>Best Regards,<br>{{business_name}} Team</div>\n\n\n</div>\n\n\n</div>', 'Yes', 'Yes', 0),
(15, 'Invoice:Invoice Refund Confirmation', 1, '{{business_name}} Invoice Refund Confirmation', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\"><div style=\"padding:5px;font-size:11pt;font-weight:bold\">   Greetings,</div>	<div style=\"padding:5px\">		This is confirmation that a refund has been processed for Invoice {{invoice_id}} sent on {{invoice_date}}.	</div><div style=\"padding:10px 5px\">    Invoice URL: <a href=\"{{invoice_url}}\" target=\"_blank\">{{invoice_url}}</a><a target=\"_blank\" style=\"color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none\" href=\"{{app_url}}\"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style=\"padding:5px\"><span style=\"font-size: 13.3333330154419px; line-height: 21.3333320617676px;\">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style=\"padding:0px 5px\">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>', 'Yes', 'Yes', 0),
(16, 'Quote:Quote Created', 1, '{{quote_subject}}', '<div style=\"line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3\"><div style=\"padding:5px;font-size:11pt;font-weight:bold\">   Greetings,</div>	<div style=\"padding:5px\">		Dear {{contact_name}},&nbsp;<br> Here is the quote you requested for.  The quote is valid until {{valid_until}}.	</div><div style=\"padding:10px 5px\">    Quote Unique URL: <a href=\"{{quote_url}}\" target=\"_blank\">{{quote_url}}</a><br></div><div style=\"padding:5px\"><span style=\"font-size: 13.3333330154419px; line-height: 21.3333320617676px;\">You may view the quote at any time and simply reply to this email with any further questions or requirement.</span><br></div><div style=\"padding:0px 5px\">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>', 'Yes', 'Yes', 0),
(17, 'Client:Client Signup Email', 1, 'Your {{business_name}} Login Info', '<p>Dear {{client_name}},</p>\n<p>Welcome to {{business_name}}.</p>\n<p>You can track your billing, profile, transactions from this portal.</p>\n<p>Your login information is as follows:</p>\n<p>---------------------------------------------------------------------------------------</p>\n<p>Login URL: {{client_login_url}} <br />Email Address: {{client_email}}<br /> Password: Your chosen password.</p>\n<p>----------------------------------------------------------------------------------------</p>\n<p>We very much appreciate you for choosing us.</p>\n<p>{{business_name}} Team</p>', 'Yes', 'Yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_events`
--

CREATE TABLE `sys_events` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `contacts` text DEFAULT NULL,
  `deals` text DEFAULT NULL,
  `owner` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `etype` varchar(200) DEFAULT NULL,
  `priority` varchar(200) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `iid` int(11) NOT NULL DEFAULT 0,
  `oid` int(11) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `allday` int(1) NOT NULL DEFAULT 0,
  `notification` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoiceitems`
--

CREATE TABLE `sys_invoiceitems` (
  `id` int(10) NOT NULL,
  `invoiceid` int(10) NOT NULL DEFAULT 0,
  `userid` int(10) NOT NULL,
  `type` text NOT NULL,
  `relid` int(10) NOT NULL,
  `itemcode` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT '1',
  `amount` decimal(14,2) NOT NULL DEFAULT 0.00,
  `taxed` int(1) NOT NULL,
  `taxamount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total` decimal(14,2) NOT NULL DEFAULT 0.00,
  `duedate` date DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoices`
--

CREATE TABLE `sys_invoices` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `account` varchar(200) NOT NULL,
  `cn` varchar(100) NOT NULL DEFAULT '',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` datetime DEFAULT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT 'f',
  `discount_value` decimal(14,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(14,2) NOT NULL DEFAULT 0.00,
  `credit` decimal(10,2) NOT NULL DEFAULT 0.00,
  `taxname` varchar(100) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `tax2` decimal(10,2) NOT NULL,
  `total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `taxrate` decimal(10,2) NOT NULL,
  `taxrate2` decimal(10,2) NOT NULL,
  `status` text NOT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT '0',
  `nd` date DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT 0,
  `ename` varchar(200) NOT NULL DEFAULT '',
  `vid` int(11) NOT NULL DEFAULT 0,
  `currency` int(11) NOT NULL DEFAULT 0,
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT 1.0000,
  `recurring` tinyint(1) NOT NULL DEFAULT 0,
  `recurring_ends` date DEFAULT NULL,
  `last_recurring_date` date DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT 0,
  `last_overdue_reminder` date DEFAULT NULL,
  `allowed_payment_methods` text DEFAULT NULL,
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(50) DEFAULT NULL,
  `billing_country` varchar(100) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `q_hide` tinyint(1) NOT NULL DEFAULT 0,
  `show_quantity_as` varchar(100) DEFAULT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `is_credit_invoice` int(1) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `aname` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_items`
--

CREATE TABLE `sys_items` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `unit` varchar(100) NOT NULL DEFAULT '',
  `sales_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `inventory` decimal(16,4) NOT NULL DEFAULT 0.0000,
  `weight` decimal(16,4) NOT NULL DEFAULT 0.0000,
  `width` decimal(12,4) NOT NULL DEFAULT 0.0000,
  `length` decimal(12,4) NOT NULL DEFAULT 0.0000,
  `height` decimal(12,4) NOT NULL DEFAULT 0.0000,
  `sku` varchar(50) DEFAULT NULL,
  `upc` varchar(50) DEFAULT NULL,
  `ean` varchar(50) DEFAULT NULL,
  `mpn` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `sid` int(11) NOT NULL DEFAULT 0,
  `supplier` varchar(200) DEFAULT NULL,
  `bid` int(11) NOT NULL DEFAULT 0,
  `brand` varchar(200) DEFAULT NULL,
  `sell_account` int(11) NOT NULL DEFAULT 0,
  `purchase_account` int(11) NOT NULL DEFAULT 0,
  `inventory_account` int(11) NOT NULL DEFAULT 0,
  `taxable` int(1) NOT NULL DEFAULT 0,
  `location` varchar(200) DEFAULT NULL,
  `item_number` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` enum('Service','Product') NOT NULL,
  `track_inventroy` enum('Yes','No') NOT NULL DEFAULT 'No',
  `negative_stock` enum('Yes','No') NOT NULL DEFAULT 'No',
  `available` int(11) NOT NULL DEFAULT 0,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `added` date DEFAULT NULL,
  `last_sold` date DEFAULT NULL,
  `e` mediumtext NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `gid` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `supplier_id` int(11) NOT NULL DEFAULT 0,
  `gname` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `expire_days` int(11) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `is_service` int(1) NOT NULL DEFAULT 0,
  `commission_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `commission_percent_type` varchar(100) DEFAULT NULL,
  `commission_fixed` decimal(16,2) NOT NULL DEFAULT 0.00,
  `trash` int(1) NOT NULL DEFAULT 0,
  `payterm` varchar(200) DEFAULT NULL,
  `cost_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `unit_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `promo_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `setup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `onetime` decimal(16,2) NOT NULL DEFAULT 0.00,
  `monthly` decimal(16,2) NOT NULL DEFAULT 0.00,
  `monthlysetup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `quarterly` decimal(16,2) NOT NULL DEFAULT 0.00,
  `quarterlysetup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `halfyearly` decimal(16,2) NOT NULL DEFAULT 0.00,
  `halfyearlysetup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `annually` decimal(16,2) NOT NULL DEFAULT 0.00,
  `annuallysetup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `biennially` decimal(16,2) NOT NULL DEFAULT 0.00,
  `bienniallysetup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `triennially` decimal(16,2) NOT NULL DEFAULT 0.00,
  `trienniallysetup` decimal(16,2) NOT NULL DEFAULT 0.00,
  `has_domain` varchar(100) DEFAULT NULL,
  `free_domain` varchar(100) DEFAULT NULL,
  `email_rel` int(11) NOT NULL DEFAULT 0,
  `tags` text DEFAULT NULL,
  `c1` text DEFAULT NULL,
  `c2` text DEFAULT NULL,
  `c3` text DEFAULT NULL,
  `c4` text DEFAULT NULL,
  `c5` text DEFAULT NULL,
  `c6` text DEFAULT NULL,
  `c7` text DEFAULT NULL,
  `c8` text DEFAULT NULL,
  `c9` text DEFAULT NULL,
  `c10` text DEFAULT NULL,
  `c11` text DEFAULT NULL,
  `c12` text DEFAULT NULL,
  `c13` text DEFAULT NULL,
  `c14` text DEFAULT NULL,
  `c15` text DEFAULT NULL,
  `c16` text DEFAULT NULL,
  `c17` text DEFAULT NULL,
  `c18` text DEFAULT NULL,
  `c19` text DEFAULT NULL,
  `c20` text DEFAULT NULL,
  `c21` text DEFAULT NULL,
  `c22` text DEFAULT NULL,
  `c23` text DEFAULT NULL,
  `c24` text DEFAULT NULL,
  `c25` text DEFAULT NULL,
  `c26` text DEFAULT NULL,
  `c27` text DEFAULT NULL,
  `c28` text DEFAULT NULL,
  `c29` text DEFAULT NULL,
  `c30` text DEFAULT NULL,
  `sold_count` decimal(16,4) DEFAULT 0.0000,
  `total_amount` decimal(16,4) DEFAULT 0.0000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_item_cats`
--

CREATE TABLE `sys_item_cats` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT 0,
  `name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_leads`
--

CREATE TABLE `sys_leads` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `iid` int(11) NOT NULL DEFAULT 0,
  `oid` int(11) NOT NULL DEFAULT 0,
  `rid` int(11) NOT NULL DEFAULT 0,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `assigned` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `date_converted` datetime DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT 0,
  `ratings` varchar(50) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `lost` int(1) NOT NULL DEFAULT 0,
  `junk` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_logs`
--

INSERT INTO `sys_logs` (`id`, `date`, `type`, `description`, `userid`, `ip`) VALUES
(1, '2016-11-15 11:30:45', 'System', 'Build Updated to: 4600\r\nDocuments Table Created\r\nOrders Table Created\r\nsys_items table altered\r\nUpdate Completed!\r\n', 0, '::1'),
(2, '2017-04-18 08:37:23', 'System', 'Build Updated to: 4620\r\nUpdate Completed!\r\n', 0, '::1'),
(3, '2017-09-17 15:08:39', 'System', 'Build Updated to: 4671\r\nUpdate Completed!\r\n', 0, '127.0.0.1'),
(4, '2017-09-21 05:34:13', 'Admin', 'Login Successful demo@example.com', 1, '127.0.0.1'),
(5, '2017-09-28 05:07:55', 'Admin', 'Login Successful demo@example.com', 1, '127.0.0.1'),
(6, '2017-09-29 19:12:19', 'Admin', 'Login Successful demo@example.com', 1, '127.0.0.1'),
(7, '2017-11-13 04:44:33', 'Admin', 'Login Successful demo@example.com', 1, '127.0.0.1'),
(8, '2017-11-13 05:12:33', 'Admin', 'New Contact Added test [CID: 1]', 1, '127.0.0.1'),
(9, '2017-11-13 05:12:40', 'Admin', 'New Contact Added test 2 [CID: 2]', 1, '127.0.0.1'),
(10, '2017-11-18 11:52:45', 'Admin', 'Login Successful demo@example.com', 1, '127.0.0.1'),
(11, '2021-07-02 06:26:35', 'Admin', 'Failed Login demo@example.com', 0, '127.0.0.1'),
(12, '2021-07-02 06:27:26', 'Admin', 'Login Successful demo@example.com', 1, '127.0.0.1'),
(13, '2021-07-02 06:27:26', 'System', 'Build updated: 4900\r\nUpdate Completed!\n', 0, '127.0.0.1'),
(14, '2022-11-10 21:52:36', 'Admin', 'Login Successful demo@example.com', 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `sys_orders`
--

CREATE TABLE `sys_orders` (
  `id` int(11) NOT NULL,
  `ordernum` varchar(50) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `sales_person` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_expiry` date DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `stitle` varchar(200) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `iid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `recurring` decimal(16,2) NOT NULL DEFAULT 0.00,
  `setup_fee` decimal(16,2) NOT NULL DEFAULT 0.00,
  `billing_cycle` text DEFAULT NULL,
  `addon_ids` text DEFAULT NULL,
  `related_orders` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `upgrade_ids` text DEFAULT NULL,
  `xdata` text DEFAULT NULL,
  `xsecret` varchar(100) DEFAULT NULL,
  `promo_code` text DEFAULT NULL,
  `promo_type` text DEFAULT NULL,
  `promo_value` text DEFAULT NULL,
  `payment_method` text DEFAULT NULL,
  `ipaddress` text DEFAULT NULL,
  `fraud_module` text DEFAULT NULL,
  `fraud_output` text DEFAULT NULL,
  `activation_subject` text DEFAULT NULL,
  `activation_message` text DEFAULT NULL,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0,
  `c1` text DEFAULT NULL,
  `c2` text DEFAULT NULL,
  `c3` text DEFAULT NULL,
  `c4` text DEFAULT NULL,
  `c5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_permissions`
--

CREATE TABLE `sys_permissions` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) DEFAULT NULL,
  `shortname` varchar(200) DEFAULT NULL,
  `available` int(1) NOT NULL DEFAULT 0,
  `core` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_permissions`
--

INSERT INTO `sys_permissions` (`id`, `pname`, `shortname`, `available`, `core`) VALUES
(1, 'Customers', 'customers', 0, 1),
(2, 'Companies', 'companies', 0, 1),
(3, 'Transactions', 'transactions', 0, 1),
(4, 'Sales', 'sales', 0, 1),
(5, 'Bank & Cash', 'bank_n_cash', 0, 1),
(6, 'Products & Services', 'products_n_services', 0, 1),
(7, 'Reports', 'reports', 0, 1),
(8, 'Utilities', 'utilities', 0, 1),
(9, 'Appearance', 'appearance', 0, 1),
(10, 'Plugins', 'plugins', 0, 1),
(11, 'Calendar', 'calendar', 0, 1),
(12, 'Leads', 'leads', 0, 1),
(13, 'Tasks', 'tasks', 0, 1),
(14, 'Contracts', 'contracts', 0, 1),
(15, 'Orders', 'orders', 0, 1),
(16, 'Settings', 'settings', 0, 1),
(17, 'Documents', 'documents', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_pg`
--

CREATE TABLE `sys_pg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `settings` text NOT NULL,
  `value` text NOT NULL,
  `processor` text NOT NULL,
  `ins` text NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `c3` text NOT NULL,
  `c4` text NOT NULL,
  `c5` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `sorder` int(2) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mode` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_pg`
--

INSERT INTO `sys_pg` (`id`, `name`, `settings`, `value`, `processor`, `ins`, `c1`, `c2`, `c3`, `c4`, `c5`, `status`, `sorder`, `logo`, `mode`) VALUES
(1, 'Paypal', 'Paypal Email', 'demo@example.com', 'paypal', 'Invoices', 'USD', '1', '', '', '', 'Active', 1, NULL, NULL),
(2, 'Stripe', 'API Key', 'sk_test_ARblMczqDw61NusMMs7o1RVK', 'stripe', '', 'USD', '', '', '', '', 'Active', 2, NULL, NULL),
(3, 'Bank / Cash', 'Instructions', 'Make a Payment to Our Bank Account <br>Bank Name: City Bank <br>Account Name: Sadia Sharmin <br>Account Number: 1505XXXXXXXX <br>', 'manualpayment', '', '', '', '', '', '', 'Active', 3, NULL, NULL),
(4, 'Authorize.net', 'API_LOGIN_ID', 'Insert API Login ID here', 'authorize_net', '', 'Insert Transaction Key Here', '', '', '', '', 'Active', 4, NULL, NULL),
(5, 'Braintree', 'Merchant ID', 'your merchant id', 'braintree', '', 'your public key', 'your private key', 'bank account', 'sandbox', '', 'Inactive', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_pl`
--

CREATE TABLE `sys_pl` (
  `id` int(11) NOT NULL,
  `c` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `build` int(10) DEFAULT 1,
  `c1` text DEFAULT NULL,
  `c2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_pmethods`
--

CREATE TABLE `sys_pmethods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_pmethods`
--

INSERT INTO `sys_pmethods` (`id`, `name`, `sorder`) VALUES
(1, 'Cash', 1),
(2, 'Check', 4),
(3, 'Credit Card', 5),
(4, 'Debit', 6),
(5, 'Electronic Transfer', 7),
(9, 'Paypal', 2),
(10, 'ATM Withdrawals', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sys_quoteitems`
--

CREATE TABLE `sys_quoteitems` (
  `id` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `itemcode` text NOT NULL,
  `description` text NOT NULL,
  `qty` text NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `taxable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_quotes`
--

CREATE TABLE `sys_quotes` (
  `id` int(10) NOT NULL,
  `subject` text NOT NULL,
  `stage` enum('Draft','Delivered','On Hold','Accepted','Lost','Dead') NOT NULL,
  `validuntil` date NOT NULL,
  `userid` int(10) NOT NULL,
  `invoicenum` text NOT NULL,
  `cn` text NOT NULL,
  `account` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `companyname` text NOT NULL,
  `email` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `postcode` text NOT NULL,
  `country` text NOT NULL,
  `phonenumber` text NOT NULL,
  `currency` int(10) NOT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` text NOT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `taxname` text NOT NULL,
  `taxrate` decimal(10,2) NOT NULL,
  `tax1` decimal(10,2) NOT NULL,
  `tax2` decimal(10,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `proposal` text NOT NULL,
  `customernotes` text NOT NULL,
  `adminnotes` text NOT NULL,
  `datecreated` date NOT NULL,
  `lastmodified` date NOT NULL,
  `datesent` date NOT NULL,
  `dateaccepted` date NOT NULL,
  `vtoken` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_roles`
--

CREATE TABLE `sys_roles` (
  `id` int(11) NOT NULL,
  `rname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_roles`
--

INSERT INTO `sys_roles` (`id`, `rname`) VALUES
(1, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `sys_sales`
--

CREATE TABLE `sys_sales` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `oid` int(11) NOT NULL DEFAULT 0,
  `oname` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `amount` decimal(14,2) NOT NULL,
  `term` varchar(100) NOT NULL,
  `milestone` varchar(100) NOT NULL,
  `p` int(11) NOT NULL,
  `o` int(11) NOT NULL,
  `open` date NOT NULL,
  `close` date NOT NULL,
  `status` enum('New','In Progress','Won','Lost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_schedule`
--

CREATE TABLE `sys_schedule` (
  `id` int(11) NOT NULL,
  `cname` mediumtext NOT NULL,
  `val` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_schedule`
--

INSERT INTO `sys_schedule` (`id`, `cname`, `val`) VALUES
(1, 'accounting_snapshot', 'Active'),
(2, 'recurring_invoice', 'Active'),
(3, 'notify', 'Active'),
(4, 'notifyemail', 'demo@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `sys_schedulelogs`
--

CREATE TABLE `sys_schedulelogs` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `logs` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_schedulelogs`
--

INSERT INTO `sys_schedulelogs` (`id`, `date`, `logs`) VALUES
(4, '2015-03-14', '2015-03-14 20:17:15 : Schedule Jobs Started....... <br>2015-03-14 20:17:15 : Creating Accounting Snapshot <br>2015-03-14 20:17:15 : Accounting Snapshot created! <br>=============== Accounting Snaphsot ==================== <br>Accounting Snaphsot - Date: 2015-03-13<br>Total Income: Tk. 0.00<br>Total Expense: Tk. 0.00<br>================================================== <br>2015-03-14 20:17:15 : Creating Recurring Invoice <br>2015-03-14 20:17:15 : 1 Invoice created! <br>================================================== <br>');

-- --------------------------------------------------------

--
-- Table structure for table `sys_staffpermissions`
--

CREATE TABLE `sys_staffpermissions` (
  `id` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `shortname` varchar(50) DEFAULT NULL,
  `can_view` int(1) NOT NULL DEFAULT 0,
  `can_edit` int(1) NOT NULL DEFAULT 0,
  `can_create` int(1) NOT NULL DEFAULT 0,
  `can_delete` int(1) NOT NULL DEFAULT 0,
  `all_data` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tags`
--

CREATE TABLE `sys_tags` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tasks`
--

CREATE TABLE `sys_tasks` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT 0,
  `oid` int(11) NOT NULL DEFAULT 0,
  `iid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL DEFAULT 0,
  `tid` int(11) NOT NULL DEFAULT 0,
  `eid` int(11) NOT NULL DEFAULT 0,
  `pid` int(11) NOT NULL DEFAULT 0,
  `did` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `subscribers` text DEFAULT NULL,
  `assigned_to` text DEFAULT NULL,
  `priority` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `vtoken` varchar(50) DEFAULT NULL,
  `ptoken` varchar(50) DEFAULT NULL,
  `started` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `stime` varchar(50) DEFAULT NULL,
  `dtime` varchar(50) DEFAULT NULL,
  `time_spent` varchar(50) DEFAULT NULL,
  `date_finished` date DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `finished` int(1) NOT NULL DEFAULT 0,
  `ratings` varchar(50) DEFAULT NULL,
  `rel_type` varchar(50) DEFAULT NULL,
  `rel_id` int(11) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `is_public` int(1) NOT NULL DEFAULT 0,
  `billable` int(1) NOT NULL DEFAULT 0,
  `billed` int(1) NOT NULL DEFAULT 0,
  `hourly_rate` decimal(14,2) NOT NULL DEFAULT 0.00,
  `milestone` int(11) DEFAULT NULL,
  `progress` int(3) DEFAULT NULL,
  `visible_to_client` int(1) NOT NULL DEFAULT 0,
  `notification` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tax`
--

CREATE TABLE `sys_tax` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `aid` int(11) NOT NULL,
  `bal` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_tax`
--

INSERT INTO `sys_tax` (`id`, `name`, `state`, `country`, `rate`, `aid`, `bal`) VALUES
(1, 'Sales Tax', '', '', '1.50', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `sys_transactions`
--

CREATE TABLE `sys_transactions` (
  `id` int(11) NOT NULL,
  `account` varchar(200) NOT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `amount` decimal(18,2) NOT NULL,
  `payer` varchar(200) DEFAULT NULL,
  `payee` varchar(200) DEFAULT NULL,
  `payerid` int(11) NOT NULL DEFAULT 0,
  `payeeid` int(11) NOT NULL DEFAULT 0,
  `method` varchar(200) DEFAULT NULL,
  `ref` varchar(200) DEFAULT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `description` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `tax` decimal(18,2) NOT NULL DEFAULT 0.00,
  `date` date NOT NULL,
  `dr` decimal(18,2) NOT NULL DEFAULT 0.00,
  `cr` decimal(18,2) NOT NULL DEFAULT 0.00,
  `bal` decimal(18,2) NOT NULL DEFAULT 0.00,
  `iid` int(11) NOT NULL DEFAULT 0,
  `currency` int(11) NOT NULL DEFAULT 0,
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT 1.0000,
  `base_amount` decimal(16,4) NOT NULL DEFAULT 0.0000,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `vid` int(11) NOT NULL DEFAULT 0,
  `aid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `attachments` text DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `rid` int(11) NOT NULL DEFAULT 0,
  `pid` int(11) NOT NULL DEFAULT 0,
  `archived` int(1) NOT NULL DEFAULT 0,
  `trash` int(1) NOT NULL DEFAULT 0,
  `flag` int(1) NOT NULL DEFAULT 0,
  `c1` text DEFAULT NULL,
  `c2` text DEFAULT NULL,
  `c3` text DEFAULT NULL,
  `c4` text DEFAULT NULL,
  `c5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_units`
--

CREATE TABLE `sys_units` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `conversion_factor` decimal(16,2) NOT NULL DEFAULT 0.00,
  `sorder` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `fullname` varchar(45) NOT NULL DEFAULT '',
  `phonenumber` varchar(20) DEFAULT NULL,
  `password` mediumtext NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'Full Access',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `creationdate` datetime NOT NULL,
  `otp` enum('Yes','No') NOT NULL DEFAULT 'No',
  `pin_enabled` enum('Yes','No') NOT NULL DEFAULT 'No',
  `pin` mediumtext NOT NULL,
  `img` text NOT NULL,
  `api` enum('Yes','No') DEFAULT 'No',
  `pwresetkey` varchar(100) NOT NULL,
  `keyexpire` varchar(100) NOT NULL,
  `roleid` int(11) NOT NULL DEFAULT 0,
  `role` varchar(200) DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `autologin` varchar(200) DEFAULT NULL,
  `at` varchar(200) DEFAULT NULL,
  `landing_page` varchar(200) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `c1` text DEFAULT NULL,
  `c2` text DEFAULT NULL,
  `c3` text DEFAULT NULL,
  `c4` text DEFAULT NULL,
  `c5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `username`, `fullname`, `phonenumber`, `password`, `user_type`, `status`, `last_login`, `email`, `creationdate`, `otp`, `pin_enabled`, `pin`, `img`, `api`, `pwresetkey`, `keyexpire`, `roleid`, `role`, `last_activity`, `autologin`, `at`, `landing_page`, `language`, `notes`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 'demo@example.com', 'Administrator', '', '$2b$10$.vWJz4hX0TW5Z7hK.hYkB.JdXXiz7zceyJbPo3hm.jxtbTNp05oQi', 'Admin', 'Active', '2022-11-10 21:52:36', '', '2014-10-20 01:43:07', 'No', 'No', '$1$ZW/.uF5.$.rwCeLiguoBzYzf3waOnY1', '', 'No', '', '0', 0, NULL, NULL, 'jaz924jl76u4zm9pvvkw1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_balances`
--
ALTER TABLE `account_balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clx_integrations`
--
ALTER TABLE `clx_integrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_accounts`
--
ALTER TABLE `crm_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_customfields`
--
ALTER TABLE `crm_customfields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_customfieldsvalues`
--
ALTER TABLE `crm_customfieldsvalues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_groups`
--
ALTER TABLE `crm_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_industries`
--
ALTER TABLE `crm_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_leads`
--
ALTER TABLE `crm_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_lead_sources`
--
ALTER TABLE `crm_lead_sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_lead_status`
--
ALTER TABLE `crm_lead_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_salutations`
--
ALTER TABLE `crm_salutations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_doc_rel`
--
ALTER TABLE `ib_doc_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ib_invoice_access_log`
--
ALTER TABLE `ib_invoice_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_accounts`
--
ALTER TABLE `sys_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_activity`
--
ALTER TABLE `sys_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_api`
--
ALTER TABLE `sys_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_appconfig`
--
ALTER TABLE `sys_appconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cart`
--
ALTER TABLE `sys_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cats`
--
ALTER TABLE `sys_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_companies`
--
ALTER TABLE `sys_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_currencies`
--
ALTER TABLE `sys_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_documents`
--
ALTER TABLE `sys_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_emailconfig`
--
ALTER TABLE `sys_emailconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_email_logs`
--
ALTER TABLE `sys_email_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_email_templates`
--
ALTER TABLE `sys_email_templates`
  ADD PRIMARY KEY (`id`,`language_id`),
  ADD KEY `tplname` (`tplname`(32));

--
-- Indexes for table `sys_events`
--
ALTER TABLE `sys_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_invoiceitems`
--
ALTER TABLE `sys_invoiceitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoiceid` (`invoiceid`);

--
-- Indexes for table `sys_invoices`
--
ALTER TABLE `sys_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `status` (`status`(3));

--
-- Indexes for table `sys_items`
--
ALTER TABLE `sys_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_item_cats`
--
ALTER TABLE `sys_item_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_leads`
--
ALTER TABLE `sys_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_orders`
--
ALTER TABLE `sys_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_permissions`
--
ALTER TABLE `sys_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pg`
--
ALTER TABLE `sys_pg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gateway_setting` (`name`(32),`processor`(32)),
  ADD KEY `setting_value` (`processor`(32),`ins`(32));

--
-- Indexes for table `sys_pl`
--
ALTER TABLE `sys_pl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pmethods`
--
ALTER TABLE `sys_pmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quoteitems`
--
ALTER TABLE `sys_quoteitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quotes`
--
ALTER TABLE `sys_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_roles`
--
ALTER TABLE `sys_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_sales`
--
ALTER TABLE `sys_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_schedule`
--
ALTER TABLE `sys_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_schedulelogs`
--
ALTER TABLE `sys_schedulelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_staffpermissions`
--
ALTER TABLE `sys_staffpermissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tags`
--
ALTER TABLE `sys_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tasks`
--
ALTER TABLE `sys_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tax`
--
ALTER TABLE `sys_tax`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_country` (`state`(32),`country`(2));

--
-- Indexes for table `sys_transactions`
--
ALTER TABLE `sys_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_units`
--
ALTER TABLE `sys_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_balances`
--
ALTER TABLE `account_balances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clx_integrations`
--
ALTER TABLE `clx_integrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_accounts`
--
ALTER TABLE `crm_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crm_customfields`
--
ALTER TABLE `crm_customfields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_customfieldsvalues`
--
ALTER TABLE `crm_customfieldsvalues`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_groups`
--
ALTER TABLE `crm_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_industries`
--
ALTER TABLE `crm_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `crm_leads`
--
ALTER TABLE `crm_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_lead_sources`
--
ALTER TABLE `crm_lead_sources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `crm_lead_status`
--
ALTER TABLE `crm_lead_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crm_salutations`
--
ALTER TABLE `crm_salutations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ib_doc_rel`
--
ALTER TABLE `ib_doc_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ib_invoice_access_log`
--
ALTER TABLE `ib_invoice_access_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_accounts`
--
ALTER TABLE `sys_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_activity`
--
ALTER TABLE `sys_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_api`
--
ALTER TABLE `sys_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_appconfig`
--
ALTER TABLE `sys_appconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `sys_cart`
--
ALTER TABLE `sys_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_cats`
--
ALTER TABLE `sys_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `sys_companies`
--
ALTER TABLE `sys_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_currencies`
--
ALTER TABLE `sys_currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_documents`
--
ALTER TABLE `sys_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_emailconfig`
--
ALTER TABLE `sys_emailconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_email_logs`
--
ALTER TABLE `sys_email_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_email_templates`
--
ALTER TABLE `sys_email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sys_events`
--
ALTER TABLE `sys_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_invoiceitems`
--
ALTER TABLE `sys_invoiceitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_invoices`
--
ALTER TABLE `sys_invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_items`
--
ALTER TABLE `sys_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_item_cats`
--
ALTER TABLE `sys_item_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_leads`
--
ALTER TABLE `sys_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sys_orders`
--
ALTER TABLE `sys_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_permissions`
--
ALTER TABLE `sys_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sys_pg`
--
ALTER TABLE `sys_pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sys_pl`
--
ALTER TABLE `sys_pl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_pmethods`
--
ALTER TABLE `sys_pmethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sys_quoteitems`
--
ALTER TABLE `sys_quoteitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_quotes`
--
ALTER TABLE `sys_quotes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_roles`
--
ALTER TABLE `sys_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_sales`
--
ALTER TABLE `sys_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_schedule`
--
ALTER TABLE `sys_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_schedulelogs`
--
ALTER TABLE `sys_schedulelogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_staffpermissions`
--
ALTER TABLE `sys_staffpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tags`
--
ALTER TABLE `sys_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tasks`
--
ALTER TABLE `sys_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tax`
--
ALTER TABLE `sys_tax`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_transactions`
--
ALTER TABLE `sys_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_units`
--
ALTER TABLE `sys_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `inventorysalesci`
--
CREATE DATABASE IF NOT EXISTS `inventorysalesci` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inventorysalesci`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile1` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `password` char(60) NOT NULL,
  `role` char(5) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `last_seen` datetime NOT NULL,
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `account_status` char(1) NOT NULL DEFAULT '1',
  `deleted` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `mobile1`, `mobile2`, `password`, `role`, `created_on`, `last_login`, `last_seen`, `last_edited`, `account_status`, `deleted`) VALUES
(1, 'Admin', 'Liam', 'admin@gmail.com', '7012224570', '7014547000', '$2y$10$7rLSvRVyTQORapkDOqmkhetjF6H9lJHngr4hJMSM2lHObJbW5EQh6', 'Super', '2017-01-04 22:19:16', '2021-06-02 01:12:12', '2021-06-02 01:08:33', '2021-06-01 19:27:12', '1', '0'),
(2, 'Bruno', 'Denn', 'bruno@gmail.com', '15788898550', '245888888500', '$2y$10$J8JbzxB6gRIfa.pwQmZlQe3A4KYlLDkBWSlI9gTPA3eyDLlMNOhR6', 'Basic', '2021-04-19 23:37:20', '2021-06-02 00:31:44', '2021-06-01 22:39:19', '2021-06-01 18:46:44', '1', '0'),
(3, 'Stephen', 'Mchan', 'stephen@gmail.com', '70200000200', '', '$2y$10$BMts9/L0DedHjKbEX2s35evRiVKTfIfTAUGId92r037c3Ea1kmwES', 'Basic', '2021-06-02 00:52:07', '2021-06-02 01:10:30', '2021-06-02 00:59:08', '2021-06-01 19:25:30', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `eventlog`
--

CREATE TABLE `eventlog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event` varchar(200) NOT NULL,
  `eventRowIdOrRef` varchar(20) DEFAULT NULL,
  `eventDesc` text DEFAULT NULL,
  `eventTable` varchar(20) DEFAULT NULL,
  `staffInCharge` bigint(20) UNSIGNED NOT NULL,
  `eventTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlog`
--

INSERT INTO `eventlog` (`id`, `event`, `eventRowIdOrRef`, `eventDesc`, `eventTable`, `staffInCharge`, `eventTime`) VALUES
(1, 'Creation of new item', '1', 'Addition of 69 quantities of a new item \'Demo Item\' with a unit price of &#8358;500.00 to stock', 'items', 1, '2021-04-19 17:47:59'),
(2, 'New Transaction', '765149033', '1 items totalling &#8358;490.00 with reference number 765149033 was purchased', 'transactions', 1, '2021-04-19 17:49:03'),
(3, 'Creation of new item', '2', 'Addition of 669 quantities of a new item \'Toy Cars\' with a unit price of $24.00 to stock', 'items', 1, '2021-06-01 13:57:58'),
(4, 'Creation of new item', '3', 'Addition of 712 quantities of a new item \'Oats Crunchy Honey Roasted Cereal\' with a unit price of $12.00 to stock', 'items', 1, '2021-06-01 13:59:54'),
(5, 'Creation of new item', '4', 'Addition of 752 quantities of a new item \'KIND Breakfast Cereal\' with a unit price of $21.55 to stock', 'items', 1, '2021-06-01 14:01:25'),
(6, 'New Transaction', '23649438', '1 items totalling $211.50 with reference number 23649438 was purchased', 'transactions', 1, '2021-06-01 14:03:10'),
(7, 'Creation of new item', '5', 'Addition of 1125 quantities of a new item \'Duck Brand Stretch Wrap\' with a unit price of $33.00 to stock', 'items', 1, '2021-06-01 14:12:11'),
(8, 'Creation of new item', '6', 'Addition of 1265 quantities of a new item \'Self Adhesive Clear Cookie Bags\' with a unit price of $8.00 to stock', 'items', 1, '2021-06-01 14:14:09'),
(9, 'New Transaction', '439972', '1 items totalling $2,166.78 with reference number 439972 was purchased', 'transactions', 1, '2021-06-01 14:15:41'),
(10, 'Creation of new item', '7', 'Addition of 552 quantities of a new item \'Lightweight Satin Soft Fabric\' with a unit price of $12.00 to stock', 'items', 1, '2021-06-01 14:19:42'),
(11, 'Creation of new item', '8', 'Addition of 852 quantities of a new item \'Anderson&#039;s Black Flame Retardant Gossamer Fabric\' with a unit price of $12.00 to stock', 'items', 1, '2021-06-01 14:21:08'),
(12, 'Creation of new item', '9', 'Addition of 811 quantities of a new item \'Precut Quilting Sewing Fabric\' with a unit price of $9.00 to stock', 'items', 1, '2021-06-01 14:25:01'),
(13, 'Creation of new item', '10', 'Addition of 563 quantities of a new item \'Orgnisulmte USDA Organic Dragon Fruit Powder\' with a unit price of $9.00 to stock', 'items', 1, '2021-06-01 14:30:45'),
(14, 'Creation of new item', '11', 'Addition of 469 quantities of a new item \'KIND Whole Fruit Bars\' with a unit price of $11.00 to stock', 'items', 1, '2021-06-01 14:31:45'),
(15, 'Creation of new item', '12', 'Addition of 482 quantities of a new item \'Del Monte Fruit and Oats Snack Cups\' with a unit price of $11.55 to stock', 'items', 1, '2021-06-01 14:33:14'),
(16, 'Creation of new item', '13', 'Addition of 888 quantities of a new item \'Chicken of the Sea Sardines\' with a unit price of $20.06 to stock', 'items', 1, '2021-06-01 14:34:28'),
(17, 'Creation of new item', '14', 'Addition of 702 quantities of a new item \'Wild Sardines\' with a unit price of $31.95 to stock', 'items', 1, '2021-06-01 14:35:38'),
(18, 'Creation of new item', '15', 'Addition of 995 quantities of a new item \'MW Polar Smoked Brisling Sardines in Olive Oil\' with a unit price of $35.38 to stock', 'items', 1, '2021-06-01 14:37:26'),
(19, 'Creation of new item', '16', 'Addition of 196 quantities of a new item \'Bluetooth Headphones Over-Ear\' with a unit price of $23.91 to stock', 'items', 1, '2021-06-01 14:38:54'),
(20, 'Creation of new item', '17', 'Addition of 201 quantities of a new item \'Panasonic Full-Sized Headphones\' with a unit price of $13.77 to stock', 'items', 1, '2021-06-01 14:39:55'),
(21, 'Creation of new item', '18', 'Addition of 236 quantities of a new item \'Toshiba Canvio 1TB Portable External Hard Drive\' with a unit price of $62.55 to stock', 'items', 1, '2021-06-01 16:25:16'),
(22, 'Creation of new item', '19', 'Addition of 312 quantities of a new item \'Seagate BarraCuda 2TB Internal Hard Drive\' with a unit price of $71.50 to stock', 'items', 1, '2021-06-01 16:26:55'),
(23, 'Creation of new item', '20', 'Addition of 589 quantities of a new item \'Samsung BAR Plus USB 3.1 Flash Drive 128GB\' with a unit price of $24.59 to stock', 'items', 1, '2021-06-01 16:28:30'),
(24, 'Creation of new item', '21', 'Addition of 6540 quantities of a new item \'Multipurpose Copy Printer Paper\' with a unit price of $19.10 to stock', 'items', 1, '2021-06-01 16:30:08'),
(25, 'New Transaction', '03941028', '1 items totalling $105.06 with reference number 03941028 was purchased', 'transactions', 1, '2021-06-01 16:31:05'),
(26, 'New Transaction', '872496', '1 items totalling $226.38 with reference number 872496 was purchased', 'transactions', 1, '2021-06-01 16:37:04'),
(27, 'Creation of new item', '22', 'Addition of 2550 quantities of a new item \'Metronic Large Shipping Bags Poly Mailers\' with a unit price of $4.99 to stock', 'items', 1, '2021-06-01 16:41:40'),
(28, 'New Transaction', '374217', '1 items totalling $429.14 with reference number 374217 was purchased', 'transactions', 1, '2021-06-01 16:43:26'),
(29, 'New Transaction', '18075809', '1 items totalling $946.64 with reference number 18075809 was purchased', 'transactions', 1, '2021-06-01 17:37:00'),
(30, 'New Transaction', '192549', '1 items totalling $254.52 with reference number 192549 was purchased', 'transactions', 1, '2021-06-01 18:29:37'),
(31, 'New Transaction', '641908', '1 items totalling $344.42 with reference number 641908 was purchased', 'transactions', 1, '2021-06-01 18:31:34'),
(32, 'New Transaction', '2346405', '1 items totalling $8,250.00 with reference number 2346405 was purchased', 'transactions', 1, '2021-06-01 18:33:38'),
(33, 'New Transaction', '983709261', '1 items totalling $1,164.00 with reference number 983709261 was purchased', 'transactions', 1, '2021-06-01 18:34:40'),
(34, 'Creation of new item', '23', 'Addition of 369 quantities of a new item \'Crunchies Freeze-Dried Fruits Variety Pack\' with a unit price of $17.00 to stock', 'items', 1, '2021-06-01 19:17:26'),
(35, 'New Transaction', '32825746', '1 items totalling $1,266.16 with reference number 32825746 was purchased', 'transactions', 1, '2021-06-01 19:19:33'),
(36, 'New Transaction', '895691278', '1 items totalling $280.91 with reference number 895691278 was purchased', 'transactions', 1, '2021-06-01 19:22:15'),
(37, 'New Transaction', '1230158', '1 items totalling $12,279.01 with reference number 1230158 was purchased', 'transactions', 1, '2021-06-01 19:24:03'),
(38, 'New Transaction', '069215370', '1 items totalling $734.40 with reference number 069215370 was purchased', 'transactions', 3, '2021-06-01 19:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `unitPrice` decimal(10,2) NOT NULL,
  `quantity` int(6) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `code`, `description`, `unitPrice`, `quantity`, `dateAdded`, `lastUpdated`) VALUES
(1, 'Demo Item', '101', 'Demo Test', '500.00', 68, '2021-04-19 23:32:59', '2021-04-19 17:49:03'),
(2, 'Toy Cars', '102', '5 in 1 colorful transporter truck Toys set, including a big transporter, a mini airplane, a small Taxi, a small bus and a middle bus. Colored toy cars with cute expressions, cartoon drawings better arouse kid&#039;s curiosity and give children a happy world. The ideal gifts for birthdays, parties, Christmas and any festival.', '24.00', 639, '2021-06-01 19:42:58', '2021-06-01 19:26:28'),
(3, 'Oats Crunchy Honey Roasted Cereal', '103', 'Honey Bunches of Oats cereal is the perfect combination of crispy flakes, crunchy oat clusters with a touch of honey.', '12.00', 712, '2021-06-01 19:44:54', '2021-06-01 13:59:54'),
(4, 'KIND Breakfast Cereal', '104', 'Flavor: Apple Cinnamon, 100% whole grains', '21.55', 742, '2021-06-01 19:46:25', '2021-06-01 14:03:09'),
(5, 'Duck Brand Stretch Wrap', '105', 'Heavy 70 gauge plastic wrap safely secures and bundles items while moving, in storage or in transit', '33.00', 808, '2021-06-01 19:57:11', '2021-06-01 18:33:38'),
(6, 'Self Adhesive Clear Cookie Bags', '106', 'Our self-adhesive cookie bags are made of food grade opp plastic material with a matte surface design, and a comfortable feel which is safe to use, odor-free, non-toxic, durable for your daily or commercial use.', '8.00', 1265, '2021-06-01 19:59:09', '2021-06-01 14:14:09'),
(7, 'Lightweight Satin Soft Fabric', '107', 'Color: Green, Maroon, Red, Navy Blue, Brown, Violet, Pattern: Solid, Weave Type: Satin', '12.00', 531, '2021-06-01 20:04:42', '2021-06-01 18:29:37'),
(8, 'Anderson&#039;s Black Flame Retardant Gossamer Fab', '108', 'Color: Black, Red, Brown, Purple, Green, 59 Inches x 100 Yard', '12.00', 755, '2021-06-01 20:06:08', '2021-06-01 18:34:40'),
(9, 'Precut Quilting Sewing Fabric', '109', 'Color: Green, Blue, Grey, White, Black, Purple, 18 x 22 inches', '9.00', 811, '2021-06-01 20:10:01', '2021-06-01 14:25:01'),
(10, 'Orgnisulmte USDA Organic Dragon Fruit Powder', '110', '100% Pure Freeze-Dried Pink Pitaya Powder, Natural Red Dragon Fruit Food Coloring Powder,Non GMO,Gluten Free 3.53oz(100g)', '9.00', 563, '2021-06-01 20:15:45', '2021-06-01 14:30:45'),
(11, 'KIND Whole Fruit Bars', '111', 'Strawberry Apple Chia, Chocolate Bananam Dark Chocolate Strawberry No Sugar Added, 1.2oz, 12 Count', '11.00', 448, '2021-06-01 20:16:45', '2021-06-01 16:37:04'),
(12, 'Del Monte Fruit and Oats Snack Cups', '112', '7 Ounce, Premium Quality, No Preservatives', '11.55', 482, '2021-06-01 20:18:13', '2021-06-01 14:33:13'),
(13, 'Chicken of the Sea Sardines', '113', 'Extra Virgin Olive Oil, 3.75 oz (Pack of 18)', '20.06', 888, '2021-06-01 20:19:28', '2021-06-01 14:34:28'),
(14, 'Wild Sardines', '114', 'Skinless &amp; Boneless, in Extra Virgin Olive Oil, Lowest Mercury Limit, Keto, Paleo, 12 count, 4.4oz', '31.95', 691, '2021-06-01 20:20:38', '2021-06-01 18:31:34'),
(15, 'MW Polar Smoked Brisling Sardines in Olive Oil', '115', '9.5oz. Jar (Pack of 6), Wild caught in the Baltic Sea, Naturally wood smoked, Packaged in Olive Oil', '35.38', 992, '2021-06-01 20:22:26', '2021-06-01 16:31:05'),
(16, 'Bluetooth Headphones Over-Ear', '116', 'Zihnic Foldable Wireless and Wired Stereo Headset Micro SD/TF, FM for Cell Phone,PC,Soft Earmuffs &amp;Light Weight for Prolonged Waring(Rose Gold)', '23.91', 156, '2021-06-01 20:23:54', '2021-06-01 17:37:00'),
(17, 'Panasonic Full-Sized Headphones', '117', 'Contains Mic, Lightweight Long-Cord Headphones – RP-HT161-K (Black)', '13.77', 181, '2021-06-01 20:24:55', '2021-06-01 19:22:15'),
(18, 'Toshiba Canvio 1TB Portable External Hard Drive', '118', 'Item Dimensions: LxWxH	4.3 x 3.1 x 0.55 inches, Drive USB 3.0, Black', '62.55', 236, '2021-06-01 22:10:16', '2021-06-01 16:25:16'),
(19, 'Seagate BarraCuda 2TB Internal Hard Drive', '119', '3.5 Inch SATA 6Gb/s 7200 RPM 256MB Cache 3.5-Inch – Frustration Free Packaging', '71.50', 312, '2021-06-01 22:11:55', '2021-06-01 16:26:55'),
(20, 'Samsung BAR Plus USB 3.1 Flash Drive 128GB', '120', 'Brand: Samsung, Silver Color, Redefine everyday file transfers with read speeds up to 400MB/s; USB 3.1 flash drive with backwards compatibility (USB 3.0, USB 2.0)', '24.59', 589, '2021-06-01 22:13:30', '2021-06-01 16:28:30'),
(21, 'Multipurpose Copy Printer Paper', '121', 'White, 8.5 x 11 Inches, 3 Ream Case', '19.10', 5884, '2021-06-01 22:15:08', '2021-06-01 19:24:03'),
(22, 'Metronic Large Shipping Bags Poly Mailers', '122', '19x24 Envelopes Mailers with Self Adhesive Waterproof and Tear-Proof Postal Bags in White, Black, Blue, Grey', '4.99', 2464, '2021-06-01 22:26:40', '2021-06-01 16:43:26'),
(23, 'Crunchies Freeze-Dried Fruits Variety Pack', '123', '100% All Natural Crispy Snacks, Gluten Free and Vegan, 5.8 Ounce-6 pack', '17.00', 293, '2021-06-02 01:02:26', '2021-06-01 19:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `lk_sess`
--

CREATE TABLE `lk_sess` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transId` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(10) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemCode` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(6) NOT NULL,
  `unitPrice` decimal(10,2) NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `totalMoneySpent` decimal(10,2) NOT NULL,
  `amountTendered` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL,
  `discount_percentage` decimal(10,2) NOT NULL,
  `vatPercentage` decimal(10,2) NOT NULL,
  `vatAmount` decimal(10,2) NOT NULL,
  `changeDue` decimal(10,2) NOT NULL,
  `modeOfPayment` varchar(20) NOT NULL,
  `cust_name` varchar(20) DEFAULT NULL,
  `cust_phone` varchar(15) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  `transType` char(1) NOT NULL,
  `staffId` bigint(20) UNSIGNED NOT NULL,
  `transDate` datetime NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cancelled` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transId`, `ref`, `itemName`, `itemCode`, `description`, `quantity`, `unitPrice`, `totalPrice`, `totalMoneySpent`, `amountTendered`, `discount_amount`, `discount_percentage`, `vatPercentage`, `vatAmount`, `changeDue`, `modeOfPayment`, `cust_name`, `cust_phone`, `cust_email`, `transType`, `staffId`, `transDate`, `lastUpdated`, `cancelled`) VALUES
(1, '765149033', 'Demo Item', '101', '', 1, '500.00', '500.00', '490.00', '500.00', '10.00', '2.00', '0.00', '0.00', '10.00', 'Cash', 'John', '3457896660', 'john@gmail.com', '1', 1, '2021-04-19 23:34:03', '2021-04-19 17:49:03', '0'),
(2, '23649438', 'KIND Breakfast Cereal', '104', '', 10, '21.55', '215.50', '211.50', '225.00', '4.00', '1.86', '0.00', '0.00', '13.50', 'Cash', 'Will Williams', '7410002145', 'williams@gmail.com', '1', 1, '2021-06-01 19:48:09', '2021-06-01 14:03:09', '0'),
(3, '439972', 'Duck Brand Stretch Wrap', '105', '', 67, '33.00', '2211.00', '2166.78', '2170.00', '44.22', '2.00', '0.00', '0.00', '3.22', 'Cash', 'John Watts', '7025802586', 'johnwt@gmail.com', '1', 1, '2021-06-01 20:00:41', '2021-06-01 14:15:41', '0'),
(4, '03941028', 'MW Polar Smoked Brisling Sardines in Olive Oil', '115', '', 3, '35.38', '106.14', '105.06', '110.00', '2.12', '2.00', '1.00', '1.04', '4.94', 'Cash', 'Johnny Greenwood', '7014547770', 'greenjoh@gmail.com', '1', 1, '2021-06-01 22:16:05', '2021-06-01 16:31:05', '0'),
(5, '872496', 'KIND Whole Fruit Bars', '111', '', 21, '11.00', '231.00', '226.38', '226.38', '4.62', '2.00', '0.00', '0.00', '0.00', 'POS', 'Colin Stuart', '7025896333', 'coleeen@gmail.com', '1', 1, '2021-06-01 22:22:04', '2021-06-01 16:37:04', '0'),
(6, '374217', 'Metronic Large Shipping Bags Poly Mailers', '122', '', 86, '4.99', '429.14', '429.14', '429.14', '0.00', '0.00', '0.00', '0.00', '0.00', 'Cash and POS', 'Philip Brown', '7347775477', 'philip@gmail.com', '1', 1, '2021-06-01 22:28:26', '2021-06-01 16:43:26', '0'),
(7, '18075809', 'Bluetooth Headphones Over-Ear', '116', '', 40, '23.91', '956.40', '946.64', '946.64', '19.13', '2.00', '1.00', '9.37', '0.00', 'Cash and POS', 'Eddie', '7001112540', 'eddie55@gmail.com', '1', 1, '2021-06-01 23:22:00', '2021-06-01 17:37:00', '0'),
(8, '192549', 'Lightweight Satin Soft Fabric', '107', '', 21, '12.00', '252.00', '254.52', '255.00', '0.00', '0.00', '1.00', '2.52', '0.48', 'Cash', 'Eugenio Brown', '7014747540', 'eugenio@gmail.com', '1', 1, '2021-06-02 00:14:37', '2021-06-01 18:29:37', '0'),
(9, '641908', 'Wild Sardines', '114', '', 11, '31.95', '351.45', '344.42', '345.00', '7.03', '2.00', '0.00', '0.00', '0.58', 'Cash', 'Peter Buchanan', '7321450014', 'peterb@gmail.com', '1', 1, '2021-06-02 00:16:34', '2021-06-01 18:31:34', '0'),
(10, '2346405', 'Duck Brand Stretch Wrap', '105', '', 250, '33.00', '8250.00', '8250.00', '8250.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Cash', 'Arnold Flesher', '7940001240', 'arnold@gmail.com', '1', 1, '2021-06-02 00:18:38', '2021-06-01 18:33:38', '0'),
(11, '983709261', 'Anderson&#039;s Black Flame Retardant Gossamer Fab', '108', '', 97, '12.00', '1164.00', '1164.00', '1165.00', '0.00', '0.00', '0.00', '0.00', '1.00', 'Cash', 'John Bland', '7012220001', 'johnb@gmail.com', '1', 1, '2021-06-02 00:19:40', '2021-06-01 18:34:40', '0'),
(12, '32825746', 'Crunchies Freeze-Dried Fruits Variety Pack', '123', '', 76, '17.00', '1292.00', '1266.16', '1270.00', '25.84', '2.00', '0.00', '0.00', '3.84', 'Cash', 'Richard Lawrence', '7850001450', 'richardlw@gmail.com', '1', 1, '2021-06-02 01:04:33', '2021-06-01 19:19:33', '0'),
(13, '895691278', 'Panasonic Full-Sized Headphones', '117', '', 20, '13.77', '275.40', '280.91', '280.91', '0.00', '0.00', '2.00', '5.51', '0.00', 'POS', 'Liam Moore', '7010000025', 'moorel@gmail.com', '1', 1, '2021-06-02 01:07:15', '2021-06-01 19:22:15', '0'),
(14, '1230158', 'Multipurpose Copy Printer Paper', '121', '', 656, '19.10', '12529.60', '12279.01', '12279.01', '250.59', '2.00', '0.00', '0.00', '0.00', 'Cash and POS', 'Willam Payne', '7560002450', 'paynew@gmail.com', '1', 1, '2021-06-02 01:09:03', '2021-06-01 19:24:03', '0'),
(15, '069215370', 'Toy Cars', '102', '', 30, '24.00', '720.00', '734.40', '735.00', '0.00', '0.00', '2.00', '14.40', '0.60', 'Cash', 'John Doe', '7014445470', 'doejjj@gmail.com', '1', 3, '2021-06-02 01:11:28', '2021-06-01 19:26:28', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile1` (`mobile1`);

--
-- Indexes for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventlog`
--
ALTER TABLE `eventlog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'alscdb_backup', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"alscdb\",\"ibilling\",\"inventorysalesci\",\"phpmyadmin\",\"realestatephp\",\"test\",\"testdb\",\"usermanagement\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"alscdb\",\"table\":\"t_csr\"},{\"db\":\"alscdb\",\"table\":\"t_agents\"},{\"db\":\"alscdb\",\"table\":\"users\"},{\"db\":\"alscdb\",\"table\":\"t_lots\"},{\"db\":\"testdb\",\"table\":\"comments\"},{\"db\":\"alscdb\",\"table\":\"t_csr_comments\"},{\"db\":\"alscdb\",\"table\":\"t_csr_commission\"},{\"db\":\"alscdb\",\"table\":\"t_csr_comment\"},{\"db\":\"alscdb\",\"table\":\"t_reservation\"},{\"db\":\"alscdb\",\"table\":\"t_projects\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'inventorysalesci', 'eventlog', '{\"CREATE_TIME\":\"2022-11-10 14:04:06\",\"col_order\":[0,1,2,3,5,6,4],\"col_visib\":[1,1,1,1,1,1,1]}', '2022-11-10 06:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-11-15 03:28:40', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `realestatephp`
--
CREATE DATABASE IF NOT EXISTS `realestatephp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `realestatephp`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Us', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. (codeastro.com). This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. (codeastro.com) This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'condos-pool.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(9, 'admin', 'admin@gmail.com', '6812f136d636e737248d365016f8cfd5139e387c', '1994-12-06', '1470002569');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(9, 'Olisphis', 3),
(10, 'Alegas', 2),
(11, 'Floson', 2),
(12, 'Ulmore', 7),
(13, 'Awrerton', 15);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(7, 'codeastro', 'asda@asd.com', '8888885454', 'codeastro.com', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(7, 28, 'This is a demo feedback in order to use set it as Testimonial for the site. Just a simply dummy text rather than using lorem ipsum text lines.', 1, '2022-07-23 16:07:08'),
(8, 33, 'This is great. This is just great. Hmmm, just a dummy text for users feedback.', 1, '2022-07-23 21:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `hall` int(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `totalfloor` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `isFeatured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `floor`, `size`, `price`, `location`, `city`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `totalfloor`, `date`, `isFeatured`) VALUES
(25, 'Zills Home', '', 'house', '4 BHK', 'sale', 4, 2, 0, 1, 1, '2nd Floor', 1869, 219690, '39 Bailey Drive', 'Floson', 'Colotana', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'zillhms1.jpg', 'zillhms2.jpg', 'zillhms3.jpg', 'zillhms4.jpg', 'zillhms5.jpg', 30, 'available', 'floorplan_sample.jpg', 'zillhms7.jpg', 'zillhms6.jpg', '2 Floor', '2022-07-22 22:29:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(2, 'Colotana'),
(3, 'Floaii'),
(4, 'Virconsin'),
(7, 'West Misstana\n\n'),
(9, 'New Pennrk\n\n'),
(10, 'Louiswa\n\n'),
(15, 'Wisginia\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`) VALUES
(28, 'Christine', 'christine@mail.com', '7777444455', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'gr7.png'),
(29, 'Alice Howard', 'howarda@mail.com', '7775552214', '6812f136d636e737248d365016f8cfd5139e387c', 'agent', 'avatarm2-min.jpg'),
(30, 'Thomas Olson', 'thomas@mail.com', '7896665555', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'avatarm7-min.jpg'),
(31, 'Cynthia N. Moore', 'moore@mail.com', '7896547855', '6812f136d636e737248d365016f8cfd5139e387c', 'agent', 'user-default-3-min.png'),
(32, 'Carl Jones', 'carl@mail.com', '1458887969', '6812f136d636e737248d365016f8cfd5139e387c', 'agent', 'user-profile-min.png'),
(33, 'Noah Stones', 'noah@mail.com', '7965555544', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'usersys-min.png'),
(34, 'Fred Godines', 'fred@mail.com', '7850002587', '6812f136d636e737248d365016f8cfd5139e387c', 'builder', 'user-a-min.png'),
(35, 'Michael', 'michael@mail.com', '8542221140', '6812f136d636e737248d365016f8cfd5139e387c', 'user', 'usric.png'),
(36, 'JUDE PANGILINAN DELA CRUZ', 'jaevoli@gmail.com', '9561305511', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'user', 'logo.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `reply_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post_id`, `created_at`, `reply_of`) VALUES
(29, 'xcccc', '1212@gmail', '121212', 1, '2022-11-14 16:30:41', 0),
(30, 'xcccc', '1212@gmail', '121212', 1, '2022-11-14 16:31:26', 0),
(31, 'grr', 'jaevoli@gmail.com', 'dddd', 1, '2022-11-14 16:31:37', 0),
(32, 'grr', 'jaevoli@gmail.com', 'dddd', 1, '2022-11-14 16:31:42', 0),
(33, 'grr', 'jaevoli@gmail.com', 'dddd', 1, '2022-11-14 16:31:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `usermanagement`
--
CREATE DATABASE IF NOT EXISTS `usermanagement` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `usermanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'general',
  `status` enum('active','pending','deleted','') NOT NULL DEFAULT 'pending',
  `authtoken` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `type`, `status`, `authtoken`) VALUES
(1, 'web', 'damn', 'admin@webdamn.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', '', 'administrator', 'active', ''),
(5, 'jhonn', 'smith', 'info@webdamn.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', '', 'general', 'active', '73f66749989c7b09389894f1b27daa7387f9956fa51c87c1ba4fc4684b91acb5'),
(6, 'Jimmy', 'Anderson', 'jm@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'PHP developer', '', 'general', 'pending', '73f66749989c7b09389894f1b27daa736156fbd08795da8955fb36cf730f2fb0'),
(7, 'Andy', 'Flower', 'andy@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'dfdsd', '', 'administrator', 'deleted', '73f66749989c7b09389894f1b27daa738d2775af2555b0d1ed582212a3991144');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
