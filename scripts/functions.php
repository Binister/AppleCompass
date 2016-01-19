<?php 

$countries = [
	[
		"country" => "Australia",
		"abbr" => "au",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 10,
		"tax_refund_rate" => 
	],[
		"country" => "Austria",
		"abbr" => "at",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 20
	],[
		"country" => "Belgium",
		"abbr" => "be-nl",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 21
	],[
		"country" => "Brasil",
		"abbr" => "br",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 0
	],[
		"country" => "Canada",
		"abbr" => "ca",
		"decimals" => TRUE,
		"tax_included" => FALSE,
		"tax_percentage" => 100
	],[
		"country" => "China",
		"abbr" => "cn",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Czech Republic",
		"abbr" => "cz",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 21
	],[
		"country" => "Denmark",
		"abbr" => "dk",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 25
	],[
		"country" => "Finland",
		"abbr" => "fi",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 24
	],[
		"country" => "France",
		"abbr" => "fr",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 20
	],[
		"country" => "Germany",
		"abbr" => "de",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 19
	],[
		"country" => "Hong Kong",
		"abbr" => "hk",
		"decimals" => FALSE,
		"tax_included" => FALSE,
		"tax_percentage" => 0
	],[
		"country" => "Hungary",
		"abbr" => "hu",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 27
	],[
		"country" => "Ireland",
		"abbr" => "ie",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 23
	],[
		"country" => "Italy",
		"abbr" => "it",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 22
	],[
		"country" => "Japan",
		"abbr" => "jp",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 8
	],[
		"country" => "Luxembourg",
		"abbr" => "lu",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 15
	],[
		"country" => "Malaysia",
		"abbr" => "my",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 6
	],[
		"country" => "Mexico",
		"abbr" => "mx",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 16
	],[
		"country" => "Netherlands",
		"abbr" => "nl",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 21
	],[
		"country" => "New Zealand",
		"abbr" => "nz",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 15
	],[
		"country" => "Norway",
		"abbr" => "no",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 25
	],[
		"country" => "Philippines",
		"abbr" => "ph",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 12
	],[
		"country" => "Poland",
		"abbr" => "pl",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 23
	],[
		"country" => "Portugal",
		"abbr" => "pt",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 23
	],[
		"country" => "Russia",
		"abbr" => "ru",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 18
	],[
		"country" => "Singapore",
		"abbr" => "sg",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 7
	],[
		"country" => "South Korea",
		"abbr" => "kr",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 10
	],[
		"country" => "Spain",
		"abbr" => "es",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 21
	],[
		"country" => "Sweden",
		"abbr" => "se",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 25
	],[
		"country" => "Switzerland",
		"abbr" => "ch-de",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 8
	],[
		"country" => "Taiwan",
		"abbr" => "tw",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 5
	],[
		"country" => "Thailand",
		"abbr" => "th",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 10
	],[
		"country" => "Turkey",
		"abbr" => "tr",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 18
	],[
		"country" => "United Arab Emirates",
		"abbr" => "ae",
		"decimals" => TRUE,
		"tax_included" => FALSE,
		"tax_percentage" => 0
	],[
		"country" => "United Kingdom",
		"abbr" => "uk",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 20
	],[
		"country" => "United States",
		"abbr" => "us",
		"decimals" => TRUE,
		"tax_included" => FALSE,
		"tax_percentage" => 100
	],
];

function remove_non_numeric($input_string) {
	$input_string = preg_replace('/\D/', '', $input_string);
	return $input_string;
}

//echo remove_non_numeric('1213ab232b2rn3i').'<br>';

function add_decimal($input_string) {
	$input_string = substr_replace($input_string, '.', -2, 0);
	return $input_string;
}

//echo add_decimal('1234353653').'<br>';

function to_float($input_string) {
	$input_string = (float) $input_string;
	return $input_string;
}

//echo to_float('22242422').'<br>';

function get_prices($extension, $location, $abbr, $decimals, $model, $key) {
	$url = 'http://www.apple.com/'.$abbr.$extension;
	$ch =  curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);

	$DOM = new DOMDocument();
	$DOM->loadHTML($data);
	$finder = new DomXPath($DOM);
	$nodes = $finder->query("//span[@itemprop='price']");
	$price = $nodes->item($key)->textContent;
	$price = remove_non_numeric($price);
	if ($decimals == TRUE) {
		$price = add_decimal($price);
	}
	$price = to_float($price);



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


	$sql = "UPDATE price_list SET $model=$price WHERE country='$location'";
	if (mysqli_query($conn, $sql)) {
	    echo $location.": ".$model.": Record updated successfully with ".$price.'<br>';
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

}


?>