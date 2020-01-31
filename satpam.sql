-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 04:51 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satpam`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` int(50) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpjs`
--

CREATE TABLE `bpjs` (
  `id_bpjs` int(11) NOT NULL,
  `bpjs_kesehatan` varchar(100) NOT NULL,
  `bpjs_tenagakerja` varchar(100) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat_client` text NOT NULL,
  `no_mou` varchar(25) NOT NULL,
  `periode_perjanjian` date NOT NULL,
  `kontak` int(11) NOT NULL,
  `waktu_langganan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `kota`, `alamat_client`, `no_mou`, `periode_perjanjian`, `kontak`, `waktu_langganan`, `id_perusahaan`) VALUES
(1, 'bri', '', 'sleman', '109101', '2020-02-29', 123, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `NIK_istri` int(50) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_admin`
--

CREATE TABLE `jabatan_admin` (
  `id_jabatan` int(11) NOT NULL,
  `jenis_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_admin`
--

INSERT INTO `jabatan_admin` (`id_jabatan`, `jenis_jabatan`) VALUES
(1, 'super admin'),
(2, 'admin'),
(3, 'client'),
(4, 'satpam');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `jumlah_satpam` int(11) NOT NULL,
  `tagihan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `jumlah_satpam`, `tagihan`) VALUES
(1, 'paket 1', 10, 10000000),
(2, 'paket 2', 100, 100000000);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_satpam`
--

CREATE TABLE `pendidikan_satpam` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan_tertinggi` varchar(50) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `no_ijasah` varchar(100) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `pendidikan_satpam` varchar(50) NOT NULL,
  `tempat_diklat` varchar(50) NOT NULL,
  `no_ijasah_satpam` int(100) NOT NULL,
  `no_kta` int(100) NOT NULL,
  `tahun_penyelenggaraan` int(11) NOT NULL,
  `masa_berlaku` varchar(50) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(5) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `tentang` text NOT NULL,
  `jumlah_client` int(11) NOT NULL,
  `Jumlah_satpam` int(11) NOT NULL,
  `masa_berlangganan` varchar(50) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `verifikasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `email_perusahaan`, `password`, `alamat`, `kota`, `tentang`, `jumlah_client`, `Jumlah_satpam`, `masa_berlangganan`, `id_paket`, `verifikasi`) VALUES
(3, 'Garuda', 'garuda@gmail.com', 'garuda123', 'coba', '1', 'cobacoba', 10, 9, '12 Bulan', 1, ''),
(4, 'mawar', 'mawar@gmail.com', 'mawar123', 'jauh', '2', 'banget', 89, 90, '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `satpam`
--

CREATE TABLE `satpam` (
  `id_satpam` int(5) NOT NULL,
  `nama_satpam` varchar(100) NOT NULL,
  `NIK` int(11) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satpam`
--

INSERT INTO `satpam` (`id_satpam`, `nama_satpam`, `NIK`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `golongan_darah`, `agama`, `tinggi_badan`, `berat_badan`, `kewarganegaraan`, `id_client`) VALUES
(1, 'satpam1', 1234567890, '8 juni 1990', 'jogja', 'L', 'o', 'islam', 190, 86, 'Indonesia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `no_sertifikat` int(25) NOT NULL,
  `no_pegawai` int(25) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `kualifikasi` varchar(50) NOT NULL,
  `waktu_berlaku` date NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sidik_jari`
--

CREATE TABLE `sidik_jari` (
  `id_sidik_jari` int(11) NOT NULL,
  `sidikjari_1` varchar(255) NOT NULL,
  `sidikjari_2` varchar(255) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `jenis_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `jenis_status`) VALUES
(1, 'aktif'),
(2, 'suspend'),
(3, 'blokir'),
(4, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `pasw_admin` varchar(25) NOT NULL,
  `kategori_admin` varchar(5) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tracking_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `bpjs`
--
ALTER TABLE `bpjs`
  ADD PRIMARY KEY (`id_bpjs`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `jabatan_admin`
--
ALTER TABLE `jabatan_admin`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pendidikan_satpam`
--
ALTER TABLE `pendidikan_satpam`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `satpam`
--
ALTER TABLE `satpam`
  ADD PRIMARY KEY (`id_satpam`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `sidik_jari`
--
ALTER TABLE `sidik_jari`
  ADD PRIMARY KEY (`id_sidik_jari`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bpjs`
--
ALTER TABLE `bpjs`
  MODIFY `id_bpjs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan_admin`
--
ALTER TABLE `jabatan_admin`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pendidikan_satpam`
--
ALTER TABLE `pendidikan_satpam`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `satpam`
--
ALTER TABLE `satpam`
  MODIFY `id_satpam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`id_satpam`) REFERENCES `satpam` (`id_satpam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bpjs`
--
ALTER TABLE `bpjs`
  ADD CONSTRAINT `bpjs_ibfk_1` FOREIGN KEY (`id_satpam`) REFERENCES `satpam` (`id_satpam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_5` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD CONSTRAINT `data_keluarga_ibfk_1` FOREIGN KEY (`id_satpam`) REFERENCES `satpam` (`id_satpam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan_satpam`
--
ALTER TABLE `pendidikan_satpam`
  ADD CONSTRAINT `pendidikan_satpam_ibfk_1` FOREIGN KEY (`id_satpam`) REFERENCES `satpam` (`id_satpam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `satpam`
--
ALTER TABLE `satpam`
  ADD CONSTRAINT `satpam_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`id_satpam`) REFERENCES `satpam` (`id_satpam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sidik_jari`
--
ALTER TABLE `sidik_jari`
  ADD CONSTRAINT `sidik_jari_ibfk_1` FOREIGN KEY (`id_satpam`) REFERENCES `satpam` (`id_satpam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan_admin` (`id_jabatan`),
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
