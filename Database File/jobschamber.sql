-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Host: 127.3.232.2:3306
-- Generation Time: Sep 20, 2016 at 07:25 AM
-- Server version: 5.5.45
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobschamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`login_id`, `user_name`, `user_pass`) VALUES
(1, 'admin@jobschamber.com', 'Ziarbeila12');

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE IF NOT EXISTS `menu1` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE IF NOT EXISTS `menu2` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`m_id`, `m_title`) VALUES
(17, 'IT'),
(18, 'Marketing'),
(19, 'HR'),
(20, 'Accounting'),
(21, 'Internships'),
(22, 'Pharmaceutical'),
(23, 'Sales'),
(24, 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `deadline` date NOT NULL,
  `experience` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `description`, `deadline`, `experience`, `company`, `email`, `location`, `date`, `author`, `category`) VALUES
(32, 'Finance / Accounts Internee', 'Rhino Pre-Engineered Buildings (Pvt) Ltd Urgent Required: Internee having B.com qualification in Finance & Accounts Department, Paid Internship, Career Growth, Attractive Salary & Fringe Benefits.', '2016-03-23', '0.5 Year', 'Rhino Pre-Engineered Buildings (Pvt) Ltd', 'shumaila.nawaz@rhino-buildings.com', 'Gulberg-III - Lahore', '2016-03-09 09:59:08', 'Admin', 'Internships'),
(33, 'SOC Analyst Tier 1', 'Inbox is hiring a experienced SOC Analyst, having education in B.S Computer Science / Engineering and certification in CCNA, CCNP, and CCNIE.', '2016-03-23', '4-5 Years', 'Inbox', 'fahad.ahmed@inboxbiz.com', 'Islamabad', '2016-03-09 10:05:18', 'Admin', 'IT'),
(34, 'Jr. HR officer (Lahore)', 'Systems Ltd is looking for Jr. HR officer (Recruitment) with the qualification in BBA/MBA/Masters in Human Resource Management and also have Internship experience in IT recruitment', '2016-03-23', 'Fresh or 0.5 Years', 'Systems Ltd', 'nilofur.abbasi@systemsltd.com', 'Lahore', '2016-03-09 10:10:38', 'Admin', 'HR'),
(36, 'PHP Developers', 'Compilerz is looking for 2 PHP Developers with 2 years experience.', '2016-03-23', '2 Years', 'Compilerz', 'jobs@compilerz.com', 'Karachi', '2016-03-09 10:30:23', 'Admin', 'IT'),
(37, 'Mobile Developer', 'Cinnova International is looking for Mobile Developerâ€™s with experience in building, releasing, and maintaining applications for the mobile device market. Lahore Candidates with following skills may Apply to this job, with 3+ years of experience with Android or iOS development. Experience with HTML, HTML5, XHTML, CSS/CSS3, Experience with JavaScript/JQuery/Node Js, Experience with XML/XSLT/Ajax, Experience with SQLite â€“ Experience with Java (plus), Experience with J2EE/J2ME (plus), Deep understanding of REST web-services, JSON, SOAP.', '2016-03-23', '3+ Years', 'Cinnova International', 'careers@cinnova.com', 'Lahore', '2016-03-09 11:03:56', 'Admin', 'IT'),
(38, '.Net Developer', 'Generic Planet is looking for 4 .Net developers on urgent basis. Skills are required in Asp.net, SQL Server, .NET, C#, Web Services, WCF, WindowsCommunication foundation, Linq, Silverlight. Used CSS for GUI design and expensively used JavaScript for client side validation, and has the ability to understand and transform complex business requirements into software, ensuring applications are delivered on time.', '0000-00-00', 'Unknown', 'Generic Planet', 'hr@genericplanet.com', 'Lahore', '2016-03-15 11:58:47', 'Admin', 'IT'),
(39, 'Ruby on Rails Web Developer', 'Strategic Systems International is looking for freelance Software Engineer with expertise in Ruby on Rails, who can lend us their services for a week long project. The ideal candidate must have demonstrable experience in web development using RoR.', '2016-03-29', '4-5 Years', 'Strategic Systems International', 'hr@ssidecisions.com', 'Online', '2016-03-15 12:11:08', 'Admin', 'IT'),
(40, 'SALES & MARKETING CO-ORDINATOR', 'We are hiring SALES & MARKETING CO-ORDINATOR for a reputed construction company located at Shahr-E-Faisal, Karachi. Education: Minimum Graduate. Salary: Rs. 30k to Rs. 40k. ', '0000-00-00', '1-2 Years (Fresh can also apply)', 'HR Outsourcing & Consulting', 'career@hroc.com.pk', 'Karachi', '2016-03-15 12:29:04', 'Admin', 'Marketing'),
(41, 'Manager HR', 'Urgently looking for Manager HR. Ideal candidate must be qualified in MBA (HR) / MPA from a reputable university, with Excellent communication skills (written & spoken) 3-5 years of experience preferably with any manufacturing concern. Male candidates are encouraged to apply', '2016-03-29', '3-5 Years', 'Unknown', 'hr@rehmpack.com', 'Karachi', '2016-03-15 12:38:22', 'Admin', 'HR'),
(42, 'HR Generalist', 'Fireball Direct is looking for an HR Generalist. He/She should have a bachelors degree in related field (majors in HRM) with at least one year experience.', '2016-03-29', '1 Year', 'Fireball Direct', 'khansa@fireballdm.com', 'Karachi', '2016-03-15 12:43:46', 'Admin', 'HR'),
(43, 'Senior Front End Developer', 'Rightjobs.pk is looking to hire Senior Front End Developer in Evening Shift. Salary package is 40,000 - 90,000 PKR Basic + travelling allowance + Benefits + commission and bonus.', '2016-03-29', '4-8 Year', 'Rightjobs.pk', 'Mansab@rightjobs.pk', 'Islamabad', '2016-03-15 12:48:34', 'Admin', 'IT'),
(44, 'Software Engineers (Web Scrapers)', 'Required Software Engineers (Web Scrapers) with experience in .NET / PHP, with exposure of end to end developing / writing code for web and data crawlers. The ideal candidate must carry a broad base of programming skills (data structures), data scrapping, extraction techniques, scripting knowledge including REST services, social media platforms\\web crawling API, data storage efficiency, FTS license familiarity and Hadoop(Optional). Engineering Graduates having a minimum of 3 years of experience with web application design and development must apply.', '2016-03-29', '3-5 Years', 'Afiniti.com', 'mustafa.shakil@afiniti.com', 'Unknown', '2016-03-15 12:53:53', 'Admin', 'IT'),
(45, 'PHP Developer', 'Cinnova International is hiring multiple candidates for the position PHP Developers, Experience in (Codeigniter and Magento Customization). ', '2016-03-23', '2-4 Years', 'Cinnova International', 'careers@cinnova.com', 'Lahore', '2016-03-16 10:09:45', 'Admin', 'IT'),
(46, '.NET Developers', 'Cinnova International is hiring multiple candidates for the position .NET Developer, Experience in (ASP.NET, Web Development).  ', '2016-03-23', '1-3 Years', 'Cinnova International', 'careers@cinnova.com', 'Lahore', '2016-03-16 10:13:28', 'Admin', 'IT'),
(47, 'Mobile Developer', 'Cinnova International is hiring multiple candidates for the position Mobile Developer, Experience in (Android and iOS both).', '0000-00-00', '2 Years', 'Cinnova International', 'careers@cinnova.com', 'Lahore', '2016-03-16 10:17:44', 'Admin', 'IT'),
(48, 'Business Development', 'Cinnova International is hiring multiple candidates for the position Business Development. Fresh Graduates are required having qualification in (Sales and Marketing). ', '2016-03-23', 'Fresh Graduates', 'Cinnova International', 'careers@cinnova.com', 'Lahore', '2016-03-16 10:21:47', 'Admin', 'Marketing'),
(49, 'JAVA developer', 'One of the leading software houses in Lahore is looking for a JAVA developer. Experience required 3-5 years. Open salary bracket. Expertise in EE7, back end and front end.', '2016-03-23', '3-5 Years', 'HRT Consultants', 'hdar@hritech.com', 'Lahore', '2016-03-16 11:30:20', 'Admin', 'IT'),
(50, 'Finance Intern', 'We are looking for Finance Intern to be based in Islamabad. Stipend: Rs.10,000/. Females are encouraged to apply. Irrelevant CVs will not be entertained.', '2016-03-23', 'Internship', 'Zigron Inc.', 'hr@zigron.com', 'Islamabad', '2016-03-16 11:42:35', 'Admin', 'Internships'),
(51, 'Accounts & Finance Executive', 'A well reputable company is looking for Accounts & Finance Executive with strong interpersonal and organizational skills for our  Office, having education in BBA/MBA (Finance only), Required relevant professional experience in a Manufacturing Industry, hands on experience on SAP is desired.', '2016-03-23', '4-6 Years', 'Confidential', 'hrdmnc@cyber.net.pk ', 'Karachi', '2016-03-16 12:10:44', 'Admin', 'Accounting'),
(52, 'HR Intern', 'Nextbridge Pvt Ltd is looking for interns  Qualification required BBA specifically with Majors in HR. This is lahore based paid internship for 2-3 months.   ', '2016-03-25', 'Fresh Graduates', 'Nextbridge Pvt Ltd', 'Awais.ahsan@nxb.com.pk', 'Lahore', '2016-03-18 14:41:12', 'Admin', 'Internships'),
(53, 'HR Officer', 'WI HR Consultant requires HR Officer for Engineering Industry at Port Qasim Karachi.   having MBA HR, Salary: 20k-30k, Females are encouraged to apply, Please Apply those who can go to Port Qasim otherwise, please do not apply.', '2016-03-25', '2-3 Years', 'WI HR Consultant', 'saman@wihrconsultant.com', 'Karachi', '2016-03-18 14:46:01', 'Admin', 'HR'),
(54, 'Sr. HR Executive', 'WI HR Consultant requires staff for Engineering Industry at Port Qasim, having MBA in HR,  Salary: 40k-50k, Females are encouraged to apply Please Apply those who can go to Port Qasim otherwise please do not apply.', '2016-03-25', '4-5 Years', 'WI HR Consultant', 'saman@wihrconsultant.com', 'Karachi', '2016-03-18 14:48:32', 'Admin', 'HR'),
(55, 'Software Developers', 'We are urgently looking to hire Software Developers (5 Positions) in a great learning environment as well as excellent remuneration package will be offered based on qualification and experience.', '2016-03-26', 'Different Experiences', 'KNYSYS', 'ukhan@knysys.com', 'Karachi', '2016-03-19 17:12:04', 'Admin', 'IT'),
(56, 'SQA Engineers', 'We are urgently looking to hire SQA Engineers (3 Positions) in a great learning environment as well as excellent remuneration package will be offered based on qualification and experience.', '2016-03-26', 'Different Experiences', 'KNYSYS', 'ukhan@knysys.com', 'Karachi', '2016-03-19 17:14:25', 'Admin', 'IT'),
(57, 'Network Administrator', 'We are urgently looking to hire Network Administrator (2 Positions) in a great learning environment as well as excellent remuneration package will be offered based on qualification and experience.', '2016-03-26', 'Different Experiences', 'KNYSYS', 'ukhan@knysys.com', 'Karachi', '2016-03-19 17:16:18', 'Admin', 'IT'),
(58, 'HR Intern', 'We are urgently looking to hire HR Intern (2 Positions) in a great learning environment as well as excellent remuneration package will be offered based on qualification and experience.', '2016-03-26', 'Different Experiences', 'KNYSYS', 'ukhan@knysys.com', 'Karachi', '2016-03-19 17:19:59', 'Admin', 'Internships'),
(59, 'AM/DM HR', 'Auvitronics Limited is looking for AM/DM HR in Karachi. Candidate must have MBA in HR along with 4-5 years of relevant experience from good organization.', '2016-03-29', '4-5 Years', 'Auvitronics Limited', 'careers@auvitronics.com', 'Karachi', '2016-03-21 19:45:48', 'Admin', 'HR'),
(60, 'Graphic Designer', 'Cloud Innovators Solution is urgently looking for â€œGraphic Designerâ€. Ideal candidate must have excellent command on Photoshop, Illustrator, social media banners, logos, brochure, and Web layout.', '2016-03-29', '1-2 Years', 'Cloud Innovators Solution', 'humanresource.cis@gmail.com', 'Karachi', '2016-03-21 19:48:03', 'Admin', 'IT'),
(61, 'JAVA Developers', 'Zigron Inc is looking for JAVA Developers [08 Positions] for our Islamabad office.', '2016-03-29', 'Unknown', 'Zigron Inc', 'hr@zigron.com ', 'Islamabad', '2016-03-21 19:52:27', 'Admin', 'IT'),
(62, 'Web Developer', 'Cloud Innovators Solution is urgently looking for "Web Developer" Skills: Html, CSS, CSS3, Java script, JQuery, Php Frameworks: Word press, Open cart, magento.', '2016-03-29', '1-2 Years', 'Cloud Innovators Solution', 'humanresource.cis@gmail.com', 'Karachi', '2016-03-21 19:54:53', 'Admin', 'IT'),
(63, 'Goovy and Grails Developer', 'AizTek Technologies is looking for a experienced Goovy and Grails developer, interested candidates can apply.', '2016-03-30', 'Unknown', 'AizTek Technologies', 'career@aiztek.com', 'Islamabad', '2016-03-23 16:10:09', 'Admin', 'IT'),
(64, 'Front-End Developer', 'AizTek Technologies is looking for a front end developer, candidate must have an experience in HTML5, CSS3 and Bootstrap. Interested candidate can apply.', '2016-03-30', 'Unknown', 'AizTek Technologies', 'career@aiztek.com', 'Islamabad', '2016-03-23 16:15:48', 'Admin', 'IT'),
(65, 'Software Developer (.Net)', 'Techinostic is looking for a Software Developer (.Net) who can work from home. Ideal candidate must have skills in OOP Concepts, C#, SQL Server, ASP.NET and ASP.NET. MVC and Android will be a plus point.', '2016-03-30', 'Unknown', 'Techinostic', 'hr@techinostic.com', 'Online', '2016-03-23 16:19:50', 'Admin', 'IT'),
(66, 'HR Coordinator', 'A Leading Petrochemical Company is looking for an HR Coordinator for its Human Resources Department. An Ideal candidate must be an MPA/MBA in HR from a recognized institute with minimum of relevant work experience.', '2016-03-30', '1 to 2 Years', 'Gatron Industries / Novatex Ltd.', 'hrmdropbox@gmail.com', 'Karachi', '2016-03-23 16:28:59', 'Admin', 'HR'),
(67, 'HR Intern', 'Systems Ltd is looking for HR Intern,\r\nFunctional Area includes Recruitment & Selection process and Business Domain are BPO (Business Process Outsourcing). Education should be BBA - MBA (HR).', '2016-03-31', 'Internships', 'Systems Ltd', 'shahan.babar@systemsltd.com', 'Lahore', '2016-03-25 13:11:16', 'Admin', 'Internships'),
(68, 'Php / Web Developer', 'We are looking for Php / Web Developer with hands on experience in PHP based tools and frameworks & in the Android Apps development. Experience in Code Igniter, Laravel, Zend Framework 2, Android Apps Development. Must have strong experience with HTML / CSS, JQuery, MySQL, AJAX & JavaScript Frameworks. Must have experience with Git. ', '2016-03-31', '2+ Years', 'Human Resource & Talent Hub', 'cvs@hrth.pk', 'Karachi', '2016-03-25 13:25:56', 'Admin', 'IT'),
(69, 'SQA Engineers', 'SDSol Technologies is looking to hire SQA Engineers ( 2 Positions) in lahore,  Experience should be Fresh to 1 year, Interested Candidates can apply.', '2016-03-31', 'Fresh to 1 Year', 'SDSol Technologies', 'najeeb@sdsol.com', 'Lahore', '2016-03-25 14:07:20', 'Admin', 'IT'),
(70, 'Web Developer', 'Cloud Innovators Solution is urgently looking for "Web Developer" Skills required are Html, CSS, CSS3, Java script, JQuery and Php Frameworks: Word press, Open cart, magento Experience should be 1-2 year, Interested candidate can apply.', '2016-03-31', '1-2 Years', 'Cloud Innovators Solution', 'humanresource.cis@gmail.com', 'Karachi', '2016-03-27 16:48:55', 'Admin', 'IT'),
(71, 'Sr. Manager Finance', 'There is position of Senior Manager Finance at one of the leading textile composite unit of Pakistan. The position require Qualified Chartered Accountant having 2 to 5 years of post qualification experience and package is around Rs. 200,000 to 300,000 along with 1300 cc car and other benefits too.', '2016-03-31', '2 - 5 Years', 'Marine Group of Companies', 'qadiriq1@gmail.com', 'Karachi', '2016-03-27 16:57:28', 'Admin', 'Accounting'),
(72, 'Graphic Designer / 3D Animator', 'RightJobs.pk is looking for a Graphic Designer / 3D Animator in Islamabad, Minimum education should be BSC-BA with 1 - 2 years experience. Salary Range: PKR. 20,000 - 25,000/Month. Skills Required: Adobe Photoshop (CS3 and above), Adobe Illustrator (CS3 and above), Adobe InDesign (CS3 and above), Corel Draw, Flash, Dream Viewer, Adobe After effect. Interested Candidate can apply.', '2016-03-31', '1 - 2 Years', 'RightJobs.pk', 'Keziah@rightjobs.pk', 'Islamabad', '2016-03-28 17:59:41', 'Admin', 'IT'),
(73, '2D Animator', 'GoLive Pvt Ltd is hiring candidates for 2D Animator in Karachi with 2 - 3 years experience. Skills required: Adobe Photoshop, After Effects, Illustrator, Premiere. \r\nInterested candidates can apply.', '2016-03-31', '2 - 3 Years', 'GoLive Pvt Ltd.', 'nrashid@golive.com.pk', 'Karachi', '2016-03-28 18:04:34', 'Admin', 'IT'),
(74, 'Flash Animator', 'GoLive Pvt Ltd is hiring candidates for Flash Animator in Karachi , Experience should be: 2 - 3 Years and Skills required: Adobe Flash, Photoshop, After Effects, Illustrator, Premiere. Interested candidates can apply.', '2016-03-31', '2 - 3 Years', 'GoLive Pvt Ltd.', 'nrashid@golive.com.pk', 'Karachi', '2016-03-28 18:11:10', 'Admin', 'IT'),
(75, 'Manager HR', 'Beaconhouse is looking for a "Manager HR" to be based at Regional Office in Lahore. The position is responsible to manage all the functions of HR as a Generalist. The applicant must have 8-10 years (with minimum 2 years of Managerial) experience in a reputable company and a master degree in relevant field. Please send your CV along with a "cover letter" latest by April 5, 2016. Only shortlisted candidates (matching the criteria) will be called for interviews.', '2016-03-31', '8 -10 Years', 'Beaconhouse School System', 'hussnain.kazmi@bh.edu.pk', 'Lahore', '2016-03-28 18:36:00', 'Admin', 'HR'),
(76, 'Talent Acquisition Specialist', 'IBEX Global is looking for Talent Acquisition Specialist with at least 2 years post qualification experience in HR. An ideal candidate must have BBA (HR) /MBA (HR). Experience in Recruitment is a must for this position. This is a Lahore based position. Interested candidates can apply/', '2016-03-31', '2 Years', 'IBEX Global', 'Ayesha.urooj@ibexglobal.com', 'Lahore', '2016-03-28 18:45:04', 'Admin', 'HR'),
(77, 'Internship (Full-time)', 'U&I Garments is looking for Internee (Full-time), Qualification should be (B.Com/Masters Majors in: Finance & Supply Chain), Timing are 09:00 am to 06:00 pm (Monday to Saturday) and Duration will be 3 Months.', '2016-03-31', 'Fresh', 'U&I Garments', 'careers@uigmts.com', 'Korangi Industrial Area Karachi', '2016-03-28 18:59:26', 'Admin', 'Internships'),
(78, 'Finance Officer', 'Young''s (Private) Limited are looking for â€˜Finance Officerâ€™ based at Karachi, must be ACCA (Part Qualified) or ICMAP (Part Qualified; Stage - 4) with 2 to 3 years experiences in FMCG or Manufacturing. Should have knowledge of ERP & MS Excel . Interested candidates may apply in confidence.', '2016-03-31', '2 - 3 Years', 'Young''s (Private) Limited', 'recruitment@youngsfood.com', 'Karachi', '2016-03-28 19:04:42', 'Admin', 'Accounting'),
(79, 'Accounts Officer', 'Warid Franchise is hiring ACCOUNTS OFFICER in Karachi. Education should be Intermediate, Experience: 2 years minimum, Gender: Male/Female, Salary: Rs. 20,000. Interested applicants with relevant experience in Accounts field can apply.', '2016-04-06', '2 Years', 'Warid Telecom', 'career@hroc.com.pk', 'Karachi', '2016-03-30 18:45:01', 'Admin', 'Accounting'),
(80, 'News Reporters (Interns)', 'TechJuice is looking for quick and curious interns to report technology news with us for Pakistan. This is a part time opportunity, highly recommended for university students. Please apply or refer people who might be interested.', '2016-04-06', 'Fresh', 'TechJuice', 'jobs@techjuice.com', 'Lahore', '2016-03-30 18:58:26', 'Admin', 'Internships'),
(81, 'Java Developer', 'AizTek Technologies is urgently looking for Java developer with experience of 2 years. It''s office based JOB. Office location is G-11 Markaz, Islamabad. Interested Candidate can apply.', '2016-04-06', '2 Years', 'AizTek Technologies', 'career@aiztek.com', 'Islamabad', '2016-03-30 19:06:31', 'Admin', 'IT'),
(82, 'Assistant Manager Administration', 'ZTE is urgently require Assistant Manager Administration at Islamabad. Candidate should have 3 to 5 years of experience in relevant field and should have strong command on policies, regulation and all administrative tasks. Candidates will be preferred who have strong grip on Chinese language.', '2016-04-07', '3 - 5 Years', 'ZTE', 'muhammad.zahid@zte.com.cn', 'Islamabad', '2016-03-31 11:54:21', 'Admin', 'Administration'),
(83, 'HR Officer', 'Premier Group is looking for HR Officer with experience of at least 1 year. (candidates with 1 - 2 internship experience can also apply), Candidate is responsible for HR Operations, Attendance, Payroll facilitation, Resignation & Final settlement. Qualification should be Graduate / BBA, Interested candidates can apply.', '2016-04-07', '1 - 2 Years', 'Premier Group', 'jobs@premiergroup.com', 'Unknown', '2016-03-31 12:31:37', 'Admin', 'HR'),
(84, 'Sales Executive', 'We are looking for Sales Executive based in UAE for one of our MNC clients. Qualification requirement should be MBA with 2-3 year of experience in any MNC/FMCG based in UAE. Salary package is AED 6k-7k.', '2016-04-09', '2 - 3 Years', 'Platinum Resources international', 'samina@pri.com.pk', 'UAE', '2016-04-02 17:25:40', 'Admin', 'Sales'),
(85, 'Accountant', 'Wavetec is looking for an Accountant for its Karachi office, Candidate must have a qualification in Bcom Degree with 1-2 years of working experience in a similar role Interested candidates can apply.', '0000-00-00', '1 - 2 Years', 'Wavetec', 'hr@wavetec.com', 'Karachi', '2016-04-02 17:32:46', 'Admin', 'Accounting'),
(86, 'Marketing Interns', 'Nextbridge Pvt Ltd is looking for Marketing Interns having qualification in BBA specifically with Majors in Marketing. This is lahore based paid internship for 2-3 months. Interested candidate can apply.', '2016-04-11', 'Internship', 'Nextbridge Pvt Ltd.', 'awais.ahsan@nxb.com.pk', 'Lahore', '2016-04-03 19:32:22', 'Admin', 'Internships'),
(87, 'Networking Interns', 'Urgently require Networking Interns in Aptech Computer Education Shahra-e-Faisal Branch. The incumbent must hold a bachelors degree in the relevant field. It is a 4 months program that may lead to a permanent job. Please note that it is a paid internship. Interested candidate may apply.', '2016-04-15', 'Internship', 'Aptech Computer Education', 'hrm@aptech-education.com.pk', 'Karachi', '2016-04-03 19:36:32', 'Admin', 'Internships'),
(88, 'Online Marketing Specialist', 'Ovex Technologies (Pvt.) Ltd is hiring candidates for the position of ONLINE MARKETING SPECIALIST vacant at our Lahore''s office. The ideal candidate must posses excellent communication skills and atleast 1-3 years of relevant experience in Online Marketing Campaigns, Web Analytics SEO, SEM and PPC. Timings will be 06 pm - 03 am (Mid Shift)  Salary: Market Competitive(plus benefits).  ', '2016-04-11', '1 - 3 Years', 'Ovex Technologies (Pvt.) Ltd', 'mehtisham@enpointe.com', 'Lahore', '2016-04-04 11:23:01', 'Admin', 'Marketing'),
(89, 'Assistant Finance Officer', 'Engro Fertilizers is looking for â€œAssistant Finance Officerâ€ with minimum 2 years of relevant experience in	Financing contract,	Treasury operations, including investment, cash management, trade finance & working capital management, Dealing with banks and resolving queries. Minimum qualification should be Bachelors/ACCA Part Qualified. Female candidates are encouraged to apply.', '2016-04-11', '2 Years', 'Engro Fertilizers', 'fertcareers@engro.com', 'Karachi', '2016-04-04 11:29:18', 'Admin', 'Accounting'),
(90, 'Commerce (Interns)', 'Fresh Commerce Graduate requires for Paid Internship, Successful internees will be offered with employment, leading to the job in our Lahore Office. Interested candidates can apply.', '2016-04-12', 'Fresh', 'BigBird Group', 'hr@bigbirdgroup.com.pk', 'Lahore', '2016-04-05 07:48:24', 'Admin', 'Internships'),
(91, 'Internees', 'Background Check Group are offering paid internship opportunities to fresh graduates and last semester students for our local and global operations with Stipend 10,000 and duration is 2 months. Successful internee will be offered with employment, market compatible salary and other benefits will be offered in employment.', '2016-04-12', 'Fresh and Last Semester Student', 'Background Check Group', 'hr@backcheckgroup.com', 'Karachi', '2016-04-05 07:58:49', 'Admin', 'Internships'),
(92, 'Manager Administration', 'Dalda Foods is looking for suitable candidates for the positions of Manager Administration, to cater it''s near future Business expansion plan needs . These positions are to be based at Lahore & Karachi. Candidates having strong credentials and 8-10 years experience of managing administrative services (Transport, Security, Janitorial, Canteen, Travel & Hotel , 3rd party operations, Projects related approvals, legal compliance etc.) of industrial units. Candidates may send their CV''s to , latest by April 07, 2016 , mentioning preferred location in the description.', '2016-04-13', '8 - 10 Years', 'Dalda Foods Pvt. Ltd', 'hr@daldafoods.com', 'Karachi & Lahore', '2016-04-06 07:24:09', 'Admin', 'Administration'),
(93, 'Sr. Java Script Developer', 'FiveRivers Technologies are looking for a senior Java Script developer at Lahore, with Minimum 2 years of experience having experience in React Js, Angular JS, JQuery & Node js. Interested Candidate Can Apply.', '2016-04-13', '2 Years', 'FiveRivers Technologies', 'muhammad.usman@fiveriverstech.com', 'Lahore', '2016-04-06 07:28:52', 'Admin', 'IT'),
(94, 'Sr. Marketing Professionals - Petrochemical', 'Gatron Industries / Novatex Ltd. is looking for Senior Marketing Professionals for a Petrochemical Company, An ideal candidate must possess solid experience of leading a Marketing / Sales team of a large size organization, relevant educational background is a must. Qualified candidates can apply.', '2016-04-15', 'Unknown', 'Gatron Industries / Novatex Ltd.', 'marketingprofcvs@gmail.com', 'Karachi', '2016-04-08 06:42:56', 'Admin', 'Marketing'),
(95, 'Sr. Android/iOS Developers', 'Positions are Available for Senior Android/iOS Developers, We are looking to hire candidates with more than 4 years of experience in Android and iOS platform. Interested candidates, please apply to this job on urgent basis.', '2016-04-15', '4 Years', 'KNYSYS, LLC', 'ukhan@knysys.com', 'Karachi', '2016-04-08 06:53:21', 'Admin', 'IT'),
(96, 'Recruitment Specialist', 'Marine Group of Companies is urgently looking for a Recruitment Specialist Female Preference for a Leading HR Company based in Karachi. Candidates must be passionate about starting a career in HR. Candidates can be fresh graduate, however 1-2 years of HR or Banking experience will be plus.', '2016-04-15', '1-2 Years', 'Marine Group of Companies', 'samad.khan@hrsglobal.com', 'Karachi', '2016-04-08 06:58:57', 'Admin', 'Internships'),
(97, 'Finance Interns', 'Inbox Biz is looking for some candidates who are hardworking, energetic and wanted to learn in order to start their professional career. we are offering Finance Interns in Karachi. Interested Candidates can apply for this job.', '2016-04-15', 'Fresh', 'Inbox Biz', 'fahad.ahmed@inboxbiz.com', 'Karachi', '2016-04-08 07:14:47', 'Admin', 'Internships'),
(98, 'HR Executive', 'Stylo Shoes is intending to hire HR Executive with Fresh - 1 Year experience in comp & Ben, Minimum MBA HR/MHRM. Interested applicants can apply to this job.', '2016-04-15', 'Fresh', 'Stylo Shoes', 'hr1@hmpl.com.pk', 'Lahore', '2016-04-08 07:22:56', 'Admin', 'Internships'),
(99, 'Sales Executives', 'Systems Limited is looking for Sales Executives, Project : Australian Outbound (Solar) Job Type : Full Time / Part time Both, Education : Intermediate or above Gender : Male/Female Both, Salary : Market Competitive + Commission + Other Benefit Job Timing : 6am â€“ 3pm (For Full Time) Location : Lahore, Required Skill : Excellent English Communication and Selling Skills. Interested candidates can apply or call directly on 042-36304825, 042-36369390 (Ext: 235).', '2016-04-16', 'Fresh - 1 Year', 'Systems Limited', 'namra.imtiaz@systemsltd.com', 'Lahore', '2016-04-09 08:13:47', 'Admin', 'Sales'),
(100, 'Ink Manager', 'Kompass Pakistan is one of the leading in house manufacturers & converter of flexible packaging is willing to expand its team. We are hiring for the position of Ink Manager. The desire candidate must be bachelor/masters in chemistry/applied chemistry and have 8-10 years of experience of chemical/ink handling, matching, and managing them; preferably from packing industry. Candidate can apply.', '2016-04-16', '8-10 Years', 'Kompass Pakistan', 'jobs@kompasspakistan.com.pk', 'Karachi', '2016-04-09 08:29:15', 'Admin', 'Pharmaceutical'),
(101, 'Frontend Developer', 'Active Capital IT is looking for Frontend Developer, Skills should be JavaScript frameworks such as Angular, ExtJs or Node, Understanding of app / browser performance, Ability to writing semantic HTML5, CSS3 and CSS predecessors like Sass & Less. Experience with RESTful APIs, Interested candidates can apply.', '2016-04-16', '2-4 Years', 'Active Capital IT', 'shaheer.kazmi@acit.com', 'Karachi', '2016-04-09 08:33:19', 'Admin', 'IT'),
(102, 'SEO and Analytics', 'Elixir Technologies is looking for a fresh/entry-level resource with interest/expertise in SEO and Analytics in our Islamabad office. The resource will provide data, analysis, and business insights to internal teams, and assist in general planning, development, and targeting of multi-tactical digital marketing programs.  Great Learning, Market-competitive Compensation + Elixir Culture on offer.', '2016-04-18', 'Fresh', 'Elixir Technologies', 'ikrama_ahmad@elixir.com', 'Islamabad', '2016-04-11 13:30:58', 'Admin', 'Internships'),
(103, 'Software Engineer', 'Internship opportunity for fresh graduates in Software Engineering department.  The duration of internship is 2 months. Depending upon extra ordinary performance, it might earn you a full time employment.  Requirements: Graduation degree in Computer Sciences/Software Engineering. Full time availability i.e 10:00 AM - 6:30 PM (Mon - Fri). Candidates willing to pursue their career in software engineering will be preferred.', '2016-04-18', 'Fresh', 'WaqarTech Limited', 'aqjawaid@gmail.com', 'Karachi', '2016-04-11 13:34:35', 'Admin', 'Internships'),
(104, 'Assistant Manager Internal Audit', 'Haleeb Foods Limited is looking for "ASSISTANT MANAGER INTERNAL AUDIT" to be based in Bhaipheru Plant. Requirements: Qualification: ACCA Experience: Minimum 3 years of experience preferably from big four firm. Interested candidates can apply.', '2016-04-30', '3 Years', 'Haleeb Foods Limited', 'careers@haleebfoods.com', 'Unknown', '2016-04-24 08:07:16', 'Admin', 'Accounting'),
(105, 'AM IT/IT Administrator', 'Leading Oil & Gas company is looking for AM IT/IT Administrator (Male) Required,            \r\nQualification should be Masters or Bachelors degree in Computer Science, Salary is negotiable as per market standard + Benefits. Interested candidates can apply before deadline. Only shortlisted candidates will be contacted', '2016-09-10', '4 - 6 Years', 'Unknown', 'recruitmentspecialist321@gmail.com', 'Karachi', '2016-09-04 07:49:35', 'Admin', 'Administration'),
(106, 'Quality Assurance Executive', 'Looking for Quality Assurance Executive based in factory near to Islamabad. Bachelors or Master degree in Food Science & Technology is required along with  of hand-on QA experience with a Food Company. Salary package is negotiable. ', '2016-09-04', '2-3 Years', 'Platinum Resources international', 'samina@pri.com.pk', 'Islamabad', '2016-09-04 07:55:51', 'Admin', 'IT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
