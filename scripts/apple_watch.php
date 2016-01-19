
<?php 

include('functions.php');

$extension = '/shop/buy-watch/apple-watch';

$products = [
	[
		"name" => "apple_watch_38",
		"price_key" => 0
	],
	[
		"name" => "apple_watch_42",
		"price_key" => 1
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>