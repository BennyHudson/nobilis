<?php
  $args = array(
    'posts_per_page' => -1,
    'orderby' => 'rand',

  );
  $postslist = get_posts($args);

  get_header();
?>

  <section class="simple-header">
    <section class="container ultra">
      <h1 class="secondary"><?php single_cat_title(); ?></h1>
    </section>
  </section>
  <section class="blog-main">
    <section class="container ultra no-top">
      <section class="blog-list  blog-list-3">
        <?php if (have_posts()) : ?>
      		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('partials/excerpt'); ?>
      		<?php endwhile; ?>
        <?php endif; ?>
      </section>
      <section class="blog-sidebar">
        <?php dynamic_sidebar('blog-sidebar'); ?>
      </section>
    </section>
  </section>

<?php get_footer(); ?>
