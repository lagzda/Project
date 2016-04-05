drop database logging;
create database logging;
use logging;
CREATE TABLE IF NOT EXISTS `major` (
  `major_id` varchar(20) NOT NULL,
  `major_name` varchar(20) NOT NULL,
  PRIMARY KEY (`major_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `major` (`major_id`, `major_name`) VALUES
('1', 'computing'),
('2', 'software engineering'),
('3', 'network engineering');



CREATE TABLE IF NOT EXISTS `major_module` (
  `major_name` varchar(25) NOT NULL,
  `module_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `major_module` (`major_name`, `module_name`) VALUES
('computing', 'java1'),
('computing', 'java2'),
('computing', 'java3');



CREATE TABLE IF NOT EXISTS `module` (
  `module_id` varchar(20) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `module` (`module_id`, `module_name`, `teacher`, `classroom`, `time`) VALUES
('m1', 'java1', 'Kevin Gong', 'A202', 'Monday 12:00'),
('m1', 'java2', 'Jason Lee', 'C307', 'Tuesday 14:00'),
('m1', 'java3', 'Cindy Chan', 'G408', 'Thursday 12:00');



CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user` (`id`, `password`, `name`) VALUES
('20131003532@gdufs.com', '123', 'Dereck'),
('20131003641@gdufs.com', '123', 'Deft'),
('20131003694@gdufs.com', '123', 'Helen');



CREATE TABLE IF NOT EXISTS `user_major` (
  `id` varchar(25) NOT NULL,
  `major_id` varchar(20) NOT NULL,
  `major_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user_major` (`id`, `major_id`, `major_name`) VALUES
('20131003694@gdufs.com', '1', 'computing'),
('20131003532@gdufs.com', '1', 'computing');


