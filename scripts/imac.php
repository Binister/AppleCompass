
<?php 

include('functions.php');

$extension = '/shop/buy-mac/imac';

$products = [
	[
		"name" => "imac_21_base",
		"price_key" => 0
	],
	[
		"name" => "imac_21_mid",
		"price_key" => 1
	],
	[
		"name" => "imac_21_max",
		"price_key" => 2
	],
	[
		"name" => "imac_27_base",
		"price_key" => 3
	],
	[
		"name" => "imac_27_mid",
		"price_key" => 4
	],
	[
		"name" => "imac_27_max",
		"price_key" => 5
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>