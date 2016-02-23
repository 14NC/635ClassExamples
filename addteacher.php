#!/usr/bin/php
<?php


$db = new mysqli('localhost','root','asdfasdf','635Example');

$teacherName = $db->real_escape_string("testname'asdfa");
$teacherRating = $argv[2];
$teacherTitle = $db->real_escape_string($argv[3]);


if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

$response = $db->query("set @teacherID = '';");

$query = "call addTeacher(@teacherID,'$teacherName',$teacherRating,'$teacherTitle');";

echo "running query:\n$query".PHP_EOL;

$response = $db->query($query);

$response = $db->query("select @teacherID");
if (!$response)
{
   echo "Error from mysql: ". $db->error.PHP_EOL;
   exit();
}
$results = $response->fetch_assoc();
echo "select results: ".PHP_EOL;
foreach ($results as $row)
{
    print_r($row);
    echo PHP_EOL;
}

?>
