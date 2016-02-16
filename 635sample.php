#!/usr/bin/php
<?php
require_once("exampleClass.php");

// php code goes here
echo "hello php".PHP_EOL;
$yourString = "first";
$yourString = $yourString." second";
echo "output: $yourString".PHP_EOL;
$third = "third";
$yourString .= $third;
echo $yourString.PHP_EOL;
$number = 5;
$real = 3.1495;

echo "number : $number".PHP_EOL;
echo "real: $real".PHP_EOL;
$total = $real + $number;
echo "total: ".$total.PHP_EOL;
$newAr = array();
$newAr[] = 5;
$newAr[] = 10;
$newAr[] = 20;
$newAr[] = "cats";
$newAr[] = 4.78;
$newAr["animal"] = "frog";

echo "array iteration begins:".PHP_EOL;
foreach ($newAr as $element)
{
    echo "array element: $element".PHP_EOL;
}
var_dump($newAr);

function testFunc($count)
{
   $output = array();
   $cl = new TestClass();
   $cl->doStuff();
   for ($i = 0; $i < $count; $i++)
   {
	$output[] = $i;
   }
   return $output;
}

$results = testFunc(20);
print_r($results);
$results = testFunc(50);
print_r($results);



?>
