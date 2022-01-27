-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 12:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag_req_tb`
--

CREATE TABLE `bag_req_tb` (
  `bag_req_id` int(11) NOT NULL,
  `bag_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `req_quantity` int(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag_req_tb`
--

INSERT INTO `bag_req_tb` (`bag_req_id`, `bag_id`, `reg_id`, `date`, `req_quantity`, `status`) VALUES
(1, 2, 9, '2021-07-30', 15, 1),
(2, 3, 9, '2021-07-16', 10, 1),
(3, 7, 9, '2021-08-01', 20, 1),
(4, 5, 11, '2021-07-09', 10, 1),
(5, 5, 11, '2021-07-14', 5, 0),
(6, 4, 10, '2021-07-15', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bag_work_tb`
--

CREATE TABLE `bag_work_tb` (
  `bag_work_id` int(11) NOT NULL,
  `bag_req_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `no_of_bags` varchar(20) NOT NULL,
  `status1` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag_work_tb`
--

INSERT INTO `bag_work_tb` (`bag_work_id`, `bag_req_id`, `reg_id`, `no_of_bags`, `status1`) VALUES
(1, 1, 15, '25', '0'),
(2, 4, 15, '20', '1'),
(3, 1, 8, '25', '0'),
(4, 1, 8, '10', '1'),
(5, 4, 8, '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE `cart_tb` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`category_id`, `category_name`) VALUES
(3, 'fruits'),
(4, 'vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `common_worker_tb`
--

CREATE TABLE `common_worker_tb` (
  `common_worker_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `place` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `common_worker_tb`
--

INSERT INTO `common_worker_tb` (`common_worker_id`, `name`, `place`, `mobile`) VALUES
(1, 'akshay', 'Calicut', '741852632'),
(4, 'manu', 'Kannur', '9685457512');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_collection_tb`
--

CREATE TABLE `equipment_collection_tb` (
  `collection_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `taken_date` date NOT NULL DEFAULT current_timestamp(),
  `reg_id` int(11) NOT NULL,
  `quantity` int(50) NOT NULL,
  `collection_status` int(11) NOT NULL DEFAULT 0,
  `status2` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_collection_tb`
--

INSERT INTO `equipment_collection_tb` (`collection_id`, `equipment_id`, `taken_date`, `reg_id`, `quantity`, `collection_status`, `status2`) VALUES
(1, 4, '2021-07-05', 9, 1, 1, '1'),
(2, 1, '2021-07-05', 9, 2, 2, '1'),
(3, 6, '2021-07-05', 9, 1, 2, '5'),
(4, 6, '2021-07-05', 9, 1, 2, '4'),
(5, 3, '2021-07-06', 8, 1, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_tb`
--

CREATE TABLE `equipment_tb` (
  `equipment_id` int(11) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quantity` int(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `current_quantity` int(20) NOT NULL,
  `rent_rate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_tb`
--

INSERT INTO `equipment_tb` (`equipment_id`, `equipment_name`, `description`, `quantity`, `image`, `current_quantity`, `rent_rate`) VALUES
(1, 'NEPTUNE 3 HP Power Tiller ', 'The Neptune Mini Power Tiller 62CC NC-62 combines a very high-performance engine at the bottom with Rated Output Power of 2.20 KW / 3.0 HP and 16 design-optimised metal blades to ensure even sun-hardened and clay-heavy soils can be tackled without problem.', 48, 'neptune-tiller-62-a-500x500.jpg', -14, '500'),
(3, 'Kassi fawda Shovel Hoe', 'Grade Stainless Steel Spade for Gardening or Digging Heavy Duty Agriculture Tool', 39, '71FwKaZujDL._SL1500_.jpg', -11, '200'),
(4, 'Garden Tools', 'Traditional Set Built To Last. Ideal for a variety of tasks, including Digging, Transplanting, Pruning, loosening soil, aerating, planting, weeding and more', 14, 'Garden-Hand-Hoe-with-Prong_1_1024x1024.jpg', 16, '150'),
(5, 'Gardening Tools kit ', 'Metal parts are powder coated to prevent rust and easy to use and light weight', 20, '41SlA-8EDFL.jpg', -5, '200'),
(6, 'Machete', 'Machete for farmers', 38, 'machete.jpg', 5, '50'),
(7, 'Axe', 'For cutting woods', 1, 'images (8).jpeg', 37, '60'),
(8, 'Pick Mattock Hoe', 'A quality Japanese Kusakichi Pick Mattock hand hoe forged in one solid head piece. Made of high carbon steel, the blade is very sharp & cuts tough weeds & roots with ease. The pick hoe is also good for cultivating soil. The blade is  slightly curved which helps dig into the soil easily.', 20, '333.jpg', 11, '130');

-- --------------------------------------------------------

--
-- Table structure for table `information_tb`
--

CREATE TABLE `information_tb` (
  `information_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `heading` varchar(200) NOT NULL,
  `content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information_tb`
--

INSERT INTO `information_tb` (`information_id`, `date`, `heading`, `content`) VALUES
(1, '2021-01-12 06:20:44', 'Contract Appointment in RKI Cell – Applications invited', 'Applications are invited for appointment on contract basis for the posts of (1) State Co-ordinator & Team Leader and (2) Assistant State Co-ordinator & Convener in RKI Cell in the Directorate of Agriculture Development and Farmers’Welfare.'),
(3, '2021-01-12 06:21:41', 'AGRICULTURE INFORMATION MANAGEMENT SYSTEM ', 'As part of e-Governance Initiative of the Department of Agriculture Development and Farmers’ Welfare a Agriculture Information Management System (AIMS) has been launched with the intention of  delivering transparent and timely services to farmers. As part of the system, online facility for applying various schemes and services is available for farmers. Click the below links to go to AIMS website to avail the facilities.'),
(5, '2021-01-16 11:46:19', 'മണ്ണുപരിശോധിപ്പിക്കാം......  ', 'മണ്ണാണ് കൃഷിയുടെ അടിസ്ഥാനം ഫലഭൂയിഷ്ഠമായ മണ്ണിലുള്ള 16 തരം മൂലകങ്ങളും ധാതുക്കളുമാണ് വിളവിനെ മെച്ചപ്പെടുത്തുന്നത്. അതിന്റെ ഏറ്റക്കുറച്ചിലുകള്‍ മണ്ണിനെ ഊ...\r\n\r\n'),
(6, '2021-01-16 11:46:58', 'വിത്തും തൈയ്യും ലഭിക്കാന്‍...... ', 'ഗ്രാമസഭ പാസാക്കുന്ന പട്ടിക പ്രകാരവും കൃഷിവികസനസമിതിയുടെ ശുപാര്‍ശ പ്രകാരവും ഇടവിളകൃഷിക്കായി ഇഞ്ചി, ചേന, ചേമ്പ്, മഞ്ഞള്‍ എന്നിവയും കൃഷിവകുപ്പു മുഖേന വിവ...\r\n\r\n'),
(7, '2021-01-16 11:47:30', 'സബ്സിഡികള്‍...... ', 'കൃഷിവകുപ്പുമുഖേന സംസ്ഥാനസര്‍ക്കാരിന്റെയും കേന്ദ്രത്തിന്റെയും കാര്‍ഷിക സബ്സിഡികള്‍ക്ക് അപേക്ഷ സ്വീകരിക്കുകയും അവ കര്‍ഷകന് നേടിക്കൊടുക്കുകയും ചെയ്യുന്നു...\r\n\r\n'),
(8, '2021-01-16 11:47:56', 'സഹായം പണമായും...... ', 'പച്ചക്കറിക്കൃഷിക്ക് കൂലിച്ചെലവ്,  പച്ചക്കറിത്തൈകള്‍, വിത്തുവിതരണം, സ്‌കൂളുകള്‍ക്ക് പച്ചക്കറിവിത്തുവിതരണം, സ്‌കൂള്‍ കൃഷിയിടത്തിന് പത്തു സെന്റിന് 5000 ര...\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `username`, `password`, `role`) VALUES
(5, 'admin', '123', 'admin'),
(6, 'company1', '741', 'user'),
(7, 'maneesh', 'maneesh123', 'user'),
(8, 'abin', 'pass', 'worker'),
(9, 'anu', '123', 'user'),
(10, 'prin', '123', 'user'),
(11, 'prince', '123', 'user'),
(12, 'anugrah', '123', 'worker'),
(13, 'sree', '123', 'worker'),
(14, 'ak', '111', 'worker'),
(15, 'Athul', '123', 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `order_item_tb`
--

CREATE TABLE `order_item_tb` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item_tb`
--

INSERT INTO `order_item_tb` (`item_id`, `order_id`, `product_id`, `quantity`, `amount`) VALUES
(7, 7, 3, '1', '150'),
(9, 9, 2, '2', '155');

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `order_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `final_amount` int(20) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tb`
--

INSERT INTO `order_tb` (`order_id`, `reg_id`, `final_amount`, `product_id`, `status`) VALUES
(7, 9, 150, '', 1),
(9, 9, 310, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paper_bag_tb`
--

CREATE TABLE `paper_bag_tb` (
  `bag_id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `bag_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper_bag_tb`
--

INSERT INTO `paper_bag_tb` (`bag_id`, `model_name`, `bag_image`) VALUES
(2, 'bag-model-1', 'HTB1J8wIPhTpK1RjSZFMq6zG_VXax.jpg'),
(3, 'bag-model-2', 'depositphotos_21965193-stock-illustration-shopping-bag.jpg'),
(4, 'bag-model-3', 'bag-kraft-paper-paper-blank.jpg'),
(5, 'bag-model-4', 'bag-paper-bag-purchasing-shopping-bag (1).jpg'),
(6, 'Bag-model-5', 'eco7.jpg'),
(7, 'bag-model-6', '111111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `product_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `kg` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`product_id`, `login_id`, `category_id`, `product_name`, `quantity`, `amount`, `kg`, `image`, `description`, `status`) VALUES
(2, 6, 4, 'Capsicum ', '47', '155', '2', 'Capsicum-57598.jpg', 'Refrigerate in the vegetable crisper. At cooler times of the year capsicums can be kept in the fruit bowl.', '1'),
(3, 7, 4, 'carrots ', '23', '150', '1', 'Carrots-57608.jpg', 'Carrots are a good source of vitamin A, from carotenoids, in particular beta-carotene, which is converted to vitamin A by the body.', '1'),
(4, 6, 4, 'Okra ', '50', '140', '3', 'Okra-Green-57668.jpg', 'There are many varieties of okra; the most commonly found are green and white. Green okra is shorter and slightly stubby when compared with white okra, which is actually a light green colour.', '0'),
(5, 9, 4, 'Tomatoe ', '30', '70', '1', 'Tomato-Whole-Quarters-57727.jpg', 'Tomatoes are actually fruit but they are considered a vegetable because of their uses. They were known as pommes d’amour by the French, or apples of love.', '0'),
(7, 11, 4, 'Garlic', '60', '30', '1.5', 'Garlic-Bulbs-Cloves-57109.jpg', 'The most common varieties of garlic contain 10 cloves (or segments) with white skin. Other varieties have pink or purple skin and larger cloves', '0'),
(9, 9, 4, 'Mushrooms', '40', '300', '0.5', 'Mushrooms-Button-White-57664.jpg', 'These are mushrooms that are harvested when still small and unopened. Once the mushrooms open to a stage where the gills are visible they are referred to as cups', '1'),
(11, 6, 3, 'Papaya', '28', '50', '2', 'img-pro-04.jpg', 'Papaya is a food item', '1'),
(12, 11, 3, 'apple', '47', '102', '1', 'images (7).jpeg', 'apple is a healthy fruit', '1'),
(13, 9, 3, 'Orange', '57', '200', '1', 'download.jpg', '100% natural sweet orange.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `reg_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`reg_id`, `login_id`, `name`, `phone`, `email`, `address`, `status`) VALUES
(5, 5, 'bijith', '1236547890', 'bijith@gmail.com', 'ksdjfjdfhldfkhsjdfhkjhfkhfasgdfgifh9fi fkhdfkhhdfgdfkha;fj', '0'),
(6, 6, 'company1', '9959595451', 'company1@gmail.com', 'company1aksjdhsdjk', '0'),
(7, 7, 'maneesh', '9633325215', 'maneesh@gmail.com', 'asdddddddddddddddddddd', '0'),
(8, 8, 'abin', '8590713153', 'abinaugustin@gmail.com', 'Chempottical(H)\r\nPayam po\r\nEdoor', '1'),
(9, 9, 'anu', '123456256', 'anu11f592@gmail.com', 'asdfsadf', '0'),
(10, 10, 'prin', '13246', 'asdas@gami.com', 'rtytrutu', '0'),
(11, 11, 'prince', '8590713153', 'udemycourseandro1@gmail.com', 'fsgr', '0'),
(12, 12, 'anugrah', '136542', 'asdasss@gami.com', 'sdsadsafsf', '0'),
(13, 13, 'sree', '9847292599', 'sree@gmail.com', 'calicut', '1'),
(14, 14, 'akshaya', '9847292597', 'a@gmail.com', 'htdfgsrfd', '0'),
(15, 15, 'athul', '9847292597', 'athul@gmail.com', 'qwertyuiop', '1');

-- --------------------------------------------------------

--
-- Table structure for table `worker_req_tb`
--

CREATE TABLE `worker_req_tb` (
  `req_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `required_wrkr` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `pending_workers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_req_tb`
--

INSERT INTO `worker_req_tb` (`req_id`, `reg_id`, `required_wrkr`, `status`, `pending_workers`) VALUES
(5, 11, 21, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `work_accept_tb`
--

CREATE TABLE `work_accept_tb` (
  `accept_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_accept_tb`
--

INSERT INTO `work_accept_tb` (`accept_id`, `reg_id`, `work_id`, `status`) VALUES
(1, 4, 1, 0),
(2, 5, 3, 0),
(3, 6, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_tb`
--

CREATE TABLE `work_tb` (
  `work_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_tb`
--

INSERT INTO `work_tb` (`work_id`, `req_id`, `status`) VALUES
(1, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag_req_tb`
--
ALTER TABLE `bag_req_tb`
  ADD PRIMARY KEY (`bag_req_id`);

--
-- Indexes for table `bag_work_tb`
--
ALTER TABLE `bag_work_tb`
  ADD PRIMARY KEY (`bag_work_id`);

--
-- Indexes for table `cart_tb`
--
ALTER TABLE `cart_tb`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `common_worker_tb`
--
ALTER TABLE `common_worker_tb`
  ADD PRIMARY KEY (`common_worker_id`);

--
-- Indexes for table `equipment_collection_tb`
--
ALTER TABLE `equipment_collection_tb`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `equipment_tb`
--
ALTER TABLE `equipment_tb`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `information_tb`
--
ALTER TABLE `information_tb`
  ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `order_item_tb`
--
ALTER TABLE `order_item_tb`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `paper_bag_tb`
--
ALTER TABLE `paper_bag_tb`
  ADD PRIMARY KEY (`bag_id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `worker_req_tb`
--
ALTER TABLE `worker_req_tb`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `work_accept_tb`
--
ALTER TABLE `work_accept_tb`
  ADD PRIMARY KEY (`accept_id`);

--
-- Indexes for table `work_tb`
--
ALTER TABLE `work_tb`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag_req_tb`
--
ALTER TABLE `bag_req_tb`
  MODIFY `bag_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bag_work_tb`
--
ALTER TABLE `bag_work_tb`
  MODIFY `bag_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_tb`
--
ALTER TABLE `cart_tb`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `common_worker_tb`
--
ALTER TABLE `common_worker_tb`
  MODIFY `common_worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipment_collection_tb`
--
ALTER TABLE `equipment_collection_tb`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipment_tb`
--
ALTER TABLE `equipment_tb`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `information_tb`
--
ALTER TABLE `information_tb`
  MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_item_tb`
--
ALTER TABLE `order_item_tb`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paper_bag_tb`
--
ALTER TABLE `paper_bag_tb`
  MODIFY `bag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `worker_req_tb`
--
ALTER TABLE `worker_req_tb`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_accept_tb`
--
ALTER TABLE `work_accept_tb`
  MODIFY `accept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_tb`
--
ALTER TABLE `work_tb`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
