-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 06:54 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `wbeehive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `wstatus` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cbeehive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noframes` int(50) NOT NULL,
  `disease` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `treatment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sqbee` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bcolony` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beehive`
--

INSERT INTO `beehive` (`BeehiveRecNo`, `userID`, `beehiveno`, `sdate`, `idate`, `itime`, `actstatus`, `temperament`, `wbeehive`, `unit`, `wstatus`, `cbeehive`, `noframes`, `disease`, `treatment`, `sqbee`, `bcolony`, `is_deleted`, `date`) VALUES
(1, 3, 1, '2020-07-07', '2020-11-01', '08:59:00.00', 'Strongly Active', 'Calm', '22', 'g', 'Humidity: 81%\r\nWind: 6Km/h', 'Transfer bees', 2, 'none', 'none', 'Missing', 9, 0, '2020-10-26'),
(2, 3, 2, '2020-11-03', '2020-11-09', '09:43:00.00', 'Strongly Active', 'Calm', '21.34', 'Kg', 'Humidity: 78%\r\nWind: 5.3Km/h', 'Removal', 4, 'none', 'none', 'Missing', 13, 0, '2021-03-26'),
(3, 3, 3, '2020-11-06', '2020-11-07', '16:09:00.00', 'Strongly Active', 'Calm', '21.5', 'g', 'Humidity: 68%\r\nWind: 4.3Km/h', 'neutral', 3, 'none', 'none', 'Missing', 22, 1, '2021-03-26'),
(5, 3, 1, '2021-03-10', '2021-03-08', '17:23:00.00', 'Strongly Active', 'Calm', '222', 'g', '222', '22', 2, '22', '22', 'Missing', 222, 0, '0000-00-00');

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
  `userPassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `userRole` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beekeeper`
--

INSERT INTO `beekeeper` (`userID`, `userName`, `fullName`, `userAddress`, `userEmail`, `userTele`, `userPassword`, `userRole`) VALUES
(1, 'anupama', 'anupama sellahannadi', ' 3/2, Artigala, Godagama', 'a98@gmail.com', 112456724, 'anupama98', 0),
(2, 'kamal', 'Kamal Peris', '2/33, Udagewaththa, Godagama', 'kamal3@gmail.com', 114587233, '1289', 0),
(3, 'madhavi', 'Madhavi Sellahannadi', '54/33, IsuruUyana, Watareka, Meegoda', 'msellahannadi@gmail.com', 113456789, 'madhavi98', 0);

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
  `userTele` int(20) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `username`, `fullname`, `userAddress`, `userEmail`, `userTele`, `userPassword`) VALUES
(1, 'sandani', 'sandani wimalasiri', 'no 26, 5th lane, weraduwa,Matara.', 'sandaniwimalasiri@gmail.com', 719876541, 'sandani1996');

-- --------------------------------------------------------

--
-- Table structure for table `div_manager`
--

CREATE TABLE `div_manager` (
  `div_id` int(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tp` int(10) NOT NULL,
  `pwd` varchar(100) NOT NULL DEFAULT 'div_man@123',
  `emp_status` varchar(25) NOT NULL DEFAULT 'Divisional_Manager',
  `division` varchar(20) NOT NULL,
  `no_employee` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `div_manager`
--

INSERT INTO `div_manager` (`div_id`, `first_name`, `last_name`, `email`, `tp`, `pwd`, `emp_status`, `division`, `no_employee`, `is_deleted`) VALUES
(1, 'Lasith', 'Perera', 'lasithperera@gmail.com', 711234566, 'div_man@123', '   Divisional_Manager', 'Matara', 1, 1),
(2, 'Lasith', 'Disanayaka', 'disanayaka@gmail.com', 711234567, 'div_man@123', '  Divisional_Manager', 'Ampara', 8, 0),
(3, 'prasanna', 'silva', 'prasanna@gmail.com', 711234568, 'div_man@123', ' Divisional_Manager', 'Gampaha', 2, 0),
(4, 'Prabath', 'Gunathilaka', 'prabath@gmail.com', 711234569, 'div_man@123', ' Divisional_Manager', 'Hambantota', 9, 0),
(5, 'Sunil', 'Perera', 'sunil@gmail.com', 711234561, 'div_man@123', 'Divisional_Manager', 'Colombo', 2, 0),
(6, 'sandani', 'vindya', 'sandani@gmail.com', 719874581, 'div_man@123', 'Divisional_Manager', 'Nuwara Eliya', 10, 0),
(8, 'kamala', 'silva', 'kamala@gmail.com', 719874567, 'div_man@123', 'Divisional_Manager', 'Anuradhapu', 2, 0),
(9, 'kamal', 'weerasinha', 'kamal@gmail.com', 911234567, 'div_man@123', 'Divisional_Manager', 'Batticaloa', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feeding`
--

CREATE TABLE `feeding` (
  `FeedingRecNo` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `beehiveno` int(10) NOT NULL,
  `date` date NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time(2) NOT NULL,
  `feedingtype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `famount` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feeding`
--

INSERT INTO `feeding` (`FeedingRecNo`, `userID`, `beehiveno`, `date`, `fdate`, `ftime`, `feedingtype`, `famount`, `unit`, `is_deleted`) VALUES
(1, 3, 1, '2020-11-11', '2020-11-01', '09:08:00.00', 'Suger syrup (1+1 ratio)', '13 ', 'mg', 0),
(2, 3, 2, '2020-11-21', '2020-11-03', '16:11:00.00', 'Suger syrup (1+1 ratio)', '11.5', 'mg', 0),
(3, 3, 3, '2020-11-21', '2020-11-05', '16:12:00.00', 'Suger syrup (1+1 ratio)', '6.9 mg', '', 1),
(4, 3, 1, '2021-03-25', '2021-03-11', '13:58:00.00', 'Suger syrup (1+1 ratio)', '1', 'Kg', 0),
(5, 3, 1, '2021-03-26', '2021-03-11', '12:21:00.00', 'Suger syrup (1+1 ratio)', '11', 'Kg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE `harvest` (
  `HarvestRecNo` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `beehiveno` int(10) NOT NULL,
  `date` date NOT NULL,
  `hdate` date NOT NULL,
  `htime` time(2) NOT NULL,
  `producttype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`HarvestRecNo`, `userID`, `beehiveno`, `date`, `hdate`, `htime`, `producttype`, `amount`, `unit`, `is_deleted`) VALUES
(1, 3, 1, '2020-11-11', '2020-11-01', '08:37:00.00', 'Raw Honey', '2', 'Kg', 0),
(2, 3, 1, '2020-11-11', '2020-11-02', '09:49:00.00', 'Raw Honey', '1', 'Kg', 0),
(3, 3, 2, '2020-11-11', '2020-11-01', '08:50:00.00', 'Bee Colonies', '0.25 Kg', '', 1);

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
(1, 3, '2020-07-22', 'Madhavi Anupama', 'BEEKEEPING', 'Beekeeping (or apiculture) is the maintenance of bee colonies, commonly in man-made hives, by humans. Most such bees are honey bees in the genus Apis, but other honey-producing bees such as Melipona stingless bees are also kept.'),
(2, 3, '2020-07-24', 'M. A. Sellahannadi', 'Honey bee colony\r\n', 'Honey bees are social insects that live in colonies. Honey bee colonies consist of a single queen, hundreds of male drones, and 20,000 to 80,000 female worker bees. Each honey bee colony also consists of developing eggs, larvae, and pupae.\r\n\r\nThe number of individuals within a honey bee colony depends largely upon seasonal changes. A colony could reach up to 80,000 individuals during the active season, when workers forage for food, store honey for winter, and build combs. However, this population will decrease dramatically during colder seasons.'),
(3, 3, '2020-07-29', 'Madhavi Sellahannadi', 'Honey Bee', 'A honey bee (also spelled honeybee) is a eusocial flying insect within the genus Apis of the bee clade, all native to Eurasia but spread to four other continents by human beings. They are known for their construction of perennial colonial nests from wax, the large size of their colonies, and surplus production and storage of honey, distinguishing their hives as a prized foraging target of many animals, including honey badgers, bears, and human hunter-gatherers. Only eight surviving species of honey bee are recognized, with a total of 43 subspecies, though historically 7 to 11 species are recognized. Honey bees represent only a small fraction of the roughly 20,000 known species of bees.'),
(4, 3, '2020-11-11', 'sandani vindya', 'what are bee stings good for', 'Bee venom has powerful anti-inflammatory properties and may benefit the health of your skin and immune system. It may also improve certain medical conditions like rheumatoid arthritis and chronic pain.');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `tp` int(10) NOT NULL,
  `emp_status` varchar(7) NOT NULL DEFAULT 'manager'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`first_name`, `last_name`, `email`, `pwd`, `tp`, `emp_status`) VALUES
('Shantha', 'Bandara', 'shantha@gmail.com', 'admin', 711234523, 'manager');

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
(1, 'Organic Bee Honey with Mixed Nuts', '<p>Pure Organic Bee Honey with Mixed Nuts of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Almonds, Macadamia nuts and Hazelnuts.</li>\r\n<li>Exquisite Taste.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '500.00', '0.00', 30, 'p1.jpg', '2020-11-21 17:55:22', 0),
(2, 'Organic Bee Honey with Sour Sup', '<p>Pure Organic Bee Honey with Sour Sup of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Sour Sup Taste.</li>\r\n<li>Exquisite Flavour.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health with Antioxidants.</li>\r\n</ul>', '450.00', '500.00', 25, 'p2.jpg', '2020-11-23 18:52:49', 0),
(3, 'Organic Bee Honey with Comb', '<p>Pure Organic Bee Honey with Honeycomb Included.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Honeycomb Taste.</li>\r\n<li>Exquisite Flavor.</li>\r\n<li>Rich with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '450.99', '500.00', 23, 'p3_1.jpg', '2020-11-20 18:47:56', 0),
(4, 'Organic Raw Bee Honey', '<p>Pure Organic Raw Bee Honey.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Natural Honey Taste.</li>\r\n<li>Rich with Antioxidants.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '400.00', '420.00', 35, 'p0_7.jpg', '2020-11-25 17:42:04', 0),
(8, 'sample ', 'dsddddsddsdsd', '250.00', '200.00', 20, 'honey5.jpg', '2020-11-24 04:56:57', 0);

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
  ADD UNIQUE KEY `div_code` (`division`),
  ADD UNIQUE KEY `tp` (`tp`),
  ADD UNIQUE KEY `division` (`division`);

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
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `div_manager`
--
ALTER TABLE `div_manager`
  MODIFY `div_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feeding`
--
ALTER TABLE `feeding`
  MODIFY `FeedingRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `harvest`
--
ALTER TABLE `harvest`
  MODIFY `HarvestRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infohub`
--
ALTER TABLE `infohub`
  MODIFY `articleNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
