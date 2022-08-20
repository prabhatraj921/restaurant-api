CREATE TABLE `file_extensions` (
                              `id` INT NOT NULL AUTO_INCREMENT,
                              `name` VARCHAR(100) NULL,
                              `description` VARCHAR(200) NULL,
                              `is_deleted` TINYINT NULL,
                              `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                              `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                              PRIMARY KEY (`id`));



INSERT INTO `restaurant`.`file_extensions` (`name`, `description`) VALUES ('png', 'image');
INSERT INTO `restaurant`.`file_extensions` (`name`, `description`) VALUES ('jpeg', 'image');
INSERT INTO `restaurant`.`file_extensions` (`name`, `description`) VALUES ('jpg', 'image');
INSERT INTO `restaurant`.`file_extensions` (`name`, `description`) VALUES ('doc', 'doc');
INSERT INTO `restaurant`.`file_extensions` (`name`, `description`) VALUES ('docx', 'doc');
