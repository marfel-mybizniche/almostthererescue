<?php

include_once MBN_DIR_PATH.'/includes/cmb2-init.php';


function mbn_register_template_options_metabox(){
    $prefix		= 'mbn_';
	$tabs		= [];
	$fields		= [];


	/* FIELDS
	************************************************/
	$fields[]	= [
		'name'			=> 'Sub Heading',
		'desc'			=> '',
		'id'			=> $prefix.'sub_heading',
		'type'			=> 'text',
		'show_on_cb'	=> mbn_cmb2_show_on_template([
			'template-foster.php',
			'template-volunteer.php',
			'template-adopted-dogs.php',
			'template-think-adopt.php',
			'template-faqs.php',
			'template-donate.php',
			'template-stories.php',
			'template-special-dogs.php',
			'template-coming-soon-dogs.php',
			'template-available-dogs.php',
			'template-in-memoriam.php',
			'template-resources.php',
			'template-upcoming-events.php',
			'template-adoption.php',
			'template-run-for-retrievers.php',
			'template-run-for-retrievers-5k.php'
		])
	];

	$fields[]	= [
		'name'			=> 'Heading',
		'desc'			=> '',
		'id'			=> $prefix.'heading',
		'type'			=> 'text',
		'show_on_cb'	=> mbn_cmb2_show_on_template([
			'template-foster.php',
			'template-volunteer.php',
			'template-adopted-dogs.php',
			'template-think-adopt.php',
			'template-faqs.php',
			'template-donate.php',
			'template-stories.php',
			'template-special-dogs.php',
			'template-coming-soon-dogs.php',
			'template-available-dogs.php',
			'template-in-memoriam.php',
			'template-resources.php',
			'template-upcoming-events.php',
			'template-adoption.php',
			'template-run-for-retrievers.php',
			'template-run-for-retrievers-5k.php'
		])
	];

	$fields[]	= [
		'name'			=> 'Description',
		'desc'			=> '',
		'id'			=> $prefix.'description',
		'type'			=> 'wysiwyg',
		'show_on_cb'	=> mbn_cmb2_show_on_template([
			'template-faqs.php',
			'template-donate.php',
			'template-stories.php',
		])
	];

	$fields[]	= [
		'name'			=> 'Background Image',
		'desc'			=> 'Upload an image or enter a URL.',
		'id'			=> $prefix.'heading_background_image',
		'type'			=> 'file',
		'show_on_cb'	=> mbn_cmb2_show_on_template([
			'template-foster.php',
			'template-volunteer.php',
			'template-adopted-dogs.php',
			'template-think-adopt.php',
			'template-faqs.php',
			'template-donate.php',
			'template-stories.php',
			'template-special-dogs.php',
			'template-coming-soon-dogs.php',
			'template-available-dogs.php',
			'template-in-memoriam.php',
			'template-resources.php',
			'template-upcoming-events.php',
			'template-adoption.php',
			'template-run-for-retrievers.php',
			'template-run-for-retrievers-5k.php'
		])
	];


	/* TABS
	************************************************/
	$template = basename(get_page_template_slug($_GET['post']));

	if($template == 'template-foster.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-volunteer.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-think-adopt.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-adopted-dogs.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-faqs.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'description',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-donate.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'description',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-stories.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'description',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-special-dogs.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-coming-soon-dogs.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}

	if($template == 'template-in-memoriam.php'){
		$tabs[]		= [
			'id'	=> 'tab-1',
			'icon'	=> 'dashicons-media-text',
			'title'	=> 'Page Header',
			'fields'	=> [
				$prefix.'sub_heading',
				$prefix.'heading',
				$prefix.'heading_background_image'
			]
		];
	}



	// Init CMB2
	$cmb2 = new_cmb2_box(array(
		'id'            => $prefix.'template_options',
		'title'         => esc_html__('Template Options', 'cmb2'),
		'object_types'  => ['page'],
		'vertical_tabs'	=> true,
		'tabs'			=> $tabs,
		'fields'		=> $fields,
		'show_on_cb'	=> 'mbn_cmb2_show_if_has_template'
    ));
}
add_action('cmb2_admin_init', 'mbn_register_template_options_metabox');



function mbn_cmb2_show_if_has_template(){
	$template = get_page_template_slug($_GET['post']);

	if($template)
		return true;
	else
		return false;
}


function mbn_cmb2_show_on_template($templates){
	$template = basename(get_page_template_slug($_GET['post']));

	if(in_array($template, $templates))
		return '__return_true';
	else
		return '__return_false';
}


function mbn_get_template_option($post_id, $key, $single){
	$prefix = 'mbn_';

	return get_post_meta($post_id, $prefix.$key, $single);
}



