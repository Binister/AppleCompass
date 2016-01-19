<?php
	// Get current exchange rates from fixer.io API and decode the JSON to PHP array
	$url = 'https://openexchangerates.org/api/latest.json?app_id=4fdde43f4bd646e7829185895b992484';
	$ch =  curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);

	$decoded = json_decode($data, true);

	//var_dump($decoded);

	//var_dump($decoded['rates']);

	// 
	foreach ($decoded['rates'] as $currency => $rate) {

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "apple_products";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}


		$sql = "UPDATE price_list SET rate=$rate WHERE currency='$currency'";
		if (mysqli_query($conn, $sql)) {
		    echo $currency.": Record updated successfully with ".$rate.'<br>';
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . '<br>';
		}

		mysqli_close($conn);

	} 




?>