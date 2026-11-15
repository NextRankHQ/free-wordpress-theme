<?php
/**
 * ClimateCraft functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ClimateCraft
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CLIMATECRAFT_VERSION', wp_get_theme()->get( 'Version' ) ? (string) wp_get_theme()->get( 'Version' ) : '1.0.0' );
define( 'CLIMATECRAFT_DIR', get_template_directory() );
define( 'CLIMATECRAFT_URI', get_template_directory_uri() );

require_once CLIMATECRAFT_DIR . '/inc/setup.php';
require_once CLIMATECRAFT_DIR . '/inc/enqueue.php';
