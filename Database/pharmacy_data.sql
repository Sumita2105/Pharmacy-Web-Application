-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 04:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `email`, `password`, `reg_time`) VALUES
('Sumita12', 'yadav.sumita.19bit057@gmail.com', '$2y$10$QeBgWnzwjylh9I9FNhVhyuz0SJLR4g/phzaocZQb2cQaQiPFP.zbm', '2021-09-23 12:56:37.000000');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Kippi'),
(4, 'what should I call you', 'You can call me Kippi'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare`
--

CREATE TABLE `healthcare` (
  `pid` varchar(50) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `pdesc` varchar(2000) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `p_orgprice` float NOT NULL,
  `pprice` float NOT NULL,
  `qty` int(4) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `shipping` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `time` datetime(6) NOT NULL,
  `category` varchar(50) NOT NULL,
  `manu_date` date NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthcare`
--

INSERT INTO `healthcare` (`pid`, `pname`, `pdesc`, `pimage`, `p_orgprice`, `pprice`, `qty`, `weight`, `shipping`, `manufacturer`, `country`, `time`, `category`, `manu_date`, `exp_date`) VALUES
('H06', 'Nycil Soothing Body Mist Aqua', '<h5>About this Item</h5>\r\n<p><i class=\"fas fa-tag\" style=\"color:green;\"></i>The anti-bacterial formula penetrates deep within<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Dermatologically tested and safe for use on kids<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Provides relief from prickly heat, calms rashes and soothes allergies<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>The unique water-based formula provides up to 6 hours of long-lasting relief<p>', './healthcare_p/Product6.jpg', 150, 148, 20, '200ml', 'FREE', 'Nycil', 'India', '2021-09-07 22:52:31.000000', 'Personal Care', '2021-07-15', '2022-04-14'),
('H07', 'Revital H Woman, 30 Capsules', '<h5>About this Item</h5><br>\r\n<p>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Helps to enhance energy and mental fitness<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Counters weariness and strengthens immunity<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Helps to maintain healthy skin, hair, and nails<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Provides strength to bones and relief in case of body aches<br>\r\n</p>', './healthcare_p/Product7.jpg', 200, 169, 20, '30 Capsules', 'FREE', 'Revital', 'India', '2021-09-13 22:57:58.000000', 'Personal Care', '2020-09-04', '2021-09-18'),
('H08', 'Protinex Tasty Chocolate Nutrition Drink Tin Of 250 G', '<p><b>About this Item</p>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>It is a 100 percent vegetarian source of protein.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>It effectively reduces tiredness and fatigue.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>It improves your overall health.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>It strengthens bones and contributes to blood cell formation.<br>', './healthcare_p/Product11.jpg', 300, 250, 5, '250 grams', 'FREE', 'Protinex', 'India', '2021-09-01 13:20:13.000000', 'Health Drinks', '2021-06-09', '2021-09-30'),
('H09', 'Veet Silk & Fresh Hair Removal Cream, Sensitive Skin - 50 G', '<p><b>About this Item:</b></p>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Your 5-Minute Salon: Effective hair removal in just 3-6 minutes<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i> Removes Shortest of Hair: Removes short hair from legs, arms, underarms and bikini line<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Detans and Visibly Brightens: Enriched with Lotus milk, which is known for its skin softening & calming properties<br>\r\n', './healthcare_p/Product12.jpg', 90, 85, 20, '20 grams', 'FREE', 'Veet', 'India', '2021-09-01 13:27:33.000000', 'Personal Care', '2021-09-07', '2021-09-30'),
('H10', 'Johnson\'s Baby Shampoo', '<p><b>About this Item:</b></p>\r\n<p>Johnsons baby shampoo comes with no more tears formula that leaves the baby hair smelling fresh and looking shiny. It is as gentle and mild to the eyes as pure water. The Johnsons baby shampoo is also soap-free and hence cleanses gently and rinses easily. It can be used daily to keep the baby hair soft, shiny, manageable and clean while smelling baby-fresh. It is also dermatologist-tested and paraben-free. Use Johnsons baby no more tears shampoo during bathtime to gently clean your baby hair and scalp.</p>', './healthcare_p/Product20.jpg', 200, 198, 20, '200 ml', 'FREE', 'Johnson and Johnson', 'India', '2021-09-01 14:27:14.000000', 'Baby and Mom Care', '2021-09-08', '2021-09-30'),
('H12', 'Bio-Oil', '<p><b>About this Item:</b></p>\r\nBio Oil, Specialist Skin Care Oil - Scars, Stretch Mark, Ageing, Uneven Skin Tone is one of the leading products for stretch marks and scars. It has a remarkable ability to improve skin health. The \'how\' and \'why\' aren\'t entirely understood as the benefits are only known through folklore.<br> \r\nBio-oil is famous for its ability to do just anything and everything for the skin. It has become a beauty staple over time and for all the right reasons. It helps to reduce stretch marks, works as a quick remedy for dry skin and is an ideal body moisturizer.', './healthcare_p/Product30.jpg', 300, 280, 30, '60ml', 'FREE', 'Bio-oil', 'India', '2021-06-01 14:31:15.000000', 'Baby and Mom Care', '2021-03-16', '2021-09-18'),
('H13', 'NIVEA Soft Light Moisturizer Cream', '<p><b>About this Item:</b></p>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Is it the right product for me? If you are looking for a non-greasy, light moisturizer for daily use which gives you instant soft & fresh skin feel. Nivea soft cream is the right moisturizer for you.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>\r\nUsage: This is a combined moisturizer for face, hands and body. It can spread smoothly over large areas providing a refreshing feel. The cream can be applied during the day as well as night.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>What makes NIVEA Soft so good? Jojoba oil and Vitamin E nourish your skin, delivering long lasting well- cared for skin feeling, without the greasy feeling.<br>\r\n\r\n', './healthcare_p/Product13.jpg', 180, 159, 20, '300ml', 'FREE', 'Nivea', 'India', '2021-09-01 08:44:11.000000', 'Personal Care', '2021-04-19', '2022-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `pid` varchar(50) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `p_orgprice` float NOT NULL,
  `pprice` float NOT NULL,
  `qty` int(5) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `manu_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `shipping` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `time` datetime(6) NOT NULL,
  `safety_advice` varchar(1000) NOT NULL,
  `uses` varchar(1000) NOT NULL,
  `side_effects` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`pid`, `pname`, `pdesc`, `pimage`, `p_orgprice`, `pprice`, `qty`, `weight`, `manu_date`, `exp_date`, `shipping`, `manufacturer`, `country`, `time`, `safety_advice`, `uses`, `side_effects`) VALUES
('M02', 'Allegra 120mg Tablet', '<p>Allegra 120mg Tablet is an anti-allergy medicine used in the treatment of allergic symptoms such as runny nose, congestion or stuffiness, sneezing, itching, swelling, and watery eyes. It also helps treat skin allergies with itching, redness, or swelling.</p>', './medicines/Medicine2.jpg', 220, 190, 20, '120,mg', '2021-09-01', '2021-10-07', 'FREE', 'Sanofi India Ltd', 'India', '2021-09-19 13:32:25.000000', '<i class=\"fas fa-tag\" style=\"color:green;\"></i>It is not known whether it is safe to consume alcohol with Allegra 120mg Tablet. Please consult your doctor.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Allegra 120mg Tablet may be unsafe to use during pregnancy. Although there are limited studies in humans, animal studies have shown harmful effects on the developing baby. Your doctor will weigh the benefits and any potential risks before prescribing it to you. Please consult your doctor.<br>\r\n', '<i class=\"fas fa-tag\" style=\"color:green;\"></i>Take this medicine in the dose and duration as advised by your doctor. Swallow it as a whole. Do not chew, crush or break it. Allegra 120mg Tablet may be taken with or without food, but it is better to take it at a fixed time.<br>\r\n', '<i class=\"fas fa-tag\" style=\"color:green;\">Nausea</i><br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\">Drowsiness</i><br>\r\n'),
('M04', 'Dolo 650 Tablet', '<p><b>About this Item:</b></p>\r\nDolo 650 Tablet is a medicine used to relieve pain and to reduce fever. It is used to treat many conditions such as headaches, body aches, toothaches, and the common cold. It works by inhibiting the release of certain chemicals that cause pain and fever.\r\n', './medicines/Medicine1.jpg', 30, 24, 15, '500mg', '2021-05-18', '2021-10-21', 'FREE', 'Micro Labs Ltd', 'India ', '2021-09-06 08:53:39.000000', '<i class=\"fas fa-tag\" style=\"color:green;\"></i>It is unsafe to consume alcohol with Dolo 650 Tablet.<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Dolo 650 Tablet may be unsafe to use during pregnancy. Although there are limited studies in humans, animal studies have shown harmful effects on the developing baby. Your doctor will weigh the benefits and any potential risks before prescribing it to you. Please consult your doctor.\r\n<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Dolo 650 Tablet is safe to use during breastfeeding. Human studies suggest that the drug does not pass into the breastmilk in a significant amount and is not harmful to the baby.<br>', '<i class=\"fas fa-tag\" style=\"color:green;\"></i>Pain relief<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Treatment of Fever<br>', '<i class=\"fas fa-tag\" style=\"color:green;\"></i>Stomach pain<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Nausea<br>\r\n<i class=\"fas fa-tag\" style=\"color:green;\"></i>Vomitting<br>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'Hi', '2020-04-22 12:41:04', 'user'),
(2, 'Hello, how are you.', '2020-04-22 12:41:05', 'bot'),
(3, 'what is your name', '2020-04-22 12:41:22', 'user'),
(4, 'My name is Kippi', '2020-04-22 12:41:22', 'bot'),
(5, 'Where are your from', '2020-04-22 12:41:30', 'user'),
(6, 'I m from India', '2020-04-22 12:41:30', 'bot'),
(7, 'Go to hell', '2020-04-22 12:41:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-04-22 12:41:41', 'bot'),
(9, 'bye', '2020-04-22 12:41:46', 'user'),
(10, 'Sad to see you are going. Have a nice day', '2020-04-22 12:41:46', 'bot'),
(0, 'hii', '2021-09-25 11:41:33', 'user'),
(0, 'Sorry not be able to understand you', '2021-09-25 11:41:33', 'bot'),
(0, 'Hi', '2021-09-25 11:41:42', 'user'),
(0, 'Hello, how are you.', '2021-09-25 11:41:42', 'bot'),
(0, 'I\'m good', '2021-09-25 11:43:11', 'user'),
(0, 'Sorry not be able to understand you', '2021-09-25 11:43:11', 'bot'),
(0, 'How are you', '2021-09-25 11:43:20', 'user'),
(0, 'Good to see you again!', '2021-09-25 11:43:20', 'bot'),
(0, 'Bye', '2021-09-25 11:43:34', 'user'),
(0, 'Sad to see you are going. Have a nice day', '2021-09-25 11:43:34', 'bot'),
(0, 'hello', '2021-09-26 12:42:41', 'user'),
(0, 'Hello, how are you.', '2021-09-26 12:42:41', 'bot'),
(0, 'Hii there', '2021-09-26 12:44:19', 'user'),
(0, 'Sorry not be able to understand you', '2021-09-26 12:44:19', 'bot'),
(0, 'what is your name', '2021-09-26 12:52:25', 'user'),
(0, 'My name is Kippi', '2021-09-26 12:52:25', 'bot'),
(0, 'bye', '2021-09-26 12:52:32', 'user'),
(0, 'Sad to see you are going. Have a nice day', '2021-09-26 12:52:32', 'bot'),
(0, 'Bye', '2021-09-26 12:52:39', 'user'),
(0, 'Sad to see you are going. Have a nice day', '2021-09-26 12:52:39', 'bot'),
(0, 'name', '2021-09-26 12:52:47', 'user'),
(0, 'My name is Kippi', '2021-09-26 12:52:47', 'bot'),
(0, 'ok', '2021-09-26 12:52:53', 'user'),
(0, 'Sorry not be able to understand you', '2021-09-26 12:52:53', 'bot'),
(0, 'hello', '2021-09-26 12:53:59', 'user'),
(0, 'Hello, how are you.', '2021-09-26 12:53:59', 'bot'),
(0, 'bye', '2021-09-26 12:54:06', 'user'),
(0, 'Sad to see you are going. Have a nice day', '2021-09-26 12:54:06', 'bot'),
(0, 'what', '2021-09-26 12:54:13', 'user'),
(0, 'My name is Kippi', '2021-09-26 12:54:13', 'bot'),
(0, 'hello', '2021-09-26 04:25:43', 'user'),
(0, 'Hello, how are you.', '2021-09-26 04:25:43', 'bot'),
(0, 'Hi', '2021-09-26 04:52:16', 'user'),
(0, 'Hello, how are you.', '2021-09-26 04:52:17', 'bot'),
(0, 'hey', '2021-09-26 04:52:32', 'user'),
(0, 'Sorry not be able to understand you', '2021-09-26 04:52:32', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prod_id` varchar(100) NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `email`, `prod_id`, `order_time`) VALUES
('hgdugwu763', 'yadavsumita0512@gmail.com', 'H07', '2021-09-01 23:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `is_expired` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `create_at`) VALUES
(4, 99999, 1, '2021-09-23 00:03:40'),
(5, 533474, 1, '2021-09-23 00:10:54'),
(6, 628237, 1, '2021-09-23 00:55:11'),
(7, 880894, 1, '2021-09-23 00:59:43'),
(8, 934425, 1, '2021-09-23 01:02:31'),
(9, 762540, 1, '2021-09-23 01:07:06'),
(10, 698459, 1, '2021-09-23 01:09:47'),
(11, 246447, 1, '2021-09-23 01:11:44'),
(12, 700179, 0, '2021-09-23 11:20:13'),
(13, 183299, 1, '2021-09-23 11:20:20'),
(14, 166164, 1, '2021-09-23 12:48:30'),
(15, 107329, 1, '2021-09-23 13:05:11'),
(16, 625829, 1, '2021-09-23 13:45:37'),
(17, 242264, 1, '2021-09-23 14:21:02'),
(18, 298077, 1, '2021-09-23 14:22:38'),
(19, 955037, 1, '2021-09-23 14:31:03'),
(20, 628717, 1, '2021-09-23 14:34:09'),
(21, 281447, 1, '2021-09-23 14:36:48'),
(22, 552468, 1, '2021-09-23 14:41:12'),
(23, 982223, 1, '2021-09-23 14:44:15'),
(24, 473528, 1, '2021-09-23 14:47:48'),
(25, 201674, 1, '2021-09-23 14:56:44'),
(26, 395723, 1, '2021-09-23 14:58:08'),
(27, 777983, 1, '2021-09-23 14:59:44'),
(28, 294987, 1, '2021-09-23 15:06:07'),
(29, 320874, 1, '2021-09-23 15:12:39'),
(30, 919707, 0, '2021-09-23 15:20:52'),
(31, 661533, 1, '2021-09-23 15:21:37'),
(32, 225453, 1, '2021-09-23 15:32:00'),
(33, 601391, 0, '2021-09-23 15:36:53'),
(34, 516892, 0, '2021-09-23 15:47:09'),
(35, 534151, 0, '2021-09-23 15:47:48'),
(36, 987059, 0, '2021-09-23 15:50:25'),
(37, 551653, 0, '2021-09-23 15:50:47'),
(38, 650668, 0, '2021-09-23 15:51:08'),
(39, 621848, 0, '2021-09-23 15:51:37'),
(40, 396558, 1, '2021-09-23 15:52:48'),
(41, 579725, 0, '2021-09-23 15:56:09'),
(42, 610108, 1, '2021-09-23 16:01:53'),
(43, 433738, 1, '2021-09-23 16:27:41'),
(44, 331051, 1, '2021-09-23 16:32:08'),
(45, 996860, 1, '2021-09-23 16:35:23'),
(46, 286409, 1, '2021-09-26 11:21:56'),
(47, 663008, 0, '2021-09-26 11:22:37'),
(48, 855236, 0, '2021-09-26 11:24:11'),
(49, 756257, 1, '2021-09-26 14:53:36'),
(50, 958936, 0, '2021-09-26 14:54:20'),
(51, 458843, 1, '2021-09-26 14:54:46'),
(52, 423296, 1, '2021-09-26 15:47:24'),
(53, 975785, 1, '2021-09-26 16:01:25'),
(54, 968311, 1, '2021-09-26 16:35:07'),
(55, 359539, 1, '2021-09-26 16:43:15'),
(56, 201422, 1, '2021-09-29 20:45:26'),
(57, 829279, 1, '2021-09-29 20:47:27'),
(58, 262729, 1, '2021-09-29 20:50:30'),
(59, 955796, 1, '2021-09-29 20:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `password`, `reg_date`, `reg_time`) VALUES
('Reema123', 'yadavreema@gmail.com', '$2y$10$DlkY.WsO1MvLquPUMQczx.uErLQ1v.mm0wHE6LsCSTLMJ8A6TBh5S', '2021-09-20', '10:19:06'),
('Sum112', 'abc@gmail.com', '$2y$10$yHl3ik/JP4oQwju53RZZoe2IMPwI8dodhXy8rEgyHUOH8GLeLehbC', '2021-09-29', '05:28:41'),
('Sumita12', 'yadavsumita0512@gmail.com', '$2y$10$80B5auG6mPmgpnTWAU7FK.MZwIS.SPj.Kf9Iej.z5mBmHewwdoY2G', '2021-09-20', '09:40:59'),
('Sumita21', 'yadavsumita@gmail.com', '$2y$10$2x.xnB0HzwiBlZmhqYOLuOaI4nnepXFdIOTpUYCUBt0CSKPmnoGq6', '2021-09-30', '04:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `healthcare`
--
ALTER TABLE `healthcare`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
