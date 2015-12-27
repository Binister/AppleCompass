
<?php 

foreach($countries as $country) {
	get_prices($country[abbr]);
}

function remove_non_numeric($input_string) {
	$input_string = preg_replace('/\D/', '', $input_string);
	return $input_string;
}

function get_prices($abbr) {
	$url = 'http://www.apple.com/'.$abbr.'/shop/buy-mac/macbook';
	$ch =  curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);

	$DOM = new DOMDocument();
	$DOM->loadHTML($data);
	$finder = new DomXPath($DOM);
	$nodes = $finder->query("//span[@itemprop='price']");
	foreach ($nodes as $node) {
	  echo remove_non_numeric($node->nodeValue).'<br>';
	}
}


//Macbook 
/*$ch =  curl_init('http://www.apple.com/shop/buy-mac/macbook');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);

$DOM = new DOMDocument();
$DOM->loadHTML($data);
$finder = new DomXPath($DOM);
$nodes = $finder->query("//span[@itemprop='price']");
echo $nodes->item(0)->textContent;
foreach ($nodes as $node) {
  echo $node->nodeValue.'<br>';
}*/

//Macbook Air

//Macbook Pro

//iMac

//Mac Pro

//Mac Mini

//iPad Pro

//iPad Air 2

//iPad Air

//iPad Mini 4

//iPad mini 2

//iPhone 6s

//iPhone 6

//iPhone 5s

//Apple Watch Sport

//Apple Watch

//Apple Watch Edition

//Apple TV

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

foreach ($match[1] as $product) {

	$sql = "INSERT INTO test (price) VALUES ('$product')";
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}

mysqli_close($conn);

?>