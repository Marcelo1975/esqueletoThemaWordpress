<?php
function mp_theme_styles(){
	wp_enqueue_style('theme.css', get_template_directory_uri().'/assets/css/theme.css');

	wp_enqueue_script('theme.js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),'1.0', true);
}

function mp_after_setup(){
	add_theme_support('menus');
	register_nav_menu('primary', __('Primary Menu', 'primeirotema'));

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
}

function mp_widgets(){
	register_sidebar(array(
		'name' => __('Meu Primeiro Sidebar', 'primeirotema'),
		'id' => 'mp_sidebar',
		'description' => __('Sidebar para o tema', 'primeirotema'),

		'before_title' => '<h4>',
		'after_title' => '</h4>',

		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>'
	));
}