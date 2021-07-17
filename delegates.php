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
  <h2>DELEGATES' FORM </h2>
  <form action="delegates.php" method= "post">
    <div class="form-group">
      <label for="delegateID">Delegate ID:</label>
      <input type="text" class="form-control" id="delegateID" placeholder="Enter ID" name="delegateID">
    </div>
    <div class="form-group">
      <label for="delName">Delegate Name</label>
      <input type="text" class="form-control" id="delName" placeholder="Enter Name" name="delName">
    </div>
    <div class="form-group">
      <label for="committeeN">Committee</label>
      <input type="text" class="form-control" id="committeeN" placeholder="Enter Committee" name="committeeN">
    </div>
    <div class="form-group">
      <label for="assignedCountry">Assigned Country</label>
      <input type="text" class="form-control" id="assignedCountry" placeholder="Enter Assigned Country" name="assignedCountry">
    </div>
    <div class="form-group">
      <label for="group">ID</label>
      <input type="text" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div>
    <button type="submit" name = "submit">Submit</button>
  </form>
</div>



<div class="container">
  <h2>DELEGATES</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Delegate ID</th>
        <th>Name</th>
        <th>Committee</th>
        <th>Assigned Country </th>
        <th>ID </th>
      </tr>
    </thead>
  
<?php

  $sql = "SELECT delegateID, delName, committeeN, assignedCountry, ID FROM delegates";
        $result = $conn -> query ($sql);
        if ($result -> num_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["delegateID"]. "</td><td>". $row["delName"]. "</td><td>". $row["committeeN"]."</td><td>". $row["assignedCountry"]. "</td><td>". $row["ID"]. "</td></tr>";
            }
            echo "</table>";
        }
        else 
        {
            echo "0 result"; 
        }
    

$sql = "SELECT delegateID, delName, committeeN, assignedCountry, ID FROM delegates";
$result = $conn->query($sql);

 


 if(isset($_POST['submit']))
 {
     if(!empty($_POST['delegateID']) && !empty($_POST['delName']) && !empty($_POST['committeeN'] ) && !empty($_POST['assignedCountry'] ) && !empty($_POST['ID'] )){
         $delegateID = $_POST['delegateID'];
         $delName = $_POST['delName'];
         $committeeN = $_POST['committeeN']; 
         $assignedCountry= $_POST['assignedCountry'];
         $ID= $_POST['ID'];
 
         $query = "INSERT into delegates (delegateID, delName, committeeN, assignedCountry, ID) VALUES ('$delegateID','$delName','$committeeN', '$assignedCountry', '$ID')";
 
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