<?php

if(isset($_SESSION['user_name'])){
	session_start();
}
else{

?>

<html>
	<head>
		<link rel="stylesheet" href="../styles.css">
		<script src="https://cdn.tailwindcss.com"></script>
        <link href="./nav.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/daisyui@2.37.0/dist/full.css" rel="stylesheet" type="text/css" />
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	
<body class="bg-black">



<header class="">
		<a href="./index.php" class="logo"><span>techStore</span></a>
		<div class="main">

		</div>
	</header>


<div class="flex justify-center">
	<form method="post" action="shtoProdukt.php" enctype="multipart/form-data" class="flex flex-col">
		
		<table class="mt-32 ">
		<tr>
				<td class="w-fit ">Titulli I produktit*</td>
					<td class="">
					<input type="text" name="title" placeholder="" class="input input-bordered input-sm w-full max-w-xs bg-white text-black mb-2" />
					</td>
			</tr>
			
			
			
			<tr>
				<td class="w-fit ">Fjalet kyqe te Produktit*</td>
					<td class="">
						<select class="select select-ghost bg-white text-gray-300 w-full max-w-xs" name="keywords">
							<option value="Apple">Apple</option>
							<option value="Dell">Dell</option>
							<option value="Lenovo">Lenovo</option>
						</select>
					</td>
			</tr>
			
			<tr>
				<td class="w-fit">Qmimi Produktit:</td>
					<td class="">
						<input type="text" name="qmimi" placeholder="" class="input input-bordered input-sm w-full max-w-xs bg-white text-black mb-2 mt-2" />

					</td>
			</tr>

			<tr>
				<td class="w-fit">Viber Number</td>
					<td class="">
						<input type="text" name="viberNumber" placeholder="" class="input input-bordered input-sm w-full max-w-xs bg-white text-black mb-2 mt-2" />

					</td>
			</tr>

			<tr>
				<td class="w-fit">WhatsApp Number</td>
					<td class="">
						<input type="text" name="wpNumber" placeholder="" class="input input-bordered input-sm w-full max-w-xs bg-white text-black mb-2 mt-2" />

					</td>
			</tr>

			<tr>
				<td class="w-fit">Qyteti</td>
					<td class="">
						<input type="text" name="qyteti" placeholder="" class="input input-bordered input-sm w-full max-w-xs bg-white text-black mb-2 mt-2" />
					</td>
			</tr>

			<tr>
				<td class="w-fit">Emri User</td>
					<td class="">
						<input type="text" name="emriUser" placeholder="" class="input input-bordered input-sm w-full max-w-xs bg-white text-black mb-2 mt-2" />
					</td>
			</tr>
			
			<tr>
				<td class="">Foto e Produktit:</td>
					<td class="">
						<input type="file" id="" name="image" class="file-input file-input-ghost w-full max-w-xs">
					</td>
			</tr>


			
			<tr>
				<td class="w-fit">Permbajtja e Produktit:</td>
					<td class="">
						<textarea name="content"cols="39" rows="4" class="textarea textarea-ghost bg-white mt-2" placeholder=""></textarea>
					</td>
			</tr>
			
			<tr class="">
				<td>
				<td class=" text-white ">
					<input type="submit" name="submit" value="Shtoje tani"class="btn btn-accent mt-4" >
				</td>
			</tr>


		</table>
	</form>
</div>
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
	$viberNumber = $_POST['viberNumber'];
	$wpViber = $_POST['wpNumber'];
	$qyteti = $_POST['qyteti'];
	$emriUser = $_POST['emriUser'];

	$produkt_image = $_FILES['image']['name'];
	$image_tmp= $_FILES ['image']['tmp_name'];
	
	
	if($produkt_title=='' or $produkt_keywords=='' or $produkt_content==''or $produkt_qmimi==''){
		
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		
		exit();
	}
	else {
		move_uploaded_file($image_tmp,"./images/$produkt_image");
		
		$insert_query = "INSERT INTO produktet (produkt_title,produkt_qmimi,produkt_image,produkt_keywords,produkt_content,viberNumber,wpNumber,qyteti,emriUser) 

		values ('$produkt_title','$produkt_qmimi','$produkt_image','$produkt_keywords','$produkt_content','$viberNumber','$wpViber','$qyteti','$emriUser')";
		
		if(mysqli_query($con, $insert_query)){
			
		echo "<script>alert ('Produkti u publikua me sukses')</script>";
		
		}
	}	
}

?>
<?php } ?>