<?php 
$conn= mysqli_connect('localhost',"root","","railway");
$id=$_GET['p_id'];
$q="delete from ticketdetails where p_id='$id'";
$run=mysqli_query($conn,$q);
if($run){
    header('location:ticketdetail.php');
}
else{
  echo "<script> alert('Booking Deleted')</script>";
}
mysqli_close($conn);
?>