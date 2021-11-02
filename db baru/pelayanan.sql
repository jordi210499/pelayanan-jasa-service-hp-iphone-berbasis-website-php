-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2021 pada 15.49
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_jasa`
--

CREATE TABLE `booking_jasa` (
  `id_booking` varchar(10) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `type_iphone` varchar(20) NOT NULL,
  `kerusakan` text NOT NULL,
  `keluhan_kerusakan` text NOT NULL,
  `alamat_customer` text NOT NULL,
  `pilih_lokasi_cod` varchar(30) NOT NULL,
  `tgl_booking` date NOT NULL,
  `gambar_buktitf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking_jasa`
--

INSERT INTO `booking_jasa` (`id_booking`, `nama_customer`, `type_iphone`, `kerusakan`, `keluhan_kerusakan`, `alamat_customer`, `pilih_lokasi_cod`, `tgl_booking`, `gambar_buktitf`) VALUES
('bkg001', 'hans vito', 'iphone 6g', ' Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 'LCD Retak', 'Prumahan Griya Permata Cisoka', 'MCD Citra Raya', '2021-09-19', '523-Asli-atau-Palsu.jpg'),
('bkg002', 'Ahmad Jordi Untoro', 'iphone 8plus', ' Mati Total ', 'tidak bisa hidup', 'Prumahan Griya Permata Cisoka', 'MCD Citra Raya', '2021-09-19', '61631bukti-transfer.jpg'),
('bkg003', 'Alle Muhammad', 'iphone 7plus', '  Batre.', 'gendut', 'nyompok sebrang', 'MCD Citra Raya', '2021-09-26', '22731bukti-transfer.jpg'),
('bkg004', 'mm', 'iphone 6s', ' Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 'nn', 'bb', 'MCD SuperMall Karawaci', '2021-09-27', '69528a-4a2e594e376a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `harga`) VALUES
(4, 'Pasang Infus Printer', 50000),
(5, 'Install Windows 10', 35000),
(6, 'Penggantian LCD (Harga Mulai)', 400000),
(7, 'Ganti Keyboard', 150000),
(8, 'Menambah RAM 8gb', 225000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_hp`
--

CREATE TABLE `detail_hp` (
  `id_detail` int(10) NOT NULL,
  `merk_hp` varchar(20) NOT NULL,
  `gambar_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama_gambar`) VALUES
(14, '1.jpg'),
(15, '2.jpg'),
(16, '3.jpg'),
(17, '4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE `hp` (
  `id_hp` int(10) NOT NULL,
  `merk_hp` varchar(20) NOT NULL,
  `gambar_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`id_hp`, `merk_hp`, `gambar_hp`) VALUES
(1, 'iphone', 'i_phone12.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone5`
--

CREATE TABLE `iphone5` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone5`
--

INSERT INTO `iphone5` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, '1. Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 3000000),
(2, '2.  Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).', 3000000),
(3, '3.  Back Camera (Kamera Belang)', 3000000),
(4, '4.  Buzzer (Speaker Music).', 300000),
(5, '5.Batre', 300000),
(6, '6.  Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.', 300000),
(7, '7.  Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang.', 300000),
(8, '8.  Antena Wifi (Lemah).', 300000),
(9, '9.  Vibrator (Getar).', 350000),
(10, '10.  Mati Total.', 300000),
(11, '11.  Stuck itunes (Recovery – DFU).', 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone6`
--

CREATE TABLE `iphone6` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` varchar(50) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone6`
--

INSERT INTO `iphone6` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'I phone 6g,6s : LCD', 300000),
(2, 'iphone 6plus : bootloop', 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone6g`
--

CREATE TABLE `iphone6g` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone6g`
--

INSERT INTO `iphone6g` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 400000),
(2, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 250000),
(3, 'Back Camera (Kamera Belang) ', 200000),
(4, 'Buzzer (Speaker Music). ', 150000),
(5, 'Batre', 350000),
(6, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 170000),
(7, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang,', 175000),
(8, 'Antena Wifi (Lemah). ', 135000),
(9, 'Vibrator (Getar). ', 100000),
(10, 'Mati Total \r\nStuck itunes (Recovery – DFU)\r\n', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone6plus`
--

CREATE TABLE `iphone6plus` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone6plus`
--

INSERT INTO `iphone6plus` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 440000),
(2, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 260000),
(3, 'Back Camera (Kamera Belang) 220.000', 220000),
(4, 'Buzzer (Speaker Music). ', 160000),
(5, 'Batre. ', 375000),
(6, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 175000),
(7, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang,', 200000),
(8, 'Antena Wifi (Lemah). ', 145000),
(9, 'Vibrator (Getar). ', 120000),
(10, 'Mati Total \r\n\r\n', 500000),
(11, 'Stuck itunes (Recovery – DFU)\r\n\r\n', 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone6s`
--

CREATE TABLE `iphone6s` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone6s`
--

INSERT INTO `iphone6s` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 440000),
(2, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).', 260000),
(3, 'Back Camera (Kamera Belang) ', 260000),
(4, 'Buzzer (Speaker Music).', 160000),
(5, ' Batre.', 375000),
(6, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.', 175000),
(7, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 200000),
(8, 'Antena Wifi (Lemah). ', 145000),
(9, 'Vibrator (Getar). ', 120000),
(10, 'Mati Total', 500000),
(11, 'Stuck itunes (Recovery – DFU)\r\n', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone7`
--

CREATE TABLE `iphone7` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone7`
--

INSERT INTO `iphone7` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 470000),
(2, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker)', 290000),
(3, 'Back Camera (Kamera Belang) ', 550000),
(4, 'Buzzer (Speaker Music).', 180000),
(5, ' Batre. ', 385000),
(6, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.', 185000),
(7, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 220000),
(8, 'Antena Wifi (Lemah).', 155000),
(9, 'Vibrator (Getar). ', 130000),
(10, 'Mati Total \r\nStuck itunes (Recovery – DFU)\r\n', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone7plus`
--

CREATE TABLE `iphone7plus` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone7plus`
--

INSERT INTO `iphone7plus` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 470000),
(2, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).', 330000),
(3, 'Back Camera (Kamera Belakang) ', 850000),
(4, 'Buzzer (Speaker Music). ', 200000),
(5, ' Batre. ', 430000),
(6, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 200000),
(7, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(8, 'Antena Wifi (Lemah). ', 175000),
(9, 'Vibrator (Getar). ', 150000),
(10, 'Mati Total \r\nStuck itunes (Recovery – DFU)\r\n', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone8`
--

CREATE TABLE `iphone8` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone8`
--

INSERT INTO `iphone8` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 530000),
(2, 'Back Glass (Kaca Belakang) ', 300000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 350000),
(4, 'Back Camera (Kamera Belakang) ', 850000),
(5, 'Buzzer (Speaker Music). ', 200000),
(6, ' Batre. ', 430000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 230000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 200000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total \r\nStuck itunes (Recovery – DFU)\r\n', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone8plus`
--

CREATE TABLE `iphone8plus` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone8plus`
--

INSERT INTO `iphone8plus` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(4, 'Back Camera (Kamera Belakang) ', 950000),
(5, 'Buzzer (Speaker Music). ', 220000),
(6, ' Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total \r\nStuck itunes (Recovery – DFU)\r\n', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone11`
--

CREATE TABLE `iphone11` (
  `id_kerusakan` int(20) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone11`
--

INSERT INTO `iphone11` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 250000),
(2, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). @150.000', 150000),
(3, 'Buzzer (Speaker Music). ', 110000),
(4, 'Batre. ', 150000),
(5, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 125000),
(6, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 125000),
(7, 'Antena Wifi (Lemah). ', 125000),
(8, 'Vibrator (Getar). ', 75000),
(9, 'Mati Total ', 0),
(10, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone11pro`
--

CREATE TABLE `iphone11pro` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone11pro`
--

INSERT INTO `iphone11pro` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 530000),
(2, 'Back Glass (Kaca Belakang) 300.000', 300000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 350000),
(4, 'Back Camera (Kamera Belakang) ', 850000),
(5, 'Buzzer (Speaker Music).', 200000),
(6, 'Batre. 430.000', 430000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.', 230000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 200000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total ', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone11promax`
--

CREATE TABLE `iphone11promax` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone11promax`
--

INSERT INTO `iphone11promax` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD.', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(4, 'Back Camera (Kamera Belakang) ', 950000),
(5, 'Buzzer (Speaker Music). ', 220000),
(6, ' Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar).', 150000),
(11, 'Mati Total ', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone12`
--

CREATE TABLE `iphone12` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone12`
--

INSERT INTO `iphone12` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang)', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).', 370000),
(4, 'Back Camera (Kamera Belakang)', 950000),
(5, 'Buzzer (Speaker Music).', 220000),
(6, ' Batre.', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar).', 150000),
(11, 'Mati Total ', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone12pro`
--

CREATE TABLE `iphone12pro` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone12pro`
--

INSERT INTO `iphone12pro` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).', 370000),
(4, 'Back Camera (Kamera Belakang)', 950000),
(5, 'Buzzer (Speaker Music). 220.000', 220000),
(6, 'Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphone12promax`
--

CREATE TABLE `iphone12promax` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphone12promax`
--

INSERT INTO `iphone12promax` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(4, 'Back Camera (Kamera Belakang) ', 950000),
(5, 'Buzzer (Speaker Music). ', 220000),
(6, ' Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang. ', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total ', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphonex`
--

CREATE TABLE `iphonex` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphonex`
--

INSERT INTO `iphonex` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(4, 'Back Camera (Kamera Belakang) ', 950000),
(5, 'Buzzer (Speaker Music). ', 220000),
(6, ' Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total ', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphonexr`
--

CREATE TABLE `iphonexr` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphonexr`
--

INSERT INTO `iphonexr` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(4, 'Back Camera (Kamera Belakang) ', 950000),
(5, 'Buzzer (Speaker Music). ', 220000),
(6, ' Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total ', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphonexs`
--

CREATE TABLE `iphonexs` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphonexs`
--

INSERT INTO `iphonexs` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(4, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(5, 'Back Camera (Kamera Belakang) ', 950000),
(6, 'Buzzer (Speaker Music). ', 220000),
(7, ' Batre. ', 450000),
(8, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(9, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(10, 'Antena Wifi (Lemah). ', 230000),
(11, 'Vibrator (Getar). ', 150000),
(12, 'Mati Total', 0),
(13, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphonexsmax`
--

CREATE TABLE `iphonexsmax` (
  `id_kerusakan` int(10) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphonexsmax`
--

INSERT INTO `iphonexsmax` (`id_kerusakan`, `jenis_kerusakan`, `harga`) VALUES
(1, 'Glass (Kaca), touchscreen (Layar Sentuh), LCD. ', 550000),
(2, 'Back Glass (Kaca Belakang) ', 350000),
(3, 'Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). ', 370000),
(4, 'Back Camera (Kamera Belakang) ', 950000),
(5, 'Buzzer (Speaker Music). ', 220000),
(6, ' Batre. ', 450000),
(7, 'Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. ', 250000),
(8, 'Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang, ', 250000),
(9, 'Antena Wifi (Lemah). ', 230000),
(10, 'Vibrator (Getar). ', 150000),
(11, 'Mati Total', 0),
(12, 'Stuck itunes (Recovery – DFU)', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_identitas` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`no_identitas`, `nama`, `alamat`, `no_hp`) VALUES
('154642', 'mm', 'nn', '081285929774'),
('19950313', 'Hans Vito', 'Perumahan Griya Permata Cisoka, Kab.Tangerang', '08124854228'),
('19990421', 'Jordi Untoro', 'Perumahan Griya Permata Cisoka, Kab.Tangerang', '081285929779'),
('19990721', 'Alle Muhammad', 'Tangerang', '081285929778');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(10) NOT NULL,
  `no_pelanggan` varchar(225) NOT NULL,
  `no_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `no_pelanggan`, `no_transaksi`) VALUES
(3, '19950313', '20180202140434'),
(7, '19990421', '20210830220925'),
(8, '19990721', '20210925143434'),
(9, '19990721', '20210925150507'),
(10, '154642', '20210925154753');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_user`
--

CREATE TABLE `st_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_user`
--

INSERT INTO `st_user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Hans Vito', 'staff', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sup_user`
--

CREATE TABLE `sup_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sup_user`
--

INSERT INTO `sup_user` (`id`, `nama`, `username`, `password`) VALUES
(9, 'ikids Service', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `invoice` varchar(50) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `estimasi` varchar(50) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `kelengkapan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `biaya` int(25) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `nama_pengambil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`invoice`, `tanggal_masuk`, `nama_barang`, `estimasi`, `nama_pemilik`, `alamat`, `no_hp`, `keluhan`, `kelengkapan`, `keterangan`, `status`, `biaya`, `tanggal_selesai`, `nama_pengambil`) VALUES
('20180202140434', '2018-02-02', 'Printer Epson', '2 Hari', 'Kurnia Wahyu Lestari', 'Sorong', '08124854228', 'Pemasangan Refill', 'Power Supply dan Kardus', '-', 'Pemeriksaan Awal', 250000, '2021-08-30', 'hans'),
('20210830220925', '2021-08-30', 'i phone x', '2 hari', 'Jordi Untoro', 'Perumahan Griya Permata Cisoka, Kab.Tangerang', '081285929779', 'LCD retak', 'fullset', 'Baik', 'proses awal', 300000, '0000-00-00', ''),
('20210925143434', '2021-09-25', 'i phone x', '30-45 menit', 'Alle Muhammad', 'Tangerang', '081285929778', 'mati total', 'fullset', 'jatoh', 'Pemeriksaan Awal', 3000000, '2021-09-25', 'hans'),
('20210925150507', '2021-09-25', 'i phone x', '30-45 menit', 'Alle Muhammad', 'Tangerang', '081285929778', 'mati total', 'fullset', 'jatoh', 'Barang sudah bisa diambil', 300000, '2021-09-25', 'hans'),
('20210925154753', '2021-09-25', 'i phone x', '30-45 menit', 'mm', 'nn', '081285929774', 'sinyal ilang', 'fullset', 'tiba tiba ilang', 'Pemeriksaan Awal', 250000, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tulisan`
--

CREATE TABLE `tulisan` (
  `id` int(5) NOT NULL,
  `nama_web` varchar(25) DEFAULT NULL,
  `url` text,
  `telepon` varchar(25) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tulisan`
--

INSERT INTO `tulisan` (`id`, `nama_web`, `url`, `telepon`, `alamat`) VALUES
(1, 'Hans Vito i kids', 'https://g.page/ikids_service?gm', '085288855897\r\n\r\n', 'Perum griya permata cisoka blok b9 no 3 rt 05 rw 07 cibugel, cisoka tangerang banten 15730. (depan masjid al-muhajirin) ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking_jasa`
--
ALTER TABLE `booking_jasa`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_hp`
--
ALTER TABLE `detail_hp`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `iphone5`
--
ALTER TABLE `iphone5`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone6`
--
ALTER TABLE `iphone6`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone6g`
--
ALTER TABLE `iphone6g`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone6plus`
--
ALTER TABLE `iphone6plus`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone6s`
--
ALTER TABLE `iphone6s`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone7`
--
ALTER TABLE `iphone7`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone7plus`
--
ALTER TABLE `iphone7plus`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone8`
--
ALTER TABLE `iphone8`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone8plus`
--
ALTER TABLE `iphone8plus`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone11`
--
ALTER TABLE `iphone11`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphone12`
--
ALTER TABLE `iphone12`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphonex`
--
ALTER TABLE `iphonex`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphonexr`
--
ALTER TABLE `iphonexr`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphonexs`
--
ALTER TABLE `iphonexs`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `iphonexsmax`
--
ALTER TABLE `iphonexsmax`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `no_pelanggan` (`no_pelanggan`),
  ADD KEY `no_transaksi` (`no_transaksi`);

--
-- Indeks untuk tabel `st_user`
--
ALTER TABLE `st_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sup_user`
--
ALTER TABLE `sup_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`invoice`);

--
-- Indeks untuk tabel `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `st_user`
--
ALTER TABLE `st_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sup_user`
--
ALTER TABLE `sup_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`no_pelanggan`) REFERENCES `pelanggan` (`no_identitas`),
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`invoice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
