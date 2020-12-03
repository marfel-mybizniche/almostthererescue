<?php get_header() ?>

<main id="template_body" class="page_default_template">
<?php while ( have_posts() ) : the_post(); ?>
<section class="page-content">
	<div class="grid-container full">
	
		<div class="grid-x page_default_title">
            <div class="cell medium-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

	</div>


    <div class="grid-container">
        <div class="grid-x page_default_content">
            <div class="cell medium-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

</section>


<?php endwhile; // End of the loop. ?>

</main>


<?php get_footer() ?>