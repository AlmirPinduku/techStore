<?php
if (!isset($_SESSION)) {
	session_start();
}

if (!isset($_SESSION['user_name'])) {

	header("location: login.php");
} else {

?>

<html>

<head>
	<title>Faqja per Admin</title>
	<link rel="stylesheet" href="../styles.css">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<?php include("adminnav.php"); ?>

	<table class="h-full w-screen container justify-center ml-72">
		<h1 class="w-full flex justify-center items-center h-16 text-2xl bg-black text-white">Shiko te gjitha produktet
		</h1>
		<tr>
			<th>Nr.<br />Produktit:</th>
			<th>Qmimi Produktit</th>
			<th>Emri Produktit</th>
			<th>Foto e Produktit</th>
			<th>Permbajtja Produktit</th>
			<th>Fshirja<br />Produktit</th>
			<th>Ndryshimi<br />Produktit</th>
		</tr>

		<?php
	$con = mysqli_connect("localhost", "root", "", "projekti");
	mysqli_select_db($con, "projekti");

	$query = "select * from produktet order by 1 DESC";

	$run = mysqli_query($con, $query);

	while ($row = mysqli_fetch_array($run)) {

		$produkt_id = $row['produkt_id'];
		$produkt_title = $row['produkt_title'];
		$produkt_qmimi = $row['produkt_qmimi'];
		$produkt_image = $row['produkt_image'];
		$produkt_content = substr($row['produkt_content'], 0, 50);

?>
		<tr class="container border-t-2 border-black">

			<td class=" flex justify-center items-center h-full text-lg">
				<?php echo $produkt_id; ?>
			</td>

			<td><span class="flex justify-center items-center h-full">
					<?php echo $produkt_qmimi; ?>
				</span></td>

			<td class=" flex justify-center items-center h-full ">
				<?php echo $produkt_title; ?>...
			</td>

			<td><img src="../images/<?php echo $produkt_image; ?>" class="w-32 h-32 "></td>

			<td class=" flex justify-center items-center h-full border-r-2 ">
				<?php echo $produkt_content; ?>...
			</td>

			<td><a href="delete.php?delete=<?php echo $produkt_id; ?>"
					class=" flex justify-center items-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">Delete</a>
			</td>

			<td><a href="edit_produkt.php?edit=<?php echo $produkt_id; ?>"
					class=" flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
			</td>

		</tr>
		<?php } ?>


	</table>
</body>

</html>

<?php } ?>