
<?php 

include('functions.php');

$extension = '/shop/buy-iphone/iphone6';

$products = [
	[
		"name" => "iphone_6_16",
		"price_key" => 1
	],
	[
		"name" => "iphone_6_64",
		"price_key" => 3
	],
	[
		"name" => "iphone_6_plus_16",
		"price_key" => 5
	],
	[
		"name" => "iphone_6_plus_64",
		"price_key" => 7
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>