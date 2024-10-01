<?php
	//Template Name: Care Services
	get_header();
?>

  <?php get_template_part('partials/page-feature'); ?>

  <section class="page-sections">
    <section class="care-services">
      <section class="container ultra carousel-container">
        <h2 class="no-margin"><?php the_field('core_services_title'); ?></h2>
        <h3><?php the_field('core_services_intro'); ?></h3>
        <?php if (get_field('core_services')) { ?>
          <section class="care-columns">
            <?php while(the_repeater_field('core_services')) { ?>
              <div>
                <img src="<?php echo wp_get_attachment_image_src(get_sub_field('icon'), 'icon')[0]; ?>">
                <h3><?php the_sub_field('title'); ?></h3>
                <p><?php the_sub_field('content'); ?></p>
              </div>
            <?php } ?>
          </section>
        <?php } ?>
      </section>
    </section>
    <?php if(get_field('subsections')) { ?>
      <?php while(the_repeater_field('subsections')) { ?>
        <div class="page-subsection">
          <section class="container ultra">
            <div class="subsection-content">
              <?php if(get_sub_field('heading')) { ?>
                <h2><?php the_sub_field('heading'); ?></h2>
              <?php } ?>
              <?php the_sub_field('content'); ?>
            </div>
            <div class="subsection-sidebar">
              <?php if(get_sub_field('sidebar_title')) { ?>
                <h2><?php the_sub_field('sidebar_title'); ?></h2>
                <?php the_sub_field('sidebar_content'); ?>
                <?php if(get_sub_field('button_url')) { ?>
                  <a href="<?php echo get_the_permalink(get_sub_field('button_url')); ?>" class="button primary">Read the article</a>
                <?php } ?>
              <?php } ?>
            </div>
          </section>
        </div>
      <?php } ?>
    <?php } ?>
  </section>

<?php get_footer(); ?>
