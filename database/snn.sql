-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 11:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snn`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdb_pengeluaran`
--

CREATE TABLE `pdb_pengeluaran` (
  `tahun` year(4) NOT NULL,
  `konsumsi_ruta` double NOT NULL,
  `konsumsi_LNPRT` double NOT NULL,
  `konsumsi_pemerintahan` double NOT NULL,
  `pmtb_bruto` double NOT NULL,
  `perubahan_inventori` double NOT NULL,
  `ekspor_barangjasa` double NOT NULL,
  `impor_barangjasa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdb_pengeluaran`
--

INSERT INTO `pdb_pengeluaran` (`tahun`, `konsumsi_ruta`, `konsumsi_LNPRT`, `konsumsi_pemerintahan`, `pmtb_bruto`, `perubahan_inventori`, `ekspor_barangjasa`, `impor_barangjasa`) VALUES
(2010, 3786062.9, 72758.9, 618178, 2127840.7, 129094.6, 1667917.8, 1537719.8),
(2011, 3977288.6, 76790.3, 652291.7, 2316359.1, 118207.3, 1914267.9, 1768821.9),
(2012, 4195787.6, 81918.6, 681819, 2527728.8, 174183.1, 1945063.7, 1910299.5),
(2013, 4421721.3, 88617.5, 729059.6, 2661311.1, 149136.6, 2026119.7, 1945867),
(2014, 4649072.3, 99636.3, 743470.6, 2770963.4, 162852.6, 2046739.9, 1988537.9);

-- --------------------------------------------------------

--
-- Table structure for table `pdb_produksi_hberlaku`
--

CREATE TABLE `pdb_produksi_hberlaku` (
  `tahun` year(4) NOT NULL,
  `pertanian` double NOT NULL,
  `pertambangan` double NOT NULL,
  `industri_pengolahan` double NOT NULL,
  `listrik_gas` double NOT NULL,
  `air` double NOT NULL,
  `konstruksi` double NOT NULL,
  `perdagangan` double NOT NULL,
  `transportasi_pergudangan` double NOT NULL,
  `akomodasi_makanminum` double NOT NULL,
  `informasi_komunikasi` double NOT NULL,
  `jasa_keuangan` double NOT NULL,
  `real_estate` double NOT NULL,
  `jasa_perusahaan` double NOT NULL,
  `administrasi_pemerintahan` double NOT NULL,
  `jasa_pendidikan` double NOT NULL,
  `jasa_kesehatan` double NOT NULL,
  `jasa_lainnya` double NOT NULL,
  `pajak_subsidi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdb_produksi_hberlaku`
--

INSERT INTO `pdb_produksi_hberlaku` (`tahun`, `pertanian`, `pertambangan`, `industri_pengolahan`, `listrik_gas`, `air`, `konstruksi`, `perdagangan`, `transportasi_pergudangan`, `akomodasi_makanminum`, `informasi_komunikasi`, `jasa_keuangan`, `real_estate`, `jasa_perusahaan`, `administrasi_pemerintahan`, `jasa_pendidikan`, `jasa_kesehatan`, `jasa_lainnya`, `pajak_subsidi`) VALUES
(2010, 956119.7, 718128.6, 1512760.8, 72549.1, 5848.5, 626905.4, 923923.8, 245375.4, 200281.8, 256048.1, 239728.4, 198213.5, 99085.4, 259646.1, 201559.5, 66444.7, 101061, 180453.3),
(2011, 1058245.3, 924813.4, 1704250.5, 91721.9, 6208.8, 712184.4, 1066092.1, 276122.4, 224215.3, 281777.6, 270586.3, 218796.6, 113975.3, 304755.7, 232726.8, 76404.9, 113022, 155826.7),
(2012, 1152262.1, 1000307.6, 1848150.9, 95637.8, 6603.8, 805208.1, 1138484.4, 313156.2, 252612.3, 311362.4, 320534.3, 237913.9, 127724.2, 340567.6, 270372.3, 86235.4, 122566.2, 186005),
(2013, 1275048.4, 1042975.9, 1998693.7, 98686.8, 7154.9, 905990.5, 1263815.4, 368678.6, 289498.3, 341009.4, 368876.9, 264275, 144604.1, 371208.9, 309438.5, 96666.9, 140311.9, 237802.4),
(2014, 1410657.1, 1035120.9, 2215753.6, 114121.9, 7703.6, 1041949.5, 1410932, 450600, 330672.4, 368943, 408646.7, 294573.4, 165990.6, 404379.6, 346557.8, 109069.7, 163548.8, 263472.9);

-- --------------------------------------------------------

--
-- Table structure for table `pdb_produksi_hkonstan`
--

CREATE TABLE `pdb_produksi_hkonstan` (
  `tahun` year(4) NOT NULL,
  `pertanian` double NOT NULL,
  `pertambangan` double NOT NULL,
  `industri_pengolahan` double NOT NULL,
  `listrik_gas` double NOT NULL,
  `air` double NOT NULL,
  `konstruksi` double NOT NULL,
  `perdagangan` double NOT NULL,
  `transportasi_pergudangan` double NOT NULL,
  `akomodasi_makanminum` double NOT NULL,
  `informasi_komunikasi` double NOT NULL,
  `jasa_keuangan` double NOT NULL,
  `real_estate` double NOT NULL,
  `jasa_perusahaan` double NOT NULL,
  `administrasi_pemerintahan` double NOT NULL,
  `jasa_pendidikan` double NOT NULL,
  `jasa_kesehatan` double NOT NULL,
  `jasa_lainnya` double NOT NULL,
  `pajak_subsidi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdb_produksi_hkonstan`
--

INSERT INTO `pdb_produksi_hkonstan` (`tahun`, `pertanian`, `pertambangan`, `industri_pengolahan`, `listrik_gas`, `air`, `konstruksi`, `perdagangan`, `transportasi_pergudangan`, `akomodasi_makanminum`, `informasi_komunikasi`, `jasa_keuangan`, `real_estate`, `jasa_perusahaan`, `administrasi_pemerintahan`, `jasa_pendidikan`, `jasa_kesehatan`, `jasa_lainnya`, `pajak_subsidi`) VALUES
(2010, 956119.7, 718128.6, 1512760.8, 72549.1, 5848.5, 626905.4, 923923.8, 245375.4, 200281.8, 256048.1, 239728.4, 198213.5, 99085.4, 259646.1, 201559.5, 66444.7, 101061, 180453.3),
(2011, 993857.3, 748956.3, 1607452, 76678.1, 6125.1, 683421.9, 1013199.6, 265774, 214022, 281693.8, 256443, 213441.4, 108239.3, 276336.8, 215029.1, 72592.1, 109372.4, 145001.1),
(2012, 1039440.7, 771561.6, 1697787.2, 84393, 6329.8, 728226.4, 1067911.5, 284662.6, 228232.6, 316278.7, 280896.1, 229254.2, 116293.3, 282235.3, 232704.3, 78380.1, 115675.4, 166820.6),
(2013, 1083141.8, 785016.3, 1774097.3, 88805.1, 6587.1, 772719.6, 1118207, 308521.2, 243748.3, 349150.2, 306432.2, 244237.5, 125490.7, 288963.3, 251784.6, 84518.4, 123088.8, 203684.3),
(2014, 1128448, 789329.7, 1856310.6, 93755.9, 6788, 826615.6, 1172362.6, 333190.9, 258161, 384129.9, 321525.5, 256440.2, 137795.3, 296145, 267633.3, 91287.8, 134070.1, 214126.2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
