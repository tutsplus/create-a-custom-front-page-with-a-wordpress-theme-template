<?php
/***************************************************
Register widget area for front page widgets
****************************************************/

function tutsplus_front_page_widget_area() {
	
	register_sidebar( array(
		'name' => __( 'Front Page Widget Area', 'tutsplus' ),
		'id' => 'front-page-sidebar',
		'description' => __( 'Widgets in this area will be shown on the home page only.', 'tutsplus' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	
}
add_action( 'widgets_init', 'tutsplus_front_page_widget_area' );