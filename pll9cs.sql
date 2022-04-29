DROP DATABASE `pll9cs`;
CREATE DATABASE `pll9cs` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `pll9cs`;

CREATE TABLE `users` (
  `id` int(10) unsigned     NOT NULL auto_increment,
  `vezeteknev` varchar(45) NOT NULL default '',
  `keresztnev` varchar(45)     NOT NULL default '',
  `username` varchar(12) NOT NULL default '',
  `passwd` varchar(40)      NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `users` (`id`,`vezeteknev`,`keresztnev`,`username`,`passwd`) VALUES 
 (1,'Családnév1','Keresztnév1','Login1',sha1('login1')),
 (2,'Családnév2','Keresztnév2','Login2',sha1('login2')),
 (3,'Családnév3','Keresztnév3','Login3',sha1('login3')),
 (4,'Családnév4','Keresztnév4','Login4',sha1('login4')),
 (5,'Családnév5','Keresztnév5','Login5',sha1('login5')),
 (6,'Családnév6','Keresztnév6','Login6',sha1('login6')),
 (7,'Családnév7','Keresztnév7','Login7',sha1('login7')),
 (8,'Családnév8','Keresztnév8','Login8',sha1('login8')),
 (9,'Családnév9','Keresztnév9','Login9',sha1('login9')),
 (10,'Családnév10','Keresztnév10','Login10',sha1('login10')),
 (11,'Családnév11','Keresztnév11','Login11',sha1('login11')),
 (12,'Családnév12','Keresztnév12','Login12',sha1('login12'));

CREATE TABLE `messages` (
  `id` int(10) unsigned     NOT NULL auto_increment,
  `cimzett` varchar(40) NOT NULL default '',
  `usernev` varchar(40)     NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `idopont` datetime  NOT NULL default '2000-01-01 00:00:00',
  `uzenet` varchar(2000)      NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `messages` (`id`,`cimzett`,`usernev`,`email`,`idopont`,`uzenet`) VALUES 
 (1,'Családnév1','Login1','Vendég','2022-04-29 11:00:07','Szia! Ez az első üzenetem, nem vagyok belépve csak vengégként írok!'),
 (2,'Családnév2','Login2','Login1','2022-04-29 12:22:51','Beléptem! Vajon megérkezik-e az üzenet'),
 (3,'Családnév3','Login3','Login1','2022-04-29 13:13:13','Itt is be vagyok lépve, ellenőrizni kell az időpontok helyességét az adatbázisban');

