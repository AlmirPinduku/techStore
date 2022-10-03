<?php
$host="localhost";
$user="root";
$pass="";
$database="projekti";
$conn=mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, "projekti") or die("Error conecting to db.");

?>