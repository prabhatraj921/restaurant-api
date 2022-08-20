CREATE TABLE `user_type` (
                                `id` INT NOT NULL AUTO_INCREMENT,
                                `name` VARCHAR(100) NULL,
                                `description` VARCHAR(250) NULL,
                                `is_deleted` TINYINT NULL,
                                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                                PRIMARY KEY (`id`));

insert into user_type(`name`,`description`) values('Admin','Site Admin');
insert into user_type(`name`,`description`) values('Owner','Restaurant owner');
INSERT INTO user_type(`name`, `description`) VALUES ('Manger', 'Restaurant manager');
INSERT INTO user_type(`name`, `description`) VALUES ('Server', 'Restaurant server');
