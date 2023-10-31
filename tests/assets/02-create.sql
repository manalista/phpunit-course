DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
	`id` int NOT NULL,
	`name` varchar(128),
	`email` varchar(128),
	PRIMARY KEY (`id`)
);