DROP procedure IF EXISTS `p_user_ins`;

DELIMITER $$
USE `restaurant`$$
CREATE PROCEDURE `p_user_ins` (
    in_first_name VARCHAR(255),
    in_last_name VARCHAR(255),
    in_email VARCHAR(255),
    in_password VARCHAR(255)
)
BEGIN
-- check if exists

set @count = (select count(*) from users where email = in_email);

if(@count = 0) then
insert into users(email, password) values(in_email, in_password);
 -- 1 for the admin
 -- 2 for the resturant owner
 set @user_id = (SELECT LAST_INSERT_ID());
insert into user_profile(user_id, first_name, last_name, user_type_id) values(@user_id, in_first_name, in_last_name, 2);
SELECT @user_id
end if;


END$$

DELIMITER ;

