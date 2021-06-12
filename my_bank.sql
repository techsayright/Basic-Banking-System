-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2021 at 04:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(7) NOT NULL,
  `sender` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `amt` int(7) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `sender`, `receiver`, `amt`, `time`) VALUES
(1, 'Lakki', 'darshan', 50, '2021-05-09 17:17:34'),
(2, 'hp', 'Jigar Trivedi', 1000, '2021-05-10 01:54:10'),
(3, 'Shyam patel', 'Ashish chauhan', 10, '2021-05-10 02:32:55'),
(4, 'Ronak patel', 'munni', 2, '2021-05-10 02:35:05'),
(5, 'Neet ', 'darshan', 1000, '2021-05-10 02:36:21'),
(6, 'Neet ', 'darshan', 67, '2021-05-10 02:51:32'),
(7, 'Neet ', 'anjali', 639, '2021-05-10 02:51:51'),
(8, 'Neet ', 'Lakki', 3, '2021-05-10 02:52:02'),
(9, 'Neet ', 'Lakki', 1, '2021-05-10 02:53:09'),
(10, 'Neet ', 'munni', 4, '2021-05-10 02:53:26'),
(11, 'Neet ', 'Ashish chauhan', 3, '2021-05-10 02:53:36'),
(12, 'neet', 'Lakki', 1, '2021-05-10 02:54:30'),
(13, 'neet', 'darshan', 1, '2021-05-10 02:54:39'),
(14, 'neet', 'Shyam patel', 1, '2021-05-10 02:54:48'),
(15, 'neet', 'Ronak patel', 1, '2021-05-10 02:54:55'),
(16, 'neet', 'hp', 1, '2021-05-10 02:55:02'),
(17, 'neet', 'Ashish chauhan', 1, '2021-05-10 02:55:13'),
(18, 'neet', 'anjali', 1, '2021-05-10 02:55:21'),
(19, 'neet', 'radhe', 1, '2021-05-10 02:55:28'),
(20, 'neet', 'munni', 1, '2021-05-10 02:55:44'),
(21, 'neet', 'radhe', 1, '2021-05-10 02:55:53'),
(22, 'neet', 'munni', 1, '2021-05-10 02:56:03'),
(23, 'neet', 'Jigar Trivedi', 1, '2021-05-10 02:56:12'),
(24, 'neet', 'Neet ', 4, '2021-05-10 02:56:20'),
(25, 'neet', 'munni', 1, '2021-05-10 02:56:39'),
(26, 'Lakki', 'darshan', 1, '2021-05-10 02:57:22'),
(27, 'Lakki', 'Shyam patel', 1, '2021-05-10 02:57:29'),
(28, 'Lakki', 'neet', 1, '2021-05-10 02:57:36'),
(29, 'Lakki', 'Ronak patel', 1, '2021-05-10 02:57:48'),
(30, 'Lakki', 'hp', 1, '2021-05-10 02:57:54'),
(31, 'Lakki', 'Ashish chauhan', 1, '2021-05-10 02:58:02'),
(32, 'Lakki', 'anjali', 1, '2021-05-10 02:58:09'),
(33, 'Lakki', 'anjali', 1, '2021-05-10 02:58:16'),
(34, 'Lakki', 'radhe', 1, '2021-05-10 02:58:23'),
(35, 'Lakki', 'radhe', 1, '2021-05-10 02:58:30'),
(36, 'Lakki', 'munni', 1, '2021-05-10 02:58:37'),
(37, 'Lakki', 'Jigar Trivedi', 1, '2021-05-10 02:58:45'),
(38, 'Lakki', 'Neet ', 1, '2021-05-10 02:58:55'),
(39, 'darshan', 'Lakki', 6, '2021-05-10 03:00:43'),
(40, 'darshan', 'Shyam patel', 3, '2021-05-10 03:00:55'),
(41, 'darshan', 'neet', 68, '2021-05-10 03:01:06'),
(42, 'darshan', 'Ronak patel', 9, '2021-05-10 03:01:14'),
(43, 'darshan', 'hp', 3, '2021-05-10 03:01:22'),
(44, 'darshan', 'Ashish chauhan', 528, '2021-05-10 03:01:31'),
(45, 'darshan', 'anjali', 3, '2021-05-10 03:01:41'),
(46, 'darshan', 'radhe', 5, '2021-05-10 03:01:51'),
(47, 'darshan', 'munni', 6, '2021-05-10 03:02:19'),
(48, 'darshan', 'Jigar Trivedi', 3, '2021-05-10 03:02:28'),
(49, 'darshan', 'Neet ', 164, '2021-05-10 03:02:42'),
(50, 'Shyam patel', 'Lakki', 39, '2021-05-10 03:03:17'),
(51, 'Shyam patel', 'darshan', 987, '2021-05-10 03:03:28'),
(52, 'Shyam patel', 'neet', 35, '2021-05-10 03:03:42'),
(53, 'Shyam patel', 'hp', 9, '2021-05-10 03:03:53'),
(54, 'Shyam patel', 'hp', 3, '2021-05-10 03:04:01'),
(55, 'Shyam patel', 'Ashish chauhan', 3, '2021-05-10 03:04:08'),
(56, 'Shyam patel', 'anjali', 8, '2021-05-10 03:04:15'),
(57, 'Shyam patel', 'radhe', 35, '2021-05-10 03:04:24'),
(58, 'Shyam patel', 'radhe', 3, '2021-05-10 03:04:32'),
(59, 'Shyam patel', 'munni', 98, '2021-05-10 03:04:41'),
(60, 'Shyam patel', 'Jigar Trivedi', 71, '2021-05-10 03:04:53'),
(61, 'Shyam patel', 'Neet ', 4, '2021-05-10 03:05:00'),
(62, 'Ronak patel', 'Lakki', 3, '2021-05-10 03:05:30'),
(63, 'Ronak patel', 'darshan', 2, '2021-05-10 03:05:47'),
(64, 'Ronak patel', 'Shyam patel', 10, '2021-05-10 03:06:00'),
(65, 'Ronak patel', 'neet', 3, '2021-05-10 03:06:09'),
(66, 'Ronak patel', 'hp', 13, '2021-05-10 03:06:19'),
(67, 'Ronak patel', 'Ashish chauhan', 4, '2021-05-10 03:06:29'),
(68, 'Ronak patel', 'anjali', 2, '2021-05-10 03:06:37'),
(69, 'Ronak patel', 'radhe', 8, '2021-05-10 03:06:46'),
(70, 'Ronak patel', 'munni', 21, '2021-05-10 03:06:59'),
(71, 'Ronak patel', 'Jigar Trivedi', 24, '2021-05-10 03:07:11'),
(72, 'Ronak patel', 'Neet ', 4, '2021-05-10 03:07:20'),
(73, 'hp', 'Lakki', 10, '2021-05-10 03:07:54'),
(74, 'hp', 'darshan', 90, '2021-05-10 03:08:07'),
(75, 'hp', 'Shyam patel', 190, '2021-05-10 03:08:17'),
(76, 'hp', 'neet', 10, '2021-05-10 03:08:30'),
(77, 'hp', 'Ronak patel', 85, '2021-05-10 03:08:40'),
(78, 'hp', 'Ashish chauhan', 450, '2021-05-10 03:08:57'),
(79, 'hp', 'anjali', 86, '2021-05-10 03:09:10'),
(80, 'hp', 'radhe', 86, '2021-05-10 03:09:20'),
(81, 'hp', 'munni', 249, '2021-05-10 03:09:31'),
(82, 'hp', 'Jigar Trivedi', 3, '2021-05-10 03:09:41'),
(83, 'hp', 'Neet ', 4, '2021-05-10 03:09:49'),
(84, 'Ashish chauhan', 'Lakki', 2, '2021-05-10 03:10:23'),
(85, 'Ashish chauhan', 'darshan', 356, '2021-05-10 03:10:31'),
(86, 'Ashish chauhan', 'Shyam patel', 36, '2021-05-10 03:10:40'),
(87, 'Ashish chauhan', 'neet', 38, '2021-05-10 03:10:50'),
(88, 'Ashish chauhan', 'Ronak patel', 69, '2021-05-10 03:11:00'),
(89, 'Ashish chauhan', 'hp', 3, '2021-05-10 03:11:08'),
(90, 'Ashish chauhan', 'anjali', 4, '2021-05-10 03:11:34'),
(91, 'Ashish chauhan', 'radhe', 14, '2021-05-10 03:11:44'),
(92, 'Ashish chauhan', 'munni', 51, '2021-05-10 03:12:05'),
(93, 'Ashish chauhan', 'Jigar Trivedi', 97, '2021-05-10 03:12:15'),
(94, 'Ashish chauhan', 'Jigar Trivedi', 9, '2021-05-10 03:12:30'),
(95, 'Ashish chauhan', 'Neet ', 545, '2021-05-10 03:12:43'),
(96, 'anjali', 'Lakki', 8, '2021-05-10 03:13:21'),
(97, 'anjali', 'darshan', 44, '2021-05-10 03:13:31'),
(98, 'anjali', 'Shyam patel', 64, '2021-05-10 03:13:45'),
(99, 'anjali', 'neet', 2, '2021-05-10 03:13:53'),
(100, 'anjali', 'Ronak patel', 3, '2021-05-10 03:14:03'),
(101, 'anjali', 'hp', 36, '2021-05-10 03:14:12'),
(102, 'anjali', 'Ashish chauhan', 34, '2021-05-10 03:14:24'),
(103, 'anjali', 'radhe', 36, '2021-05-10 03:14:31'),
(104, 'anjali', 'munni', 622, '2021-05-10 03:14:40'),
(105, 'anjali', 'Jigar Trivedi', 91, '2021-05-10 03:14:47'),
(106, 'anjali', 'Neet ', 3525, '2021-05-10 03:14:57'),
(107, 'radhe', 'Lakki', 65, '2021-05-10 03:15:26'),
(108, 'radhe', 'darshan', 982, '2021-05-10 03:15:34'),
(109, 'radhe', 'Shyam patel', 395, '2021-05-10 03:15:42'),
(110, 'radhe', 'neet', 395, '2021-05-10 03:15:49'),
(111, 'radhe', 'Ronak patel', 583, '2021-05-10 03:15:56'),
(112, 'radhe', 'Ronak patel', 37, '2021-05-10 03:16:09'),
(113, 'radhe', 'hp', 86, '2021-05-10 03:16:20'),
(114, 'radhe', 'Ashish chauhan', 98, '2021-05-10 03:16:30'),
(115, 'radhe', 'anjali', 75, '2021-05-10 03:16:40'),
(116, 'radhe', 'munni', 88, '2021-05-10 03:16:48'),
(117, 'radhe', 'Jigar Trivedi', 365, '2021-05-10 03:16:58'),
(118, 'radhe', 'Neet ', 65, '2021-05-10 03:17:07'),
(119, 'munni', 'Lakki', 68, '2021-05-10 03:17:40'),
(120, 'munni', 'darshan', 95, '2021-05-10 03:17:47'),
(121, 'munni', 'Shyam patel', 98, '2021-05-10 03:17:55'),
(122, 'munni', 'Ronak patel', 987, '2021-05-10 03:18:06'),
(123, 'munni', 'hp', 68, '2021-05-10 03:18:14'),
(124, 'munni', 'anjali', 88, '2021-05-10 03:18:21'),
(125, 'munni', 'Ashish chauhan', 985, '2021-05-10 03:18:29'),
(126, 'munni', 'radhe', 652, '2021-05-10 03:18:36'),
(127, 'munni', 'Jigar Trivedi', 65585, '2021-05-10 03:18:44'),
(128, 'munni', 'Neet ', 656, '2021-05-10 03:19:00'),
(129, 'Jigar Trivedi', 'Lakki', 4616, '2021-05-10 03:19:34'),
(130, 'Jigar Trivedi', 'darshan', 48676, '2021-05-10 03:19:46'),
(131, 'Jigar Trivedi', 'Shyam patel', 136, '2021-05-10 03:19:55'),
(132, 'Jigar Trivedi', 'neet', 346, '2021-05-10 03:20:07'),
(133, 'Jigar Trivedi', 'Ronak patel', 466, '2021-05-10 03:20:14'),
(134, 'Jigar Trivedi', 'hp', 7946, '2021-05-10 03:20:23'),
(135, 'Jigar Trivedi', 'Ashish chauhan', 131, '2021-05-10 03:20:31'),
(136, 'Jigar Trivedi', 'anjali', 9464, '2021-05-10 03:20:39'),
(137, 'Jigar Trivedi', 'radhe', 646, '2021-05-10 03:20:46'),
(138, 'Jigar Trivedi', 'munni', 44, '2021-05-10 03:21:02'),
(139, 'Jigar Trivedi', 'Neet ', 462, '2021-05-10 03:21:09'),
(140, 'Dev', 'poonam', 19, '2021-05-10 10:41:48'),
(141, 'darshan', 'Ronak patel', 101500, '2021-05-12 15:49:12'),
(142, 'Ronak patel', 'darshan', 113645, '2021-05-13 05:27:34'),
(143, 'Yeman', 'darshan', 100000, '2021-05-13 11:07:33'),
(144, 'Raj', 'Ronak patel', 5181, '2021-05-16 04:07:30'),
(145, 'Lakki', 'neet', 50000, '2021-05-26 02:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Lakki', 'lakki00@gmail.com', 54759),
(2, 'darshan', 'darshan@hotmail.com', 213698),
(3, 'Shyam patel', 'shyampatel@ggu.com', 4629),
(4, 'neet', 'neet@yahoo.com', 80881),
(5, 'Ronak patel', 'ronak@email.con', 5181),
(6, 'hp', 'haresh@hp.com', 49436),
(7, 'Ashish chauhan', 'ashish@hotmail.com', 21024),
(8, 'anjali', 'anjali@shah.com', 66752),
(9, 'radhe', 'Radhe@gmail.com', 88600),
(10, 'munni', 'munni@munna.com', 30672),
(11, 'Jigar Trivedi', 'harty@gmail.com', 44317),
(12, 'Neet ', 'patelneet074@gmail.com', 13717),
(13, 'Dev', 'dev@gmail.com', 99981),
(14, 'poonam', 'poonam@pk.com', 92368),
(15, 'Yeman', 'yemanadep@gmail.com', 0),
(16, 'Jigar', 'harty@gmail.com', 22222),
(17, 'Raj', 'vsuh@gmail.com', 94818);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
