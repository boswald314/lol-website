<!DOCTYPE html>
<html>
<head>
 	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php include '/var/www/php-riot-api.php'; ?>
	<?php $region = 'na'; 
		$instance = new riotapi($region); ?>
	<?php $champdata = $instance->getChampion(); 
		$champdata = $champdata["data"]["Nami"]; ?>
</head>
<body>
	<div class="champ_pic">
		<img src="/champs/loading/Nami_0.jpg">
	</div>
	<div class="champ_lore">
		<?php echo $champdata["lore"]; ?> 
	</div>
</html>
