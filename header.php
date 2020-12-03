<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>


<header id="header" data-sticky-container="" data-toggler=".show-menu" class="sticky-container" data-n="qgzebj-n">
    <div class="hsnav-s11 sticky is-anchored is-at-top" data-sticky="" data-options="marginTop:0" data-resize="s9kyth-sticky" data-mutate="s9kyth-sticky" data-n="vm0tew-n" data-events="mutate" style="max-width: 1903px; margin-top: 0px; bottom: auto; top: 0px;">
        <div class="navbar clearfix">
            <div class="grid-container">
                <a class="navlogo" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo("name"); ?>">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="<?php echo get_bloginfo('name'); ?>" />
                </a>

                <span class="navicon hide-for-large" data-toggle="header" aria-expanded="true" aria-controls="header">mobile menu</span>
                    
                <?php wp_nav_menu(array('theme_location' => 'header-menu',
                                'items_wrap'     => '<nav class="navleft navmenu show-for-large" id="mobile_menu_nav"><ul class="menu dropdown expanded" data-dropdown-menu="" role="menubar" data-n="q00ipd-n">%3$s</ul></nav>')); ?>

                <?php wp_nav_menu(array('theme_location' => 'right-header-menu',
                                'items_wrap'     => '<nav class="navright navmenu show-for-large" id="mobile_menu_nav"><ul class="menu dropdown align-right expanded" data-dropdown-menu="" role="menubar" data-n="ihg4yr-n">%3$s</ul></nav>')); ?>
            </div>


            <nav class="mobmenu" id="mobile_menu_nav">
                <a class="moblogo" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo("name"); ?>">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-w.svg" alt="<?php echo get_bloginfo('name'); ?>" />
                </a>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'mobile-menu',
                        'items_wrap'     => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu="" data-submenu-toggle="true" role="tree" aria-multiselectable="false" data-n="glesy3-n">%3$s</ul>')
                    ); 
                ?>

                <div class="mobinfo">
                    <ul>
                        <li class="phone">
                            <a href="tel:6029120064">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/icon_white_phone.svg" alt="Facebook">602.912.0064
                            </a>
                        </li>
                        <li class="email">
                            <a href="mailto:info@almostthererescue.org">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/icon_white_email.svg" alt="Mail Us"> info@almostthererescue.org
                            </a>
                        </li>
                        <li class="social">
                            <h5><span>Connect with us: </span>
                                <a href="https://www.facebook.com/almostthererescue" target="_blank">
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/fb.svg" alt="Facebook">
                                </a> 
                                <a href="https://www.instagram.com/almostthererescue" target="_blank">
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icons/ig.svg" alt="Instagram">
                                </a>
                            </h5>
                        </li>
                        <li class="contact">
                            <a href="/contact-us/">CONTACT US</a>
                        </li>
                    </ul>
                </div>  
            </nav>
             
        </div>
    </div>            
</header>