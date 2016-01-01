SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  `user` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`,`module`),
  KEY `module` (`module`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `file` (`id`, `name`, `path`, `user`, `module`) VALUES
(1, 'SEMESTER 2 2015 Exam TimeTable.pdf', 'uploads/SEMESTER 2 2015 Exam TimeTable.pdf', 4, 1),
(2, 'Mid Semester Time Table.pdf', 'uploads/Mid Semester Time Table.pdf', 4, 1),
(3, 'SCS 1003.pdf', 'uploads/SCS 1003.pdf', 3, 1);

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1451619239),
('m130524_201442_init', 1451619294);

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `module` (`id`, `name`, `year`, `created_by`) VALUES
(1, 'Computer', 3, 4),
(2, 'Operating Systems', 3, 4),
(3, 'Software Engineering', 3, 3),
(4, 'Foundations of Computer Science', 3, 3);

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Student','Tutor') COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

INSERT INTO `user` (`id`, `firstname`, `lastname`, `type`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'abc', 'def', 'Student', 'PWrY_h_1Q4rMetHZsU6ydzsIGJDZExtH', '$2y$13$J0cFW0jtrsAWkN2Jzia0t.FGUIEadwquidTUhbgcJujBy4PTnz4D.', NULL, 'abc@gmail.com', 10, 1451620627, 1451620627),
(4, 'Vihanga', 'Liyanage', 'Student', 'NJFE4Rdm6anzGvIVV8XJsenhZygvNrLv', '$2y$13$SUm65Y0wsR2ssr..dzMdYOhZT/be4Yb/DvSIqFD8VsBc4zb2ItK0m', NULL, 'vihanga@gmail.com', 10, 1451631049, 1451631049),
(5, 'abc', 'def', 'Tutor', '9QwspRNMTD_1kPRea2B_zfmGgJkU3fzC', '$2y$13$1Ofgx/7u73B95Abyix/NjumTB3SVcvbciz0/GNMtB0qgakiafo9/i', NULL, 'abcd@gmail.com', 10, 1451633822, 1451633822),
(6, 'Tanuja', 'Gunathilake', 'Tutor', 'DQBEnKRblFj2xm2GReyaRLTyqOzQlEwg', '$2y$13$1uJiTFNBZMeV7lCyf/wVTe8jjHu.hquKDI.Ymh.Jhgg0TfJf/X9Ki', NULL, 'tanu@gmail.com', 10, 1451652619, 1451652619),
(14, 'a', 'a', 'Student', 'KJ19fpr-F3ilDc-MpaFVVig8AL1SqfEJ', '$2y$13$8HMSlDBPYOErqVAuSZNUBe4IG484rEjRIJS7D7PWJVlBNjoDSaQLK', NULL, 'a@gmail.com', 10, 1451654637, 1451654637),
(15, 'ass', 'as', 'Tutor', 'nFM5ZVHIq20h3iNr9wX9CFbYyp0z5J7t', '$2y$13$DHgjGERu5RupXPwTOruudOIIbayrNYN88ihsyM60ieMnYAjMRdWcm', NULL, 'aa@gmail.com', 10, 1451654689, 1451654689);

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `year` (`id`, `name`, `created_by`) VALUES
(3, '2014/2015', 3),
(4, '2013/2014', 3),
(5, '2012/2013', 4),
(6, '2014/2015', 4);


ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_2` FOREIGN KEY (`module`) REFERENCES `module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`year`) REFERENCES `year` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `year`
  ADD CONSTRAINT `year_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
