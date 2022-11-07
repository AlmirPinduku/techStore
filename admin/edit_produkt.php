<?php 

$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM produktet WHERE produkt_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen flex overflow-hidden text-sm">
  <div class="bg-white dark:bg-gray-900 dark:border-gray-800 w-20 flex-shrink-0 border-r border-gray-200 flex-col hidden sm:flex">
  <div class="mt-10 text-gray-300 flex items-center justify-center">
      <p>techStore</p>
    </div>
    <div class="mb-5 text-yellow-500 flex items-center justify-center">
      <p>Admin Nav</p>
    </div>
    <div class="flex mx-auto flex-grow mt-4 flex-col text-gray-400 space-y-4">
		<a href="./adminnav.php">
      <button class="h-10 w-12 dark:text-gray-500 rounded-md flex items-center justify-center">
        <svg viewBox="0 0 24 24" class="h-5" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
          <polyline points="9 22 9 12 15 12 15 22"></polyline>
        </svg>
      </button> 
	  </a>
      
    </div>
  </div>
  <div class="flex-grow overflow-hidden h-full flex flex-col">
    <div class="h-16 lg:flex w-full border-b border-gray-200 dark:border-gray-800 hidden px-10">
      
      <div class="ml-auto flex items-center space-x-7">

        
          <span class="ml-2">James Smith</span>
        
      </div>
    </div>
   
<?php
while ($erow=mysqli_fetch_array($run_edit)){
?>
<form method="post"  enctype="multipart/form-data" action="edit_produkt_by_id.php"  >

<table class="h-full w-screen container  mt-10">
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md mt-10">
				<h1 class="text-xl font-bold text-black capitalize ">Edito shpalljen ne techStore</h1>
				<form action="shtoProdukt.php" enctype="multipart/form-data" method="POST">
					<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
						<div>
							<label class="text-black " for="username">Id i produktit</label>
							<input id="username" type="text" readonly="readonly" name="id" value="<?php echo $erow['produkt_id']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="emailAddress">Emri Produktit</label>
							<input id="emailAddress" type="text" name="title" value="<?php echo $erow['produkt_title']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="password">Emri i Shpallesit Se Produktit</label>
							<input id="password" type="text" name="keywords" value="<?php echo $erow['produkt_keywords']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">Numri i viber</label>
							<input id="passwordConfirmation" type="text" name="viberNumberr"  value="<?php echo $erow['viberNumber']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black">Viber Number</label>
							<input id="password" type="text" name="wpNumberr"  value="<?php echo $erow['wpNumber']; ?>"  class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">Cmimi i produktit</label>
							<input id="passwordConfirmation" type="text" name="qmimi" value="<?php echo $erow['produkt_qmimi'];?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>
						
					
						<div>
							<label class="text-black" for="passwordConfirmation">Pershkrimi i Produktit</label>
							<textarea id="textarea" type="textarea" name="content" rows="5"class="block w-full px-4 py-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none"><?php echo $erow['produkt_content']; ?></textarea>
						</div>


						<div>
							<label class="block text-sm font-medium text-white">
							Foto e Produktit
						</label>
						<div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
							<div class="space-y-1 text-center">
							
							<div class="flex text-sm text-gray-600">
								<label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-black hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
								<span class="">Upload a file</span>
								<input id="file-upload" name="image" placeholder="../images/<?php echo $erow['produkt_image'];?>" type="file" class="sr-only">
								<img src="../images/<?php echo $erow['produkt_image'];?>" class="w-32 h-32 ">
								</label>
								
							</div>
							
							</div>
						</div>
						</div>
					</div>

					<div class="flex justify-end mt-6">
					<input type="submit" name="update" value="Ndryshoje tani"class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
									</div>
				</form>
			</section>

<?php
}
}	
?>
</table>
</form>
  </div>
</div>

</header>
</body>
</html>