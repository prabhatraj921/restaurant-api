USE `restaurant`;
DROP procedure IF EXISTS `p_user_login_check`;

DELIMITER $$
USE `restaurant`$$
CREATE PROCEDURE `p_user_login_check` (in_email varchar(250))
BEGIN
select password,id from users where email = in_email;
END$$

DELIMITER ;

