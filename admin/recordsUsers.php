<?php
              
  $con = mysqli_connect("localhost","root","","projekti");

  $search = $_GET['search'];


  $query = "SELECT * FROM `accounts` WHERE firstname LIKE '%$search%'";


  $resultt = mysqli_query($con,$query);

  if(mysqli_num_rows($resultt)==0){
    echo "<tr><td colspan='2'>No records found!</td></tr>";
    exit;
  }

  while($data = mysqli_fetch_assoc($resultt))
  {
    ?>

    
<tr>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
            <p><?php echo "$data[id]" ?></p>
            
        </td>

        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
            <p><?php echo "$data[firstname]" ?></p>
        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                <p><?php echo "$data[lastname]" ?></p>
        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                <p><?php echo "$data[email]" ?></p>
        </td>

        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                <p><?php echo "$data[type]" ?></p>
        </td>

        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                <p><?php echo "$data[password]" ?></p>
        </td>
        

 
    <?php } ?>                 
    