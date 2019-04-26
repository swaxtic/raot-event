-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Apr 2019 pada 21.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raot-event`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `idEvent` int(11) NOT NULL,
  `nm_event` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `game` varchar(28) NOT NULL,
  `platform` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` text NOT NULL,
  `rules` text NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `mode` tinyint(1) NOT NULL,
  `uplink` int(5) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`idEvent`, `nm_event`, `foto`, `game`, `platform`, `tgl`, `deskripsi`, `rules`, `alamat`, `mode`, `uplink`, `tgl_upload`) VALUES
(1, 'TOURNAMENT DOTA', '542-dota1.jpg', 'Nama game contoh', 'platform contoh', '0000-00-00', 'Contoh Deskripsi Event', 'Contoh Rules Event', 'jl. contoh', 1, 2, '0000-00-00'),
(2, 'MEISTER DIVISION ROOKIES Dota 2 Online Tournament', '9335-dota.jpg', 'Nama game contoh', 'platform contoh', '0000-00-00', 'Contoh Deskripsi Event', 'Contoh Rules Event', 'jl. contoh', 1, 2, '0000-00-00'),
(13, 'Mobile Legend HCP(Online Tournament)', '792-ml333.jpg', 'Mobile Legend', 'Mobile', '2019-05-31', 'Desk', 'Rules', 'Online', 1, 2, '2019-04-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panitia`
--

CREATE TABLE `panitia` (
  `nick` varchar(16) NOT NULL,
  `nama` varchar(28) NOT NULL,
  `email` varchar(28) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_panitia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panitia`
--

INSERT INTO `panitia` (`nick`, `nama`, `email`, `pass`, `id_panitia`) VALUES
('Sandy', 'Sandy', 'sandydwi75@gmail.com', '0ddd63424b5af786fdd47bcc9209bcf3', 12),
('raot', 'Raot', 'raot@raot.com', '974fd02a39f94ff7180fff16b3358212', 14),
('swaxtic', 'Swaxtic Hub', 'swaxtic@raot.id', '2e33a9b0b06aa0a01ede70995674ee23', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
