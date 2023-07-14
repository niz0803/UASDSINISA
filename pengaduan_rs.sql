-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2023 at 08:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pengaduan_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Rehan', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(1, 'Tidak berkategori'),
(2, 'Kesehatan'),
(3, 'Khasiat Buah');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `pasien_id` int(11) NOT NULL,
  `pasien_id_pasien` varchar(255) NOT NULL,
  `pasien_nama` varchar(50) NOT NULL,
  `pasien_jk` varchar(20) NOT NULL,
  `pasien_alamat` text NOT NULL,
  `pasien_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasien_id`, `pasien_id_pasien`, `pasien_nama`, `pasien_jk`, `pasien_alamat`, `pasien_telp`) VALUES
(4, '12345', 'Samsudin', 'Laki-laki', 'Jl. merdeka no 1', '082626523343'),
(5, '12346', 'Junaidi', 'Laki-laki', 'Jl merpati nomor.34', '087262723434'),
(6, '12347', 'samsuar jau', 'Laki-laki', 'Jl. pandeglang nomor 34', '08272663232'),
(7, '12348', 'Susilo x', 'Perempuan', 'Jalan matara no.223', '08733882324234');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `isi_pengaduan` text NOT NULL,
  `waktu_lapor` datetime NOT NULL,
  `status_pengaduan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `id_pasien`, `isi_pengaduan`, `waktu_lapor`, `status_pengaduan`) VALUES
(9, 4, 'Tolong tingkatkan lagi kebersihan kamar mandi', '2019-10-05 13:27:26', 0),
(10, 4, 'Pelayanan resepsionis kurang ramah', '2019-10-05 13:35:07', 0),
(11, 7, 'Petugas kebersihan nya masih kurang, mungkin bisa di perbanyak lagi', '2019-10-05 14:39:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `jenis_kelamin_petugas` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username_petugas` varchar(255) NOT NULL,
  `password_petugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jenis_kelamin_petugas`, `alamat`, `no_telp`, `email`, `username_petugas`, `password_petugas`) VALUES
(1, 'Samsul Bahri', 'Laki-laki', 'cunda', '08287382373', 'samsul@gmail.com', 'petugas1', 'b53fe7751b37e40ff34d012c7774d65f'),
(2, 'Umam Soleh', 'Perempuan', 'medan', '099768786', 'um@g.com', 'petugas2', 'ac5604a8b8504d4ff5b842480df02e91'),
(4, 'Baharudin', 'Laki-laki', 'Jalan kemangi no.8', '087272728222', 'bahar@gmail.com', 'petugas3', '6f7dc121bccfd778744109cac9593474');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `posting_judul` varchar(255) NOT NULL,
  `posting_tanggal` date NOT NULL,
  `posting_konten` text NOT NULL,
  `posting_sampul` varchar(255) NOT NULL,
  `posting_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`posting_id`, `posting_judul`, `posting_tanggal`, `posting_konten`, `posting_sampul`, `posting_kategori`) VALUES
(7, 'Khasiat buah apel untuk kesehatan', '2023-01-12', '<p>Buah pepaya mengandung antioksidan seperti beta-karoten, likopen, dan vitamin C, yang membantu melawan radikal bebas dalam tubuh, mencegah kerusakan sel, dan mengurangi risiko penyakit kronis seperti kanker dan penyakit jantung..</p>\r\n', 'apple.jpg', 3),
(10, 'Khasiat Buah Jeruk Untuk Kesehatan Anak', '2018-09-12', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'orange.jpg', 2),
(12, 'Manfaat Pepaya Untuk Kesehatan', '2019-10-05', '<p>coba ubah isi artikel</p>\r\n', 'papaya.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
