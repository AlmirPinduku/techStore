<?php 

$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM produktet WHERE produkt_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);
	
?>
<html>
	<head>
		<title>Faqja per Admin</title>
				<link rel="stylesheet" href="../styles.css">
				<script src="https://cdn.tailwindcss.com"></script>
	</head>
<body class="bg-white">

<?php 	include("adminnav.php");?>

<h1 class="w-full flex justify-center items-center h-16 text-2xl bg-black text-white">Ndrysho produktin ketu</h1>

<?php
	while ($erow=mysqli_fetch_array($run_edit)){
?>
<form method="post"  enctype="multipart/form-data" action="edit_produkt_by_id.php" class="flex justify-center" >

	<table class="h-full w-screen container  mt-10">


		 <input type="hidden" name="id" size="30" value="<?php echo $erow['produkt_id']; ?>" >

		 <div class="flex w-fit">
			<tr>
				<td class="w-fit border-b-2 border-black">Emri Produktit:</td>
					<td class="border-b-2 border-black">
						<input class="w-full h-8" type="text" name="title" size="30" value="<?php echo $erow['produkt_title']; ?>" >
					</td>
			</tr>
		 </div>

		 <div>
			<tr>
				<td class="w-fit border-b-2 border-black">Fjalet kyqe te Produktit:</td>
					<td class="border-b-2 border-black">
						<input class="w-full h-8" type="text" name="keywords" size="30" value="<?php echo $erow['produkt_keywords']; ?>">
					</td>
			</tr>
		 </div>

		<div>
			<tr>
				<td class="w-fit border-b-2 border-black">Qmimi Produktit</td>
					<td class="border-b-2 border-black">
						<input class="w-full h-8" type="text" name="qmimi" size="30" value="<?php echo $erow['produkt_qmimi'];?>">
					</td>
			</tr>
		</div>

		<div>
			<tr>
			<td class="w-fit border-b-2 border-black">Foto e Produktit:</td>
				<td class="border-b-2 border-black flex justify-between items-center">
					<input type="file" name="image" placeholder="../images/<?php echo $erow['produkt_image'];?>">
					<img src="../images/<?php echo $erow['produkt_image'];?>" class="w-32 h-32 ">
				</td>
			</tr>
		</div>

		<div>
			<tr>
				<td class="w-fit border-b-2 border-black">Permbajtja e Produktit:</td>
				<td class="border-b-2 border-black">
						<textarea name="content" cols="150" rows="5"><?php echo $erow['produkt_content']; ?></textarea>
				</td>
			</tr>
		</div>


		<tr class="w-fit h-12">
			<td class=""><input type="submit" name="update" value="Ndryshoje tani" class="text-white bg-black px-6 py-2 rounded-xl"></td>
		</tr>
<?php
	}
}	
?>
	</table>
</form>
</body>
</html>
