-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mining`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ikan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_10_28_045218_create_pegawai_table', 1),
(12, '2019_10_28_111226_create_olahan_table', 1),
(13, '2019_11_01_154936_create_produk_table', 1),
(14, '2019_11_03_201657_create_penjualan_table', 1),
(15, '2019_11_14_061858_create_ikan_table', 1),
(16, '2019_11_27_062359_create_penyetokan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `olahan`
--

CREATE TABLE `olahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `olahan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `olahan`
--

INSERT INTO `olahan` (`id`, `olahan`, `created_at`, `updated_at`) VALUES
(1, 'Fillet Fish', '2019-11-26 23:44:13', '2019-11-26 23:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','staf','leader') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `uuid`, `name`, `role`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'b00561a7-9dca-48b0-8d00-652ece2e584f', 'admin', 'admin', '08975588', 'admin@mail.com', NULL, '$2y$10$8X3KZfKgDJMdHd2e82ZnZePAc.OLAavFyBKiyj5kWa8O10aEArBEC', 'y4ywYe8UvSOPeOA0z6fpdMeHuxve28iJWnIVx215mk4KhIxFNbhmgSXHx5av', '2019-11-26 23:43:39', '2019-11-26 23:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_produk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_jual` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `uuid`, `nm_produk`, `olahan`, `penjualan`, `tgl_jual`, `created_at`, `updated_at`) VALUES
(68, '8a9fecf4-014f-4802-8d12-9f886ef9876b', '1', 'Fillet Fish', '50000', '2016-01-01', '2019-12-13 20:26:21', '2019-12-13 20:26:21'),
(69, '74c42776-2fcb-4e9d-9492-0bc974ca4bce', '1', 'Fillet Fish', '45000', '2016-02-01', '2019-12-13 20:26:46', '2019-12-13 20:26:46'),
(70, '4406437a-4955-4525-bc0a-b53eedde24f7', '1', 'Fillet Fish', '80000', '2016-03-01', '2019-12-13 20:27:08', '2019-12-13 20:27:08'),
(71, 'd464f556-46b4-468e-acdf-ed90aefad37e', '1', 'Fillet Fish', '80000', '2016-04-14', '2019-12-13 20:28:12', '2019-12-13 20:28:12'),
(72, 'ecd942e0-710c-4c79-a725-7d4c7bba27ed', '1', 'Fillet Fish', '40240', '2016-08-10', '2019-12-13 20:28:41', '2019-12-13 20:28:41'),
(73, '791a0cca-1925-4cb3-a08d-b370b6b3f190', '2', 'Fillet Fish', '50000', '2016-01-13', '2019-12-13 20:29:11', '2019-12-13 20:29:11'),
(74, 'a592c8ea-09db-48fe-997b-6b1bf64042dc', '2', 'Fillet Fish', '40023', '2016-03-16', '2019-12-13 20:29:36', '2019-12-13 20:29:36'),
(75, '60911a8d-81de-4f72-a287-86dfde6cf9ec', '2', 'Fillet Fish', '30000', '2016-04-07', '2019-12-13 20:33:08', '2019-12-13 20:33:08'),
(76, '5cdba23d-a26e-4c6c-a155-75774ee6d852', '2', 'Fillet Fish', '800000', '2016-12-15', '2019-12-13 20:35:52', '2019-12-13 20:35:52'),
(77, '387891b6-b21a-4ac4-a255-edd3074d9447', '3', 'Fillet Fish', '30000', '2016-01-08', '2019-12-13 20:36:22', '2019-12-13 20:36:22'),
(78, '932c0be5-00c6-4c10-8e92-734c70f476a0', '3', 'Fillet Fish', '30000', '2016-07-15', '2019-12-13 20:36:59', '2019-12-13 20:36:59'),
(79, '445fd6e8-b1d1-4717-beaf-b1785e1e8792', '3', 'Fillet Fish', '20000', '2016-12-24', '2019-12-13 20:37:47', '2019-12-13 20:37:47'),
(80, 'bc06ced0-9381-4cae-9be6-700a79411e5e', '3', 'Fillet Fish', '30000', '2016-12-30', '2019-12-13 20:38:09', '2019-12-13 20:38:09'),
(81, 'b149c5a8-9777-4938-8051-9a5895b52ae1', '4', 'Fillet Fish', '40000', '2016-01-07', '2019-12-13 20:38:56', '2019-12-13 20:38:56'),
(82, '3d145368-a1a6-4225-b58b-50898b8da090', '4', 'Fillet Fish', '20000', '2016-07-22', '2019-12-13 20:39:20', '2019-12-13 20:39:20'),
(83, '2c2328ad-4cf1-4f21-8f3c-2bcc09cc3017', '4', 'Fillet Fish', '45940', '2016-08-16', '2019-12-13 20:39:45', '2019-12-13 20:39:45'),
(84, 'db0ecb16-944a-4b3a-b9b5-98fecd724fcd', '5', 'Fillet Fish', '40000', '2016-01-09', '2019-12-13 20:41:36', '2019-12-13 20:41:36'),
(85, 'a9aeb159-feef-487e-880e-e3fdb0db05ee', '5', 'Fillet Fish', '23259', '2016-03-03', '2019-12-13 20:42:01', '2019-12-13 20:42:01'),
(86, 'eedbe8cc-6d87-4ead-ac04-9063ae29967b', '5', 'Fillet Fish', '45939', '2016-12-29', '2019-12-13 20:42:44', '2019-12-13 20:42:44'),
(87, '1e2e40bf-f685-41fc-acaa-dc2981831bfa', '5', 'Fillet Fish', '10000', '2016-01-01', '2019-12-13 20:47:45', '2019-12-13 20:47:45'),
(88, '57fd1947-c113-466f-8054-da249b2dcbcf', '6', 'Fillet Fish', '10000', '2016-01-01', '2019-12-13 20:48:31', '2019-12-13 20:48:31'),
(89, '6f79ff7c-40e8-41b2-a853-7de96664f136', '6', 'Fillet Fish', '10000', '2016-04-03', '2019-12-13 20:48:52', '2019-12-13 20:48:52'),
(90, '5a1a35e6-ec61-4b67-9d6e-89fbef2c1b1f', '6', 'Fillet Fish', '30000', '2016-09-30', '2019-12-13 20:49:16', '2019-12-13 20:49:16'),
(91, 'ec0441c7-42f9-4d7e-bc3b-88da880e91a8', '1', 'Fillet Fish', '80000', '2017-01-02', '2019-12-13 20:50:03', '2019-12-13 20:50:03'),
(94, '0a48d73e-4e8a-4756-ae2d-c000d1717c31', '1', 'Fillet Fish', '128402', '2017-03-22', '2019-12-13 20:51:43', '2019-12-13 20:51:43'),
(95, '570087ea-ca5e-4b89-af02-c6124c2c2829', '1', 'Fillet Fish', '84385', '2017-07-15', '2019-12-13 20:52:12', '2019-12-13 20:52:12'),
(96, 'c122df2f-ec5d-41da-9ba1-b740dcd6cef6', '1', 'Fillet Fish', '60345', '2017-12-15', '2019-12-13 20:53:09', '2019-12-13 20:53:09'),
(97, '1abca5d4-a5c0-46e1-9b63-88bedb5aaf6d', '2', 'Fillet Fish', '69822', '2017-01-24', '2019-12-13 20:53:44', '2019-12-13 20:53:44'),
(98, '30837069-0dcd-48db-92c0-02bcb04a55d3', '2', 'Fillet Fish', '65345', '2017-03-16', '2019-12-13 20:54:08', '2019-12-13 20:54:08'),
(99, 'fb952786-41ca-4ef7-b837-c8c5b374d472', '2', 'Fillet Fish', '71395', '2017-06-07', '2019-12-13 20:54:28', '2019-12-13 20:54:28'),
(100, '384be134-19a9-42ba-8d3e-3bf79c11e0af', '3', 'Fillet Fish', '39028', '2017-01-24', '2019-12-13 20:54:51', '2019-12-13 20:54:51'),
(101, '0a0c6666-679b-4dc6-b1cc-7223a3962a92', '3', 'Fillet Fish', '59274', '2017-07-13', '2019-12-13 20:55:23', '2019-12-13 20:55:23'),
(102, '88b3f129-76b2-4904-aff0-18d1174160cc', '3', 'Fillet Fish', '39537', '2017-11-24', '2019-12-13 20:56:48', '2019-12-13 20:56:48'),
(103, '3416fe64-bd62-4367-999c-09aa89c94767', '4', 'Fillet Fish', '40218', '2017-01-11', '2019-12-13 21:14:02', '2019-12-13 21:14:02'),
(104, 'c7675384-9a7e-41cc-8d6c-4c3ab920eac4', '4', 'Fillet Fish', '79338', '2017-06-08', '2019-12-13 21:14:37', '2019-12-13 21:14:37'),
(105, '8bb5978c-4a09-4a16-892b-9da6922b05f7', '4', 'Fillet Fish', '59229', '2017-07-21', '2019-12-13 21:15:08', '2019-12-13 21:15:08'),
(106, '5dda7774-6227-4834-9438-b0e227885ff0', '5', 'Fillet Fish', '30685', '2017-01-06', '2019-12-13 21:15:42', '2019-12-13 21:15:42'),
(107, '3f52e8b8-9e6e-48ee-93d0-51b35ea876e5', '5', 'Fillet Fish', '20686', '2017-05-31', '2019-12-13 21:16:00', '2019-12-13 21:16:00'),
(108, '27a45cb5-2696-4146-8c4c-a1e43839c633', '5', 'Fillet Fish', '30586', '2017-11-15', '2019-12-13 21:16:21', '2019-12-13 21:16:21'),
(109, '3655d10a-725b-4837-8e9b-f00e72dbee55', '6', 'Fillet Fish', '10283', '2017-01-25', '2019-12-13 21:16:50', '2019-12-13 21:16:50'),
(110, '1c75dff6-daeb-4ea3-af8b-f6309f006003', '6', 'Fillet Fish', '15825', '2017-06-16', '2019-12-13 21:17:36', '2019-12-13 21:17:36'),
(111, 'df5b44cc-d32c-4036-ae12-d180c05f4612', '6', 'Fillet Fish', '16948', '2017-08-18', '2019-12-13 21:17:59', '2019-12-13 21:17:59'),
(112, '2904af2d-8a6d-4b1f-8067-ca060da9185d', '1', 'Fillet Fish', '124104', '2018-01-17', '2019-12-13 21:21:16', '2019-12-13 21:21:16'),
(113, 'f9862189-aeaa-4c33-a495-71f733ed0eb0', '1', 'Fillet Fish', '242860', '2018-07-12', '2019-12-13 21:21:51', '2019-12-13 21:21:51'),
(114, '2cca8350-ea97-42b9-80a6-01b833c55a72', '1', 'Fillet Fish', '145092', '2018-12-20', '2019-12-13 21:22:25', '2019-12-13 21:22:25'),
(115, '05de8264-8fcb-4045-915c-8088dc2ea362', '2', 'Fillet Fish', '80382', '2018-01-17', '2019-12-13 21:23:10', '2019-12-13 21:23:10'),
(116, '5f553bff-7d74-4e2f-bfdc-eb2def6d2ca0', '2', 'Fillet Fish', '140575', '2018-07-11', '2019-12-13 21:23:42', '2019-12-13 21:23:42'),
(117, '3f60d098-e6cf-4d6b-be2f-f55be6672b55', '2', 'Fillet Fish', '80591', '2018-11-15', '2019-12-13 21:24:24', '2019-12-13 21:24:24'),
(118, 'b094c194-2cb9-4762-8673-04c3e40ab176', '3', 'Fillet Fish', '80773', '2018-01-17', '2019-12-13 21:25:06', '2019-12-13 21:25:06'),
(119, 'fe352256-e707-46cf-a1f2-bab96816f6ae', '3', 'Fillet Fish', '56379', '2018-06-23', '2019-12-13 21:25:33', '2019-12-13 21:25:33'),
(120, '6ff1659d-3388-42cb-b6f2-1d370c96c957', '3', 'Fillet Fish', '60837', '2018-12-05', '2019-12-13 21:25:51', '2019-12-13 21:25:51'),
(121, '4b8b7c9c-98e1-4d63-a339-30cb3a5d9874', '4', 'Fillet Fish', '94839', '2018-02-12', '2019-12-13 21:28:14', '2019-12-13 21:28:14'),
(122, '39878f11-810e-43dd-baea-c98273b5e51a', '4', 'Fillet Fish', '96772', '2018-06-05', '2019-12-13 21:28:58', '2019-12-13 21:28:58'),
(123, 'd15eb8f0-4c9f-401f-9313-bade20b73c04', '4', 'Fillet Fish', '70375', '2018-10-31', '2019-12-13 21:29:27', '2019-12-13 21:29:27'),
(124, '61ee56f4-8d1c-4506-aa6e-5fccd05946cf', '5', 'Fillet Fish', '39727', '2018-01-18', '2019-12-13 22:03:59', '2019-12-13 22:03:59'),
(125, 'c0f647f2-2780-42f5-801e-fac28d37a205', '5', 'Fillet Fish', '39038', '2018-06-13', '2019-12-13 22:06:33', '2019-12-13 22:06:33'),
(126, '709e291a-0f45-4fb6-a0c1-5b7beceead62', '5', 'Fillet Fish', '30273', '2018-12-13', '2019-12-13 22:08:05', '2019-12-13 22:08:05'),
(127, 'f2b24b55-d7d9-43ae-acad-3ce7feec0a99', '6', 'Fillet Fish', '10000', '2018-01-13', '2019-12-13 22:09:53', '2019-12-13 22:09:53'),
(128, '3343c286-6c0f-4f49-b21e-6301edbfd1f8', '5', 'Fillet Fish', '14983', '2018-06-05', '2019-12-13 22:14:06', '2019-12-13 22:14:06'),
(129, '439ae442-37ed-4191-bc54-a17f64abccd4', '6', 'Fillet Fish', '14775', '2018-01-18', '2019-12-13 22:15:25', '2019-12-13 22:15:25'),
(130, 'c902fb2e-54a8-4d77-b2a4-d23198bf36e3', '6', 'Fillet Fish', '16846', '2018-06-15', '2019-12-13 22:16:06', '2019-12-13 22:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `penyetokan`
--

CREATE TABLE `penyetokan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_produk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyetokan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_stok` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyetokan`
--

INSERT INTO `penyetokan` (`id`, `uuid`, `nm_produk`, `penyetokan`, `tgl_stok`, `created_at`, `updated_at`) VALUES
(55, 'bfcb03da-e49e-4496-bd82-50f67049bca8', '1', '5', '2019-12-03', '2019-12-03 06:43:48', '2019-12-03 06:43:48'),
(56, '16548918-5bd6-4073-bc63-b68bff942642', '1', '5', '2019-12-03', '2019-12-03 06:45:00', '2019-12-03 06:45:00'),
(57, '326115fc-cb52-4db8-b111-038fc23a533b', '6', '43', '2019-12-05', '2019-12-05 04:16:16', '2019-12-05 04:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_produk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` enum('kg') COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nm_produk`, `stock`, `satuan`, `expired`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Gurita', '98658516', 'kg', '8', '85018.png', '2019-11-26 23:45:10', '2019-12-13 21:22:25'),
(2, 'Tuna', '98571867', 'kg', '5', '49323.jpg', '2019-12-01 01:17:52', '2019-12-13 21:24:24'),
(3, 'Deho', '99554172', 'kg', '6', '99427.jpg', '2019-12-01 01:18:36', '2019-12-13 21:25:51'),
(4, 'kerapu', '99453289', 'kg', '7', '16647.png', '2019-12-01 01:19:02', '2019-12-13 21:29:28'),
(5, 'tongkol', '99674824', 'kg', '9', '30040.jpg', '2019-12-01 01:19:26', '2019-12-13 22:14:06'),
(6, 'Bandeng', '99865323', 'kg', '8', '75477.png', '2019-12-05 01:50:54', '2019-12-13 22:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','staf','leader') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olahan`
--
ALTER TABLE `olahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_email_unique` (`email`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penjualan_uuid_unique` (`uuid`);

--
-- Indexes for table `penyetokan`
--
ALTER TABLE `penyetokan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penyetokan_uuid_unique` (`uuid`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `olahan`
--
ALTER TABLE `olahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `penyetokan`
--
ALTER TABLE `penyetokan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
