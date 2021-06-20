<html>   
<head> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
<title>DB APP</title> </head>   
<body>      
<h1> XAMUN DATABASE </h1>
<br/>
<?php    
$dbhost = 'localhost';         
$dbuser = 'root';         
$dbpass = 'root';         
$dbname = 'dbmun';         
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);         
if(! $conn ) {            
die('Could not connect: ' . mysqli_error());         
}

$sql = "SELECT delegateID, delName FROM delegates";
$result = $conn->query($sql);

echo "DELEGATE DETAILS"."<br>"."<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo  $row["delegateID"]."<br>" .$row["delName"]. "<br>". "<br>"."<br>";
    }
  } else {
    echo "0 results";
  }
  
  print("<form method=\"post\" action=\"$_SERVER[PHP_SELF]\">");
    print("Enter delegate ID: <input type=\"text\" name=\"DelegateID\">");
    print("<br/>");
    print("<input type=\"submit\" value=\"Submit number\">");
    print("</form>");
  
    if ($_POST['DelegateID'])
    {
        $id = $_POST['DelegateID'];
        $stmt = $conn->prepare("SELECT * FROM Delegates WHERE DelegateID = ?"); 
    

    $ok = $stmt->bind_param( "i", $id);  
    if (!$ok) 
    { 
        die("Bind param error"); 
    }
      $ok=$stmt->execute();  
    if (!$ok) 
    { 
        die("Exec error"); 
    }  
    $result = $stmt->get_result();
    }
  

while($row = $result->fetch_assoc()) {
    if ($row["DelegateID"] == $id) {
         echo "DelName: " . $row["DelName"]. "<br>\n";
         echo "DCommittee: " . $row["DCommittee"]. "<br>\n";
         echo "AssignedCountry " . $row["AssignedCountry"]. "<br>\n";
         echo "DelegateID " . $row["DelegateID"]. "<br>\n";
         
    }
  }
  $conn->close();


?>
</body>
</html>
