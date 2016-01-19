<!DOCTYPE html>

<html>
	
<head>
	

</head>

<body>

<table>
<thead>
	<th>Country</th>
	<th>Price in U.S. Dollar</th>
</thead>
<?php 

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "apple_products";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT country, macbook_base / rate FROM price_list ORDER BY macbook_base / rate";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr>
	        		<td>".$row['country']."</td>
	        		<td>".$row['macbook_base / rate']."</td>
	        	</tr>";	
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();

?>
<table>


</body>

</html>
