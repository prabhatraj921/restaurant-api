USE `restaurant`;
DROP procedure IF EXISTS `p_file_ins`;

USE `restaurant`;
DROP procedure IF EXISTS `restaurant`.`p_file_ins`;
;

DELIMITER $$
USE `restaurant`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_file_ins`(in_name varchar(250),
in_file_type varchar(250),
 in_file_extension varchar(250),
 in_size varchar(250),
 in_path varchar(250),
 in_user_id int
 )
BEGIN

set @file_ext = (select id from file_extension where name = in_file_extension);

insert into files(name, file_type_id, file_extension_id, size, user_id, path)
values(in_name, in_file_type, in_file_extension, in_size, in_user_id, in_path);
SELECT LAST_INSERT_ID()
END$$

DELIMITER ;
;

