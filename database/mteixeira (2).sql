-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2013 at 07:08 PM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mteixeira`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `acronym` varchar(100) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='company for sabe all companys';

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `name`, `site_url`, `acronym`) VALUES
(1, 'Rocket internet GmbH ', 'http://www.rocket-internet.de/', 'RI'),
(2, 'Glintt', 'http://www.glintt.com/ ', 'GL');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `end_date` varchar(255) NOT NULL,
  `id_project` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `site` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `technologies` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `jobsTitle` varchar(255) DEFAULT NULL,
  `company_id_company` int(255) NOT NULL,
  PRIMARY KEY (`id_project`),
  UNIQUE KEY `unique_id_project` (`id_project`),
  KEY `index_id_project` (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='projects table for save my all projectse';

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`end_date`, `id_project`, `image`, `name`, `site`, `start_date`, `type`, `video`, `technologies`, `description`, `jobsTitle`, `company_id_company`) VALUES
('31-12-2013', 1, 'emeza_de.png', 'Emeza -      Emeza Premium Shop - All Ventures', 'http://www.emeza.de/, http://www.emeza.ch/, http://www.emeza.com/', '10-05-2012', 'profissional', '', 'Zend Framework 2, Mysql, Svn, Continuous Delivery, Continuous integration, PHP, SOAP, Jquery, Css 3, Htlm 5,PhpUnit, Cucumber, capybara, Ruby', 'emeza.text.description', 'PHP Developer (Frontend / Backend)', 1),
('31-12-2013', 2, 'kiomi_de.png', 'KIOMI Online Shop', 'http://de.kiomi.com/', '10-05-2012', 'profissional', '', 'Zend Framework 2, Mysql, Svn, Continuous Delivery, Continuous integration, PHP, SOAP, Jquery, Css 3, Htlm 5,PhpUnit, Cucumber, capybara, Ruby', 'kiomi.text.description', 'PHP Developer (Frontend / Backend)', 1),
('10-05-2012', 3, 'fabfurnish.png', 'FabFurnish.com', 'http://www.fabfurnish.com/', '1-05-2012', 'profissional', '', 'Zend Framework 1, Yii Framework, Mysql, Svn, PHP,Jquery, Css 3, Htlm 5, Solr', 'fab.index.text', 'PHP Developer (Frontend / Backend)', 1),
('1-05-2012', 4, 'office.png', 'OfficeYes/OfficeFab: Online Shopping For Office Supplies, Online Stationery ', 'http://www.officeyes.com/,http://www.techinasia.com/officefab-shuts-officeyes/', '12-03-2012', 'profissional', '', 'Zend Framework 1, Yii Framework, Mysql, Svn, PHP,Jquery, Css 3, Htlm 5, Solr', 'office.text.description', 'PHP Developer (Frontend / Backend)', 1),
('20-02-2012', 5, 'bes.jpg', 'Bes -ESI - Espirito Santo Informatica / Glintt - Glintt.com', 'http://www.esi.pt/, http://www.glintt.com/', '10-10-2011', 'profissional', '', 'Java, XML, DTD, XSD, COBOL, TIBCO, AS400, Microsoft Source Save, Spring, Hibernate, JPA, Struts., CXF, Java Platform, Enterprise Edition,Junit', 'bes.text.description', 'Java Developer, software engineer, quality assurance automation engineer', 2),
('10-03-2012', 6, 'app1.png', 'SRXTransportes(2012)', 'https://play.google.com/store/apps/details?id=rodonorte.gui', '01-03-2012', 'freelancer', '', 'Java, Android SDK, XML, SqlLite, Rest', 'free.srx.text', 'Java Developer,\nAndroid Developer,\nDatabase Engineer', 0),
('27-02-2012', 7, 'app3.png', 'MyCosmetics(2012)', 'https://play.google.com/store/apps/details?id=mycosmetics.gui', '01-02-2012', 'freelancer', '', 'Java, Android SDK, XML, SqlLite, Rest', 'free.cos.text', 'Java Developer,\r\nAndroid Developer,\r\nDatabase Engineer', 0),
('10-12-2010', 8, 'app2.png', 'Gestor de Rotas de Venda(2011)', 'https://play.google.com/store/apps/details?id=com.tpcmu.gui', '10-10-2010', 'freelancer', '', 'Java, Android SDK, XML, SqlLite, Rest', 'free.vendas.text', 'Java Developer,\r\nAndroid Developer,\r\nDatabase Engineer', 0),
('10-01-2011', 9, 'app4.png', 'Jogo do Galo em Android(2011)', 'https://play.google.com/store/apps/details?id=com.estgf.mac', '12-12-2010', 'freelancer', '', 'Java, Android SDK, XML, SqlLite, Rest', 'free.tictac.text', 'Java Developer,\r\nAndroid Developer,\r\nDatabase Engineer', 0),
('10-01-2011', 10, 'app6.png', 'Widget Name(2011)', 'https://play.google.com/store/apps/developer?id=andre+marcelo', '12-12-2010', 'freelancer', '', 'Java, Android SDK, XML', 'widget.tictac.text', 'Java Developer,\r\nAndroid Developer,\r\nDatabase Engineer', 0),
('10-03-2012', 11, 'web1.png', 'SaniLixa', 'http://www.sanilixa.com/index.php/quemsomos', '12-01-2012', 'freelancer', '', 'PHP 5, CSS 3, HTML 5,JQUERY', 'sani.text', 'PHP Developer', 0),
('10-03-2012', 12, 'web2.png', 'Tay  e Diana Aves Exoticas', 'http://tayediana.byethost7.com/', '12-01-2012', 'freelancer', '', 'PHP 5, CSS 3, HTML 5,JQUERY', 'tay.text', 'PHP Developer', 0),
('10-12-2011', 13, 'web3.png', 'Quinta da Bouca - Fruta Bio', 'http://andreamarcelo-ei.byethost7.com/quintadabouca/,http://quintadabouca.com/', '12-02-2011', 'freelancer', '', ' PHP5 , PHP - Yii Framework, CSS 3, JS , JQUERY, MSQL', 'quintadabouca.text', 'PHP Developer', 0),
('10-12-2010', 14, 'web4.png', 'andremarcelo.net', 'http://andreamarcelo.net', '22-03-2005', 'freelancer', '', ' PHP5 , PHP - Yii Framework, CSS 3, JS , JQUERY, MSQL', 'andremarcelo.text', 'PHP Developer', 0),
('31-12-2009', 15, 'web5.png', ' RIWD - Informatica', 'http://riwd.net', '01-12-2009', 'freelancer', '', ' PHP5 , PHP - Yii Framework, CSS 3, JS , JQUERY, MSQL', 'riwd.text', 'PHP Developer', 0),
('30-12-2009', 16, 'web6.gif', 'Correio de Celorico', 'http://correiodecelorico.com', '01-12-2009', 'freelancer', '', 'CMS JOOMLA 1.5 Template, PHP', 'cc.text', 'PHP Developer', 0),
('01-05-2009', 17, 'web7.png', 'Liga de Futsal AFCB(2007 ,2008, 2009)', 'http://futsaldecelorico.com', '10-12-2006', 'freelancer', '', 'PHP5, Mysql', 'futsal.text', 'PHP Developer', 0),
('01-05-2009', 18, 'web8.png', ' Ferjota engenharia', 'http://ferjota.com', '10-12-2008', 'freelancer', '', 'PHP5, Mysql', 'fer.text', 'PHP Developer', 0),
('01-05-2007', 19, 'web9.png', 'JFdoCorgo', 'http://jferguesia.com', '10-01-2007', 'freelancer', '', 'PHP5, Mysql', 'corgo.text', 'PHP Developer', 0),
('01-05-2008', 20, 'web10.png', 'RodaBike', 'http://rodabike.com', '10-01-2007', 'freelancer', '', 'PHP5, Mysql', 'radabike.text', 'PHP Developer', 0),
('01-05-2008', 21, 'web11.png', 'CelConta', 'http://celconta.com', '10-01-2007', 'freelancer', '', 'PHP5, Mysql', 'celconta.text', 'PHP Developer', 0),
('01-05-2007', 22, 'web12.png', 'Gentil Seguros.', 'http://gentilseguros.com', '10-01-2007', 'freelancer', '', 'PHP5, Mysql', 'gentil.text', 'PHP Developer', 0),
('01-03-2007', 23, 'web13.png', 'MT Logo', 'http://sanilixa.com', '10-02-2007', 'freelancer', '', 'PHP5, Mysql', 'sa.text', 'PHP Developer', 0),
('01-03-2007', 24, 'web14.png', 'Silva Andrade Studios.', 'http://silvaandradestudios.com', '10-02-2007', 'freelancer', '', 'PHP5, Mysql', 'silva.text', 'PHP Developer', 0),
('01-03-2007', 25, 'web15.png', 'Jornal Noticias de Basto.', 'http://noticiasdebasto.com', '10-02-2005', 'freelancer', '', 'PHP5, Mysql', 'nb.text', 'PHP Developer', 0),
('01-08-2008', 26, 'web16.png', 'Motor Basto Stand', 'http://motorbasto.com', '20-02-2008', 'freelancer', '', 'PHP5, Mysql', 'mb.text', 'PHP Developer', 0),
('01-09-2011', 27, '1.png', 'Tap Decision', 'http://www.youtube.com/watch?v=FOiYsjfTXxQ', '04-04-2011', 'academic', '', 'Java, Webservices, SIP, XML, Android SDK', 'tap.text', 'System Administrator, Java developer, Android Developer', 0),
('01-03-2011', 28, '2.png', 'Computer Network Simulation', NULL, '20-02-2011', 'academic', '', 'network protocols', 'redes.text', 'Network Developer', 0),
('01-08-2008', 29, '3.png', 'Project Manager', NULL, '20-02-2008', 'academic', '', 'PM Book, Microsoft Project ', 'pm.text', 'PHP Developer', 0),
('11-05-2011', 30, '4.png', 'SQT', NULL, '21-02-2011', 'academic', '', 'PHP5, Mysql', 'sqt.text', 'PHP Developer', 0),
('15-06-2011', 31, '5.png', 'PEI', NULL, '20-03-2011', 'academic', '', 'Java, JSP', 'pei.text', 'Java  Developer', 0),
('01-12-2010', 32, '6.png', 'Information System', NULL, '21-05-2011', 'academic', '', 'PHP5, Mysql', 'si.text', 'PHP Developer', 0),
('01-03-2010', 33, '7.png', 'Data Base Systems', NULL, '20-02-2010', 'academic', '', 'SQL Server and SQL', 'sql.text', 'DBA', 0),
('01-03-2010', 34, '8.png', 'CMU', NULL, '20-03-2010', 'academic', '', 'PHP5, Mysql', 'cmu2.text', 'Mobile Developer', 0),
('01-03-2010', 35, '9.png', 'CMU', NULL, '20-03-2010', 'academic', '', 'Windows Mobile and C#', 'cmu1.text', 'Mobile Developer', 0),
('20-03-2009', 36, '10.png', 'Quality assurance', NULL, '20-01-2009', 'academic', '', 'Java SE, Junit', 'ju.text', 'Tester', 0),
('20-04-2009', 37, '11.png', 'JTwitter(2010)', NULL, '20-03-2009', 'academic', '', 'Java SE', 'jtt.text', 'Java Developer', 0),
('20-02-2009', 38, '12.png', 'Chinese postman problem', NULL, '20-01-2009', 'academic', '', 'Java SE', 'jase.text', 'Java Developer', 0),
('01-08-2008', 39, '13.png', 'pacMan C and Open GL', NULL, '20-02-2008', 'academic', '', 'C++, Open GL', 'c.text', 'C++ Developer', 0),
('01-08-2008', 40, '14.png', 'ISM', NULL, '20-02-2008', 'academic', '', 'PHP5, Mysql', 'ewqqw.text', 'PHP Developer', 0),
('01-02-2008', 41, '15.png', 'Web Developing', NULL, '20-01-2008', 'academic', '', 'PHP5, Mysql', 'asass.text', 'PHP Developer', 0),
('01-05-2008', 42, '16.png', ' Maquina de Café em Assembly', NULL, '20-02-2008', 'academic', '', 'Assembly', 'ass.text', 'Assembly Developer', 0),
('01-12-2009', 43, '17.png', 'Robos que Recolhem Lixo(2009) Simbad Simulator', NULL, '20-11-2009', 'academic', '', 'Java SE', 'eb.text', 'Java Developer', 0),
('01-08-2008', 44, '18.png', ' BackWard and Foward RPN Calculator(2009)', NULL, '20-02-2008', 'academic', '', 'Java SE', 'bfb.text', 'Java Developer', 0),
('01-08-2008', 45, '19.png', 'Network Simulator Maps and Subway', NULL, '20-02-2008', 'academic', '', 'Java SE', 'ns.text', 'Java Developer', 0),
('01-08-2008', 46, '20.png', 'Speller', NULL, '20-02-2008', 'academic', '', 'Java SE', 'sp.text', 'Java Developer', 0),
('01-08-2008', 47, '21.png', 'Evaluation grid refers to an examination', NULL, '20-02-2008', 'academic', '', 'Java SE', 'ev.text', 'Java Developer', 0),
('01-08-2008', 48, '22.png', 'Java Web Browser', NULL, '20-02-2008', 'academic', '', 'Java SE', 'jb.text', 'Java Developer', 0),
('01-08-2008', 49, '23.png', 'Shopping Carts and supermarkets', NULL, '20-02-2008', 'academic', '', 'C', 's.text', 'C Developer', 0),
('01-08-2008', 50, '24.png', 'Personal Site of ISCI. place Projects', NULL, '20-02-2008', 'academic', '', 'Google Sites', 'gs.text', 'PHP Developer', 0),
('01-08-2008', 51, '25.png', 'Solitaire Game in C', NULL, '20-02-2008', 'academic', '', 'C', 'sl.text', 'C Developer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `name` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `message`, `id`) VALUES
('Jose Manuel', 'Grande Profissional :)', 11),
('Pedro Pinto Bes.', 'Excelente pessoa este Andre. grande abraÃ§o!', 12),
('JoÃ£o Pinto', 'AndrÃ©, antes de mais parabens pelo site. Espero que esteja tudo bem contigo. Quando te poderei ver por Lisboa novamente?', 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
