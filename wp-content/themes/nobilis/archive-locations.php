<?php
  get_header();
  $background = wp_get_attachment_image_src( get_post_thumbnail_id(124), 'post-feature' )[0];
  $areas = get_terms('area', array(
    'hide_empty' => true,
    'orderby'    => 'name',
    'order'      => 'asc'
  ));
?>

<section class="large-feature" style="background-image: url('<?php echo $background; ?>')">
  <section class="container ultra">
    <h1 class="secondary"><?php echo get_the_title(124); ?></h1>
    <h3 class="secondary"><?php the_field('short_description', 124); ?></h3>
    <a href="#" id="quick-contact-trigger" class="button secondary">Enquire Now</a>
  </section>
</section>

<section class="page-sections">
  <?php foreach($areas as $area) { ?>

    <?php
      $map_id = get_field('map', $area);
      $map_url = wp_get_attachment_image_src( $map_id, 'map' )[0];
    ?>

    <section class="area-list" id="<?php echo $area->slug; ?>">
      <section class="container ultra">
        <div class="area-list-map">
          <img src="<?php echo $map_url; ?>" alt="<?php echo $area->name; ?>">
        </div>
        <div class="area-list-main">
          <h2><?php echo $area->name; ?></h2>
          <?php echo wpautop(wptexturize($area->description)); ?>
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
            <div class="offices">
              <?php while($the_query->have_posts()) { ?>
                <?php $the_query->the_post(); ?>
                  <div class="office-details">
                    <h3 class="no-margin bold"><?php the_title(); ?></h3>
                    <?php if(get_field('address')) { ?>
                      <p><?php the_field('address'); ?></p>
                    <?php } ?>
                    <?php if(get_field('telephone_number')) { ?>
                      <p><strong>Tel:</strong> <?php the_field('telephone_number'); ?></p>
                    <?php } ?>
                    <?php if(get_field('email_address')) { ?>
                      <p><strong>Email:</strong> <a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></p>
                    <?php } ?>
                    <?php if(get_field('cqc')) { ?>
                      <div class="cqc-rating">
                        <img src="<?php the_field('cqc'); ?>" alt="Care Quality Commission Rating" />
                      </div>
                    <?php } ?>
                  </div>
                <?php wp_reset_postdata(); ?>
              <?php } ?>
            </div>
          <?php } ?>
          <h3>Areas Covered</h3>
          <p><?php the_field('areas_covered', $area); ?></p>
          <p>Our care teams can travel further in some circumstances, so please contact us if your town or city isn’t listed above.</p>
        </div>
      </section>
    </section>
  <?php } ?>
</section>

<?php get_footer(); ?>
