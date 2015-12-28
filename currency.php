<?php

	$url = 'http://api.fixer.io/latest';
	$ch =  curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);

	$decoded = json_decode($data, true);

	//var_dump($decoded);

	var_dump($decoded['rates']);

?>