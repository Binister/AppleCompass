
<?php 

include('functions.php');

$extension = '/shop/buy-mac/macbook';

$products = [
	[
		"name" => "macbook_base",
		"price_key" => 0
	],
	[
		"name" => "macbook_max",
		"price_key" => 3
	],
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>