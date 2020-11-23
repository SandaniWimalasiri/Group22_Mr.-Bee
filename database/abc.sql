-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 05:53 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `emp_status` varchar(7) NOT NULL DEFAULT 'manager'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`first_name`, `last_name`, `email`, `pwd`, `emp_status`) VALUES
('Shantha', 'Bandara', '  shantha@gmail.com', '1234', 'manager');

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
  `wbeehive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `wstatus` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cbeehive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noframes` int(50) NOT NULL,
  `disease` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `treatment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sqbee` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bcolony` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beehive`
--

INSERT INTO `beehive` (`BeehiveRecNo`, `userID`, `beehiveno`, `sdate`, `idate`, `itime`, `actstatus`, `wbeehive`, `wstatus`, `cbeehive`, `noframes`, `disease`, `treatment`, `sqbee`, `bcolony`) VALUES
(1, 3, 1, '2020-07-07', '2020-11-01', '08:59:00.00', 'Neutral', '22', 'Humidity: 81%\r\nWind: 6Km/h', 'Transfer bees', 2, 'none', 'none', 'No fresh eggs provided', 10),
(2, 3, 2, '2020-11-03', '2020-11-09', '09:43:00.00', 'Active', '21.34', 'Humidity: 78%\r\nWind: 5.3Km/h', 'Transfer bees', 4, 'none', 'none', 'Fresh eggs provided', 13),
(3, 3, 3, '2020-11-06', '2020-11-07', '16:09:00.00', 'Inactive', '21.5', 'Humidity: 68%\r\nWind: 4.3Km/h', 'neutral', 3, 'none', 'none', 'Mated queen introduced', 22);

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
(1, 'anupama', 'anupama sellahannadi', '3/2, Artigala, Godagama', 'a98@gmail.com', 112456723, '123', 0),
(2, 'kamal', 'Kamal Peris', '2/33, Udagewaththa, Godagama', 'kamal3@gmail.com', 114587233, '1289', 0),
(3, 'madhavi', 'Madhavi Sellahannadi', '54/33, IsuruUyana, Watareka, Meegoda', 'msellahannadi@gmail.com', 113456789, '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `div_manager`
--

CREATE TABLE `div_manager` (
  `div_id` varchar(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL DEFAULT 'div_man@123',
  `emp_status` varchar(25) NOT NULL DEFAULT 'Divisional_Manager',
  `div_code` varchar(10) NOT NULL,
  `no_employee` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `div_manager`
--

INSERT INTO `div_manager` (`div_id`, `first_name`, `last_name`, `email`, `pwd`, `emp_status`, `div_code`, `no_employee`, `is_deleted`) VALUES
('10', 'sample', 'sample123', 'sample', 'div_man@123', 'Divisional_Manager', '123', 10, 1),
('56', 'Sandani3', 'Wimalasiri12', 'sandanihgjwimalasiri@gmail.com', 'div_man@123', '     Divisional_Manager', 's2', 12, 0),
('57', 'Sandani', 'Wimsssalasiri', 'sssssandaniwimalasiri@gmail.com', 'div_man@123', 'Divisional_Manager', '16', 23, 0),
('D101', 'Lasith', 'Perera', 'lasithperera@gmail.com', 'div_man@123', '   Divisional_Manager', 'D/R/220', 1, 1),
('D102', 'Lasith123', 'Disanayaka', 'disanayaka@gmail.com', 'div_man@123', '  Divisional_Manager', 'D/R/420', 8, 1),
('D103', 'prasanna', 'silva', 'prasanna@gmail.com', 'div_man@123', ' Divisional_Manager', '12', 2, 0),
('D104', 'Prabath', 'Gunathilaka', 'prabath@gmail.com', 'div_man@123', ' Divisional_Manager', 'D/R/783', 9, 0),
('D105', 'Sunil', 'Perera', 'sunil@gmail.com', 'div_man@123', 'Divisional_Manager', 'D/R/249', 2, 0);

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
  `famount` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feeding`
--

INSERT INTO `feeding` (`FeedingRecNo`, `userID`, `beehiveno`, `date`, `fdate`, `ftime`, `feedingtype`, `famount`) VALUES
(1, 3, 1, '2020-11-11', '2020-11-01', '09:08:00.00', 'Suger syrup (1+1 ratio)', '13 mg'),
(2, 3, 2, '2020-11-21', '2020-11-03', '16:11:00.00', 'Suger syrup (1+1 ratio)', '11.5 mg'),
(3, 3, 3, '2020-11-21', '2020-11-05', '16:12:00.00', 'Suger syrup (1+1 ratio)', '6.9 mg');

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
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`HarvestRecNo`, `userID`, `beehiveno`, `date`, `hdate`, `htime`, `producttype`, `amount`) VALUES
(1, 3, 1, '2020-11-11', '2020-11-01', '08:37:00.00', 'Raw Honey', '1.5 Kg'),
(2, 3, 1, '2020-11-11', '2020-11-02', '09:49:00.00', 'Raw Honey', '2 Kg'),
(3, 3, 2, '2020-11-11', '2020-11-01', '08:50:00.00', 'Raw Honey', '0.25 Kg');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Organic Bee Honey with Mixed Nuts', '<p>Pure Organic Bee Honey with Mixed Nuts of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Almonds, Macadamia nuts and Hazelnuts.</li>\r\n<li>Exquisite Taste.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '500.00', '0.00', 30, 'p1.jpg', '2020-11-21 17:55:22'),
(2, 'Organic Bee Honey with Sour Sup', '<p>Pure Organic Bee Honey with Sour Sup of Greatest Quality.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Sour Sup Taste.</li>\r\n<li>Exquisite Flavour.</li>\r\n<li>Filled with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health with Antioxidants.</li>\r\n</ul>', '450.00', '500.00', 25, 'p2.jpg', '2020-11-23 18:52:49'),
(3, 'Organic Bee Honey with Comb', '<p>Pure Organic Bee Honey with Honeycomb Included.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Honeycomb Taste.</li>\r\n<li>Exquisite Flavor.</li>\r\n<li>Rich with Essentials Nutrients.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '450.99', '500.00', 23, 'p3_1.jpg', '2020-11-20 18:47:56'),
(4, 'Organic Raw Bee Honey', '<p>Pure Organic Raw Bee Honey.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Unique Natural Honey Taste.</li>\r\n<li>Rich with Antioxidants.</li>\r\n<li>Enhances Your Good Health.</li>\r\n</ul>', '400.00', '420.00', 35, 'p0_7.jpg', '2020-11-25 17:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `div_manager`
--
ALTER TABLE `div_manager`
  ADD PRIMARY KEY (`div_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `div_code` (`div_code`);

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
  MODIFY `BeehiveRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beekeeper`
--
ALTER TABLE `beekeeper`
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feeding`
--
ALTER TABLE `feeding`
  MODIFY `FeedingRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `harvest`
--
ALTER TABLE `harvest`
  MODIFY `HarvestRecNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infohub`
--
ALTER TABLE `infohub`
  MODIFY `articleNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
