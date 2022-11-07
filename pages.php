<html>

<head>
  <title>Produkti</title>
  <link href="styles.css" rel="stylesheet">
  <link href="./nav.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//code.tidio.co/fptihodyl0nxqlspzxvujwsxyrpxttll.js" async></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-black">

  <?php
$con = mysqli_connect("localhost", "root", "", "projekti");
mysqli_select_db($con, "projekti");

if (isset($_GET['id'])) {

  $page_id = $_GET['id'];

  $select_query = "select * from produktet where produkt_id='$page_id'";

  $run_query = mysqli_query($con, $select_query);

  while ($row = mysqli_fetch_array($run_query)) {

    $produkt_id = $row['produkt_id'];
    $produkt_title = $row['produkt_title'];
    $produkt_qmimi = $row['produkt_qmimi'];
    $produkt_image = $row['produkt_image'];
    $produkt_keywords = $row['produkt_keywords'];
    $produkt_content = $row['produkt_content'];
    $viberNumber = $row['viberNumber'];
    $wpViber = $row['wpNumber'];
    $qyteti = $row['qyteti'];
    $emriUser = $row['emriUser'];
    $date = $row['data'];


?>
  <div class="bg-black">
    <div class="pt-20">
      <header class="">
        <a href="index.php" class="logo"><span>techStore</span></a>
        <div class="main">
        </div>
      </header>

      <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
        <div class="aspect-w-3 aspect-h-4 overflow-hidden rounded-lg lg:block">
          <img src="./images/<?php echo $produkt_image; ?>" alt="techStore"
            class="h-full w-full object-cover object-center">
        </div>
        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
          <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
            <!-- <h1>ALMIR</h1> -->
          </div>
          <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
            <!-- <h1>ALMIR</h1> -->
          </div>
        </div>
        <div class="aspect-w-4 aspect-h-5 sm:overflow-hidden sm:rounded-lg lg:aspect-w-3 lg:aspect-h-4">
          <!-- <h1>ALMIR</h1> -->
        </div>
      </div>

      <div
        class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h2 class="text-xs pr-4 font-medium text-gray-400">Data e publikimit -
            <?php echo $row['data']; ?>
          </h2>
          <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
            <?php echo $row['produkt_title']; ?>
          </h1>
        </div>

        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <p class="text-1xl tracking-tight text-white">Emri i Publikuesit - <span class="text-yellow-500">
              <?php
    if ($emriUser) {
      echo $emriUser;
    } else {
      echo "Nuk ka emër!";
    }

          ?>
            </span></p>
          <p class="text-3xl tracking-tight text-white">
            <?php echo $row['produkt_qmimi']; ?>
          </p>

          <div class="h-14 flex justify-start items-center mt-4 ">
            <button id="whatsapp"
              class="bg-white duration-500 mr-3   w-12 h-12 border-2 rounded-full border-green-600 transform hover:-translate-y-3  text-2xl text-green-500 hover:bg-green-600 hover:text-white">
              <i class="fab fa-whatsapp"></i>
            </button>
            <?php
    if ($wpViber) {
      echo $wpViber;
    } else {
      echo "Nuk ka numër të WhatsAppit!";
    }


            ?>
          </div>

          <div class="h-14 flex justify-start items-center mt-4 ">
            <button id="discord"
              class="bg-white transform hover:-translate-y-3 mr-3  border-2 w-12 h-12 rounded-full duration-500 text-indigo-500 border-indigo-500 hover:bg-indigo-500 hover:text-white text-2xl">
              <i class="fa-brands fa-viber"></i>
            </button>
            <?php
    if ($viberNumber) {
      echo $viberNumber;
    } else {
      echo "Nuk ka numër të Viberit!";
    }
            ?>
          </div>
        </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
          <div>
            <h3 class="text-xl text-gray-400">Description rreth produktit</h3>

            <div class="space-y-6">
              <p class="text-base text-white p-4">
                <?php echo $produkt_content; ?>
              </p>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>


  <?php }
} ?>
  </div>




  </div>
</body>

</html>