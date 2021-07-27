CREATE TABLE `frutas` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nombre_fruta` VARCHAR(150) NOT NULL COLLATE 'utf8_general_ci',
	`peso` DECIMAL(16,4) UNSIGNED NOT NULL DEFAULT '0.0000',
	`precio` DECIMAL(16,4) UNSIGNED NOT NULL DEFAULT '0.0000',
	`activo` TINYINT(1) UNSIGNED NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;