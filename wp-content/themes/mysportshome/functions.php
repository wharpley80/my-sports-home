<?php

function msh_theme_styles() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'msh_theme_styles' );

function msh_theme_js() {
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 
		'', true );
	wp_enqueue_script( 'scripts_js', get_template_directory_uri() . 'js/scripts.js', array('jquery', 'bootstrap_js'), 
		'', true);
}
add_action('wp_enqueue_scripts', 'msh_theme_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array(
			'header-menu' => __('Header Menu', 'mysportshome')
		)
	);
}
add_action( 'init', 'register_theme_menus' );

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on left of Homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of Homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on right of Homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

//add_filter( 'show_admin_bar', '__return_true' );

?>