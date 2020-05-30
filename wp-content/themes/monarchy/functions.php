<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}


 add_filter('use_block_editor_for_post', '__return_false');

 /*for team section list*/
function leadership_post() {
  register_post_type( 'leadership_post',
    array(
      'labels' => array(
        'name' => __( 'Leadership Team' ),
        'singular_name' => __( 'Leadership Team' )
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon'   => 'dashicons-admin-users',
    )

  );
}
add_action( 'init', 'leadership_post' );




/*for creator’ s network section list*/
function creator_network() {
  register_post_type( 'creator_network',
    array(
      'labels' => array(
        'name' => __( 'Creator’s Network Service' ),
        'singular_name' => __( 'Creator’s Network' )
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon'   => 'dashicons-networking',
    )

  );
}
add_action( 'init', 'creator_network' );




/*for creator’ s network section list*/
function case_studies() {
  register_post_type( 'case_studies',
    array(
      'labels' => array(
        'name' => __( 'Case Studies Clients' ),
        'singular_name' => __( 'Case Studies' )
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon'   => 'dashicons-welcome-write-blog',
      'supports' => array( 'title', 'editor','thumbnail' ),
    )

  );
}
add_action( 'init', 'case_studies' );