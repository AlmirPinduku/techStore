

<div class="flex-grow flex overflow-x-hidden">

      <div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
        <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
          
          <div class="flex items-center space-x-3 sm:mt-7 mt-4">
            <p class="px-3 border-b-2 border-blue-500 text-blue-500 dark:text-white dark:border-white pb-1.5">User details</p>
            
          </div>
        </div>
        <div class="sm:p-7 p-4">
          <div class="flex w-full items-center">
            
          </div>
          <table class="w-full text-left">
            <thead>
              <tr class="text-gray-400">
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">User ID</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Firstname</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">Lastname</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Email</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 sm:text-gray-400 text-white">Type</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 sm:text-gray-400 text-white">Password</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-100"></tbody>

                                
                    <?php
                    $con=mysqli_connect("localhost","root","","projekti");
                    mysqli_select_db($con,"projekti");

                    $query = "select * from accounts";

                    $run = mysqli_query($con, $query);

                    while($row=mysqli_fetch_array($run)){
                        
                        $user_id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $email = $row['email'];
                        $type = $row['type'];
                        $password = $row['password'];

                    ?>
              <tr>
              <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                  <div class="flex items-center">
                  <?php echo $user_id; ?>
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                  <div class="flex items-center">
                  <?php echo $firstname; ?>
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                  <div class="flex items-center">
                  <?php echo $lastname; ?>
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden"><?php echo $email; ?></td>

                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden"><?php echo $type; ?></td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden"><?php echo $password; ?></td>
 
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          
        
      </div>
    </div>

    	