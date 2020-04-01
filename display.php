<html>
<body>
<center>
<?php
require('connect.php');

$sql = "SELECT * FROM vendor_info";

$result = mysqli_query($conn,$sql)or die(mysqli_error());

echo "<table border=1 cellspacing=0 cellpading=0>";
echo "<tr><th>id</th><th>Vendors name</th><th>contact</th><th>address</th><th>email</th><th>products</th></tr>";

while($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
	 $vendors_name = $row['vendors_name'];
	  $contact = $row['contact'];
   $address= $row['address'];
    $email = $row['email'];
    $products= $row['products'];
    echo "<tr><td style='width: 5%;'>".$id."</td><td style='width: 20%;'>".$vendors_name."</td><td style='width: 10%;'>".$contact."</td><td style='width: 30%;'>".$address."</td><td style='width: 15%;'>".$email."</td><td style='width: 15%;'>".$products."</td></tr>";
} 

echo "</table>";

mysqli_close($conn);
?>

<form method="POST" action="login.php">
<input type="submit" name="button1"  value="EXIT">

</form> 
</center>
</body>
</html>