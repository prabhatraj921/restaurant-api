CREATE TABLE `users` (
                                      `id` INT NOT NULL AUTO_INCREMENT,
                                      `email` VARCHAR(100) NULL,
                                      `password` VARCHAR(100) NULL,
                                      `is_deleted` TINYINT NULL,
                                      `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                      `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                                      PRIMARY KEY (`id`));
