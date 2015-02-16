-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2015 at 05:08 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lapor_tamanbdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text,
  `email` text NOT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama`, `alamat`, `email`, `no_tlp`, `username`, `password`) VALUES
(1, 'Kanya Paramita', 'Jalan Tilil no 1 Bandung 40133', 'kanyaparamita@gmail.com', '081214414146', 'kanyap', 'kanyap'),
(2, 'Vidia Anindhita', 'Jalan Tilil no 2 Bandung 40133', 'anindhitavidia@gmail.com', '081122343456', 'kaito', 'kaito'),
(3, 'Riady Sastra Kusuma', 'Jalan Tilil no 3 Bandung 40133', 'riady_sk@yahoo.com', '081214414135', 'kudy', 'kudy');

-- --------------------------------------------------------

--
-- Table structure for table `t_adu`
--

CREATE TABLE IF NOT EXISTS `t_adu` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengadu` text NOT NULL,
  `email_pengadu` text,
  `kategori` int(11) NOT NULL DEFAULT '0',
  `konten` text NOT NULL,
  `status` int(11) NOT NULL,
  `id_mengenai` int(11) NOT NULL,
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `t_adu`
--

INSERT INTO `t_adu` (`id_pengaduan`, `nama_pengadu`, `email_pengadu`, `kategori`, `konten`, `status`, `id_mengenai`) VALUES
(1, 'Yanfa Adi Putra', 'yanfa.adiputra@gmail.com', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1),
(2, 'Riva Syafri', 'riva@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1),
(3, 'Yanfa Adi Putra', 'yanfa.adiputra@gmail.com', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1),
(4, 'Riva Syafri', 'riva@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1),
(5, 'Ahmad Harkos', 'ahmad_suka_harkos@gmail.com', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 6),
(6, 'Ahmad PHP', 'ahmad_tukang_php@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 4),
(7, 'Ahmad Harapan Palsu', 'ahmad_pemberi_harapan_palsu@gmail.com', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 2),
(8, 'Ahmad Satu', 'ahmad_tukang_php@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1),
(9, 'Ahmad Dua Palsu', 'ahmad_pemberi_harapan_palsu@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 2),
(10, 'Ahmad Harapan Tiga', 'ahmad_pemberi_harapan_palsu@gmail.com', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 5),
(11, 'Ahmad Empat Palsu', 'ahmad_pemberi_harapan_palsu@gmail.com', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 3),
(12, 'Ahmad Lima Palsu', 'ahmad_pemberi_harapan_palsu@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 2),
(13, 'Ahmad Satu Freak', 'ahmad_tukang_php@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1),
(14, 'Ahmad Dua Freak', 'ahmad_pemberi_harapan_palsu@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 2),
(15, 'Ahmad Tiga Freak', 'ahmad_pemberi_harapan_palsu@gmail.com', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 5),
(16, 'Ahmad Empat Freak', 'ahmad_pemberi_harapan_palsu@gmail.com', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 3),
(17, 'Ahmad Lima Freak', 'ahmad_pemberi_harapan_palsu@gmail.com', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_instansi`
--

CREATE TABLE IF NOT EXISTS `t_instansi` (
  `id_instansi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_instansi`
--

INSERT INTO `t_instansi` (`id_instansi`, `nama`, `email`) VALUES
(1, 'Divisi Pohon Kota Bandung', 'pohon@pemkotbdg.org'),
(2, 'Divisi Rumput Kota Bandung', 'rumput@pemkotbdg.org'),
(3, 'Divisi Daun Kota Bandung', 'daun@pemkotbdg.org'),
(4, 'Divisi Batang Kota Bandung', 'batang@pemkotbdg.org'),
(5, 'Divisi Bunga Kota Bandung', 'bunga@pemkotbdg.org');

-- --------------------------------------------------------

--
-- Table structure for table `t_taman`
--

CREATE TABLE IF NOT EXISTS `t_taman` (
  `id_taman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `id_berwenang` int(11) NOT NULL,
  PRIMARY KEY (`id_taman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t_taman`
--

INSERT INTO `t_taman` (`id_taman`, `nama`, `alamat`, `id_berwenang`) VALUES
(1, 'Taman Film', 'Jalan Film no 1 Bandung', 1),
(2, 'Taman Jomblo', 'Jalan Jomblo no 1 Bandung', 2),
(3, 'Taman Superhero', 'Jalan Superhero no 1 Bandung', 3),
(4, 'Taman Lansia', 'Jalan Lansia no 1 Bandung', 2),
(5, 'Taman Hewan', 'Jalan Hewan no 1 Bandung', 1),
(6, 'Taman Panatayudha', 'Jalan Eyah no 1 Bandung', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
