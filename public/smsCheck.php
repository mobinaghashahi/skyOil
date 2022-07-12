<?php



error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$result = file_get_contents("http://myhomeiot.ir/smsCheck.php");
