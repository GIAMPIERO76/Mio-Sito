<!--html-->
<h1 align="center">Tabella Dati</h1>
<h3 align="center"><a href="okdatabase.html">Menu Database</a></h3>

<!--php-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." ".$row["email"]. "<br>";
  echo "
  <legend align=center></legend>
  <table border=1 align=center>
   <tr>
    <th>ID</th>
	<th>NOME</th>
	<th>COGNOME</th>
	<th>EMAIL</th>
  </tr>
  <tr>
  <td>".$row['id']."</td>
  <td>".$row['firstname']."</td>
  <td>".$row['lastname']."</td>
  <td>".$row['email']."</td>
  </tr>";
  }
} else {
  echo "</table>";
}
$conn->close();
?>
