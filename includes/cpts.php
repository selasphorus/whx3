<?php
/**
 * WHx4 Post Types, Taxonomies, Field Groups
 *
 */

/**
 * Check if ACF PRO is active and function exists
 */
if ( function_exists( 'acf_add_local_field_group' ) ) {
	add_action( 'acf/init', 'whx4_cpts_and_field_groups' );
}

/* +~+~+  +~+~+ */

function whx4_cpts_and_field_groups() {

	// Load custom post types
	require 'includes/posttypes.php';

	// Load custom taxonomies
	require 'includes/taxonomies.php';
	
	// Load ACF field groups hard-coded as PHP
	require 'includes/acf-field-groups.php';

}

?>