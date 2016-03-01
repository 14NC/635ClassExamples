#!/usr/bin/php
<?php

require_once("classdb.php.inc");
require_once("logindb.php.inc");

$loginDB = new loginDB("logindb.ini");

echo "does user aqib exist?".PHP_EOL;
echo $loginDB->checkIfUserExists("aqib").PHP_EOL;

echo "addin new use notaqib!".PHP_EOL;
$loginDB->addNewUser("notaqib","password");

echo "validating user aqib with password 'password':".PHP_EOL;
if ($loginDB->validateUser("notaqib","password"))
{
    echo "validation successful".PHP_EOL;
}
else
{
    echo "validation rejected!".PHP_EOL;
}
?>
