<?php
/**
 * Enqueue Frontend Styles and Accessible Micro-Interaction Scripts.
 *
 * @package LibertyPlumber
 * @since   1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues main stylesheet and vanilla JavaScript enhancements.
 *
 * @return void
 */
function libertyplumber_enqueue_assets(): void {
	$css_path = LIBERTYPLUMBER_DIR . '/assets/css/main.css';
	$js_path  = LIBERTYPLUMBER_DIR . '/assets/js/theme.js';

	wp_enqueue_style(
		'liberty-plumber-main',
		LIBERTYPLUMBER_URI . '/assets/css/main.css',
		array(),
		file_exists( $css_path ) ? (string) filemtime( $css_path ) : LIBERTYPLUMBER_VERSION
	);

	if ( file_exists( $js_path ) ) {
		wp_enqueue_script(
			'liberty-plumber-interactions',
			LIBERTYPLUMBER_URI . '/assets/js/theme.js',
			array(),
			(string) filemtime( $js_path ),
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'libertyplumber_enqueue_assets' );
