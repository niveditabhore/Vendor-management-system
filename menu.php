<html>
<head>
<style>
body {
 background-image: url("menubg.jpg");
 background-repeat: no-repeat;
 background-size: 100%;
 background-position: center;
}

button {
  background-color: #0000CD;
  border:none;
  color: white;
  padding: 25px 55px;
   text-decoration: none;
  display: inline-block;
  margin: 15px 0;
  cursor: pointer;
  width: 50%;
  border-radius:12px;
}
</style>
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<br>
<form action="add.php">
  <button type="submit">Add</button>
</form>
<form action="edit.php">
  <button type="submit">Edit</button>
</form>
<form action="delete.php">
  <button type="submit">Delete</button>
</form>
<form action="login.php">
  <button type="submit">Exit</button>
</form>


</center>
</body>
</html>
