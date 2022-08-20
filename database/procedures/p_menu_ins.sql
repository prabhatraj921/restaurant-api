USE `restaurant`;
DROP procedure IF EXISTS `p_menu_ins`;

DELIMITER $$
USE `restaurant`$$
CREATE PROCEDURE `p_menu_ins`(
    in_name varchar(250),
    in_description varchar(250),
    in_file_id int,
    in_category_id int,
    in_user_id int
)

BEGIN
insert into menus(name, description, file_id, category_id, user_id) values(in_name,in_description,in_file_id,in_category_id,in_user_id);

SELECT LAST_INSERT_ID() as menu_id;
END$$

DELIMITER ;

