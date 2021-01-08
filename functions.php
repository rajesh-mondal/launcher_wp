<?php

function launcher_setup_theme(){
	load_theme_textdomain("launcher");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
}

add_action("after_setup_theme","launcher_setup_theme");

function launcher_assets(){
	wp_enqueue_style("launcher",get_stylesheet_uri());
	wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
	wp_enqueue_style("icomoon-css", get_theme_file_uri("/assets/css/icomoon.css"));
	wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.css"));
	wp_enqueue_style("style-css", get_theme_file_uri("/assets/css/style.css"));

	wp_enqueue_script( "easing-jquery-js", get_theme_file_uri( "/assets/js/jquery.easing.1.3.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "bootstrap-jquery-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "waypoint-jquery-js", get_theme_file_uri( "/assets/js/jquery.waypoints.min.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "countdown-jquery-js", get_theme_file_uri( "/assets/js/simplyCountdown.js" ), array( "jquery" ), null, true );
	wp_enqueue_script( "main-jquery-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery" ), "0.1", true );
}

add_action("wp_enqueue_scripts","launcher_assets");