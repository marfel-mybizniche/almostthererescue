<footer id="footer">
    <section class="footer_section">
        <div class="grid-container full footer_forms">
            <div class="grid-x">
                <div class="cell small-12 medium-12 large-7 footer_scheduler_wrapper">
                    
                    <h2>Interested in meeting adoptable ATR pups in person?</h2>

                    <p>Our cuties just love visitors! Schedule an appointment by clicking the box below!</p>

                    <div class="online_scheduler">
                        <iframe src="https://app.acuityscheduling.com/schedule.php?owner=16402003" title="Schedule Appointment" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
                    </div> 

                </div>
                <div class="cell small-12 medium-12 large-5 footer_contact_wrapper">

                    <div class="footer_logo">
                        <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo("name"); ?>">
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-white.png" alt="<?php echo get_bloginfo('name'); ?>" />
                        </a>
                        <!-- <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo("name"); ?>">
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/logo_footer.png" alt="<?php echo get_bloginfo('name'); ?>" />
                        </a>
                        <h2>a mom + pups rescue</h2>-->
                    </div>

                    <h2>Contact Us</h2>
                    <div class="footer_contact">
                        <?php //echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]'); ?>
                        <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                    </div>

                    <div class="footer_contact_details">
                        <div class="phone_social">
                            <div class="iBlock phone">
                                <a href="tel:6029120064"><img src="<?php echo MBN_ASSETS_URI ?>/img/icons/icon_white_phone.svg" alt="Facebook" />602.912.0064</a></div>
                            <div class="iBlock social">
                                <h5><span>Connect with us: </span>
                                    <a href="https://www.facebook.com/almostthererescue" target="_blank">
                                        <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/fb.svg" alt="Facebook" /></a> 
                                    <a href="https://www.instagram.com/almostthererescue/" target="_blank">
                                        <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/ig.svg" alt="Instagram" /></a>
                                </h5>
                            </div>
                        </div>
                        <div class="email">
                            <div class="iBlock"><a href="mailto:info@almostthererescue.org"><img src="<?php echo MBN_ASSETS_URI ?>/img/icons/icon_white_email.svg" alt="Mail Us" /> info@almostthererescue.org</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="grid-container footer_last">
            <div class="grid-x">
                <div class="cell medium-12 copyright_wrapper">
                    <div class="copyright_text">
                        <span class="copy">&copy; <?php echo date('Y'); ?> Almost There Rescue. All rights reserved.</span>
                        <a href="/privacy-policy/">Privacy Policy</a><span class="link_separator">I</span><a href="/terms-and-condition/">Terms and Conditions</a>
                    </div>

                    <div class="made_by"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: MyBizNiche.</div>
                </div>
            </div>
        </div>
    </section>
</footer>

 <?php wp_footer() ?>
</body>
</html>