-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2019 at 08:31 PM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 5.6.40-14+ubuntu19.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `status` smallint(6) NOT NULL,
  `type` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `id_member`, `id_category`, `title`, `slug`, `content`, `image`, `tags`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Berita terbaru', 'berita-terbaru', 'beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa beritaaaaaa ', 'http://localhost/smk-14-bandung/assets/img/pelepasan.jpg', 'berita,terbaru', 1, 1, '2019-12-16 16:34:53', '2019-12-16 16:34:53'),
(2, 1, 1, 'Struktur Organisasi', 'struktur-organisasi', '<p>sadasd sadasdsadas dsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv sadasd sadasdsadasdsadasdsa dasdsadasdsadasdvv</p>\n', 'http://localhost/smk-14-bandung/assets/img/pelepasan.jpg', 'sadasd', 1, 3, '2019-12-16 16:39:12', '2019-12-16 16:39:12'),
(3, 1, 1, 'Divisi', 'divisi', '<p>asdasdasdas</p>\n', 'http://localhost/smk-14-bandung/upload/1576510721.png', 'sadasd', 1, 3, '2019-12-16 21:09:21', '2019-12-16 21:09:21'),
(4, 1, 1, 'Akreditasi', 'akreditasi', '<p>sadasdasdasdas</p>\n', 'http://localhost/smk-14-bandung/upload/1576510712.png', 'wqe qwe wq', 1, 3, '2019-12-16 21:13:47', '2019-12-16 21:13:47'),
(5, 1, 1, 'Sejarah', 'sejarah', '<p>sadasdas</p>\n', 'http://localhost/smk-14-bandung/upload/1576510708.png', 'asdsadas', 1, 3, '2019-12-16 21:15:04', '2019-12-16 21:15:04'),
(6, 1, 1, 'Visi & Misi', 'visi-misi', '<p>sadasdasdas</p>\n', 'http://localhost/smk-14-bandung/upload/1576510693.png', 'sadasd', 1, 3, '2019-12-16 21:17:42', '2019-12-16 21:17:42'),
(7, 1, 3, 'Budaya & Logo', 'budaya-logo', '<p>sadasdasdsa</p>\n', 'http://localhost/smk-14-bandung/upload/1576510704.png', 'dsasda', 1, 3, '2019-12-16 21:19:06', '2019-12-16 21:19:06'),
(8, 1, 1, 'Landasan Hukum', 'landasan-hukum', '<p>cekasdasd</p>\n', 'http://localhost/smk-14-bandung/upload/1576510701.png', 'xx', 1, 3, '2019-12-16 21:20:31', '2019-12-16 21:20:31'),
(11, 1, 4, 'xxxxxxxx xx xxxxxxxxx xxxxxx xxxxxxxxx xxxx ', 'xxxxxxxx-xx-xxxxxxxxx-xxxxxx-xxxxxxxxx-xxxx', '<p>xxxxxx xxxxxxxx xxxxxxxxx xxxxx xxxxxxxx</p>\n', 'http://localhost/smk-14-bandung/upload/1576558821.png', '-', 1, 2, '2019-12-17 12:00:21', '2019-12-17 12:00:21'),
(12, 1, 0, 'cek', 'cek', '<p>cekkkkk</p>\n', 'http://localhost/smk-14-bandung/upload/1576582719.png', '-', 1, 4, '2019-12-17 18:38:39', '2019-12-17 18:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `id_category_buku` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `id_category_buku`, `id_lokasi`, `nama`, `keterangan`, `created_at`, `updated_at`, `gambar`) VALUES
(1, 1, 1, 'harry potter', 'buku harry potter', '2019-12-17 03:49:06', '2019-12-17 03:49:06', 'assets/upload/buku/Mimbar-Masjid-04.jpg'),
(2, 2, 1, 'krisis moneter', 'krisis moneter', '2019-12-17 03:49:10', '2019-12-17 03:49:10', 'assets/upload/buku/usecase.png'),
(7, 1, 2, 'sejarah islam', 'menceritkan tentang sejarang islam', '2019-12-17 04:00:44', '2019-12-17 04:00:44', 'assets/upload/buku/Mimbar-Masjid-041.jpg'),
(8, 2, 1, 'aasasasasas', 'nmnm', '2019-12-17 04:19:13', '2019-12-17 04:19:13', 'assets/upload/buku/usecase1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Category Baru', '2019-12-16 16:35:07', '2019-12-16 16:35:07'),
(3, 'UPDATEE', '2019-12-16 22:21:13', '2019-12-16 22:21:13'),
(4, 'Lowongan Pekerjaan', '2019-12-17 12:03:08', '2019-12-17 12:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_buku`
--

CREATE TABLE `tbl_category_buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category_buku`
--

INSERT INTO `tbl_category_buku` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Agama', '2019-12-17 03:30:26', '2019-12-17 03:30:26'),
(2, 'Sains', '2019-12-17 03:30:26', '2019-12-17 03:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id` int(11) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `landasan_hukun` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekstrakurikuler`
--

CREATE TABLE `tbl_ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `title` int(60) NOT NULL,
  `pembina` varchar(60) NOT NULL,
  `pelatih` varchar(40) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` smallint(6) NOT NULL,
  `type` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Sekolah', '2019-12-17 12:44:32', '2019-12-17 12:44:32'),
(2, 'Kepala Tata Usaha', '2019-12-17 12:44:32', '2019-12-17 12:44:32'),
(3, 'Wakil Kepala Sekolah', '2019-12-17 12:57:54', '2019-12-17 12:57:54'),
(4, 'Dewan Komite', '2019-12-17 12:57:54', '2019-12-17 12:57:54'),
(5, 'Kepala Jurusan', '2019-12-17 12:58:34', '2019-12-17 12:58:34'),
(6, 'Kepala Program Studi', '2019-12-17 12:58:34', '2019-12-17 12:58:34'),
(7, 'Guru', '2019-12-17 12:58:34', '2019-12-17 12:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'deket jurang', '2019-12-17 02:51:23', '2019-12-17 02:51:23'),
(2, 'samping sampah', '2019-12-17 02:51:23', '2019-12-17 02:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manajemen`
--

CREATE TABLE `tbl_manajemen` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `matpel` varchar(60) NOT NULL DEFAULT '-',
  `deskripsi` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manajemen`
--

INSERT INTO `tbl_manajemen` (`id`, `nama`, `nip`, `jabatan`, `matpel`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nama Kepala Sekolah', '00000001', 1, '-', 'SMKN 14 Kota Bandung adalah Sekolah Menengah Kejuruan yang memiliki bidang keahlian Seni Rupa, Kerajinan Kriya, TIK, serta Teknologi dan Rekayasa. SMKN 14 Kota Bandung Mempersiapkan lulusan yang berwawasan profesional, produktif, dan memiliki budaya kerja yang baik. Dengan Demikian SMKN 14 Kota Bandung siap menciptakan tamatan yang berkompeten sesuai dengan bidangnya.\r\n\r\n', 'http://localhost/smk-14-bandung/assets/img/b.jpg', '2019-12-17 00:00:00', '2019-12-17 00:00:00'),
(3, 'Guru', '121212', 7, '-', '-', 'http://localhost/smk-14-bandung/upload/1576572729.png', '2019-12-17 15:52:09', '2019-12-17 15:52:09'),
(4, 'sadasd UPDATE', '21312312321', 7, 'Bahasa Indonesia', '-', 'http://localhost/smk-14-bandung/upload/1576576056.png', '2019-12-17 16:24:07', '2019-12-17 16:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id`, `id_siswa`, `id_buku`, `id_jurusan`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'minjem poe ayena', 0, '2019-12-16 21:29:11', '2019-12-16 21:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `id_jurusan`, `nis`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, 'D1115101', 'annashrul yusuf', 1, 2147483647, 'padasuka', '2019-12-16 21:07:22', '2019-12-16 21:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_level`, `nama`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Netindo', 'netindo', '$2a$08$A4Fw6Z1aisdLusT6I6alt.fshP94U4AhvVIJO5r62soG9HzweNOru', 1, '2019-12-16 15:28:52', '2019-12-16 15:28:52'),
(2, 0, 'ceeee', 'admin', '$2a$08$LMzPZ1ksqFSIG743bE5Vku/QFwinT/Wp40/8/1SdFNkNSpwiZDE4O', 1, '2019-12-17 11:29:19', '2019-12-17 11:29:19'),
(3, 0, 'sadasdas', 'netindo', '$2a$08$6P0flAXfs5gRIz7tkjR8F.UM0QCbcU52fXD8J/FzNNWq99UWjVA7m', 0, '2019-12-17 11:41:13', '2019-12-17 11:41:13'),
(4, 0, 'sadasdas', 'netindo', '$2a$08$FCk3PWut4Z7TXwAd81NbAulGHo4TI3g6XKAxL3kMf89oW2MiIFVaC', 0, '2019-12-17 11:41:24', '2019-12-17 11:41:24'),
(5, 1, 'sadasdas', 'admin', '$2a$08$fd.j8aFYOJG9vHEaBGvi6uQBKK3FplCe3/5AXXSsBc4W8nAfvgST.', 1, '2019-12-17 11:43:07', '2019-12-17 11:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `grant_access` tinyint(1) NOT NULL,
  `access_level` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id`, `title`, `grant_access`, `access_level`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '000000000000000000000000000000', '2019-12-16 15:28:37', '2019-12-16 15:28:37');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_berita`
-- (See below for the actual view)
--
CREATE TABLE `v_berita` (
`id` int(11)
,`id_member` int(11)
,`id_category` int(11)
,`title` varchar(255)
,`slug` varchar(255)
,`content` text
,`image` varchar(150)
,`tags` varchar(100)
,`status` smallint(6)
,`type` smallint(6)
,`created_at` datetime
,`updated_at` datetime
,`nama` varchar(50)
,`category` varchar(60)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_manajemen`
-- (See below for the actual view)
--
CREATE TABLE `v_manajemen` (
`id` int(11)
,`nama` varchar(60)
,`nip` varchar(50)
,`jabatan` int(11)
,`deskripsi` text
,`image` varchar(150)
,`created_at` datetime
,`updated_at` datetime
,`nama_jabatan` varchar(40)
,`matpel` varchar(60)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user`
-- (See below for the actual view)
--
CREATE TABLE `v_user` (
`id` int(11)
,`id_level` int(11)
,`nama` varchar(50)
,`username` varchar(30)
,`password` varchar(150)
,`created_at` datetime
,`updated_at` datetime
,`status` smallint(6)
,`level` varchar(30)
,`access_level` text
,`grant_access` tinyint(1)
);

-- --------------------------------------------------------

--
-- Structure for view `v_berita`
--
DROP TABLE IF EXISTS `v_berita`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_berita`  AS  select `ta`.`id` AS `id`,`ta`.`id_member` AS `id_member`,`ta`.`id_category` AS `id_category`,`ta`.`title` AS `title`,`ta`.`slug` AS `slug`,`ta`.`content` AS `content`,`ta`.`image` AS `image`,`ta`.`tags` AS `tags`,`ta`.`status` AS `status`,`ta`.`type` AS `type`,`ta`.`created_at` AS `created_at`,`ta`.`updated_at` AS `updated_at`,`tu`.`nama` AS `nama`,`tc`.`title` AS `category` from ((`tbl_berita` `ta` left join `tbl_category` `tc` on((`tc`.`id` = `ta`.`id_category`))) left join `tbl_user` `tu` on((`tu`.`id` = `ta`.`id_member`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_manajemen`
--
DROP TABLE IF EXISTS `v_manajemen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_manajemen`  AS  select `tm`.`id` AS `id`,`tm`.`nama` AS `nama`,`tm`.`nip` AS `nip`,`tm`.`jabatan` AS `jabatan`,`tm`.`deskripsi` AS `deskripsi`,`tm`.`image` AS `image`,`tm`.`created_at` AS `created_at`,`tm`.`updated_at` AS `updated_at`,`tj`.`title` AS `nama_jabatan`,`tm`.`matpel` AS `matpel` from (`tbl_manajemen` `tm` join `tbl_jabatan` `tj` on((`tj`.`id` = `tm`.`jabatan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_user`
--
DROP TABLE IF EXISTS `v_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user`  AS  select `tu`.`id` AS `id`,`tu`.`id_level` AS `id_level`,`tu`.`nama` AS `nama`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`created_at` AS `created_at`,`tu`.`updated_at` AS `updated_at`,`tu`.`status` AS `status`,`tl`.`title` AS `level`,`tl`.`access_level` AS `access_level`,`tl`.`grant_access` AS `grant_access` from (`tbl_user` `tu` join `tbl_user_level` `tl` on((`tl`.`id` = `tu`.`id_level`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ekstrakurikuler`
--
ALTER TABLE `tbl_ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manajemen`
--
ALTER TABLE `tbl_manajemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ekstrakurikuler`
--
ALTER TABLE `tbl_ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_manajemen`
--
ALTER TABLE `tbl_manajemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
