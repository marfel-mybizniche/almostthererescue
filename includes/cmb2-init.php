<?php

if(!file_exists(MBN_DIR_PATH.'/includes/cmb2/init.php') && file_exists(MBN_DIR_PATH.'/includes/CMB2/init.php')){
	return;
}

define('CMB2_PREFIX', 'mbn_');

/*
** Include CMB2
*/
require_once MBN_DIR_PATH.'/includes/cmb2/init.php';


/*
** Include CMB2 Addons
*/
require_once MBN_DIR_PATH.'/includes/cmb2-addons/cmb2-tabs/cmb2-tabs.php';


/*
** Re-enqueue CMB2 Tabs scripts
*/
function mbn_cmb2_reenqueue_scripts(){
	wp_deregister_script('cmb-tabs');
	wp_register_script('cmb-tabs', MBN_DIR_URI.'/includes/cmb2-addons/cmb2-tabs/js/tabs.js', array('jquery'), '', true);
	wp_enqueue_script('cmb-tabs');

	wp_deregister_style('cmb-tabs');
	wp_enqueue_style('cmb-tabs', MBN_DIR_URI.'/includes/cmb2-addons/cmb2-tabs/css/tabs.css', array(), '');
}
add_action('admin_enqueue_scripts', 'mbn_cmb2_reenqueue_scripts', 20);


/*
** Function to get cmb2 values
*/
if(!function_exists('cmb2_get_value')){
	function cmb2_get_value($post_id, $key, $single=false){
		return get_post_meta($post_id, CMB2_PREFIX.$key, $single);
	}
}