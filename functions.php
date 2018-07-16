<?php
/**
* Registering menu Support 
*/
function myCarnewsMenu() {

	if (function_exists('register_nav_menu')) {
	register_nav_menu( 'header_top_menu', __( 'Header Menu', 'carnews' ) );
	register_nav_menu( 'footer_menu', __( 'Footer Menu', 'carnews' ) );
		}
}
add_action('init', 'myCarnewsMenu');


/**
* Featured Image Support
*/
add_theme_support( 'post-thumbnails', array( 'post', 'page') );
set_post_thumbnail_size( 200, 200, true );


/**
* Widget Support
*/
function widgets_sidebar(){
	register_sidebar( array(
	'name' => esc_html__( 'Home Page Sidebar One', 'carnews' ),
	'description'=>esc_html__('This is sidebar One description....','carnews'),
	'id' => 'widget-home-one',
	'before_widget' => '<div class="siderbar-widget">',
	'after_widget' => ' </div>',
	'before_title' => '<h4 class="sidebar-widget-title">',
	'after_title' => '</h4> ',
	) );

	register_sidebar( array(
	'name' => esc_html__( 'Footer Widget', 'carnews' ),
	'description'=>esc_html__('This is sidebar description....','carnews'),
	'id' => 'footer',
	'before_widget' => '<div class="footer-widget"><div class="col-md-3 col-sm-6 col-xs-12">',
	'after_widget' => ' </div></div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2> ',
	) );

	register_sidebar( array(
	'name' => esc_html__( 'Footer Contact Widget', 'carnews' ),
	'description'=>esc_html__('This is Footer Contact description....','carnews'),
	'id' => 'footer-contact',
	'before_widget' => ' <div class="emergency-call mrb-50">',
	'after_widget' => ' </div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2> ',
	) );
	
}
add_action( 'widgets_init', 'widgets_sidebar' );























