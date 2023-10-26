<?php
/**
 * History Museum: Block Patterns
 *
 * @since History Museum 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since History Museum 1.0
 *
 * @return void
 */
function history_museum_register_block_patterns() {
	$block_pattern_categories = array(
		'history-museum'    => array( 'label' => __( 'History Museum', 'history-museum' ) ),
	);

	$block_pattern_categories = apply_filters( 'history_museum_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'history_museum_register_block_patterns', 9 );
