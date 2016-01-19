
<?php 

include('functions.php');

$extension = '/shop/buy-ipad/ipad-pro';

$products = [
	[
		"name" => "ipad_pro_64",
		"price_key" => 0
	],
	[
		"name" => "ipad_pro_128",
		"price_key" => 3
	],
	[
		"name" => "ipad_pro_128_cell",
		"price_key" => 6
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>