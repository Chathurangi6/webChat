<?php
include 'dbc.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc()){
	header("Location:error.php");
}
else{
	header("Location:home.php");
}
?>