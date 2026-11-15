<?php
/**
 * Liberty Plumber Theme Functions and Definitions.
 *
 * Crafted by NextRankHQ (https://nextrankhq.com) for plumbing, drain cleaning,
 * water heater, and home service contractors.
 *
 * @package LibertyPlumber
 * @since   1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LIBERTYPLUMBER_VERSION', '1.0.0' );
define( 'LIBERTYPLUMBER_DIR', get_template_directory() );
define( 'LIBERTYPLUMBER_URI', get_template_directory_uri() );

require_once LIBERTYPLUMBER_DIR . '/inc/setup.php';
require_once LIBERTYPLUMBER_DIR . '/inc/enqueue.php';
