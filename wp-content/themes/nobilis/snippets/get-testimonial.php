<?php 
    $args = array(
        'post_type'             => 'testimonials',
        'posts_per_page'        => 1,
        'orderby'               => 'rand'
    );  
    $the_query = new WP_Query( $args );
?>
<?php if($the_query->have_posts() ) { ?>
	<?php while($the_query->have_posts()) { ?>
		<?php $the_query->the_post(); ?>
			<?php get_template_part('includes/partial', 'testimonial'); ?>    
    	<?php wp_reset_postdata(); ?>
	<?php } ?>
<?php } ?>
