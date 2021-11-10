<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
	
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "tank2021");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$area = $_REQUEST['area'];
		$tanksize = $_REQUEST['tanksize'];
		$tanktype = $_REQUEST['tanktype'];
	
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO tanktable VALUES ('$area',
			'$tanksize','$tanktype', ' ' )";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully</h3>";

			echo nl2br("\n$area\n $tanksize\n "
				. "$tanktype\n");

		
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
