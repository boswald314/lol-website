<!DOCTYPE html>
<html>
<head>
 	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php include '/var/www/php-riot-api.php'; ?>
	<?php $region = 'na'; 
		$instance = new riotapi($region); ?>
	<?php $champdata = $instance->getStatic($call='champion'); 
		$champdata = $champdata["data"]["JarvanIV"]; ?>
</head>
<body>
	<div class="champ_pic">
		<img src="/champs/loading/JarvanIV_0.jpg">
	</div>
	<div class="champ_lore">
		<?php var_dump($champdata["lore"]); ?> 
	</div>
</html>
