
<?php 

include('functions.php');

$extension = '/shop/buy-iphone/iphone6s';

$products = [
	[
		"name" => "iphone_6s_16",
		"price_key" => 1
	],
	[
		"name" => "iphone_6s_64",
		"price_key" => 5
	],
	[
		"name" => "iphone_6s_128",
		"price_key" => 9
	],
	[
		"name" => "iphone_6s_plus_16",
		"price_key" => 13
	],
	[
		"name" => "iphone_6s_plus_64",
		"price_key" => 17
	],
	[
		"name" => "iphone_6s_plus_128",
		"price_key" => 21
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>