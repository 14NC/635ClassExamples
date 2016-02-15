Drop database if exists 635Example;
create database 635Example;
use 635Example;
drop table if exists `students`;
create table `students` (
  studentID int(10) primary key not null auto_increment,
  fname varchar(255),
  lname varchar(255),
  address varchar(255),
  gpa float(11,2)
);

insert into `students`(
  fname,
  lname,
  address,
  gpa)
values(
  "DJ",
  "Kehoe",
  "union",
  2.3
);

insert into `students`(
  fname,
  lname,
  address,
  gpa)
values(
  "Aqib",
  "Mian",
  "newark",
  3.5
),
(
  "Bo",
  "Thompson",
  "montclair",
  4.0
);
