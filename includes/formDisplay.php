<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("creds.php");

$query = "SELECT form FROM `admin_functions`";
$success = mysqli_query($conn, $query);
if(!$success) {
    echo "$query";
    echo "<br><h4 class='text-center'>Something went wrong...</h4>";
} else {
    $row = $success->fetch_assoc();
    echo $row['form'];
}