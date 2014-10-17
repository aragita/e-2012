/*
MySQL Data Transfer
Source Host: localhost
Source Database: administrasi
Target Host: localhost
Target Database: administrasi
Date: 8/10/2006 5:05:36 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for admin
-- ----------------------------
CREATE TABLE `admin` (
  `id` int(2) NOT NULL auto_increment,
  `userid` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for angsuran
-- ----------------------------
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

-- ----------------------------
-- Table structure for data_angsuran
-- ----------------------------
CREATE TABLE `data_angsuran` (
  `id` int(4) NOT NULL auto_increment,
  `jurusan` varchar(6) NOT NULL,
  `angsuran` varchar(2) NOT NULL,
  `gel1` varchar(7) NOT NULL,
  `gel2` varchar(7) NOT NULL,
  `gel3` varchar(7) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_kelas
-- ----------------------------
CREATE TABLE `data_kelas` (
  `id_data_kelas` int(4) NOT NULL auto_increment,
  `nama_kelas` varchar(50) NOT NULL,
  `program` varchar(15) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY  (`id_data_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_siswa
-- ----------------------------
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
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='InnoDB free: 5120 kB; InnoDB free: 5120 kB; InnoDB free: 512';

-- ----------------------------
-- Table structure for instruktur
-- ----------------------------
CREATE TABLE `instruktur` (
  `id` int(3) NOT NULL auto_increment,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for jurusan
-- ----------------------------
CREATE TABLE `jurusan` (
  `id` int(2) NOT NULL auto_increment,
  `jurusan` varchar(200) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
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

-- ----------------------------
-- Table structure for kelas_aktif
-- ----------------------------
CREATE TABLE `kelas_aktif` (
  `id` int(2) NOT NULL auto_increment,
  `id_kelas` varchar(5) default NULL,
  `id_materi` varchar(3) default NULL,
  `id_siswa` varchar(5) default NULL,
  `ses1` varchar(11) default NULL,
  `ses2` varchar(11) default NULL,
  `ses3` varchar(11) default NULL,
  `ses4` varchar(11) default NULL,
  `ses5` varchar(11) default NULL,
  `ses6` varchar(11) default NULL,
  `ses7` varchar(11) default NULL,
  `ses8` varchar(11) default NULL,
  `ses9` varchar(11) default NULL,
  `ses10` varchar(11) default NULL,
  `ses11` varchar(11) default NULL,
  `ses12` varchar(11) default NULL,
  `ses13` varchar(11) default NULL,
  `ses14` varchar(11) default NULL,
  `ses15` varchar(11) default NULL,
  `ses16` varchar(11) default NULL,
  `ses17` varchar(11) default NULL,
  `ses18` varchar(11) default NULL,
  `ses19` varchar(11) default NULL,
  `ses20` varchar(11) default NULL,
  `ses21` varchar(11) default NULL,
  `ses22` varchar(11) default NULL,
  `ses23` varchar(11) default NULL,
  `ses24` varchar(11) default NULL,
  `ses25` varchar(11) default NULL,
  `ses26` varchar(11) default NULL,
  `ses27` varchar(11) default NULL,
  `ses28` varchar(11) default NULL,
  `ses29` varchar(11) default NULL,
  `ses30` varchar(11) default NULL,
  `ses31` varchar(11) default NULL,
  `ses32` varchar(11) default NULL,
  `ses33` varchar(11) default NULL,
  `ses34` varchar(11) default NULL,
  `ses35` varchar(11) default NULL,
  `ses36` varchar(11) default NULL,
  `ses37` varchar(11) default NULL,
  `ses38` varchar(11) default NULL,
  `ses39` varchar(11) default NULL,
  `ses40` varchar(11) default NULL,
  `nilai_harian` int(3) default '0',
  `nilai_tugas` int(3) default '0',
  `nilai_tengah` int(3) default '0',
  `nilai_akhir` int(3) default '0',
  `status` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for materi
-- ----------------------------
CREATE TABLE `materi` (
  `id` int(3) NOT NULL auto_increment,
  `jurusan` varchar(10) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `materi` varchar(200) NOT NULL,
  `ses_inst` int(2) default NULL,
  `ses_ass` int(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='InnoDB free: 5120 kB; InnoDB free: 5120 kB';

-- ----------------------------
-- Table structure for privat
-- ----------------------------
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

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Front Office', 'madcoms', '1');
INSERT INTO `admin` VALUES ('2', 'Administrasi', 'madcoms', '2');
INSERT INTO `admin` VALUES ('3', 'Kadiv Pendidikan', 'madiun', '22');
INSERT INTO `admin` VALUES ('4', 'Kabag Administrasi', 'madiun', '22');
INSERT INTO `admin` VALUES ('5', 'Direktur', 'madcoms', '3');
INSERT INTO `admin` VALUES ('6', 'administrator', '3266', '0');
INSERT INTO `data_angsuran` VALUES ('1', 'KAPP', '1', '700000', '900000', '1050000');
INSERT INTO `data_angsuran` VALUES ('2', 'KAPP', '2', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES ('3', 'KAPP', '3', '300000', '300000', '300000');
INSERT INTO `data_angsuran` VALUES ('4', 'KAPP', '4', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES ('5', 'KAPP', '5', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('6', 'KAPP', '6', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('7', 'KAPP', '7', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('8', 'KAPP', '8', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('9', 'KAPP', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('10', 'AMP', '2', '400000', '400000', '400000');
INSERT INTO `data_angsuran` VALUES ('11', 'AMP', '3', '300000', '300000', '300000');
INSERT INTO `data_angsuran` VALUES ('12', 'AMP', '4', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('13', 'AMP', '5', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('14', 'AMP', '6', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('15', 'AMP', '7', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('16', 'AMP', '8', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('17', 'AMP', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('18', 'AMP', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES ('19', 'MIK', '1', '850000', '1050000', '1200000');
INSERT INTO `data_angsuran` VALUES ('20', 'MIK', '2', '600000', '600000', '600000');
INSERT INTO `data_angsuran` VALUES ('21', 'MIK', '3', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES ('22', 'MIK', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES ('23', 'MIK', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES ('24', 'MIK', '6', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES ('25', 'MIK', '7', '225000', '225000', '225000');
INSERT INTO `data_angsuran` VALUES ('26', 'MIK', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('27', 'MIK', '9', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('28', 'MIK', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES ('29', 'DGAD', '1', '900000', '1100000', '1250000');
INSERT INTO `data_angsuran` VALUES ('30', 'DGAD', '2', '750000', '750000', '750000');
INSERT INTO `data_angsuran` VALUES ('31', 'DGAD', '3', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES ('32', 'DGAD', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES ('33', 'DGAD', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES ('34', 'DGAD', '6', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES ('35', 'DGAD', '7', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES ('36', 'DGAD', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('37', 'DGAD', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('38', 'DGAD', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES ('39', 'DTAK', '1', '900000', '1100000', '1250000');
INSERT INTO `data_angsuran` VALUES ('40', 'DTAK', '2', '750000', '750000', '750000');
INSERT INTO `data_angsuran` VALUES ('41', 'DTAK', '3', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES ('42', 'DTAK', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES ('43', 'DTAK', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES ('44', 'DTAK', '6', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES ('45', 'DTAK', '7', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES ('46', 'DTAK', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('47', 'DTAK', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('48', 'DTAK', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES ('49', 'TSJW', '1', '900000', '1100000', '1250000');
INSERT INTO `data_angsuran` VALUES ('50', 'TSJW', '2', '750000', '750000', '750000');
INSERT INTO `data_angsuran` VALUES ('51', 'TSJW', '3', '500000', '500000', '500000');
INSERT INTO `data_angsuran` VALUES ('52', 'TSJW', '4', '350000', '350000', '350000');
INSERT INTO `data_angsuran` VALUES ('53', 'TSJW', '5', '250000', '250000', '250000');
INSERT INTO `data_angsuran` VALUES ('54', 'TSJW', '6', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES ('55', 'TSJW', '7', '200000', '200000', '200000');
INSERT INTO `data_angsuran` VALUES ('56', 'TSJW', '8', '150000', '150000', '150000');
INSERT INTO `data_angsuran` VALUES ('57', 'TSJW', '9', '125000', '125000', '125000');
INSERT INTO `data_angsuran` VALUES ('58', 'TSJW', '10', '75000', '75000', '75000');
INSERT INTO `data_angsuran` VALUES ('59', 'AMP', '1', '650000', '850000', '1000000');
INSERT INTO `data_kelas` VALUES ('2', 'OKT - 06.03', 'Reguler', '14 Juli 2006', '0');
INSERT INTO `data_kelas` VALUES ('3', 'OKP - 06.03', 'Reguler', '14 Juli 2006', '0');
INSERT INTO `data_kelas` VALUES ('4', 'OKP - 06.04', 'Reguler', '25 Agustus 2006', '0');
INSERT INTO `data_kelas` VALUES ('5', 'OKT - 06.04', 'Reguler', '26 Agustus 2006', '0');
INSERT INTO `data_kelas` VALUES ('6', 'OKP - 06.01', 'Reguler', '16 Maret 2006', '1');
INSERT INTO `data_kelas` VALUES ('7', 'OKP - 06.02', 'Reguler', '23 Mei 2006', '0');
INSERT INTO `data_kelas` VALUES ('8', 'OKT - 06.01', 'Reguler', '15 Maret 2006', '1');
INSERT INTO `data_kelas` VALUES ('9', 'OKT - 06.02', 'Reguler', '23 Mei 2006', '1');
INSERT INTO `data_siswa` VALUES ('1', 'OKP', '', '0', '20063001', 'Nur Muhammad Ridho', 'Jakarta|6|12|1986', 'Jl. Pangan Ds.Sempol Rt.8 Rw.2|Maospati|Maospati', 'Magetan|', 'Sardjono|Wiraswasta|Sri Hartatik|Wiraswasta', 'SMK Angkasa', '2004', '(0351)867132', '081317476980', '', 'Islam', 'Lanud Iswahyudi|', '2006', 'SMA|Teknik Mesin', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Nur40', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('2', 'OKP', '', '0', '20063002', 'Andri Lestiyani', 'Magetan|23|8|1985', 'Ds. Kediren Rt. 2 Rw. 1|Kediren|Lembeyan', 'Magetan|63372', 'Kusnun|Tani|Kadiyem|Tani', 'SMAN 1 Magetan', '2005', '', '085235444390', '', 'Islam', 'Jl. Monginsidi No.24 Magetan|', '2006', 'SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Andri30', '123', '19 April 2006');
INSERT INTO `data_siswa` VALUES ('3', 'OKT', '', '0', '20062001', 'Susi Retianingsih', 'Madiun|7|3|1982', 'Jl. Ponorogo No.265 Rt. 6 Rw. 2|Kaibon|Geger', 'Madiun|63171', 'Uning Efendi|Wiraswasta|Hariyani|Wiraswasta', 'STIE YKPN YOGYAKARTA', '2004', '( 0351 ) 451937', '085235003024', 'Cici-Chan 82@yahoo.com', 'Islam', 'Jl. Seturan Yogyakarta|( 0274 ) 486160', '2006', ' SARJANA S1|Akuntansi', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Susi12', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('4', 'OKT', '', '0', '20062002', 'Wahyu Ali Nursanto', 'Madiun|22|6|1983', 'Jl. Maudara No. 12 B Rt.1 Rw.3|Winongo|Mangunharjo', 'Madiun|63126', 'Marsono|Swasta|Hariyati|Ibu Rumah Tangga', 'SMK Gamaliel 1 Madiun', '2001', '( 0351 ) 463511', '', '', 'Kristen', 'Jl. Slamet Riyadi|', '2006', ' SMA|Teknik Mesin', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Wahyu45', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('5', 'OKT', '', '0', '20062003', 'Heru Srinowo Cahyono', 'Madiun|9|9|1986', 'Ds. Plumpungrejo Rt.10 Rw.1|Plumpungrejo|Wonoasri', 'Madiun|', 'Suparmin|Pensiunan PNS|Sularni|Ibu Rumah Tangga', 'SMAN 1 Saradan', '2005', '', '081335561877', '', 'Islam', '|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Heru18', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('6', 'OKT', '', '0', '20062004', 'Sismiyanto', 'Magetan|11|6|1984', 'Jl. Menur Rt.14 Rw.4|Takeran|Takeran', 'Magetan|63383', 'Sujiman|Swasta|Suratmi|Swasta', 'SMK PSM Takeran', '2003', '', '081553134176', '', 'Islam', 'Takeran|', '2006', ' SMA|Teknik Mesin', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Sis33', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('7', 'OKT', '', '0', '20062005', 'Erwin Tri Astuti', 'Magetan|19|7|1986', 'Jl. Beringin Rt. 8 Rw. 2|Kawedanan|Kawedanan', 'Magetan|63382', 'Kasimin|Karyawan PG|Sumirah|Ibu Rumah Tangga', 'SMAN 1 Parang', '2005', '', '085649767924', '', 'Islam', 'Jl. Raya Parang|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Erwin57', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('8', 'OKT', '', '0', '20062006', 'Imas Dian Purwandani', 'Madiun|8|12|1989', 'Jl. Sanggar Manis 15 Rt.55 Rw.11|Manisrejo|Taman', 'Madiun|', 'Sidik Wirjanto, M.Pd|Guru|Handik Indarwati, S.Pd|Guru', 'SMAN 2 Madiun', '-', '( 0351 ) 493719', '08125943181', '', 'Islam', 'Jl. Biliton Madiun|', '2006', 'Masih menjadi siswa SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Imas09', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('9', 'OKT', '', '0', '20062007', 'Ana Kuswardhani', 'Madiun|1|4|1983', 'Ds. Nglanduk Jl. Triyasa No. A R. 9 Rw. 3|Nglanduk|Wungu', 'Madiun|63181', 'Kusni|Polri|Suminem|Guru', 'Universitas Merdeka Madiun', '-', '(0351) 471001', '081335807118', '', 'Islam', 'Jl. Serayu|', '2006', 'Masih menjadi siswa SARJANA S1|Manajemen', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Ana28', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('10', 'OKT', '', '0', '20062008', 'Ari Kuswardhani', 'Madiun|1|4|1983', 'Ds. Nglanduk Jl. Triyasa No. 6A R. 9 Rw. 3|Nglanduk|Wungu', 'Madiun|63181', 'Kusni|Polri|Suminem|Guru', 'Universitas Merdeka Madiun', '-', '(0351) 471001', '085235508235', '', 'Islam', 'Jl. Serayu|', '2006', 'Masih menjadi siswa SARJANA S1|Akuntansi', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Ari27', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('11', 'OKT', '', '0', '20062009', 'Ipung Jatmiko', 'Madiun|4|3|1987', 'Jl. Letjen Haryono Rt. 14 Rw. 4|Metesih|Jiwan', 'Madiun|63161', 'Sunardi|Swasta|Ninik Pujiati|Ibu Rumah Tangga', 'SMAN 4 Madiun', '2005', '(0351) 498443', '081335240096', '', 'Islam', 'Jl. Serayu|', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Ipung', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('12', 'OKT', '', '0', '20062010', 'Muhammad Wahyu Hidayat', 'Madiun|7|7|1989', 'Jl. pasar Slering No. 118 Rt. 7 Rw. 2|Sewulan|Dagangan', 'Madiun|', 'H. Muhammad Wahyu Utomo|Wiraswasta|Lina Hidayati|Wiraswasta', 'SMPN 1 Dagangan', '2004', '', '081335724042', '', 'Islam', 'Jl. Raya Dungus Ds. Banjarsari Kulon, Dagangan|', '2006', ' SMP|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Muhammad57', '123', '26 April 2006');
INSERT INTO `data_siswa` VALUES ('13', 'OKT', '', '0', '20062011', 'Sri Hartini', 'Magetan|26|3|1979', 'Ds. Petungrejo Rt. 1 Rw. 1||Nguntoronadi', 'Magetan|', 'Bakri|Guru|Sartiningsih|Guru', 'IKIP PGRI Madiun', '2003', '(0351) 7741612', '', '', 'Islam', 'Jl. Setia Budi|', '2006', ' SARJANA S1|Akuntansi', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Sri24', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('14', 'OKT', '', '0', '20062012', 'Agnessia Budhi Silvana', 'Madiun|15|3|1987', 'Jl. Tanjung Manis Gg. II / 02A Rt. 50 Rw. III|Manisrejo|Taman', 'Madiun|63138', 'Budi Hardjo|Pegawai Negeri|Kustinah Ganefati|Pegawai Negeri', 'SMAN 4 Madiun', '2005', '(0351) 494955', '085649787896', '', 'Islam', 'Jl. Serayu |', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Agnessia', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('15', 'OKT', '', '0', '20062013', 'Dhenny Mahendra', 'Madiun|17|8|1990', 'Jl. Mundu No. 115 Rt. 10 Rw. 3|Sugih Waras|Saradan', 'Madiun|', 'Hudji Edy Waryanto|Perhutani|Lastmia|Ibu Rumah Tangga', 'SMAN 1 Saradan', '-', '(0351) 383551', '081335244811', '', 'Islam', 'Jl. Madiun - Surabaya|', '2006', 'Masih menjadi siswa SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Dhenny11', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('16', 'OKT', '', '0', '20062014 ', 'Anang Kriswanto', 'Madiun|14|9|1989', 'Jl. Mundu Gg. YB. Kampung Baru|Sugih Waras|Saradan', 'Madiun|', 'Agus Sukeni|Swasta|Anik Priyani|Ibu Rumah Tangga', 'SMAN 2 Mejayan', '-', '', '', '', 'Islam', '|', '2006', 'Masih menjadi siswa SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Anang49', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('17', 'OKT', '', '0', '20062015', 'Sri Utami', 'Magetan|6|3|1986', 'Takeran Rt. 8 Rw. 2|Takeran|Takeran', 'Magetan|', 'M. Lahuri|PNS|Nurul Indrawati|PNS', 'Aliyah Darul Huda', '2003', '(0351) 437097', '', '', 'Islam', 'Jl. Ir. H. Juanda Mayak Bratan Ponorogo|', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Sri Utami12', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('18', 'OKT', '', '0', '20062016', 'Indra Herwandoko', 'Trenggalek|30|4|1984', 'Ciliwung VII No. 2|Taman|', 'Madiun|', 'Tarko|PNS|Sadinah|', 'SMAN 1 Durenan', '2002', '(0351) 455853', '081335181709', '', 'Islam', '|', '2006', ' SMA|Bahasa', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Indra36', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('19', 'OKT', '', '0', '20062017', 'Achmad Zam - Zam Aghazy', 'Sumenep|27|3|1993', 'Jl. A.R. Saleh IIB ||Taman', 'Madiun|', 'H. Muh. Ali Sabtu, S.H.|PNS|Hj. Endang N.R.|', 'SMPN 4 Madiun', '-', '(0351) 462037', '081335022993', '', 'Islam', 'Jl. A.R. Saleh No. 3|', '2006', 'Masih menjadi siswa SMP|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Achmad02', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('20', 'OKT', '', '0', '20062018', 'Lia Dewi Kusumawati', 'Magetan|11|6|1987', 'Jl. Beringin Rt. 8 Rw. 2|Kawedanan|Kawedanan', 'Magetan|63382', 'Slamet|Wiraswasta|Mujiati|Ibu Rumah Tangga', 'SMKN 2 Magetan', '2005', '(0351) 438987', '081359074508', '', 'Islam', '|', '2006', ' SMA|Bahasa', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Lia23', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('21', 'OKT', '', '0', '20063013', 'Teddy Firman Honasan', 'Magetan|25|10|1989', 'Ds. Grabahan Rt. 5 Rw. 2||Karangrejo', 'Magetan|', '(Alm) Gunawan|-|Yayuk Sumarni|Wiraswasta', 'SMA PGRI 1 Maospati', '-', '(0351) 868127', '03517794207', '', 'Islam', '|', '2006', 'Masih menjadi siswa SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Teddy36', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('22', 'OKP', 'OKP - 06.01', '0', '20063003', 'Budi Prayogo', 'Jakarta|5|6|1988', 'Ds, Temboro Rt. 6 Rw. 3|Temboro|Karas', 'Magetan|', 'Saminan|Pegawai Pabrik|Yatmi|Ibu Rumah Tangga', 'SMK Penerbangan Angkasa', '-', '', '08159289115', '', 'Islam', 'Jl. Depo Har 60 Lanud Iswahyudi|', '2006', 'Masih menjadi siswa STM|Teknik Mesin', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Budi19', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('23', 'OKP', 'OKP - 06.01', '0', '20063004', 'Dwi Nuranti', 'Magetan|17|3|1986', 'Ds. Lemahbang Rt. 2 Rw. 1|Lemahbang|Bendo', 'Magetan|', 'Bari|Wiraswasta|Supi|Tani', 'SMA PGRI 1 Maospati', '2005', '', '0813355210613', '', 'Islam', '|', '2006', ' SMA|IPA', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Dwi43', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('24', 'OKP', 'OKP - 06.01', '0', '20063005', 'Wahyu Indah Prasetyowati', 'Magetan|7|7|1987', 'Ds. Ginuk Rt. 5 Rw. 1|Ginuk|Karas', 'Magetan|', 'Toyibun|Swasta|Sukini|Swasta', 'SMA PGRI 1 Maospati', '2005', '', '081335549197', '', 'Islam', '|', '2006', ' SMA|IPA', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Wahyu46', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('25', 'OKP', 'OKP - 06.01', '0', '20053006', 'Bayu Purnama Aji', 'Madiun|9|6|1987', 'Jl. Raya Ponorogo Rt. 23 Rw. 7 |Dolopo|Dolopo', 'Madiun|63174', 'Misdi Asbari|Wiraswasta|Harini|Ibu Rumah Tangga', 'SMAN 1 Dolopo', '2005', '(0351) 367657', '081335834260', '', 'Islam', 'Jl. Suluk Dolopo|', '2006', ' SMA|IPS', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Bayu54', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('26', 'OKP', 'OKP-06.04', '0', '20063008', 'Dicky Firmansyah', 'Madiun|27|3|1985', 'Perum Kelun Blok 0/11 Rt. 2 Rw. 3|Kelun|Kartoharjo', 'Madiun|63112', 'Wiyono|TNI|Sumarning|-', 'SMAN 2 Madiun', '2003', '(0351) 473064', '085649022951', '', 'Islam', 'Jl. Biliton Madiun|', '2006', ' SMA|IPS', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Dicky35', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('27', 'OKP', 'OKP-06.03', '0', '20063009', 'Desak Made Dewi K.', 'Magetan|15|8|1982', 'Jl. K.H. Dewantoro IIIB A/10 Rt. 12 Rw. 9|Selosari|Magetan', 'Magetan|63313', 'D.M. Bandhia Yoga, S.H.|PNS|Endang Suhyanti|Wiraswasta', 'Univ. Janabadra Yogyakarta', '2005', '', '085643225565', '', 'Islam', '|', '2006', ' SARJANA S1|Manajemen', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Desak12', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('28', 'OKT', '', '0', '20063010', 'Hanif Asnuri', 'Madiun|28|10|1989', 'Ds. Singgahan Rt. 3 Rw. 1|Kebonsari|Kebonsari', 'Madiun|', 'Widji Santoso|Swasta|Mar\'atun Nasikhah|Dokter', 'SMK Penerbangan Antariksa', '-', '', '081335829910', '', 'Islam', 'Jl. May. Panjaitan No. 12|', '2006', 'Masih menjadi siswa STM|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Hanif20', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('29', 'OKP', 'OKP-06.03', '0', '20063011', 'Oki Wijayanti', 'Madiun|10|10|1986', 'Jl. Merak Selatan Rt. 7 Rw. 3|Nambangan Kidul|Mangunharjo', 'Madiun|', 'Suparman|Wiraswasta ( Penjahit )|Saikem|Pedagang', 'SMAN 5 Madiun', '2005', '(0351) 498118', '085649800596', '', 'Islam', 'Jl. Mastrib|', '2006', ' SMA|IPS', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Oki49', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('30', 'OKP', 'OKP-06.03', '0', '20063012', 'Yuli itsna H.', 'Madiun|29|7|1974', 'Jl. Margabawero V/4 ||', 'Madiun|', 'Drs. H. Soedirman|Dosen|Karsiyani|Pensiunan Pegawai Negeri', 'STIE Malang', '1997', '(0351) 455630', '', '', 'Islam', '|', '2006', ' SARJANA S1|Akuntansi', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Yuli38', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('31', 'OKP', 'OKP-06.03', '0', '20063014', 'Suryanti', 'Magetan|8|4|1985', 'Ds. Tawangrejo Rt. 4 Rw. 1|Takeran|Takeran', 'Magetan|', 'Kasni|Tani|Djumirah|Tani', 'SMKN 5 Madiun', '2005', '', '081335005865', '', 'Islam', 'Jl. Merak No. 5 Madiun|', '2006', ' SMA|Akuntansi', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Suryanti59', '123', '27 April 2006');
INSERT INTO `data_siswa` VALUES ('32', 'WORKSHOP', 'Workshop', '0', '20063015', 'Leni Setyawati', 'Balikpapan|12|5|1982', 'Jl.Bima no.6|Oro-Oro Ombo|Kartoharjo', 'Madiun|63115', 'Asmadi|-|Sukesi|Ibu Rumah Tangga', 'Universitas Islam Indonesia Yogyakarta', '2006', '459503', '081803441804', 'setyawati-leni@yahoo.com', 'Islam', 'Jl.Kaliurang km 14,5|-', '2006', ' SARJANA S1|Tekhnik Komputer', 'Pelajar/Mahasiswa||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'leni27', '123', '24 Mei 2006');
INSERT INTO `data_siswa` VALUES ('33', 'OKP', 'OKP-06.04', '0', '20063016', 'Sabar Situmorang', 'D. Martumbur|18|2|1981', 'Jl. Kemuning No. 1||', 'Madiun|', 'T. Situmorang|Pedagang|R. Silitonga|Petani', 'SMU Dharma Bhakti Siborong - Borong', '1999', '0351 - 467368', '', '', 'Kristen', '|', '2003', 'SMA|IPA', '||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Sabar', '123', '20 Maret 2003');
INSERT INTO `data_siswa` VALUES ('34', 'KAPP', '', '0', '', ' Ruli Handayani', ' Ponorogo, 07 April 1985|7|4|1985', ' Jl. Sidowaluyo No. 52 |Kel. Carat Kauman  |', 'Ponorogo|', ' Sujito|||', ' SMUN 1 BADEGAN', '-', 'Tlp. (0352) 751422', '', '', 'Islam', '|', '2003', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '44', '', '20 Maret 2003');
INSERT INTO `data_siswa` VALUES ('35', 'OKT', '', '0', '', 'Indah Ika Widya Kusuma Ningrum', 'Malang|7|12|1985', 'Ds. Kedondong Rt. 01 Rw. 01| - |Kebonsari', 'Madiun|', 'Mohc Wahyudi|TNI|Sri Asmini| - ', '', '2003', '(0351) 368953', ' - ', ' - ', 'Islam', ' - | - ', '2003', ' MA|Akuntansi', '-| - | - | - | - | - | - ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Indah08', '123', '22 Maret 2003');
INSERT INTO `data_siswa` VALUES ('36', 'OKP', 'OKP - 06.01', '0', '20063022', 'Hanif Asnuri', 'Madiun|28|10|1989', 'Ds. Singgahan Rt. 03 Rw. 01|Kebonsari|Kebonsari', 'Madiun| - ', 'Widjisantoso|Swasta|Naratun Nasillah|Perawat', 'SMK PENERBANGAN ANTARIKSA', '-', ' - ', '08133582910', ' - ', 'Islam', 'Jl. Mayjen Panjaitan No. 12|', '2003', 'Masih menjadi siswa STM|IPA', '-| - | - | - | - | - | - ', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Hanif02', '123', '22 Maret 2003');
INSERT INTO `data_siswa` VALUES ('37', 'AMP', '', '1', '', ' Yeti Puspita Sari', '  Madiun|5|10|1985', ' Ds. Banjarsari Wetan RT .09 RW.03  ||Dagangan', 'Madiun|', ' Supriadi|||', '', '-', ' -', '085235081851', ' -', 'Islam', ' SMAN 1 DAGANGAN| - ', '2006', ' SD|IPA', '-| -| -| -| -| -| -', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ' -16', ' - ', '20 Juli 2006');
INSERT INTO `data_siswa` VALUES ('40', 'AMP', '', '1', '', ' Ikawati', '  Ngawi|3|5|1988', ' Jl. Kutilang No. 20 Rt. 10 Rw. 01 Kendal ||Kendal', 'Ngawi|', 'Jadi | -| -| ', ' SMAN 2 MAGETAN', '2006', ' -', '081335671552', ' -', 'Islam', ' -| -', '2006', ' SMA|IPS', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('41', 'AMP', '', '1', '', ' Sulis Setiawati', 'Madiun|12|7|1987', ' Ds Banjarasari Rt. 05 Rw.01 Dsn Kepel Nglames|Nglames|Kartoharjo', 'Madiun|', 'Suparman|Wiraswasta|Sulasmi|', ' SMAN 1 NGLAMES', '2006', '', '', '', 'Islam', 'Jl. Raya Ngalme - Madiun|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '25', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('42', 'AMP', '', '1', '', 'Tri Mursiati', 'Madiun|6|5|1988', ' Ds. Mruwak RT.23 RW.24 |Nglumer|Dagangan', 'Madiun|', 'Abu Sodiq|Wiraswasta|Sokipatun|Ibu Rumah Tangga', 'SMAN 1 WUNGU', '2006', '', '081332231920', '', 'Islam', 'Jl. Raya Kare No. 156 Wungu - Madiun|0351 - 494070', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '12', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('43', 'AMP', '', '1', '', 'Debi Mayang Debrina', 'Cianjur|17|8|1988', 'Jl. Wiraraja No. 53 Rt. 03 Rw. 01 |Winongo|Manguharjo', 'Madiun|63126', 'Yussac Chrismanto|Swasta|Henni|Ibu Rumah Tangga', 'SMAN 5 MADIUN', '2006', '0351 - 495163', '085645710641', '', 'Islam', 'Jl. Mastrip|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '02', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('44', 'AMP', '', '1', '', 'Linda A Santi', '  Ngawi|8|1|1988', 'Dsn. Pilang Ds. Kawu Rt. 02 Rw. 01 |Kawu|Kedunggalar', 'Ngawi|63254', 'Kholiq|Tani|Reni|Ibu Rumah Tangga', 'SMAN 1 KEDUNGGALAR', '2006', '', '', '', 'Islam', 'Jl Raya Solo Km 12 Ngawi - Trinil|0351 - 7705064', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '50', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('45', 'AMP', '', '1', '', 'Sukaryati Malasari', '  Magetan|2|11|1987', 'Ds. Kedunggowo Rt. 03 Rw. 02 |Kedunggowo|Sukomoro', 'Magetan|63391', 'Romuan|Tani|Samsyah|Pembantu Rumah Tangga', 'SMAN 1 SUKOMORO', '2006', '', '', '', 'Islam', '|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '24', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('46', 'AMP', '', '1', '', ' Reni Marlina', '  Ngawi|7|12|1988', ' Ds. Gerih RT.05 RW.06 ||', 'Ngawi|', ' Martono|||', ' MAN NGAWI', '2006', '', '081335076899', '', 'Islam', '|', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '40', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('47', 'AMP', '', '1', '', ' Weppy Papita Setyaningrum', '  Ngawi|30|10|1988', ' Ds. Gerih RT.03 RW.02 ||', 'Ngawi|', ' Suanto|||', ' MAN NGAWI', '2006', '', ' 081359232316', '', 'Islam', '|', '2006', ' MA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '52', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('48', 'AMP', '', '1', '', ' Sustyaningsih', '  Magetan|27|6|1987', ' Ds. Gemah Pacalan ||Plaosan', 'Magetan|', ' Warsono|||', ' SMK1 MAGETAN', '2006', '', '', '', 'Islam', '|', '2006', ' STM|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '28', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('49', 'AMP', '', '1', '', ' Purwaningsih Endah Susilowati', 'Madiun|12|10|1986', 'Jl. Sukormanis I No. 10 Perum MAnis Rejo Rt. 54 Rw. 10|Manisrejio|Taman', 'Madiun|', 'Sujadi|PNS|Ernik Sudarwati|Ibu Ruma Tangga ', 'SMA COKROAMINOTO', '2005', '0351 - 7735049 ', '', '', 'Islam', 'Jl. Panglima Sudirman|', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '28', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('50', 'AMP', '', '1', '', ' Yeni Krisnawati', 'Madiun|20|9|1988', 'Ds. Kebonagung Rt. 13 Rw. 04|Kebonagung |Mejayan', 'Madiun|', 'Hartono|Petani|Umiarsih|Petani', 'SMK PGRI WONOASRI', '2006', '', '081335087765', '', 'Islam', 'JL. Thamrin No. 48 Caruban|0351 - 383064', '2006', ' STM|Manajemen', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '28', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('51', 'AMP', '', '1', '', 'Endang Kusuma Ningrum', 'Gombong|1|2|1979', 'Jl. Mliwis 38 Madiun|Nambangan Kidul|Manguharjo', 'Madiun|', 'Kasidi (Alm)|Purnawirawan ABRI|Sri Purwanti|Ibu Rumah Tangga', 'SMAN 1 GOMBONG', '1997', '0351 - 458926', '08164299566', '', 'Islam', '|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '04', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('52', 'AMP', '', '1', '', 'Wahyu Sri Lestari ', 'Magetan|22|7|1987', 'Kartoharjo Rt. 13 Rw. 04|Kartoharjo|Kartoharjo', 'Madiun|63394', 'Suwaji|Swasta|Yatni|Tani', 'SMAN 1 NGLAMES', '2006', '', '085648971782', '', 'Islam', 'Jl. Raya Nglames |0351 - 463506', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '43', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('53', 'AMP', '', '1', '', 'Yuli Astuti', 'Magetan|8|12|1986', 'Ds. Kartoharjo Rt. 13 Rw. 04 |Kartoharjo|Kartoharjo', 'Magetan|63394', 'Rebo|Tani|Suwarti|Tani', 'SMKN 1 MAGETAN', '2006', '', '085235778524', '', 'Islam', '|', '2006', ' STM|Manajemen', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '59', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('54', 'AMP', '', '1', '', 'Novianti Purawingrum', 'Magetan|13|11|1987', 'Ds. Sukomoro Rt 05 Rw. 02|Sukomoro|Sukomoro', 'Magetan|63391', 'Suratno|Tani|Sukarni|Ibu Rumah Tangga', 'SMAN 1 SUKOMORO', '2006', '', '081335988140', '', 'Islam', 'Ds. Kedunguwo|0351 - 891315', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '30', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('55', 'AMP', '', '1', '', 'Via Nur Firti', 'Magetan|1|1|1989', 'Ds. Kedungguwo Rt. 01  Rw. 02|Kedungguwo|Sukomoro', 'Magetan|63391', 'Sarnianto|Swasta|Sri Amini|Swasta', 'SMAN 1 SUKOMORO', '2006', '', '081586413345', '', 'Islam', 'Ds. Kedunguwo |0351 - 891315  ', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '12', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('56', 'AMP', '', '1', '', 'Yuli Nur Khaqim Rachmawati', 'Magetan|18|7|1987', 'Ds. Tinap Rt. 01 Rw. 02 |Tinap|Sukomoro', 'Magetan|63391', 'Sawal|PNS|Suwarni|Swasta', 'SMAN 1 SUKOMORO', '2006', '', '081329264822', '', 'Islam', 'Ds. Kedunguwo |0351 - 891315', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '28', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('57', 'AMP', '', '1', '', 'Retno Wulandari', 'Magetan|24|11|1988', 'Ds. Wates Rt. 04 Rw. 01 |Wates|Panekan', 'Magetan|6', 'Suradi|Tani|Surati|Tani', 'SMAN 1 SUKOMORO', '2006', '', '', '', 'Islam', 'Ds. Kedungguwo|0351 - 891315', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '54', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('58', 'AMP', '', '1', '', 'Dewi Muryani', 'Madiun|2|8|1988', 'Ds. Kedungrejo Rt. 04 Rw. 11 |Kedungrejo|Balerejo', 'Madiun|63152', 'Sadino|Petani|Karmani|Petani', 'SMAN 1 NGLAMES', '2006', '', '081335178390', '', 'Islam', 'Jl. Raya Nglames |0351 - 463506', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '13', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('59', 'AMP', '', '0', '', 'Yeni Ernawati', 'Madiun|4|11|1987', ' Ds. Sukowinanguh Rt. 05 Rw. 02  |Sukowinangun|', 'Magetan|', 'Suwarno|Wiraswasta|Giyem|', 'SMAN 3 MAGETAN', '2006', '', '081913069613', '', 'Islam', 'Jl. Raya Sarangan|0351 - 895528', '2006', 'SMA|IPA', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('60', 'AMP', '', '1', '', 'Yuni Susilowati', 'Madiun|25|1|1987', 'Jl. Apel No. 155 Rt. 12 Rw. 04 |Sukolilo|Jiwan', 'Madiun|', 'Jahdi|PNS|Kaminah|Wiraswasta', 'SMAN 1 JIWAN', '2006', '', '08152535648407', '', 'Islam', 'Jl. Dadang Gendhis Ds. Teguhan|', '2006', ' SMA|IPA', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '00', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('61', 'AMP', '', '1', '', 'Puji Astuti', 'Magetan|24|12|1986', 'Jl. Srikandi Kunthi RT. 04 Rw. 01 |Takeran|Takeran', 'Magetan|63383', 'Simah|Tani|Sainem|Tani', 'SMAN 1 KAWEDANAN', '2005', '', '081335770629', '', 'Islam', 'Jl. Raya Gorang-gareng - Magetan|', '2006', ' SMA|IPA', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('62', 'AMP', '', '1', '', 'Leni Tri Darwati', 'Magetan|2|9|1987', 'Jl. Jendral Sudirman Rt. 08 Rw. 03|Ngunjung|Maospati', 'Magetan|', 'Jono|Buruh Tani|Suning|Buruh Tani', 'SMAN 1 JIWAN', '2006', '0351 - 867049', '081335428094', '', 'Islam', 'Jl. Dadang Gendhis Ds. Jiwan|', '2006', ' SMA|IPS', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '52', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('63', 'AMP', '', '1', '', 'Sareh Wibowo Putro', 'Magetan|1|1|1987', 'Jl. Dr. Soetomo No. 10 Rt. 05 Rw.02 |Ngunjung|Maospati', 'Magetan|63392', 'Sukarno|PNS|Kustiyah|', 'SMAN 1 JIWAN', '2006', '0351 - 965480', '', '', 'Islam', '|', '2006', ' SMA|IPS', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '02', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('64', 'AMP', '', '2', '', 'Asih Windarti', 'Magetan|24|5|1985', 'Ds. Tinap Rt. 01 Rw. 01||Magetan', 'Magetan|', 'Badjuri|POLRI|Sumarni|', 'SMAN 1 SUKOMORO', '2006', '', '081335086756', '', 'Islam', 'Sukomoro|', '2006', ' SMA|IPA', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '43', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('65', 'AMP', '', '1', '', 'Moch. Furqon Amroni', 'Madiun|28|7|1984', 'Ketawang|Ketawang|Dolopo', 'Madiun|', 'Mulyono|Guru|Isrohatin|Wiraswasta', 'SMAN 1 DOLOPO', '2003', '', '', '', 'Islam', 'Dolopo - Madiun|', '2006', ' SMA|IPA', '||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '38', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('66', 'AMP', '', '1', '', 'Jupry', 'Magetan|19|5|1984', 'Ds. Gunungan Rt. 04 Rw.01||Kartoharjo', 'Magetan|', 'Badar|Tani|Darni|Tani', 'SMAN PGRI 1 MAOSPATI', '2005', '', '081359118756', '', 'Islam', 'Maospati|', '2006', ' SMA|IPS', '-||||||', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '03', '', '22 Juli 2006');
INSERT INTO `data_siswa` VALUES ('67', 'OKP', 'OKP - 06.01', '0', '20063021', 'Lusy Ratna Windarti', 'Magetan|2|11|1988', 'Ds. Bibis RT. 04 Rw.01 |Bibis|Sukomoro', 'Magetan|', 'Suratno|PNS|Sundari|Wiraswasta', 'SMAN 3 MAGETAN', '2005', '', '081335070628', '', 'Islam', 'Jl. Raya Sarangan|', '2006', ' SMA|IPA', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '25', '', '25 Juli 2006');
INSERT INTO `data_siswa` VALUES ('68', 'OKP', 'OKP - 06.01', '0', '20063020', 'Kiko hardani Putri', 'Madiun|11|5|1987', 'Jl. Nayaka Bhakti 100 E||', 'Madiun|', 'Suhartono|Pegawai PLN|Hartutik|Swasta', 'SMAN 5 MADIUN', '2005', '0351 - 465234', '', '', 'Islam', 'Jl. Mastrip|', '2006', ' SMA|IPS', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ' -09', '', '25 Juli 2006');
INSERT INTO `data_siswa` VALUES ('69', 'OKP', 'OKP - 06.01', '0', '20063019', 'Ariawan Febrianto', 'Bandung|9|2|1983', 'Jl. Wiyata Jaya No 12|Klegen|Kartoharjo', 'Madiun|', 'Sugiyanto|TNI - AU|Hari Rudjawati|', 'SMAN PGRI 1 MAOSPATI', '2001', '0351- 453074', '', '', 'Islam', '|', '2006', ' SMA|IPS', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '33', '', '25 Juli 2006');
INSERT INTO `data_siswa` VALUES ('70', 'OKP', 'OKP - 06.01', '0', '20063018', 'Witriandayani', 'Madiun|8|9|1978', 'Gulun Rt. 48 Rw. 15|Gulun|Kartoharjo', 'Madiun|', 'Wasimin Muryadi ( Alm )||Tusijem|', 'SMAN 5 MADIUN', '1997', '0351 - 494568', '', '', 'Islam', 'Jl. Mastrip|', '2006', ' SMA|IPS', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ' -19', '', '25 Juli 2006');
INSERT INTO `data_siswa` VALUES ('71', 'OKP', 'OKP - 06.01', '0', '20063017', 'Rita Rustiani', 'Madiun|6|7|1990', 'Jl. Dharma Manis II A/ 3 Rt. 21 Rw. 07|Manisrejo|Taman', 'Madiun|', 'Sutikno|Swasta|Supeni|Swasta', 'SMPN 4 MADIUN', '-', '', '0856245672', '', 'Islam', 'Jl. Abdurahman Shaleh|0351 - 462565', '2006', 'Masih menjadi siswa SMP|Kependidikan', '-||||||', '50000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '42', '', '25 Juli 2006');
INSERT INTO `instruktur` VALUES ('2', 'LL', 'Yeni Cahyono, SE.', 'Tetap', '12345');
INSERT INTO `instruktur` VALUES ('3', 'N', 'J. Leo', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('4', 'O', 'Wawan Setyo Hartono, SE.', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('5', 'Q', 'Evi H.', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('6', 'AA', 'Dinarwan', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('7', 'BB', 'Hendrik', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('8', 'CC', 'Netty', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('9', 'DD', 'Didik R.', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('10', 'FF', 'Martini', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('11', 'S', 'Ira', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('12', 'GG', 'Eni', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('13', 'F.1', 'Kamid', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('14', 'OO', 'Nunuk', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('15', 'HH', 'Hernawan, ST.', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('16', 'II', 'Mei Lenawati', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('17', 'JJ', 'Neni', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('18', 'KK', 'Puji', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('19', 'MM', 'Wahyu Efendi', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('20', 'PP', 'Anton', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('21', 'B', 'Agus', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('22', 'C', 'Yuli A', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('23', 'D', 'Dian', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('24', 'E', 'Amanda', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('25', 'F', 'Doedyk', 'Tetap', '123');
INSERT INTO `instruktur` VALUES ('26', 'H', 'Yani', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('27', 'J', 'Vero', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('28', 'K', 'Imron', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('30', 'Z', 'Narsih', 'Honorer', '123');
INSERT INTO `instruktur` VALUES ('31', 'P', 'Ivan Yunanto SE AK', 'Tetap', '123456');
INSERT INTO `jurusan` VALUES ('6', 'Komputer Akuntansi Perpajakan & Perbankan', 'KAPP', 'Diploma');
INSERT INTO `jurusan` VALUES ('7', 'Administrasi & Manajemen Perkantoran', 'AMP', 'Diploma');
INSERT INTO `jurusan` VALUES ('8', 'Manajemen Informatika Dan Komputer', 'MIK', 'Diploma');
INSERT INTO `jurusan` VALUES ('9', 'Desain Grafis Dan Animasi Digital', 'DGAD', 'Diploma');
INSERT INTO `jurusan` VALUES ('10', 'Desain Teknik Dan Animasi Komputer', 'DTAK', 'Diploma');
INSERT INTO `jurusan` VALUES ('11', 'Teknisi, Sistem Jaringan Dan Desain Web', 'TSJW', 'Diploma');
INSERT INTO `jurusan` VALUES ('12', 'Operator Komputer Terapan', 'OKT', 'Reguler');
INSERT INTO `jurusan` VALUES ('13', 'Operator Komputer Praktis', 'OKP', 'Reguler');
INSERT INTO `jurusan` VALUES ('14', 'Privat', 'privat', '');
INSERT INTO `jurusan` VALUES ('15', 'Workshop', 'workshop', '');
INSERT INTO `kelas` VALUES ('3', 'AMP - 1A.1', '29', '18 Juli 2006', 'AMP', 'P', 'S', '-', '6', '0');
INSERT INTO `kelas` VALUES ('4', 'AMP - 1 A.2', '28', '10 Juli 2006', 'AMP', 'N', '-', '-', '6', '0');
INSERT INTO `kelas` VALUES ('5', 'AMP - 1A.1', '28', '11 Juli 2006', 'AMP', 'P', 'S', '-', '6', '0');
INSERT INTO `kelas` VALUES ('6', 'AMP - 1 A.2', '29', '26 Juli 2006', 'AMP', 'N', '-', '-', '4', '0');
INSERT INTO `kelas` VALUES ('8', 'OKP - 06.01', '62', '15 Maret 2006', 'OKP', 'LL', 'Q', '-', '6', '0');
INSERT INTO `kelas` VALUES ('9', 'OKP - 06.01', '63', '4 April 2006', 'OKP', 'LL', 'O', '-', '18', '0');
INSERT INTO `kelas` VALUES ('10', 'OKP - 06.01', '64', '23 Mei 2006', 'OKP', 'LL', 'GG', '-', '18', '0');
INSERT INTO `kelas` VALUES ('11', 'OKT - 06.01', '56', '15 Maret 2006', 'OKT', 'Q', 'LL', '-', '6', '0');
INSERT INTO `kelas` VALUES ('12', 'OKT - 06.02', '174', '3 April 2006', 'OKT', 'O', 'S', '-', '18', '0');
INSERT INTO `kelas` VALUES ('13', 'OKT - 06.01', '175', '19 Mei 2006', 'OKT', 'Q', 'S', '-', '18', '0');
INSERT INTO `kelas_aktif` VALUES ('1', '9', '63', '71', '09/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '87', '0', '77', null);
INSERT INTO `kelas_aktif` VALUES ('2', '9', '63', '70', '09/08 06<t>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '58', '0', '69', null);
INSERT INTO `kelas_aktif` VALUES ('3', '9', '63', '69', '09/08 06<m>', '10/08 06<t>', '10/08 06<t>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '77', '87', '0', '87', null);
INSERT INTO `kelas_aktif` VALUES ('4', '9', '63', '67', '09/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '68', '98', '0', '90', null);
INSERT INTO `kelas_aktif` VALUES ('5', '9', '63', '68', '09/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '93', '78', '0', '89', null);
INSERT INTO `kelas_aktif` VALUES ('6', '8', '62', '24', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('7', '9', '63', '24', '09/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '87', '92', '0', '67', null);
INSERT INTO `kelas_aktif` VALUES ('8', '9', '63', '23', '09/08 06<m>', '10/08 06<m>', '10/08 06<t>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '88', '95', '0', '89', null);
INSERT INTO `kelas_aktif` VALUES ('9', '9', '63', '22', '09/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '90', '83', '0', '87', null);
INSERT INTO `kelas_aktif` VALUES ('10', null, '63', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('11', '10', '64', '71', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('12', '10', '64', '70', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('13', '10', '64', '69', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('14', '10', '64', '68', '10/08 06<t>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('15', '10', '64', '67', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('16', '10', '64', '25', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('17', '10', '64', '24', '10/08 06<m>', '10/08 06<m>', '10/08 06<t>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('18', '10', '64', '23', '10/08 06<m>', '10/08 06<t>', '10/08 06<m>', '10/08 06<t>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `kelas_aktif` VALUES ('19', '10', '64', '22', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', '10/08 06<m>', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `materi` VALUES ('2', 'KAP', '1', 'Ak. Keuangan I', '40', '0');
INSERT INTO `materi` VALUES ('3', 'KAP', '1', 'Hitung Dagang I', '20', '0');
INSERT INTO `materi` VALUES ('4', 'KAP', '1', 'Perpajakan I', '16', '0');
INSERT INTO `materi` VALUES ('5', 'KAP', '1', 'Bhs. Mandarin I', '30', '0');
INSERT INTO `materi` VALUES ('6', 'KAP', '1', 'Basic English', '25', '0');
INSERT INTO `materi` VALUES ('7', 'KAP', '1', 'Dasar-Dasar Man Keuangan', '14', '0');
INSERT INTO `materi` VALUES ('8', 'KAP', '1', 'MS-Windows', '6', '0');
INSERT INTO `materi` VALUES ('9', 'KAP', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('10', 'KAP', '1', 'MS-Word', '20', '0');
INSERT INTO `materi` VALUES ('11', 'KAP', '1', 'MS-Excel', '20', '0');
INSERT INTO `materi` VALUES ('12', 'KAP', '2', 'Ak. Keuangan II', '40', '0');
INSERT INTO `materi` VALUES ('13', 'KAP', '2', 'Hitung Dagang II', '20', '0');
INSERT INTO `materi` VALUES ('14', 'KAP', '2', 'Akuntansi Perpajakan', '16', '0');
INSERT INTO `materi` VALUES ('15', 'KAP', '2', 'Bhs. Mandarin II', '30', '0');
INSERT INTO `materi` VALUES ('16', 'KAP', '2', 'English for Communication', '25', '0');
INSERT INTO `materi` VALUES ('17', 'KAP', '2', 'Kewirausahaan', '10', '0');
INSERT INTO `materi` VALUES ('18', 'KAP', '2', 'Perpajakan II', '16', '0');
INSERT INTO `materi` VALUES ('19', 'KAP', '2', 'MS-Access', '12', '0');
INSERT INTO `materi` VALUES ('20', 'KAP', '2', 'MS-Power Point', '10', '0');
INSERT INTO `materi` VALUES ('21', 'KAP', '2', 'Aplikasi MS-Office', '10', '0');
INSERT INTO `materi` VALUES ('22', 'KAP', '2', 'MYOB Accounting', '16', '0');
INSERT INTO `materi` VALUES ('23', 'AMP', '1', 'Kearsipan', '16', '0');
INSERT INTO `materi` VALUES ('24', 'AMP', '1', 'Bhs. Mandarin I', '30', '0');
INSERT INTO `materi` VALUES ('25', 'AMP', '1', 'Basic English', '25', '0');
INSERT INTO `materi` VALUES ('26', 'AMP', '1', 'Korespondensi Bhs. Indonesia', '18', '0');
INSERT INTO `materi` VALUES ('27', 'AMP', '1', 'Kesekretariatan', '16', '0');
INSERT INTO `materi` VALUES ('28', 'AMP', '1', 'MS-Windows', '6', '0');
INSERT INTO `materi` VALUES ('29', 'AMP', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('30', 'AMP', '1', 'MS-Word', '20', '0');
INSERT INTO `materi` VALUES ('31', 'AMP', '1', 'MS-Excel', '20', '0');
INSERT INTO `materi` VALUES ('32', 'AMP', '1', 'MS-Power Point', '10', '0');
INSERT INTO `materi` VALUES ('33', 'AMP', '2', 'Kewirausahaan', '10', '0');
INSERT INTO `materi` VALUES ('34', 'AMP', '2', 'Bhs. Mandarin II', '30', '0');
INSERT INTO `materi` VALUES ('35', 'AMP', '2', 'English for Communication', '25', '0');
INSERT INTO `materi` VALUES ('36', 'AMP', '2', 'Korespondensi Bhs. Inggris', '18', '0');
INSERT INTO `materi` VALUES ('37', 'AMP', '2', 'Teknologi Perkantoran', '12', '0');
INSERT INTO `materi` VALUES ('38', 'AMP', '2', 'MS-Access', '12', '0');
INSERT INTO `materi` VALUES ('39', 'AMP', '2', 'Aplikasi MS-Office', '10', '0');
INSERT INTO `materi` VALUES ('40', 'AMP', '2', 'MS-Outlook', '5', '0');
INSERT INTO `materi` VALUES ('41', 'AMP', '2', 'MS-Visio', '5', '0');
INSERT INTO `materi` VALUES ('42', 'AMP', '2', 'MC-Flash', '14', '0');
INSERT INTO `materi` VALUES ('43', 'AMP', '2', 'MC-Director', '12', '0');
INSERT INTO `materi` VALUES ('56', 'OKT', '0', 'Windows + Internet ', '6', '0');
INSERT INTO `materi` VALUES ('57', 'OKT', '0', 'MS-Word ', '18', '0');
INSERT INTO `materi` VALUES ('58', 'OKT', '0', 'MS-Excel ', '18', '0');
INSERT INTO `materi` VALUES ('59', 'OKT', '0', 'MS-Access ', '12', '0');
INSERT INTO `materi` VALUES ('60', 'OKT', '0', 'MS-Power Point ', '8', '0');
INSERT INTO `materi` VALUES ('61', 'OKT', '0', 'Aplikasi MS-Office ', '6', '0');
INSERT INTO `materi` VALUES ('62', 'OKP', '0', 'Windows + Internet ', '6', '0');
INSERT INTO `materi` VALUES ('63', 'OKP', '0', 'MS-Word ', '18', '0');
INSERT INTO `materi` VALUES ('64', 'OKP', '0', 'MS-Excel ', '18', '0');
INSERT INTO `materi` VALUES ('65', 'OKP', '0', 'Aplikasi MS-Office ', '4', '0');
INSERT INTO `materi` VALUES ('66', 'PTK', '0', 'Windows + P. Komputer ', '4', '0');
INSERT INTO `materi` VALUES ('67', 'PTK', '0', 'Instalasi Hardware ', '8', '0');
INSERT INTO `materi` VALUES ('68', 'PTK', '0', 'Instalasi Software ', '18', '0');
INSERT INTO `materi` VALUES ('69', 'PTK', '0', 'Interkoneksi Jaringan ', '14', '0');
INSERT INTO `materi` VALUES ('70', 'DGM', '0', 'Windows + P. Komputer ', '4', '0');
INSERT INTO `materi` VALUES ('71', 'DGM', '0', 'Adobe Photoshop ', '14', '0');
INSERT INTO `materi` VALUES ('72', 'DGM', '0', 'Corel Draw ', '14', '0');
INSERT INTO `materi` VALUES ('73', 'DGM', '0', 'MC-Flash ', '14', '0');
INSERT INTO `materi` VALUES ('74', 'DGM', '0', 'MC-Director ', '12', '0');
INSERT INTO `materi` VALUES ('75', 'VBP', '0', 'Windows + P. Komputer ', '4', '0');
INSERT INTO `materi` VALUES ('76', 'VBP', '0', 'MS-Access ', '10', '0');
INSERT INTO `materi` VALUES ('77', 'VBP', '0', 'Vis. Basic Prog. ', '18', '0');
INSERT INTO `materi` VALUES ('78', 'VBP', '0', 'Vis. Basic Database ', '18', '0');
INSERT INTO `materi` VALUES ('79', 'VBP', '0', 'Vis. Basic Aplikasi ', '14', '0');
INSERT INTO `materi` VALUES ('80', 'VBP', '0', 'Crystal Reports ', '6', '0');
INSERT INTO `materi` VALUES ('81', 'DTA', '0', 'Windows + P. Komputer ', '4', '0');
INSERT INTO `materi` VALUES ('82', 'DTA', '0', 'AutoCAD 2D ', '18', '0');
INSERT INTO `materi` VALUES ('83', 'DTA', '0', 'AutoCAD 3D ', '18', '0');
INSERT INTO `materi` VALUES ('84', 'DTA', '0', '3D Studio Max ', '14', '0');
INSERT INTO `materi` VALUES ('85', 'DWD', '0', 'Windows + P. Komputer ', '4', '0');
INSERT INTO `materi` VALUES ('86', 'DWD', '0', 'Adobe Photoshop ', '14', '0');
INSERT INTO `materi` VALUES ('87', 'DWD', '0', 'MC-Flash ', '14', '0');
INSERT INTO `materi` VALUES ('88', 'DWD', '0', 'MS-Front Page/MM-Dreamweaver ', '14', '0');
INSERT INTO `materi` VALUES ('89', 'DWD', '0', 'Pemrograman PHP & MySQL ', '14', '0');
INSERT INTO `materi` VALUES ('90', 'DGAD', '0', 'Windows + P. Komputer ', '4', '0');
INSERT INTO `materi` VALUES ('91', 'DGAD', '0', 'Dasar Fotografi & Sinematografi ', '6', '0');
INSERT INTO `materi` VALUES ('92', 'DGAD', '0', 'Adobe Photoshop ', '14', '0');
INSERT INTO `materi` VALUES ('93', 'DGAD', '0', 'Adobe Premiere ', '14', '0');
INSERT INTO `materi` VALUES ('94', 'DGAD', '0', 'Adobe After Effect ', '10', '0');
INSERT INTO `materi` VALUES ('95', 'DGAD', '0', 'Aplikasi Digital Animation ', '12', '0');
INSERT INTO `materi` VALUES ('96', 'KOMPI', '1', 'MS-Windows', '4', '0');
INSERT INTO `materi` VALUES ('97', 'KOMPI', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('98', 'KOMPI', '1', 'MS-Word', '18', '0');
INSERT INTO `materi` VALUES ('99', 'KOMPI', '1', 'MS-Excel', '18', '0');
INSERT INTO `materi` VALUES ('100', 'KOMPI', '1', 'MS-Access', '12', '0');
INSERT INTO `materi` VALUES ('101', 'KOMPI', '1', 'MS-Power Point', '8', '0');
INSERT INTO `materi` VALUES ('102', 'KOMPI', '1', 'Aplikasi MS-Office', '6', '0');
INSERT INTO `materi` VALUES ('103', 'KOMPI', '1', 'Vis. Basic Prog.', '20', '12');
INSERT INTO `materi` VALUES ('104', 'KOMPI', '2', 'Vis. Basic Database', '18', '10');
INSERT INTO `materi` VALUES ('105', 'KOMPI', '3', 'Vis. Basic Aplikasi', '18', '10');
INSERT INTO `materi` VALUES ('106', 'KOMPI', '4', 'Crystal Reports', '6', '2');
INSERT INTO `materi` VALUES ('107', 'KOMPI', '5', 'SQL Server', '12', '6');
INSERT INTO `materi` VALUES ('108', 'KOMPI', '6', 'Aplikasi Pemrograman', '14', '8');
INSERT INTO `materi` VALUES ('109', 'DGAD', '1', 'MS-Windows', '4', '0');
INSERT INTO `materi` VALUES ('110', 'DGAD', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('111', 'DGAD', '1', 'MS-Word', '18', '0');
INSERT INTO `materi` VALUES ('112', 'DGAD', '1', 'MS-Excel', '18', '0');
INSERT INTO `materi` VALUES ('113', 'DGAD', '1', 'MS-Power Point', '8', '0');
INSERT INTO `materi` VALUES ('114', 'DGAD', '1', 'Aplikasi MS-Office', '6', '0');
INSERT INTO `materi` VALUES ('115', 'DGAD', '1', 'Corel Draw', '16', '10');
INSERT INTO `materi` VALUES ('116', 'DGAD', '1', 'Adobe Ilustrator', '12', '6');
INSERT INTO `materi` VALUES ('117', 'DGAD', '2', 'Dasar-2 Fotografi', '4', '0');
INSERT INTO `materi` VALUES ('118', 'DGAD', '2', 'Adobe Photoshop', '14', '8');
INSERT INTO `materi` VALUES ('119', 'DGAD', '2', 'MM-Flash', '14', '8');
INSERT INTO `materi` VALUES ('120', 'DGAD', '2', 'MM-Director', '12', '6');
INSERT INTO `materi` VALUES ('121', 'DGAD', '2', 'Dasar-2 Sinematografi', '6', '0');
INSERT INTO `materi` VALUES ('122', 'DGAD', '2', 'Adobe Premiere', '16', '10');
INSERT INTO `materi` VALUES ('123', 'DGAD', '3', '3D-Studio Max', '16', '10');
INSERT INTO `materi` VALUES ('124', 'DGAD', '3', 'Maya Unlimited', '12', '6');
INSERT INTO `materi` VALUES ('125', 'DGAD', '3', 'Adobe Audition', '4', '0');
INSERT INTO `materi` VALUES ('126', 'DGAD', '3', 'Adobe After Effect', '10', '6');
INSERT INTO `materi` VALUES ('127', 'DGAD', '3', 'Aplikasi Multimedia Interaktif', '8', '4');
INSERT INTO `materi` VALUES ('128', 'DGAD', '3', 'Aplikasi Digital Animation', '10', '6');
INSERT INTO `materi` VALUES ('129', 'DGAD', '3', 'Aplikasi 3D Animation & Video', '10', '6');
INSERT INTO `materi` VALUES ('130', 'DPWB', '1', 'MS-Windows', '4', '0');
INSERT INTO `materi` VALUES ('131', 'DPWB', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('132', 'DPWB', '1', 'MS-Word', '18', '0');
INSERT INTO `materi` VALUES ('133', 'DPWB', '1', 'MS-Excel', '18', '0');
INSERT INTO `materi` VALUES ('134', 'DPWB', '1', 'MS-Power Point', '8', '0');
INSERT INTO `materi` VALUES ('135', 'DPWB', '1', 'Aplikasi MS-Office', '6', '0');
INSERT INTO `materi` VALUES ('136', 'DPWB', '1', 'MS-Outlook', '5', '0');
INSERT INTO `materi` VALUES ('137', 'DPWB', '1', 'Adobe Photoshop Dasar', '10', '6');
INSERT INTO `materi` VALUES ('138', 'DPWB', '1', 'MM-Flash', '14', '8');
INSERT INTO `materi` VALUES ('139', 'DPWB', '2', 'Dasar-2 Fotografi', '4', '0');
INSERT INTO `materi` VALUES ('140', 'DPWB', '2', 'Adobe Photoshop Lanjutan', '10', '6');
INSERT INTO `materi` VALUES ('141', 'DPWB', '2', 'MS-Front Page', '14', '8');
INSERT INTO `materi` VALUES ('142', 'DPWB', '2', 'MM-Dreamweaver', '12', '6');
INSERT INTO `materi` VALUES ('143', 'DPWB', '2', 'PHP & My SQL', '18', '10');
INSERT INTO `materi` VALUES ('144', 'DPWB', '2', 'Aplikasi Web Master', '12', '0');
INSERT INTO `materi` VALUES ('145', 'DTAK', '1', 'MS-Windows', '4', '0');
INSERT INTO `materi` VALUES ('146', 'DTAK', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('147', 'DTAK', '1', 'MS-Word', '18', '0');
INSERT INTO `materi` VALUES ('148', 'DTAK', '1', 'MS-Excel', '18', '0');
INSERT INTO `materi` VALUES ('149', 'DTAK', '1', 'MS-Power Point', '8', '0');
INSERT INTO `materi` VALUES ('150', 'DTAK', '1', 'Aplikasi MS-Office', '6', '0');
INSERT INTO `materi` VALUES ('151', 'DTAK', '1', 'AutoCAD 2D', '22', '14');
INSERT INTO `materi` VALUES ('152', 'DTAK', '2', 'AutoCAD 3D', '16', '10');
INSERT INTO `materi` VALUES ('153', 'DTAK', '2', '3D-Studio Max', '14', '8');
INSERT INTO `materi` VALUES ('154', 'DTAK', '2', 'MM-Flash', '14', '8');
INSERT INTO `materi` VALUES ('155', 'DTAK', '2', 'MM-Director', '12', '6');
INSERT INTO `materi` VALUES ('156', 'DTAK', '2', 'Aplikasi Multimedia Interaktif', '8', '4');
INSERT INTO `materi` VALUES ('157', 'TIK', '1', 'MS-Windows', '4', '0');
INSERT INTO `materi` VALUES ('158', 'TIK', '1', 'Pengenalan Internet', '4', '0');
INSERT INTO `materi` VALUES ('159', 'TIK', '1', 'MS-Word', '18', '0');
INSERT INTO `materi` VALUES ('160', 'TIK', '1', 'MS-Excel', '18', '0');
INSERT INTO `materi` VALUES ('161', 'TIK', '1', 'MS-Access', '12', '0');
INSERT INTO `materi` VALUES ('162', 'TIK', '1', 'MS-Power Point', '8', '0');
INSERT INTO `materi` VALUES ('163', 'TIK', '1', 'Aplikasi MS-Office', '6', '0');
INSERT INTO `materi` VALUES ('164', 'TIK', '1', 'MS-Outlook', '5', '0');
INSERT INTO `materi` VALUES ('165', 'TIK', '1', 'MS-Visio', '8', '0');
INSERT INTO `materi` VALUES ('166', 'TIK', '1', 'Instalasi Hardware *)', '10', '0');
INSERT INTO `materi` VALUES ('167', 'TIK', '2', 'Instalasi Software *)', '18', '0');
INSERT INTO `materi` VALUES ('168', 'TIK', '2', 'Interkoneksi Jaringan *)', '14', '0');
INSERT INTO `materi` VALUES ('169', 'TIK', '2', 'Trouble Shooting *)', '6', '0');
INSERT INTO `materi` VALUES ('170', 'TIK', '2', 'MM-Flash', '14', '8');
INSERT INTO `materi` VALUES ('171', 'TIK', '2', 'MM-Director', '12', '6');
INSERT INTO `materi` VALUES ('172', 'TIK', '2', 'Aplikasi Multimedia Interaktif', '8', '4');
INSERT INTO `materi` VALUES ('173', 'OKT', '0', 'Windows + Internet ', '6', '0');
INSERT INTO `materi` VALUES ('174', 'OKT', '0', 'MS-Word ', '18', '0');
INSERT INTO `materi` VALUES ('175', 'OKT', '0', 'MS-Excel ', '18', '0');
INSERT INTO `materi` VALUES ('176', 'OKT', '0', 'MS-Access ', '12', '0');
INSERT INTO `materi` VALUES ('177', 'OKT', '0', 'MS-Power Point ', '8', '0');
INSERT INTO `materi` VALUES ('178', 'OKT', '0', 'Aplikasi MS-Office ', '6', '0');
INSERT INTO `materi` VALUES ('179', 'MIK', '1', 'Ms. Windows', '4', '3');
INSERT INTO `materi` VALUES ('180', 'privat', '0', 'Ms. Windows', '2', '0');
INSERT INTO `materi` VALUES ('181', 'privat', '0', 'Ms. Word', '12', '0');
INSERT INTO `materi` VALUES ('182', 'privat', '0', 'Ms. Excell', '12', '0');
INSERT INTO `materi` VALUES ('183', 'workshop', '0', 'PHP dan MySQL', '12', '0');
INSERT INTO `privat` VALUES ('1', '181', '26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '');
