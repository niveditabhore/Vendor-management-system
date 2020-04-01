<html>
<body>
<center>
<?php

require('connect.php');

$sql = "SELECT products FROM vendor_info where vendors_name=$vendors_name";

$result = mysqli_query($conn,$sql)or die(mysqli_error());

echo "<table border=1 cellspacing=0 cellpading=0>";
echo "<tr><th>id</th><th>Vendors name</th><th>contact</th><th>address</th><th>email</th><th>products</th></tr>";

while($row = mysqli_fetch_array($result)) {
    
	 $vendors_name = $row['vendors_name'];
		$products= $row['products'];
    echo "<tr><td style='width: 20%;'>".$vendors_name."</td><td style='width: 15%;'>".$products."</td></tr>";
} 

echo "</table>";

mysqli_close($conn);

?>

<form action="vendor.php" method="post">

			<label>Enter Vendors name:</label>
			<input type="text" name="vendors_name" value=""><br>
			 <input type="submit" name="products" value="products">

        </form>
		</center>
</body>
</html>




