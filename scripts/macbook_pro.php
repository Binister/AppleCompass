
<?php 

include('functions.php');

$extension = '/shop/buy-mac/macbook-pro';

$products = [
	[
		"name" => "macbook_pro_13_base",
		"price_key" => 0
	],
	[
		"name" => "macbook_pro_13_mid",
		"price_key" => 1
	],
	[
		"name" => "macbook_pro_13_max",
		"price_key" => 2
	],
	[
		"name" => "macbook_pro_15_base",
		"price_key" => 3
	],
	[
		"name" => "macbook_pro_15_max",
		"price_key" => 4
	],
	[
		"name" => "macbook_pro_13_classic",
		"price_key" => 5
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>