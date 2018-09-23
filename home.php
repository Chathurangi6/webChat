<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div id="main">
	<h1 style="background-color:#5B70F7;color:white;"><?php echo $_SESSION['name'] ?>-online</h1>
	<div class="output">
		<?php
		include 'dbc.php';
		$sql="SELECT * FROM posts";
		$result=$conn->query($sql);
		if(mysqli_num_rows($result) > 0){
			while($row=$result->fetch_assoc()){
				echo "".$row["name"]." "."::".$row["msg"]."--".$row["time"]."<br>";
				echo "<br>";

			}

		}
		else{
			echo " 0 results";
		}
		$conn->close();
		?>
	</div>

	<form method="post" action="send.php">
	<textarea name="msg" placeholder="Type to send message.." class="form-control"></textarea><br>
	<input type="submit" value="Send">
</form>
<br>
<form action="logout.php">
	<input style="width:100%;background-color:#5B70F7;color:white;font-size:20px;" type="submit" value="Logout">
</div>
	
</body>
</html>
