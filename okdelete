
<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "mydb";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM `MyGuests` WHERE `id` = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
}

?>
<?php include 'oktable2.php';?>
<!DOCTYPE html>

<html>

    <head>

        <title> PHP DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body align="center">
	<h1 align="center">Elimina Dati</h1>
<!--<h2 align="center"><a href="@database.html">Menu Database</a></h2>-->
        <form action="okdelete.php" method="post">
		
<fieldset>
            ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>

            <input type="submit" name="delete" value="Clear Data">
</fieldset>
        </form>

    </body>

</html>