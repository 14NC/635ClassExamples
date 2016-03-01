<?php

class classesDB
{
   private $db;
   public function __construct()
   {
	$this->db = new mysqli("localhost","root","asdfasdf","635Example");
	if ($this->db->connect_errno > 0)
	{
		echo __FILE__.":".__LINE__.": failed to connect to db, re: ".$this->db->connect_error.PHP_EOL;
		exit(0);
	}
   }

   public function __destruct()
   {
	$this->db->close();
   }

  

   public function addStudent($fname,$lname,$addy,$gpa)
   {
	$fname = $this->db->real_escape_string($fname);
	$lname = $this->db->real_escape_string($lname);
	$addy = $this->db->real_escape_string($addy);
	$gpa = $this->db->real_escape_string($gpa);
	$query = "insert into students(fname,lname,address,gpa) values ('$fname','$lname','$addy','$gpa');";


	echo "executing query: \n".$query.PHP_EOL;
	$results = $this->db->query($query);
	if ($this->db->errno > 0)
	{
	    echo __FILE__.":".__LINE__."DB error: ".$this->db->error.PHP_EOL;
	}
   }

}


?>
