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
     <div class="form-group">
      <label for="Visareq">Visareq</label>
      <input type="int" class="form-control" id="Visareq" placeholder="Enter requirement" name="Visareq">
    </div>
     <div class="form-group">
      <label for="Country">Country</label>
      <input type="int" class="form-control" id="Country" placeholder="Enter Country" name="Country">
    </div>
     <div class="form-group">
      <label for="IDS">IDS</label>
      <input type="int" class="form-control" id="IDS" placeholder="Enter IDS" name="IDS">
    </div>
    <button type="submit" name = "submit">Submit</button>
  </form>
</div>



<div class="container">
  <h2>Personal Details</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>NO</th>
        <th>Flight</th>
        <th>Room</th>
        <th>Visareq</th>
        <th>Country </th>
        <th> IDS </th>
        
      </tr>
    </thead>
  
<?php

  $sql = "SELECT NO, Flight, Room, Visareq, Country, IDS from pdetails";
        $result = $conn -> query ($sql);
        if ($result -> num_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["NO"]. "</td><td>". $row["Flight"]. "</td><td>". $row["Room"]."</td><td>". $row["Visareq"]. "</td><td>". $row["Country"]. "</td><td>". $row["IDS"]. "</td></tr>";
            }
            echo "</table>";
        }
        else 
        {
            echo "0 result"; 
        }
    
      
$sql = "SELECT NO, Flight, Room, Visareq, Country, IDS from pdetails";
$result = $conn->query($sql);

 


 if(isset($_POST['submit']))
 {
     if(!empty($_POST['NO']) && !empty($_POST['Flight']) && !empty($_POST['Room'] ) && !empty($_POST['Visareq'] ) && !empty($_POST['Country'] ) && !empty($_POST['IDS'] )){
         $NO = $_POST['NO'];
         $Flight = $_POST['Flight'];
         $Room = $_POST['Room']; 
         $Visareq= $_POST['Visareq'];
         $Country= $_POST['Country'];
         $IDS= $_POST['IDS'];
        
 
         $query = "INSERT into pdetails (NO, Flight, Room, Visareq, Country, IDS) VALUES ('$NO','$Flight','$Room','$Visareq', '$Country', '$IDS')";
 
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
 </table>
</div>
</body>
</html>