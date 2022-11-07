<?php

if(isset($_SESSION['user_name'])){
	session_start();
}
else{

?>

<html>
	<head>
		<title>Shto produkte te reja</title>
		<link rel="stylesheet" href="../styles.css">
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	
<body>

<?php 	include("adminnav.php");?>

<h1 class="w-full flex justify-center items-center h-16 text-2xl bg-black text-white">Shto nje produkt te ri ketu</h1>
<form method="post" action="insert_produkt.php" enctype="multipart/form-data" class="flex justify-center">
	
	<table class="h-full w-screen container  mt-10">
		 
		
		 
		 <tr>
			<td class="w-fit border-b-2 border-black">Emri Produktit:</td>
				<td class="border-b-2 border-black">
					<input type="text" name="title" size="30" class="w-full h-8">
				</td>
		 </tr>
		 
		 <tr>
			<td class="w-fit border-b-2 border-black">Fjalet kyqe te Produktit:</td>
				<td class="border-b-2 border-black">
					<input type="text" name="keywords" size="30" class="w-full h-8">
				</td>
		 </tr>
		 
		 <tr>
			<td class="w-fit border-b-2 border-black">Qmimi Produktit:</td>
				<td class="border-b-2 border-black">
					<input type="text" name="qmimi" size="30" class="w-full h-8">
				</td>
		 </tr>
		 
		 <tr>
			<td class="w-fit border-b-2 border-black">Foto e Produktit:</td>
				<td class="border-b-2 border-black flex justify-between items-center">
					<input type="file" name="image" class="w-32 h-32 ">
				</td>
		 </tr>
		 
		 <tr>
			<td class="w-fit border-b-2 border-black">Permbajtja e Produktit:</td>
				<td class="border-b-2 border-black">
					<textarea name="content"cols="150" rows="5"></textarea>
				</td>
		 </tr>
		 
		 <tr class="w-fit h-12">
			<td>
			<td class=" text-white "><input type="submit" name="submit" value="Shtoje tani"class="bg-black px-5 py-2.5 mr-2 rounded-lg hover:bg-green-800" ></td>
		 </tr>


	</table>
</form>
</body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_POST['submit'])){
	
	$produkt_title = $_POST['title'];
	$produkt_qmimi = $_POST['qmimi'];
	$produkt_keywords = $_POST['keywords'];
	$produkt_content = $_POST['content'];
	$produkt_image = $_FILES['image']['name'];
	$image_tmp= $_FILES ['image']['tmp_name'];
	
	
	if($produkt_title=='' or $produkt_keywords=='' or $produkt_content==''){
		
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		
		exit();
	}
	else {
		move_uploaded_file($image_tmp,"../images/$produkt_image");
		
		$insert_query = "INSERT INTO produktet
        (produkt_title,produkt_qmimi,produkt_image,produkt_keywords,produkt_content) 
		VALUES ('$produkt_title','$produkt_qmimi','$produkt_image',
		'$produkt_keywords','$produkt_content')";
		
		if(mysqli_query($con, $insert_query)){
			
		echo "<script>alert ('Produkti u publikua me sukses')</script>";
		
		}
	}	
}

?>
<?php } ?>