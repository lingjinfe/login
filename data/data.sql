CREATE TABLE IF NOT EXISTS `user`(
`id` int(11) KEY auto_increment,
`username` varchar (12) NOT null,
`password` varchar (32) NOT null
);