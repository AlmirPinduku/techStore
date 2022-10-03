<?php
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_GET['delete'])){
	
	$delete_id = $_GET['delete'];
	
	$delete_query = "delete from produktet where produkt_id='$delete_id' ";
	
	if(mysqli_query($con, $delete_query)){
	
	echo "<script>alert('Produkti eshte Fshire')</script>";
	echo "<script>window.open('view_produkt.php','_self')</script>";
	
	}
}
?>