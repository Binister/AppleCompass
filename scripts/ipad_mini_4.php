
<?php 

include('functions.php');

$extension = '/shop/buy-ipad/ipad-mini-4';

$products = [
	[
		"name" => "ipad_mini_4_16",
		"price_key" => 0
	],
	[
		"name" => "ipad_mini_4_64",
		"price_key" => 1
	],
	[
		"name" => "ipad_mini_4_128",
		"price_key" => 2
	],
	[
		"name" => "ipad_mini_4_16_cell",
		"price_key" => 9
	],
	[
		"name" => "ipad_mini_4_64_cell",
		"price_key" => 10
	],
	[
		"name" => "ipad_mini_4_128_cell",
		"price_key" => 11
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>