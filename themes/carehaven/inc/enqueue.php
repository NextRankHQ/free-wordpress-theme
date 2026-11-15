<?php
/**
 * Frontend and editor asset loading.
 *
 * Uses modern WordPress 6.3+ deferred script loading and zero jQuery dependencies.
 *
 * @package Carehaven
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue frontend styles and lightweight vanilla ES6 interactions.
 */
function carehaven_enqueue_assets(): void {
	wp_enqueue_style(
		'carehaven-style',
		get_stylesheet_uri(),
		array(),
		CAREHAVEN_VERSION
	);

	wp_enqueue_style(
		'carehaven-main',
		CAREHAVEN_URI . '/assets/css/main.css',
		array( 'carehaven-style' ),
		CAREHAVEN_VERSION
	);

	wp_enqueue_script(
		'carehaven-theme',
		CAREHAVEN_URI . '/assets/js/theme.js',
		array(),
		CAREHAVEN_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'carehaven_enqueue_assets' );
