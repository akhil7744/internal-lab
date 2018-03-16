<?php 
   include "connect.php";
   
   if(isset($_POST['sub'])) {
      $f = $_POST['fname'];
      $l = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['pwd'];      
      $qry = "INSERT INTO register (name, userid, email, password) VALUES ('$userid', '$name', '$email', '$password')";
      
      mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);

      header('location:login.html');
      /*echo $qry."<br/>";*/
   }
 ?>
