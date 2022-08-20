
USE `restaurant`;
DROP procedure IF EXISTS `restaurant`.`p_categories_ins`;
;

DELIMITER $$
USE `restaurant`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_category_ins`(
in_name varchar(250),
in_description varchar(250),
 in_file_id int,
 in_restaurant_id int,
 in_user_id int
 )

BEGIN
insert into categories(name, description, file_id, restaurant_id, user_id) values(
                                                                                     in_name,
                                                                                     in_description,
                                                                                     in_file_id,
                                                                                     in_restaurant_id,
                                                                                     in_user_id);
SELECT LAST_INSERT_ID() as category_id;
END$$

DELIMITER ;
;
