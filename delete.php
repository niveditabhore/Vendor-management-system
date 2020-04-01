<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "project";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM `vendor_info` WHERE `id` = $id";
    
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
<?php
if(isset($_POST['display']))
{
 echo "Added Successfully";
	$_SESSION['log']=1;
	header("refresh:2;url=display.php");
}
?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="delete.php" method="post">

            ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>

            <input type="submit" name="delete" value="Clear Data">

        </form>
		 <form action="display.php" method="post">

           

            <input type="submit" name="display" value="Display">

        </form>

    </body>

</html>