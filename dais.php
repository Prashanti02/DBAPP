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
  <h2>DAIS' FORM </h2>
  <form action="dais.php" method= "post">
    <div class="form-group">
      <label for="daisID">Dais ID:</label>
      <input type="text" class="form-control" id="daisID" placeholder="Enter ID" name="daisID">
    </div>
    <div class="form-group">
      <label for="dName">Dais Name</label>
      <input type="text" class="form-control" id="dName" placeholder="Enter Name" name="dName">
    </div>
    <div class="form-group">
      <label for="committee">Committee</label>
      <input type="int" class="form-control" id="committee" placeholder="Enter Committee" name="committee">
    </div>
    <div class="form-group">
      <label for="position">Position</label>
      <input type="int" class="form-control" id="position" placeholder="Enter Position" name="position">
    </div>
    <div class="form-group">
    <label for="ID">ID</label>
      <input type="int" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div>
    <button type="submit" name = "submit">Submit</button>
  </form>
</div>

    <div class="container">
  <h2>DAIS</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Dais ID</th>
        <th>Name</th>
        <th>Committee</th>
        <th>Position</th>
        <th> ID </th>
      </tr>
    </thead>

    <?php

  $sql = "SELECT daisID, dName, committee, position, ID from dais";
        $result = $conn -> query ($sql);
        if ($result -> num_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["daisID"]. "</td><td>". $row["dName"]. "</td><td>". $row["committee"]."</td><td>". $row["position"]. "</td><td>". $row["ID"]. "</td></tr>";
            }
            echo "</table>";
        }
        else 
        {
            echo "0 result"; 
        }
    
        

$sql = "SELECT daisID, dName, committee, position, ID from dais";
$result = $conn->query($sql);

 


 if(isset($_POST['submit']))
 {
     if(!empty($_POST['daisID']) && !empty($_POST['dName']) && !empty($_POST['committee']) && !empty($_POST['position'] ) && !empty($_POST['ID'] )){
         $daisID = $_POST['daisID'];
         $dName = $_POST['dName'];
         $committee = $_POST['committee']; 
         $position = $_POST['position'];
         $ID= $_POST['ID'];
 
         $query = "INSERT into dais (daisID, dName, committee, position, ID) VALUES ('$daisID','$dName','$committee', '$position', '$ID')";
 
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