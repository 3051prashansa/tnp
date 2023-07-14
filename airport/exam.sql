-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 04:45 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(5000) NOT NULL,
  `op1` varchar(500) NOT NULL,
  `op2` varchar(500) NOT NULL,
  `op3` varchar(500) NOT NULL,
  `op4` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ID`, `question`, `op1`, `op2`, `op3`, `op4`, `ans`, `type`) VALUES
(1, '8888+888+88+8', '9872', '9871', '9873', '9874', '9872', 'aptitute'),
(2, '8597 - ?=7429 - 4358', '5592', '5562', '5572', '5526', '5526', 'aptitute'),
(3, 'which of the following are not a prime number?', '241', '337', '391', '571', '391', 'aptitute'),
(4, 'which of the following numbers is divisible by 3?', '541326', '5967013', 'both ', 'none of these', '541326', 'aptitute'),
(5, 'the total number of even prime number is:', '0', '1', '2', 'none of these', '1', 'aptitute'),
(6, 'the L.C.M of 148 & 185', '680', '740', '2960', '3700', '740', 'aptitute'),
(7, 'find the cube root of 2744', '14', '13', '12', '11', '14', 'aptitute'),
(8, 'find the average of first 40 natural number.', '20.1', '20.3', '20.7', '20.5', '20.5', 'aptitute'),
(9, 'if 120 is 20% of a number , then 120% of that number will be:', '20', '120', '360', '720', '720', 'aptitute'),
(10, 'how many word can be formed by using all letter of the word ''BIHAR''?', '120', '130', '110', '100', '120', 'aptitute'),
(11, 'find the sum of all odd numbers upto 100', '2400', '2500', '2600', '2700', '2500', 'aptitute'),
(12, '5005 -5000 + 10', '4501', '4502', '4504', '4505', '4505', 'aptitute'),
(13, 'the average of first five multiple of 3 is', '3', '9', '12', '15', '9', 'aptitute'),
(14, 'find the area of a square , one of whose diagonals is 3.8 m long.', '7.22', '7.21', '7.20', '7.23', '7.22', 'aptitute'),
(15, 'abc', 'a', 'b', 'c', 'd', 'a', 'aptitute'),
(17, 'J2SE Stand For ?...', 'Java 2 Simple Edition', 'Java 2 Solar Edition', 'Java 2 Standered Edition', 'Java 2 Soon Edition', 'Java 2 Standered Edition', 'tech'),
(18, 'Which bitwise operator is suitable for turning off a particular bit in a number?', '&& operator', '& operator', '|| operator', '! operator', '& operator', 'tech'),
(19, 'Which of the following is the correct usage of conditional operators used in C?', 'a>b ? c=30 : c=40;', 'a>b ? c=30;', ' max = a>b ? a>c?a:c:b>c?b:c;', ' return (a>b)?(a:b)', ' max = a>b ? a>c?a:c:b>c?b:c;', 'tech'),
(20, 'Which of the following is not a type of constructor?', 'Copy constructor', 'Friend constructor', 'Default constructor', 'Parameterized constructor', 'Friend constructor', 'tech'),
(21, '  Which of the following is an abstract data type?', 'int', 'double', 'string', 'Class', 'Class', 'tech'),
(22, 'In mathematics and computer programming, which is the correct order of mathematical operators ?', 'Addition, Subtraction, Multiplication, Division', 'Division, Multiplication, Addition, Subtraction', 'Multiplication, Addition, Division, Subtraction', ' Addition, Division, Modulus, Subtraction', ' 	Division, Multiplication, Addition, Subtraction', 'tech'),
(23, '  Which of the following cannot be checked in a switch-case statement?', ' Character', ' Integer', 'Float', 'enum', 'Float', 'tech'),
(24, '  Input/output function prototypes and macros are defined in which header file?', 'conio.h', ' stdlib.h', ' stdio.h', 'dos.h', 'stdio.h', 'tech'),
(25, ' The keyword used to transfer control from a function back to the calling function is', 'switch', 'goto', 'go back', 'return', 'return', 'tech'),
(26, '  Which of the following function / type of function cannot be overloaded?', 'Member function', 'Static function', 'Virtual function', ' Both B and C', 'Virtual function', 'tech'),
(27, 'Which of the following statement is correct?', ' The order of the default argument will be right to left.', 'The order of the default argument will be left to right.', 'The order of the default argument will be alternate.', ' The order of the default argument will be random.', ' The order of the default argument will be right to left.', 'tech'),
(28, '  How will you print \\n on the screen?', 'printf("\\n");', 'echo "\\\\n";', 'printf(''\\n'');', 'printf("\\\\n");', 'printf("\\\\n");', 'tech'),
(29, ' 	  Which of the following function is more appropriate for reading in a multi-word string?', 'printf();', 'scanf();', 'gets();', 'puts();', 'gets();', 'tech'),
(30, 'abcd', 'a', 'b', 'c', 'd', 'a', 'tech'),
(31, '  In C, if you pass an array as an argument to a function, what actually gets passed?', 'Value of elements in array', ' First element of the array', 'Base address of the array', 'Address of the last element of array', 'Base address of the array', 'tech'),
(32, 'abc', 'a', 'b', 'c', 'd', 'a', 'tech'),
(33, 'abcd', 'a', 'b', 'c', 'd', 'a', 'aptitute');

-- --------------------------------------------------------

--
-- Table structure for table `examid`
--

CREATE TABLE IF NOT EXISTS `examid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `examid`
--

INSERT INTO `examid` (`id`, `uname`, `date`) VALUES
(1, 'ashok', ' '),
(2, 'ashok', ' '),
(3, 'ashok', ' '),
(4, 'ashok', ' '),
(5, 'ashok', ' '),
(6, 'ashok', ' '),
(7, 'ashok', ' '),
(8, 'ashok', ' '),
(9, 'ashok', ' '),
(10, 'ashok', ' '),
(11, 'ashok', ' '),
(12, 'ashok', ' '),
(13, 'ashok', ' '),
(14, 'ashok', ' '),
(15, 'ashok', ' '),
(16, 'ashok', ' '),
(17, 'ashok', ' '),
(18, 'ashok', ' '),
(19, 'ashok', ' '),
(20, 'ashok', ' '),
(21, 'ashok', ' '),
(22, 'ashok', ' '),
(23, 'ashok', ' '),
(24, 'ashok', ' '),
(25, 'ashok', ' '),
(26, 'ashok', ' '),
(27, 'ashok', ' '),
(28, 'ashok', ' '),
(29, 'ashok', ' '),
(30, 'ashok', ' '),
(31, 'ashok', ' '),
(32, 'ashok', ' '),
(33, 'ashok', ' '),
(34, 'ashok', ' '),
(35, 'ashok', ' '),
(36, 'ashok', ' '),
(37, 'ashok', ' '),
(38, 'ashok', ' '),
(39, 'ashok', ' '),
(40, 'ashok', ' '),
(41, 'ashok', ' '),
(42, 'ashok', ' '),
(43, 'ashok', ' '),
(44, 'ashok', ' '),
(45, 'ashok', ' '),
(46, 'ashok', ' '),
(47, 'ashok', ' '),
(48, 'ashok', ' '),
(49, 'ashok', ' '),
(50, 'ashok', ' '),
(51, 'ashok', ' '),
(52, 'ashok', ' '),
(53, 'ashok', ''),
(54, 'ashok', '');

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE IF NOT EXISTS `useranswer` (
  `uname` varchar(50) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `uans` varchar(30) NOT NULL,
  `actans` varchar(30) NOT NULL,
  `score` int(11) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `examid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`uname`, `qid`, `uans`, `actans`, `score`, `cp`, `examid`) VALUES
('ashok', '17', 'Java 2 Simple Edition', 'aa', 0, 'op1', 0),
('ashok', '18', 'bb', 'bb', 1, 'op1', 0),
('ashok', '19', 'c', 'c', 1, 'op1', 0),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 7),
('ashok', '18', 'bb', 'bb', 1, 'op1', 7),
('ashok', '19', 'a', 'c', 0, 'op3', 7),
('ashok', '20', 'aa', 'aa', 1, 'op1', 7),
('ashok', '21', 'bb', 'bb', 1, 'op1', 7),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 8),
('ashok', '18', 'bb', 'bb', 1, 'op1', 8),
('ashok', '19', 'c', 'c', 1, 'op1', 8),
('ashok', '20', 'aa', 'aa', 1, 'op1', 8),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 9),
('ashok', '18', 'bb', 'bb', 1, 'op1', 9),
('ashok', '19', 'c', 'c', 1, 'op1', 9),
('ashok', '20', 'aa', 'aa', 1, 'op1', 9),
('ashok', '21', 'bb', 'bb', 1, 'op1', 9),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 12),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 14),
('ashok', '18', 'bb', 'bb', 1, 'op1', 14),
('ashok', '19', 'c', 'c', 1, 'op1', 14),
('ashok', '20', 'aa', 'aa', 1, 'op1', 14),
('ashok', '21', 'bb', 'bb', 1, 'op1', 14),
('ashok', '22', 'c', 'c', 1, 'op1', 14),
('ashok', '23', 'aa', 'aa', 1, 'op1', 14),
('ashok', '24', 'c', 'bb', 0, 'op3', 14),
('ashok', '25', 'd', 'c', 0, 'op4', 14),
('ashok', '26', 'c', 'aa', 0, 'op3', 14),
('ashok', '27', 'bb', 'bb', 1, 'op1', 14),
('ashok', '28', 'a', 'c', 0, 'op3', 14),
('ashok', '29', 'b', 'aa', 0, 'op2', 14),
('ashok', '30', 'bb', 'bb', 1, 'op1', 14),
('ashok', '31', 'c', 'c', 1, 'op1', 14),
('ashok', '1', 'c', 'a', 0, 'op3', 14),
('ashok', '2', 'a', 'a', 1, 'op1', 14),
('ashok', '3', 'c', 'b', 0, 'op3', 14),
('ashok', '4', 'c', 'c', 1, 'op1', 14),
('ashok', '5', 'c', 'a', 0, 'op3', 14),
('ashok', '6', 'b', 'b', 1, 'op1', 14),
('ashok', '7', 'd', 'c', 0, 'op4', 14),
('ashok', '8', 'a', 'a', 1, 'op1', 14),
('ashok', '9', 'c', 'b', 0, 'op3', 14),
('ashok', '10', 'c', 'c', 1, 'op1', 14),
('ashok', '11', 'c', 'a', 0, 'op3', 14),
('ashok', '13', 'c', 'c', 1, 'op1', 14),
('ashok', '14', 'a', 'a', 1, 'op1', 14),
('ashok', '15', 'b', 'b', 1, 'op1', 14),
('ashok', '16', 'a', 'c', 0, 'op3', 14),
('ashok', '12', 'c', 'b', 0, 'op3', 14),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 15),
('ashok', '18', 'bb', 'bb', 1, 'op1', 15),
('ashok', '19', 'c', 'c', 1, 'op1', 15),
('ashok', '20', 'aa', 'aa', 1, 'op1', 15),
('ashok', '21', 'bb', 'bb', 1, 'op1', 15),
('ashok', '22', 'c', 'c', 1, 'op1', 15),
('ashok', '23', 'd', 'aa', 0, 'op4', 15),
('ashok', '2', 'a', 'a', 1, 'op1', 15),
('ashok', '3', 'b', 'b', 1, 'op1', 15),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 17),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 20),
('ashok', '18', 'bb', 'bb', 1, 'op1', 20),
('ashok', '2', 'a', 'a', 1, 'op1', 25),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 26),
('ashok', '18', 'c', 'bb', 0, 'op3', 26),
('ashok', '19', 'a', 'c', 0, 'op3', 26),
('ashok', '20', 'aa', 'aa', 1, 'op1', 26),
('ashok', '21', 'bb', 'bb', 1, 'op1', 26),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 27),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 28),
('ashok', '18', 'bb', 'bb', 1, 'op1', 28),
('ashok', '19', 'c', 'c', 1, 'op1', 28),
('ashok', '20', 'aa', 'aa', 1, 'op1', 32),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 33),
('ashok', '18', 'bb', 'bb', 1, 'op1', 33),
('ashok', '12', 'b', 'b', 1, 'op1', 33),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 34),
('ashok', '18', 'd', 'bb', 0, 'op4', 34),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 35),
('ashok', '18', 'bb', 'bb', 1, 'op1', 35),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 36),
('ashok', '18', 'd', 'bb', 0, 'op4', 36),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 37),
('ashok', '18', 'bb', 'bb', 1, 'op1', 37),
('ashok', '19', 'c', 'c', 1, 'op1', 37),
('ashok', '20', 'aa', 'aa', 1, 'op1', 37),
('ashok', '21', 'bb', 'bb', 1, 'op1', 37),
('ashok', '22', 'c', 'c', 1, 'op1', 37),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 38),
('ashok', '18', 'bb', 'bb', 1, 'op1', 38),
('ashok', '19', 'c', 'c', 1, 'op1', 38),
('ashok', '20', 'aa', 'aa', 1, 'op1', 38),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 40),
('ashok', '18', 'bb', 'bb', 1, 'op1', 40),
('ashok', '19', 'c', 'c', 1, 'op1', 40),
('ashok', '19', 'b', 'c', 0, 'op2', 41),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 46),
('ashok', '18', '&& operator', '& operator', 0, 'op1', 46),
('ashok', '17', 'Java 2 Simple Edition', 'Java 2 Standered Edition', 0, 'op1', 47),
('ashok', '18', '&& operator', '& operator', 0, 'op1', 47),
('ashok', '18', '& operator', '& operator', 1, 'op2', 50),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 50),
('ashok', '17', 'Java 2 Standered Edition', 'Java 2 Standered Edition', 1, 'op3', 51);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
