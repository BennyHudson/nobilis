<?php
  $args = array(
    'posts_per_page' => -1,
    'orderby' => 'rand'
  );
  $postslist = get_posts($args);
  
  get_header();
?>

  <section class="simple-header">
    <section class="container ultra">
      <h1 class="secondary">Latest News</h1>
    </section>
  </section>
  <section class="blog-main">
    <section class="container ultra no-top">
      <section class="blog-list  blog-list-3">
        <?php foreach ($postslist as $post) { ?>
        	<?php setup_postdata($post); ?>
        		<?php get_template_part('partials/excerpt'); ?>
        	<?php wp_reset_postdata(); ?>
        <?php } ?>
      </section>
      <section class="blog-sidebar">
        <?php dynamic_sidebar('blog-sidebar'); ?>
      </section>
    </section>
  </section>

<?php get_footer(); ?>
