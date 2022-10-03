<html>
	<head>
		<title>Miresevini ne marketin online</title>
		
<link rel="stylesheet" href="style.css" media="all">
	</head>

<body>
<div><?php include("includes/header.php")?></div>
<div><?php include("includes/navbar.php")?></div>

<div id="main_content">
<h1>Rezultati i kerkuar eshte ketu</h1>
<?php 
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_GET['search'])){
	
	$search_id = $_GET['value'];

	$search_query = "select * from produktet where produkt_title
	like '%$search_id%'";
	
	$run_query = mysqli_query($con, $search_query);
	
	while ($search_row=mysqli_fetch_array($run_query)){
	
	$produkt_id = $search_row['produkt_id'];
	$produkt_title = $search_row['produkt_title'];	
	$produkt_image = $search_row['produkt_image'];	
	$produkt_content = substr($search_row['produkt_content'],0,150);	
	
	?>
	<center>
	
	
	<h2>
	<a href="pages.php?id=<?php echo $produkt_id; ?>">
	<?php echo $produkt_title; ?>
	</h2>
	<img src="images/<?php echo $produkt_image; ?>" width="300" 
	height="100">
	
	<p><?php echo $produkt_content; ?></p>
        </a>
	</center>
<?php } }?>

</div>




<div><?php include("includes/sidebar.php")?></div>



<div id="footer">
<br />* Dizajnuar nga:<b>Arianit Tershnjaku Argjend Rifaj 
          dhe Emsal Halimi.</b> 2016 *
</div>
</body>
</html>