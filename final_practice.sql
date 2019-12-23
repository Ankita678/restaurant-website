-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2019 at 07:05 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_practice`
--
CREATE DATABASE IF NOT EXISTS `final_practice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `final_practice`;

-- --------------------------------------------------------

--
-- Table structure for table `final_menu`
--

CREATE TABLE IF NOT EXISTS `final_menu` (
  `Dish_id` int(3) NOT NULL AUTO_INCREMENT,
  `Dish_name` varchar(30) NOT NULL,
  `Dish_menu` varchar(30) DEFAULT NULL,
  `Dish_category` varchar(30) DEFAULT NULL,
  `Dish_price` int(5) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Dish_id`),
  UNIQUE KEY `Dish_name` (`Dish_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `final_menu`
--

INSERT INTO `final_menu` (`Dish_id`, `Dish_name`, `Dish_menu`, `Dish_category`, `Dish_price`, `Description`) VALUES
(1, 'Aloo gobhi', 'Main-course', 'North', 70, 'Cauliflower with potatoes sautéed with garam masala, turmeric, sometimes kalonji and curry leaves.'),
(2, 'Aloo tikki', 'Snacks', 'North', 50, 'Patties of potato mixed with some vegetables fried'),
(3, 'Amritsari kulcha', 'Main-course', 'North', 70, 'Type of bread'),
(4, 'Avial', 'Main-course', 'South', 50, 'Coconut paste, curd mixed with vegetables and some spices.'),
(5, 'Bajri no rotlo', 'Main-course', 'West', 60, 'Bread made with thick millet flour flatbread usual	'),
(6, 'Basundi', 'Desserts', 'West', 50, 'Sugar, milk '),
(7, 'Biryani', 'Snacks', 'South', 60, 'Spicy rice dish with vegetables'),
(8, 'Bisi bele bath', 'Main-course', 'South', 70, 'Rice preparation with vegetables.'),
(9, 'Chaat', 'Snacks', 'North', 50, 'Street food. Potato patty fried in oil, topped'),
(10, 'Chana Puri', 'Breakfast', 'North', 70, 'Main course. Chick peas, assorted spices, wheat flour and yeast for bhatura.'),
(11, 'Chana masala', 'Main-course', 'North', 80, 'Chickpeas of the Chana type in tomato based sauce.'),
(12, 'Chapati', 'Breads', '', 15, ''),
(13, 'Daal Dhokli', 'Main-course', 'West', 80, 'Very small dumplings of wheat flour are cooked '),
(14, 'Dabeli', 'Snacks', 'East', 30, 'Snack made by mixing boiled potatoes'),
(15, 'Dahi vada', 'Snacks', 'West', 50, 'Fried lentil balls in a yogurt sauce. Lentils, yog	\r\n'),
(16, 'Dal makhani ', 'Main-course', 'North', 80, 'Main course. Lentil.'),
(17, 'Dhokla', 'Breakfast', 'West', 40, 'Lentil snack. Gram.'),
(19, 'Doodhpak', 'Desserts', 'West', 60, 'Milk, rice, sugar, dry fruits '),
(20, 'Dosa', 'Breakfast', 'South', 70, 'Pancake/Hopper. Ground rice, urad dal'),
(21, 'Double ka meetha', 'Desserts', 'South', 60, 'Loaf bread, milk '),
(22, 'Fried Rice', 'Breads', NULL, 90, NULL),
(23, 'Gatta curry', 'Main-course', 'West', 90, 'Steamed dumplings made from chickpea flour cooked '),
(24, 'Ghevar', 'Desserts', 'West', 50, 'Flour, ghee, kewra, milk, clarified butter, sugar,'),
(25, 'Goli bajje', 'Snacks', 'South', 50, 'Snack. Gram flour.	\r\n'),
(26, 'Gulab Jamun', 'Desserts', 'North', 20, 'Fried milk balls soaked in sweet syrup,'),
(27, 'Handwo', 'Snacks', 'West', 70, 'Snack\r\n'),
(28, 'Idli', 'Breakfast', 'South', 30, 'Steamed cake of fermented rice and pulse flour. Rice, urad dal'),
(29, 'Jalebi', 'Desserts', 'North', 50, 'Dough fried in a coil shape dipped in sugar syrup'),
(30, 'Jeera Aloo', 'Main-course', 'West', 80, 'Typical West Indian dish'),
(31, 'Kachori', 'Snacks', 'North', 30, 'Rajasthani / Marwari special'),
(32, 'Kadai paneer', 'Main-course', 'North', 100, 'Paneer and green peppers in tomato gravy'),
(33, 'Kesari bhath	', 'Breakfast', 'West', 70, 'Kesari bat or kesari baat is a sweet Indian food'),
(34, 'Khandvi', 'Snacks', 'West', 60, 'Snack. Besan.'),
(35, 'Kulcha ', 'Breads', NULL, 30, NULL),
(36, 'Makki di roti', 'Breads', NULL, 20, NULL),
(37, 'Malpua', 'Desserts', 'West', 50, 'Milk-based '),
(38, 'Naan', 'Breads', NULL, 30, NULL),
(39, 'Paneer butter masala', 'Main-course', 'North', 100, 'Paneer and green peppers in tomato gravy'),
(40, 'Pani puri', 'Snacks', 'North', 30, 'Typical north Indian tadka'),
(41, 'Papadum', 'Snacks', 'South', 30, 'Thin deep fried disk served as meal accompaniment'),
(42, 'Parantha', 'Breakfast', 'North', 30, 'Bread. Wheat flour. Can be stuffed. Common stuffings: potato mixture, paneer, muli(white radish).'),
(43, 'Parotta', 'Main-course', 'South', 50, 'Layered kerala parotta made with maida and dalda.'),
(44, 'Pav Bhaji', 'Main-course', 'West', 70, 'Mixed curry of onion, capsicum, peas, cauliflower '),
(45, 'Payasam', 'Desserts', 'South', 70, 'Testing payasam'),
(46, 'Plain Rice', 'Breads', NULL, 50, NULL),
(47, 'Poha', 'Breakfast', 'West', 60, 'Snack. Flattened rice'),
(48, 'Pongal', 'Main-course', 'South', 70, 'Pulao'),
(49, 'Pooran-poli', 'Main-course', 'West', 60, 'Sweet stuffed bread. Wheat flour, gram.'),
(50, 'Pulao', 'Breads', NULL, 70, NULL),
(51, 'Puri Aloo', 'Breakfast', 'North', 60, 'Spicy potato gravy is served with puffed, deep fried puris'),
(52, 'Puri Chhole', 'Breakfast', 'North', 60, 'Chole bhture is a dish from the Punjab region.'),
(53, 'Qubani ka meetha	', 'Desserts', 'South', 80, 'Apricots, sugar syrup'),
(54, 'Rabri', 'Desserts', 'North', 60, 'A sweet, condensed milk-based dish '),
(55, 'Rasam', 'Main-course', 'South', 80, 'A spicy and sour soup usually made with tamarind, tomatoes, pepper and other south Indian spices. Usually eaten with rice.'),
(56, 'Samosa', 'Snacks', 'North', 20, 'Potatoes, onions, peas, coriander, and lentils, '),
(57, 'Sev tameta', 'Main-course', 'West', 70, 'Veggie. Potatoes and sev.'),
(58, 'Tandoori Roti ', 'Breads', NULL, 15, NULL),
(59, 'Thepla', 'Breakfast', 'West', 40, 'A signature Gujarati snack which is a parantha'),
(60, 'Undhiyu', 'Main-course', 'West', 90, 'Mix veggi. Plantain, brinjal, carrot, green chilli'),
(61, 'Upma', 'Breakfast', 'South', 70, 'cooked as a thick porridge from dry-roasted semolina'),
(62, 'Uttapam', 'Main-course', 'South', 80, 'Rice pancake/hopper with a topping of onions / tomatoes / coconut'),
(63, 'Vada', 'Breakfast', 'South', 30, 'Vada is a category of savoury fried snacks'),
(68, 'Rasgulla', 'Desserts', 'East', 20, 'Sweet');

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE IF NOT EXISTS `menu_category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`cat_id`, `cat_name`) VALUES
(4, 'Breads'),
(1, 'Breakfast'),
(5, 'Desserts'),
(2, 'Main-course'),
(3, 'Snacks'),
(6, 'sss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
