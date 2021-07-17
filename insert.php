	<?php 
$dbhost = 'localhost';         
$dbuser = 'root';         
$dbpass = 'admin';         
$dbname = 'dbmun';         
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

$ID= $_POST['ID'];
$name= $_POST['name'];
$role= $_POST['role'];
$responsibility= $_POST['responsibility'];

$sql= "INSERT INTO 'organizingcommittee"('ID', 'name','role','responsibility') VALUES ('$ID', '$name', '$role', '$responsibility')";
$insert = mysqli_query($conn, $sql);
if(!$insert){
    echo "ERROR";
}
else{
    header("Location: /www/DBApps/");
}

?>
