<?php
/**
 * Carehaven functions and definitions.
 *
 * Crafted by NextRankHQ (https://nextrankhq.com) for Dental Practices & Medical Clinics.
 * WordPress Full Site Editing block theme with local font stacks and zero external requests.
 *
 * @package Carehaven
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CAREHAVEN_VERSION', '1.0.4' );
define( 'CAREHAVEN_DIR', get_template_directory() );
define( 'CAREHAVEN_URI', get_template_directory_uri() );

require_once CAREHAVEN_DIR . '/inc/setup.php';
require_once CAREHAVEN_DIR . '/inc/enqueue.php';
