<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php bloginfo('url') ?>">
       <!-- <img src="img/logo.png" style="width:150px;height:50px;"> -->
       <?php
         if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
          } ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
          wp_nav_menu( array(
          	'theme_location'  => 'primary',
          	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
          	'container'       => false,
          	'menu_class'      => 'navbar-nav mr-auto',
          	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          ) );
           ?>
        <form class="form-inline my-2 my-lg-0 navbar-right" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <label for="navbar-search" class="sr-only">
              <?php _e('Search', 'textdomain') ?>
            </label>
            <div class="form-group">
              <input type="text" name="s" id="navbar-search" class="form-control" style="margin-right: 5px;" placeholder="Cerca">
            </div>
            <button type="submit"  class="btn btn-primary "name="button" ><?php _e('Cerca', 'textdomain') ?></button>
          </form>
      </div>
    </nav>
