-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2020 at 05:03 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_store_database`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `deleterat`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleterat` (IN `gid` INT(10))  DELETE FROM ratings WHERE game_id=gid$$

DROP PROCEDURE IF EXISTS `get_avg`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_avg` ()  SELECT games.game_id,games.name,ratings.ign_rating,ratings.metacritic_rating,ratings.platform_rating,ROUND(((ratings.ign_rating+ratings.metacritic_rating+ratings.platform_rating)/3), 1) AS average_rating FROM ratings,games WHERE games.game_id=ratings.game_id GROUP BY game_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(8) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `gid` int(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6869 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `phone_no`, `gid`) VALUES
(1, 'Shreevadan', 'Bangalore', '9148300312', 1),
(2, 'Shoaib', 'Bangalore', '9786756433', 5),
(3, 'john', 'delhi', '9876436545', 6),
(10, 'abc', 'abs', '72398', 1),
(6868, 'ddsdf', 'sfdsaf', '75745', 1);

--
-- Triggers `customer`
--
DROP TRIGGER IF EXISTS `PurchaseHistory`;
DELIMITER $$
CREATE TRIGGER `PurchaseHistory` AFTER INSERT ON `customer` FOR EACH ROW insert into `purchase`(`purchase_id`, `game_id`, `customer_id`, `date_of_purchase`)
values(null,NEW.gid, new.customer_id,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

DROP TABLE IF EXISTS `developer`;
CREATE TABLE IF NOT EXISTS `developer` (
  `dev_id` int(8) NOT NULL AUTO_INCREMENT,
  `dev_name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `game_engine` varchar(10) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`dev_id`, `dev_name`, `address`, `phone_no`, `game_engine`) VALUES
(1, 'Valve', 'Bellevue', '8263272798', 'Source 2'),
(2, 'Electronic Arts', 'Redwood City', '9789774237', 'Frostbite'),
(3, 'Activision', 'Santa Monica', '4235465785', 'IW Engine'),
(4, 'Ubisoft', 'Montreuil', '8932792737', 'AnvilNext'),
(5, 'Tencent', 'Shenzhen', '8473984796', 'Unreal'),
(6, 'Square Enix', 'Shinjuku', '9747645634', 'Luminous'),
(7, 'Nintendo', 'Kyoto', '9754657648', 'Unreal');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `year_of_release` int(4) NOT NULL,
  `price` int(6) NOT NULL,
  `dev_id` int(8) NOT NULL,
  `platform_id` int(8) NOT NULL,
  PRIMARY KEY (`game_id`),
  KEY `dev_id` (`dev_id`),
  KEY `platform_id` (`platform_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `name`, `category`, `year_of_release`, `price`, `dev_id`, `platform_id`) VALUES
(1, 'CSGO', 'Action', 2011, 599, 1, 1),
(2, 'Dota 2', 'Strategy', 2014, 399, 1, 1),
(3, 'Fifa 17', 'Sports', 2017, 2999, 2, 3),
(4, 'PUBG', 'Action', 2016, 999, 5, 4),
(5, 'Just cause 3', 'Action', 2015, 1999, 6, 2),
(6, 'Zelda', 'RPG', 2016, 1999, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

DROP TABLE IF EXISTS `platform`;
CREATE TABLE IF NOT EXISTS `platform` (
  `platform_id` int(8) NOT NULL AUTO_INCREMENT,
  `platform_name` varchar(20) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `variant` varchar(10) NOT NULL,
  PRIMARY KEY (`platform_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`platform_id`, `platform_name`, `brand`, `variant`) VALUES
(1, 'Windows', 'Microsoft', '10'),
(2, 'Playstation', 'Sony', '4'),
(3, 'Xbox', 'Microsoft', 'One'),
(4, 'Android', 'Google', 'Oreo'),
(5, 'Switch', 'Nintendo', '1.1');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(8) NOT NULL AUTO_INCREMENT,
  `game_id` int(8) DEFAULT NULL,
  `customer_id` int(8) NOT NULL,
  `date_of_purchase` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`purchase_id`),
  KEY `game_id` (`game_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `game_id`, `customer_id`, `date_of_purchase`) VALUES
(11, 1, 1, '2019-11-25 15:53:34'),
(12, 5, 2, '2019-11-25 15:54:23'),
(13, 6, 3, '2019-11-25 15:56:26'),
(14, 1, 10, '2019-12-12 12:41:57'),
(15, 1, 6868, '2020-04-09 22:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `game_id` int(8) NOT NULL,
  `ign_rating` float NOT NULL,
  `metacritic_rating` float NOT NULL,
  `platform_rating` float NOT NULL,
  `average_rating` float DEFAULT NULL,
  PRIMARY KEY (`game_id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`game_id`, `ign_rating`, `metacritic_rating`, `platform_rating`, `average_rating`) VALUES
(1, 9.2, 8.9, 9.8, NULL),
(2, 9.1, 9.1, 9.6, NULL),
(3, 7.2, 7.8, 8.3, NULL),
(4, 7.9, 8.3, 9, NULL),
(5, 8.7, 8.5, 7.9, NULL),
(6, 5, 3, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(4, 'user', '$2y$10$redzNfbMfcQmO17zb2/KC.HG6j4wKN4WAJtiFsEZi4ILYcXPqNDA6', '2019-11-10 09:12:59'),
(5, 'anu', '$2y$10$T0mKiSQn9itEEXT5akDceONTOyP4VtA8erC0XU4Q5gz4W7mWO9RDe', '2020-04-09 22:35:35');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`dev_id`) REFERENCES `developer` (`dev_id`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`platform_id`) REFERENCES `platform` (`platform_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
