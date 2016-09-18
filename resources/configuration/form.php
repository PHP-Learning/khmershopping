<html>
<head>
	<title>FORM</title>
	<style type="text/css">
	table{
     	
  
     	padding: 10;
	}
	th,td{
		border: 1px solid black;
	}
	</style>
</head>
<body>
	<div class="container">
			<?php
		include 'database.php';
		
	?>
	<!-- <div class="container">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="txtusername"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="txtpassword"></td>
			</tr>
		</table>
	</div> -->
	<?php
		$sql="SELECT * FROM tbluser";
		$result =$con->query($sql);
			if ($result->num_rows > 0) {
				 echo "<table><tr><th>ID</th><th>Name</th><th>Password</th></tr>";
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			         echo "<tr><td>".$row["userId"]."</td><td>".$row["userName"]."</td><td>".$row["password"]."</td></tr>";
				}
					    echo "</table>";
			} else {
			    echo "0 results";
			}
	?>



	</div>
	
	<style type="text/css">
		table{
			border: 1px solid black;
		}
		.container{
			margin: auto;
			margin-left: 30%;
		}

	</style>
</body>
</html>