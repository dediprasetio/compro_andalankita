-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 12:53 AM
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
(4, 'Rapat Tahunan 2023', '1.jpg', 'https://www.youtube.com/watch?v=lmgA8bWfWco&ab_channel=iNewsid', 'Melaksanakan rapat pada tahun 2023', '<h1><strong>Pendirian Awal</strong></h1>\n\n<p><b>## Pada bulan Juli 1979</b>&nbsp;sekumpulan pengusahaangkutan sekabupaten Karanganyar mengadakan rapat dipimpin oleh Bapak Mahmud.</p>\n\n<p>Hasil rapat:<br />\n1. Pemda Karanganyar akan memberikan pinjaman&nbsp;<mark>cepat</mark>&nbsp;untuk pengadaan kendaraan mini bus (Kijang) untuk pelayanan angkutan di kabupaten Karanganyar<br />\n2. Jumlah anggota ada 47, anggota akan diresmikan mendirikan koperasi pengusaha angkutan</p>\n\n<h3>Selanjutnya</h3>\n\n<p><b>## Pada tanggal 14 agustus 1979</b>&nbsp;mengadakan rapat yang ke dua menyetujui untuk mendaftarkan perkumpulan pengusaha angkutan ini menjadi koperasi. Angkutan Karanganyar Jaya (AKAR-JAYA).<br />\n<br />\nAK Pelayanan trayek<br />\n1. Karanganyar - Majogedeg - Batujawes<br />\n2. Karanganyar - Matesih PP<br />\n3. Karanganyar - Jumapolo PP<br />\n<br />\n<strong>Kemudian Terjadi Macet</strong></p>\n\n<h3>Lanjutan</h3>\n\n<p><b>## Ganti pengurus dan penambahan anggota</b>&nbsp;dengan dilanjutkan koperasi ini diketuai Bapak Suparno HS dengan armada mini bus kapasitas 12 orang melayani trayek Karanganyar - Jaten - Paker - Pasar Klewer</p>\n\n<p><b>## 1990 ketua Bapak Sularso Klek</b>&nbsp;- Harjosari, Bejen KRA</p>\n\n<p><b>1994&nbsp;<mark>Peremajaan</mark>&nbsp;kendaraan</b>&nbsp;yang melayani rute<br />\na. JalurBejen - Karanganyar - Jalan Pakur PP<br />\nb. Karanganyar - TS Madu - KB Kramat PP<br />\nc. Karanganyar - Mojogedang - KR Panda PP<br />\nd. Karanganyar - Ngrawoh - Matesih PP<br />\ne. Karanganyar - Jumantotno - Matesih PP</p>\n\n<p><b>##Tahun 2007 Ketua Tarsono</b>&nbsp;- Jetu , KL Tegal Gede, Karanganyar</p>\n\n<p><b>##2010 Sampai Sekarang Ketua Haryanto</b>&nbsp;- Keuri Jaten, Jaten, Karanganyar</p>\n', 1, '2023-03-26', 2, 'karanganyar', NULL, '2023-03-26 07:48:33', 0, '0000-00-00 00:00:00', 9),
(5, 'Test 12', '993d7428dc0d67b2cc095264d5d5b9c1.jpg', '', 'ini hanya test 12', '<ul>\n	<li><em><strong>ini dia testnya</strong></em></li>\n	<li><em><strong>Ini test yang kedua</strong></em></li>\n	<li><em><strong>ini juga test</strong></em></li>\n</ul>\n', 1, '2023-03-27', 5, 'Cimuning', 1, '2023-03-27 16:36:49', 9, '0000-00-00 00:00:00', 9),
(6, 'Test Title Berhasil', '57eb628ccbc1cbb3a27b583b0edb31f3.jpg', '', 'Testnya berhasil', '<p>Ini sudah berhasil, Masa sih</p>\n', 1, '2023-03-29', 4, 'Lokasi juga berhasil', 1, '2023-03-27 16:39:15', 9, '0000-00-00 00:00:00', 9);

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
  `url_twitter` varchar(255) NOT NULL,
  `url_google_plus` varchar(255) NOT NULL,
  `url_facebook` varchar(255) NOT NULL,
  `url_youtube` varchar(255) NOT NULL,
  `url_instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_company`
--

INSERT INTO `my_company` (`company_id`, `company_name`, `address`, `phone_number`, `email`, `url_twitter`, `url_google_plus`, `url_facebook`, `url_youtube`, `url_instagram`) VALUES
(1, 'Koperasi Karanganyar Jaya', 'sadsa', '021- 7486 6920', 'dasd', 'a', 'a', 'a', 'a', 'a');

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
