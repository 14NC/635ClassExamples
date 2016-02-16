<?php

class TestClass
{
   private $classname;
   public function __construct()
   {
	// initalization code goes here
        $this->classname = "TestClass";
   }
   public function __destruct()
   {
	// clean up code goes here
   }

   public function doStuff()
   {
	echo "$this->classname is doin stuff!".PHP_EOL;
   }
}


?>
