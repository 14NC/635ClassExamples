drop procedure if exists infinite;
DELIMITER //
create procedure `infinite`()
BEGIN
   DECLARE it INT;
   set it = 0;
   WHILE it < 10 do
	insert into teachers (teacherName)
		values ("AQIB");
        set it = it + 1;
   END WHILE;
END //


