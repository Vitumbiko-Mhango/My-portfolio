-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 02:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contacts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contacts`) VALUES
('    <P>You can reach me on</P>\r\n    <p>\r\n       <a href=\"mhangovitumbiko100@gmail.com\">mhangovitumbiko100@gmail.com</a>  <br> <br>\r\n        \r\n        cell : 0995764949 / 0884207696\r\n             \r\n    </p>'),
('    <P>You can reach me on</P>\r\n    <p>\r\n       <a href=\"mhangovitumbiko100@gmail.com\">mhangovitumbiko100@gmail.com</a>  <br> <br>\r\n        \r\n        cell : 0995764949 / 0884207696\r\n             \r\n    </p>');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `myskills` text NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `aboutme`, `myskills`, `footer`) VALUES
(1, ' <p class=\"about-para\">\r\n                    My name is Vitumbiko Mhango, i am a second year student at Mzuzu University. i am a dedicated \r\n                    Software Engineer, and i have developed several android apps which has helped the community\r\n                    in collection of data in an easy way. i have also created several projects for both students \r\n                    and for the University. \r\n                  \r\n                </p>', '<p>\r\n                    <u >Tools used</u>\r\n                    \r\n                      <li>\r\n                        text editors eg visual studio code\r\n                      </li>\r\n                      <li>\r\n                        debuggers eg chrome developer tools\r\n                      </li>\r\n                      <li>\r\n                        browser extensions eg AdBlock  \r\n                      </li>\r\n                    \r\n                    <u>Tecnologies used</u>\r\n                      <li>HTML</li>\r\n                      <li>CSS</li>\r\n                      <li>Java script</li>\r\n                  </p>\r\n                    <br> <br>\r\n                  <h4>Software Development</h4>\r\n                  <p class=\"tool\">\r\n                    \r\n                    <u>Tools used</u>\r\n                      <li>\r\n                        Intergrated development environment (IDEs) eg IntelliJ IDEA\r\n                      </li>\r\n                      <li>\r\n                        Version control system eg GIT\r\n                      </li>\r\n                      <li>\r\n                        Build tools eg maven and Gradle \r\n                      </li>\r\n                    <u>Tecnologies used</u>\r\n                      <li>Programming language eg Java and python\r\n\r\n                      </li>\r\n                      <li>\r\n                        Web frmeworks eg Django and Spring\r\n                      </li>\r\n                      <li>\r\n                        Database management systems eg MySQL and Oracle\r\n                      </li>\r\n                  </p>', '<h2 >Contacts</h2> <br>\r\n                  <p>+265 884 207 696 / +265 995 764 949</p> \r\n                  <p>\r\n                    Email : <a href=\"mailto:mhangovitumbiko100@gmail.com\">mhangovitumbiko100@gmail.com</a> \r\n                  </p> <br>\r\n\r\n                    <p>follow me on social media:</p>\r\n\r\n                    <div class=\"contact\">\r\n                        <a href=\"http://www.facebook.com/Vitumbiko Mhango\" >facebook</a> <br>\r\n                      \r\n                        <a href=\"http://www.twitter.com/Vitumbiko Mhango\" >Twitter</a> <br>\r\n                      \r\n                        <a href=\"http://www.instagram.com/Vitumbiko Mhango\" >Instagram</a>\r\n                      </div> ');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(30) NOT NULL,
  `Web design project` text NOT NULL,
  `Computer Repairing and Maintenance` text NOT NULL,
  `Cloud Computing` text NOT NULL,
  `Networking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `Web design project`, `Computer Repairing and Maintenance`, `Cloud Computing`, `Networking`) VALUES
(1, '<p class=\"article-text\">Developed a website for ABC Company</p>\r\n                <progress value=\"80\" max=\"100\"></progress>', '<p class=\"article-text\">Maintained and repaired computers for <br> High Tech Solution Company</p>\r\n                <progress value=\"65\" max=\"100\"></progress>', '<p class=\"article-text\">Worked on a software development project on <br> cloud computing at Luke International</p>\r\n                <progress value=\"50\" max=\"100\"></progress>', '<p class=\"article-text\">Teamed up with network engineers from Polytechnic. <br> Our project was to design and install network at LIN Company</p>\r\n                <progress value=\"75\" max=\"100\"></progress>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
