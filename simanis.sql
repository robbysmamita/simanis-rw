-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 01:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanis`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `mata pelajaran_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `tahun_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kode_guru` int(11) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_induk_guru` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kode_guru`, `nama_guru`, `email`, `password`, `no_induk_guru`, `jenis_kelamin`) VALUES
(5, 'Sujaya', '', '0', '14257', 'Laki-Laki'),
(6, 'Vickyyy', 'vickyguru@anime.com', '$2y$10$PI09cWvXm', '75555', 'Laki-Laki'),
(7, 'Vickyyy', 'vickyguru@anime.com', '$2y$10$PI09cWvXm8xCsaX7GTYcEO5LQURA4NrASR7uyXJoP2DJ43mojNo2a', '751254', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kode_jadwal` int(11) NOT NULL,
  `nama_hari` varchar(255) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `kode_kelas` varchar(11) NOT NULL,
  `kode_mapel` varchar(11) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `nama_hari`, `kode_guru`, `kode_kelas`, `kode_mapel`, `waktu_mulai`, `waktu_akhir`) VALUES
(1, '', 5, '1', '5', '00:00:00', '00:00:00'),
(2, '', 6, '2', '3', '10:00:00', '23:00:00'),
(3, '', 6, '2', '3', '10:00:00', '23:00:00'),
(4, 'Senin', 5, '1', '3', '11:03:00', '00:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(11) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kelas`, `category`) VALUES
('1', 'X-MIPA', 'tesss'),
('2', 'XI-MIPA', 'etsf');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(11) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `mata_pelajaran`) VALUES
('3', 'Bahasa Inggris'),
('4', 'Bahasa Jerman'),
('5', 'Bahasa Arab');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `users_id` int(10) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `no_induk_siswa` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `no_telp_orangtua` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `users_id`, `nama_siswa`, `no_induk_siswa`, `jenis_kelamin`, `alamat`, `no_telp`, `no_telp_orangtua`, `email`, `password`, `kelas_id`) VALUES
(1, 6, 'Tess', '12003846', 'Laki - Laki', 'Jl. Ketegan ', '085362718291', '082536427124', 'Daniaditya@gmail.com', 'daniaditya', NULL),
(2, 0, 'budi setiawan', '128529', 'Laki-Laki', 'Jl. Ketegan No. 35', '084293482161', '082328427381', 'budisetia@gmail.com', '', NULL),
(3, 0, 'Rina Andini', '91212048', 'Perempuan', 'Jl. Ketegan No. 35', '084293482161', '082328427381', 'rinaandi0192@gmail.com', '', NULL),
(5, 0, 'Rida', '126534', 'Perempuan', 'Jl. XVC', '08080808', '08080808', 'zxas@gmail.com', '', NULL),
(6, 6, 'asdasdasdas', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun akademik`
--

CREATE TABLE `tahun akademik` (
  `id` int(11) NOT NULL,
  `tahun_akademik` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id` int(11) NOT NULL,
  `string` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id`, `string`) VALUES
(6, '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_date` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `role_id` varchar(11) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_date`, `last_login`, `is_active`, `first_name`, `last_name`, `role_id`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', 'administrator', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', '1', 'ADMIN', '0'),
(2, '', 'ilham', '$2y$10$o0JCJIYfUaUITdprSlcIq.VBanOOnH7RsyMrovlmaGL27ChIT8K6W', 'ilham@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'ilham', 'nasrullah', '1', NULL, NULL),
(3, '', '', '$2y$10$DYpWtmq2L/YOl9cMV747fuaD9MFNijKhPDs38ni5qedpXNHQMNIFC', 'budi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'budi', 'setiawan', '1', NULL, NULL),
(4, '', '', '$2y$10$yoTFh3lYbPjiwcQUqciWq.tPuPD4cjbfQ0d2mgbuWZ1AESwKpgj7u', 'tes@aaa.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'tes@aaa.com', 'tes@aaa.com', '1', NULL, NULL),
(5, '', 'Vicky', '$2y$10$PI09cWvXm8xCsaX7GTYcEO5LQURA4NrASR7uyXJoP2DJ43mojNo2a', 'vicky@anime.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'vicky@anime.com', 'vicky@anime.com', '1', NULL, NULL),
(6, '', ' Tesss', '$2y$10$PI09cWvXm8xCsaX7GTYcEO5LQURA4NrASR7uyXJoP2DJ43mojNo2a', 'vickytes@anime.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'vicky@anime.com', 'vicky@anime.com', '3', NULL, NULL),
(7, '', ' Tesss', '$2y$10$PI09cWvXm8xCsaX7GTYcEO5LQURA4NrASR7uyXJoP2DJ43mojNo2a', 'vickytesguru@anime.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'vicky@anime.com', 'vicky@anime.com', '2', NULL, NULL),
(8, '', 'iya', '$2y$10$4YG64v2WfQ2yp.xsTrVQQ.YXWXajJAm6TF/z07V6h73cwVGXuDPAa', 'iya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'iya', 'iyan', '3', NULL, NULL),
(9, '', '', '$2y$10$AK9JoKtyuUrX.luftGfHMuwJKYdxOEW3r14NHrsJMTL3wOqgSPPnq', 'tes@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2021, NULL, 1, 'yes', 'yess', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`) USING BTREE;

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`) USING BTREE;

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`) USING BTREE;

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tahun akademik`
--
ALTER TABLE `tahun akademik`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `kode_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kode_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahun akademik`
--
ALTER TABLE `tahun akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
