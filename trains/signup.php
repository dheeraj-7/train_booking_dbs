<?php
   include('dbcon.php');
?>
<?php
if (isset($_POST['signup'])) {
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $username = $_POST['username'];
   $password = $_POST['password']; 
   $sql = "insert into `users` values('$name','$username','$password','$phone')";
   $result = mysqli_query($connection, $sql);
   header("location: login.php?popup=true");
}
?>