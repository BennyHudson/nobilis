<?php if(is_front_page()) { ?>
	<h1>
		<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	</h1>
<?php } else { ?>
	<h2>
		<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	</h2>
<?php } ?>
