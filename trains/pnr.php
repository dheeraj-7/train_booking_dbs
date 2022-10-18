<?php 
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
  echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$pnr=$_POST['pnr'];
$sql = "SELECT t_status FROM tickets WHERE PNR= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
  if($row==NULL)  
    echo "<script type='text/javascript'>alert('PNR not found');</script>";
  else 
    echo "<script type='text/javascript'>alert('Your status is ' +'$row[t_status]');</script>";  
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>PNR Status</title>
  <style type="text/css">
    #pnr  {
      font-size: 20px;
      background-color: white;
      width: 500px;
      height: 300px;
      margin: auto;
      border-radius: 25px;
      border: 2px solid blue; 
      margin: auto;
        position: absolute;
        left: 0; 
        right: 0;
        padding-top: 40px;
        padding-bottom:20px;
        margin-top: 130px;
 
    }
    html {  
      background-size: cover;
    }
    #pnrtext  {
      padding-top: 20px;
    }
  </style>
</head>
<body>
<center>
  <div id="pnr">Check your PNR status here:<br/><br/>
  <form method="post" name="pnrstatus" action="pnr.php">
  <div id="pnrtext">
    <input type="text" name="pnr" size="30" maxlength="10" placeholder="Enter PNR here">
  </div>
  <br/><br/>
  <input type="submit" name="submit" value="Check here!" class="button" id="submit"><br/><br/>
  </form>
  </div>
</center>
</body>
</html>