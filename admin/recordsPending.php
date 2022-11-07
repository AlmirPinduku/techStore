<?php
              
  $con = mysqli_connect("localhost","root","","projekti");

  $search = $_GET['search'];


  $query = "SELECT * FROM `requests` WHERE firstname LIKE '%$search%'";


  $resultt = mysqli_query($con,$query);

  if(mysqli_num_rows($resultt)==0){
    echo "<tr><td colspan='2'>No records found!</td></tr>";
    exit;
  }

  while($data = mysqli_fetch_assoc($resultt))
  {
    ?>

<tr>
  <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex items-center">
                        <?php echo "$data[id]" ?>
                        </div>
                      </td>
                    <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex items-center">
                        <?php echo "$data[email]" ?>
                        </div>
                      </td>
                      <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex items-center">
                        <?php echo "$data[message]" ?>
                        </div>
                      </td>
                      
                      <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden"><?php echo "$data[date]" ?></td>

                      <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 text-red-500"><a href="reject.php?id=<?php echo "$data[id]" ?>"class=" flex justify-center items-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">Reject</a></td>
                      <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800"> <a href="accept.php?id=<?php echo "$data[id]" ?>" class="flex justify-center items-center focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Accept</a></td>
                      
                    </tr>
    
    <?php } ?>                 
    