<?php

if (isset($_SESSION['user_name'])) {
  session_start();

} else {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping</title>
  <link href="styles.css" rel="stylesheet">
  <link href="./nav.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//code.tidio.co/fptihodyl0nxqlspzxvujwsxyrpxttll.js" async></script>
  <script defer src="app.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

  <header class="">
    <a href="index.php" class="logo"><span>techStore</span></a>
    <div class="main">
      <a href="./shtoProdukt.php" class="user"><i class="fa-solid fa-plus"></i>Krijo një shpallje</a>
    </div>
  </header>

  <section
    class="w-full mx-auto bg-nordic-gray-light flex pt-16 md:pt-0 md:items-center bg-cover bg-right max-w-full bg-black"
    style="max-width:1600px; height: 19rem; background-image: url('./images/bannerr.png');">
    <div class="container mx-auto flex justify-center h-12">

      <form action="search.php" method="get" enctype="multi/form-data" class="w-full flex justify-center max-w-7xl ">
        <input type="text" name="value" placeholder="Kerko produktin
              " size="25" class="w-full pl-3 rounded-md">

        <button type="submit" name="search" class="btn btn-outline btn-info ml-4">SEARCH </button>
      </form>


      <?php
  $con = mysqli_connect("localhost", "root", "", "projekti");
  mysqli_select_db($con, "projekti");

  if (isset($_GET['search'])) {

    $search_id = $_GET['value'];

    $search_query = "select * from produktet where produkt_title
                  like '%$search_id%'";

    $run_query = mysqli_query($con, $search_query);

    while ($search_row = mysqli_fetch_array($run_query)) {

      $produkt_id = $search_row['produkt_id'];
      $produkt_title = $search_row['produkt_title'];
      $produkt_image = $search_row['produkt_image'];
      $produkt_content = substr($search_row['produkt_content'], 0, 150);

                    ?>


      <?php }
  } ?>
    </div>
  </section>


  <section class="">
    <div class="container px-6 py-8 mx-auto">
      <div class="lg:flex lg:-mx-2">
        <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
          <h1 class="flex justify-center text-2xl text-black uppercase ">Top Brendet</h1>
          <div class=" flex flex-col">
            <div class="border-b-2 border-black opacity-70"></div>
            <?php
  $con = mysqli_connect("localhost", "root", "", "projekti");
  mysqli_select_db($con, "projekti");


  $query = "SELECT DISTINCT `produkt_keywords` FROM `produktet`";

  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {

    $produkt_keywords = $row['produkt_keywords'];

                  ?>
            <a href="topprodukts.php?produkt_keywords=<?php echo $produkt_keywords; ?>" class="mt-2">
              <?php echo $produkt_keywords; ?>
            </a>


            <?php } ?>

            <div class="border-b-2 border-black opacity-70 mt-2"></div>
          </div>
        </div>


        <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5">
          <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
            <h1 class="text-2xl text-black">Shpalljet e Fundit</h1>
          </div>
          <div class="border-b-2 border-black opacity-70 w-full mt-4"></div>
          <?php
  $con = mysqli_connect("localhost", "root", "", "projekti");
  mysqli_select_db($con, "projekti");

  if (isset($_GET['produkt_keywords'])) {

    $produkt_keywords = $_GET['produkt_keywords'];

    $select_query = "select * from produktet where produkt_keywords='$produkt_keywords'";

    $run_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_array($run_query)) {

      $produkt_id = $row['produkt_id'];
      $produkt_title = $row['produkt_title'];
      $produkt_qmimi = $row['produkt_qmimi'];
      $produkt_image = $row['produkt_image'];
      $produkt_keywords = $row['produkt_keywords'];
      $qyteti = $row['qyteti'];
      $data = $row['data'];
      $produkt_content = substr($row['produkt_content'], 0, 30);


                ?>
          <div class="grid grid-cols-1 gap-1 mt-2 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 mb-2">
            <section class="w-full mt-3">
              <a href="pages.php?id=<?php echo $produkt_id; ?>"
                class="flex flex-col items-center bg-[#242424] rounded-lg border shadow-md md:flex-row hover:bg-gray-100 dark:border-black  dark:hover:bg-[#191919]">

                <img
                  class="bg-white p-4 object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                  src="./images/<?php echo $produkt_image; ?>" alt="erorr404">

                <div class="flex flex-col justify-between p-4 leading-normal">


                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">
                    <?php echo $produkt_title; ?>
                  </h5>
                  <p class="mb-3 font-normal text-white opacity-70">
                    <?php echo $produkt_content; ?>...
                  </p>
                  <div class="flex text-white">
                    <p class="text-sm flex mr-6"><span class="opacity-75">Brandi: </span> <span
                        class="text-white font-bold underline ml-1">
                        <?php
      if ($produkt_keywords) {
        echo $produkt_keywords;
      } else {
        echo "#";
      }
                                        ?>

                      </span></p>

                    <p class="text-sm flex mr-6"><span class="opacity-75">Çmimi: </span> <span
                        class="text-white font-bold underline ml-1">
                        <?php
      if ($produkt_qmimi) {
        echo $produkt_qmimi;
      } else {
        echo "#";
      }
                                      ?>

                      </span></p>
                    <p class="text-sm flex mr-6"><span class="opacity-75">Qyteti: </span> <span
                        class="text-white font-bold underline ml-1">
                        <?php
      if ($qyteti) {
        echo $qyteti;
      } else {
        echo "#";
      }
                                      ?>

                      </span></p>
                    <p class="text-sm flex mr-6"><span class="opacity-75">Data: </span> <span
                        class="text-white font-bold underline ml-1">
                        <?php echo $data; ?>
                      </span></p>
                  </div>
                </div>
              </a>
            </section>
          </div>

          <?php } ?>

        </div>
      </div>
    </div>
  </section>




</body>

</html>
<?php }
} ?>