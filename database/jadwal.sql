-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 09:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kode` int(2) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status_dosen` int(3) NOT NULL,
  `id_guru` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kode`, `nip`, `nama`, `alamat`, `telp`, `password`, `status_dosen`, `id_guru`) VALUES
(87, '1234', 'I Komang Suartika, M.Fil H', 'gading', '0823', '', 1, 'D20'),
(92, '', 'Skolastika Siba Igon, S.Kom.,M.T', '', '', '', 1, 'D06'),
(95, '', 'Remerta Noni Naatonis, S. Kom., M. Cs', '', '', '', 1, 'D04'),
(97, '', 'Heni, S.S., M. Hum', '', '', '', 1, 'D10'),
(103, '', 'Jimi Asmara, M.Kom', '', '', '', 1, 'D08'),
(107, '', 'Max Abr. Soleman Lenggu, S.Kom.,MT', '', '', '', 1, 'D05'),
(113, '', 'Yampi R. Kaesmetan, M.Kom', '', '', '', 1, 'D14'),
(122, '', 'Franki Yusuf Bisilisin, M.Kom', '', '', '', 1, 'D17'),
(196, '1234', 'Mardhalia Saitakela, S.Kom., M.T', 'gading', '0823', '', 1, 'D01'),
(201, '', 'Yohanes Payong, S.Kom.,MT', '', '', '', 1, 'D03'),
(228, '', 'Semlinda Juszandri Bulan, M.Kom', '', '', '', 1, 'D15'),
(239, '', 'Yosep Jakob Latuan, SH., M.H.', '', '', '', 1, 'D11'),
(250, '', 'Dr. Hasibun Asikin, S. Ag., M.MPd', '', '', '', 1, 'D12'),
(254, '', 'Dr. Patrisius Kami, S.Pd., M.Hum', '', '', '', 1, 'D13'),
(257, '0', 'Petrus Katemba, ST.,MT', 'sfdfa', '12', '', 1, 'D02'),
(258, '', 'Dr. Tri Ana Setyarini, S.Si.,M.Cs', '', '', '', 1, 'D18'),
(293, '', 'Erna Rosani Nubatonis, S.Kom, MT', '', '', '', 1, 'D07'),
(308, '125', 'Marinus Ignasius Jawawuan L., S. Kom., M. Cs', '', '', '', 1, 'D09'),
(311, '765', 'Edwin U. Malahina,S.Kom.,M.T.', '', '', '', 1, 'D16'),
(312, '', 'Heryon Bernard Mbuik, M.Pd.K.,M.Pd', '', '', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `kode` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id_hari` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`kode`, `nama`, `id_hari`) VALUES
(1, 'Senin', 'H01'),
(2, 'Selasa', 'H02'),
(3, 'Rabu', 'H03'),
(4, 'Kamis', 'H04'),
(5, 'Jumat', 'H05');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpelajaran`
--

CREATE TABLE `jadwalpelajaran` (
  `kode` int(10) NOT NULL,
  `kode_pengampu` int(10) DEFAULT NULL,
  `kode_jam` int(10) DEFAULT NULL,
  `kode_hari` int(10) DEFAULT NULL,
  `kode_ruang` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='hasil proses';

--
-- Dumping data for table `jadwalpelajaran`
--

INSERT INTO `jadwalpelajaran` (`kode`, `kode_pengampu`, `kode_jam`, `kode_hari`, `kode_ruang`) VALUES
(1, 264, 7, 2, 28),
(2, 267, 8, 1, 29),
(3, 281, 8, 3, 30),
(4, 282, 6, 1, 48),
(5, 283, 7, 4, 49),
(6, 284, 8, 4, 51),
(7, 285, 8, 3, 57),
(8, 286, 7, 3, 56),
(9, 287, 8, 2, 50),
(10, 304, 5, 5, 56),
(11, 305, 8, 2, 49),
(12, 307, 15, 5, 56),
(13, 308, 5, 5, 57),
(14, 310, 8, 3, 55),
(15, 311, 8, 4, 53),
(16, 312, 7, 3, 55),
(17, 322, 7, 3, 51),
(18, 323, 7, 2, 52),
(19, 328, 7, 2, 55),
(20, 329, 7, 3, 54),
(21, 330, 8, 1, 51),
(22, 331, 5, 5, 50),
(23, 332, 6, 2, 49),
(24, 333, 8, 1, 30),
(25, 334, 8, 4, 54),
(26, 345, 6, 2, 48),
(27, 352, 8, 1, 49),
(28, 355, 6, 2, 53),
(31, 359, 5, 2, 53),
(32, 369, 7, 1, 56),
(33, 359, 5, 4, 52),
(34, 369, 7, 4, 52),
(35, 359, 8, 3, 56),
(36, 369, 5, 5, 49);

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `kode` int(10) NOT NULL,
  `range_jam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`kode`, `range_jam`) VALUES
(1, '07.30-08.20'),
(2, '08.20-09.10'),
(3, '09.10-10.00'),
(4, '10.10-11.00'),
(5, '11.00-11.50'),
(6, '11.50-12.40'),
(7, '12.40-13.30'),
(8, '13.30-14.20'),
(9, '14.20-15.10'),
(10, '15:10-16:00'),
(11, '16.00-16.50'),
(12, '16.50-17.40');

-- --------------------------------------------------------

--
-- Table structure for table `jam2`
--

CREATE TABLE `jam2` (
  `kode` int(10) NOT NULL,
  `range_jam` varchar(50) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `sesi` int(2) DEFAULT NULL,
  `id_jam` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jam2`
--

INSERT INTO `jam2` (`kode`, `range_jam`, `sks`, `sesi`, `id_jam`) VALUES
(1, '07.30-10.00', 3, 1, 'T11'),
(2, '10.10-12.40', 3, 2, 'T12'),
(3, '13.00-15.30', 3, 3, 'T13'),
(4, '15.30-18.00', 3, 4, 'T14'),
(5, '07.30-09.10', 2, 1, 'T05'),
(6, '10.10-11.50', 2, 2, 'T06'),
(7, '13.00-14.40', 2, 3, 'T07'),
(8, '15.30-17.10', 2, 4, 'T08'),
(9, '07.30-08.20', 1, 1, 'T01'),
(10, '10.10-11:00', 1, 2, 'T02'),
(11, '13.00-13.50', 1, 3, 'T03'),
(12, '15.30-16.20', 1, 4, 'T04'),
(13, '13.30-16.00', 3, 5, 'T15'),
(14, '13.30-15.10', 2, 5, 'T09'),
(15, '16.00-17.40', 2, 6, 'T10'),
(16, '07.30-09.10', 4, 1, 'T16'),
(17, '10.10-11.50', 4, 2, 'T17'),
(18, '13.00-14.40', 4, 3, 'T18'),
(19, '15.30-17.10', 4, 4, 'T19'),
(20, '13.30-15.10', 4, 5, 'T20'),
(21, '16.00-17.40', 4, 6, 'T21');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode` int(11) NOT NULL,
  `nama_jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode`, `nama_jurusan`) VALUES
(1, 'Teknik Inf');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kode_jurusan` int(3) NOT NULL,
  `id_kelas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode`, `nama_kelas`, `kode_jurusan`, `id_kelas`) VALUES
(1, 'A', 1, 'K01'),
(2, 'B', 1, 'K02'),
(3, 'C', 1, 'K03');

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `kode` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah_jam` int(6) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `aktif` enum('True','False') DEFAULT 'True',
  `jenis` enum('TEORI','PRAKTIKUM') DEFAULT 'TEORI',
  `nama_kode` varchar(10) DEFAULT NULL,
  `kode_prodi` int(5) DEFAULT NULL,
  `id_mapel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='example kode_mk = 0765109 ';

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`kode`, `nama`, `jumlah_jam`, `semester`, `aktif`, `jenis`, `nama_kode`, `kode_prodi`, `id_mapel`) VALUES
(400, 'Interaksi Manusia dan Komputer', 2, 1, 'True', 'TEORI', '0', 9, 'M111'),
(401, 'Kalkulus', 2, 1, 'True', 'TEORI', '1', 9, 'M112'),
(402, 'Proposal Penelitian', 2, 1, 'True', 'TEORI', '2', 9, 'M113'),
(403, 'Statistika dan Probabilitas', 2, 1, 'True', 'TEORI', '3', 9, 'M114'),
(404, 'Rekayasa Perangkat  Lunak I', 2, 1, 'True', 'TEORI', '4', 9, 'M115'),
(405, 'Etika Profesi', 2, 1, 'True', 'TEORI', '5', 9, 'M116'),
(406, 'Algoritma dan Pemrograman I', 2, 1, 'True', 'TEORI', '6', 9, 'M117'),
(407, 'Kewirausahaan', 2, 1, 'True', 'TEORI', '7', 9, 'M118'),
(408, 'Arsitektur Komputer', 2, 1, 'True', 'TEORI', '8', 9, 'M119'),
(409, 'Agama Katolik', 2, 1, 'True', 'TEORI', '9', 9, 'M120'),
(410, 'Muatan Lokal', 2, 1, 'True', 'TEORI', '10', 9, 'M121'),
(411, 'Bahasa Inggris I', 2, 1, 'True', 'TEORI', '11', 9, 'M122'),
(412, 'Pancasila', 2, 1, 'True', 'TEORI', '12', 9, 'M123'),
(413, 'Pendidikan Kewarganegaraan', 2, 1, 'True', 'TEORI', '13', 9, 'M124'),
(414, 'Bahasa Indonesia', 2, 1, 'True', 'TEORI', '14', 9, 'M125'),
(415, 'Aljabar Linier', 2, 1, 'True', 'TEORI', '13', 9, 'M126'),
(416, 'Arsitektur Komputer', 2, 1, 'True', 'TEORI', '15', 9, 'M127'),
(417, 'Matematika Diskrit', 2, 1, 'True', 'TEORI', '16', 9, 'M128'),
(418, 'Logika Informatika', 2, 1, 'True', 'TEORI', '17', 9, 'M129'),
(419, 'Komputasi Awan', 2, 1, 'True', 'TEORI', '18', 9, 'M130'),
(420, 'Pemrosesan Data Terdistribusi', 2, 1, 'True', 'TEORI', '19', 9, 'M131'),
(421, 'Etika Profesi', 2, 1, 'True', 'TEORI', '20', 9, 'M132'),
(422, 'Agama Kristen', 2, 1, 'True', 'TEORI', '21', 9, 'M133'),
(423, 'Agama Islam', 2, 1, 'True', 'TEORI', '22', 9, 'M134'),
(424, 'Agama Hindu dan Budha', 2, 1, 'True', 'TEORI', '23', 9, 'M135');

-- --------------------------------------------------------

--
-- Table structure for table `pengampu`
--

CREATE TABLE `pengampu` (
  `kode` int(10) NOT NULL,
  `kode_mk` int(10) DEFAULT NULL,
  `kode_guru` int(10) DEFAULT NULL,
  `kelas` int(10) DEFAULT NULL,
  `tahun_akademik` int(10) DEFAULT NULL,
  `kode_prodi` int(11) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `kuota` int(5) DEFAULT NULL,
  `kode_ruang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengampu`
--

INSERT INTO `pengampu` (`kode`, `kode_mk`, `kode_guru`, `kelas`, `tahun_akademik`, `kode_prodi`, `semester`, `kuota`, `kode_ruang`) VALUES
(264, 400, 196, 1, 9, 9, 5, 40, 28),
(267, 424, 87, 1, 9, 9, 1, 40, 29),
(281, 413, 250, 3, 9, 9, 3, 30, 30),
(282, 417, 113, 3, 9, 9, 7, 30, 48),
(283, 408, 103, 2, 9, 9, 1, 40, 49),
(284, 423, 250, 1, 9, 9, 5, 35, 51),
(285, 416, 103, 1, 9, 9, 5, 30, 57),
(286, 411, 97, 1, 9, 9, 3, 30, 56),
(287, 421, 107, 3, 9, 9, 5, 30, 50),
(304, 420, 122, 1, 9, 9, 1, 40, 0),
(305, 412, 239, 2, 9, 9, 3, 35, 0),
(307, 407, 293, 1, 9, 9, 3, 35, 0),
(308, 421, 196, 2, 9, 9, 5, 30, 0),
(310, 419, 311, 1, 9, 9, 1, 40, 0),
(311, 418, 228, 3, 9, 9, 5, 35, 0),
(312, 401, 257, 1, 9, 9, 1, 40, 0),
(322, 421, 107, 3, 9, 9, 3, 30, 0),
(323, 422, 312, 2, 9, 9, 5, 35, 0),
(328, 411, 97, 1, 9, 9, 3, 40, 0),
(329, 418, 228, 3, 9, 9, 5, 40, 0),
(330, 402, 107, 2, 9, 9, 3, 40, 0),
(331, 416, 103, 2, 9, 9, 1, 40, 0),
(332, 421, 107, 1, 9, 9, 1, 40, 0),
(333, 415, 258, 3, 9, 9, 3, 40, 0),
(334, 404, 95, 1, 9, 9, 1, 40, 0),
(335, 167, 87, 2, 9, 9, 1, 40, 0),
(345, 414, 103, 1, 9, 9, 3, 50, 0),
(349, 118, 308, 1, 9, 9, 5, 35, 0),
(352, 405, 228, 3, 9, 9, 1, 45, 0),
(353, 127, 239, 1, 9, 9, 1, 50, 0),
(355, 410, 122, 1, 9, 9, 5, 45, 0),
(357, 126, 196, 1, 9, 9, 3, 50, 0),
(359, 406, 201, 1, 9, 9, 3, 50, 0),
(368, 159, 239, 2, 9, 9, 1, 40, 0),
(369, 409, 113, 1, 9, 9, 3, 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `kode_jurusan` int(5) NOT NULL,
  `id_prodi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kode`, `nama_prodi`, `kode_jurusan`, `id_prodi`) VALUES
(9, 'Teknik Informatika', 1, 'TI11');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penjadwalan`
--

CREATE TABLE `riwayat_penjadwalan` (
  `kode` int(11) NOT NULL,
  `kode_pengampu` int(10) NOT NULL,
  `kode_hari` int(5) NOT NULL,
  `kode_jam` int(5) NOT NULL,
  `kode_ruang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `riwayat_penjadwalan`
--

INSERT INTO `riwayat_penjadwalan` (`kode`, `kode_pengampu`, `kode_hari`, `kode_jam`, `kode_ruang`) VALUES
(627, 282, 1, 6, 48),
(628, 369, 1, 7, 56),
(629, 267, 1, 8, 29),
(630, 330, 1, 8, 51),
(631, 333, 1, 8, 30),
(632, 352, 1, 8, 49),
(633, 359, 2, 5, 53),
(634, 355, 2, 6, 53),
(635, 332, 2, 6, 49),
(636, 345, 2, 6, 48),
(637, 264, 2, 7, 28),
(638, 323, 2, 7, 52),
(639, 328, 2, 7, 55),
(640, 287, 2, 8, 50),
(641, 305, 2, 8, 49),
(642, 286, 3, 7, 56),
(643, 312, 3, 7, 55),
(644, 322, 3, 7, 51),
(645, 329, 3, 7, 54),
(646, 359, 3, 8, 56),
(647, 281, 3, 8, 30),
(648, 285, 3, 8, 57),
(649, 310, 3, 8, 55),
(650, 359, 4, 5, 52),
(651, 369, 4, 7, 52),
(652, 283, 4, 7, 49),
(653, 284, 4, 8, 51),
(654, 311, 4, 8, 53),
(655, 334, 4, 8, 54),
(656, 369, 5, 5, 49),
(657, 304, 5, 5, 56),
(658, 308, 5, 5, 57),
(659, 331, 5, 5, 50),
(660, 307, 5, 15, 56);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `kode` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kapasitas` int(10) DEFAULT NULL,
  `jenis` enum('TEORI','LABORATORIUM') DEFAULT NULL,
  `kode_jurusan` int(5) NOT NULL,
  `lantai` int(3) NOT NULL,
  `id_ruang` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`kode`, `nama`, `kapasitas`, `jenis`, `kode_jurusan`, `lantai`, `id_ruang`) VALUES
(28, 'B303', 50, 'TEORI', 1, 3, 'R0'),
(29, 'B404', 50, 'TEORI', 1, 1, 'R1'),
(30, 'B304', 50, 'TEORI', 1, 3, 'R2'),
(48, 'B203', 50, 'TEORI', 1, 2, 'R3'),
(49, 'B204', 50, 'TEORI', 1, 1, 'R4'),
(50, 'aula', 50, 'TEORI', 1, 1, 'R5'),
(51, 'B401', 50, 'TEORI', 1, 4, 'R6'),
(52, 'B402', 50, 'TEORI', 1, 4, 'R7'),
(53, 'B405', 50, 'TEORI', 1, 4, 'R8'),
(54, 'B301', 50, 'TEORI', 1, 3, 'R9'),
(55, 'B302', 50, 'TEORI', 1, 3, 'R10'),
(56, 'B305', 50, 'TEORI', 1, 3, 'R11'),
(57, 'B403', 50, 'TEORI', 1, 4, 'R12');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `kode` int(2) NOT NULL,
  `nama_semester` varchar(10) NOT NULL,
  `semester_tipe` int(10) NOT NULL,
  `id_semester` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`kode`, `nama_semester`, `semester_tipe`, `id_semester`) VALUES
(1, 'I', 1, 'S01'),
(2, 'II', 2, 'S02'),
(3, 'III', 1, 'S03'),
(4, 'IV', 2, 'S04'),
(5, 'V', 1, 'S05'),
(6, 'VI', 2, 'S06'),
(7, 'VII', 1, 'S07'),
(11, 'VIII', 2, 'S08');

-- --------------------------------------------------------

--
-- Table structure for table `semester_tipe`
--

CREATE TABLE `semester_tipe` (
  `kode` int(2) NOT NULL,
  `tipe_semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `semester_tipe`
--

INSERT INTO `semester_tipe` (`kode`, `tipe_semester`) VALUES
(1, 'GANJIL'),
(2, 'GENAP');

-- --------------------------------------------------------

--
-- Table structure for table `status_dosen`
--

CREATE TABLE `status_dosen` (
  `kode` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `status_dosen`
--

INSERT INTO `status_dosen` (`kode`, `status`) VALUES
(1, 'Normal'),
(2, 'Lansia'),
(3, 'Bumil'),
(4, 'Difabel');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `kode` int(10) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`kode`, `tahun`) VALUES
(9, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode` int(2) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode`, `email`, `password`, `nama`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'alex@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'alex');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tidak_bersedia`
--

CREATE TABLE `waktu_tidak_bersedia` (
  `kode` int(10) NOT NULL,
  `kode_guru` int(10) DEFAULT NULL,
  `kode_hari` int(10) DEFAULT NULL,
  `kode_jam` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `guru_ibfk_1` (`status_dosen`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `jadwalpelajaran`
--
ALTER TABLE `jadwalpelajaran`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `jadwalpelajaran_ibfk_1` (`kode_pengampu`),
  ADD KEY `kode_jam` (`kode_jam`),
  ADD KEY `kode_hari` (`kode_hari`),
  ADD KEY `kode_ruang` (`kode_ruang`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `jam2`
--
ALTER TABLE `jam2`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `matapelajaran_ibfk_1` (`semester`),
  ADD KEY `matapelajaran_ibfk_2` (`kode_prodi`);

--
-- Indexes for table `pengampu`
--
ALTER TABLE `pengampu`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `tahun_akademik` (`tahun_akademik`),
  ADD KEY `kode_prodi` (`kode_prodi`),
  ADD KEY `semester` (`semester`),
  ADD KEY `kode_ruang` (`kode_ruang`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `prodi_ibfk_1` (`kode_jurusan`);

--
-- Indexes for table `riwayat_penjadwalan`
--
ALTER TABLE `riwayat_penjadwalan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `riwayat_penjadwalan_ibfk_4` (`kode_pengampu`),
  ADD KEY `riwayat_penjadwalan_ibfk_3` (`kode_hari`),
  ADD KEY `riwayat_penjadwalan_ibfk_2` (`kode_jam`),
  ADD KEY `riwayat_penjadwalan_ibfk_1` (`kode_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `ruang_ibfk_1` (`kode_jurusan`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `semester_ibfk_1` (`semester_tipe`);

--
-- Indexes for table `semester_tipe`
--
ALTER TABLE `semester_tipe`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `status_dosen`
--
ALTER TABLE `status_dosen`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `waktu_tidak_bersedia`
--
ALTER TABLE `waktu_tidak_bersedia`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `waktu_tidak_bersedia_ibfk_2` (`kode_guru`),
  ADD KEY `waktu_tidak_bersedia_ibfk_1` (`kode_hari`),
  ADD KEY `waktu_tidak_bersedia_ibfk_3` (`kode_jam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `kode` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwalpelajaran`
--
ALTER TABLE `jadwalpelajaran`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jam2`
--
ALTER TABLE `jam2`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT for table `pengampu`
--
ALTER TABLE `pengampu`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat_penjadwalan`
--
ALTER TABLE `riwayat_penjadwalan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `kode` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `semester_tipe`
--
ALTER TABLE `semester_tipe`
  MODIFY `kode` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_dosen`
--
ALTER TABLE `status_dosen`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `waktu_tidak_bersedia`
--
ALTER TABLE `waktu_tidak_bersedia`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`status_dosen`) REFERENCES `status_dosen` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD CONSTRAINT `matapelajaran_ibfk_1` FOREIGN KEY (`semester`) REFERENCES `semester_tipe` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matapelajaran_ibfk_2` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
