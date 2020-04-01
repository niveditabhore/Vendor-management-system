<?php
include('connect.php');
?>
 <!DOCTYPE html>
<html>
<head>
<title>Add Information</title>

<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body>
<center>
<?php

  if(isset($_POST['submit']))
{
    $sql = "INSERT INTO vendor_info (id, vendors_name, contact, address, email, products)
    VALUES ('".$_POST["id"]."','".$_POST["vendors_name"]."','".$_POST["contact"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["products"]."')";

    $result = mysqli_query($conn,$sql);
	
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

<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>ADD DATA</h2>
</div>
<form action="add.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<label>vendors ID:</label>
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
<input class="submit" name="submit" type="submit" value="Insert">
<input class="submit" name="display" type="submit" value="Display" action="display.php">
</form>
</div>
</div>
</center>
</body>
</html>