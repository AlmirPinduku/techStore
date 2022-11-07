<div class="col-span-12 mt-5">
  <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
      <div class="bg-white p-4 shadow-lg rounded-lg">
          <h1 class="font-bold text-base">Table</h1>
          <div class="mt-4">
              <div class="flex flex-col">
                  <div class="-my-2 overflow-x-auto">
                      <div class="py-2 align-middle inline-block min-w-full">
                          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                              <table class="min-w-full divide-y divide-gray-200">
                                  <thead>
                                      <tr>
                                          <th
                                              class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">ID</span>
                                              </div>
                                          </th>
                                          <th
                                              class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">FIRST NAME</span>
                                              </div>
                                          </th>
                                          <th
                                              class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">LAST NAME</span>
                                              </div>
                                          </th>
                                          <th
                                              class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">EMAIL</span>
                                              </div>
                                          </th>
                                          <th
                                              class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">TYPE</span>
                                              </div>
                                          </th>
                                          <th
                                              class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">PASSWORD</span>
                                              </div>
                                          </th>
                                      </tr>
                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-gray-200" id="table_data"></tbody>

                                
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
              
              <?php } ?>
                
              </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    	
  <script>

    function load_data(search='')
    {
      let xhr = new XMLHttpRequest();

      xhr.open("GET","recordsUsers.php?search="+search,true);

      xhr.onprogress = function(){
        document.getElementById('table_data').innerHTML = `<div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>`;
      }

      xhr.onload = function(){
        document.getElementById('table_data').innerHTML = xhr.responseText;
      }

      xhr.send();
    }

    load_data();
</script>