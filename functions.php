<?php 
	 add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_styles' );
	 function oceanwp_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } // denne sætning linker til mother-themets style.css
 ?>