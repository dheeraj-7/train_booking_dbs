<?php
   include('dbcon.php');
?>
<?php
   session_start();
?>

<?php
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password']; 
   $sql = "SELECT * FROM `users` WHERE `username` = '$username' and `password` = '$password'";
   $result = mysqli_query($connection, $sql);
      if(!$result){
         die("Your Login Name or Password is invalid");
      }
      else{
         $row = mysqli_num_rows($result);
         if($row == 1){
            $_SESSION['username'] = $username;
            header("location: home.php");
         }
         else{
            header("location: login.php?message=Invalid Username or Id");
         }
         
      }
   }
?>