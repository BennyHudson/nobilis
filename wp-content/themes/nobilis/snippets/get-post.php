<?php
  $args = array(
    'posts_per_page' => 6,
    'orderby' => 'rand'
  );
	$postslist = get_posts($args);
?>
<?php foreach ($postslist as $post) { ?>
	<?php setup_postdata($post); ?>
    <li>
		  <?php get_template_part('partials/excerpt'); ?>
    </li>
	<?php wp_reset_postdata(); ?>
<?php } ?>
