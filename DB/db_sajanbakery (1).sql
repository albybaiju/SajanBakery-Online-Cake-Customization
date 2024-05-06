-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 12:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sajanbakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_contact` varchar(30) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_contact`, `admin_email`, `admin_password`) VALUES
(1, 'Bharat', '2147483647', 'abc@gmail.com', 'qwerty1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` varchar(100) NOT NULL DEFAULT '0',
  `booking_status` varchar(100) NOT NULL DEFAULT '0',
  `booking_amount` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_status`, `booking_amount`, `user_id`) VALUES
(22, '2023-10-10', '2', 50, 34),
(23, '2023-10-10', '2', 1550, 34),
(24, '2023-10-10', '0', 0, 0),
(25, '2023-10-10', '2', 4200, 35),
(26, '2023-10-10', '2', 30, 36);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_quantity` varchar(100) NOT NULL DEFAULT '1',
  `product_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_quantity`, `product_id`, `booking_id`, `cart_status`) VALUES
(33, '1', 3, 22, 1),
(34, '1', 2, 23, 1),
(35, '1', 3, 24, 0),
(36, '1', 14, 23, 1),
(37, '1', 11, 25, 1),
(38, '1', 12, 25, 1),
(39, '1', 16, 25, 1),
(40, '1', 18, 25, 1),
(41, '1', 1, 26, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_price`) VALUES
(1, 'Black Forrest', 600),
(2, 'white forrest', 600),
(3, 'Red velvet', 800),
(4, 'chocolate truffle', 800),
(5, 'vancho ', 700),
(6, 'rainbow', 1000),
(7, 'Butterscotch', 550);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`color_id`, `color_name`) VALUES
(1, 'Red'),
(2, 'Green'),
(3, 'Blue'),
(4, 'Yellow'),
(5, 'Violet'),
(6, 'Cyan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_content` varchar(100) NOT NULL,
  `complaint_status` varchar(100) NOT NULL DEFAULT '0',
  `complaint_reply` varchar(100) NOT NULL DEFAULT 'Not Yet Replyed',
  `user_id` int(11) NOT NULL,
  `complaint_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_content`, `complaint_status`, `complaint_reply`, `user_id`, `complaint_date`) VALUES
(1, 'no fast reply', '1', 'we will do better', 1, '2023-09-18'),
(2, 'no very good cake\r\n', '1', 'angne veran vazhi illalo', 1, '2023-09-28'),
(3, 'hello my cake was hot!!\r\n\r\n', '1', 'podaa', 5, '2023-10-03'),
(4, 'very bad service\r\n', '1', 'ok we will do better', 34, '2023-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(5, 'KOTTAYAM'),
(6, 'PATHANAMTHITTA'),
(7, 'ALAPPUZHA'),
(8, 'ERNAKULAM'),
(9, 'IDUKKI'),
(10, 'KOLLAM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_icing`
--

CREATE TABLE `tbl_icing` (
  `icing_id` int(11) NOT NULL,
  `icing_name` varchar(50) NOT NULL,
  `icing_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_icing`
--

INSERT INTO `tbl_icing` (`icing_id`, `icing_name`, `icing_price`) VALUES
(1, 'Butter cream', 100),
(2, 'fresh cream', 100),
(3, 'jello', 80),
(4, 'chocolate', 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `district_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `place_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`district_id`, `place_id`, `place_name`, `place_pincode`) VALUES
(1, 1, 'manimala', 0),
(1, 2, 'alappara', 0),
(1, 3, 'vellamchira', 0),
(2, 4, 'chunkappara', 0),
(2, 5, 'kottangal', 0),
(2, 6, 'vaipur', 0),
(2, 7, 'kumbazham', 0),
(3, 9, 'cherthala', 0),
(4, 12, 'edapally', 0),
(4, 13, 'palarivattam', 0),
(2, 14, 'kaipattoor', 689648),
(5, 15, 'MANIMALA', 689648),
(5, 16, 'ALAPARA', 689648),
(6, 17, 'KAIPATTOOR', 6896498),
(6, 18, 'MALLAPALLY', 689644),
(6, 19, 'CHUNKAPPARA', 689647),
(7, 20, 'ALAPPUZHA', 689649),
(7, 21, 'CHERTHALA', 689646),
(8, 22, 'VAITILLA', 689564),
(8, 23, 'EDAPPALLY', 6896498),
(9, 24, 'VAGAMON', 689665),
(10, 25, 'KOLLAM', 689648),
(9, 26, 'THODUPUZHA', 689666);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_details`) VALUES
(1, 'Muffins', 30, 'Blueberry-Muffin.jpg', 'Blueberry muffin'),
(2, 'Swiss roll', 50, 'OIP1.jpg', 'Chocolate swiss roll'),
(3, 'Chocolate Cupcake', 50, 'cakecp.jpg', 'It uses cocoa or unsweetened chocolate along with flour as main ingredients and is usually decorated with gorgeous frosting and sprinkles on top.'),
(4, 'Coffee cookies', 80, 'cakeco.jpg', 'It usually contains flour, sugar, egg, and some type of oil, fat, or butter. It may include other ingredients such as raisins, oats, chocolate chips, nuts.'),
(5, 'Chocolate lava cup cake', 70, 'cakelv.jpg', 'Molten chocolate cake is a French dessert that consists of a chocolate cake with a liquid chocolate core.'),
(6, 'Red Velvet cupcake', 30, 'cakered.jpg', 'Fluffy and moist, these buttery red velvet cupcakes are topped with tangy cream cheese frosting puts them over the top.'),
(7, 'White Forest', 600, 'cakewht.jpg', 'Layers of vanilla sponge cake are filled with sour cherries, white chocolate cream and plenty of Kirschwasse'),
(8, 'Black Forest', 600, 'cakebl.jpg', 'The perfect amalgamation of chocolate, whipped cream frosting and cherry liqueur garnished with fresh cherries.'),
(9, 'Butterscotch cake', 600, 'cakebt.jpg', 'This butterscotch cake has tender moist brown butter cake layers, a silky smooth butterscotch buttercream, and butterscotch sauce.'),
(10, 'Vancho Cake', 800, 'cakevn.jpg', 'Vancho Cake is an awesome combination of chocolate and vanilla cake topped with white and dark chocolate ganache.'),
(11, 'Spiderman Cake', 900, 'cakespi.jpg', 'The spiderman cakes come in different flavors like vanilla, marble, chocolate, and red velvet'),
(12, 'Chocolate Truffle Cake', 1000, 'cakech.jpg', 'A traditional chocolate truffle is a confectionery made with a rich chocolate ganache center'),
(13, 'Vanilla Wedding  Cake', 1600, 'cakewed1.jpg', 'A white cake, traditionally in tiered layers, covered with white icing and decorated'),
(14, 'Butterscotch Wedding  Cake', 1500, 'cakewed2.jpg', 'The cake stands tall with tiers of moist and delicate vanilla sponge.'),
(15, 'Strawberry Wedding  Cake', 1300, 'cakewed3.jpg', 'The exterior of the cake is adorned with a velvety Strawberry pulp'),
(16, 'Sponge Wedding Cake', 1300, 'cakewed4.jpg', 'The luscious red berries, nestled between each tier.'),
(17, 'Vancho Wedding Cake', 1800, 'cakewed5.jpg', 'A wedding cake, a sublime blend of artistry and flavor'),
(18, 'Wedding Fruit Cake', 1000, 'cakewed6.jpg', 'topped by decorations made from frosting, with edible flowers, or with other decorations');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `request_id` int(11) NOT NULL,
  `request_date` varchar(10) NOT NULL,
  `request_details` varchar(300) NOT NULL,
  `request_image` varchar(500) NOT NULL,
  `delivery_location` varchar(100) NOT NULL,
  `delivery_time` varchar(50) NOT NULL,
  `delivery_contact` varchar(100) NOT NULL,
  `request_kg` varchar(50) NOT NULL,
  `shape_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `icing_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `topping_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_fordate` varchar(50) NOT NULL,
  `request_status` int(11) NOT NULL DEFAULT 0,
  `request_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`request_id`, `request_date`, `request_details`, `request_image`, `delivery_location`, `delivery_time`, `delivery_contact`, `request_kg`, `shape_id`, `category_id`, `icing_id`, `color_id`, `topping_id`, `user_id`, `request_fordate`, `request_status`, `request_amount`) VALUES
(16, '2023-10-10', 'qwertyuiopjhgf', 'Image Not Found', 'qwertyuioiuydsdf', '18:00', '9526009070', '5.0', 1, 1, 1, 4, 0, 34, '2023-10-19', 0, '3500'),
(17, '2023-10-10', 'Ashgfsgdfg', 'abc.png', 'wertygftresfgdfd', '15:23', '9526009070', '1.0', 3, 5, 2, 2, 1, 34, '2023-10-20', 0, '825'),
(19, '2023-10-10', '0', 'adhin.jpg', 'Opp metro piller 511\r\nedapally', '16:38', '8590903116', '2.5', 4, 5, 2, 1, 3, 35, '2024-10-13', 1, '2050');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `review_datetime` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_review` varchar(100) NOT NULL,
  `user_rating` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `review_datetime`, `product_id`, `user_review`, `user_rating`, `user_name`) VALUES
(1, '2023-09-18 22:48:45', 2, 'Good roll', '4', 'Alby'),
(2, '2023-09-18 22:49:08', 2, 'asddff', '0', 'Alby'),
(3, '2023-09-18 22:49:44', 2, 'cake!!!!!', '0', 'jaganathan'),
(4, '2023-09-18 22:50:09', 2, 'g', '2', 'bob'),
(5, '2023-10-05 23:55:33', 1, 'good', '4', 'Alby'),
(6, '2023-10-09 19:22:17', 3, 'ver good', '4', 'bob'),
(7, '2023-10-10 15:48:47', 1, 'please improve your qua;ity\n', '1', 'xz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shape`
--

CREATE TABLE `tbl_shape` (
  `shape_id` int(11) NOT NULL,
  `shape_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_shape`
--

INSERT INTO `tbl_shape` (`shape_id`, `shape_name`) VALUES
(1, 'Rectangle'),
(2, 'Oval'),
(3, 'Square'),
(4, 'Mickey mouse');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topping`
--

CREATE TABLE `tbl_topping` (
  `topping_id` int(11) NOT NULL,
  `topping_name` varchar(100) NOT NULL,
  `topping_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_topping`
--

INSERT INTO `tbl_topping` (`topping_id`, `topping_name`, `topping_price`) VALUES
(1, 'KitKat Bar', 25),
(2, 'Gems', 10),
(3, 'ChocoStick', 20),
(4, 'Cherries', 50),
(5, 'Fresh Cherries', 70),
(6, 'Snickers bar', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_contact` bigint(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `user_deliveryaddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `place_id`, `user_password`, `user_gender`, `user_image`, `user_deliveryaddress`) VALUES
(34, 'ALBY BAIJU', 9526009705, 'alby02@gmail.com', 15, 'Alby4432', 'Male', 'testimonial-3.jpg', 'PIDIYANCHERRIL H,ALAPARA,MANIMALA P.O'),
(35, 'Adhin Shaji', 8590903116, 'adhinshaji7@gmail.com', 23, 'adhinSHAJI123', 'Male', 'adhin.jpg', 'Opp metro piller 511\r\nedapally \r\nernakulam'),
(36, 'xz', 9786543228, 'abc@gmail.com', 22, 'abc%eWghjghjgf98@W', 'Male', 'adhin.jpg', 'vaitilla p.o.,ernakulam,kerala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_icing`
--
ALTER TABLE `tbl_icing`
  ADD PRIMARY KEY (`icing_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_shape`
--
ALTER TABLE `tbl_shape`
  ADD PRIMARY KEY (`shape_id`);

--
-- Indexes for table `tbl_topping`
--
ALTER TABLE `tbl_topping`
  ADD PRIMARY KEY (`topping_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_icing`
--
ALTER TABLE `tbl_icing`
  MODIFY `icing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_shape`
--
ALTER TABLE `tbl_shape`
  MODIFY `shape_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_topping`
--
ALTER TABLE `tbl_topping`
  MODIFY `topping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
