/*signup table start*/
CREATE TABLE `ifmp_signup` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cnic` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `retype_pass` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*signup table end*/
