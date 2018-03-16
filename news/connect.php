<?php
$servername="localhost";
$username="root";
$password="";
$db="news";
$conn = mysqli_connect($servername,$username,$password)or die ("connection failed:" . mysql_connec());
mysqli_select_db($conn,$db);
?>
