<?php

 // Register Employment Post Type
function employment_post() {
    register_post_type( 'employment',
        array(
            'labels'    => array(
                'name' => __( 'Employment' ),
                'singular_name' => __('Employment')
            ),
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'menu_position' => 20,
            'with_front' => true,
            'supports'      =>  array('title', 'editor', 'page-attributes'),
            'menu_icon'     => 'dashicons-editor-paragraph',
        )
    );
}
add_action( 'init', 'employment_post' );

// Register Events Post Type
function event_post() {
   register_post_type( 'event',
       array(
           'labels'    => array(
               'name' => __( 'Events' ),
               'singular_name' => __('Event')
           ),
           'public'        => true,
           'has_archive'   => false,
           'show_in_rest'  => true,
           'menu_position' => 20,
           'with_front' => true,
           'supports'      =>  array('title', 'editor', 'thumbnail', 'page-attributes'),
           'menu_icon'     => 'dashicons-editor-paragraph',
       )
   );
}
add_action( 'init', 'event_post' );