-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 02:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `contact_name` text NOT NULL,
  `company_name` text NOT NULL,
  `company_email` text NOT NULL,
  `contact_phone` int(11) NOT NULL,
  `student_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `contact_name`, `company_name`, `company_email`, `contact_phone`, `student_type`) VALUES
(1, 'Borche Kojikj', 'Dekada', 'borcekojikj@gmail.com', 71226904, 'ÐÐºÐ°Ð´ÐµÐ¼Ð¸Ñ˜Ð° Ð·Ð° Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¸Ñ€Ð°ÑšÐµ'),
(2, 'asd', 'asd', 'asd@b', 123123, 'ÐÐºÐ°Ð´ÐµÐ¼Ð¸Ñ˜Ð° Ð·Ð° Ð¼Ð°Ñ€ÐºÐµÑ‚Ð¸Ð½Ð³'),
(3, 'asdasd', 'asdasd', 'borcekojikj@gmail.com', 213123, 'ÐÐºÐ°Ð´ÐµÐ¼Ð¸Ñ˜Ð° Ð·Ð° Ð´Ð¸Ð·Ð°Ñ˜Ð½'),
(4, 'asda', 'asdas', 'borcekojikj@gmail.com', 123123, 'ÐÐºÐ°Ð´ÐµÐ¼Ð¸Ñ˜Ð° Ð·Ð° Ð´Ð¸Ð·Ð°Ñ˜Ð½');

-- --------------------------------------------------------

--
-- Table structure for table `select_options`
--

CREATE TABLE `select_options` (
  `id` int(11) NOT NULL,
  `select_option` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `select_options`
--

INSERT INTO `select_options` (`id`, `select_option`) VALUES
(1, 'Академија за маркетинг'),
(2, 'Академија за дизајн'),
(3, 'Академија за програмирање'),
(4, 'Академија за човечки ресурси'),
(5, 'Академија за data science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `select_options`
--
ALTER TABLE `select_options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `select_options`
--
ALTER TABLE `select_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
