
<?php 

include('functions.php');

$extension = '/shop/buy-tv/apple-tv-3rd-gen';

$products = [
	[
		"name" => "apple_tv_3",
		"price_key" => 0
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}

?>