drop procedure if exists addClass;
DELIMITER //
create procedure `addClass`(
	IN TeacherId INT,
	IN classname VARCHAR(255),
	IN classId VARCHAR(8))
BEGIN

insert into classes (
	classes.classname,
	classes.classId,
	classes.teacherId)
     values(
	classname,
	classId,
	TeacherId);

insert into classLoad
	(classLoad.classId,
	 classLoad.teacherId)
      values(
	classId,TeacherId);

END //
