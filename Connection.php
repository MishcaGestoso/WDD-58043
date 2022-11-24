<?php
$server = 'localhost';
$db = 'login';
$username = "root";
$password = "";

$connect = mysqli_connect($server,$username,$password,$db);

if($connect)
{
	echo "Database is connected";
}
else 
{
	echo "Database is Not Connected" . mysqli_error($conn);
}
if(isset($_POST['Login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)== 1)
	{
		echo "<h1 align = 'center'> Login Successfully  :  $username </h1>";
		exit();
	}
	else
	{
		echo "<h1 align = 'center'> Login Failed </h1>";
		exit();
	}
}
?>