<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="styles.css" rel="stylesheet">
  <link href="../input.css" rel="stylesheet">
  <script defer src="appp.js"></script>
</head>
<body>
	
<?php
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

$select_produktet = "select * from produktet order by rand() LIMIT 0,1";

$run_produktet = mysqli_query($con, $select_produktet);

while($row=mysqli_fetch_array($run_produktet)){
	
	$produkt_id = $row['produkt_id'];
	$produkt_title = $row['produkt_title'];
	$produkt_qmimi = $row['produkt_qmimi'];
	$produkt_image = $row['produkt_image'];
	$produkt_keywords = $row['produkt_keywords'];
	$produkt_content = substr($row['produkt_content'],0,200);
	

?>	

<div class="flex flex-wrap -m-4 logoo section2animation">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-500 bg-opacity-40 p-6 rounded-lg">
		<img src="images/<?php echo $produkt_image; ?>" class="h-40 rounded w-full object-cover object-center mb-6"/>
		  <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Apple</h3>
          <a  class="text-lg text-white font-medium title-font mb-4" href="pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="leading-relaxed text-base"><?php echo $produkt_content; ?>... <a href="pages.php?id=<?php echo $produkt_id; ?>"><span class = "text-white">Read More</span></a></p>
		  <p class="text-lg text-white font-medium title-font mt-2"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-500 bg-opacity-40 p-6 rounded-lg">
		<img src="images/<?php echo $produkt_image; ?>" class="h-40 rounded w-full object-cover object-center mb-6"/>          <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Apple</h3>
          <a  class="text-lg text-white font-medium title-font mb-4" href="pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="leading-relaxed text-base"><?php echo $produkt_content; ?>... <a href="pages.php?id=<?php echo $produkt_id; ?>"><span class = "text-white">Read More</span></a></p>
		  <p class="text-lg text-white font-medium title-font mt-2"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-500 bg-opacity-40 p-6 rounded-lg">
		<img src="images/<?php echo $produkt_image; ?>" class="h-40 rounded w-full object-cover object-center mb-6"/>          <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Apple</h3>
          <a  class="text-lg text-white font-medium title-font mb-4" href="pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="leading-relaxed text-base"><?php echo $produkt_content; ?>... <a href="pages.php?id=<?php echo $produkt_id; ?>"><span class = "text-white">Read More</span></a></p>
		  <p class="text-lg text-white font-medium title-font mt-2"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-500 bg-opacity-40 p-6 rounded-lg">
		<img src="images/<?php echo $produkt_image; ?>" class="h-40 rounded w-full object-cover object-center mb-6"/>          <h3 class="tracking-widest text-yellow-400 text-xs font-medium title-font">Apple</h3>
          <a  class="text-lg text-white font-medium title-font mb-4" href="pages.php?id=<?php echo $produkt_id; ?>"><?php echo $produkt_title; ?> </a>
          <p class="leading-relaxed text-base"><?php echo $produkt_content; ?>... <a href="pages.php?id=<?php echo $produkt_id; ?>"><span class = "text-white">Read More</span></a></p>
		  <p class="text-lg text-white font-medium title-font mt-2"><?php echo $produkt_qmimi; ?></p>
        </div>
      </div>
	  
    </div>
<?php } ?>


</body>
</html>