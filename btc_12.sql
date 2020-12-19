-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2020 at 11:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btc_12`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(999) NOT NULL,
  `admin_password` varchar(999) NOT NULL,
  `admin_status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'asa@asa', '123', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `notification` varchar(999) NOT NULL,
  `total_deposit_manipulation` int(11) NOT NULL,
  `total_cashout_manipulation` int(11) NOT NULL,
  `last_deposit_manipulation` int(11) NOT NULL,
  `last_cashout_manipulation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `notification`, `total_deposit_manipulation`, `total_cashout_manipulation`, `last_deposit_manipulation`, `last_cashout_manipulation`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#ff0000\"><strong>â€¼ Welcome to SOLIDTREND â€¼</strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>A &nbsp;Registered Forex Investment Company Forex With CAC RC NO :3027032.â€¼â€¼&nbsp;</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>ðŸ’Ÿ &nbsp;GET 40% IN 20DAYS &nbsp;</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>ðŸ’Ÿ YOU CAN CASHOUT FROM 10DAYS&nbsp;</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>ðŸ›‘Also Earn On Our 3 levels Referral Bonuse System, &nbsp;3% 2% &amp; 1% RespectivelyðŸ›‘</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#ff0000\"><span style=\"font-size:28px\"><strong>ðŸ’ŸTOGETHER WE WILL ACHIEVE SUCCESSðŸ’Ÿ</strong></span></span></p>\r\n', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `test_id` int(11) NOT NULL,
  `test_user_name` varchar(999) NOT NULL,
  `test_user_id` int(11) NOT NULL,
  `test_user_email` varchar(999) NOT NULL,
  `testimony` varchar(999) NOT NULL,
  `test_status` varchar(999) NOT NULL,
  `test_date` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tran_id` int(11) NOT NULL,
  `tran_email` varchar(999) DEFAULT NULL,
  `tran_username` varchar(999) DEFAULT NULL,
  `tran_user_id` varchar(999) DEFAULT NULL,
  `tran_desc` varchar(999) DEFAULT NULL,
  `trant_amt` varchar(999) DEFAULT NULL,
  `tran_status` varchar(999) DEFAULT NULL,
  `tran_date` varchar(999) DEFAULT NULL,
  `tran_exp_date` varchar(999) DEFAULT NULL,
  `tran_roi` varchar(999) DEFAULT NULL,
  `tran_daily_growth` varchar(999) DEFAULT NULL,
  `tran_current_bal` varchar(999) DEFAULT NULL,
  `tran_invoice` varchar(999) DEFAULT NULL,
  `tran_dep_name` varchar(999) DEFAULT NULL,
  `start_tran_date` varchar(999) DEFAULT NULL,
  `tran_withdraw_amt` varchar(999) DEFAULT NULL,
  `coin` varchar(111) DEFAULT NULL,
  `trans_id` varchar(999) DEFAULT NULL,
  `coin_amt` varchar(999) DEFAULT NULL,
  `hash_id` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tran_id`, `tran_email`, `tran_username`, `tran_user_id`, `tran_desc`, `trant_amt`, `tran_status`, `tran_date`, `tran_exp_date`, `tran_roi`, `tran_daily_growth`, `tran_current_bal`, `tran_invoice`, `tran_dep_name`, `start_tran_date`, `tran_withdraw_amt`, `coin`, `trans_id`, `coin_amt`, `hash_id`) VALUES
(38, 'ajahogonnaya2012@gmail.com', 'Benjamin', '1', 'DEPOSIT', '1234', 'PENDING', '2020-11-21', '2020-11-28', NULL, NULL, NULL, 'INV-113457112020', NULL, '2020-11-21', NULL, 'BTC', 'TRA-1120113457', '0.0662', 'qwertyuop;l\''),
(39, 'imopolyahptn@gmail.com', 'obi', '2', 'DEPOSIT', '200', 'PENDING', '2020-11-22', '2020-11-29', NULL, NULL, NULL, 'INV-063911112020', NULL, '2020-11-22', NULL, 'BTC', 'TRA-0620113911', '0.0109', 'PLFDH5bKmoNqzEJGfWPUXg2xmPu7vsKJfV'),
(40, 'imopolyahptn@gmail.com', 'obi', '18', 'INVESTMENT', '200', 'ACTIVE', '2020-11-22', '2020-11-29', '268.6', '38.3714', NULL, 'INV-065041112020', 'SILVER', '2020-11-22', '0', NULL, NULL, NULL, NULL),
(41, 'ajahogonnaya2012@gmail.com', 'Benjamin', '3', 'DEPOSIT', '10000', 'PENDING', '2020-11-22', '2020-11-29', NULL, NULL, NULL, 'INV-065615112020', NULL, '2020-11-22', NULL, 'BTC', 'TRA-0620115615', '0.5424', 'PLFDH5bKmoNqzEJGfWPUXg2xmPu7vsKJfV'),
(42, 'ajahogonnaya2012@gmail.com', 'Benjamin', '15', 'INVESTMENT', '5500', 'ACTIVE', '2020-11-22', '2020-11-29', '7771.5', '1,110.2143', NULL, 'INV-065902112020', 'GOLD', '2020-11-22', '0', NULL, NULL, NULL, NULL),
(43, 'liamalfredhawkinson13@gmail.com', 'Liam125', '1', 'DEPOSIT', '200', 'CONFIRMED', '2020-11-22', '2020-11-29', NULL, NULL, NULL, 'INV-075151112020', NULL, '2020-11-22', NULL, 'BTC', 'TRA-0720115151', '0.0109', '12215214992237c27f8852e8e8f154543a5545bea141b9c713369cea942b5a96'),
(44, 'liamalfredhawkinson13@gmail.com', 'Liam125', '19', 'INVESTMENT', '200', 'ACTIVE', '2020-11-22', '2020-11-29', '268.6', '38.3714', NULL, 'INV-075516112020', 'SILVER', '2020-11-22', '38.3714', NULL, NULL, NULL, NULL),
(45, 'Jerryarmstrong09@gmail.com', 'Armstrong ', '1', 'DEPOSIT', '201', 'PENDING', '2020-11-22', '2020-11-29', NULL, NULL, NULL, 'INV-082005112020', NULL, '2020-11-22', NULL, 'BTC', 'TRA-0820112005', '0.0109', '3de8bc920dc4f13a51524d3b1544c18aba332f00ef5042409f57f1bdb6ce13c8'),
(46, 'Jerryarmstrong09@gmail.com', 'Armstrong ', '32', 'INVESTMENT', '201', 'ACTIVE', '2020-11-22', '2020-11-29', '269.943', '38.5633', NULL, 'INV-083332112020', 'SILVER', '2020-11-22', '0', NULL, NULL, NULL, NULL),
(47, 'liamalfredhawkinson13@gmail.com', 'Liam125', '2', 'CASH_OUT', '38.3714', 'PENDING', '2020-11-23', '2020-11-25 09:52:23', NULL, NULL, NULL, 'WIT-52202023110923', NULL, '2020-11-23 09:52:23', NULL, 'BTC', NULL, NULL, NULL),
(48, 'kayode.wtb@gmail.com', 'Kayoro', '2', 'DEPOSIT', '269', 'CONFIRMED', '2020-11-23', '2020-11-30', NULL, NULL, NULL, 'INV-021424112020', NULL, '2020-11-23', NULL, 'BTC', 'TRA-0220111424', '0.0144', '822b93101e73242477aa64519282c4ab5e7a44516f6c4d46544aac3157fa6097'),
(49, 'kayode.wtb@gmail.com', 'Kayoro', '61', 'INVESTMENT', '200', 'ACTIVE', '2020-11-23', '2020-11-30', '263', '37.5714', NULL, 'INV-024001112020', 'SILVER', '2020-11-23', '37.5714', '4.5%', NULL, NULL, NULL),
(50, 'tencotboy@gmail.com', 'cele', '3', 'DEPOSIT', '200', 'CONFIRMED', '2020-11-21', '2020-11-30', NULL, NULL, NULL, 'INV-033720112020', NULL, '2020-11-23', NULL, 'BTC', 'TRA-0320113720', '0.0109', 'PLFDH5bKmoNqzEJGfWPUXg2xmPu7vsKJfV'),
(51, 'tencotboy@gmail.com', 'cele', '2', 'INVESTMENT', '200', 'ACTIVE', '2020-11-20', '2020-11-27', '263', '37.5714', NULL, 'INV-035408112020', 'SILVER', '2020-11-20', '0', '4.5%', NULL, NULL, NULL),
(52, 'kayode.wtb@gmail.com', 'Kayoro', '1', 'CASH_OUT', '37.5714', 'PENDING', '2020-11-24', '2020-11-26 07:50:22', NULL, NULL, NULL, 'WIT-50202024110722', NULL, '2020-11-24 07:50:22', NULL, 'BTC', NULL, NULL, NULL),
(53, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '210', 'CONFIRMED', '2020-12-18', '2021-01-01', NULL, NULL, NULL, 'INV-094558122020', NULL, '2020-12-18', NULL, 'ETH', 'TRA-0920124558', '0.3259', 'qwertyuiop['),
(54, 'asa@asa.com', 'Asa', '79', 'INVESTMENT', '500', 'ACTIVE_C', '2020-12-18', '2021-01-01', '1000', '142.8571', NULL, 'INV-101919122020', 'STARTER', '2020-12-18', '285.7142', '7.1%', NULL, NULL, NULL),
(55, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '60', 'PENDING', '2020-12-20', NULL, NULL, NULL, NULL, 'INV-103140122020', NULL, NULL, NULL, 'BTC', 'TRA-1020123140', '0.0025', '23ertyuioiuyt3456789pkjhgfgh'),
(56, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '60', 'PENDING', '2020-12-20', NULL, NULL, NULL, NULL, 'BROKEER-FEE103607122020', NULL, NULL, NULL, 'ETH', 'TRA-1020123607', '0.0895', 'weertyuiopoiuytwertyuiopdfghjkljjhhuukiiijjkuujjyyygg'),
(57, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '60', 'PENDING', '2020-12-20', '2021-01-03', NULL, NULL, NULL, 'BROKEER-FEE', NULL, '2020-12-20', NULL, 'ETH', 'TRA-1020123701', '0.0895', 'weertyuiopoiuytwertyuiopdfghjkljjhhuukiiijjkuujjyyygg'),
(58, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '60', 'PENDING', '2020-12-20', '2021-01-03', NULL, NULL, NULL, 'BROKEER-FEE', NULL, '2020-12-20', NULL, 'BTC', 'TRA-1020125621', '0.0025', 'efr6m87,'),
(59, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '60', 'PENDING', '2020-12-20', '2021-01-03', NULL, NULL, NULL, 'BROKEER-FEE', NULL, '2020-12-20', NULL, 'ETH', 'TRA-1020125739', '0.0901', 'qwsdfghjk'),
(60, 'asa@asa.com', 'Asa', '79', 'CASH_OUT', '280.7142', 'PENDING', '2020-12-20', '2020-12-22 23:01:57', NULL, NULL, NULL, 'WIT-01202020121157', NULL, '2020-12-20 23:01:57', NULL, 'BTC', NULL, NULL, NULL),
(61, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '4563', 'CONFIRMED', '2020-12-20', '2021-01-03', NULL, NULL, NULL, 'INV-110309122020', NULL, '2020-12-20', NULL, 'ETH', 'TRA-1120120309', '6.8470', 'wertyuiol'),
(62, 'asa@asa.com', 'Asa', '79', 'INVESTMENT', '509', 'ACTIVE_R', '2020-12-20', '2021-01-03', '1018', '145.4286', NULL, 'INV-110429122020', 'STARTER', '2020-12-20', '0', '7.1%', NULL, NULL, NULL),
(63, 'asa@asa.com', 'Asa', '79', 'DEPOSIT', '61.08', 'PENDING', '2020-12-22', NULL, NULL, NULL, NULL, 'BROKEER-FEE', NULL, NULL, NULL, 'ETH', 'TRA-1120120616', '0.0916', 'weertyuiopoiuytwertyuiopdfghjkljjhhuukiiijjkuujjyyygg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(999) DEFAULT NULL,
  `fullname` varchar(777) DEFAULT NULL,
  `user_password` varchar(999) DEFAULT NULL,
  `user_email` varchar(999) DEFAULT NULL,
  `user_phone` varchar(111) DEFAULT NULL,
  `reg_date` varchar(111) DEFAULT NULL,
  `user_referrer` varchar(999) DEFAULT NULL,
  `user_status` varchar(999) DEFAULT NULL,
  `user_ref_bonus` varchar(999) DEFAULT NULL,
  `testimony` varchar(999) DEFAULT NULL,
  `user_notification` varchar(999) DEFAULT NULL,
  `btc_address` varchar(999) DEFAULT NULL,
  `eth_address` varchar(999) DEFAULT NULL,
  `bal` varchar(999) DEFAULT '0',
  `user_ref_bonus_btc` varchar(999) DEFAULT NULL,
  `address` varchar(999) DEFAULT NULL,
  `country` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `fullname`, `user_password`, `user_email`, `user_phone`, `reg_date`, `user_referrer`, `user_status`, `user_ref_bonus`, `testimony`, `user_notification`, `btc_address`, `eth_address`, `bal`, `user_ref_bonus_btc`, `address`, `country`) VALUES
(1, 'Eulogevdr', 'Ahouangonou', 'euloga67', 'ahouangonoueuloge@gmail.com', NULL, '2020-11-21', '', 'Active', '0', NULL, NULL, '', '', '0', NULL, 'Cotonou', 'B&eacute;nin'),
(2, 'cele', 'ugo', '12345', 'tencotboy@gmail.com', NULL, '2020-11-22', 'Benjamin', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(3, 'obi', 'obi', '2324', 'imopolyahptn@gmail.com', NULL, '2020-11-22', 'Benjamin', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(4, 'Liam125', 'Liam Alfred ', 'Bitcoin125', 'liamalfredhawkinson13@gmail.com', NULL, '2020-11-22', '', 'Active', '0', 'new', NULL, 'Bshshshshsjdkdidjdnfjidofofkf', 'asa@asa', '0', NULL, '', ''),
(5, 'KOUADIO12', 'KOUADIO KOUASSI DENIS ERNEST', 'diderot11', 'deniskouadioerneste@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(6, 'AXL456', '007766', 'Stanley2020', 'alexanderjh09@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(22, 'David', 'David Front ', '09039675259', 'Davidfront25@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(23, 'frank', 'frank', '12345', 'ndbamimopoly@gmail.com', NULL, '2020-11-22', 'Benjamin', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(24, 'Assanbban87', 'Mohammed ASSABBAN', 'As$123med', '20assabbab@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(25, 'john', 'john', '12345', 'tboy.gunner@yahoo.com', NULL, '2020-11-22', 'Benjamin', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(26, 'DavidF', 'David Front ', '09039675259', 'Davidfront2510@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(27, 'Alfred', 'Davereginald', 'abuchisunday9781', 'Davereginaldalfred@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '20.1', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(28, 'David02', 'David Front ', '09039675259', 'kenclement700@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(29, 'Lopez', 'L&oacute;pez', 'franklinzy', 'ericthom066@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, '38TKQZGsdAiMPAPWs6KZfRE7ZJzkM1V1J5', '0xB94a99DAC6007cEd986B7Ae3061EDE46727B8d8d', '0', NULL, '', ''),
(30, 'Liam\'s ', 'Hill', 'stan2020', 'alexandergabriel369@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(31, 'Brown ', 'Scott ', 'oluwabina01', 'Brownscot58@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(32, 'Armstrong ', 'Jerry Armstrong ', '8411', 'Jerryarmstrong09@gmail.com', NULL, '2020-11-22', 'Alfred', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(33, '13445', '35565', 'prosper123', 'rloandprospper@gim.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(34, 'David25', 'David Front ', '09039675259', 'Davidfront1025@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(35, 'Charles', 'Bitcoin', 'Bitcoin125', 'lucas1gbb@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(36, 'arnouxattolou@1', 'ATTOLOU Arnoux', 'arnouxdavy', 'sekpehouarnoux504@gmail.com', NULL, '2020-11-22', 'Lopez', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(37, 'Bertrand', 'Mandeng', 'mandengue123', 'beertrandmandeng@gmail.com', NULL, '2020-11-22', 'Alfred', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(38, 'AXL456', 'Hill', 'stan22', 'alexandergabriel369@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(39, 'FofBusiness', 'business Fof', '660179307GWFofficiel', 'gwfofficiel@gmail.com', NULL, '2020-11-22', 'David25', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(40, 'Dallas', 'Dallas371', '07066994465', 'akgdallas@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(41, 'TJR567', 'Kent', '56671019', 'wards4682@gmail.com', NULL, '2020-11-22', 'Liam125', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(42, 'yanmarcos', 'Flores Rosario Montoya', 'floresgtmo123@*', 'floresrosariomontoya@gmail.com', NULL, '2020-11-22', 'Armstrong', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(43, 'Phillip Simengwa', 'Phillip Simengwa', 'Kufwa@22#', 'bangubosa2914@gmail.com', NULL, '2020-11-22', '', 'Active', '0', NULL, NULL, '1EWKjA1JG1ytBNhWxbzgoYGyRtKaZXsiPa', '', '0', NULL, 'Off kamloops rd ', 'Zambia'),
(44, 'Gladiafof', 'Gladia', '660179307GLADIAwanA', 'mamankadiaden@gmail.com', NULL, '2020-11-22', 'David25', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(45, 'Dovi', 'Nayo', 'colette1986', 'obdovi@gmail.com', NULL, '2020-11-22', 'Lopez', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(46, 'Ayamdoo', 'Moses', 'MoKreto@4R', 'moyamdoo@gmail.com', NULL, '2020-11-22', 'Brown', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(47, 'Joueder', 'OUEDRAOGO Joseph', 'Fabiola2016', 'josephouedraogo6@gmail.com', NULL, '2020-11-22', 'David25', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(48, 'Manuelljhay ', 'Manuel Jay', 'WhaT?kre1?', 'realdsparkles@gmail.com', NULL, '2020-11-22', 'Lopez', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(49, 'Akoskoss1', 'MIGUEMBRE', '28@ct@bre1998akossi', 'akossikatatchi@gmail.com', NULL, '2020-11-22', '13445', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(50, 'Alby55', 'Alberto', 'Tecnico@68', 'palmialbe@gmail.com', NULL, '2020-11-22', 'Armstrong', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(51, 'winner8', 'AKAKPO yawo tegly winer', 'calebdaniel', 'akakpowinner8@gmail.com', NULL, '2020-11-22', 'Armstrong', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(52, 'ultimate112', 'Christopher Jasper ', 'celebobo2017', 'christopherjasper16@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(53, 'Changwu', 'Chang wu', 'love111', 'am3332899@gmail.com', NULL, '2020-11-23', 'AXL456', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(54, 'bradv', 'brad', 'pycsaw-qafgak-0Dytfy', 'brad.veel@gmail.com', NULL, '2020-11-23', 'TJR567', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(55, 'Ultimate619', 'Kelvin mike albert akova ', '08093907935$', 'kelvinmike112233@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, '', '', '0', NULL, 'Omaha nebraska ', 'USA'),
(56, 'SamuelEric ', 'HOULO SAMUEL', 'Nojesusnolife2*', 'samuelhoulo@gmail.com', NULL, '2020-11-23', 'Armstrong', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(57, 'Akwa Queen', 'Akwa Queeniva ', 'Loveall27', 'akwaqueeniva@gmail.com', NULL, '2020-11-23', 'Dallas', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(58, 'Ibrahima10', 'Ibrahima Sory Camara', '64941943', 'mamatacama10@gmail.com', NULL, '2020-11-23', 'Armstrong', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(59, 'Sekou', 'Alseny sylla', '62928665', 'yamoussacam55@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(60, 'Sylla224', 'Kerfala sylla', '624705468', 'tourealmamy173@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(61, 'Kayoro', 'Kayoro 4767', 'wilfrida#4767', 'kayode.wtb@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, '3FXFQH7ecGNQKcm4W47Vm4Xv4zcgyztx1X', '', '69', NULL, 'Ab tchin', 'BENIN'),
(62, 'Mandjouck nkoumou jean Fabrice', 'Fabrice', 'mamo', 'jnkoumou302@gmail.com', NULL, '2020-11-23', 'ultimate112', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(63, 'Birba76', 'Birba Rasmane', 'Djamilatou20', 'birbarsmane76@gmail.com', NULL, '2020-11-23', 'Lopez', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(64, 'Cryjonas', 'Obine jonas', 'kossif93', 'obinejonas@gmail.com', NULL, '2020-11-23', 'Brown', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(65, 'Hamza Khabouzi', 'Hamza Khabouzi ', 'hamham@22', 'hamzakhabouzi@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(66, 'Mark Bom', 'Foxes8888 ', 'Foxes888', 'igrinik76@gmail.com', NULL, '2020-11-23', 'Armstrong', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(67, 'Tramontane', 'Bruno Kluj', 'Intertradex66', 'privekb@gmail.com', NULL, '2020-11-23', 'Lopez', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(68, 'Abdullah', 'Haruna', '08173381296', 'abdullahharuna1211@gmail.com', NULL, '2020-11-23', 'Dallas', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(69, 'Ike', 'Isaac Abbey-Quaye ', 'toosweetike19', 'Isaaky92dot1@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(70, 'Chahid atmani', 'Chahid', 'Klein12.', 'chahid.atmani42@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, '', '', '0', NULL, '', 'Belgium'),
(71, 'DukeOfGold', 'Dawson Bullard', 'Welcome123', 'bullard_dawson@yahoo.com', NULL, '2020-11-23', 'Armstrong', 'Active', '0', NULL, NULL, '1BCCrrhrHXgYU766F6ePzUcW5cmh2nuL61', '0x98e0052CE759B431870c4F90830a6F5731bf40cf', '0', NULL, 'Garden hills #2', 'Bahamas'),
(72, 'Santana', 'Raymond santana', 'Klein12.', 'deriddersven88@gmail.com', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(73, 'Brutyan', 'Aram', 'trubadelo22', 'paradise9974@gmail.com', NULL, '2020-11-23', 'Brown', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(74, 'paradise9974', 'Aram', 'trubadelo22A', 'paradise9974@yandex.ru', NULL, '2020-11-23', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(75, 'Joe28', 'Done Joe', 'AG3gn4Lz2wDm2PY', 'Donejoe93@gmail.com', NULL, '2020-11-24', 'AXL456', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(76, 'Zohaibqamar', 'Zohaib ', 'zohaib123', 'zohaibqamar2020@gmail.com', NULL, '2020-11-24', 'AXL456', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(77, 'Jawad2608', 'Jawad Ahmad', 'Salman67', 'jawad.ahmadtbm@gmail.com', NULL, '2020-11-24', 'TJR567', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(78, 'Major1296', 'Abdullahi Haruna', '08173381296', 'abdullahiharuna887@gmail.com', NULL, '2020-11-24', 'Dallas', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(79, 'Asa', 'Ajah Ogonnaya benjamin', '123', 'asa@asa.com', '067959589489484', '2020-12-14', '', 'Active', '0', NULL, NULL, 'asdfgyh', '', '5836', NULL, '', ''),
(80, 'asa1', 'Pakings Ike', '123', 'pak@gmail.com', '4656788787877', '2020-12-14', 'asa', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_ref`
--

CREATE TABLE `user_ref` (
  `ref_id` int(11) NOT NULL,
  `user_ref_email` varchar(999) DEFAULT NULL,
  `gen1_email` varchar(999) DEFAULT NULL,
  `gen2_email` varchar(999) DEFAULT NULL,
  `gen3_email` varchar(999) DEFAULT NULL,
  `gen4_email` varchar(999) DEFAULT NULL,
  `reg_date` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ref`
--

INSERT INTO `user_ref` (`ref_id`, `user_ref_email`, `gen1_email`, `gen2_email`, `gen3_email`, `gen4_email`, `reg_date`) VALUES
(20, 'Eulogevdr', NULL, NULL, NULL, NULL, NULL),
(21, 'cele', 'Benjamin', '', '', NULL, '2020-11-22'),
(22, 'obi', 'Benjamin', '', '', NULL, '2020-11-22'),
(23, 'Liam125', NULL, NULL, NULL, NULL, NULL),
(24, 'KOUADIO12', NULL, NULL, NULL, NULL, NULL),
(25, 'AXL456', 'Liam125', '', '', NULL, '2020-11-22'),
(26, 'David', 'Liam125', '', '', NULL, '2020-11-22'),
(27, 'frank', 'Benjamin', '', '', NULL, '2020-11-22'),
(28, 'Assanbban87', NULL, NULL, NULL, NULL, NULL),
(29, 'john', 'Benjamin', '', '', NULL, '2020-11-22'),
(30, 'DavidF', NULL, NULL, NULL, NULL, NULL),
(31, 'Alfred', 'Liam125', '', '', NULL, '2020-11-22'),
(32, 'David02', 'Liam125', '', '', NULL, '2020-11-22'),
(33, 'Lopez', 'Liam125', '', '', NULL, '2020-11-22'),
(34, 'Liam\'s ', NULL, NULL, NULL, NULL, NULL),
(35, 'Brown ', 'Liam125', '', '', NULL, '2020-11-22'),
(36, 'Armstrong ', 'Alfred', 'Liam125', '', NULL, '2020-11-22'),
(37, '13445', NULL, NULL, NULL, NULL, NULL),
(38, 'David25', NULL, NULL, NULL, NULL, NULL),
(39, 'Charles', NULL, NULL, NULL, NULL, NULL),
(40, 'arnouxattolou@1', 'Lopez', 'Liam125', '', NULL, '2020-11-22'),
(41, 'Bertrand', 'Alfred', 'Liam125', '', NULL, '2020-11-22'),
(42, 'AXL456', NULL, NULL, NULL, NULL, NULL),
(43, 'FofBusiness', 'David25', '', '', NULL, '2020-11-22'),
(44, 'Dallas', 'Liam125', '', '', NULL, '2020-11-22'),
(45, 'TJR567', 'Liam125', '', '', NULL, '2020-11-22'),
(46, 'yanmarcos', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-22'),
(47, 'Phillip Simengwa', NULL, NULL, NULL, NULL, NULL),
(48, 'Gladiafof', 'David25', '', '', NULL, '2020-11-22'),
(49, 'Dovi', 'Lopez', 'Liam125', '', NULL, '2020-11-22'),
(50, 'Ayamdoo', 'Brown', 'Liam125', '', NULL, '2020-11-22'),
(51, 'Joueder', 'David25', '', '', NULL, '2020-11-22'),
(52, 'Manuelljhay ', 'Lopez', 'Liam125', '', NULL, '2020-11-22'),
(53, 'Akoskoss1', '13445', '', '', NULL, '2020-11-22'),
(54, 'Alby55', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-22'),
(55, 'winner8', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-22'),
(56, 'ultimate112', NULL, NULL, NULL, NULL, NULL),
(57, 'Changwu', 'AXL456', 'Liam125', '', NULL, '2020-11-23'),
(58, 'bradv', 'TJR567', 'Liam125', '', NULL, '2020-11-23'),
(59, 'Ultimate619', NULL, NULL, NULL, NULL, NULL),
(60, 'SamuelEric ', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-23'),
(61, 'Akwa Queen', 'Dallas', 'Liam125', '', NULL, '2020-11-23'),
(62, 'Ibrahima10', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-23'),
(63, 'Sekou', NULL, NULL, NULL, NULL, NULL),
(64, 'Sylla224', NULL, NULL, NULL, NULL, NULL),
(65, 'Kayoro', NULL, NULL, NULL, NULL, NULL),
(66, 'Mandjouck nkoumou jean Fabrice', 'ultimate112', '', '', NULL, '2020-11-23'),
(67, 'Birba76', 'Lopez', 'Liam125', '', NULL, '2020-11-23'),
(68, 'Cryjonas', 'Brown', 'Liam125', '', NULL, '2020-11-23'),
(69, 'Hamza Khabouzi', NULL, NULL, NULL, NULL, NULL),
(70, 'Mark Bom', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-23'),
(71, 'Tramontane', 'Lopez', 'Liam125', '', NULL, '2020-11-23'),
(72, 'Abdullah', 'Dallas', 'Liam125', '', NULL, '2020-11-23'),
(73, 'Ike', NULL, NULL, NULL, NULL, NULL),
(74, 'Chahid atmani', NULL, NULL, NULL, NULL, NULL),
(75, 'DukeOfGold', 'Armstrong', 'Alfred', 'Liam125', NULL, '2020-11-23'),
(76, 'Santana', NULL, NULL, NULL, NULL, NULL),
(77, 'Brutyan', 'Brown', 'Liam125', '', NULL, '2020-11-23'),
(78, 'paradise9974', NULL, NULL, NULL, NULL, NULL),
(79, 'Joe28', 'AXL456', 'Liam125', '', NULL, '2020-11-24'),
(80, 'Zohaibqamar', 'AXL456', 'Liam125', '', NULL, '2020-11-24'),
(81, 'Jawad2608', 'TJR567', 'Liam125', '', NULL, '2020-11-24'),
(82, 'Major1296', 'Dallas', 'Liam125', '', NULL, '2020-11-24'),
(83, 'Asa', NULL, NULL, NULL, NULL, NULL),
(84, 'asa1', 'asa', '', '', NULL, '2020-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_ref`
--
ALTER TABLE `user_ref`
  ADD PRIMARY KEY (`ref_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user_ref`
--
ALTER TABLE `user_ref`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
