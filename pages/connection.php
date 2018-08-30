<?php 
$server = 'localhost';
$dbname = 'hospital';
$user = 'root';
$password = '';
$conn = mysqli_connect($server,$user,$password,$dbname);
if (!$conn) {
	die("Error " . mysqli_connect_error($conn));
} else{
	//echo "Successful";
}


 ?>