<!DOCTYPE html>
<html>
<head>
 	<meta charset="UTF-8">
	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php $ch = curl_init('http://na.api.pvp.net/api/lol/static-data/na/v1.2/champion/42?champData=all&api_key=80a03926-6e55-4045-bf6f-692ec7007ca1');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$champdata = json_decode($result, true);
	?>

	<div id="header">
		<h1>My LoL Website</h1>
		<h3>Your source for all things LoL</h3>
	</div>
</head>
<body>
	<div id="champ_info">
		<div id="champ_square">
			<img src="/champs/square/Corki.png">
		</div>
		<div id="champ_header">
			<h1 id="champ_name"><?php print($champdata["name"]); ?></h1>
			<h2 id="champ_title"><?php print($champdata["title"]); ?></h2>
		</div>		<div id="champ_pic">
			<img src="/champs/loading/Corki_0.jpg">
		</div>
		<div id="lore_box" style="background-image: "../splash/Corki_0.jpg">
			<div id="champ_tabs">
				<h3>Lore</h3>
			</div>
			<div id="champ_lore">
				<?php print($champdata["lore"]); ?> 
			</div>
		</div>
	</div>
</html>
