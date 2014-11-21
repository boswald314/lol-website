<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" type="text/css"
	href="/champs/champpage.css">
	<?php include '/php-riot-api.php' ?>
	<?php $region = 'na' 
		$instance = new riotapi($region); ?>
	<?php $champdata = getChampion() 
		$champdata = $champdata["data"]["KogMaw"] 
?></head>
<body>
	<div class="champ_pic">
		<img src="/champs/loading/KogMaw_0.jpg">
	</div>
	<div class="champ_lore">
		<?php echo $champdata["lore"] ?>
	</div>
</html>
