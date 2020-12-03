<?php /* Template Name: Block Template */ ?>

<?php get_header(); ?>

<main id="template_body" class="block_template">
    
    <?php
    while ( have_posts() ) : the_post();
        
        the_content();

    endwhile; // End of the loop.
    ?>

</main>

<?php get_footer(); ?>