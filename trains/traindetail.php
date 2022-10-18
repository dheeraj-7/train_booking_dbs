<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body{
        background-color: lightblue;
        padding-top: 100px;
      }
      img.avatar {
        width: 20%;
        border-radius: 30%;
        margin-left: 45px;
      }
      table, th, td{
        border: 2px solid black;
        padding: 6px;
        font-size: 20px;
        text-align: center;
        background-color: white;
      }
      th{
        background-color: cadetblue;
        color: ghostwhite;
      }
    </style>
  </head>
<h2 class="mb-4"><center>Train Details</center></h2>

        <?php 
$con = new mysqli('localhost','root','','railway');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

  </head>
  <body>
    
  <center>
    <table>
  <thead>
    <tr>
                                                    
    <th>t_no</th>
    <th>t_name</th>
    <th>t_source</th>
    <th>t_destination</th>
    <th>t_type</th>
    <th>t_status</th>
    <th>no_of_seats</th>
    <th>t_duration</th>
      </tr>     
     </thead>
       <tbody>
       <?php 
       $conn= mysqli_connect('localhost',"root","","railway");
          $query="select * from trains";
          $result=mysqli_query($conn,$query);
       while($rows=mysqli_fetch_assoc($result)){
      ?>    
      <tr>
                                                    
           <td><?php echo $rows['t_no']; ?></td>
            <td><?php echo $rows['t_name']; ?></td>
            <td><?php echo $rows['t_source']; ?></td>
            <td><?php echo $rows['t_destination']; ?></td>
            <td><?php echo $rows['t_type']; ?></td>
            <td><?php echo $rows['t_status']; ?></td>
            <td><?php echo $rows['no_of_seats']; ?></td>
            <td><?php echo $rows['t_duration']; ?></td>
            
        </td>

       </tr>
        <?php
        }
      ?>
               </tbody>
             </table></center>     <br>                           
             <form action="payment.html">                               
<center><input type="submit" value="Proceed to Payment" class="btn" style="background-color: blue; color: azure;"></center></form>
              
  </body>
</html>