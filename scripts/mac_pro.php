
<?php 

include('functions.php');

$extension = '/shop/buy-mac/mac-pro';

$products = [
	[
		"name" => "mac_pro_base",
		"price_key" => 0
	],
	[
		"name" => "mac_pro_max",
		"price_key" => 1
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>