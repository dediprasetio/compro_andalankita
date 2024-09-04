-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 07:24 PM
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
-- Database: `compro-andalalinkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `title`, `description`, `photo`, `created_by`, `created_at`, `updated_by`, `updated_at`, `status_id`) VALUES
(1, 'Iklan 1', NULL, 'bis1.jpg', 9, NULL, NULL, NULL, 5),
(2, 'Iklan 2', NULL, 'employee-business-broker-and-consultant-discussing.jpg', 9, NULL, NULL, NULL, 5),
(3, 'Iklan 3', NULL, 'Helmet-and-blueprint-on-a-construction-site_-Construction-site-security-services-include-loss-prevention-efforts.jpg', 9, NULL, NULL, NULL, 5),
(4, 'Iklan 4', 'asdsads', '7f41103b2a305b82c9241ab3e600e2bc.jpg', 9, NULL, 9, '2023-04-07 01:37:26', 5),
(5, 'Iklan 5', 'abc', 'mission-and-vision-1024x734.jpg', 9, NULL, 9, '2023-04-12 20:27:50', 5),
(6, 'Advertisement 1', 'For Sample', '1335940892p.jpg', 9, NULL, 9, '2023-04-12 20:51:34', 5),
(7, 'a', 'a', '400x200.png', 9, NULL, NULL, NULL, 2),
(8, 'b', 'b', '400x2001.png', 9, NULL, NULL, NULL, 2);

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
(17, 'Kasus KSP Sejahtera Bersama Masuk Persidangan, Ini Kata Kuasa Hukum Nasabah', '493fcbdcfeef20d4afd37a535b0013da.jpg', '', 'Kasus yang terjadi pada Koperasi Simpan Pinjam (KSP) Sejahtera Bersama telah memasuki babak persidangan. Dimana, ada dua terdakwa dalam kasus ini yakni Iwan Setiawan dan Dang Zaeny.', '<p><strong>JAKARTA - Karanganyar Jaya.</strong>&nbsp;Kasus yang terjadi pada Koperasi Simpan Pinjam (KSP) Sejahtera Bersama telah memasuki babak persidangan. Dimana, ada dua terdakwa dalam kasus ini yakni Iwan Setiawan dan Dang Zaeny.</p>\n\n<p>Terhadap keduanya, dakwaan yang diberikan adalah terkait dengan perkara tindak pidana perbankan, tindak pidana penipuan hingga tindak pidana penggelapan dalam jabatan.</p>\n\n<p>Kuasa Hukum Korban Koperasi Sejahtera Bersama Herwanto mengungkapkan, pihaknya berharap melalui proses persidangan ini bisa membuat para terdakwa ini mendapat hukuman berat.</p>\n\n<p><strong>Baca Juga:&nbsp;<a href=\"https://keuangan.kontan.co.id/news/kemenkopukm-bentuk-tim-khusus-tangani-koperasi-bermasalah-apa-yang-harus-dilakukan\">KemenKopUKM Bentuk Tim Khusus Tangani Koperasi Bermasalah, Apa yang Harus Dilakukan?</a></strong></p>\n\n<p>&ldquo;Dan harta disita dikembalikan ke anggota koperasi,&rdquo; ujar Herwanto.</p>\n\n<p>Untuk hal itu, ia bilang telah menyiapkan beberapa saksi yang siap dihadirkan dalam proses persidangan. Dengan harapan, para saksi ini bisa memberikan keterangan yang memenuhi unsur tindak pidana.</p>\n\n<p>&ldquo;Sekaligus juga selanjutnya pihak kepolisian mengembangkan perkara ini ke (kasus) pencucian uang agar bisa disita harta pribadi milik para terdakwa,&rdquo; tambahnya.</p>\n\n<p>Tak hanya itu, Hewanto juga optimistis di kasus ini tak akan mengulang kejadian yang sama dalam kasus KSP Indosurya. Dimana, Henry Surya sebagai pemiliknya divonis bebas dalam keputusan persidangan.</p>\n\n<p>&ldquo;Saya yakin tidak akan lolos,&rdquo; tandasnya.</p>\n\n<p>Cek Berita dan Artikel yang lain di&nbsp;<a href=\"https://news.google.com/s/CBIw09GL_T4?sceid=ID:en&amp;sceid=ID:en&amp;r=0&amp;oc=1\" target=\"_blank\">Google News</a></p>\n', 1, '2023-04-05', 2, 'Yogyakarta', 1, '2023-04-04 17:58:08', 9, '0000-00-00 00:00:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

CREATE TABLE `mst_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`category_id`, `category_name`, `category_description`, `status_id`) VALUES
(1, 'informasi-perusahaan', 'Informasi Perusahaan', 2),
(2, 'produk-kami', 'Produk Kami', 2),
(3, 'komunitas', 'Komunitas', 2);

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
(2, 1, 'Admin', 'Admin', NULL, 'admin@gmail.co.id', '085715055622', '44512015080001', '$2y$10$xLZf.DgeC1V6XsqxEroQdOAEuW8Bq9s5OJj7yBL1pwX.rdIb7ucT2', '5ce69c17db58e99f1147e4679b13a363.jpg', '', '2022-02-15 18:05:25', 0, '2022-02-15 18:05:25', 9, 'active', 0),
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
(1, 'Andalalinkita.com', 'Amarapura Blok C2 No. 21 Kademangan, Setu Kota\r\nTangerang Selatan Provinsi Banten 15313\r\n', '021- 7486 6920', 'andalalinkita@mail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.0153580675628!2d106.67965331637257!3d-6.355004394564328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4203a8f89c312d%3A0x2a04ff9d9737e6e3!2sAmarapura%20Blok%20C2%20No.%2021%2C%20Kademangan%2C%20Setu%2C%20Tangerang%20Selatan%2C%20Banten%2015313!5e0!3m2!1sen!2sid!4v1692983583023!5m2!1sen!2sid', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) DEFAULT 1,
  `publish_start_date` date NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `slug`, `image`, `author`, `short_description`, `content`, `category_id`, `publish_start_date`, `status_id`, `tag_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Breaking News: Tech Giant Unveils New AI Tool', 'breaking-news-tech-giant-unveils-new-ai-tool', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'John Doe', 'Tech Giant unveils a new AI tool.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(2, 'Market Update: Stocks Surge Amid Economic Optimism', 'market-update-stocks-surge-amid-economic-optimism', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Jane Smith', 'Stocks surge amid economic optimism.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(3, 'Health Experts Warn of New Flu Strain', 'health-experts-warn-of-new-flu-strain', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Alice Johnson', 'Health experts warn of a new flu strain.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(4, 'Sports: Local Team Wins Championship', 'sports-local-team-wins-championship', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Michael Brown', 'Local team wins the championship.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(5, 'Entertainment: Award-Winning Movie Hits Theaters', 'entertainment-award-winning-movie-hits-theaters', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Emily Davis', 'Award-winning movie hits theaters.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(6, 'Science: New Discovery in Space Exploration', 'science-new-discovery-in-space-exploration', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'David Wilson', 'New discovery in space exploration.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(7, 'Travel: Top Destinations for 2024 Revealed', 'travel-top-destinations-for-2024-revealed', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Sophia Martinez', 'Top destinations for 2024 revealed.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(8, 'Business: Major Merger Announced', 'business-major-merger-announced', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Chris Garcia', 'Major merger announced.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(9, 'Weather Alert: Severe Storms Expected', 'weather-alert-severe-storms-expected', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Olivia Rodriguez', 'Severe storms expected in the area.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(10, 'Education: Schools Adopting New Learning Methods', 'education-schools-adopting-new-learning-methods', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'James Hernandez', 'Schools adopting new learning methods.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(11, 'Technology: Breakthrough in Quantum Computing', 'technology-breakthrough-in-quantum-computing', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Elizabeth Lopez', 'Breakthrough in quantum computing.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(12, 'Politics: New Policy Changes Announced', 'politics-new-policy-changes-announced', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Daniel Gonzalez', 'New policy changes announced by the government.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(13, 'Finance: Tips for Smart Investing', 'finance-tips-for-smart-investing', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Matthew Clark', 'Tips for smart investing.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(14, 'Fashion: Latest Trends for Fall', 'fashion-latest-trends-for-fall', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Ava Lewis', 'Latest trends for fall fashion.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(15, 'Environment: Conservation Efforts Increase', 'environment-conservation-efforts-increase', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'William Young', 'Conservation efforts increase globally.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(16, 'Real Estate: Housing Market Trends', 'real-estate-housing-market-trends', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Mia King', 'Current trends in the housing market.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(17, 'Food: New Restaurant Openings in the City', 'food-new-restaurant-openings-in-the-city', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Ethan Wright', 'New restaurant openings in the city.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(18, 'Automotive: Electric Cars Gain Popularity', 'automotive-electric-cars-gain-popularity', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Isabella Scott', 'Electric cars are gaining popularity.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(19, 'Health: Benefits of a Balanced Diet', 'health-benefits-of-a-balanced-diet', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Alexander Hill', 'The benefits of a balanced diet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(20, 'Education: Importance of Early Childhood Education', 'education-importance-of-early-childhood-education', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Sophia Green', 'The importance of early childhood education.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(21, 'Lifestyle: Tips for a Healthier Lifestyle', 'lifestyle-tips-for-a-healthier-lifestyle', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Liam Adams', 'Tips for leading a healthier lifestyle.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(22, 'Entertainment: Best Movies to Watch This Month', 'entertainment-best-movies-to-watch-this-month', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Charlotte Baker', 'Best movies to watch this month.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:16', 1, '2024-09-04 20:13:16', 1),
(23, 'Breaking News: Tech Giant Unveils New AI Tool', 'breaking-news-tech-giant-unveils-new-ai-tool', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'John Doe', 'Tech Giant unveils a new AI tool.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(24, 'Market Update: Stocks Surge Amid Economic Optimism', 'market-update-stocks-surge-amid-economic-optimism', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Jane Smith', 'Stocks surge amid economic optimism.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(25, 'Health Experts Warn of New Flu Strain', 'health-experts-warn-of-new-flu-strain', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Alice Johnson', 'Health experts warn of a new flu strain.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(26, 'Sports: Local Team Wins Championship', 'sports-local-team-wins-championship', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Michael Brown', 'Local team wins the championship.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(27, 'Entertainment: Award-Winning Movie Hits Theaters', 'entertainment-award-winning-movie-hits-theaters', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Emily Davis', 'Award-winning movie hits theaters.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(28, 'Science: New Discovery in Space Exploration', 'science-new-discovery-in-space-exploration', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'David Wilson', 'New discovery in space exploration.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(29, 'Travel: Top Destinations for 2024 Revealed', 'travel-top-destinations-for-2024-revealed', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Sophia Martinez', 'Top destinations for 2024 revealed.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(30, 'Business: Major Merger Announced', 'business-major-merger-announced', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Chris Garcia', 'Major merger announced.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(31, 'Weather Alert: Severe Storms Expected', 'weather-alert-severe-storms-expected', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Olivia Rodriguez', 'Severe storms expected in the area.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(32, 'Education: Schools Adopting New Learning Methods', 'education-schools-adopting-new-learning-methods', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'James Hernandez', 'Schools adopting new learning methods.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(33, 'Technology: Breakthrough in Quantum Computing', 'technology-breakthrough-in-quantum-computing', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Elizabeth Lopez', 'Breakthrough in quantum computing.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(34, 'Politics: New Policy Changes Announced', 'politics-new-policy-changes-announced', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Daniel Gonzalez', 'New policy changes announced by the government.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(35, 'Finance: Tips for Smart Investing', 'finance-tips-for-smart-investing', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Matthew Clark', 'Tips for smart investing.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(36, 'Fashion: Latest Trends for Fall', 'fashion-latest-trends-for-fall', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Ava Lewis', 'Latest trends for fall fashion.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(37, 'Environment: Conservation Efforts Increase', 'environment-conservation-efforts-increase', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'William Young', 'Conservation efforts increase globally.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(38, 'Real Estate: Housing Market Trends', 'real-estate-housing-market-trends', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Mia King', 'Current trends in the housing market.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(39, 'Food: New Restaurant Openings in the City', 'food-new-restaurant-openings-in-the-city', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Ethan Wright', 'New restaurant openings in the city.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(40, 'Automotive: Electric Cars Gain Popularity', 'automotive-electric-cars-gain-popularity', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Isabella Scott', 'Electric cars are gaining popularity.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(41, 'Health: Benefits of a Balanced Diet', 'health-benefits-of-a-balanced-diet', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Alexander Hill', 'The benefits of a balanced diet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(42, 'Education: Importance of Early Childhood Education', 'education-importance-of-early-childhood-education', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Sophia Green', 'The importance of early childhood education.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(43, 'Lifestyle: Tips for a Healthier Lifestyle', 'lifestyle-tips-for-a-healthier-lifestyle', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Liam Adams', 'Tips for leading a healthier lifestyle.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1),
(44, 'Entertainment: Best Movies to Watch This Month', 'entertainment-best-movies-to-watch-this-month', '44ea0d1984ed4eab8efd4d6a04262d43.jpg', 'Charlotte Baker', 'Best movies to watch this month.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 1, '2024-09-03', 2, 1, '2024-09-04 20:13:49', 1, '2024-09-04 20:13:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_group` varchar(30) DEFAULT NULL,
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

INSERT INTO `pages` (`page_id`, `page_group`, `page_code`, `page_title`, `short_description`, `photo`, `page_content`, `url`, `status_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'common', 'history', 'Sejarah Kami', 'Sejarah Singkat Perusahaan', 'Update_Andalalinkita_com_pdf1_pdf-image-0852.jpg', '<p>Andalalinkita.com dibentuk dari kebutuhan para pelaku bisnis yang pembangunan dan operasional usahanya bersinggungan langsung dan berdampak pada sistem transportasi. Analisis Dampak Lalu Lintas yang sering kita kenal dengan istilah ANDALALIN dengan dasar hukum Peraturan Menteri Perhubungan Republik Indonesia Nomor PM. 17 Tahun 2021 tentang Penyelenggaraan Analisis Dampak Lalu Lintas yang menggerakkan founder kami untuk menyediakan platform digital berbasis website interaktif dalam membantu pelaku bisnis dalam memperoleh perizinan dalam bidang transportasi.</p>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(2, 'common', 'about', 'Tentang Perusahaan', 'Tentang Perusahaan Kami', 'bis.jpg', '<p><b>Andalalinkita adalah</b></p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(3, 'common', 'vision_mission', 'Visi dan Misi', 'Visi dan Misi Kami', 'mission-and-vision-1024x734.jpg', '<h2><strong>Visi</strong></h2>\r\n\r\n<p>Menjadi konsultan transportasi terdepan, terpercaya, berkomitmen dan berintegritas mengutamakan kualitas dan profesionalitas baik secara nasional maupun internasional, melalui platform digital berbasis websites interaktif yang berkomitmen tinggi untuk mendorong dan membantu pelaku bisnis dalam memperoleh perizinan di bidang transportasi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Misi</strong></h2>\r\n\r\n<p>1. Menyediakan fasilitas perizinan bidang transportasi melalui melalui platform digital berbasis websites interaktif dengan mengikuti perkembangan tegnologi dan aturan pemerintah dan perubahannya sesuai dengan kebutuhan pelaku bisnis tujuan.</p>\r\n\r\n<p>2. Memberikan produk rekomendasi bidang transportasi terbaik dengan berpegang teguh pada komitmen tinggi, kualitas produk yang dihasilkan tepat waktu</p>\r\n\r\n<p>3. Menjadi platform jasa konsultan transportasi Indonesia pertama berbasis websites interaktif tegnologi digital terkemuka yang menghasilkan produk jasa perizinan bidang transportasi hamdal dengan mengikuti zaman perkembangan teknolog</p>\r\n\r\n<p>4.&nbsp;Menciptakan pelayanan jasa perizinan dengan membantu pelaku usaha Mempercepat proses perizinan bidang transportasi dengan hasil terbaik, efektif dan terpercaya</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(4, 'common', 'organization', 'Struktur Organisasi', 'Struktur Organisasi Perusahaan', '—Pngtree—internet_of_things_concept_43633091.png', '<h3><strong>Pengurus</strong></h3>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ketua</td>\r\n			<td>: <strong>Haryanto</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris</td>\r\n			<td>: 1. H. Suparno, ST, MM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 2. Dwi Yatno</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara</td>\r\n			<td>: 1. Ir, Sigit Budi Sarjono, MM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 2. Maryanto</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pembantu Umum</td>\r\n			<td>: 1. Suharjo</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 2. Suwardi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 3. Dwi Mulyono</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 4. Supomo</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 5. Milton Daeli</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Pengawas</strong></h3>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ketua</td>\r\n			<td>: <strong>Lampito, SE</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anggota</td>\r\n			<td>: 1. Suparmo HS, S.Sos</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>&nbsp; 2. Joko Sukarno</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(5, 'common', 'business_plan', 'Bisnis Plan', 'Bisnis Plan', 'mission-and-vision-1024x734.jpg', '<h2><strong>Visi</strong></h2>\r\n\r\n<p>Membangun dan mengembangkan potensi dan kemampuan anggota khususnya dan masyarakat pada umumnya untuk meningkatkan kesejahteraan ekonomi dan sosial.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Misi</strong></h2>\r\n\r\n<p>1. Memberikan pelayanan terbaik kepada pengguna jasa angkutan perkotaan dan pedesaan dikabupaten karanganyar dan sekitarnya dengan aman, nyaman dan selamat sampai tujuan.</p>\r\n\r\n<p>2. Memberikan dukungan kepada pemerintah kabupaten Karanganyar dalam menciptakan ketertiban, keamanan dan kenyamanan dalam hal transportasi.</p>\r\n\r\n<p>3. Meningkatkan taraf hidup dan mewujudkan kesejahteraan anggota khususnya dan masyarakat pada umumnya.</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(6, 'common', 'vision', 'Visi', 'Visi Kami', 'Update_Andalalinkita_com_pdf1_pdf-image-152.jpg', '<blockquote>\r\n<p>Menjadi konsultan transportasi terdepan, terpercaya, berkomitmen dan berintegritas mengutamakan kualitas dan profesionalitas baik secara nasional maupun internasional, melalui platform digital berbasis websites interaktif yang berkomitmen tinggi untuk mendorong dan membantu pelaku bisnis dalam memperoleh perizinan di bidang transportasi.</p>\r\n</blockquote>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(7, 'common', 'mission', 'Visi', 'Misi Kami', 'Update_Andalalinkita_com_pdf1_pdf-image-100.jpg', '<div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">1</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menyediakan fasilitas perizinan\r\n                        bidang transportasi melalui\r\n                        melalui platform digital berbasis\r\n                        websites interaktif dengan\r\n                        mengikuti perkembangan\r\n                        tegnologi dan aturan pemerintah\r\n                        dan perubahannya sesuai\r\n                        dengan kebutuhan pelaku bisnis</p>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Memberikan produk\r\n                        rekomendasi bidang\r\n                        transportasi terbaik dengan\r\n                        berpegang teguh pada\r\n                        komitmen tinggi, kualitas\r\n                        produk yang dihasilkan\r\n                        tepat waktu</p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menjadi platform jasa konsultan\r\n                        transportasi Indonesia pertama\r\n                        berbasis websites interaktif\r\n                        tegnologi digital terkemuka yang\r\n                        menghasilkan produk jasa\r\n                        perizinan bidang transportasi\r\n                        hamdal dengan mengikuti zaman\r\n                        perkembangan teknologi\r\n                        </p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menciptakan pelayanan jasa\r\n                        perizinan dengan membantu\r\n                        pelaku usaha\r\n                        Mempercepat proses\r\n                        perizinan bidang transportasi\r\n                        dengan hasil terbaik, efektif dan\r\n                        terpercaya</p>\r\n                    </div>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(8, 'common', 'keyfactors', 'Key Factors', 'Key Factors', 'Update_Andalalinkita_com_pdf1_pdf-image-100.jpg', '<div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">1</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menyediakan fasilitas perizinan\r\n                        bidang transportasi melalui\r\n                        melalui platform digital berbasis\r\n                        websites interaktif dengan\r\n                        mengikuti perkembangan\r\n                        tegnologi dan aturan pemerintah\r\n                        dan perubahannya sesuai\r\n                        dengan kebutuhan pelaku bisnis</p>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Memberikan produk\r\n                        rekomendasi bidang\r\n                        transportasi terbaik dengan\r\n                        berpegang teguh pada\r\n                        komitmen tinggi, kualitas\r\n                        produk yang dihasilkan\r\n                        tepat waktu</p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">3</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Website adalah faktor utama dalam kegiatan Andalalinkita.com. Dengan kualitas website\r\n                        yang mumpuni Andalalinkita.com dapat berjalan dengan baik dalam melayani kebutuhan\r\n                        - kebutuhan pelaku bisnis yang membutuhkan Andalalinkita.com. Dengan pelanan jasa\r\n                        yang disediakan. Jangan heran jika banyak Website tereliminasi akibat website yang\r\n                        kurang handal sehingga mempengaruhi program bisnis mereka kedepannya. karena hal itu\r\n                        adalah modal dasar, tanpa itu bisnis mereka berhenti. Sehingga pelaksanaan bisnis secara\r\n                        High performance website quality, tepat dan berkesinambungan menjadi faktor kunci\r\n                        keberhasilan Andalalinkita.com.\r\n                        </p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">4</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">“Great vision without great people is irrelevant” Tim yang memiliki tingkat kompetensi yang\r\n                        tepat, baik yang ditempatkan di kantor pusat maupun di project site, dapat secara efisien\r\n                        mendorong pertumbuhan perusahaan. Keberhasilan perusahaan dalam menggapai visi\r\n                        misinya hanya mungkin terjadi jika Anda memiliki tim yang berdedikasi. Memilih tim yang\r\n                        tepat merupakan langkah penting yang harus diambil Andalalinkita.com jika ingin meraih\r\n                        sukses.</p>\r\n                    </div>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(9, 'common', 'problem', 'Problem', 'Problem', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', '<p class=\"mb-4\">Masalah utama perlu dibahas lebih lanjut dan terperinci karena sesi ini merupakan salah satu fondasi\r\n                utama untuk pengembangan awal produk atau layanan Anda dan pengambilan keputusan di masa\r\n                mendatang. Tanpa masalah yang didefinisikan dengan baik, akan berdampak besar pada pekerjaan\r\n                yang tidak dikelola dengan baik.\r\n                </p>\r\n                \r\n                <div class=\"row g-5\">\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"d-flex gap-2\">\r\n                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 100px; height: 60px;\">\r\n                                <i class=\"fa fa-clock text-white\"></i>\r\n                            </div>\r\n                            <div class=\"ml-2\">\r\n                                <h4>Waktu Penyesuaian Terhadap Perkembangan</h4>\r\n                                <p class=\"mb-0\">akibat dari kekurangan\r\n                                pengetahuan membuat\r\n                                pelaku bisnis merasa banyak\r\n                                Waktu yang terbuat dalam\r\n                                penyesuaian terhadap\r\n                                perkembangan dan\r\n                                perubahan</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"d-flex gap-2\">\r\n                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 150px; height: 60px;\">\r\n                                <i class=\"fa fa-cube text-white\"></i>\r\n                            </div>\r\n                            <div class=\"ml-2\">\r\n                                <h4>Tuntutan Bisnis</h4>\r\n                                <p class=\"mb-0\">Tuntutan Bisnis Harian adalah\r\n                                prioritas pada pelaku bisnis\r\n                                yang tidak dapat diganggu\r\n                                oleh apapun, sehingga\r\n                                permasalahan terjadi bila\r\n                                ada program baru muncul\r\n                                yang membutuhkan waktu\r\n                                dan proses yang\r\n                                mengganggu tuntutan bisnis\r\n                                pelaku usaha\r\n</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"d-flex gap-2\">\r\n                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 100px; height: 60px;\">\r\n                                <i class=\"fa fa-archive text-white\"></i>\r\n                            </div>\r\n                            <div class=\"ml-2\">\r\n                                <h4>Kesalahan pemilihan akses platform digita</h4>\r\n                                <p class=\"mb-0\">berkurangnya keinginan pelaku bisnis\r\n                                secara umum akibat proses digital\r\n                                dianggap rumit akibat kesalahan\r\n                                pada pemilihan akses platform\r\n                                digital secara tepat.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(10, 'common', 'solution', 'Solution', 'Solution', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', '<p class=\"mb-4\">Andalalinkita.com hadir dalam pemecahan masalah\r\n                Anda yang sering terjadi dan dihadapi setiap waktu yang\r\n                merupakan salah satu faktor penggangu bagi Anda\r\n                sebagai pelaku bisnis yang diakibatkan banyaknya\r\n                permasalahan - permasalahan yang ditimbulkan oleh\r\n                proses yang membutuhkan platform digital dan tenaga\r\n                ahli profesional dalam menanggulangi dan mencegah\r\n                permasalahan Bisnis Anda.</p>\r\n                \r\n                <div class=\"row g-5\">\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"d-flex gap-2\">\r\n                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 150px; height: 60px;\">\r\n                                <i class=\"fa fa-print text-white\"></i>\r\n                            </div>\r\n                            <div class=\"ml-2\">\r\n                                <h4>Komitment Tinggi disetiap Proses Pelayanan</h4>\r\n                                <p class=\"mb-0\">Kami hadir sebagai solusi dari permasalahan bisnis\r\n                                anda dengan mengikuti, menunjuk dan memberikan\r\n                                kami kepercayaan melalui websites interaktif dan\r\n                                creatif yang berkomitmen tinggi yang dapat dipantau\r\n                                sehingga tujuan anda segera tercapai</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"d-flex gap-2\">\r\n                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 200px; height: 60px;\">\r\n                                <i class=\"fa fa-user-tie text-white\"></i>\r\n                            </div>\r\n                            <div class=\"ml-2\">\r\n                                <h4>Tenaga Profesional</h4>\r\n                                <p class=\"mb-0\">Anda di layani oleh tenaga - tenaga yang profesional\r\n                                dan ahli dibidangnya. Anda sebagi pelaku usaha\r\n                                dapat menilai setelah proses kebutuhan anda kami\r\n                                layani dengan kualitas, kecepatan, ketepatan waktu\r\n                                setiap tahapannya dan akses komunikasi dan\r\n                                konsultasi agar anda sebagai pelaku bisnis\r\n                                mendapatkan yang anda inginkan</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"d-flex gap-2\">\r\n                            <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 100px; height: 60px;\">\r\n                                <i class=\"fa fa-clock text-white\"></i>\r\n                            </div>\r\n                            <div class=\"ml-2\">\r\n                                <h4>Kecepatan, Ketepatan dan Kepercayaan</h4>\r\n                                <p class=\"mb-0\">Kecepatan, Ketepatan dan Kepercayaan akan\r\n                                bersama anda dengan mulai dari permasalahan\r\n                                anda saat ini dengan berproses bersama kami\r\n                                dalam pemecahan permasalahannya.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(11, 'common', 'problemsolution', 'Problem Solution', 'Problem solution', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', '', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(12, 'services', 'andalalin', 'Andalalin', 'Andalalin', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(13, 'services', 'izinprinsipangkutan', 'Izin Prinsip Angkutan', 'Izin Prinsip Angkutan', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(14, 'services', 'kartupengawasankp', 'Kartu Pengawasan KP', 'Kartu Pengawasan KP', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(15, 'services', 'smk', 'Sistem Manajemen Keselamatan (SMK)', 'Sistem Manajemen Keselamatan (SMK)', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(16, 'services', 'mrll', 'Manajemen Rekayasa Lalulintas (MRLL)', 'Manajemen Rekayasa Lalulintas (MRLL)', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(17, 'services', 'lelangtenderpemerint', 'Lelang / Tender Pemerintah', 'Lelang / Tender Pemerintah', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(18, 'services', 'lainnya', 'Lainnya', 'Lainnya', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(19, 'common', 'porto', 'Porto Folio', 'Coming soon', 'coming-soon.jpg', '', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(20, 'common', 'ourteam', 'Our Team', 'Coming soon', 'coming-soon.jpg', '', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(21, 'common', 'news', 'News', 'News', '', '', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mst_category`
--
ALTER TABLE `mst_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
