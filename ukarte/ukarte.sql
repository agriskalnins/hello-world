-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 05:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ukarte`
--

-- --------------------------------------------------------

--
-- Table structure for table `ukomersants`
--

CREATE TABLE IF NOT EXISTS `ukomersants` (
  `id_komersants` int(4) NOT NULL AUTO_INCREMENT,
  `knosaukums` varchar(50) NOT NULL,
  `kjur_adrese` varchar(300) NOT NULL,
  PRIMARY KEY (`id_komersants`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `ukomersants`
--

INSERT INTO `ukomersants` (`id_komersants`, `knosaukums`, `kjur_adrese`) VALUES
(4, 'ALIER SIA', 'Jelgavas nov., Zaļenieku pag., Zaļenieki, Milleru ceļš 7 - 11, LV-3011 '),
(5, 'ALIS-B SIA', 'Jelgava, Lielā iela 13, LV-3001 '),
(6, 'DATINA SIA', 'Jelgava, Palu iela 5, LV-3001 '),
(7, 'VIKTORIJA B SIA', 'Jelgava, Driksas iela 5-2, LV-3001 '),
(8, 'AKADEMIA SIA', 'Jelgava, Loka maģistrāle 19 - 45, LV-3004 '),
(9, 'TARTE SIA', 'Jelgava, Mātera iela 19 - 3, LV-3001 '),
(10, 'BANZAI SUSHI SIA', 'Jelgava, Traktoristu iela 6, LV-3007 '),
(11, 'BĀRS ARGO SIA', 'Jelgava, Zemgales prospekts 17-1B, LV-3001 '),
(12, 'BILERTS IU ', 'Jelgava, Platones iela 28, LV-3008 '),
(13, 'ANMO SIA', 'Jelgava, Mežmalas iela 8, LV-3001 '),
(14, 'KRO KEBABNĪCA SIA', 'Jelgava, Riekstu ceļš 5, LV-3003 '),
(15, 'VALETT SIA', 'Rīga, Zemitāna iela 2B, LV-1012 '),
(16, 'MARIJAS TORNIS SIA', 'Jelgava, Akadēmijas iela 1, LV-3001 '),
(17, 'AITIŅLAUVAS DIVI SIA', 'Jelgava, Kalnciema ceļš 12, LV-3002 '),
(18, 'DAFAS SIA', 'Jelgava, Atmodas iela 88-48, LV-3007 '),
(19, 'JK GROUP SIA', 'Jelgava, Dobeles šoseja 40-4, LV-3007 '),
(20, 'PICU DARBNĪCA SIA', 'Mārupes nov., Mārupe, Zeltrītu iela 22-57, LV-2167 '),
(21, 'PRESTIŽS SIA', 'Jelgava, Lielā iela 49, LV-3001 '),
(22, 'VISMAZ TRĪS VĀRDI SIA', 'Dobeles nov., Krimūnu pag., "Upītes", LV-3719 '),
(23, 'Food embassy  SIA', 'Rīga, Rūpniecības iela 19 - 3, LV-1010 '),
(24, 'GROSTS SIA', 'Jelgava, 6. līnija 15, LV-3003 '),
(25, 'MONDO SIA', 'Akadēmijas iela 19, LV-3001'),
(26, 'V-T SIA', 'Jelgava, Loka maģistrāle 7-13, LV-3004 '),
(27, 'MINIMEGA SIA', 'Rīga, Šķūņu iela 3, LV-1050 '),
(28, 'TIAMO GRUPA SIA ', 'Liepāja, Zemnieku iela 32, LV-3401'),
(29, 'ROSI 9 Pilnsabiedrība ', 'Lielā iela 13 - 9, Jelgava, LV-3001'),
(30, 'RUBĪNS SIA', 'Jelgava, Priežu iela 4A, LV-3004 '),
(31, 'TAUGEM SIA', 'Skolotāju iela 2-5, Jelgava, LV-3001 '),
(32, 'AKALONA-L SIA', 'Jelgava, Atmodas iela 19, LV-3007 '),
(33, 'EKSREMMA SIA', 'Jelgavas nov., Valgundes pag., "Ķīši", LV-3017 '),
(34, 'ELEKTRA SIA', 'Jelgava, Aviācijas iela 8D, LV-3002 '),
(35, 'GM7 SIA', 'Iecavas nov., Iecava, Ozolu iela 3-20, LV-3913 '),
(36, 'PREMIER RESTAURANTS LATVIA SIA', 'Rīga, Duntes iela 6, LV-1013 '),
(37, 'PIE MEDNIEKA SIA', 'Jelgava, Vecpilsētas iela 15, LV-3001 '),
(38, 'COMEDOR SIA', 'Ozolnieku nov., Cenu pag., Āne, Celtnieku iela 7A-17, LV-3043 '),
(39, 'PARKS OM SIA', 'Jelgava, Mazais ceļš 5B, LV-3001 '),
(40, 'DAGANS SIA', 'Jelgava, Kalnciema ceļš 101-5, LV-3002 '),
(41, 'DRAPAS SIA', 'Ozolnieku nov., Cenu pag., Āne, Ezera iela 1, LV-3043 '),
(42, 'KULK SIA', 'Jelgava, Dobeles šoseja 34, LV-3007 '),
(43, 'JELGAVAS BALTIE KREKLI SIA', 'Jelgava, Lielā iela 19A, LV-3001 '),
(44, 'SHIKI CITY SIA', 'Jelgava, Loka maģistrāle 9 - 68, LV-3004 '),
(45, 'SUBBURGER LATVIJA SIA', 'Rīga, Mūkusalas iela 73, LV-1004 '),
(46, 'MOREMI SIA', 'Jelgava, Raiņa iela 20, LV-3001 '),
(47, 'CRYSTAL ITG SIA', 'Jelgava, Jāņa Asara iela 12, LV-3001 '),
(48, 'MADARA SIA', 'Jelgava, Lielā iela 22, LV-3001'),
(49, 'ALĪZA IK', 'Jelgava, Mātera iela 53-30, LV-3001 '),
(50, 'ALIS BURG SIA', 'Jelgava, Dūņu iela 13, LV-3001 '),
(51, 'DENISA PLUS SIA', 'Jelgava, Ausmas iela 22, LV-3008 '),
(52, 'MĀRUPEBURGER  SIA', 'Salaspils nov., Salaspils, Zviedru iela 1F, LV-2121 '),
(53, 'MEHO SIA', 'Jelgava, Sudrabu Edžus iela 2-15, LV-3001 '),
(54, 'VV MEŽĀZIS SIA', 'Jelgava, Elektrības iela 10, LV-3001 '),
(55, 'PUTNI SIA', 'Ozolnieku nov., Cenu pag., Dalbe, Ozolu iela 7, LV-3018 '),
(56, 'VITA MĀRKETS SIA', ' Siguldas nov., Sigulda, Vidus iela 1, LV-2150 Pārbaudīt adreses īpašniekus'),
(57, 'VISUMNIEKS SIA', 'Jelgava, Pulkveža Brieža iela 4, LV-3001'),
(58, 'TABU SIA', 'Jelgava, Aviācijas iela 18i, LV-3004');

-- --------------------------------------------------------

--
-- Table structure for table `uktips`
--

CREATE TABLE IF NOT EXISTS `uktips` (
  `id_tips` int(3) NOT NULL AUTO_INCREMENT,
  `tnosaukums` varchar(30) NOT NULL,
  `tparent_id` int(3) NOT NULL,
  PRIMARY KEY (`id_tips`),
  KEY `tparent_id` (`tparent_id`),
  KEY `tparent_id_2` (`tparent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `uktips`
--

INSERT INTO `uktips` (`id_tips`, `tnosaukums`, `tparent_id`) VALUES
(1, 'Ēdināšana', 0),
(2, 'Kafejnīca', 1),
(3, 'Bārs', 1),
(4, 'Restorāns', 1),
(5, 'Picērija', 1),
(6, 'Konditoreja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uznemums`
--

CREATE TABLE IF NOT EXISTS `uznemums` (
  `id_uznemums` int(3) NOT NULL AUTO_INCREMENT,
  `uz_tips_id` int(3) NOT NULL,
  `uzkomersants_id` int(3) NOT NULL,
  `uznosaukums` varchar(150) NOT NULL,
  `uzadrese` varchar(300) NOT NULL,
  `uztelefons` varchar(15) DEFAULT NULL,
  `uzepasts` varchar(50) DEFAULT NULL,
  `uzinfo` varchar(3000) DEFAULT NULL,
  `uzlogo` varchar(500) DEFAULT NULL,
  `uz_lat` double NOT NULL,
  `uz_lng` double NOT NULL,
  PRIMARY KEY (`id_uznemums`),
  KEY `uz_tips_id` (`uz_tips_id`),
  KEY `uzkomersants_id` (`uzkomersants_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `uznemums`
--

INSERT INTO `uznemums` (`id_uznemums`, `uz_tips_id`, `uzkomersants_id`, `uznosaukums`, `uzadrese`, `uztelefons`, `uzepasts`, `uzinfo`, `uzlogo`, `uz_lat`, `uz_lng`) VALUES
(9, 2, 13, '"Saules krogs"', 'K.Barona 6, Jelgava, LV-3001 ', '29224155 ', '', '', NULL, 56.653935, 23.723357),
(10, 2, 14, 'Kro kebabnīca', 'Mātera 40, Jelgava, LV-3001 ', '28884300 ', '', '', NULL, 56.64502, 23.722397),
(11, 2, 15, '"Salmu krogs"', 'Katoļu 18, Jelgava, LV-3001 ', '63011691 ', '', '', NULL, 56.64763, 23.7256),
(12, 4, 16, '„La Tour de Marie”', 'Akadēmijas iela 1, Jelgava, LV-3001', '', '', 'Pasludināta maksātnespēja: 07.02.2018 ', NULL, 56.652478, 23.728914),
(13, 4, 17, 'Viesu nams "Aitiņlauvas"', '"Aitiņlauvas", Valgundes pag., Jelgavas nov., Tīreļi, Valgundes pagasts, LV-3017', '29160393 ', '', 'Rīgas-Liepājas šoseja 22. km', NULL, 56.852395, 23.600753),
(14, 2, 18, '"Diāna"', 'Pētera 1, Jelgava, LV-3001 ', '63080200 ', '', '', NULL, 56.650275, 23.717532),
(15, 2, 19, '"Tavs mirklis"', 'Pasta 45, Jelgava, LV-3001 ', '22772211 ', '', '', NULL, 56.649057, 23.724533),
(16, 5, 20, '"Picu Darbnīca"', 'Rīgas 1, Jelgava, LV-3002 ', '20003993 ', '', '', NULL, 56.658219, 23.742611),
(17, 2, 21, '"Ceplis"', 'Lielā iela 49, Jelgava, LV-3001 ', '63083815 ', '', '', NULL, 56.650842, 23.704947),
(18, 3, 22, '"Melno cepurīšu Balerija"', 'Raiņa 28, Jelgava, LV-3001 ', '27787776 ', '', '', NULL, 56.647533, 23.71648),
(19, 2, 23, 'Turkebab', 'Driksas iela 4, T/C Pilsētas Pasāža, Jelgava, LV-3001', '27006606 ', '', '', NULL, 56.650989, 23.725037),
(20, 2, 24, '"Chocolate&Pepper"', 'K.Barona 6, Jelgava, LV-3001', ' 63010220', ' info@choco-pepper.lv', 'http://www.choco-pepper.lv/\r\n', NULL, 56.653876, 23.723968),
(21, 2, 25, '“Mondo” ', 'Akadēmijas iela 19, Jelgava, LV-3001', '63020375', '', '', NULL, 56.648034, 23.731484),
(22, 2, 7, '"Silva", bistro', 'Driksas 9, Jelgava, LV-3001 ', '29266586', '', '', NULL, 56.650364, 23.724362),
(23, 2, 26, '"Pagrabiņš"', 'Pasta 43, Jelgava, LV-3001 ', '29730782 ', '', '', NULL, 56.649426, 23.724334),
(24, 4, 27, 'HESBURGER', 'Loka maģistrāle 2a, Jelgava, LV-3004', '26480302', '', '', NULL, 56.67084, 23.762099),
(25, 4, 28, '"Čili Pica"', 'Rīgas iela 11a, Jelgava, LV-3002', '63045555', '', '', NULL, 56.661654, 23.746901),
(26, 2, 29, 'PII "Ķipari" Kafejnīca', 'Pulkveža Brieža iela 23a, Jelgava, LV-3007', '26661151 ', '', '', NULL, 56.654395, 23.713117),
(27, 2, 30, 'Zemgales Olimpiskais centrs kafejnīca', 'Kronvalda 24, Jelgava, LV-3002', '', '', '', NULL, 56.661135, 23.75394),
(28, 2, 31, '"Promenāde"', 'Skolotāju 2, Jelgava, LV-3001 ', '63025913', '', '', NULL, 56.648842, 23.708477),
(31, 4, 5, 'Pusdienu restorāns un konditoreja "Otto"', 'Lielā iela 17, Jelgava, LV-3007 ', '26661151', '', '', NULL, 56.650833, 23.719382),
(32, 2, 32, '"Laiks"', 'Atmodas 19, Jelgava, LV-3007 ', '27818866 ', '', '', NULL, 56.650765, 23.690431),
(33, 4, 4, '"Pilsētas Elpa"', 'Pasta sala 1, Jelgava, LV-3001', '26633703 ', '', '', NULL, 56.652331, 23.733104),
(34, 2, 12, '"Karīna"', 'Raiņa 15a, Jelgava, LV-3001 ', '26735531 ', '', '', NULL, 56.648055, 23.721856),
(35, 2, 33, '"Rausis"', 'Vaļņu 10, Jelgava, LV-3001 ', '63027795 ', '', '', NULL, 56.646052, 23.718159),
(37, 2, 34, '"Elektra" ēdnīca', 'Aviācijas iela 8d, Jelgava, LV-3002', '63022517', '', '', NULL, 56.654156, 23.75777),
(38, 2, 35, '"Rīga Sushi"', 'Rīgas iela 11a, Jelgava, LV-3002', '25235464', '', '', NULL, 56.661351, 23.746221),
(39, 4, 36, '“McDonald''s”', 'Brīvības bulvāris 1, Jelgava, LV-3002', '26468158', '', '', NULL, 56.657164, 23.743711),
(40, 2, 37, '„Pie mednieka”', 'Vecpilsētas 15, Jelgava, LV-3001 ', '63028528', '', '', NULL, 56.650845, 23.711502),
(41, 2, 38, 'Kafe - picērija', 'Akadēmijas iela 4, Jelgava, LV-3001 ', '20319837 ', '', '', NULL, 56.650556, 23.728963),
(42, 4, 39, 'Bistrobārs un restorāns "PARKS"', 'K.Barona 3, Jelgava, LV-3001 ', '63024188', 'info@restoransparks.lv', 'www.restoransparks.lv', NULL, 56.652862, 23.723272),
(43, 2, 7, '"Silvas tējas namiņš"', 'Pilssalas iela 2a, Jelgava, LV-3001 ', '22119119', '', '', NULL, 56.653101, 23.732649),
(44, 3, 11, '"Argo"', 'Zemgales prospekts 17 - 1b, Jelgava, LV-3001', '63021930', '', '', NULL, 56.642111, 23.731839),
(45, 2, 40, '"Istaba" krodziņš', 'J. Čakstes bulvāris 7, Jelgava, LV-3001', '63025909', '', '', NULL, 56.652071, 23.730675),
(46, 2, 41, '"Latvijas keramika" kafejnīca', 'Rīgas 67, Jelgava, LV-3004', '29710046 ', '', '', NULL, 56.672204, 23.76513),
(47, 4, 42, '"Plate" bārs - restorāns', 'Lielā iela 6, Jelgava, LV-3001 ', '29225918', '', '', NULL, 56.653333, 23.728921),
(48, 4, 28, '"Čili Pica"', 'Katoļu iela 7, Jelgava, LV-3001', '63045555', '', '', NULL, 56.650455, 23.726415),
(49, 3, 43, '"Kreklukrogs"', 'Jelgava, Lielā iela 19A, LV-3001', '26633433', 'krogs@kreklukrogs.lv', 'http://kreklukrogs.mozello.lv/', NULL, 56.650013, 23.718138),
(50, 4, 44, '"Shiki Sushi"', 'Lielā iela 14, Jelgava, LV-3004', '22337743', 'shikisushii@gmail.com', 'http://shikisushi.lv', NULL, 56.651661, 23.721276),
(51, 4, 45, 'SUBBURGER', 'Driksas iela 4, T/C Pilsētas Pasāža, Jelgava, LV-3001 ', '20127811', 'jelgava@subburger.com', 'http://subburger.com', NULL, 56.650783, 23.724923),
(52, 2, 46, '"KriBeLūk" krodziņš', 'Raiņa 20, Jelgava, LV-3001', '29581021 ', '', 'https://www.facebook.com/KriBelLuk/', NULL, 56.647957, 23.720306),
(53, 5, 47, '"Rosso pizza"', 'Lielā iela 34, Jelgava, LV-3001', '63011777 ', ' info@rosso-pizza.com ', 'http://www.rosso-pizza.com', NULL, 56.650066, 23.712441),
(54, 5, 47, '"Rosso pizza"', 'Rīgas iela 48, Jelgava, LV-3004', '63011777', 'info@rosso-pizza.com', 'http://www.rosso-pizza.com', NULL, 56.667857, 23.760715),
(55, 4, 48, '"Madara"', 'Lielā iela 22, Jelgava, LV-3001', '63027012', '', '', NULL, 56.6506, 23.716969),
(56, 4, 10, '"Banzai Sushi"', 'Pasta iela 28, Jelgava, LV-3001 ', '25559919 ', '', 'http://www.banzaisushi.lv', NULL, 56.649172, 23.723915),
(57, 2, 49, '"UNO"', 'Tērvetes 91a, Jelgava, LV-3008 ', '29622035', '', '', NULL, 56.629871, 23.69963),
(58, 2, 50, '"Jelgavas sporta halle" kafejnīca', 'Mātera iela 44A, Jelgava, LV-3001', '29234040', '', '', NULL, 56.643418, 23.721904),
(59, 5, 51, '"Drops" picērija - bārs', 'Kastaņu iela 2a, Jelgava, LV-3008', '22030636', '', 'https://www.dropspizza.lv/', NULL, 56.636108, 23.707307),
(60, 4, 52, 'HESBURGER', 'Katoļu iela 10b, Jelgava, LV-3001', '', '', '', NULL, 56.649175, 23.726372),
(61, 2, 54, '"Vija"', 'Elektrības iela 10, Jelgava, LV-3001', '63090377 ', '', '', NULL, 56.648928, 23.732407),
(62, 6, 9, 'konditorejas studija “Tarte”', 'Mātera iela 26, Jelgava, LV-3001', '20136090', '', '', NULL, 56.649341, 23.720241),
(63, 6, 55, '“Putni” konditoreja, kūku bode', 'Mātera iela 40, Jelgava, LV-3001', '29172237 ', '', '', NULL, 56.645096, 23.722252),
(64, 3, 8, 'ACADEMIA Kafijas un brokastu bārs', 'Akadēmijas 4a, Jelgava, LV-3001 ', '20553880 ', '', 'http://academiabars.lv/', NULL, 56.651281, 23.728062),
(65, 4, 56, 'Ekspresrestorāns "ŅAMMA"', 'T/C "ELVI", Rūpniecības iela 77A, Jelgava, LV-3008', '25459777', ' namma@namma.lv', 'darba laiks: 9-20, sv.10-18\r\nhttp://www.namma.lv', NULL, 56.636834, 23.704989),
(66, 2, 57, '"Bossiks" kafejnīca', 'Jelgava, Pulkveža Brieža iela 4, LV-3001 ', '29416619', '', '', NULL, 56.652806, 23.715386),
(67, 6, 7, '"Silva" konditoreja', 'Driksas iela 7, Jelgava, LV-3001', '63 084 895', '', 'bistrosilva.lv', NULL, 56.650432, 23.724693),
(68, 2, 58, '"Īva", ēdnīca', 'Aviācijas 18i, Jelgava, LV-3004 ', '29458847 ', '', '', NULL, 56.662076, 23.767973);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uznemums`
--
ALTER TABLE `uznemums`
  ADD CONSTRAINT `uzkomid-ukomid` FOREIGN KEY (`uzkomersants_id`) REFERENCES `ukomersants` (`id_komersants`),
  ADD CONSTRAINT `uztips-uktips` FOREIGN KEY (`uz_tips_id`) REFERENCES `uktips` (`id_tips`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
