<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "news" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die("DB Connection failed");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,$db);

?>
