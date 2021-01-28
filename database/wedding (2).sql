-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 05:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` varchar(255) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `user_id` varchar(255) NOT NULL DEFAULT 'A237893',
  `username` varchar(255) NOT NULL DEFAULT 'admin',
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) DEFAULT NULL,
  `reg_date` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL DEFAULT 'YES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `username`, `email`, `login`, `role`, `avatar`, `reg_date`, `verified`) VALUES
('A237893', 'admin', 'admin@admin.com', '$2y$10$tPqm61lRUzWtXPA798nDpe6ASwCmCW6B.nPAthJsi9Rt1ezW93ux.', 'admin', NULL, '04/11/2018 - 03:10:57', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ads`
--

CREATE TABLE `tbl_ads` (
  `enc_id` int(255) NOT NULL,
  `ad_id` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fixed` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'inactive',
  `featured` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ads`
--

INSERT INTO `tbl_ads` (`enc_id`, `ad_id`, `author`, `title`, `category`, `city`, `price`, `fixed`, `short_desc`, `description`, `date_posted`, `status`, `featured`) VALUES
(18, 'AD91337922', 'M048170', 'Dimuthu Wedding Cake', 'Wedding Cakes', 'Kurunegala 	', '7000', 'YES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span><br></p>', 'Jan 25, 2021', 'active', 'yes'),
(19, 'AD39401211', 'M802495', 'Senith Reception', 'Reception', 'Colombo', '150000', 'YES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span><br></p>', 'Jan 25, 2021', 'active', 'yes'),
(20, 'AD47470148', 'M546499', 'Shakthi Grooms Accessories', 'Groom\'s Accessories', 'Kegalle', '100000', 'YES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</span><br></p>', 'Jan 25, 2021', 'active', 'yes'),
(22, 'AD18672722', 'M302983', 'Chamo Flower Decoration', 'Flowers & Decoration', 'Kandy', '50000', 'YES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', 'Jan 27, 2021', 'active', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alerts`
--

CREATE TABLE `tbl_alerts` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alerts`
--

INSERT INTO `tbl_alerts` (`id`, `code`, `description`, `type`) VALUES
(1, '001', 'You have been registered successfully', 'success'),
(2, '002', 'Invalid email address or password', 'danger'),
(3, '003', 'Sorry, only JPG, JPEG, & PNG files are allowed.', 'warning'),
(4, '004', 'Sorry, your file is too large. avatar upload should be less than <strong>800KB</strong>', 'warning'),
(5, '005', 'Profile has been updated', 'success'),
(6, '006', 'Password has been updated', 'success'),
(7, '007', 'Image uploaded successfully', 'success'),
(8, '008', 'Ad has been updated successfully', 'success'),
(9, '009', 'Ad has been deleted successfully', 'success'),
(10, '010', 'Your image must have a width of <strong>750</strong> and a height of <strong>450</strong> ', 'warning'),
(11, '011', 'Your message has been sent', 'success'),
(12, '012', 'An error occurred while sending your message', 'warning'),
(13, '013', 'Account was not found', 'warning'),
(14, '014', 'Please check your email for more instructions', 'info'),
(15, '015', 'Unknown error occured', 'warning'),
(16, '016', 'Settings applied successfully', 'info'),
(17, '017', 'FAQ was added successfully', 'success'),
(18, '018', 'Email is already registered', 'warning'),
(19, '019', 'Email or username is already registered', 'warning'),
(20, '020', 'Username is already registered', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category`) VALUES
(5, ' Wedding Invitation'),
(13, 'Bridal Accessories'),
(1, 'Catering'),
(3, 'Cultural Ceremonies'),
(6, 'Entertainment'),
(7, 'Flowers & Decoration'),
(11, 'Groom\'s Accessories'),
(12, 'Health & Beauty'),
(4, 'Jewellery'),
(8, 'Music'),
(2, 'Photography & Video'),
(4, 'Reception'),
(9, 'Wedding Cakes'),
(14, 'Wedding Car');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city`) VALUES
(1, 'Jaffna'),
(2, 'Kilinochchi'),
(3, 'Mullaitivu '),
(4, 'Vavuniya'),
(5, 'Puttalam'),
(6, 'Kurunegala 	'),
(7, 'Gampaha'),
(8, 'Colombo'),
(9, 'Kalutara'),
(10, 'Anuradhapura 	'),
(11, 'Polonnaruwa'),
(12, 'Matale '),
(13, 'Kandy'),
(14, 'Nuwara Eliya'),
(15, 'Kegalle'),
(16, 'Ratnapura'),
(17, 'Trincomalee'),
(18, 'Batticaloa'),
(19, 'Ampara'),
(20, 'Badulla'),
(21, 'Monaragala'),
(22, 'Hambantota'),
(23, 'Matara'),
(24, 'Galle'),
(25, 'Mannar ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_tokens`
--

CREATE TABLE `tbl_reset_tokens` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `expires` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_tokens`
--

INSERT INTO `tbl_reset_tokens` (`id`, `email`, `token`, `role`, `expires`) VALUES
(1, 'a@a.com', '2d89849fe641e14155142cb1b878fe90', 'sup', '2021-01-25 23:10:57'),
(10, 'b@b.com', '58242946ab2a67028d775e91152f998d', 'user', '2021-01-26 00:33:29'),
(12, 'dimuthud2017@gmail.com', '283987038864ac0ce43ad8068f9dff8f', 'user', '2021-01-26 18:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sup`
--

CREATE TABLE `tbl_sup` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'sup',
  `verified` varchar(255) NOT NULL DEFAULT 'NO',
  `reg_date` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sup`
--

INSERT INTO `tbl_sup` (`user_id`, `username`, `email`, `login`, `role`, `verified`, `reg_date`, `avatar`) VALUES
('M048170', 'dimuthu2017', 'dimuthu@gmail.com', '$2y$10$GXikBGqBScu5xxyV4qFqC.0esegP8cLSxG3nH8GoFKfGVrDziKLXO', 'sup', 'YES', '25/01/2021 - 04:55:21', NULL),
('M302983', 'chamo', 'chamo@gmail.com', '$2y$10$mdHlnXNCJLl6Ygkdk/RkZ.RekkLfgriRc.47fxumZHp5xXpSKZbuO', 'sup', 'NO', '27/01/2021 - 11:03:02', NULL),
('M546499', 'shakthi', 'shakthi@gmail.com', '$2y$10$bW5MIWvhaSefbEtPa39EW.zIs2O17ZFUiLLfJ4K7U50TgRv0Y7r/e', 'sup', 'YES', '25/01/2021 - 05:30:26', NULL),
('M802495', 'senith2017', 'senith@gmail.com', '$2y$10$YUEQ6gbejTpHFUZ7wXJxHO9ZsHRGrvHMCF0ya4WtwgjWb5.bVx2Qm', 'sup', 'YES', '25/01/2021 - 05:27:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_Id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `verified` varchar(255) NOT NULL DEFAULT 'NO',
  `reg_date` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_Id`, `username`, `email`, `login`, `role`, `verified`, `reg_date`, `avatar`) VALUES
('M016061', 'malsha', 'malsha@gmail.com', '$2y$10$Jte6GGONB/4dWbna9Dl43eavcUi7n6vlZDJCg3Uz/iXY5PpDu2bBK', 'user', 'NO', '27/01/2021 - 11:34:09', NULL),
('M127017', 'rvdr', 'b@b.com', '$2y$10$Jd8.p5mNtmIiSiCNJOCnOutm1gQRxU.47mRC6nVoKvuEyVGPDRiXG', 'user', 'NO', '25/01/2021 - 10:10:05', NULL),
('M619897', 'dimuthu', 'dimuthud2017@gmail.com', '$2y$10$ROIsJUt0HMdCYyIUtNc12uWElHbNUb6yvRJ4sdlsS0cpQfrA0FnCK', 'user', 'NO', '26/01/2021 - 12:10:20', NULL),
('M736375', 'hashintha', 'h@h.com', '$2y$10$lr459Xjc5g3m.PMMF/LeJ.U2wcnoeJs14UNEAEI.a6XnoFRCQRNL2', 'user', 'NO', '26/01/2021 - 11:59:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  ADD PRIMARY KEY (`enc_id`);

--
-- Indexes for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_tokens`
--
ALTER TABLE `tbl_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sup`
--
ALTER TABLE `tbl_sup`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  MODIFY `enc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_reset_tokens`
--
ALTER TABLE `tbl_reset_tokens`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
