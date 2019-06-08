<?php
  function theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo');

    register_nav_menus(array(
      'primary' => __('Primary Menu'),

    ));
  }

  add_action('after_setup_theme','theme_setup');

  function init_widgets($id){
    register_sidebar(array(
      'name' => 'Sidebar1',
      'id' => 'sidebar1',
      'before_widget' => '<section class="widget">',
      'after_widget' => '</div></section>',
      'before_title' => '<div class="card-header"><h3>',
      'after_title' => '</h3></div><div class="card-body">',
    ));
  }

  add_action('widgets_init','init_widgets');
