<?php
$apiKey = "MbMjV75jwrcKziiUzpASTL6qbf5K2AJQ";
$fxmlUrl = "https://aeroapi.flightaware.com/aeroapi/";

$ident = 'SWA45';
$queryParams = array(
	'max_pages' => 2
);
$url = $fxmlUrl . 'flights/' . $ident . '?' . http_build_query($queryParams);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-apikey: ' . $apiKey));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

if ($result = curl_exec($ch)) {
	curl_close($ch);
    $decoflg = $result;
    foreach ($decoflg as $key => $value) {
    	echo $key . " => " . $value . "<br>";
    }

}
?>