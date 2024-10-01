<?php
  $areas = get_terms('area', array(
    'hide_empty' => true,
    'orderby'    => 'name',
    'order'      => 'asc'
  ));
?>

<?php if ($areas) { ?>
  <ul class="location-column-list">
    <?php foreach($areas as $area) { ?>
      <li>
        <h3 class="no-margin"><a href="<?php echo get_post_type_archive_link('locations'); ?>#<?php echo $area->slug; ?>"><?php echo $area->name; ?></a></h3>
        <?php
          $args = array(
            'post_type' => 'locations',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'asc',
            'tax_query' => array(
              array (
                'taxonomy' => 'area',
                'field' => 'slug',
                'terms' => $area->slug,
              )
            )
          );
          $the_query = new WP_Query( $args );
        ?>
        <?php if($the_query->have_posts() ) { ?>
          <ul>
            <?php while($the_query->have_posts()) { ?>
              <?php $the_query->the_post(); ?>
                <li><a href="<?php echo get_post_type_archive_link('locations'); ?>#<?php echo $area->slug; ?>"><?php the_title() ?></a></li>
              <?php wp_reset_postdata(); ?>
            <?php } ?>
          </ul>
        <?php } ?>
      </li>
    <?php } ?>
  </ul>
<?php } ?>
