<?php
// the car GPRS application.
echo "Car Wash GPRS Server Application.\r\n";
//Actual Code Starts here:
//==========================================================
$value = "";

$dev_id ="";
$w_con="";
$s_con="";
$u_num="";

if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		if(isset($_GET['id'])){ $dev_id=$_GET['id']; }
		if(isset($_GET['wc'])){ $w_con=$_GET['wc']; }
		if(isset($_GET['sc'])){ $s_con=$_GET['sc']; }  
		if(isset($_GET['num'])){ $u_num=$_GET['num']; }
	}



$file1="time.txt";
$myfile = fopen($file1, "a") or die("Unable to open file!");

$value = "Device ID = " . $dev_id . ", Water Consumption = ". $w_con . ", Soap Consumption = " . $s_con . ", U_number = " . $u_num . PHP_EOL;
	//echo $value;
fwrite($myfile,$value);

fclose($myfile);
//-----------------------------------------------------------
// <url>?id=abssld&wc=98&sc=54&num=5454545885
?>