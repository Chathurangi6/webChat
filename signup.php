<?php
include 'dbc.php';
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="insert into signup (username,email,password) 
values('$uname','$email','$pass')";
if($conn->query($sql)==TRUE){
	 echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header("Location:index.php");
?>