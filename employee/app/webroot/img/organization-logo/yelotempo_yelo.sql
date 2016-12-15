-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2015 at 06:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yelotempo_yelo`
--
CREATE DATABASE IF NOT EXISTS `yelotempo_yelo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yelotempo_yelo`;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `pic` varchar(255) NOT NULL,
  `licpic` varchar(255) NOT NULL,
  `rcpic` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longi` varchar(255) NOT NULL,
  `latlng` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `gcm_regid` varchar(255) NOT NULL,
  `status` enum('idle','verified') NOT NULL,
  `lic_exp_year` varchar(255) NOT NULL,
  `lic_exp_month` varchar(255) NOT NULL,
  `active_status` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `lic_no` varchar(255) NOT NULL,
  `agent` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL,
  `driverid` varchar(255) NOT NULL,
  `inspic` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `wallet_status` varchar(255) DEFAULT '80%',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bank_name` varchar(765) NOT NULL,
  `branch_name` varchar(765) NOT NULL,
  `ifsc_code` varchar(765) NOT NULL,
  `account_no` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `email`, `pass`, `dob`, `mobile`, `category`, `pic`, `licpic`, `rcpic`, `lat`, `longi`, `latlng`, `rating`, `gcm_regid`, `status`, `lic_exp_year`, `lic_exp_month`, `active_status`, `device`, `active`, `lic_no`, `agent`, `category_type`, `driverid`, `inspic`, `vehicle`, `wallet_status`, `created`, `bank_name`, `branch_name`, `ifsc_code`, `account_no`) VALUES
(20, 'Rohit Saini ', 'rohitsaini517@gmail.com', '45e5752988c6606fee70ac3701227a0b00fcb1a1', '1991-07-13', '7737837116', 'mini', 'driver/images/facebook-icon.png', 'driver/images/213768Capture.PNG', '', '27.216981', '77.489515', 'lat/lng: (26.8693563,75.7843678)', '0.0', '', 'verified', '', '', '1', '', '8340', '', '1', '', '', '', 'HR4565', '80%', '2015-10-03 18:58:56', 'State Bank Of India', 'malviy naagar, delhi', '256354', 2147483647),
(24, 'Manish Prajapati', 'manish@manishprajapati.in', 'a39fa445abe0c23e0296af4face4d6c829a15563', '1996-05-20', '+917597561368', 'mini', 'driver/images/17225408321428654722879.jpg', 'driver/images/professional-photographer.jpg', 'driver/images/1353213138jkfdskjdsjkd.jpg', '26.8455793', '75.7914804', 'lat/lng: (26.8455793,75.7914804)', '4.8', 'APA91bEpO-VnNFzOTN7Rzq10vUrxAZo6k3-WjnZDEWiBhx8vJ8NAfjVI6UPPWAPKE57KXRHDVG22j_sPRRHF5GalgOSnAd5m9u_EaaAGrVfmr1A-k1euV5Aa7jU3TUQwEo5LLyqTdZ45HVw6AFAfyApPl77Ev_9Tw8ijJLTWSUbfOTqt-AdwqSA', 'verified', '', '', '0', 'android', '807694482', '', '1', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(26, 'Mukesh Choudhady', 'mukesh.rietjp@gmail.com', '9e3a86938bb0c4d67bf41643fe853037ba73f020', '04/2/1992', '+919887734135', 'mini', 'driver/images/21018421451428556186728.jpg', 'driver/images/3000807271427957374311.jpg', '', '26.8693961', '75.7845751', 'lat/lng: (26.8693961,75.7845751)', '4.96527777778', 'APA91bEDw3d3XqxhmNPM2i-yQimD-OU-fNeTA7O94YMgenJDCUVddqCmYivpryye8V31MTmE7gTUvVB4S93mBV-kCdX6SXGTzVCHRZIU671UyOSKYV38TFMUs6ZVL3S3L8agv8gyAu-Ah8RwPfCvdVZI6-clTvooUQ', 'verified', '2017', '08', '0', 'android', '609063889', '', '1', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(27, 'Arman Prajapati', 'admin@mpwebhost.in', 'a39fa445abe0c23e0296af4face4d6c829a15563', '', '7597561368', 'sumo', 'driver/images/mp.jpg', 'driver/images/942956kitten_cat_fluffy_hd-wallpaper-82906.jpg', '', '27.030594', '75.890027', 'lat/lng: (26.8692727,75.7845494)', '0.0', 'APA91bEpO-VnNFzOTN7Rzq10vUrxAZo6k3-WjnZDEWiBhx8vJ8NAfjVI6UPPWAPKE57KXRHDVG22j_sPRRHF5GalgOSnAd5m9u_EaaAGrVfmr1A-k1euV5Aa7jU3TUQwEo5LLyqTdZ45HVw6AFAfyApPl77Ev_9Tw8ijJLTWSUbfOTqt-AdwqSA', 'idle', '', '', '0', 'android', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(28, 'Ramesh Saini', 'rcssaini@gmail.com', 'a39fa445abe0c23e0296af4face4d6c829a15563', '02/20/1991', '+918946913871', 'sumo', 'driver/images/5525308301428357348113.jpg', '', '', '26.8692773', '75.7846003', 'lat/lng: (26.8692773,75.7846003)', '0.0', 'APA91bG1Fpjk2CclI3IY5TC6tOLPAETI1__Ls9eeriGB10yRDfSXEVzxT1qyFgLKB_JGU5V_vl4eCp_fdZUm6y1bfbUjQCFVduxU-zxz7rFMEL-OfE3MjbpNY5HRC8eW0FYPxyowesu9qasZ2ehfo6Acj5XlIcQptg', 'verified', '2018', '05', '0', 'android', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(30, 'Sonam', 'sonambansal033@gmail.com', '0f88c8d061546d376b90700a7a24a823935d2e52', '', '7597561368', 'mini', 'driver/images/124593349410991176_428304197329665_1919268702379731963_n.jpg', 'driver/images/195956logo.png', '', '', '', '', '0.0', '', 'verified', '', '', '0', '', '', '', '1', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(31, 'Fewrww', 'xyz@gmail.com', 'd6105b70091fc082a9ee46e628261faa46d01d72', '', '9829254490', 'sumo', 'driver/images/6623361781140_696839730358088_4897769465675189272_o.jpg', 'driver/images/4215891962637_683360758372652_4089007476306279943_n.png', '', '', '', '', '0.0', '', 'idle', '', '', '0', '', '', '', '1', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(32, 'Fewrww', 'carsseliftlelo@gmail.com', 'd6105b70091fc082a9ee46e628261faa46d01d72', '', '9829254490', 'mini', 'driver/images/6623361781140_696839730358088_4897769465675189272_o.jpg', 'driver/images/4215891962637_683360758372652_4089007476306279943_n.png', '', '', '', '', '0.0', '', 'verified', '', '', '0', '', '', '', '1', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(34, 'Rjiojio', 'rjoij@joij.com', 'a0fc3c0868325e384d30c4963bff8bd3393b7e3d', '', '+918888888888', 'mini', 'driver/images/837925c99.php', 'driver/images/451303c99.php', '', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(35, 'Prakash Bhadrecha', 'pra@gmail.com', '74b0cc1008639dee15eaee30ab8677cab914fe24', '11/13/1991', '+91(957)-126-1700', 'sumo', 'driver/images/5206490221429180718342.jpg', 'driver/images/15308897521429180768198.jpg', '', '26.8694456', '75.7847035', 'lat/lng: (26.8694456,75.7847035)', '0.0', 'APA91bFBaxIm_qZZRGFTcqY_DbEuQMzxbl_lqj3tdRIaNibCth1xeJJ_MBIA-a7zu4YfVuFQQULRAvJWfzxxQJG27tDBucDmZDCXNNC24oNr2EWlDRYsmkuGYczi18sw-zUT7vWeOL7zNnGPFAHHh4Wn_pzOrJSAXw', 'verified', '2018', '5', '0', 'android', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(36, 'Rak Ram', 'ram@gmail.com', 'b6c2948be4a478ed7a8c3879207ba3c50b7fed64', '08/29/1990', '+91(810)-705-8599', 'sumo', 'driver/images/3711330051430290674710.jpg', 'driver/images/15212061551430290702485.jpg', '', '', '', '', '', '', 'idle', '12', '2', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(37, 'Raj Ram', 'ram123@gmail.com', 'b6c2948be4a478ed7a8c3879207ba3c50b7fed64', '08/29/1990', '+91(810)-705-8599', 'mini', 'driver/images/3711330051430290674710.jpg', 'driver/images/15212061551430290702485.jpg', '', '', '', '', '', '', 'idle', '12', '2', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(38, 'Anu Podar', 'anupodar1465@gmail.com', '66a917f2b9e01215cf1995521aa7e681346e32a6', '04/30/1981', '+91(838)-780-1734', 'sumo', 'driver/images/14985661931430390025176.jpg', 'driver/images/15734862541430390037854.jpg', '', '', '', '', '', '', 'idle', '2020', '12', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(39, 'Anu Podar', 'anujraj1465@gmail.com', '9442aaab5b7b8ae57349cd1c3fbe129e5eb42b24', '04/30/1993', '+91(838)-780-1734', 'mini', 'driver/images/14539294391430404988770.jpg', 'driver/images/9164243781430405001003.jpg', '', '', '', '', '', '', 'idle', '2020', '11', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(40, 'Rohit', 'rohit@yahoo.in', '45e5752988c6606fee70ac3701227a0b00fcb1a1', '', '+917894561230', 'mini', 'driver/images/916503banner-1-380x154.jpg', 'driver/images/973389', '', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(42, 'Nitesh  Sharma', 'rohitnitesh95@Gmail.com', '94a75c6990d36c87c0c83c3a3ba992aa358e3768', '05/9/1990', '+91(810)-730-7199', 'sumo', 'driver/images/11073875881430891731673.jpg', 'driver/images/20965292301430891745326.jpg', '', '', '', '', '', '', 'idle', '2017', '03', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(43, 'Rahul', 'xyz@yahoo.in', 'a4202d5a4f4a03cf3800e467c41a8b0eb6b6bf9e', '', '+911234567890', 'mini', 'driver/images/1775696927noprofile.jpg', 'driver/images/slide-1-763x397.jpg', 'driver/images/548611417Anu Podar_lic.jpg', '26.8694615', '75.7846578', 'lat/lng: (26.8694615,75.7846578)', '', 'a410a21a1a', 'verified', '', '', '0', 'android', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(46, 'rahul kumar', 'abxc@gmail.com', 'Rsahul123', '', '1234567890', 'mini', '', '', '', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(47, 'rahul kumar', 'abc@gmail.com', 'Rsahul123', '', '1234567890', 'mini', '', '', '', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(48, 'rahul kumar', 'abcd@gmail.com', 'Rsahul123', '', '1234567890', 'mini', '', '', '', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(54, 'Rish Dak', 'def@abc.in', 'f72f54353a349e26bbff1d77eb3f88e1e6506e8b', '05/8/1987', '+91(123)-456-7890', ' mini', 'driver/images/5794327331431061360436.jpg', 'driver/images/Anu Podar_lic.jpg', 'driver/images/8013805111431061341062.jpg', '26.8690565', '75.7844494', 'lat/lng: (26.8690565,75.7844494)', '4.60029069767', 'APA91bFND4XV4wztDUmsPC7Su9qvW7zKVJWGAbRUkTMgvLof1AjfYVzNhMNnEybkYWvNMkER2hJ92i3D9XkPysFfX-0_3j_2PODP14LxiBkm5FcBgPgGhKxSaOQFPoT3-K3IWCMy3f1EpjyIzckhLjR-Nv0HplEu3A', 'verified', '2018', '12', '0', 'android', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(55, 'Rohit', 'yelotempo@gmail.com', '2d1ad4b21359c053d713a19e738a1ec5655de7bb', '', '+911234567890', 'mini', 'driver/images/199061banner-2-380x154.png', 'driver/images/218727banner-1-380x154.jpg', 'driver/images/199061file.jpg', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(57, 'Anu Podar', 'anup@gmail.com', '7c426f3a18426bd1093bc609fee5d6fd9559cb57', '05/11/1993', '+91(838)-780-1734', ' Mini', 'driver/images/8228531211431316979103.jpg', 'driver/images/8203112141431316992886.jpg', 'driver/images/18199614061431317016364.jpg', '', '', '', '', '', 'idle', '2020', '11', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(58, 'Pinku Banjara', 'pinkubanjara@gmail.com', 'acc962867c674d660530aa63512c281c68eb27dd', '08/10/1990', '+91(810)-705-8599', ' Sumo', 'driver/images/16054119521432796590255.jpg', 'driver/images/21350948371432796566004.jpg', 'driver/images/10087458721432796601625.jpg', '26.71242233', '75.70254261', 'lat/lng: (26.8691555,75.7844157)', '4.6875', 'APA91bFS0HCrjmi7t-KUH4LDLBxBXm-jWjZBe16_hwbc2DTh3gjlWwk5W7URtgug-JPrd8l5D3sGo5bhs4arcTBmHcFk3pNOVO1dV1gF8QNXqtKagOwlOYoBT7xeF9eRGqPUKyrJKRl-EQdepEkFGUrjZ6q1DmTRYg', 'verified', '2025', '4', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(60, 'Rohit Hitesh', 'hiteshsharma@gmail.com', '29ee31d68561157b03fcfbcf6e1957392f4ef8de', '06/1/1995', '+91(810)-730-7199', ' Mini', 'driver/images/14507295891433162875910.jpg', 'driver/images/11984280011433162884720.jpg', 'driver/images/20268064431433162900619.jpg', '26.869171', '75.7844643', 'null', '4.6875', 'APA91bH8JyKtoLpsrYH_iZQMB3o4gx-sd84GniocvWto69wt5jVysUMajxJxt10seEHi7NhVnOGRR6aXi3GG4yRvbRzrMPSMnjLSOkzHqOUjDNQRCSO0Nq3e9Arn6OyVaBycNp9OyPgZu0tehqu2v7M2wAUrtpxkew', 'verified', '2016', '3', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(61, 'Rohit saini', 'yelo@gmail.com', 'ec3f90321f08c6467aa78c1e302cc40d0e2f1146', '', '+911234567890', 'sumo', 'driver/images/4400291383025_390619511067919_753855947_n (1).jpg', 'driver/images/91495416943837351431002682826.jpg', 'driver/images/4400291895505591431003387376 (1).jpg', '', '', '', '0.0', '', 'verified', '', '', '0', '', '', 'RJ-14/630-pl/603316', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(65, 'Fds', 'Yelotempo@ra.com', '8308651804facb7b9af8ffc53a33a22d6a1c8ac2', '', '+917899456129', NULL, 'driver/images/610344', 'driver/images/128599', 'driver/images/610344', '', '', '', '', '', 'idle', '', '', '0', '', '', 'fdfs', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(66, 'Re', 're@rohit.com', '45e5752988c6606fee70ac3701227a0b00fcb1a1', '', '+917894561230', NULL, 'driver/images/189873', 'driver/images/706495', 'driver/images/189873', '', '', '', '', '', 'idle', '', '', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(67, 'raser', 'ar@gmail.com', 'e203d1d7999d1f56e2f6a639c159f7afdb537ee8', '', '+917894554542', NULL, 'driver/images/543737', 'driver/images/358225', 'driver/images/543737', '', '', '', '', '', 'idle', '', '', '0', '', '', 'Rsad', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(68, 'Ashish Jaiman', 'freelancing.a2z@gmail.com', 'd6105b70091fc082a9ee46e628261faa46d01d72', '06/19/1987', '+91(982)-925-4490', ' Sumo', 'driver/images/19472190081434694382556.jpg', 'driver/images/10333489821434694665351.jpg', 'driver/images/7287791291434694705945.jpg', '26.8694765', '75.7845824', 'lat/lng: (26.8694765,75.7845824)', '4.30803571429', 'APA91bHFsX0XjuUW_2EAmpLxU_x3n1Vqry4NbFjdCeCm0_H6IErORaDBUlZlHT9vY2K-q-UILJ9Hb9DjoX3LQTrMie7qVIL8ucSfD3kTYvDhuEn_x6YaSQkRhmEXC7IEGhMhXFKnPsYM', 'verified', '2018', '85', '0', '', '778378312', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(69, 'Test Test', 'keertikamalgupta@gmail.com', 'd6105b70091fc082a9ee46e628261faa46d01d72', '06/19/1989', '+91(982)-925-4490', ' Mini', 'driver/images/2596430181434695973348.jpg', 'driver/images/19809727011434695981651.jpg', 'driver/images/20051344301434695988594.jpg', '26.8696073', '75.7845658', 'lat/lng: (26.8696073,75.7845658)', '0.0', 'APA91bFuScX36AwOnDoG58-ym_ILjUTUaqY9QYdoR0gF1q4A_d-i5P7JCuKaOM-PMKDeJRnWjoUXiwTkqVeqXSBnMoGBFJIUeZ6OOtSCxDATaAGGd-6pMIeFPlkKFi7136juU6-6_5I6', 'verified', '2017', '12', '0', '', '', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(70, 'Ashish  Sharma', 'ashish171187@gmail.com', '4be69921a091c60afb4b6f652c6acda200453c11', '11/17/1987', '+91(963)-657-7666', ' Mini', 'driver/images/17530568791434728466270.jpg', 'driver/images/4027551151434728541626.jpg', 'driver/images/13592983481434728551575.jpg', '26.8988302', '75.8157609', 'lat/lng: (26.8988302,75.8157609)', '4.5625', 'APA91bEA23VuRCWU_2NxUvvLMkdK-2JBpBwyms2lH4RGwM2utl6_bsUqcbZXTYJ1nCJEA7TfDZrdQiiwo3vFQGpeDGcC0pnluI5zjgSpdd9g8C5Vpz75INs9CvWxCCUIi0eFo2gu8RtgvaEcoieRF49sPOXuGQ3apQ', 'verified', '2019', '11', '0', '', '1299631475', '', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(74, 'Vikram', 'vikramrunthla25@gmail.com', 'b27f6bfcc803a4b6ef21b1cf4046013513a3bf7a', '', '+919509622202', 'sumo', 'driver/images/9063141_red.png', 'driver/images/8300631_red.png', 'driver/images/9063141_red.png', '26.8947517', '75.8365799', 'lat/lng: (26.8947517,75.8365799)', '4.3125', 'APA91bEjrLlJ2oaME8HbxAH-y8gxoDWnW2-OaCUWiZ7Ji7jhxWhhIl43tdE53-rgqlhz4roQ9yTPYR6OEgku--24HPIFGmLlOtSkfCr0memoqRKdzwajm3jDQOwjflur7nxb4Zbbw8xc', 'verified', '', '', '0', '', '', '45454545454545454', '', '', '', '', '', '80%', '2015-10-03 18:58:56', '', '', '', NULL),
(75, 'GOPESH', 'gopesh.jangid@gmail.com', '3e27177a754c6b2e4aca85b1723185d91f62473a', '', '8802360392', 'ace', '1', 'driver/images/829190IMG-20151015-WA0008.jpg', '1', '', '', '', '0.0', '', 'verified', '', '', '', '', '', 'dsfdsf', 'YTA-3', 'industrial', '', '1', 'FDSFDS', '80%', '2015-10-19 15:34:46', '', '', '', NULL),
(76, 'Fsdfsfsdfs', 'fsdfdsfsdf@gmail.com', '3e27177a754c6b2e4aca85b1723185d91f62473a', '', '2323323232', 'sumo', '1', '1', '1', '', '', '', '', '', 'idle', '', '', '', '', '', 'fdsfsdf', 'YTA-4', 'domestic', '', '1', 'fdsfds', '80%', '2015-10-19 17:50:17', '', '', '', NULL),
(77, 'Dasdasd', 'gopesh@gail.com', '3e27177a754c6b2e4aca85b1723185d91f62473a', '', '8802360392', 'sumo', '1', '1', '1', '', '', '', '', '', 'idle', '', '', '', '', '', 'asdsad', 'dsadasd', 'industrial', '', '1', 'dsadasd', '80%', '2015-11-03 17:58:21', '', '', '', NULL),
(78, 'Gopesh', 'gggggg@gmail.com', '3e27177a754c6b2e4aca85b1723185d91f62473a', '', '8888888888', 'ace', '1', '1', '1', '', '', '', '', '', 'idle', '', '', '', '', '', '687687', 'YTA-1', 'industrial', '', '1', '78hj76', '80%', '2015-11-04 11:01:47', '', '', '', NULL),
(79, 'Gaurav', 'aaaaa@gmail.com', 'a2accc0ebebcb283cc823f621db728f3e4856bed', '', '2233665544', 'sumo', 'driver/images/13083FB_IMG_1434463312078.jpg', '1', '1', '', '', '', '0.0', '', 'verified', '', '', '', '', '', '1225556', '55', 'industrial', '', '1', '2566654', '80%', '2015-11-06 23:16:44', 'State Bank Of India', 'Saket, Delhi', '526988', 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
