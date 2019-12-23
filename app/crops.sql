-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 03:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crops`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `introtext` text NOT NULL,
  `maintext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `title`, `introtext`, `maintext`) VALUES
(1, '2018-11-27', 'Eleven Common Cattle Diseases: Signs & Symptoms ', '<h1>First!</h1>\r\n<p> Bovine Respiratory Disease Complex (BRDC)\r\n\r\nAlso know as \"Shipping Fever\", BRDC is a general term for the pneumonia commonly seen in recently weaned calves.\r\n\r\nStress is a major contributor to BRDC. Events such as weaning, dehorning, shipping and weather changes can compromise the animal\'s immune system, making it susceptible to disease-causing viruses and bacteria. Although stress cannot be eliminated entirely from the cow/calf operation, it can be reduced through careful handling and sanitary conditions.\r\n\r\nAn important tool in reducing the risk of BRDC is proper vaccination. Vaccinating early in life is important to stimulate immunity before animals are stressed and exposed to disease. Calves that survive respiratory disease may not grow as fast or as large as calves that have never been affected. Affected heifers may also breed later than their healthy herd mates.\r\n\r\nYour vaccine program should include protection against the following respiratory diseases, all of which contribute to BRDC:</p>', '<h2>   * IBR (Infectious Bovine Rhinotracheitis)\r\n\r\nAlso known as \"Rednose\", this highly contagious virus causes respiratory disease, abortions and infertility. Signs include inflamed nasal passages, fever, rapid breathing, deep cough and loss of appetite..</h2>\r\n<h3>* Bovine Virus Diarrhea (BVD)\r\n\r\nThis is one of the most costly diseases for cattle producers. Signs may include scours, nasal discharge, coughing and fever. BVD can also cause infertility, abortion and birth defects. Type 2 BVD can cause hemorrhaging and death in susceptible young calves and adult cows.</h3>'),
(2, '2018-11-27', 'Field Crop Diseases', '<p>Bacterial blight.Resources, tools, and information specific to crop disease identification and management.</p>', '<p>Don\'t get \"corn\"-fused this growing season by lesions in your fields. Bacterial leaf streak and longtime disease-player gray leaf spot have started making an appearance in eastern Nebraska. Bacterial leaf streak has lesions categorized with wavy margins that when back lit, appear to have a slight yellow halo. When looking at gray leaf spot, lesions will have blocky edges similar to a rectangle <em>read more</em> works!</p>'),
(3, '2018-11-27', 'Coffee bacteria', '<pWestern bean cutworm egg masses were identified in Platte County shortly before the fourth of July. It is important to scout for small egg masses that are laid by western bean cutworm moths. There is a quick scouting tool available online at CropWatch or an app that can be found in the app store by searching “western bean cutworm”. These are both great resources to estimate and make management decisions about this pest.\r\n\r\nThere are several events that are coming up around the area. An agriculture estate transition and estate planning workshop featuring Allan Vyhnalek and Tom Fehringer will take place Tuesday, July 31, from 9:15 a.m. to 3:30 p.m. at the Platte County Extension office. There is a Cattle Risk Management Workshop taking place in Fullerton at the Nance County Extension Office, from 5:30-8:30 p.m. on Aug. 1!</p>', '<p>\r\nThere is a Soil Health and Grazing Field day on Sept. 5 at the Loup River Inn, in Fullerton from 9 a.m. to 4 p.m.. This will feature Dr. Allen Williams, a livestock management and grazing expert. If you have any questions or concerns, please contact me at 402-563-4901 or email me at mtaylor42@unl.edu. For up to date information follow me on twitter @CropTalkMegan, join me next time for more Crop Talk</p>'),
(4, '2018-11-27', 'New Crop vaccination methods', 'New in the market', 'Learn about the new methods to protect your crops from diseases');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `name`) VALUES
(1, 'Maize'),
(2, 'Tobacco'),
(3, 'Beans'),
(4, 'Cotton'),
(5, 'Wheat'),
(6, 'Potatoes'),
(7, 'Butternut');

-- --------------------------------------------------------

--
-- Table structure for table `crop_diseases`
--

CREATE TABLE `crop_diseases` (
  `id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_diseases`
--

INSERT INTO `crop_diseases` (`id`, `disease_id`, `crop_id`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 2, 1),
(4, 2, 2),
(5, 2, 5),
(6, 3, 1),
(7, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `prevention` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `symptom`, `prevention`, `control`) VALUES
(1, 'Bacterial Leaf Spot', 'The two types of bacteria related to this pathogen produce slightly different symptoms. The Xanthomonas bacteria produce small brown angular and/or circular spots bordered by a yellow tint. On the other hand, the Pseudomonas bacteria cause red-brown angul', 'Before planting, try to ensure that the seeds are disease-free. This is the best method to avoid initial infection and further spread of infection. Using sanitized tools will significantly reduce the chance of bacteria distribution from plant to plant whi', 'When it comes to bacterial leaf spot, there arenâ€™t many chemical methods of control. Due to the lack of bactericides available, chemical controls arenâ€™t the best option. Note that fungicides cannot be used to control bacteria. If managed correctly, cu'),
(2, 'Withered Leaves', 'Brown leaves', 'Watering daily', 'Watering the plant'),
(3, 'Potassium Deficiency', 'Yellow and Brown leaves', 'Apply basal fertilizer', 'Crop Rotation ');

-- --------------------------------------------------------

--
-- Table structure for table `dis_livestocks`
--

CREATE TABLE `dis_livestocks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `prevention` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dis_livestocks`
--

INSERT INTO `dis_livestocks` (`id`, `name`, `symptom`, `prevention`, `control`) VALUES
(1, 'Anthrax', 'Fever,vomiting,sore throat,shortness of breath', 'You can reduce your risk of anthrax by having the anthrax vaccine.', 'keep your environment clean always'),
(2, 'Leptospirosis', 'Skin rash,vomiting,muscle ache', 'Keeps kraals clean', 'Vaccination');

-- --------------------------------------------------------

--
-- Table structure for table `livestocks`
--

CREATE TABLE `livestocks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livestocks`
--

INSERT INTO `livestocks` (`id`, `name`) VALUES
(1, 'Cattle'),
(2, 'Goats'),
(3, 'Pigs'),
(4, 'Chicken');

-- --------------------------------------------------------

--
-- Table structure for table `livestock_diseases`
--

CREATE TABLE `livestock_diseases` (
  `id` int(11) NOT NULL,
  `dis_livestock_id` int(11) NOT NULL,
  `livestock_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livestock_diseases`
--

INSERT INTO `livestock_diseases` (`id`, `dis_livestock_id`, `livestock_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `system_groups`
--

CREATE TABLE `system_groups` (
  `id` int(11) NOT NULL,
  `account_type_name` varchar(200) NOT NULL,
  `internal_account` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `create_ip` varchar(60) NOT NULL,
  `modify_ip` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_groups`
--

INSERT INTO `system_groups` (`id`, `account_type_name`, `internal_account`, `created`, `modified`, `created_by`, `modified_by`, `create_ip`, `modify_ip`) VALUES
(1, 'Systems Administrator', 1, '2017-03-22 08:10:05', '2018-11-27 07:31:52', 'admin', '', '', ''),
(2, 'Crop Agronomist', 1, '2017-03-22 08:10:18', '2018-11-26 08:06:24', 'admin', '', '', ''),
(3, 'Farmer', 1, '2017-03-22 08:10:35', '2018-11-26 08:06:33', 'admin', '', '', ''),
(4, 'Other', 1, '2017-03-22 08:10:46', '2017-12-05 11:12:27', 'admin', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` tinyint(4) NOT NULL DEFAULT '0',
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `system_group_id` int(3) NOT NULL,
  `password_expiry_date` date NOT NULL,
  `expiry_warning_date` date NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `create_ip` varchar(255) NOT NULL,
  `modify_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_address`, `password`, `account_status`, `firstname`, `lastname`, `system_group_id`, `password_expiry_date`, `expiry_warning_date`, `created_by`, `modified_by`, `created`, `modified`, `username`, `create_ip`, `modify_ip`) VALUES
(5, 'admin@gmail.com', '50c52b3502b8577cc5520792043fd32cd239951a', 0, 'admin', 'test', 1, '0000-00-00', '0000-00-00', '', '', '2017-05-04 10:55:04', '2015-09-16 10:06:30', 'admin', '', ''),
(43, 'farmer@gmail.com', '50c52b3502b8577cc5520792043fd32cd239951a', 1, 'Tracy', 'Mutero', 3, '0000-00-00', '0000-00-00', NULL, NULL, '2018-11-13 15:34:23', '2018-11-13 15:34:23', 'farmer1@gmail.com', '::1', ''),
(46, 'farmer1@gmail.com', '50c52b3502b8577cc5520792043fd32cd239951a', 0, 'Thomas', 'Buse', 3, '0000-00-00', '0000-00-00', NULL, NULL, '2018-11-26 10:56:26', '2018-11-27 14:42:41', 'farmer1@gmail.com', '::1', ''),
(47, 'farmer2@gmail.com', '50c52b3502b8577cc5520792043fd32cd239951a', 0, 'Farmer', 'Moyo', 3, '0000-00-00', '0000-00-00', NULL, NULL, '2018-11-27 08:30:12', '2018-11-27 10:46:23', 'farmer2@gmail.com', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `system_group_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop_diseases`
--
ALTER TABLE `crop_diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dis_livestocks`
--
ALTER TABLE `dis_livestocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestocks`
--
ALTER TABLE `livestocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestock_diseases`
--
ALTER TABLE `livestock_diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_groups`
--
ALTER TABLE `system_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_type_name` (`account_type_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `crop_diseases`
--
ALTER TABLE `crop_diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dis_livestocks`
--
ALTER TABLE `dis_livestocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livestocks`
--
ALTER TABLE `livestocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livestock_diseases`
--
ALTER TABLE `livestock_diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
