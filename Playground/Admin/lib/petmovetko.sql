-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 01:12 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petmovetko`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add log entry', 1, 'add_logentry'),
(2, 'Can change log entry', 1, 'change_logentry'),
(3, 'Can delete log entry', 1, 'delete_logentry'),
(4, 'Can add user', 2, 'add_user'),
(5, 'Can change user', 2, 'change_user'),
(6, 'Can delete user', 2, 'delete_user'),
(7, 'Can add permission', 3, 'add_permission'),
(8, 'Can change permission', 3, 'change_permission'),
(9, 'Can delete permission', 3, 'delete_permission'),
(10, 'Can add group', 4, 'add_group'),
(11, 'Can change group', 4, 'change_group'),
(12, 'Can delete group', 4, 'delete_group'),
(13, 'Can add content type', 5, 'add_contenttype'),
(14, 'Can change content type', 5, 'change_contenttype'),
(15, 'Can delete content type', 5, 'delete_contenttype'),
(16, 'Can add session', 6, 'add_session'),
(17, 'Can change session', 6, 'change_session'),
(18, 'Can delete session', 6, 'delete_session'),
(19, 'Can add auth user user permissions', 7, 'add_authuseruserpermissions'),
(20, 'Can change auth user user permissions', 7, 'change_authuseruserpermissions'),
(21, 'Can delete auth user user permissions', 7, 'delete_authuseruserpermissions'),
(22, 'Can add auth permission', 8, 'add_authpermission'),
(23, 'Can change auth permission', 8, 'change_authpermission'),
(24, 'Can delete auth permission', 8, 'delete_authpermission'),
(25, 'Can add petowner', 9, 'add_petowner'),
(26, 'Can change petowner', 9, 'change_petowner'),
(27, 'Can delete petowner', 9, 'delete_petowner'),
(28, 'Can add services', 10, 'add_services'),
(29, 'Can change services', 10, 'change_services'),
(30, 'Can delete services', 10, 'delete_services'),
(31, 'Can add transaction', 11, 'add_transaction'),
(32, 'Can change transaction', 11, 'change_transaction'),
(33, 'Can delete transaction', 11, 'delete_transaction'),
(34, 'Can add request', 12, 'add_request'),
(35, 'Can change request', 12, 'change_request'),
(36, 'Can delete request', 12, 'delete_request'),
(37, 'Can add django content type', 13, 'add_djangocontenttype'),
(38, 'Can change django content type', 13, 'change_djangocontenttype'),
(39, 'Can delete django content type', 13, 'delete_djangocontenttype'),
(40, 'Can add service provider', 14, 'add_serviceprovider'),
(41, 'Can change service provider', 14, 'change_serviceprovider'),
(42, 'Can delete service provider', 14, 'delete_serviceprovider'),
(43, 'Can add django admin log', 15, 'add_djangoadminlog'),
(44, 'Can change django admin log', 15, 'change_djangoadminlog'),
(45, 'Can delete django admin log', 15, 'delete_djangoadminlog'),
(46, 'Can add auth user', 16, 'add_authuser'),
(47, 'Can change auth user', 16, 'change_authuser'),
(48, 'Can delete auth user', 16, 'delete_authuser'),
(49, 'Can add auth group', 17, 'add_authgroup'),
(50, 'Can change auth group', 17, 'change_authgroup'),
(51, 'Can delete auth group', 17, 'delete_authgroup'),
(52, 'Can add django migrations', 18, 'add_djangomigrations'),
(53, 'Can change django migrations', 18, 'change_djangomigrations'),
(54, 'Can delete django migrations', 18, 'delete_djangomigrations'),
(55, 'Can add ssp', 19, 'add_ssp'),
(56, 'Can change ssp', 19, 'change_ssp'),
(57, 'Can delete ssp', 19, 'delete_ssp'),
(58, 'Can add auth group permissions', 20, 'add_authgrouppermissions'),
(59, 'Can change auth group permissions', 20, 'change_authgrouppermissions'),
(60, 'Can delete auth group permissions', 20, 'delete_authgrouppermissions'),
(61, 'Can add customer', 21, 'add_customer'),
(62, 'Can change customer', 21, 'change_customer'),
(63, 'Can delete customer', 21, 'delete_customer'),
(64, 'Can add auth user groups', 22, 'add_authusergroups'),
(65, 'Can change auth user groups', 22, 'change_authusergroups'),
(66, 'Can delete auth user groups', 22, 'delete_authusergroups'),
(67, 'Can add django session', 23, 'add_djangosession'),
(68, 'Can change django session', 23, 'change_djangosession'),
(69, 'Can delete django session', 23, 'delete_djangosession'),
(70, 'Can add petlist', 24, 'add_petlist'),
(71, 'Can change petlist', 24, 'change_petlist'),
(72, 'Can delete petlist', 24, 'delete_petlist'),
(73, 'Can add reviewrating', 25, 'add_reviewrating'),
(74, 'Can change reviewrating', 25, 'change_reviewrating'),
(75, 'Can delete reviewrating', 25, 'delete_reviewrating'),
(76, 'Can add complaints', 26, 'add_complaints'),
(77, 'Can change complaints', 26, 'change_complaints'),
(78, 'Can delete complaints', 26, 'delete_complaints');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `compID` int(11) NOT NULL,
  `compMessage` varchar(100) NOT NULL,
  `compDate` datetime NOT NULL,
  `spID` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `complainer` varchar(5) NOT NULL,
  `compStatus` enum('resolved','unresolved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`compID`, `compMessage`, `compDate`, `spID`, `custID`, `complainer`, `compStatus`) VALUES
(3, 'asdadaads', '2017-05-04 00:00:00', 2, 3, 'cust', 'resolved'),
(4, 'dfghjkl', '2017-05-04 00:00:00', 2, 4, 'sp', 'resolved'),
(5, 'sahdjknamsd', '2017-04-05 00:00:00', 1, 1, 'cust', 'resolved');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(11) NOT NULL,
  `custLastName` varchar(45) NOT NULL,
  `custFirstName` varchar(45) NOT NULL,
  `custEmail` varchar(45) NOT NULL,
  `custPassword` varchar(16) NOT NULL,
  `custAdd` varchar(45) NOT NULL,
  `custZip` varchar(45) NOT NULL,
  `custNum` varchar(45) NOT NULL,
  `custAbout` varchar(100) DEFAULT NULL,
  `custStatus` enum('clean','ban') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `custLastName`, `custFirstName`, `custEmail`, `custPassword`, `custAdd`, `custZip`, `custNum`, `custAbout`, `custStatus`) VALUES
(1, 'Caniba', 'Benj', 'bc@gmail.com', '1234', 'Aurora Hill, Baguio City', '', '09123456789', '', 'clean'),
(2, 'Bully', 'Big', 'bb@gmail.com', '1234', 'Loakan, Baguio City', '', '09121212121', '', 'ban'),
(3, 'Famorra', 'Halli', 'hallifamorra@gmail.com', '1234', 'Ambiong, Baguio City', '', '09987654321', '', 'clean'),
(4, 'GDL', 'Imo', 'imoimo@gmail.com', 'imo', 'Aurora Hill', '2600', '09123456789', NULL, 'clean'),
(5, 'vbhjkl', 'nmll', 'vbjkl@nmnm.com', 'hgrfds', 'ujyhtgrfd', '2600', '6543276543222', NULL, 'clean'),
(6, 'sfhsgd', 'htgrf', 'ehrsr@gmail.com', 'grerw', 'rgeragg', '2600', '2132143506', NULL, 'clean');

-- --------------------------------------------------------

--
-- Table structure for table `django_admin_log`
--

CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) UNSIGNED NOT NULL,
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `django_content_type`
--

INSERT INTO `django_content_type` (`id`, `app_label`, `model`) VALUES
(1, 'admin', 'logentry'),
(2, 'auth', 'user'),
(3, 'auth', 'permission'),
(4, 'auth', 'group'),
(5, 'contenttypes', 'contenttype'),
(6, 'sessions', 'session'),
(7, 'forms', 'authuseruserpermissions'),
(8, 'forms', 'authpermission'),
(9, 'forms', 'petowner'),
(10, 'forms', 'services'),
(11, 'forms', 'transaction'),
(12, 'forms', 'request'),
(13, 'forms', 'djangocontenttype'),
(14, 'forms', 'serviceprovider'),
(15, 'forms', 'djangoadminlog'),
(16, 'forms', 'authuser'),
(17, 'forms', 'authgroup'),
(18, 'forms', 'djangomigrations'),
(19, 'forms', 'ssp'),
(20, 'forms', 'authgrouppermissions'),
(21, 'forms', 'customer'),
(22, 'forms', 'authusergroups'),
(23, 'forms', 'djangosession'),
(24, 'forms', 'petlist'),
(25, 'forms', 'reviewrating'),
(26, 'forms', 'complaints');

-- --------------------------------------------------------

--
-- Table structure for table `django_migrations`
--

CREATE TABLE `django_migrations` (
  `id` int(11) NOT NULL,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `django_migrations`
--

INSERT INTO `django_migrations` (`id`, `app`, `name`, `applied`) VALUES
(1, 'contenttypes', '0001_initial', '2017-05-14 04:08:24.804729'),
(2, 'auth', '0001_initial', '2017-05-14 04:08:28.152008'),
(3, 'admin', '0001_initial', '2017-05-14 04:08:29.049071'),
(4, 'admin', '0002_logentry_remove_auto_add', '2017-05-14 04:08:29.068584'),
(5, 'contenttypes', '0002_remove_content_type_name', '2017-05-14 04:08:29.307024'),
(6, 'auth', '0002_alter_permission_name_max_length', '2017-05-14 04:08:29.463178'),
(7, 'auth', '0003_alter_user_email_max_length', '2017-05-14 04:08:29.580295'),
(8, 'auth', '0004_alter_user_username_opts', '2017-05-14 04:08:29.599822'),
(9, 'auth', '0005_alter_user_last_login_null', '2017-05-14 04:08:29.701736'),
(10, 'auth', '0006_require_contenttypes_0002', '2017-05-14 04:08:29.710242'),
(11, 'auth', '0007_alter_validators_add_error_messages', '2017-05-14 04:08:29.734772'),
(12, 'auth', '0008_alter_user_username_max_length', '2017-05-14 04:08:29.887255'),
(13, 'forms', '0001_initial', '2017-05-14 04:08:29.958437'),
(14, 'sessions', '0001_initial', '2017-05-14 04:08:30.199134'),
(15, 'forms', '0002_complaints', '2017-05-14 04:51:34.511597');

-- --------------------------------------------------------

--
-- Table structure for table `django_session`
--

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqID` int(11) NOT NULL,
  `reqStatus` enum('pending','accepted') NOT NULL DEFAULT 'pending',
  `pettype` enum('dog','cat') NOT NULL,
  `petbreed` varchar(60) NOT NULL,
  `custID` int(11) NOT NULL,
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviewrating`
--

CREATE TABLE `reviewrating` (
  `rr_ID` int(11) NOT NULL,
  `revmessage` varchar(10000) NOT NULL,
  `rating` int(11) NOT NULL,
  `spid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `reviewer` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `servID` int(11) NOT NULL,
  `servName` varchar(45) NOT NULL,
  `servPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`servID`, `servName`, `servPrice`) VALUES
(1, 'Pet Sitting', 100),
(2, 'Pet Training', 300),
(3, 'Pet Grooming', 350),
(4, 'Veterinarian Services', 500);

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `spID` int(11) NOT NULL,
  `spUsername` varchar(45) NOT NULL,
  `spLastName` varchar(45) NOT NULL,
  `spFirstName` varchar(45) NOT NULL,
  `spEmail` varchar(45) NOT NULL,
  `spPassword` varchar(16) NOT NULL,
  `spAdd` varchar(45) NOT NULL,
  `spNum` varchar(45) NOT NULL,
  `spPet` enum('dog','cat','both') NOT NULL,
  `spZip` int(5) NOT NULL,
  `spLastLogged` date DEFAULT NULL,
  `spStatus` enum('active','not active') NOT NULL,
  `spServices` varchar(45) NOT NULL,
  `spDay` varchar(10) DEFAULT NULL,
  `spTime` varchar(45) DEFAULT NULL,
  `spReqStatus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`spID`, `spUsername`, `spLastName`, `spFirstName`, `spEmail`, `spPassword`, `spAdd`, `spNum`, `spPet`, `spZip`, `spLastLogged`, `spStatus`, `spServices`, `spDay`, `spTime`, `spReqStatus`) VALUES
(1, 'sp101', 'Kilma', 'Dona', 'dk@gmail.com', '1234', 'A. Bonifacio St., Baguio City', '09090912345', 'dog', 2600, '2017-05-07', 'active', 'grooming', 'mwf', '10:00:00', ''),
(2, 'nerimae', 'Halos', 'Neri ', 'nerimaechalos@gmail.com', 'nerimae', 'New Lucban', '09175855137', 'dog', 2600, '2017-05-03', 'active', 'Training,Sitting', NULL, NULL, 'acc'),
(3, 'asjnas asn', 'asdeubbas', 'kasdjandn', 'asjdie@adnskac.ada', 'asdasidenda', 'aosdamand', '12354664', 'dog', 1234, '2017-05-05', 'active', 'Training,Grooming', NULL, NULL, 'acc'),
(4, 'imogdl', 'GDL', 'Imogen', 'imogdl@gmail.com', 'imogdl', 'Aurora Hill', '09123456789', 'dog', 2600, '2016-08-24', 'active', 'Training,Grooming,Vet', NULL, NULL, 'acc'),
(5, 'rgjfawehi', 'WRYHQRY', 'tenewrh', 'DGNFF@eherg.com', 'asg9feoy', 'ndkjgfhweiyfh', '10927491221', 'dog', 137129, '2017-04-02', 'active', 'Training,Vet', NULL, NULL, 'acc'),
(6, 'qt4wyte', 'lkjhg', 'kjhgfds', 'hnfxgrd@trjyr.rtyr', '66rtwe', 'fjjngfsv', '709843', 'dog', 43645, '2016-05-07', 'active', 'Training,Vet', NULL, NULL, 'acc'),
(7, 'asadhdbe', 'mvbnk m', 'sdfghj', 'bhasd@fnasda.cas', 'asdas', '1234asdasd', '123456789', 'both', 1234, '2012-04-07', 'active', 'Training,Vet', NULL, NULL, 'acc'),
(8, 'asdjeebbasd', 'asjsdjdnea', 'asdsadad', 'dasdandn@dadsa.ada', 'asdjenada', 'adadebasdj', '1234567', 'dog', 1234, NULL, 'active', 'Training,Grooming', NULL, NULL, 'pend');

-- --------------------------------------------------------

--
-- Table structure for table `ssp`
--

CREATE TABLE `ssp` (
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_ID` int(11) NOT NULL,
  `transStatus` enum('ongoing','finished') NOT NULL DEFAULT 'ongoing',
  `transDate` date NOT NULL,
  `timeIn` time NOT NULL,
  `timeOut` time NOT NULL,
  `payment` int(11) NOT NULL,
  `payStatus` enum('not yet paid','paid') NOT NULL DEFAULT 'not yet paid',
  `reqID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_group`
--
ALTER TABLE `auth_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  ADD KEY `auth_group_permissions_group_id_b120cbf9` (`group_id`),
  ADD KEY `auth_group_permissions_permission_id_84c5c92e` (`permission_id`);

--
-- Indexes for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`),
  ADD KEY `auth_permission_content_type_id_2f476e4b` (`content_type_id`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  ADD KEY `auth_user_groups_user_id_6a12ed8b` (`user_id`),
  ADD KEY `auth_user_groups_group_id_97559544` (`group_id`);

--
-- Indexes for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  ADD KEY `auth_user_user_permissions_user_id_a95ead1b` (`user_id`),
  ADD KEY `auth_user_user_permissions_permission_id_1fbb5f2c` (`permission_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`compID`),
  ADD UNIQUE KEY `compID_UNIQUE` (`compID`),
  ADD KEY `sp_fk_idx` (`spID`),
  ADD KEY `cust_fk_idx` (`custID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`),
  ADD KEY `rr_ID_idx` (`custID`);

--
-- Indexes for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `django_admin_log_content_type_id_c4bce8eb` (`content_type_id`),
  ADD KEY `django_admin_log_user_id_c564eba6` (`user_id`);

--
-- Indexes for table `django_content_type`
--
ALTER TABLE `django_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`);

--
-- Indexes for table `django_migrations`
--
ALTER TABLE `django_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `django_session`
--
ALTER TABLE `django_session`
  ADD PRIMARY KEY (`session_key`),
  ADD KEY `django_session_expire_date_a5c62663` (`expire_date`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqID`),
  ADD KEY `sp_fk` (`spID`),
  ADD KEY `cust_fk` (`custID`),
  ADD KEY `serv_dk` (`servID`);

--
-- Indexes for table `reviewrating`
--
ALTER TABLE `reviewrating`
  ADD KEY `sp_fk` (`spid`),
  ADD KEY `cust_fk` (`custid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`servID`),
  ADD UNIQUE KEY `servID_UNIQUE` (`servID`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`spID`);

--
-- Indexes for table `ssp`
--
ALTER TABLE `ssp`
  ADD PRIMARY KEY (`servID`,`spID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `requestid` (`reqID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_group`
--
ALTER TABLE `auth_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auth_permission`
--
ALTER TABLE `auth_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `compID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `django_content_type`
--
ALTER TABLE `django_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `servID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `spID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `comp_cust_fk` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comp_sp_fk` FOREIGN KEY (`spID`) REFERENCES `service_provider` (`spID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `cust_fk` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `serv_fk` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sp_fk` FOREIGN KEY (`spID`) REFERENCES `service_provider` (`spID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviewrating`
--
ALTER TABLE `reviewrating`
  ADD CONSTRAINT `revrat.custID` FOREIGN KEY (`custid`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `revrat.spID` FOREIGN KEY (`spid`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE;

--
-- Constraints for table `ssp`
--
ALTER TABLE `ssp`
  ADD CONSTRAINT `ssp.servID` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ssp.spID` FOREIGN KEY (`servID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `request_fk` FOREIGN KEY (`reqID`) REFERENCES `request` (`reqID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
