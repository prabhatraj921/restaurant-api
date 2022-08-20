
CREATE TABLE `files` (
                           `id` INT NOT NULL AUTO_INCREMENT,
                           `name` VARCHAR(100) NULL,
                           `file_type_id` int NULL,
                           `file_extension_id` int NULL,
                           `size` int NULL,
                           `path` VARCHAR(500) NULL,
                           `is_deleted` TINYINT NULL,
                           `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                           `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                           PRIMARY KEY (`id`));

