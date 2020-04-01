<?php



if(isset($_POST['update']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "project";
    
    // get id to delete
    $id = $_POST['id'];
	$vendors_name = $_POST['vendors_name'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$products = $_POST['products'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "update `vendor_info` set vendors_name='$vendors_name', contact='$contact',address='$address',email='$email',products='$products' where id='$id'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
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

        <title> PHP EDIT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="edit.php" method="post">

          
			<label>ID to Update:</label>
			<input class="input" name="id" type="text" value=""><br><br>
			<label>vendors name:</label>
			<input class="input" name="vendors_name"  value=""><br><br>
			<label>Contact:</label>
			<input class="input" name="contact" type="text" value=""><br><br>
			<label>Address:</label>
			<textarea cols="25" name="address" rows="5"></textarea><br><br>
			<label>Email:</label>
			<input class="input" name="email" type="text" value=""><br><br>
			<label>Products:</label>
			<textarea cols="20" name="products" rows="2"></textarea><br><br>
            <input type="submit" name="update" value="Update Data">

        </form>
		 <form action="display.php" method="post">

           

            <input type="submit" name="display" value="Display">

        </form>

    </body>

</html>