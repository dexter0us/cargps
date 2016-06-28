<?php
// the car GPRS application.
echo "Car Wash GPRS Server Application.";
//Actual Code Starts here:
//==========================================================
$arr1 =  array();
$arr1 =  json_decode(file_get_contents('php://input'), true);

$dev_id = $arr1['id'];
$w_con=$arr1['wc'];
$s_con=$arr1['sc'];
$u_num=$arr1['num'];

$file1="time.txt";
$myfile = fopen($file1, "a") or die("Unable to open file!");

if (isset($dev_id)  && isset($w_con) && isset($s_con) && isset($num))
	{
		$value = "Device ID = " . $dev_id . ", Water Consumption = ". $w_con . ", Soap Consumption = " . $s_con . ", U_number = " . $num;
		fwrite($myfile,$value);
	}
fclose($myfile);
//-----------------------------------------------------------
?>