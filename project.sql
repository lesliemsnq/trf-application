SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- ACCOUNT FOR USERS & ADMIN
CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `admins` (
  `id` int(11) PRIMARY KEY,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- FORMS FOR ONLINE, INVITATION, IN-HOUSE, FACE-TO-FACE TRAINING
CREATE TABLE `form_ol` (
  `id` int(11) PRIMARY KEY,
  `act` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) NOT NULL,
  `tact` varchar(255) NOT NULL,
  `ynoption` varchar(255) NOT NULL,
  `nameacc` varchar(255) NOT NULL,
  `offadd` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `psf` varchar(255) NOT NULL,
  `socmed` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `form_invitational` (
  `id` int(11) PRIMARY KEY,
  `training` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) NOT NULL,
  `invitational` varchar(255) NOT NULL,
  `organizational` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `form_inhouse` (
  `id` int(11) PRIMARY KEY,
  `training` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `days` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) NOT NULL,
  `inhouse` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `time1` time NOT NULL,
  `person` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `form_ftf` (
  `id` int(11) PRIMARY KEY,
  `training` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `days` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) NOT NULL,
  `tact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


