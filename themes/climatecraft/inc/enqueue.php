<?php
/**
 * Front-end asset enqueueing for ClimateCraft.
 *
 * @package ClimateCraft
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues front-end stylesheets and interactive vanilla JS enhancements.
 *
 * @return void
 */
function climatecraft_enqueue_assets(): void {
	wp_enqueue_style(
		'climatecraft-main',
		CLIMATECRAFT_URI . '/assets/css/main.css',
		array(),
		CLIMATECRAFT_VERSION
	);

	wp_enqueue_script(
		'climatecraft-script',
		CLIMATECRAFT_URI . '/assets/js/theme.js',
		array(),
		CLIMATECRAFT_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'climatecraft_enqueue_assets' );
