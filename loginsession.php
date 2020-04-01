<?php
$id=$_POST['id'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","project");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login` WHERE `id`='$id' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	$_SESSION['log']=1;
	header("refresh:2;url=menu.php");

}
else
{
	echo "please fill proper details";
	header("refresh:2;url=login.php");// it takes 2 sec to go index page
}


?>