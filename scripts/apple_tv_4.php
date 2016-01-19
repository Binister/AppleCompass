
<?php 

include('functions.php');

$extension = '/shop/buy-tv/apple-tv';

$products = [
	[
		"name" => "apple_tv_4_32",
		"price_key" => 1
	],
	[
		"name" => "apple_tv_4_64",
		"price_key" => 2
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>