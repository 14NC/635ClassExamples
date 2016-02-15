drop user 'djkehoe'@'localhost';
create user 'djkehoe'@'localhost' identified by "asdfasdf";
grant all privileges on * . * to 'djkehoe'@'localhost';
flush privileges;
