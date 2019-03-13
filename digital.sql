-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 10:55 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `bid` int(11) NOT NULL,
  `book` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL,
  `des` text NOT NULL,
  `bpath` varchar(100) NOT NULL,
  `download` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`bid`, `book`, `auth`, `path`, `des`, `bpath`, `download`) VALUES
(5, 'myfile', 'your name', 'pictures/Hydrangeas.jpg', 'super file', 'pictures/1747128.odt', 4),
(6, 'gggg', 'dsfads', 'pictures/Lighthouse.jpg', 'dfgsfgd', 'pictures/EPFO_ Home.pdf', 6),
(7, 'llllllllllll', 'lllllllllllll', 'pictures/5.jpg', 'lkkkkkkkkkkkkkkk', 'pictures/1747128 (4).odt', 1),
(8, 'tmail book of the year', 'This is the name of the book which is writeen by the author name of the new place and new ', 'pictures/5.jpg', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 0),
(9, 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/5.jpg', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 1),
(10, 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/Screenshot from 2019-03-05 22-02-18.png', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 1),
(11, 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/Screenshot from 2019-03-05 22-02-18.png', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 0),
(12, 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/5.jpg', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 0),
(13, 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/5.jpg', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 0),
(14, 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/5.jpg', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 0),
(15, 'tmail book of the year', 'lllllllllllll', 'pictures/cool.jpeg', 'A paragraph (from the Ancient Greek Ï€Î±ÏÎ¬Î³ÏÎ±Ï†Î¿Ï‚ paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'pictures/1747128.odt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `uname`, `password`) VALUES
(12, 'digital@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `usermail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `username`, `usermail`, `password`) VALUES
(1, 'vinnu@gmail.com', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
