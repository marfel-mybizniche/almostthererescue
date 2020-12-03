<?php

include_once MBN_DIR_PATH.'/includes/cmb2-init.php';


/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function mbn_register_theme_options_metabox(){
    $prefix    = 'mbn_';
	$cmb2       = new_cmb2_box(array(
		'id'                    => $prefix.'theme_options_page',
		'title'                 => 'Theme Options',
		'object_types'          => array('options-page'),
		'option_key'            => $prefix.'theme_options', // The option key and admin menu page slug.
		'icon_url'              => 'dashicons-layout', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'         => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
		// 'parent_slug'        => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'         => 'manage_options', // Cap required to view options-page.
		// 'position'           => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook'    => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'         => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		// 'save_button'        => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
		// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
		// 'message_cb'         => 'mbn_options_page_message_callback',
		'tab_group'             => 'general', // Tab-group identifier, enables options page tab navigation.
		'tab_title'             => 'General', // Falls back to 'title' (above).
		// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
    ));

    
	$cmb2->add_field(array(
		'name' => 'Logo',
		'desc' => '',
		'id'   => $prefix.'logo',
		'type' => 'file'
	));
    
	$cmb2->add_field(array(
		'name' => 'Alternative Logo',
		'desc' => '',
		'id'   => $prefix.'alternative_logo',
		'type' => 'file'
	));

	$cmb2->add_field(array(
		'name' => 'Facebook URL',
		'desc' => '',
		'id'   => $prefix.'facebook_url',
		'type' => 'text_url'
	));

	$cmb2->add_field(array(
		'name' => 'Twitter URL',
		'desc' => '',
		'id'   => $prefix.'twitter_url',
		'type' => 'text_url'
	));

	$cmb2->add_field(array(
		'name' => 'Instagram URL',
		'desc' => '',
		'id'   => $prefix.'instagram_url',
		'type' => 'text_url'
	));

	$cmb2->add_field(array(
		'name' => 'Youtube URL',
		'desc' => '',
		'id'   => $prefix.'youtube_url',
		'type' => 'text_url'
	));

	$cmb2->add_field(array(
		'name' => 'Phone Number',
		'desc' => '',
		'id'   => $prefix.'phone_number',
		'type' => 'text_medium',
	));

}
add_action('cmb2_admin_init', 'mbn_register_theme_options_metabox');



/**
 * Get Option Function
**/
function mbn_get_theme_option($key = '', $default = false){
    $prefix     = 'mbn_';
    $option_key = $prefix.'theme_options';

	if(function_exists('cmb2_get_option')){
		return cmb2_get_option($option_key, $key, $default);
    }
    
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option($option_key, $default);
    $val = $default;
    
	if('all' == $key){
		$val = $opts;
	}elseif(is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]){
		$val = $opts[$key];
    }
    
	return $val;
}