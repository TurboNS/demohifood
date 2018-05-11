<?php
$host = "173.194.109.118";
$user = "turbo";
$pass = "turbo";
$db = "database";
$conn = mysqli_connect($host, $user, $pass) or die("cannot connect"); 
mysqli_select_db($conn, $db) or die("cannot select DB");
?>