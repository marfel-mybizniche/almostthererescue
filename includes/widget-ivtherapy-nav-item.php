<?php

// Register and load the widget
function mbn_widget_ivtherapy_nav_item(){
    register_widget('MBN_Widget_IVtherapy_Nav_Item');
}
add_action('widgets_init', 'mbn_widget_ivtherapy_nav_item');


 
// Creating the widget 
class MBN_Widget_IVtherapy_Nav_Item extends WP_Widget{
    function __construct() {
        parent::__construct(
            // Base ID of your widget
            'mbn_widget_ivtherapy_nav_item', 
            
            // Widget name will appear in UI
            'IV Therapy Nav Item', 
            
            // Widget description
            array('description' => 'IV Therapy Nav Item') 
        );
    }
 
    // Creating widget front-end
    public function widget($args, $instance){
        echo $args['before_widget'];

        $item = get_post($instance['item']);

        if($item){
        ?>
        <a class="ivtherapy-nav-item" href="<?php the_permalink(187); ?>#ivmenu-item-<?php echo $item->ID ?>">
            <!-- <img src="<?php echo get_field('icon', $item->ID) ?>" alt="" class="icon"> -->
            <span class="icon">
                <?php
                $colorId        = 'color-'.$item->ID;
                $color          = get_field('color', $item->ID);
                $color1         = $color['color'];
                $color2         = $color['color_2'];;
                $is_gradient    = $color['use_gradient'];

                //include(locate_template('template-parts/ivtherapy-icon.php', false, false));
                ?>
                <img src="<?php echo get_field('menu_icon', $item->ID) ?>" alt="">
            </span>
            <style>
            <?php echo '#text-'.$item->ID ?>{
                color:<?php echo $color1 ?$color1 :'#fff' ?>;
                <?php if($is_gradient): ?>
                background: -webkit-linear-gradient(<?php echo $color2.', '.$color1 ?>);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                <?php endif ?>
            }
            </style>
            <span id="text-<?php echo $item->ID ?>" class="text">
                <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-toka-label.svg" alt="">
                <?php echo $item->post_title ?>
            </span>
        </a>
        <?php
        }

        echo $args['after_widget'];
    }
            
    // Widget Backend 
    public function form($instance){
        $items = get_posts('post_type=ivtherapy&posts_per_page=-1');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('item') ?>"><?php _e('Choose:') ?></label>
            <select name="<?php echo $this->get_field_name('item') ?>" id="<?php echo $this->get_field_id('item') ?>" class="widefat">
                <option value="">-- SELECT --</option>

                <?php foreach($items as $item): ?>
                <option value="<?php echo $item->ID ?>" <?php echo $instance['item'] == $item->ID ?'selected' :'' ?>>
                    <?php echo $item->post_title ?>
                </option>
                <?php endforeach ?>
            </select>
        </p>
        <?php 
    }
     
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance){
        $instance = [];

        $instance['item']  = (!empty($new_instance['item'])) ?strip_tags($new_instance['item']) :'';

        return $instance;
    }
}