<?php 

$countries = [
	[
		"country" => "Australia",
		"abbr" => "au",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Austria",
		"abbr" => "at",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Belgium",
		"abbr" => "be-nl",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Brasil",
		"abbr" => "br",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Canada",
		"abbr" => "ca",
		"decimals" => TRUE,
		"tax_included" => TRUE,
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
		"tax_percentage" => 100
	],[
		"country" => "Denmark",
		"abbr" => "dk",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Finland",
		"abbr" => "fi",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "France",
		"abbr" => "fr",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Germany",
		"abbr" => "de",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Hong Kong",
		"abbr" => "hk",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Hungary",
		"abbr" => "hu",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Ireland",
		"abbr" => "ie",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Italy",
		"abbr" => "it",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Japan",
		"abbr" => "jp",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Luxembourg",
		"abbr" => "lu",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Malaysia",
		"abbr" => "my",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Mexico",
		"abbr" => "mx",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Netherlands",
		"abbr" => "nl",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "New Zealand",
		"abbr" => "nz",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Norway",
		"abbr" => "no",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Philippines",
		"abbr" => "ph",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Poland",
		"abbr" => "pl",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Portugal",
		"abbr" => "pt",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Russia",
		"abbr" => "ru",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Singapore",
		"abbr" => "sg",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "South Korea",
		"abbr" => "kr",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Spain",
		"abbr" => "es",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Sweden",
		"abbr" => "se",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Switzerland",
		"abbr" => "ch-de",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Taiwan",
		"abbr" => "tw",
		"decimals" => FALSE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Thailand",
		"abbr" => "th",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "Turkey",
		"abbr" => "tr",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "United Arab Emirates",
		"abbr" => "ae",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "United Kingdom",
		"abbr" => "uk",
		"decimals" => TRUE,
		"tax_included" => TRUE,
		"tax_percentage" => 100
	],[
		"country" => "United States",
		"abbr" => "us",
		"decimals" => TRUE,
		"tax_included" => TRUE,
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
	    echo "Record updated successfully with ".$price.'<br>';
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

}


?>