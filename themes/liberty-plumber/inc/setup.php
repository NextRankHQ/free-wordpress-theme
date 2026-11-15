<?php
/**
 * Theme Setup, Block Pattern Categories, and Custom Block Styles.
 *
 * @package LibertyPlumber
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
function libertyplumber_setup(): void {
	load_theme_textdomain( 'liberty-plumber', LIBERTYPLUMBER_DIR . '/languages' );

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
add_action( 'after_setup_theme', 'libertyplumber_setup' );

/**
 * Registers custom block pattern categories for plumbing contractors.
 *
 * @return void
 */
function libertyplumber_register_pattern_categories(): void {
	$categories = array(
		'liberty-plumber-pages'      => array(
			'label'       => __( 'Liberty Plumber: Full Page Layouts', 'liberty-plumber' ),
			'description' => __( 'Complete 1-click plumbing contractor page layouts ready to customize.', 'liberty-plumber' ),
		),
		'liberty-plumber-heroes'     => array(
			'label'       => __( 'Liberty Plumber: Heroes & Dispatch Banners', 'liberty-plumber' ),
			'description' => __( 'High-trust plumbing hero sections and 24/7 emergency dispatch callouts.', 'liberty-plumber' ),
		),
		'liberty-plumber-services'   => array(
			'label'       => __( 'Liberty Plumber: Services, Techs & Projects', 'liberty-plumber' ),
			'description' => __( 'Plumbing service grids, technician profiles, and before/after repipe comparisons.', 'liberty-plumber' ),
		),
		'liberty-plumber-conversion' => array(
			'label'       => __( 'Liberty Plumber: Coupons, Membership & Booking', 'liberty-plumber' ),
			'description' => __( 'Service specials, water heater comparisons, membership plans, FAQs, and dispatch CTAs.', 'liberty-plumber' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'libertyplumber_register_pattern_categories', 9 );

/**
 * Registers custom block style variations used across plumbing patterns.
 *
 * @return void
 */
function libertyplumber_register_block_styles(): void {
	register_block_style(
		'core/group',
		array(
			'name'  => 'libertyplumber-card',
			'label' => __( 'Service Card', 'liberty-plumber' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'libertyplumber-card-interactive',
			'label' => __( 'Interactive Lift Card', 'liberty-plumber' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'libertyplumber-coupon',
			'label' => __( 'Dashed Coupon Card', 'liberty-plumber' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'libertyplumber-checks',
			'label' => __( 'Plumbing Checkmarks', 'liberty-plumber' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'libertyplumber-soft',
			'label' => __( 'Soft Copper Pill', 'liberty-plumber' ),
		)
	);

	register_block_style(
		'core/details',
		array(
			'name'  => 'libertyplumber-faq',
			'label' => __( 'Plumbing FAQ Card', 'liberty-plumber' ),
		)
	);
}
add_action( 'init', 'libertyplumber_register_block_styles' );

/**
 * Displays a "Comments are closed." notice when a post has existing comments
 * and comments are subsequently closed (Theme Unit Test 7.16).
 *
 * @return void
 */
function libertyplumber_comments_closed_notice(): void {
	if ( get_comments_number() > 0 ) {
		echo '<p class="no-comments has-slate-muted-color has-text-color has-small-font-size">' . esc_html__( 'Comments are closed.', 'liberty-plumber' ) . '</p>';
	}
}
add_action( 'comment_form_comments_closed', 'libertyplumber_comments_closed_notice' );

/**
 * Ensures classic multi-page posts using <!--nextpage--> render pagination links
 * cleanly inside the Block Theme post-content block (Theme Unit Test 7.1).
 *
 * @param string $block_content The block content.
 * @return string
 */
function libertyplumber_classic_multipage_links( string $block_content ): string {
	if ( ! is_singular() || str_contains( $block_content, 'page-links' ) || str_contains( $block_content, 'post-nav-links' ) ) {
		return $block_content;
	}

	$pagination = wp_link_pages(
		array(
			'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Content pages', 'liberty-plumber' ) . '"><span class="page-links-title">' . esc_html__( 'Pages:', 'liberty-plumber' ) . '</span>',
			'after'  => '</nav>',
			'echo'   => false,
		)
	);

	return $block_content . $pagination;
}
add_filter( 'render_block_core/post-content', 'libertyplumber_classic_multipage_links' );

/**
 * Extracts the normalized navigation route slug for built-in default pages.
 *
 * @return string
 */
function libertyplumber_get_requested_nav_slug(): string {
	global $wp;

	$raw_path = isset( $wp->request ) ? (string) $wp->request : '';
	if ( '' === $raw_path && isset( $_SERVER['REQUEST_URI'] ) ) {
		$parsed_path = wp_parse_url( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ), PHP_URL_PATH );
		$raw_path    = is_string( $parsed_path ) ? $parsed_path : '';
	}

	return sanitize_title( basename( trim( $raw_path, '/' ) ) );
}

/**
 * Resolves default header/footer navigation routes (/services/, /water-heaters/, /contact/, /emergency-plumbing/)
 * to their built-in block templates on fresh installs where those pages have not been created yet.
 *
 * @param array<int, string> $templates Candidate template filenames.
 * @return array<int, string>
 */
function libertyplumber_default_nav_templates( array $templates ): array {
	$request_slug = libertyplumber_get_requested_nav_slug();
	$route_map    = array(
		'services'           => 'page-services.html',
		'water-heaters'      => 'page-water-heaters.html',
		'contact'            => 'page-contact.html',
		'emergency-plumbing' => 'page-emergency.html',
	);

	if ( isset( $route_map[ $request_slug ] ) ) {
		status_header( 200 );
		array_unshift( $templates, $route_map[ $request_slug ] );
	}

	return $templates;
}
add_filter( '404_template_hierarchy', 'libertyplumber_default_nav_templates' );

/**
 * Sets clean document titles for the built-in default navigation routes on fresh installs.
 *
 * @param array<string, string> $title_parts Document title parts.
 * @return array<string, string>
 */
function libertyplumber_default_nav_titles( array $title_parts ): array {
	if ( ! is_404() ) {
		return $title_parts;
	}

	$request_slug = libertyplumber_get_requested_nav_slug();
	$title_map    = array(
		'services'           => __( 'Plumbing & Drain Services', 'liberty-plumber' ),
		'water-heaters'      => __( 'Water Heaters & Tankless Systems', 'liberty-plumber' ),
		'contact'            => __( 'Contact & 24/7 Dispatch', 'liberty-plumber' ),
		'emergency-plumbing' => __( '24/7 Emergency Plumbing', 'liberty-plumber' ),
	);

	if ( isset( $title_map[ $request_slug ] ) ) {
		$title_parts['title'] = $title_map[ $request_slug ];
	}

	return $title_parts;
}
add_filter( 'document_title_parts', 'libertyplumber_default_nav_titles' );
