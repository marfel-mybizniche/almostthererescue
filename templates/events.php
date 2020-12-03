<?php /* Template Name: Events Page */ ?>

<?php get_header(); ?>

<main id="template_body" class="emp_template">
    
    <section class="sec_banner">
        <div class="grid-container">
            <h1>Events</h1>
        </div>
    </section>
    <?php
        $curDate = date("Ymd");

        $args = array(
            'post_type' => 'event',
            'posts_per_page' => -1,
            'meta_query'=> array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => "$curDate",
                )
            )		        
        );
        $curEvents = new WP_Query($args);
    ?>
    <section class="sec_events" data-a="<?php echo date("Y/m/d"); ?>">
        <div class="upcoming_events">
            <div class="grid-container">
                <h3 class="hline">Upcoming Events</h3>
                <p class="text-center">All ATR events are on hold due to Covid-19. Stay safe everyone and come back to this page later when we’re all happily wagging tails again!</p>
                <div class="grid-x grid-margin-x event_list">
                    <?php while ($curEvents->have_posts()) : $curEvents->the_post(); ?>
                    <div class="cell large-4">
                        <div class="event_item">
                            <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-event.jpg" alt=""></figure>
                            <div class="edate">
                                <?php //the_field('event_date');
                                    $unixtimestamp = strtotime( get_field('event_date') );
                                    echo date_i18n( "jS F Y", $unixtimestamp );
                                
                                ?>
                                
                            </div>
                            <h5 class="etitle"><?php the_title(); ?></h5>
                            <div class="edisc"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

        <div class="past_events">
            <div class="grid-container">
                <h3 class="hline">Past Events</h3>

                
                <?php
                    
                    $args2 = array(
                        'post_type' => 'event',
                        'posts_per_page' => -1,
                        'meta_query'=> array(
                            array(
                                'key' => 'event_date',
                                'compare' => '<',
                                'value' => "$curDate",
                            )
                        )		        
                    );
                                
                    $pastEvents = new WP_Query($args2);
                ?>
                <?php while ($pastEvents->have_posts()) : $pastEvents->the_post(); ?>
                <div class="grid-x grid-margin-x past_item pi<?php the_ID(); ?>">
                    <div class="cell medium-5 large-4 image">
                        <figure>
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            } else {
                                echo '<img src="https://via.placeholder.com/660x445/ffffff/dddddd?text=[no+thumnail]" alt="" />';
                            }
                        ?>
                        </figure>
                    </div>
                    <div class="cell medium-7 large-8 align-self-middle copy">
                        <?php  if(get_field('event_gallery') != "") {  ?>
                        <div class="img_slider">
                            <ul>
                            <?php
                                $images = acf_photo_gallery('event_gallery', $post->ID);
                                if( count($images) ){
                                    foreach($images as $image):
                                        $id = $image['id'];
                                        $title = $image['title'];
                                        $caption= $image['caption']; 
                                        $full_image_url= $image['full_image_url']; 
                                        //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); 
                                        $thumbnail_image_url= $image['thumbnail_image_url']; 
                                        $url= $image['url']; 
                                        $target= $image['target']; 
                        
                                        echo '<li><a data-fancybox href="'.$full_image_url.'"><img src="'.$full_image_url.'" alt="'.$title.'"></a></li>';
                                    endforeach; 
                                }
                            ?>
                            </ul>
                        </div>
                        <div class="nav_slider">
                            <span class="prev"></span>
                            <span class="next"></span>
                        </div>
                        <?php } ?>

                        <h4 class="hline left"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                        <script>
                            $(function(){
                                $('.pi<?php the_ID(); ?> .nav_slider .prev').click(function(){
                                    $('.pi<?php the_ID(); ?> .img_slider ul').slick('slickPrev');
                                })
                                $('.pi<?php the_ID(); ?> .nav_slider .next').click(function(){
                                    $('.pi<?php the_ID(); ?> .img_slider ul').slick('slickNext');
                                })
                            });
                        </script>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>               
                        
                <script>
                    $(function(){
                        $('.img_slider ul').slick({
                            infinite: true,
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            arrows: false,
                            responsive: [
                                {
                                breakpoint: 1201,
                                settings: {
                                        slidesToShow: 3
                                    }
                                },
                                {
                                breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                },                                
                                {
                                breakpoint: 640,
                                    settings: {
                                        slidesToShow: 2,
                                        arrows: true
                                    }
                                }
                            ]
                        });
                    });
                </script>            
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>