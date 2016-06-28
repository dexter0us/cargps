<?php
// the car GPRS application.
echo "Car Wash GPRS Server Application.";
//Actual Code Starts here:
//==========================================================
$value;

$file1="time.txt";
$myfile = fopen($file1, "a") or die("Unable to open file!");




if (isset($value))
	fwrite($myfile,$value);
fclose($myfile);
//-----------------------------------------------------------
?>