-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 09:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minirs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `no_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `jk_dokter` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `status_dokter` enum('Belum Menikah','Menikah','Duda','Janda') NOT NULL,
  `agama_dokter` enum('Islam','Katolik','Protestan','Buddha','Hindu','Kong Hu cu') NOT NULL,
  `pendidikan_dokter` enum('TK','SD','SMP','SMA/SMK','D3','D4','S1') NOT NULL,
  `alamat_dokter` varchar(255) NOT NULL,
  `nohp_dokter` varchar(15) NOT NULL,
  `jenis_dokter` enum('Umum','Gigi','Spesialis','') NOT NULL,
  `jenis_spesialis` enum('Penyakit Dalam','Syaraf','Jantung','Obgyn') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `no_dokter`, `nama_dokter`, `jk_dokter`, `tanggal_lahir`, `tempat_lahir`, `status_dokter`, `agama_dokter`, `pendidikan_dokter`, `alamat_dokter`, `nohp_dokter`, `jenis_dokter`, `jenis_spesialis`) VALUES
(1, '12121', 'Taufik', 'Laki Laki', '31/01/1999', 'Pekanbaru', 'Belum Menikah', 'Islam', 'S1', 'Jl Lumba Lumba No3 RT01 RW 14 , Tangkerang Selatan', '+6282386752760', 'Umum', 'Penyakit Dalam');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `jam_selesai` varchar(255) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_poliklinik` int(11) NOT NULL,
  `status_jadwal` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `no_regis` varchar(255) NOT NULL,
  `pasien_kunjungan` varchar(255) NOT NULL,
  `dokter_kunjungan` varchar(255) NOT NULL,
  `poli_kunjungan` varchar(255) NOT NULL,
  `carabayar` enum('Umum','BPJS','Asuransi','') NOT NULL,
  `status_kunjungan` enum('Aktif','Tutup Kunjungan','Batal','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rekam_medis` varchar(255) NOT NULL,
  `panggilan_pasien` enum('Tn','Ny','Nn','An','By') NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jk_pasien` varchar(20) NOT NULL,
  `tgllahir_pasien` varchar(20) NOT NULL,
  `tempatlahir_pasien` varchar(50) NOT NULL,
  `status_pasien` enum('Belum Menikah','Menikah','Duda','Janda') NOT NULL,
  `agama_pasien` enum('Islam','Katolik','Protestan','Hindu','Buddha','Kong Hu Cu') NOT NULL,
  `pendidikan_pasien` enum('TK','SD','SMP','SMA/SMK','D3','D4','S1') NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `nohp_pasien` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(255) NOT NULL,
  `status_poli` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id_poli`, `nama_poli`, `status_poli`) VALUES
(1, 'Poliklinik Anak', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`,`id_dokter`,`id_poliklinik`),
  ADD KEY `dokter_jadwal` (`id_dokter`),
  ADD KEY `poli_jadwal` (`id_poliklinik`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `no_rekam_medis` (`no_rekam_medis`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `dokter_jadwal` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `poli_jadwal` FOREIGN KEY (`id_poliklinik`) REFERENCES `poliklinik` (`id_poli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
