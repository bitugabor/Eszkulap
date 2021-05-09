CREATE DATABASE `uzenetek`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `uzenetek`;

CREATE TABLE `emailek` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `szoveg` varchar(300) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `emailek` (`id`,`nev`,`email`,`szoveg`) VALUES 
 (1,'Tesztnev_01','tesztemil_01@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (2,'Tesztnev_02','tesztemil_02@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (3,'Tesztnev_03','tesztemil_03@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (4,'Tesztnev_04','tesztemil_04@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (5,'Tesztnev_05','tesztemil_05@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (6,'Tesztnev_06','tesztemil_06@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (7,'Tesztnev_07','tesztemil_07@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (8,'Tesztnev_08','tesztemil_08@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (9,'Tesztnev_09','tesztemil_09@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni'),
 (10,'Tesztnev_10','tesztemil_10@emaildomain.hu','Kedves Barátom! Szeretnék Önnel kapcsolatba lépni');