-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 11:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getmagic`
--

-- --------------------------------------------------------

--
-- Table structure for table `assistantprofiles`
--

CREATE TABLE `assistantprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilepicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefer_timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` int(11) NOT NULL DEFAULT 0,
  `quiz` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assistantprofiles`
--

INSERT INTO `assistantprofiles` (`id`, `email`, `profilepicture`, `video`, `describe`, `working_hours`, `prefer_timezone`, `equipment`, `specialization`, `skills`, `github_url`, `resume`, `session`, `quiz`, `created_at`, `updated_at`) VALUES
(8, 'balkar@gmail.com', NULL, 'https://www.youtube.com/embed/tgbNymZ7vqY', NULL, '25', 'Flexible', NULL, 'webdeveloper', 'sales', NULL, NULL, 1, 1, '2021-10-28 00:08:34', '2021-10-29 01:00:52'),
(12, 'balkar1@gmail.com', 'getmagic.rar', 'https://www.youtube.com/embed/kffacxfA7G4', 'dasfdsf', '30', 'Flexible', 'on', 'webdeveloper', 'php', NULL, NULL, 1, 1, '2021-10-30 01:55:03', '2021-11-01 02:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `clientchatting`
--

CREATE TABLE `clientchatting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciver_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciver_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientchatting`
--

INSERT INTO `clientchatting` (`id`, `sender_id`, `reciver_id`, `sender_message`, `reciver_message`, `created_at`, `updated_at`) VALUES
(1, '1', '3', 'Hello', 'hey!', NULL, NULL),
(4, '1', '4', 'hello', NULL, '2021-11-01 01:51:27', '2021-11-01 01:51:27'),
(5, '1', '4', 'hey', NULL, '2021-11-01 01:51:55', '2021-11-01 01:51:55'),
(6, '1', '3', 'hi', NULL, '2021-11-01 01:53:41', '2021-11-01 01:53:41'),
(7, '1', '3', 'ds', NULL, '2021-11-01 02:31:32', '2021-11-01 02:31:32'),
(8, '1', '3', 'asf', NULL, '2021-11-01 02:31:36', '2021-11-01 02:31:36'),
(9, '1', '4', 'dfdg', NULL, '2021-11-01 04:30:23', '2021-11-01 04:30:23'),
(10, '1', '4', 'fdgd', NULL, '2021-11-01 04:30:29', '2021-11-01 04:30:29'),
(11, '1', '4', 'fdgfdg', NULL, '2021-11-01 04:30:34', '2021-11-01 04:30:34'),
(12, '1', '4', 'dfgdfg', NULL, '2021-11-01 04:30:37', '2021-11-01 04:30:37'),
(13, '1', '4', 'dfgdg', NULL, '2021-11-01 04:30:43', '2021-11-01 04:30:43'),
(14, '1', '4', 'dfsgv', NULL, '2021-11-01 22:29:55', '2021-11-01 22:29:55'),
(15, '1', '4', 'v', NULL, '2021-11-01 22:30:16', '2021-11-01 22:30:16'),
(16, '1', '4', 'cv', NULL, '2021-11-01 22:30:27', '2021-11-01 22:30:27'),
(17, '1', '4', 'ds', NULL, '2021-11-01 22:31:15', '2021-11-01 22:31:15'),
(18, '1', '3', 'dfds', NULL, '2021-11-01 23:12:33', '2021-11-01 23:12:33'),
(19, '1', '3', 'dfds', NULL, '2021-11-01 23:13:03', '2021-11-01 23:13:03'),
(20, '1', '3', 'ww', NULL, '2021-11-01 23:13:16', '2021-11-01 23:13:16'),
(21, '1', '4', '12', NULL, '2021-11-01 23:13:26', '2021-11-01 23:13:26'),
(22, '6', '3', 'jhb', NULL, '2021-11-01 23:14:26', '2021-11-01 23:14:26'),
(23, '6', '3', '564', NULL, '2021-11-01 23:14:34', '2021-11-01 23:14:34'),
(24, '1', '3', 'fddf', NULL, '2021-11-02 02:35:20', '2021-11-02 02:35:20'),
(25, '1', '3', '123', NULL, '2021-11-02 02:35:28', '2021-11-02 02:35:28'),
(26, '1', '4', '987', NULL, '2021-11-02 02:36:59', '2021-11-02 02:36:59'),
(27, '1', '3', '5665', NULL, '2021-11-02 02:53:03', '2021-11-02 02:53:03'),
(28, '6', '3', 'dyhfg', NULL, '2021-11-02 02:53:26', '2021-11-02 02:53:26'),
(29, '1', '3', 'i sm balkar', NULL, '2021-11-02 02:55:27', '2021-11-02 02:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2021_10_25_052645_taskcats', 2),
(10, '2021_10_27_063537_assistantprofiles', 3),
(11, '2021_10_28_055519_quiz', 4),
(12, '2021_11_01_050742_chatting', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizs`
--

CREATE TABLE `quizs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizs`
--

INSERT INTO `quizs` (`id`, `question`, `options`, `answer`, `type`, `created_at`, `updated_at`) VALUES
(1, 'PHP stands for', 'Hypertext Preprocessor^^^Pretext Hypertext Preprocessor^^^Personal Home Processor^^^None of the above', '1', 'php', NULL, NULL),
(2, 'Which of the following is the default file extension of PHP?', '.php^^^.hphp^^^.xml^^^.html', '1', 'php', NULL, NULL),
(3, 'Which of the following is the correct way to open the file \"sample.txt\" as readable?', 'fopen(\'sample.txt\', \'r+\');^^^fopen(\'sample.txt\', \'r\');^^^fopen(\'sample.txt\', \'read\');^^^fopen(\'sample.txt\');', '2', 'php', NULL, NULL),
(4, 'Which is the right way of declaring a variable in PHP?', '$3hello^^^$_hello^^^$this^^^$5_Hello', '3', 'php', NULL, NULL),
(5, 'Which one of the following property scopes is not supported by PHP?', 'final^^^static^^^friendly^^^public', '3', 'php', NULL, NULL),
(6, '_______ refers to the exchange of goods or commodities against money or service.', 'Distribution^^^Place^^^Sales^^^Myopia', '3', 'sales', NULL, NULL),
(7, 'Sale has ________ function in an organization.', 'Only loss generating^^^only revenue generating^^^both loss as well as revenue generating^^^neither loss nor revenue generating', '2', 'sales', NULL, NULL),
(8, '__________ is the provider of goods or services.', 'The Supplier^^^The Buyer^^^The Seller^^^The Consumer', '3', 'sales', NULL, NULL),
(9, 'In Sales Management, SFA System stands for ________', 'Sales Force Activation^^^Sales Force Automation^^^Sales Factor Automation^^^Sales Force Achievement', '2', 'sales', NULL, NULL),
(10, 'Sales and Distribution Management majorly focuses on the___________', 'Buying aspect of an organization^^^Selling aspect of an organization^^^Negotiating aspect of an organization^^^Producing aspect of an organization', '2', 'sales', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taskcats`
--

CREATE TABLE `taskcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taskcats`
--

INSERT INTO `taskcats` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Do strategic research', '', NULL, NULL),
(2, 'Build my sales', '', NULL, NULL),
(3, 'Manage my marketing tasks', '', NULL, NULL),
(4, 'Offload office administration', '', NULL, NULL),
(5, 'Manage my customer support', '', NULL, NULL),
(6, 'Manage my personal finances', '', NULL, NULL),
(7, 'Enhance my lifestyle', '', NULL, NULL),
(8, 'Send gifts and donations', '', NULL, NULL),
(9, 'Manage my household', '', NULL, NULL),
(10, 'Recruit new talent', '', NULL, NULL),
(11, 'COVID-19 assistance', '', NULL, NULL),
(12, 'Find and order supplies', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `title_img` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `title_img`, `category_id`) VALUES
(1, 'Find N95 masks or alternatives', '', 11),
(3, 'Research employment laws', '', 11),
(4, 'Source hand sanitizer, toilet paper, gloves, and household essentials', '', 11),
(5, 'Cancel and secure refunds for travel plans', '', 11),
(6, 'Research hospital capacity', '', 11),
(7, 'Research health insurance policy', '', 11),
(8, 'Research employment laws', '', 11),
(9, 'Track remote job opportunities', '', 11),
(10, 'Help parents / seniors with supplies or groceries', '', 11),
(11, 'Organize a care package of chocolates and wine', '', 11),
(12, 'Research and compare equipment and gadgets for a home office set up', '', 11),
(13, 'Summarize competitor feature sets', '', 1),
(14, 'Track and report on product releases from a list of companies I\'ll provide', '', 1),
(15, 'Research potential investors for my next round', '', 1),
(16, 'Monitor and report on news and S1s for specific stocks', '', 1),
(17, 'Provide daily updates of news/blogs/social mentions', '', 1),
(18, 'Read these blog posts and summarize the key takeaways', '', 1),
(19, 'Clean up LinkedIn inbox', '', 2),
(20, 'Connect to LinkedIn 2nd degree connections that may be potential clients', '', 2),
(21, 'Respond to LinkedIn messages from potential leads', '', 2),
(22, 'Accept all LinkedIn pending invitations', '', 2),
(23, 'Locate potential leads in Salesforce based on my set criteria', '', 2),
(24, 'Build a report of leads who have attended specific conferences', '', 2),
(25, 'Track and manage customer testimonials ', '', 2),
(26, 'Enrich a potential customer list with their LinkedIn data', '', 2),
(27, 'Connect to attendees of an event over email', '', 2),
(28, 'Post all new blog posts on HackerNews', '', 3),
(29, 'Reply to Twitter mentions based on social media playbook', '', 3),
(30, 'Report on mentions of my company on Twitter or blog posts', '', 3),
(31, 'Find a video editor who specializes in product demo videos', '', 3),
(32, 'Repost our new blog posts on social media sites', '', 3),
(33, 'Contact event organizers and about panel or keynote speaking opportunities', '', 3),
(34, 'Build a list of influential thought leaders for my industry on Twitter based on these keywords', '', 3),
(35, 'Enroll in new software / online services', '', 4),
(36, 'Fill out application forms', '', 4),
(37, 'Convert PDF to a document', '', 4),
(38, 'Organize and clean up calendar', '', 4),
(39, 'Create email distribution lists', '', 4),
(40, 'Clean up Trello boards', '', 4),
(41, 'Edit Otter transcriptions', '', 4),
(42, 'Research best office equipment', '', 4),
(43, 'Customize and organize Slack', '', 4),
(44, 'Compare features and prices of project management software options', '', 4),
(45, 'Create PowerPoint presentations from my notes using our company templates ', '', 4),
(46, 'Answer my customer phone calls after hours', '', 5),
(47, 'Reply to customer support messages for my Shopify store within 2 minutes', '', 5),
(48, 'Respond to all the P2 tickets in Zendesk using our company\'s handbook', '', 5),
(49, 'Categorize our customer complaints in the past 6 months so we can update our FAQs', '', 5),
(50, 'Respond to Intercom inquiries within 2 minutes', '', 5),
(51, 'Research and compare credit cards with the best travel awards', '', 6),
(52, 'Pay bills over the phone', '', 6),
(53, 'Call Comcast to lower TV/Cable/Internet costs', '', 6),
(54, 'Organize transactions into correct categories on Mint', '', 6),
(55, 'Fill out application forms for credit cards', '', 6),
(56, 'Look at my email bills and list all my software subscriptions for review', '', 6),
(57, 'Compile recurring payments and order them from highest to lowest', '', 6),
(58, 'Find an online coupon that works for J Crew', '', 6),
(59, 'Make a spa reservation', '', 7),
(60, 'Book a salon visit', '', 7),
(61, 'Find limited-edition apparel by monitoring these Reddit subforums and Twitter accounts', '', 7),
(62, 'Source hard to find wine/alcohol', '', 7),
(63, 'Call FedEx and reroute a package delivery', '', 7),
(64, 'Research best pet food', '', 7),
(65, 'Set up a recurring order of pet supplies', '', 7),
(66, 'Research new products and ratings', '', 7),
(67, 'Log on to my gym at 6 AM and secure the high-demand cross-fit class', '', 7),
(68, 'Research and compare live Zoom fitness programs', '', 7),
(69, 'Send flowers from a local florist for my mom\'s birthday', '', 8),
(70, 'Find gifts on Etsy for friends based on their interests', '', 8),
(71, 'Compare charities focused on water so I can make a donation', '', 8),
(72, 'Send care packages to my family', '', 8),
(73, 'Send gifts internationally', '', 8),
(74, 'Send gift baskets to clients', '', 8),
(75, 'Manage search for handymen, gardeners or other help on Thumbtack or Yelp', '', 9),
(76, 'Renew home warranty, insurance or other services', '', 9),
(77, 'Research smart doorbells, lightbulbs, and security systems', '', 9),
(78, 'Renew DMV registration', '', 9),
(79, 'Search for maid service within my budget and timeframe', '', 9),
(80, 'Search for carpet cleaning within my budget and timeframe', '', 9),
(81, 'Get auto insurance quotes between State Farm, Allstate and Geico', '', 9),
(82, 'Find plumber or locksmith urgently', '', 9),
(83, 'Research and compare private schools for kindergarten in my city based on my criteria', '', 9),
(84, 'Manage babysitter appointments on Care.com or Urbansitter', '', 9),
(85, 'Compare and research auto mechanics for oil change for a Honda CRV in my area', '', 9),
(86, 'File a home warranty claim for a broken appliance with Old Republic online', '', 9),
(87, 'Set up a three-way call with my insurance provider so you can take over filing a claim', '', 9),
(88, 'Find all engineers with specific keywords in Github or LinkedIn profile', '', 10),
(89, 'Schedule and coordinate interviews using Calendly', '', 10),
(90, 'Report on salary ranges from Glassdoor and other sources', '', 10),
(91, 'Send messages to potential recruits on LinkedIn', '', 10),
(92, 'Research candidates on LinkedIn', '', 10),
(93, 'Order groceries', '', 12),
(94, 'Order pet supplies', '', 12),
(95, 'Monitor my Instacart shopping list for restocks', '', 12),
(96, 'Secure delivery windows for Instacart and Amazon', '', 12),
(97, 'Pick up OTC or prescription medicine', '', 12),
(98, 'Call and check if a hardware item is in stock at Home Depot', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hearing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `phone`, `user_type`, `ref_name`, `ref_email`, `hearing`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'test@gmail.com', '4325454524', '3', 'dffdsf', 'dsfdsf@dsf.dsf', '2', NULL, NULL, '2021-10-20 04:37:28', '2021-10-20 04:37:28'),
(3, 'balkar', 'singh', 'balkar', 'balkar@gmail.com', '1232123421', '1', 'balkar', 'balkar.singh@gmail.com', '9', NULL, NULL, '2021-10-20 04:46:58', '2021-10-20 04:46:58'),
(4, 'balkar', 'brar', 'balkar', 'balkar1@gmail.com', '7814686714', '1', 'balkar', 'balkar@gmail.com', '4', NULL, NULL, '2021-10-30 00:52:17', '2021-10-30 00:52:17'),
(6, 'test1', 'test1', 'test', 'test1@gmail.com', '4325411221', '3', NULL, NULL, NULL, NULL, NULL, '2021-11-01 05:49:40', '2021-11-01 05:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assistantprofiles`
--
ALTER TABLE `assistantprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientchatting`
--
ALTER TABLE `clientchatting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quizs`
--
ALTER TABLE `quizs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskcats`
--
ALTER TABLE `taskcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistantprofiles`
--
ALTER TABLE `assistantprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clientchatting`
--
ALTER TABLE `clientchatting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizs`
--
ALTER TABLE `quizs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taskcats`
--
ALTER TABLE `taskcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
