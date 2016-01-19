
<?php 

include('functions.php');

$extension = '/shop/buy-iphone/iphone5s';

$products = [
	[
		"name" => "iphone_5s_16",
		"price_key" => 0
	],
	[
		"name" => "iphone_5s_32",
		"price_key" => 2
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>