<?php

if (isset($_SESSION['email'])) {
	session_start();
} else {

?>

<html>

<head>
	<link rel="stylesheet" href="../styles.css">
	<link href="./nav.css" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">

	<header class="">
		<a href="./index.php" class="logo"><span>techStore</span></a>
	</header>

	<div class=" w-full mt-24 container mx-auto">
		<div class="w-full mt-10">

			<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
				<h1 class="text-xl font-bold text-black capitalize ">Krijo nje shpalle nje techStore</h1>
				<form action="shtoProdukt.php" enctype="multipart/form-data" method="POST">
					<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
						<div>
							<label class="text-black " for="username">Emri i Produktit</label>
							<input id="username" type="text" name="title"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="emailAddress">Çmimi në Euro</label>
							<input id="emailAddress" type="text" name="qmimi" value="€"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="password">Emri i Shpallesit Se Produktit</label>
							<input id="password" type="text" name="emriUser"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">Qyteti</label>
							<input id="passwordConfirmation" type="text" name="qyteti"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="password">Viber Number</label>
							<input id="password" type="text" name="viberNumber"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">WhatsApp Number</label>
							<input id="passwordConfirmation" type="text" name="wpNumber"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">Brandi</label>
							<select name="keywords"
								class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
								<option value="Apple">Apple</option>
								<option value="Dell">Dell</option>
								<option value="Lenovo">Lenovo</option>
							</select>
						</div>
						<br>
						<div>
							<label class="text-black" for="passwordConfirmation">Pershkrimi i Produktit</label>
							<textarea id="textarea" type="textarea" name="content" rows="5"
								class="block w-full px-4 py-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none"></textarea>
						</div>


						<div>
							<label class="block text-sm font-medium text-white">
								Foto e Produktit
							</label>
							<div
								class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
								<div class="space-y-1 text-center">
									<svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none"
										viewBox="0 0 48 48" aria-hidden="true">
										<path
											d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<div class="flex text-sm text-gray-600">
										<label for="file-upload"
											class="relative cursor-pointer bg-white rounded-md font-medium text-black hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
											<span class="">Upload a file</span>
											<input id="file-upload" name="image" type="file" class="sr-only">
										</label>
										<p class="pl-1 text-zinc-600">or drag and drop</p>
									</div>
									<p class="text-xs text-zinc-600">
										PNG, JPG, GIF up to 10MB
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="flex justify-end mt-6">
						<button type="submit" name="submit"
							class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Shto
							Produktin</button>
					</div>
				</form>
			</section>

		</div>
	</div>
</body>

</html>


<?php
	$con = mysqli_connect("localhost", "root", "", "projekti");
	mysqli_select_db($con, "projekti");

	if (isset($_POST['submit'])) {

		$produkt_title = $_POST['title'];
		$produkt_qmimi = $_POST['qmimi'];
		$produkt_keywords = $_POST['keywords'];
		$produkt_content = $_POST['content'];
		$viberNumber = $_POST['viberNumber'];
		$wpViber = $_POST['wpNumber'];
		$qyteti = $_POST['qyteti'];
		$emriUser = $_POST['emriUser'];


		$produkt_image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];


		if ($produkt_title == '' or $produkt_keywords == '' or $produkt_content == '') {

			echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";

			exit();
		} else {
			move_uploaded_file($image_tmp, "./images/$produkt_image");

			$insert_query = "insert into produktet

        (produkt_title,produkt_qmimi,produkt_image,produkt_keywords,produkt_content,viberNumber,wpNumber,qyteti,emriUser) 

		values ('$produkt_title','$produkt_qmimi','$produkt_image','$produkt_keywords','$produkt_content','$viberNumber','$wpViber','$qyteti','$emriUser')";

			if (mysqli_query($con, $insert_query)) {

				echo "<script>alert ('Produkti u publikua me sukses')</script>";

			}
		}
	}

?>
<?php } ?>