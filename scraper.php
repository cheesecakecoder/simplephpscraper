<?php

//
// A super simple PHP example that scrapes a webpage
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://www.tomchmielarz.com/scrape_test.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec ($ch);
$info = curl_getinfo($ch);

curl_close ($ch);

if ($info['http_code'] == 200){
	// TODO: extract data
}

?>
