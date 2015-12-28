
<?php 

include('functions.php');

$extension = '/shop/buy-mac/mac-mini';

$products = [
	[
		"name" => "mac_mini_base",
		"price_key" => 0
	],
	[
		"name" => "mac_mini_mid",
		"price_key" => 1
	],
	[
		"name" => "mac_mini_max",
		"price_key" => 2
	]
];

foreach($countries as $country) {
	foreach($products as $product) {
		get_prices($extension, $country[country], $country[abbr], $country[decimals], $product[name], $product[price_key]);
	}
}




//Macbook Air

//Macbook Pro

//iMac

//Mac Pro

//Mac Mini

//iPad Pro

//iPad Air 2

//iPad Air

//iPad Mini 4

//iPad mini 2

//iPhone 6s

//iPhone 6

//iPhone 5s

//Apple Watch Sport

//Apple Watch

//Apple Watch Edition

//Apple TV


?>