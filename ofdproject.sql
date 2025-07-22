-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 03:15 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ofdproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE IF NOT EXISTS `addtocart` (
  `cart_id` int(50) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`cart_id`, `item_name`, `price`) VALUES
(4, 'Pasta With Fish', 200),
(6, 'Poha with Onion', 50),
(7, 'Poha with Onion', 50),
(8, 'Fresh meat', 350),
(9, 'Big vegetarian soup', 150),
(10, 'Big vegetarian soup', 150),
(11, 'Peanut Sandwich', 250),
(12, 'Lemon Meringue Pie', 118),
(13, 'Smoked Brisket Sandwich', 250),
(14, 'Cream Cheesecake', 100),
(15, 'King Prawns And Lobster', 150),
(16, 'Citrus Cured Salmon', 300),
(17, 'Bananas Foster', 110),
(18, 'Bananas Foster', 110),
(19, 'Bananas Foster', 110),
(22, 'Bananas Foster', 110),
(23, 'Beef Burger Meal', 165),
(24, 'Poha with Onion', 50),
(25, 'Pasta With Fish', 200),
(26, 'Bananas Foster', 110),
(27, 'Bananas Foster', 110),
(28, 'Bananas Foster', 110),
(29, 'Bananas Foster', 110),
(30, 'Cream Cheesecake', 100),
(31, 'Cream Cheesecake', 100),
(32, 'Pasta With Fish', 200),
(33, 'Cream Cheesecake', 100);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `food_image` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `food_image`) VALUES
(4, 'desert', 'desert.jpg'),
(5, 'italian', 'Italian.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contactpage`
--

CREATE TABLE IF NOT EXISTS `contactpage` (
  `ref_id` int(10) NOT NULL AUTO_INCREMENT,
  `custmor_name` varchar(20) NOT NULL,
  `custmor_email` varchar(30) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`ref_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contactpage`
--

INSERT INTO `contactpage` (`ref_id`, `custmor_name`, `custmor_email`, `subject`, `message`) VALUES
(1, 'netra', 'netra0309@gmail.com', 'Review ', 'Very Good Response'),
(2, 'netra', 'netra0309@gmail.com', 'Review ', 'Very Good Response'),
(3, 'JUHI VIBHAKAR', 'juhivibhakar07@gmail.com', 'Review ', 'Really done a nice work..'),
(4, 'juhiii', 'juhivibhakar07@gmail.com', 'Review ', 'Good '),
(7, 'ABC', 'abc@gmail.com', 'Review ', 'Find it Nice'),
(8, 'JUHI VIBHAKAR', 'juhivibhakar07@gmail.com', 'Review ', 'Good'),
(10, 'JUHI VIBHAKAR', 'juhivibhakar07@gmail.com', 'Review ', 'Good'),
(11, 'JUHI VIBHAKAR', 'juhivibhakar07@gmail.com', 'Review ', 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `visits` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `custmor_name` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email_id` varchar(10) NOT NULL,
  `number` bigint(10) NOT NULL,
  `description` varchar(10) NOT NULL,
  `feedback_date` date NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `custmor_name`, `subject`, `email_id`, `number`, `description`, `feedback_date`) VALUES
(4, 'AAA', 'Review ', 'juhi@gamil', 3333333333, 'Rating', '2022-07-02'),
(5, 'Netra Jadav', 'Review', 'netra@gmai', 99999999, 'Good Servi', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `healthcarereview`
--

CREATE TABLE IF NOT EXISTS `healthcarereview` (
  `hc_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(20) NOT NULL,
  `disease_review` varchar(30) NOT NULL,
  PRIMARY KEY (`hc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `healthcarereview`
--

INSERT INTO `healthcarereview` (`hc_id`, `customer_id`, `disease_review`) VALUES
(2, 2, 'High Sugar'),
(3, 3, 'Low Sugar'),
(4, 103, 'BP');

-- --------------------------------------------------------

--
-- Table structure for table `healthpage`
--

CREATE TABLE IF NOT EXISTS `healthpage` (
  `health_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(10) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `disease_name` varchar(10) NOT NULL,
  PRIMARY KEY (`health_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `healthpage`
--

INSERT INTO `healthpage` (`health_id`, `customer_name`, `customer_email`, `disease_name`) VALUES
(1, 'netra', 'netra0309@', 'High Sugar'),
(2, 'netra', 'netra0309@', 'High Sugar'),
(3, 'Himanshu S', 'h@gmail.co', 'Sugar'),
(4, 'abc', 'abc@gmail.com', 'Olive eler'),
(5, 'Netra', 'netra0309@gmail.com', 'High Sugar'),
(6, 'JUHI VIBHA', 'juhivibhakar07@gmail.com', 'High Sugar'),
(7, 'JUHI VIBHA', 'juhivibhakar07@gmail.com', 'High Sugar'),
(8, 'Sagar Jada', 'sagar95@gmail.com', 'spicy'),
(9, 'netra', 'netra0309@gmail.com', 'High Sugar'),
(10, 'JUHI VIBHA', 'juhivibhakar07@gmail.com', 'High Sugar'),
(11, 'ABC', 'abc@gmail.com', 'High Sugar');

-- --------------------------------------------------------

--
-- Table structure for table `homecategory`
--

CREATE TABLE IF NOT EXISTS `homecategory` (
  `category_id` int(50) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `homecategory`
--

INSERT INTO `homecategory` (`category_id`, `category_name`, `amount`) VALUES
(1, 'Pasta With Fish', 200),
(2, 'Poha With Onion', 50);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `restaurant_name` varchar(10) NOT NULL,
  `dperson_id` int(10) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `restaurant_name`, `dperson_id`) VALUES
(2, 5, 'xyz', 5),
(3, 6, 'abc', 3),
(4, 7, 'def', 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `restaurant_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `restaurant_id`, `amount`) VALUES
(1, 101, 103, 500),
(2, 106, 109, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `registerpage`
--

CREATE TABLE IF NOT EXISTS `registerpage` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `customer_email` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registerpage`
--

INSERT INTO `registerpage` (`user_id`, `fname`, `lname`, `customer_email`, `pass`) VALUES
(1, 'Netra', 'Jadav', 'netra0309@', '123'),
(2, 'Juhi', 'Vibhakar', 'juhivibhak', 'j123');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE IF NOT EXISTS `schemes` (
  `cashback_id` int(10) NOT NULL AUTO_INCREMENT,
  `offer` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `terms_and_condition` varchar(255) NOT NULL,
  PRIMARY KEY (`cashback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`cashback_id`, `offer`, `start_date`, `end_date`, `terms_and_condition`) VALUES
(2, 'Diwali offer', '2021-11-04', '2021-11-15', 'Only upto 1000 rs.'),
(4, 'Holi', '2022-03-03', '2022-03-20', 'Eve Offer'),
(5, 'Holi', '2022-03-03', '2022-03-20', 'Eve Offer');

-- --------------------------------------------------------

--
-- Table structure for table `signuppage`
--

CREATE TABLE IF NOT EXISTS `signuppage` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `signuppage`
--

INSERT INTO `signuppage` (`user_id`, `fname`, `lname`, `customer_email`, `pass`) VALUES
(1, 'Netra', 'Jadav', 'netra0309@gmail.com', 'n123'),
(2, 'Bhumit', 'Boraniya', 'b@gamil.com', 'b123'),
(3, 'Bhumit', 'Boraniya', 'b@gamil.com', 'b123'),
(4, 'Juhi', 'Vibhakar', 'juhivibhakar07@gmail.com', 'j1526');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
