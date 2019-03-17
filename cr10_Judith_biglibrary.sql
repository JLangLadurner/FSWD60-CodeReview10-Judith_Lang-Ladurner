-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2019 at 07:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_Judith_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `author_email` varchar(55) DEFAULT NULL,
  `author_address` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`, `author_email`, `author_address`) VALUES
(1, 'JK', 'Rowling', 'rowling@email.com', 'Somewhere in London'),
(2, 'John', 'Grisham', 'grisham@email.com', 'Arkansas'),
(3, 'John', 'Kornfield', 'kornfield@email.com', 'New York street'),
(4, 'Pamela', 'Travers', 'travers@email.com', 'Londonstr 144, WC!'),
(5, 'Michael', 'Ende', 'ende@email.com', 'Somewhere in Germany'),
(6, 'A.A', 'Shepard', 'shepard@email.com', 'justthere'),
(7, 'The', 'Beatles', 'beatles@email.com', 'Nowhereanymore'),
(8, 'Aero', 'Smith', 'aerosmith@email.com', 'Miamistreet 56'),
(9, 'Captain', 'America', 'captain@email.com', 'alwayshere street'),
(10, 'Daniel', 'Ratcliff', 'ratcliff@email.com', 'Hogwartsstreet 56');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_descr` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_descr`) VALUES
(1, 'Comedy'),
(2, 'Action'),
(3, 'Biography'),
(4, 'Teens'),
(5, 'Non-Fiction'),
(6, 'Fiction'),
(7, 'Classic'),
(8, 'Children'),
(9, 'Jazz'),
(10, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `titel` varchar(55) DEFAULT NULL,
  `description` varchar(55) DEFAULT NULL,
  `type` enum('Book','CD','DVD') DEFAULT NULL,
  `pub_date` date DEFAULT NULL,
  `fk_pub_id` int(11) DEFAULT NULL,
  `fk_author_id` int(11) DEFAULT NULL,
  `available` enum('yes','no') NOT NULL,
  `fk_genre_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `ISBN`, `titel`, `description`, `type`, `pub_date`, `fk_pub_id`, `fk_author_id`, `available`, `fk_genre_id`, `image`) VALUES
(1, 1234, 'Harry Potter', 'The philosopers Stone', 'Book', '2001-11-01', 7, 1, 'yes', 4, 'https://images-na.ssl-images-amazon.com/images/I/51MjPyuVqRL._SX323_BO1,204,203,200_.jpg\r\n'),
(3, 2, 'Harry Potter', 'Chamber of Secrets', 'Book', '2002-10-31', 6, 1, 'yes', 4, '\r\nhttps://images-na.ssl-images-amazon.com/images/I/51F7MMxbhOL._SX324_BO1,204,203,200_.jpg'),
(4, 3, 'Harry Potter', 'Prisoner of Azkaban', 'Book', '2003-10-31', 6, 1, 'yes', 4, 'https://images-na.ssl-images-amazon.com/images/I/51IVqojZfKL._SX341_BO1,204,203,200_.jpg'),
(5, 4, 'Alice', 'In the Wonderland', 'Book', '1865-07-01', 2, 6, 'yes', 8, 'https://images-na.ssl-images-amazon.com/images/I/51soweKFXBL._SX379_BO1,204,203,200_.jpg'),
(6, 4, 'Beatles', 'Abbey Road', 'CD', '2009-09-09', 5, 7, 'yes', 10, 'https://images-eu.ssl-images-amazon.com/images/I/61SHXWWLicL._SX350_PI_PJPrime-Sash-Extra-Large-2017,TopLeft,0,0_AC_US218_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pub_id` int(11) NOT NULL,
  `pub_name` varchar(55) DEFAULT NULL,
  `pub_email` varchar(55) DEFAULT NULL,
  `pub_address` varchar(55) DEFAULT NULL,
  `pub_size` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_name`, `pub_email`, `pub_address`, `pub_size`) VALUES
(1, 'Random House', 'random@email.com', 'random street 56', 'big'),
(2, 'Hachette Livre', 'livre@email.com', 'livre street 126', 'medium'),
(3, 'Oxford University', 'Oxford@email.com', 'oxfort street 56', 'small'),
(4, 'Paramount Pictures', 'paramount@email.com', 'paramount street 56', 'big'),
(5, 'EMI Record', 'emi@email.com', 'emi street 12', 'big'),
(6, 'Bloomsbury', 'bloomsburry@email.com', 'bloomsbury street 123', 'medium'),
(7, 'Simon&Schuster', 'Simon@email.com', 'simon&Schuster 34', 'small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `fk_pub_id` (`fk_pub_id`),
  ADD KEY `fk_author_id` (`fk_author_id`),
  ADD KEY `fk_genre_id` (`fk_genre_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_pub_id`) REFERENCES `publisher` (`pub_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`fk_genre_id`) REFERENCES `genre` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
