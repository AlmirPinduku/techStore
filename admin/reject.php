<?php
include('functionss.php');
$id = $_GET['id'];

$query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
if (performQuery($query)) {
    echo "Account has been rejected.";
    header('location:./userPending.php');
} else {
    echo "Unknown error occured. Please try again.";
}

?>
<br /><br />