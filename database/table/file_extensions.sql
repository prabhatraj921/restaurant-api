CREATE TABLE `file_extensions` (
                              `id` INT NOT NULL AUTO_INCREMENT,
                              `name` VARCHAR(100) NULL,
                              `description` int NULL,
                              `is_deleted` TINYINT NULL,
                              `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                              `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                              PRIMARY KEY (`id`));

