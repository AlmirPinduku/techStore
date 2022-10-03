<div id="">

<div id="">
	
	<form action="search.php" method="get" enctype="multi/form-data">
		<input type="text" name="value" placeholder="Kerko produktin" size="25">
		<input type="submit" name="search" placeholder="Kerko">	
	</form>

</div>

<h2>Produkti fundit</h2>
<div> 
<?php 
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");
    
$query = "select * from produktet order by 1 DESC";

	$run = mysqli_query($con, $query);
	
	while ($row=mysqli_fetch_array ($run)){
	
	$produkt_id = $row['produkt_id'];
	$title = $row['produkt_title'];
	$image = $row['produkt_image'];
	
	
?>
	<a href="pages.php?id=<?php echo $produkt_id; ?>">
		<?php echo $title; ?></a>
	
	<a href="pages.php?id=<?php echo $produkt_id; ?>">
	<img src='images/<?php echo $image; ?>'></a>

<?php } ?>

</div>



</div>