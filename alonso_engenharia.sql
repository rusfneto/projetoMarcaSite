-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2020 at 11:17 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alonso_engenharia`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `razaosocial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomefantasia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `razaosocial`, `nomefantasia`, `cnpj`, `endereco`, `email`, `telefone`, `responsavel`, `cpf`) VALUES
(1, 'Alonso ENG', 'Alonso Engenharia', '123456789000111', 'Rua 1', 'alonso.eng@gmail.com', '13123456789', 'Alonso', '12345678910'),
(2, 'Terracom', 'Terracom', '123456789000112', 'Rua 2', 'terracom@gmail.com', '13123456789', 'Sr. Terracom', '12345678910'),
(3, 'Clube XV', 'Clube XV', '123456789000113', 'Rua 3', 'clubexv@gmail.com', '13123456789', 'Sr. Clube XV', '12345678910');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2020_11_17_223221_usuarios', 1),
(4, '2020_11_18_210746_clientes', 1),
(5, '2020_11_20_144147_propostas', 1),
(6, '2020_11_21_130106_create_sessions_table', 2),
(7, '2020_11_21_131908_create_users_table', 3),
(8, '2020_11_21_131913_add_votes_to_users_table', 3);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propostas`
--

CREATE TABLE `propostas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listcliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enderecodaobra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiposervico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propostaem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valortotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorsinal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtdparcelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorparcelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datainiciopg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataparcelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criadapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propostas`
--

INSERT INTO `propostas` (`id`, `listcliente`, `enderecodaobra`, `tiposervico`, `propostaem`, `valortotal`, `valorsinal`, `qtdparcelas`, `valorparcelas`, `datainiciopg`, `dataparcelas`, `status`, `criadapor`, `updated_at`) VALUES
(4, 'Clube XV', 'Rua Rodrigo Silva nº 67', 'Vistoria', '21/11/2020', '3500', '1500', '4', '500,00', '22/11/2020', '5', 'Em Aberto', 'Rubens', '2020-11-22 19:40:52'),
(5, 'Terracom', 'Rua da Obra 1', 'fadsfdsa', '22/11/2020', '123', '321', '2', '500,00', '20/11/2020', '25', 'Fechado', 'Rubens', '2020-11-22 18:16:23'),
(6, 'Alonso Engenharia', 'Rua da Obra 1', 'fadsfdsa', '22/11/2020', '123', '321', '2', '500,00', '20/11/2020', '25', 'Fechado', 'Rubens', '2020-11-22 18:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iH5yGOzyCtBrGwSJOLqETNQh1RfdLCTJmY9ESLJ8', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTFNOSTJmT0xaOTZiYms0ekg5V3ZQV05YNXVya0RmSlhzREVUSWxSYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9saXN0YXItcHJvcG9zdGFzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQ0b2pobFpFcHRReGZWZVJocDNYL04uYlUyLnIzV3ZlY2tOZm5qSWV6Yk9qOE4zZ0hJUTRraSI7fQ==', 1606086964);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(8, 'Rubens', 'rusfneto@gmail.com', '$2y$10$4ojhlZEptQxfVeRhp3X/N.bU2.r3WveckNfnjIezbOj8N3gHIQ4ki', '2020-11-21 04:58:13', '2020-11-21 04:58:13'),
(11, 'Marcasite', 'marcasite@marcasite.com.br', '$2y$10$4ojhlZEptQxfVeRhp3X/N.bU2.r3WveckNfnjIezbOj8N3gHIQ4ki', '2020-11-21 09:16:40', '2020-11-21 09:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_cnpj_unique` (`cnpj`);

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
-- Indexes for table `propostas`
--
ALTER TABLE `propostas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propostas`
--
ALTER TABLE `propostas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
