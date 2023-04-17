<html>

<head>

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">
<h1 align="center">Tabella Dati</h1>
<h2 align="center"><a href="okdatabase.html">Menu Database</a></h2>
<?php

$con = @mysql_connect("localhost","root","");


if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("mydb", $con);

 

$result = mysql_query("SELECT id, firstname, lastname, email FROM myguests");

 

echo "<table border='1' align='center'>

<tr>

<th>Id</th>

<th>Cognome</th>

<th>Nome</th>

<th>Email</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['firstname'] . "</td>";

  echo "<td>" . $row['lastname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);



?>
<form align="center">
<button onclick="window.print()" class="btn-btn-primary">Stampa</button>
</form>
</body>
</html>