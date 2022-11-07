<?php

$con = mysqli_connect("localhost", "root", "", "projekti");

$search = $_GET['search'];


$query = "SELECT * FROM `produktet` WHERE produkt_title LIKE '%$search%'";


$resultt = mysqli_query($con, $query);

if (mysqli_num_rows($resultt) == 0) {
    echo "<tr><td colspan='2'>No records found!</td></tr>";
    exit;
}

while ($data = mysqli_fetch_assoc($resultt)) {
?>

<tr>
    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
        <p>
            <?php echo "$data[produkt_id]" ?>
        </p>

    </td>

    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
        <p>
            <?php echo "$data[produkt_title]" ?>
        </p>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
        <div class="flex text-green-500">
            <p>
                <?php echo "$data[produkt_qmimi]" ?>
            </p>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
        <p>
            <?php echo "$data[produkt_content]" ?>
        </p>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
        <div class="flex space-x-4">
            <a href="edit_produkt.php?edit=<?php echo "$data[produkt_id]" ?>" class="text-blue-500 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <p>Edit</p>
            </a>
            <a href="delete.php?delete=<?php echo "$data[produkt_id]" ?>" class="text-red-500 hover:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                <p>Delete</p>
            </a>
        </div>
    </td>
</tr>
<tr>

    <?php } ?>