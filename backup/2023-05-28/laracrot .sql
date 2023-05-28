-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 07:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracrot`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `penyelenggara` varchar(50) DEFAULT NULL,
  `start` varchar(20) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `pamflet` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'berita', 'berita', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(2, 'mahasiswa', 'mahasiswa', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(3, 'pmii', 'pmii', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(4, 'kader', 'kader', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(5, 'kampus', 'kampus', '2023-05-20 09:00:53', '2023-05-20 09:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `category_books`
--

CREATE TABLE `category_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_books`
--

INSERT INTO `category_books` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'pmii', 'pmii', '2023-05-20 09:00:54', '2023-05-20 09:00:54'),
(2, 'filsafat', 'filsafat', '2023-05-20 09:00:54', '2023-05-20 09:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `img`, `user_id`, `judul`, `status`, `created_at`, `updated_at`) VALUES
(1, '1 (1).jpg', 1, 'ikeh iekh kimochiii', '1', '2023-05-20 09:00:51', '2023-05-20 09:00:51'),
(2, '1 (5).jpg', 1, 'aw aw aw aw', '0', '2023-05-20 09:00:51', '2023-05-20 09:00:51'),
(3, '1 (6).jpg', 1, 'Anjay mabar', '1', '2023-05-20 09:00:51', '2023-05-20 09:00:51'),
(4, 'home3.jpg', 1, '123465', '1', '2023-05-20 09:00:51', '2023-05-20 09:00:51'),
(5, 'Screenshot_12.jpg', 1, 'So asik lo bangsat', '1', '2023-05-20 09:00:51', '2023-05-20 09:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(35) NOT NULL,
  `deskripsi` varchar(35) NOT NULL,
  `link` varchar(55) NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul`, `deskripsi`, `link`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Berita terbaru hari ini', 'aw aw aw aw', 'https://www.youtube.com/', 'home3.jpg', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(2, 'Berita kedua', 'ikeh ikeh kimochi', 'https://www.instagram.com/', 'home1.jpg', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(3, 'Berita ketiga', 'baru anjay mabar', 'https://www.instagram.com/', 'home2.jpg', '2023-05-20 09:00:52', '2023-05-20 09:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `nim` varchar(16) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `t_lahir` varchar(20) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `wa` varchar(15) DEFAULT NULL,
  `hobi` varchar(15) DEFAULT NULL,
  `sma` varchar(50) DEFAULT NULL,
  `thn_lulus` varchar(10) DEFAULT NULL,
  `pesantren` varchar(50) DEFAULT NULL,
  `thn_kuliah` varchar(10) DEFAULT NULL,
  `fakultas` varchar(30) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `thn_mapaba` varchar(10) DEFAULT NULL,
  `penyelenggara_mapaba` varchar(30) DEFAULT NULL,
  `thn_pkd` varchar(10) DEFAULT NULL,
  `thn_pkl` varchar(10) DEFAULT NULL,
  `thn_pkn` varchar(10) DEFAULT NULL,
  `informal` varchar(100) DEFAULT NULL,
  `penyelenggara_informal` varchar(100) DEFAULT NULL,
  `nonformal` varchar(100) DEFAULT NULL,
  `penyelenggara_nonformal` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_19_054536_create_kader_table', 1),
(6, '2023_02_25_134128_create_galeri_table', 1),
(7, '2023_02_26_134229_create_profile_table', 1),
(8, '2023_02_28_061757_create_home_table', 1),
(9, '2023_03_01_082528_create_perpus_table', 1),
(10, '2023_03_15_122250_create_role_table', 1),
(11, '2023_04_02_162405_create_posts_table', 1),
(12, '2023_04_02_163140_create_post_categories_table', 1),
(13, '2023_04_02_163351_create_post_tag_table', 1),
(14, '2023_04_02_163500_create_tags_table', 1),
(15, '2023_04_02_163605_add_active_to_posts_table', 1),
(16, '2023_04_15_092454_create_rayon_table', 1),
(17, '2023_04_22_154558_create_agendas_table', 1),
(18, '2023_04_23_132546_create_comments_table', 1),
(19, '2023_05_10_043209_create_penguruses_table', 1),
(20, '2023_05_10_043253_create_quotes_table', 1),
(21, '2023_05_16_083126_create_contacts_table', 1),
(22, '2023_05_17_192745_create_category_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penguruses`
--

CREATE TABLE `penguruses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.png',
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `twt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penguruses`
--

INSERT INTO `penguruses` (`id`, `img`, `name`, `username`, `jabatan`, `fb`, `ig`, `twt`, `created_at`, `updated_at`) VALUES
(1, 'user.png', 'Riki Ramdan', 'rikiramdan', 'Ketua PMII Komisariat uninus', NULL, NULL, NULL, '2023-05-20 09:00:51', '2023-05-20 09:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `thn_terbit` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `bahasa` varchar(255) DEFAULT NULL,
  `halaman` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `categorybook_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `thn_terbit`, `isbn`, `bahasa`, `halaman`, `deskripsi`, `categorybook_id`, `user_id`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'Screenshot_3.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(2, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Screenshot_4.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(3, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'Screenshot_5.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(4, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, 'Screenshot_6.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(5, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, 'Screenshot_7.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(6, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 'Screenshot_8.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(7, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Screenshot_9.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(8, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, 'Screenshot_10.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(9, 'Berita terbaru hari ini', 'berita-terbaru-hari-ini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 'Screenshot_11.jpg', 'download.pdf', '2023-05-20 09:00:52', '2023-05-20 09:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `views` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `woo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(75) NOT NULL,
  `name` varchar(50) NOT NULL,
  `who` varchar(75) NOT NULL,
  `quote` varchar(175) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `img`, `name`, `who`, `quote`, `created_at`, `updated_at`) VALUES
(1, 'user.png', 'rifqi', 'penakluk zeus', 'sakirana cinta ngahalangan kaderisasi!!!!! \n        TINGGALKAN!!!!!!!!', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(2, '1 (6).jpg', 'munawar', 'penakluk hati wanita', 'lebih sulit dari filsafat lebih rumit dari codingan,\n        apa itu? cinta', '2023-05-20 09:00:52', '2023-05-20 09:00:52'),
(3, '1 (5).jpg', 'rifqi', 'penakluk zeus', 'sakirana cinta ngahalangan kaderisasi!!!!! \n        TINGGALKAN!!!!!!!!', '2023-05-20 09:00:53', '2023-05-20 09:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id`, `rayon`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', 'teknik', '2023-05-20 09:00:54', '2023-05-20 09:00:54'),
(2, 'Hukum', 'hukum', '2023-05-20 09:00:54', '2023-05-20 09:00:54'),
(3, 'Fai', 'fai', '2023-05-20 09:00:54', '2023-05-20 09:00:54'),
(4, 'Ekonomi', 'ekonomi', '2023-05-20 09:00:54', '2023-05-20 09:00:54'),
(5, 'Fikom', 'fikom', '2023-05-20 09:00:54', '2023-05-20 09:00:54'),
(6, 'Fkip', 'fkip', '2023-05-20 09:00:54', '2023-05-20 09:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'guest',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', '2023-05-20 09:00:34', '2023-05-20 09:00:34'),
(2, 'admin', '2023-05-20 09:00:34', '2023-05-20 09:00:34'),
(3, 'user', '2023-05-20 09:00:34', '2023-05-20 09:00:34'),
(4, 'guest', '2023-05-20 09:00:35', '2023-05-20 09:00:35'),
(5, 'unverification', '2023-05-20 09:00:35', '2023-05-20 09:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'pmii', 'pmii', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(2, 'pmiiuninus', 'pmiiuninus', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(3, 'pmiiteknik', 'pmiiteknik', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(4, 'pmiibandung', 'pmiibandung', '2023-05-20 09:00:53', '2023-05-20 09:00:53'),
(5, 'pmiimajumendunia', 'pmiimajumendunia', '2023-05-20 09:00:53', '2023-05-20 09:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.png',
  `alamat` varchar(255) DEFAULT NULL,
  `bio` varchar(100) NOT NULL DEFAULT 'tangan terkepan dan maju kemuka!!!',
  `t_lahir` varchar(20) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `hobi` varchar(15) DEFAULT NULL,
  `sma` varchar(50) DEFAULT NULL,
  `thn_lulus` varchar(10) DEFAULT NULL,
  `thn_kuliah` varchar(10) DEFAULT NULL,
  `wa` varchar(20) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 4,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `centang` varchar(2) NOT NULL DEFAULT '0',
  `rayon_id` varchar(255) NOT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `kaderisasi` varchar(255) NOT NULL DEFAULT 'Belum Mapaba',
  `thn_mapaba` varchar(10) DEFAULT NULL,
  `thn_pkd` varchar(10) DEFAULT NULL,
  `thn_pkl` varchar(10) DEFAULT NULL,
  `thn_pkn` varchar(10) DEFAULT NULL,
  `informal` varchar(100) DEFAULT NULL,
  `nonformal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `nim`, `img`, `alamat`, `bio`, `t_lahir`, `ttl`, `hobi`, `sma`, `thn_lulus`, `thn_kuliah`, `wa`, `twitter`, `fb`, `ig`, `kelamin`, `id`, `role_id`, `username`, `slug`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `centang`, `rayon_id`, `prodi`, `kaderisasi`, `thn_mapaba`, `thn_pkd`, `thn_pkl`, `thn_pkn`, `informal`, `nonformal`) VALUES
('Rifqi Munawar', '1', 'user.png', NULL, 'biografi saa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 1, 1, 'rifqi_munawar', 'rifqi_munawar', 'rifqimunawar@gmail.com', '$2y$10$yqhXhXiqOwnJH5KEoUh8h.7r1xmrkutcFtClVA86599OcORl9vm4K', NULL, NULL, '2023-05-20 09:00:35', '2023-05-20 09:00:35', '1', '1', NULL, 'Belum Mapaba', NULL, NULL, NULL, NULL, NULL, NULL),
('Superadmin', '2', 'user.png', NULL, 'dzikir pikir amal shaleh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 2, 2, 'superadmin', 'admin', 'superadmin@gmail.com', '$2y$10$EUqIXODuAOsOeE.1HZasj.aJ.vWqNl.arBZbYP7JoOKFN56P/t6b2', NULL, NULL, '2023-05-20 09:00:35', '2023-05-20 09:00:35', '0', '2', NULL, 'Belum Mapaba', NULL, NULL, NULL, NULL, NULL, NULL),
('admin', '4', 'user.png', NULL, 'saya akan segera pkd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 3, 2, 'admin', 'admin', 'admin@gmail.com', '$2y$10$7zfCFlKksm4R1PKX5Fiy4uy4wV1xAmC6YbVaYubJhGuzJxHGR.U5u', NULL, NULL, '2023-05-20 09:00:35', '2023-05-20 09:00:35', '0', '3', NULL, 'Belum Mapaba', NULL, NULL, NULL, NULL, NULL, NULL),
('user', '5', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 4, 3, 'user', 'user', 'user@gmail.com', '$2y$10$JxL4yBtCEL0uNY3adIzc6u9KkX0hFGk2J8BSYmOzsmUv.E552ek3C', NULL, NULL, '2023-05-20 09:00:36', '2023-05-20 09:00:36', '0', '6', NULL, 'Belum Mapaba', NULL, NULL, NULL, NULL, NULL, NULL),
('pengunjung', '6', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 5, 3, 'pengunjung', 'pengunjung', 'pengunjung@gmail.com', '$2y$10$4DEYtoLfu7S8kGWQvmAwe.lnoydE.5OHWBTHReRRtcI.tq7aiYNoG', NULL, NULL, '2023-05-20 09:00:36', '2023-05-20 09:02:02', '0', '6', '-- Prodi Di Ulul Albab --', 'Mapaba', '2020', '-', '-', '-', '2', '2'),
('Dino Stoltenberg', '681', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 6, 5, 'Gussie Crooks', 'gussie-crooks', 'jast.leola@gmail.com', '$2y$10$chTah8LV9DXOAmygv2Zrh.8doXFGoN9BlomUKPMXLwt263MU923Za', '2023-05-20 09:00:37', '965ayYIz9G', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '1', NULL, 'Belum Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Zoe Muller', '6963', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 7, 1, 'Andrew Lang', 'andrew-lang', 'shanna15@spinka.com', '$2y$10$xoMuQR929Due82fXP.C1/Oix2LfaK82LD5QrQGWaSvrf2OUKjcihO', '2023-05-20 09:00:37', 'isUymXOTLE', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '3', NULL, 'Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Hailey Lesch', '5864', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 8, 3, 'Euna Mayert PhD', 'euna-mayert-phd', 'kirk.hand@gmail.com', '$2y$10$3r0qH1A6n4BDH0dulndy7ONGvJ2iUa6FcRhY1tdDCsOSh7gGp90FW', '2023-05-20 09:00:37', 'v6hMDQ2OJN', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '1', NULL, 'PKD', '2020', NULL, NULL, NULL, NULL, NULL),
('Mr. Trevion Kemmer', '6911', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 9, 5, 'Titus Ritchie', 'titus-ritchie', 'heaney.jayden@lueilwitz.info', '$2y$10$JU4m9CPYBptM3RJq4bDmzuwd/MbjebiEJ5qf7epYZ1o0bUNt4Ejxu', '2023-05-20 09:00:37', 'ANNVqsfkHi', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '6', NULL, 'Belum Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Shana Harris', '5852', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 10, 4, 'Bulah Ernser', 'bulah-ernser', 'demond92@gmail.com', '$2y$10$SrOvUNm1ATN78KgWalKpN.SfPbUK8EG.t0YKXXoMDH2cmvxaW4KBq', '2023-05-20 09:00:37', 'cP5X7T1xKI', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '5', NULL, 'PKD', '2018', NULL, NULL, NULL, NULL, NULL),
('Karlie Lubowitz', '9820', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 11, 2, 'Berneice Haag', 'berneice-haag', 'acarroll@yahoo.com', '$2y$10$5jRtGHC.oPyGF7STaQ3lEOplIIzad01E1MmK7O4C1n78luQwEp7I2', '2023-05-20 09:00:38', 'rVYBwGgv39', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '2', NULL, 'Belum Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Mertie Simonis V', '1664', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 12, 5, 'Prof. Milo Marvin', 'prof-milo-marvin', 'towne.stanton@nader.com', '$2y$10$iOX/L/bfYFI626ztm.TMJu8wVPtDSsf8YxwyzPGCHKzIbDdaqGCFC', '2023-05-20 09:00:38', 'oHd4MSifLi', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '5', NULL, 'PKD', '2020', NULL, NULL, NULL, NULL, NULL),
('Miss Madeline Stamm', '6142', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 13, 5, 'Prof. Darion Friesen', 'prof-darion-friesen', 'jess85@raynor.com', '$2y$10$2tsgIxz9n8pVMSO1DC4mR.DP7oGsjxkykxtHcyH2JOmwTpRHqIh2u', '2023-05-20 09:00:38', '3ws0nEUPjM', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '6', NULL, 'PKD', '2018', NULL, NULL, NULL, NULL, NULL),
('Dion Feest', '234', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 14, 4, 'Jessyca Feil', 'jessyca-feil', 'hoeger.alexane@gmail.com', '$2y$10$9JL1N/EwGnBuUo1vfWYrvuSRwG7MM26Ev4zYrQeoqV4zFXCI6qZRe', '2023-05-20 09:00:38', 'Ldj4ziaOZN', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '3', NULL, 'PKD', '2018', NULL, NULL, NULL, NULL, NULL),
('Korbin Bernhard Jr.', '45', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 15, 3, 'Vito Spinka', 'vito-spinka', 'ambrose44@klocko.com', '$2y$10$ISg22JLMQOunEsTGwL83FuSrJolp9BSciXLCACHd8kQG6eTy0QplC', '2023-05-20 09:00:38', 'Dg4H0GWYAY', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '1', NULL, 'PKD', '2023', NULL, NULL, NULL, NULL, NULL),
('Dr. Prudence Considine', '1501', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 16, 2, 'Marilyne Roob', 'marilyne-roob', 'lucio17@mcclure.info', '$2y$10$EdTyOzEc3inc3vSBaUcW/ufpdGvcLaKnnF8XRjElJdoUSRZxVqNKm', '2023-05-20 09:00:38', 'Yba9rY721z', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '6', NULL, 'PKD', '2019', NULL, NULL, NULL, NULL, NULL),
('Dr. Efrain Fritsch', '2749', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 17, 2, 'Veda Murphy MD', 'veda-murphy-md', 'regan30@smith.biz', '$2y$10$quRMKoGcDklzGzUAlwWqg.65iN7QnoQ3mNZRCcJ8zyNPMgo6GTcJe', '2023-05-20 09:00:38', 'nswtvrlsAS', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '6', NULL, 'PKN', '2022', NULL, NULL, NULL, NULL, NULL),
('Dr. Imogene Gislason Jr.', '714', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 18, 1, 'Avis Sporer', 'avis-sporer', 'lester.stanton@walter.org', '$2y$10$ZHKfZiE8xhxuQ1uE5d7GiuqIFEF6kZXmuFqwMC44PnEYK7lVbYra6', '2023-05-20 09:00:38', 'JlkEhTttYd', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '2', NULL, 'Belum Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Pearline Sauer', '7059', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 19, 3, 'Wanda Dach', 'wanda-dach', 'brenda.bernier@greenholt.net', '$2y$10$Q3TzqBRJW10zobCzsFTyw.wbB/s6qOZ2A7N0XhKfmKEn/7aYUB/KW', '2023-05-20 09:00:38', 'lY53vSxNuE', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '3', NULL, 'Mapaba', '2019', NULL, NULL, NULL, NULL, NULL),
('Mr. Mateo Bosco III', '3162', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 20, 2, 'Verdie Braun', 'verdie-braun', 'ddavis@gmail.com', '$2y$10$sWzk310wz4nt2H2GlP1wmOvYwWVhu0s9YY4nkpES.Y57E6wHxC08C', '2023-05-20 09:00:38', 'NX5E6ysbBA', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '2', NULL, 'PKD', '2021', NULL, NULL, NULL, NULL, NULL),
('Kay Weissnat', '6774', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 21, 3, 'Shania Howell', 'shania-howell', 'ikirlin@bogan.com', '$2y$10$KT5zA00/o2Xroxqo89F2SO2yFGQkjDFXII3hMSevIbJkKD3tD4WEG', '2023-05-20 09:00:38', 'RKcNK6l5UA', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '1', NULL, 'PKD', '2019', NULL, NULL, NULL, NULL, NULL),
('Miller Herzog', '6054', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 22, 3, 'Charlene Borer', 'charlene-borer', 'rath.peyton@hotmail.com', '$2y$10$1q942uriIRlbmFanL24zbOu8FWL8cYYfK0gL5bHqtZTK5lYEvwmzK', '2023-05-20 09:00:38', 'EaIHqRelFk', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '2', NULL, 'PKN', '2020', NULL, NULL, NULL, NULL, NULL),
('Alessia Tremblay PhD', '6013', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 23, 1, 'Justina Schroeder III', 'justina-schroeder-iii', 'haven20@beer.com', '$2y$10$3vFRc/3Qww2BwSDNhpg8rez4fQBmyvwJPMXsEE5xEm9ilXmh3EPZe', '2023-05-20 09:00:39', 'cpVtcCGHZk', '2023-05-20 09:00:46', '2023-05-20 09:00:46', '0', '4', NULL, 'Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Jewel Mann PhD', '6785', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 24, 2, 'Hal Turner', 'hal-turner', 'brycen59@turner.com', '$2y$10$1Dr/dQb4JE1kvMJGU3UC1ukJL8mMwgAoKe3o4tQ0pgk5dMJa9hKX6', '2023-05-20 09:00:39', 'iePrTw9Q42', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '6', NULL, 'PKN', '2020', NULL, NULL, NULL, NULL, NULL),
('Bernie Roberts', '8596', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 25, 1, 'Jolie Kutch', 'jolie-kutch', 'robb62@yahoo.com', '$2y$10$rlrkxDj8jyhTqNUrkzCRmuXT2b9PdLgDQWsMcjcnB8JY9ZQLRdnzm', '2023-05-20 09:00:39', '1c64K1yjIP', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '2', NULL, 'Belum Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Jeremie Satterfield', '8441', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 26, 2, 'Jacynthe Kozey', 'jacynthe-kozey', 'ehirthe@cremin.info', '$2y$10$RiHzcJWNSe/IV90IfentBOS2BexucMJue3bHmiT8qhncHAoWie2sK', '2023-05-20 09:00:39', 'z7CYp0nHC4', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '4', NULL, 'PKN', '2022', NULL, NULL, NULL, NULL, NULL),
('Brook Roberts', '212', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 27, 1, 'Sterling Koelpin', 'sterling-koelpin', 'pacocha.zaria@hackett.com', '$2y$10$Z5R4f8g74056isX5L8bnte26jsSHbkB1UUOKwBh4uzksrAx/2vZDe', '2023-05-20 09:00:39', 'FHYqIkSQPZ', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '6', NULL, 'Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Prof. Henriette Von MD', '700', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 28, 3, 'Leonor Veum', 'leonor-veum', 'berta.deckow@yahoo.com', '$2y$10$UWBvTIxWBWndmjEPbiENy.hrzYYE.pgeolk5D8NDbryhS1hLskIES', '2023-05-20 09:00:39', 'ViBOOL1j8B', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '4', NULL, 'PKL', '2021', NULL, NULL, NULL, NULL, NULL),
('Dr. Keegan Legros Jr.', '3631', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 29, 5, 'Bert Smitham', 'bert-smitham', 'agustina.goodwin@botsford.com', '$2y$10$YI5m4eUhxQZEM.I96ZxXnennQ0twWvPCQhOhZIwLSVnjIWzq3bg4e', '2023-05-20 09:00:39', 'jDmBAVKU8K', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '3', NULL, 'PKN', '2018', NULL, NULL, NULL, NULL, NULL),
('Abbie Swaniawski', '603', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 30, 2, 'Obie Bahringer', 'obie-bahringer', 'bradtke.amina@yahoo.com', '$2y$10$H98MLJNZKkgxLd2d20FGyujSCmpTMobyt2zJB4EVE2rYPKjFAFYx.', '2023-05-20 09:00:39', 'KM0KZyWK5C', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '4', NULL, 'Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Kade Nienow', '8679', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 31, 5, 'Rusty Schowalter', 'rusty-schowalter', 'boyer.patience@gmail.com', '$2y$10$BQvs5tfpBDdDuh2pHbFqg.oBb7dsEdC88KRHpAwJAQ6F1UR828SZa', '2023-05-20 09:00:39', 'anZEtPy2ug', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '3', NULL, 'Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Raleigh Stokes', '9008', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 32, 4, 'Prof. Brennan Parker', 'prof-brennan-parker', 'burnice01@yahoo.com', '$2y$10$clDkTsIcCmZomFHU2p7AqOrBaEuthwa2mFPHJBty7lV1rLq2FYrLq', '2023-05-20 09:00:39', 'ioS2lzgVEA', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '4', NULL, 'PKD', '2020', NULL, NULL, NULL, NULL, NULL),
('Mr. Sheldon Roob', '6662', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 33, 4, 'Dario Frami I', 'dario-frami-i', 'bdooley@wolff.com', '$2y$10$WMMkj8NhQoeQWaK4rgirTuW6yrOkBtlt1ElU3hTKXkf/irwwZXr66', '2023-05-20 09:00:39', '5WgNCJ8o3m', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '4', NULL, 'PKL', '2023', NULL, NULL, NULL, NULL, NULL),
('Miss Madalyn Connelly', '4281', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 34, 4, 'Jazmyne Prosacco', 'jazmyne-prosacco', 'claudie73@hotmail.com', '$2y$10$c8nABGWPvMGjOOnqjzmcquCAQgjMZzoT/5tCZUtMA2p8sV83giaA2', '2023-05-20 09:00:39', 'tjA3MeJQW7', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '5', NULL, 'Belum Mapaba', '2021', NULL, NULL, NULL, NULL, NULL),
('Ms. Princess Rogahn III', '4782', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 35, 5, 'Alia Hills', 'alia-hills', 'runolfsdottir.ike@hotmail.com', '$2y$10$/S.mE6Vv0K8SRiaYYBuaxesl/dC3I1s6M0rlGEOuhAoTJFYQsUJry', '2023-05-20 09:00:39', 'TSxMk7na8B', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '1', NULL, 'Belum Mapaba', '2019', NULL, NULL, NULL, NULL, NULL),
('Nils Turner', '4197', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 36, 3, 'Prof. Linwood Schinner', 'prof-linwood-schinner', 'gerlach.broderick@cartwright.com', '$2y$10$tQe5KZZGjG.w4zcOmExwjeBnQuECwC5D9bB9TYIQip/tvpnQjPyiO', '2023-05-20 09:00:40', 'G7zXsY5gea', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '3', NULL, 'PKD', '2021', NULL, NULL, NULL, NULL, NULL),
('Dr. Doris Gutkowski', '5958', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 37, 2, 'Ms. Tina Bergnaum I', 'ms-tina-bergnaum-i', 'rcrooks@bradtke.com', '$2y$10$prAdjbDGRyyYWxNoMSWFhe8dXtXREf18/dZx2BN2vmr4RjPUXfXPm', '2023-05-20 09:00:40', 'ZTdvTOF6qj', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '2', NULL, 'Belum Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Damaris Hahn', '6900', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 38, 3, 'Letha Bosco', 'letha-bosco', 'mabel.torp@tromp.info', '$2y$10$AVHW00JJWQLfHjho38jls.rlsEI2Ksm0sjWiiCWJHtbvTcu0XtkA2', '2023-05-20 09:00:40', 'MupjcZtz1X', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '2', NULL, 'Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Miss Queen Reinger', '3313', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 39, 5, 'Ms. Kelsi Cormier III', 'ms-kelsi-cormier-iii', 'elton93@gmail.com', '$2y$10$ngGPxgYSwxDIQ0H1XkCBQusR2NImyS/iCat1n.2euDIx6lmuLra7u', '2023-05-20 09:00:40', '58vOjyIp9M', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '3', NULL, 'PKL', '2019', NULL, NULL, NULL, NULL, NULL),
('Abe Conroy', '6742', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 40, 4, 'Zakary Rau IV', 'zakary-rau-iv', 'rmcdermott@gmail.com', '$2y$10$Q872p60W62GK/Br9Ml/5i.N7iuASynz9Lh8ukmWvR0VO6dAJrafrm', '2023-05-20 09:00:40', 'QLiFZwdMRk', '2023-05-20 09:00:47', '2023-05-20 09:00:47', '0', '5', NULL, 'Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Mr. Ray Jerde', '4512', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 41, 4, 'Jerod Jones', 'jerod-jones', 'everardo28@schamberger.org', '$2y$10$XnqDI5xu3VWT5pPBY0f9p.k//EeoAWpFW5kLh6a.rfYHSEm1T.mqC', '2023-05-20 09:00:40', '91ShwGBN0A', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '4', NULL, 'Belum Mapaba', '2019', NULL, NULL, NULL, NULL, NULL),
('Shad Cummings', '5813', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 42, 1, 'Desiree Ebert', 'desiree-ebert', 'qreichel@wiegand.com', '$2y$10$.cFVAiIwt8oIjEza7CA57en1ghBTWoWFoW7Euvbu5itYgzbUX.FbK', '2023-05-20 09:00:40', 'Zg9N5Oyhpe', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '1', NULL, 'PKN', '2020', NULL, NULL, NULL, NULL, NULL),
('Tremaine Watsica', '9918', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 43, 3, 'Olga Kulas', 'olga-kulas', 'xrunte@robel.com', '$2y$10$mP/yUTvrhjsex73NT6IFxu9.YHh2ITP2a8nVAjhiWl67G4HaI3EvS', '2023-05-20 09:00:40', 'E37w0fRiRo', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '2', NULL, 'Belum Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Dr. Angus Dickens DDS', '4530', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 44, 1, 'Nicklaus Feeney', 'nicklaus-feeney', 'ykris@hotmail.com', '$2y$10$pGdqtpG7kaO2NbNU.HF.F.JcvXE9ZM51//Re3ms8KBO/QHPWXiRTu', '2023-05-20 09:00:40', '09qB4QnrIx', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '6', NULL, 'Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Van Dicki', '3779', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 45, 2, 'Dr. Teagan Upton', 'dr-teagan-upton', 'csatterfield@yahoo.com', '$2y$10$RLSF3wUk/5M2YV2WUKPtQOeWqU3cMj1V6siKnvZ4xaQLBodCnDRuq', '2023-05-20 09:00:40', 'bcO2lZ63jF', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '6', NULL, 'PKD', '2020', NULL, NULL, NULL, NULL, NULL),
('Evangeline Deckow', '5563', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 46, 3, 'Percy Beier', 'percy-beier', 'devin.welch@roberts.org', '$2y$10$qQSgemfEmJL1lruM0qtOTu/ngtKfzjOnNssz/TWwRUjl8AKe/dSIm', '2023-05-20 09:00:40', '3UUsQlU0AM', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '5', NULL, 'Belum Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Prof. Zora Becker', '6243', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 47, 5, 'Delta Ferry', 'delta-ferry', 'arobel@gmail.com', '$2y$10$.uGaaWYoY2q.u1McoEQ3K.P4ggqVX3vkt0lc59t/UGHassKFxPzv6', '2023-05-20 09:00:40', 'EaUo0oMvlP', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '3', NULL, 'Belum Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Lucio Howell', '5472', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 48, 1, 'Miss Evalyn Moore', 'miss-evalyn-moore', 'hackett.raquel@kshlerin.com', '$2y$10$KnDJ5WzXoDksJOfIhSjf.uvCPOMqqLPJrpiMbPuWKd3aQk7scRuoe', '2023-05-20 09:00:41', 'yk3PuJmdK8', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '4', NULL, 'PKN', '2020', NULL, NULL, NULL, NULL, NULL),
('Mr. Abdullah Nader DDS', '4903', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 49, 4, 'Madalyn Mills', 'madalyn-mills', 'schiller.ellen@yahoo.com', '$2y$10$go4vmEDf9R34DHzbcslyWeeUCbKSMwv7V1LaAhVDNzkYyEFj59Loy', '2023-05-20 09:00:41', '0EF6RRS5VX', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '5', NULL, 'Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Abbey Kovacek', '1659', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 50, 2, 'Prof. Charles Orn', 'prof-charles-orn', 'amira83@gibson.com', '$2y$10$vvAPbdJaR31RaFfQrpyGL.tr2fLAUdRdQwOVjWECxI4WYqcbJ20/m', '2023-05-20 09:00:41', 'JJb9kCUxIK', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '6', NULL, 'PKN', '2022', NULL, NULL, NULL, NULL, NULL),
('Curt Bogan Jr.', '7052', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 51, 5, 'Josefina Watsica', 'josefina-watsica', 'qklocko@adams.biz', '$2y$10$Zx6lz4Tysyn8Ug6scwzRCOVfYL4qOCU9hAxNynTiO6j0F6hTO1UZi', '2023-05-20 09:00:41', 'Wk16i8Mq00', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '6', NULL, 'PKL', '2019', NULL, NULL, NULL, NULL, NULL),
('Mr. Adolphus McKenzie', '5946', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 52, 4, 'Mrs. Eve Dietrich', 'mrs-eve-dietrich', 'dvolkman@hotmail.com', '$2y$10$C5j53ZNi2C02T/FGDRciYuJ1iqmOV6wyUxVdNOYXmdHiVtRVxj3I6', '2023-05-20 09:00:41', 'sOb3Fcl9qR', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '3', NULL, 'Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Laurel Ullrich', '159', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 53, 2, 'Susie Rodriguez', 'susie-rodriguez', 'green.christelle@hotmail.com', '$2y$10$5fibCQTiLn0xpCd3klZKwOmx.3ebC0vaBnOxFCcaEA65L.xoXBsmm', '2023-05-20 09:00:41', 'aHqZUSPOAG', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '1', NULL, 'PKL', '2023', NULL, NULL, NULL, NULL, NULL),
('Markus Stoltenberg', '5749', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 54, 3, 'Edmond O\'Kon III', 'edmond-o-kon-iii', 'nia50@russel.com', '$2y$10$tuQ5.vK/UTZ5dJxxfQEvReg/xgcWhT9cFRwnHN8N3fpbvN4F9hyS.', '2023-05-20 09:00:41', 'dWkZ50UIxB', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '3', NULL, 'PKN', '2019', NULL, NULL, NULL, NULL, NULL),
('Lisette Renner', '9197', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 55, 5, 'Mr. Pierce Walter I', 'mr-pierce-walter-i', 'jwest@gmail.com', '$2y$10$v6Co5MjEAwPfG3jjhfsmL.7.3LRDvuRsg7zz0DzCSPBN8yLx0fbhy', '2023-05-20 09:00:41', 'cgQLtrIy1L', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '1', NULL, 'PKN', '2019', NULL, NULL, NULL, NULL, NULL),
('Edwin Cremin DVM', '5497', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 56, 2, 'Dr. Blair Jast II', 'dr-blair-jast-ii', 'mbraun@kilback.com', '$2y$10$sT.Fm33BF9hRZ9m6x4Tm0uHtNCXhVgF3h996D0Mc2hNl6waZ9NIwK', '2023-05-20 09:00:41', 'Amf3MxCXW5', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '6', NULL, 'Belum Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Antone Ruecker', '6394', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 57, 1, 'Miss Bethany Little', 'miss-bethany-little', 'rohan.ross@glover.com', '$2y$10$zQhciFRu5KcLJ9n3OboAWughgRsF9Ea3A/DQfzZuHncHzdMuYqpqu', '2023-05-20 09:00:41', 'Fu6xAspdji', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '2', NULL, 'PKN', '2022', NULL, NULL, NULL, NULL, NULL),
('Garry Swaniawski', '6683', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 58, 5, 'Ebony Koelpin', 'ebony-koelpin', 'elang@hotmail.com', '$2y$10$xgLMf6YYnW.KWx7TpiD0Ue2fIovvLJlC1MwcAqeLjg1P2cSv47HMi', '2023-05-20 09:00:41', '8yGEgsSyDz', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '4', NULL, 'Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Donald Gerlach', '2204', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 59, 1, 'Prof. Libby Franecki IV', 'prof-libby-franecki-iv', 'rwyman@gmail.com', '$2y$10$HMEqbYURj1BMmMYAC1qL/OI.31WkAWFpyBzvwPZkK.JmWJ.2uLSMK', '2023-05-20 09:00:41', 'cPwURBixJf', '2023-05-20 09:00:48', '2023-05-20 09:00:48', '0', '6', NULL, 'Belum Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Carissa Moen', '7868', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 60, 1, 'Mavis Langosh', 'mavis-langosh', 'schimmel.bernadine@jacobi.com', '$2y$10$jSPfpBIdvU7FnW9AZM6wSu8PgPDpdGzG.heSRhA9cBonSKfHwNNLG', '2023-05-20 09:00:42', '1xypxvH7PH', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '6', NULL, 'Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Prof. Mackenzie Murray', '2892', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 61, 2, 'Madelyn Kulas', 'madelyn-kulas', 'alene59@gmail.com', '$2y$10$y50ZeFZrbYAekVGovMju6uZoYh/JEcZdJKHsFylRdj1y1kAdWgdwa', '2023-05-20 09:00:42', 'M1mLHJwfdo', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '5', NULL, 'Belum Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Violet Buckridge', '2932', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 62, 3, 'Dr. Alison Gibson', 'dr-alison-gibson', 'ajaskolski@gmail.com', '$2y$10$ebZOeP2n5DFzJiJGnRGdZuuZw3EtAzFy4Sf.BM8OGcaE2JR3zpdw.', '2023-05-20 09:00:42', 'SaJhMMv0xs', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '1', NULL, 'PKD', '2021', NULL, NULL, NULL, NULL, NULL),
('Carmel Champlin PhD', '7185', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 63, 5, 'Doris Moen', 'doris-moen', 'jwisozk@kertzmann.info', '$2y$10$3scx6MrHfvFMTV8y3QOhr.F708bht6EmjN7W0ZaksaR2HV6ehCpUK', '2023-05-20 09:00:42', 'rPV5qtuo2T', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '1', NULL, 'PKN', '2023', NULL, NULL, NULL, NULL, NULL),
('Rod Schoen', '4938', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 64, 4, 'Telly Hoppe MD', 'telly-hoppe-md', 'eulah.olson@yahoo.com', '$2y$10$av3wuP3rSF5VPa7Go4QtQuXg8wMYBIEUKuKGBU9crF1VDFcNZcZmO', '2023-05-20 09:00:42', 'kGmd8wOZGj', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '4', NULL, 'PKL', '2018', NULL, NULL, NULL, NULL, NULL),
('Mr. Jacques Torp IV', '8871', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 65, 4, 'Dr. Kay Morissette', 'dr-kay-morissette', 'dabbott@hilpert.com', '$2y$10$Q7Xogl1i6WeY/YaDoL7ftu.VSiUO/RbGiYZjc..5bSWDkUTquiqPO', '2023-05-20 09:00:42', 'MdKkp1P1hY', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '2', NULL, 'Belum Mapaba', '2021', NULL, NULL, NULL, NULL, NULL),
('Mr. Stan Pouros', '1068', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 66, 1, 'Miss Mathilde Kilback Jr.', 'miss-mathilde-kilback-jr', 'bernhard.elsa@gutmann.org', '$2y$10$kv39/J8GKW4k6PaHv6adsupS/Cj65LAFUotOGkf7Vuh7cm8YItk/O', '2023-05-20 09:00:42', 'VsT0CQ7KOg', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '1', NULL, 'Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Elizabeth Bradtke', '5558', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 67, 2, 'D\'angelo Goodwin I', 'd-angelo-goodwin-i', 'ookeefe@yahoo.com', '$2y$10$3sC8ltSgw0LR1Ly.QpXvM.uN9k.EKDo7mzucnoXvt1JcQ0KfIw3oi', '2023-05-20 09:00:42', 'iMItLbpoVZ', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '2', NULL, 'Belum Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Dorian Keeling MD', '1313', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 68, 1, 'Daphne Davis', 'daphne-davis', 'alfred.labadie@yahoo.com', '$2y$10$ko3XwEbkewnLwyVqmam9H.Tcc8z2upAvUegAvfhvYnNBZQ7ITpOS2', '2023-05-20 09:00:43', '18hbeQQBaU', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '4', NULL, 'PKN', '2018', NULL, NULL, NULL, NULL, NULL),
('Earline Rau IV', '7014', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 69, 1, 'Katlynn Hahn I', 'katlynn-hahn-i', 'mina53@nitzsche.com', '$2y$10$3CO1KOGKTDZXg/FyMbziv.oFeoNzaf8wyDBkdlt03X9x0Mvt0hN0q', '2023-05-20 09:00:43', 'faMoSUi87F', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '4', NULL, 'PKL', '2022', NULL, NULL, NULL, NULL, NULL),
('Lorna Grady', '248', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 70, 5, 'Mariah Hintz', 'mariah-hintz', 'walsh.rhett@hotmail.com', '$2y$10$mLRxrqKdYRKtUhH3s43C6u4ec/Sva5n8CqKEUn2fC/S9MaxpyQ8FG', '2023-05-20 09:00:43', 'k1yUFsIOxH', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '6', NULL, 'PKD', '2018', NULL, NULL, NULL, NULL, NULL),
('Madonna Shanahan', '3943', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 71, 2, 'Mr. Coby Friesen', 'mr-coby-friesen', 'gkerluke@yahoo.com', '$2y$10$lDRKthYgCnQBvyqzCpck8uG5wuOQdHSOz1A8xvb/yyzWQEM4FO4Tq', '2023-05-20 09:00:43', 'm9HHYvsr6a', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '2', NULL, 'Belum Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Lola Heaney Sr.', '7431', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 72, 1, 'Dr. Damon Stamm', 'dr-damon-stamm', 'langosh.josianne@yahoo.com', '$2y$10$lN3CDIulVcbgPZIdw6Mm5edhqrHL2Y5/kTPFLkAU1/.xUUhr4L.i2', '2023-05-20 09:00:43', 'NlVJ6G61Aa', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '4', NULL, 'PKN', '2019', NULL, NULL, NULL, NULL, NULL),
('Mr. Orville Legros IV', '8283', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 73, 3, 'Leopoldo Walker', 'leopoldo-walker', 'eichmann.grady@bayer.com', '$2y$10$KXQggpGG6df.tCex3Zl4Ke8JvmmSDOIRl2fUG6wzGG/xLJ/L.WYc6', '2023-05-20 09:00:43', 'PMsukCaOaW', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '1', NULL, 'Belum Mapaba', '2019', NULL, NULL, NULL, NULL, NULL),
('Pattie Huels', '55', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 74, 5, 'Lew Fahey', 'lew-fahey', 'corkery.carlie@kulas.com', '$2y$10$wKyD5OgcyV3wgQHFBffiC.oXhtA8I9MNOjtME57NYM26PyTyNm2vi', '2023-05-20 09:00:43', 'FDF1X2tIW5', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '1', NULL, 'PKL', '2022', NULL, NULL, NULL, NULL, NULL),
('Leda Stehr', '2761', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 75, 2, 'Solon Osinski', 'solon-osinski', 'melissa.dicki@gmail.com', '$2y$10$tUx9umtvjPnHET29SVUR8.wO8E0x0ovBhTGQKQAPfC7cD2SFMQk96', '2023-05-20 09:00:43', 'qbImOhxJqf', '2023-05-20 09:00:49', '2023-05-20 09:00:49', '0', '1', NULL, 'Mapaba', '2021', NULL, NULL, NULL, NULL, NULL),
('Jesus Heaney', '6153', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 76, 3, 'Prof. Christophe Howell I', 'prof-christophe-howell-i', 'stephania.wolf@zemlak.net', '$2y$10$kz1mmI07zIqYt70UIZZAzerGEAcQRxvyO2W38N4hKE4VmBGYPzWCa', '2023-05-20 09:00:43', 'WMyNTV0EvO', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '2', NULL, 'PKL', '2018', NULL, NULL, NULL, NULL, NULL),
('Dahlia Murazik', '8010', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 77, 4, 'Krystel Miller', 'krystel-miller', 'uchristiansen@hotmail.com', '$2y$10$K8q1vM6sWEPFKWrj6fg/lOTvGzFvLvClrQKIT7/VS38gS/m9e3bsy', '2023-05-20 09:00:43', 'PdcTimWXys', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '5', NULL, 'Belum Mapaba', '2022', NULL, NULL, NULL, NULL, NULL),
('Miss Margarett Beier', '7950', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 78, 5, 'Dr. Gaylord Veum', 'dr-gaylord-veum', 'konopelski.hildegard@hotmail.com', '$2y$10$0a4zfjb2OUdYLu22zXiA/uV7U2DLohNE1.mEalIYsXzxLqg4ZxwvK', '2023-05-20 09:00:43', 'rcVYycimho', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '2', NULL, 'PKD', '2020', NULL, NULL, NULL, NULL, NULL),
('Aisha Ratke Sr.', '5640', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 79, 1, 'Brielle Nader', 'brielle-nader', 'sdouglas@gmail.com', '$2y$10$XzXQVoYd4ZEKXlE3bexqUePvnEbDt/h00QYEylKUxY5Bx7.4At3eC', '2023-05-20 09:00:43', 'WtOv9mIjPR', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '6', NULL, 'Mapaba', '2021', NULL, NULL, NULL, NULL, NULL),
('Doug Heathcote V', '2648', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 80, 2, 'Graham Wilderman III', 'graham-wilderman-iii', 'juliet04@littel.net', '$2y$10$t9.h0.2.ytvpZIaRwg97K.WkVotz/qwdr.fVkHeEB2c05fI7UrGYy', '2023-05-20 09:00:44', 'JOiUO44xq8', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '3', NULL, 'PKN', '2020', NULL, NULL, NULL, NULL, NULL),
('Vivien Ruecker', '378', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 81, 5, 'Velda Kemmer', 'velda-kemmer', 'shanahan.jaqueline@gmail.com', '$2y$10$Qdfz01rEJyB2bMeCIM1EnOt6Hzhphk0Jlb5YxtOBvtrb8MFKbA33m', '2023-05-20 09:00:44', 'JZzNFS5zro', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '1', NULL, 'Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Salma Wolff', '2554', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 82, 4, 'Jasen Abbott I', 'jasen-abbott-i', 'mroob@yahoo.com', '$2y$10$dmqH6GAJytD7KRdFyM9QoOn9EoKrBHx14RtTTKwrPdsuRKR.9oi8O', '2023-05-20 09:00:44', 'zIjMBLHvvS', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '5', NULL, 'Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Dr. Andre Flatley III', '6334', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 83, 5, 'Celine Gerhold', 'celine-gerhold', 'mparker@hessel.info', '$2y$10$k2zQyd51NHW2wA/VZ0ZdqO1YAbLWhhQC4Jucpn80GW3dJ3juVsosO', '2023-05-20 09:00:44', '8G4vU3A7f2', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '4', NULL, 'PKL', '2020', NULL, NULL, NULL, NULL, NULL),
('Prof. Alysson Crooks', '1942', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 84, 5, 'Prof. Ara Feeney V', 'prof-ara-feeney-v', 'melisa.oconner@hotmail.com', '$2y$10$CYaywTM3LJW2mxHfCU6.0eRdOs/WpWiLQBeg.w6dVtmIOxQqCGcaO', '2023-05-20 09:00:44', 'jGPdmbci09', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '3', NULL, 'Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Prof. Jocelyn Hammes IV', '8734', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 85, 1, 'Mrs. Kaylee Flatley', 'mrs-kaylee-flatley', 'kristopher.rice@yahoo.com', '$2y$10$SMxQFd3QDOSrJLxoFmHjZuJbcPlFQVhcNcfr/yA2aJ6aZUx72RMcm', '2023-05-20 09:00:44', 'Car4ECPqVS', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '2', NULL, 'PKL', '2019', NULL, NULL, NULL, NULL, NULL),
('Dr. Sienna Miller', '9461', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 86, 5, 'Liam Anderson', 'liam-anderson', 'boris.halvorson@gmail.com', '$2y$10$F8ytCeBRmde4Qcc4vIkISe8kTj494hhdXUGMVyMN1Yt4AqV8b3kwu', '2023-05-20 09:00:44', '9e2DlQjyTw', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '1', NULL, 'PKL', '2018', NULL, NULL, NULL, NULL, NULL),
('Prof. Eldon Abbott IV', '9004', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 87, 2, 'Anita Nienow', 'anita-nienow', 'ewehner@gmail.com', '$2y$10$emujOa8SaWwyy7NqH9BwOuKQysaX9gx0Nx3to2NqnaRwF7tXY5lGC', '2023-05-20 09:00:44', 'g1q69YjWMh', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '4', NULL, 'Belum Mapaba', '2021', NULL, NULL, NULL, NULL, NULL),
('Dr. Sidney Aufderhar', '1329', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 88, 2, 'Jermey Blick Jr.', 'jermey-blick-jr', 'clinton72@stehr.info', '$2y$10$.5K12.oAqSdCFTNUubkb6.XDwHEz1hWTVFZFd/WG/M/pLftjJL2di', '2023-05-20 09:00:44', '2xcxfaTGUm', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '6', NULL, 'Mapaba', '2019', NULL, NULL, NULL, NULL, NULL),
('Beverly Lang', '4018', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 89, 2, 'Prof. Joanie Ondricka', 'prof-joanie-ondricka', 'roger63@kohler.net', '$2y$10$t6c66h1z9n.XmywU3e8P8uZc9XLbiLL/IgRpfNPAme3wtl6bihgUG', '2023-05-20 09:00:44', 'nYnJBM1Bfg', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '5', NULL, 'PKL', '2020', NULL, NULL, NULL, NULL, NULL),
('Meta Pacocha', '596', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 90, 3, 'General Carroll', 'general-carroll', 'belle.feest@white.com', '$2y$10$aMlc0S9by8/pZIIfsTlcGuwLBH53ckh.z1REbl1GyJbqmHi0y4z62', '2023-05-20 09:00:44', 'KuvSPKwf0d', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '4', NULL, 'PKL', '2021', NULL, NULL, NULL, NULL, NULL),
('Oscar Ruecker DDS', '1328', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 91, 5, 'Dr. Wilson Eichmann', 'dr-wilson-eichmann', 'josh.wolff@gmail.com', '$2y$10$1xEy7JCWDBhu.kLvMdGO.OwVS7dYY.8CtLwIyTanTk3kizH2c48IS', '2023-05-20 09:00:44', '7DGWwm07H4', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '2', NULL, 'PKN', '2022', NULL, NULL, NULL, NULL, NULL),
('Johan Fahey Sr.', '5495', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 92, 2, 'Javier Schamberger', 'javier-schamberger', 'aubree.oreilly@yahoo.com', '$2y$10$aHEVrquY9B0VTj3jrgZmOOF8LQ4jfsoW7xLSDswKMWyACG/FQhQ7O', '2023-05-20 09:00:45', 'ag9Y9NIwE9', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '6', NULL, 'Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Mr. Miller Watsica', '2177', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 93, 3, 'Dr. Ima Nitzsche', 'dr-ima-nitzsche', 'fparisian@yahoo.com', '$2y$10$S4.YvkjDIyKrbwOcBZWcS.VzW.sp27Z8Niqq8KgiREM9yEGyWBYD6', '2023-05-20 09:00:45', 'OvEFxdo66d', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '2', NULL, 'Belum Mapaba', '2021', NULL, NULL, NULL, NULL, NULL),
('Ms. Muriel Reichert DVM', '1892', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 94, 5, 'Mr. Devan Bauch', 'mr-devan-bauch', 'agulgowski@schulist.biz', '$2y$10$a0l2hUGK0nwu8rZQ2UK50uuWcsmA9OWJptir7y2YXeA3VGgWzJvF6', '2023-05-20 09:00:45', 'giLT4ACDKg', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '3', NULL, 'PKL', '2019', NULL, NULL, NULL, NULL, NULL),
('Tristian Kling', '2484', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 95, 1, 'Cristian Sanford', 'cristian-sanford', 'eveline41@kozey.biz', '$2y$10$ERqNA6ZcJQqHe9N6Rcizeu.IgdvEQqGFHAOA.RQ4ljFarHkzESKE6', '2023-05-20 09:00:45', '89Lua8BXYv', '2023-05-20 09:00:50', '2023-05-20 09:00:50', '0', '1', NULL, 'PKN', '2018', NULL, NULL, NULL, NULL, NULL),
('Alexanne Gutkowski', '2202', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 96, 4, 'Prof. Vilma Mitchell DDS', 'prof-vilma-mitchell-dds', 'arlene.trantow@schaden.net', '$2y$10$qUnCRtgsQh.XNBXDYrgoOec9/lsbQQPv/xPUAlHIbXdeTLBiATUTm', '2023-05-20 09:00:45', 'Azj4OZ7Ae4', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '4', NULL, 'Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Glenda Spencer', '3091', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 97, 2, 'Dr. Emilia Parker Sr.', 'dr-emilia-parker-sr', 'michaela90@gmail.com', '$2y$10$Fiq28lQ2yMRC.FQ2RAcdBe7CfrHDoE//OD9/cIJsCepIcJN.AunSS', '2023-05-20 09:00:45', 'DX8fUX3L2L', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '3', NULL, 'Mapaba', '2018', NULL, NULL, NULL, NULL, NULL),
('Connor Spinka', '8205', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 98, 1, 'Mr. Maynard Towne', 'mr-maynard-towne', 'jedidiah97@hotmail.com', '$2y$10$xA36zV1DEYXrN2NqBfznduJUIexrf5awU22lLyLiae9fZb8Aybn7C', '2023-05-20 09:00:45', 'ZsvJdcARFj', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '6', NULL, 'Mapaba', '2020', NULL, NULL, NULL, NULL, NULL),
('Flavie Altenwerth', '6257', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 99, 1, 'Daniella Shields V', 'daniella-shields-v', 'daren.rowe@doyle.net', '$2y$10$loqTs/U.eylkand37m6U2Oa6Nl3IIRWYf/5aSNNMvZsVOMuQhvRaK', '2023-05-20 09:00:45', 'mEi3hcxUVE', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '6', NULL, 'Mapaba', '2023', NULL, NULL, NULL, NULL, NULL),
('Rachael Bartoletti', '8528', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 100, 2, 'Rosetta Upton', 'rosetta-upton', 'gmonahan@hotmail.com', '$2y$10$zJyyviETv4NvVQJmtC3rHecewkV2jJQrVz01dvlG/s65YVQVW7kRi', '2023-05-20 09:00:45', 'aj1isrQMpB', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '4', NULL, 'PKD', '2023', NULL, NULL, NULL, NULL, NULL),
('Michaela Wehner', '4771', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 101, 2, 'Miss Trudie Howell MD', 'miss-trudie-howell-md', 'conrad54@hotmail.com', '$2y$10$nbAGN7c.TpmZkTVM9guwB.HKAAHHaI43czDpaoS3uXIZisF8LomfC', '2023-05-20 09:00:45', 'Mcv85wgDDr', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '3', NULL, 'Mapaba', '2019', NULL, NULL, NULL, NULL, NULL),
('Dale Purdy', '6595', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 102, 3, 'Danielle Kuhlman', 'danielle-kuhlman', 'schulist.dudley@hotmail.com', '$2y$10$0d5foR/6e.X5A77ehMRBHeung169VG3kU6LGxW02cqTkDySD6Y0um', '2023-05-20 09:00:45', 'EerFYjVhMb', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '6', NULL, 'PKN', '2019', NULL, NULL, NULL, NULL, NULL),
('Mrs. Madelynn Homenick V', '2271', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 103, 1, 'Jamie Kirlin DVM', 'jamie-kirlin-dvm', 'kelsie57@yahoo.com', '$2y$10$YZ5TnlUzz6BcChXHIVanjeBnJM509hJxoxtLSZe3SkSxEJt015EVm', '2023-05-20 09:00:45', 'wotHv7GhZh', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '2', NULL, 'PKN', '2023', NULL, NULL, NULL, NULL, NULL),
('Mr. Moises Wilderman', '8183', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 104, 1, 'Prof. Jade Hilpert V', 'prof-jade-hilpert-v', 'tmarks@haag.com', '$2y$10$vOfLVIxQ95CJwGHzH7V3cO3DnGz9TnehYHSjabZjkUhBoHe7sHj7C', '2023-05-20 09:00:46', '26Wts1ckPP', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '5', NULL, 'PKN', '2023', NULL, NULL, NULL, NULL, NULL),
('Prof. Octavia Zboncak DDS', '8986', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 105, 1, 'Prof. Jorge Senger MD', 'prof-jorge-senger-md', 'veda.leffler@yahoo.com', '$2y$10$nBN9M4qgA1KDxxh1Lxx.r.Mu43FztJwd0H.dnMuLlDXGPt.mSRFkm', '2023-05-20 09:00:46', 'mhEE7gbkGt', '2023-05-20 09:00:51', '2023-05-20 09:00:51', '0', '4', NULL, 'PKN', '2021', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_books`
--
ALTER TABLE `category_books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_books_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_title_index` (`title`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rayon_rayon_unique` (`rayon`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_books`
--
ALTER TABLE `category_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
