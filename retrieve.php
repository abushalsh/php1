<?php
		$conn = mysqli_connect("localhost", "root", "", "tank2021");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        $result = mysqli_query($conn,"SELECT * FROM tanktable");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>area</td>
    <td>tanktype</td>
    <td>tanksize</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["area"]; ?></td>
    <td><?php echo $row["tanktype"]; ?></td>
    <td><?php echo $row["tanksize"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>