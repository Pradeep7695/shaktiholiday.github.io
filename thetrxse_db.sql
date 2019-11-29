-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 09:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetrxse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about_desc` longtext,
  `service1` varchar(255) DEFAULT NULL,
  `service2` varchar(255) DEFAULT NULL,
  `service3` varchar(255) DEFAULT NULL,
  `service4` varchar(255) DEFAULT NULL,
  `about_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_desc`, `service1`, `service2`, `service3`, `service4`, `about_img`, `created_at`) VALUES
(5, '<p>We feel obliged to introduce our ambitious Travel venture&nbsp;<strong>&quot;The Travel Firm&quot;</strong>&nbsp;as an entity which takes care of any tour and travel requirement of its esteemed clients at global level. The Travel Firm has been venturing into a new geographic area and making the utmost effort to make the best deal available to its clients.<strong>&nbsp;</strong><strong>Our Services Include -&nbsp;</strong>Air, Hotel &amp; Railway reservations; Domestic &amp; International Holiday Packages; Visa Assistance; Foreign Exchange; Corporate bookings; Car Rentals &amp; almost everything related to travel...</p>\r\n\r\n<p>The Travel Firm is a one-stop enterprise that offers a complete range of travel related solutions. Superior knowledge, efficient planning and to anticipate and resolve potential problems if any, along the way are reasons behind our success.</p>\r\n\r\n<p><strong>WE ASSURE YOU THAT YOUR TRAVEL WILL BE FUN, SAFE, ECONOMICAL, INFORMATIVE, COMFORTABLE &amp; MEMORABLE !!!</strong></p>\r\n', 'Depending on each other to do the right thing in all situations, we aim at assuring best services at an economical rate', 'Continuously doing the right thing that results in win-win situations for all ', 'We will be our customer\'s preferred choice by providing them services that exceed their expectation. For doing this, we have 24 hours assistance for customers on Phone call, Email & WhatsApp', 'Working together to ensure that our clients receive the best service right from booking the tour to finishing the tour', 'http://thetravelfirm.in/uploads/why-choose-us.jpg', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@shaktiholiday.com', '50112233');

-- --------------------------------------------------------

--
-- Table structure for table `car_rent`
--

CREATE TABLE `car_rent` (
  `id` int(11) NOT NULL,
  `car_desc` longtext,
  `car_rule` longtext,
  `car_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_rent`
--

INSERT INTO `car_rent` (`id`, `car_desc`, `car_rule`, `car_img`, `created_at`) VALUES
(3, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.\r\n\r\nWorld Travel Visa Rules:-', 'Ferari', 'http://thetravelfirm.in/ci/uploads/car1.jpg', '2019-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `contactno` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `contactno`, `email`, `address`, `created_at`) VALUES
(3, '+91-9137178720 | 022-25600030', 'info@thetravelfirm.in', '207, 2nd Floor, Runwal Heights, LBS Marg, Opp. Nirmal Lifestyle, Mulund (W), Mumbai - 400080', '2019-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `domestic_package`
--

CREATE TABLE `domestic_package` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) DEFAULT NULL,
  `state_sort_desc` text,
  `state_img` text,
  `domestic_trip_name` varchar(255) DEFAULT NULL,
  `domestic_price` varchar(255) DEFAULT NULL,
  `domestic_trip_day` varchar(255) DEFAULT NULL,
  `domestic_desc` longtext,
  `domestic_img` text,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domestic_tour_state`
--

CREATE TABLE `domestic_tour_state` (
  `domestic_tour_id` int(11) NOT NULL,
  `state_tour_id` int(11) DEFAULT NULL,
  `domestic_tour_name` varchar(255) NOT NULL,
  `domestic_tour_duration` varchar(255) NOT NULL,
  `domestic_tour_img` text NOT NULL,
  `itinerary` longtext NOT NULL,
  `inclusion_exclusion` longtext NOT NULL,
  `tour_cost` longtext NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domestic_tour_state`
--

INSERT INTO `domestic_tour_state` (`domestic_tour_id`, `state_tour_id`, `domestic_tour_name`, `domestic_tour_duration`, `domestic_tour_img`, `itinerary`, `inclusion_exclusion`, `tour_cost`, `created_at`) VALUES
(2, 24, 'hgjh', 'hfhfhhhhhhhhhhhhhhhhhhhh', 'http://localhost/shaktiholiday/uploads/bali612.jpg', '<p>hvhvhvh</p>\r\n', '<p>hgjjjjjj</p>\r\n', '<p>nvvnv</p>\r\n', '2019-10-14'),
(3, 19, 'jjvj', 'jgjhjjhfj', 'http://localhost/shaktiholiday/uploads/bali712.jpg', '<p>jkgjkgkj</p>\r\n', '<p>gjhgk</p>\r\n', '<p>hjgjhg</p>\r\n', '2019-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `foreignexchange`
--

CREATE TABLE `foreignexchange` (
  `id` int(11) NOT NULL,
  `foreign_desc` longtext,
  `foreign_rule` longtext,
  `foreign_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `img_gallery`
--

CREATE TABLE `img_gallery` (
  `id` int(11) NOT NULL,
  `img_name` varchar(50) DEFAULT NULL,
  `t_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_gallery`
--

INSERT INTO `img_gallery` (`id`, `img_name`, `t_img`, `created_at`) VALUES
(9, 'Paris', 'http://thetravelfirm.in/uploads/effile-tower1.jpg', '2019-04-30'),
(10, 'Thailand', 'http://thetravelfirm.in/uploads/thailand-wallpaper-22.jpg', '2019-04-30'),
(11, 'Manali', 'http://thetravelfirm.in/uploads/manali.jpg', '2019-04-30'),
(12, 'Prague', 'http://thetravelfirm.in/uploads/pargue.jpg', '2019-04-30'),
(13, 'Singapore', 'http://thetravelfirm.in/uploads/singapore.jpg', '2019-04-30'),
(14, 'Andaman', 'http://thetravelfirm.in/uploads/andaman2.png', '2019-05-06'),
(15, 'kerala', 'http://thetravelfirm.in/uploads/kerla2.jpg', '2019-05-06'),
(16, 'Sikkim', 'http://thetravelfirm.in/uploads/sikkim2.jpg', '2019-05-06'),
(17, 'Himachal', 'http://thetravelfirm.in/uploads/Himachal2.jpg', '2019-05-06'),
(18, 'Utarakhand', 'http://thetravelfirm.in/uploads/utarakhand2.jpg', '2019-05-06'),
(19, 'Bali', 'http://thetravelfirm.in/uploads/bali2.jpg', '2019-05-06'),
(22, 'Anup', 'http://localhost/shaktiholiday/uploads/iskon1.jpg', '2019-10-01'),
(23, 'Test 10oct', 'http://localhost/shaktiholiday/uploads/image003.png', '2019-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `international_package`
--

CREATE TABLE `international_package` (
  `id` int(11) NOT NULL,
  `intern_trip_name` varchar(255) DEFAULT NULL,
  `intern_trip_price` varchar(255) DEFAULT NULL,
  `intern_trip_day` varchar(255) DEFAULT NULL,
  `intern_trip_desc` longtext,
  `intern_trip_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_package`
--

INSERT INTO `international_package` (`id`, `intern_trip_name`, `intern_trip_price`, `intern_trip_day`, `intern_trip_desc`, `intern_trip_img`, `created_at`) VALUES
(2, 'Bali', '17999 PP', '4 Night 5 Day', '<p><strong>Bali&nbsp;</strong>is Indonesia&#39;s most famous island for its volcanic mountains, iconic beaches and coral reefs,&nbsp;<strong>Bali</strong>&nbsp;is the best place for any&nbsp;<strong>tourist</strong>&nbsp;who needs a week of absolute relaxation, fragrant cuisine, scenic beauty and a galore of culture and tradition.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://thetravelfirm.in/uploads/bali1.jpg', '2023-07-19'),
(3, 'Thailand (Bangkok & Pattaya)', '13999 PP', '4 Night 5 Day', '<p>Thailand is a Southeast Asian country known for its tropical beaches, opulent royal palaces, ancient ruins and ornate temples displaying figures of Buddha. It is the Most and Famous place for touring.&nbsp;Its popularity as a tourist destination owes a great deal to its benign climate.&nbsp;</p>\r\n\r\n<p><strong>Bangkok</strong>&nbsp;is the capital and most populous city of Thailand. it&nbsp;is one of the world&#39;s top tourist destinations.&nbsp;Bangkok&#39;s well-known sights are the Grand Palace, major Buddhist temples,&nbsp;museums,&nbsp;Cruises and boat trips on the Chao Phraya and Thonburi&#39;s canals</p>\r\n\r\n<p><strong>Pattaya</strong>&nbsp;is a resort city&nbsp;in Thailand.&nbsp;Popular activities include &nbsp;Go Kart Racing, and visiting different theme parks and zoos such as the Elephant Village,&nbsp;The private Shri Racha Tiger Zoo&nbsp;features tigers, crocodiles, and other animals, Nong Nooch Tropical Botanical Garden,&nbsp;Pattaya, is a 500-acre&nbsp;botanical garden and orchid nursery where cultural shows with trained chimpanzees and elephants are presented. The park also keeps several tigers and an assortment of birds.</p>\r\n', 'http://thetravelfirm.in/uploads/thailand-wallpaper-24.jpg', '2023-07-19'),
(4, 'Phuket &amp; Krabi', '21999 PP', '4 Night 5 Day', '<p>Krabi, on southern Thailand&rsquo;s west coast, is a province characterized by craggy, sheer limestone cliffs, dense mangrove forests, and more than a hundred offshore islands.</p>\r\n', 'http://thetravelfirm.in/uploads/Phuket_Krabi.jpg', '2023-07-19'),
(5, 'Bangkok, Phuket & Krabi', '23999 PP', '5 Night 6 Day', '<p>Krabi, on southern Thailand&rsquo;s west coast, is a province characterized by craggy, sheer limestone cliffs, dense mangrove forests, and more than a hundred offshore islands.</p>\r\n', 'http://thetravelfirm.in/uploads/krabi3.jpg', '2019-05-06'),
(6, 'Singapore', '24999 PP', '4 Night 5 Day', '<p><strong>Singapore&nbsp;</strong>is a small and progressive island-nation. It is both a city and a country located in Southeast Asia. it&#39;s wonderful place for touring.</p>\r\n', 'http://thetravelfirm.in/uploads/singapore1.jpg', '2019-05-06'),
(7, 'Dubai', '22999 PP', '4 Night 5 Day', '<p><strong>Dubai</strong>&nbsp;is the alchemy of profound traditions and a futuristic vision. The vivacious city is perched on the Gulf coastline and is the most cosmopolitan and modern destination in the Middle East. ... It has become a hot destination for holidays with family and&nbsp;<strong>tourists</strong>&nbsp;from every part of the world are headed to&nbsp;<strong>Dubai</strong>.</p>\r\n', 'http://thetravelfirm.in/uploads/only-in-dubai.jpg', '2019-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `maharashtra-tour`
--

CREATE TABLE `maharashtra-tour` (
  `mh_id` int(11) NOT NULL,
  `mh_tour_name` varchar(255) NOT NULL,
  `mh_tour_img` text NOT NULL,
  `tour_duration` varchar(255) NOT NULL,
  `tour_day` varchar(255) NOT NULL,
  `inclusion_exclution` longtext NOT NULL,
  `itinerary` longtext NOT NULL,
  `tour_cost` longtext NOT NULL,
  `depature_date` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maharashtra-tour`
--

INSERT INTO `maharashtra-tour` (`mh_id`, `mh_tour_name`, `mh_tour_img`, `tour_duration`, `tour_day`, `inclusion_exclution`, `itinerary`, `tour_cost`, `depature_date`, `created_at`) VALUES
(1, 'Ashtvinayak Jejuri Tour (Iskon)', 'http://localhost/shaktiholiday/uploads/iskon.jpg', '3 Night / 4 Days', 'Every Friday', '<p><strong>Tour Cost Includes:</strong></p>\r\n\r\n<p>2X2 LUXURY BUS (PUSHBACK), ACCOMODATION IN DLX HOTEL, BREAKFAST, LUNCH, EVENING TEA &amp; DINNER.<br />\r\nSINGLE PERSON SEPERATE NON A/C ROOM WIIL BE CHARGE RS. 900/- EXTRA.<br />\r\nSINGLE PERSON SEPARATE A/C ROOM WILL BE CHARGE RS.1500/- EXTRA.<br />\r\nNON A/C BUS &amp; A/C ROOM WILL BE CHARGE RS. 1000/- EXTRA.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>MEAL PLAN: </strong><br />\r\nDAY 1 &ndash; B/F + LUNCH + DINNER<br />\r\nDAY 2 &ndash; B/F + LUNCH + DINNER<br />\r\nDAY 3 &ndash; B/F + LUNCH.</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE : DAY 3RD DINNER NOT INCLUDE IN TOUR COST<br />\r\nBOOKING CAN BE CONFIRMED BY MAKING ADVANCE PAYMENT&nbsp; OF 50 %.<br />\r\nTHE TOUR COST INCLUDES BUS TRAVEL, ACCOMMODATION, VEGETARIAN MEAL-VEG. BREAKFAST, LUNCH &amp; DINNER,TEA/COFFEE FOR 3 DAYS.<br />\r\nDROPPING PASSENGERS VIA THANE,CHEMBUR,SION UP TO BORIVALI WESTERN EXPRESS HIGHWAY.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><big><strong>Tour Cost Excludes:</strong></big></p>\r\n\r\n<p>NOTE : DROPPING PASSENGERS VIA THANE, CHEMBUR, SION UPTO BORIVALI WESTERN EXPRESS HIGHWAY.<br />\r\nSERVICE TAX 4.50% extra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>THIS TOUR IS NON REFUNDABLE / TRANSFERABLE.</strong></p>\r\n', '<h2>2&nbsp;Nights / 3&nbsp;Days</h2>\r\n\r\n<p><strong>Day 01 : Breakfast, Lunch, Dinner</strong></p>\r\n\r\n<p>Dept. 5.00 a.m. From Borivali to Mahad &ndash; Varadvinayak, Pali-Ballaleshwar, Ranjangaon-Mahaganpati, Night halt at hotel. ( Pune )</p>\r\n\r\n<p><strong>Day 02 : Breakfast, Lunch, Dinner</strong></p>\r\n\r\n<p>Theur-Chintamani, Siddhatek-Siddhivinayak, Morgaon-Mayureshwar, Jejuri-Khandoba, Night halt at hotel. ( Pune )</p>\r\n\r\n<p><strong>Day 03 : Breakfast, Lunch.</strong></p>\r\n\r\n<p>Lenyadri-Girijatmaj, Ozar-Vighnahar, Malshej ghat &ndash; Murbad, Kalyan-Thane-Mumbai.</p>\r\n', '<p><strong>EVERY FRIDAY</strong><br />\r\n<strong>YEAR 2016</strong><br />\r\n<strong>NOV : 25-26-27<br />\r\nDEC : 2-3-4, 9-10-11, 10-11-12, 16-17-18, 23-24-25, 30-31-1</strong><br />\r\n<strong>YEAR 2017</strong><br />\r\n<strong>JAN : 6-7-8-, 13-14-15, 20-21-22, 27-28-29<br />\r\nFEB : 3-4-5, 10-11-12, 17-18-19, 24-25-26<br />\r\nMAR : 3-4-5, 10-11-12, 17-18-19, 24-25-26, 26-27-28</strong></p>\r\n', '<p><strong>EVERY FRIDAY</strong><br />\r\n<strong>YEAR 2016</strong><br />\r\n<strong>NOV : 25-26-27<br />\r\nDEC : 2-3-4, 9-10-11, 10-11-12, 16-17-18, 23-24-25, 30-31-1</strong><br />\r\n<strong>YEAR 2017</strong><br />\r\n<strong>JAN : 6-7-8-, 13-14-15, 20-21-22, 27-28-29<br />\r\nFEB : 3-4-5, 10-11-12, 17-18-19, 24-25-26<br />\r\nMAR : 3-4-5, 10-11-12, 17-18-19, 24-25-26, 26-27-28</strong></p>\r\n', '2019-09-28 00:00:00'),
(4, 'Gujrat', 'http://localhost/shaktiholiday/uploads/Sardar_Vallabhbhai_Patel_of_Statue_of_Unity_in_Gujarat_India.jpg', '4 Night / 5 Days', 'Every Month', '<h2><strong>Inclusion</strong></h2>\r\n\r\n<ul>\r\n	<li>To &amp; Fro. Transportation by A/c. Coach,</li>\r\n	<li>2 Half day sight seeing of Mahabaleshwar &ndash; Panchgani Combined Tour , and Pratap Gardh Darshan by Sharing Taxi : 3/4 Night &nbsp;stay with &nbsp;Veg Food ,</li>\r\n	<li>Check- in &ndash; Check out as per Hotel Rules</li>\r\n	<li>PHOTO IDENTITY FOR CHECK IN COMPULSORY</li>\r\n</ul>\r\n\r\n<h2><strong>Exclusion</strong></h2>\r\n\r\n<ul>\r\n	<li>1st Day Early Check in Breakfast Charges,</li>\r\n	<li>Food &amp; Refreshment During Journey ,</li>\r\n	<li>Transfer from Bus Stand to Hotel and Hotel to Bus Stand,</li>\r\n	<li>Boating, Pony Rides, Entry Tax, Additional Sight Seeing Charges, Laundry Charges, Hotel taxes and Service Tax etc.</li>\r\n</ul>\r\n\r\n<p><strong>Daily volvo Mumbai-mahabaleshwar-Mumbai</strong></p>\r\n\r\n<ul>\r\n	<li>Season : RS.550/- &nbsp; &nbsp; &nbsp; &amp; &nbsp; &nbsp; &nbsp; Off season: RS.450/-.</li>\r\n</ul>\r\n', '<h2><strong>2 NIGHTS STAY</strong></h2>\r\n\r\n<p><strong>Day 01</strong></p>\r\n\r\n<p>Check In Hotel As Per Hotel Rules Rest Of Day Free. (Breakfast , Lunch &amp; Dinner at Hotel)</p>\r\n\r\n<p>Day 02</p>\r\n\r\n<p>After Breakfast Proceed For Sightseeing 9.30 Am Mahabaleshwar Darshan &amp; Panchagani Darshan: Panchaganga Mandir, Lord Shiva Mandir, Kets Point, Eco Point &amp; Needle Hole, Table Land, Parsi Point, Malas Jam Factory (3 Hours Combined Sight Seeing) Return To Hotel For Lunch Rest Of The Day Free. (Breakfast, Lunch &amp; Dinner at Hotel)</p>\r\n\r\n<p>Day 03</p>\r\n\r\n<p>Check Out Time 8.00 Am (Tour Program May Be Interchange at Mahabaleshwar)</p>\r\n', '<table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n			<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">Description</div>\r\n			</th>\r\n			<th>\r\n			<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">Non AC Hotel / AC Bus</div>\r\n			</th>\r\n			<th>\r\n			<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">Non AC Hotel / Non AC Bus</div>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td>PER PERSON (ON TWIN SHARING BASIS)</td>\r\n			<td>Rs 5950 /-</td>\r\n			<td>Rs 5250 /-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>EXTRA PERSON (IN SAME ROOM WITH EXTRA MATTRESS)</td>\r\n			<td>Rs 5650 /-</td>\r\n			<td>Rs 5225 /-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CHILD (05 TO 10) (IN SAME ROOM WITH EXTRA MATTRESS)</td>\r\n			<td>Rs 5450 /-</td>\r\n			<td>Rs 5025 /-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CHILD (02 TO 04) (NO SEAT &amp; MATTRESS)</td>\r\n			<td>Rs 2000 /-</td>\r\n			<td>Rs 1500 /-</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><strong>EVERY THURSDAY<br />\r\nYEAR 2016</strong><br />\r\n<strong>DEC : 3-4-5-6-7, 8-9-10-11-12, 17-18-19-20-21,&nbsp;</strong><strong>24-25-26-27-2</strong><strong>8</strong><br />\r\n<strong>YEAR 2017<br />\r\nJAN : 5-6-7-8-9, 12-13-14-15-16, 19-20-21-22-23, 26-27-28-29-30<br />\r\nFEB : 2-3-4-5-6, 9-10-11-12-13, 16-17-18-19-20, 23-24-25-26-27<br />\r\nMAR : 2-3-4-5-6,&nbsp;</strong><strong>&nbsp;9-10-11-12-13, 16-17-18-19-20, 23-24-25-26-27</strong></div>\r\n', '2019-09-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `one_day_tour`
--

CREATE TABLE `one_day_tour` (
  `id` int(11) NOT NULL,
  `one_day_tour_name` varchar(255) DEFAULT NULL,
  `tour_desc` longtext,
  `tour_img` text,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `one_day_tour`
--

INSERT INTO `one_day_tour` (`id`, `one_day_tour_name`, `tour_desc`, `tour_img`, `created_at`) VALUES
(1, 'Tickets to Imagica', '<h2>Tickets to Imagica</h2>\r\n\r\n<p>Imagica offers a world-class Theme Park, Water Park and a Snow Park.<br />\r\nA Regular Ticket to each Park includes unlimited access to all attractions within that Park &ndash; we don&rsquo;t charge extra for individual attractions.<br />\r\nYou can also avail upgrades for each Park &ndash; Express tickets, travel services or food vouchers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Theme Park</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Each Regular ticket includes unlimited access to all attractions and rides, everyday!</div>\r\n\r\n<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Ticket</div>\r\n			</th>\r\n			<th>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Peak</div>\r\n			</th>\r\n			<th>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Non-Peak</div>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Adult</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,899</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,599</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Child</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,499</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,299</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">College Student</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,499</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,299</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Sr. Citizen</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>999</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>999</strong></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Express tickets allow you to enjoy more of the Park in less time.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Express Silver:</strong> Add 1000 per ticket and jump the queue a single time on selected rides.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Express Gold:</strong> Add 2000 per ticket and jump the queue unlimited times on selected rides.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Water Park</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Each Regular ticket includes unlimited access to all attractions and rides, everyday!</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Enjoy Daily Savings</strong> &ndash; non-peak rates apply on all days until 8th Jan, 2017.</div>\r\n\r\n<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Ticket</div>\r\n			</th>\r\n			<th>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Peak</div>\r\n			</th>\r\n			<th>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Non-Peak</div>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Adult</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>1,099</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>999</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Child</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>899</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>799</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">College Student</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>899</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>799</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Sr. Citizen</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>599</strong></div>\r\n			</td>\r\n			<td>\r\n			<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>599</strong></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Express tickets allow you to enjoy more of the Park in less time.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Express Silver:</strong> Add 700 per ticket and jump the queue a single time on selected rides.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Snow Park</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Each Regular ticket includes a 45 min. session, with unlimited snow play.</div>\r\n\r\n<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Session Ticket</td>\r\n			<td><strong>499</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Add as Add-on and SAVE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Add-on with Theme Park</td>\r\n			<td><strong>399</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Add-on with Water Park</td>\r\n			<td><strong>399</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Transport Options</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">With mulitple <a href=\"http://www.adlabsimagica.com/travel/\" target=\"_blank\">travel options &ndash; car, bus or train</a>, it&rsquo;s easier than ever to get to Imagica.</div>\r\n', 'http://localhost/shaktiholiday/uploads/krabi4.jpg', '2001-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `popular_tour`
--

CREATE TABLE `popular_tour` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `package_img` text,
  `url_link` longtext NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popular_tour`
--

INSERT INTO `popular_tour` (`id`, `package_name`, `package_price`, `package_img`, `url_link`, `created_at`) VALUES
(12, 'Thailand ', 13999, 'http://thetravelfirm.in/uploads/thailand-wallpaper-21.jpg', 'http://thetravelfirm.in/contact-us', '2019-04-30'),
(14, 'Singapore', 24999, 'http://thetravelfirm.in/uploads/singapore2.jpg', 'http://thetravelfirm.in/contact-us', '2019-05-06'),
(15, 'Bali', 17999, 'http://thetravelfirm.in/uploads/bali3.jpg', 'http://thetravelfirm.in/contact-us', '2019-05-06'),
(16, 'Dubai', 22999, 'http://thetravelfirm.in/uploads/only-in-dubai1.jpg', 'http://thetravelfirm.in/contact-us', '2019-05-06'),
(17, 'Kerala', 15999, 'http://thetravelfirm.in/uploads/kerla3.jpg', 'http://thetravelfirm.in/contact-us', '2019-05-06'),
(18, 'Sikkim', 18999, 'http://thetravelfirm.in/uploads/sikkim3.jpg', 'http://thetravelfirm.in/contact-us', '2019-05-06'),
(19, 'Demo package', 5000, 'http://localhost/shaktiholiday/uploads/Sardar_Vallabhbhai_Patel_of_Statue_of_Unity_in_Gujarat_India2.jpg', 'https://traveltriangle.com/mkt/Manali-Tour-Packages/?utm_campaign=Exp_SEM_Desktop_Core_Lead-CPC_All_Domestic_Himachal_from-Tier1_All&utm_medium=adwords_cpc&utm_source=Adwords&utm_content=manali-competitors-tour__Manali-Tour-Packages__17Jan2017_954032&referer=Adwords__Exp_SEM_Desktop_Core_Lead-CPC_All_Domestic_Himachal_from-Tier1_All__manali-competitors-tour__Manali-Tour-Packages__17Jan2017_954032&utm_term=kwd-133858932088-c-143576728-a-23461919128&matchtype=b&placement=&network=g&device=c&adposition=1t1&devicemodel=&adId=372399396672&kwdName=makemytrip%20manali%20tour&gclid=EAIaIQobChMI0YjRu-eR5QIV1zMrCh16QAatEAAYASAAEgIf9PD_BwE', '2019-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `policy_desc` longtext,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `policy_desc`, `created_at`) VALUES
(4, '<p><strong>Lorem ipsum</strong> dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>\r\n\r\n<p><strong>Privacy Policy Rules:-</strong></p>\r\n\r\n<ol>\r\n	<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n	<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n	<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n	<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n</ol>\r\n', '2019-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `slider_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_img`, `created_at`) VALUES
(2, 'Slider Test update', 'http://localhost/shaktiholiday/uploads/bali6.jpg', '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `state_tour_category`
--

CREATE TABLE `state_tour_category` (
  `state_tour_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_tour_des` text NOT NULL,
  `state_tour_img` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tour_category`
--

INSERT INTO `state_tour_category` (`state_tour_id`, `state_name`, `state_tour_des`, `state_tour_img`, `created_at`) VALUES
(19, 'Maharashtra', 'test', 'http://localhost/shaktiholiday/uploads/consul-bg-311.jpg', '2019-10-11 00:00:00'),
(20, 'Channai', 'fsdfsdfsfd', 'http://localhost/shaktiholiday/uploads/Sardar_Vallabhbhai_Patel_of_Statue_of_Unity_in_Gujarat_India5.jpg', '2019-10-11 00:00:00'),
(21, 'Kashmir Tours', 'fsdfg', 'http://localhost/shaktiholiday/uploads/consul-bg-314.jpg', '2019-10-11 00:00:00'),
(22, 'Kerala', 'Beautifull Place', 'http://localhost/shaktiholiday/uploads/Untitled-design-8-13.png', '2019-10-14 00:00:00'),
(24, 'Panjab', 'Test Panjab city', 'http://localhost/shaktiholiday/uploads/andaman4.png', '2019-10-14 00:00:00'),
(25, 'sikkim', 'testhbb', 'http://localhost/shaktiholiday/uploads/bali61.jpg', '2019-10-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `term_desc` longtext,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `term_desc`, `created_at`) VALUES
(3, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Lorem ipsum</strong> dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>\r\n\r\n			<p><strong>Terms &amp; Condition Rules:-</strong></p>\r\n\r\n			<ol>\r\n				<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n				<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n				<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n				<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `client_img` text,
  `review` longtext,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `client_name`, `client_img`, `review`, `created_at`) VALUES
(5, 'Anup Srivastava', 'http://thetravelfirm.in/uploads/no-user2.jpg', '<p>One of the best Travel agency for touring.. best deal for me.</p>\r\n', '2019-04-26'),
(6, 'Pradeep', 'http://thetravelfirm.in/uploads/no-user1.jpg', '<p>Its really nice and best service for tours and travel.&nbsp; happy with service.</p>\r\n', '2019-04-26'),
(7, 'Sagar Angre', 'http://thetravelfirm.in/uploads/Testimonial-Icon.png', '<p>I am really happy with the services given by the travel from Mulund west it is one of the best company for tour packages and I am already recommended to all my friends and colleagues thank you so much.</p>\r\n', '2019-04-30'),
(8, 'Deependra', 'http://thetravelfirm.in/uploads/logo.jpg', '<p>Nice... Good Luck</p>\r\n', '2019-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `id` int(11) NOT NULL,
  `trip_name` varchar(255) DEFAULT NULL,
  `trip_day` varchar(255) DEFAULT NULL,
  `package_price` varchar(255) NOT NULL,
  `trip_desc` longtext,
  `trip_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourpackage`
--

INSERT INTO `tourpackage` (`id`, `trip_name`, `trip_day`, `package_price`, `trip_desc`, `trip_img`, `created_at`) VALUES
(4, 'Kashmir', '5 Night 6 Day', '14999  PP', '<p>Kashmir is a state in northern India Popularly known as the &quot;Paradise on the Earth&quot; the state is world famous for its scenic splendor, snow-capped mountains, plentiful wildlife, exquisite. Its Really Beautifull Place.</p>\r\n', 'http://thetravelfirm.in/uploads/kasmir.jpg', '2019-05-04'),
(5, 'Ladakh', '7 Night 8 Day', '19999 PP', '<p>Ladakh, a word which means &quot;land of high passes&quot;, is a region in the state of Jammu and Kashmir of Northern India.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://thetravelfirm.in/uploads/tour_ladakh.jpg', '2019-05-04'),
(6, 'Sikkim', '6 Night 7 Day', '18999 PP', '<p>Sikkim is a state in northeast India, bordered by Bhutan.Pelling A paradise in West&nbsp;<em>Sikkim</em>. Around 10 km from Gyalshing, Pelling is today emerging as the second biggest&nbsp;<em>tourist</em>&nbsp;destination in the state after Gangtok</p>\r\n', 'http://thetravelfirm.in/uploads/sikkim.jpg', '2019-05-04'),
(7, 'Himachal', '6 Night 7 Day', '18999', '<p>Himachal is known paradise for nature lovers. Its Beauty of Natural Places. Rivers and Mountains. Visited Place Kullu Manali.</p>\r\n', 'http://thetravelfirm.in/uploads/Himachal.jpg', '2019-05-04'),
(8, 'Uttarakhand', '5 Night 6 Day', '17999 PP', '<p>Uttarakhand, a state in northern India crossed by the Himalayas, Its Best Place For Touring with Hill Station &amp;&nbsp;Natural Beauty.</p>\r\n', 'http://thetravelfirm.in/uploads/utarakhand.jpg', '2019-05-04'),
(9, 'Kerala', '5 Night 6 Day', '15999 PP', '<p>Kerala, a state situated on the tropical Malabar Coast of southwestern India, is one of the most popular tourist destinations in the country. Named as one of the ten paradises of the world by National Geographic Traveler, Kerala is famous especially for its ecotourism initiatives and beautiful backwaters.</p>\r\n', 'http://thetravelfirm.in/uploads/kerla.jpg', '2019-05-04'),
(10, 'Andaman', '5 Night 6 Day', '17999 PP', '<p>The Andaman Islands are an Indian archipelago in the Bay of Bengal. These roughly 300 islands are known for their palm-lined, white-sand beaches, mangroves and tropical rainforests.</p>\r\n', 'http://thetravelfirm.in/uploads/andaman.png', '2019-05-04'),
(11, 'Thailand (Bangkok  Pattaya)', '4 Night 5 Day', '13999', '<p>Thailand is the Most and Famous place for touring.&nbsp;&nbsp;Its popularity as a tourist destination owes a great deal to its benign climate.&nbsp;</p>\r\n', 'http://thetravelfirm.in/uploads/thailand-wallpaper-23.jpg', '2019-05-04'),
(12, 'Phuket-Krabi', '4 Night 5 Day', '21999 PP', '<p>Krabi, on southern Thailand&rsquo;s west coast, is a province characterized by craggy, sheer limestone cliffs, dense mangrove forests, and more than a hundred offshore islands.</p>\r\n', 'http://thetravelfirm.in/uploads/krabi.jpg', '2019-05-04'),
(13, 'Bangkok Phuket Krabi ', '5 Night 6 Day', '23999 PP', '<p>Krabi, on southern Thailand&rsquo;s west coast, is a province characterized by craggy, sheer limestone cliffs, dense mangrove forests, and more than a hundred offshore islands.</p>\r\n', 'http://thetravelfirm.in/uploads/krabi1.jpg', '2019-05-04'),
(14, 'Bali', '4 Night 5 Day', '17999 PP', '<p><strong>Bali </strong>is Indonesia&#39;s most famous island,&nbsp;<strong>Bali</strong>&nbsp;is the best place for any&nbsp;<strong>tourist</strong>&nbsp;who needs a week of absolute relaxation, fragrant cuisine, scenic beauty and a galore of culture and tradition.</p>\r\n', 'http://thetravelfirm.in/uploads/bali.jpg', '2019-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `travel_insurance`
--

CREATE TABLE `travel_insurance` (
  `id` int(11) NOT NULL,
  `travel_desc` longtext,
  `travel_rule` longtext,
  `travel_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_slider`
--

CREATE TABLE `video_slider` (
  `id` int(11) NOT NULL,
  `video` text,
  `video_title` varchar(255) DEFAULT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_slider`
--

INSERT INTO `video_slider` (`id`, `video`, `video_title`, `mime_type`, `created_at`) VALUES
(4, 'http://thetravelfirm.in/uploads/330149744.mp4', 'test', 'video/mp4', '2019-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE `visa` (
  `id` int(11) NOT NULL,
  `visa_desc` longtext,
  `visa_rule` longtext NOT NULL,
  `visa_img` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa`
--

INSERT INTO `visa` (`id`, `visa_desc`, `visa_rule`, `visa_img`, `created_at`) VALUES
(2, '<h3><strong>SINGAPORE</strong></h3>\r\n\r\n<p><strong>&nbsp;DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n	<li>35x45mm (Two) 80%</li>\r\n	<li>Visa Form 14A</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>Occupation Proofs (Id Card, Visit Card, GST Certification, Leave Letter)</li>\r\n	<li><strong>Process: 4 Working days</strong></li>\r\n</ul>\r\n', 'Testing', 'http://thetravelfirm.in/uploads/home-travel-logo.png', '2019-04-26'),
(5, '<h2><strong>PHILIPPINES</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 8-10 Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo.png', '2019-05-04'),
(6, '<h2><strong>MALAYSIA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Two)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>Bank Statement</li>\r\n	<li><strong>Process: 5 Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo1.png', '2019-05-04'),
(7, '<h2><strong>SOUTH KOREA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 5-6 Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo2.png', '2019-05-04'),
(8, '<h2><strong>THAILAND</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>Bank Statement</li>\r\n	<li><strong>Process: 3&nbsp;Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo3.png', '2019-05-04'),
(9, '<h2><strong>SOUTH AFRICA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 40k- 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15 Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo4.png', '2019-05-04'),
(10, '<h2><strong>CHINA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Two)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form PDF Online&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>Day To Day Itinerary</li>\r\n	<li>Other Categories Contact GV Team (urgent Extra)</li>\r\n	<li><strong>Process: 4&nbsp;Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo5.png', '2019-05-04'),
(11, '<h2><strong>FRANCE</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form (O)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 3-4&nbsp;Working days</strong></li>\r\n	<li><strong>NOTE:-&nbsp;&nbsp;BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo6.png', '2019-05-04'),
(12, '<h2><strong>BANGLADESH</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Two) 80%&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li>Visa Form 14A&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>Occupation Proofs</li>\r\n	<li><strong>Process: 10 Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo7.png', '2019-05-04'),
(13, '<h2><strong>GERMANY</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form (O)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15 Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo8.png', '2019-05-04'),
(14, '<h2><strong>UK</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;DS 160&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15&nbsp;Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo9.png', '2019-05-04'),
(15, '<h2><strong>ITALY</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15&nbsp;Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo10.png', '2019-05-04'),
(16, '<h2><strong>CANADA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form + Family Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 35-40&nbsp;Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo11.png', '2019-05-04'),
(17, '<h2><strong>USA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form DS 160&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15 Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo12.png', '2019-05-04'),
(18, '<h2><strong>SWITZERLAND</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15 Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo13.png', '2019-05-04'),
(19, '<h2><strong>CROATIA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15 Working days</strong></li>\r\n	<li><strong>Note: Personal Presence</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo14.png', '2019-05-04'),
(20, '<h2><strong>NETHERLANDS</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp; (O)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 10-15 Working days</strong></li>\r\n	<li><strong>Note: BioMetrics</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo15.png', '2019-05-04'),
(21, '<h2><strong>NEW ZEALAND</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 8-10&nbsp;Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo16.png', '2019-05-04'),
(22, '<h2><strong>AUSTRALIA</strong></h2>\r\n\r\n<p><strong>DOCUMENTS CHECKLIST</strong></p>\r\n\r\n<ul>\r\n	<li>Passport + Old Passport&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>35x45mm (Three)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Visa Form (O)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n	<li>Covering letter&nbsp;</li>\r\n	<li>Air Ticket&nbsp;</li>\r\n	<li>Hotel Confirmation&nbsp;</li>\r\n	<li>ITR 3Yrs, Leave Letter</li>\r\n	<li>Bank Statement 6 Mths</li>\r\n	<li>Salary slips 3 Months</li>\r\n	<li><strong>Process: 20-25 Working days</strong></li>\r\n</ul>\r\n', '', 'http://thetravelfirm.in/uploads/travel-logo17.png', '2019-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_rent`
--
ALTER TABLE `car_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domestic_tour_state`
--
ALTER TABLE `domestic_tour_state`
  ADD PRIMARY KEY (`domestic_tour_id`),
  ADD KEY `state_id` (`state_tour_id`);

--
-- Indexes for table `foreignexchange`
--
ALTER TABLE `foreignexchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_gallery`
--
ALTER TABLE `img_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_package`
--
ALTER TABLE `international_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maharashtra-tour`
--
ALTER TABLE `maharashtra-tour`
  ADD PRIMARY KEY (`mh_id`);

--
-- Indexes for table `one_day_tour`
--
ALTER TABLE `one_day_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_tour`
--
ALTER TABLE `popular_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tour_category`
--
ALTER TABLE `state_tour_category`
  ADD PRIMARY KEY (`state_tour_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourpackage`
--
ALTER TABLE `tourpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_insurance`
--
ALTER TABLE `travel_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_slider`
--
ALTER TABLE `video_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa`
--
ALTER TABLE `visa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_rent`
--
ALTER TABLE `car_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `domestic_tour_state`
--
ALTER TABLE `domestic_tour_state`
  MODIFY `domestic_tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foreignexchange`
--
ALTER TABLE `foreignexchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_gallery`
--
ALTER TABLE `img_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `international_package`
--
ALTER TABLE `international_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `maharashtra-tour`
--
ALTER TABLE `maharashtra-tour`
  MODIFY `mh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `one_day_tour`
--
ALTER TABLE `one_day_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `popular_tour`
--
ALTER TABLE `popular_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state_tour_category`
--
ALTER TABLE `state_tour_category`
  MODIFY `state_tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tourpackage`
--
ALTER TABLE `tourpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `travel_insurance`
--
ALTER TABLE `travel_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_slider`
--
ALTER TABLE `video_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visa`
--
ALTER TABLE `visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `domestic_tour_state`
--
ALTER TABLE `domestic_tour_state`
  ADD CONSTRAINT `domestic_tour_state_ibfk_1` FOREIGN KEY (`state_tour_id`) REFERENCES `state_tour_category` (`state_tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
