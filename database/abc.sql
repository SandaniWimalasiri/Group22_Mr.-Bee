-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 06:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `beehive`
--

CREATE TABLE `beehive` (
  `BeehiveRecNo` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `beehiveno` int(10) NOT NULL,
  `sdate` date NOT NULL,
  `idate` date NOT NULL,
  `itime` time(2) NOT NULL,
  `actstatus` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `temperament` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wbeehive` decimal(20,3) NOT NULL,
  `unit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `wstatus` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cbeehive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noframes` int(50) NOT NULL,
  `disease` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `treatment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sqbee` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bcolony` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beehive`
--

INSERT INTO `beehive` (`BeehiveRecNo`, `userID`, `beehiveno`, `sdate`, `idate`, `itime`, `actstatus`, `temperament`, `wbeehive`, `unit`, `wstatus`, `cbeehive`, `noframes`, `disease`, `treatment`, `sqbee`, `bcolony`, `is_deleted`, `date`) VALUES
(1, 3, 1, '2020-07-07', '2020-07-09', '08:59:00.00', 'Active', 'Calm', '1.354', 'Kg', 'Humidity: 81%\r\nWind: 6Km/h', 'Add', 2, 'none', 'none', 'No Fresh Eggs', 3, 0, '2020-07-12 18:30:00'),
(2, 3, 2, '2020-08-10', '2020-08-14', '09:43:00.00', 'Strongly Active', 'Calm', '3.546', 'Kg', 'Humidity: 68%\r\nWind: 4.7Km/h', 'Removal', 2, 'None', 'None', ' Queen Cell Introduced', 4, 0, '2020-08-17 18:30:00'),
(3, 3, 3, '2020-09-16', '2020-09-18', '16:09:00.00', 'Strongly Active', 'Calm', '22.000', 'g', 'Humidity: 68%\r\nWind: 4.3Km/h', 'neutral', 3, 'none', 'none', 'Missing', 3, 1, '2020-09-23 18:30:00'),
(4, 4, 1, '2020-07-09', '2021-03-08', '17:23:00.00', 'Strongly Active', 'Calm', '1.256', 'g', 'Humidity: 58% \r\nWind: 4.2Km/h', 'Switch', 1, 'None', 'None', 'No Fresh Eggs', 3, 0, '2021-03-10 18:30:00'),
(5, 3, 1, '2020-07-07', '2020-08-21', '22:02:00.00', 'Strongly Active', 'Calm', '1.987', 'Kg', 'Humidity: 48% \r\nWind: 4.0Km/h', 'Add', 2, 'None', 'None', 'Missing', 4, 0, '2021-01-02 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `beekeeper`
--

CREATE TABLE `beekeeper` (
  `userID` int(20) NOT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userTele` int(20) NOT NULL,
  `userPassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Beekeeper@123',
  `div_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beekeeper`
--

INSERT INTO `beekeeper` (`userID`, `userName`, `fullName`, `userAddress`, `userEmail`, `userTele`, `userPassword`, `div_id`, `is_deleted`) VALUES
(1, 'Anupama', 'Anupama Sellahannadi', ' 3/2, Artigala, Godagama', 'anupama98@gmail.com', 112456724, 'Anupama98', 1, 0),
(2, 'Kamal', 'Kamal Peris', '2/33, Udagewaththa, Godagama', 'kamal3@gmail.com', 114587233, 'KAMAL@11a', 1, 0),
(3, 'Madhavi', 'Madhavi Sellahannadi', '54/33, IsuruUyana, Watareka, Meegoda', 'msellahannadi@gmail.com', 113456789, 'Madhavi98', 1, 0),
(4, 'Ranmini', 'Ranmini Nisansa', 'No 1/5, Galagedara, Padukka.', 'ranminNi@gmail.com', 112343451, 'RanminiP@rera98', 1, 0),
(5, 'Nirmani', 'Gamage', ' no:36, dickwella, Matara', 'nir123@gmail.com', 114573256, 'W234dr', 2, 0),
(6, 'Kalpa', 'Perera', '28,Maddawaththa,silva Lane,Matara', 'kkperera@gmail.com', 712256842, 'KaL86@', 2, 0),
(7, 'Nihal', 'Perera', '28,Ilma road,Hakmana.', 'nperea12@gmail.com', 112846842, 'niHal98', 2, 0),
(8, 'sewwandi', 'sewwandi perera', 'n0:23, yakkala Rd, Galle', 'vindysilva96@gmail.com', 769834628, 'Beekeeper@123', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `userAddress` varchar(200) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userTele` varchar(10) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `username`, `fullname`, `userAddress`, `userEmail`, `userTele`, `userPassword`) VALUES
(1, 'sandani', 'sandani wimalasiri', 'no 26, 5th lane, weraduwa,Matara.', 'sandani@gmail.com', '0719876541', 'sandani1996'),
(2, 'ishara', 'Ishara Wijekoon', 'no: 32, Digana, Kandy', 'ishara1996@gmail.com', '0712299865', 'Kmd9t32');

-- --------------------------------------------------------

--
-- Table structure for table `div_manager`
--

CREATE TABLE `div_manager` (
  `div_id` int(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tp` varchar(10) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `pwd` varchar(100) NOT NULL DEFAULT 'Div_man@123',
  `emp_status` varchar(25) NOT NULL DEFAULT 'Divisional_Manager',
  `division` varchar(25) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `div_manager`
--

INSERT INTO `div_manager` (`div_id`, `first_name`, `last_name`, `email`, `tp`, `addr`, `pwd`, `emp_status`, `division`, `is_deleted`) VALUES
(1, 'Lasith', 'Perera', 'lasithperera@gmail.com', '0711234566', 'no 34/A, Godagama road,colombo.', 'Div_man@123', 'Divisional_Manager', 'Colombo', 1),
(2, 'Lasith', 'Disanayaka', 'disanayaka@gmail.com', '0711234561', '26/5, Nadun uyana, weraduwa, Matara', 'Div_man@123', 'Divisional_Manager', 'Matara', 0),
(4, 'Sanath', 'Dasanyaka', 'sanath65@gmail.com', '0762348621', 'n034/A,dikpitiya,Galle', 'Div_man@123', 'Divisional_Manager', 'Galle', 0),
(5, 'Saman', 'Amarakoon', 'amarakoon12@gmail.com', '0112354678', '23,Isadeen road,Ampara', 'Div_man@123', 'Divisional_Manager', 'Ampara', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feeding`
--

CREATE TABLE `feeding` (
  `FeedingRecNo` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `beehiveno` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `fdate` date NOT NULL,
  `ftime` time(2) NOT NULL,
  `feedingtype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `famount` decimal(20,3) NOT NULL,
  `unit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feeding`
--

INSERT INTO `feeding` (`FeedingRecNo`, `userID`, `beehiveno`, `date`, `fdate`, `ftime`, `feedingtype`, `famount`, `unit`, `is_deleted`) VALUES
(1, 3, 1, '2020-07-08 18:30:00', '2020-07-07', '09:08:00.00', 'Suger Syrup (1+1 ratio)', '3.214', 'mg', 0),
(2, 3, 1, '2021-01-04 18:30:00', '2020-07-10', '16:11:00.00', 'Suger Syrup (1+1 ratio)', '12.125', 'g', 0),
(3, 2, 3, '2020-10-20 18:30:00', '2020-10-07', '16:12:00.00', 'Suger Syrup (1+1 ratio)', '7.372', 'mg', 0),
(4, 3, 2, '2020-08-15 18:30:00', '2020-08-12', '13:58:00.00', 'Suger Syrup (1+1 ratio)', '2.546', 'mg', 0),
(5, 3, 1, '2021-03-25 18:30:00', '2021-03-11', '12:21:00.00', 'Suger Syrup (1+1 ratio)', '1.897', 'mg', 1),
(6, 3, 1, '2021-03-27 18:30:00', '2021-03-16', '13:10:00.00', 'Suger Syrup (1+1 ratio)', '1.114', 'mg', 0),
(7, 3, 4, '2020-12-15 18:30:00', '2020-12-09', '10:11:00.00', 'Suger Syrup (1+1 ratio)', '1.325', 'g', 1),
(8, 3, 1, '2021-03-30 18:30:00', '2021-03-16', '07:49:00.00', 'qq', '0.002', 'Kg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE `harvest` (
  `HarvestRecNo` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `beehiveno` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `hdate` date NOT NULL,
  `htime` time(2) NOT NULL,
  `producttype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(20,3) NOT NULL,
  `unit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`HarvestRecNo`, `userID`, `beehiveno`, `date`, `hdate`, `htime`, `producttype`, `amount`, `unit`, `is_deleted`) VALUES
(1, 3, 1, '2021-01-02 18:30:00', '2020-11-01', '08:37:00.00', 'Raw Honey', '2.134', 'Kg', 0),
(2, 2, 1, '2020-11-10 18:30:00', '2020-11-02', '09:49:00.00', 'Royal Gel', '1.724', 'Kg', 0),
(3, 3, 2, '2020-11-10 18:30:00', '2020-11-01', '08:50:00.00', 'Bee Colonies', '2.000', '', 0),
(4, 2, 2, '2021-03-15 18:30:00', '2021-03-08', '16:15:00.00', 'Raw Honey', '2.000', 'Kg', 0),
(5, 2, 2, '2021-03-15 18:30:00', '2021-03-08', '16:15:00.00', 'Raw Honey', '2.000', 'Kg', 0),
(6, 4, 1, '2021-03-27 18:30:00', '2021-03-08', '14:47:00.00', 'Royal Gel', '8.341', 'Kg', 0),
(7, 3, 1, '2021-03-27 18:30:00', '2021-03-17', '10:31:00.00', 'Bee Colonies', '3.000', ' ', 1),
(8, 3, 2, '2021-03-28 18:30:00', '2021-03-15', '16:29:00.00', 'Royal Gel', '3.092', 'Kg', 0),
(9, 3, 1, '2021-03-30 18:30:00', '2021-03-17', '07:45:00.00', 'Raw Honey', '0.001', 'Kg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `infohub`
--

CREATE TABLE `infohub` (
  `articleNo` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `date` date NOT NULL,
  `authorname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `articlename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infohub`
--

INSERT INTO `infohub` (`articleNo`, `userID`, `date`, `authorname`, `articlename`, `content`) VALUES
(1, 3, '2020-07-22', 'Madhavi Sellahannadi', 'BEEKEEPING', 'Beekeeping (or apiculture) is the maintenance of bee colonies, commonly in man-made hives, by humans. Most such bees are honey bees in the genus Apis, but other honey-producing bees such as Melipona stingless bees are also kept.'),
(2, 3, '2020-07-24', 'Madhavi Sellahannadi', 'Honey bee colony\r\n', 'Honey bees are social insects that live in colonies. Honey bee colonies consist of a single queen, hundreds of male drones, and 20,000 to 80,000 female worker bees. Each honey bee colony also consists of developing eggs, larvae, and pupae.\r\n\r\nThe number of individuals within a honey bee colony depends largely upon seasonal changes. A colony could reach up to 80,000 individuals during the active season, when workers forage for food, store honey for winter, and build combs. However, this population will decrease dramatically during colder seasons.'),
(3, 3, '2020-07-29', 'Madhavi Sellahannadi', 'Honey Bee', 'A honey bee (also spelled honeybee) is a eusocial flying insect within the genus Apis of the bee clade, all native to Eurasia but spread to four other continents by human beings. They are known for their construction of perennial colonial nests from wax, the large size of their colonies, and surplus production and storage of honey, distinguishing their hives as a prized foraging target of many animals, including honey badgers, bears, and human hunter-gatherers. Only eight surviving species of honey bee are recognized, with a total of 43 subspecies, though historically 7 to 11 species are recognized. Honey bees represent only a small fraction of the roughly 20,000 known species of bees.'),
(4, 3, '2020-11-11', 'sandani vindya', 'what are bee stings good for', 'Bee venom has powerful anti-inflammatory properties and may benefit the health of your skin and immune system. It may also improve certain medical conditions like rheumatoid arthritis and chronic pain.'),
(5, 4, '2021-03-28', 'Ranmini Nisansa', 'What does a Beekeeper do?', 'If you love the outdoors, nature and animals, and are curious about how creatures contribute to our environment, then you\'ll probably be very intrigued by honey bees. If you like the idea of harvesting your own honey, and farming on a small scale, then chances are you\'ll enjoy being a beekeeper.');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `tp` varchar(10) NOT NULL,
  `emp_status` varchar(7) NOT NULL DEFAULT 'manager',
  `addr` varchar(50) NOT NULL,
  `ctp` varchar(10) NOT NULL,
  `a_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`first_name`, `last_name`, `email`, `pwd`, `tp`, `emp_status`, `addr`, `ctp`, `a_email`) VALUES
('Sunil', 'Gamage', 'sunilG123@gmail.com', 'Sunil123@', '0767347899', 'manager', 'Nature bee honey company, Digana, Kandy.', '0232289456', ' mrbeemanager@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` int(100) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tp` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `complete_date` date NOT NULL,
  `od_status` varchar(100) NOT NULL DEFAULT 'on-going'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_name`, `product_id`, `cus_name`, `customer_id`, `address`, `email`, `tp`, `order_date`, `complete_date`, `od_status`) VALUES
(1, 'Organic Raw Bee Honey', 4, 'ishara', 2, '	\r\nno32, digana, kandy.', 'ishara1996@gmail.com', 712299865, '2021-03-01', '2021-03-29', 'completed'),
(2, 'Organic Bee Honey with Comb', 3, 'sample', 16, 'sample', 'sample@gmail.com', 719834567, '2021-03-08', '2021-03-22', 'completed'),
(3, 'Organic Bee Honey with Sour Sup', 2, 'Sandani', 1, 'no 26, 5th lane, weraduwa,Matara', 'sandani@gmail.com', 719876541, '2021-03-15', '0000-00-00', 'on-going');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `descr`, `price`, `rrp`, `quantity`, `img`, `date_added`, `is_deleted`) VALUES
(1, 'Organic Bee Honey with Nuts', '<p>Pure Organic Bee Honey with Mixed Nuts of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Almonds, Macadamia nuts and Hazelnuts.</li>\r\n<li>Exquisite Taste.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '450.00', '600.00', 30, 'p1.jpg', '2020-11-21 17:55:22', 0),
(2, 'Organic Bee Honey with Sour Sup', '<p>Pure Organic Bee Honey with Sour Sup of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Sour Sup Taste.</li>\r\n<li>Exquisite Flavour.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health with Antioxidants.</li>\r\n</ul>', '450.00', '500.00', 25, 'p2.jpg', '2020-11-23 18:52:49', 0),
(3, 'Organic Bee Honey with Comb', '<p>Pure Organic Bee Honey with Honeycomb Included.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Honeycomb Taste.</li>\r\n<li>Exquisite Flavor.</li>\r\n<li>Rich with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '450.99', '500.00', 23, 'p3_1.jpg', '2020-11-20 18:47:56', 1),
(4, 'Organic Raw Bee Honey', '<p>Pure Organic Raw Bee Honey.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Natural Honey Taste.</li>\r\n<li>Rich with Antioxidants.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '400.00', '420.00', 35, 'p0_7.jpg', '2020-11-25 17:42:04', 0),
(6, 'Pure raw bee honey jar', 'weight 300g. Honey is preserve in its purest natural form. Rich with Antioxidants.\r\nEnhances Your Good Health.', '700.00', '800.00', 3, 'raw bee.jpg', '2021-03-30 00:47:34', 0),
(8, 'Cinnamon Bee Honey', '250g\r\nConsuming honey and cinnamon on a regular basis can boost your immune system and protect you from foreign bacteria and viruses.', '900.00', '950.00', 2, 'cinnamon.jpg', '2021-03-31 14:06:33', 0),
(10, ' Garlic Bee Honey', 'Both garlic and honey are high in antioxidant compounds. These healthy chemicals help to balance your immune system and prevent illness.', '700.00', '850.00', 4, '', '2021-03-31 14:11:06', 1),
(11, ' Garlic Bee Honey-300g', 'Both garlic and honey are high in antioxidant compounds. These healthy chemicals help to balance your immune system and prevent illness.', '700.00', '750.00', 2, 'garlic.jpg', '2021-03-31 14:14:14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beehive`
--
ALTER TABLE `beehive`
  ADD PRIMARY KEY (`BeehiveRecNo`);

--
-- Indexes for table `beekeeper`
--
ALTER TABLE `beekeeper`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `div_manager`
--
ALTER TABLE `div_manager`
  ADD PRIMARY KEY (`div_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tp` (`tp`);

--
-- Indexes for table `feeding`
--
ALTER TABLE `feeding`
  ADD PRIMARY KEY (`FeedingRecNo`);

--
-- Indexes for table `harvest`
--
ALTER TABLE `harvest`
  ADD PRIMARY KEY (`HarvestRecNo`);

--
-- Indexes for table `infohub`
--
ALTER TABLE `infohub`
  ADD PRIMARY KEY (`articleNo`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beehive`
--
ALTER TABLE `beehive`
  MODIFY `BeehiveRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `beekeeper`
--
ALTER TABLE `beekeeper`
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `div_manager`
--
ALTER TABLE `div_manager`
  MODIFY `div_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feeding`
--
ALTER TABLE `feeding`
  MODIFY `FeedingRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `harvest`
--
ALTER TABLE `harvest`
  MODIFY `HarvestRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infohub`
--
ALTER TABLE `infohub`
  MODIFY `articleNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
