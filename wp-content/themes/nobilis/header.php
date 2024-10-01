<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php get_template_part('snippets/get-favicon'); ?>
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <script type="text/javascript">
      window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};
  </script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
</head>
<body <?php body_class('wedo'); ?>>

  <?php get_template_part('partials/quick-contact') ?>

	<section class="page-content">
		<section class="footer-fix">

      <div class="mobile-nav-overlay"></div>
      <a href="#" class="mobile-nav-close"><i class="fa fa-times"></i></a>
      <div class="mobile-nav">
      	<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
      </div>

      <header>
        <div class="container">
          <?php get_template_part('snippets/content', 'logo') ?>
          <?php get_template_part('snippets/nav', 'primary') ?>
          <a href="#" class="mobile-nav-trigger"><i class="fa fa-bars"></i></a>
        </div>
        <div class="header-border"></div>
      </header>
