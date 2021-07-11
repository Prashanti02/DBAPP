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

<br/> 
<div class="container">
  <h2>DELEGATES </h2>
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
      <input type="int" class="form-control" id="committeeN" placeholder="Enter Committee" name="committeeN">
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
      </tr>
    </thead>
  
<?php

  $sql = "SELECT delegateID, delName, committeeN from delegates";
        $result = $conn -> query ($sql);
        if ($result -> num_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["delegateID"]. "</td><td>". $row["delName"]. "</td><td>". $row["committeeN"]."</td></tr>";
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

$sql = "SELECT delegateID, delName, committeeN FROM delegates";
$result = $conn->query($sql);

 


 if(isset($_POST['submit']))
 {
     if(!empty($_POST['delegateID']) && !empty($_POST['delName']) && !empty($_POST['committeeN'] )){
         $delegateID = $_POST['delegateID'];
         $delName = $_POST['delName'];
         $committeeN = $_POST['committeeN']; 
 
         $query = "insert into delegates (delegateID, delName, committeeN) values ('$delegateID','$delName','$committeeN')";
 
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