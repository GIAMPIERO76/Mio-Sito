<!--html-->
<h1 align="center">INSERIMENTO DATI</h1>
<form action="@insertdb.php" method="post";

<table align="center" border="1">
<tr>
<fieldset>
<p><td align="center">Nome: </td><td><input type="text" name="firstname"><br/></td></p>
</tr>
<tr>
<p><td align="center">Cognome: </td><td><input type="text" name="lastname"><br/></td></p>
</tr>
<tr>
<p><td align="center">Email: </td><td><input type="text" name="email"><br/></td></p>
</tr>
<tr>
<td align="center"><input type="submit" name="submit"><br/></td>
</tr>
<tr>
<td align="center"><p><a href="@database.html">Menu Database</a></p></td>
</tr>
</fieldset>
</table>
</form>
<!--php-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
if(isset($_POST['submit'])){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO myguests(firstname,lastname,email)VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]')";

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
