<?php
  $categories = get_the_terms( $post->ID , 'category' );
?>

<div class="blog-card">
  <a href="<?php the_permalink(); ?>">
    <div class="feature-clip">
    	<?php the_post_thumbnail('blog-card'); ?>
    </div>
    <?php if($categories) { ?>
      <?php foreach($categories as $category) { ?>
      <span class="category category-<?php echo $category->slug; ?>">
        <?php echo $category->name; ?>
      </span>
      <?php } ?>
    <?php } ?>
    <div class="card-body">
      <h2 class="small"><?php the_title(); ?></h2>
      <div class="excerpt-clip">
      	<?php the_excerpt(); ?>
      </div>
      <span class="read-more">Read More</span>
    </div>
  </a>
</div>
