<?php
// Connect to dataase
$database = "dotcomgr_grc";
$username = "dotcomgr_user";
$password = "DotcomUserPass1";
$hostname = "localhost";

$conn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem");


// var_dump($cnxn);