
CREATE TABLE `address` (
                         `id` INT NOT NULL AUTO_INCREMENT,
                         `address_line_1` VARCHAR(100) NULL,
                         `address_line_2` VARCHAR(100) NULL,
                         `city` VARCHAR(100) NULL,
                         `state` VARCHAR(100) NULL,
                         `zipcode` VARCHAR(100) NULL,
                         `country` VARCHAR(100) NULL,
                         `is_deleted` TINYINT NULL,
                         `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                         PRIMARY KEY (`id`));

