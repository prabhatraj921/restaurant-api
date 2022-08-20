CREATE TABLE `file_types` (
                         `id` INT NOT NULL AUTO_INCREMENT,
                         `name` VARCHAR(100) NULL,
                         `description` VARCHAR(200) NULL,
                         `is_deleted` TINYINT NULL,
                         `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                         PRIMARY KEY (`id`));


INSERT INTO `restaurant`.`file_types` (`name`, `description`) VALUES ('logo', 'restro logo');
INSERT INTO `restaurant`.`file_types` (`name`, `description`) VALUES ('user profile pic', 'user profile pic');
INSERT INTO `restaurant`.`file_types` (`name`, `description`) VALUES ('restro pic', 'restro  pic');
INSERT INTO `restaurant`.`file_types` (`name`, `description`) VALUES ('food pic', 'food  pic');
