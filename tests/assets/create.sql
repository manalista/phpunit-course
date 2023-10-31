DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
	`id` int NOT NULL,
	`name` varchar(100),
	`email` varchar(100),
	PRIMARY KEY (`id`)
);