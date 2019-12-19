-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 12:05 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Zc84gMxXHAUsSJa6tkKBW3tI6OU4aXwf', 1, '2019-01-05 08:07:57', '2019-01-05 08:07:57', '2019-01-05 08:07:57'),
(2, 2, 'nBf8SIBzCgssfJUFrt4A2NhQps3cmujp', 1, '2019-01-05 08:15:39', '2019-01-05 08:15:39', '2019-01-05 08:15:39'),
(3, 3, '7yN1mrmmQfZwmLjyhHMlAI7HceeqlvDS', 1, '2019-01-05 08:35:30', '2019-01-05 08:35:30', '2019-01-05 08:35:30'),
(4, 4, 'aWYatDawhzTLll2uRNGJx68iWye6liMb', 1, '2019-01-05 09:16:34', '2019-01-05 09:16:34', '2019-01-05 09:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(10) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `blood_group`, `status`) VALUES
(1, 'A+', '1'),
(2, 'A-', '1'),
(3, 'B+', '1'),
(4, 'B-', '1'),
(5, 'AB+', '1'),
(6, 'AB-', '1'),
(7, 'O+', '1'),
(8, 'O-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) NOT NULL,
  `districtID` int(10) NOT NULL,
  `city_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `districtID`, `city_name`) VALUES
(1, 34, 'pokhara'),
(2, 34, 'Annapurna'),
(3, 34, 'Machhapuchhree'),
(4, 34, 'Madi'),
(5, 34, 'Rupa'),
(7, 1, 'Bannigadhi Jayagadh'),
(8, 1, 'Chaurpati'),
(9, 1, 'Dhakari'),
(10, 1, 'kamalbazar'),
(11, 1, 'mangalsen'),
(12, 1, 'mallekh'),
(13, 1, 'panchadewal binayak'),
(14, 1, 'Ramaroshan'),
(15, 1, 'sanphebagar'),
(16, 1, 'Rurmakhad'),
(17, 2, 'Bhumekasthan'),
(18, 2, 'Sandhikharka'),
(19, 2, 'Sitganga'),
(20, 3, 'Baglung'),
(21, 3, 'Galkot'),
(22, 3, 'Juimuni'),
(23, 3, 'Dhorpatan'),
(24, 2, 'Chhatradev'),
(25, 2, 'Malarani'),
(26, 2, 'Panini'),
(27, 3, 'Badigad'),
(28, 3, 'Bareng'),
(29, 3, 'Kathekhola'),
(30, 3, 'Nisikhola'),
(31, 4, 'Dasharathchanda'),
(32, 4, 'Dilasaini'),
(33, 4, 'Dogadakedar'),
(34, 4, 'Melauli'),
(35, 4, 'Pancheshwar'),
(36, 4, 'patan'),
(37, 4, 'Parchaudi'),
(38, 4, 'Shivanath'),
(39, 4, 'Sigas'),
(40, 4, 'Surnaya'),
(41, 5, 'Bithadchir'),
(42, 5, 'Bungal'),
(43, 5, 'Chabispathivera'),
(44, 5, 'Durgathali'),
(45, 5, 'jaya Prithivi'),
(46, 5, 'Kanda'),
(47, 5, 'Kedarseu'),
(48, 5, 'Khaptadchhanna'),
(49, 5, 'masta'),
(50, 5, 'Surma'),
(51, 5, 'Talkot'),
(52, 5, 'Thalara'),
(53, 6, 'Badimalika'),
(54, 6, 'Budhiganga'),
(55, 6, 'Budhinanda'),
(56, 6, 'chhededaha'),
(57, 6, 'Gaumul'),
(58, 6, 'Himali'),
(59, 6, 'Pandav Gupha'),
(60, 6, 'Swami Kartik'),
(61, 6, 'Tribeni'),
(62, 6, 'Surma'),
(63, 6, 'Talkot'),
(64, 6, 'Thalara'),
(65, 7, 'Baijanath'),
(66, 7, 'Dudwa'),
(67, 7, 'Janki'),
(68, 7, 'Khajura'),
(69, 7, 'Kohalpur'),
(70, 7, 'Narainapur'),
(71, 7, 'Nepalganj'),
(72, 7, 'Rapti Sonari'),
(73, 8, 'Adarsha Kotwal'),
(74, 8, 'Baragadhi'),
(75, 8, 'Bishrampur'),
(76, 8, 'Devtal'),
(77, 8, 'Jitpur Simara'),
(78, 8, 'Kalaiya'),
(79, 8, ' Karaiyamai'),
(80, 8, 'Kolhabi'),
(81, 8, 'Mahagadhimai'),
(82, 8, 'Nijgadh'),
(83, 8, 'Parwanipur'),
(84, 8, 'Pheta'),
(85, 8, 'Prasauni'),
(86, 8, 'Simroungadh'),
(87, 8, 'Suwarna'),
(88, 8, 'Pacharauta'),
(89, 9, 'Badhaiyatal'),
(90, 9, 'Bansgadhi'),
(91, 9, 'Barbardiya'),
(92, 9, 'Geruwa'),
(93, 9, 'Gulariya'),
(94, 9, 'Madhuwan'),
(95, 9, 'Rajapur'),
(96, 9, 'Thakurbaba'),
(97, 10, 'Bhaktapur'),
(98, 10, 'Changunarayan'),
(99, 10, 'Madhyapur Thimi'),
(100, 10, 'Suryabinayak'),
(101, 11, 'Aamchowk'),
(102, 11, 'Arun'),
(103, 11, 'Bhojpur'),
(104, 11, 'Hatuwagadhi'),
(105, 11, 'Pauwadungma'),
(106, 11, 'Ramprasad Rai'),
(107, 11, 'Salpasilichho'),
(108, 11, 'Shadananda'),
(109, 11, 'Tyamkemaiyung'),
(110, 12, 'Bharatpur'),
(111, 12, 'Ichchhyakamana'),
(112, 12, 'Kalika'),
(113, 12, 'Khairahani'),
(114, 12, ' Madi'),
(115, 12, 'Rapti'),
(116, 12, ' Ratnangar'),
(117, 13, 'Ajaymeru'),
(118, 13, 'Alital'),
(119, 13, 'Amargadhi'),
(120, 13, 'Ganayapdhura'),
(121, 13, 'Nawadurga'),
(122, 13, 'parshuram'),
(123, 14, 'Aaithabis'),
(124, 14, 'Bhagawatimai'),
(125, 14, 'Bhairabi'),
(126, 14, 'Chamunda Bindrasaini'),
(127, 14, 'Dallu'),
(128, 14, 'Dungeshowr'),
(129, 14, 'Gurans'),
(130, 14, 'Mahabu'),
(131, 14, 'Narayan'),
(132, 14, 'Naumule'),
(133, 14, 'Thantikanda'),
(134, 15, 'Babi'),
(135, 15, 'Banglachuli'),
(136, 15, 'Dandisharan'),
(137, 15, 'Gadhawa'),
(138, 15, 'Ghorahi'),
(139, 15, 'lamahi'),
(140, 15, 'Rajpur'),
(141, 15, 'Rapti'),
(142, 15, 'shantinagar'),
(143, 15, 'tulsipur'),
(144, 16, 'Apihimal'),
(145, 16, 'Byas'),
(146, 16, 'Dunhu'),
(147, 16, 'lekam'),
(148, 16, 'Mahakali'),
(149, 16, 'Malikarjun'),
(150, 16, 'Marma'),
(151, 16, 'Naugad'),
(152, 16, 'Shailyashikhar'),
(153, 17, 'Benighat Rorang'),
(154, 17, 'Dhunibesi'),
(155, 17, ' Gajuri'),
(156, 17, 'Galchi'),
(157, 17, 'Gangajamuna'),
(158, 17, 'Jwalamukhi'),
(159, 17, ' Khaniyabash'),
(160, 17, 'Netrawati'),
(161, 17, 'Nilakantha'),
(162, 17, 'Rubi Valley'),
(163, 17, 'Siddhalek '),
(164, 17, 'Thakre'),
(165, 17, 'Tripurasundari'),
(166, 18, 'Chaubise'),
(167, 18, 'Chhathar jorpati'),
(168, 18, 'Dhankuta'),
(169, 18, 'Khalsa chhintang'),
(170, 18, ' Mahalaxi'),
(171, 18, 'Pakhribas'),
(172, 18, 'Sangurigadhi'),
(173, 19, 'Aurahi'),
(174, 19, 'Beteshwor'),
(175, 19, 'Bidehi'),
(176, 19, 'Chhireshwornath'),
(177, 19, ' Dhanushadham'),
(178, 19, 'Ganeshman charnath'),
(179, 19, ' Hansapur'),
(180, 19, 'Janaknandini'),
(181, 19, 'janakpur'),
(182, 19, 'Kamala'),
(183, 19, 'Lakshminiya'),
(184, 19, 'Mithila'),
(185, 19, ' Mithila Bihari'),
(186, 19, 'Mukhiyapatti Musahar'),
(187, 19, ' Nagarain'),
(188, 19, 'Sabila'),
(189, 19, 'sahidnagar'),
(190, 20, 'Baiteshwor'),
(191, 20, 'Bhimeshwor'),
(192, 20, 'Bigu'),
(193, 20, 'Gaurisankhaer'),
(194, 20, 'jiri'),
(195, 20, 'Kanilchok'),
(196, 20, 'Melung'),
(197, 20, 'Sailung'),
(198, 20, 'Tamakoshi'),
(199, 21, 'Chharka Tangsong'),
(200, 21, 'Dolpo Buddha'),
(201, 21, 'Jadadulla'),
(202, 21, 'Kaike'),
(203, 21, 'Mudkechula'),
(204, 21, 'Shey Phoksundo'),
(205, 21, 'Thuli Bheri'),
(206, 21, 'Tripurasundari'),
(207, 22, 'Adharhars '),
(208, 22, 'Budikedar'),
(209, 22, ' Bogtan'),
(210, 22, 'Dipayal Silgadhi'),
(211, 22, 'Jorayal'),
(212, 22, 'K I Singh'),
(213, 22, ' Purbichauki'),
(214, 22, 'Sayal'),
(215, 22, 'Shikhar'),
(216, 23, 'Aarughat'),
(217, 23, ' Ajirkot'),
(218, 23, 'Bhimsen'),
(219, 23, ' Chum Nubi'),
(220, 23, ' Dharche'),
(221, 23, 'Gandaki'),
(222, 23, 'Gorkha'),
(223, 23, '  Palungtar'),
(224, 23, ' Sahid Lakhan'),
(225, 23, 'Siranchok'),
(226, 23, 'Sulikot'),
(227, 24, 'Chandrakot'),
(228, 24, 'Chatrakot'),
(229, 24, 'Dhurkot'),
(230, 24, 'Gulmidurbar'),
(231, 24, ' Isma'),
(232, 24, ' Kaligandaki'),
(233, 24, ' Madane'),
(234, 24, 'Malika'),
(235, 24, 'Musikot'),
(236, 24, 'Resunga'),
(237, 24, 'Ruru'),
(238, 24, 'Satyawati'),
(239, 25, 'Adanchuli'),
(240, 25, 'Chankheli'),
(241, 25, 'Kharpunath'),
(242, 25, 'Namkha'),
(243, 25, 'Sarkegad'),
(244, 25, 'Simkot'),
(245, 25, 'Tanjakot'),
(246, 26, 'Chulachuli'),
(247, 26, 'Deumai'),
(248, 26, 'Fakphokthum'),
(249, 26, 'Ilam'),
(250, 26, 'Mai'),
(251, 26, 'Maijogmai'),
(252, 26, 'Mangsebung'),
(253, 26, 'Rong'),
(254, 26, 'Sandakpur'),
(255, 26, 'Suryodaya'),
(256, 27, 'Barekot'),
(257, 27, 'Bheri'),
(258, 27, 'Chhedagad'),
(259, 27, 'Junichande'),
(260, 27, 'Kuse'),
(261, 27, 'Shiwalaya'),
(262, 27, 'Tribeni Nalagad'),
(263, 28, 'Arjundhara'),
(264, 28, 'Barhadashi'),
(265, 28, 'Bhadrapur'),
(266, 28, ' Britamod'),
(267, 28, 'Buddhasanti'),
(268, 28, 'Damak'),
(269, 28, 'Gauradhaha'),
(270, 28, 'Gauriganj'),
(271, 28, 'Haldibari'),
(272, 28, 'Jhapa'),
(273, 28, 'Kanchankawal'),
(274, 28, 'Kamal'),
(275, 28, 'Kankai'),
(276, 28, 'Mechinagar'),
(277, 28, 'Shivasataxi'),
(278, 29, 'Chandranath'),
(279, 29, 'Guthichaur'),
(280, 29, 'Hima'),
(281, 29, 'Kanakasundari'),
(282, 29, 'Patrasi'),
(283, 29, 'Sinja'),
(284, 29, 'Tatopani'),
(285, 29, 'Tila'),
(286, 36, 'Banepa'),
(287, 36, 'Bethanchowk'),
(288, 36, 'Bhumlu'),
(289, 36, ' Chaurideurali'),
(290, 36, 'Dhulikhel'),
(291, 36, 'khanikhola'),
(292, 36, 'Mahabharat'),
(293, 36, 'Mandandeupur'),
(294, 36, 'Namobuddha'),
(295, 36, 'Panauti'),
(296, 36, 'Panchkhal'),
(297, 36, 'Roshi'),
(298, 36, 'Temal'),
(299, 30, ' Bargagoriya'),
(300, 30, 'Bhajani'),
(301, 30, 'Chure'),
(302, 30, 'Bhangadhi'),
(303, 30, 'Gauriganga'),
(304, 30, 'Ghodaghodi'),
(305, 30, ' Godawari'),
(306, 30, 'Janaki'),
(307, 30, 'Joshipur'),
(308, 30, 'Kailari'),
(309, 30, 'Lamkichuha'),
(310, 30, ' Mohanyal'),
(311, 30, 'Tikapur'),
(312, 31, 'Kalika '),
(313, 31, 'Khandacharka'),
(314, 31, ' Mahawari'),
(315, 31, ' Naraharinath'),
(316, 31, 'Pachaljharna'),
(317, 31, 'Palata'),
(318, 31, ' Raskot'),
(319, 31, 'Sanni Tribeni'),
(320, 31, 'Tilagufa'),
(321, 32, 'Bedkot'),
(322, 32, ' Belauri'),
(323, 32, 'Beldandi'),
(324, 32, '  bhimdatta'),
(325, 32, ' Krishnapur'),
(326, 32, 'Laljhandi'),
(327, 32, 'Mahakali'),
(328, 32, '  Punarbas'),
(329, 32, '  Suklaphanta'),
(330, 33, 'Banganga'),
(331, 33, 'Bijayanagar'),
(332, 33, 'Buddhabhumi'),
(333, 33, 'Kapilbastu'),
(334, 33, ' Krishnanagar'),
(335, 33, ' Maharajgunj'),
(336, 33, ' Mayadevi'),
(337, 33, 'Shivaraj'),
(338, 33, 'Suddhodhan'),
(339, 33, 'yashodhara'),
(340, 35, 'Budhanilkantha'),
(341, 35, 'Chandragiri'),
(342, 35, 'Dakshinkali'),
(343, 35, 'Gokarneshwor'),
(344, 35, 'Kageshowri Manahara'),
(345, 35, 'kathmandu'),
(346, 35, 'Kirtipur'),
(347, 35, 'Nagarjun'),
(348, 35, ' Shankharapur'),
(349, 35, 'Tarakeshwar'),
(350, 35, 'Tokha'),
(351, 37, 'Ainselukhark'),
(352, 37, 'Barahapokhari'),
(353, 37, 'Diprung'),
(354, 37, 'Halesi Tuwachung'),
(355, 37, 'Jantedhunga'),
(356, 37, 'Kepilasagadhi'),
(357, 37, 'Khotehang'),
(358, 37, 'Lamidanda'),
(359, 37, 'Rupakot Majhuwagadhi'),
(360, 37, 'Sakela'),
(361, 38, 'Bagmati'),
(362, 38, 'Godawari'),
(363, 38, 'Konjyosom'),
(364, 38, 'Lalitpur'),
(365, 38, 'Mahalaxmi'),
(366, 38, 'Mahakal'),
(367, 39, 'Besishahar'),
(368, 39, 'Dordi'),
(369, 39, 'Dudhpokhari'),
(370, 39, ' Kwholasothar'),
(371, 39, 'Madhyanepal'),
(372, 39, 'Marsyangdi'),
(373, 39, 'Rains'),
(374, 39, 'Sundarbazar'),
(375, 40, 'Aurahi'),
(376, 40, 'balwa'),
(377, 40, 'Bardibas'),
(378, 40, 'Bhangaha'),
(379, 40, 'Ekdanra'),
(380, 40, 'Gaushala'),
(381, 40, 'Jaleswar'),
(382, 40, 'Loharpatti'),
(383, 40, 'Mahottari'),
(384, 40, 'Manra Sisawa'),
(385, 40, 'Matihani'),
(386, 40, 'Pipra'),
(387, 40, 'Ramgopalpur'),
(388, 40, 'Samsi'),
(389, 40, 'Sonama'),
(390, 41, ' Bagmati'),
(391, 41, 'Bakaiya'),
(392, 41, 'Bhimphedi'),
(393, 41, 'Hetauda'),
(394, 41, 'Indrasarowar'),
(395, 41, 'Kailash'),
(396, 41, ' Makawanpurgadhi'),
(397, 41, 'Manahari'),
(398, 41, 'Raksirang'),
(399, 41, 'Thaha'),
(400, 42, 'Chame'),
(401, 42, 'Narphu'),
(402, 42, ' Nashong'),
(403, 42, ' Neshyang'),
(404, 43, 'Belbari'),
(405, 43, ' Biratnagar'),
(406, 43, 'Budhiganga'),
(407, 43, '  Dhanpalthan'),
(408, 43, ' Gramthan'),
(409, 43, 'Jahada'),
(410, 43, 'Kanepokhari'),
(411, 43, '  Katahari'),
(412, 43, '  Kerabari'),
(413, 43, ' Letang'),
(414, 43, 'Miklajung'),
(415, 43, 'Patahri Shanishchare'),
(416, 43, 'Rangeli'),
(417, 43, 'Ratuwamai'),
(418, 43, 'Sundarharaicha'),
(419, 43, 'Sunwarshi'),
(420, 43, 'Uralabari'),
(421, 44, 'Chhayanath'),
(422, 44, 'Khatyad'),
(423, 44, 'Mugum Karmarong'),
(424, 44, 'Soru'),
(425, 45, 'Barhagaun Muktikshet'),
(426, 45, 'Dalome'),
(427, 45, 'Gharapjhong'),
(428, 45, 'Lomanthang'),
(429, 45, ' Thasang'),
(430, 46, 'Annapurna'),
(431, 46, 'Beni'),
(432, 46, 'Dhaulagiri'),
(433, 46, ' Malika'),
(434, 46, 'Mangala'),
(435, 46, 'Raghuganga'),
(436, 47, 'Binayee Triveni'),
(437, 47, 'Bulingtar'),
(438, 47, 'Bungdikali'),
(439, 47, 'Devchuli'),
(440, 47, 'Gaidakot'),
(441, 47, 'Hupsekot'),
(442, 47, 'Kawaswoti'),
(443, 47, 'Madhyabindu'),
(444, 76, 'Bardaghat'),
(445, 76, 'Palhi Nandan'),
(446, 76, 'Pratappur'),
(447, 76, ' Ramgram'),
(448, 76, 'Sarawal'),
(449, 76, 'Sunwal'),
(450, 76, 'Susta'),
(451, 48, 'Belkotgadhi'),
(452, 48, 'Bidur'),
(453, 48, 'Dupcheshwar'),
(454, 48, 'kakani'),
(455, 48, 'Kispang'),
(456, 48, 'likhu'),
(457, 48, 'Meghang'),
(458, 48, 'Panchakanya'),
(459, 48, 'Shivapuri'),
(460, 48, ' suryagadhi'),
(461, 48, 'Tadi'),
(462, 48, 'Tarkeshwar'),
(463, 49, 'Champadevi'),
(464, 49, 'Chisankhugadhi'),
(465, 49, 'Khijidemba'),
(466, 49, ' Likhu'),
(467, 49, 'Manebhanjyang'),
(468, 49, 'Molung'),
(469, 49, 'Siddhicharan'),
(470, 49, 'sunkoshi'),
(471, 50, 'Bagnaskali'),
(472, 50, 'Mathagadhi'),
(473, 50, 'Nisdi'),
(474, 50, 'Purbakhola'),
(475, 50, 'Rainadevi Chhahara'),
(476, 50, 'Rambha'),
(477, 50, 'Rampur'),
(478, 50, 'Ribdikot'),
(479, 50, 'Tansen'),
(480, 50, 'Tinau'),
(481, 51, ' Falelung'),
(482, 51, 'Falgunanda'),
(483, 51, 'Hilihang'),
(484, 51, 'Kummayak'),
(485, 51, 'Miklajung'),
(486, 51, 'Phidim'),
(487, 51, ' Tumbewa'),
(488, 51, 'Yangwarak'),
(489, 52, 'Bihadi'),
(490, 52, 'Jaljala'),
(491, 52, ' Kushma'),
(492, 52, ' Mahashila'),
(493, 52, 'Modi'),
(494, 52, ' Painyu'),
(495, 52, ' Phalebas'),
(496, 53, 'Bahudaramai'),
(497, 53, ' Bindabasini'),
(498, 53, 'Birgunj'),
(499, 53, '  Chhipaharmai'),
(500, 53, ' Dhobini'),
(501, 53, 'Jagarnathpur'),
(502, 53, 'Jira Bhawani'),
(503, 53, '  Kalikamai'),
(504, 53, '  Pakahamainpur'),
(505, 53, ' Parsagadi'),
(506, 53, 'Paterwasugauli'),
(507, 53, ' pokhariya'),
(508, 53, '  sakhuwa Prasauni'),
(509, 53, '  Thori'),
(510, 54, 'Ayirabati'),
(511, 54, 'Gaumukhi'),
(512, 54, ' Jhimkhur'),
(513, 54, 'Mallarani'),
(514, 54, 'Mandavi'),
(515, 54, 'Naubahini'),
(516, 54, 'Pyuthan'),
(517, 54, 'sarumarani'),
(518, 54, 'Sworgadwary'),
(519, 55, ' Doramba'),
(520, 55, 'Gokulganga'),
(521, 55, 'Khadadevi'),
(522, 55, 'likhu'),
(523, 55, ' Manthali'),
(524, 55, 'Ramechhap'),
(525, 55, 'Sunapati'),
(526, 55, ' Umakunda'),
(527, 60, 'Gosaikunda'),
(528, 60, 'Kalika'),
(529, 60, 'Naukunda'),
(530, 60, ' Parbatikunda'),
(531, 60, 'Uttargaya'),
(532, 57, ' Baudhimai'),
(533, 57, 'Brindaban'),
(534, 57, 'Chandrapur'),
(535, 57, 'Devahi Gonahi'),
(536, 57, 'Gadhimai'),
(537, 57, 'Garuda'),
(538, 57, 'Gaur'),
(539, 57, 'Gujara'),
(540, 57, ' Ishanath'),
(541, 57, 'Katahariya'),
(542, 57, 'Mahadev Narayan'),
(543, 57, 'Maulapur'),
(544, 57, 'Paroha'),
(545, 57, 'Patuwa Bijayapur'),
(546, 57, 'Rajdevi'),
(547, 57, 'Rajpur'),
(548, 57, 'Yamunamai'),
(549, 58, 'Duikholi'),
(550, 58, ' Lungri'),
(551, 58, 'Madi'),
(552, 58, ' Rolpa'),
(553, 58, 'Runtigadi'),
(554, 58, 'Sukidaha'),
(555, 58, 'Suchhahari'),
(556, 58, 'Suwarnabati'),
(557, 58, 'Thawang'),
(558, 58, 'Tribeni'),
(559, 59, 'Bhume'),
(560, 59, 'Putha Uttarganga'),
(561, 59, 'Sisne'),
(562, 77, 'Aathbiskot'),
(563, 77, ' banfikot'),
(564, 77, 'Chaurjahari'),
(565, 77, 'Musikot'),
(566, 77, 'Sani Bheri'),
(567, 77, 'Tribeni'),
(568, 60, 'Burwal'),
(569, 60, 'Devdaha'),
(570, 60, 'Gaidahawa'),
(571, 60, ' Kanchan'),
(572, 60, 'Kotahimai'),
(573, 60, 'Lumbini Sanskritik'),
(574, 60, 'Marchawari'),
(575, 60, 'Mayadevi'),
(576, 60, 'Omsatiya'),
(577, 60, 'Rohini'),
(578, 60, 'Sainamaina'),
(579, 60, ' Sammarimai'),
(580, 60, 'Siddharthanagar'),
(581, 60, ' Siyari'),
(582, 60, 'Suddhodhan'),
(583, 60, 'Tilottama'),
(584, 51, ' Falelung'),
(585, 51, 'Falgunanda'),
(586, 51, 'Hilihang'),
(587, 51, 'Kummayak'),
(588, 51, 'Miklajung'),
(589, 51, 'Phidim'),
(590, 51, ' Tumbewa'),
(591, 51, 'Yangwarak'),
(592, 52, 'Bihadi'),
(593, 52, 'Jaljala'),
(594, 52, ' Kushma'),
(595, 52, ' Mahashila'),
(596, 52, 'Modi'),
(597, 52, ' Painyu'),
(598, 52, ' Phalebas'),
(599, 53, 'Bahudaramai'),
(600, 53, ' Bindabasini'),
(601, 53, 'Birgunj'),
(602, 53, '  Chhipaharmai'),
(603, 53, ' Dhobini'),
(604, 53, 'Jagarnathpur'),
(605, 53, 'Jira Bhawani'),
(606, 53, '  Kalikamai'),
(607, 53, '  Pakahamainpur'),
(608, 53, ' Parsagadi'),
(609, 53, 'Paterwasugauli'),
(610, 53, ' pokhariya'),
(611, 53, '  sakhuwa Prasauni'),
(612, 53, '  Thori'),
(613, 54, 'Ayirabati'),
(614, 54, 'Gaumukhi'),
(615, 54, ' Jhimkhur'),
(616, 54, 'Mallarani'),
(617, 54, 'Mandavi'),
(618, 54, 'Naubahini'),
(619, 54, 'Pyuthan'),
(620, 54, 'sarumarani'),
(621, 54, 'Sworgadwary'),
(622, 55, ' Doramba'),
(623, 55, 'Gokulganga'),
(624, 55, 'Khadadevi'),
(625, 55, 'likhu'),
(626, 55, ' Manthali'),
(627, 55, 'Ramechhap'),
(628, 55, 'Sunapati'),
(629, 55, ' Umakunda'),
(630, 60, 'Gosaikunda'),
(631, 60, 'Kalika'),
(632, 60, 'Naukunda'),
(633, 60, ' Parbatikunda'),
(634, 60, 'Uttargaya'),
(635, 57, ' Baudhimai'),
(636, 57, 'Brindaban'),
(637, 57, 'Chandrapur'),
(638, 57, 'Devahi Gonahi'),
(639, 57, 'Gadhimai'),
(640, 57, 'Garuda'),
(641, 57, 'Gaur'),
(642, 57, 'Gujara'),
(643, 57, ' Ishanath'),
(644, 57, 'Katahariya'),
(645, 57, 'Mahadev Narayan'),
(646, 57, 'Maulapur'),
(647, 57, 'Paroha'),
(648, 57, 'Patuwa Bijayapur'),
(649, 57, 'Rajdevi'),
(650, 57, 'Rajpur'),
(651, 57, 'Yamunamai'),
(652, 58, 'Duikholi'),
(653, 58, ' Lungri'),
(654, 58, 'Madi'),
(655, 58, ' Rolpa'),
(656, 58, 'Runtigadi'),
(657, 58, 'Sukidaha'),
(658, 58, 'Suchhahari'),
(659, 58, 'Suwarnabati'),
(660, 58, 'Thawang'),
(661, 58, 'Tribeni'),
(662, 59, 'Bhume'),
(663, 59, 'Putha Uttarganga'),
(664, 59, 'Sisne'),
(665, 77, 'Aathbiskot'),
(666, 77, ' banfikot'),
(667, 77, 'Chaurjahari'),
(668, 77, 'Musikot'),
(669, 77, 'Sani Bheri'),
(670, 77, 'Tribeni'),
(671, 60, 'Burwal'),
(672, 60, 'Devdaha'),
(673, 60, 'Gaidahawa'),
(674, 60, ' Kanchan'),
(675, 60, 'Kotahimai'),
(676, 60, 'Lumbini Sanskritik'),
(677, 60, 'Marchawari'),
(678, 60, 'Mayadevi'),
(679, 60, 'Omsatiya'),
(680, 60, 'Rohini'),
(681, 60, 'Sainamaina'),
(682, 60, ' Sammarimai'),
(683, 60, 'Siddharthanagar'),
(684, 60, ' Siyari'),
(685, 60, 'Suddhodhan'),
(686, 60, 'Tilottama'),
(687, 61, 'Bagchaur'),
(688, 61, 'Bangad Kupinde'),
(689, 61, 'Chhatreshowri'),
(690, 61, 'Darma'),
(691, 61, ' Dhorchaur'),
(692, 61, 'Kalimati'),
(693, 61, 'Kapurkot'),
(694, 61, 'Kumakhmalika'),
(695, 61, 'Sharada'),
(696, 61, 'tribeni'),
(697, 62, ' Bhotkhola'),
(698, 62, 'Chainpur'),
(699, 62, 'Chichila'),
(700, 62, 'Dharmadevi'),
(701, 62, 'Khandbari'),
(702, 62, 'Madi'),
(703, 62, ' Makalu'),
(704, 62, 'Panchakhapan'),
(705, 62, 'Sabhapokhari'),
(706, 62, ' Silichong'),
(707, 63, 'Agnisair Krishnasava'),
(708, 63, 'Belhi Chapena'),
(709, 63, ' Bishnupur'),
(710, 63, ' Bodebarsaien'),
(711, 63, 'Chhinnamasta'),
(712, 63, ' Dakneshwori'),
(713, 63, ' Hanumannagar Kankal'),
(714, 63, 'Kanchanrup'),
(715, 63, 'Khadak'),
(716, 63, ' Mahadeva'),
(717, 63, ' Rajbiraj'),
(718, 63, 'Rupani'),
(719, 63, ' Saptakoshi'),
(720, 63, ' Shambhunath'),
(721, 63, 'Surunga'),
(722, 63, 'Tilathi Koiladi'),
(723, 63, ' Tirahut'),
(724, 63, ' Walan Bihul'),
(725, 64, 'Bagmati'),
(726, 64, ' Balara'),
(727, 64, 'Barahathawa'),
(728, 64, '  Basbariya'),
(729, 64, ' Bishnu'),
(730, 64, 'Brahmapuri'),
(731, 64, 'Chakraghatta '),
(732, 64, '  Chandranagar'),
(733, 64, '  Dhankaul'),
(734, 64, ' Godaita'),
(735, 64, 'Haripur'),
(736, 64, ' Ishworpur'),
(737, 64, '   Kabilasi'),
(738, 64, '  Kaudena'),
(739, 64, 'Lalbandi'),
(740, 64, ' Malangawa'),
(741, 64, '   Parsa'),
(742, 64, '  Ramnagar'),
(743, 65, 'Dudhouli'),
(744, 65, 'Ghanglekh'),
(745, 65, ' Golanjor'),
(746, 65, 'Hariharpurgadhi'),
(747, 65, 'Kamalamai'),
(748, 65, 'Marin'),
(749, 65, 'Phikkal'),
(750, 65, 'Sunkoshi'),
(751, 65, 'Tinpatan'),
(752, 66, ' Balefi'),
(753, 66, 'Barhabise'),
(754, 66, 'Bhotekoshi'),
(755, 66, 'Chautara Sangachokga'),
(756, 66, ' Helambu'),
(757, 66, 'Indrawati'),
(758, 66, 'Jugal'),
(759, 66, ' Lisankhu Pakhar'),
(760, 66, ' Melamchi'),
(761, 66, 'Panchpokhari Thangpa'),
(762, 66, 'Sunkoshi'),
(763, 66, ' Tripurasundari'),
(764, 67, ' Arnama'),
(765, 67, 'Aurahi'),
(766, 67, 'Bariyarpatti'),
(767, 67, 'Bhagawanpur '),
(768, 67, 'Bishnupur'),
(769, 67, 'Dhangadhimai'),
(770, 67, 'Golbazar'),
(771, 67, 'Kalyanpur'),
(772, 67, ' Karjanha'),
(773, 67, 'Lahan'),
(774, 67, 'Laxmipur patari '),
(775, 67, 'Mirchaiya'),
(776, 67, 'Naraha'),
(777, 67, ' Navarajpur'),
(778, 67, 'Sakhuwanankarkatti'),
(779, 67, 'Siraha'),
(780, 67, 'Sukhipur'),
(781, 68, 'Dudhkaushika'),
(782, 68, ' Dudhkoshi'),
(783, 68, 'Khumbu Pasanglahmu'),
(784, 68, ' Likhupike'),
(785, 68, 'Mahakulung'),
(786, 68, 'Nechasalyan'),
(787, 68, 'Solududhakunda'),
(788, 68, 'Sotang'),
(789, 69, 'Barah'),
(790, 69, ' Barju'),
(791, 69, 'Bhokraha'),
(792, 69, 'Dewanganj'),
(793, 69, ' Dharan'),
(794, 69, 'Duhabi'),
(795, 69, 'Gadhi'),
(796, 69, ' Harinagara'),
(797, 69, 'Inarwa'),
(798, 69, 'Itahari'),
(799, 69, ' Koshi'),
(800, 69, 'Ramdhuni'),
(801, 70, 'Barahtal'),
(802, 70, 'Bheriganga'),
(803, 70, 'Birendranagar'),
(804, 70, ' Chaukune'),
(805, 70, 'Chingad'),
(806, 70, ' Gurbhakot'),
(807, 70, 'Lekbesi'),
(808, 70, 'Panchpuri'),
(809, 70, 'Simta'),
(810, 71, 'Aandhikhola'),
(811, 71, ' Arjunchaupari'),
(812, 71, 'Bhirkot'),
(813, 71, 'Biruwa'),
(814, 71, ' Chapakot'),
(815, 71, 'Galyang'),
(816, 71, 'Harinas'),
(817, 71, 'Kaligandagi'),
(818, 71, 'Phedikhola'),
(819, 71, 'Putalibazar'),
(820, 71, 'Waling'),
(821, 72, ' Anbukhaireni'),
(822, 72, 'Bandipur'),
(823, 72, 'Bhanu'),
(824, 72, 'Bhimad'),
(825, 72, 'Byas'),
(826, 72, 'Devghat'),
(827, 72, ' Ghiring'),
(828, 72, 'Myagde'),
(829, 72, 'Rhishing'),
(830, 72, ' Shuklagandaki'),
(831, 73, ' Aathrai Tribeni'),
(832, 73, ' Maiwakhola'),
(833, 73, ' Meringden'),
(834, 73, ' Mikwakhola'),
(835, 73, 'Phaktanglung'),
(836, 73, ' Phungling'),
(837, 73, '  Sidingba'),
(838, 73, 'Sirijangha'),
(839, 73, 'Yangwarak'),
(840, 74, 'Aathrai'),
(841, 74, ' Chhathar'),
(842, 74, 'Laligurans'),
(843, 74, '  Menchayam'),
(844, 74, ' Myanglung'),
(845, 74, 'Phedap'),
(846, 75, 'Belaka'),
(847, 75, 'Chaudandigadhi'),
(848, 75, ' Katari'),
(849, 75, 'Rautamai'),
(850, 75, 'Sunkoshi'),
(851, 75, 'Tapli'),
(852, 75, 'Triyuga'),
(853, 75, 'Udayapurgadhi');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `status`) VALUES
(1, 'achham', '1'),
(2, 'arghakhanchi', '1'),
(3, 'baglung', '1'),
(4, 'baitadi', '1'),
(5, 'bajhang', '1'),
(6, 'bajura', '1'),
(7, 'banke', '1'),
(8, 'bara', '1'),
(9, 'bardiya', '1'),
(10, 'bhaktapur', '1'),
(11, 'bhojpur', '1'),
(12, 'chitwan', '1'),
(13, 'dadeldhura', '1'),
(14, 'dailekh', '1'),
(15, 'dang deukhuri', '1'),
(16, 'darchula', '1'),
(17, 'dhading', '1'),
(18, 'dhankuta', '1'),
(19, 'dhanusa', '1'),
(20, 'dholkha', '1'),
(21, 'dolpa', '1'),
(22, 'doti', '1'),
(23, 'gorkha', '1'),
(24, 'gulmi', '1'),
(25, 'humla', '1'),
(26, 'ilam', '1'),
(27, 'jajarkot', '1'),
(28, 'jhapa', '1'),
(29, 'jumla', '1'),
(30, 'kailali', '1'),
(31, 'kalikot', '1'),
(32, 'kanchanpur', '1'),
(33, 'kapilvastu', '1'),
(34, 'kaski', '1'),
(35, 'kathmandu', '1'),
(36, 'kavrepalanchok', '1'),
(37, 'khotang', '1'),
(38, 'lalitpur', '1'),
(39, 'lamjung', '1'),
(40, 'mahottari', '1'),
(41, 'makwanpur', '1'),
(42, 'manang', '1'),
(43, 'morang', '1'),
(44, 'mugu', '1'),
(45, 'mustang', '1'),
(46, 'myagdi', '1'),
(47, 'East-nawalparasi', '1'),
(48, 'nuwakot', '1'),
(49, 'okhaldhunga', '1'),
(50, 'palpa', '1'),
(51, 'panchthar', '1'),
(52, 'parbat', '1'),
(53, 'parsa', '1'),
(54, 'pyuthan', '1'),
(55, 'ramechhap', '1'),
(56, 'rasuwa', '1'),
(57, 'rautahat', '1'),
(58, 'rolpa', '1'),
(59, 'East-rukum', '1'),
(60, 'rupandehi', '1'),
(61, 'salyan', '1'),
(62, 'sankhuwasabha', '1'),
(63, 'saptari', '1'),
(64, 'sarlahi', '1'),
(65, 'sindhuli', '1'),
(66, 'sindhupalchok', '1'),
(67, 'siraha', '1'),
(68, 'solukhumbu', '1'),
(69, 'sunsari', '1'),
(70, 'surkhet', '1'),
(71, 'syangja', '1'),
(72, 'tanahu', '1'),
(73, 'taplejung', '1'),
(74, 'terhathum', '1'),
(75, 'udayapur', '1'),
(76, 'west-Nawalparasi', '1'),
(77, 'West-Rukum', '1');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `user_id`, `image`, `firstname`, `lastname`, `gender`, `dob`, `blood_id`, `district_id`, `city_id`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '1546698030.AVATAR.jpg', 'kapil', 'Acharya', 'Male', '1996-11-26', 7, 34, 3, '9846855467', 'barshat126@gmail.com', 1, '2019-01-05 08:35:30', '2019-01-05 08:35:30'),
(2, 4, '1546700494.avatar_user.jpg', 'Aryan', 'Katwal', 'Male', '1994-12-15', 8, 35, 346, '9861777788', 'aryankatwal@gmail.com', 1, '2019-01-05 09:16:34', '2019-01-05 09:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fullname`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'kapil Acharya', '9861777788', 'barshat126@gmail.com', 'hello leepak', '2019-01-06 03:24:32', '2019-01-06 03:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_12_28_180631_create_messages_table', 1),
(8, '2018_12_28_180711_create_donors_table', 1),
(9, '2019_01_05_134807_create_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(3, 1, 'eSHbwbhkwQoI53wrJd9cvl4mWsbqZEiP', '2019-01-05 10:55:49', '2019-01-05 10:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `patientname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `diseases` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `patientname`, `gender`, `blood_id`, `district_id`, `city_id`, `diseases`, `amount`, `date`, `hospital`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kapil Acharya', 'Male', 5, 12, 110, 'heart problem', '3print', '2019-01-18', 'Gandaki hospital', '9846855467', 1, '2019-01-05 10:54:44', '2019-01-05 14:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2019-01-05 08:07:57', '2019-01-05 08:07:57'),
(2, 'user', 'User', NULL, '2019-01-05 08:07:57', '2019-01-05 08:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-01-05 08:07:57', '2019-01-05 08:07:57'),
(2, 2, '2019-01-05 08:15:39', '2019-01-05 08:15:39'),
(3, 2, '2019-01-05 08:35:30', '2019-01-05 08:35:30'),
(4, 2, '2019-01-05 09:16:34', '2019-01-05 09:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2019-01-05 08:07:05', '2019-01-05 08:07:05'),
(2, NULL, 'ip', '127.0.0.1', '2019-01-05 08:07:05', '2019-01-05 08:07:05'),
(3, NULL, 'global', NULL, '2019-01-05 08:07:20', '2019-01-05 08:07:20'),
(4, NULL, 'ip', '127.0.0.1', '2019-01-05 08:07:20', '2019-01-05 08:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@bloodfinder.com', '$2y$10$R8w31.VOv0aIrcAWN6EjHOV8Pqq1Rwn2Wi4RycjcDoMW7Tn9kWfiS', NULL, '2019-01-06 04:09:12', 'leepak', NULL, '2019-01-05 08:07:57', '2019-01-06 04:09:12'),
(3, 'barshat126@gmail.com', '$2y$10$Y7NJ6rFdnYhEPW/F7yjjJeolLHGOqG.DZ4sQH5K7VsJUNnNGWnnie', NULL, '2019-01-06 11:50:00', 'kapil', 'Acharya', '2019-01-05 08:35:30', '2019-01-06 11:50:00'),
(4, 'aryankatwal@gmail.com', '$2y$10$XhukeLNgJgx4uiVq8FytmOZYmKru/xyHDPxkTZobfnDAv.gUYD/AK', NULL, '2019-01-06 11:21:22', 'Aryan', 'Katwal', '2019-01-05 09:16:34', '2019-01-06 11:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_district` (`districtID`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `Fk_district` FOREIGN KEY (`districtID`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
