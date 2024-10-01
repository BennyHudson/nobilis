<?php
  get_header();
  $background_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-feature' )[0];
  $categories = get_the_terms( $post->ID , 'category' );
?>

  <section class="simple-header" style="background-image: url('<?php echo $background_image; ?>')">
    <section class="container ultra">
      <h2 class="secondary">Latest News</h2>
    </section>
  </section>
  <section class="blog-main">
    <section class="container ultra no-top">
      <section class="blog-list  blog-list-3">
        <?php if (have_posts()) : ?>
      		<?php while ( have_posts() ) : the_post(); ?>
            <article>
              <?php if($categories) { ?>
                <?php foreach($categories as $category) { ?>
                <span class="category category-<?php echo $category->slug; ?>">
                  <?php echo $category->name; ?>
                </span>
                <?php } ?>
              <?php } ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </article>
      		<?php endwhile; ?>
        <?php endif; ?>
        <?php get_template_part('snippets/nav', 'posts'); ?>
      </section>
      <section class="blog-sidebar">
        <?php dynamic_sidebar('blog-sidebar'); ?>
      </section>
    </section>
  </section>

<?php get_footer(); ?>
