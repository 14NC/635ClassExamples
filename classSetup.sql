drop table if exists classes;
create table classes
(
   classId VARCHAR(8) primary key,
   classname VARCHAR(255),
   teacherId INT,
   classdescription VARCHAR(255)
);

drop table if exists classLoad;
create table classLoad
(
    classId VARCHAR(8),
    teacherId INT
);

drop table if exists teachers;
create table teachers
(
    teacherId INT primary key AUTO_INCREMENT,
    teacherName VARCHAR(32),
    teacherRating INT,
    teacherTitle VARCHAR(16)
);
insert into teachers
    (teacherName,
     teacherRating,
     teacherTitle)
    values
    ("DJ", 4, "Lecturer");
