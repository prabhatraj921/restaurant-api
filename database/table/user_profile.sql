CREATE TABLE `user_profile` (
                         `id` INT NOT NULL AUTO_INCREMENT,
                         `user_id` int NULL,
                         `first_name` VARCHAR(100) NULL,
                         `last_name` VARCHAR(100) NULL,
                         `user_type_id` int NULL,
                         `is_deleted` TINYINT NULL,
                         `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                         PRIMARY KEY (`id`));

ALTER TABLE `user_profile`
    ADD INDEX `user_id_idx` (`user_id` ASC) VISIBLE;
;
ALTER TABLE `user_profile`
    ADD CONSTRAINT `user_id`
        FOREIGN KEY (`user_id`)
            REFERENCES `users` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION;
