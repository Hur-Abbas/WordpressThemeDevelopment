<?php

/*
function for enqueue
*/
function load_css(){
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri().'/assets/css/final.css' );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts','load_css' );

/* Menus */
add_theme_support( 'menus' );

/*
function for Menu
*/
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'main Menu' ),
      'mobile-menu' => __( 'mobile Menu' )
      )
     );
   }
   add_action( 'init', 'register_my_menus' );


   /*    thumbnail size */
   
   add_theme_support( 'post-thumbnails' );

   add_image_size( 'blog-large',800, 400, true );
  //  add_image_size( 'blog-small',300, 200, true );

/* Widgets */
add_theme_support( 'widgets' );

/*
function for Widgets
*/
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'page' sidebar. */
    register_sidebar(
        array(
            'id'            => 'page-sidebar',
            'name'          => __( 'Page Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
      array(
          'id'            => 'blog-sidebar',
          'name'          => __( 'Blog Sidebar' ),
          'description'   => __( 'A short description of the sidebar.' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="widget-title">',
          'after_title'   => '</h3>',
      )
  );
    /* Repeat register_sidebar() code for additional sidebars. */
}

/*
function for Custom post type
*/
function my_first_post_type(){

  $args = array(
    'labels' => array('name'=>'cars','singular_name'=>'car'),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-image-filter',
    'supports' => array('title','editor','thumbnail','custom-fields'),
  );

  register_post_type( 'cars', $args );
}
add_action( 'init', 'my_first_post_type');

/*
function for taxonomy 
*/
function my_first_taxonomy(){
  $args = array(
    'labels' => array('name'=>'brands','singular_name'=>'brand'),
    'public' => 'true',
    'hierarchical' => 'true',
  );
  register_taxonomy('brands',array('cars'),$args);
}
add_action( 'init', 'my_first_taxonomy');

?>

