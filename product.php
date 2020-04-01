<?php
if(isset($_POST['products']))
{
 $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "project";
	
	
 $id = $_POST['id'];
	$vendors_name = $_POST['vendors_name'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$products = $_POST['products'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "SELECT products FROM vendor_info where vendors_name=$vendors_name";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Selected';
    }else{
        echo 'Data Not Selected';
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

        <title>Entry Form</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

      
		<form action="product.php" method="post">

			<label>Enter Product:</label>
			<input type="submit" name="products" value="Get products">

        </form>
		 <form action="display.php" method="post">

            <input type="submit" name="display" value="Display">

        </form>

    </body>

</html>