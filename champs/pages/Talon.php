<!DOCTYPE html>
<html>
<head>
 	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php include '/var/www/php-riot-api.php'; ?>
	<?php $region = 'na'; 
		$instance = new riotapi($region); ?>
	<?php $champdata = $instance->getStatic(); 
		$champdata = $champdata["data"]["Talon"]; ?>
</head>
<body>
	<div class="champ_pic">
		<img src="/champs/loading/Talon_0.jpg">
	</div>
	<div class="champ_lore">
		<?php var_dump($champdata["lore"]); ?> 
	</div>
</html>
