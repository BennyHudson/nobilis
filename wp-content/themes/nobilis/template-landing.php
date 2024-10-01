<?php
	//Template Name: Landing Page
	get_header();
  $feature_image = wp_get_attachment_image_src(get_field('background_image'), 'splash')[0];
  $contact_feature = wp_get_attachment_image_src( get_post_thumbnail_id(12), 'post-feature' )[0];
?>

  <section class="large-feature landing-feature" style="background-image: url('<?php echo $feature_image; ?>');">
    <section class="container ultra title-align-<?php the_field('title_alignment'); ?>">
      <h2 class="secondary"><?php the_field('heading'); ?></h2>
      <h3 class="secondary"><?php the_field('subheading'); ?></h3>
      <a href="#" id="quick-contact-trigger" class="button secondary solid large">Enquire Now</a>
    </section>
  </section>

  <?php get_template_part('partials/care-services'); ?>

  <section class="landing-contact" style="background-image: url('<?php echo $contact_feature; ?>');">
    <section class="container ultra">
      <h2 class="secondary">Contact Us</h2>
      <?php if(get_field('short_description', 12)) { ?>
        <h3 class="secondary"><?php the_field('short_description', 12); ?></h3>
      <?php } ?>
      <a href="tel:08008620650" class="button secondary">0800 862 0650</a><a href="mailto:enquiries@nobilis.co.uk" class="button secondary">enquiries@nobilis.co.uk</a>
    </section>
  </section>

  <section class="landing-accreditation">
    <section class="container ultra">
      <div class="accreditation-content">
        <h2><?php the_field('accreditation_title'); ?></h2>
        <h3><?php the_field('accreditation_content'); ?></h3>
        <a href="https://www.cqc.org.uk/location/1-1307208679" target="_blank" class="button primary">Read the report</a>
      </div>
      <div class="accreditation-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quality-care-large.png" alt="CareQuality Commission" />
      </div>
    </section>
  </section>

  <?php get_template_part('partials/advert'); ?>

  <section class="container ultra carousel-container">
    <ul class="news-carousel">
      <?php get_template_part('snippets/get', 'post'); ?>
    </ul>
  </section>

<?php get_footer(); ?>
