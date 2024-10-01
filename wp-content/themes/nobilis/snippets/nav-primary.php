<nav class="primary-nav">
  <ul>
    <li>
      <a href="<?php echo get_permalink(7) ?>">Our Story</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(8) ?>">Care Services</a>
      <div class="subnav">
        <div class="container main">
          <aside class="subnav-sidebar">
            <?php the_field('short_description', 8); ?>
          </aside>
          <aside class="subnav-main">
            <div class="care-column">
              <h3 class="no-margin"><a href="<?php echo get_permalink(782); ?>"><?php echo get_the_title(782); ?></a></h3>
              <p><?php the_field('short_description', 782); ?></p>
              <a href="<?php echo get_permalink(782); ?>">Discover More</a>
            </div>
            <div class="care-column">
              <h3 class="no-margin"><a href="<?php echo get_permalink(10); ?>"><?php echo get_the_title(10); ?></a></h3>
              <p><?php the_field('short_description', 10); ?></p>
              <a href="<?php echo get_permalink(10); ?>">Discover More</a>
            </div>
            <div class="care-column">
              <h3 class="no-margin"><a href="<?php echo get_permalink(11); ?>"><?php echo get_the_title(11); ?></a></h3>
              <p><?php the_field('short_description', 11); ?></p>
              <a href="<?php echo get_permalink(11); ?>">Discover More</a>
            </div>
            <div class="care-column">
              <h3 class="no-margin"><a href="<?php echo get_permalink(636); ?>"><?php echo get_the_title(636); ?></a></h3>
              <p><?php the_field('short_description', 636); ?></p>
              <a href="<?php echo get_permalink(636); ?>">Discover More</a>
            </div>
          </aside>
        </div>
      </div>
    </li>
    <li>
      <a href="<?php echo get_post_type_archive_link('locations'); ?>">Locations</a>
      <div class="subnav">
        <div class="container main">
          <aside class="subnav-sidebar">
            <?php the_field('short_description', 124); ?>
          </aside>
          <aside class="subnav-main">
            <?php get_template_part('partials/location-columns'); ?>
          </aside>
        </div>
      </div>
    </li>
    <li>
      <a href="<?php echo get_permalink(137) ?>">News</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(12) ?>">Contact Us</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(253) ?>">COVID-19</a>
    </li>
    <li>
      <a href="http://jobs.nobilis.co.uk" class="careers-link"><span>Careers</span></a>
    </li>
  </ul>
</nav>
