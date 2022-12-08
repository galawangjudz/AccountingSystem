-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 12:55 AM
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
(115, 'DELA CRUZ', 'JUDE', 'PANGILINAN', '0682 SANTOL', '', '', '', 'BALAGTAS, BULACAN', '3016', '', '1994-12-25', 27, '', 'M', 'Single', 'Employed', 'jaevoli@gmail.com', '09561305511'),
(116, 'DELA CRUZ', '121', '1212', '0682 SANTOL', 'JUDE', '121', '1212', 'BALAGTAS, BULACAN', '3016', '21212', '1994-12-01', 27, '1212', 'M', 'Single', 'Employed', '1212', '12121');

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
(100206, 'Giron', 'Emmanuel', 'L.', 'Emmanuel', 'MALE', '0000-00-00', '', '', 'M1203GE0', '', 'MARRIED', '', '', 'ACTIVE', 'Ofelia P. Lagman', '0000-00-00', 'AM', ' ', 'ACHIEVERS'),
(100315, 'Baltazar', 'Rosario', 'C.', 'Rosie', 'Female', '0000-00-00', 'San Pedro, Paombong, Bulacan', 'L7 B9 P2 MAUNLAD HOMES MOJON, MAL., BUL.', 'M0523BR0', '791-49-75', 'Married', '', '', 'Active', 'Lolita Guevarra', '0000-00-00', 'AVP', 'OTHERS', 'Bulacan Group'),
(100628, 'Bondoc', 'Remedios', '', 'Remy', 'Female', '0000-00-00', 'Balintawak, Quezon City', '17-A STO. CRISTO, BALINTAWAK, Q.C.', 'M1023BR0', '', 'Single', '', '', 'Active', 'Felisa Fabregas', '0000-00-00', 'SM', 'CORNERSTONE', 'Lighthouse'),
(100674, 'Castro', 'Fanny', '', 'Fanny', 'FEMALE', '0000-00-00', 'Gatbuca, Calumpit, Bulacan', '#174 GATBUCA, CALUMPIT, BULACAN', 'M0603CF0', '', 'MARRIED', '', '', 'ACTIVE', 'Lourdes S. Claridad', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(101130, 'Falsario', 'Elena', 'C.', '', 'Female', '0000-00-00', '', '', 'M0101FE2', '', 'Single', '', '', 'Active', '', '0000-00-00', 'AVP', 'CATTLEYA', 'CATTLEYA - DIRECT'),
(101260, 'De Guzman', 'Rodelio', '', '', 'Male', '0000-00-00', '', '', 'M0101DR2', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CORNERSTONE', 'CORNERSTONE - DIRECT'),
(101640, 'Ferro', 'Chona', '', '', 'FEMALE', '1899-12-31', '', '', 'M0101FC2', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102115, 'Marasigan', 'Cristina', '', '', 'FEMALE', '0000-00-00', '', '', 'M0202MC5', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102167, 'Lim', 'Joyce', '', '', 'Female', '0000-00-00', '', '', 'M0101LJ8', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'OTHERS', 'BROKER INT. II'),
(102210, 'Zoleta', 'Sonny', '', '', 'Male', '0000-00-00', '', '', 'M0101ZS0', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PAMPANGA', 'Pampanga - Direct'),
(102314, 'Samson', 'Haydee', '', '', 'FEMALE', '1899-12-31', '', '', 'M0101SH1', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102372, 'Manansala', 'Myrla', 'J.', '', 'FEMALE', '0000-00-00', '', '', 'M0201MM4', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102497, 'Plamenco', 'Josefina', '', '', 'FEMALE', '0000-00-00', '', '', 'M0202PJ0', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102640, 'Costillas', 'Evangeline', '', '', 'FEMALE', '0000-00-00', '', '', 'M0202CE7', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102714, 'Basco', 'Ma.sheila', '', '', 'FEMALE', '0000-00-00', '', '', 'M0202BM6', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'JAV', ' ', 'ACHIEVERS'),
(102727, 'Basco', 'Sheila', '', '', 'FEMALE', '1899-12-31', '', '', 'M0101BS5', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'JAV', ' ', 'ACHIEVERS'),
(102791, 'Quintana', 'Marissa', '', '', 'Female', '0000-00-00', '', '', 'M0101QM0', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'CATTLEYA - DIRECT'),
(102797, 'Ronquillo', 'Remedios', '', '', 'FEMALE', '0000-00-00', '', '', 'M0202RR9', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102916, 'Carillo', 'Eufrocino', '', '', 'MALE', '0000-00-00', '', '', 'M0201CE2', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(102946, 'Basco', 'Ma.sheila', '', '', 'FEMALE', '0000-00-00', '', '', 'M0202BM9', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'JAV', ' ', 'ACHIEVERS'),
(102988, 'Delloro', 'Julius', 'T.', '', 'Male', '0000-00-00', '', '', 'M0201DJ9', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CORNERSTONE', 'OLYMPUS'),
(103056, 'Salazar', 'Precilla', '', '', 'FEMALE', '1899-12-31', '', '', 'M0101SP8', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103063, 'Ferrer', 'Harold', '', '', 'MALE', '1899-12-31', '', '', 'M0101FH3', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103198, 'Viray', 'Roselle Lynn', '', '', 'FEMALE', '1899-12-31', '', '', 'M0101VR5', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103245, 'Meneses', 'Maricris', '', '', 'FEMALE', '0000-00-00', '', '', 'M0203MM9', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103376, 'Jamandron', 'Josefina', '', '', 'Female', '0000-00-00', '', '', 'M0101JJ5', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PAMPANGA', 'Marvelous'),
(103524, 'Solis', 'Vivian', '', '', 'FEMALE', '1899-12-31', '', '', 'M0101SV4', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103697, 'Clarin', 'Mayumi', '', '', 'FEMALE', '0000-00-00', '', '', 'M0204CM9', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103763, 'Serrano', 'Salvacion', '', '', 'Female', '0000-00-00', '', '', 'M0101SS8', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRISTOP', 'SUN'),
(103814, 'Clarin', 'Lito', '', '', 'MALE', '0000-00-00', '', '', 'M0203CL5', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(103831, 'San Pedro', 'Jayceryn', 'I.', '', 'Female', '0000-00-00', '', '', 'M0203SJ9', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'LOTUS', 'Vertex'),
(103853, 'De Jesus', 'Alona', '', '', 'FEMALE', '0000-00-00', '', '', 'M0204DA0', '', 'SINGLE', '', '', 'ACTIVE', '', '0000-00-00', 'MA', ' ', 'ACHIEVERS'),
(104578, 'Dayrit', 'Flordeliza', 'L.', '', 'Female', '0000-00-00', '', '', 'M0303DF2', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'Prestige 1'),
(104749, 'Dajao', 'Ruth', '', '', 'Female', '0000-00-00', '', '', 'M0303DR8', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'DIAMOND', 'Diamond - Direct'),
(104884, 'Cruz', 'Cheryl', '', '', 'Female', '0000-00-00', '', '', 'M0303CC3', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'ALTITUDE', 'Fortune'),
(104894, 'Polintan', 'Hedy', 'P.', '', 'Female', '0000-00-00', '', '', 'M0303PH3', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRONICLES', 'BLUE LANE 1'),
(104957, 'Hipolito', 'Jarolina', '', '', 'Female', '0000-00-00', '', '', 'M0604HF1', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'CITRINE'),
(105189, 'Pelino', 'Renato', '', '', 'Male', '0000-00-00', '', '', 'M0502PR0', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRONICLES', 'Achievers'),
(105319, 'Manalang', 'Arnold', '', '', 'Male', '0000-00-00', '', '', 'M0712MA0', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'Horizon'),
(105358, 'Aguilar', 'Donabel', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'APEX'),
(105404, 'Bautista', 'Lorenzo', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'LOTUS', 'EVEREST'),
(105444, 'Ocampo', 'Mylene', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRONICLES', 'BLUE LANE 1'),
(105445, 'Francisco', 'Vilma', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CORNERSTONE', 'CORNERSTONE - DIRECT'),
(105448, 'Potes', 'Gerry', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'LIFESTREAM'),
(105455, 'Manalaysay', 'Yolanda', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRONICLES', 'BLUE LANE 1'),
(105458, 'Balatbat', 'Ma. Ana', 'M.', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'CROWN'),
(105459, 'Junio', 'Felicidad', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'BROMELIADS', 'PEAK'),
(105460, 'Ybut', 'Marlon', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'BROMELIADS', 'PEAK'),
(105461, 'Candido', 'Nenita', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'SURMOUNT'),
(105462, 'Chico', 'Agripina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRYSANTHEMUM', 'TITANIUM'),
(105464, 'Capispisan', 'Ma. Theresa', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PAMPANGA', 'MAGNIFICAT'),
(105465, 'Yabut', 'Elizabeth', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'PRINCE'),
(105466, 'Vitug', 'Aurora', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'ALTITUDE', 'BAGUETTES'),
(105467, 'Manganan', 'Erlinda', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'CRUSADER'),
(105468, 'Mercado', 'Maricon', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PRECIOUS', 'Precious - Direct'),
(105469, 'Dela Cruz', 'Mary Grace', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'ALTITUDE', 'Excel'),
(105470, 'Garola', 'Celerina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PRECIOUS', 'Prominent'),
(105474, 'Pallingayan', 'Cristeta', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'Prestige 1'),
(105475, 'Pacheco', 'Raul', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'Elegance'),
(105478, 'Belga', 'Elena', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRISTOP', 'SAVIOUR'),
(105482, 'Tenorio', 'Cristina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'BROMELIADS', 'PHOENIX'),
(105483, 'De Guzman', 'Marjorie', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRISTOP', 'SAVIOUR'),
(105485, 'Eugenio', 'Teodora', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'ANTHURIUM', 'ADVENT'),
(105490, 'Patawaran', 'Erlinda', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'STARGAZER', 'SAMPAGUITA'),
(105507, 'Dela Cruz', 'Adora', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'LOTUS', 'CREST'),
(105508, 'Yoshida', 'Cristina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'HYACINTH', 'HYACINTH - DIRECT'),
(105510, 'Tubig', 'Richard', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'CALYPSO - DIRECT'),
(105529, 'Manansala', 'Eleonor', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRISTOP', 'CHRISTOP - DIRECT'),
(105536, 'Castillo', 'Elizabeth', '', '', 'Female', '0000-00-00', '', '', '', '', 'Married', '', '', 'Active', '', '0000-00-00', 'MA', 'LOTUS', 'EVEREST'),
(105540, 'Dias', 'Salvacion', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRISTOP', 'SAVIOUR'),
(105542, 'Yambao', 'Marissa', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRONICLES', 'Chronicles - Direct'),
(105573, 'Alba', 'Chellamel', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'Prestige 1'),
(105574, 'Bascos', 'Susan', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'HYACINTH', 'Igneous'),
(105575, 'Pobalate', 'Felicidad', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PRECIOUS', 'Precious - Direct'),
(105577, 'Navarette', 'Elena', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'Paramount'),
(105582, 'Alipio', 'Franklin', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRYSANTHEMUM', 'Titanium'),
(105583, 'Ay', 'Merlina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'HYACINTH', 'Iris'),
(105584, 'Santos', 'Elizabeth', 'N', '', 'Female', '0000-00-00', '', '', '', '', 'Married', '', '', 'Active', '', '0000-00-00', 'MA', 'OTHERS', 'Manila Group'),
(105586, 'Lingcoran', 'Marino', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'ALTITUDE', 'Excellent'),
(105587, 'Bautista', 'Ma. Aurora', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'STARGAZER', 'Sampaguita'),
(105589, 'Ventura', 'Cristina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'MAGNOLIA', 'Paragon'),
(105590, 'Clavio', 'Zenaida', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHERRY BLOSSOM', 'Majesty'),
(105591, 'Dequina', 'Donna', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'MAGNOLIA', 'Provident'),
(105592, 'Pangilinan', 'Daisy', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CALYPSO', 'Calypso - Direct'),
(105593, 'Tumolva', 'Concepcion', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PAMPANGA', 'Marvelous'),
(105594, 'Garcia', 'Gilbert', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRISTOP', 'Sun'),
(105595, 'Mallari', 'Sharon', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'Marigold'),
(105596, 'Pangilinan', 'Enrico', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CHRONICLES', 'Blue Lane 1'),
(105597, 'Marana', 'Ma. Luisa', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'Horizon'),
(105598, 'Sapitula', 'Melody', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'Brilliant'),
(105605, 'Liwanag', 'Eduardo', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'Jasmine - Direct'),
(105609, 'Jacinto', 'Arlene', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'LOTUS', 'Everest'),
(105610, 'Basilio', 'Irene', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PAMPANGA', 'Ascend'),
(105611, 'Cueva', 'Ma. Belinda', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'HYACINTH', 'Igneous'),
(105612, 'Villarama', 'Jemelyn', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'HYACINTH', 'Granite 1'),
(105626, 'Leveriza', 'Rowena', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'PAMPANGA', 'Summit'),
(105627, 'Waje', 'Rina', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'ANTHURIUM', 'Alpha'),
(105628, 'Cauyao', 'Nena', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'BROMELIADS', 'Bromeliads - Direct'),
(105630, 'Valenzuela', 'Danilo', '', '', 'Male', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'CATTLEYA', 'Abba'),
(105652, 'Hornilla', 'Erlinda', '', '', 'Female', '0000-00-00', '', '', '', '', 'Single', '', '', 'Active', '', '0000-00-00', 'MA', 'JASMINE', 'Horizon');

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
  `c_ca_status` tinyint(1) DEFAULT NULL COMMENT '0=Pending\r\n1=Approved\r\n2=Disapproved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_approval_csr`
--

INSERT INTO `t_approval_csr` (`ra_id`, `c_csr_no`, `c_lot_lid`, `c_csr_status`, `c_date_approved`, `c_duration`, `c_reserve_status`, `c_ca_status`) VALUES
(31, 38, 11000102, 2, '2022-12-07 13:20:55', '2022-12-08 13:20:55', 0, 1),
(32, 39, 14102332, 2, '2022-12-07 15:21:12', '2022-12-07 15:24:12', 0, NULL),
(33, 40, 13300102, 2, '2022-12-07 15:42:02', '2022-12-08 15:42:02', 0, 0);

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
  `c_remarks` text NOT NULL,
  `c_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `c_date_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `c_created_by` text NOT NULL,
  `c_verify` tinyint(1) NOT NULL COMMENT '0 = Pending\r\n1= Verified \r\n2= Void',
  `coo_approval` tinyint(1) DEFAULT NULL COMMENT '0= Pending\r\n1= Approved\r\n2= Lapsed\r\n3= Disapproved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_csr`
--

INSERT INTO `t_csr` (`c_csr_no`, `c_lot_lid`, `c_date_of_sale`, `c_b1_last_name`, `c_b1_first_name`, `c_b1_middle_name`, `c_b2_last_name`, `c_b2_first_name`, `c_b2_middle_name`, `c_address`, `c_city_prov`, `c_zip_code`, `c_address_abroad`, `c_billing_address`, `c_birthday`, `c_age`, `c_sex`, `c_mobile_no`, `c_mobile_abroad`, `c_viber_no`, `c_civil_status`, `c_email`, `c_employment_status`, `c_lot_area`, `c_price_sqm`, `c_lot_discount`, `c_lot_discount_amt`, `c_house_model`, `c_floor_area`, `c_house_price_sqm`, `c_house_discount`, `c_house_discount_amt`, `c_tcp_discount`, `c_tcp_discount_amt`, `c_tcp`, `c_vat_amount`, `c_net_tcp`, `c_reservation`, `c_payment_type1`, `c_payment_type2`, `c_down_percent`, `c_net_dp`, `c_no_payments`, `c_monthly_down`, `c_first_dp`, `c_full_down`, `c_amt_financed`, `c_terms`, `c_interest_rate`, `c_fixed_factor`, `c_monthly_payment`, `c_start_date`, `c_remarks`, `c_date_created`, `c_date_updated`, `c_created_by`, `c_verify`, `coo_approval`) VALUES
(38, 11000102, '2022-12-07', 'DELA CRUZ', 'JUDE', 'PANGILINAN', '', '', '', '0682 SANTOL', 'BALAGTAS, BULACAN', '3016', '', '', '1994-12-25', 27, 'M', '09561305511', '', '', 'Single', 'jaevoli@gmail.com', 'Employed', 120, 9000, 0, 0, 'Dahlia', 0, 0, 0, 0, 0, 0, 1080000, 0, 1080000, 0, 'Spot Cash', 'Monthly Amortization', 0, 0, 0, 0, 0, 0, 1080000, 0, 0, 0, 0, '2023-01-07', '', '2022-12-07 12:34:29', '2022-12-07 12:34:29', 'judedel', 1, 2),
(39, 14102332, '2022-12-07', 'DELA CRUZ', 'JUDE', 'PANGILINAN', '', '', '', '0682 SANTOL', 'BALAGTAS, BULACAN', '3016', '', '', '1994-12-25', 27, 'M', '09561305511', '', '', 'Single', 'jaevoli@gmail.com', 'Employed', 32, 23, 0, 0, 'Dahlia', 0, 0, 0, 0, 0, 0, 736, 0, 736, 12, 'Spot Cash', 'Monthly Amortization', 0, 0, 0, 0, 0, 0, 724, 0, 0, 0, 0, '2024-01-08', '', '2022-12-07 15:10:51', '2022-12-07 15:10:51', 'judedel', 1, 2),
(40, 13300102, '2022-12-07', 'DELA CRUZ', 'JUDE', 'PANGILINAN', '', '', '', '0682 SANTOL', 'BALAGTAS, BULACAN', '3016', '', '', '1994-12-25', 27, 'M', '09561305511', '', '', 'Single', 'jaevoli@gmail.com', 'Employed', 120, 12000, 0, 0, 'Dahlia', 0, 0, 0, 0, 0, 0, 1440000, 0, 1440000, 0, 'Spot Cash', 'Monthly Amortization', 0, 0, 0, 0, 0, 0, 1440000, 0, 0, 0, 0, '2022-12-28', '', '2022-12-07 15:32:40', '2022-12-07 15:32:40', 'judedel', 1, 2);

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
(69, '20', 'judedel', 'sample', '2022-12-05 11:35:32', 0),
(70, '20', 'judedel', 'sample2', '2022-12-05 11:35:43', 0);

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
(20, 105358, ' MA ', 'Aguilar , Donabel ', 31500, 3),
(21, 105358, ' MA ', 'Aguilar , Donabel ', 21000, 2),
(22, 105358, ' MA ', 'Aguilar , Donabel ', 240000, 2),
(23, 105358, ' MA ', 'Aguilar , Donabel ', 10800, 1),
(25, 105358, ' MA ', 'Aguilar , Donabel ', 10500, 1),
(26, 105610, ' MA ', 'Basilio , Irene ', 10500, 1),
(34, 100628, ' SM ', 'Bondoc , Remedios ', 15000, 1),
(35, 102727, ' JAV ', 'Basco , Sheila ', 10800, 1),
(36, 105610, ' MA ', 'Basilio , Irene ', 120000, 1),
(37, 105582, ' MA ', 'Alipio , Franklin ', 14400, 1),
(38, 105358, ' MA ', 'Aguilar , Donabel ', 10800, 1),
(39, 105358, ' MA ', 'Aguilar , Donabel ', 7.36, 1),
(40, 105610, ' MA ', 'Basilio , Irene ', 14400, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `t_csr_view`
-- (See below for the actual view)
--
CREATE TABLE `t_csr_view` (
`c_csr_no` bigint(20)
,`c_lot_lid` bigint(8)
,`c_date_of_sale` date
,`c_b1_last_name` text
,`c_b1_first_name` text
,`c_b1_middle_name` text
,`c_b2_last_name` text
,`c_b2_first_name` text
,`c_b2_middle_name` text
,`c_address` text
,`c_city_prov` text
,`c_zip_code` text
,`c_address_abroad` text
,`c_billing_address` text
,`c_birthday` date
,`c_age` int(11)
,`c_sex` text
,`c_mobile_no` text
,`c_mobile_abroad` text
,`c_viber_no` text
,`c_civil_status` text
,`c_email` text
,`c_employment_status` text
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
,`c_first_dp` double
,`c_full_down` double
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
,`c_acronym` text
,`c_site` smallint(6)
,`c_block` smallint(6)
,`c_lot` smallint(6)
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
(150, 5, 5, 15000505, '5', 5, 't', 'On Hold', NULL, NULL, NULL, NULL, NULL),
(141, 23, 32, 14102332, '32', 23, 'fe', 'Pre-Reserved', NULL, NULL, NULL, NULL, NULL),
(141, 1, 1, 14100101, '150', 7000, '', 'Reserved', NULL, NULL, NULL, NULL, NULL),
(110, 1, 3, 11000103, '120', 100000, 'Regular', 'Pre-Reserved', NULL, NULL, NULL, NULL, NULL),
(110, 1, 2, 11000102, '120', 9000, 'Corner Lot', 'Reserved', NULL, NULL, NULL, NULL, NULL),
(133, 1, 2, 13300102, '120', 12000, 'Regular Lot', 'Reserved', NULL, NULL, NULL, NULL, NULL),
(110, 10, 10, 11001010, '150', 10000, 'regular', 'Reserved', NULL, NULL, NULL, NULL, NULL);

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
  `id` int(11) NOT NULL,
  `ra_no` bigint(20) NOT NULL,
  `c_csr_no` bigint(20) NOT NULL,
  `c_lot_id` bigint(20) NOT NULL,
  `c_or_no` text NOT NULL,
  `c_reserve_date` date NOT NULL,
  `c_amount_paid` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Structure for view `t_csr_view`
--
DROP TABLE IF EXISTS `t_csr_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `t_csr_view`  AS SELECT `c`.`c_csr_no` AS `c_csr_no`, `c`.`c_lot_lid` AS `c_lot_lid`, `c`.`c_date_of_sale` AS `c_date_of_sale`, `c`.`c_b1_last_name` AS `c_b1_last_name`, `c`.`c_b1_first_name` AS `c_b1_first_name`, `c`.`c_b1_middle_name` AS `c_b1_middle_name`, `c`.`c_b2_last_name` AS `c_b2_last_name`, `c`.`c_b2_first_name` AS `c_b2_first_name`, `c`.`c_b2_middle_name` AS `c_b2_middle_name`, `c`.`c_address` AS `c_address`, `c`.`c_city_prov` AS `c_city_prov`, `c`.`c_zip_code` AS `c_zip_code`, `c`.`c_address_abroad` AS `c_address_abroad`, `c`.`c_billing_address` AS `c_billing_address`, `c`.`c_birthday` AS `c_birthday`, `c`.`c_age` AS `c_age`, `c`.`c_sex` AS `c_sex`, `c`.`c_mobile_no` AS `c_mobile_no`, `c`.`c_mobile_abroad` AS `c_mobile_abroad`, `c`.`c_viber_no` AS `c_viber_no`, `c`.`c_civil_status` AS `c_civil_status`, `c`.`c_email` AS `c_email`, `c`.`c_employment_status` AS `c_employment_status`, `c`.`c_lot_area` AS `c_lot_area`, `c`.`c_price_sqm` AS `c_price_sqm`, `c`.`c_lot_discount` AS `c_lot_discount`, `c`.`c_lot_discount_amt` AS `c_lot_discount_amt`, `c`.`c_house_model` AS `c_house_model`, `c`.`c_floor_area` AS `c_floor_area`, `c`.`c_house_price_sqm` AS `c_house_price_sqm`, `c`.`c_house_discount` AS `c_house_discount`, `c`.`c_house_discount_amt` AS `c_house_discount_amt`, `c`.`c_tcp_discount` AS `c_tcp_discount`, `c`.`c_tcp_discount_amt` AS `c_tcp_discount_amt`, `c`.`c_tcp` AS `c_tcp`, `c`.`c_vat_amount` AS `c_vat_amount`, `c`.`c_net_tcp` AS `c_net_tcp`, `c`.`c_reservation` AS `c_reservation`, `c`.`c_payment_type1` AS `c_payment_type1`, `c`.`c_payment_type2` AS `c_payment_type2`, `c`.`c_down_percent` AS `c_down_percent`, `c`.`c_net_dp` AS `c_net_dp`, `c`.`c_no_payments` AS `c_no_payments`, `c`.`c_monthly_down` AS `c_monthly_down`, `c`.`c_first_dp` AS `c_first_dp`, `c`.`c_full_down` AS `c_full_down`, `c`.`c_amt_financed` AS `c_amt_financed`, `c`.`c_terms` AS `c_terms`, `c`.`c_interest_rate` AS `c_interest_rate`, `c`.`c_fixed_factor` AS `c_fixed_factor`, `c`.`c_monthly_payment` AS `c_monthly_payment`, `c`.`c_start_date` AS `c_start_date`, `c`.`c_remarks` AS `c_remarks`, `c`.`c_date_created` AS `c_date_created`, `c`.`c_date_updated` AS `c_date_updated`, `c`.`c_created_by` AS `c_created_by`, `c`.`c_verify` AS `c_verify`, `c`.`coo_approval` AS `coo_approval`, `y`.`c_acronym` AS `c_acronym`, `x`.`c_site` AS `c_site`, `x`.`c_block` AS `c_block`, `x`.`c_lot` AS `c_lot` FROM ((`t_csr` `c` left join `t_lots` `x` on(`x`.`c_lid` = `c`.`c_lot_lid`)) left join `t_projects` `y` on(`y`.`c_code` = `x`.`c_site`))  ;

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
-- Indexes for table `t_approval_csr`
--
ALTER TABLE `t_approval_csr`
  ADD PRIMARY KEY (`ra_id`),
  ADD UNIQUE KEY `c_csr_no` (`c_csr_no`);

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
-- AUTO_INCREMENT for table `store_customers`
--
ALTER TABLE `store_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `t_approval_csr`
--
ALTER TABLE `t_approval_csr`
  MODIFY `ra_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `t_csr`
--
ALTER TABLE `t_csr`
  MODIFY `c_csr_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `t_csr_comments`
--
ALTER TABLE `t_csr_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `t_reservation`
--
ALTER TABLE `t_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
