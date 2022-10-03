<?php

$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");
error_reporting();
if(isset($_POST['update'])){

	$produkt_id = $_POST['id'];
	$produkt_title1 = $_POST['title'];
	$produkt_qmimi1 = $_POST['qmimi'];
	$produkt_keywords1 = $_POST['keywords'];
	$produkt_content1 = $_POST['content'];
	$namePhoto=$_FILES["image"]["name"];
	$prapashtesa= substr($_FILES["image"]["name"], -4,4);
	$namePhoto=$namePhoto;
	$newName="../images/$namePhoto";

	if(move_uploaded_file($_FILES["image"]["tmp_name"],$newName))   {
        
	}
	else
	{
		echo "You can't upload this image";
	}

	if($produkt_title1!='' or $produkt_keywords1!='' or $produkt_content1!='' or $namePhoto!=''){

		$update_query="UPDATE produktet SET produkt_title='$produkt_title1', produkt_qmimi='$produkt_qmimi1', 
        produkt_image='$namePhoto', produkt_keywords='$produkt_keywords1', produkt_content='$produkt_content1' 
        WHERE 
        produkt_id='$produkt_id'";
		
		if(mysqli_query($con, $update_query)){
		
			echo "<script>alert('Produkti u ndryshua')</script>";
			header("location: view_produkt.php");
		}
	}
	   
   else {	
			
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		exit();
	   }
	}

?>