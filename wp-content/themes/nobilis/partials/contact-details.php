<?php if(get_field('email_addresses', 12)) { ?>
  <div class="widget">
    <h3>Get in touch</h3>
    <dl>
      <?php while(the_repeater_field('email_addresses', 12)) { ?>
        <dt><?php the_sub_field('title', 12) ?></dt>
        <dd><a href="mailto:<?php the_sub_field('email', 12) ?>"><?php the_sub_field('email', 12) ?></a></dd>
      <?php } ?>
    </dl>
  </div>
<?php } ?>
