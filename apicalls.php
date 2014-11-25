<?php

public function getChampion($key){
	$url = 'http://na.api.pvp.net/api/lol/static-data/na/v1.2/chamion/' + $key + '?champData=all&api_key=80a03926-6e55-4045-bf6f-692ec7007ca1';

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$champdata = json_decode($result, true);

	return $champdata
}

?>	
