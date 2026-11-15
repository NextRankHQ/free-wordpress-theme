<?php
/**
 * Theme setup, block pattern categories, and custom block style variations.
 *
 * @package Carehaven
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for WordPress features.
 */
function carehaven_setup(): void {
	load_theme_textdomain( 'carehaven', CAREHAVEN_DIR . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
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

	// Editor stylesheet so Gutenberg / Site Editor matches the frontend 1:1.
	add_editor_style(
		array(
			'assets/css/main.css',
			'assets/css/editor.css',
		)
	);
}
add_action( 'after_setup_theme', 'carehaven_setup' );

/**
 * Registers organized block pattern categories tailored for US dental & medical sites.
 */
function carehaven_register_pattern_categories(): void {
	$categories = array(
		'carehaven-pages'      => array(
			'label'       => __( 'Carehaven: Full Clinic Page Layouts', 'carehaven' ),
			'description' => __( 'Complete 1-click dental and medical page layouts ready to customize.', 'carehaven' ),
		),
		'carehaven-heroes'     => array(
			'label'       => __( 'Carehaven: Clinic Heroes & Banners', 'carehaven' ),
			'description' => __( 'Warm, high-trust hero sections and urgent care callouts.', 'carehaven' ),
		),
		'carehaven-clinical'   => array(
			'label'       => __( 'Carehaven: Dental Services & Doctors', 'carehaven' ),
			'description' => __( 'Treatment grids, doctor DDS/MD profiles, and before/after smile cases.', 'carehaven' ),
		),
		'carehaven-conversion' => array(
			'label'       => __( 'Carehaven: Insurance, Pricing & Booking', 'carehaven' ),
			'description' => __( 'PPO insurance grids, in-house membership plans, patient FAQs, and appointment CTAs.', 'carehaven' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'carehaven_register_pattern_categories', 9 );

/**
 * Registers 1-click Block Style Variations for effortless editing in Gutenberg.
 */
function carehaven_register_block_styles(): void {
	register_block_style(
		'core/group',
		array(
			'name'  => 'carehaven-card',
			'label' => __( 'Clinical Card', 'carehaven' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'carehaven-card-interactive',
			'label' => __( 'Interactive Lift Card', 'carehaven' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'carehaven-checks',
			'label' => __( 'Clinical Checkmarks', 'carehaven' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'carehaven-soft',
			'label' => __( 'Soft Tint Pill', 'carehaven' ),
		)
	);

	register_block_style(
		'core/details',
		array(
			'name'  => 'carehaven-faq',
			'label' => __( 'Clinical FAQ Card', 'carehaven' ),
		)
	);
}
add_action( 'init', 'carehaven_register_block_styles' );

/**
 * Display a notice on single posts when comments are closed but prior comments exist
 * (satisfies Theme Unit Test 7.16 while keeping Pages clean per 8.2).
 */
function carehaven_comments_closed_notice(): void {
	if ( is_single() && ! post_password_required() && get_comments_number() > 0 ) {
		echo '<p class="no-comments has-slate-muted-color has-text-color has-small-font-size">' . esc_html__( 'Comments are closed.', 'carehaven' ) . '</p>';
	}
}
add_action( 'comment_form_comments_closed', 'carehaven_comments_closed_notice' );

/**
 * Append multi-page pagination links for classic <!--nextpage--> posts
 * when core/nextpage block wrapper is absent (Theme Unit Test 7.1).
 *
 * @param string $block_content Rendered core/post-content HTML.
 * @return string
 */
function carehaven_classic_multipage_links( string $block_content ): string {
	global $multipage;

	if ( is_singular() && ! empty( $multipage ) && ! has_block( 'core/nextpage' ) && ! post_password_required() ) {
		$links          = wp_link_pages(
			array(
				'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Content pages', 'carehaven' ) . '"><span>' . esc_html__( 'Pages:', 'carehaven' ) . '</span>',
				'after'  => '</nav>',
				'echo'   => 0,
			)
		);
		$block_content .= $links;
	}

	return $block_content;
}
add_filter( 'render_block_core/post-content', 'carehaven_classic_multipage_links' );
