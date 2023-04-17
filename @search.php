<table align="center">
<tr>
<td><h1>Ricerca Dati</h1>
</tr>
</table>
<?php
@mysql_connect("localhost","root","")or die("could not connect");
mysql_select_db("mydb")or die("could not find db!");
$output='';
if(isset($_POST['search'])){
	$searchq=$_POST['search'];
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$query=mysql_query("SELECT * FROM MyGuests WHERE firstname LIKE '%$searchq%' OR lastname LIKE '%$searchq%'")or die("could not search!");
	$count=mysql_num_rows($query);
	if($count == 0){
		$output = 'there was no search results!';
	}else{
		while($row=mysql_fetch_array($query)){
			$fname = $row['firstname'];
			$lname = $row['lastname'];
			$email = $row['email'];
			$id = $row['id'];
			
			$output .='<table border="1" align="center">'.'<tr>'.
			'<td>'.$id.'</td>'.
			'<td>'.$fname.'</td>'.
			'<td>'.$lname.'</td>'.
			'<td>'.$email.'</td>'.
			'</tr>'.
			'</table>';
		}
	}
}
?>
<h2 align="center"><a href="@database.html">Menu Database</a></h2>
<form action="@search.php" method="post">
<fieldset>
<table align="center">
<tr>
<td>
<input type="text" name="search" placeholder="search for members..."/></td>
<td><input type="submit" value="trova"/></td>
</tr>
</table>
</fieldset>
</form>
<?php print("$output");?>
<form align="center">
<button onclick="window.print()" class="btn-btn-primary">Stampa</button>
</form>