<?php

$f="https://api.coindesk.com/v1/bpi/currentprice/cad.json";

$file=file_get_contents($f);
if($file==""){
$coindeskcad = "N/A";
	print("error:cant get file");
	return;
}
$myjson = json_decode($file);
$coindeskcad = $myjson->bpi->CAD->rate;
$coindeskcad = substr($coindeskcad, 0, -5);
?>