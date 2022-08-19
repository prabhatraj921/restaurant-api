USE `restaurant`;
DROP procedure IF EXISTS `p_user_auth_token_check`;

DELIMITER $$
USE `restaurant`$$
CREATE PROCEDURE `p_user_auth_token_check` (in_token varchar(250))
BEGIN
select id from user_auth_token where auth_token = in_token;
END$$

DELIMITER ;

