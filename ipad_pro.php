
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