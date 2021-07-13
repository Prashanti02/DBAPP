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
  <h2>ORAGANIZING COMMITTEE'S FORM </h2>
  <form action="orgcom.php" method= "post">
    <div class="form-group">
      <label for="ID">ID:</label>
      <input type="text" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div>
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
    </div>
    <div class="form-group">
      <label for="Role">Role</label>
      <input type="int" class="form-control" id="Role" placeholder="Enter Role" name="Role">
    </div>
    


   
    <button type="submit" name = "submit">Submit</button>
  </form>
</div>
<br/>

<div class="container">
  <h2>ORGANIZING COMMITTEE</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Role</th>
      </tr>
    </thead>

<?php

  $sql = "SELECT ID, name, role from organizingcommittee";
        $result = $conn -> query ($sql);
        if ($result -> num_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["ID"]. "</td><td>". $row["name"]. "</td><td>". $row["role"]."</td></tr>";
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

$sql = "SELECT ID, Name, role FROM organizingcommittee";
$result = $conn->query($sql);

 


 if(isset($_POST['submit']))
 {
     if(!empty($_POST['ID']) && !empty($_POST['name']) && !empty($_POST['role'] )){
         $delegateID = $_POST['ID'];
         $delName = $_POST['name'];
         $committeeN = $_POST['role']; 
 
         $query = "insert into organizingcommittee (ID, name, role) values ('$ID','$name','$role')";
 
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



 </head>
</body>
</html>