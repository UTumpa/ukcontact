-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 11:36 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE IF NOT EXISTS `information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(15) NOT NULL,
  `h_phone` varchar(15) NOT NULL,
  `e_contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `c_location` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `per_address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `mobile`, `h_phone`, `e_contact`, `email`, `a_email`, `c_location`, `p_address`, `per_address`) VALUES
(2, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Khulna', 'IDB,dhaka', 'mirpur,dhaka'),
(3, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Chittagong', 'IDB,dhaka', 'mirpur,dhaka'),
(4, '01921342454', '123456789', '987654321', 'ctgboy2010@gmail.com', 'shajed@yahoo.com', 'Khulna', 'BCC, dhaka', 'ctg, bangladesh'),
(7, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Sylhet', 'BCC, dhaka.com', 'ctg, bangladesh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
