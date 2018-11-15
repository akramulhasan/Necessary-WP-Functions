<?php 
if ( ! function_exists( 'ration_excerpt_more' ) ) :
	/**
	 * remove .... from excerpt
	 */
	function ration_excerpt_more( $more ) {
		return ' ';
	}
	add_filter('excerpt_more', 'ration_excerpt_more');

endif;