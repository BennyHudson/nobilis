<?php 
	$location = get_field('map');
	if( !empty($location) ) {
?>
	<div class="acf-map large">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
<?php } ?>
