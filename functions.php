<?php

define('MBN_DIR_URI', get_template_directory_uri());
define('MBN_DIR_PATH', get_template_directory());
define('MBN_ASSETS_URI', MBN_DIR_URI.'/resources'); //resources
define('MBN_MAP_API_KEY',"AIzaSyDac2mOtJr_IktjUhiLZYRL_xHzxRbodRE");

//MBN Login
include_once("mbn-login/setup.php");

/**
 * Theme setup
**/
function mbn_theme_setup(){
    if (is_user_logged_in()){
        show_admin_bar(true);
    }

    add_theme_support('title-tag');
    
    add_theme_support('post-thumbnails');

    add_theme_support( 'woocommerce');
    
    //set_post_thumbnail_size(1568, 9999);
    // add_image_size('small-thumbnail', '150', '100');
    add_image_size('contact-image', '487', '157',true);

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // add_theme_support('custom-logo',array(
    //     'height'      => 190,
    //     'width'       => 190,
    //     'flex-width'  => false,
    //     'flex-height' => false
    // ));

    // add_theme_support('customize-selective-refresh-widgets');
    // add_theme_support('wp-block-styles');

    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style( 'style-editor.css' );

    register_nav_menus(array(
        'header-menu'   => 'Header Menu',
        'right-header-menu'   => 'Right Header Menu',
        'main-menu'     => 'Main Menu',
        'mobile-menu'     => 'Mobile Menu',
        'sticky-menu'     => 'Sticky Menu',
    ));

}
add_action('after_setup_theme', 'mbn_theme_setup');



/**
 * Enqeueue stylesheets and scripts
**/
function mbn_enqueue_scripts(){
    global $wp_version;
    global $template;

    //Global CSS
    wp_enqueue_style( 'mbn-style', get_stylesheet_uri() );

    // unneccessary scripts
    wp_deregister_script('wp-embed');
    wp_deregister_style('wp-block-library');


    // dummy handler - for using inline-css
    wp_register_style('inlinecss-handle', false);
    wp_enqueue_style('inlinecss-handle');
    

    wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap', [], $wp_version);
    wp_enqueue_style('font-caveat', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap', [], $wp_version);

   // wp_enqueue_style('font-ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap', [], $wp_version);
  //  wp_enqueue_style('font-oswald', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap', [], $wp_version);
  //  wp_enqueue_style('font-robotoslab', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500,600,700&display=swap', [], $wp_version);

    
    if(!is_admin()){
        wp_deregister_script('jquery');
    }
    wp_enqueue_script('jquery', MBN_ASSETS_URI.'/vendor/jquery-3.4.1.min.js', [], $wp_version);

    // Foundation JS
    wp_enqueue_script('foundation', MBN_ASSETS_URI.'/vendor/foundation/dist/js/foundation.min.js', [], $wp_version);

    // Mmenu Light
    //wp_enqueue_style('mmenu-light', MBN_ASSETS_URI.'/vendor/mmenu/mmenu-light.css', [], $wp_version);
    //wp_enqueue_script('mmenu-light', MBN_ASSETS_URI.'/vendor/mmenu/mmenu-light.js', [], $wp_version);

    // slick
    wp_enqueue_style('slick', MBN_ASSETS_URI.'/vendor/slick/slick.css', [], $wp_version);
    wp_enqueue_script('slick', MBN_ASSETS_URI.'/vendor/slick/slick.min.js', [], $wp_version);
   
    // Masonry
    //wp_enqueue_script('masonry', MBN_ASSETS_URI.'/vendor/masonry.pkgd.min.js', [], $wp_version);

    // Match Height
    //wp_enqueue_script('match-height', MBN_ASSETS_URI.'/vendor/jquery.matchHeight-min.js', [], $wp_version);

    // Nicescroll
    //wp_enqueue_script('nicescroll', MBN_ASSETS_URI.'/vendor/jquery.nicescroll.min.js', [], $wp_version);
    
    // Fancybox
    wp_enqueue_style('fancybox', MBN_ASSETS_URI.'/vendor/fancybox/fancybox.min.css', [], $wp_version);
    wp_enqueue_script('fancybox', MBN_ASSETS_URI.'/vendor/fancybox/fancybox.min.js', [], $wp_version);


    //Templates
    //wp_enqueue_style('template_header', MBN_DIR_URI.'/assets/css/header.css', [], $wp_version);
    wp_enqueue_style('template_hero', MBN_DIR_URI.'/assets/css/hero.css', [], $wp_version);
    wp_enqueue_style('template_cta', MBN_DIR_URI.'/assets/css/cta.css', [], $wp_version);

    // App
    wp_enqueue_style('app', MBN_ASSETS_URI.'/css/app.css', [], $wp_version);
    wp_enqueue_script('app', MBN_ASSETS_URI.'/js/app.js', [], $wp_version);
    

    // localize objects
    wp_localize_script('app', 'main_obj', array(
        'ajax_url'  => admin_url('admin-ajax.php'),
        'home_url'  => home_url(),
        'theme_url' => MBN_DIR_URI,
        'nonce'     => wp_create_nonce('mbn-nonce')
    ));

   
}
add_action('wp_enqueue_scripts', 'mbn_enqueue_scripts', 20);


// disable gutenberg
//add_filter('use_block_editor_for_post', '__return_false');
function mbn_disable_gutenberg($current_status, $post_type){
    if ($post_type === 'ivtherapy') return false;
    
    return $current_status;
}
add_filter('use_block_editor_for_post_type', 'mbn_disable_gutenberg', 10, 2);


// remove wp emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Disable all colors within Gutenberg.
function mbn_gutenberg_disable_all_colors() {
    add_theme_support( 'editor-color-palette' );
    add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'mbn_gutenberg_disable_all_colors' );


/**
 * Register sidebars
**/
function mbn_register_sidebars(){
    // Minicart sidebar
    register_sidebar([
        'name'  => 'Mini Cart',
        'id'    => 'mini-cart',
        'before_widget' => false,
        'after_widget'  => false,
        'before_title'  => false,
        'after_title'   => false,
    ]);

    // footer menus
    for($i=1;$i<=4;$i++){
        register_sidebar(array(
            'name'          => __('Footer Area '.$i),
            'id'            => 'footer-area-'.$i,
            'before_widget' => false,
            'after_widget'  => false,
            'before_title'  => false,
            'after_title'   => false,
        ));
    }
}
//add_action('widgets_init', 'mbn_register_sidebars');


/**
 * Allow SVG
**/
function mbn_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'mbn_myme_types');


add_filter( 'gform_next_button_3', 'input_to_button', 10, 2 );
add_filter( 'gform_previous_button_3', 'input_to_button', 10, 2 );
add_filter( 'gform_submit_button_3', 'input_to_button', 10, 2 );
function input_to_button( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $new_button = $dom->createElement( 'button' );
    $button_span = $dom->createElement( 'span', $input->getAttribute( 'value' ) );
    $new_button->appendChild( $button_span );
    $input->removeAttribute( 'value' );
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
    $input->parentNode->replaceChild( $new_button, $input );
    return $dom->saveHtml( $new_button );
}

require MBN_DIR_PATH.'/includes/tgmpa/init.php';
require MBN_DIR_PATH.'/includes/post-types.php';
require MBN_DIR_PATH.'/includes/shortcodes.php';
require MBN_DIR_PATH.'/includes/utils.php';
require MBN_DIR_PATH.'/includes/public-hooks.php';
require MBN_DIR_PATH.'/includes/admin-hooks.php';
//require MBN_DIR_PATH.'/includes/woocommerce-hooks.php';
//require MBN_DIR_PATH.'/includes/header-menu-walker.php';
