-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 02:51 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newbeginnings`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `sold_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `type`, `price`, `quantity`, `description`, `img_url`, `sold_items`) VALUES
(1, 'Bayern Sideboard', 'Storage Solutions', 2500, 10, '        Dark Walnut Finish        ', '        images/items/Bayern_Sideboard.jpg', 14),
(2, 'Sideboard Mahogany', 'Storage Solutions', 3000, 0, '  Mahogany Finish  ', '  images/items/Sideboard_Mahogany.jpg', 0),
(3, 'Pato Storage Bench Teak', 'Storage Solutions', 3999, 0, '  Teak Finish  ', '  images/items/Patoa_Storage__Bench_Teak.jpg', 10),
(4, 'Kepler Tripod FloorLamp', 'Lamp', 2000, 10, '  Teakwood base, Height adjustable base  ', '  images/items/Kepler_Tripod_FloodLamp.jpg', 7),
(5, 'Lenox Single Bed', 'Bed', 5000, 10, '   Single Bed Size, Graphite   ', '   images/items/Lenox_Single_Bed.jpg', 9),
(6, 'Boston Single Bed', 'Bed', 4000, 10, '  Teak Finish.  ', '  images/items/Boston_Single_Bed.jpg', 2),
(7, 'Fitzroy Bed With Trundle ', 'Bed', 5000, 10, '  Single Bed Size Dark Walnut Finish.  ', '  images/items/Fitzroy_Bed_With_Trundle_and_Storage_Single.jpg', 5),
(8, 'Drachen Table Lamp', 'Lamp', 2000, 9, ' Antique Brass Finish, White Shade, Conical. ', ' images/items/Drachen_Table_Lamp.jpg', 3),
(9, 'Charlton Home Gillenwater ', 'Curtains', 799, 11, 'Panel: 63'''' L x 42'''' W x 0.25'''' D', 'images/items/Charlton-Home-Gillenwater-Blackout-Single-Panel.jpg', 0),
(10, 'Wayfair Basics Light ', 'Curtains', 600, 10, '40" W x 63" L Size', 'images/items/Wayfair-Basics-Light-Blocking-Single-Curtain-Panel.jpg', 0),
(11, 'Nautica Cabana Stripe Drape ', 'Curtains', 700, 11, '84'''' L x 52'''' W x 0.25'''' D', 'images/items/Nautica-Nautica-Cabana-Stripe-Drape-Panel-2006.jpg', 0),
(12, 'Amherst Upholstered Platform ', 'Bed', 900, 12, ' Overall: 39'' H x 43.5'' W x 75'' D ', ' images/items/Amherst-Upholstered-Platform-Bed-ANDO2170.jpg', 0),
(13, 'Varick Gallery Oakwood Table Lamps 2 sets', 'Lamp', 2000, 11, 'Overall: 31'''' H x 14'''' W x 14'''' D', 'images/items/Varick-Gallery-Oakwood-31-Table-Lamps-Set-of-2-VKGL1529.jpg', 0),
(14, 'Sweetwater Thermal Insulated Blackout Pair', 'Curtains', 900, 11, 'Coastal style', 'images/items/Sweetwater-Thermal-Insulated-Blackout-Curtain-Panels-Pair.jpg', 0),
(15, 'Sheldon Single Curtain Panel', 'Curtains', 650, 13, 'Panel: 84'''' L x 100'''' W', 'images/items/Sheldon-Single-Curtain-Panel-BRWT3282.jpg', 0),
(16, 'Bentham Table Lamp', 'Lamp', 3000, 11, 'Overall: 31.75'''' H x 16'''' W x 9'''' D', 'images/items/Bentham-31.75-H-Table-Lamp-with-Rectangular-Shade-HOHN2952.jpg', 0),
(17, 'Sheffield Modern and Contemporary Organizer', 'Storage Solutions', 5000, 10, 'Overall: 19.23'''' H x 43.91'''' W x 14.55'''' D', 'images/items/Sheffield-Modern-and-Contemporary-3-door-Dark-Brown-Wood-Entryway-Storage-Cushioned-Bench-Shoe-Rack-Cabinet-Organizer.jpg', 0),
(18, 'Lamantia 2 Drawer Filing', 'Storage Solutions', 6000, 10, 'Finish: Auburn Cherry ', 'images/items/Lamantia-2-Drawer-Filing-Cabinet-THRE4523.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(12, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(100, 'user', '12dea96fec20593566ab75692c9949596833adc9', 0),
(101, 'qwe', 'f10e2821bbbea527ea02200352313bc059445190', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
