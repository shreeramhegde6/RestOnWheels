-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 07:51 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_bookdetails`
--

CREATE TABLE `bus_bookdetails` (
  `amount` int(11) NOT NULL,
  `tot_seats` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus_bookdetails`
--

INSERT INTO `bus_bookdetails` (`amount`, `tot_seats`, `booking_id`, `username`) VALUES
(1000, 2, 96, 'jai.shankar'),
(2000, 4, 97, ''),
(1000, 2, 98, ''),
(1000, 2, 99, 'a.exam'),
(1000, 2, 100, ''),
(1000, 2, 101, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_search`
--

CREATE TABLE `bus_search` (
  `bus_id` int(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_type` varchar(100) NOT NULL,
  `bus_imagepath` varchar(500) NOT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus_search`
--

INSERT INTO `bus_search` (`bus_id`, `source`, `destination`, `bus_name`, `bus_type`, `bus_imagepath`, `username`) VALUES
(1, 'Bangalore', 'Mangalore', 'Durgamba', 'NON AC SLEEPER', '', NULL),
(2, 'Bangalore', 'Mysore', 'KSRTC', 'NON AC SLEEPER', '', NULL),
(3, 'Bangalore', 'Sirsi', 'Shree Kumar ', 'NON AC SLEEPER', '', NULL),
(4, 'Bangalore', 'Honnavar ', 'Shree Kumar', 'AC SLEEPER', '', NULL),
(5, 'Bangalore', 'Mangalore', 'VRL TRAVELS', 'SEMI DELUXE', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flight_bookdetails`
--

CREATE TABLE `flight_bookdetails` (
  `amount` int(11) NOT NULL,
  `tot_seats` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_bookdetails`
--

INSERT INTO `flight_bookdetails` (`amount`, `tot_seats`, `booking_id`, `username`) VALUES
(8000, 4, 1, NULL),
(4000, 2, 2, NULL),
(4000, 2, 3, ''),
(4000, 2, 4, ''),
(4000, 2, 5, 'sedg'),
(1500, 3, 6, 'sedg');

-- --------------------------------------------------------

--
-- Table structure for table `flight_search`
--

CREATE TABLE `flight_search` (
  `flight_id` int(11) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `flight_name` varchar(100) NOT NULL,
  `flight_type` varchar(100) NOT NULL,
  `flight_imagepath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_search`
--

INSERT INTO `flight_search` (`flight_id`, `departure`, `arrival`, `flight_name`, `flight_type`, `flight_imagepath`) VALUES
(1, 'Bangalore', 'London', 'Lufthansa', 'BUSINESS CLASS', ''),
(2, 'Bangalore', 'New Delhi', 'AIR INDIA', 'ECONOMY CLASS', ''),
(3, 'Bangalore', 'Mumbai', 'SPICEJET', 'ECONOMY CLASS', ''),
(4, 'Bangalore ', 'Chennai ', 'FLY EMIRATES', 'ECONOMY CLASS', '');

-- --------------------------------------------------------

--
-- Table structure for table `train_bookdetails`
--

CREATE TABLE `train_bookdetails` (
  `amount` int(11) NOT NULL,
  `tot_seats` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `train_bookdetails`
--

INSERT INTO `train_bookdetails` (`amount`, `tot_seats`, `booking_id`, `username`) VALUES
(1000, 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `train_search`
--

CREATE TABLE `train_search` (
  `train_id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `train_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `train_search`
--

INSERT INTO `train_search` (`train_id`, `source`, `destination`, `train_name`, `train_type`) VALUES
(1, 'Bangalore', 'Mumbai', 'Shatabdhi Express', 'Passenger'),
(2, 'Bangalore', 'Karwar', 'Coastal Express', 'Passenger');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `users` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(10) NOT NULL,
  `hash` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES
('', '', '', '', ''),
('exam', 'a', 'a.exam', 'a.exam@gmail.com', '1234'),
('abhi', 'a', 'abhi', 'abhi@gmail.com', '1234'),
('ganesh', 'ava', 'ava.gan', 'ava.gan@gmail.com', ''),
('G', 'ava', 'g.ava', 'g.ava@gmail.com', '678'),
('ganesh', 'ava', 'gan.ava', 'gan.ava@gmail.com', ''),
('gan', 'av', 'ganu', 'gan.ava@gmail.com', '56788'),
('haha', 'haha', 'haha', 'haha@gmail.com', '234'),
('h', 'k', 'hk', 'ha@gmail.com', '567'),
('Jai', 'Shankar', 'jai.shankar', 'jaishankar@gmail.com', '2345'),
('jhjhj', 'hjhjh', 'jhjhjh', 'kjkhkh@gmail.com', '1234'),
('hk', 'sd', 'kjds', 'jkljlk@gmail.com', '2345'),
('j', 'k', 'kjk', 'kha@gmail.com', '5677'),
('ngb', 'Bhat', 'ngb.bhat', 'ngb@gmail.com', ''),
('avinash', 'p', 'p.avi', 'p.avi@gmail.com', '567'),
('ravi', 'hegde', 'ravis', 'ravi@gmail.com', ''),
('Ganesh', 's', 'sedg', 'gan.ava@gmail.com', '1234'),
('ss', 'nn', 'ss.nn', 'aba@gmail.com', ''),
('ss', 'ss', 'ss.ss', 'ss@gmail.com', ''),
('zz', 'bv', 'zz.bv', 'zz.bv@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_bookdetails`
--
ALTER TABLE `bus_bookdetails`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bus_search`
--
ALTER TABLE `bus_search`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `flight_bookdetails`
--
ALTER TABLE `flight_bookdetails`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `flight_search`
--
ALTER TABLE `flight_search`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `train_bookdetails`
--
ALTER TABLE `train_bookdetails`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `train_search`
--
ALTER TABLE `train_search`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_bookdetails`
--
ALTER TABLE `bus_bookdetails`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `flight_bookdetails`
--
ALTER TABLE `flight_bookdetails`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `train_bookdetails`
--
ALTER TABLE `train_bookdetails`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  