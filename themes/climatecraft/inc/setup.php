<?php
/**
 * Theme Setup, Block Pattern Categories, and Custom Block Styles.
 *
 * @package ClimateCraft
 * @since   1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for WordPress features.
 *
 * @return void
 */
function climatecraft_setup(): void {
	load_theme_textdomain( 'climatecraft', CLIMATECRAFT_DIR . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 76,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	add_editor_style(
		array(
			'assets/css/main.css',
			'assets/css/editor.css',
		)
	);
}
add_action( 'after_setup_theme', 'climatecraft_setup' );

/**
 * Registers custom block pattern categories for HVAC contractors.
 *
 * @return void
 */
function climatecraft_register_pattern_categories(): void {
	$categories = array(
		'climatecraft-pages'      => array(
			'label'       => __( 'ClimateCraft: Full HVAC Page Layouts', 'climatecraft' ),
			'description' => __( 'Complete 1-click heating, cooling, and IAQ page layouts ready to customize.', 'climatecraft' ),
		),
		'climatecraft-heroes'     => array(
			'label'       => __( 'ClimateCraft: Heroes & Dispatch Banners', 'climatecraft' ),
			'description' => __( 'High-trust HVAC hero sections and 24/7 no-cool/no-heat dispatch callouts.', 'climatecraft' ),
		),
		'climatecraft-services'   => array(
			'label'       => __( 'ClimateCraft: Heating, Cooling & IAQ Systems', 'climatecraft' ),
			'description' => __( 'HVAC service grids, NATE technician profiles, and before/after system retrofits.', 'climatecraft' ),
		),
		'climatecraft-conversion' => array(
			'label'       => __( 'ClimateCraft: Rebates, Comfort Plans & Booking', 'climatecraft' ),
			'description' => __( 'Seasonal rebates, SEER2 comparisons, maintenance memberships, FAQs, and dispatch CTAs.', 'climatecraft' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'climatecraft_register_pattern_categories', 9 );

/**
 * Registers custom block style variations used across HVAC patterns.
 *
 * @return void
 */
function climatecraft_register_block_styles(): void {
	register_block_style(
		'core/group',
		array(
			'name'  => 'climatecraft-card',
			'label' => __( 'HVAC System Card', 'climatecraft' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'climatecraft-card-interactive',
			'label' => __( 'Interactive Lift Card', 'climatecraft' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'climatecraft-coupon',
			'label' => __( 'Seasonal Rebate Card', 'climatecraft' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'climatecraft-checks',
			'label' => __( 'NATE Certified Checkmarks', 'climatecraft' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'climatecraft-soft',
			'label' => __( 'Soft Thermal Pill', 'climatecraft' ),
		)
	);

	register_block_style(
		'core/details',
		array(
			'name'  => 'climatecraft-faq',
			'label' => __( 'HVAC FAQ Card', 'climatecraft' ),
		)
	);
}
add_action( 'init', 'climatecraft_register_block_styles' );

/**
 * Displays a "Comments are closed." notice when a post has existing comments
 * and comments are subsequently closed (Theme Unit Test 7.16).
 *
 * @return void
 */
function climatecraft_comments_closed_notice(): void {
	if ( get_comments_number() > 0 ) {
		echo '<p class="no-comments has-slate-muted-color has-text-color has-small-font-size">' . esc_html__( 'Comments are closed.', 'climatecraft' ) . '</p>';
	}
}
add_action( 'comment_form_comments_closed', 'climatecraft_comments_closed_notice' );

/**
 * Ensures classic multi-page posts using <!--nextpage--> render pagination links
 * cleanly inside the Block Theme post-content block (Theme Unit Test 7.1).
 *
 * @param string $block_content The block content.
 * @return string
 */
function climatecraft_classic_multipage_links( string $block_content ): string {
	if ( ! is_singular() || str_contains( $block_content, 'page-links' ) || str_contains( $block_content, 'post-nav-links' ) ) {
		return $block_content;
	}

	$pagination = wp_link_pages(
		array(
			'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Content pages', 'climatecraft' ) . '"><span class="page-links-title">' . esc_html__( 'Pages:', 'climatecraft' ) . '</span>',
			'after'  => '</nav>',
			'echo'   => false,
		)
	);

	return $block_content . $pagination;
}
add_filter( 'render_block_core/post-content', 'climatecraft_classic_multipage_links' );

/**
 * Extracts the normalized navigation route slug for built-in default pages.
 *
 * @return string
 */
function climatecraft_get_requested_nav_slug(): string {
	global $wp;

	$raw_path = isset( $wp->request ) ? (string) $wp->request : '';
	if ( '' === $raw_path && isset( $_SERVER['REQUEST_URI'] ) ) {
		$parsed_path = wp_parse_url( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ), PHP_URL_PATH );
		$raw_path    = is_string( $parsed_path ) ? $parsed_path : '';
	}

	return sanitize_title( basename( trim( $raw_path, '/' ) ) );
}

/**
 * Resolves default header/footer navigation routes (/services/, /heat-pumps/, /contact/, /emergency-hvac/)
 * to their built-in block templates on fresh installs where those pages have not been created yet.
 *
 * @param array<int, string> $templates Candidate template filenames.
 * @return array<int, string>
 */
function climatecraft_default_nav_templates( array $templates ): array {
	$request_slug = climatecraft_get_requested_nav_slug();
	$route_map    = array(
		'services'       => 'page-services.html',
		'heat-pumps'     => 'page-heat-pumps.html',
		'contact'        => 'page-contact.html',
		'emergency-hvac' => 'page-emergency.html',
	);

	if ( isset( $route_map[ $request_slug ] ) ) {
		status_header( 200 );
		array_unshift( $templates, $route_map[ $request_slug ] );
	}

	return $templates;
}
add_filter( '404_template_hierarchy', 'climatecraft_default_nav_templates' );

/**
 * Sets clean document titles for the built-in default navigation routes on fresh installs.
 *
 * @param array<string, string> $title_parts Document title parts.
 * @return array<string, string>
 */
function climatecraft_default_nav_titles( array $title_parts ): array {
	if ( ! is_404() ) {
		return $title_parts;
	}

	$request_slug = climatecraft_get_requested_nav_slug();
	$title_map    = array(
		'services'       => __( 'Heating, Cooling & IAQ Services', 'climatecraft' ),
		'heat-pumps'     => __( 'Heat Pumps, AC & SEER2 Systems', 'climatecraft' ),
		'contact'        => __( 'Contact & 24/7 HVAC Dispatch', 'climatecraft' ),
		'emergency-hvac' => __( '24/7 Emergency Heating & Cooling', 'climatecraft' ),
	);

	if ( isset( $title_map[ $request_slug ] ) ) {
		$title_parts['title'] = $title_map[ $request_slug ];
	}

	return $title_parts;
}
add_filter( 'document_title_parts', 'climatecraft_default_nav_titles' );
