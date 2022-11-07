

<div class="flex-grow flex overflow-x-hidden">
      
        
      </div>
      <div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
        <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
          
          <div class="flex items-center space-x-3 sm:mt-7 mt-4">
            <a href="#" class="px-3 border-b-2 border-blue-500 text-blue-500 dark:text-white dark:border-white pb-1.5">All Produkts</a>
            
          </div>
        </div>
        <div class="sm:p-7 p-4">
          <div class="flex w-full items-center">
            
          </div>
          <table class="w-full text-left">
            <thead>
              <tr class="text-gray-400">
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Produkt ID</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Produkt Title</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Cmimi</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">Description</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">.</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 sm:text-gray-400 text-white">Status</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-100"></tbody>

                                
                    <?php
                    $con=mysqli_connect("localhost","root","","projekti");
                    mysqli_select_db($con,"projekti");

                    $query = "select * from produktet order by 1 DESC";

                    $run = mysqli_query($con, $query);

                    while($row=mysqli_fetch_array($run)){
                        
                        $produkt_id = $row['produkt_id'];
                        $produkt_title = $row['produkt_title'];
                        $produkt_qmimi = $row['produkt_qmimi'];
                        $produkt_image = $row['produkt_image'];
                        $produkt_content = substr($row['produkt_content'],0,20);

                    ?>
              <tr>
              <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                  <div class="flex items-center">
                  <?php echo $produkt_id; ?>
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                  <div class="flex items-center">
                  <?php echo $produkt_title; ?>
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                  <div class="flex items-center">
                  <?php echo $produkt_qmimi; ?>
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden"><?php echo $produkt_content; ?></td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 text-red-500"><a href="delete.php?delete=<?php echo $produkt_id; ?>"class=" flex justify-center items-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">Delete</a></td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                        
                    <a href="edit_produkt.php?edit=<?php echo $produkt_id; ?>" class=" flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          
        
      </div>
    </div>

    	