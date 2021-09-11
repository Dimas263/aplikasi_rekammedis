-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2021 at 07:01 AM
-- Server version: 5.1.73-community
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL,
  `minggu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`, `email`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
('01497c16-1227-11ec-a583-2cf4467ea6c6', 'Dr. Iwantoro, Sp.PD', 'Spesialis Penyakit Dalam', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '081385992091', 'iwantoro_test@hospital.com', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 12:00 WIB', '08:00 WIB - 12:00 WIB'),
('7e57841a-c681-4a58-8913-c6f29ebc258c', 'Dr. Laudeo, Sp. U', 'Spesialis Urologi', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '081356732261', 'Laudeo.test@hospital.com', '08:00 WIB - 12:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 14:00 WIB', '08:00 WIB - 14:00 WIB', '10:00 WIB - 15:00 WIB', '15:00 WIB - 20:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klinik`
--

CREATE TABLE `tb_klinik` (
  `id_klinik` varchar(50) NOT NULL,
  `nama_klinik` varchar(50) NOT NULL,
  `alamat_klinik` text NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL,
  `minggu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_klinik`
--

INSERT INTO `tb_klinik` (`id_klinik`, `nama_klinik`, `alamat_klinik`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
('523ea5db-1995-4047-a90f-e426721108af', 'Poliklinik Bedah Umum', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '20:00 WIB - 22:00 WIB', '20:00 WIB - 22:00 WIB'),
('a6d6405e-122a-11ec-a583-2cf4467ea6c6', 'Poliklinik Penyakit Dalam', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '17:00 WIB - 20:00 WIB', '17:00 WIB - 20:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `dosis` varchar(50) NOT NULL,
  `jenis` enum('injeksi','kapsul','sirup') NOT NULL,
  `stok` int(50) NOT NULL,
  `kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `keterangan`, `dosis`, `jenis`, `stok`, `kadaluarsa`) VALUES
('180aa55b-122c-11ec-a583-2cf4467ea6c6', 'OBH Combi', 'Obat Batuk Berdahak', '100ml', 'sirup', 50, '2021-12-31'),
('de5b63c0-7ef8-4e79-90ac-a3b8f82545de', 'Konidin', 'Obat batuk, flu dan masuk angin', '2 g', 'sirup', 10, '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `marga` enum('jawa','batak','betawi','sunda','dayak','asmat','minahasa','melayu','madura','bugis','lainnya') NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telprumah` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `agama` enum('islam','kristen','budha','hindu','kongucu','lainnya') NOT NULL,
  `golongan_darah` enum('a','b','ab','o') NOT NULL,
  `status_pasien` enum('menikah','belum menikah') NOT NULL,
  `jenis_pasien` enum('pribadi','bpjs','allianz','prudential','cigna','lainnya') NOT NULL,
  `nama_darurat` varchar(50) NOT NULL,
  `alamat_darurat` text NOT NULL,
  `hubungan_darurat` enum('orangtua','saudara','teman','sahabat','rekan kerja','atasan kerja','lainnya') NOT NULL,
  `no_telprumah_darurat` varchar(50) NOT NULL,
  `no_hp_darurat` varchar(50) NOT NULL,
  `sumber_informasi` enum('internet','tv','majalah','koran','radio','spanduk','seminar','event','referensi teman','lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `marga`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `no_ktp`, `email`, `no_telprumah`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `golongan_darah`, `status_pasien`, `jenis_pasien`, `nama_darurat`, `alamat_darurat`, `hubungan_darurat`, `no_telprumah_darurat`, `no_hp_darurat`, `sumber_informasi`) VALUES
('65f22b47-0319-11ec-ac8b-7ab417576e22', 'Dimas', 'jawa', 'Jl. Raya Pulo Sirih No.24 RT 001/003 Desa Sukajadi, Kec. Sukakarya, Kab.Bekasi, 17630.', 'Sukajadi', 'Sukakarya', 'Bekasi', 'Jawa Barat', '17630', '3216142301010001', 'dwiputradimas123@gmal.com', '-', '085811379583', 'Bekasi', '2001-01-23', 'pria', 'islam', 'a', 'belum menikah', 'pribadi', 'Masidah', 'Jl. Raya Pulo Sirih No.24 RT 001/003 Desa Sukajadi, Kecamatan Sukakarya,Kab.Bekasi, 17630.', 'orangtua', '-', '085883348094', 'internet'),
('f40fd2b3-c0c9-440e-9729-22c48b61e556', 'Aditya', 'sunda', 'Jl. Letjen M.T. Haryono No.52-53, RT.11/RW.5, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12771', 'Tebet Barat', 'Tebet', 'Jakarta Selatan', 'DKI Jakarta', '12770', '3216150983829577', 'adhi.test@gmail.com', '107233', '081356978834', 'Jakarta', '2000-09-10', 'pria', 'islam', 'o', 'belum menikah', 'allianz', 'Dimas', 'Kp. Pulo Sirih RT 001/003 Desa Sukajadi, Kec. Sukakarya, Kab. Bekasi, 17630.', 'teman', '100712', '085811379583', 'referensi teman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rekammedis` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `id_klinik` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `tanggal_periksa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis_obat`
--

CREATE TABLE `tb_rekammedis_obat` (
  `id_rekammedis_obat` int(15) NOT NULL,
  `id_rekammedis` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis_suster`
--

CREATE TABLE `tb_rekammedis_suster` (
  `id_rekammedis_suster` int(15) NOT NULL,
  `id_rekammedis` varchar(50) NOT NULL,
  `id_suster` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_suster`
--

CREATE TABLE `tb_suster` (
  `id_suster` varchar(50) NOT NULL,
  `nama_suster` varchar(50) NOT NULL,
  `jenis_suster` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL,
  `minggu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_suster`
--

INSERT INTO `tb_suster` (`id_suster`, `nama_suster`, `jenis_suster`, `alamat`, `no_telp`, `email`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
('055ba3fa-3fe3-455d-afa8-007bf6a787a9', 'Riska Utami', 'Suster Bedah', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '087775642231', 'Rista.test@gmail.com', '07:00 WIB - 16:00 WIB', '07:00 WIB - 16:00 WIB', '07:00 WIB - 16:00 WIB', '07:00 WIB - 16:00 WIB', '07:00 WIB - 16:00 WIB', '01:00 WIB - 05:00 WIB', '00:00 WIB - 00:00 WIB'),
('20064b26-1229-11ec-a583-2cf4467ea6c6', 'Sindy Lestari', 'Suster Operasi', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '085824659972', 'sindy.lestari@hospital.com', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 12:00 WIB', '08:00 WIB - 12:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','dokter','suster','apoteker') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
('49fb5510-0023-11ec-891a-ecdc8814ccc3', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
('a7093d60-0318-11ec-ac8b-7ab417576e22', 'dokter', '9d2878abdd504d16fe6262f17c80dae5cec34440', 'dokter'),
('a7096f94-0318-11ec-ac8b-7ab417576e22', 'suster', 'e49493ef85e0cdce67868dd2093f71c171bbf2da', 'suster'),
('a70987b2-0318-11ec-ac8b-7ab417576e22', 'apoteker', '8e30c3e6d50e5d7c02e7eaffa5954b04d4a3afaf', 'apoteker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_klinik`
--
ALTER TABLE `tb_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rekammedis`),
  ADD UNIQUE KEY `id_pasien` (`id_pasien`,`id_dokter`,`id_klinik`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `tb_rekammedis_ibfk_2` (`id_klinik`);

--
-- Indexes for table `tb_rekammedis_obat`
--
ALTER TABLE `tb_rekammedis_obat`
  ADD PRIMARY KEY (`id_rekammedis_obat`),
  ADD UNIQUE KEY `id_rekammedis` (`id_rekammedis`,`id_obat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_rekammedis_suster`
--
ALTER TABLE `tb_rekammedis_suster`
  ADD PRIMARY KEY (`id_rekammedis_suster`),
  ADD UNIQUE KEY `id_rekammedis` (`id_rekammedis`,`id_suster`),
  ADD KEY `id_suster` (`id_suster`);

--
-- Indexes for table `tb_suster`
--
ALTER TABLE `tb_suster`
  ADD PRIMARY KEY (`id_suster`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_klinik`) REFERENCES `tb_klinik` (`id_klinik`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_4` FOREIGN KEY (`id_rekammedis`) REFERENCES `tb_rekammedis_obat` (`id_rekammedis`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_5` FOREIGN KEY (`id_rekammedis`) REFERENCES `tb_rekammedis_suster` (`id_rekammedis`);

--
-- Constraints for table `tb_rekammedis_obat`
--
ALTER TABLE `tb_rekammedis_obat`
  ADD CONSTRAINT `tb_rekammedis_obat_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);

--
-- Constraints for table `tb_rekammedis_suster`
--
ALTER TABLE `tb_rekammedis_suster`
  ADD CONSTRAINT `tb_rekammedis_suster_ibfk_2` FOREIGN KEY (`id_rekammedis`) REFERENCES `tb_rekammedis` (`id_rekammedis`),
  ADD CONSTRAINT `tb_rekammedis_suster_ibfk_1` FOREIGN KEY (`id_suster`) REFERENCES `tb_suster` (`id_suster`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
