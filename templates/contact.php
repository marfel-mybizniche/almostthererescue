<?php /* Template Name: Contact Us Template */ ?>

<?php get_header(); ?>

<main id="template_body" class="contact_template">
<?php while ( have_posts() ) : the_post(); ?>
    
    <section>
        <div class="grid-container full"><div class="grid-x">
            <div class="contact_left_cell cell large-6 small-12">
                <h1><?php the_title(); ?></h1>
                <div class="wp_content">
                    <?php the_content(); ?>
                </div>
                <div class="contact_content">
                    <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                </div>
            </div>
            <div class="contact_right_cell cell large-6 small-12">
                <div class="view_map_link">
                    <span class="icon">
                        <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-atr.png" alt="">
                    </span>
                    <figure>
                        <a data-fancybox data-src="#hidden-content" href="javascript:;">
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/atr-front.jpg" alt="">
                            <figcaption>View Map</figcaption>  
                        </a>
                    </figure>
                    <!-- <a data-fancybox data-src="#hidden-content" href="javascript:;"><img src="<?php echo MBN_ASSETS_URI ?>/img/contact_img.png" alt="View Map" /></a> -->
                    <div style="display: none;" id="hidden-content" class="modal_map">
                        <iframe src="https://snazzymaps.com/embed/271250" width="100%" height="500px" style="border:none;"></iframe>
                    </div>
                </div>
                
                <div class="contact_details">
                    <ul class="map_details">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="23.951" height="28.607" viewBox="0 0 23.951 28.607"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px}</style></defs><g id="address" transform="translate(-3)"><path id="Path_4014" d="M25.451 11.976c0 8.148-10.476 15.131-10.476 15.131S4.5 20.123 4.5 11.976a10.476 10.476 0 1 1 20.951 0z" class="cls-1"/><path id="Path_4015" d="M20.484 13.992a3.492 3.492 0 1 1-3.492-3.492 3.492 3.492 0 0 1 3.492 3.492z" class="cls-1" transform="translate(-2.016 -2.016)"/></g></svg>
                        <a href="https://goo.gl/maps/rZX9kzgFHt4La9u49" target="_blank">2601 E Indian School Rd, Phoenix, AZ 85016</a></li>
                        <li><a class="white_text" href="tel:6029120064"><svg xmlns="http://www.w3.org/2000/svg" width="23.845" height="23.887" viewBox="0 0 23.845 23.887"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px" d="M24.011 18.636v3.144a2.1 2.1 0 0 1-2.285 2.1 20.74 20.74 0 0 1-9.044-3.217 20.436 20.436 0 0 1-6.288-6.288 20.74 20.74 0 0 1-3.218-9.09A2.1 2.1 0 0 1 5.262 3h3.144a2.1 2.1 0 0 1 2.1 1.8 13.456 13.456 0 0 0 .734 2.945 2.1 2.1 0 0 1-.472 2.211L9.433 11.29a16.768 16.768 0 0 0 6.288 6.288l1.331-1.331a2.1 2.1 0 0 1 2.211-.472 13.456 13.456 0 0 0 2.945.734 2.1 2.1 0 0 1 1.803 2.127z" transform="translate(-1.667 -1.5)"/></svg>
                        <span>602.912.0064</span></a></li>
                        <li><a href="mailto:info@almostthererescue.org"><svg xmlns="http://www.w3.org/2000/svg" width="25.022" height="19.675" viewBox="0 0 25.022 19.675"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px}</style></defs><g id="email_icn" transform="translate(-.911 -4.5)"><path id="Path_1360" d="M5.084 6h16.675a2.091 2.091 0 0 1 2.084 2.084v12.507a2.091 2.091 0 0 1-2.084 2.084H5.084A2.091 2.091 0 0 1 3 20.591V8.084A2.091 2.091 0 0 1 5.084 6z" class="cls-1"/><path id="Path_1361" d="M23.844 9l-10.422 7.3L3 9" class="cls-1" transform="translate(0 -.916)"/></g></svg>
                        <span>info@almostthererescue.org</span></a></li>
                    </ul>

                    <div class="social">
                        <h5><span>Connect with us: </span>
                            <a href="https://www.facebook.com/almostthererescue" target="_blank">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/fb.svg" alt="Facebook">
                            </a> 
                            <a href="https://www.instagram.com/almostthererescue" target="_blank">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/ig.svg" alt="Instagram">
                            </a>
                        </h5>
                    </div>
                </div>


            </div>
        </div></div>
    </section>

<?php  endwhile; ?>
</main>


<?php wp_footer() ?>


<footer id="footer">
    <section class="footer_section">
        <div class="grid-container footer_last">
            <div class="grid-x">
                <div class="cell medium-12 copyright_wrapper">
                    <div class="copyright_text">
                        <span class="copy">&copy; <?php echo date('Y'); ?> Almost There Rescue. All rights reserved.</span>
                        <a href="#">Privacy Policy</a><span class="link_separator">I</span><a href="#">Terms and conditions</a>
                    </div>

                    <div class="made_by"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: MyBizNiche.</div>
                </div>
            </div>
        </div>
    </section>
</footer>

</body>
</html>