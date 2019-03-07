# Host: localhost  (Version 5.5.5-10.1.37-MariaDB)
# Date: 2019-03-07 20:32:03
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "event"
#

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `nm_event` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `game` varchar(28) NOT NULL,
  `platform` varchar(15) NOT NULL,
  `tgl` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `rules` text NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `mode` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "event"
#

/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES ('Event contoh','/assetsz/gambir/tesik.PNG','Nama game contoh','platform contoh','1','Contoh Deskripsi Event','Contoh Rules Event','jl. contoh',1),('Event contoh','/assetsz/gambir/tesik.PNG','Nama game contoh','platform contoh','1','Contoh Deskripsi Event','Contoh Rules Event','jl. contoh',1);
/*!40000 ALTER TABLE `event` ENABLE KEYS */;

#
# Structure for table "panitia"
#

DROP TABLE IF EXISTS `panitia`;
CREATE TABLE `panitia` (
  `nick` varchar(16) NOT NULL,
  `email` varchar(28) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "panitia"
#

/*!40000 ALTER TABLE `panitia` DISABLE KEYS */;
INSERT INTO `panitia` VALUES ('swaxtic','adipsandro@gmail.com','bct'),('okkyows','sinatras.ows@gmail.com','12345678'),('admin','admin@admin.com','admin'),('swaxtic','adipsandro@gmail.com','bct'),('okkyows','sinatras.ows@gmail.com','12345678'),('admin','admin@admin.com','admin');
/*!40000 ALTER TABLE `panitia` ENABLE KEYS */;
