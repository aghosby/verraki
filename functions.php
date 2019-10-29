<?php

// adding the CSS and JS files


function my_filter_head() {

    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');



function load_stylesheets() {
	
	wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
	wp_enqueue_style('style');
	
	wp_register_style('fonts', get_template_directory_uri().'/css/fonts.css', array(), false, 'all');
	wp_enqueue_style('fonts');
	
	wp_register_style('preset', get_template_directory_uri().'/css/preset.css', array(), false, 'all');
	wp_enqueue_style('preset');
	
	
		
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs() {
	
	wp_register_script('main', get_stylesheet_directory_uri().'/js/main.js', array('jquery'), true);
	wp_enqueue_script('main');
	
	wp_register_script('scrolltofixed', get_stylesheet_directory_uri().'/js/jquery-scrolltofixed.js', array('jquery'), true);
	wp_enqueue_script('scrolltofixed');
	
	wp_register_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'), true);
	wp_enqueue_script('flexslider');
	
	wp_register_script('prefixfree', get_stylesheet_directory_uri().'/js/prefixfree-1.0.7.js', array('jquery'), true);
	wp_enqueue_script('prefixfree');
	
	
	
}
add_action('wp_enqueue_scripts', 'loadjs');

function verraki_init() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('menus');
	
}
add_action('after_setup_theme', 'verraki_init');


//Verraki Projects Post type
function verraki_solution_type() {
	register_post_type('solutions',
	  array(
	    'rewrite' => array('slug' => 'solutions'),
		'labels' => array(
		  'name' => 'Solutions',
		  'singular_name' => 'solution',
		  'add_new_item' => 'Add New Solution',
		  'edit_item' => 'Edit Solution'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_solution_type');


//Verraki News Post type
function verraki_news_type() {
	register_post_type('Newsroom',
	  array(
	    'rewrite' => array('slug' => 'newsroom'),
		'labels' => array(
		  'name' => 'Newsroom',
		  'singular_name' => 'newsroom',
		  'add_new_item' => 'Add News',
		  'edit_item' => 'Edit News'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_news_type');


//Verraki Values Post type
function verraki_values_type() {
	register_post_type('Values',
	  array(
	    'rewrite' => array('slug' => 'values'),
		'labels' => array(
		  'name' => 'Values',
		  'singular_name' => 'values',
		  'add_new_item' => 'Add Value',
		  'edit_item' => 'Edit Value'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_values_type');


//Verraki Team Post type
function verraki_team_type() {
	register_post_type('Team',
	  array(
	    'rewrite' => array('slug' => 'team'),
		'labels' => array(
		  'name' => 'Team',
		  'singular_name' => 'team',
		  'add_new_item' => 'Add team member',
		  'edit_item' => 'Edit team member'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_team_type');


//Verraki Advisors Post type
function verraki_advisors_type() {
	register_post_type('Advisors',
	  array(
	    'rewrite' => array('slug' => 'advisor'),
		'labels' => array(
		  'name' => 'Advisors',
		  'singular_name' => 'advisor',
		  'add_new_item' => 'Add advisor',
		  'edit_item' => 'Edit advisor'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_advisors_type');


//Verraki FAQ Post type
function verraki_faq_left() {
	register_post_type('FAQ Left',
	  array(
	    'rewrite' => array('slug' => 'faq'),
		'labels' => array(
		  'name' => 'Faq Left',
		  'singular_name' => 'faql',
		  'add_new_item' => 'Add faq',
		  'edit_item' => 'Edit faq'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_faq_left');


//Verraki FAQ Post type
function verraki_faq_right() {
	register_post_type('FAQ Right',
	  array(
	    'rewrite' => array('slug' => 'faq'),
		'labels' => array(
		  'name' => 'Faq Right',
		  'singular_name' => 'faqr',
		  'add_new_item' => 'Add faq',
		  'edit_item' => 'Edit faq'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_faq_right');


//Verraki Clients Post type
function verraki_clients_right() {
	register_post_type('Clients',
	  array(
	    'rewrite' => array('slug' => 'clients'),
		'labels' => array(
		  'name' => 'Clients',
		  'singular_name' => 'client',
		  'add_new_item' => 'Add client',
		  'edit_item' => 'Edit client'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_clients_right');


//Verraki Industries Post type
function verraki_services_sector() {
	register_post_type('services',
	  array(
	    'rewrite' => array('slug' => 'industries'),
		'labels' => array(
		  'name' => 'Services Sector',
		  'singular_name' => 'service',
		  'add_new_item' => 'Add service sector',
		  'edit_item' => 'Edit service sector'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_services_sector');


//Verraki Industries Post type
function verraki_real_sector() {
	register_post_type('real',
	  array(
	    'rewrite' => array('slug' => 'industries'),
		'labels' => array(
		  'name' => 'Real Sector',
		  'singular_name' => 'real',
		  'add_new_item' => 'Add real sector',
		  'edit_item' => 'Edit real sector'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_real_sector');


//Verraki Industries Post type
function verraki_social_scetor() {
	register_post_type('social',
	  array(
	    'rewrite' => array('slug' => 'industries'),
		'labels' => array(
		  'name' => 'Social Sector',
		  'singular_name' => 'social',
		  'add_new_item' => 'Add social sector',
		  'edit_item' => 'Edit social sector'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_social_scetor');


//Verraki Careers Post type
function verraki_available_positions() {
	register_post_type('positions',
	  array(
	    'rewrite' => array('slug' => 'positions'),
		'labels' => array(
		  'name' => 'Avaliable Positions',
		  'singular_name' => 'position',
		  'add_new_item' => 'Add position',
		  'edit_item' => 'Edit position'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'verraki_available_positions');

