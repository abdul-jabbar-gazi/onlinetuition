-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 10:52 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_tuition_provider`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('niloygazi@gmail.com', '$2y$10$6SWdDyOe4Lye5Vpc1DCQD.OMNIepyywZfR63W8COV9YyHpdGm05oK', '2019-11-22 12:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `teacherid`, `studentid`, `rate`) VALUES
(13, 1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `reportstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `id` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `permanentAddress` varchar(250) NOT NULL,
  `currentStatus` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `maritalStatus` varchar(250) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `skill` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`id`, `firstName`, `lastName`, `permanentAddress`, `currentStatus`, `gender`, `religion`, `maritalStatus`, `dateOfBirth`, `user_id`, `salary`, `skill`) VALUES
(1, 'Shunno', 'Ahmed', 'Dhaka', 'Student', 'Male', 'Islam', 'Single', '2019-12-02', 1, 5000, 'Programming'),
(2, 'Ahmed', 'Shojib', 'Dhaka', 'Student', 'Male', 'Islam', 'Single', '1996-02-06', 5, 2000, 'English'),
(3, 'Mostak', 'Ahmed', 'Dhaka', 'Student', 'Male', 'Islam', 'Single', '1995-12-12', 6, 3000, 'Bangla');

-- --------------------------------------------------------

--
-- Table structure for table `teacherstudent`
--

CREATE TABLE `teacherstudent` (
  `id` int(11) NOT NULL,
  `user_form` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `action_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherstudent`
--

INSERT INTO `teacherstudent` (`id`, `user_form`, `user_to`, `status`, `action_user_id`) VALUES
(15, 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`) VALUES
(1, 'Shunno', 'shonno@gmail.com', NULL, '$2y$10$mhx8HZt2S.5qaizs18RVHOMfvjhXw7a2i52lqkiDXzSOkJ8a9KlEi', NULL, '2019-11-09 00:57:56', '2019-11-09 00:57:56', 1),
(2, 'Niloy', 'niloy@gmail.com', NULL, '$2y$10$oG7GnmOmy/TTTlMx7nK9HuuTaE3L2ntTEQzPz5PCfEvivIC/zU24e', NULL, '2019-11-10 03:44:09', '2019-11-10 03:44:09', 2),
(3, 'Gazi', 'gazi@gmail.com', NULL, '$2y$10$QtupBdvagwbhBkBpFK1h0.OganXugp79BSaT6t4wFNJXsnFz241iW', NULL, '2019-12-19 17:31:52', '2019-12-19 17:31:52', 2),
(4, 'Admin', 'admin@gmail.com', NULL, '$2y$10$QtupBdvagwbhBkBpFK1h0.OganXugp79BSaT6t4wFNJXsnFz241iW', '', NULL, NULL, 3),
(5, 'Ahmed', 'ahmed@gmail.com', NULL, '$2y$10$zRM/eRuxnPyrlC/vp2Zp/.Utmua9oV9QKkBOkuZfUpaYi5JqVwGva', NULL, '2019-12-20 22:12:55', '2019-12-20 22:12:55', 1),
(6, 'Mostak', 'mostak@gmail.com', NULL, '$2y$10$vzhyvAWXi7H0NO.qk5lkm.Val9crnEzuXgjcGv98Fj9AqTo/8uOlK', NULL, '2019-12-20 23:21:00', '2019-12-20 23:21:00', 1),
(7, 'Nishat', 'nishat@gmail.com', NULL, '$2y$10$uHxt0iAjdFsNnZxuCPvXSeuqOAgHhZnnZjRTq7b5E8AwEjxotXOCi', NULL, '2019-12-21 08:53:14', '2019-12-21 08:53:14', 2),
(8, 'Nishat', 'alvee@gmail.com', NULL, '$2y$10$UaLi9u4MbeZRrpTlvpNPgu5lvX1FUpeq1F.8c.XeJp7Hq.midXcW2', NULL, '2019-12-21 08:55:08', '2019-12-21 08:55:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherstudent`
--
ALTER TABLE `teacherstudent`
  ADD PRIMARY KEY (`id`,`user_form`,`user_to`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacherstudent`
--
ALTER TABLE `teacherstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
