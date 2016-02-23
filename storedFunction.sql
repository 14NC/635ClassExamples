drop procedure if exists addTeacher;
DELIMITER //
create procedure `addTeacher`(
	OUT newId INT,
        IN  name VARCHAR(32),
        IN  rating INT,
        IN  position VARCHAR(16) )
BEGIN
INSERT into teachers
   (teacherName,
    teacherRating,
    teacherTitle)
    VALUES
    (name,rating,position);

SELECT teacherId INTO newId from teachers where
    teacherName = name;
END //

