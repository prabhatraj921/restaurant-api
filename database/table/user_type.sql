CREATE TABLE `user_type` (
                                `id` INT NOT NULL AUTO_INCREMENT,
                                `name` VARCHAR(100) NULL,
                                `description` VARCHAR(250) NULL,
                                `is_deleted` TINYINT NULL,
                                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                                PRIMARY KEY (`id`));

insert into user_type(`name`,`description`) values('admin','admin');
insert into user_type(`name`,`description`) values('restaurant owner','restaurant owner');
