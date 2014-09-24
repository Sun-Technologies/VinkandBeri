-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2014 at 06:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store-locator`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(83, 'George''s Dreshertown ShopNBag', '1650 Limekiln Pike Dresher, PA 19025', 40.147, -75.1677),
(84, 'DeKalb Supermarket', '815 DeKalb Street Norristown, PA 19401', 40.1189, -75.3398),
(85, 'Dublin Shop N Bag', '161 N. Main Street Dublin, PA 18917', 40.3759, -75.2061),
(86, 'Richboro Shop N Bag', '1025 N. Second Street Pike Richboro, PA 18954', 40.2164, -75.0106),
(87, 'West Norriton Farmers Market', '1930 W. Main Street Norristown, PA 19401', 40.1317, -75.377),
(88, 'The Market of Lafayette Hill', '531 Germantown Pike Lafayette Hill, PA 19444', 40.0871, -75.2518),
(89, 'Tanner Brother''s & Sons Inc.', '1070 Hatboro Road Warminster, PA 18974', 40.2203, -75.0297),
(90, 'Assi Plaza', '1222 North Wales Road North Wales, PA 19454', 40.2256, -75.2545),
(91, 'Landis Supermarket Inc. #20', '2685 County Line Road Telford, PA 18969', 40.331, -75.3341),
(92, 'Landis Supermarket Inc. #30', '543 Constitution Ave. Perkasie, PA 18944', 40.3675, -75.2986),
(93, 'Landis Supermarket Inc. #40', '841 Gravel Pike Schwenksville, PA 19473', 40.2986, -75.4143),
(94, 'Landis Supermarket Inc. #50', '2700 Shelly Road Harleysville, PA 19438', 40.2985, -75.4143),
(95, 'Freed''s Supermarket', '2024 Swamp Pike Gilbertsville, PA 19525', 40.2969, -75.5854),
(96, 'Net Cost Market', '11701 Bustleton Avenue Philadelphia, 19116', 40.1193, -75.0169),
(97, 'McMenamin Family Shop Rite', '9910 Frankford Ave. Suite 240 Philadelphia, PA 19114', 40.0725, -74.9856),
(98, 'Hatboro Market & Deli', '101 Fitch Road Hatboro, PA 19040', 40.1719, -75.0963),
(99, 'Foresta''s Country Meat Mart Inc.', '1098 W. Bridge Street Phoenixville, PA 19460', 40.1233, -75.536),
(100, 'Corropolese Bakery & Deli', '541 S. Broad Street Lansdale, PA 19446', 40.2349, -75.2902),
(101, 'Super 7 Supermarket', '317 Bridge Street Phoenixville, PA 19460', 40.1, -75.088),
(102, 'Marshall Food Mart', '724 W. Marshall Street Norristown, PA 19401', 40.1816, -75.352),
(103, 'Sam''s Italian Market', '3504 W. Moreland Rd Willow Grove, PA 19090', 40.1512, -75.1339),
(104, 'Rich''s Deli', '430 S. Bethlehem Pike Ft. Washington, PA 19034', 40.1361, -75.2135),
(105, '309 Deli', '1618 Bethlehem Pike Hatfield, PA 19440', 40.2902, -75.2705),
(106, 'B.P. Lansdale', '868 Sumneytown Pike Lansdale, PA 19446', 40.2256, -75.3071),
(107, 'West Point Deli Plus', '794 Sumneytown Pike Lansdale, PA 19447', 40.2215, -75.3023),
(108, 'Merry Mead Farm', '2222 S. Valley Forge Rd Lansdale, PA 19448', 40.2083, -75.3356),
(109, 'Lansdale Food Mart & Deli', '291 N. Broad Street Lansdale, PA 19449', 40.2426, -75.2824),
(110, '7-Eleven', '919 Horsham Road Montgomeryville, PA 18936', 40.2389, -75.2299),
(111, 'Guiliano''s Deli', '429 N. Chestnut Street Lansdale, PA 19446', 40.2434, -75.2789),
(112, 'Citgo Market', '1703 Markley Street Norristown, PA 19401', 40.1322, -75.3345),
(113, 'Sister Mini Market', '601 Arch Street Norristown, PA 19402', 40.1158, -75.3377),
(114, '7-Eleven', '226 Germantown Pike Norristown, PA 19403', 40.1417, -75.3115),
(115, 'El Changaroo Supermarket', '637 Markley Street Norristown, PA 19404', 40.1194, -75.3465),
(116, 'La Mexicana', '225 E. County Line Road Hatboro, PA 19040', 40.1774, -75.0812),
(117, 'Jacksonville Food Mart', '40 E. Street Road Warminster, PA 18974', 40.1987, -75.0819),
(118, 'San Antonio Mexican Deli & Grocery', '221 W. Broad Street Quakertown, PA 18951', 40.4414, -75.336),
(119, 'Sellersville Gas & Mart', '396 N. Main Street Sellersville, PA 18960', 40.3638, -75.3127),
(120, 'Carroll''s Seafood & Produce', '5840 Easton Road Plumsteadville, PA 18949', 40.3858, -75.1465),
(121, 'B.P. Norristown', '223 W Main St Norristown, PA 19401', 40.1165, -75.3478),
(122, 'Lukoil ', '681 E Broad St Souderton, PA 18964', 40.3151, -75.3118),
(123, 'Lukoil ', '1099 Easton Rd Abington, PA 19001', 40.1212, -75.1332),
(124, 'Sanatoga Thriftway', '2190 E. High Street Pottstown, PA 19464', 40.2442, -75.599),
(125, 'Village Market', '300 S Main St Sellersville, PA 18960', 40.3538, -75.3059),
(126, '7-Eleven', '523 Richlandtown Pike Richlandtown, PA 18955', 40.4636, -75.3233),
(127, 'Stop N Shop', '615 E High Street Pottstown, PA 19464', 40.2448, -75.639),
(128, 'One Stop Daily', '315 E High St Pottstown, PA 19464', 40.2455, -75.6471),
(129, 'Yohns Grocery', '78N York St Pottstown, PA 19464', 40.2481, -75.6524),
(130, 'Rainbow Mart', '1574 Bristol Pike Bensalem, PA 19020', 40.0751, -74.96),
(131, 'Country Food Market', '203 W State Street Doylestown, PA 18901', 40.3084, -75.1357),
(132, 'Masons Grocery Market', '353 Lyceum Avenue Philadelphia, PA 19128', 40.0301, -75.2188),
(133, 'Sorrentinos Deli', '4361 Cressan Street Philadelphia, PA 19127', 40.0267, -75.2239),
(134, 'Commissari Food Market', '5255 Ridge Avenue Philadelphia, PA 19128', 40.0202, -75.21),
(135, 'Green Farm Fresh', '842 Red Lion Rd Philadelphia, PA 19115', 40.103, -75.0306),
(136, 'Joa Mart', '361 W. Hortter Street Philadelphia, PA 19119', 40.0444, -75.1911),
(137, 'Palm Tree Gourmet', '901 S 2nd St Philadelphia, PA 19147', 39.9361, -75.1467),
(138, 'Crystal Lake Thriftway', '650 West Cuthbert Blvd Collingswood NJ 08108', 39.9015, -75.0531),
(139, 'Incollingo''s Smithville', '45 South New York Rd Galloway NJ 08205', 39.5271, -74.6449),
(140, 'Incollingo''s EHC', '810 White Horse Pike Egg Harbor City NJ 08215', 39.5271, -74.6449),
(141, 'Elmer IGA', '201 Front St Elmer NJ 08318', 39.5934, -75.1754),
(142, 'Eatmor', '856 Landis Ave Vineland NJ 08318', 39.485, -75.1234),
(143, 'Deterdings', '506 East Gibbsboro Rd Lindenwold NJ 08021', 39.8202, -74.9801),
(144, 'M & S Produce', '6020 Black Horse Pike Egg Harbor Twp. NJ 08234', 39.4393, -74.615),
(145, 'Verchio''s Turnersville', '272 Hurfville Crosskeys Rd  Sewell NJ 08080', 39.7243, -75.0495),
(146, 'Verchio''s Brooklawn', '123 South New Broadway  Brooklawn NJ 08030', 39.8772, -75.1253),
(147, 'Meadowbrook Mkt.', '3012 Union Ave Pennsauken Twp. NJ 08109', 39.963, -75.0354),
(148, 'Duffields Farm Mkt.', '280 Chapel Heights Rd Sewell NJ 08080', 39.7362, -75.0921),
(149, 'Fresh Mart', '681 Crosskeys Rd Sicklerville NJ 08081', 39.7277, -75.0141),
(150, 'Yogi''s Quick Shop', '192 Fries Mill Rd Turnersville, NJ 08012', 39.7362, -75.0476),
(151, 'Country Farms', '2911 Rt. 73 South  Maple Shade, NJ 08052', 39.9496, -74.9866),
(152, 'Subzi Mandi', '1400 Berlin Rd Cherry Hill, NJ 08003', 39.88, -75.0048),
(153, 'La Villita Farm Mkt.', '3005 Atlantic Ave Atlantic City, NJ 08401', 39.3546, -74.4484),
(154, 'Ananda Bazar Grocery', '2929 Atlantic Ave Atlantic City, NJ 08401', 39.3546, -74.4473),
(155, 'Saibaba Food Mkt.', '2414 Atlantic Ave Atlantic City, NJ 08401', 39.357, -74.4411),
(156, 'Haars Health Food Center', '1437 South Delsea Dr Vineland, NJ 08360', 39.4664, -75.0447),
(157, 'Gulf Mini Mart', '1001 North Tuchahoe Rd Williamstown, NJ 08094', 39.6902, -75.0187),
(158, 'Avalon Supermarket', '2868 Dunne Dr Avalon, NJ 08202', 39.0972, -74.7224),
(159, 'Bud''s Market', '8302 Third Ave Stone Harbor, NJ 08247', 39.0629, -74.7537),
(160, 'Avalon Seafood & Produce', '29th & Ocean Dr Avalon, NJ 08202', 39.0976, -74.7245),
(161, 'A & F Market', '416 South West Vineland, NJ 08360', 39.4891, -75.0353),
(162, 'Incollingo''s EHC', '810 White Horse Pike Egg Harbor City, NJ 08215', 39.5271, -74.6449),
(163, '', '', 0, 0),
(164, '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
