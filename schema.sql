-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `marketing_preference` tinyint(1) DEFAULT 0,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `company`, `email`, `phone`, `message`, `marketing_preference`, `submission_date`) VALUES
(6, 'testfour', '', 'testfour@sky.com', '0987654321', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0, '2025-01-13 14:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `news_articles`
--

CREATE TABLE `news_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `author_name` varchar(100) DEFAULT NULL,
  `author_image_url` varchar(255) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `time_to_read` varchar(50) DEFAULT NULL,
  `article_link` varchar(255) DEFAULT NULL,
  `style_class` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_articles`
--

INSERT INTO `news_articles` (`id`, `title`, `image_url`, `description`, `author_name`, `author_image_url`, `post_date`, `time_to_read`, `article_link`, `style_class`) VALUES
(9, 'September Notables 2024 - Celebrating Our Team', './img/september-notables-2024-ZBOM.png', 'September Notables 2024 Celebrating the achievements and dedication of our staff, at Netmatters, we...', 'Netmatters', './img/netmatters-ltd-VXAv.png', '2024-10-10', NULL, '#', 'article-1'),
(10, 'Mark Reilly - Netmatters 5 Year Legend', './img/mark-reilly-rNAO.png', 'Mark Reilly – Netmatters 5 Year Legend Today, we celebrate the brilliant accomplishments of Mark Rei...', 'Netmatters', './img/netmatters-ltd-VXAv.png', '2024-09-16', '4 MINUTE READ', '#', 'article-2'),
(11, 'Telemarketer', './img/telemarketer-WU7A.png', 'Salary Range £25,000 - £26,000. Potential OTE at £6k -£8k Hours 40 hours per week, Monday – Friday....', 'Rebecca Moore', './img/rebecca-moore-1fh7.jpg', '2024-09-12', NULL, '#', 'article-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_articles`
--
ALTER TABLE `news_articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_articles`
--
ALTER TABLE `news_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
