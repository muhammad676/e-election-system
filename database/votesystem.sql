-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 11:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'e-election', '$2y$10$g4m/PfziRBxoM9fvwqiS9OgxAV29w0y8..XHruyEplYPxYnhZJ6bC', 'E-Election', 'System', 'favicon.png', '2021-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_list`
--

CREATE TABLE `candidate_list` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `nic_no` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `party_logo` longblob NOT NULL,
  `photo` longblob NOT NULL,
  `position_id` int(11) NOT NULL,
  `candidate_id` varchar(15) NOT NULL,
  `constitution_name` varchar(50) NOT NULL,
  `constituency_no` varchar(50) NOT NULL,
  `province` varchar(255) NOT NULL,
  `platform` text NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_list`
--

INSERT INTO `candidate_list` (`id`, `name`, `email`, `mobile_no`, `nic_no`, `party_name`, `party_logo`, `photo`, `position_id`, `candidate_id`, `constitution_name`, `constituency_no`, `province`, `platform`, `password`) VALUES
(1, 'Syed Mustafa Kamal', 'info@psp.org.pk', '+92-21-35351200', '4310767878967', 'Pak Sarzameen Party (PSP)', 0x5053502850616b205361727a616d65656e205061727479294c6f676f2e62696e, 0x4d757374616661204b616d616c2e62696e, 2, 'qsJCp2MPVgw1rUW', 'Jacobabad', 'NA-196', 'Sindh', 'Jacobabad,NA-196', '$2y$10$7CR22vyklCsL7p0yC3tS9OTKItX86NHAeDb1eQU0lvhcbx4ckHwt.'),
(2, 'Muhammad Mian Somoro', 'Muhammadmiansoomro@gmail.com', '0300-4016483', '4220125420639', 'Pakistan Tehreek-e-Insaf', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x6d7568616d6d6164206d69616e20736f6f6d726f2e62696e, 4, 'LhWKnqgrPR5sG1c', 'Jacobabad', 'NA-196', 'Sindh', 'Jacobabad,NA-196', '$2y$10$6Bl9oz7RdiBxWed3EU6iheMv4Kc1PkaHCoIIv5UdGO3Bg8iVb2/WW'),
(3, 'Mir Ijaz Hussain Jakhrani ', 'aijaz.na208@na.gov.pk ', '0331-6000333', '4310767867967', 'Pakistan Peoples Party (PPP)', 0x50616b697374616e2050656f706c6573205061727479206c6f676f2e62696e, 0x4d697220496a617a204875737361696e204a616b6872616e692e62696e, 5, 'I42AmBaMSOPz1UK', 'Jacodabad', 'NA-196', 'Sindh', 'Jacodabad,NA-196', '$2y$10$9CqBxjJLLB6Pfaf2P8fW7.tTHAo37VZBXQkoF0e6Cp6wNYHSvQP9K'),
(4, 'Abdul Ghani Bajrani', 'ghanibagh@gmail.com', '0338-2484833', '4310767856967', 'Grand Democratic Alliance (GDA)', 0x4772616e642044656d6f63726174696320416c6c69616e6365204c6f676f2e62696e, 0x416264756c204768616e692042616a72616e692e62696e, 6, 'tQSiaKDd6gxNwBV', 'Kashmore', 'NA-197', 'Sindh', 'Kashmore,NA-197', '$2y$10$OpwFU7yrUF9mbjUB1dBsKed6tzps.c8UTXTNcmHZnxxwqo7rGAO0u'),
(5, 'Ehsan Ur Rahman Mazari', 'ehsan.na210@na.gov.pk', '0333-4999619', '35200072568835', 'Pakistan Peoples Party (PPP)', 0x50616b697374616e2050656f706c6573205061727479206c6f676f2e62696e, 0x456873616e205572205261686d616e204d617a6172692e62696e, 7, 'naO5ljBS42YxrhA', 'Kashmore', 'NA-197', 'Sindh', 'Kashmore,NA-197', '$2y$10$Fg/I9Y12bsfhavWAvbhs.eRaenCoVC4JT3EAxK.iCZiVmGqlvT/RG'),
(6, 'Halima Bhutto', 'halima@gmail.com', '0331-6001333', '4310767467967', 'Pakistan Tehreek e Insaf', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x48616c65656d612042687574746f2e6a7067, 7, 'DNzjGrvJU6Zeqs9', 'Larkana-I', 'NA-200', 'Sindh', 'Larkana-I,NA-200', '$2y$10$mpBJStd.8iE0R7pVBHe5muMz934I.B.yYKk2C5HVBLJmWipO6N0zK'),
(7, 'Bilawal Bhutto Zardari', 'bilalwal@gmail.com', '0341-2282781', '4540298185405', 'Pakistan Peoples Party (PPP)', 0x50616b697374616e2050656f706c6573205061727479206c6f676f2e62696e, 0x42696c6177616c2042687574746f205a6172646172692e62696e, 2, 'fXiaclpHOPv2ydz', 'Larkana-I', 'NA-200', 'Sindh', 'Larkana-I,NA-200', '$2y$10$.4z/LUplkfoC8Wmb7NyHW.oXVTaJpL0Fb7dIuD27Y6zNKdPZFEIXe'),
(8, 'Allah Baksh Soomro', 'baksh.soomro@gmail.com', '0333-6169619', '4392967867967', 'Grand Democratic Alliance (GDA)', 0x4772616e642044656d6f63726174696320416c6c69616e6365204c6f676f2e62696e, 0x416c6c61682042616b736820536f6f6d726f2e62696e, 6, 'jGW5OVAiCHYrqa8', 'Larkana-I', 'NA-200', 'Sindh', 'Larkana-I,NA-200', '$2y$10$xQnwKDneT4KM8HxqGiUR2utxk21G4ZfmnZ7QCH4vGTsriBnCY9rAC'),
(9, 'Mehboob Ali Talpur', 'mehboob@gmail.com', '0300-2604523', '4310760167967', 'Pak Sar zameen Party (PSP)', 0x5053502850616b205361727a616d65656e205061727479294c6f676f2e62696e, 0x4d6568626f6f6220416c692054616c7075722e62696e, 6, 'u8pwrFM2JVSWDbv', 'Larkana-I', 'NA-200', 'Sindh', 'Larkana-I,NA-200', '$2y$10$sJA6YXTYSUJHlB78CCItKed.esIt1ei64wT5ZHKee.OKfa5MbiHem'),
(10, 'Syed Yawar Abbas Bukhari', 'SYABukhari@gmail.com', '0300-8503251', '4310768956967', 'Pakistan Tehreek e Insaf (PTI)', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x537965642059617761722041626261732042756b686172692e62696e, 6, 'IZgPwQbzoqMXxNc', 'Attock-I', 'NA-55', 'Punjab', 'Attock-I,NA-55', '$2y$10$dBrQjaUCNgqQQtvbOYvD9u.GGWjhZ9Tzu3I4zp1MAKWEyOD6b6F5.'),
(11, 'Shahid Khaqan Abbasi', 'shahid_abbasi@gmail.com', '0300-8282943', '6110180422527', 'Pakistan Muslim League- N (PMLN)', 0x50616b697374616e204d75736c696d204c65616775652d204e204c6f676f2e62696e, 0x536861686964204b686171616e204162626173692e62696e, 8, 'dYJAq9Xbm5xUwcI', 'Attock-I', 'NA-55', 'Punjab', 'Attock-I,NA-55', '$2y$10$/SwwHfEVmuYEjjx3UH3Wyu9nWNet759MNwHnVZy3uv/qmVkmDPUOi'),
(12, 'Raja Parvaiz Ashraf', 'parvaiz@gmail.com', '0316-5466312', '6110121106439', 'Pakistan Peoples Party (PPP)', 0x50616b697374616e2050656f706c6573205061727479206c6f676f2e62696e, 0x52616a61205061727661697a204173687261662e62696e, 9, 'v3xzGDXlRsV1cPT', 'Rawalpindi-I', 'NA-57', 'Punjab', 'Rawalpindi-I,NA-57', '$2y$10$W1THU7iC13ADLeASrZfUBOosR80u9JSmgNk9JB61iGDIbx3a7ZHM6'),
(13, 'Mian Muhammad Aslam Iqbal', 'aslam.iqbal@gmail.com', '0300-8686664', '3620186061797', 'Muttahida Majlis–e–Amal (MMA)', 0x4d7574746168696461204d616a6c6973e2809365e28093416d616c206c6f676f2e62696e, 0x4d7568616d6d616420497162616c2e62696e, 10, 'CDmsExaTGocL3R1', 'Attock-I', 'NA-55', 'Punjab', 'Attock-I,NA-55', '$2y$10$QD1EODTTpBcBhF3Sf5WvZ.B3XMc/8bl2GB0v9iA5LKRxjoTc7.gTO'),
(14, 'Sadaqat Ali Abbasi', 'sadaqat.abbasi@gmail.com', '0300-8686664', '3710395343941', 'Pakistan Tehreek e Insaf (PTI)', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x5361646171617420416c69204162626173692e62696e, 6, 'Mu5EmOP9xaD1icF', 'Rawalpindi-I', 'NA-57', 'Punjab', 'Rawalpindi-I,NA-57', '$2y$10$Zt/CAAINbLbo3l8kNEk1t.uSU9FQIqoH/TyCITnz/6btanxndYuVm'),
(15, 'Moulana Abdul Wasay', 'abdulwassay@gmail.com', '0301-8382111', '5140374417149', 'Muttahida Majlis–e–Amal (MMA)', 0x4d7574746168696461204d616a6c6973e2809365e28093416d616c206c6f676f2e62696e, 0x4d6f756c616e6120416264756c2057617361792e62696e, 9, 'VfzprwC3FtHDgkv', 'Killa Saifullah-cum-Zhob-cum-Sherani', 'NA-257', 'Balochistan', 'Killa Saifullah-cum-Zhob-cum-Sherani,NA-257', '$2y$10$yczgqPuQCQaf2c2wO2nmHuUaKh4dECGPeEr6Br7tfwyDVPJ9ima2.'),
(16, 'Muhammad Amin Khan Jogezai', 'Muhammadaminkhanjogezai@gmail.com', '021-38636012', '3460321386969', 'Pakistan Tehreek e Insaf (PTI)', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x4d7568616d6d616420416d696e204b68616e204a6f67657a61692e62696e, 6, '2rgyPG69QLwJCRK', 'Killa Saifullah-cum-Zhob-cum-Sherani', 'NA-257', 'Balochistan', 'Killa Saifullah-cum-Zhob-cum-Sherani,NA-257', '$2y$10$Ybk5mI2lTrDoFMZC58fgBON2kwMGgqDxR0CwQ3bH237MyxNyTIPtq'),
(17, 'Ehsan Ur Rahman', 'ehsan07@na.gov.pk', '0333-4999345', '4310767823967', 'Muttahida Majlis–e–Amal (MMA)', 0x4d7574746168696461204d616a6c6973e2809365e28093416d616c206c6f676f2e62696e, 0x456873616e205572205261686d616e2e6a7067, 6, 'QWgPJxrZ5c8Ii9Y', 'Killa Saifullah-cum-Zhob-cum-Sherani', 'NA-257', 'Balochistan', 'Killa Saifullah-cum-Zhob-cum-Sherani,NA-257', '$2y$10$afV2t6g3qiWmC6E3Ff6Q7.pQIjMGDvs0ttCjg.BV2gdrlpvjF7WYe'),
(18, 'Hussain Jakhrani', 'jakhrani8@na.gov.pk', '0331-60003543', '4310712867967', 'Pakistan Muslim League- N (PMLN)', 0x50616b697374616e204d75736c696d204c65616775652d204e204c6f676f2e62696e, 0x4875737361696e204a616b6872616e692e6a7067, 6, 'ik2JHeUdwXr7q6p', 'Loralai-cum-Musa Khail-cum-Ziarat-cum-Dukki-cum-Ha', 'NA-258', 'Balochistan', 'Loralai-cum-Musa Khail-cum-Ziarat-cum-Dukki-cum-Ha,NA-258', '$2y$10$.gSP9CNu8KS.aBmj0Li70OFpIrhi58knRScQuYHSd1mRNEaj4w4aO'),
(19, 'Syed Qurban Ali Ghorsheen', 'qurbanali87@hotmail.com', '0331-4243334', '4345767467967', 'Pakistan Tehreek e Insaf (PTI)', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x537965642051757262616e20416c692047686f72736865656e2e62696e, 5, 'fL8ewWxYVzEZIob', 'Loralai-cum-Musa Khail-cum-Ziarat-cum-Dukki-cum-Ha', 'NA-258', 'Balochistan', 'Loralai-cum-Musa Khail-cum-Ziarat-cum-Dukki-cum-Ha,NA-258', '$2y$10$WkrXl7Qg737wGVdiKTVC.e3P.fc5WjGac70VZFGY3noypgDwTTfHK'),
(20, 'Asrar ul din', 'asrar123@hotmail.com', '0311-6000331', '4310761267967', 'Pakistan Tehreek e Insaf (PTI)', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x417372617220756c2064696e2e62696e, 6, '8QftyEFXiR9dozY', 'Chitral-I', 'NA-1', 'kpk', 'Chitral,NA-1', '$2y$10$XwrEk2mrL9iOletYJIsAnu1G2vMdwRvFb6X8yXKkmNA.D41d0swoq'),
(21, 'Abdul Khan Abid', 'abidkhan@hotmail.com', '0333-4999616', '4220112420639', 'Pakistan Muslim League- N (PMLN)', 0x50616b697374616e204d75736c696d204c65616775652d204e204c6f676f2e62696e, 0x416264756c204b68616e20416269642e62696e, 6, 'kVBzEpPUMtsbmZ1', 'Chitral-I', 'NA-1', 'kpk', 'Chitral,NA-1', '$2y$10$Zos9aFYLNF7PhPzAL0aQZes9ybolCj.hliHzVo01L068lu6d7Pq7K'),
(22, 'Ghulam Mahmood', 'ghulam34@gmail.com', '0300-8110314', '4310761117967', 'Pakistan People Party (PPP)', 0x50616b697374616e2050656f706c6573205061727479206c6f676f2e62696e, 0x4768756c616d204d61686d6f6f642e62696e, 5, '7qTUJBvR8H5cwfL', 'Chitral-I', 'NA-1', 'kpk', 'Chitral,NA-1', '$2y$10$NNgec0aVZoeaqrxwJcSRgeEuJxMBHGycvazwiuDYOkIpH6E7KpUKG'),
(23, 'Haider Ali Khan', 'haiderali@psp.org.pk', '0300-8712488', '4310767412367', 'Pakistan Tehreek e Insaf (PTI)', 0x50616b697374616e205465687265656b2d652d496e736166206c6f676f2e62696e, 0x48616964657220416c69204b68616e2e62696e, 6, 'GbZAecvPBwx2fj4', 'Sawat-I', 'NA-2', 'kpk', 'Sawat-I,NA-2', '$2y$10$hktIeZLAqxS0lMPzh1G5HO1ki9OZwaDqH4UfjcIcGq0/CtbKFRxR.'),
(24, 'Amir Muqam', 'amir45@gmail.com', '0333-3211615', '3520072567638', 'Pakistan Muslim League-N (PMLN)', 0x50616b697374616e204d75736c696d204c65616775652d204e204c6f676f2e62696e, 0x416d6972204d7571616d2e62696e, 8, 'vpUVHw5SP3briJs', 'Sawat-I', 'NA-2', 'kpk', 'Sawat-I,NA-2', '$2y$10$HuF7mDowVirWmZl/xRAnVeEgOpIwVg8gxJskqSoUpxxEQWgAOEeoK');

-- --------------------------------------------------------

--
-- Table structure for table `list_votes`
--

CREATE TABLE `list_votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `constituency_no` varchar(15) NOT NULL,
  `party_name` varchar(30) NOT NULL,
  `platform` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_votes`
--

INSERT INTO `list_votes` (`id`, `voters_id`, `candidate_id`, `constituency_no`, `party_name`, `platform`, `province`) VALUES
(4, 2, 1, 'NA-196', 'Pak Sarzameen Party (PSP)', 'Jacobabad,NA-196', 'Sindh'),
(6, 3, 2, 'NA-196', 'Pakistan Tehreek-e-Insaf', 'Jacobabad,NA-196', 'Sindh'),
(7, 1, 1, 'NA-196', 'Pak Sarzameen Party (PSP)', 'Jacobabad,NA-196', 'Sindh');

-- --------------------------------------------------------

--
-- Table structure for table `poling_stations`
--

CREATE TABLE `poling_stations` (
  `id` int(50) NOT NULL,
  `constituency_no` varchar(50) NOT NULL,
  `constituency_name` varchar(50) NOT NULL,
  `max_vote` int(1) NOT NULL,
  `province_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poling_stations`
--

INSERT INTO `poling_stations` (`id`, `constituency_no`, `constituency_name`, `max_vote`, `province_name`) VALUES
(1, 'NA-196', 'Jacodabad', 1, 'Sindh'),
(2, 'NA-197', 'Kashmore', 1, 'Sindh'),
(3, 'NA-198', 'Shikarpur-I', 1, 'Sindh'),
(4, 'NA-199', 'Shikarpur-II', 1, 'Sindh'),
(5, 'NA-200', 'Larkana-I', 1, 'Sindh'),
(6, 'NA-201', 'Larkana-II', 1, 'Sindh'),
(7, 'NA-202', 'Kamber Shahdadkot-I', 1, 'Sindh'),
(8, 'NA-229', 'Badin 1', 1, 'Sindh'),
(9, 'NA-230', 'Badin 2', 1, 'Sindh'),
(10, 'NA-234', 'Dadu 1', 1, 'Sindh'),
(11, 'NA-235', 'Dadu 2', 1, 'Sindh'),
(12, 'NA-204', 'Ghotki 1', 1, 'Sindh'),
(13, 'NA-205', 'Ghotki 2', 1, 'Sindh'),
(14, 'NA-225', 'Hyderabad 1', 1, 'Sindh'),
(15, 'NA-226', 'Hyderabad 2', 1, 'Sindh'),
(16, 'NA-227', 'Hyderabad 3', 1, 'Sindh'),
(18, 'NA-203', 'Kamber Shahdadkot 2', 1, 'Sindh'),
(19, 'NA-253', 'Karachi Central 1', 1, 'Sindh'),
(20, 'NA-254', 'Karachi Central 2', 1, 'Sindh'),
(21, 'NA-255', 'Karachi Central 3', 1, 'Sindh'),
(22, 'NA-256', 'Karachi Central 4', 1, 'Sindh'),
(23, 'NA-242', 'Karachi East 1', 1, 'Sindh'),
(24, 'NA-243', 'Karachi East 2', 1, 'Sindh'),
(25, 'NA-244', 'Karachi East 3', 1, 'Sindh'),
(26, 'NA-245', 'Karachi East 4', 1, 'Sindh'),
(27, 'NA-236', 'Malir 1', 1, 'Sindh'),
(28, 'NA-237', 'Malir 2', 1, 'Sindh'),
(29, 'NA-238', 'Malir 3', 1, 'Sindh'),
(33, 'NA-55', 'Attock-I', 1, 'Punjab'),
(34, 'NA-56', 'Attock-II', 1, 'Punjab'),
(35, 'NA-57', 'Rawalpindi-I', 1, 'Punjab'),
(36, 'NA-58', 'Rawalpindi-II', 1, 'Punjab'),
(37, 'NA-59', 'Rawalpindi-III', 1, 'Punjab'),
(38, 'NA-60', 'Rawalpindi-IV', 1, 'Punjab'),
(39, 'NA-61', 'Rawapindi-V', 1, 'Punjab'),
(40, 'NA-62', 'Rawalpindi-VI', 1, 'Punjab'),
(41, 'NA-63', 'Rawalpindi-VII', 1, 'Punjab'),
(42, 'NA-64', 'Chakwal-I', 1, 'Punjab'),
(43, 'NA-65', 'Chakwal-II', 1, 'Punjab'),
(44, 'NA-66', 'Jhelum-I', 1, 'Punjab'),
(45, 'NA-67', 'Jhelum-II', 1, 'Punjab'),
(46, 'NA-68', 'Gujrat-I', 1, 'Punjab'),
(47, 'NA-69', 'Gujrat-II', 1, 'Punjab'),
(48, 'NA-70', 'Gujrat-III', 1, 'Punjab'),
(49, 'NA-71', 'Gujrat-IV', 1, 'Punjab'),
(50, 'NA-72', 'Sialkot-I', 1, 'Punjab'),
(51, 'NA-73', 'Sialkot-II', 1, 'Punjab'),
(52, 'NA-74', 'Sialkot-III', 1, 'Punjab'),
(53, 'NA-75', 'Sialkot-IV', 1, 'Punjab'),
(54, 'NA-76', 'Sialkot-V', 1, 'Punjab'),
(55, 'NA-77', 'Narowal-I', 1, 'Punjab'),
(56, 'NA-78', 'Narowal-II', 1, 'Punjab'),
(57, 'NA-79', 'Gujranwala-I', 1, 'Punjab'),
(58, 'NA-80', 'Gujranwala-II', 1, 'Punjab'),
(59, 'NA-81', 'Gujranwala-III', 1, 'Punjab'),
(60, 'NA-82', 'Gujranwala-IV', 1, 'Punjab'),
(61, 'NA-83', 'Gujranwala-V', 1, 'Punjab'),
(62, 'NA-84', 'Gujranwala-VI', 1, 'Punjab'),
(63, 'NA-85', 'Mandi Bahauddin-I', 1, 'Punjab'),
(64, 'NA-86', 'Mandi Bahauddin-II', 1, 'Punjab'),
(65, 'NA-87', 'Hafizabad-I', 1, 'Punjab'),
(66, 'NA-88', 'Sargodha-I', 1, 'Punjab'),
(67, 'NA-89', 'Sargodha-II', 1, 'Punjab'),
(68, 'NA-90', 'Sargodha-III', 1, 'Punjab'),
(69, 'NA-91', 'Sargodha-IV', 1, 'Punjab'),
(70, 'NA-92', 'Sargodha-V', 1, 'Punjab'),
(71, 'NA-93', 'Khushab-I', 1, 'Punjab'),
(72, 'NA-94', 'Khushab-II', 1, 'Punjab'),
(73, 'NA-95', 'Mianwali-I', 1, 'Punjab'),
(74, 'NA-96', 'Mianwali-II', 1, 'Punjab'),
(75, 'NA-97', 'Bhakkar-I', 1, 'Punjab'),
(76, 'NA-98', 'Bhakkar-II', 1, 'Punjab'),
(77, 'NA-99', 'Chiniot-I', 1, 'Punjab'),
(78, 'NA-100', 'Chiniot-II', 1, 'Punjab'),
(79, 'NA-101', 'Faisalabad-I', 1, 'Punjab'),
(80, 'NA-102', 'Faisalabad-II', 1, 'Punjab'),
(81, 'NA-103', 'Faisalabad-III', 1, 'Punjab'),
(82, 'NA-104', 'Faisalabad-IV', 1, 'Punjab'),
(83, 'NA-105', 'Faisalabad-V', 1, 'Punjab'),
(84, 'NA-106', 'Faisalabad-VI', 1, 'Punjab'),
(85, 'NA-107', 'Faisalabad-VII', 1, 'Punjab'),
(86, 'NA-108', 'Faisalabad-VIII', 1, 'Punjab'),
(87, 'NA-109', 'Faisalabad-IX', 1, 'Punjab'),
(88, 'NA-110', 'Faisalabad-X', 1, 'Punjab'),
(89, 'NA-111', 'Toba Tek Singh-I', 1, 'Punjab'),
(90, 'NA-112', 'Toba Tek Singh-II', 1, 'Punjab'),
(91, 'NA-113', 'Toba Tek Singh-III', 1, 'Punjab'),
(92, 'NA-114', 'Jhang-I', 1, 'Punjab'),
(93, 'NA-115', 'Jhang-II', 1, 'Punjab'),
(94, 'NA-116', 'Jhang-III', 1, 'Punjab'),
(95, 'NA-117', 'Nankana Sahib-I', 1, 'Punjab'),
(96, 'NA-118', 'Nankana Sahib-II', 1, 'Punjab'),
(97, 'NA-119', 'Sheikhupura-I', 1, 'Punjab'),
(98, 'NA-120', 'Sheikhupura-II', 1, 'Punjab'),
(99, 'NA-121', 'Sheikhupura-III', 1, 'Punjab'),
(100, 'NA-122', 'Sheikhupura-IV', 1, 'Punjab'),
(101, 'NA-123', 'Lahore-I', 1, 'Punjab'),
(102, 'NA-124', 'Lahore-II', 1, 'Punjab'),
(103, 'NA-125', 'Lahore-III', 1, 'Punjab'),
(104, 'NA-126', 'Lahore-IV', 1, 'Punjab'),
(105, 'NA-127', 'Lahore-V', 1, 'Punjab'),
(106, 'NA-128', 'Lahore-VI', 1, 'Punjab'),
(107, 'NA-129', 'Lahore-VII', 1, 'Punjab'),
(108, 'NA-130', 'Lahore-VIII', 1, 'Punjab'),
(109, 'NA-131', 'Lahore-IX', 1, 'Punjab'),
(110, 'NA-132', 'Lahore-X', 1, 'Punjab'),
(111, 'NA-133', 'Lahore-XI', 1, 'Punjab'),
(112, 'NA-134', 'Lahore-XII', 1, 'Punjab'),
(113, 'NA-135', 'Lahore-XIII', 1, 'Punjab'),
(114, 'NA-136', 'Lahore-XIV', 1, 'Punjab'),
(115, 'NA-137', 'Kasur-I', 1, 'Punjab'),
(116, 'NA-138', 'Kasur-II', 1, 'Punjab'),
(117, 'NA-139', 'Kasur-III', 1, 'Punjab'),
(118, 'NA-140', 'Kasur-IV', 1, 'Punjab'),
(119, 'NA-141', 'Okara-I', 1, 'Punjab'),
(120, 'NA-142', 'Okara-II', 1, 'Punjab'),
(121, 'NA-143', 'Okara-III', 1, 'Punjab'),
(122, 'NA-144', 'Okara-IV', 1, 'Punjab'),
(123, 'NA-145', 'Pakpattan-I', 1, 'Punjab'),
(124, 'NA-146', 'Pakpattan-II', 1, 'Punjab'),
(125, 'NA-147', 'Sahiwal-I', 1, 'Punjab'),
(126, 'NA-148', 'Sahiwal-II', 1, 'Punjab'),
(127, 'NA-149', 'Sahiwal-III', 1, 'Punjab'),
(128, 'NA-150', 'Khanewal-I', 1, 'Punjab'),
(129, 'NA-151', 'Khanewal-II', 1, 'Punjab'),
(130, 'NA-152', 'Khanewal-III', 1, 'Punjab'),
(131, 'NA-153', 'Khanewal-IV', 1, 'Punjab'),
(132, 'NA-154', 'Multan-I', 1, 'Punjab'),
(133, 'NA-155', 'Multan-II', 1, 'Punjab'),
(134, 'NA-156', 'Multan-III', 1, 'Punjab'),
(135, 'NA-157', 'Multan-IV', 1, 'Punjab'),
(136, 'NA-158', 'Multan-V', 1, 'Punjab'),
(137, 'NA-159', 'Multan-VI', 1, 'Punjab'),
(138, 'NA-160', 'Lodhran-I', 1, 'Punjab'),
(139, 'NA-161', 'Lodhran-II', 1, 'Punjab'),
(140, 'NA-162', 'Vehari-I', 1, 'Punjab'),
(141, 'NA-163', 'Vehari-II', 1, 'Punjab'),
(142, 'NA-164', 'Vehari-III', 1, 'Punjab'),
(143, 'NA-165', 'Vehari-IV', 1, 'Punjab'),
(144, 'NA-166', 'Bahawalnagar-I', 1, 'Punjab'),
(145, 'NA-167', 'Bahawalnagar-II', 1, 'Punjab'),
(146, 'NA-168', 'Bahawalngar-III', 1, 'Punjab'),
(147, 'NA-169', 'Bahawalnagar-IV', 1, 'Punjab'),
(148, 'NA-170', 'Bahawalpur-I', 1, 'Punjab'),
(149, 'NA-171', 'Bahawalpur-II', 1, 'Punjab'),
(150, 'NA-172', 'Bahawalpur-III', 1, 'Punjab'),
(151, 'NA-173', 'Bahawalpur-IV', 1, 'Punjab'),
(152, 'NA-174', 'Bahawalpur-V', 1, 'Punjab'),
(153, 'NA-175', 'Rahim Yar Khan-I', 1, 'Punjab'),
(154, 'NA-176', 'Rahim Yar Khan-II', 1, 'Punjab'),
(155, 'NA-177', 'Rahim Yar Khan-III', 1, 'Punjab'),
(156, 'NA-178', 'Rahim Yar Khan-IV', 1, 'Punjab'),
(157, 'NA-179', 'Rahim Yar Khan-V', 1, 'Punjab'),
(158, 'NA-180', 'Rahim Yar Khan-VI', 1, 'Punjab'),
(159, 'NA-181', 'Muzaffargarh-I', 1, 'Punjab'),
(160, 'NA-182', 'Muzaffargarh-II', 1, 'Punjab'),
(161, 'NA-183', 'Muzaffargarh-III', 1, 'Punjab'),
(162, 'NA-184', 'Muzaffargarh-IV', 1, 'Punjab'),
(163, 'NA-185', 'Muzaffargarh-V', 1, 'Punjab'),
(164, 'NA-186', 'Muzaffargarh-VI', 1, 'Punjab'),
(165, 'NA-187', 'Layyah-I', 1, 'Punjab'),
(166, 'NA-188', 'Layyah-II', 1, 'Punjab'),
(167, 'NA-189', 'Dera Ghazi Khan-I', 1, 'Punjab'),
(168, 'NA-190', 'Dera Ghazi Khan-II', 1, 'Punjab'),
(169, 'NA-191', 'Dera Ghazi Khan-III', 1, 'Punjab'),
(170, 'NA-192', 'Dera Ghazi Khan-IV', 1, 'Punjab'),
(171, 'NA-193', 'Rajanpur-I', 1, 'Punjab'),
(172, 'NA-194', 'Rajanpur-II', 1, 'Punjab'),
(173, 'NA-195', 'Rajanpur-III', 1, 'Punjab'),
(174, 'NA-1', 'Chitral-I', 1, 'kpk'),
(175, 'NA-2', 'Sawat-I', 1, 'kpk'),
(176, 'NA-3', 'Sawat-II', 1, 'kpk'),
(177, 'NA-4', 'Sawat-III', 1, 'kpk'),
(178, 'NA-5', 'Upper Dir', 1, 'kpk'),
(179, 'NA-6', 'Lower Dir-I', 1, 'kpk'),
(180, 'NA-7', 'Lower Dir-II', 1, 'kpk'),
(181, 'NA-8', 'Malakand Protected Area', 1, 'kpk'),
(182, 'NA-9', 'Buner', 1, 'kpk'),
(183, 'NA-10', 'Shangla', 1, 'kpk'),
(184, 'NA-11', 'Kohistan-cum-Lower Kohistan-cum-Kolai Pallas Kohis', 1, 'kpk'),
(185, 'NA-12', 'Battagram', 1, 'kpk'),
(186, 'NA-13', 'Mansehra-I', 1, 'kpk'),
(187, 'NA-14', 'Mansehra-cum-Torghar', 1, 'kpk'),
(188, 'NA-15', 'Abbottabad-I', 1, 'kpk'),
(189, 'NA-16', 'Abbottabad-II', 1, 'kpk'),
(190, 'NA-17', 'Haripur', 1, 'kpk'),
(191, 'NA-18', 'Sawabi-I', 1, 'kpk'),
(192, 'NA-19', 'Sawabi-II', 1, 'kpk'),
(193, 'NA-20', 'Mardan-I', 1, 'kpk'),
(194, 'NA-21', 'Mardan-II', 1, 'kpk'),
(195, 'NA-22', 'Mardan-III', 1, 'kpk'),
(196, 'NA-23', 'Charsadda-I', 1, 'kpk'),
(197, 'NA-24', 'Charsadda-II', 1, 'kpk'),
(198, 'NA-25', 'Nowshera-I', 1, 'kpk'),
(199, 'NA-26', 'Nowshera-II', 1, 'kpk'),
(200, 'NA-27', 'Peshawar-I', 1, 'kpk'),
(201, 'NA-28', 'Peshawar-II', 1, 'kpk'),
(202, 'NA-29', 'Peshawar-III', 1, 'kpk'),
(203, 'NA-30', 'Peshawar-IV', 1, 'kpk'),
(204, 'NA-31', 'Peshawar-V', 1, 'kpk'),
(205, 'NA-32', 'Kohat', 1, 'kpk'),
(206, 'NA-33', 'Hangu', 1, 'kpk'),
(207, 'NA-34', 'Karak', 1, 'kpk'),
(208, 'NA-35', 'Bunnu', 1, 'kpk'),
(209, 'NA-36', 'Lakki Marwat', 1, 'kpk'),
(210, 'NA-37', 'Tank', 1, 'kpk'),
(211, 'NA-38', 'Dera Ismail Khan-I', 1, 'kpk'),
(212, 'NA-39', 'Dera Ismail Khan-II', 1, 'kpk'),
(213, 'NA-257', 'Killa Saifullah-cum-Zhob-cum-Sherani', 1, 'Balochistan'),
(214, 'NA-258', 'Loralai-cum-Musa Khail-cum-Ziarat-cum-Dukki-cum-Ha', 1, 'Balochistan'),
(215, 'NA-259', 'Dera Bugti-cum-Kohlu-cum-Barkhan-cum-Sibi-cum-Lehr', 1, 'Balochistan'),
(216, 'NA-260', 'Nasirabad-cum-Kachhi-cum-Jhal Magsi', 1, 'Balochistan'),
(217, 'NA-261', 'Jafarabad-cum-Sohbatpur', 1, 'Balochistan'),
(218, 'NA-262', 'Pishin', 1, 'Balochistan'),
(219, 'NA-263', 'Killa Abdullah', 1, 'Balochistan'),
(220, 'NA-264', 'Quetta-I', 1, 'Balochistan'),
(221, 'NA-265', 'Quetta-II', 1, 'Balochistan'),
(222, 'NA-266', 'Quetta-III', 1, 'Balochistan'),
(223, 'NA-267', 'Mastung-cum-Kalat-cum-Shaheed Sikandarabad', 1, 'Balochistan'),
(224, 'NA-268', 'Chagai-cum-Nushki-cum-Kharan', 1, 'Balochistan'),
(225, 'NA-269', 'Khuzdar', 1, 'Balochistan'),
(226, 'NA-270', 'Panjgur-cum-Washuk-cum-Awaran', 1, 'Balochistan'),
(227, 'NA-271', 'Kech', 1, 'Balochistan'),
(228, 'NA-272', 'Lesbera-cum-Gawadar', 1, 'Balochistan');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(1, 'Prime Minister', 1, 1),
(2, 'chairman', 1, 2),
(3, 'President', 1, 3),
(4, 'Federal Minister', 1, 4),
(5, 'Secretary', 1, 5),
(6, 'Member', 1, 6),
(7, 'Ticket Holder', 1, 7),
(8, 'Senior Vice President', 1, 8),
(9, 'Active Member', 1, 9),
(10, 'Provincial Minister', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `show_result`
--

CREATE TABLE `show_result` (
  `display_resultModule` int(1) NOT NULL,
  `display_voterModule` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_result`
--

INSERT INTO `show_result` (`display_resultModule`, `display_voterModule`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  `constituency_name` varchar(30) NOT NULL,
  `province_name` varchar(30) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `reset_vote` int(1) NOT NULL,
  `otp_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `name`, `mobile_no`, `address`, `nic_no`, `constituency_name`, `province_name`, `voters_id`, `password`, `photo`, `reset_vote`, `otp_code`) VALUES
(1, 'muhammad arsalan', '+923362386796', 'E-31,Block 3 Gulshan-e-Iqbal,Karachi', '4220162395565', 'Jacodabad', 'Sindh', 'rnRuX63IBaK2zHE', '$2y$10$pfn47GfaguPAxfzWvinutuWxZOqGdb0cErRW7n2pH.Jyp0wFIyOxu', 'avatar.png', 0, ''),
(2, 'Ahsan ali khan', '+923441317855', 'Gulistan e johar block 16, Karachi', '4220128054573', 'Jacodabad', 'Sindh', 'sSoGVKp7DrImtbg', '$2y$10$Ky4913uvGVs3mXlcjMC4peTJmvb/YUd2PDikx4q/13FhvspT84aB.', 'avatar.png', 0, ''),
(3, 'Areeba Shahbaz', '+923313695261', 'P-454, Block - 5, North-Nazimabad, Karachi', '4210131863158', 'Jacodabad', 'Sindh', '35SCqLBcOghPutU', '$2y$10$GKhZvFQ5Af/1cdiPljdqSOga20rvu0tjZcOfZE54xdC6AyCAKDW42', 'avatar.png', 0, ''),
(50, 'noor', '+923411840030', 'E-31,Block 3 Gulshan-e-Iqbal', '4220162395567', 'Jacodabad', 'Sindh', 'yqG7D26eaHn1tWO', '$2y$10$8gJSsp.Zw8vAwue3vpWZcuLU.lLwxTQDQizwetPEMG6eALHgXHCN6', 'Allah Baksh Soomro.bin', 0, '051099');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_list`
--
ALTER TABLE `candidate_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_votes`
--
ALTER TABLE `list_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poling_stations`
--
ALTER TABLE `poling_stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_list`
--
ALTER TABLE `candidate_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `list_votes`
--
ALTER TABLE `list_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poling_stations`
--
ALTER TABLE `poling_stations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
