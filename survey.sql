-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(9, 3, 'Yes', '2020-06-02 01:06:48', '2020-06-02 01:06:48'),
(10, 3, 'No', '2020-06-02 01:06:48', '2020-06-02 01:06:48'),
(11, 3, 'Sometime', '2020-06-02 01:06:48', '2020-06-02 01:06:48'),
(12, 3, 'No Idea', '2020-06-02 01:06:48', '2020-06-02 01:06:48'),
(13, 4, 'C', '2020-06-02 01:07:45', '2020-06-02 01:07:45'),
(14, 4, 'C++', '2020-06-02 01:07:45', '2020-06-02 01:07:45'),
(15, 4, 'Java', '2020-06-02 01:07:45', '2020-06-02 01:07:45'),
(16, 4, 'Kotlin', '2020-06-02 01:07:45', '2020-06-02 01:07:45'),
(17, 5, '2 hours', '2020-06-02 01:08:55', '2020-06-02 01:08:55'),
(18, 5, '4 hours', '2020-06-02 01:08:55', '2020-06-02 01:08:55'),
(19, 5, 'more than 4 hours', '2020-06-02 01:08:55', '2020-06-02 01:08:55'),
(20, 5, 'I don\'t study?', '2020-06-02 01:08:55', '2020-06-02 01:08:55'),
(21, 6, 'Rarely', '2020-06-02 01:59:13', '2020-06-02 01:59:13'),
(22, 6, 'Everyday', '2020-06-02 01:59:13', '2020-06-02 01:59:13'),
(23, 6, 'Never', '2020-06-02 01:59:13', '2020-06-02 01:59:13'),
(24, 6, 'No Idea', '2020-06-02 01:59:14', '2020-06-02 01:59:14');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_06_081237_create_questionaires_table', 1),
(5, '2020_05_11_085545_create_questions_table', 1),
(6, '2020_05_11_085809_create_answers_table', 1),
(7, '2020_05_27_134245_create_surveys_table', 1),
(8, '2020_05_27_163919_create_survey_responses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('harry@gmail.com', '$2y$10$cUYLEahLXhAbiIjBW6vMv.mZGkL/4nwedyYHhsbBMjPlh0kfMZoq2', '2020-06-02 03:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `questionaires`
--

CREATE TABLE `questionaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questionaires`
--

INSERT INTO `questionaires` (`id`, `user_id`, `title`, `purpose`, `created_at`, `updated_at`) VALUES
(2, 1, 'Student Survey', 'This survey will help us to decide the best subjects for the upcoming semester...', '2020-06-02 01:06:12', '2020-06-02 01:06:12'),
(3, 1, 'Surveying the Favorite food', 'Finding the perfect food...', '2020-06-02 01:56:43', '2020-06-02 01:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionaire_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionaire_id`, `question`, `created_at`, `updated_at`) VALUES
(3, 2, 'Do you enjoy programming?', '2020-06-02 01:06:48', '2020-06-02 01:06:48'),
(4, 2, 'Which is programming language you prefer ?', '2020-06-02 01:07:45', '2020-06-02 01:07:45'),
(5, 2, 'How much time you give to study each day?', '2020-06-02 01:08:55', '2020-06-02 01:08:55'),
(6, 3, 'do you eat burger?', '2020-06-02 01:59:13', '2020-06-02 01:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionaire_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `questionaire_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'harry', 'harry@gmail.com', '2020-06-02 01:12:44', '2020-06-02 01:12:44'),
(2, 2, 'Marie', 'marie@gmail.com', '2020-06-02 01:13:27', '2020-06-02 01:13:27'),
(3, 2, 'Jake', 'jake@gmail.com', '2020-06-02 01:35:31', '2020-06-02 01:35:31'),
(4, 2, 'jake', 'jake@gmail.com', '2020-06-02 01:45:03', '2020-06-02 01:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `survey_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `survey_id`, `question_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 9, '2020-06-02 01:12:44', '2020-06-02 01:12:44'),
(2, 1, 4, 16, '2020-06-02 01:12:44', '2020-06-02 01:12:44'),
(3, 1, 5, 18, '2020-06-02 01:12:44', '2020-06-02 01:12:44'),
(4, 2, 3, 11, '2020-06-02 01:13:27', '2020-06-02 01:13:27'),
(5, 2, 4, 15, '2020-06-02 01:13:27', '2020-06-02 01:13:27'),
(6, 2, 5, 18, '2020-06-02 01:13:27', '2020-06-02 01:13:27'),
(7, 3, 3, 9, '2020-06-02 01:35:31', '2020-06-02 01:35:31'),
(8, 3, 4, 15, '2020-06-02 01:35:31', '2020-06-02 01:35:31'),
(9, 3, 5, 19, '2020-06-02 01:35:31', '2020-06-02 01:35:31'),
(10, 4, 3, 11, '2020-06-02 01:45:03', '2020-06-02 01:45:03'),
(11, 4, 4, 16, '2020-06-02 01:45:03', '2020-06-02 01:45:03'),
(12, 4, 5, 18, '2020-06-02 01:45:03', '2020-06-02 01:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harry', 'harry@gmail.com', NULL, '$2y$10$LEo6YDT6Z3nMpRVZURqD9Oz6c7hmVMjC/9WpiI5/D/8xC7Foy8EqW', NULL, '2020-06-02 00:55:08', '2020-06-02 00:55:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

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
-- Indexes for table `questionaires`
--
ALTER TABLE `questionaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_questionaire_id_foreign` (`questionaire_id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questionaires`
--
ALTER TABLE `questionaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_questionaire_id_foreign` FOREIGN KEY (`questionaire_id`) REFERENCES `questionaires` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
