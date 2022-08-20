CREATE TABLE `restaurants` (
                           `id` INT NOT NULL AUTO_INCREMENT,
                           `name` VARCHAR(100) NULL,
                           `address_id` int NULL,
                           `photo_file_id` int NULL, -- file id
                           `contact_number` VARCHAR(10) NULL,
                           `ext` VARCHAR(4) NULL,
                           `is_deleted` TINYINT NULL,
                           `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                           `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                           PRIMARY KEY (`id`));
