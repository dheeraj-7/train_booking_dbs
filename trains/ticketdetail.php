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
<h2 class="mb-4"><center>Ticket Detail</center></h2>

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
                                                    
    <th>p_fname</th>
    <th>p_lname</th>
    <th>p_age</th>
    <th>p_gender</th>
    <th>p_berth</th>
    <th>View</th>
      </tr>     
     </thead>
       <tbody>
       <?php 
       $conn= mysqli_connect('localhost',"root","","railway");
          $query="select * from ticketdetails";
          $result=mysqli_query($conn,$query);
       while($rows=mysqli_fetch_assoc($result)){
      ?>    
      <tr>
                                                    
           <td><?php echo $rows['p_fname']; ?></td>
            <td><?php echo $rows['p_lname']; ?></td>
            <td><?php echo $rows['p_age']; ?></td>
            <td><?php echo $rows['p_gender']; ?></td>
            <td><?php echo $rows['p_berth']; ?></td>
            <td><a href="<?php echo '../trainbooking/uploads/'.$rows['document'];?>" target=blank><i class="fa fa-eye fa-2x" aria-hidden="true" style="color:red";></i></a>

              <a href="#deletebooking.php?id=<?php echo $rows['p_id'];?>"><i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red" onclick="myfun()"></i></a>
              <script>
function myfun() {
  alert("Successfully Deleted");
}
</script>
            
        </td>

       </tr>
        <?php
        }
      ?>
               </tbody>
             </table></center>                                
                                            

  </body>
</html>