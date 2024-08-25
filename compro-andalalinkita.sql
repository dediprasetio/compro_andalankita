-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 05:14 PM
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
(1, 'Andalalinkita.com', 'asdas', '021- 7486 6920', 'dasd', '', 'a', 'a', 'a', 'a', 'a');

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
(1, 'history', 'Sejarah Kami', 'Sejarah Singkat Perusahaan', 'about-image2.jpg', '<h3><strong>Pendirian Awal</strong></h3>\r\n\r\n<p><b>## Pada bulan Juli 1979</b>&nbsp;sekumpulan pengusahaangkutan sekabupaten Karanganyar mengadakan rapat dipimpin oleh Bapak Mahmud.</p>\r\n\r\n<p>Hasil rapat:<br />\r\n1. Pemda Karanganyar akan memberikan pinjaman&nbsp;<mark>cepat</mark>&nbsp;untuk pengadaan kendaraan mini bus (Kijang) untuk pelayanan angkutan di kabupaten Karanganyar<br />\r\n2. Jumlah anggota ada 47, anggota akan diresmikan mendirikan koperasi pengusaha angkutan</p>\r\n\r\n<h3>Selanjutnya</h3>\r\n\r\n<p><b>## Pada tanggal 14 agustus 1979</b>&nbsp;mengadakan rapat yang ke dua menyetujui untuk mendaftarkan perkumpulan pengusaha angkutan ini menjadi koperasi. Angkutan Karanganyar Jaya (AKAR-JAYA).<br />\r\n<br />\r\nAK Pelayanan trayek<br />\r\n1. Karanganyar - Majogedeg - Batujawes<br />\r\n2. Karanganyar - Matesih PP<br />\r\n3. Karanganyar - Jumapolo PP<br />\r\n<br />\r\n<strong>Kemudian Terjadi Macet</strong></p>\r\n\r\n<h3>Lanjutan</h3>\r\n\r\n<p><b>## Ganti pengurus dan penambahan anggota</b>&nbsp;dengan dilanjutkan koperasi ini diketuai Bapak Suparno HS dengan armada mini bus kapasitas 12 orang melayani trayek Karanganyar - Jaten - Paker - Pasar Klewer</p>\r\n\r\n<p><b>## 1990 ketua Bapak Sularso Klek</b>&nbsp;- Harjosari, Bejen KRA</p>\r\n\r\n<p><b>1994&nbsp;<mark>Peremajaan</mark>&nbsp;kendaraan</b>&nbsp;yang melayani rute<br />\r\na. JalurBejen - Karanganyar - Jalan Pakur PP<br />\r\nb. Karanganyar - TS Madu - KB Kramat PP<br />\r\nc. Karanganyar - Mojogedang - KR Panda PP<br />\r\nd. Karanganyar - Ngrawoh - Matesih PP<br />\r\ne. Karanganyar - Jumantotno - Matesih PP</p>\r\n\r\n<p><b>##Tahun 2007 Ketua Tarsono</b>&nbsp;- Jetu , KL Tegal Gede, Karanganyar</p>\r\n\r\n<p><b>##2010 Sampai Sekarang Ketua Haryanto</b>&nbsp;- Keuri Jaten, Jaten, Karanganya</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(2, 'about', 'Tentang Perusahaan', 'Tentang Perusahaan Kami', 'bis.jpg', '<p><b>Andalalinkita adalah</b></p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(3, 'vision_mission', 'Visi dan Misi', 'Visi dan Misi Kami', 'mission-and-vision-1024x734.jpg', '<h2><strong>Visi</strong></h2>\r\n\r\n<p>Menjadi konsultan transportasi terdepan, terpercaya, berkomitmen dan berintegritas mengutamakan kualitas dan profesionalitas baik secara nasional maupun internasional, melalui platform digital berbasis websites interaktif yang berkomitmen tinggi untuk mendorong dan membantu pelaku bisnis dalam memperoleh perizinan di bidang transportasi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Misi</strong></h2>\r\n\r\n<p>1. Menyediakan fasilitas perizinan bidang transportasi melalui melalui platform digital berbasis websites interaktif dengan mengikuti perkembangan tegnologi dan aturan pemerintah dan perubahannya sesuai dengan kebutuhan pelaku bisnis tujuan.</p>\r\n\r\n<p>2. Memberikan produk rekomendasi bidang transportasi terbaik dengan berpegang teguh pada komitmen tinggi, kualitas produk yang dihasilkan tepat waktu</p>\r\n\r\n<p>3. Menjadi platform jasa konsultan transportasi Indonesia pertama berbasis websites interaktif tegnologi digital terkemuka yang menghasilkan produk jasa perizinan bidang transportasi hamdal dengan mengikuti zaman perkembangan teknolog</p>\r\n\r\n<p>4.&nbsp;Menciptakan pelayanan jasa perizinan dengan membantu pelaku usaha Mempercepat proses perizinan bidang transportasi dengan hasil terbaik, efektif dan terpercaya</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(4, 'organization', 'Struktur Organisasi', 'Struktur Organisasi Perusahaan', '—Pngtree—internet_of_things_concept_43633091.png', '<h3><strong>Pengurus</strong></h3>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ketua</td>\r\n			<td>: <strong>Haryanto</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris</td>\r\n			<td>: 1. H. Suparno, ST, MM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 2. Dwi Yatno</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara</td>\r\n			<td>: 1. Ir, Sigit Budi Sarjono, MM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 2. Maryanto</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pembantu Umum</td>\r\n			<td>: 1. Suharjo</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 2. Suwardi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 3. Dwi Mulyono</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 4. Supomo</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; 5. Milton Daeli</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Pengawas</strong></h3>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ketua</td>\r\n			<td>: <strong>Lampito, SE</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anggota</td>\r\n			<td>: 1. Suparmo HS, S.Sos</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>&nbsp; 2. Joko Sukarno</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(5, 'business_plan', 'Bisnis Plan', 'Bisnis Plan', 'mission-and-vision-1024x734.jpg', '<h2><strong>Visi</strong></h2>\r\n\r\n<p>Membangun dan mengembangkan potensi dan kemampuan anggota khususnya dan masyarakat pada umumnya untuk meningkatkan kesejahteraan ekonomi dan sosial.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Misi</strong></h2>\r\n\r\n<p>1. Memberikan pelayanan terbaik kepada pengguna jasa angkutan perkotaan dan pedesaan dikabupaten karanganyar dan sekitarnya dengan aman, nyaman dan selamat sampai tujuan.</p>\r\n\r\n<p>2. Memberikan dukungan kepada pemerintah kabupaten Karanganyar dalam menciptakan ketertiban, keamanan dan kenyamanan dalam hal transportasi.</p>\r\n\r\n<p>3. Meningkatkan taraf hidup dan mewujudkan kesejahteraan anggota khususnya dan masyarakat pada umumnya.</p>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 9),
(6, 'vision', 'Visi', 'Visi Kami', 'Update_Andalalinkita_com_pdf1_pdf-image-152.jpg', '<blockquote>\r\n<p>Menjadi konsultan transportasi terdepan, terpercaya, berkomitmen dan berintegritas mengutamakan kualitas dan profesionalitas baik secara nasional maupun internasional, melalui platform digital berbasis websites interaktif yang berkomitmen tinggi untuk mendorong dan membantu pelaku bisnis dalam memperoleh perizinan di bidang transportasi.</p>\r\n</blockquote>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(7, 'mission', 'Visi', 'Misi Kami', 'Update_Andalalinkita_com_pdf1_pdf-image-100.jpg', '<div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">1</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menyediakan fasilitas perizinan\r\n                        bidang transportasi melalui\r\n                        melalui platform digital berbasis\r\n                        websites interaktif dengan\r\n                        mengikuti perkembangan\r\n                        tegnologi dan aturan pemerintah\r\n                        dan perubahannya sesuai\r\n                        dengan kebutuhan pelaku bisnis</p>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Memberikan produk\r\n                        rekomendasi bidang\r\n                        transportasi terbaik dengan\r\n                        berpegang teguh pada\r\n                        komitmen tinggi, kualitas\r\n                        produk yang dihasilkan\r\n                        tepat waktu</p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menjadi platform jasa konsultan\r\n                        transportasi Indonesia pertama\r\n                        berbasis websites interaktif\r\n                        tegnologi digital terkemuka yang\r\n                        menghasilkan produk jasa\r\n                        perizinan bidang transportasi\r\n                        hamdal dengan mengikuti zaman\r\n                        perkembangan teknologi\r\n                        </p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn\" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menciptakan pelayanan jasa\r\n                        perizinan dengan membantu\r\n                        pelaku usaha\r\n                        Mempercepat proses\r\n                        perizinan bidang transportasi\r\n                        dengan hasil terbaik, efektif dan\r\n                        terpercaya</p>\r\n                    </div>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(8, 'keyfactors', 'Key Factors', 'Key Factors', 'Update_Andalalinkita_com_pdf1_pdf-image-100.jpg', '<div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">1</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Menyediakan fasilitas perizinan\r\n                        bidang transportasi melalui\r\n                        melalui platform digital berbasis\r\n                        websites interaktif dengan\r\n                        mengikuti perkembangan\r\n                        tegnologi dan aturan pemerintah\r\n                        dan perubahannya sesuai\r\n                        dengan kebutuhan pelaku bisnis</p>\r\n                    </div>\r\n                    <div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">2</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Memberikan produk\r\n                        rekomendasi bidang\r\n                        transportasi terbaik dengan\r\n                        berpegang teguh pada\r\n                        komitmen tinggi, kualitas\r\n                        produk yang dihasilkan\r\n                        tepat waktu</p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">3</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">Website adalah faktor utama dalam kegiatan Andalalinkita.com. Dengan kualitas website\r\n                        yang mumpuni Andalalinkita.com dapat berjalan dengan baik dalam melayani kebutuhan\r\n                        - kebutuhan pelaku bisnis yang membutuhkan Andalalinkita.com. Dengan pelanan jasa\r\n                        yang disediakan. Jangan heran jika banyak Website tereliminasi akibat website yang\r\n                        kurang handal sehingga mempengaruhi program bisnis mereka kedepannya. karena hal itu\r\n                        adalah modal dasar, tanpa itu bisnis mereka berhenti. Sehingga pelaksanaan bisnis secara\r\n                        High performance website quality, tepat dan berkesinambungan menjadi faktor kunci\r\n                        keberhasilan Andalalinkita.com.\r\n                        </p>\r\n                    </div>\r\n                    \r\n                    <div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n                        <div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\">\r\n                            <span class=\"text-white\">4</span>\r\n                        </div>\r\n                        <p class=\"mb-0\">“Great vision without great people is irrelevant” Tim yang memiliki tingkat kompetensi yang\r\n                        tepat, baik yang ditempatkan di kantor pusat maupun di project site, dapat secara efisien\r\n                        mendorong pertumbuhan perusahaan. Keberhasilan perusahaan dalam menggapai visi\r\n                        misinya hanya mungkin terjadi jika Anda memiliki tim yang berdedikasi. Memilih tim yang\r\n                        tepat merupakan langkah penting yang harus diambil Andalalinkita.com jika ingin meraih\r\n                        sukses.</p>\r\n                    </div>', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2),
(9, 'problemsolution', 'Problem Solution', 'Problem Solution', 'Update_Andalalinkita_com_pdf1_pdf-image-156.jpg', '<div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n<div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\"><span class=\"text-white\">1</span></div>\r\n\r\n<p class=\"mb-0\">Menyediakan fasilitas perizinan bidang transportasi melalui melalui platform digital berbasis websites interaktif dengan mengikuti perkembangan tegnologi dan aturan pemerintah dan perubahannya sesuai dengan kebutuhan pelaku bisnis</p>\r\n</div>\r\n\r\n<div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n<div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\"><span class=\"text-white\">2</span></div>\r\n\r\n<p class=\"mb-0\">Memberikan produk rekomendasi bidang transportasi terbaik dengan berpegang teguh pada komitmen tinggi, kualitas produk yang dihasilkan tepat waktu</p>\r\n</div>\r\n\r\n<div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n<div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\"><span class=\"text-white\">3</span></div>\r\n\r\n<p class=\"mb-0\">Website adalah faktor utama dalam kegiatan Andalalinkita.com. Dengan kualitas website yang mumpuni Andalalinkita.com dapat berjalan dengan baik dalam melayani kebutuhan - kebutuhan pelaku bisnis yang membutuhkan Andalalinkita.com. Dengan pelanan jasa yang disediakan. Jangan heran jika banyak Website tereliminasi akibat website yang kurang handal sehingga mempengaruhi program bisnis mereka kedepannya. karena hal itu adalah modal dasar, tanpa itu bisnis mereka berhenti. Sehingga pelaksanaan bisnis secara High performance website quality, tepat dan berkesinambungan menjadi faktor kunci keberhasilan Andalalinkita.com.</p>\r\n</div>\r\n\r\n<div class=\"col-12 wow zoomIn \" data-wow-delay=\"0.2s\">\r\n<div class=\"bg-primary rounded d-flex align-items-center justify-content-center mb-3\" style=\"width: 60px; height: 60px;\"><span class=\"text-white\">4</span></div>\r\n\r\n<p class=\"mb-0\">&ldquo;Great vision without great people is irrelevant&rdquo; Tim yang memiliki tingkat kompetensi yang tepat, baik yang ditempatkan di kantor pusat maupun di project site, dapat secara efisien mendorong pertumbuhan perusahaan. Keberhasilan perusahaan dalam menggapai visi misinya hanya mungkin terjadi jika Anda memiliki tim yang berdedikasi. Memilih tim yang tepat merupakan langkah penting yang harus diambil Andalalinkita.com jika ingin meraih sukses.</p>\r\n</div>\r\n', NULL, 2, NULL, NULL, '0000-00-00 00:00:00', 2);

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
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
