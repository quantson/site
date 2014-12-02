-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2014 at 06:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zappistore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  `filters` text NOT NULL,
  `logo_file` varchar(65) NOT NULL,
  `title` varchar(65) NOT NULL,
  `description_short` text NOT NULL,
  `description_long` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `filters`, `logo_file`, `title`, `description_short`, `description_long`) VALUES
(1, 'estatic', 'mb bestsell static pack', 'estatic', 'estatic <br/>by millward brown', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(2, 'impackt lite', 'mmr impackt bestsell pack', 'mmr', 'impackt lite<br/>by mmr', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(3, 'conversion model', 'tns', 'conversion', 'conversion model<br/>by tns', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(4, 'video creative test', 'zappi videocreative bestsell video', 'creative', 'video<br/>creative test', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(5, 'static creative test', 'zappi staticcreative static newprod', 'creative', 'static</br>creative test', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(6, 'new product development', 'zappi npd newprod', 'npd', 'new product<br/>development', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(7, 'choose it', 'zappi chooseit bestsell static newprod pack', 'chooseit', 'choose it<br/>test', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"'),
(8, 'tonic', 'tonic', 'tonic', 'tonic<br/>by tonic insight', '"Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit"', '"Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae"');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
