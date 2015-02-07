<!DOCTYPE html>
<html>
	<?php 
		include ($_SERVER['DOCUMENT_ROOT']."/head.html") ; 
	?>
	<?php $champ = $_GET['champion']; ?>

	<?php 
	require ($_SERVER['DOCUMENT_ROOT']."/php-riot-api.php") ;
	require ($_SERVER['DOCUMENT_ROOT']."/FileSystemCache.php");
	$instance = new riotapi('na', new FileSystemCache('cache/')); 
	$champdata = $instance->getChampion($champ); 
	?>



	<div id="champ_info">
		<div id="champ_square">
			<img src="/champs/square/<?php echo $champdata["key"] . ".png"; ?>" >
		</div>
		<div id="champ_header">
			<h1 id="champ_name"><?php echo $champdata['name']; ?></h1>
			<h2 id="champ_title"><?php print($champdata["title"]); ?></h2>
		</div>
		<div id="champ_pic">
			<img src="/champs/loading/<?php echo $champdata["key"] . "_0.jpg"; ?>">
		</div>
		<div id="lore_box">
			<div id="champ_tabs">
				<h3>Lore</h3>
				<h3>Stats</h3>
			</div>
			<div id="champ_lore">
				<?php echo $champdata["lore"]; ?> 
			</div>
		</div>
	</div>
</html>
