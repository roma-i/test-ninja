<?php
/**
 * Twenty Seventeen Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen Child
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


/* mover add to cart */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );

/* move rating */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 30 );

/* delete category */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


/* Add custom post type */

if ( ! function_exists('twentyseventeen_register_post_type_and_tax') ) {

	function twentyseventeen_register_post_type_and_tax() { 

	  // New Post Type
	  register_post_type( 'book',
	      array(
	        'labels' => array(
	            'name' => __( 'Books' ),
	            'singular_name' => __( 'Book', 'twentyseventeen' )
	        ),
	        'menu_icon' => 'dashicons-admin-post',
	        'public' => true,
	        'has_archive' => true,
	        'rewrite' => array('slug' => 'books'),
	      )
	  );

	  // New Taxonomy
	  register_taxonomy(
	      'genre-category',
	      'book',
	      array(
	        'label' => __( 'Genre', 'twentyseventeen' ),
	        'rewrite' => array( 'slug' => 'genre-category' ),
	        'hierarchical' => true,
	      )
	  );
	  //end of register
	}
}
add_action('init', 'twentyseventeen_register_post_type_and_tax' );


