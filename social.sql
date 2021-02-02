-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 01:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `text`, `uid`) VALUES
(5, 'myname', 1),
(6, 'myname', 1),
(7, 'hi my name is', 1),
(8, 'hi my name is', 1),
(9, 'hi my name is', 1),
(10, 'new post by shashwat', 1),
(11, 'new post by shashwat', 1),
(12, 'newest post', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `picture`, `bio`, `address`, `education`, `job`, `uid`) VALUES
(1, 'null', 'Hi my name is user', 'kathmandu', 'cs', 'software', 1),
(3, '', 'hi my name is ram chandra bhagawan', 'ayodhya', 'high ', 'archer', 8),
(4, ' ', 'i am the feminine', 'ayodhya', 'high', 'wife', 9),
(5, ' ', 'My name is hari', 'heaven', 'very high', 'maintainer', 10),
(6, ' ', 'hio mu name os', 'dsds', 'dsdsd', 'dsds', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'user', 'user@user.com', 'password'),
(4, 'user', 's@s.com', 'password'),
(5, 'test user', 'test@user.com', 'password'),
(6, 'test2', 'test2@test2.com', 'password'),
(7, 'test user', 'test3@test3.com', 'password'),
(8, 'ram', 'ram@ram.com', 'password'),
(9, 'sita', 'sita@sita.com', 'password'),
(10, 'hari', 'hari@hari.com', 'password'),
(11, 'shyam', 'shyam@shyam.com', 'password'),
(12, 'new user', 'new@user.com', 'password'),
(13, 'user', 'new@news.com', 'password'),
(14, 'new user', 'newuser@newuser.com', 'password'),
(15, 'Shashwat Marasini', 'shashwat@shashwat.com', 'password'),
(16, 'Sashank Sharma', 'sashank@sashank.com', 'password'),
(17, 'Sashank Sharma', 'sashank@sashankgmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `userimages`
--

CREATE TABLE `userimages` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ImageName` varchar(200) NOT NULL,
  `ImageContent` varchar(200) NOT NULL,
  `ImageContentType` varchar(200) NOT NULL,
  `ImageContentLocation` varchar(200) NOT NULL,
  `IsProfileImage` bit(1) NOT NULL DEFAULT b'0',
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userimages`
--

INSERT INTO `userimages` (`Id`, `UserId`, `ImageName`, `ImageContent`, `ImageContentType`, `ImageContentLocation`, `IsProfileImage`, `CreatedDate`) VALUES
(10, 17, '001.jpg', 'images/001.jpg', 'jpg', 'images/001.jpg', b'1', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foreign_key_name` (`uid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userimages`
--
ALTER TABLE `userimages`
  ADD PRIMARY KEY (`Id`,`IsProfileImage`),
  ADD UNIQUE KEY `FK_UserImages_ON_UserId` (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userimages`
--
ALTER TABLE `userimages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
