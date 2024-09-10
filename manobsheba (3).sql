-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 08:49 PM
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
-- Database: `manobsheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(20) NOT NULL,
  `cata_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cata_name`) VALUES
(1, 'Child Care'),
(2, 'Woman Care And Empower'),
(3, 'Education '),
(4, 'Food And Pure Water ');

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `charity_id` int(11) NOT NULL,
  `CharityName` varchar(20) NOT NULL,
  `CharityAddress` varchar(50) NOT NULL,
  `CharityEmail` varchar(50) NOT NULL,
  `CharityNumber` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Catagories` int(20) DEFAULT NULL,
  `cha_status` int(50) NOT NULL,
  `message` text NOT NULL,
  `photos` varchar(55) NOT NULL,
  `c_role` int(10) NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charity_id`, `CharityName`, `CharityAddress`, `CharityEmail`, `CharityNumber`, `username`, `password`, `Catagories`, `cha_status`, `message`, `photos`, `c_role`) VALUES
(1, 'rBiddaNondho', 'r', 'cloudysky121@gmail.c', '0', 'user', '1', 4, 0, '', '', 4),
(3, 'BiddaNondho', 'Dhaka', 'cloudysky121@gmail.c', '0178546478', 'BiddaNondho', '2', 4, 0, '', '', 4),
(5, '1 Takar Meal', 'Dhaka', 'cloudysky121@gmail.com', '0178546478', 'user', 'rakib1996', 2, 0, '', '', 4),
(6, 'Bisti Fundation', 'Gandaria', 'Torikul@gmail.com', '017525668877', 'jahangir', 'e', 2, 0, '', '', 4),
(19, '১ টাকায় চাল!', 'রাঙামাটি', 'cloudysky121@gmail.com', '0178546478', 'user', '1', 1, 1, 'অবিশ্বাস্য মনে হলেও এটাই সত্যি! ১ টাকায় চাল!\r\nপাহাড়ি এই জনপদে বসবাসরত হতদরিদ্র পরিবারের মানুষগুলোর আজ সুযোগ থাকবে পাঁচ টাকায় ব্যাগভর্তি বাজারের।\r\n\r\n', '1696248716_bdfe72fdee305467b903.jpg', 4),
(20, 'আলোকিত জীবন', 'Barisal ', 'alo@gmail.com', '0178546478', 'alo', '1', 3, 1, 'শিক্ষা প্রয়াস একটি সংগঠন যা শিক্ষা ও জ্ঞানের প্রসার নিয়ে কাজ করে। এর উদ্দেশ্য সকলের জন্য সমান অধিকার ও সুযোগ নিশ্চিত করা।\n\n', '1696265134_3f9ae6f8547b17552939.jpg', 4),
(21, 'স্পর্শ প্রয়াস', 'Dhaka', 'es@gmail.com', '0178546478', 'es', '1', 1, 1, 'মানুষের হৃদয় স্পর্শ করে, তাদের ভাবনা ও অনুভুতির সাথে সংযোগ স্থাপনের উদ্দেশ্যে প্রয়াস করি।', '1696270072_c53ed0db9ba8efd7d5b5.jpeg', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `charity_view`
-- (See below for the actual view)
--
CREATE TABLE `charity_view` (
`charity` int(11)
,`charity_amount` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `ddonetion`
--

CREATE TABLE `ddonetion` (
  `don_id` int(15) NOT NULL,
  `don_name` varchar(50) NOT NULL,
  `don_address` varchar(55) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `privacy` varchar(15) NOT NULL,
  `event_id` int(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `don_number` varchar(20) NOT NULL,
  `don_email` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `donner_id` int(11) NOT NULL,
  `charity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ddonetion`
--

INSERT INTO `ddonetion` (`don_id`, `don_name`, `don_address`, `paymentMethod`, `privacy`, `event_id`, `amount`, `don_number`, `don_email`, `date`, `donner_id`, `charity`) VALUES
(7, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 13, 15, '01775566772', 'cloudysky121@gmail.com', '2023-10-04', 19, 0),
(8, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 12, 500, '01775566772', 'cloudysky121@gmail.com', '2023-10-04', 19, 0),
(9, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 12, 1000, '01775566772', 'cloudysky121@gmail.com', '2023-10-04', 19, 6),
(12, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 14, 4000, '01775566772', 'cloudysky121@gmail.com', '2023-10-04', 19, 21),
(13, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 10, 200, '01775566772', 'cloudysky121@gmail.com', '2023-10-04', 19, 3),
(14, 'Rakib', 'maa villa, college road', 'credit', 'yes', 12, 10000, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 18, 6),
(15, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 12, 10000, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 19, 6),
(16, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 14, 1000, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 19, 21),
(17, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 12, 28500, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 19, 6),
(18, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 10, 5000, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 19, 3),
(19, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 10, 2000, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 19, 3),
(20, '3d@gmail.com', 'jurain', 'credit', 'yes', 10, 50, '01775566887', '3d@gmail.com', '2023-10-05', 22, 3),
(21, 'cloudysky121@gmail.com', 'maa villa, college road', 'credit', 'yes', 12, 5000, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 21, 6),
(22, 'cloudysky121@gmail.com', 'maa villa, college road', 'credit', 'yes', 12, 4500, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 21, 6),
(23, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 12, 500, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 19, 6),
(24, 'Rakib', 'maa villa, college road', 'credit', 'yes', 10, 50, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 18, 3),
(25, 'cloudysky121@gmail.com', 'maa villa, college road', 'credit', 'yes', 10, 15, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 21, 3),
(26, 'rakib sona', '185/1 Saidurs Towers', 'credit', 'yes', 10, 10, '01775566772', 'cloudysky121@gmail.com', '2023-10-05', 17, 3),
(27, 'MD RAKIBUL ISLAM', 'maa villa, college road', 'credit', 'yes', 13, 500, '01775566772', 'cloudysky121@gmail.com', '2023-10-06', 0, 20),
(28, 'MD. MOSARAF HOSSAEN', 'maa villa,college road', 'credit', 'yes', 13, 500, '01775566772', 'cloudysky121@gmail.com', '2023-10-06', 21, 20),
(29, 'kamrul', 'sawrapara', 'credit', 'yes', 13, 500, '01775566772', 'kamrul@gmail.com', '2023-10-06', 23, 20),
(30, 'kamrul', 'sawrapara', 'credit', 'yes', 12, 5000, '01775566772', 'kamrul@gmail.com', '2023-10-06', 23, 6),
(31, 'cloudysky121@gmail.com', 'maa villa, college road', 'credit', 'yes', 12, 35000, '01775566772', 'cloudysky121@gmail.com', '2023-10-06', 21, 6),
(32, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 10, 0, '01775566772', 'cloudysky121@gmail.com', '2023-10-06', 19, 3),
(33, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 10, 0, '01775566772', 'cloudysky121@gmail.com', '2023-10-06', 19, 3),
(34, 'Rakib Ahsan', 'Dhaka', 'credit', 'yes', 13, 0, '01775566772', 'cloudysky121@gmail.com', '2023-10-06', 19, 20),
(35, 'cloudysky121@gmail.com', 'maa villa, college road', 'credit', 'yes', 10, 3000, '01775566772', 'cloudysky121@gmail.com', '2023-10-08', 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ev_id` int(11) NOT NULL,
  `ev_name` varchar(50) NOT NULL,
  `ev_location` varchar(50) NOT NULL,
  `ev_organiser` varchar(50) NOT NULL,
  `ev_time` datetime NOT NULL,
  `ev_description` text NOT NULL,
  `eventphoto` varchar(50) DEFAULT NULL,
  `amountneed` int(50) NOT NULL,
  `amountgot` int(50) DEFAULT NULL,
  `ev_status` int(50) DEFAULT 1,
  `mulimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ev_id`, `ev_name`, `ev_location`, `ev_organiser`, `ev_time`, `ev_description`, `eventphoto`, `amountneed`, `amountgot`, `ev_status`, `mulimage`) VALUES
(10, '২ মিনিটের বাজার ', 'নরসিংদী', '3', '2023-10-02 22:14:00', '\" ২ মিনিটের বাজার \" - হতদরিদ্র ২৫০ পরিবারের মাঝে বাজারের স্বাধীনতা দিতে আজ আসছি নরসিংদী শিল্পকলা একাডেমিতে। ', '1696263291_c92946f7471d05f72ead.jpg', 10000, 9000, 1, ''),
(12, 'সবার খাবার', 'চট্টগ্রাম ', '6', '2023-10-02 10:00:00', '\"পঙ্গু মানুষরে দয়া দেখায়, কাজ দেয় না মানুষ...\r\nআগে জীবন নিয়ে এত চিন্তা করতাম না,। মাইয়া হওয়ার পর কিছু তো একটা করতে হবে। ', '1696263718_ad39a6f147161cf34265.jpg', 100000, 30000, 1, ''),
(13, '১ টাকার সদায়', 'রামপুরা ঢাকা', '20', '2023-10-03 00:15:00', 'এই ইভেন্টটি প্রত্যেক টাকার অমূল্যত্ব প্রশাসনের লক্ষ্যে আয়োজিত। এটি আমাদের প্রতি যে কতটুকু সীমিত সংসাধন আছে, সেটির সাথে কোন বৃহত্তর পরিবর্তন সৃজন সম্ভব তা দেখানোর চেষ্টা করে। প্রত্যেকের এক টাকা, যখন সঠিকভাবে ব্যবহার করা হয়, তখন সেটি বৃহত্তর সমাজের জন্য অনূদিত উপকারে রূপান্তরিত হতে পারে।\r\n\r\n\r\n\r\n\r\n', '1696270746_5416c49ecdbb3f5b764a.jpg', 100000, NULL, 1, '1696690795_eb66f694a49db1ad4e6d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eventphotos`
--

CREATE TABLE `eventphotos` (
  `ep_id` int(15) NOT NULL,
  `eventpname` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventphotos`
--

INSERT INTO `eventphotos` (`ep_id`, `eventpname`, `event_id`) VALUES
(1, '1696701417_801028f615def10d2fdd.jpg', 10),
(2, '1696701417_cd6cdc03f3eddf468492.jpg', 10),
(3, '1696701417_d3c23dc2d2507cb768b3.jpg', 10),
(4, '1696701448_200d4b8c22d308a732d6.jpg', 12),
(5, '1696701448_3a2219331b50f1137640.jpg', 12),
(6, '1696701448_a602a968e97ff6dcc45e.jpg', 12),
(7, '1696701672_aa6fa8f2e5c9018cab82.jpg', 12),
(8, '1696701672_493c1eebd12b496d9b78.webp', 12),
(9, '1696701672_311159c099a4c4beab5c.jpg', 12),
(10, '1696701672_be8d08c45deb8b56d2d0.webp', 12);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(15) NOT NULL,
  `payname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Volunteer'),
(2, 'Donner'),
(3, 'Admin'),
(4, 'Charity ');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Running '),
(4, 'On Hold'),
(5, 'Complete ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalamount`
-- (See below for the actual view)
--
CREATE TABLE `totalamount` (
`event_id` int(50)
,`total_amount` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `u_role` int(10) DEFAULT NULL,
  `u_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `address`, `email`, `number`, `username`, `password`, `u_role`, `u_photo`) VALUES
(17, 'rakib sona', '185/1 Saidurs Towers', 'cloudysky121@gmail.com', '01775566772', 'rakib', '1', 2, '1696329078_859f0de80072ce729e52.png'),
(18, 'Rakib', 'maa villa, college road', 'cloudysky121@gmail.com', '01775566772', 'r', '1', 3, '1696330089_5a3db42fe6fc840c89a6.jpg'),
(19, 'Rakib Ahsan', 'Dhaka', 'cloudysky121@gmail.com', '01775566772', 'admin', '1', 3, '1696406372_37eedb448cc556e16acb.jpg'),
(20, 'pial', 'barisal', 'cloudysky121@gmail.com', '01775566772', 'pial', '1', 2, '1696433997_89e530347881b18ae5cf.png'),
(21, 'cloudysky121@gmail.com', 'maa villa, college road', 'cloudysky121@gmail.com', '01775566772', 'user', '1', 2, '1696435162_d009fc6d1e14c054656b.jpg'),
(22, '3d@gmail.com', 'jurain', '3d@gmail.com', '01775566887', 'a', '1', 2, '1696482473_7536c669275052ef9ba0.png'),
(23, 'kamrul', 'sawrapara', 'kamrul@gmail.com', '01775566772', 'kamrul', '1', 2, '1696573187_099a7cf8cac79b76b5e6.jpeg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `useramount`
-- (See below for the actual view)
--
CREATE TABLE `useramount` (
`donner_id` int(11)
,`total_amount` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Structure for view `charity_view`
--
DROP TABLE IF EXISTS `charity_view`;

CREATE VIEW `charity_view`  AS SELECT `ddonetion`.`charity` AS `charity`, sum(`ddonetion`.`amount`) AS `charity_amount` FROM `ddonetion` GROUP BY `ddonetion`.`charity` ;

-- --------------------------------------------------------

--
-- Structure for view `totalamount`
--
DROP TABLE IF EXISTS `totalamount`;

CREATE VIEW `totalamount`  AS SELECT `ddonetion`.`event_id` AS `event_id`, sum(`ddonetion`.`amount`) AS `total_amount` FROM `ddonetion` GROUP BY `ddonetion`.`event_id` ;

-- --------------------------------------------------------

--
-- Structure for view `useramount`
--
DROP TABLE IF EXISTS `useramount`;

CREATE VIEW `useramount`  AS SELECT `ddonetion`.`donner_id` AS `donner_id`, sum(`ddonetion`.`amount`) AS `total_amount` FROM `ddonetion` GROUP BY `ddonetion`.`donner_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`charity_id`);

--
-- Indexes for table `ddonetion`
--
ALTER TABLE `ddonetion`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `eventphotos`
--
ALTER TABLE `eventphotos`
  ADD PRIMARY KEY (`ep_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `charity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ddonetion`
--
ALTER TABLE `ddonetion`
  MODIFY `don_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `eventphotos`
--
ALTER TABLE `eventphotos`
  MODIFY `ep_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
