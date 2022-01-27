-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 04:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode_gejala`, `gejala`) VALUES
(1, 'G001', 'Demam'),
(2, 'G002', 'Pilek'),
(3, 'G003', 'Pusing'),
(4, 'G004', 'Batuk Kering'),
(5, 'G005', 'Batuk Berdahak'),
(6, 'G006', 'Denyut Jantung Tidak Normal'),
(7, 'G007', 'Susah Menelan'),
(8, 'G008', 'Sesak Nafas'),
(9, 'G009', 'Diare'),
(10, 'G010', 'Menggigil'),
(11, 'G011', 'Badan Lemas'),
(12, 'G012', 'Kehilangan Indra Perasa'),
(13, 'G013', 'Ruam Pada Kulit'),
(14, 'G014', 'Mata Merah'),
(15, 'G015', 'Dada Terasa Berat'),
(16, 'G016', 'Meriang'),
(17, 'G017', 'Badan Pegal-pegal'),
(18, 'G018', 'Badan Terasa Dingin Pada Malam Hari');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_terpilih`
--

CREATE TABLE `gejala_terpilih` (
  `id_kesimpulan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala_terpilih`
--

INSERT INTO `gejala_terpilih` (`id_kesimpulan`, `id`, `gejala`) VALUES
(1, 1, 'Demam'),
(2, 1, 'Pilek'),
(3, 1, 'Mengigil'),
(4, 1, 'Badan Lemas'),
(5, 1, 'Badan Terasa Dingin Pada Malam Hari'),
(6, 2, 'Demam'),
(7, 2, 'Pilek'),
(8, 2, 'Pusing'),
(9, 2, 'Batuk Berdahak'),
(10, 2, 'Susah Menelan'),
(11, 3, 'Denyut Jantung Tidak Normal'),
(12, 3, 'Diare'),
(13, 3, 'Ruam Pada Kulit'),
(14, 3, 'Badan Pegal-pegal'),
(15, 4, 'Badan Lemas'),
(16, 4, 'Kehilangan Indra Perasa'),
(17, 4, 'Ruam Pada Kulit'),
(18, 5, 'Demam'),
(19, 5, 'Susah Menelan'),
(20, 5, 'kehilangan Indra Perasa'),
(21, 5, 'Ruam Pada Kulit'),
(22, 6, 'Demam'),
(23, 6, 'Badan Terasa Dingin Pada Malam Hari');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `G001` tinyint(4) NOT NULL,
  `G002` tinyint(4) NOT NULL,
  `G003` tinyint(4) NOT NULL,
  `G004` tinyint(4) NOT NULL,
  `G005` tinyint(4) NOT NULL,
  `G006` tinyint(4) NOT NULL,
  `G007` tinyint(4) NOT NULL,
  `G008` tinyint(4) NOT NULL,
  `G009` tinyint(4) NOT NULL,
  `G010` tinyint(4) NOT NULL,
  `G011` tinyint(4) NOT NULL,
  `G012` tinyint(4) NOT NULL,
  `G013` tinyint(4) NOT NULL,
  `G014` tinyint(4) NOT NULL,
  `G015` tinyint(4) NOT NULL,
  `G016` tinyint(4) NOT NULL,
  `G017` tinyint(4) NOT NULL,
  `G018` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `G001`, `G002`, `G003`, `G004`, `G005`, `G006`, `G007`, `G008`, `G009`, `G010`, `G011`, `G012`, `G013`, `G014`, `G015`, `G016`, `G017`, `G018`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1),
(2, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0),
(5, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `kode_solusi` varchar(5) NOT NULL,
  `nama_solusi` varchar(50) NOT NULL,
  `solusi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `kode_solusi`, `nama_solusi`, `solusi`) VALUES
(1, ' P001', 'Minum Obat\r\nPereda\r\nDemam', 'Jika Gejala Awal mengalami demam lebih dari 37’c\r\nSilahkan Minum Pereda demam seperti Paracetamol'),
(2, 'P002', 'Tetap\r\nTerhidrasi', 'Jika Mengalami Tenggorokan nyeri, silahkan coba\r\ndahulu dengan banyak minum air putih'),
(3, 'P003', 'Istirahat\r\nyang Cukup', 'Jika Perasaan Meriang dan lemas cobalah untuk cukup\r\nistirahat\r\n'),
(4, 'P004', 'Pantau\r\nGejala', 'Jika Mengalami Batuk, Pilek, Tenggorokan sakit dan\r\ndemam, silahkan melapor ke bidan desa agar dipantau\r\nselama 14 hari\r\n'),
(5, 'P005', 'Lakukan\r\nIsolasi\r\nMandiri', 'Jika Mengalami Batuk, Kehilangan Indra Perasa, Detak\r\nJantung Tidak normal dan demam,selama 14 hari atau\r\nlebih, Silahkan melakukan Isolasi Mandiri dirumah'),
(6, 'P006', 'Hubungi\r\nDokter', 'Jika Mengalami Batuk, Pilek, Tenggorokan sakit dan\r\ndemam,selama 14 hari atau lebih dan terasa ada\r\ngangguan pernafasan, silahkan melapor ke Rumah sakit\r\natau Puskesmas untuk diperiksa lebih lanjut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_terpilih`
--
ALTER TABLE `gejala_terpilih`
  ADD PRIMARY KEY (`id_kesimpulan`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gejala_terpilih`
--
ALTER TABLE `gejala_terpilih`
  MODIFY `id_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
