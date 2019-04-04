# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2019-04-05 00:30:24
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "event"
#

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `idEvent` int(11) NOT NULL AUTO_INCREMENT,
  `nm_event` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `game` varchar(28) NOT NULL,
  `platform` varchar(15) NOT NULL,
  `tgl` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `rules` text NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `mode` tinyint(1) NOT NULL,
  `uplink` int(5) NOT NULL,
  `tgl_upload` date NOT NULL,
  PRIMARY KEY (`idEvent`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "event"
#

/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'Event contoh','542-dota1.jpg','Nama game contoh','platform contoh','1','Contoh Deskripsi Event','Contoh Rules Event','jl. contoh',1,2,'0000-00-00'),(2,'Event contoh','9335-dota.jpg','Nama game contoh','platform contoh','1','Contoh Deskripsi Event','Contoh Rules Event','jl. contoh',1,2,'0000-00-00');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;

#
# Structure for table "panitia"
#

DROP TABLE IF EXISTS `panitia`;
CREATE TABLE `panitia` (
  `nick` varchar(16) NOT NULL,
  `email` varchar(28) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_panitia` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_panitia`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "panitia"
#

/*!40000 ALTER TABLE `panitia` DISABLE KEYS */;
INSERT INTO `panitia` VALUES ('admin','admin@admin.com','0cc175b9c0f1b6a831c399e269772661',2),('Sandy','sandydwi75@gmail.com','0ddd63424b5af786fdd47bcc9209bcf3',12),('raot','raot@raot.com','974fd02a39f94ff7180fff16b3358212',14);
/*!40000 ALTER TABLE `panitia` ENABLE KEYS */;
