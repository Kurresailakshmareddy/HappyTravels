-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 02:23 PM
-- Server version: 5.5.58-0+deb7u1-log
-- PHP Version: 5.6.31-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unn_w21037098`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile_number`, `subject`, `message`) VALUES
(1, 'David', 'david@gmail.com', '+91 8756600566', 'Contact For Help', 'Testing message');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `password`, `fname`, `message`) VALUES
(1, 'kurresailakshmareddy@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f', 'Kurre Sai Lakshma Reddy', 'I am a student'),
(4, 'bhanureddyv1999@gmail.com', '32c88299414e2d56cbe43867073db659', 'bhanu', 'hi yeh!'),
(6, 'sekhar.0783@gmail.com', '35700651191a3e796ec2a2592d439028', 'sekhar', 'hi'),
(7, 'bsb541@gmail.com', '3e6a0966890c85a8ca932302ad6a2405', 'suri', ''),
(8, 'sruthivattikonda11@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Sruthi', 'hgfd'),
(13, 'ksudharani07@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f', 'Sudha Rani Kurre', 'hello'),
(14, 'lakshma@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f', 'lakshma', 'testing'),
(15, 'bsvinay916@gmail.com', 'b9b85ed9eb5847a5480d0842742e51e4', 'B. Subrahmanya Vinay', ''),
(16, 'lakshma16@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f', 'lakshma', ''),
(17, 'lakshma16@gmail.com', '585a32b10bf63cc329536ed8dbcb006a', 'lakshma', ''),
(18, 'kokila@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f', 'Kokila Kotha', 'i am student'),
(19, 'test123@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'test123', 'testingbio'),
(20, 'test.com', '16d7a4fca7442dda3ad93c9a726597e4', 'test12345', '&lt;script&gt;alert(document.cookie);&lt;/script&gt;'),
(21, 'test2345@test.com', '36f6404b576c568c2c6f66ca35f2a44d', 'test2345', '&lt;script&gt;alert(document.cookie);&lt;/script&gt;'),
(22, 'rohithgb1@gmail.com', '295f4620d96ae3891a40495fbe0b0f26', 'Rohith', ''),
(23, 'rohithgb1@gmail.com', '698d51a19d8a121ce581499d7b701668', 'Rohith', '');

-- --------------------------------------------------------

--
-- Table structure for table `customerbooking`
--

CREATE TABLE IF NOT EXISTS `customerbooking` (
`id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `place` text NOT NULL,
  `startdate` date NOT NULL,
  `endDate` date NOT NULL,
  `guest` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerbooking`
--

INSERT INTO `customerbooking` (`id`, `email`, `fname`, `place`, `startdate`, `endDate`, `guest`) VALUES
(1, 'kurresailakshmareddy@gmail.com', 'Kurre Sai Lakshma Reddy', 'Tower Bridge', '2022-12-07', '2022-12-20', 'One'),
(2, 'kurresailakshmareddy@gmail.com', 'Kurre Sai Lakshma Reddy', 'Westminster Abbey', '2022-12-27', '2022-12-28', 'One'),
(3, 'kurresailakshmareddy@gmail.com', 'lakshma', 'Buckingham Palace', '2022-12-07', '2022-12-08', 'Three'),
(4, 'kurresailakshmareddy@gmail.com', 'Kurre Sai Lakshma Reddy', 'Tower of London', '2022-12-28', '2022-12-30', 'One'),
(5, 'test1@test.com', 'test', 'London Eye', '2022-12-26', '2022-12-22', 'Three');

-- --------------------------------------------------------

--
-- Table structure for table `customercontact`
--

CREATE TABLE IF NOT EXISTS `customercontact` (
`id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `message` text NOT NULL
  `image_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customercontact`
--

INSERT INTO `customercontact` (`id`, `email`, `fname`, `message`,`image_name`) VALUES
(1, 'kurresailakshmareddy@gmail.com', 'Kurre Sai Lakshma Reddy', 'testing','12.jpg'),
(2, 'lakshma@gmail.com', 'lakshma lakshma', 'testing'),
(3, 'dffdfd', 'ffdfd', 'dffddf'),
(4, 'kokila@gmail.com', 'Kokil', 'testing'),
(5, 'kokila@gmail.com', 'kokil', 'testing'),
(6, 'kokila@gmail.com', 'kokila', 'testing'),
(7, 'kurresailakshmareddy@gmail.com', 'lakshma', 'testing'),
(8, 'kurresailakshmareddy@gmail.com', 'ksailakshmareddy', 'testing'),
(9, 'kokila@gmail.com', 'abcdferthq', 'testing'),
(10, 'rohithgb1@gmail.com', 'Rohith', 'tESTING 1'),
(11, 'rohithgb1@gmail.com', 'Rohith', 'WFYJETYEJSGFENJYJETYJSFGWHFWHJSGFWHSTRJHSWTRJWFTRJWRTJWFGTNWHSTRJWS5TRJWRTHSFGJSWTRJWSTRJWRTJWTRJWGBWSRTHWSTRHWSRTHJWSTRBRTHARTHWTRWSGFNSRTJHWSTGRNHSFGHJSRTJWRTJSFGWHJRT');

-- --------------------------------------------------------

--
-- Table structure for table `excursions`
--

CREATE TABLE IF NOT EXISTS `excursions` (
`excursionID` mediumint(8) NOT NULL,
  `excursion_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price_per_person` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excursions`
--

INSERT INTO `excursions` (`excursionID`, `excursion_name`, `description`, `price_per_person`, `location`) VALUES
(1, ' Tower Bridge', 'The most recognisable bridge in London is Tower Bridge, which was finished in 1894. \r\n                        This magnificent engineering achievement is 244 metres (800 feet) long, \r\n                        painted with 22,000 litres.', '£200', 'London'),
(2, ' London Eye', 'For stunning vistas of some of Londons most iconic landmarks, \r\nboard one of the 32 glass capsules of the London Eye.enjoy breathtaking 360-degree vistas.', '£400', 'London'),
(3, 'Tower of London', 'Visit the Tower of London, one of the most recognisable structures in the entire world, with a Yeoman Warder.Learn about its 900-year history as a royal castle, prison and execution site, zoo!', '£300', 'London'),
(4, 'Westmister Abbey', 'Westminster Abbey, one of Londons most significant UNESCO World Heritage Sites, is the location of numerous historic rituals, including as coronations and royal weddings.', '£100', 'London'),
(5, 'Buckingham Palace', 'For a brief period each summer, take advantage of a trip to this famous London palace to get a look of life as a royal. Explore the opulent State Rooms and find various treasures.', '£300', 'London'),
(6, 'Windsor Castle', 'The oldest and biggest inhabited castle in the world is Windsor Castle.It served as a royal residence and stronghold for more than 900 years and is still a functioning palace today.', '£250', 'London'),
(7, 'Sea Life London', 'At Sea Life London, experience the deep blue sea. At the aquarium, you may see up to 400 species,including sharks, stingrays, moray eels, and clown fish.', '£150', 'London'),
(8, 'Warner Bros Studio', 'Visit Warner Bros. Studio Tour London The Making of Harry Potter for a spectacular day out that includes a behind-the-scenes tour of the Harry Potter movies.', '£450', 'London'),
(9, 'Londons Big Ben', 'Among Londons most recognisable structures and must-see tourist attractions are the Houses of Parliament and Elizabeth Tower, often known as Big Ben.', '£350', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `image_url` varchar(225) NOT NULL DEFAULT 'profile.png'
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(28, 'IMG-63a7dc8de66769.35949095.png'),
(29, 'IMG-63a7e7d05d4900.09786200.png'),
(30, 'IMG-63a7fa5c2bbdc4.38048296.jpg'),
(31, 'IMG-63a898ae52aaf2.70682109.png'),
(32, 'IMG-63a8a159ddc056.19464575.png'),
(33, 'IMG-63a92e6ed57af2.16231610.png'),
(34, 'IMG-63aade01b07ed0.63702474.png'),
(35, 'IMG-63b19c6c923d39.80180639.png'),
(36, 'IMG-63bb57e2d8d530.89122864.png'),
(37, 'IMG-63dbc3d231e998.88522471.jpg'),
(38, 'IMG-63fca9123f2d75.15724544.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerbooking`
--
ALTER TABLE `customerbooking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customercontact`
--
ALTER TABLE `customercontact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excursions`
--
ALTER TABLE `excursions`
 ADD PRIMARY KEY (`excursionID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `customerbooking`
--
ALTER TABLE `customerbooking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customercontact`
--
ALTER TABLE `customercontact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `excursions`
--
ALTER TABLE `excursions`
MODIFY `excursionID` mediumint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
