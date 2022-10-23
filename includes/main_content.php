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

                <img img src="images/<?php echo $produkt_image; ?>" class="hover:grow hover:shadow-lg"/>
                <div class="pt-3 flex items-center justify-between">
                    <p class=""><?php echo $produkt_title; ?> </p>
                    
                </div>
                <p class="pt-1 text-gray-900"><?php echo $produkt_qmimi; ?> </p>
<?php } ?>


</body>
</html>