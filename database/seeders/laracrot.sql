-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2023 at 11:05 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Ngaso', 'Rayon Teknik', '2023-05-10T15:00', 'Rumput Surga', 'Ngobrol pasosore agenda rutinan', 'agenda_Rayon Teknik-1683721551.jpeg', '2023-05-10 05:25:51', '2023-05-10 05:25:51');

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
(1, 'berita', 'berita', '2023-05-10 04:10:19', '2023-05-10 04:10:19'),
(2, 'mahasiswa', 'mahasiswa', '2023-05-10 04:10:19', '2023-05-10 04:10:19'),
(3, 'pmii', 'pmii', '2023-05-10 04:10:19', '2023-05-10 04:10:19'),
(4, 'opini', 'kader', '2023-05-10 04:10:19', '2023-05-10 05:39:43'),
(5, 'kampus', 'kampus', '2023-05-10 04:10:19', '2023-05-10 04:10:19');

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
(1, '1', '5', 'Test Komentar', '2023-05-10 06:15:29', '2023-05-10 06:15:29'),
(3, '1', '9', '@ilyass ieu fitur komentar', '2023-05-13 22:35:36', '2023-05-13 22:35:36'),
(4, '1', '9', 'tebisa ngetag jelema deuih', '2023-05-13 22:35:54', '2023-05-13 22:35:54'),
(5, '9', '7', 'Keren Rai', '2023-05-13 22:37:24', '2023-05-13 22:37:24'),
(6, '9', '9', 'Test', '2023-05-13 22:38:01', '2023-05-13 22:38:01'),
(7, '9', '9', 'Jieun atuh meh bisa nge tag jelemaa qii', '2023-05-13 22:38:21', '2023-05-13 22:38:21');

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
(5, 'Screenshot_12.jpg', 1, 'So asik lo bangsat', '1', '2023-05-10 04:10:16', '2023-05-10 04:10:16'),
(6, 'galeri_-1683724415.jpg', 1, 'senja', '1', '2023-05-10 06:13:35', '2023-05-10 06:13:41'),
(7, 'galeri_-1683729777.jpg', 1, 'ngoding', '1', '2023-05-10 07:42:57', '2023-05-10 07:44:00'),
(8, 'galeri_-1684001391.JPG', 2, 'huhuy', '1', '2023-05-13 11:09:52', '2023-05-13 11:09:59'),
(9, 'galeri_-1684040800.jpg', 9, 'Salam Pergerakan', '1', '2023-05-13 22:06:40', '2023-05-13 22:07:58'),
(10, 'galeri_-1684041165.jpg', 9, 'PKD', '1', '2023-05-13 22:12:45', '2023-05-13 22:13:02'),
(11, 'galeri_-1684041295.jpg', 9, 'Yow', '1', '2023-05-13 22:14:55', '2023-05-13 22:15:22');

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
(1, 'Berita terbaru hari ini', 'aw aw aw aw', 'https://www.youtube.com/', 'banner_update_-1683727045.jpg', '2023-05-10 04:10:16', '2023-05-10 06:57:25'),
(2, 'Berita kedua', 'ikeh ikeh kimochi', 'https://www.instagram.com/', 'banner_update_-1683727589.jpg', '2023-05-10 04:10:16', '2023-05-10 07:06:29'),
(3, 'Berita ketiga', 'baru anjay mabar', 'https://www.instagram.com/', 'banner_update_-1683727610.jpg', '2023-05-10 04:10:17', '2023-05-10 07:06:50');

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
(20, '2023_05_10_043253_create_quotes_table', 1);

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
(1, 'user.png', 'Riki Ramdan', 'rikiramdan', 'Ketua PMII Komisariat uninus', NULL, NULL, NULL, '2023-05-10 04:10:16', '2023-05-10 04:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(40) DEFAULT NULL,
  `pdf` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id`, `judul`, `user_id`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(4, 'Berita terbaru hari ini', 2, 'Screenshot_6.jpg', 'download.pdf', '2023-05-10 04:10:17', '2023-05-10 04:10:17'),
(5, 'Berita terbaru hari ini', 3, 'Screenshot_7.jpg', 'download.pdf', '2023-05-10 04:10:17', '2023-05-10 04:10:17'),
(6, 'Berita terbaru hari ini', 1, 'Screenshot_8.jpg', 'download.pdf', '2023-05-10 04:10:17', '2023-05-10 04:10:17'),
(7, 'Berita terbaru hari ini', 2, 'Screenshot_9.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(8, 'Berita terbaru hari ini', 3, 'Screenshot_10.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(9, 'Berita terbaru hari ini', 1, 'Screenshot_11.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(10, 'Berita terbaru hari ini', 2, 'Screenshot_12.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(11, 'Berita terbaru hari ini', 2, 'Screenshot_13.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(12, 'Berita terbaru hari ini', 2, 'Screenshot_14.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(13, 'Berita terbaru hari ini', 1, 'Screenshot_20.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(14, 'Berita terbaru hari ini', 1, 'Screenshot_22.jpg', 'download.pdf', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(16, 'buku', 2, 'perpus_-1684001502.jpg', 'perpus_-1684001503.pdf', '2023-05-13 11:11:43', '2023-05-13 11:11:43'),
(17, 'Puisi', 9, 'perpus_-1684041797.png', 'perpus_-1684041798.pdf', '2023-05-13 22:23:23', '2023-05-13 22:23:23');

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
(5, 'Lama Tak Terdengar, PMII Rayon Teknik Kembali Melaksanakan Diskusi Senja Di Tempat Tak Terduga', 'lama-tak-terdengar-pmii-rayon-teknik-kembali-melaksanakan-diskusi-senja-di-tempat-tak-terduga', '<p><strong>PMII Rayon Teknik</strong>-kembali menggelar Diskusi Senja dengan tema yang menarik, \"Paradigma PMII\". Diskusi yang dilaksanakan pada sore hari di Gedung Pasca Sarjana Lantai 2 ini dihadiri oleh kader-kader PMII Teknik. Diskusi tersebut berlangsung selama beberapa jam sampai pada pukul 17.00 WIB.</p><p>Pemateri pada diskusi kali ini adalah Ilyas Khairul Alimnis, seorang kader Mujahid dari PMII Rayon Teknik yang kini telah sukses sebagai seorang pengusaha. Sahabat Ilyas Khairul Alimnis memaparkan pandangannya tentang paradigma PMII yang sejalan dengan kondisi zaman. Dalam diskusinya, sahabat Ilyas memaparkan pentingnya PMII sebagai organisasi kaderisasi mahasiswa yang mampu memberikan kontribusi positif bukan hanya di lingkungan kampus melainkan juga bagi bangsa dan negara.</p><p>Diskusi Senja kali ini juga dihadiri oleh sahabati Elisnawati sebagai moderator. Sahabat Elisnawa berhasil memimpin diskusi dengan lancar dan mampu mengajak para peserta diskusi untuk berpartisipasi aktif dalam diskusi tersebut.</p><p>Dalam diskusi ini, para peserta diajak untuk membahas peran PMII dalam mengatasi berbagai persoalan sosial yang sedang dihadapi oleh bangsa dan negara. Para anggota dan kader juga membahas tentang pentingnya menjaga komunikasi yang baik dengan pihak-pihak terkait dan membangun jaringan organisasi yang kuat.</p><p>Ketua PMII Rayon Teknik, Sahabat Agil Abdul Gandi Kusnadi, mengungkapkan kegembiraannya atas terselenggaranya Diskusi Senja ini. \"Kami sangat senang dapat menggelar Diskusi Senja kembali setelah sekian lama tidak melakukan kegiatan serupa. Kami berharap diskusi ini dapat memberikan wawasan baru bagi para anggota maupun kader PMII Rayon Teknik dan meningkatkan semangat kader-kader PMII untuk terus berkontribusi bagi bangsa dan negara,\" ujarnya.</p><p>Diskusi Senja PMII Rayon Teknik ini diharapkan dapat menjadi momen yang bermanfaat bagi para anggota maupun kader PMII Rayon Teknik dan dapat memotivasi kader-kader PMII untuk terus berproses. Semoga kegiatan seperti ini dapat terus diadakan di masa yang akan datang dan dapat memberikan manfaat yang besar bagi organisasi dan masyarakat.</p>', 'blog_-1683723820.jpeg', 2, 1, 82, 1, '2023-05-10 06:03:40', '2023-05-16 04:59:59'),
(7, 'Inovatif! Raie Aswajjillah Menjadi Juara dalam Kompetisi PolarDB Global Hackathon 2023 Kategori Innovation Award dengan Menciptakan Platform Web Devwork', 'inovatif-raie-aswajjillah-menjadi-juara-dalam-kompetisi-polardb-global-hackathon-2023-kategori-innovation-award-dengan-menciptakan-platform-web-devwork', '<p><strong>PMII Rayon Teknik</strong> - PolarDB Global Hackathon 2023 telah berakhir, dan Raie Aswajjillah kader PMII Rayon Teknik berhasil meraih juara dalam kategori \"Innovation Award\" dari kompetisi tersebut! Lomba hackathon yang diselenggarakan oleh Alibaba Cloud Tianchi ini menghadirkan 3155 tim dari 33 negara dan wilayah yang berpartisipasi serta menggunakan PolarDB dan produk-produk Alibaba Cloud lainnya untuk membangun solusi inovatif.</p><p>Di antara 3155 tim tersebut, Raie Aswajjillah berhasil meraih juara dengan menciptakan aplikasi web Devwork. Devwork adalah platform aplikasi web yang menyatukan para pengembang, pekerja, freelancer, individu yang terampil, dan orang biasa untuk berkolaborasi satu sama lain untuk saling menguntungkan. Siapa saja dapat berkontribusi pada aplikasi ini dengan memposting apa saja yang diinginkan, atau menjadi pengembang yang terampil dan bekerja dengan semua orang di dalam aplikasi ini.</p><p>Keberhasilan Raie Aswajjillah patut diacungi jempol, terutama karena kompetisi hackathon yang diikuti oleh ribuan tim dari seluruh dunia. Melalui aplikasi web Devwork, Raie mampu menciptakan sebuah solusi yang unik dan inovatif, dengan menawarkan kesempatan bagi para pengembang dan pekerja untuk bekerja sama dalam sebuah platform terpadu. Selain itu, aplikasi ini juga memberikan kesempatan bagi individu yang terampil untuk menawarkan jasanya kepada pengguna lain dalam rangka meningkatkan keterampilan dan memperoleh penghasilan tambahan.</p><p>Raie merasa sangat bersyukur atas pencapaian yang telah ia raih dan mengungkapkan rasa terima kasih kepada Allah SWT, Alibaba Cloud, Tianchi, dan juga CodePolitan atas penyelenggaraan kompetisi yang luar biasa ini. &nbsp;<i>\"Tidak pernah terpikirkan bahwa saya akan memenangkan kompetisi ini, ini adalah pertama kalinya saya mendapatkan penghargaan dari kompetisi tingkat internasional bergengsi, Alhamdulillah, saya sangat bersyukur atas pencapaian yang telah aku raih.\"</i> ungkapnya saat dihubungi melalui chat WhatsApps</p><p>Selamat kepada Raie Aswajjillah atas kemenangannya di PolarDB Global Hackathon 2023. Dengan inovasi tersebut, Raie membuktikan bahwa teknologi dapat digunakan untuk membawa perubahan positif bagi masyarakat. Kita berharap bahwa aplikasi web Devwork yang dibuat oleh Raie Aswajjillah akan terus berkembang dan memberikan manfaat bagi semua orang yang menggunakannya.</p><p>Selengkapnya kunjungi link dibawah, untuk melihat dan menggunakan aplikasi yang telah dibuat oleh sahabat Raie:</p><p><a href=\"https://www.alibabacloud.com/blog/the-winners-of-the-polardb-global-hackathon-2023-have-been-announced_599833\">Pengumuman Juara</a></p><p><a href=\"https://www.alibabacloud.com/id/developer/projecthub\">Showcase Project</a></p><p><a href=\"https://www.alibabacloud.com/blog/devwork-a-platform-for-developers-workers-and-individuals_599896?spm=a3c0i.28117407.8054513620.17.6c952110ZNz0RJ\">Devwork</a></p>', 'blog_-1683992120.png', 1, 1, 33, 1, '2023-05-13 08:35:22', '2023-05-15 00:24:43'),
(9, 'PKD Mujahid', 'pkd-mujahid', '<p>Semarang, NU Online Jateng Dalam rangka melanjutkan jenjang kaderisasi, Pergerakan Mahasiswa Islam Indonesia (PMII) Rayon Ekonomi UIN Walisongo Semarang mengadakan kegiatan Pelatihan Kader Dasar (PKD) yang dilaksanakan pada Jumat-Ahad (24-26/2/2023) di SMAN 08 Semarang. Kegiatan mengusung tema \'Transformasi Kader Mujahid Yang Produktif Dan Kompetitif Di Era Society 5.0 dibuka Dekan Fakultas Ekonomi Bisnis Islam (FEBI) UIN Walisongo H Muhammad Saifullah dan Ketua Pengurus Cabang (PC) PMII Kota Semarang dilanjutkan dengan studium general. Ketua PMII Rayon Ekonomi Iqbal Alaik mengatakan, PKD menjadi kelanjutan materi setelah Masa Penerimaan Anggota Baru (Mapaba) di mana kader dituntut untuk lebih kritis dalam menanggapi permasalahan yang muncul.</p>', 'blog_-1684042114.jpg', 1, 9, 11, 1, '2023-05-13 22:28:34', '2023-05-15 00:34:10');

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
(9, 5, 1, NULL, NULL),
(10, 5, 2, NULL, NULL),
(11, 5, 3, NULL, NULL),
(14, 7, 2, NULL, NULL),
(15, 7, 3, NULL, NULL),
(17, 9, 1, NULL, NULL),
(18, 9, 5, NULL, NULL);

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
(1, 'user.png', 'rifqi', 'penakluk zeus', 'sakirana cinta ngahalangan kaderisasi!!!!! \r\n        TINGGALKAN!!!!!!!!', '2023-05-10 04:10:18', '2023-05-10 04:10:18'),
(2, 'quotes_update_ilyas-1683720087.JPG', 'ilyas', 'anu gaduh cikalong wetan', 'yang manis hanya ada di awal', '2023-05-10 04:10:19', '2023-05-10 05:01:28'),
(3, 'quotes_update_Adi Muad-1683719952.jpg', 'Adi Muad', 'Kader PMII Rayon Teknik', 'Jadi ketua himpunan adalah nafsu', '2023-05-10 04:10:19', '2023-05-10 04:59:14');

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
(1, 'Teknik', 'teknik', '2023-05-10 04:10:20', '2023-05-10 04:10:20'),
(2, 'Hukum', 'hukum', '2023-05-10 04:10:21', '2023-05-10 04:10:21'),
(3, 'Fai', 'fai', '2023-05-10 04:10:21', '2023-05-10 04:10:21'),
(4, 'Ekonomi', 'ekonomi', '2023-05-10 04:10:21', '2023-05-10 04:10:21'),
(5, 'Fikom', 'fikom', '2023-05-10 04:10:21', '2023-05-10 04:10:21'),
(6, 'Fkip', 'fkip', '2023-05-10 04:10:21', '2023-05-10 04:10:21');

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
(1, 'Superadmin', '2023-05-10 04:10:15', '2023-05-10 04:10:15'),
(2, 'admin', '2023-05-10 04:10:15', '2023-05-10 04:10:15'),
(3, 'user', '2023-05-10 04:10:15', '2023-05-10 04:10:15'),
(4, 'guest', '2023-05-10 04:10:15', '2023-05-10 04:10:15'),
(5, 'unverification', '2023-05-10 04:10:15', '2023-05-10 04:10:15');

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
(1, 'pmii', 'pmii', '2023-05-10 04:10:19', '2023-05-10 04:10:19'),
(2, 'pmiiuninus', 'pmiiuninus', '2023-05-10 04:10:20', '2023-05-10 04:10:20'),
(3, 'pmiiteknik', 'pmiiteknik', '2023-05-10 04:10:20', '2023-05-10 04:10:20'),
(4, 'pmiibandung', 'pmiibandung', '2023-05-10 04:10:20', '2023-05-10 04:10:20'),
(5, 'pmiimajumendunia', 'pmiimajumendunia', '2023-05-10 04:10:20', '2023-05-10 04:10:20');

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
('Rifqi Munawar', '1', 'profile_rifqi_munawar-1683724321.jpg', 'Cianjur', 'biografi saa', NULL, NULL, NULL, NULL, NULL, NULL, '085161145097', 'https://www.instagram.com/rifqi_munawar/', 'https://www.instagram.com/rifqi_munawar/', 'https://www.instagram.com/rifqi_munawar/', 'Bermusik', 1, 1, 'rifqi_munawar', 'rifqi_munawar', 'rifqimunawar@gmail.com', '$2y$10$9H4BBd6BH7hyf9QcJWpa4e/KSVGiR2vdHCyd4OhX3ZK6DnP9GGX16', NULL, NULL, '2023-05-10 04:10:15', '2023-05-16 03:48:30', '1', '1', '-- Prodi Di Ulul Albab --', 'Mapaba', '2021', '-', '-', '-', '2', '3'),
('Raie Aswajjillah', '41037006211028', 'user.png', 'Jl. Baladewa utara No.32', 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, '088218136394', '-', '-', '-', 'Bermusik', 8, 1, 'rai___a', 'rai-a', 'rai010303@gmail.com', '$2y$10$ass8pGGsgs.pHslpRs11R.kbQPoxBO/9S9LXw7/R6sXE5A06RnyOS', NULL, NULL, '2023-05-13 14:53:26', '2023-05-16 03:47:07', '0', '3', '-- Prodi Di Ulul Albab --', 'Mapaba', '2021', '-', '-', '-', '1', '1'),
('Ilyas Khoirul Alimnis', '41037006211114', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 3, 'Ilyas Khoirul A', 'ilyas-khoirul-a', NULL, '$2y$10$MepGU6vnY1oYhhbrJph8R.088CtFZRIss687yIR9HVxyqe2C8HiCG', NULL, NULL, '2023-05-13 22:02:59', '2023-05-16 02:47:58', '0', '1', '-- Prodi Di Ulul Albab --', 'PKD', '2021', '2022', '-', '-', '2', '2'),
('Riki Ramdan', '41037006191067', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 2, 'rikiramdan25', 'rikiramdan25', NULL, '$2y$10$gxg7TZHuYwEcQfbtuXs.1u/nTGQohgmjFayP7ND1wUGhGIEc8V9y2', NULL, NULL, '2023-05-14 23:52:24', '2023-05-16 03:48:01', '0', '1', '-- Prodi Di Ulul Albab --', 'PKL', '2019', '2020', '2022', '-', '1', '1'),
('munawar', '456789', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 2, 'munawar', 'munawar', NULL, '$2y$10$oydVgOefRRMw.xiaeUnXwONWLsQePi5U4YNpgzyKKR.zpdRpspC6.', NULL, NULL, '2023-05-16 05:51:15', '2023-05-16 05:53:54', '0', '1', '-- Prodi Di Ulul Albab --', 'PKL', '2019', '2020', '2021', '-', '5', '8'),
('admin', '45689', 'user.png', NULL, 'tangan terkepan dan maju kemuka!!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 2, 'admin', 'admin', NULL, '$2y$10$Y90YR2nqTtEhV/GuTtk.HOcs/x.8RyHmFpoOd2qVm1NWLdU08ZdHy', NULL, NULL, '2023-05-17 08:58:33', '2023-05-17 08:59:28', '0', '4', '-- Prodi Di Ulul Albab --', 'Mapaba', '2018', '-', '-', '-', '0', '0');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
