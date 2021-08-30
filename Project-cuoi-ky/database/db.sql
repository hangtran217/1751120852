-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2021 lúc 06:25 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `datebirth` date NOT NULL,
  `permission` int(1) NOT NULL,
  `introduction` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `email`, `fullname`, `datebirth`, `permission`, `introduction`) VALUES
(1, 'hangtl', '$2y$10$.gLXKQV.bniJJaNYUJjqkuZTiFp7YEalck9Y3s51NORWNvOjhgQli', 'hangtl@gmail.com', 'Trần Lệ Hằng', '2012-08-08', 2, 'Là người quản trị'),
(2, 'nhanvien', '$2y$10$Oh.CYkh/lcOXyHXKI5IQAOxk.yB1Y4yNi67Blsa5vpKL4zd2cHSui', 'nhanvien@gmail.com', 'Nhân viên 1', '2011-08-12', 1, 'Là nhân viên có quyền thêm bài viết, đơn hàng, khách hàng'),
(3, NULL, NULL, 'anhnvk@gmail.com', 'PGS.TS. NGND. Nguyễn Võ Kỳ Anh', '2011-08-12', 0, 'Viện trưởng viện nghiên cứu tiềm năng con người iPD, Nguyên vụ trưởng Vụ Giáo dục thể chất - Bộ GD & ĐT'),
(4, 'ht123', '$2y$10$7r5I2Dzlpdp3dJQM84Cw/.ZnobJmwJEgqvBL9GdPcBXWZe0CHFHEO', 'ht123@gmail.com', 'Ths. Bùi Thị Kim Tuyến', '0000-00-00', 0, 'P.Viện trưởng viện nghiên cứu tiềm năng con người iPD, Nguyên P.Giám đốc trung tâm nghiên cứu GD Mầm non - Viện KHGD Việt Nam - Bộ GD & ĐT'),
(5, 'chiptm', '$2y$10$Wyfss4SwhblR4nbUqkzyUO0azw3jYIPsDzQek.eihzFdjKOGTa94u', 'chiptm@gmail.com', 'TS. Phạm Thị Mai Chi', '0000-00-00', 0, 'P.Viện trưởng Viện nghiên cứu tiềm năng con người iPD, Nguyên Giám đốc trung tâm nghiên cứu GD Mầm non - Viện KHGD Việt Nam - Bộ GD & ĐT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id_course` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_course`
--

INSERT INTO `tbl_course` (`id_course`, `course_name`, `description`, `price`, `image`) VALUES
(1, 'Chương trình thai giáo :)', 'Chương trình là bộ cẩm nang hữu ích hướng dẫn cha mẹ tương tác với thai nhi đúng cách, giúp con phát triển tối ưu các chức năng não bộ ngay từ những ngày đầu của thai kỳ.', 400, 'thai-giao.jpg'),
(2, 'Chương trình 0-6 tháng', 'Chương trình dành cho trẻ trong giai đoạn 0-6 tháng tuổi, giúp trẻ phát triển toàn diện trên các lĩnh vực: vận động, ngôn ngữ, giác quan, nhận thức, tình cảm và nghệ thuật.', 400, '0-6-thang.jpg'),
(3, 'Chương trình 4-6 tháng', 'Chương trình dành cho trẻ trong giai đoạn 4-6 tháng tuổi, giúp trẻ phát triển toàn diện trên các lĩnh vực: vận động, ngôn ngữ, giác quan, nhận thức, tình cảm và nghệ thuật.', 300, '4-6-thang.jpg'),
(4, 'Chương trình 7-12 tháng', 'Chương trình dành cho trẻ trong giai đoạn 7-12 tháng tuổi, giúp trẻ phát triển toàn diện trên các lĩnh vực: vận động, ngôn ngữ, giác quan, nhận thức, tình cảm và nghệ thuật.', 400, '7-12-thang.jpg'),
(5, 'Chương trình 10-12 tháng', 'Chương trình dành cho trẻ trong giai đoạn 10-12 tháng tuổi, giúp trẻ phát triển toàn diện trên các lĩnh vực: vận động, ngôn ngữ, giác quan, nhận thức, tình cảm và nghệ thuật.', 300, '10-12-thang.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `datebirth` date NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `bigold` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `username`, `password`, `fullname`, `email`, `datebirth`, `address`, `phone`, `bigold`) VALUES
(1, 'aplevin0', 'lff7axZ', 'Averill Plevina', 'aplevin0@skyrock.com', '2020-04-12', '7 Pine View Trail', '897-707-334', 100),
(2, 'mde1', '7cbhu8aTEg', 'Marie De Anesy', 'mde1@domainmarket.com', '2017-07-17', '89 Stoughton Parkway', '926-510-350', 200),
(4, 'ghaisell3', '7QrhdgAA', 'Giordano Haisell', 'ghaisell3@wunderground.com', '2015-11-29', '32522 Burrows Junction', '928-430-137', 300),
(5, 'cshailer4', '2f1P1PH', 'Crysta Shailer', 'cshailer4@yellowbook.com', '2013-03-29', '52318 Quincy Pass', '608-521-368', 400),
(6, 'vhammon5', 'WkpWOEs255x', 'Venita Hammon', 'vhammon5@admin.ch', '2015-11-23', '186 Warbler Lane', '327-289-205', 200),
(7, 'sbenezet6', 'elZmqXnV', 'Spense Benezet', 'sbenezet6@aboutads.info', '2017-04-22', '3 Sherman Way', '935-565-978', 500),
(8, 'sde7', 'bF6MpHKM2nv2', 'Sayer De Benedictis', 'sde7@kickstarter.com', '2021-06-21', '9 Lindbergh Circle', '392-280-364', 1000),
(9, 'atoffetto8', 'Ne8s7sm5F', 'Angela Toffetto', 'atoffetto8@miibeian.gov.cn', '2015-12-31', '31637 Graceland Plaza', '905-134-866', 200),
(10, 'jmoodie9', 'ikSsFNit8', 'Jeramie Moodie', 'jmoodie9@disqus.com', '2017-08-31', '4336 Everett Court', '793-418-858', 100),
(11, 'gflahertya', 'Rc3LvN1vY', 'Gui Flaherty', 'gflahertya@digg.com', '2013-08-10', '070 Kenwood Alley', '362-129-842', 300),
(12, 'kgurryb', 'XpqnYJY', 'Karla Gurry', 'kgurryb@w3.org', '2012-03-16', '29 Autumn Leaf Park', '669-977-682', NULL),
(13, 'ahickissonc', '52HRdnJ1O3FS', 'Alta Hickisson', 'ahickissonc@dion.ne.jp', '2014-02-24', '1 Golf Crossing', '965-168-811', NULL),
(14, 'tbalchend', '3FfJSDRQvEsO', 'Theresina Balchen', 'tbalchend@t.co', '2013-01-01', '6 Drewry Court', '349-599-155', NULL),
(15, 'broizine', '3z9fd8D8jiE', 'Barri Roizin', 'broizine@opensource.org', '2020-02-29', '0 Lotheville Pass', '164-619-642', NULL),
(16, 'sfirksf', 'xM0f4p', 'Silvano Firks', 'sfirksf@harvard.edu', '2014-03-24', '52 Transport Drive', '660-910-501', NULL),
(17, 'afeaversg', '1mMjixg4I', 'Alfredo Feavers', 'afeaversg@myspace.com', '2015-11-09', '8 Shasta Way', '185-651-020', NULL),
(18, 'dbuckmasterh', 'Ci84NISqfJwY', 'Danyette Buckmaster', 'dbuckmasterh@amazon.com', '2014-06-23', '6772 Hintze Drive', '999-374-667', NULL),
(19, 'vbinnalli', '3ynI6wyk', 'Vlad Binnall', 'vbinnalli@163.com', '2015-11-07', '41426 Grasskamp Terrace', '970-733-972', NULL),
(20, 'nisaksonj', 'SwXMu8fI0R', 'Noah Isakson', 'nisaksonj@exblog.jp', '2012-08-18', '49543 Rusk Circle', '842-601-902', NULL),
(21, 'wlarnk', 'YR9a5Sf', 'Wenda Larn', 'wlarnk@mlb.com', '2016-08-06', '96 Hoard Terrace', '935-847-767', NULL),
(22, 'pfelkinl', 'B4YCd1kjqeUC', 'Pammie Felkin', 'pfelkinl@cnn.com', '2021-05-29', '6669 Lawn Junction', '435-917-986', NULL),
(23, 'agoforthm', 'o1RqrpOlookC', 'Andy Goforth', 'agoforthm@economist.com', '2013-12-28', '81139 Redwing Point', '412-656-129', NULL),
(24, 'cbrychann', 'WvReA7ikRus1', 'Catharine Brychan', 'cbrychann@flavors.me', '2014-05-30', '954 Loeprich Pass', '959-116-844', NULL),
(25, 'dharso', 'eQIRzjflc', 'Durand Hars', 'dharso@google.com.au', '2016-04-03', '41288 Sutteridge Road', '763-537-412', NULL),
(26, 'nmaryottp', 'd72yPVh9', 'Nataniel Maryott', 'nmaryottp@liveinternet.ru', '2012-06-24', '90231 Lakewood Place', '817-955-623', NULL),
(27, 'eokaneq', 'YoOFlK38', 'Emmett O\'Kane', 'eokaneq@amazonaws.com', '2020-06-10', '2 Roxbury Terrace', '806-213-382', NULL),
(28, 'sheinsiusr', 'qx6gadFcJ5I', 'Steffen Heinsius', 'sheinsiusr@fda.gov', '2020-07-09', '9 Kim Way', '427-857-343', NULL),
(29, 'bstubbingss', 'vhxSIypuHh', 'Bertina Stubbings', 'bstubbingss@netvibes.com', '2014-12-12', '3584 Lakeland Circle', '830-426-263', NULL),
(30, 'csimeonst', 'a9ZSreL', 'Charissa Simeons', 'csimeonst@livejournal.com', '2012-12-03', '40783 Corscot Trail', '346-525-985', NULL),
(31, 'npinderu', 'gEJ59J8xHn', 'Nilson Pinder', 'npinderu@globo.com', '2016-07-10', '6750 Fallview Hill', '161-292-405', NULL),
(32, 'lraundsv', 'GsYX2Wnv', 'Lucine Raunds', 'lraundsv@digg.com', '2014-11-09', '574 Tennessee Plaza', '614-586-552', NULL),
(33, 'hneevesw', 'Eqg8SjEqrVS1', 'Hannah Neeves', 'hneevesw@flavors.me', '2019-07-27', '68682 Barnett Hill', '795-300-824', NULL),
(34, 'ltuffsx', 'i65D3Tb', 'Laurette Tuffs', 'ltuffsx@github.io', '2012-02-20', '1 Northview Hill', '841-502-402', NULL),
(35, 'ygoskery', 'uc4PHA7', 'Yolane Gosker', 'ygoskery@tamu.edu', '2018-03-15', '973 Derek Pass', '425-343-117', NULL),
(36, 'wstaintonz', 'G8PiU71lkWXj', 'Wenonah Stainton - Skinn', 'wstaintonz@elegantthemes.com', '2012-05-12', '9258 Algoma Road', '412-196-369', NULL),
(37, 'wgarter10', 'dEpWQZGgXlnK', 'Winonah Garter', 'wgarter10@1688.com', '2021-03-02', '4 Forest Circle', '405-457-182', NULL),
(38, 'ieadmead11', '1Byl5KBJiO', 'Ingeborg Eadmead', 'ieadmead11@opera.com', '2016-01-12', '2583 Riverside Road', '355-983-142', NULL),
(39, 'pclair12', 'F1wv0X1aHw', 'Patrizia Clair', 'pclair12@nyu.edu', '2015-11-16', '1 Luster Avenue', '205-687-455', NULL),
(40, 'csouthard13', 'oKiaIAmY', 'Carry Southard', 'csouthard13@ning.com', '2012-07-22', '9 Sunnyside Drive', '561-765-453', NULL),
(41, 'amoquin14', '6Qyp8AgUg', 'Allistir Moquin', 'amoquin14@webmd.com', '2014-08-02', '80 Browning Hill', '183-473-427', NULL),
(42, 'hnutbeem15', 'UqUDAEhn4', 'Hedi Nutbeem', 'hnutbeem15@nsw.gov.au', '2021-08-04', '179 Main Parkway', '562-917-475', NULL),
(43, 'ode16', 'tRXJQvSHN6tu', 'Ollie De Ambrosi', 'ode16@google.nl', '2018-12-13', '59 Union Circle', '540-545-547', NULL),
(44, 'ecutmere17', '5kZvLcq', 'Evangelin Cutmere', 'ecutmere17@seesaa.net', '2017-07-09', '5 Eliot Street', '916-368-632', NULL),
(45, 'nmc18', 'eGC0YFAgA', 'Neale Mc Caughan', 'nmc18@free.fr', '2019-05-08', '4 Kim Junction', '621-656-833', NULL),
(46, 'kfaussett19', 'G3cFhT4G', 'Katharyn Faussett', 'kfaussett19@wix.com', '2018-06-06', '2581 Clove Road', '106-683-689', NULL),
(47, 'jwaker1a', 'tFs2TRi', 'Jasmina Waker', 'jwaker1a@wix.com', '2017-01-25', '44 Vahlen Center', '626-809-406', NULL),
(48, 'mal1b', 'gi74efaI', 'Mil Al Hirsi', 'mal1b@twitpic.com', '2021-05-14', '14 Marquette Way', '532-753-723', NULL),
(49, 'pfarnhill1c', 'ATpuvZ', 'Pearla Farnhill', 'pfarnhill1c@unesco.org', '2012-01-15', '52 Porter Terrace', '367-393-801', NULL),
(50, 'egonet1d', 'rBRdD3', 'Ethan Gonet', 'egonet1d@ovh.net', '2021-07-29', '0684 American Ash Street', '904-911-810', NULL),
(51, 'acatto1e', 'kyGy6e', 'Audrie Catto', 'acatto1e@alibaba.com', '2019-03-02', '298 Fairview Center', '992-332-615', NULL),
(52, 'ccrolla1f', 'WSBAp7kM2OhF', 'Claudelle Crolla', 'ccrolla1f@altervista.org', '2012-11-15', '2900 Hoard Lane', '230-776-942', NULL),
(53, 'ifredi1g', 'yGyKGPXv', 'Ivan Fredi', 'ifredi1g@wired.com', '2016-02-12', '6 Reindahl Crossing', '420-513-603', NULL),
(54, 'vmalham1h', 'ug498Y', 'Vicki Malham', 'vmalham1h@meetup.com', '2016-06-24', '461 Kropf Pass', '392-659-149', NULL),
(55, 'dalder1i', 'g7vLs1BSQr', 'Daniela Alder', 'dalder1i@diigo.com', '2012-12-17', '4 Rigney Park', '784-636-241', NULL),
(56, 'bgoforth1j', 'DFXeT8Dfa', 'Brynn Goforth', 'bgoforth1j@quantcast.com', '2013-10-28', '5 Fuller Avenue', '663-237-524', NULL),
(57, 'ipasmore1k', 'pFj7Ojw', 'Inger Pasmore', 'ipasmore1k@chicagotribune.com', '2017-06-16', '50231 Rusk Alley', '360-642-778', NULL),
(58, 'cpennington1l', 'MrtRdSYAUi', 'Chrisy Pennington', 'cpennington1l@wikispaces.com', '2016-10-27', '3 Annamark Place', '453-973-751', NULL),
(59, 'lkennford1m', 'rqmtBsw3C', 'Laurette Kennford', 'lkennford1m@feedburner.com', '2014-10-14', '022 Sunfield Drive', '931-771-993', NULL),
(60, 'rsiuda1n', 'IP0Ga9', 'Riley Siuda', 'rsiuda1n@i2i.jp', '2016-10-26', '962 Heffernan Plaza', '748-318-795', NULL),
(61, 'bellyatt1o', 'Rv1GgSNAy', 'Bastien Ellyatt', 'bellyatt1o@yellowpages.com', '2021-01-10', '05 Lerdahl Point', '484-774-835', NULL),
(62, 'gmeininking1p', 'iNswJ210J9', 'Gretel Meininking', 'gmeininking1p@microsoft.com', '2012-02-05', '162 Ronald Regan Park', '480-666-658', NULL),
(63, 'jlerego1q', 'nOu6gHb', 'Jaquenette Lerego', 'jlerego1q@pbs.org', '2013-11-05', '0 Cherokee Avenue', '584-293-558', NULL),
(64, 'tgriffoen1r', 'o4SnRSk8ix', 'Tallulah Griffoen', 'tgriffoen1r@gov.uk', '2015-04-20', '88 Macpherson Avenue', '422-196-531', NULL),
(65, 'estanett1s', 'ksRFKSx', 'Edouard Stanett', 'estanett1s@t.co', '2016-10-27', '56297 Logan Parkway', '900-261-711', NULL),
(66, 'sbuckwell1t', 'n4mpy4', 'Solly Buckwell', 'sbuckwell1t@google.co.uk', '2018-11-28', '0 Crowley Trail', '850-644-848', NULL),
(67, 'ltift1u', 'yTPWoiw75FJk', 'Lib Tift', 'ltift1u@amazon.com', '2015-09-19', '68514 Morrow Center', '158-754-378', NULL),
(68, 'cheeran1v', 'CL7iVsDXTS5', 'Cobby Heeran', 'cheeran1v@youtube.com', '2012-01-29', '20 Starling Lane', '796-162-244', NULL),
(69, 'dfurby1w', 'IKUVFSkdiM', 'Darcey Furby', 'dfurby1w@cbslocal.com', '2020-04-29', '741 Tomscot Park', '503-382-474', NULL),
(70, 'bvahey1x', 'u11ads4A1fX', 'Bernita Vahey', 'bvahey1x@friendfeed.com', '2016-10-20', '8429 John Wall Street', '963-753-736', NULL),
(71, 'kpfertner1y', 'abzgo3', 'Kirstin Pfertner', 'kpfertner1y@latimes.com', '2016-08-03', '7 Forest Terrace', '275-654-076', NULL),
(72, 'dfrankland1z', 'W9nMA2aCu', 'Daphna Frankland', 'dfrankland1z@go.com', '2020-03-31', '6 Bobwhite Park', '451-543-605', NULL),
(73, 'ksillis20', '1GYEnOkVADy', 'Karola Sillis', 'ksillis20@unicef.org', '2017-03-15', '51 Sloan Place', '148-568-486', NULL),
(74, 'srisborough21', 'iOGR4O', 'Sandy Risborough', 'srisborough21@intel.com', '2019-10-28', '309 Anhalt Drive', '267-272-054', NULL),
(75, 'rhalsho22', 'mvlZ9e', 'Reynolds Halsho', 'rhalsho22@youtube.com', '2019-08-29', '14 Clemons Center', '791-974-567', NULL),
(76, 'perett23', 'YX2HWDVWGBC0', 'Patience Erett', 'perett23@cloudflare.com', '2016-04-04', '66777 Lakewood Terrace', '249-337-488', NULL),
(77, 'fblackhurst24', 'HF7RPtUGm', 'Ferguson Blackhurst', 'fblackhurst24@dell.com', '2013-05-24', '59697 Northridge Drive', '227-413-254', NULL),
(78, 'vburnie25', '13hAJg', 'Vance Burnie', 'vburnie25@time.com', '2015-11-16', '52 Crest Line Avenue', '712-505-682', NULL),
(79, 'gmayor26', 'iaHnS0so5WE', 'Gregor Mayor', 'gmayor26@ehow.com', '2021-02-21', '3 Nancy Lane', '775-336-200', NULL),
(80, 'rnazer27', 'PihzO02lp', 'Rollin Nazer', 'rnazer27@altervista.org', '2016-08-23', '638 Waywood Point', '159-982-668', NULL),
(81, 'seliassen28', '5dUzIctU6AJE', 'Syman Eliassen', 'seliassen28@elpais.com', '2013-05-30', '28 Calypso Court', '358-434-190', NULL),
(82, 'ikelwaybamber29', 'tV6bzPB3', 'Ingaborg Kelwaybamber', 'ikelwaybamber29@yelp.com', '2020-12-31', '47264 Westend Road', '105-574-410', NULL),
(83, 'kreynoollds2a', '4ZwplgP', 'Kathryne Reynoollds', 'kreynoollds2a@washington.edu', '2015-12-07', '22784 Corben Terrace', '996-220-522', NULL),
(84, 'lszubert2b', 'm9CnCY', 'Lane Szubert', 'lszubert2b@ning.com', '2018-04-23', '4 Columbus Terrace', '200-506-597', NULL),
(85, 'gwatkins2c', 'xUTT2pc8f', 'Gun Watkins', 'gwatkins2c@seattletimes.com', '2015-01-04', '47611 Fairview Road', '862-411-295', NULL),
(86, 'jtrathen2d', 'ySpn988nz', 'Jermaine Trathen', 'jtrathen2d@eepurl.com', '2015-08-06', '150 Maple Wood Center', '894-400-974', NULL),
(87, 'smatasov2e', 'jdjfbT', 'Saunder Matasov', 'smatasov2e@shutterfly.com', '2016-09-08', '5 Delladonna Road', '630-594-093', NULL),
(88, 'fleinweber2f', 'TIRxwEZuiN', 'Filippo Leinweber', 'fleinweber2f@indiegogo.com', '2019-05-17', '14 Glacier Hill Street', '608-558-647', NULL),
(89, 'rweekes2g', 'tl4yJa', 'Robin Weekes', 'rweekes2g@jalbum.net', '2017-06-21', '76225 3rd Hill', '161-835-958', NULL),
(90, 'bdaly2h', 'oEwNpSKBJLnZ', 'Bartlet Daly', 'bdaly2h@comsenz.com', '2013-03-18', '0 Roxbury Hill', '646-511-410', NULL),
(91, 'mvoules2i', 'HkuI0VIx', 'Mordecai Voules', 'mvoules2i@gov.uk', '2016-03-16', '0 Quincy Terrace', '726-777-268', NULL),
(92, 'gceles2j', '7KtRDYUXg9TW', 'Gretta Celes', 'gceles2j@wordpress.org', '2012-02-15', '22095 5th Parkway', '171-903-928', NULL),
(93, 'gschwandermann2k', 'XCrDOEMyws', 'George Schwandermann', 'gschwandermann2k@wp.com', '2017-01-01', '02907 Gerald Road', '249-992-533', NULL),
(94, 'dstellin2l', 'VByTIhR', 'Demetri Stellin', 'dstellin2l@artisteer.com', '2012-07-13', '7711 Oxford Street', '240-909-308', NULL),
(95, 'hmcalees2m', '6a0cvLeGbi51', 'Hermia McAlees', 'hmcalees2m@ucoz.com', '2012-02-20', '559 Lakeland Center', '335-955-234', NULL),
(96, 'ncornwell2n', 'T4bCdQ8', 'Nicholle Cornwell', 'ncornwell2n@topsy.com', '2012-11-28', '74374 Heffernan Place', '488-216-622', NULL),
(102, 'tunglc', ' $2y$10$.xOxtvGk0D0wBH4X1yYjWeHN.EEjA/LzxzeZVDCUDoTmTklPGrxyK', 'Lilith Meo', 'meochanh17419@gmail.com', '0000-00-00', NULL, NULL, NULL),
(103, 'tunglc', ' $2y$10$l46h2MHvOCspb2V2B31Omu0HP5pC6Apyj/UXYVVNAftrOgW.qMhs.', 'Lilith Meo', 'meochanh17419@gmail.com', '0000-00-00', NULL, NULL, NULL),
(104, 'a', ' $2y$10$Q9hgh4aPzKQvyyZ/h1s2JeGC2Q1sUeOxHekVcvNuhhNk0Lkl9m7.W', 'a', 'a@a', '0000-00-00', NULL, NULL, NULL),
(105, 'a', ' $2y$10$2a.mMJiuc69u8XxDQmiLQ.3ktuxKg6imsSmu2fu.xMBjliKqXOT4W', 'a', 'a@a', '0000-00-00', '', '', NULL),
(106, 'q', ' $2y$10$FFOs9hMms9zWXWWA6Kcx/eP0EpgKLUV5xnQ4iDCkB39GcErwtGOCe', 'q', 'qt@tlu.edu.vn', '0000-00-00', 'q', '1', NULL),
(107, 'hangtl72', '123456', 'Trần Lệ Hằng', 'hangtl72@gmail.com', '0000-00-00', 'Hà Nội', '0123456789', NULL),
(108, 'giaoducsom', '$2y$10$Bu/dZv5hHwQxI/54V26Afu70oA5q9HlJGC6758xzgpPeUtpEe.HIW', 'Giáo dục sớm', 'giaoducsom@gmail.com', '0000-00-00', NULL, NULL, NULL),
(109, 'giaoducsom', '$2y$10$VJbyNZ2hNrbj3bkmpf05Gutn9qkJdwSjcLmtY7MgU388nvq.mqv0G', 'Giáo dục sớm', 'giaoducsom@gmail.com', '0000-00-00', NULL, NULL, NULL),
(110, 'ư', '$2y$10$pexJTeSRZUlZC.8fcYG4RO8TbHBmNZplxdn/6colZMnNGP3RFW3LG', 'ư', 'q@q', '0000-00-00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id_invoice` int(10) UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `course_name` varchar(250) NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id_invoice`, `order_date`, `course_name`, `price`, `course_id`, `customer_id`, `admin_id`, `status`) VALUES
(0, '2021-08-29 16:44:52', 'Chương trình 0-6 tháng', 400, 2, 17, 1, 1),
(1, '2021-08-29 16:44:57', 'Chương trình thai giáo', 400, 1, 29, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_post` date NOT NULL DEFAULT current_timestamp(),
  `image_post` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title`, `type`, `date_post`, `image_post`, `content`) VALUES
(1, 'Chương trình Giáo dục sớm Online cho cha mẹ thực hành từ thai giáo, sơ sinh cho tới khi bé 3 tuổi.', 'Giáo dục', '2021-08-17', '/images/4-6-thang.jpg', 'Chương trình Giáo dục sớm Online cho cha mẹ thực hành từ thai giáo, sơ sinh cho tới khi bé 3 tuổi.'),
(2, 'Làm thế nào để trở thành người cha người mẹ tốt', 'Giáo dục', '2021-08-19', '', 'Cách để trở thành người cha người mẹ tốt'),
(3, 'Cách Dạy Con 2 Tuổi: 10 Điều Nhất Định Phải Dạy Cho Con Ở Giai Đoạn Này', 'Giáo dục 2 tuổi', '2021-08-27', '', 'Trong 24 tháng đầu tiên, trẻ như một trang giấy trắng, dần dần học hỏi tất cả mọi thứ xung quanh thông qua giao tiếp và vui chơi. Sẽ có rất nhiều thứ ba mẹ có thể dạy cho con ở giai đoạn này, tuy nhiên ba mẹ cần phải biết chọn lọc những thứ phù hợp cho độ tuổi của con. Kiến Guru sẽ chia sẻ với các phụ huynh cách dạy con 2 tuổi sao cho trẻ phát triển tự nhiên và thông minh vượt trội nhất.\r\n1. Cách dạy con 2 tuổi bằng từ mới \r\nTrẻ 2 tuổi đã dần “thu thập” được rất nhiều từ vựng mới trong suốt quãng thời gian từ lúc mới sinh đến 2 tuổi. Ở giai đoạn này, các bé sẽ học cách ghép những từ này thành câu và câu hỏi. Dưới đây là một số từ, cụm từ và khái niệm phổ biến mà bé 2 tuổi có thể nói và hiểu:\r\n\r\n- Các bộ phận cơ thể (tay, chân, mắt, mũi)\r\n\r\n- Âm thanh và tên động vật\r\n\r\n- Tên (họ, tên đệm và họ của trẻ cũng như tên của gia đình và bạn bè)\r\n\r\n- Xe cộ\r\n\r\n- Đồ gia dụng (thực phẩm, đồ dùng, đồ đạc, quần áo, v.v.)\r\n\r\n- Màu sắc và hình dạng\r\n\r\n- Từ chỉ đường (bên dưới, bên trên, bên cạnh, trên cùng, bên dưới, v.v.)\r\n\r\n- Thông tin cá nhân (vì lý do an toàn: địa chỉ, tên cha mẹ và ngày sinh là những thứ bạn có thể hướng dẫn cho bé)\r\n\r\n- Thời tiết (nắng, mưa, nhiều mây, gió, nóng, lạnh, v.v.)\r\n\r\nBằng cách bổ sung từ vựng dần dần cho trẻ, khả năng ngôn ngữ của trẻ sẽ phát triển chắc chắn hơn ở giai đoạn sau.\r\n\r\n2. Đọc sách cùng con\r\nĐây là cách dạy con vô cùng tiến bộ ở các nước phát triển như Nhật, Mỹ v.v. Ở độ tuổi này, bạn nên tạo cho con thói quen đọc sách. Tất nhiên là ở giai đoạn này thì trẻ sẽ không đọc được chữ nào nhưng bé có thể phát triển thế giới quan của mình thông qua những hình ảnh, màu sắc, con chữ trên quyển sách.\r\n\r\nBạn chỉ cần đảm bảo là bé hiểu cách đọc sách từ bìa trước đến bìa sau và cầm sách đúng cách. Khi bạn đọc cho bé nghe, hãy nhớ sử dụng ngón tay để chỉ theo các từ trên trang để trẻ bắt đầu liên kết các chữ cái với những gì bạn đang nói. Thay vì chỉ vào bức tranh trên sách thì bạn có thể chỉ và đọc từng từ, bé sẽ dần có khái niệm là bạn đang đọc truyện cho bé nghe.\r\n\r\n3. Cách dạy con 2 tuổi để giúp con tự lập hơn\r\nỞ độ tuổi này thường trẻ sẽ rất thích được tự mình làm mọi việc, vì vậy cách tốt nhất để dạy con 2 tuổi là hãy cho bé những cơ hội này để học hỏi, hiểu và mắc lỗi (trong giới hạn cho phép).\r\n\r\nTất nhiên trẻ có thể chưa hoàn thiện kỹ năng nên sẽ mắc lỗi khi thực hiện, nhưng cách duy nhất một đứa trẻ học được những kỹ năng mới này là tự mình thực hiện nó. Bạn có thể giúp bé hoàn thành nhiệm vụ sau khi bé đã thử làm. Trẻ có thể tăng tính độc lập của mình thông qua những việc như:\r\n\r\n- Mặc quần áo: chọn quần áo của riêng mình, mặc đồ phù hợp với thời tiết (đồ ấm hoặc đồ mát), cởi áo sơ mi, quần dài, quần lót, áo len, giày và tất, và học cách mặc đồ phù hợp , phối áo quần đúng cách và giày vừa chân.\r\n\r\n- Tự ăn uống: sử dụng dụng cụ ăn không bị đổ, chọn bữa ăn và đồ ăn nhẹ, mở hộp đựng, uống bằng cốc có ống hút và cốc mở dưới sự giám sát của bố mẹ\r\n\r\n- Đánh răng: bôi kem đánh răng lên và tự chải\r\n\r\n- Dọn dẹp: dọn dẹp đống bừa bộn, cất đồ chơi, mang bát đĩa, cốc và đồ dùng vào bồn rửa khi làm xong, vứt rác, sử dụng máy hút cầm tay để làm sạch\r\n\r\n- Vệ sinh cá nhân: Xì mũi, rửa tay, dùng khăn để tắm trong bồn\r\n\r\n- Di chuyển: Tự mình ra vào xe, lên và xuống cầu thang, kết thúc một hoạt động và chuyển sang hoạt động tiếp theo mà không phàn nàn\r\n\r\nBạn hãy hướng dẫn và làm mẫu cho trẻ xem những kỹ năng này đúng cách, để trẻ không thực hành sai cách.'),
(4, 'Cách dạy trẻ 1 tuổi biết nghe lời và thông minh', 'Giáo dục trẻ 1 tuổi', '2021-08-27', '', 'Tâm lý của trẻ sẽ thay đổi vào từng độ tuổi khác nhau. Do đó chắc hẳn ba mẹ sẽ cảm thấy khó khăn khi tìm hiểu cách giáo dục, dạy trẻ thế nào là hiệu quả đúng không nào. Vậy để dạy bé 1 tuổi có phải là điều dễ dàng không, cùng tìm hiểu cách dạy trẻ 1 tuổi \r\n\r\nSự phát triển tâm lý ở trẻ 1 tuổi\r\n\r\nKhi được sinh ra, bé sẽ bắt đầu tiếp xúc với những yếu tố như ánh sáng, âm thanh,...Trong những năm đầu đời, đặc biệt là từ sơ sinh cho đến 1 tuổi, ba mẹ cần quan tâm để bé cảm nhận được tình cảm. Vì thời điểm này bé chỉ có thể nói bập bẹ một số từ đơn giản và nhận ra các âm thanh quen thuộc, nên sự quan tâm, chăm sóc của ba mẹ sẽ là yếu tố quyết định đến tâm sinh lý của trẻ.\r\n\r\nCó thể nói tâm lý của bé trong giai đoạn 1 tuổi khá nhạy cảm. Một môi trường sống vui vẻ có đầy đủ tình cảm của người thân sẽ giúp bé có cảm giác an toàn và phát triển toàn diện hơn. Trong trường hợp các mẹ không vui với sự xuất hiện của con, bé cũng sẽ nhận ra điều đó vì có cảm giác bỏ rơi.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id_course`),
  ADD UNIQUE KEY `id` (`id_course`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD UNIQUE KEY `id` (`id_customer`);

--
-- Chỉ mục cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `id_post` (`id_post`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id_course` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `admin` FOREIGN KEY (`admin_id`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course` FOREIGN KEY (`course_id`) REFERENCES `tbl_course` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
