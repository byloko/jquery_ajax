-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 01:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jquery_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification_key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification_key`, `created_at`, `updated_at`) VALUES
(1, 'AAAAQKN38X4:APA91bEcIzb5ZMry6L_tOJ3gbr7mZ1DC2h-TeOZBx9RfsV974O2mz9gcbFNwhu9Kbb6tE-ZuZrbz04hXhQEbgoe1gkZS0MGBowhm7j0t8nCXIhHewbY7mROvZgmChopeEJxrSTWerWRU', '2021-04-28 05:51:23', '2021-04-28 05:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `notification_store`
--

CREATE TABLE `notification_store` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `user_mearchant_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `orders_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `order_date_time` datetime DEFAULT NULL,
  `order_firebase_chat_id` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification_store`
--

INSERT INTO `notification_store` (`id`, `user_id`, `title`, `message`, `user_mearchant_id`, `order_id`, `orders_name`, `address`, `order_date_time`, `order_firebase_chat_id`, `created_at`, `updated_at`) VALUES
(1, '2', 'Order Placed!', ' Vipul has placed new order 3006202101 on 30-06-2021 10:42 AM', '4', '1', '3006202101', 'bzhzjzjzjjzj', '2021-06-30 10:42:40', '3006202101051240', '2021-06-30 12:12:42', '2021-06-30 12:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_mearchant_id` varchar(255) DEFAULT NULL,
  `orders_name` varchar(255) DEFAULT NULL,
  `orders_total_price` varchar(255) DEFAULT NULL,
  `order_image` varchar(255) DEFAULT NULL,
  `price_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=No Price False, 1=Yes Price True',
  `payment_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=No Payment False, 1=Yes Payment True',
  `is_flag` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=All, 1=Pending, 2=Completed',
  `order_date_time` datetime DEFAULT NULL,
  `order_firebase_chat_id` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_mearchant_id`, `orders_name`, `orders_total_price`, `order_image`, `price_status`, `payment_status`, `is_flag`, `order_date_time`, `order_firebase_chat_id`, `created_at`, `updated_at`) VALUES
(1, '2', '4', '3006202101', '0.0', NULL, 0, 0, 1, '2021-06-30 10:42:40', '3006202101051240', '2021-06-30 12:12:42', '2021-06-30 12:12:42'),
(2, '2', '4', '3006202101', '0.0', NULL, 0, 0, 1, '2021-06-30 10:42:40', '3006202101051240', '2021-06-30 12:12:42', '2021-06-30 12:12:42'),
(3, '5', '4', '3006202101', '0.0', NULL, 0, 0, 1, '2021-06-30 10:42:40', '3006202101051240', '2021-06-30 12:12:42', '2021-06-30 12:12:42'),
(4, '2', NULL, 'Goto i reply', NULL, NULL, 0, 0, 0, NULL, '0', '2021-07-25 03:59:53', '2021-07-25 20:13:22'),
(5, '2', NULL, 'Hello2s', NULL, NULL, 0, 0, 0, NULL, '0', '2021-07-25 04:01:12', '2021-08-14 21:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `firebase_chat_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_total_price` varchar(120) DEFAULT NULL,
  `item_price_per_kg` varchar(120) DEFAULT NULL,
  `item_weight` varchar(122) DEFAULT NULL,
  `unite` varchar(255) DEFAULT NULL,
  `unite_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `firebase_chat_id`, `order_id`, `item_name`, `item_total_price`, `item_price_per_kg`, `item_weight`, `unite`, `unite_name`, `created_at`, `updated_at`) VALUES
(1, '300620210105123801', '1', 'hcnc', '', '', '5', '5', 'kg', '2021-06-30 12:12:42', '2021-06-30 12:12:42'),
(2, '300620210105123801', '1', 'hcnc', '', '', '5', '5', 'kg', '2021-06-30 12:12:42', '2021-06-30 12:12:42'),
(3, '300620210105123801', '3', 'hcnc', '', '', '5', '5', 'kg', '2021-06-30 12:12:42', '2021-06-30 12:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `recipient` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `recipient`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rec', 'Qw', '2021-07-04 12:00:19', '2021-07-04 12:00:19'),
(5, 'd', 'ss', '2021-08-15 02:41:06', '2021-08-15 02:41:06'),
(6, 'Cloths', 'Test', '2021-08-15 03:35:09', '2021-08-15 03:35:09'),
(7, 'New', 'heool', '2021-08-15 03:35:09', '2021-08-15 03:35:09'),
(8, 'Cloths', 'Test', '2021-08-15 03:35:29', '2021-08-15 03:35:29'),
(9, 'New', 'heool', '2021-08-15 03:35:29', '2021-08-15 03:35:29'),
(10, 'ff', 'gg', '2021-08-15 03:36:01', '2021-08-15 03:36:01'),
(11, 'Cloths', 'Test', '2021-08-15 11:29:00', '2021-08-15 11:29:00'),
(12, 'New', 'heool', '2021-08-15 11:29:00', '2021-08-15 11:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mearchant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp_verify` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=No OTP Verify, 1=Yes OTP Verify',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_email_verify` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Not Email Verify, 1:Yes Email Verify',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=Google, 2=Facebook ',
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bank_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_type` tinyint(5) DEFAULT 1 COMMENT '1:Normal User, 2:Mearchant',
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1:Admin',
  `is_flag` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=All, 1=Pending, 2=Completed',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Active, 1:Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mearchant_id`, `name`, `lastname`, `mobile`, `otp`, `otp_verify`, `email`, `is_email_verify`, `email_verified_at`, `password`, `social_type`, `social_id`, `user_profile`, `address`, `token`, `user_token`, `remember_token`, `amount`, `bank_holder_name`, `account_number`, `ifsc_code`, `branch_code`, `bank_name`, `is_type`, `is_admin`, `is_flag`, `status`, `created_at`, `updated_at`) VALUES
(1, '0', 'jQuery Ajax', NULL, '1234567890', NULL, '0', 'jquery_ajax@gmail.com', 0, NULL, '$2y$10$VRAMRTSrDJxZwiDkNFcMzuwdyX7YonhIHWPXOxVvuZwxodY2fkc7W', 0, NULL, NULL, NULL, NULL, NULL, 'UdJPhmZoQF64UOmVJkAYkg6NKRHBaMLsJnwE0yxj3lNEHihAXfjGDTK8xMPQ', '0', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2021-04-14 20:53:58', '2021-04-23 11:21:28'),
(2, '0', 'Vipul', NULL, '9941599815', '261828', '1', 'vip@gmail.com', 0, NULL, '$2y$10$7gi8qPE.Mu3L2.AblQxV2OJirWcfxEdxa8gZTDJaa8Fe1gOF.cWRK', 0, NULL, 'zmmgx18xegawypyyzzbvmmoqan81tp.jpg', NULL, NULL, NULL, NULL, '685', NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 0, '2021-06-25 13:56:38', '2021-06-30 12:12:42'),
(3, '0', 'mohan patel5', NULL, '8548524125', NULL, '0', 'tushar@gmail.com', 0, NULL, '$2y$10$FaBwmOe6j5jy23klCU6YMesEW.Jvjv9SJC/CXa.Aw2WESwnrUgDrO', 0, NULL, 'zjirvqn3hxkpitcih19xs8vvmu1lli.jpg', 'Mahabali', NULL, NULL, NULL, '25', 'Vipuls', '000552542515', 'IDSA845SBIS', '', 'SBID', 2, 0, 0, 0, '2021-06-25 13:57:15', '2021-06-25 16:35:21'),
(4, '0', 'shreyas', NULL, '8306020620', '783230', '1', NULL, 0, NULL, '$2y$10$BBJPrzQ9JOY878FTXGIN4eiUywIBw2J6WNNAoc983Ymmk24iLTtBu', 0, NULL, 'k3z5gcsy1okccmxiep8cfrkbqdqe7m.jpg', 'bzhzjzjzjjzj', 'chYpDqMiSjO5et2CTTVtBY:APA91bGKGuEY5gTr9c6U7ikcHWvqIQcyyjzVIHHLr3-y51tsOifNcIWKwoEOlq_pDW_kUg8s5Kz4Lp7DtTMTA1WV1nOApyNbihMw6EasplUBD0g1RFSKsoq6t7eaGMS-Njarnkl8xYkv', 'kuY6qeQJ1Jr21mK4T9efeWFOacMsRjjfRFxGpqMl4', 'chYpDqMiSjO5et2CTTVtBY:APA91bGKGuEY5gTr9c6U7ikcHWvqIQcyyjzVIHHLr3-y51tsOifNcIWKwoEOlq_pDW_kUg8s5Kz4Lp7DtTMTA1WV1nOApyNbihMw6EasplUBD0g1RFSKsoq6t7eaGMS-Njarnkl8xYkv', '0', 'sgegegeg', '9876543210321', 'SBIN7216555', '', 'sgr1g1ry', 2, 0, 1, 0, '2021-06-25 16:59:38', '2021-06-30 18:56:29'),
(5, '0', 'Anil9', NULL, '7788926651', NULL, '0', NULL, 0, NULL, '$2y$10$NuLMmK/hrkSGeA6ZxBm.JuGs0R8z1.lLg31GlnTdrMsO0XTTqero6', 0, NULL, NULL, NULL, 'cULT-NpMQ2anl5UbOb76NE:APA91bE1L-X2m4YzVzkpPjKbrO1JvpO_glETmk1KztdYmzPg8P0HC5cciFrBnVBMKL2Cy05IJ8tjCJUpZy2VFpADSGftC2ME0gKdW0OfMyk3tTdPSDqlnBlaFc4t-Qq1HL_Ty0SlrL90', 'H3bOCXknoVh7XOGpVDGRiW9Va5DqNRAMGdIPdKm85', 'cULT-NpMQ2anl5UbOb76NE:APA91bE1L-X2m4YzVzkpPjKbrO1JvpO_glETmk1KztdYmzPg8P0HC5cciFrBnVBMKL2Cy05IJ8tjCJUpZy2VFpADSGftC2ME0gKdW0OfMyk3tTdPSDqlnBlaFc4t-Qq1HL_Ty0SlrL90', '0', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, '2021-06-25 17:40:35', '2021-06-25 17:40:35'),
(7, '0', 'hetal', NULL, '9512685150', '664640', '1', NULL, 0, NULL, '$2y$10$8E93snBDLAMZI0mQiUEpDeWlg.8ULLKDEJVO3O/GWTPgOTlOLMEMm', 0, NULL, NULL, NULL, 'cGXNtRazSXOfto8Dnmlv5x:APA91bE1pSXt3SptEhLfTZr9CIDxXHbpNHgZfDYEbrEls0K6eYSNSV0-cjlZWJvdrsyIWOwNikhOkqHOYj5yoHohKgkXozRg-5MIYFaLU5HOJ3i3S7Zg4wZ804FFx5Hns_z-kl0SBNGg', 'SiUQZ7fE7A1MEmWKasK4s0xFQ4hGojHbYIDalsCF7', 'cGXNtRazSXOfto8Dnmlv5x:APA91bE1pSXt3SptEhLfTZr9CIDxXHbpNHgZfDYEbrEls0K6eYSNSV0-cjlZWJvdrsyIWOwNikhOkqHOYj5yoHohKgkXozRg-5MIYFaLU5HOJ3i3S7Zg4wZ804FFx5Hns_z-kl0SBNGg', '150', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, '2021-06-26 11:42:05', '2021-06-26 12:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `users_wallet_details`
--

CREATE TABLE `users_wallet_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `amount_transfer` varchar(255) DEFAULT NULL,
  `money_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = Add Money, 1 = Withdraw Money',
  `money_date` varchar(255) DEFAULT NULL,
  `money_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = Pending, 1 = Success, 2 = Decline',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_wallet_details`
--

INSERT INTO `users_wallet_details` (`id`, `user_id`, `amount_transfer`, `money_type`, `money_date`, `money_status`, `created_at`, `updated_at`) VALUES
(1, '7', '50', 0, '2021-06-26 10:19:35', 0, '2021-06-26 11:49:31', '2021-06-26 11:49:31'),
(2, '7', '100', 0, '2021-06-26 10:57:42', 0, '2021-06-26 12:27:38', '2021-06-26 12:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `version_setting`
--

CREATE TABLE `version_setting` (
  `id` int(11) NOT NULL,
  `app_version` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `version_setting`
--

INSERT INTO `version_setting` (`id`, `app_version`, `created_at`, `updated_at`) VALUES
(1, '1.0', '2021-04-15 09:00:18', '2021-04-15 03:37:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_store`
--
ALTER TABLE `notification_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_wallet_details`
--
ALTER TABLE `users_wallet_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `version_setting`
--
ALTER TABLE `version_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification_store`
--
ALTER TABLE `notification_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_wallet_details`
--
ALTER TABLE `users_wallet_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `version_setting`
--
ALTER TABLE `version_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
