
<?php 

include('functions.php');

$extension = '/shop/buy-ipad/ipad-air';

$products = [
	[
		"name" => "ipad_air_16",
		"price_key" => 1
	],
	[
		"name" => "ipad_air_32",
		"price_key" => 2
	],
	[
		"name" => "ipad_air_16_cell",
		"price_key" => 5
	],
	[
		"name" => "ipad_air_32_cell",
		"price_key" => 6
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>