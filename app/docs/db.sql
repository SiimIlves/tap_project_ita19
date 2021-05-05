-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2021 at 11:04 AM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.27

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ilvessiimiktkhk_kpr`
--
CREATE DATABASE IF NOT EXISTS `ilvessiimiktkhk_kpr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ilvessiimiktkhk_kpr`;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `registry` int(11) UNSIGNED NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `activity` varchar(255) NOT NULL,
    `activitydetail` varchar(255) NOT NULL,
    `location` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `registry`, `email`, `phone`, `activity`, `activitydetail`, `location`) VALUES
(1, 'Mark Otto', 69420, 'mark@otto.com', '54302584', 'seinad', 'puitseinad', 'üle Eesti'),
(2, 'Otto Mark', 69420, 'otto@mark.com', '54302584', 'seinad', 'kipsseinad', 'üle Eesti'),
(3, 'Margaret Otto', 69420, 'info@hamilton.com', '54302584', 'aknad', 'puitaknad', 'Tartumaa'),
(4, 'John Smith', 69420, 'John@Clark.com', '54302584', 'aknad', 'plastaknad', 'Võrumaa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `created` date NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
