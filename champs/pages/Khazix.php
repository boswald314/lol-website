<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php include '/php-riot-api.php' ?>
	<?php $region = 'na' 
		$instance = new riotapi($region); ?>
	<?php $champdata = getChampion() 
		$champdata = $champdata["data"]["Khazix"] 
?></head>
<body>
	<div class="champ_pic">
		<img src="/champs/loading/Khazix_0.jpg">
	</div>
	<div class="champ_lore">
		<?php echo $champdata["lore"] ?>
	</div>
</html>
