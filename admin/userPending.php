<?php
    session_start(); 
    include("functionss.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
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
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.38.1/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

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
    <div class="h-7 lg:flex w-full border-b border-gray-200 dark:border-gray-800 hidden px-10">
      <div class="flex h-full text-gray-600 dark:text-gray-400">
        <a href="./adminnav.php" class="cursor-pointer h-full border-b-2 border-transparent inline-flex items-center mr-8">All Produkts</a>
        <a href="./usersTable.php" class="cursor-pointer h-full border-b-2 border-transparent inline-flex items-center mr-8">Users</a>
        <a href="#" class="cursor-pointer h-full border-b-2 border-transparent inline-flex items-center mr-8">User Pending</a>
      </div>
      <div class="ml-auto flex items-center space-x-7">

        
          <span class="ml-2"><?php echo $_SESSION['type'] ?></span>
        
    
        </div>
        
    </div>
    <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
          
          <div class="flex items-center space-x-3 sm:mt-7 mt-4">
            <p class="px-3 border-b-2 border-blue-500 text-blue-500 dark:text-white dark:border-white pb-1.5">Users Pengind request</p>
            
          </div>
        </div>

    <main role="main">

<section class="flex justify-center text-center">
  <div class="container">
      <?php
      
          $query = "select * from `requests`;";
          if(count(fetchAll($query))>0){
              foreach(fetchAll($query) as $row){
                  ?>
          <div class="mt-10">
              <h1 class="text-xl"><?php echo $row['email'] ?></h1>
                <p class="text-base"><?php echo $row['message'] ?></p>
                <p>
                <button class="btn btn-outline btn-success">
                  <a href="accept.php?id=<?php echo $row['id'] ?>" class="">Accept</a>
                </button>

                <button class="btn btn-outline btn-error">
                  <a href="reject.php?id=<?php echo $row['id'] ?>" class="">Reject</a>
                </button>

                </p>
              <small><i><?php echo $row['date'] ?></i></small>
          </div>
      <?php
              }
          }else{
              echo "No Pending Requests.";
          }
      ?>
    
  </div>
    
</section>

</main>
  </div>
</div>

</header>
</body>
</html>