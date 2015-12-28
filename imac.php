
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