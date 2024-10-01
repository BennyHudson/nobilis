<section class="care-services">
  <section class="container ultra carousel-container">
    <h2 class="no-margin"><?php echo get_the_title(8); ?></h2>
    <h3><?php the_field('short_description', 8); ?></h3>
    <section class="care-columns">
      <div>
        <img src="<?php echo wp_get_attachment_image_src(get_field('icon', 782), 'icon')[0]; ?>">
        <h3><?php echo get_the_title(782); ?></h3>
        <p><?php the_field('short_description', 782); ?></p>
        <a href="<?php echo get_permalink(782); ?>" class="button primary">Discover More</a>
      </div>
      <div>
        <img src="<?php echo wp_get_attachment_image_src(get_field('icon', 10), 'icon')[0]; ?>">
        <h3><?php echo get_the_title(10); ?></h3>
        <p><?php the_field('short_description', 10); ?></p>
        <a href="<?php echo get_permalink(10); ?>" class="button primary">Discover More</a>
      </div>
      <div>
        <img src="<?php echo wp_get_attachment_image_src(get_field('icon', 11), 'icon')[0]; ?>">
        <h3><?php echo get_the_title(11); ?></h3>
        <p><?php the_field('short_description', 11); ?></p>
        <a href="<?php echo get_permalink(11); ?>" class="button primary">Discover More</a>
      </div>
      <div>
        <img src="<?php echo wp_get_attachment_image_src(get_field('icon', 636), 'icon')[0]; ?>">
        <h3><?php echo get_the_title(636); ?></h3>
        <p><?php the_field('short_description', 636); ?></p>
        <a href="<?php echo get_permalink(636); ?>" class="button primary">Discover More</a>
      </div>
    </section>
  </section>
</section>
