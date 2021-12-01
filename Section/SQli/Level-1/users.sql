-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 06:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entries`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `accountHname` varchar(255) NOT NULL,
  `cardNo` varchar(16) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `cardType` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `accountHname`, `cardNo`, `mobileNo`, `cardType`, `email`, `pass`, `address`) VALUES
(1, 'Shriraj', '2675356291270936', '9910439195', 'Master_Card', 'shriraj28@hotmail.com', '9910439195', 'Gala No. G 4, Laxmi Wooen Mills Estae, Shakti Mill Lane, Off.harines Raod, Mahalaxmi Mumbai, Maharashtra, 400011'),
(2, 'jacynthe_lemke', '7626187920237592', '9910439196', 'Master_Card', 'jacynthe_lemke@yahoo.com', '9910439196', 'Patel Estate Road, Jogeshwari(w)Mumbai, Maharashtra, 400102,02226782896'),
(3, 'jaylen', '1897361293194784', '9910439197', 'Visa-Card', 'jaylen.bauch@yahoo.com', '9910439197', 'Dlta Complex, Africa Avenue, Safdarjung Enclave Delhi, Delhi, 110029 01126179062'),
(4, 'easter', '3036106320615547', '9910439198', 'Visa-Card', 'easter_abbott@hotmail.com', '9910439198', 'Dlta Complex, Africa Avenue, Safdarjung Enclave Delhi, Delhi, 110029 01126179062'),
(5, 'gertrude', '3569374525474430', '9910439199', 'Visa-Card', 'gertrude_oconnell@yahoo.com', '9910439199', 'Shop No 1, Himalaya Society, Asalfa, Ghatkopar(w) Mumbai, Maharashtra, 400084 02225141692'),
(6, 'asia', '8868843149206892', '9910439199', 'Visa-Card', 'asia_ullrich21@gmail.com', '9910439200', 'Dlta Complex, Africa Avenue, Delhi, 110029 01126179062'),
(7, 'frances', '8649504871727226', '9910439201', 'RUP-PAY', 'frances.towne83@gmail.com', '9910439201', '64,1st Floor, Catholic Centre, Armenain St, Parrys Chennai, Tamil Nadu, 600001 044 - 25390091'),
(8, 'alva', '8061594909177115', '9910439202', 'RUP-PAY', 'alva74@gmail.com', '9910439202', 'Midc, Chinchwad Pune, Maharashtra, 411019 27478523'),
(9, 'gina', '1776736563948129', '9910439203', 'RUP-PAY', 'gina.johns98@gmail.com', '9910439203', 'D5, 112, Avadh Complex, Vikas Marg Extn, Laxmi Nagar Delhi, Delhi, 110092 01122430288'),
(10, 'shana', '4908850963856115', '9910439204', 'RUP-PAY', 'shana_kerluke63@yahoo.com', '9910439204', 'Wz-g-48-49, School Road, Uttam Nagar Bangalore, Karnataka, 110059 01125635442'),
(11, 'hayden', '3848103044447631', '9910439205', 'Master', 'hayden.barton@yahoo.com', '9910439205', 'Dugri Road Ludhiana, Punjab, 141001 01612497603'),
(12, 'ettie', '9596217857418597', '9910439206', 'Master', 'ettie_lubowitz@gmail.com', '9910439206', '13/14, 5th Cross 2nd Main, Kalasipalyam Bangalore, Karnataka, 560002 41224583'),
(13, 'dion', '4388318964333860', '9910439207', 'Master', 'dion70@yahoo.com', '9910439207', 'W-38/39, Midc Phase Ii, Dombivli(e) Mumbai, Maharashtra, 421204 952512871354'),
(14, 'rosa\r\n', '8888977643030925', '9910439208', 'Visa', 'rosa.gislason26@gmail.com', '9910439208', '11krishnappalyt2ndstgrmvsanja-94, Sanjaynagar Bangalore, Karnataka, 560094 23411045'),
(15, 'anastasia', '2059469224775481', '9910439209', 'Visa', 'anastasia81@hotmail.com', '9910439209', 'O Gandhi Nagar, Drainnel Chanel Road, Opp.indstl.estate, Worli Mumbai, Maharashtra, 400018 02224946675'),
(16, 'belle', '9893680210511085', '9910439210', 'Visa', 'belle49@hotmail.com', '9910439210', '11krishnappalyt2ndstgrmvsanja-94, Sanjaynagar Bangalore, Karnataka, 560094 23411045'),
(17, 'elody', '4646258628472406', '9910439211', 'Visa', 'elody.reinger@yahoo.com', '9910439211', '36, Laxmi Industrial Estate, Lower Parel (west) Mumbai, Maharashtra, 400013 02224928107'),
(18, 'fermin', '9990813110340391', '9910439212', 'Visa', 'fermin_reichert72@gmail.com', '9910439212', '1, Ground Floor, Haji Habib Bldg, Dr.b.a.road, Opp Fire Bridage, Dadar(e) Mumbai, Maharashtra, 400014 02224113606'),
(19, 'nicole', '3693380566400462', '9910439213', 'Visa', 'nicole87@gmail.com', '9910439213', 'Near Siddhi Vinayak Temple, Dandia Bazar Vadodara, Gujarat, 390001 02652431807'),
(20, 'earnestine', '7756987282996027', '9910439214', 'Visa', 'earnestine17@hotmail.com', '9910439214', '152, Narayandhuru Street, Mandvi Mumbai, Maharashtra, 400003 02223438467'),
(21, 'leanne', '4132159914910758', '9910439215', 'Visa', 'leanne.hirthe77@hotmail.com', '9910439215', '1757 C/7, Guru Ram Dass Marg Delhi, Delhi, 110019 26020618'),
(22, 'jarrett', '3048042961042220', '9910439216', 'Visa', 'jarrett97@yahoo.com', '9910439216', 'Shop No 4, Shyam Bhavan, B.p. Road, Bhayander (e) Mumbai, Maharashtra, 401105 00222819657'),
(23, 'arlie', '5529028380409196', '9910439217', 'Visa', 'arlie.carter80@yahoo.com', '9910439217', '1/11, 12, Sonawala Bldg, Khetwadi Cross Lane, Girgaon Mumbai, Maharashtra, 400004 02223863999'),
(24, 'robert', '4544993605029435', '9910439218', 'Master', 'robert.kuhn@gmail.com', '9910439218', '20, Wadala Udyog Bhavan, Near Telephone Exchange, Wadala Mumbai, Maharashtra, 400031 02224186461'),
(25, 'kameron', '6743146942264128', '9910439219', 'Master', 'kameron37@gmail.com', '9910439219', '90, Arunachala St Chennai, Tamil Nadu, 600002 04428533871'),
(26, 'tyrel', '7928886838333804', '9910439220', 'Master', 'tyrel.tromp7@hotmail.com', '9910439220', '120/122, Nawab Building, Janjikar Stret, Chakla, Mandvi Mumbai, Maharashtra, 400003 02223429218'),
(27, 'johann', '2689068790333732', '9910439221', 'Master', 'johann.purdy@gmail.com', '9910439221', '15, 2 Nd Flr, Shanti Centre, Sector 17, Vashi, Vashi Mumbai, Maharashtra, 400705 02227891197'),
(28, 'gloria', '1526587960410487', '9910439222', 'RUP-PAY', 'gloria45@gmail.com', '9910439222', 'Shp No-25, Hazari Baug Bldg, Station Rd, Tagore Nagar, Vikhroli (east) Mumbai, Maharashtra, 400083 02225781801'),
(29, 'napoleon', '6862479392830178', '9910439223', 'RUP-PAY', 'napoleon_ryan19@hotmail.com', '9910439223', 'Ram Nagar, Tel Mill Marg, Pahar Ganj Delhi, Delhi, 110055 01123610468'),
(30, 'ciara', '8154925749945935', '9910439224', 'RUP-PAY', 'ciara_zboncak@yahoo.com', '9910439224', '16, Smie, Mathura Road, Faridabad, Faridabad Delhi, Delhi, 121001 01292261221'),
(31, 'modesta', '7081997825349020', '9910439225', 'RUP-PAY', 'modesta.hayes5@yahoo.com', '9910439225', 'Gf-16/17, Panorama Complex, R C Dutt Road, R C Dutt Road Vadodara, Gujarat, 390007 02652331365'),
(32, 'kaitlin', '7962120731190567', '9910439226', 'RUP-PAY', 'kaitlin.lemke@yahoo.com', '9910439226', 'A Wing, Ramjas Apt, Devidas Road, B/h Raghunath Tower ,borivali, Mandapeshwar Mumbai, Maharashtra, 400103 02228938948'),
(33, 'felicity', '6406474858260664', '9910439227', 'RUP-PAY', 'felicity.rosenbaum@hotmail.com', '9910439227', 'A-25, Assam Mansion Jaipur, Rajasthan, 302003 01412641543'),
(34, 'eve', '5289607010137726', '9910439228', 'VISA', 'eve_fisher@gmail.com', '9910439228', '5-1-521, Ranigunj Hyderabad, Andhra Pradesh, 500003 04027712723'),
(35, 'matteo', '7520290994510378', '9910439229', 'VISA', 'matteo_lind62@gmail.com', '9910439229', 'T5/230, Mangolpuri Indl Area Delhi, Delhi, 110083 01127917100'),
(36, 'meghan', '8604676097597853', '9910439230', 'VISA', 'meghan_kohler75@yahoo.com', '9910439230', '28, Pt M M Road, Opp Haji Ali, Tardeo Mumbai, Maharashtra, 400034 01600229911'),
(37, 'mathilde', '8837937874190988', '9910439231', 'VISA', 'mathilde_schaden@yahoo.com', '9910439231', '20/921, Gtb Nagar, Sion (e) Mumbai, Maharashtra, 400022 02224012921'),
(38, 'zander', '3843713809799324', '9910439232', 'MASTER', 'zander_zboncak@gmail.com', '9910439232', '8a, Gali No 9, Anand Parbat Indl Area Delhi, Delhi, 110005 01125710348'),
(39, 'emilie', '2712202175174171', '9910439233', 'MASTER', 'emilie_altenwerth@gmail.com', '9910439233', '4, Zaver Niwas, St. Paul Street, Dadar (east) Mumbai, Maharashtra, 400014 02224126719'),
(40, 'tremaine', '1170408516621964', '9910439234', 'MASTER', 'tremaine_kessler5@gmail.com', '9910439234', '8, Kennent Lane, Egmore Chennai, Tamil Nadu, 600008 04428254333'),
(41, 'ethel', '3081022975646379', '9910439235', 'MASTER', 'ethel.bartell70@hotmail.com', '9910439235', '3rd Floor, 24, Fida Mansion, 4-bibijan St,off Nagdevi, Worli Mumbai, Maharashtra, 400025 02223450460'),
(42, 'pete', '4491706085394154', '9910439236', 'RUP-PAY', 'pete73@yahoo.com', '9910439236', 'Gf-ii/b, Gf-11/b, \'sneh Sudha \', Opp. Sursagar, Dandia Bazar Vadodara, Gujarat, 390001 02652406061'),
(43, 'wilhelmine', '8554983852227034', '9910439237', 'RUP-PAY', 'wilhelmine82@yahoo.com', '9910439237', '2nd Floor, Plot No 236/13, Tekchand Niwas, Kewal Anand Chs., Opp. G.t.b.n. Station, Sion Mumbai, Maharashtra, 400022'),
(44, 'judson', '8363344397258902', '9910439238', 'RUP-PAY', 'judson44@hotmail.com', '9910439238', '89-d, Govt Indl Estate, Charkop, Po Box No. 7668, Kandivli(w) Mumbai, Maharashtra, 400067 02228683017'),
(45, 'kolby', '1765713338510876', '9910439239', 'RUP-PAY', 'kolby78@gmail.com', '9910439239', '15 Vigfin House, Yogambal Street T Nagar Chennai, Tamil Nadu, 600017 44 - 28225847'),
(46, 'melissa', '3508041135934150', '9910439240', 'MASTER', 'melissa.klocko86@gmail.com', '9910439240', '3rd Floor, 215, Kalbadevi Road, Kalbadevi Mumbai, Maharashtra, 400002 02222013630'),
(47, 'maximus', '7356599076376150', '9910439241', 'MASTER', 'maximus_lynch@gmail.com', '9910439241', '5/34, Luz Church Avenue, Mylapore Chennai, Tamil Nadu, 600004 044 - 24983018'),
(48, 'jaycee', '3508122691042740', '9910439242', 'MASTER', 'jaycee.hermann@yahoo.com', '9910439242', '28, Ghanshyam Indl Estate, Mahakali Caves Road, Andheri(e) Mumbai, Maharashtra, 400069 02256924925'),
(49, 'lyda', '4280370034927425', '9910439243', 'MASTER', 'lyda.graham60@yahoo.com', '9910439243', 'Near Dashbhuja Ganapati, Parvati Pune, Maharashtra, 411009 02024220068'),
(50, 'erik', '1443860892231834', '9910439244', 'RUP-PAY', 'erik_beahan50@hotmail.com', '9910439244', 'Shop No 6, Labh Ashish, Dadabhai Road, Vile Parle (west) Mumbai, Maharashtra, 400056 02226283561');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cardNo` (`cardNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
