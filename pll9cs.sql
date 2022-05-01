SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `cimzett` varchar(40) NOT NULL DEFAULT '',
  `usernev` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `idopont` datetime NOT NULL DEFAULT current_timestamp(),
  `uzenet` varchar(2000) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `messages` (`id`, `cimzett`, `usernev`, `email`, `idopont`, `uzenet`) VALUES
(1, 'Családnév1', 'user1', 'Vendég', '2022-04-29 11:00:07', 'Szia! Ez az első üzenetem, nem vagyok belépve csak vendégként írok!'),
(2, 'Családnév2', 'user2', 'user1', '2022-04-29 12:22:51', 'Beléptem! Vajon megérkezik-e az üzenet'),
(3, 'Családnév3', 'user3', 'user1', '2022-04-29 13:13:13', 'Itt is be vagyok lépve, ellenőrizni kell az időpontok helyességét az adatbázisban'),
(4, 'Józsi', 'user4', 'akarmi@kukac.hu', '2022-04-29 15:17:03', 'uzenetuziuziuzi'),
(5, 'Lacika', 'Vendég', 'nagylaci@laci.hu', '2022-04-29 16:04:27', 'LaciLaciLaciLaciLaciLaciLaciLaci');


CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `vezeteknev` varchar(45) NOT NULL DEFAULT '',
  `keresztnev` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(12) NOT NULL DEFAULT '',
  `passwd` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `vezeteknev`, `keresztnev`, `username`, `passwd`) VALUES
(1, 'VezNév1', 'KerNév1', 'user1', 'd4b90f2dfafc736205a98bf3ae6541431bc77d8e'),
(2, 'VezNév2', 'KerNév2', 'user2', '6cf8efacae19431476020c1e2ebd2d8acca8f5c0'),
(3, 'VezNév3', 'KerNév3', 'user3', 'df4d8ad070f0d1585e172a2150038df5cc6c891a'),
(4, 'VezNév4', 'KerNév4', 'user4', 'b020c308c155d6bbd7eb7d27bd30c0573acbba5b'),
(5, 'VezNév5', 'KerNév5', 'user5', '9ab1a4743b30b5e9c037e6a645f0cfee80fb41d4'),
(6, 'Kiss', 'Miska', 'Misi', '0691ba960926480ea6a83205e451de1d30d8e8f1'),
(7, 'Nagy', 'László', 'nlaci', '315685a3b1688e4a6163e148c0a9a349c52a80fe');

ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
