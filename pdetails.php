<?php 
 include 'connect.php';
  ?>

<html>   
<head>   

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="header.css">
</head>
<body>
  <?php 
 require 'header.php';
 ?>
<style>
body{
 background-image: linear-gradient(to right, lightsalmon, lightyellow);
}
</style>
<br/> 
<div class="container">
  <h2>PERSONAL DEATILS' FORM </h2>
  <form action="pdetails.php" method= "post">
    <div class="form-group">
      <label for="NO">Id Number:</label>
      <input type="text" class="form-control" id="NO" placeholder="Enter Number" name="NO">
    </div>
    <div class="form-group">
      <label for="Flight">Flight</label>
      <input type="text" class="form-control" id="Flight" placeholder="Enter Flight" name="Flight">
    </div>
    <div class="form-group">
      <label for="Room">Room</label>
      <input type="int" class="form-control" id="Room" placeholder="Enter Room" name="Room">
    </div>
    


   
    <button type="submit" name = "submit">Submit</button>
  </form>
</div>



<div class="container">
  <h2>Personal Details</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Number</th>
        <th>Flight</th>
        <th>Room</th>
      </tr>
    </thead>
  
<?php

  $sql = "SELECT NO, Flight, Room from pdetails";
        $result = $conn -> query ($sql);
        if ($result -> num_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["NO"]. "</td><td>". $row["Flight"]. "</td><td>". $row["Room"]."</td></tr>";
            }
            echo "</table>";
        }
        else 
        {
            echo "0 result"; 
        }
    
        $conn->close();
    ?>
  </table>
</div>




<?php 

$sql = "SELECT NO, Flight, Room from pdetails";
$result = $conn->query($sql);

 


 if(isset($_POST['submit']))
 {
     if(!empty($_POST['NO']) && !empty($_POST['Flight']) && !empty($_POST['Room'] )){
         $NO = $_POST['NO'];
         $Flight = $_POST['Flight'];
         $Room = $_POST['Room']; 
 
         $query = "insert into pdetails (NO, Flight, Room) values ('$NO','$Flight','$Room')";
 
         $run = mysqli_query($conn, $query) or die (mysqli_error());
 
         if($run)
         {
             echo "Data added successfully";
         }
         else 
         {
             echo "Data could not be added";
         }
 
     }
    
     else
     {
         echo "Please input data for all fields";
 
     }
 }




  $conn->close();


?>

</body>
</html>