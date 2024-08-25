-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 01:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compro-karanganyar-jaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `url_youtube` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) DEFAULT 1,
  `event_date` date NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `tag_id` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `photo`, `url_youtube`, `short_description`, `content`, `category_id`, `event_date`, `status_id`, `location`, `tag_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(4, 'Rapat Tahunan 2023', '1.jpg', 'https://www.youtube.com/watch?v=lmgA8bWfWco&ab_channel=iNewsid', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2023-03-26', 2, 'karanganyar', NULL, '2023-03-26 07:48:33', 0, '0000-00-00 00:00:00', 9),
(5, 'Test 12', '993d7428dc0d67b2cc095264d5d5b9c1.jpg', '', 'ini hanya test 12', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-27', 2, 'Cimuning', 1, '2023-03-27 16:36:49', 9, '0000-00-00 00:00:00', 9),
(6, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-03-27 16:39:15', 9, '0000-00-00 00:00:00', 9),
(7, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(8, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(9, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(10, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(11, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(12, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(13, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(14, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(15, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(16, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', 'The standard Lorem Ipsum passage, used since the 1500s', 1, '2023-03-29', 2, 'Lokasi juga berhasil', 1, '2023-04-04 16:01:37', 9, NULL, 9),
(17, 'Kasus KSP Sejahtera Bersama Masuk Persidangan, Ini Kata Kuasa Hukum Nasabah', '493fcbdcfeef20d4afd37a535b0013da.jpg', '', 'Kasus yang terjadi pada Koperasi Simpan Pinjam (KSP) Sejahtera Bersama telah memasuki babak persidangan. Dimana, ada dua terdakwa dalam kasus ini yakni Iwan Setiawan dan Dang Zaeny.', '<p><strong>KONTAN.CO.ID -&nbsp;</strong><strong>JAKARTA.</strong>&nbsp;Kasus yang terjadi pada Koperasi Simpan Pinjam (KSP) Sejahtera Bersama telah memasuki babak persidangan. Dimana, ada dua terdakwa dalam kasus ini yakni Iwan Setiawan dan Dang Zaeny.</p>\n\n<p>Terhadap keduanya, dakwaan yang diberikan adalah terkait dengan perkara tindak pidana perbankan, tindak pidana penipuan hingga tindak pidana penggelapan dalam jabatan.</p>\n\n<p>Kuasa Hukum Korban Koperasi Sejahtera Bersama Herwanto mengungkapkan, pihaknya berharap melalui proses persidangan ini bisa membuat para terdakwa ini mendapat hukuman berat.</p>\n\n<p><strong>Baca Juga:&nbsp;<a href=\"https://keuangan.kontan.co.id/news/kemenkopukm-bentuk-tim-khusus-tangani-koperasi-bermasalah-apa-yang-harus-dilakukan\">KemenKopUKM Bentuk Tim Khusus Tangani Koperasi Bermasalah, Apa yang Harus Dilakukan?</a></strong></p>\n\n<p>&ldquo;Dan harta disita dikembalikan ke anggota koperasi,&rdquo; ujar Herwanto.</p>\n\n<p>Untuk hal itu, ia bilang telah menyiapkan beberapa saksi yang siap dihadirkan dalam proses persidangan. Dengan harapan, para saksi ini bisa memberikan keterangan yang memenuhi unsur tindak pidana.</p>\n\n<p>&ldquo;Sekaligus juga selanjutnya pihak kepolisian mengembangkan perkara ini ke (kasus) pencucian uang agar bisa disita harta pribadi milik para terdakwa,&rdquo; tambahnya.</p>\n\n<p>Tak hanya itu, Hewanto juga optimistis di kasus ini tak akan mengulang kejadian yang sama dalam kasus KSP Indosurya. Dimana, Henry Surya sebagai pemiliknya divonis bebas dalam keputusan persidangan.</p>\n\n<p>&ldquo;Saya yakin tidak akan lolos,&rdquo; tandasnya.</p>\n\n<p>Cek Berita dan Artikel yang lain di&nbsp;<a href=\"https://news.google.com/s/CBIw09GL_T4?sceid=ID:en&amp;sceid=ID:en&amp;r=0&amp;oc=1\" target=\"_blank\">Google News</a></p>\n', 1, '2023-04-05', 2, 'Yogyakarta', 1, '2023-04-04 17:58:08', 9, '0000-00-00 00:00:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

CREATE TABLE `mst_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'RAT', 'Rapat Tahunan');

-- --------------------------------------------------------

--
-- Table structure for table `mst_status`
--

CREATE TABLE `mst_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_description` varchar(255) NOT NULL,
  `status_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_status`
--

INSERT INTO `mst_status` (`status_id`, `status`, `status_description`, `status_class`) VALUES
(1, 'Draft', 'Sudah dibuat tapi belum tampil di halaman depan', 'badge badge-info'),
(2, 'Publish', 'Sudah dibuat dan tampil di halaman depan', 'badge badge-success'),
(3, 'Nonaktive', 'Sudah dibuat, tapi statusnya tidak aktif', 'badge badge-secondary'),
(4, 'Active', 'Sudah dibuat dan status active', 'badge badge-success'),
(5, 'Deleted', 'Dihapus', 'badge badge-danger');

-- --------------------------------------------------------

--
-- Table structure for table `mst_tags`
--

CREATE TABLE `mst_tags` (
  `tag_id` int(11) NOT NULL,
  `tag_code` varchar(10) NOT NULL,
  `tag_name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL,
  `deleted` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_tags`
--

INSERT INTO `mst_tags` (`tag_id`, `tag_code`, `tag_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted`) VALUES
(1, 'ALL', 'All', '2022-03-24 05:04:22', 9, '0000-00-00 00:00:00', 9, 0),
(2, '0', '0', '2022-05-13 03:48:45', 2, '0000-00-00 00:00:00', 2, 0),
(3, '4', '4', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(4, '13', '13', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(5, '6', '6', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(6, '5', '5', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(7, '7', '7', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(8, '3', '3', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(9, '', '', '2022-05-13 03:48:52', 2, '0000-00-00 00:00:00', 2, 0),
(10, '1', '1', '2022-05-13 03:48:54', 2, '0000-00-00 00:00:00', 2, 0),
(11, '2', '2', '2022-05-13 03:48:54', 2, '0000-00-00 00:00:00', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone_number` varchar(25) NOT NULL,
  `id_card` varchar(25) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_photo` varchar(255) NOT NULL DEFAULT 'default.png',
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_with` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_with` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `user_level_id`, `user_name`, `user_full_name`, `user_fullname`, `user_email`, `user_phone_number`, `id_card`, `user_password`, `user_photo`, `address`, `created_at`, `created_with`, `updated_at`, `updated_with`, `status`, `deleted`) VALUES
(2, 1, 'Admin', 'Admin', NULL, 'admin@gmail.co.id', '085715055622', '44512015080001', '$2y$10$HOFPlVmR44OCxptMUqajdubqTrE/VeS/sWqVUKmebvIL5fQ9UyLbq', '91b9fcc920fd42ad27974cf509b107b6.jpg', '', '2022-02-15 18:05:25', 0, '2022-02-15 18:05:25', 298, 'active', 0),
(9, 1, 'kakasi', 'kakasi', NULL, 'kakasi@mail.com', '0911212281', '11021134229', '$2y$10$vTb7/IOstn8in4SKBfKQJOUIKfif8YlvtPHEQ/Ymqu6fhPcsdOxyK', '2f537ccdab7932a54658a316a7e0b658.jpeg', '', '2022-02-17 05:49:45', 8, '2022-02-17 05:49:45', 9, 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_company`
--

CREATE TABLE `my_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url_maps` text NOT NULL,
  `url_twitter` varchar(255) NOT NULL,
  `url_google_plus` varchar(255) NOT NULL,
  `url_facebook` varchar(255) NOT NULL,
  `url_youtube` varchar(255) NOT NULL,
  `url_instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_company`
--

INSERT INTO `my_company` (`company_id`, `company_name`, `address`, `phone_number`, `email`, `url_maps`, `url_twitter`, `url_google_plus`, `url_facebook`, `url_youtube`, `url_instagram`) VALUES
(1, 'Koperasi Karanganyar Jaya', 'asdas', '021- 7486 6920', 'dasd', '', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_code` varchar(20) NOT NULL,
  `page_title` varchar(100) DEFAULT NULL,
  `short_description` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `page_content` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_code`, `page_title`, `short_description`, `photo`, `page_content`, `url`, `status_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'history', 'Sejarah Kami', 'Sejarah Singkat Perusahaan', 'Koperasi-Adalah-scaled.jpg', '<p>ya ya</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(2, 'about', 'Tentang Perusahaan', 'Tentang Perusahaan Kami', 'tren-IT.jpg', '<p>Halaman Tentang Perusahaan</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(3, 'vision_mission', 'Visi dan Misi', 'Visi dan Misi Kami', 'koperasi-pemegang-saham-pt-1200x675.jpg', '<p>ini dalah visi dan misi</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(4, 'organization', 'Struktur Organisasi', 'Struktur Organisasi Perusahaan', 'Koperasi-Adalah-scaled.jpg', '<p>ya ya</p>\r\n', NULL, 2, NULL, NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_level_management`
--

CREATE TABLE `user_level_management` (
  `user_level_id` int(11) NOT NULL,
  `user_level_position` varchar(100) NOT NULL,
  `user_level_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level_management`
--

INSERT INTO `user_level_management` (`user_level_id`, `user_level_position`, `user_level_status`) VALUES
(1, 'admin', 'active'),
(2, 'group', 'active'),
(3, 'agen', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `mst_category`
--
ALTER TABLE `mst_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `mst_status`
--
ALTER TABLE `mst_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `mst_tags`
--
ALTER TABLE `mst_tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_level_id` (`user_level_id`);

--
-- Indexes for table `my_company`
--
ALTER TABLE `my_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `user_level_management`
--
ALTER TABLE `user_level_management`
  ADD PRIMARY KEY (`user_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mst_category`
--
ALTER TABLE `mst_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_status`
--
ALTER TABLE `mst_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_tags`
--
ALTER TABLE `mst_tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=581;

--
-- AUTO_INCREMENT for table `my_company`
--
ALTER TABLE `my_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_level_management`
--
ALTER TABLE `user_level_management`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD CONSTRAINT `mst_user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level_management` (`user_level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
