<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../styles.css" rel="stylesheet">
  <link href="../input.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class = "bg-black">
<?php include("./navbar.php") ?>
<h1 class="sm:text-3xl text-2xl text-white bg-black body-font container px-5 pt-10 mx-auto w-full p-4">Everything available in the store</h1>

<?php
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

$query = "select * from produktet order by rand() LIMIT 0,3";

$run = mysqli_query($con, $query);


while($row=mysqli_fetch_array($run)){
	
	$produkt_id = $row['produkt_id'];
	$produkt_qmimi = $row['produkt_qmimi'];
	$produkt_title = $row['produkt_title'];
	$produkt_image = $row['produkt_image'];
	$produkt_content = substr($row['produkt_content'],0,100);

?>
<section class="text-black bg-[#e1e1e1] body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img class="object-cover object-center w-full h-full block" src="../images/<?php echo $produkt_image; ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Apple</h3>
		  <a  class="text-lg text-black font-medium title-font mb-4" href="../pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="mt-1"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

    </div>
  </div>
</section>
<?php } ?>
	<?php include('./footer.php');?>
</body>
</html>