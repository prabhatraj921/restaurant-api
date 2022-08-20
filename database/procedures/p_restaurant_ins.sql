USE `restaurant`;
DROP procedure IF EXISTS `p_restaurant_ins`;

USE `restaurant`;
DROP procedure IF EXISTS `restaurant`.`p_restaurant_ins`;
;

DELIMITER $$
USE `restaurant`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_restaurant_ins`(in_name varchar(250),
in_address_line_1 varchar(250),
 in_address_line_2 varchar(250),
 in_city varchar(250),
 in_state varchar(250),
 in_zipcode varchar(250),
 in_country varchar(250),
 in_photo_file_id int,
 in_contact_number varchar(250),
 in_ext varchar(250),
 in_user_id int
 )
BEGIN

insert into address(address_line_1, address_line_2, city, state, zipcode, country)
values(in_address_line_1, in_address_line_2, in_city, in_state, in_zipcode, in_country);
set @address_id = (SELECT LAST_INSERT_ID());

insert into restaurants(name, photo_file_id, contact_number, ext, address_id) values (
                                                                                         in_name, in_photo_file_id, in_contact_number, in_ext, @address_id);
set @restaurant_id = (SELECT LAST_INSERT_ID());

insert into user_restaurant(user_id, restaurant_id) values (in_user_id, @restaurant_id);

select @restaurant_id as restaurant_id;
END$$

DELIMITER ;
;

