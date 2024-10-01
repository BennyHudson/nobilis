<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-feature' )[0]; ?>

<?php if ($background) { ?>
  <section class="large-feature" style="background-image: url('<?php echo $background; ?>')">
    <section class="container ultra title-align-<?php the_field('title_alignment'); ?>">
      <h1 class="secondary"><?php the_title(); ?></h1>
      <?php if(get_field('short_description')) { ?>
        <h3 class="secondary"><?php the_field('short_description'); ?></h3>
      <?php } ?>
      <a href="#" id="quick-contact-trigger" class="button secondary">Enquire Now</a>
    </section>
  </section>
<?php } else { ?>
  <section class="simple-header">
    <section class="container ultra title-align-<?php the_field('title_alignment'); ?>">
      <h1 class="secondary"><?php the_title(); ?></h1>
      <?php if(get_field('short_description')) { ?>
        <h3 class="secondary"><?php the_field('short_description'); ?></h3>
      <?php } ?>
      <a href="#" id="quick-contact-trigger" class="button secondary">Enquire Now</a>
    </section>
  </section>
<?php } ?>
