
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> DB APP </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
</head>
<body>
 
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="delegates.php">Delegates</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Dais</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="orgcom.php">Organizing Committee</a>
    </li>
  </ul>
</nav>

<center> <h1> Organizing committee members </h1> </center>
<div class="container">
  <div class="table list">
    <table>
      <form action="insert.php" method="post">
      <tr>
        <th> ID </th>
        <td> <input type="text" placeholder="ID"></td>
        <th> Name </th>
        <td> <input type="text" placeholder="name"></td>
        <th> Role </th>
        <td> <input type="text" placeholder="role"></td>
        <th> Responsibility </th>
        <td> <input type="text" placeholder="responsibility"></td>
      </tr>
      <tr> 
        <td> </td>
        <td> <button type="submit"> Insert </button></td>
      </tr>
    </form>
    </table>
  </div>
  <div class="table form"></div>
  <div class="table count"> </div>
</div>
	
</body>
</html>