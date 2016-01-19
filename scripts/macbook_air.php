
<?php 

include('functions.php');

$extension = '/shop/buy-mac/macbook-air';

$products = [
	[
		"name" => "macbook_air_11_base",
		"price_key" => 0
	],
	[
		"name" => "macbook_air_11_max",
		"price_key" => 1
	],
	[
		"name" => "macbook_air_13_base",
		"price_key" => 2
	],
	[
		"name" => "macbook_air_13_max",
		"price_key" => 3
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>