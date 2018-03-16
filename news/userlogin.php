<?php
include 'login.html'
if(isset($_POST('submit'))){
         $username=$_POST('username');
         $password=$_POST('password');
         $qry = select * from 'user' where 'username'='$username';
         $sql = mysqli_query($conn,$qry) or die ('connection failed'.mysql_error($conn));
         if($mysql_num_rows($sql)>0){
               $row=mysqli_fetch_assoc($sql);
               $_SESSION('username')=$row['$username'];
               $_SESSION('password')=$row['$password'];
               header('location:login.html')
         }
         else{      
               $message="Invalid login"   
               echo "<script type='text/javascript'>alert($message)</script>";
               }
    }
    ?>           
    <!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<style>
</style>
<body>
<button type="button">LOGIN</button>
<cnter><h1>LOGIN PAGE</h1></center>
loginname:
<input type="next"id="my test" value="name"><br>
password:<input type="password"id="my test"value="password"><br>
<button type="button">submit</button>
<button type="button">forget password</button>
<br>


</form>
</body>
</head>
</html>
