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

<header class="text-white body-font bg-black">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <span class="ml-3 text-xl">Online <span class="text-yellow-500">Shopping</span></span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="view_produkt.php" class="mr-5"> <i class="fa-solid fa-list"></i> Shiko produktet</a>
      <a href="./insert_produkt.php" class="mr-5 "> <i class="fa-solid fa-plus"></i> Shto nje produkt te ri</a>
      <a href="../index.php" class="mr-5 "><i class="fa-solid fa-arrow-left"></i>  Go to home page</a>
    </nav>
    <button class="inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 hover:text-black rounded text-base mt-4 md:mt-0"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></button>
  </div>

</header>
</body>
</html>