<?php 

  function wisebuys_files() {
    wp_enqueue_script('header-nav', get_theme_file_uri('/js/header-menu.js'), NULL, '1.0', true);
    // wp_enqueue_script('images-loaded', get_theme_file_uri('//unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'), NULL, '1.0', true);
    wp_enqueue_script('home-slider', get_theme_file_uri('/js/home-slider.js'), NULL, '1.0', true);
    wp_enqueue_script('recent-slider', get_theme_file_uri('/js/recently-viewed.js'), NULL, '1.0', true);
    wp_enqueue_script('recommended-slider', get_theme_file_uri('/js/recommended.js'), NULL, '1.0', true);
    wp_enqueue_style('google_fonts','//fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap');
    wp_enqueue_style('wisebuys_main_styles',get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts','wisebuys_files'); 

  function wisebuys_features() {
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerMenu', 'Footer Menu');

    add_theme_support('title-tag');
  }
  
  add_action('after_setup_theme', 'wisebuys_features');

  
  //////////////////////////////////////////////////
  //////////////////////////////////////////////////
  // THE FUNCTION BELOW EXISTS IN 'mu-plugins/wp-content/mu-plugins/site-post-types.php'

  // function site_post_types(){
  //   register_post_type('product', array(
  //     'public' => true,
  //     'show_in_rest' => true,

  //     'labels' => array(
  //       'name' => 'Products',
  //       'add_new_item' => 'Add New Product',
  //       'edit_item' => 'Edit Product',
  //       'all_items' => 'All Products',
  //       'singular_name' => 'Product' 
  //     ),
  
  //     'menu_icon' => 'dashicons-lightbulb'
  //   ));  
  // }
  // add_action('init', 'site_post_types');
  
?>


