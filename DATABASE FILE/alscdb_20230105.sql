-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 07:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `hotel_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `hotel_name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Hotel Management System', 'info@sample.com', '+6948 8542 623', '1600478940_hotel-cover.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;ABOUT US&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;h2 style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;Where does it come from?&lt;/h2&gt;&lt;p style=&quot;text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400;&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&lt;/p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;');

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
(100269, 'Camingal', 'Raymond', '', 'Raymond', 'Male', '1976-10-29', 'Sagrada Paobong, Hagonoy, Bulacan', '#318 SAGRADA PAOMBONG, HAGONOY, BULACAN', 'M1029CR0', '', 'Single', '', '', 'Active', 'Reynaldo J. Camingal', '1996-11-16', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(100302, 'Ysais', 'Lynnet', 'C.', 'Lynneth', 'Female', '1974-04-22', 'Catmon, Malolos, Bulacan', '012 CATMON, MALOLOS, BULACAN', 'M0422YL0', '791-03-38', 'Single', '', '', 'Active', 'Lucita C. Ysais', '1995-06-10', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(100492, 'Hernandez', 'Marcelo', 'A.', 'Mar', 'Male', '1951-09-04', 'Caloocan, Metro Manila', '375 SAN PABLO, MALOLOS, BULACAN', 'M0904HM0', '791-36-73', 'Married', '323782432', '56159932', 'Active', 'Rosita S. Hernandez', '1995-11-15', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(100577, 'Magtira', 'Eugenio', '', 'Gene', 'Male', '1944-01-14', 'Mojon, Malolos, Bulacan', '118 LIBRA ST., SAN FELIPE SUBD., MOJON', 'M0114ME0', '', 'Married', '', '', 'Active', 'Leonora D. Punongbayan', '2006-10-16', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(100590, 'Magtira', 'Francisca', '', 'Francisca', 'Female', '1954-07-04', 'Mojon, Malolos, Bulacan', '118 LIBRA ST., SAN FELIPE SUBD., MOJON', 'M0704MF0', '', 'Married', '', '', 'Active', 'Eugenio Magtira', '2012-08-24', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(100824, 'Lizarondo', 'Regina', '', '', 'Female', '1899-12-31', '', '', 'M0101LR1', '', 'Single', '', '', 'Active', '', '2012-04-10', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(100901, 'Rebina', 'Bienvenida', '', '', 'Female', '1899-12-31', '', '', 'M0101RB0', '', 'Single', '', '', 'Active', '', '2009-10-13', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(100902, 'Santos', 'Remedios', '', '', 'Female', '1971-01-01', '', '', 'M0101SR4', '', 'Single', '', '', 'Active', '', '2005-06-14', 'SM', 'ACHIEVERS', 'Achievers - Direct'),
(100922, 'Quilantang', 'Annalyn', '', '', 'Female', '1971-01-01', '', '', 'M0101QA1', '', 'Single', '', '', 'Active', '', '2006-06-13', 'AVP', 'ACHIEVERS', 'Adrenaline'),
(101700, 'Carbo', 'William', 'R.', '', 'Male', '1971-01-01', '', '', 'M0101CW0', '', 'Single', '', '', 'Active', '', '2005-01-26', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(101787, 'Manalo', 'Rolando', 'Dj', '', 'Male', '1899-12-31', '', '', 'M0101MR3', '', 'Single', '', '', 'Active', '', '2007-02-07', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(102669, 'Mallari', 'Damasa', '', '', 'Female', '1899-12-31', '', '', 'M0101MD8', '', 'Single', '', '', 'Active', '', '2006-07-31', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(102685, 'Viterbo', 'Norelrin', '', '', 'Female', '1971-01-01', '', '', 'M0101VN3', '', 'Single', '', '', 'Active', '', '2004-06-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(102792, 'Bautista', 'Daisy', 'F.', '', 'Female', '1899-12-31', '', '', 'M0101BD4', '', 'Single', '', '', 'Active', '', '2011-03-01', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(102813, 'Lacanlale', 'Remedios', '', '', 'Female', '1899-12-31', '', '', 'M0101LR9', '', 'Single', '', '', 'Active', '', '2015-06-02', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(102980, 'Alipio', 'Shirley', 'F.', '', 'Female', '1900-02-01', '', '', 'M0202AS0', '', 'Single', '', '', 'Active', '', '2015-04-14', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(103098, 'Carbo', 'Mahnny', 'R.', '', 'Male', '1971-01-01', '', '', 'M0203CM2', '', 'Single', '', '', 'Active', '', '2004-05-31', 'SM', 'ACHIEVERS', 'Achievers - Direct'),
(103227, 'Nieves', 'Cecilia', '', '', 'Female', '1971-01-01', '', '', 'M0101NC0', '', 'Single', '', '', 'Active', '', '2004-06-22', 'MA', 'ACHIEVERS', 'Adrenaline'),
(103323, 'Amurao', 'Marissa', '', '', 'Female', '1900-02-02', '', '', 'M0203AM0', '', 'Single', '', '', 'Active', '', '2007-01-23', 'SMG', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(103806, 'Ocampo', 'Herminia', '', '', 'Female', '1971-01-01', '', '', 'M0101OH2', '', 'Single', '', '', 'Active', '', '2005-06-14', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(104216, 'Valencia', 'Marietta', '', '', 'Female', '1900-03-03', '', '', 'M0303VM0', '', 'Single', '', '', 'Active', '', '2011-02-02', 'MA', 'ACHIEVERS', 'Acts'),
(104235, 'Camingal', 'Rinagen', 'A.', '', 'Female', '1971-01-01', '', '', 'M0303AR2', '', 'Single', '', '', 'Active', '', '2018-06-01', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(104245, 'Nieves', 'Reynaldo', '', '', 'Male', '1971-01-01', '', '', 'M0303NR0', '', 'Single', '', '', 'Active', '', '2004-07-17', 'MA', 'ACHIEVERS', 'Adrenaline'),
(104685, 'Mariano', 'Richard', 'A.', '', 'Male', '1900-03-03', '', '', 'M0303MR4', '', 'Single', '', '', 'Active', '', '2009-02-10', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(104744, 'Brillante', 'Edna', 'R.', '', 'Female', '1900-03-03', '', '', 'M0303BE3', '', 'Single', '', '', 'Active', '', '2007-02-15', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(105283, 'Umali', 'Joyce', '', '', 'Female', '1900-01-26', '', '', 'M0127UJ0', '', 'Single', '', '', 'Active', '', '2012-10-03', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(105332, 'Mananghaya', 'Ludivina', 'S.', '', 'Female', '1971-01-01', '', '', 'M0712ML0', '', 'Single', '', '', 'Active', '', '2004-06-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(105429, 'Soria', 'Mayreen Grace', '', '', 'Female', '1980-07-12', '', '', '', '', 'Single', '', '', 'Active', '', '2004-03-26', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(105766, 'Magsakay', 'Ma. Jelyn', '', '', 'Female', '1980-07-12', '', '', '', '', 'Single', '', '', 'Active', '', '2004-08-02', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(105938, 'Carbo', 'Mary Grace', '', '', 'Female', '2004-10-09', '', '', '', '', 'Single', '', '', 'Active', '', '2004-10-09', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(106095, 'Roque', 'Devie', '', '', 'Female', '2004-12-13', '', '', '', '', 'Married', '', '', 'Active', '', '2004-12-13', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(106261, 'Bautista', 'Richard', '', '', 'Female', '2005-02-26', '', '', '', '', 'Single', '', '', 'Active', '', '2005-02-26', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(106473, 'Bantog', 'Angelita', '', '', 'Female', '2005-06-08', '', '', '', '', 'Single', '', '', 'Active', '', '2005-06-08', 'MA', 'ACHIEVERS', 'Acts'),
(106590, 'Flores Jr.', 'Bernardo', '', '', 'Male', '2005-08-02', '', '', '', '', 'Single', '', '', 'Active', '', '2005-08-02', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(106708, 'Villatura', 'Daisy', '', '', 'Female', '2005-10-03', '', '', '', '', 'Single', '', '', 'Active', '', '2005-10-03', 'SM', 'ACHIEVERS', 'Adrenaline'),
(107010, 'Rivera', 'Rosenda', '', '', 'Female', '2006-03-22', '', '', '', '', 'Single', '', '', 'Active', '', '2006-03-22', 'SMG', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(107098, 'Santos', 'Agnes', '', '', 'Female', '2006-05-17', '', '', '', '', 'Single', '', '', 'Active', '', '2006-05-17', 'MA', 'ACHIEVERS', 'Amazing'),
(107203, 'Carbo', 'Leonarda', '', '', 'Female', '2006-07-17', '', '', '', '', 'Single', '', '', 'Active', '', '2004-10-09', 'MA', 'ACHIEVERS', 'Amazing'),
(107311, 'Manlapaz', 'Anna Marie', '', '', 'Female', '2006-09-04', '', '', '', '', 'Single', '', '', 'Active', '', '2006-09-04', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(107380, 'Aberia', 'Joseph', '', '', 'Male', '2006-10-07', '', '', '', '', 'Single', '', '', 'Active', '', '2006-10-09', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(107390, 'Lim', 'Marites', '', '', 'Male', '2006-10-10', '', '', '', '', 'Single', '', '', 'Active', '', '2006-10-16', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(107588, 'Villatura', 'Reynaldo', 'O', '', 'Female', '2007-01-29', '', '', '', '', 'Single', '', '', 'Active', '', '2005-10-03', 'MA', 'ACHIEVERS', 'Adrenaline'),
(107597, 'Rodriguez', 'Rico', '', '', 'Male', '2007-01-31', '', '', '', '', 'Single', '', '', 'Active', '', '2007-02-01', 'MA', 'ACHIEVERS', 'Amazing'),
(107755, 'Andan', 'Edna', 'S', '', 'Male', '2007-03-22', '', '', '', '', 'Single', '', '', 'Active', '', '2007-04-18', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(107832, 'Cruz', 'Gorgonia', 'C', '', 'Male', '2007-05-31', '', '', '', '', 'Single', '', '', 'Active', '', '2007-06-02', 'MA', 'ACHIEVERS', 'Amazing'),
(107957, 'Quindao', 'Asuncion', '', '', 'Male', '2007-08-24', '', '', '', '', 'Single', '', '', 'Active', '', '2007-08-28', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(107989, 'Morales', 'Arlene', '', '', 'Male', '2007-09-16', '', '', '', '', 'Single', '', '', 'Active', '', '2007-09-18', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108024, 'Buquid', 'Analyn', '', '', 'Male', '2007-09-29', '', '', '', '', 'Single', '', '', 'Active', '', '2007-10-04', 'MA', 'ACHIEVERS', 'Acts'),
(108083, 'Galang', 'Josefina', 'A', '', 'Male', '2007-10-31', '', '', '', '', 'Single', '', '', 'Active', '', '2007-11-08', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108094, 'Hernando', 'Mary Ann', '', '', 'Male', '2007-11-18', '', '', '', '', 'Single', '', '', 'Active', '', '2007-11-19', 'SM', 'ACHIEVERS', 'Achievers - Direct'),
(108239, 'San Pedro', 'Elsa', 'R', '', 'Female', '2008-02-04', '', '', '', '', 'Single', '', '', 'Active', '', '2008-02-08', 'AVP', 'ACHIEVERS', 'Awesome'),
(108422, 'Carbo', 'Mildred', '', '', 'Female', '2008-04-25', '', '', '', '', 'Single', '', '', 'Active', '', '2008-04-28', 'AVP', 'ACHIEVERS', 'Achievers - Direct'),
(108427, 'Hernando Jr.', 'Rodolfo', '', '', 'Male', '2008-05-02', '', '', '', '', 'Single', '', '', 'Active', '', '2007-06-22', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108458, 'Guelas', 'Maylene', 'P', '', 'Female', '1977-08-21', '', '', '', '', 'Married', '33-6454233-7', '226-710-213-000', 'Active', '', '2000-07-10', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(108478, 'Cruz', 'Maritess', 'M', '', 'Female', '2008-05-24', '', '', '', '', 'Single', '', '', 'Active', '', '2008-05-26', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(108554, 'Cruz', 'Mercedes', 'P', '', 'Female', '2008-06-22', '', '', '', '', 'Married', '', '', 'Active', '', '1996-02-07', 'MA', 'ACHIEVERS', 'Amazing'),
(108648, 'Mendoza', 'Medy', 'S', '', 'Female', '2008-08-08', '', '', '', '', 'Single', '', '', 'Active', '', '2008-08-11', 'MA', 'ACHIEVERS', 'Amazing'),
(108662, 'Daquigan', 'Maria Cristina', '', '', 'Female', '2008-08-29', '', '', '', '', 'Single', '', '', 'Active', '', '2008-09-01', 'MA', 'ACHIEVERS', 'Acts'),
(108764, 'Pandacan', 'Rosemarie', '', '', 'Female', '2008-10-11', '', '', '', '', 'Single', '', '', 'Active', '', '2008-10-14', 'MA', 'ACHIEVERS', 'Acts'),
(108804, 'Flores', 'Edna', '', '', 'Female', '2008-10-31', '', '', '', '', 'Single', '', '', 'Active', '', '2008-11-06', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108828, 'Caparas', 'Geronima', 'M', '', 'Female', '2008-11-18', '', '', '', '', 'Single', '', '', 'Active', '', '2008-11-18', 'MA', 'ACHIEVERS', 'Acts'),
(108829, 'Santos', 'Marilyn', 'S', '', 'Female', '2008-11-18', '', '', '', '', 'Single', '', '', 'Active', '', '2008-11-19', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108910, 'Alcantara', 'Mary Ann', '', '', 'Female', '1980-03-16', '', '', '', '', 'Married', '', '', 'Active', '', '2009-01-13', 'SM', 'ACHIEVERS', 'Adrenaline'),
(108915, 'Sandoval', 'Milagros', '', '', 'Female', '1899-12-31', '', '', '', '', 'Single', '', '', 'Active', '', '2009-01-14', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108920, 'Manalad', 'Mercy', '', '', 'Female', '2009-01-09', '', '', '', '', 'Single', '', '', 'Active', '', '2009-01-15', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(108941, 'Santos', 'Rodan', 'M', '', 'Male', '2009-01-23', '', '', '', '', 'Single', '', '', 'Active', '', '2009-01-26', 'MA', 'ACHIEVERS', 'Amazing'),
(109036, 'Cruz', 'Puirficacion', '', '', 'Female', '2009-03-03', '', '', '', '', 'Married', '', '', 'Active', '', '2009-03-03', 'MA', 'ACHIEVERS', 'Amazing'),
(109078, 'Reyes', 'Mary Ann', '', '', 'Female', '2009-03-15', '', '', '', '', 'Single', '', '', 'Active', '', '2009-03-17', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109100, 'Angeles', 'Romeo', '', '', 'Male', '2009-03-31', '', '', '', '', 'Single', '', '', 'Active', '', '2009-04-03', 'MA', 'ACHIEVERS', 'Amazing'),
(109101, 'Sy', 'Myrna', '', '', 'Female', '2009-03-31', '', '', '', '', 'Single', '', '', 'Active', '', '2006-07-03', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109102, 'Santos', 'Deborah', '', '', 'Female', '2009-03-31', '', '', '', '', 'Single', '', '', 'Active', '', '2009-04-03', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109126, 'De Rueda', 'Ma. Rowena', '', '', 'Female', '2009-04-07', '', '', '', '', 'Single', '', '', 'Active', '', '2009-04-14', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109139, 'Villaluz', 'Maria', '', '', 'Female', '2009-04-19', '', '', '', '', 'Single', '', '', 'Active', '', '2009-04-21', 'MA', 'ACHIEVERS', 'Amazing'),
(109166, 'Herrera', 'Bernardo', '', '', 'Male', '2009-04-30', '', '', '', '', 'Single', '', '', 'Active', '', '2009-05-05', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109169, 'Dela Cruz', 'Grace', 'M', '', 'Female', '2009-04-30', '', '', '', '', 'Single', '', '', 'Active', '', '2009-05-06', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109170, 'Calonzo', 'Maria Luisa', '', '', 'Female', '2009-05-06', '', '', '', '', 'Single', '', '', 'Active', '', '2005-01-08', 'MA', 'ACHIEVERS', 'Amazing'),
(109184, 'Evangelista', 'Maria', '', '', 'Female', '2009-03-11', '', '', '', '', 'Single', '', '', 'Active', '', '2009-05-14', 'MA', 'ACHIEVERS', 'Amazing'),
(109192, 'Galvez', 'Elizabeth', '', '', 'Female', '2009-05-17', '', '', '', '', 'Single', '', '', 'Active', '', '2009-05-19', 'MA', 'ACHIEVERS', 'Amazing'),
(109218, 'Sabornido', 'Sophia', 'P', '', 'Female', '2009-05-29', '', '', '', '', 'Single', '', '', 'Active', '', '2009-06-03', 'MA', 'ACHIEVERS', 'Awesome'),
(109219, 'Panaligan', 'Cecilia', '', '', 'Female', '2009-05-29', '', '', '', '', 'Single', '', '', 'Active', '', '2009-06-03', 'MA', 'ACHIEVERS', 'Awesome'),
(109237, 'Reyes', 'Teodoro', '', '', 'Male', '2009-05-29', '', '', '', '', 'Single', '', '', 'Active', '', '2009-06-08', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109250, 'Barrun', 'Marilou', '', '', 'Female', '2009-06-14', '', '', '', '', 'Single', '', '', 'Active', '', '2004-03-24', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109267, 'Timbang', 'Juanito', '', '', 'Female', '2009-06-16', '', '', '', '', 'Single', '', '', 'Active', '', '2009-06-05', 'MA', 'ACHIEVERS', 'Amazing'),
(109273, 'Manuel', 'Herminia', 'R', '', 'Female', '2009-06-29', '', '', '', '', 'Single', '', '', 'Active', '', '2009-06-30', 'MA', 'ACHIEVERS', 'Amazing'),
(109278, 'Calonzo', 'Renato', '', '', 'Male', '2009-06-29', '', '', '', '', 'Single', '', '', 'Active', '', '2009-06-30', 'MA', 'ACHIEVERS', 'Amazing'),
(109326, 'Lazos', 'Mary Ann', '', '', 'Female', '2009-07-19', '', '', '', '', 'Single', '', '', 'Active', '', '2009-07-20', 'MA', 'ACHIEVERS', 'Adrenaline'),
(109354, 'Yamatsuda', 'Edlyn', 'G', '', 'Female', '2009-07-31', '', '', '', '', 'Single', '', '', 'Active', '', '2009-08-03', 'MA', 'ACHIEVERS', 'Adrenaline'),
(109356, 'Lacanlale', 'Mary Grace', '', '', 'Female', '2009-07-31', '', '', '', '', 'Single', '', '', 'Active', '', '2009-08-03', 'MA', 'ACHIEVERS', 'Amazing'),
(109370, 'Sablan', 'Jiji', 'M', '', 'Female', '2009-07-31', '', '', '', '', 'Single', '', '', 'Active', '', '2009-08-06', 'MA', 'ACHIEVERS', 'Acts'),
(109399, 'Gerona', 'Nelia', 'C', '', 'Female', '2009-08-04', '', '', '', '', 'Single', '', '', 'Active', '', '2006-04-12', 'MA', 'ACHIEVERS', 'Adrenaline'),
(109431, 'Mangalili', 'Angelus', '', '', 'Female', '2009-08-27', '', '', '', '', 'Single', '', '', 'Active', '', '2009-08-28', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109438, 'Quijano', 'Criselda', '', '', 'Female', '2009-09-02', '', '', '', '', 'Single', '', '', 'Active', '', '2009-09-02', 'MA', 'ACHIEVERS', 'Amazing'),
(109475, 'Esterban', 'Viobennyll', 'C', '', 'Male', '2009-09-14', '', '', '', '', 'Single', '', '', 'Active', '', '2009-09-16', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109477, 'Varilla', 'Eugene Dexter', '', '', 'Male', '2009-09-14', '', '', '', '', 'Single', '', '', 'Active', '', '2009-09-16', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109483, 'Gilo', 'Ma. Grazel', 'M', '', 'Female', '2009-09-20', '', '', '', '', 'Single', '', '', 'Active', '', '2009-09-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(109494, 'Quiambao', 'Karen', '', '', 'Female', '2009-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2009-10-01', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109533, 'Ang', 'Rowena', 'G', '', 'Female', '2009-10-10', '', '', '', '', 'Single', '', '', 'Active', '', '2009-10-21', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109538, 'Reyes', 'Ian', 'M', '', 'Male', '2009-10-18', '', '', '', '', 'Single', '', '', 'Active', '', '2009-10-22', 'MA', 'ACHIEVERS', 'Amazing'),
(109585, 'Marcos', 'Edna', '', '', 'Female', '2009-11-26', '', '', '', '', 'Single', '', '', 'Active', '', '2009-11-27', 'MA', 'ACHIEVERS', 'Amazing'),
(109628, 'Perez', 'Rosario', 'E', '', 'Female', '2009-12-29', '', '', '', '', 'Single', '', '', 'Active', '', '2010-01-05', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109657, 'Taguigui', 'Pilar', 'L', '', 'Female', '2010-01-17', '', '', '', '', 'Single', '', '', 'Active', '', '2010-01-18', 'SM', 'ACHIEVERS', 'Achievers - Direct'),
(109661, 'Disangcopan', 'Madrigal Jehan', '', '', 'Male', '2010-01-17', '', '', '', '', 'Single', '', '', 'Active', '', '2010-01-19', 'MA', 'ACHIEVERS', 'Awesome'),
(109671, 'Torres', 'Imelda', 'C', '', 'Female', '2010-01-25', '', '', '', '', 'Single', '', '', 'Active', '', '2010-01-25', 'MA', 'ACHIEVERS', 'Amazing'),
(109697, 'Aguas', 'Janet', 'C', '', 'Female', '2010-02-04', '', '', '', '', 'Single', '', '', 'Active', '', '2010-02-04', 'MA', 'ACHIEVERS', 'Amazing'),
(109719, 'Mercado', 'Marianita', 'C', '', 'Female', '2010-02-18', '', '', '', '', 'Single', '', '', 'Active', '', '2010-02-18', 'MA', 'ACHIEVERS', 'Amazing'),
(109787, 'Caberte', 'Mary Grace', '', '', 'Female', '2010-03-22', '', '', '', '', 'Single', '', '', 'Active', '', '2010-03-22', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(109918, 'Dabatos', 'Jovita', '', '', 'Female', '2010-05-18', '', '', '', '', 'Single', '', '', 'Active', '', '2010-05-18', 'SM', 'ACHIEVERS', 'Awesome'),
(109936, 'Robles', 'Erwin', '', '', 'Male', '2010-05-26', '', '', '', '', 'Single', '', '', 'Active', '', '2010-05-26', 'MA', 'ACHIEVERS', 'Amazing'),
(109950, 'Santos', 'Luzviminda', '', '', 'Female', '2010-06-01', '', '', '', '', 'Single', '', '', 'Active', '', '2010-06-01', 'MA', 'ACHIEVERS', 'Acts'),
(109970, 'Dequina', 'Richard', '', '', 'Male', '2010-06-16', '', '', '', '', 'Single', '', '', 'Active', '', '2010-06-16', 'MA', 'ACHIEVERS', 'Adrenaline'),
(109983, 'Villadarez', 'Evangeline', 'K.', '', 'Female', '2010-06-22', '', '', '', '', 'Single', '', '', 'Active', '', '2010-06-22', 'MA', 'ACHIEVERS', 'Amazing'),
(109993, 'Bulaclac', 'Nerisa', 'J.', '', 'Female', '2010-06-24', '', '', '', '', 'Single', '', '', 'Active', '', '2010-06-24', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110011, 'Martinez', 'Lolita', '', '', 'Female', '2010-07-01', '', '', '', '', 'Single', '', '', 'Active', '', '2010-07-01', 'MA', 'ACHIEVERS', 'Amazing'),
(110019, 'Matibag', 'Emerita', '', '', 'Female', '2010-07-05', '', '', '', '', 'Single', '', '', 'Active', '', '2010-07-05', 'MA', 'ACHIEVERS', 'Amazing'),
(110043, 'Bombase', 'Ma. Gertrudez', '', '', 'Female', '2010-07-22', '', '', '', '', 'Single', '', '', 'Active', '', '2010-07-22', 'MA', 'ACHIEVERS', 'Amazing'),
(110050, 'Robles', 'Herminia', '', '', 'Female', '2010-07-26', '', '', '', '', 'Single', '', '', 'Active', '', '2010-07-26', 'MA', 'ACHIEVERS', 'Amazing'),
(110055, 'Bautista', 'Ma. Rebecca', '', '', 'Female', '2010-07-27', '', '', '', '', 'Single', '', '', 'Active', '', '2010-07-27', 'SM', 'ACHIEVERS', 'Achievers - Direct'),
(110065, 'Francisco', 'Ma. Melody', '', '', 'Female', '2010-08-02', '', '', '', '', 'Single', '', '', 'Active', '', '2010-08-02', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110083, 'Gallego', 'Feliciana', '', '', 'Female', '2010-08-09', '', '', '', '', 'Single', '', '', 'Active', '', '2010-08-09', 'MA', 'ACHIEVERS', 'Awesome'),
(110089, 'Lazaro', 'Evangelina', '', '', 'Female', '2010-08-11', '', '', '', '', 'Single', '', '', 'Active', '', '2010-08-11', 'MA', 'ACHIEVERS', 'Awesome'),
(110111, 'Tan', 'Raymond Ryan', '', '', 'Male', '2010-08-23', '', '', '', '', 'Single', '', '', 'Active', '', '2010-08-23', 'MA', 'ACHIEVERS', 'Amazing'),
(110151, 'Chan', 'Elsa', 'A.', '', 'Female', '2010-09-13', '', '', '', '', 'Single', '', '', 'Active', '', '2010-09-13', 'MA', 'ACHIEVERS', 'Acts'),
(110156, 'Danga', 'Marlon', '', '', 'Male', '2010-09-14', '', '', '', '', 'Single', '', '', 'Active', '', '2010-09-14', 'MA', 'ACHIEVERS', 'Amazing'),
(110173, 'Brillantes', 'Levi', '', '', 'Male', '2010-09-27', '', '', '', '', 'Single', '', '', 'Active', '', '2010-09-27', 'MA', 'ACHIEVERS', 'Amazing'),
(110224, 'Torres', 'Alice', 'Q.', '', 'Female', '2010-10-19', '', '', '', '', 'Single', '', '', 'Active', '', '2010-10-19', 'MA', 'ACHIEVERS', 'Amazing'),
(110249, 'Dela Cruz', 'Ma. Luisa', '', '', 'Female', '2010-11-02', '', '', '', '', 'Single', '', '', 'Active', '', '2010-11-02', 'MA', 'ACHIEVERS', 'Awesome'),
(110297, 'Ordinario', 'Mary Grace', 'R.', '', 'Female', '2010-12-13', '', '', '', '', 'Single', '', '', 'Active', '', '2010-12-13', 'SM', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(110313, 'Urbano', 'Jocelyn', '', '', 'Female', '2010-12-16', '', '', '', '', 'Single', '', '', 'Active', '', '2010-12-16', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110320, 'Santiago', 'Diana Gwen', '', '', 'Female', '2010-12-28', '', '', '', '', 'Single', '', '', 'Active', '', '2010-12-28', 'MA', 'ACHIEVERS', 'Adrenaline'),
(110376, 'Catacutan', 'Gazelle', '', '', 'Female', '2011-01-21', '', '', '', '', 'Single', '', '', 'Active', '', '2011-01-21', 'MA', 'ACHIEVERS', 'Amazing'),
(110378, 'Arriola', 'Elvira', 'S.', '', 'Female', '2011-01-21', '', '', '', '', 'Single', '', '', 'Active', '', '2011-01-21', 'MA', 'ACHIEVERS', 'Amazing'),
(110381, 'Capisonda', 'Bernadette', '', '', 'Female', '2011-01-25', '', '', '', '', 'Single', '', '', 'Active', '', '2011-01-25', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(110456, 'San Pedro', 'Ramil', '', '', 'Male', '2011-02-18', '', '', '', '', 'Single', '', '', 'Active', '', '2011-02-18', 'MA', 'ACHIEVERS', 'Awesome'),
(110469, 'Peneyra', 'Nerisa', '', '', 'Female', '2011-02-21', '', '', '', '', 'Single', '', '', 'Active', '', '2011-02-21', 'MA', 'ACHIEVERS', 'Awesome'),
(110474, 'Nacional', 'Rogelio', '', '', 'Male', '2011-02-24', '', '', '', '', 'Single', '', '', 'Active', '', '2011-02-24', 'MA', 'ACHIEVERS', 'Amazing'),
(110480, 'Ongkeko', 'Amalia', 'V.', '', 'Female', '2011-02-24', '', '', '', '', 'Single', '', '', 'Active', '', '2011-02-24', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110517, 'Ramirez', 'Carolina', '', '', 'Female', '2011-03-08', '', '', '', '', 'Single', '', '', 'Active', '', '2011-03-08', 'MA', 'ACHIEVERS', 'Awesome'),
(110552, 'Carbo', 'Jimmel', '', '', 'Male', '2011-03-31', '', '', '', '', 'Single', '', '', 'Active', '', '2011-03-31', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110553, 'Clemente', 'Joy Angeline', '', '', 'Female', '2011-03-31', '', '', '', '', 'Single', '', '', 'Active', '', '2011-03-31', 'MA', 'ACHIEVERS', 'Acts'),
(110568, 'Peneyra', 'Baldwin', 'M.', '', 'Male', '2011-04-05', '', '', '', '', 'Single', '', '', 'Active', '', '2011-04-05', 'MA', 'ACHIEVERS', 'Awesome'),
(110570, 'Tan', 'Leticia', 'S.', '', 'Female', '2011-04-06', '', '', '', '', 'Single', '', '', 'Active', '', '2011-04-06', 'MA', 'ACHIEVERS', 'Acts'),
(110607, 'Santiago', 'Evelyn', '', '', 'Female', '2011-04-24', '', '', '', '', 'Single', '', '', 'Active', '', '2011-04-27', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110610, 'Valenzuela', 'Melody', 'P.', '', 'Female', '2011-04-28', '', '', '', '', 'Single', '', '', 'Active', '', '2011-04-28', 'MA', 'ACHIEVERS', 'Amazing'),
(110634, 'Manansala', 'Angelito', '', '', 'Female', '2011-05-05', '', '', '', '', 'Single', '', '', 'Active', '', '2011-05-05', 'MA', 'ACHIEVERS', 'Adrenaline'),
(110658, 'Garcia', 'Aldwin', 'L.', '', 'Male', '2011-05-19', '', '', '', '', 'Single', '', '', 'Active', '', '2011-05-19', 'MA', 'ACHIEVERS', 'Acts'),
(110663, 'Ramat', 'Merlito', '', '', 'Female', '2011-05-20', '', '', '', '', 'Single', '', '', 'Active', '', '2011-05-20', 'MA', 'ACHIEVERS', 'Amazing'),
(110673, 'Sevilla', 'Lucila', '', '', 'Female', '2011-05-31', '', '', '', '', 'Single', '', '', 'Active', '', '2011-05-31', 'MA', 'ACHIEVERS', 'Awesome'),
(110675, 'Juliano', 'Giselda', '', '', 'Female', '2011-05-31', '', '', '', '', 'Single', '', '', 'Active', '', '2011-05-31', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110687, 'Magsakay', 'Pamela', 'Z.', '', 'Female', '2011-06-01', '', '', '', '', 'Single', '', '', 'Active', '', '2011-06-01', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(110717, 'Flores', 'Lucita', '', '', 'Female', '2011-06-21', '', '', '', '', 'Single', '', '', 'Active', '', '2011-06-21', 'MA', 'ACHIEVERS', 'Awesome'),
(110741, 'Geronimo', 'Renier', '', '', 'Male', '2011-06-30', '', '', '', '', 'Single', '', '', 'Active', '', '2011-06-30', 'MA', 'ACHIEVERS', 'Adrenaline'),
(110742, 'Nabong', 'Gladys', 'T.', '', 'Female', '2011-06-30', '', '', '', '', 'Single', '', '', 'Active', '', '2011-06-30', 'MA', 'ACHIEVERS', 'Amazing'),
(110753, 'Rodriguez', 'Archie', '', '', 'Male', '2011-07-01', '', '', '', '', 'Single', '', '', 'Active', '', '2011-07-01', 'MA', 'ACHIEVERS', 'Amazing'),
(110759, 'Hilario', 'Corazon', '', '', 'Female', '2011-07-04', '', '', '', '', 'Single', '', '', 'Active', '', '2009-12-23', 'MA', 'ACHIEVERS', 'Amazing'),
(110775, 'Figueroa', 'Flordeliza', '', '', 'Female', '2011-07-11', '', '', '', '', 'Single', '', '', 'Active', '', '2011-07-11', 'MA', 'ACHIEVERS', 'Awesome'),
(110781, 'Alfaro', 'Wilma', '', '', 'Female', '2011-07-18', '', '', '', '', 'Single', '', '', 'Active', '', '2011-07-18', 'MA', 'ACHIEVERS', 'Acts'),
(110789, 'Gutierrez', 'John Robert', 'S.', '', 'Male', '2011-07-21', '', '', '', '', 'Single', '', '', 'Active', '', '2011-07-21', 'MA', 'ACHIEVERS', 'Awesome'),
(110791, 'Dela Cruz', 'Gerlie Ann', '', '', 'Female', '2011-07-21', '', '', '', '', 'Single', '', '', 'Active', '', '2011-07-21', 'MA', 'ACHIEVERS', 'Awesome'),
(110806, 'Santos', 'Charmaine', 'C.', '', 'Female', '2011-07-29', '', '', '', '', 'Single', '', '', 'Active', '', '2011-07-29', 'MA', 'ACHIEVERS', 'Amazing'),
(110824, 'Tan', 'Micah Blessy', '', '', 'Female', '2011-08-05', '', '', '', '', 'Single', '', '', 'Active', '', '2011-08-05', 'MA', 'ACHIEVERS', 'Acts'),
(110861, 'Flores', 'Rosita', '', '', 'Female', '2011-09-01', '', '', '', '', 'Single', '', '', 'Active', '', '2011-09-01', 'MA', 'ACHIEVERS', 'Awesome'),
(110883, 'Agra', 'Karen', '', '', 'Female', '2011-08-31', '', '', '', '', 'Single', '', '', 'Active', '', '2011-09-05', 'MA', 'ACHIEVERS', 'Amazing'),
(110908, 'Cruz', 'Manolito', '', '', 'Male', '2011-07-29', '', '', '', '', 'Single', '', '', 'Active', '', '2011-09-20', 'MA', 'ACHIEVERS', 'Acts'),
(110950, 'Rodriguez', 'Maricel', 'P', '', 'Female', '2011-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2011-10-06', 'MA', 'ACHIEVERS', 'Amazing'),
(110983, 'Vergara', 'Shirley', '', '', 'Female', '2011-10-16', '', '', '', '', 'Single', '', '', 'Active', '', '2011-10-24', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111006, 'Geronimo', 'Ederlyn Muriel', '', '', 'Female', '2011-10-28', '', '', '', '', 'Single', '', '', 'Active', '', '2011-11-03', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111034, 'Yambao', 'Rowena', '', '', 'Female', '2011-10-28', '', '', '', '', 'Single', '', '', 'Active', '', '2011-11-18', 'MA', 'ACHIEVERS', 'Acts'),
(111047, 'Buhain', 'Reynan', 'E', '', 'Male', '2011-11-27', '', '', '', '', 'Single', '', '', 'Active', '', '2011-12-01', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111078, 'Tuazon', 'Sheena', '', '', 'Male', '2011-12-11', '', '', '', '', 'Single', '', '', 'Active', '', '2011-12-14', 'MA', 'ACHIEVERS', 'Acts'),
(111113, 'Del Rosario', 'Rowena', 'A', '', 'Female', '2012-01-08', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-10', 'MA', 'ACHIEVERS', 'Acts'),
(111124, 'Arceo', 'Marianne', 'M', '', 'Female', '2012-01-08', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-11', 'MA', 'ACHIEVERS', 'Acts'),
(111126, 'Bolado', 'Zenaida', '', '', 'Female', '2012-01-08', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-13', 'MA', 'ACHIEVERS', 'Amazing'),
(111130, 'Arthur', 'Maria Teresa', '', '', 'Female', '2012-01-15', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-17', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(111139, 'Valdez', 'Rosella', '', '', 'Female', '2012-01-15', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-20', 'MA', 'ACHIEVERS', 'Awesome'),
(111143, 'Romasanta', 'Christine Lorraine', 'D', '', 'Female', '2012-01-19', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-20', 'MA', 'ACHIEVERS', 'Amazing'),
(111144, 'Idio', 'Jilly Lyneth', 'O', '', 'Female', '2012-01-18', '', '', '', '', 'Single', '', '', 'Active', '', '2012-01-20', 'MA', 'ACHIEVERS', 'Amazing'),
(111171, 'Garcia', 'Necita', '', '', 'Female', '2012-01-31', '', '', '', '', 'Single', '', '', 'Active', '', '2012-02-06', 'MA', 'ACHIEVERS', 'Awesome'),
(111188, 'Cristobal', 'Aiza', 'G', '', 'Female', '2012-02-05', '', '', '', '', 'Single', '', '', 'Active', '', '2012-02-10', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111191, 'Fajardo', 'Ian', '', '', 'Male', '2012-02-05', '', '', '', '', 'Single', '', '', 'Active', '', '2012-02-10', 'MA', 'ACHIEVERS', 'Amazing'),
(111201, 'Pascual', 'Michelle', '', '', 'Female', '2012-02-12', '', '', '', '', 'Single', '', '', 'Active', '', '2012-02-15', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111223, 'Gutierrez', 'Teresa', 'P', '', 'Female', '2012-02-27', '', '', '', '', 'Single', '', '', 'Active', '', '2012-03-01', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111226, 'Fajardo', 'Julito', 'S', '', 'Male', '2012-02-27', '', '', '', '', 'Single', '', '', 'Active', '', '2012-03-02', 'MA', 'ACHIEVERS', 'Acts'),
(111227, 'Munoz', 'George', 'P', '', 'Male', '2012-02-29', '', '', '', '', 'Single', '', '', 'Active', '', '2012-03-05', 'MA', 'ACHIEVERS', 'Awesome'),
(111260, 'Gonzales', 'Linela', '', '', 'Female', '2012-03-11', '', '', '', '', 'Single', '', '', 'Active', '', '2012-03-14', 'MA', 'ACHIEVERS', 'Awesome'),
(111268, 'Montes', 'Nimfa', '', '', 'Female', '2012-03-22', '', '', '', '', 'Single', '', '', 'Active', '', '2012-03-27', 'MA', 'ACHIEVERS', 'Awesome'),
(111291, 'Amurao', 'Aaron Jehrome', '', '', 'Male', '2012-04-10', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-10', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(111298, 'Bantog', 'Feliza', '', '', 'Female', '2012-03-30', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-10', 'MA', 'ACHIEVERS', 'Acts'),
(111304, 'Grospe', 'Maricel', '', '', 'Female', '2012-03-30', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-11', 'MA', 'ACHIEVERS', 'Amazing'),
(111308, 'Dumaguete', 'Janneth', 'R', '', 'Female', '2012-03-16', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-16', 'MA', 'ACHIEVERS', 'Amazing'),
(111311, 'Jimenez', 'Ronalyn', 'P', '', 'Female', '2012-04-11', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-17', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111317, 'Ramirez', 'Julie Ann', 'C', '', 'Female', '2012-03-27', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-19', 'MA', 'ACHIEVERS', 'Acts'),
(111353, 'Alcoriza', 'Mylene', 'T', '', 'Female', '2012-04-29', '', '', '', '', 'Single', '', '', 'Active', '', '2012-04-10', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111369, 'Dela Pena', 'Ma. Rosalinda', 'Dc', '', 'Female', '2012-05-07', '', '', '', '', 'Single', '', '', 'Active', '', '2012-05-25', 'MA', 'ACHIEVERS', 'Amazing'),
(111379, 'Sotta', 'Matilde', '', '', 'Female', '2012-04-29', '', '', '', '', 'Single', '', '', 'Active', '', '2012-06-01', 'SM', 'ACHIEVERS', 'Awesome'),
(111412, 'Javier', 'Brian', '', '', 'Male', '2012-05-31', '', '', '', '', 'Single', '', '', 'Active', '', '2012-06-19', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111423, 'Dela Cruz', 'Katherine', 'B', '', 'Female', '2012-06-24', '', '', '', '', 'Single', '', '', 'Active', '', '2012-06-28', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111434, 'Privaldos', 'Maricris', 'V', '', 'Female', '2012-06-26', '', '', '', '', 'Single', '', '', 'Active', '', '2012-07-03', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111435, 'Lopez', 'Armelinda', 'A.', '', 'Female', '2012-07-03', '', '', '', '', 'Single', '', '', 'Active', '', '2012-07-03', 'MA', 'ACHIEVERS', 'Amazing'),
(111463, 'Timbang', 'Milie', 'C', '', 'Female', '2012-05-31', '', '', '', '', 'Single', '', '', 'Active', '', '2012-07-12', 'MA', 'ACHIEVERS', 'Amazing'),
(111482, 'Russel', 'Gorgonia', '', '', 'Female', '2012-07-29', '', '', '', '', 'Single', '', '', 'Active', '', '2012-08-01', 'MA', 'ACHIEVERS', 'Awesome'),
(111487, 'Clemente', 'Icy Angeline', '', '', 'Female', '2012-07-31', '', '', '', '', 'Single', '', '', 'Active', '', '2012-08-03', 'MA', 'ACHIEVERS', 'Amazing'),
(111521, 'Alejandro', 'Ariel', 'C', '', 'Male', '2012-08-24', '', '', '', '', 'Single', '', '', 'Active', '', '2012-08-28', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111537, 'Cunan', 'Cherry', 'D', '', 'Female', '2012-08-22', '', '', '', '', 'Single', '', '', 'Active', '', '2012-09-04', 'MA', 'ACHIEVERS', 'Amazing'),
(111555, 'Martinez', 'Candy', 'P', '', 'Female', '2012-08-19', '', '', '', '', 'Single', '', '', 'Active', '', '2012-09-14', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111613, 'Manalaysay', 'Elizabeth', '', '', 'Female', '2012-10-23', '', '', '', '', 'Single', '', '', 'Active', '', '2012-10-29', 'MA', 'ACHIEVERS', 'Awesome'),
(111627, 'Bautista', 'Gerardo', 'J', '', 'Male', '2012-10-31', '', '', '', '', 'Single', '', '', 'Active', '', '2012-11-07', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111669, 'Dela Paz', 'Mark Joseph', 'F', '', 'Male', '2012-12-18', '', '', '', '', 'Single', '', '', 'Active', '', '2012-12-26', 'MA', 'ACHIEVERS', 'Amazing'),
(111672, 'Reyes', 'Edgar', '', '', 'Female', '2012-12-28', '', '', '', '', 'Single', '', '', 'Active', '', '2012-12-28', 'MA', 'ACHIEVERS', 'Amazing'),
(111688, 'Bautista', 'Daisy', '', '', 'Female', '2013-01-08', '', '', '', '', 'Single', '', '', 'Active', '', '2011-03-01', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111697, 'Sotta', 'Reynan', 'V', '', 'Male', '2013-01-13', '', '', '', '', 'Single', '', '', 'Active', '', '2012-06-01', 'MA', 'ACHIEVERS', 'Awesome'),
(111711, 'Ferrer', 'Norielia', '', '', 'Female', '2013-01-10', '', '', '', '', 'Single', '', '', 'Active', '', '2013-01-29', 'MA', 'ACHIEVERS', 'Awesome'),
(111750, 'Salmos', 'Jaypee', '', '', 'Male', '2013-02-07', '', '', '', '', 'Single', '', '', 'Active', '', '2013-02-13', 'MA', 'ACHIEVERS', 'Awesome'),
(111756, 'Carbo', 'Melissa', 'M', '', 'Female', '2013-02-15', '', '', '', '', 'Single', '', '', 'Active', '', '2013-02-18', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111770, 'Torres', 'Liezl', 'R', '', 'Female', '2013-02-26', '', '', '', '', 'Single', '', '', 'Active', '', '2013-02-27', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111773, 'Alvaro', 'Michael', '', '', 'Male', '2013-02-24', '', '', '', '', 'Single', '', '', 'Active', '', '2008-04-24', 'MA', 'ACHIEVERS', 'Awesome'),
(111797, 'Mallari', 'Noelito', 'I', '', 'Male', '2013-03-11', '', '', '', '', 'Single', '', '', 'Active', '', '2013-03-15', 'MA', 'ACHIEVERS', 'Awesome'),
(111804, 'Manlapig', 'Ma. Victoria', '', '', 'Female', '2013-03-21', '', '', '', '', 'Single', '', '', 'Active', '', '2013-03-25', 'MA', 'ACHIEVERS', 'Awesome'),
(111806, 'Reyes', 'Ciela', 'N', '', 'Female', '2013-03-20', '', '', '', '', 'Single', '', '', 'Active', '', '2013-03-25', 'MA', 'ACHIEVERS', 'Acts'),
(111811, 'Mercado', 'Samantha Elaine', '', '', 'Female', '2013-03-20', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-01', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111844, 'Cruz', 'Jhoane', '', '', 'Female', '2013-04-14', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-16', 'MA', 'ACHIEVERS', 'Awesome'),
(111853, 'Benson', 'Katherine Louise', 'C.', '', 'Female', '2013-04-15', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-18', 'MA', 'ACHIEVERS', 'Amazing'),
(111863, 'Santiago', 'Rhodora', '', '', 'Female', '2013-04-22', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-24', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111864, 'Danga', 'Demy', '', '', 'Male', '2013-02-22', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-24', 'MA', 'ACHIEVERS', 'Amazing'),
(111867, 'Ocampo', 'Lolita', '', '', 'Female', '2013-04-24', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-24', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111870, 'Balauag', 'Candelaria', 'D', '', 'Female', '2013-04-25', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-26', 'MA', 'ACHIEVERS', 'Awesome'),
(111873, 'Alberto', 'Rica', 'C', '', 'Female', '2013-04-28', '', '', '', '', 'Single', '', '', 'Active', '', '2013-04-29', 'MA', 'ACHIEVERS', 'Awesome'),
(111896, 'Canto', 'Eulogia', '', '', 'Female', '2013-05-09', '', '', '', '', 'Single', '', '', 'Active', '', '2013-05-10', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111905, 'De Leon', 'Osmond', 'L', '', 'Male', '2013-05-21', '', '', '', '', 'Single', '', '', 'Active', '', '2013-05-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(111906, 'Maniego', 'Jenarose', '', '', 'Female', '2013-07-07', '', '', '', '', 'Single', '', '', 'Active', '', '2013-05-23', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111907, 'Maniego', 'Paulo Edwin', '', '', 'Male', '2013-07-07', '', '', '', '', 'Single', '', '', 'Active', '', '2013-05-24', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(111915, 'Santos', 'Helen', 'C', '', 'Male', '2013-05-27', '', '', '', '', 'Single', '', '', 'Active', '', '2013-05-29', 'MA', 'ACHIEVERS', 'Acts'),
(111943, 'Benedictos', 'Aiza', '', '', 'Female', '2013-06-17', '', '', '', '', 'Single', '', '', 'Active', '', '2013-06-18', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111954, 'Santiago', 'Louie', '', '', 'Male', '2013-06-24', '', '', '', '', 'Single', '', '', 'Active', '', '2013-06-26', 'MA', 'ACHIEVERS', 'Adrenaline'),
(111969, 'Vinoya', 'Dorothy May', '', '', 'Female', '2013-07-05', '', '', '', '', 'Single', '', '', 'Active', '', '2008-04-01', 'MA', 'ACHIEVERS', 'Awesome'),
(111973, 'Cogama', 'Dorotea', '', '', 'Female', '2013-07-08', '', '', '', '', 'Single', '', '', 'Active', '', '2013-07-15', 'MA', 'ACHIEVERS', 'Awesome'),
(111987, 'Soto', 'Marina', 'O', '', 'Female', '2013-06-28', '', '', '', '', 'Single', '', '', 'Active', '', '2005-10-03', 'MA', 'ACHIEVERS', 'Amazing'),
(112007, 'Heredia', 'Alfredo', '', '', 'Male', '2013-07-31', '', '', '', '', 'Single', '', '', 'Active', '', '2013-08-07', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112023, 'Alfonso', 'Perla', 'B', '', 'Female', '2013-08-14', '', '', '', '', 'Single', '', '', 'Active', '', '2013-08-23', 'MA', 'ACHIEVERS', 'Amazing'),
(112037, 'Almario', 'Sandra', '', '', 'Female', '2013-08-28', '', '', '', '', 'Single', '', '', 'Active', '', '2013-09-03', 'MA', 'ACHIEVERS', 'Awesome'),
(112047, 'Meneses', 'Carmen', '', '', 'Female', '2013-08-30', '', '', '', '', 'Single', '', '', 'Active', '', '2013-09-05', 'MA', 'ACHIEVERS', 'Awesome'),
(112057, 'Rodriguez', 'Charlene', '', '', 'Female', '2013-08-30', '', '', '', '', 'Single', '', '', 'Active', '', '2013-09-09', 'MA', 'ACHIEVERS', 'Amazing'),
(112076, 'Manzano', 'Elieta', 'B', '', 'Female', '2013-09-20', '', '', '', '', 'Single', '', '', 'Active', '', '2013-09-25', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112113, 'Parinas', 'Agustin', 'C', '', 'Male', '2013-10-14', '', '', '', '', 'Single', '', '', 'Active', '', '2006-07-03', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112116, 'Lazaro', 'Rogelyn', '', '', 'Female', '2013-10-08', '', '', '', '', 'Single', '', '', 'Active', '', '2013-10-18', 'MA', 'ACHIEVERS', 'Awesome'),
(112117, 'Avendano', 'Fe', '', '', 'Female', '2013-10-16', '', '', '', '', 'Single', '', '', 'Active', '', '2013-10-18', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112133, 'Ramirez', 'Agrifina', 'F', '', 'Female', '2013-10-25', '', '', '', '', 'Single', '', '', 'Active', '', '2013-10-30', 'MA', 'ACHIEVERS', 'Awesome'),
(112140, 'Alsaihati', 'Alice', 'A', '', 'Female', '2013-10-27', '', '', '', '', 'Single', '', '', 'Active', '', '2013-11-04', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112161, 'Nanol', 'Jean Mae', 'Dy', '', 'Female', '2013-11-19', '', '', '', '', 'Single', '', '', 'Active', '', '2013-11-20', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112185, 'Valencia', 'Jonathan', '', '', 'Male', '2013-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2013-12-10', 'MA', 'ACHIEVERS', 'Amazing'),
(112188, 'Watanabe', 'Luzviminda', 'D', '', 'Female', '2013-11-26', '', '', '', '', 'Single', '', '', 'Active', '', '2013-12-11', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112194, 'Taberdo', 'Hermie', '', '', 'Female', '2013-12-22', '', '', '', '', 'Single', '', '', 'Active', '', '2013-12-26', 'MA', 'ACHIEVERS', 'Awesome'),
(112212, 'Miranda', 'Charmaine', 'V', '', 'Female', '2014-01-02', '', '', '', '', 'Single', '', '', 'Active', '', '2014-01-10', 'MA', 'ACHIEVERS', 'Awesome'),
(112227, 'Santos', 'Violeta', 'C', '', 'Female', '2014-01-13', '', '', '', '', 'Single', '', '', 'Active', '', '2014-01-15', 'MA', 'ACHIEVERS', 'Awesome'),
(112230, 'Yoneda', 'Chellimar', '', '', 'Female', '2014-01-17', '', '', '', '', 'Single', '', '', 'Active', '', '2014-01-20', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112248, 'Nieves', 'Reycel Marie', '', '', 'Female', '2014-01-22', '', '', '', '', 'Single', '', '', 'Active', '', '2014-01-27', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112252, 'Zartiga', 'Josie Ann', 'A', '', 'Female', '2014-01-27', '', '', '', '', 'Single', '', '', 'Active', '', '2014-01-29', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112266, 'Tacandong', 'Karen', 'M', '', 'Female', '2014-01-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-02-07', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112283, 'Gabriel', 'Janice', 'T', '', 'Female', '2014-01-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-02-10', 'MA', 'ACHIEVERS', 'Amazing'),
(112304, 'De Leon', 'Daisy', 'P', '', 'Female', '2014-02-09', '', '', '', '', 'Single', '', '', 'Active', '', '2014-02-13', 'MA', 'ACHIEVERS', 'Awesome'),
(112312, 'Jimenez', 'Archie', 'L', '', 'Male', '2014-02-12', '', '', '', '', 'Single', '', '', 'Active', '', '2014-02-14', 'MA', 'ACHIEVERS', 'Awesome'),
(112314, 'Samson', 'Martie', 'G', '', 'Male', '2014-02-07', '', '', '', '', 'Single', '', '', 'Active', '', '2014-02-14', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112340, 'Mananghaya', 'Sarah', '', '', 'Female', '2014-02-14', '', '', '', '', 'Single', '', '', 'Active', '', '2014-02-26', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112348, 'Chico', 'Emeriza', '', '', 'Female', '2014-02-28', '', '', '', '', 'Single', '', '', 'Active', '', '2014-03-04', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112352, 'Arnejo', 'Adelfa', 'C', '', 'Female', '2014-02-28', '', '', '', '', 'Single', '', '', 'Active', '', '2014-03-07', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112360, 'Mariano', 'Marlyn', 'A', '', 'Female', '2014-02-28', '', '', '', '', 'Single', '', '', 'Active', '', '2014-03-07', 'MA', 'ACHIEVERS', 'Amazing'),
(112387, 'Francisco', 'Rosanne', '', '', 'Female', '2014-03-23', '', '', '', '', 'Single', '', '', 'Active', '', '2014-03-25', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112401, 'Posillo', 'Marielle', '', '', 'Female', '2014-03-27', '', '', '', '', 'Single', '', '', 'Active', '', '2014-03-28', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112425, 'Espinola', 'Angelita', '', '', 'Female', '2014-03-31', '', '', '', '', 'Single', '', '', 'Active', '', '2014-04-04', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112462, 'Agustin', 'Angie', '', '', 'Female', '2014-04-23', '', '', '', '', 'Single', '', '', 'Active', '', '2014-05-07', 'MA', 'ACHIEVERS', 'Amazing'),
(112482, 'Varilla', 'Kristel', '', '', 'Female', '2014-04-25', '', '', '', '', 'Single', '', '', 'Active', '', '2014-05-12', 'MA', 'ACHIEVERS', 'Awesome'),
(112498, 'Ramos', 'Reymundo', '', '', 'Male', '2014-05-16', '', '', '', '', 'Single', '', '', 'Active', '', '2014-05-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112510, 'King', 'Isabelita', '', '', 'Male', '2014-05-20', '', '', '', '', 'Single', '', '', 'Active', '', '2014-05-30', 'MA', 'ACHIEVERS', 'Awesome'),
(112516, 'Tabalbag', 'Gil', 'D', '', 'Male', '2014-02-10', '', '', '', '', 'Single', '', '', 'Active', '', '2014-06-03', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112533, 'Acobo', 'Shiela', '', '', 'Female', '2014-05-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-06-10', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112579, 'Calderon', 'Ronalyn', '', '', 'Female', '2014-06-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-07-10', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112595, 'Villafuerte', 'Maricel', 'S', '', 'Female', '2014-06-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-07-14', 'MA', 'ACHIEVERS', 'Awesome'),
(112599, 'Mercado', 'Irene', '', '', 'Female', '2014-07-14', '', '', '', '', 'Single', '', '', 'Active', '', '2014-07-21', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112606, 'Singson', 'Michael', '', '', 'Male', '2014-07-13', '', '', '', '', 'Single', '', '', 'Active', '', '2014-07-24', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112607, 'Singson', 'Noviemae', '', '', 'Female', '2014-07-13', '', '', '', '', 'Single', '', '', 'Active', '', '2014-07-24', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112636, 'Gabriel', 'Gina', '', '', 'Female', '2014-08-13', '', '', '', '', 'Single', '', '', 'Active', '', '2014-08-14', 'MA', 'ACHIEVERS', 'Awesome'),
(112646, 'Crisostomo', 'Jonas Arnel', 'Dc', '', 'Male', '2014-07-25', '', '', '', '', 'Single', '', '', 'Active', '', '2014-09-02', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112658, 'Sison', 'Elena', '', '', 'Female', '2014-08-31', '', '', '', '', 'Single', '', '', 'Active', '', '2014-09-08', 'MA', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112661, 'Castro', 'Andrea', 'E', '', 'Female', '2014-08-31', '', '', '', '', 'Single', '', '', 'Active', '', '2014-09-09', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112689, 'De Castro', 'Lucilo', '', '', 'Male', '2014-09-14', '', '', '', '', 'Single', '', '', 'Active', '', '2014-09-30', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112706, 'Crecencio', 'Carolina', '', '', 'Female', '2014-08-31', '', '', '', '', 'Single', '', '', 'Active', '', '2014-10-09', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112710, 'Formento, Jr.', 'Rodolfo', '', '', 'Male', '2014-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2004-04-05', 'MA', 'ACHIEVERS', 'Awesome'),
(112715, 'Fajardo', 'Cherry Rose', 'B', '', 'Female', '2014-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-10-10', 'MA', 'ACHIEVERS', 'Amazing'),
(112716, 'Banaban', 'Alona', '', '', 'Female', '2014-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-10-10', 'MA', 'ACHIEVERS', 'Awesome'),
(112727, 'Mabini', 'Karen', '', '', 'Female', '2014-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2014-10-13', 'MA', 'ACHIEVERS', 'Achievers - Direct'),
(112763, 'Dawang', 'Regina', '', '', 'Female', '1899-12-31', '', '', '', '', 'Single', '', '', 'Active', '', '2014-11-10', 'MA', 'ACHIEVERS', 'Awesome'),
(112770, 'Rodriguez', 'Alma', 'R', '', 'Female', '2014-10-31', '', '', '', '', 'Single', '', '', 'Active', '', '2014-11-12', 'MA', 'ACHIEVERS', 'Awesome'),
(112784, 'Angeles', 'Lenita', '', '', 'Female', '2014-11-13', '', '', '', '', 'Single', '', '', 'Active', '', '2014-11-20', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112794, 'Felipe', 'Maria Vilma', 'S', '', 'Female', '2014-11-25', '', '', '', '', 'Single', '', '', 'Active', '', '2014-11-27', 'MA', 'ACHIEVERS', 'Adrenaline'),
(112857, 'Vice President', 'Sales', '', '', 'Male', '2015-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2015-01-01', 'VPS', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112858, 'Director', 'Sales', '', '', 'Male', '2015-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2015-01-01', 'DS', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112859, 'Presidents', 'Direct', '', '', 'Male', '2015-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2015-01-01', 'PD', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112860, 'Psmi', '', '', '', 'Male', '2015-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2015-01-01', 'PSMI', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112861, 'Victoria', 'Marie Sheane', 'Del Rosario', '', 'Male', '2015-10-29', '', '', '', '', 'Single', '', '', 'Active', '', '2015-10-29', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112862, 'Victorio', 'Amos', '', '', 'Male', '2016-02-01', '', '', '', '', 'Single', '', '', 'Active', '', '2016-02-02', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112863, 'Remax Premier', 'Real Estate Manila Inc.', '', '', 'Male', '2016-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2016-01-01', 'Remax', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112871, 'Rodriguez', 'Wendy', '', '', 'Female', '2017-06-20', '', '', '', '', 'Married', '', '', 'Active', '', '2017-06-20', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112874, 'Fonbuena', 'Pacifico', '', '', 'Male', '2017-07-24', '', '', '', '', 'Single', '', '', 'Active', '', '2017-07-26', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112875, 'Borlongan', 'Violeta', '', '', 'Female', '2017-07-31', '', '', '', '', 'Married', '', '', 'Active', '', '2017-08-01', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112880, 'Francisco', 'Angelito', '', '', 'Male', '2017-09-23', '', '', '', '', 'Single', '', '', 'Active', '', '2017-09-23', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112881, 'Gonzales', 'Verlyn', '', '', 'Female', '1992-11-20', '', '', '', '', 'Single', '', '', 'Active', '', '2017-06-28', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112883, 'Luces', 'Rei', '', '', 'Male', '2017-09-29', '', '', '', '', 'Single', '', '', 'Active', '', '2017-09-29', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112886, 'Santiago', 'Rhoda', 'B', '', 'Female', '2017-11-02', '', '', '', '', 'Single', '', '', 'Active', '', '2017-11-02', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112887, 'Cruz', 'Janine', 'B.', '', 'Female', '1917-11-03', '', '', '', '', 'Single', '', '', 'Active', '', '2017-11-03', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral');
INSERT INTO `t_agents` (`c_code`, `c_last_name`, `c_first_name`, `c_middle_initial`, `c_nick_name`, `c_sex`, `c_birthdate`, `c_birth_place`, `c_address_ln1`, `c_address_ln2`, `c_tel_no`, `c_civil_status`, `c_sss_no`, `c_tin`, `c_status`, `c_recruited_by`, `c_hire_date`, `c_position`, `c_network`, `c_division`) VALUES
(112889, 'Cajucom', 'Marygrace', '', '', 'Female', '1976-07-07', '', '', '', '', 'Married', '', '', 'Active', '', '2000-02-10', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112890, 'Dela Cruz', 'Ethelmae', '', 'Ethel', 'Female', '1979-07-12', '', '', '', '', 'Single', '33-4813223-9', '300-098-813-000', 'Active', '', '2018-01-05', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112892, 'Benedictos', 'Michael', '', '', 'Male', '1971-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2018-01-24', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112893, 'Delos Santos', 'Merlyn', 'Pangan', 'Len', 'Female', '1978-07-10', '', '', '', '', 'Single', '33-4133078-2', '219-406-636    ', 'Active', '', '2018-02-06', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112894, 'Rodil', 'Celso', '', '', 'Male', '1972-09-15', '', '', '', '', 'Single', '33-6315912-9', '916-885-715-000', 'Active', '', '2018-02-20', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112895, 'Palencia', 'Nilo', '', '', 'Male', '1960-01-22', '', '', '', '', 'Married', '03-9098049-0', '115-834-946-000', 'Active', '', '2018-02-26', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112897, 'San Pedro', 'Rosalyn', 'Bulaong', '', 'Female', '1975-07-26', '', '', '', '', 'Married', '33-2791649-2', '903-705-238-000', 'Active', '', '2018-03-02', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112898, 'De Jesus', 'Victor', '', '', 'Male', '1972-07-28', '', '', '', '', 'Married', '33-2603621-8', '226-715-145-000', 'Active', '', '2018-03-08', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112900, 'Figueroa', 'Eliza', '', '', 'Female', '1980-11-10', '', '', '', '', 'Married', '33-5884885-6', '234-599-268-000', 'Active', '', '2018-03-13', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112901, 'Saad', 'Gerry', '', '', 'Male', '1964-02-05', '', '', '', '', 'Single', '03-8768316-6', '911-503-277-000', 'Active', '', '2018-04-18', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112904, 'Castillo', 'May Kathyrine', '', '', 'Female', '1993-01-26', '', '', '', '', 'Single', '34-3997336-5', '315-397-294-000', 'Active', '', '2018-06-04', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112905, 'Borlongan', 'Violeta', '', '', 'Female', '2018-06-13', '', '', '', '', 'Single', '', '', 'Active', '', '2018-06-13', 'SM', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112906, 'Posillo', 'Ma. Lourdes', '', '', 'Female', '2018-06-20', '', '', '', '', 'Single', '', '', 'Active', '', '2018-06-20', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112907, 'Cruz', 'Teresita', 'G', '', 'Female', '2018-06-20', '', '', '', '', 'Single', '', '', 'Active', '', '2018-06-20', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112909, 'Santos', 'Zandro Lemuel', '', '', 'Male', '2018-07-23', '', '', '', '', 'Single', '', '', 'Active', '', '2018-07-23', 'DS', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112910, 'Javier', 'Sheila May', '', '', 'Female', '2018-07-27', '', '', '', '', 'Single', '', '', 'Active', '', '2018-07-27', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112912, 'Concepcion', 'Danilo', '', '', 'Male', '2018-08-02', '', '', '', '', 'Single', '', '', 'Active', '', '2018-08-02', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112913, 'Cruz Iii', 'Eusebio', '', '', 'Male', '2018-08-07', '', '', '', '', 'Single', '', '', 'Active', '', '2018-08-07', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112914, 'Sanchez', 'Liezl', 'Sg', 'Matet', 'Female', '1984-12-02', '', '', '', '', 'Single', '', '', 'Active', '', '2018-08-14', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112915, 'Reyes', 'Ma. Cecilia', 'B.', '', 'Female', '2018-09-12', '', '', '', '', 'Single', '', '', 'Active', '', '2018-09-12', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112917, 'Geronimo Jr', 'Mariano', '', '', 'Male', '2018-09-24', '', '', '', '', 'Single', '', '', 'Active', '', '2018-09-25', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112919, 'Caballero', 'Mary Jean', '', '', 'Female', '1977-10-05', '', '', '', '', 'Single', '33-2587940-5', '480-493-451-000', 'Active', '', '2018-09-28', 'SM', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112920, 'Caballero', 'Marydhelle', '', '', 'Female', '2018-08-29', '', '', '', '', 'Single', '', '', 'Active', '', '2018-10-01', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112921, 'Linaban', 'Jemelyn Kris', '', '', 'Female', '2018-10-01', '', '', '', '', 'Single', '', '', 'Active', '', '2018-10-01', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112922, 'Pabustan', 'Sharon', '', '', 'Female', '2018-10-01', '', '', '', '', 'Single', '', '', 'Active', '', '2004-05-24', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112923, 'Lopez', 'Precious Veronica', '', '', 'Female', '2018-10-22', '', '', '', '', 'Single', '', '', 'Active', '', '2018-10-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112924, 'Simbulan', 'Daisylyn', '', '', 'Female', '2018-10-22', '', '', '', '', 'Single', '', '', 'Active', '', '2018-10-22', 'SM', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112925, 'Dela Cruz', 'Jadeth', 'B', '', 'Female', '2018-11-07', '', '', '', '', 'Single', '', '', 'Active', '', '2018-11-07', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112928, 'Aguilar', 'Joy', 'P', '', 'Female', '2018-12-20', '', '', '', '', 'Single', '', '', 'Active', '', '2018-12-20', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112930, 'De Guzman', 'Richie', '', '', 'Female', '2019-01-24', '', '', '', '', 'Single', '', '', 'Active', '', '2019-01-24', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112931, 'Malta', 'Benjamin', '', '', 'Male', '2019-02-19', '', '', '', '', 'Single', '', '', 'Active', '', '2019-02-19', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112932, 'Santos', 'Rommel', 'T', '', 'Female', '2019-03-13', '', '', '', '', 'Single', '', '', 'Active', '', '2019-03-13', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112933, 'Nuque', 'Marlon', '', '', 'Male', '2019-03-13', '', '', '', '', 'Single', '', '', 'Active', '', '2019-03-13', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112934, 'Santos', 'Santiago', '', '', 'Male', '1966-12-26', '', '`', '', '', 'Single', '', '', 'Active', '', '2019-03-14', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112935, 'Lopez', 'Liezl', 'B', '', 'Female', '2019-03-28', '', '', '', '', 'Single', '', '', 'Active', '', '2019-03-28', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112936, 'Salcedo', 'Ronnie', '', '', 'Male', '2019-04-01', '', '', '', '', 'Single', '', '', 'Active', '', '2019-04-01', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112937, 'Biong', 'Aileen', 'C', '', 'Female', '2019-04-01', '', '', '', '', 'Single', '', '', 'Active', '', '2019-04-01', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112938, 'Dabon', 'Ada', 'M', '', 'Female', '2019-04-01', '', '', '', '', 'Single', '', '', 'Active', '', '2019-04-01', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112939, 'Atencio', 'Michael', 'C', '', 'Male', '2019-04-12', '', '', '', '', 'Single', '', '', 'Active', '', '2019-04-12', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112940, 'Roque', 'Raquel', 'Pascual', '', 'Female', '2019-05-07', '', '', '', '', 'Single', '', '', 'Active', '', '2019-05-08', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112941, 'Santiago', 'Jomai', '', '', 'Male', '2019-05-17', '', '', '', '', 'Single', '', '', 'Active', '', '2019-05-17', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112942, 'Salvador', 'Allan Christian', '', '', 'Male', '2019-05-30', '', '', '', '', 'Single', '', '', 'Active', '', '2019-05-30', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112943, 'Faustino', 'Teodulo', '', '', 'Male', '2019-06-07', '', '', '', '', 'Single', '', '', 'Active', '', '2019-06-07', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112944, 'Capule', 'Rose Anne', '', '', 'Female', '2019-06-07', '', '', '', '', 'Single', '', '', 'Active', '', '2019-06-07', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112945, 'Ramos', 'Reymundo', '', '', 'Male', '1971-01-01', '', '', '', '', 'Single', '', '', 'Active', '', '2019-05-01', 'SM', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112947, 'Borja', 'Dennis', '', '', 'Male', '2019-06-28', '', '', '', '', 'Single', '', '', 'Active', '', '2019-06-28', 'EMP', 'VP/DIRECTOR OF SALES', 'Employee Referral'),
(112949, 'Palomares', 'Julie', 'V.', '', 'Female', '2019-07-05', '', '', '', '', 'Single', '', '', 'Active', '', '2019-07-05', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112950, 'Amurao', 'Keemy Ann', '', '', 'Female', '2019-07-09', '', '', '', '', 'Single', '', '', 'Active', '', '2019-07-09', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112951, 'Caparas', 'Elenita', '', '', 'Female', '2019-07-09', '', '', '', '', 'Single', '', '', 'Active', '', '2019-07-09', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112952, 'Reyna', 'Evelyn', '', '', 'Female', '2019-07-10', '', '', '', '', 'Single', '', '', 'Active', '', '2019-07-11', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112953, 'Rivera, Jr.', 'Rafael', 'F', '', 'Male', '2019-07-17', '', '', '', '', 'Single', '', '', 'Active', '', '2019-07-17', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112954, 'Diamante', 'Evangeline', 'P', '', 'Female', '2019-08-28', '', '', '', '', 'Single', '', '', 'Active', '', '2019-08-29', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112955, 'Salvador', 'Michelle', 'P', '', 'Female', '2019-09-03', '', '', '', '', 'Single', '', '', 'Active', '', '2019-09-06', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112957, 'Alonzo', 'Imelda', 'D', '', 'Female', '2019-09-19', '', '', '', '', 'Single', '', '', 'Active', '', '2019-09-19', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112959, 'Casia', 'Ma. Elena', '', '', 'Female', '2019-10-29', '', '', '', '', 'Single', '', '', 'Active', '', '2019-10-29', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112960, 'Francisco', 'Menchie', 'M', '', 'Female', '2019-10-30', '', '', '', '', 'Single', '', '', 'Active', '', '2019-10-31', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112961, 'Calderon', 'Corazon', 'M', '', 'Female', '2019-11-04', '', '', '', '', 'Single', '', '', 'Active', '', '2019-11-04', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112962, 'Reyes', 'Meijie Moore', 'M', '', 'Female', '2019-11-04', '', '', '', '', 'Single', '', '', 'Active', '', '2019-11-04', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112963, 'Maranan', 'Roberto', 'Y', '', 'Male', '2019-11-14', '', '', '', '', 'Single', '', '', 'Active', '', '2019-11-14', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112964, 'Gonzales', 'Elizabeth', '', '', 'Female', '2019-11-29', '', '', '', '', 'Single', '', '', 'Active', '', '2019-11-29', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112966, 'Bernal', 'Diana', '', '', 'Female', '2019-12-17', '', '', '', '', 'Single', '', '', 'Active', '', '2019-12-17', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112967, 'Carlos', 'Leslie', 'A', '', 'Male', '2020-01-21', '', '', '', '', 'Single', '', '', 'Active', '', '2020-01-21', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112968, 'Guirhem', 'Amor', '', '', 'Female', '2020-02-05', '', '', '', '', 'Single', '', '', 'Active', '', '2020-02-11', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112969, 'Ramos', 'Paulo', 'E.', '', 'Male', '2020-06-08', '', '', '', '', 'Single', '', '', 'Active', '', '2020-06-08', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112970, 'Malto', 'Nelce', 'N', '', 'Female', '2020-06-16', '', '', '', '', 'Single', '', '', 'Active', '', '2020-06-16', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112971, 'Reyes', 'Eliza', '', '', 'Female', '2020-07-13', '', '', '', '', 'Single', '', '', 'Active', '', '2020-07-13', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112972, 'Diaz', 'B.', 'Beverly', '', 'Female', '2020-10-13', '', '', '', '', 'Single', '', '', 'Active', '', '2020-10-13', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112973, 'Gran', 'Patricia May', '', '', 'Female', '2020-10-21', '', '', '', '', 'Single', '', '', 'Active', '', '2020-10-23', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112974, 'Yamat', 'Remedios', '', '', 'Female', '2020-11-18', '', '', '', '', 'Single', '', '', 'Active', '', '2020-11-18', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112975, 'Yutuc', 'Eden', '', '', 'Male', '2020-12-02', '', '', '', '', 'Single', '', '', 'Active', '', '2020-12-02', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112976, 'Caluag', 'Careen Ivy', '', '', 'Male', '1990-02-08', '', '', '', '', 'Single', '', '', 'Active', '', '2021-01-06', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112977, 'Fulgencio', 'Jennielyn', '', '', 'Female', '2021-01-08', '', '', '', '', 'Single', '', '', 'Active', '', '2021-01-08', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112978, 'Tan', 'Katrina Keith', '', '', 'Female', '2021-01-13', '', '', '', '', 'Single', '', '', 'Active', '', '2021-01-13', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112982, 'Mendoza', 'Ryan Karlo', '', '', 'Male', '2021-04-12', '', '', '', '', 'Single', '', '', 'Active', '', '2021-04-12', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112986, 'Damo', 'Joycelyn', '', '', 'Female', '2021-06-10', '', '', '', '', 'Single', '', '', 'Active', '', '2008-02-05', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112987, 'Sison', 'Ma. Elena', '', '', 'Female', '2021-06-28', '', '', '', '', 'Single', '', '', 'Active', '', '2021-06-28', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112988, 'Caballero', 'Ferdinand', 'D', '', 'Male', '2021-07-28', '', '', '', '', 'Single', '', '', 'Active', '', '2021-07-28', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112990, 'Gregorio', 'Bernadette', '', '', 'Female', '2021-10-29', '', '', '', '', 'Single', '', '', 'Active', '', '2021-10-29', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112991, 'Reyes', 'Renante', 'D', '', 'Male', '2021-12-01', '', '', '', '', 'Single', '', '', 'Active', '', '2021-12-01', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112993, 'Tanghal', 'Rosallie', '', '', 'Female', '2022-04-01', '', '', '', '', 'Single', '', '', 'Active', '', '2022-04-01', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112994, 'Malbataan', 'Sta. Anna', 'C', '', 'Male', '2022-04-25', '', '', '', '', 'Single', '', '', 'Active', '', '2022-04-25', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112997, 'Del Rosario', 'Ria', '', 'Iyah', 'Female', '1988-12-08', '', '0029 kalye onse st dampol 1st pulilan bulacan', '', '9230200260', 'Married', '', '432-902-099-000', 'Active', '', '2022-07-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112998, 'Viterbo', 'Norelrin', '', '', 'Female', '1971-01-01', '', '', 'M0101VN3', '', 'Single', '', '', 'Active', '', '2022-08-02', 'SPC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(112999, 'Faustino', 'Aeleen', '', '', 'Female', '2022-09-22', '', '', '', '', 'Single', '', '', 'Active', '', '2022-09-22', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc'),
(113000, 'Carasig', 'Elizabeth', '', '', 'Female', '2022-09-30', '', '', '', '', 'Single', '', '', 'Active', '', '2022-09-30', 'PC', 'VP/DIRECTOR OF SALES', 'Sm/pc');

-- --------------------------------------------------------

--
-- Table structure for table `t_approval_csr`
--

CREATE TABLE `t_approval_csr` (
  `ra_id` bigint(20) NOT NULL,
  `c_csr_no` bigint(20) NOT NULL,
  `c_lot_lid` bigint(8) NOT NULL,
  `c_csr_status` tinyint(1) DEFAULT NULL COMMENT '0 =Pending\r\n1= Approved\r\n2=Lapsed\r\n3=Disapproved',
  `c_date_approved` datetime NOT NULL DEFAULT current_timestamp(),
  `c_duration` datetime NOT NULL DEFAULT current_timestamp(),
  `c_reserve_status` tinyint(1) DEFAULT NULL COMMENT '0= Unpaid\r\n1=Paid',
  `c_ca_status` tinyint(1) DEFAULT NULL COMMENT '0=Pending\r\n1=Approved\r\n2=Disapproved\r\n3= For Revision\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_approval_csr`
--

INSERT INTO `t_approval_csr` (`ra_id`, `c_csr_no`, `c_lot_lid`, `c_csr_status`, `c_date_approved`, `c_duration`, `c_reserve_status`, `c_ca_status`) VALUES
(57, 92, 12206721, 0, '2023-01-04 15:07:01', '2023-01-05 15:07:01', 1, 3),
(61, 93, 14500101, 1, '2023-01-05 13:26:19', '2023-01-10 13:26:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_client_info`
--

CREATE TABLE `t_client_info` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `address_abroad` text NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `viber` varchar(25) NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_client_info`
--

INSERT INTO `t_client_info` (`id`, `last_name`, `first_name`, `middle_name`, `suffix_name`, `address`, `zip_code`, `address_abroad`, `birthdate`, `age`, `viber`, `gender`, `civil_status`, `citizenship`, `email`, `contact_no`) VALUES
(18, 'DIAZ II', 'FRANCIS', 'AGUILAR', 'x', '123 Bocaue, Bulacan', '3011', '', '1994-05-01', 28, '12345667', 'M', 'Single', 'Filipino', 'francisdiaz22@gmail.com', '09561305511'),
(19, 'DELA CRUZ', 'VERNIE', 'X', 'x', '123 Bocaue, Bulacan', '3011', '', '1996-04-04', 26, '12345667', 'M', 'Married', 'Filipino', 'verniedelacruz@gmail.com', '09561305511');

-- --------------------------------------------------------

--
-- Table structure for table `t_csr`
--

CREATE TABLE `t_csr` (
  `c_csr_no` bigint(20) NOT NULL,
  `c_lot_lid` bigint(8) NOT NULL,
  `c_date_of_sale` date DEFAULT current_timestamp(),
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
  `c_first_dp` date DEFAULT NULL,
  `c_full_down` date DEFAULT NULL,
  `c_amt_financed` double DEFAULT NULL,
  `c_terms` int(11) DEFAULT NULL,
  `c_interest_rate` double DEFAULT NULL,
  `c_fixed_factor` double DEFAULT NULL,
  `c_monthly_payment` double DEFAULT NULL,
  `c_start_date` date DEFAULT NULL,
  `c_remarks` text NOT NULL,
  `c_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `c_date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `c_created_by` text NOT NULL,
  `c_verify` tinyint(1) DEFAULT NULL COMMENT '0 = Pending\r\n1= Verified \r\n2= Void',
  `coo_approval` tinyint(1) DEFAULT NULL COMMENT '0= Pending\r\n1= Approved\r\n2= Lapsed\r\n3= Disapproved',
  `c_revised` tinyint(1) DEFAULT NULL COMMENT '0 = Normal\r\n1 = For Revision'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_csr`
--

INSERT INTO `t_csr` (`c_csr_no`, `c_lot_lid`, `c_date_of_sale`, `c_lot_area`, `c_price_sqm`, `c_lot_discount`, `c_lot_discount_amt`, `c_house_model`, `c_floor_area`, `c_house_price_sqm`, `c_house_discount`, `c_house_discount_amt`, `c_tcp_discount`, `c_tcp_discount_amt`, `c_tcp`, `c_vat_amount`, `c_net_tcp`, `c_reservation`, `c_payment_type1`, `c_payment_type2`, `c_down_percent`, `c_net_dp`, `c_no_payments`, `c_monthly_down`, `c_first_dp`, `c_full_down`, `c_amt_financed`, `c_terms`, `c_interest_rate`, `c_fixed_factor`, `c_monthly_payment`, `c_start_date`, `c_remarks`, `c_date_created`, `c_date_updated`, `c_created_by`, `c_verify`, `coo_approval`, `c_revised`) VALUES
(92, 12206721, '2023-01-04', 108, 6200, 0, 0, 'None ', 0, 0, 0, 0, 0, 0, 669600, 0, 669600, 0, 'Spot Cash', 'None', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 669600, 0, 0, 0, 0, '2023-01-04', '', '2023-01-04 15:00:04', '2023-01-05 13:37:50', 'admin', 1, 0, 1),
(93, 14500101, '2023-01-04', 94, 5000, 0, 0, 'None', 0, 0, 0, 0, 0, 0, 470000, 0, 470000, 100000, 'Spot Cash', 'None', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 370000, 0, 0, 0, 0, '2023-01-04', '', '2023-01-04 15:50:28', '2023-01-05 13:26:19', 'admin', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_csr_buyers`
--

CREATE TABLE `t_csr_buyers` (
  `c_csr_no` int(11) NOT NULL,
  `c_buyer_count` tinyint(4) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `address_abroad` text NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `viber` varchar(25) NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `id_presented` varchar(255) NOT NULL,
  `tin_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `contact_abroad` varchar(100) NOT NULL,
  `relationship` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_csr_buyers`
--

INSERT INTO `t_csr_buyers` (`c_csr_no`, `c_buyer_count`, `last_name`, `first_name`, `middle_name`, `suffix_name`, `address`, `zip_code`, `address_abroad`, `birthdate`, `age`, `viber`, `gender`, `civil_status`, `citizenship`, `id_presented`, `tin_no`, `email`, `contact_no`, `contact_abroad`, `relationship`) VALUES
(92, 1, 'DELA CRUZ', 'VERNIE', 'X', 'x', '123 Bocaue, Bulacan', '3011', '  ', '2023-01-18', 26, '12345667  ', 'M', 'Single', 'Filipino', '', '', 'jaevoli18@gmail.com', '09561305511', '', 0),
(92, 2, 'DIAZ II', 'FRANCIS', 'AGUILAR', 'x', '123 Bocaue, Bulacan', '3011', ' ', '1994-05-01', 28, '12345667 ', 'M', 'Single', 'Filipino', '', '', 'francisdiaz22@gmail.com', '09561305511', '', 0),
(93, 1, 'DIAZ II', 'FRANCIS', 'AGUILAR', '', '123 Bocaue, Bulacan', '3011', ' ', '1994-05-01', 28, '12345667 ', 'M', 'Single', 'Filipino', '', '', 'francisdiaz22@gmail.com', '09561305511', '', 0);

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
(92, 107380, ' MA ', 'Aberia , Joseph ', 6696, 1),
(93, 107380, ' MA ', 'Aberia , Joseph ', 4700, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `t_csr_view`
-- (See below for the actual view)
--
CREATE TABLE `t_csr_view` (
`c_acronym` text
,`c_block` smallint(6)
,`c_lot` smallint(6)
,`last_name` varchar(255)
,`first_name` varchar(255)
,`middle_name` varchar(255)
,`suffix_name` varchar(255)
,`c_csr_no` bigint(20)
,`c_lot_lid` bigint(8)
,`c_date_of_sale` date
,`c_lot_area` double
,`c_price_sqm` double
,`c_lot_discount` double
,`c_lot_discount_amt` double
,`c_house_model` text
,`c_floor_area` double
,`c_house_price_sqm` double
,`c_house_discount` double
,`c_house_discount_amt` double
,`c_tcp_discount` double
,`c_tcp_discount_amt` double
,`c_tcp` double
,`c_vat_amount` double
,`c_net_tcp` double
,`c_reservation` double
,`c_payment_type1` text
,`c_payment_type2` text
,`c_down_percent` double
,`c_net_dp` double
,`c_no_payments` int(11)
,`c_monthly_down` double
,`c_first_dp` date
,`c_full_down` date
,`c_amt_financed` double
,`c_terms` int(11)
,`c_interest_rate` double
,`c_fixed_factor` double
,`c_monthly_payment` double
,`c_start_date` date
,`c_remarks` text
,`c_date_created` datetime
,`c_date_updated` datetime
,`c_created_by` text
,`c_verify` tinyint(1)
,`coo_approval` tinyint(1)
,`c_revised` tinyint(1)
);

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
(174, 7, 8, 17400708, '163', 7300, '', 'Available', 'Regular Lot', 'With Title', '', 'AMB', 'AMB'),
(168, 34, 6, 16803406, '108', 5400, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(172, 19, 17, 17201917, '120', 5900, '', 'Available', 'Prime Lot', 'With Title', 'MAIN ROAD', 'AMB', 'AMB'),
(172, 20, 10, 17202010, '120', 5400, '', 'Available', 'Regular Lot', 'With Title', '', 'AMB', 'AMB'),
(150, 5, 34, 15000534, '108', 6100, '', 'Available', 'Prime Lot', 'With Title', 'MAIN ROAD', 'ALSC', 'ALSC'),
(148, 9, 3, 14800903, '96', 6400, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(117, 94, 18, 11709418, '72', 7000, 'Price increased of P1,000 for residential lots from PBM memo effective 2022-05-23', 'On Hold', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(152, 27, 52, 15202752, '115', 5700, 'HOLD c/o AMB', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(152, 27, 53, 15202753, '101', 5700, 'HOLD c/o AMB', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(156, 96, 3, 15609603, '108', 5000, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(122, 67, 21, 12206721, '108', 6200, ' ', 'Reserved', 'Prime Lot', 'With Title', 'Corner Lot', 'ALSC', 'ALSC'),
(151, 21, 20, 15102120, '96', 5900, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(168, 19, 16, 16801916, '108', 5400, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(113, 11, 4, 11301104, '108', 7800, ' ', 'Reserved', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(151, 12, 10, 15101210, '96', 5900, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(105, 40, 11, 10504011, '120', 8300, ' ', 'Packaged', 'Prime Lot', 'With Title', 'Near at Open Space', 'Buyer', 'JAM'),
(162, 19, 11, 16201911, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(117, 62, 15, 11706215, '72', 6000, '', 'Packaged', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 1, 1, 14500101, '94', 5000, ' ', 'Pre-Reserved', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 1, 5, 14500105, '105', 4800, ' ', 'Pre-Reserved', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 1, 6, 14500106, '120', 4600, '', 'Pre-Reserved', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 3, 1, 14500301, '75', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 3, 3, 14500303, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 3, 4, 14500304, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 6, 14500306, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 3, 7, 14500307, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 8, 14500308, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 9, 14500309, '72', 4600, '', 'Packaged', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 10, 14500310, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 3, 11, 14500311, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 3, 12, 14500312, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 13, 14500313, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 14, 14500314, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 16, 14500316, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 3, 17, 14500317, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 18, 14500318, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 21, 14500321, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 3, 23, 14500323, '76', 4700, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 4, 1, 14500401, '96', 4800, '', 'Packaged', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 4, 2, 14500402, '93', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 4, 3, 14500403, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 4, 4, 14500404, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 4, 5, 14500405, '76', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 4, 7, 14500407, '69', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 4, 8, 14500408, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 4, 10, 14500410, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 4, 11, 14500411, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 4, 13, 14500413, '112', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 4, 14, 14500414, '117', 4800, 'dch-ah 4/14 for house.', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 5, 1, 14500501, '87', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 5, 2, 14500502, '84', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 5, 3, 14500503, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 5, 4, 14500504, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 5, 5, 14500505, '87', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 5, 6, 14500506, '84', 4600, 'As of 10-14-08.', 'Packaged', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 5, 7, 14500507, '81', 4600, '', 'Packaged', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 5, 9, 14500509, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 5, 10, 14500510, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 5, 11, 14500511, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 5, 13, 14500513, '91', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 5, 14, 14500514, '96', 4800, '', 'Packaged', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 6, 2, 14500602, '99', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 6, 3, 14500603, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 6, 4, 14500604, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 6, 5, 14500605, '87', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 6, 6, 14500606, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 6, 9, 14500609, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 6, 12, 14500612, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 6, 13, 14500613, '87', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 6, 14, 14500614, '93', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 7, 1, 14500701, '98', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 7, 2, 14500702, '95', 4800, ' ', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 7, 3, 14500703, '84', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 7, 4, 14500704, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 7, 5, 14500705, '72', 4700, 'Change of Lot Area from 71 to 72 sqm. as per memo of Engg. dtd. 07-24-06, w/ Ref.No. 2006-012-07.', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 7, 6, 14500706, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 7, 8, 14500708, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 7, 9, 14500709, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 7, 11, 14500711, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 7, 12, 14500712, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 7, 13, 14500713, '88', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 8, 1, 14500801, '83', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 8, 2, 14500802, '80', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 8, 3, 14500803, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 8, 4, 14500804, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 8, 5, 14500805, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 8, 7, 14500807, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 8, 8, 14500808, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 8, 9, 14500809, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 8, 10, 14500810, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 8, 11, 14500811, '72', 4600, 'to be sold w/ lot 13.', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 8, 12, 14500812, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 8, 13, 14500813, '104', 4800, '', 'Packaged', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 8, 14, 14500814, '111', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 9, 1, 14500901, '75', 5000, '', 'Available', 'Prime Lot', 'With Title', 'corner lot/near at Open space', 'Buyer', 'ALSC'),
(145, 9, 2, 14500902, '72', 4800, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'Buyer', 'ALSC'),
(145, 10, 2, 14501002, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 10, 3, 14501003, '84', 4600, '', 'Packaged', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 10, 4, 14501004, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 10, 5, 14501005, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 10, 7, 14501007, '72', 4800, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 10, 8, 14501008, '72', 4800, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'ALSC', 'ALSC'),
(145, 10, 9, 14501009, '72', 4800, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'Buyer', 'ALSC'),
(145, 10, 10, 14501010, '84', 4800, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'ALSC', 'ALSC'),
(145, 10, 11, 14501011, '73', 4900, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 10, 12, 14501012, '72', 4900, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 10, 13, 14501013, '84', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', ''),
(145, 10, 14, 14501014, '105', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 11, 2, 14501102, '113', 4800, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 11, 4, 14501104, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 11, 5, 14501105, '93', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 11, 8, 14501108, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', ''),
(145, 11, 9, 14501109, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 12, 1, 14501201, '104', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 12, 2, 14501202, '78', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 12, 4, 14501204, '104', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 13, 1, 14501301, '117', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 13, 2, 14501302, '116', 4900, '', 'Packaged', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 13, 4, 14501304, '70', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 13, 5, 14501305, '96', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 13, 6, 14501306, '82', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 13, 7, 14501307, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 13, 8, 14501308, '76', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 13, 9, 14501309, '102', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 13, 10, 14501310, '109', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 14, 2, 14501402, '72', 4900, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'Buyer', 'ALSC'),
(145, 14, 3, 14501403, '72', 4900, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'Buyer', 'ALSC'),
(145, 14, 4, 14501404, '72', 4900, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'Buyer', 'ALSC'),
(145, 14, 5, 14501405, '94', 5200, '', 'Available', 'Prime Lot', 'With Title', 'corner lot/near at Open space', 'Buyer', 'ALSC'),
(145, 14, 6, 14501406, '72', 4800, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'Buyer', 'ALSC'),
(145, 14, 7, 14501407, '72', 4800, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'ALSC', 'ALSC'),
(145, 15, 2, 14501502, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 15, 3, 14501503, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 15, 4, 14501504, '94', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'AMB', 'AMB'),
(145, 15, 5, 14501505, '79', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'AMB', 'AMB'),
(145, 15, 6, 14501506, '88', 5000, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'AMB', 'AMB'),
(145, 15, 8, 14501508, '76', 5000, '', 'Available', 'Prime Lot', 'With Title', 'near at Open Space', 'AMB', 'AMB'),
(145, 16, 3, 14501603, '101', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 16, 10, 14501610, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 16, 11, 14501611, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 17, 1, 14501701, '80', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 17, 2, 14501702, '83', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 17, 3, 14501703, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 17, 6, 14501706, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'AMB', 'AMB'),
(145, 18, 2, 14501802, '106', 4800, '', 'Packaged', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 18, 3, 14501803, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 18, 4, 14501804, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 18, 5, 14501805, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 18, 6, 14501806, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 19, 1, 14501901, '103', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 19, 2, 14501902, '106', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 19, 8, 14501908, '78', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 20, 2, 14502002, '80', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 20, 3, 14502003, '77', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 20, 4, 14502004, '73', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 20, 5, 14502005, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 21, 1, 14502101, '104', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 21, 2, 14502102, '109', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 21, 3, 14502103, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 21, 4, 14502104, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 21, 5, 14502105, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 21, 8, 14502108, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 21, 10, 14502110, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 21, 12, 14502112, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 21, 14, 14502114, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 21, 16, 14502116, '91', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 22, 1, 14502201, '110', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'AMB', 'AMB'),
(145, 22, 3, 14502203, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 22, 10, 14502210, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 22, 12, 14502212, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 22, 13, 14502213, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 22, 15, 14502215, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 22, 17, 14502217, '110', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 23, 1, 14502301, '110', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 23, 2, 14502302, '113', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 23, 3, 14502303, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'AMB', 'AMB'),
(145, 23, 6, 14502306, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 23, 12, 14502312, '72', 4700, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 23, 13, 14502313, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 23, 14, 14502314, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 25, 1, 14502501, '81', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 25, 2, 14502502, '79', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'AMB', 'AMB'),
(145, 25, 3, 14502503, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 25, 4, 14502504, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 25, 5, 14502505, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 26, 1, 14502601, '84', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'AMB'),
(145, 26, 4, 14502604, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'AMB'),
(145, 27, 2, 14502702, '84', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 27, 5, 14502705, '80', 4600, 'FROM 72SQM BY ENGG MEMO 2002-012-11 DATED 11-11-2002', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 27, 6, 14502706, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 27, 7, 14502707, '82', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'ALSC', 'ALSC'),
(145, 27, 11, 14502711, '124', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'ALSC', 'ALSC'),
(145, 28, 1, 14502801, '101', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 28, 2, 14502802, '93', 4900, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 28, 3, 14502803, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 4, 14502804, '76', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 5, 14502805, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 6, 14502806, '70', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 7, 14502807, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 8, 14502808, '67', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 9, 14502809, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 10, 14502810, '78', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 11, 14502811, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 12, 14502812, '84', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC'),
(145, 28, 13, 14502813, '103', 4800, '', 'Available', 'Prime Lot', 'With Title', 'corner lot', 'Buyer', 'ALSC'),
(145, 28, 14, 14502814, '72', 4600, '', 'Available', 'Regular Lot', 'With Title', '', 'Buyer', 'ALSC');

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
(111, '111', 'ABC'),
(123, 'AAAA', 'ABC');

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
(101, 'ROYALE ESTATE', 'RE', 'Bulihan', 'Malolos City', 1, 3000, 1, 10000),
(102, 'CASA ROYALE', 'CR', 'Sapang Putol', 'San Ildefonso, Bulacan', 1, 3010, 20, 5000),
(103, 'GRAND ROYALE 1', 'GR-1', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(104, 'DREAMCREST HOMES 1', 'DCH-1', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(105, 'GRAND ROYALE 2', 'GR-2', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(106, 'GRAND INDUSTRIAL ESTATE', 'GIE', 'Div. Rd, Parulan', 'Plaridel, Bulacan', 1, 3004, 0, 100000),
(107, 'DREAMCREST HOMES 2-A', 'DCH-2A', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(108, 'GRAND ROYALE 2-A', 'GR-2A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(109, 'DREAMCREST HOMES 2-B', 'DCH-2B', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(110, 'GRAND ROYALE 1-A', 'GR-1A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(111, 'GRAND ROYALE 3', 'GR-3', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(112, 'DREAMCREST HOMES 3', 'DCH-3', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(113, 'GRAND ROYALE 4', 'GR-4', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(114, 'DREAMCREST HOMES 1-A', 'DCH-1A', 'Bulihan', 'Malolos City', 1, 3000, 21, 5000),
(115, 'GRAND ROYALE 5', 'GR-5', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(116, 'DREAMCREST HOMES 4', 'DCH-4', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(117, 'DREAMCREST HOMES 5', 'DCH-5', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(118, 'GRAND ROYALE 5-A', 'GR-5A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(119, 'GRAND ROYALE 6', 'GR-6', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(120, 'GRAND ROYALE 7', 'GR-7', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(121, 'GRAND ROYALE 8', 'GR-8', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(122, 'GRAND ROYALE 9', 'GR-9', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(123, 'THE MEADOWS', 'MEADOWS', 'San Jose Patag', 'Sta. Maria, Bulacan', 1, 3022, 0, 20000),
(124, 'GRAND ROYALE 8-A', 'GR-8A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(125, 'GRAND ROYALE 8-B', 'GR-8B', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(126, 'GRAND ROYALE 8-C', 'GR-8C', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(127, 'GRAND ROYALE 9-A', 'GR-9A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(128, 'GRAND ROYALE 10', 'GR-10', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(129, 'GRAND ROYALE 8-D', 'GR-8D', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(130, 'GRAND ROYALE 7-A', 'GR-7A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(131, 'GRAND ROYALE 8-E', 'GR-8E', 'Longos', 'Malolos City', 1, 3000, 0, 10000),
(132, 'GRAND ROYALE 7-B', 'GR-7B', 'Pinagbakahan', 'Malolos City', 1, 3000, 0, 10000),
(133, 'GRAND ROYALE 1-B', 'GR-1B', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(134, 'GRAND ROYALE 1-C', 'GR-1C', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(135, 'GRAND ROYALE 7-C', 'GR-7C', 'Longos', 'Malolos City', 1, 3000, 0, 10000),
(136, 'GRAND ROYALE 4-A', 'GR-4A', 'Pinagbakahan', 'Malolos City', 1, 3000, 0, 10000),
(137, 'DREAMCREST HOMES 2-C', 'DCH-2C', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(138, 'DREAMCREST HOMES 5-A', 'DCH-5A', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(139, 'GRAND ROYALE 3-A', 'GR-3A', 'Pinagbakahan', 'Malolos City', 1, 3000, 0, 10000),
(140, 'GRAND ROYALE 7-D', 'GR-7D', 'Look 1st', 'Malolos City', 1, 3000, 0, 10000),
(141, 'GRAND ROYALE 7-E', 'GR-7E', 'Lugam', 'Malolos City', 1, 3000, 0, 10000),
(142, 'GRAND ROYALE 5-B', 'GR-5B', 'Pinagbakahan', 'Malolos City', 1, 3000, 0, 10000),
(143, 'GRAND ROYALE 6-A', 'GR-6A', 'Pinagbakahan', 'Malolos City', 1, 3000, 0, 10000),
(144, 'GRAND ROYALE 5-C', 'GR-5C', 'Mojon', 'Malolos City', 1, 3000, 0, 10000),
(145, 'DREAMCREST HOMES 5-B', 'DCH-5B', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(146, 'GRAND ROYALE 7-F', 'GR-7F', 'Longos', 'Malolos City', 1, 3000, 0, 10000),
(147, 'DREAMCREST HOMES 5-C', 'DCH-5C', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(148, 'GRAND ROYALE 6-B', 'GR-6B', 'Pinagbakahan', 'Malolos City', 1, 3000, 0, 10000),
(149, 'WOODLANDS OF GRAND ROYALE', 'WGR', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(150, 'ROYALE ESTATE 2', 'RE-2', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(151, 'GRAND ROYALE 5-D', 'GR-5D', 'Mojon', 'Malolos City', 1, 3000, 0, 10000),
(152, 'CASABUENA DE PULILAN', 'CBP', 'Cutcot', 'Pulilan, Bulacan', 1, 3005, 0, 10000),
(153, 'GRAND ROYALE 1-D', 'GR-1D', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(154, 'GRAND ROYALE 1-E', 'GR-1E', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(155, 'GRAND ROYALE 7-G', 'GR-7G', 'Look 1st', 'Malolos City', 1, 3000, 0, 10000),
(156, 'WOODLANDS OF GRAND ROYALE 2', 'WGR-2', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(157, 'CASABUENA DE PULILAN 2', 'CBP-2', 'Cutcut', 'Pulilan, Bulacan', 1, 3005, 0, 10000),
(158, 'DREAMCREST HOMES 2-D', 'DCH-2D', 'Longos', 'Malolos City', 1, 3000, 21, 5000),
(159, 'GRAND ROYALE 7-H', 'GR-7H', 'Longos', 'Malolos City', 0, 3000, 0, 10000),
(160, 'GRAND ROYALE 1-F', 'GR-1F', 'Mojon', 'Malolos City', 0, 3000, 0, 10000),
(161, 'CASABUENA DE PULILAN 1-A', 'CBP-1A', 'Cutcut', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(162, 'DREAMCREST HOMES 5-D', 'DCH-5D', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(163, 'WOODLANDS OF GRAND ROYALE 3', 'WGR-3', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(164, 'THE MEADOWS 2', 'MEADOWS-2', 'San Jose Patag', 'Sta. Maria, Bulacan', 0, 3022, 0, 20000),
(165, 'GRAND ROYALE 3-B', 'GR-3B', 'Pinagbakahan', 'Malolos City', 0, 3000, 0, 10000),
(166, 'CASABUENA DE PULILAN 2A', 'CBP-2A', 'Cutcut', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(167, 'WOODLANDS OF GRAND ROYALE 1-A', 'WGR-1A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(168, 'CASABUENA DE PULILAN 3', 'CBP-3', 'Cutcot', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(169, 'CASABUENA DE PULILAN 4', 'CBP-4', 'Cutcut', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(170, 'CASABUENA DE PULILAN 2B', 'CBP-2B', 'Cutcot', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(171, 'GRAND ROYALE 7-I', 'GR-7I', 'Longos', 'Malolos City', 0, 3000, 0, 10000),
(172, 'CASABUENA DE PULILAN 5', 'CBP-5', 'Cutcut', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(173, 'GRAND ROYALE 6-C', 'GR-6C', 'Pinagbakahan', 'Malolos City', 0, 3000, 0, 10000),
(174, 'WOODLANDS OF GRAND ROYALE 4', 'WGR-4', 'Anilao', 'Malolos City', 0, 3000, 0, 10000),
(175, 'GRAND ROYALE 9-B', 'GR-9B', 'Lugam', 'Malolos City', 0, 3000, 0, 10000),
(176, 'WOODLANDS OF GRAND ROYALE 2-A', 'WGR-2A', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(177, 'WOODLANDS OF GRAND ROYALE 1-B', 'WGR-1B', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(178, 'GRAND ROYALE 8-F', 'GR-8F', 'Longos', 'Malolos City', 0, 3000, 0, 10000),
(179, 'GRAND ROYALE 6-E', 'GR-6E', 'Pinagbakahan', 'Malolos City', 0, 3000, 0, 10000),
(180, 'CASABUENA DE PULILAN 1B', 'CBP-1B', 'Cutcot', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(181, 'WOODLANDS OF GRAND ROYALE 2-B', 'WGR-2B', 'Bulihan', 'Malolos City', 0, 3000, 0, 10000),
(182, 'CASABUENA DE PULILAN 3A', 'CBP-3A', 'Cutcot', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(183, 'CASABUENA DE PULILAN 5-A', 'CBP-5A', 'Cutcut', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(184, 'GRAND ROYALE 6-D', 'GR-6D', 'Pinagbakahan', 'Malolos City', 0, 3000, 0, 10000),
(185, 'DREAMCREST HOMES 5-E', 'DCH-5E', 'Longos', 'Malolos City', 0, 3000, 21, 5000),
(186, 'CASABUENA DE PULILAN 3-B', 'CBP-3B', 'Paltao', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(187, 'CASABUENA DE PULILAN 5-B', 'CBP-5B', 'Cutcot', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(188, 'GRAND ROYALE 7-J', 'GR-7J', 'Looc 1st', 'Malolos City', 0, 3000, 0, 10000),
(189, 'CASABUENA DE PULILAN 3-C', 'CBP-3C', 'Paltao', 'Pulilan, Bulacan', 0, 3005, 0, 10000),
(190, 'ROYALE ESTATE - HOUSE', 'RE-AH', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(191, 'CASA ROYALE - HOUSE', 'CR-AH', 'Sapang Putol', 'San Ildefonso, Bulacan', 1, 3010, 20, 5000),
(192, 'DREAMCREST HOMES - HOUSE', 'DCH-AH', 'Longos', 'Malolos City', 1, 3000, 21, 5000),
(193, 'GRAND ROYALE - HOUSE', 'GR-AH', 'Bulihan', 'Malolos City', 1, 3000, 0, 10000),
(194, 'THE MEADOWS - HOUSE', 'MEAD-AH', 'San Jose Patag', 'Sta. Maria, Bulacan', 1, 3022, 0, 10000),
(195, 'CASABUENA DE PULILAN', 'CBP-2C', '', 'Pulilan, Bulacan', 1, 3005, 0, 0),
(196, 'CASABUENA DE PULILAN', 'CBP-3D', '', 'Pulilan, Bulacan', 1, 3005, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_reservation`
--

CREATE TABLE `t_reservation` (
  `id` int(11) NOT NULL,
  `ra_no` bigint(20) NOT NULL,
  `c_csr_no` bigint(20) NOT NULL,
  `c_lot_id` bigint(20) NOT NULL,
  `c_or_no` text NOT NULL,
  `c_reserve_date` date NOT NULL,
  `c_amount_paid` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_reservation`
--

INSERT INTO `t_reservation` (`id`, `ra_no`, `c_csr_no`, `c_lot_id`, `c_or_no`, `c_reserve_date`, `c_amount_paid`) VALUES
(21, 57, 92, 12206721, '12345', '2023-01-04', 10000);

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
(1, 'DELA CRUZ', 'JUDE', 'PANGILINAN', 'admin', 'jaevoli@gmail.com', '2022-12-13', '09561305511', '21232f297a57a5a743894a0e4a801fc3', 'IT Admin', ''),
(108, 'DELA CRUZ', 'JUAN', 'P', 'agent_juan', 'agent1@gmail.com', '2022-12-20', '12345678910', 'b33aed8f3134996703dc39f9a7c95783', 'Agent', ''),
(109, 'MADRID', 'PIA', ' ', 'coo_pia', 'piamadrid@gmail.com', '1990-01-01', '1234567910', '21232f297a57a5a743894a0e4a801fc3', 'COO', ''),
(110, 'BORLONGAN', 'VIO', ' ', 'sos_vio', 'vioborlongan@gmail.com', '2022-12-20', '1234567910', '21232f297a57a5a743894a0e4a801fc3', 'SOS', ''),
(111, 'AMURAO', 'MARISSA', ' ', 'agent_marissa', 'marissaamurao@gmail.com', '2022-12-20', '12345678910', 'b33aed8f3134996703dc39f9a7c95783', 'Agent', ''),
(112, 'FLORES', 'OSIE', 'SISON', 'agent_osie', 'osie@gmail.com', '2022-12-20', '10987654321', 'b33aed8f3134996703dc39f9a7c95783', 'Agent', ''),
(113, 'Cruz', 'Janine', ' ', 'ca_janine', 'janinecruz@gmail.com', '2022-12-20', '12345', '21232f297a57a5a743894a0e4a801fc3', 'CA', '');

-- --------------------------------------------------------

--
-- Structure for view `t_csr_view`
--
DROP TABLE IF EXISTS `t_csr_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `t_csr_view`  AS SELECT `q`.`c_acronym` AS `c_acronym`, `z`.`c_block` AS `c_block`, `z`.`c_lot` AS `c_lot`, `y`.`last_name` AS `last_name`, `y`.`first_name` AS `first_name`, `y`.`middle_name` AS `middle_name`, `y`.`suffix_name` AS `suffix_name`, `x`.`c_csr_no` AS `c_csr_no`, `x`.`c_lot_lid` AS `c_lot_lid`, `x`.`c_date_of_sale` AS `c_date_of_sale`, `x`.`c_lot_area` AS `c_lot_area`, `x`.`c_price_sqm` AS `c_price_sqm`, `x`.`c_lot_discount` AS `c_lot_discount`, `x`.`c_lot_discount_amt` AS `c_lot_discount_amt`, `x`.`c_house_model` AS `c_house_model`, `x`.`c_floor_area` AS `c_floor_area`, `x`.`c_house_price_sqm` AS `c_house_price_sqm`, `x`.`c_house_discount` AS `c_house_discount`, `x`.`c_house_discount_amt` AS `c_house_discount_amt`, `x`.`c_tcp_discount` AS `c_tcp_discount`, `x`.`c_tcp_discount_amt` AS `c_tcp_discount_amt`, `x`.`c_tcp` AS `c_tcp`, `x`.`c_vat_amount` AS `c_vat_amount`, `x`.`c_net_tcp` AS `c_net_tcp`, `x`.`c_reservation` AS `c_reservation`, `x`.`c_payment_type1` AS `c_payment_type1`, `x`.`c_payment_type2` AS `c_payment_type2`, `x`.`c_down_percent` AS `c_down_percent`, `x`.`c_net_dp` AS `c_net_dp`, `x`.`c_no_payments` AS `c_no_payments`, `x`.`c_monthly_down` AS `c_monthly_down`, `x`.`c_first_dp` AS `c_first_dp`, `x`.`c_full_down` AS `c_full_down`, `x`.`c_amt_financed` AS `c_amt_financed`, `x`.`c_terms` AS `c_terms`, `x`.`c_interest_rate` AS `c_interest_rate`, `x`.`c_fixed_factor` AS `c_fixed_factor`, `x`.`c_monthly_payment` AS `c_monthly_payment`, `x`.`c_start_date` AS `c_start_date`, `x`.`c_remarks` AS `c_remarks`, `x`.`c_date_created` AS `c_date_created`, `x`.`c_date_updated` AS `c_date_updated`, `x`.`c_created_by` AS `c_created_by`, `x`.`c_verify` AS `c_verify`, `x`.`coo_approval` AS `coo_approval`, `x`.`c_revised` AS `c_revised` FROM (((`t_csr` `x` join `t_csr_buyers` `y` on(`x`.`c_csr_no` = `y`.`c_csr_no`)) join `t_lots` `z` on(`x`.`c_lot_lid` = `z`.`c_lid`)) join `t_projects` `q` on(`z`.`c_site` = `q`.`c_code`)) WHERE `y`.`c_buyer_count` = 11  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_agents`
--
ALTER TABLE `t_agents`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `t_approval_csr`
--
ALTER TABLE `t_approval_csr`
  ADD PRIMARY KEY (`ra_id`),
  ADD UNIQUE KEY `c_csr_no` (`c_csr_no`);

--
-- Indexes for table `t_client_info`
--
ALTER TABLE `t_client_info`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`ra_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_agents`
--
ALTER TABLE `t_agents`
  MODIFY `c_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113001;

--
-- AUTO_INCREMENT for table `t_approval_csr`
--
ALTER TABLE `t_approval_csr`
  MODIFY `ra_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `t_client_info`
--
ALTER TABLE `t_client_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_csr`
--
ALTER TABLE `t_csr`
  MODIFY `c_csr_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `t_csr_comments`
--
ALTER TABLE `t_csr_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `t_reservation`
--
ALTER TABLE `t_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
