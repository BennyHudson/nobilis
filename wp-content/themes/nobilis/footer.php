      <footer>
        <?php if(!is_front_page()) { ?>
          <?php get_template_part('partials/advert'); ?>
        <?php } ?>
        <section class="footer-main">
          <section class="container main">
            <div class="footer-column double-wide">
              <h2 class="secondary">Our Locations</h2>
              <?php get_template_part('partials/location-columns'); ?>
            </div>
            <div class="footer-column">
              <nav class="footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
              </nav>
            </div>
          </section>
        </section>
        <section class="footer-secondary">
          <section class="container">
            <a href="https://www.cqc.org.uk/location/1-1307208679" target="_blank" class="quality-care">CareQuality Commission - Good. Read the report.</a>
            <ul class="socials">
              <li><a href="tel:08008620650">0800 862 0650</a></li>
              <li><a href="https://www.instagram.com/nobiliscare/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.facebook.com/pages/Nobilis-Care/101042626654131" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="http://www.youtube.com/user/NobilisCare" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
              <li><a href="mailto:enquries@nobilis.co.uk" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </section>
        </section>
      </footer>
    </section>
	</section>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBR5bX6m_CEPwitun65XjrFWYZVRtzqADA"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/font-awesome/css/font-awesome.min.css">
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/matchMedia.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/matchMedia.addListener.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/enquire.min.js" type="text/javascript"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-E6T1YZ83E2"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16707580611"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-E6T1YZ83E2');
    gtag('config', 'AW-16707580611');
  </script>
  <script>
    gtag('config', 'AW-16707580611/yyKUCPKq-NUZEMPl5Z4-', { 
      'phone_conversion_number': '0808 1753980' 
    }); 
  </script>

	<?php wp_footer(); ?>
</body>
</html>
