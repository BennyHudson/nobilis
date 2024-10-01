<?php
	get_header();
?>

  <?php get_template_part('partials/page-feature'); ?>

  <section class="page-main">
    <section class="container ultra no-top">
      <section class="page">
        <?php if (have_posts()) : ?>
      		<?php while ( have_posts() ) : the_post(); ?>
            <article>
              <?php the_content(); ?>
            </article>
      		<?php endwhile; ?>
        <?php endif; ?>
      </section>
      <section class="page-sidebar">
        <?php get_template_part('partials/contact-details'); ?>
      </section>
    </section>
  </section>

<?php get_footer(); ?>
