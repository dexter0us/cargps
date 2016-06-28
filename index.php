<?php
// the car GPRS application.
echo "Car Wash GPRS Server Application.\r\n";
//Actual Code Starts here:
//==========================================================
$value = "";
$arr1 =  array();
$arr1 =  json_decode(file_get_contents('php://input'), true);

$dev_id = $arr1['id'];
$w_con=$arr1['wc'];
$s_con=$arr1['sc'];
$u_num=$arr1['num'];

$file1="time.txt";
$myfile = fopen($file1, "a") or die("Unable to open file!");

$value = "Device ID = " . $dev_id . ", Water Consumption = ". $w_con . ", Soap Consumption = " . $s_con . ", U_number = " . $u_num . PHP_EOL;
	//echo $value;
fwrite($myfile,$value);

fclose($myfile);
//-----------------------------------------------------------
?>