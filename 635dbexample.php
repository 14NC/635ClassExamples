#!/usr/bin/php
<?php

$fname = $argv[1];
$lname = $argv[2];
$addy = $argv[3];
$gpa = $argv[4];

$db = new mysqli('localhost','root','asdfasdf','635Example');

if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

echo "attempting to insert record: $fname $lname $addy $gpa".PHP_EOL;

$insertString = "insert into students(fname,lname,address,gpa) values ('$fname','$lname','$addy','$gpa');";

echo "attempting to execute this SQL:".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);

$queryString = "select * from students;";

$results = $db->query($queryString);

print_r($results);
while ($obj = $results->fetch_object())
{
    print_r($obj);
}

$db->close();
echo "DB Connection Success".PHP_EOL;

?>
