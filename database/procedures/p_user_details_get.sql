DROP procedure IF EXISTS `p_user_details_get`;


DELIMITER $$
USE `restaurant`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_user_details_get`(in_user_id int)
BEGIN
select u.id, up.first_name, up.last_name, ut.name  as role_name, up.user_type_id
from users u
         join user_profile up on up.user_id = u.id
         join user_type ut on ut.id = up.user_type_id
where u.id = in_user_id;
END$$

DELIMITER ;
;

