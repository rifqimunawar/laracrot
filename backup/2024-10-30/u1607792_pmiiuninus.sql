-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2023 at 03:19 PM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1607792_pmiiuninus`
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

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `title`, `penyelenggara`, `start`, `tempat`, `description`, `pamflet`, `created_at`, `updated_at`) VALUES
(1, 'Pelantikan Pengurus Komisariat', 'Komisariat', '2023-05-26T13:00', 'Gd. PascaSarjana Lt 1', 'Pelantikan PK PMII UNINUS dengan tema \"NGASUH NGASAH PMII\"', 'agenda_Komisariat-1685010565.png', '2023-05-25 03:29:25', '2023-05-25 03:29:25'),
(2, 'Taman Baca', 'Rayon Teknik', '2023-05-31T16:00', 'Rumput Surga', 'Non-Formal', 'agenda_Rayon Teknik-1685505252.jpg', '2023-05-30 20:54:12', '2023-05-30 20:54:12');

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
(1, 'Berita', 'berita', '2023-05-25 02:55:00', '2023-05-27 06:10:17'),
(2, 'Mahasiswa', 'mahasiswa', '2023-05-25 02:55:01', '2023-05-27 06:10:28'),
(3, 'PMII', 'pmii', '2023-05-25 02:55:01', '2023-05-27 06:10:38'),
(4, 'Opini', 'kader', '2023-05-25 02:55:01', '2023-05-27 06:11:10'),
(5, 'Teori', 'kampus', '2023-05-25 02:55:01', '2023-05-27 06:11:20');

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
(1, 'pmii', 'pmii', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(2, 'filsafat', 'filsafat', '2023-05-25 02:55:03', '2023-05-25 02:55:03'),
(3, 'Romansa', 'romansa', '2023-05-25 05:27:29', '2023-05-25 05:27:29'),
(4, 'Sastra', 'sastra', '2023-05-25 05:27:41', '2023-05-25 05:27:41'),
(5, 'Fiksi Islami', 'fiksi-islami', '2023-05-25 05:27:54', '2023-05-25 05:27:54'),
(6, 'Fantasi', 'fantasi', '2023-05-25 05:28:05', '2023-05-25 05:28:05'),
(7, 'Programming', 'programming', '2023-05-25 06:06:59', '2023-05-25 06:06:59');

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, '11', '3', 'Kereen. Tumbuh subur pergerakan 🌹', '2023-06-01 17:08:24', '2023-06-01 17:08:24'),
(2, '1', '3', 'mantap sahabat', '2023-06-04 04:58:22', '2023-06-04 04:58:22');

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
(6, 'galeri_-1685011217.jpg', 1, 'kampus uninus chuaaaks', '1', '2023-05-25 03:40:17', '2023-05-25 03:41:41'),
(12, 'galeri_-1685012604.jpg', 1, 'Pelantikan Rayon Teknik', '1', '2023-05-25 04:03:24', '2023-05-25 04:03:45');

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
(1, 'PMII Komisariat Uninus', 'Cabang Kota Bandung', 'https://www.youtube.com/', 'banner_update_-1684699926.jpg', '2023-05-25 02:54:59', '2023-05-25 02:54:59'),
(2, 'Tri Moto PMII', 'Dzikir, Pikir, Amal Shaleh', 'https://www.instagram.com/', 'banner_update_-1684700286.jpeg', '2023-05-25 02:54:59', '2023-05-25 02:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `h_b_n_s`
--

CREATE TABLE `h_b_n_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_b_n_s`
--

INSERT INTO `h_b_n_s` (`id`, `title`, `date`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'Hari Keluarga', '2023-05-29', 'aw aw aw aw', '2023-05-25 02:55:03', '2023-05-25 02:55:03'),
(6, 'Hari Tanpa Tembakau Sedunia', '2023-05-31', 'aw aw aw aw', '2023-05-25 02:55:03', '2023-05-25 02:55:03'),
(8, 'Idul adhw', '2023-06-29', NULL, '2023-06-05 03:16:34', '2023-06-05 03:16:34');

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
(22, '2023_05_17_192745_create_category_books_table', 1),
(23, '2023_05_21_072457_create_h_b_n_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('adimuadw@gmail.com', '$2y$10$BBQE0ZtkegMhNi/6fra/LO14wF6ruKphobq4QPyTZvPrEook8vyjK', '2023-06-17 09:11:08'),
('rifqimunawar48@gmail.com', '$2y$10$qE6jLXYXLtGbzzHDQTY8Gu527upr1srUOc4AcnN0ot84NdS6LKWgW', '2023-06-17 09:22:11');

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
(1, 'user.png', 'Riki Ramdan', 'rikiramdan', 'Ketua PMII Komisariat uninus', NULL, NULL, NULL, '2023-05-25 02:54:58', '2023-05-25 02:54:58');

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
(11, 'HTML5 Notes For Professionals', 'html5-notes-for-professionals', 'goalkicker.com', 'goalkicker.com', '2020', '-', 'english', '176', 'Membahas mengenai cara pembuatan website dengan html 5', 7, 1, 'perpus_-1685020274.png', 'perpus_-1685020274.pdf', '2023-05-25 06:11:14', '2023-05-25 06:11:14'),
(12, 'JavaScript Data Structures and Algorithms', 'javascript-data-structures-and-algorithms', 'Sammie Bae', '-', '-', '-', 'english', '351', 'JavaScript Data Structures and Algorithms', 1, 1, 'perpus_-1685020510.png', 'perpus_-1685020510.pdf', '2023-05-25 06:15:12', '2023-05-25 06:15:12'),
(13, 'Benturan NU - PKI', 'benturan-nu-pki', '-', '-', '2013', '-', 'Indonesia', '159', '-', 4, 1, 'perpus_Benturan NU - PKI-1685132485.jpg', 'perpus_Benturan NU - PKI-1685132485.pdf', '2023-05-26 13:21:25', '2023-05-26 13:21:25'),
(14, 'Analisis Sosial', 'analisis-sosial', '-', '-', '-', '-', 'Indonesia', '241', '-', 1, 1, 'perpus_Analisis Sosial-1685132884.jpg', 'perpus_Analisis Sosial-1685132884.pdf', '2023-05-26 13:28:04', '2023-05-26 13:28:04'),
(15, 'Filsafat Ilmu', 'filsafat-ilmu', '-', '-', '2013', '-', 'Indonesia', '95', '-', 2, 1, 'perpus_Filsafat Ilmu-1685133212.jpg', 'perpus_Filsafat Ilmu-1685133212.pdf', '2023-05-26 13:33:32', '2023-05-26 13:33:32'),
(16, 'Filsafat Islam', 'filsafat-islam', 'Abdallah Baehaqi :v', NULL, NULL, NULL, NULL, NULL, '!!إقرأ صحبة', 2, 9, 'perpus_-1685192467.jpg', 'perpus_-1685192467.pdf', '2023-05-27 06:01:07', '2023-05-27 06:01:07');

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

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `category_id`, `user_id`, `views`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Lama Tak Terdengar, PMII Rayon Teknik Kembali Melaksanakan Diskusi Senja Di Tempat Tak Terduga', 'lama-tak-terdengar-pmii-rayon-teknik-kembali-melaksanakan-diskusi-senja-di-tempat-tak-terduga', '<p><strong>PMII Rayon Teknik</strong>-kembali menggelar Diskusi Senja dengan tema yang menarik, \\\"Paradigma PMII\\\". Diskusi yang dilaksanakan pada sore hari di Gedung Pasca Sarjana Lantai 2 ini dihadiri oleh kader-kader PMII Teknik. Diskusi tersebut berlangsung selama beberapa jam sampai pada pukul 17.00 WIB.</p><p>Pemateri pada diskusi kali ini adalah Ilyas Khairul Alimnis, seorang kader Mujahid dari PMII Rayon Teknik yang kini telah sukses sebagai seorang pengusaha. Sahabat Ilyas Khairul Alimnis memaparkan pandangannya tentang paradigma PMII yang sejalan dengan kondisi zaman. Dalam diskusinya, sahabat Ilyas memaparkan pentingnya PMII sebagai organisasi kaderisasi mahasiswa yang mampu memberikan kontribusi positif bukan hanya di lingkungan kampus melainkan juga bagi bangsa dan negara.</p><p>Diskusi Senja kali ini juga dihadiri oleh sahabati Elisnawati sebagai moderator. Sahabat Elisnawa berhasil memimpin diskusi dengan lancar dan mampu mengajak para peserta diskusi untuk berpartisipasi aktif dalam diskusi tersebut.</p><p>Dalam diskusi ini, para peserta diajak untuk membahas peran PMII dalam mengatasi berbagai persoalan sosial yang sedang dihadapi oleh bangsa dan negara. Para anggota dan kader juga membahas tentang pentingnya menjaga komunikasi yang baik dengan pihak-pihak terkait dan membangun jaringan organisasi yang kuat.</p><p>Ketua PMII Rayon Teknik, Sahabat Agil Abdul Gandi Kusnadi, mengungkapkan kegembiraannya atas terselenggaranya Diskusi Senja ini. \\\"Kami sangat senang dapat menggelar Diskusi Senja kembali setelah sekian lama tidak melakukan kegiatan serupa. Kami berharap diskusi ini dapat memberikan wawasan baru bagi para anggota maupun kader PMII Rayon Teknik dan meningkatkan semangat kader-kader PMII untuk terus berkontribusi bagi bangsa dan negara,\\\" ujarnya.</p><p>Diskusi Senja PMII Rayon Teknik ini diharapkan dapat menjadi momen yang bermanfaat bagi para anggota maupun kader PMII Rayon Teknik dan dapat memotivasi kader-kader PMII untuk terus berproses. Semoga kegiatan seperti ini dapat terus diadakan di masa yang akan datang dan dapat memberikan manfaat yang besar bagi organisasi dan masyarakat.</p>', 'blog_-1685008925.jpeg', 1, 1, 111, 1, '2023-05-09 23:03:40', '2023-06-13 14:57:16'),
(2, 'Inovatif! Raie Aswajjillah Menjadi Juara dalam Kompetisi PolarDB Global Hackathon 2023 Kategori Innovation Award dengan Menciptakan Platform Web Devwork', 'inovatif-raie-aswajjillah-menjadi-juara-dalam-kompetisi-polardb-global-hackathon-2023-kategori-innovation-award-dengan-menciptakan-platform-web-devwork', '<p><strong>PMII Rayon Teknik</strong> - PolarDB Global Hackathon 2023 telah berakhir, dan Raie Aswajjillah kader PMII Rayon Teknik berhasil meraih juara dalam kategori \\\"Innovation Award\\\" dari kompetisi tersebut! Lomba hackathon yang diselenggarakan oleh Alibaba Cloud Tianchi ini menghadirkan 3155 tim dari 33 negara dan wilayah yang berpartisipasi serta menggunakan PolarDB dan produk-produk Alibaba Cloud lainnya untuk membangun solusi inovatif.</p><p>Di antara 3155 tim tersebut, Raie Aswajjillah berhasil meraih juara dengan menciptakan aplikasi web Devwork. Devwork adalah platform aplikasi web yang menyatukan para pengembang, pekerja, freelancer, individu yang terampil, dan orang biasa untuk berkolaborasi satu sama lain untuk saling menguntungkan. Siapa saja dapat berkontribusi pada aplikasi ini dengan memposting apa saja yang diinginkan, atau menjadi pengembang yang terampil dan bekerja dengan semua orang di dalam aplikasi ini.</p><p>Keberhasilan Raie Aswajjillah patut diacungi jempol, terutama karena kompetisi hackathon yang diikuti oleh ribuan tim dari seluruh dunia. Melalui aplikasi web Devwork, Raie mampu menciptakan sebuah solusi yang unik dan inovatif, dengan menawarkan kesempatan bagi para pengembang dan pekerja untuk bekerja sama dalam sebuah platform terpadu. Selain itu, aplikasi ini juga memberikan kesempatan bagi individu yang terampil untuk menawarkan jasanya kepada pengguna lain dalam rangka meningkatkan keterampilan dan memperoleh penghasilan tambahan.</p><p>Raie merasa sangat bersyukur atas pencapaian yang telah ia raih dan mengungkapkan rasa terima kasih kepada Allah SWT, Alibaba Cloud, Tianchi, dan juga CodePolitan atas penyelenggaraan kompetisi yang luar biasa ini. &nbsp;<i>\\\"Tidak pernah terpikirkan bahwa saya akan memenangkan kompetisi ini, ini adalah pertama kalinya saya mendapatkan penghargaan dari kompetisi tingkat internasional bergengsi, Alhamdulillah, saya sangat bersyukur atas pencapaian yang telah aku raih.\\\"</i> ungkapnya saat dihubungi melalui chat WhatsApps</p><p>Selamat kepada Raie Aswajjillah atas kemenangannya di PolarDB Global Hackathon 2023. Dengan inovasi tersebut, Raie membuktikan bahwa teknologi dapat digunakan untuk membawa perubahan positif bagi masyarakat. Kita berharap bahwa aplikasi web Devwork yang dibuat oleh Raie Aswajjillah akan terus berkembang dan memberikan manfaat bagi semua orang yang menggunakannya.</p><p>Selengkapnya kunjungi link dibawah, untuk melihat dan menggunakan aplikasi yang telah dibuat oleh sahabat Raie:</p><p><a href=\\\"https://www.alibabacloud.com/blog/the-winners-of-the-polardb-global-hackathon-2023-have-been-announced_599833\\\">Pengumuman Juara</a></p><p><a href=\\\"https://www.alibabacloud.com/id/developer/projecthub\\\">Showcase Project</a></p><p><a href=\\\"https://www.alibabacloud.com/blog/devwork-a-platform-for-developers-workers-and-individuals_599896?spm=a3c0i.28117407.8054513620.17.6c952110ZNz0RJ\\\">Devwork</a></p>', 'blog_-1685009734.jpg', 1, 1, 73, 1, '2023-05-13 01:35:22', '2023-06-13 14:57:13'),
(3, 'PMII Rayon Teknik Sukses Menggelar Taman Baca', 'pmii-rayon-teknik-sukses-menggelar-taman-baca', '<p style=\"text-align:justify;\"><span style=\"background-color:rgb(247,247,248);color:rgb(55,65,81);\"><strong>Bandung-</strong>Demi mendorong minat baca dan literasi di kalangan kader PMII Uninus, PMII Rayon Teknik menggelar taman baca. Acara yang diselenggarakan pada tanggal 31 Mei 2023 di pelataran Rumput Surga, kampus Universitas Islam Nusantara berhasil menarik perhatian banyak kader PMII dari berbagai Rayon.</span></p><p style=\"text-align:justify;\"><span style=\"background-color:rgb(247,247,248);color:rgb(55,65,81);\">Taman Baca ini merupakan salah satu proyek yang diinisiasi oleh PMII Rayon Teknik dengan tujuan untuk meningkatkan kesadaran akan pentingnya membaca dan mengembangkan keterampilan literasi di kalangan mahasiswa. Dalam era digital seperti sekarang ini, di mana informasi mudah diakses melalui internet, minat baca seringkali menurun. Oleh karena itu, PMII Rayon Teknik merasa penting untuk mengembangkan budaya literasi di kalangan kader PMII Uninus.</span></p><p style=\"text-align:justify;\"><span style=\"background-color:rgb(247,247,248);color:rgb(55,65,81);\">Acara Taman Baca ini diisi dengan berbagai kegiatan menarik, mulai dari pameran buku, membaca bersama, hingga diskusi buku. Pameran buku menyajikan beragam genre mulai dari fiksi, non-fiksi, hingga buku-buku akademik. Mahasiswa dan kader PMII Uninus dapat melihat dan memilih buku-buku yang menarik minat mereka. Selain itu, diskusi buku memberikan kesempatan bagi mahasiswa untuk berbagi pengalaman membaca dan saling merekomendasikan buku yang menarik.</span></p><p style=\"text-align:justify;\"><span style=\"background-color:rgb(247,247,248);color:rgb(55,65,81);\">Ketua PMII Rayon Teknik, Agil Abdul Gani Kusnadi, mengatakan, “Kami sangat senang melihat antusiasme mahasiswa, mulai dari mahasiswa biasa hingga kader PMII dari berbagai Rayon hadir dalam acara Taman Baca ini. Melalui kegiatan ini, kami berharap dapat meningkatkan minat baca dan literasi di kalangan mahasiswa maupun kader PMII Uninus. Literasi adalah kunci untuk pengembangan diri dan peningkatan pemahaman terhadap dunia di sekitar kita.”</span></p><figure class=\"image\"><img src=\"/userfiles/images/Screenshot_20230601_163023_com_whatsapp_edit_18382835981048.jpg\"></figure><p style=\"text-align:justify;\"><span style=\"background-color:rgb(247,247,248);color:rgb(55,65,81);\">Taman Baca ini juga merupakan upaya PMII Rayon Teknik untuk mendukung program Komisariat PMII Uninus dalam upaya meningkatkan kualitas kader PMII Uninus. Dengan menggelar acara ini, PMII Rayon Teknik berharap dapat memberikan kontribusi positif dalam peningkatan minat baca dan kemampuan literasi di wilayah Kampus Universitas Islam Nusantara.</span></p><p style=\"text-align:justify;\"><span style=\"background-color:rgb(247,247,248);color:rgb(55,65,81);\">Acara Taman Baca yang sukses ini mendapat apresiasi dari para mahasiswa dan kader PMII Uninus. Mereka berharap acara serupa dapat diadakan secara berkala untuk terus memperkuat minat baca dan literasi di kalangan Kampus Universitas Islam Nusantara.</span></p>', 'blog_-1685612179.jpg', 1, 1, 59, 1, '2023-06-01 02:27:21', '2023-06-13 14:57:20');

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

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 2, 4, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 3, 2, NULL, NULL),
(6, 3, 3, NULL, NULL);

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
(1, 'quotes_update_Soe Hok Gie-1684701036.jpg', 'Soe Hok Gie', 'Aktivis Orde Lama', 'Hidup adalah keberanian menghadapi tanda tanya.', '2023-05-25 02:55:00', '2023-05-25 02:55:00'),
(2, 'quotes_update_Khalil Gibran-1684701466.jpeg', 'Khalil Gibran', 'Seniman, Penyair, Penulis', 'Apa saja yang membakar dan membuat orang lain terbakar adalah berguna.,\r\n', '2023-05-25 02:55:00', '2023-05-25 02:55:00');

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
(1, 'Teknik', 'teknik', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(2, 'Hukum', 'hukum', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(3, 'Fai', 'fai', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(4, 'Ekonomi', 'ekonomi', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(5, 'Fikom', 'fikom', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(6, 'Fkip', 'fkip', '2023-05-25 02:55:02', '2023-05-25 02:55:02');

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
(1, 'Superadmin', '2023-05-25 02:54:57', '2023-05-25 02:54:57'),
(2, 'admin', '2023-05-25 02:54:57', '2023-05-25 02:54:57'),
(3, 'user', '2023-05-25 02:54:57', '2023-05-25 02:54:57'),
(4, 'guest', '2023-05-25 02:54:57', '2023-05-25 02:54:57'),
(5, 'unverification', '2023-05-25 02:54:57', '2023-05-25 02:54:57');

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
(1, 'pmii', 'pmii', '2023-05-25 02:55:01', '2023-05-25 02:55:01'),
(2, 'pmiiuninus', 'pmiiuninus', '2023-05-25 02:55:01', '2023-05-25 02:55:01'),
(3, 'pmiiteknik', 'pmiiteknik', '2023-05-25 02:55:01', '2023-05-25 02:55:01'),
(4, 'pmiibandung', 'pmiibandung', '2023-05-25 02:55:02', '2023-05-25 02:55:02'),
(5, 'pmiimajumendunia', 'pmiimajumendunia', '2023-05-25 02:55:02', '2023-05-25 02:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.png',
  `provinces` varchar(255) DEFAULT NULL,
  `cities` varchar(255) DEFAULT NULL,
  `districts` varchar(255) DEFAULT NULL,
  `villages` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`name`, `nim`, `img`, `provinces`, `cities`, `districts`, `villages`, `alamat`, `bio`, `t_lahir`, `ttl`, `hobi`, `sma`, `thn_lulus`, `thn_kuliah`, `wa`, `twitter`, `fb`, `ig`, `kelamin`, `id`, `role_id`, `username`, `slug`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `centang`, `rayon_id`, `prodi`, `kaderisasi`, `thn_mapaba`, `thn_pkd`, `thn_pkl`, `thn_pkn`, `informal`, `nonformal`) VALUES
('Rifqi Munawar', '41037006211013', 'profile_rifqi_munawar-1685183361.jpg', NULL, NULL, NULL, NULL, 'Kp. Kaliwangi desa Jati Kec. Sindangbarang Kab. Cianjur', 'salam pergerakan', NULL, '2001-11-05', 'Membaca', 'Man 2 Kota Bandung', '2020', '2021', '085161145097', NULL, NULL, NULL, 'L', 1, 1, 'rifqi_munawar', 'rifqi_munawar', 'rifqimunawar48@gmail.com', '$2y$10$qJCtePxsBRjheUEjoKD2DeDHH9T/TIO0l39OFKvZQche1wdPgMyXO', NULL, NULL, '2023-05-25 02:54:57', '2023-05-27 03:29:21', '1', '1', '-- Prodi Di Ulul Albab --', 'Mapaba', '2021', '-', '-', '-', '1', '2'),
('Raie Aswajjillah', '41037006211028', 'profile_rai___a-1685064286.png', NULL, NULL, NULL, NULL, 'Jl. Baladewa utara No.32', 'tangan terkepan dan maju kemuka!!!', NULL, '2003-03-01', 'Bermusik', 'SMKN 2 Bandung', '2021', '2021', '088218136394', '-', 'https://www.facebook.com/rai.aswajjillah/', 'https://www.instagram.com/rai___a/', 'L', 6, 1, 'rai___a', 'rai-a', 'rai010303@gmail.com', '$2y$10$XY2QcGt491/Nmk.fnRuIT.HUB0f9fRFRBNCNAzw13NGOcvlCH50Pu', NULL, 'HthFwgFPr7AeuxFRkMBcSKrQPQgYXYciA5PvLN7g8dXvyUrpN6kOCPwWRkSs', '2023-05-25 02:54:58', '2023-06-17 17:58:46', '0', '1', '-- Prodi Di Ulul Albab --', 'Mapaba', '2021', '2023', '-', '-', '1', '1'),
('Ilyas Khoirul Alimnis', '41037006211114', 'user.png', NULL, NULL, NULL, NULL, NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 7, 3, 'Ilyas Khoirul A', 'ilyas-khoirul-a', '', '$2y$10$MepGU6vnY1oYhhbrJph8R.088CtFZRIss687yIR9HVxyqe2C8HiCG', NULL, NULL, '2023-05-25 02:54:58', '2023-05-25 03:20:48', '0', '1', '-- Prodi Di Ulul Albab --', 'PKD', '2021', '2022', '-', '-', '1', '1'),
('Riki Ramdan', '41037006191067', 'profile_rikiramdan25-1685184012.jpg', NULL, NULL, NULL, NULL, 'Kp Cikadu Rt 5 Rw 5 Desa Baranangsiang Kecamatan Cipongkor KBB', 'tangan terkepan dan maju kemuka!!!', NULL, '2023-05-27', NULL, 'SMK Pembangunan Bandung Barat', '2017', '2019', '083822751029', NULL, NULL, NULL, 'L', 8, 1, 'rikiramdan25', 'rikiramdan25', 'rikiramdan533@gmail.com', '$2y$10$gxg7TZHuYwEcQfbtuXs.1u/nTGQohgmjFayP7ND1wUGhGIEc8V9y2', NULL, NULL, '2023-05-25 02:54:58', '2023-05-27 03:40:13', '0', '1', '-- Prodi Di Ulul Albab --', 'PKL', '2019', '2020', '2022', '-', '2', '2'),
('Abdallah Baehaqi Faqih', '41032124221005', 'profile_Haoshoku_haqi-1685191778.jpg', NULL, NULL, NULL, NULL, 'Sukamiskin Kota Bandung', 'Tumbuh subur pergerakanku!!!', NULL, '2003-08-30', 'Membaca', 'MA', '2020', '2022', '083100152040', 'https://twitter.com/abdalah_baehaqi', NULL, '@alhaqqiwalfaqih', 'L', 9, 3, 'Haoshoku_haqi', 'haoshoku-haqi', 'abdalah.baehaqi@gmail.com', '$2y$10$1aqA/wqjbavvsf/29/T9LelrC9KboslG2GI5g9SULJeTdUdCKjXP.', NULL, NULL, '2023-05-27 05:38:43', '2023-05-27 06:01:51', '0', '6', '-- Prodi Di Ulul Albab --', 'PKD', '2022', '2023', '-', '-', '0', '0'),
('Rizki Zaki Abdurahman', '41037006191038', 'profile_rizkizaki-1685347150.JPG', NULL, NULL, NULL, NULL, 'Kp. Pasir Panjang RT03/06, Ds. Jagabaya, Kec. Cimaung, Kab. Bandung', 'tangan terkepan dan maju kemuka!!!', NULL, '1999-10-21', 'Bermain Game', 'SMA AL-FALAH BANJARAN', '2018', '2019', '087848778773', 'rizkizaki21', NULL, 'arizkizakiii', 'L', 10, 1, 'rizkizaki', 'rizkizaki', 'abdurahmanzaki21@gmail.com', '$2y$10$a18fYTTEzxLs3lNJW25sluN1WQHCnsTUxcLw4jEFqwFOlQ3kXFKqK', NULL, NULL, '2023-05-29 00:55:30', '2023-05-29 01:00:00', '0', '1', '-- Prodi Di Ulul Albab --', 'PKD', '2019', '2021', '-', '-', '0', '0'),
('Adi Muad Wahidin', '41037003211015', 'profile_Adi Muad W-1685664877.jpg', NULL, NULL, NULL, NULL, 'Bandung Barat', 'tangan terkepan dan maju kemuka!!!', NULL, '2002-04-05', NULL, 'SMAN 1 Cikalongwetan', '2021', '2021', '085965540566', NULL, NULL, 'Adimuadwahidin323@gmail.com', 'L', 11, 3, 'Adi Muad W', 'adi-muad-w', 'Adimuadwahidin323@gmail.com', '$2y$10$1ctmXdlhB1bASbH9tg/HZ.XhDsXSNyzz6cYGK17P4GWzIh/.9YMHm', NULL, 'fkXEJfi5JZgZcTXvQYMWaC1EyiIK72Ajuv9m966lYKoBrLb2l16x2DJnfVN7', '2023-06-01 17:07:41', '2023-06-17 10:01:10', '0', '1', '-- Prodi Di Ulul Albab --', 'PKD', '2021', '2023', '-', '-', '1', '1'),
('Elisna', '41037006211032', 'user.png', NULL, NULL, NULL, NULL, NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 3, '053', '053', NULL, '$2y$10$SDpxJiaCuj1OMddQ5EpEB.6tH4Wed/vvsO7fkQIHXXbDfoKSclHnO', NULL, NULL, '2023-06-05 01:40:06', '2023-06-05 01:42:36', '0', '1', '-- Prodi Di Ulul Albab --', 'Mapaba', '2021', '-', '-', '-', '1', '1'),
('Restu Faisal', '41037003211011', 'user.png', NULL, NULL, NULL, NULL, NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 3, 'Restuu', 'restuu', NULL, '$2y$10$wcAvOhOLxo2GAZfjyRevGeNv0l.Xx1qXlFXCTcMMzYm/UZILu1Pfi', NULL, NULL, '2023-06-12 03:08:00', '2023-06-18 22:41:25', '0', '1', '-- Prodi Di Ulul Albab --', 'PKD', '2021', '2023', '-', '-', '1', '1');

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
-- Indexes for table `h_b_n_s`
--
ALTER TABLE `h_b_n_s`
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
  ADD UNIQUE KEY `users_nim_unique` (`nim`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_books`
--
ALTER TABLE `category_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `h_b_n_s`
--
ALTER TABLE `h_b_n_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
