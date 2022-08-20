
CREATE TABLE `menus` (
                         `id` INT NOT NULL AUTO_INCREMENT,
                         `name` VARCHAR(200) NULL,
                         `description` VARCHAR(200) NULL,
                         `file_id` int NULL,
                         `category_id` int not NULL,
                         `user_id` int not NULL,
                         `is_deleted` TINYINT NULL,
                         `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                         PRIMARY KEY (`id`));
