-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 04:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fantasygaadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `County` text NOT NULL,
  `position` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `Next Match` text NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID`, `Name`, `County`, `position`, `Rating`, `Next Match`, `Score`) VALUES
(101, 'Colm Lavin', 'Roscommon', 'GK', 5, 'Mayo', 0),
(102, 'David Murray', 'Roscommon', 'FB', 5, 'Mayo', 0),
(103, 'Niall McInerney', 'Roscommon', 'FB', 5, 'Mayo', 0),
(104, 'Sean McDermott', 'Roscommon', 'FB', 5, 'Mayo', 0),
(105, 'John McManus', 'Roscommon', 'HB', 5, 'Mayo', 0),
(106, 'Sean Mullooly', 'Roscommon', 'HB', 5, 'Mayo', 0),
(107, 'Conor Devaney', 'Roscommon', 'HB', 5, 'Mayo', 0),
(108, 'Fintan Cregg', 'Roscommon', 'M', 5, 'Mayo', 0),
(109, 'Enda Smith', 'Roscommon', 'M', 5, 'Mayo', 0),
(110, 'Tadhg O\'Rourke', 'Roscommon', 'HF', 5, 'Mayo', 0),
(111, 'Tadhg O\'Rourke', 'Roscommon', 'HF', 5, 'Mayo', 0),
(112, 'Ciarain Murtagh', 'Roscommon', 'HF', 5, 'Mayo', 0),
(113, 'Brian Stack', 'Roscommon', 'HF', 5, 'Mayo', 0),
(114, 'Niall Kilroy', 'Roscommon', 'HF', 5, 'Mayo', 0),
(115, 'Cian Connolly', 'Roscommon', 'FF', 5, 'Mayo', 0),
(116, 'Diarmuid Murtagh', 'Roscommon', 'FF', 5, 'Mayo', 0),
(201, 'David Clarke', 'Mayo', 'GK', 5, 'Roscommon', 0),
(202, 'Brendan Harrison', 'Mayo', 'FB', 5, 'Roscommon', 0),
(203, 'Ger Cafferkey', 'Mayo', 'FB', 5, 'Roscommon', 0),
(204, 'Keith Higgins', 'Mayo', 'FB', 5, 'Roscommon', 0),
(205, 'Patrick Durcan', 'Mayo', 'HB', 5, 'Roscommon', 0),
(206, 'Chris Barrett', 'Mayo', 'HB', 5, 'Roscommon', 0),
(207, 'Colm Boyle', 'Mayo', 'HB', 5, 'Roscommon', 0),
(208, 'Seamus O\'Shea', 'Mayo', 'M', 5, 'Roscommon', 0),
(209, 'Lee Keegan', 'Mayo', 'M', 5, 'Roscommon', 0),
(210, 'Kevin McLoughlin', 'Mayo', 'HF', 5, 'Roscommon', 0),
(211, 'Aidan O\'Shea', 'Mayo', 'HF', 5, 'Roscommon', 0),
(212, 'Diarmuid O\'Connor', 'Mayo', 'HF', 5, 'Roscommon', 0),
(213, 'Jason Doherty', 'Mayo', 'FF', 5, 'Roscommon', 0),
(214, 'Cillian O\'Connor', 'Mayo', 'FF', 5, 'Roscommon', 0),
(215, 'Andy Moran', 'Mayo', 'FF', 5, 'Roscommon', 0),
(301, 'Brian Kelly', 'Kerry', 'GK', 5, 'Galway', 0),
(302, 'Shane Enright', 'Kerry', 'FB', 5, 'Galway', 0),
(303, 'Mark Griffin', 'Kerry', 'FB', 5, 'Galway', 0),
(304, 'Fionn Fitzgerald', 'Kerry', 'FB', 5, 'Galway', 0),
(305, 'Tadhg Morley', 'Kerry', 'HB', 5, 'Galway', 0),
(306, 'Peter Crowley', 'Kerry', 'HB', 5, 'Galway', 0),
(307, 'Paul Murphy', 'Kerry', 'HB', 5, 'Galway', 0),
(308, 'David Moran', 'Kerry', 'M', 5, 'Galway', 0),
(309, 'Jack Barry', 'Kerry', 'M', 5, 'Galway', 0),
(310, 'Michael Geaney', 'Kerry', 'HF', 5, 'Galway', 0),
(311, 'Johnny Buckley', 'Kerry', 'HF', 5, 'Galway', 0),
(312, 'Donnchadh Walsh', 'Kerry', 'HF', 5, 'Galway', 0),
(313, 'Paul Geaney', 'Kerry', 'FF', 5, 'Galway', 0),
(314, 'Kieran Donaghy', 'Kerry', 'FF', 5, 'Galway', 0),
(315, 'James O\'Donoghue', 'Kerry', 'FF', 5, 'Galway', 0),
(401, 'Bernard Power', 'Galway', 'GK', 5, 'Galway', 0),
(402, 'Eoghan Kerin', 'Galway', 'HB', 5, 'Kerry', 0),
(403, 'David Walsh', 'Galway', 'HB', 5, 'Kerry', 0),
(404, 'Declan Kyne', 'Galway', 'FB', 5, 'Kerry', 0),
(405, 'Gary O\'Donnell', 'Galway', 'HB', 5, 'Kerry', 0),
(406, 'Gareth Bradshaw', 'Galway', 'HB', 5, 'Kerry', 0),
(407, 'Liam Silke', 'Galway', 'HB', 5, 'Kerry', 0),
(408, 'Paul Conroy', 'Galway', 'M', 5, 'Kerry', 0),
(409, 'Thomas Flynn', 'Galway', 'M', 5, 'Kerry', 0),
(410, 'Johnny Heaney', 'Galway', 'HF', 5, 'Kerry', 0),
(411, 'Michael Daly', 'Galway', 'HF', 5, 'Kerry', 0),
(412, 'Shane Walsh', 'Galway', 'HF', 5, 'Kerry', 0),
(413, 'Ian Burke', 'Galway', 'FF', 5, 'Kerry', 0),
(414, 'Damien Comer', 'Galway', 'FF', 5, 'Kerry', 0),
(415, 'Sean Armstrong', 'Galway', 'FF', 5, 'Kerry', 0),
(501, 'Naill Morgan', 'Tyrone', 'GK', 5, 'Armagh', 0),
(502, 'Aidan McCrory', 'Tyrone', 'FB', 5, 'Armagh', 0),
(503, 'Ronan McNamee', 'Tyrone', 'FB', 5, 'Armagh', 0),
(504, 'Cathal McCarron', 'Tyrone', 'FB', 5, 'Armagh', 0),
(505, 'Tiernan McCann', 'Tyrone', 'HB', 5, 'Armagh', 0),
(506, 'Padraig Hampsey', 'Tyrone', 'HB', 5, 'Armagh', 0),
(507, 'Peter Harte', 'Tyrone', 'HB', 5, 'Armagh', 0),
(508, 'Colm Cavanagh', 'Tyrone', 'M', 5, 'Armagh', 0),
(509, 'Declan McClure', 'Tyrone', 'M', 5, 'Armagh', 0),
(510, 'Mattie Donnelly', 'Tyrone', 'HF', 5, 'Armagh', 0),
(511, 'Naill Sludden', 'Tyrone', 'HF', 5, 'Armagh', 0),
(512, 'Conal McCann', 'Tyrone', 'M', 10, 'Armagh', 100),
(513, 'Mark Bradley', 'Tyrone', 'FF', 5, 'Armagh', 0),
(514, 'Sean Cavanagh', 'Tyrone', 'FF', 5, 'Armagh', 0),
(515, 'Kieran McGeary', 'Tyrone', 'FF', 5, 'Armagh', 0),
(601, 'Blaine Hughes', 'Armagh', 'GK', 5, 'Tyrone', 0),
(602, 'James Morgan', 'Armagh', 'FB', 5, 'Tyrone', 0),
(603, 'Charlie Vernon', 'Armagh', 'FB', 0, 'Tyrone', 0),
(604, 'Paul Hughes', 'Armagh', 'FB', 5, 'Tyrone', 0),
(605, 'Brendan Donaghy', 'Armagh', 'HB', 5, 'Tyrone', 0),
(606, 'Mark Shields', 'Armagh', 'HB', 5, 'Tyrone', 0),
(607, 'Joe McElroy', 'Armagh', 'HB', 5, 'Tyrone', 0),
(608, 'Stephen Sheridan', 'Armagh', 'M', 5, 'Tyrone', 0),
(609, 'Naill Grimley', 'Armagh', 'M', 5, 'Tyrone', 0),
(610, 'Rory Grugan', 'Armagh', 'HF', 5, 'Tyrone', 0),
(611, 'Ciaran O\'Hanlon', 'Armagh', 'HF', 5, 'Tyrone', 0),
(612, 'Aidan Forker', 'Armagh', 'HF', 5, 'Tyrone', 0),
(613, 'Jamie Clarke', 'Armagh', 'FF', 5, 'Tyrone', 0),
(614, 'Gavin McParland', 'Armagh', 'FF', 5, 'Tyrone', 0),
(615, 'Stefan Campbell', 'Armagh', 'FF', 5, 'Tyrone', 0),
(701, 'Rory Beggan', 'Monagahan', 'GK', 5, 'Dublin', 0),
(702, 'Fintan Kelly', 'Monaghan', 'FB', 5, 'Dublin', 0),
(703, 'Drew Wylie', 'Monagahan', 'FB', 5, 'Dublin', 0),
(704, 'Ryan Wylie', 'Monagahan', 'FB', 5, 'Dublin', 0),
(705, 'Colin Walshe', 'Monagahan', 'HB', 5, 'Dublin', 0),
(706, 'Kieran Duffy', 'Monaghan', 'HB', 5, 'Dublin', 0),
(707, 'Karl O\'Connel', 'Monagahan', 'HB', 5, 'Dublin', 0),
(708, 'Kieran Hughes', 'Monagahan', 'M', 5, 'Dublin', 0),
(709, 'Darren Hughes', 'Monagahan', 'M', 5, 'Dublin', 0),
(710, 'Gavin Doogan', 'Monaghan', 'HF', 5, 'Dublin', 0),
(711, 'Dessie Ward', 'Monagahan', 'HF', 5, 'Dublin', 0),
(712, 'Shane Carey', 'Monagahan', 'HF', 5, 'Dublin', 0),
(713, 'Ryan McAnespie', 'Monagahan', 'FF', 5, 'Dublin', 0),
(714, 'Jack McCarron', 'Monaghan', 'FF', 5, 'Dublin', 0),
(715, 'Conor McManus', 'Monagahan', 'FF', 5, 'Dublin', 0),
(801, 'Stephen Cluxton', 'Dublin', 'GK', 5, 'Monaghan', 0),
(802, 'Phillip McMahon', 'Dublin', 'HB', 5, 'Monagahan', 0),
(803, 'Cian O\'Sullivan', 'Dublin', 'HB', 5, 'Monagahan', 0),
(804, 'Michael Fitzsimons', 'Dublin', 'FB', 5, 'Monaghan', 0),
(805, 'Johny Cooper', 'Dublin', 'HB', 5, 'Monaghan', 0),
(806, 'John Small', 'Dublin', 'HB', 5, 'Monaghan', 0),
(807, 'Eric Lowndes', 'Dublin', 'HB', 5, 'Monaghan', 0),
(808, 'Brian Fenton', 'Dublin', 'M', 5, 'Monaghan', 0),
(809, 'James McCarthy', 'Dublin', 'M', 5, 'Monaghan', 0),
(810, 'Ciaran Kilkenny', 'Dublin', 'HF', 5, 'Monaghan', 0),
(811, 'Con O\'Callaghan', 'Dublin', 'HF', 5, 'Monaghan', 0),
(812, 'Jack McCaffrey', 'Dublin', 'HF', 5, 'Monaghan', 0),
(813, 'Paul Mannion', 'Dublin', 'FF', 5, 'Monaghan', 0),
(814, 'Paddy Andrews', 'Dublin', 'FF', 5, 'Monaghan', 0),
(815, 'Dean Rock', 'Dublin', 'FF', 5, 'Monaghan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `score`) VALUES
(19, 'Fabio Santos', 'fabio@fabio.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 4522),
(23, 'test', '1@1.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0),
(24, 'tet tet', '2@2.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0),
(26, 'Ralf', 'rbierig@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0),
(27, '$name', '$email', '$password', 11),
(28, 'fabio santos', 'test@test2.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0),
(29, 'Fabio Test', 'fabio@fabio2t.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD KEY `score` (`score`),
  ADD KEY `score_2` (`score`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
