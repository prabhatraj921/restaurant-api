DROP procedure IF EXISTS `restaurant`.`p_file_ins`;

DELIMITER $$
CREATE  PROCEDURE `p_file_ins`(
in_name varchar(250),
in_file_type_id int,
 in_file_extension varchar(250),
 in_size varchar(250),
 in_user_id int,
 in_path varchar(500)
 )
BEGIN
set @file_extension_id =  (select id from  file_extensions where name = in_file_extension);
insert into files(name, file_type_id, file_extension_id, size, user_id, path) values(
                                                                                        in_name,
                                                                                        in_file_type_id,
                                                                                        @file_extension_id,
                                                                                        in_size,
                                                                                        in_user_id,
                                                                                        in_path);
SELECT LAST_INSERT_ID() as file_id;
END$$

DELIMITER ;
;
