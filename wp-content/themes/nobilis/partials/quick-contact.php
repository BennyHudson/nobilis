<div class="overlay-cover"></div>
<div class="overlay-wrap" id="contact-overlay">
  <div class="overlay-container">
    <div class="overlay-content">
      <div class="overlay-form">
        <a href="#" class="overlay-close"><i class="fa fa-times-circle fa-2x"></i></a>
        <h2><?php the_field('contact_form_title', 2); ?></h2>
        <?php the_field('contact_form_content', 2); ?>
        <?php echo do_shortcode('[contact-form-7 id="243" title="Main Contact Form"]'); ?>
      </div>
    </div>
  </div>
</div>
