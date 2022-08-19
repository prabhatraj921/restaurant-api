DROP procedure IF EXISTS `p_user_auth_token_ins`;

DELIMITER $$
CREATE PROCEDURE `p_user_auth_token_ins` (
    in_auth_token VARCHAR(255),
    in_user_id int
)
BEGIN
insert into user_auth_token(auth_token, user_id) values(in_auth_token, in_user_id);
END$$

DELIMITER ;

