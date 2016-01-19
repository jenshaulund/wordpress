<?php
/**
 * my-simone functions and definitions
 *
 * @package my-simone
 */

function rf_add_reviews( $query ){
	if( !is_admin() && $query->is_main_query() ){
		if( $query->is_home()){
			$query->set( 'post_type', array( 'post', 'reviews', 'testimonials'));
		}
	}
}
add_action( 'pre_get_posts', 'rf_add_reviews' );

function custom_excerpt_length( $length ) {
<<<<<<< HEAD
	return 60;
=======
	return 30;
>>>>>>> ee631770fbe37794cbcc6e1d85eb5737c6ba3383
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' [....]';
}
add_filter('excerpt_more', 'new_excerpt_more');
