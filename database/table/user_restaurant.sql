CREATE TABLE `user_restaurant` (
                              `id` INT NOT NULL AUTO_INCREMENT,
                              `user_id` int NULL,
                              `restaurant_id` int NULL,
                              `is_deleted` TINYINT NULL,
                              `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                              `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                              PRIMARY KEY (`id`));

