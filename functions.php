<?php
add_action('wp_enqueue_scripts', 'teamtheme_scripts');

function teamtheme_scripts()
{
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', true, '', false);
    wp_enqueue_script('jquery');
  }
  
  // add style css
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('team', get_template_directory_uri() . '/style.css', array('main'));
}

add_action('wp_enqueue_scripts', 'team_enqueue_styles');

function team_enqueue_styles()
{
  // Slick CSS & JS files
  wp_register_style('slick-css', get_template_directory_uri() . '/slick/slick.css');
  wp_register_style('slick-theme-css', get_template_directory_uri() . '/slick/slick-theme.css');
  wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/slick/slick.min.js');
  wp_enqueue_script('teamtheme-script', get_template_directory_uri() . '/js/script.js', array(), '', true);
}

// Our custom post type function
function create_posttype()
{
  register_post_type('team',
      // CPT Options
      array(
          'labels' => array(
              'name' => __('Teams'),
              'singular_name' => __('Team')
          ),
          'menu_position' => 5,
          'supports' => array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'team'),
      )
  );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
?>



<?php 
add_action( 'wp_enqueue_scripts', 'team_styles' );
function team_styles() {
	$add_slick = get_template_directory_uri() . '/slick/slick.css';
	wp_enqueue_style( 'slick.scss', $add_slick, array(), null );
}

function load_personal_resources() {
    $theme_uri = get_template_directory_uri();
    wp_deregister_script( 'jquery' );    
    wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery-3.7.1.min.js');
    wp_enqueue_script( 'jquery' );
    // Speed Optimization Start
    
    wp_enqueue_script('slick',
        get_template_directory_uri() . '/slick/slick.js',
        array('jquery')
    );

//    wp_enqueue_script('scripts',
//        get_template_directory_uri() . '/assets/js/scripts.js?v='.time(),
//        array('jquery')
//    );
    //No cache
    wp_enqueue_script('scripts',
        get_template_directory_uri() . '/js/script.js?v='.time(), array('jquery'), false
    );
}
add_action('wp_enqueue_scripts', 'load_personal_resources');


// Bootstrap
function enqueue_bootstrap() {
    // Bootstrap css
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css');

    // JavaScript Bootstrap
    wp_enqueue_script('bundle', get_template_directory_uri() . '/bootstrap/bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array('jquery', 'popper'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

