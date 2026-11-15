<?php
/**
 * Title: 404 Not Found Content
 * Slug: liberty-plumber/hidden-404
 * Inserter: no
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:paragraph {"align":"center","className":"libertyplumber-eyebrow"} -->
<p class="has-text-align-center libertyplumber-eyebrow"><?php esc_html_e( 'Page Not Found (404)', 'liberty-plumber' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:1rem;margin-bottom:1rem"><?php esc_html_e( 'Looks like a clogged link—we could not find that page.', 'liberty-plumber' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"slate-muted"} -->
<p class="has-text-align-center has-slate-muted-color has-text-color"><?php esc_html_e( 'The page you requested may have moved or is no longer available. Use the search bar or return to the homepage below.', 'liberty-plumber' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'liberty-plumber' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search plumbing services, water heaters, or articles…', 'search placeholder', 'liberty-plumber' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'liberty-plumber' ); ?>","style":{"spacing":{"margin":{"top":"1.5rem"}}}} /-->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:2rem">
	<!-- wp:button {"backgroundColor":"copper","textColor":"surface"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return to Homepage', 'liberty-plumber' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
