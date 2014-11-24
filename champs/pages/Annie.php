<!DOCTYPE html>
<html>
<head>
 	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php $ch = curl_init('http://na.api.pvp.net/api/lol/static-data/na/v1.2/champion/1?champData=all&api_key=80a03926-6e55-4045-bf6f-692ec7007ca1');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$champdata = json_decode($result, true);
	?>
</head>
<body>
	<h1 class="champ_name"><?php print($champdata["name"]); ?></h1>
	<h2 class="champ_title"><?php print($champdata["title"]); ?></h2>
	<div class="champ_pic">
		<img src="/champs/loading/Annie_0.jpg">
	</div>
	<div class="champ_lore">
		<?php print($champdata["lore"]); ?> 
	</div>
</html>
