-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 06:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atik`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `sl` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass1` varchar(32) NOT NULL,
  `pass2` varchar(32) NOT NULL,
  `image` longblob NOT NULL,
  `workplace` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`sl`, `name`, `mail`, `pass1`, `pass2`, `image`, `workplace`, `address`) VALUES
(1, 'adil reza khan khan', 'adilreza043@gmail.com', '123', '123', 0x32303136303433305f3130343030312e6a7067, 'rajshai University Of Engineering and tech', 'Kushtia, Bhereamara , goloapnagor'),
(2, 'Atiqur Rahman', 'atiqurrahman7465@gmail.com', '102030', '102030', 0x46425f494d475f313530363432323135313333362e6a7067, '', ''),
(3, 'Tasfin jayed', 'jayed@gmail.com', '12345', '12345', 0x33392e6a7067, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `sln` int(12) NOT NULL,
  `bname` varchar(250) NOT NULL,
  `booktype` varchar(40) NOT NULL,
  `bookex` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  `sell` varchar(34) NOT NULL,
  `message` text NOT NULL,
  `price` int(32) NOT NULL,
  `usermail` varchar(120) NOT NULL,
  `exchange` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`sln`, `bname`, `booktype`, `bookex`, `image`, `sell`, `message`, `price`, `usermail`, `exchange`) VALUES
(1, 'programming language', 'TEXT BOOK', 'bookl', 0x362e6a7067, 'booksell', 'Hei, I would like to sell this book or like to exchange with other books if any one interested to buy or exchange this book please contact me..', 120, 'adilreza043@gmail.com', ''),
(2, 'differential calculas', 'HORROR FICTION', 'bookh', 0x32322e6a7067, 'booksell', 'Hei this is about to sell this book of thoidas dfsdfj askdfja sdfkjhas kdfjas dkjf sdf sdf ksjdfh skdjf sdfjfh ksdfjf skdfj skd fsjdhfsk djs dfkjashdf kasjdkjsdf ksdjf skjdf sjdf ksjdf s sjdhf skdjf sdffsf', 550, 'atiqurrahman7465@gmail.com', ''),
(3, 'statistics', 'TRAGICOMEDY', 'bookd', 0x31322e6a7067, 'booksell', 'Hei do u seek this kind of book of hooor fiction I am interedte to excahnage this book with you ifyou want please contact me', 2342, 'adilreza043@gmail.com', ''),
(4, 'sdjkfsdfasdf', 'COMEDY', 'exchange', 0x362e6a7067, 'booksell', 'ertertertwertegbwr', 34534, 'adilreza043@gmail.com', 'LITERARY REALISM'),
(5, 'thi is shdf askjdfask dfas', 'DRAMA', 'exchange', 0x382e6a7067, '', 'Hei do u seek this kind of book of hooor fiction I am interedte to excahnage this book with you ifyou want please contact me', 3453, 'adilreza043@gmail.com', 'DRAMA'),
(6, 'sdsdfs', 'SATIRE', 'exchange', 0x31352e6a7067, 'booksell', 'Hei do u seek this kind of book of hooor fiction I am interedte to excahnage this book with you ifyou want please contact me', 34534, 'atiqurrahman7465@gmail.com', 'ROMANCE'),
(7, 'differential calculas', 'TEXT BOOK', 'exchange', 0x32372e6a7067, 'booksell', 'Hei do u seek this kind of book of hooor fiction I am interedte to excahnage this book with you ifyou want please contact me', 123456, 'atiqurrahman7465@gmail.com', 'ROMANCE'),
(8, 'Helllo tafsin', 'MYTHOLOGY', 'exchange', 0x32392e6a7067, 'booksell', 'egdf  gdg gd', 12313, 'jayed@gmail.com', 'HORROR FICTION'),
(9, 'weasrdtyhijo', 'TEXT BOOK', 'exchange', 0x31332e6a706567, 'booksell', 'asdfgvhbjsdfghjk asdfghjkl sdfghjkl sdfghjk dfghj dfghjk dfghjk dfghjk dfghj ', 12345, 'atiqurrahman7465@gmail.com', 'DRAMA'),
(10, 'Computer Programming', 'COMEDY', 'exchange', 0x6c6f676f2e6a7067, '', 'Hello this is another testing for all the book and the exchanging book, this is the final testing for the bbokk concept and it will be the same', 223, 'atiqurrahman7465@gmail.com', 'HORROR FICTION');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`sln`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
