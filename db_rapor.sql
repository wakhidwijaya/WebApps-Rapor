-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2019 at 01:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

DROP TABLE IF EXISTS `tb_guru`;
CREATE TABLE IF NOT EXISTS `tb_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `mapel` int(11) NOT NULL,
  PRIMARY KEY (`nip`) USING BTREE,
  UNIQUE KEY `id_guru` (`id_guru`) USING BTREE,
  KEY `mapel` (`mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `status`, `mapel`) VALUES
(1, 2019, 'Sutisna', 1, 'Bantul', '1972-03-21', 'Bantul', 1, 1),
(17, 1002952, 'eko pramono', 1, 'sleman', '1975-02-05', 'nglaban,sinduharjo,ngaglik,sleman', 2, 35),
(18, 1002953, 'nita amalia', 2, 'jepara', '1990-05-09', 'pedadk,sinduharjo,ngaglik,sleman', 2, 2),
(12, 1002955, 'Ahmad Fauzi', 1, 'sleman', '1985-02-05', 'karang lo,sardonohaarjo,ngaglik,sleman', 1, 2),
(15, 1002956, 'sukendar', 1, 'kulon progo', '1973-11-13', 'gentan,sardonoharjo,ngaglik,sleman', 2, 34),
(14, 1002957, 'siti mariah', 2, 'bantul', '1979-03-13', 'ngankruk,sardonoharjo,ngaglik,sleman', 1, 32),
(13, 1002958, 'Sri Nurbianti', 2, 'sleman', '1980-03-10', 'ngepas lor,donoharjo,ngaglik,sleman', 2, 31),
(16, 1002959, 'esti paramita', 2, 'bantul', '1990-02-06', 'clumprit,sardonoharjo,ngaglik,sleman', 2, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(2) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, '7A'),
(5, '7B'),
(6, '7C'),
(7, '7D'),
(8, '8A'),
(9, '8B'),
(10, '8C'),
(11, '8D'),
(12, '9A'),
(13, '9B'),
(14, '9C'),
(15, '9D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

DROP TABLE IF EXISTS `tb_mapel`;
CREATE TABLE IF NOT EXISTS `tb_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` int(4) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `kode_mapel`, `mapel`) VALUES
(1, 1, 'Bahasa Indonesia'),
(2, 2, 'Matematika'),
(31, 3, 'Bahasa Inggris'),
(32, 4, 'Ilmu Pengetahuan Alam'),
(33, 5, 'Ilmu Pengetahuan Sosial'),
(34, 6, 'Pendidikan Agama'),
(35, 7, 'Penjaskes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_siswa` (`id_siswa`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`),
  KEY `kelas` (`kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_siswa`, `id_guru`, `id_mapel`, `nilai`, `kelas`, `semester`) VALUES
(1, 1530, 1, 1, 75, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int(5) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `wali_murid` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `kelas` (`kelas`),
  KEY `tb_siswa_ibfk_2` (`wali_murid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `kelas`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `wali_murid`, `status`) VALUES
(1530, 'Wakhid Wijaya', 1, 1, 'Bantul', '1998-03-24', 'Mandungan RT 03 Srimartani Piyungan Bantul Yogyakarta', 1, 1),
(1531, 'hamid effendi', 1, 1, 'sleman', '2000-02-05', 'tegal mindi, sardonoharjo,ngaglik,sleman', 1, 2),
(1532, 'lincah wibowo', 1, 1, 'sleman', '2000-04-02', 'tegal mindi, sardonoharjo,ngaglik,sleman', 1, 1),
(1533, 'anggit ahmadi', 1, 1, 'sleman', '2000-01-15', 'tegal mindi, sardonoharjo,ngaglik,sleman', 1, 1),
(1534, 'linda anjani', 1, 2, 'sleman', '2000-05-09', 'tegal mindi, sardonoharjo,ngaglik,sleman', 1, 1),
(1535, 'anggra bella', 1, 2, 'sleman', '2000-04-12', 'tegal mindi, sardonoharjo,ngaglik,sleman', 1, 1),
(1536, 'PRABANDANA ARDI LISTYANTO', 1, 0, 'sleman', '2000-02-05', 'sleman', 1, 0),
(1537, 'ATIBHRATA MAHARDIKA NUSANTARA', 1, 0, 'sleman', '2000-04-02', 'sleman', 1, 0),
(1538, 'SAMION NUHUYANAN', 1, 0, 'sleman', '2000-01-15', 'sleman', 1, 0),
(1539, 'REDHA SAFARA', 1, 1, 'sleman', '2000-05-09', 'sleman', 1, 0),
(1540, 'RAHMAWAN', 5, 1, 'bantul', '2000-02-05', 'sleman', 12, 0),
(1541, 'PASKALIS ARIEF PAMUNGKAS ADRIAN', 5, 1, 'sleman', '2000-04-02', 'sleman', 12, 0),
(1542, 'HIDAYATUL FAUZI', 5, 0, 'sleman', '2000-01-15', 'sleman', 12, 0),
(1543, 'MUCHAMAD NUR SHOIM', 5, 0, 'bantul', '2000-05-09', 'sleman', 12, 0),
(1544, 'MONA RIDHALIANI', 5, 1, 'sleman', '2000-04-12', 'sleman', 12, 0),
(1545, 'GEMA WIGUNA AKBAR', 5, 0, 'sleman', '2000-02-05', 'sleman', 12, 0),
(1546, 'FIO PRASETYO', 5, 0, 'sleman', '2000-04-02', 'sleman', 12, 0),
(1547, 'RIZKY PERMANA A', 5, 0, 'sleman', '2000-01-15', 'sleman', 12, 0),
(1548, 'FAHMI HIDAYAT', 5, 1, 'bantul', '2000-05-09', 'sleman', 12, 0),
(1549, 'MUHAMMAD SYAHRIAL SHOBRI', 5, 0, 'sleman', '2000-04-12', 'sleman', 12, 0),
(1550, 'ISMAIL HASAN MISBACHI', 6, 0, 'bantul', '2000-02-05', 'sleman', 13, 0),
(1551, 'BAGUS AMRULLAH F F', 6, 0, 'sleman', '2000-04-02', 'sleman', 13, 0),
(1552, 'YUSUF ASHIDICKI PRADANA', 6, 0, 'sleman', '2000-01-15', 'sleman', 13, 0),
(1553, 'EDWIN RAHMAD TOHA', 6, 0, 'bantul', '2000-05-09', 'sleman', 13, 0),
(1554, 'PRAMITHA AINA ISHARYANI', 6, 1, 'sleman', '2000-04-12', 'sleman', 13, 0),
(1555, 'MAGARETA DESI', 6, 1, 'bantul', '2000-02-05', 'sleman', 13, 0),
(1556, 'M REZA FAJAR ALFATOBI', 6, 0, 'sleman', '2000-04-02', 'sleman', 13, 0),
(1557, 'PUSPA PARAMA SHANTI', 6, 1, 'sleman', '2000-01-15', 'sleman', 13, 0),
(1558, 'KHUSNUL ADI PAMUNGKAS', 6, 0, 'sleman', '2000-05-09', 'sleman', 13, 0),
(1559, 'INSANUDDIN', 6, 1, 'sleman', '2000-04-12', 'sleman', 13, 0),
(1560, 'SHIDIQ PANGESTU', 7, 0, 'sleman', '2000-02-05', 'sleman', 14, 0),
(1561, 'SRI MEGA SAKTI', 7, 1, 'sleman', '2000-04-02', 'sleman', 14, 0),
(1562, 'FAJAR RIZKIANTORO', 7, 0, 'sleman', '2000-01-15', 'sleman', 14, 0),
(1563, 'AMIN LUMINTANG', 7, 0, 'sleman', '2000-05-09', 'sleman', 14, 0),
(1564, 'ASHA KURNIA', 7, 1, 'sleman', '2000-04-12', 'sleman', 14, 0),
(1565, 'SONY AJI REFANGGA', 7, 0, 'bantul', '2000-02-05', 'sleman', 14, 0),
(1566, 'HUDA FATKHUR RAHMAN', 7, 0, 'sleman', '2000-04-02', 'sleman', 14, 0),
(1567, 'HANIF RIZKI AKBAR', 7, 0, 'bantul', '2000-01-15', 'sleman', 14, 0),
(1568, 'GILANG ARIA PERMANA', 7, 0, 'sleman', '2000-05-09', 'sleman', 14, 0),
(1569, 'MISTHO\' KHITHOBI', 7, 0, 'sleman', '2000-04-12', 'sleman', 14, 0),
(1570, 'DHIYAULHAQ SHAFRI KAMALUDIN', 8, 1, 'sleman', '2000-02-05', 'sleman', 15, 0),
(1571, 'BUNGA PERMATA SARI', 8, 1, 'sleman', '2000-04-02', 'sleman', 15, 0),
(1572, 'JIHAD AKBAR A. ROYYANI', 8, 0, 'sleman', '2000-01-15', 'sleman', 15, 0),
(1573, 'MAHMUD ZAKARIYA ALFAROZY', 8, 0, 'sleman', '2000-05-09', 'sleman', 15, 0),
(1574, 'RIF\'AN ABDULLAH', 8, 0, 'sleman', '2000-04-12', 'sleman', 15, 0),
(1575, 'Yohanes Fredy Kurnia Laksono', 8, 0, 'sleman', '2000-02-05', 'sleman', 15, 0),
(1576, 'KHUSNUL ADI PAMUNGKAS', 8, 0, 'sleman', '2000-04-02', 'sleman', 15, 0),
(1577, 'THIO TANGKAS KALYJAGA ERZ', 8, 0, 'sleman', '2000-01-15', 'sleman', 15, 0),
(1578, 'ILHAM JAYA DERMAWAN', 8, 0, 'sleman', '2000-05-09', 'sleman', 15, 0),
(1579, 'SADEWO CATUR ANGGORO ADJI', 8, 0, 'sleman', '2000-04-12', 'sleman', 15, 0),
(1580, 'MUHAMAD FAUZY AWALUDIN', 9, 0, 'sleman', '2000-02-05', 'sleman', 16, 0),
(1581, 'KEVIN EKA PRATAMA', 9, 0, 'bantul', '2000-04-02', 'sleman', 16, 0),
(1582, 'I GEDE YOGA PRATAMA', 9, 0, 'bali', '2000-01-15', 'sleman', 16, 0),
(1583, 'ADITYA INDRA HANAWA', 9, 0, 'sleman', '2000-05-09', 'sleman', 16, 0),
(1584, 'DEXY ARNA', 9, 1, 'sleman', '2000-04-12', 'sleman', 16, 0),
(1585, 'HAYYIK LANAA ROSYADA', 9, 1, 'sleman', '2000-02-05', 'sleman', 16, 0),
(1586, 'CANDRA RAMADHAN PRASETYA', 9, 0, 'sleman', '2000-04-02', 'sleman', 16, 0),
(1587, 'AHMAD SIDDIKIE TAMIN', 9, 0, 'sleman', '2000-01-15', 'sleman', 16, 0),
(1588, 'MUHAMMAD NUR ARIFIN', 9, 0, 'sleman', '2000-05-09', 'sleman', 16, 0),
(1589, 'ANGGA KURNIAWAN', 9, 0, 'sleman', '2000-04-12', 'sleman', 16, 0),
(1590, 'AZHAR ASSA MAUDUDI', 10, 1, 'bantul', '2000-02-05', 'sleman', 17, 0),
(1591, 'Yhora Nur Farahma', 10, 1, 'sleman', '2000-04-02', 'sleman', 17, 0),
(1592, 'SEKAR INDAH PUSPITASARI', 10, 1, 'sleman', '2000-01-15', 'sleman', 17, 0),
(1593, 'ARINA MIFTAHUL HASANAH', 10, 1, 'sleman', '2000-05-09', 'sleman', 17, 0),
(1594, 'BOY CANDRA WIJAYA', 10, 0, 'sleman', '2000-04-12', 'sleman', 17, 0),
(1595, 'ARIF PUJI SETIAWAN', 10, 0, 'sleman', '2000-02-05', 'sleman', 17, 0),
(1596, 'MUHAMMAD RAFIH SIROJUL MUNIR', 10, 0, 'sleman', '2000-04-02', 'sleman', 17, 0),
(1597, 'ABINANZA TOHASUNAN NAUFAL', 10, 0, 'sleman', '2000-01-15', 'sleman', 17, 0),
(1598, 'DONNY SAFANUEL', 10, 0, 'sleman', '2000-05-09', 'sleman', 17, 0),
(1599, 'BAGUS YUDHA PRATAMA', 10, 0, 'sleman', '2000-04-12', 'sleman', 17, 0),
(1900, 'MUHAMMAD KHOIRUL ANAM', 11, 0, 'sleman', '2000-02-05', 'sleman', 18, 0),
(1901, 'MUHAMMAD BURHAN AULAWI', 11, 0, 'sleman', '2000-04-02', 'sleman', 18, 0),
(1902, 'ERDI AHMAD MUQOFI', 11, 0, 'sleman', '2000-01-15', 'sleman', 18, 0),
(1903, 'MUHAMMAD KURNIA IQBAL', 11, 0, 'sleman', '2000-05-09', 'sleman', 18, 0),
(1904, 'ILHAM BAYU SAHARA', 11, 0, 'sleman', '2000-04-12', 'sleman', 18, 0),
(1905, 'RADEN DODDY ARI KRISTANTO', 11, 0, 'sleman', '2000-02-05', 'sleman', 18, 0),
(1906, 'ANGGUN TRIA MARZELLA', 11, 1, 'sleman', '2000-04-02', 'sleman', 18, 0),
(1907, 'BAMBANG SEPTYONO NUGROHO PUTRO', 11, 0, 'sleman', '2000-01-15', 'sleman', 18, 0),
(1908, 'DICCO SURYO KARTIKO', 11, 0, 'sleman', '2000-05-09', 'sleman', 18, 0),
(1909, 'MUHAMMAD FAUZI', 11, 0, 'sleman', '2000-04-12', 'sleman', 18, 0),
(1910, 'EGA PRAYUDI', 12, 0, 'sleman', '2000-02-05', 'sleman', 1, 0),
(1911, 'INDRA MAHENDRA LESMANA', 12, 0, 'sleman', '2000-04-02', 'sleman', 1, 0),
(1912, 'ARIEF MIFTAKH', 12, 0, 'sleman', '2000-01-15', 'sleman', 1, 0),
(1913, 'TUHFATUSSALISAH', 12, 1, 'sleman', '2000-05-09', 'sleman', 1, 0),
(1914, 'MAHMUDDIN FAQIH ARDIANTO', 12, 0, 'sleman', '2000-04-12', 'sleman', 1, 0),
(1915, 'MEILANI PITALOKA', 12, 1, 'sleman', '2000-02-05', 'sleman', 1, 0),
(1916, 'ADITYA AHMAD ZEIN', 12, 0, 'sleman', '2000-04-02', 'sleman', 1, 0),
(1917, 'AJI MUHAMMAD GANES WISUDA', 12, 0, 'sleman', '2000-01-15', 'sleman', 1, 0),
(1918, 'andre ahmadi', 12, 0, 'sleman', '2000-05-09', 'sleman', 1, 0),
(1919, 'siskae erma', 12, 1, 'sleman', '2000-04-12', 'sleman', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `email`, `status`) VALUES
(2, 1530, '202cb962ac59075b964b07152d234b70', 'wakhid@student.com', 1),
(3, 2019, '202cb962ac59075b964b07152d234b70', 'sutisna@gmail.com', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`mapel`) REFERENCES `tb_mapel` (`id_mapel`);

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`nis`),
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id_guru`),
  ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`),
  ADD CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`kelas`) REFERENCES `tb_kelas` (`id_kelas`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`wali_murid`) REFERENCES `tb_guru` (`id_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
