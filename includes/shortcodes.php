<?php



function mbn_shortcode_home_url($atts = null, $content = null){

    return home_url();

}

add_shortcode('home_url', 'mbn_shortcode_home_url');




/*  
    Testimonials
    ----------------------------------------------------------------
    [display-faqs posts_per_page="" order="" orderby="" class=""]
*/
function display_faqs_post($attr) {
    extract( shortcode_atts( array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'orderby' => '',
        'order' => '',
        'class' => ''
    ), $attr ) );

    $args   =   array(
        'post_type' =>  $post_type,
        'posts_per_page' => $posts_per_page,
        'orderby' => $orderby,
        'order' => $order,
        'post_status' => 'publish'
    );

    $postslist = new WP_Query( $args );
    global $post;
    $postvar = "";

    if ( $postslist->have_posts() ) :
      $postvar   .= '<div class="sc-'.$post_type.'-items '.$class.'">';
      $postThumb = "";

        while ( $postslist->have_posts() ) : $postslist->the_post();   

          $postvar    .= '<div class="sc-'.$post_type.'-item">';
          $postvar    .= '<h3>'.get_the_title().'</h3>';
            $postvar    .= get_the_content();
          $postvar    .= '</div>';     

        endwhile; wp_reset_postdata();

        $postvar  .= '</div>';    
    else : 
        $postvar  .= 'no item/s found';             
    endif;    

    return $postvar;
}
add_shortcode( 'display-faqs', 'display_faqs_post' );