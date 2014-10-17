-- phpMyAdmin SQL Dump
-- version 2.6.4-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 06. Mei 2006 jam 07:20
-- Versi Server: 5.0.12
-- Versi PHP: 5.1.0RC1
-- 
-- Database: `administrasi`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `admin`
-- 

CREATE TABLE `admin` (
  `id` int(2) NOT NULL auto_increment,
  `userid` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `admin`
-- 

INSERT INTO `admin` VALUES (1, 'Front Office', 'madcoms', 1);
INSERT INTO `admin` VALUES (2, 'Nofi Maya', 'n', 2);
INSERT INTO `admin` VALUES (3, 'Mbak Sri', 'abcde', 2);
INSERT INTO `admin` VALUES (4, 'Mas Wawan', 'madiun', 2);
INSERT INTO `admin` VALUES (5, 'Bpk Handoko', 'madiun06', 3);
INSERT INTO `admin` VALUES (6, 'administrator', '3266', 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `angsuran`
-- 

CREATE TABLE `angsuran` (
  `id` int(3) NOT NULL auto_increment,
  `induk_siswa` varchar(20) NOT NULL,
  `jurusan` varchar(6) NOT NULL,
  `gelombang` varchar(2) NOT NULL,
  `total` varchar(7) NOT NULL default '0',
  `daftar` varchar(6) NOT NULL default '0',
  `diskon` varchar(6) NOT NULL default '0',
  `ang1` varchar(6) NOT NULL default '0',
  `ang2` varchar(6) NOT NULL default '0',
  `ang3` varchar(6) NOT NULL default '0',
  `ang4` varchar(6) NOT NULL default '0',
  `ang5` varchar(6) NOT NULL default '0',
  `ang6` varchar(6) NOT NULL default '0',
  `ang7` varchar(6) NOT NULL default '0',
  `ang8` varchar(6) NOT NULL default '0',
  `ang9` varchar(6) NOT NULL default '0',
  `ang10` varchar(6) NOT NULL default '0',
  `status` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `angsuran`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_angsuran`
-- 

CREATE TABLE `data_angsuran` (
  `id` int(4) NOT NULL auto_increment,
  `jurusan` varchar(6) NOT NULL,
  `angsuran` varchar(2) NOT NULL,
  `gel1` varchar(7) NOT NULL,
  `gel2` varchar(7) NOT NULL,
  `gel3` varchar(7) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `data_angsuran`
-- 

INSERT INTO `data_angsuran` VALUES (1, 'KAPP', '1', '700000', '900000', '1050000');
INSERT INTO `data_angsuran` VALUES (2, 'KAPP', '2', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES (3, 'KAPP', '3', '300000', '300000', '300000');
INSERT INTO `data_angsuran` VALUES (4, 'KAPP', '4', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES (5, 'KAPP', '5', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (6, 'KAPP', '6', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (7, 'KAPP', '7', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (8, 'KAPP', '8', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (9, 'KAPP', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (10, 'AMP', '2', '400000', '400000', '400000');
INSERT INTO `data_angsuran` VALUES (11, 'AMP', '3', '300000', '300000', '300000');
INSERT INTO `data_angsuran` VALUES (12, 'AMP', '4', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (13, 'AMP', '5', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (14, 'AMP', '6', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (15, 'AMP', '7', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (16, 'AMP', '8', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (17, 'AMP', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (18, 'AMP', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES (19, 'MIK', '1', '850000', '1050000', '1200000');
INSERT INTO `data_angsuran` VALUES (20, 'MIK', '2', '600000', '600000', '600000');
INSERT INTO `data_angsuran` VALUES (21, 'MIK', '3', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES (22, 'MIK', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES (23, 'MIK', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES (24, 'MIK', '6', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES (25, 'MIK', '7', '225000', '225000', '225000');
INSERT INTO `data_angsuran` VALUES (26, 'MIK', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (27, 'MIK', '9', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (28, 'MIK', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES (29, 'DGAD', '1', '900000', '1100000', '1250000');
INSERT INTO `data_angsuran` VALUES (30, 'DGAD', '2', '750000', '750000', '750000');
INSERT INTO `data_angsuran` VALUES (31, 'DGAD', '3', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES (32, 'DGAD', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES (33, 'DGAD', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES (34, 'DGAD', '6', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES (35, 'DGAD', '7', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES (36, 'DGAD', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (37, 'DGAD', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (38, 'DGAD', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES (39, 'DTAK', '1', '900000', '1100000', '1250000');
INSERT INTO `data_angsuran` VALUES (40, 'DTAK', '2', '750000', '750000', '750000');
INSERT INTO `data_angsuran` VALUES (41, 'DTAK', '3', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES (42, 'DTAK', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES (43, 'DTAK', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES (44, 'DTAK', '6', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES (45, 'DTAK', '7', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES (46, 'DTAK', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (47, 'DTAK', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (48, 'DTAK', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES (49, 'TSJW', '1', '900000', '1100000', '1250000');
INSERT INTO `data_angsuran` VALUES (50, 'TSJW', '2', '750000', '750000', '750000');
INSERT INTO `data_angsuran` VALUES (51, 'TSJW', '3', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES (52, 'TSJW', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES (53, 'TSJW', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES (54, 'TSJW', '6', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES (55, 'TSJW', '7', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES (56, 'TSJW', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES (57, 'TSJW', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES (58, 'TSJW', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES (59, 'AMP', '1', '650000', '850000', '1000000');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_kelas`
-- 

CREATE TABLE `data_kelas` (
  `id_data_kelas` int(4) NOT NULL auto_increment,
  `nama_kelas` varchar(50) NOT NULL,
  `program` varchar(15) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY  (`id_data_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `data_kelas`
-- 

INSERT INTO `data_kelas` VALUES (4, 'OKT-06.02', 'Reguler', '26 Mei 2006', '0');
INSERT INTO `data_kelas` VALUES (5, 'OKP-06.02', 'Reguler', '24 Mei 2006', '0');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_siswa`
-- 

CREATE TABLE `data_siswa` (
  `id` int(4) NOT NULL auto_increment,
  `jurusan` varchar(30) default NULL,
  `kelas` varchar(30) default NULL,
  `gelombang` int(2) default NULL,
  `induk` varchar(50) default NULL,
  `nama` varchar(200) default NULL,
  `ttl` varchar(200) default NULL,
  `alamat` varchar(255) default NULL,
  `kota` varchar(150) default NULL,
  `ortu` varchar(255) default NULL,
  `asal_sekolah` varchar(100) default NULL,
  `th_lulus` varchar(4) default NULL,
  `telp` varchar(25) default NULL,
  `hp` varchar(25) default NULL,
  `email` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat_sekolah` varchar(200) default NULL,
  `tahun` varchar(4) default NULL,
  `data_sekolah` varchar(255) default NULL,
  `data_kerja` text,
  `biaya_daftar` int(6) NOT NULL default '0',
  `ang1` int(20) NOT NULL default '0',
  `ang2` int(20) NOT NULL default '0',
  `ang3` int(20) NOT NULL default '0',
  `ang4` int(20) NOT NULL default '0',
  `ang5` int(20) NOT NULL default '0',
  `ang6` int(20) NOT NULL default '0',
  `ang7` int(20) NOT NULL default '0',
  `ang8` int(20) NOT NULL default '0',
  `ang9` int(20) NOT NULL default '0',
  `ang10` int(20) NOT NULL default '0',
  `status` int(1) NOT NULL default '0',
  `userid` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tanngal` varchar(30) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='InnoDB free: 5120 kB; InnoDB free: 5120 kB; InnoDB free: 512';

-- 
-- Dumping data untuk tabel `data_siswa`
-- 

INSERT INTO `data_siswa` VALUES (1, 'OKP', '', 0, '20063001', 'Nur Muhammad Ridho', 'Jakarta|6|12|1986', 'Jl. Pangan Ds.Sempol Rt.8 Rw.2|Maospati|Maospati', 'Magetan|', 'Sardjono|Wiraswasta|Sri Hartatik|Wiraswasta', 'SMK Angkasa', '2004', '(0351)867132', '081317476980', '', 'Islam', 'Lanud Iswahyudi|', '2006', 'SMA|Teknik Mesin', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Nur40', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (2, 'OKP', '', 0, '20063002', 'Andri Lestiyani', 'Magetan|23|8|1985', 'Ds. Kediren Rt. 2 Rw. 1|Kediren|Lembeyan', 'Magetan|63372', 'Kusnun|Tani|Kadiyem|Tani', 'SMAN 1 Magetan', '2005', '', '085235444390', '', 'Islam', 'Jl. Monginsidi No.24 Magetan|', '2006', 'SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Andri30', '123', '19 April 2006');
INSERT INTO `data_siswa` VALUES (3, 'OKT', '', 0, '20062001', 'Susi Retianingsih', 'Madiun|7|3|1982', 'Jl. Ponorogo No.265 Rt. 6 Rw. 2|Kaibon|Geger', 'Madiun|63171', 'Uning Efendi|Wiraswasta|Hariyani|Wiraswasta', 'STIE YKPN YOGYAKARTA', '2004', '( 0351 ) 451937', '085235003024', 'Cici-Chan 82@yahoo.com', 'Islam', 'Jl. Seturan Yogyakarta|( 0274 ) 486160', '2006', ' SARJANA S1|Akuntansi', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Susi12', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (4, 'OKT', '', 0, '20062002', 'Wahyu Ali Nursanto', 'Madiun|22|6|1983', 'Jl. Maudara No. 12 B Rt.1 Rw.3|Winongo|Mangunharjo', 'Madiun|63126', 'Marsono|Swasta|Hariyati|Ibu Rumah Tangga', 'SMK Gamaliel 1 Madiun', '2001', '( 0351 ) 463511', '', '', 'Kristen', 'Jl. Slamet Riyadi|', '2006', ' SMA|Teknik Mesin', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Wahyu45', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (5, 'OKT', '', 0, '20062003', 'Heru Srinowo Cahyono', 'Madiun|9|9|1986', 'Ds. Plumpungrejo Rt.10 Rw.1|Plumpungrejo|Wonoasri', 'Madiun|', 'Suparmin|Pensiunan PNS|Sularni|Ibu Rumah Tangga', 'SMAN 1 Saradan', '2005', '', '081335561877', '', 'Islam', '|', '2006', ' SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Heru18', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (6, 'OKT', '', 0, '20062004', 'Sismiyanto', 'Magetan|11|6|1984', 'Jl. Menur Rt.14 Rw.4|Takeran|Takeran', 'Magetan|63383', 'Sujiman|Swasta|Suratmi|Swasta', 'SMK PSM Takeran', '2003', '', '081553134176', '', 'Islam', 'Takeran|', '2006', ' SMA|Teknik Mesin', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sis33', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (7, 'OKT', '', 0, '20062005', 'Erwin Tri Astuti', 'Magetan|19|7|1986', 'Jl. Beringin Rt. 8 Rw. 2|Kawedanan|Kawedanan', 'Magetan|63382', 'Kasimin|Karyawan PG|Sumirah|Ibu Rumah Tangga', 'SMAN 1 Parang', '2005', '', '085649767924', '', 'Islam', 'Jl. Raya Parang|', '2006', ' SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Erwin57', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (8, 'OKT', '', 0, '20062006', 'Imas Dian Purwandani', 'Madiun|8|12|1989', 'Jl. Sanggar Manis 15 Rt.55 Rw.11|Manisrejo|Taman', 'Madiun|', 'Sidik Wirjanto, M.Pd|Guru|Handik Indarwati, S.Pd|Guru', 'SMAN 2 Madiun', '-', '( 0351 ) 493719', '08125943181', '', 'Islam', 'Jl. Biliton Madiun|', '2006', 'Masih menjadi siswa SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Imas09', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (9, 'OKT', '', 0, '20062007', 'Ana Kuswardhani', 'Madiun|1|4|1983', 'Ds. Nglanduk Jl. Triyasa No. A R. 9 Rw. 3|Nglanduk|Wungu', 'Madiun|63181', 'Kusni|Polri|Suminem|Guru', 'Universitas Merdeka Madiun', '-', '(0351) 471001', '081335807118', '', 'Islam', 'Jl. Serayu|', '2006', 'Masih menjadi siswa SARJANA S1|Manajemen', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ana28', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (10, 'OKT', '', 0, '20062008', 'Ari Kuswardhani', 'Madiun|1|4|1983', 'Ds. Nglanduk Jl. Triyasa No. 6A R. 9 Rw. 3|Nglanduk|Wungu', 'Madiun|63181', 'Kusni|Polri|Suminem|Guru', 'Universitas Merdeka Madiun', '-', '(0351) 471001', '085235508235', '', 'Islam', 'Jl. Serayu|', '2006', 'Masih menjadi siswa SARJANA S1|Akuntansi', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ari27', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (11, 'OKT', '', 0, '20062009', 'Ipung Jatmiko', 'Madiun|4|3|1987', 'Jl. Letjen Haryono Rt. 14 Rw. 4|Metesih|Jiwan', 'Madiun|63161', 'Sunardi|Swasta|Ninik Pujiati|Ibu Rumah Tangga', 'SMAN 4 Madiun', '2005', '(0351) 498443', '081335240096', '', 'Islam', 'Jl. Serayu|', '2006', ' SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Ipung', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (12, 'OKT', '', 0, '20062010', 'Muhammad Wahyu Hidayat', 'Madiun|7|7|1989', 'Jl. pasar Slering No. 118 Rt. 7 Rw. 2|Sewulan|Dagangan', 'Madiun|', 'H. Muhammad Wahyu Utomo|Wiraswasta|Lina Hidayati|Wiraswasta', 'SMPN 1 Dagangan', '2004', '', '081335724042', '', 'Islam', 'Jl. Raya Dungus Ds. Banjarsari Kulon, Dagangan|', '2006', ' SMP|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Muhammad57', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES (13, 'OKT', '', 0, '20062011', 'Sri Hartini', 'Magetan|26|3|1979', 'Ds. Petungrejo Rt. 1 Rw. 1||Nguntoronadi', 'Magetan|', 'Bakri|Guru|Sartiningsih|Guru', 'IKIP PGRI Madiun', '2003', '(0351) 7741612', '', '', 'Islam', 'Jl. Setia Budi|', '2006', ' SARJANA S1|Akuntansi', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sri24', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (14, 'OKT', '', 0, '20062012', 'Agnessia Budhi Silvana', 'Madiun|15|3|1987', 'Jl. Tanjung Manis Gg. II / 02A Rt. 50 Rw. III|Manisrejo|Taman', 'Madiun|63138', 'Budi Hardjo|Pegawai Negeri|Kustinah Ganefati|Pegawai Negeri', 'SMAN 4 Madiun', '2005', '(0351) 494955', '085649787896', '', 'Islam', 'Jl. Serayu |', '2006', ' SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Agnessia', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (15, 'OKT', '', 0, '20062013', 'Dhenny Mahendra', 'Madiun|17|8|1990', 'Jl. Mundu No. 115 Rt. 10 Rw. 3|Sugih Waras|Saradan', 'Madiun|', 'Hudji Edy Waryanto|Perhutani|Lastmia|Ibu Rumah Tangga', 'SMAN 1 Saradan', '-', '(0351) 383551', '081335244811', '', 'Islam', 'Jl. Madiun - Surabaya|', '2006', 'Masih menjadi siswa SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Dhenny11', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (16, 'OKT', '', 0, '20062014 ', 'Anang Kriswanto', 'Madiun|14|9|1989', 'Jl. Mundu Gg. YB. Kampung Baru|Sugih Waras|Saradan', 'Madiun|', 'Agus Sukeni|Swasta|Anik Priyani|Ibu Rumah Tangga', 'SMAN 2 Mejayan', '-', '', '', '', 'Islam', '|', '2006', 'Masih menjadi siswa SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Anang49', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (17, 'OKT', '', 0, '20062015', 'Sri Utami', 'Magetan|6|3|1986', 'Takeran Rt. 8 Rw. 2|Takeran|Takeran', 'Magetan|', 'M. Lahuri|PNS|Nurul Indrawati|PNS', 'Aliyah Darul Huda', '2003', '(0351) 437097', '', '', 'Islam', 'Jl. Ir. H. Juanda Mayak Bratan Ponorogo|', '2006', ' SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sri Utami12', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (18, 'OKT', '', 0, '20062016', 'Indra Herwandoko', 'Trenggalek|30|4|1984', 'Ciliwung VII No. 2|Taman|', 'Madiun|', 'Tarko|PNS|Sadinah|', 'SMAN 1 Durenan', '2002', '(0351) 455853', '081335181709', '', 'Islam', '|', '2006', ' SMA|Bahasa', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Indra36', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (19, 'OKT', '', 0, '20062017', 'Achmad Zam - Zam Aghazy', 'Sumenep|27|3|1993', 'Jl. A.R. Saleh IIB ||Taman', 'Madiun|', 'H. Muh. Ali Sabtu, S.H.|PNS|Hj. Endang N.R.|', 'SMPN 4 Madiun', '-', '(0351) 462037', '081335022993', '', 'Islam', 'Jl. A.R. Saleh No. 3|', '2006', 'Masih menjadi siswa SMP|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Achmad02', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (20, 'OKT', '', 0, '20062018', 'Lia Dewi Kusumawati', 'Magetan|11|6|1987', 'Jl. Beringin Rt. 8 Rw. 2|Kawedanan|Kawedanan', 'Magetan|63382', 'Slamet|Wiraswasta|Mujiati|Ibu Rumah Tangga', 'SMKN 2 Magetan', '2005', '(0351) 438987', '081359074508', '', 'Islam', '|', '2006', ' SMA|Bahasa', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Lia23', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (21, 'OKT', '', 0, '20063013', 'Teddy Firman Honasan', 'Magetan|25|10|1989', 'Ds. Grabahan Rt. 5 Rw. 2||Karangrejo', 'Magetan|', '(Alm) Gunawan|-|Yayuk Sumarni|Wiraswasta', 'SMA PGRI 1 Maospati', '-', '(0351) 868127', '03517794207', '', 'Islam', '|', '2006', 'Masih menjadi siswa SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Teddy36', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (22, 'OKP', '', 0, '20063003', 'Budi Prayogo', 'Jakarta|5|6|1988', 'Ds, Temboro Rt. 6 Rw. 3|Temboro|Karas', 'Magetan|', 'Saminan|Pegawai Pabrik|Yatmi|Ibu Rumah Tangga', 'SMK Penerbangan Angkasa', '-', '', '08159289115', '', 'Islam', 'Jl. Depo Har 60 Lanud Iswahyudi|', '2006', 'Masih menjadi siswa STM|Teknik Mesin', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Budi19', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (23, 'OKP', '', 0, '20063004', 'Dwi Nuranti', 'Magetan|17|3|1986', 'Ds. Lemahbang Rt. 2 Rw. 1|Lemahbang|Bendo', 'Magetan|', 'Bari|Wiraswasta|Supi|Tani', 'SMA PGRI 1 Maospati', '2005', '', '0813355210613', '', 'Islam', '|', '2006', ' SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Dwi43', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (24, 'OKP', '', 0, '20063005', 'Wahyu Indah Prasetyowati', 'Magetan|7|7|1987', 'Ds. Ginuk Rt. 5 Rw. 1|Ginuk|Karas', 'Magetan|', 'Toyibun|Swasta|Sukini|Swasta', 'SMA PGRI 1 Maospati', '2005', '', '081335549197', '', 'Islam', '|', '2006', ' SMA|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Wahyu46', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (25, 'OKP', '', 0, '20053006', 'Bayu Purnama Aji', 'Madiun|9|6|1987', 'Jl. Raya Ponorogo Rt. 23 Rw. 7 |Dolopo|Dolopo', 'Madiun|63174', 'Misdi Asbari|Wiraswasta|Harini|Ibu Rumah Tangga', 'SMAN 1 Dolopo', '2005', '(0351) 367657', '081335834260', '', 'Islam', 'Jl. Suluk Dolopo|', '2006', ' SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Bayu54', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (26, 'OKP', '', 0, '20063008', 'Dicky Firmansyah', 'Madiun|27|3|1985', 'Perum Kelun Blok 0/11 Rt. 2 Rw. 3|Kelun|Kartoharjo', 'Madiun|63112', 'Wiyono|TNI|Sumarning|-', 'SMAN 2 Madiun', '2003', '(0351) 473064', '085649022951', '', 'Islam', 'Jl. Biliton Madiun|', '2006', ' SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Dicky35', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (27, 'OKP', '', 0, '20063009', 'Desak Made Dewi K.', 'Magetan|15|8|1982', 'Jl. K.H. Dewantoro IIIB A/10 Rt. 12 Rw. 9|Selosari|Magetan', 'Magetan|63313', 'D.M. Bandhia Yoga, S.H.|PNS|Endang Suhyanti|Wiraswasta', 'Univ. Janabadra Yogyakarta', '2005', '', '085643225565', '', 'Islam', '|', '2006', ' SARJANA S1|Manajemen', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Desak12', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (28, 'OKT', '', 0, '20063010', 'Hanif Asnuri', 'Madiun|28|10|1989', 'Ds. Singgahan Rt. 3 Rw. 1|Kebonsari|Kebonsari', 'Madiun|', 'Widji Santoso|Swasta|Mar''atun Nasikhah|Dokter', 'SMK Penerbangan Antariksa', '-', '', '081335829910', '', 'Islam', 'Jl. May. Panjaitan No. 12|', '2006', 'Masih menjadi siswa STM|IPA', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Hanif20', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (29, 'OKP', '', 0, '20063011', 'Oki Wijayanti', 'Madiun|10|10|1986', 'Jl. Merak Selatan Rt. 7 Rw. 3|Nambangan Kidul|Mangunharjo', 'Madiun|', 'Suparman|Wiraswasta ( Penjahit )|Saikem|Pedagang', 'SMAN 5 Madiun', '2005', '(0351) 498118', '085649800596', '', 'Islam', 'Jl. Mastrib|', '2006', ' SMA|IPS', '-||||||', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Oki49', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (30, 'OKP', '', 0, '20063012', 'Yuli itsna H.', 'Madiun|29|7|1974', 'Jl. Margabawero V/4 ||', 'Madiun|', 'Drs. H. Soedirman|Dosen|Karsiyani|Pensiunan Pegawai Negeri', 'STIE Malang', '1997', '(0351) 455630', '', '', 'Islam', '|', '2006', ' SARJANA S1|Akuntansi', '-||||||', 50000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Yuli38', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES (31, 'OKP', '', 0, '20063014', 'Suryanti', 'Magetan|8|4|1985', 'Ds. Tawangrejo Rt. 4 Rw. 1|Takeran|Takeran', 'Magetan|', 'Kasni|Tani|Djumirah|Tani', 'SMKN 5 Madiun', '2005', '', '081335005865', '', 'Islam', 'Jl. Merak No. 5 Madiun|', '2006', ' SMA|Akuntansi', '-||||||', 50000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Suryanti59', '123', '27 April 2006');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `instruktur`
-- 

CREATE TABLE `instruktur` (
  `id` int(3) NOT NULL auto_increment,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `instruktur`
-- 

INSERT INTO `instruktur` VALUES (2, 'LL', 'Yeni Cahyono, SE.', 'Tetap', '12345');
INSERT INTO `instruktur` VALUES (3, 'N', 'J. Leo', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (4, 'O', 'Wawan Setyo Hartono, SE.', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (5, 'Q', 'Evi H.', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (6, 'AA', 'Dinarwan', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (7, 'BB', 'Hendrik', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (8, 'CC', 'Netty', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (9, 'DD', 'Didik R.', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (10, 'FF', 'Martini', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (11, 'S', 'Ira', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (12, 'GG', 'Eni', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (13, 'F.1', 'Kamid', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (14, 'OO', 'Nunuk', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (15, 'HH', 'Hernawan, ST.', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (16, 'II', 'Mei Lenawati', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (17, 'JJ', 'Neni', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (18, 'KK', 'Puji', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (19, 'MM', 'Wahyu Efendi', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (20, 'PP', 'Anton', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (21, 'B', 'Agus', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (22, 'C', 'Yuli A', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (23, 'D', 'Dian', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (24, 'E', 'Amanda', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (25, 'F', 'Doedyk', 'Tetap', '123');
INSERT INTO `instruktur` VALUES (26, 'H', 'Yani', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (27, 'J', 'Vero', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (28, 'K', 'Imron', 'Honorer', '123');
INSERT INTO `instruktur` VALUES (30, 'Z', 'Narsih', 'Honorer', '123');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `jurusan`
-- 

CREATE TABLE `jurusan` (
  `id` int(2) NOT NULL auto_increment,
  `jurusan` varchar(200) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `jurusan`
-- 

INSERT INTO `jurusan` VALUES (6, 'Komputer Akuntansi Perpajakan & Perbankan', 'KAPP', 'Diploma');
INSERT INTO `jurusan` VALUES (7, 'Administrasi & Manajemen Perkantoran', 'AMP', 'Diploma');
INSERT INTO `jurusan` VALUES (8, 'Manajemen Informatika Dan Komputer', 'MIK', 'Diploma');
INSERT INTO `jurusan` VALUES (9, 'Desain Grafis Dan Animasi Digital', 'DGAD', 'Diploma');
INSERT INTO `jurusan` VALUES (10, 'Desain Teknik Dan Animasi Komputer', 'DTAK', 'Diploma');
INSERT INTO `jurusan` VALUES (11, 'Teknisi, Sistem Jaringan Dan Desain Web', 'TSDW', 'Diploma');
INSERT INTO `jurusan` VALUES (12, 'Operator Komputer Terapan', 'OKT', 'Reguler');
INSERT INTO `jurusan` VALUES (13, 'Operator Komputer Praktis', 'OKP', 'Reguler');
INSERT INTO `jurusan` VALUES (14, 'Privat', 'privat', '');
INSERT INTO `jurusan` VALUES (15, 'Workshop', 'workshop', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `kelas`
-- 

CREATE TABLE `kelas` (
  `id` int(3) NOT NULL auto_increment,
  `nama` varchar(20) NOT NULL,
  `id_materi` varchar(5) NOT NULL,
  `mulai` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kode_instruktur` varchar(4) NOT NULL,
  `kode_assisten1` varchar(4) NOT NULL,
  `kode_assisten2` varchar(4) NOT NULL,
  `session` varchar(2) NOT NULL,
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `kelas`
-- 

INSERT INTO `kelas` VALUES (1, 'OKT-06.02', '173', '22 Mei 2006', 'OKT', 'FF', 'II', '-', '4', 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `kelas_aktif`
-- 

CREATE TABLE `kelas_aktif` (
  `id` int(2) NOT NULL auto_increment,
  `id_kelas` varchar(5) NOT NULL,
  `id_materi` varchar(3) NOT NULL,
  `id_siswa` varchar(5) NOT NULL,
  `ses1` varchar(10) NOT NULL,
  `ses2` varchar(10) NOT NULL,
  `ses3` varchar(10) NOT NULL,
  `ses4` varchar(10) NOT NULL,
  `ses5` varchar(10) NOT NULL,
  `ses6` varchar(10) NOT NULL,
  `ses7` varchar(10) NOT NULL,
  `ses8` varchar(10) NOT NULL,
  `ses9` varchar(10) NOT NULL,
  `ses10` varchar(10) NOT NULL,
  `ses11` varchar(10) NOT NULL,
  `ses12` varchar(10) NOT NULL,
  `ses13` varchar(10) NOT NULL,
  `ses14` varchar(10) NOT NULL,
  `ses15` varchar(10) NOT NULL,
  `ses16` varchar(10) NOT NULL,
  `ses17` varchar(10) NOT NULL,
  `ses18` varchar(10) NOT NULL,
  `ses19` varchar(10) NOT NULL,
  `ses20` varchar(10) NOT NULL,
  `ses21` varchar(10) NOT NULL,
  `ses22` varchar(10) NOT NULL,
  `ses23` varchar(10) NOT NULL,
  `ses24` varchar(10) NOT NULL,
  `ses25` varchar(10) NOT NULL,
  `ses26` varchar(10) NOT NULL,
  `ses27` varchar(10) NOT NULL,
  `ses28` varchar(10) NOT NULL,
  `ses29` varchar(10) NOT NULL,
  `ses30` varchar(10) NOT NULL,
  `ses31` varchar(10) NOT NULL,
  `ses32` varchar(10) NOT NULL,
  `ses33` varchar(10) NOT NULL,
  `ses34` varchar(10) NOT NULL,
  `ses35` varchar(10) NOT NULL,
  `ses36` varchar(10) NOT NULL,
  `ses37` varchar(10) NOT NULL,
  `ses38` varchar(10) NOT NULL,
  `ses39` varchar(10) NOT NULL,
  `ses40` varchar(10) NOT NULL,
  `nilai_harian` int(3) NOT NULL default '0',
  `nilai_tugas` int(3) NOT NULL default '0',
  `nilai_tengah` int(3) NOT NULL default '0',
  `nilai_akhir` int(3) NOT NULL default '0',
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `kelas_aktif`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `materi`
-- 

CREATE TABLE `materi` (
  `id` int(3) NOT NULL auto_increment,
  `jurusan` varchar(10) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `materi` varchar(200) NOT NULL,
  `ses_inst` int(2) default NULL,
  `ses_ass` int(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='InnoDB free: 5120 kB; InnoDB free: 5120 kB';

-- 
-- Dumping data untuk tabel `materi`
-- 

INSERT INTO `materi` VALUES (2, 'KAP', '1', 'Ak. Keuangan I', 40, 0);
INSERT INTO `materi` VALUES (3, 'KAP', '1', 'Hitung Dagang I', 20, 0);
INSERT INTO `materi` VALUES (4, 'KAP', '1', 'Perpajakan I', 16, 0);
INSERT INTO `materi` VALUES (5, 'KAP', '1', 'Bhs. Mandarin I', 30, 0);
INSERT INTO `materi` VALUES (6, 'KAP', '1', 'Basic English', 25, 0);
INSERT INTO `materi` VALUES (7, 'KAP', '1', 'Dasar-Dasar Man Keuangan', 14, 0);
INSERT INTO `materi` VALUES (8, 'KAP', '1', 'MS-Windows', 6, 0);
INSERT INTO `materi` VALUES (9, 'KAP', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (10, 'KAP', '1', 'MS-Word', 20, 0);
INSERT INTO `materi` VALUES (11, 'KAP', '1', 'MS-Excel', 20, 0);
INSERT INTO `materi` VALUES (12, 'KAP', '2', 'Ak. Keuangan II', 40, 0);
INSERT INTO `materi` VALUES (13, 'KAP', '2', 'Hitung Dagang II', 20, 0);
INSERT INTO `materi` VALUES (14, 'KAP', '2', 'Akuntansi Perpajakan', 16, 0);
INSERT INTO `materi` VALUES (15, 'KAP', '2', 'Bhs. Mandarin II', 30, 0);
INSERT INTO `materi` VALUES (16, 'KAP', '2', 'English for Communication', 25, 0);
INSERT INTO `materi` VALUES (17, 'KAP', '2', 'Kewirausahaan', 10, 0);
INSERT INTO `materi` VALUES (18, 'KAP', '2', 'Perpajakan II', 16, 0);
INSERT INTO `materi` VALUES (19, 'KAP', '2', 'MS-Access', 12, 0);
INSERT INTO `materi` VALUES (20, 'KAP', '2', 'MS-Power Point', 10, 0);
INSERT INTO `materi` VALUES (21, 'KAP', '2', 'Aplikasi MS-Office', 10, 0);
INSERT INTO `materi` VALUES (22, 'KAP', '2', 'MYOB Accounting', 16, 0);
INSERT INTO `materi` VALUES (23, 'AMP', '1', 'Kearsipan', 16, 0);
INSERT INTO `materi` VALUES (24, 'AMP', '1', 'Bhs. Mandarin I', 30, 0);
INSERT INTO `materi` VALUES (25, 'AMP', '1', 'Basic English', 25, 0);
INSERT INTO `materi` VALUES (26, 'AMP', '1', 'Korespondensi Bhs. Indonesia', 18, 0);
INSERT INTO `materi` VALUES (27, 'AMP', '1', 'Kesekretariatan', 16, 0);
INSERT INTO `materi` VALUES (28, 'AMP', '1', 'MS-Windows', 6, 0);
INSERT INTO `materi` VALUES (29, 'AMP', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (30, 'AMP', '1', 'MS-Word', 20, 0);
INSERT INTO `materi` VALUES (31, 'AMP', '1', 'MS-Excel', 20, 0);
INSERT INTO `materi` VALUES (32, 'AMP', '1', 'MS-Power Point', 10, 0);
INSERT INTO `materi` VALUES (33, 'AMP', '2', 'Kewirausahaan', 10, 0);
INSERT INTO `materi` VALUES (34, 'AMP', '2', 'Bhs. Mandarin II', 30, 0);
INSERT INTO `materi` VALUES (35, 'AMP', '2', 'English for Communication', 25, 0);
INSERT INTO `materi` VALUES (36, 'AMP', '2', 'Korespondensi Bhs. Inggris', 18, 0);
INSERT INTO `materi` VALUES (37, 'AMP', '2', 'Teknologi Perkantoran', 12, 0);
INSERT INTO `materi` VALUES (38, 'AMP', '2', 'MS-Access', 12, 0);
INSERT INTO `materi` VALUES (39, 'AMP', '2', 'Aplikasi MS-Office', 10, 0);
INSERT INTO `materi` VALUES (40, 'AMP', '2', 'MS-Outlook', 5, 0);
INSERT INTO `materi` VALUES (41, 'AMP', '2', 'MS-Visio', 5, 0);
INSERT INTO `materi` VALUES (42, 'AMP', '2', 'MC-Flash', 14, 0);
INSERT INTO `materi` VALUES (43, 'AMP', '2', 'MC-Director', 12, 0);
INSERT INTO `materi` VALUES (56, 'OKT', '0', 'Windows + Internet ', 6, 0);
INSERT INTO `materi` VALUES (57, 'OKT', '0', 'MS-Word ', 18, 0);
INSERT INTO `materi` VALUES (58, 'OKT', '0', 'MS-Excel ', 18, 0);
INSERT INTO `materi` VALUES (59, 'OKT', '0', 'MS-Access ', 12, 0);
INSERT INTO `materi` VALUES (60, 'OKT', '0', 'MS-Power Point ', 8, 0);
INSERT INTO `materi` VALUES (61, 'OKT', '0', 'Aplikasi MS-Office ', 6, 0);
INSERT INTO `materi` VALUES (62, 'OKP', '0', 'Windows + Internet ', 6, 0);
INSERT INTO `materi` VALUES (63, 'OKP', '0', 'MS-Word ', 18, 0);
INSERT INTO `materi` VALUES (64, 'OKP', '0', 'MS-Excel ', 18, 0);
INSERT INTO `materi` VALUES (65, 'OKP', '0', 'Aplikasi MS-Office ', 4, 0);
INSERT INTO `materi` VALUES (66, 'PTK', '0', 'Windows + P. Komputer ', 4, 0);
INSERT INTO `materi` VALUES (67, 'PTK', '0', 'Instalasi Hardware ', 8, 0);
INSERT INTO `materi` VALUES (68, 'PTK', '0', 'Instalasi Software ', 18, 0);
INSERT INTO `materi` VALUES (69, 'PTK', '0', 'Interkoneksi Jaringan ', 14, 0);
INSERT INTO `materi` VALUES (70, 'DGM', '0', 'Windows + P. Komputer ', 4, 0);
INSERT INTO `materi` VALUES (71, 'DGM', '0', 'Adobe Photoshop ', 14, 0);
INSERT INTO `materi` VALUES (72, 'DGM', '0', 'Corel Draw ', 14, 0);
INSERT INTO `materi` VALUES (73, 'DGM', '0', 'MC-Flash ', 14, 0);
INSERT INTO `materi` VALUES (74, 'DGM', '0', 'MC-Director ', 12, 0);
INSERT INTO `materi` VALUES (75, 'VBP', '0', 'Windows + P. Komputer ', 4, 0);
INSERT INTO `materi` VALUES (76, 'VBP', '0', 'MS-Access ', 10, 0);
INSERT INTO `materi` VALUES (77, 'VBP', '0', 'Vis. Basic Prog. ', 18, 0);
INSERT INTO `materi` VALUES (78, 'VBP', '0', 'Vis. Basic Database ', 18, 0);
INSERT INTO `materi` VALUES (79, 'VBP', '0', 'Vis. Basic Aplikasi ', 14, 0);
INSERT INTO `materi` VALUES (80, 'VBP', '0', 'Crystal Reports ', 6, 0);
INSERT INTO `materi` VALUES (81, 'DTA', '0', 'Windows + P. Komputer ', 4, 0);
INSERT INTO `materi` VALUES (82, 'DTA', '0', 'AutoCAD 2D ', 18, 0);
INSERT INTO `materi` VALUES (83, 'DTA', '0', 'AutoCAD 3D ', 18, 0);
INSERT INTO `materi` VALUES (84, 'DTA', '0', '3D Studio Max ', 14, 0);
INSERT INTO `materi` VALUES (85, 'DWD', '0', 'Windows + P. Komputer ', 4, 0);
INSERT INTO `materi` VALUES (86, 'DWD', '0', 'Adobe Photoshop ', 14, 0);
INSERT INTO `materi` VALUES (87, 'DWD', '0', 'MC-Flash ', 14, 0);
INSERT INTO `materi` VALUES (88, 'DWD', '0', 'MS-Front Page/MM-Dreamweaver ', 14, 0);
INSERT INTO `materi` VALUES (89, 'DWD', '0', 'Pemrograman PHP & MySQL ', 14, 0);
INSERT INTO `materi` VALUES (90, 'DGAD', '0', 'Windows + P. Komputer ', 4, 0);
INSERT INTO `materi` VALUES (91, 'DGAD', '0', 'Dasar Fotografi & Sinematografi ', 6, 0);
INSERT INTO `materi` VALUES (92, 'DGAD', '0', 'Adobe Photoshop ', 14, 0);
INSERT INTO `materi` VALUES (93, 'DGAD', '0', 'Adobe Premiere ', 14, 0);
INSERT INTO `materi` VALUES (94, 'DGAD', '0', 'Adobe After Effect ', 10, 0);
INSERT INTO `materi` VALUES (95, 'DGAD', '0', 'Aplikasi Digital Animation ', 12, 0);
INSERT INTO `materi` VALUES (96, 'KOMPI', '1', 'MS-Windows', 4, 0);
INSERT INTO `materi` VALUES (97, 'KOMPI', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (98, 'KOMPI', '1', 'MS-Word', 18, 0);
INSERT INTO `materi` VALUES (99, 'KOMPI', '1', 'MS-Excel', 18, 0);
INSERT INTO `materi` VALUES (100, 'KOMPI', '1', 'MS-Access', 12, 0);
INSERT INTO `materi` VALUES (101, 'KOMPI', '1', 'MS-Power Point', 8, 0);
INSERT INTO `materi` VALUES (102, 'KOMPI', '1', 'Aplikasi MS-Office', 6, 0);
INSERT INTO `materi` VALUES (103, 'KOMPI', '1', 'Vis. Basic Prog.', 20, 12);
INSERT INTO `materi` VALUES (104, 'KOMPI', '2', 'Vis. Basic Database', 18, 10);
INSERT INTO `materi` VALUES (105, 'KOMPI', '3', 'Vis. Basic Aplikasi', 18, 10);
INSERT INTO `materi` VALUES (106, 'KOMPI', '4', 'Crystal Reports', 6, 2);
INSERT INTO `materi` VALUES (107, 'KOMPI', '5', 'SQL Server', 12, 6);
INSERT INTO `materi` VALUES (108, 'KOMPI', '6', 'Aplikasi Pemrograman', 14, 8);
INSERT INTO `materi` VALUES (109, 'DGAD', '1', 'MS-Windows', 4, 0);
INSERT INTO `materi` VALUES (110, 'DGAD', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (111, 'DGAD', '1', 'MS-Word', 18, 0);
INSERT INTO `materi` VALUES (112, 'DGAD', '1', 'MS-Excel', 18, 0);
INSERT INTO `materi` VALUES (113, 'DGAD', '1', 'MS-Power Point', 8, 0);
INSERT INTO `materi` VALUES (114, 'DGAD', '1', 'Aplikasi MS-Office', 6, 0);
INSERT INTO `materi` VALUES (115, 'DGAD', '1', 'Corel Draw', 16, 10);
INSERT INTO `materi` VALUES (116, 'DGAD', '1', 'Adobe Ilustrator', 12, 6);
INSERT INTO `materi` VALUES (117, 'DGAD', '2', 'Dasar-2 Fotografi', 4, 0);
INSERT INTO `materi` VALUES (118, 'DGAD', '2', 'Adobe Photoshop', 14, 8);
INSERT INTO `materi` VALUES (119, 'DGAD', '2', 'MM-Flash', 14, 8);
INSERT INTO `materi` VALUES (120, 'DGAD', '2', 'MM-Director', 12, 6);
INSERT INTO `materi` VALUES (121, 'DGAD', '2', 'Dasar-2 Sinematografi', 6, 0);
INSERT INTO `materi` VALUES (122, 'DGAD', '2', 'Adobe Premiere', 16, 10);
INSERT INTO `materi` VALUES (123, 'DGAD', '3', '3D-Studio Max', 16, 10);
INSERT INTO `materi` VALUES (124, 'DGAD', '3', 'Maya Unlimited', 12, 6);
INSERT INTO `materi` VALUES (125, 'DGAD', '3', 'Adobe Audition', 4, 0);
INSERT INTO `materi` VALUES (126, 'DGAD', '3', 'Adobe After Effect', 10, 6);
INSERT INTO `materi` VALUES (127, 'DGAD', '3', 'Aplikasi Multimedia Interaktif', 8, 4);
INSERT INTO `materi` VALUES (128, 'DGAD', '3', 'Aplikasi Digital Animation', 10, 6);
INSERT INTO `materi` VALUES (129, 'DGAD', '3', 'Aplikasi 3D Animation & Video', 10, 6);
INSERT INTO `materi` VALUES (130, 'DPWB', '1', 'MS-Windows', 4, 0);
INSERT INTO `materi` VALUES (131, 'DPWB', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (132, 'DPWB', '1', 'MS-Word', 18, 0);
INSERT INTO `materi` VALUES (133, 'DPWB', '1', 'MS-Excel', 18, 0);
INSERT INTO `materi` VALUES (134, 'DPWB', '1', 'MS-Power Point', 8, 0);
INSERT INTO `materi` VALUES (135, 'DPWB', '1', 'Aplikasi MS-Office', 6, 0);
INSERT INTO `materi` VALUES (136, 'DPWB', '1', 'MS-Outlook', 5, 0);
INSERT INTO `materi` VALUES (137, 'DPWB', '1', 'Adobe Photoshop Dasar', 10, 6);
INSERT INTO `materi` VALUES (138, 'DPWB', '1', 'MM-Flash', 14, 8);
INSERT INTO `materi` VALUES (139, 'DPWB', '2', 'Dasar-2 Fotografi', 4, 0);
INSERT INTO `materi` VALUES (140, 'DPWB', '2', 'Adobe Photoshop Lanjutan', 10, 6);
INSERT INTO `materi` VALUES (141, 'DPWB', '2', 'MS-Front Page', 14, 8);
INSERT INTO `materi` VALUES (142, 'DPWB', '2', 'MM-Dreamweaver', 12, 6);
INSERT INTO `materi` VALUES (143, 'DPWB', '2', 'PHP & My SQL', 18, 10);
INSERT INTO `materi` VALUES (144, 'DPWB', '2', 'Aplikasi Web Master', 12, 0);
INSERT INTO `materi` VALUES (145, 'DTAK', '1', 'MS-Windows', 4, 0);
INSERT INTO `materi` VALUES (146, 'DTAK', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (147, 'DTAK', '1', 'MS-Word', 18, 0);
INSERT INTO `materi` VALUES (148, 'DTAK', '1', 'MS-Excel', 18, 0);
INSERT INTO `materi` VALUES (149, 'DTAK', '1', 'MS-Power Point', 8, 0);
INSERT INTO `materi` VALUES (150, 'DTAK', '1', 'Aplikasi MS-Office', 6, 0);
INSERT INTO `materi` VALUES (151, 'DTAK', '1', 'AutoCAD 2D', 22, 14);
INSERT INTO `materi` VALUES (152, 'DTAK', '2', 'AutoCAD 3D', 16, 10);
INSERT INTO `materi` VALUES (153, 'DTAK', '2', '3D-Studio Max', 14, 8);
INSERT INTO `materi` VALUES (154, 'DTAK', '2', 'MM-Flash', 14, 8);
INSERT INTO `materi` VALUES (155, 'DTAK', '2', 'MM-Director', 12, 6);
INSERT INTO `materi` VALUES (156, 'DTAK', '2', 'Aplikasi Multimedia Interaktif', 8, 4);
INSERT INTO `materi` VALUES (157, 'TIK', '1', 'MS-Windows', 4, 0);
INSERT INTO `materi` VALUES (158, 'TIK', '1', 'Pengenalan Internet', 4, 0);
INSERT INTO `materi` VALUES (159, 'TIK', '1', 'MS-Word', 18, 0);
INSERT INTO `materi` VALUES (160, 'TIK', '1', 'MS-Excel', 18, 0);
INSERT INTO `materi` VALUES (161, 'TIK', '1', 'MS-Access', 12, 0);
INSERT INTO `materi` VALUES (162, 'TIK', '1', 'MS-Power Point', 8, 0);
INSERT INTO `materi` VALUES (163, 'TIK', '1', 'Aplikasi MS-Office', 6, 0);
INSERT INTO `materi` VALUES (164, 'TIK', '1', 'MS-Outlook', 5, 0);
INSERT INTO `materi` VALUES (165, 'TIK', '1', 'MS-Visio', 8, 0);
INSERT INTO `materi` VALUES (166, 'TIK', '1', 'Instalasi Hardware *)', 10, 0);
INSERT INTO `materi` VALUES (167, 'TIK', '2', 'Instalasi Software *)', 18, 0);
INSERT INTO `materi` VALUES (168, 'TIK', '2', 'Interkoneksi Jaringan *)', 14, 0);
INSERT INTO `materi` VALUES (169, 'TIK', '2', 'Trouble Shooting *)', 6, 0);
INSERT INTO `materi` VALUES (170, 'TIK', '2', 'MM-Flash', 14, 8);
INSERT INTO `materi` VALUES (171, 'TIK', '2', 'MM-Director', 12, 6);
INSERT INTO `materi` VALUES (172, 'TIK', '2', 'Aplikasi Multimedia Interaktif', 8, 4);
INSERT INTO `materi` VALUES (173, 'OKT', '0', 'Windows + Internet ', 6, 0);
INSERT INTO `materi` VALUES (174, 'OKT', '0', 'MS-Word ', 18, 0);
INSERT INTO `materi` VALUES (175, 'OKT', '0', 'MS-Excel ', 18, 0);
INSERT INTO `materi` VALUES (176, 'OKT', '0', 'MS-Access ', 12, 0);
INSERT INTO `materi` VALUES (177, 'OKT', '0', 'MS-Power Point ', 8, 0);
INSERT INTO `materi` VALUES (178, 'OKT', '0', 'Aplikasi MS-Office ', 6, 0);
INSERT INTO `materi` VALUES (179, 'MIK', '1', 'Ms. Windows', 4, 3);
INSERT INTO `materi` VALUES (180, 'privat', '0', 'Ms. Windows', 2, 0);
INSERT INTO `materi` VALUES (181, 'privat', '0', 'Ms. Word', 12, 0);
INSERT INTO `materi` VALUES (182, 'privat', '0', 'Ms. Excell', 12, 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `privat`
-- 

CREATE TABLE `privat` (
  `id` int(2) NOT NULL auto_increment,
  `id_materi` varchar(3) NOT NULL,
  `id_siswa` varchar(5) NOT NULL,
  `ses1` varchar(2) NOT NULL,
  `ses2` varchar(2) NOT NULL,
  `ses3` varchar(2) NOT NULL,
  `ses4` varchar(2) NOT NULL,
  `ses5` varchar(2) NOT NULL,
  `ses6` varchar(2) NOT NULL,
  `ses7` varchar(2) NOT NULL,
  `ses8` varchar(2) NOT NULL,
  `ses9` varchar(2) NOT NULL,
  `ses10` varchar(2) NOT NULL,
  `ses11` varchar(2) NOT NULL,
  `ses12` varchar(2) NOT NULL,
  `ses13` varchar(2) NOT NULL,
  `ses14` varchar(2) NOT NULL,
  `ses15` varchar(2) NOT NULL,
  `ses16` varchar(2) NOT NULL,
  `ses17` varchar(2) NOT NULL,
  `ses18` varchar(2) NOT NULL,
  `ses19` varchar(2) NOT NULL,
  `ses20` varchar(2) NOT NULL,
  `ses21` varchar(2) NOT NULL,
  `ses22` varchar(2) NOT NULL,
  `ses23` varchar(2) NOT NULL,
  `ses24` varchar(2) NOT NULL,
  `ses25` varchar(2) NOT NULL,
  `ses26` varchar(2) NOT NULL,
  `ses27` varchar(2) NOT NULL,
  `ses28` varchar(2) NOT NULL,
  `ses29` varchar(2) NOT NULL,
  `ses30` varchar(2) NOT NULL,
  `ses31` varchar(2) NOT NULL,
  `ses32` varchar(2) NOT NULL,
  `ses33` varchar(2) NOT NULL,
  `ses34` varchar(2) NOT NULL,
  `ses35` varchar(2) NOT NULL,
  `ses36` varchar(2) NOT NULL,
  `ses37` varchar(2) NOT NULL,
  `ses38` varchar(2) NOT NULL,
  `ses39` varchar(2) NOT NULL,
  `ses40` varchar(2) NOT NULL,
  `nilai_harian` int(3) NOT NULL default '0',
  `nilai_tugas` int(3) NOT NULL default '0',
  `nilai_tengah` int(3) NOT NULL default '0',
  `nilai_akhir` int(3) NOT NULL default '0',
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `privat`
-- 

INSERT INTO `privat` VALUES (1, '181', '26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '');
