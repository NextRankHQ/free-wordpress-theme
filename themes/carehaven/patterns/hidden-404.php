<?php
/**
 * Title: 404 Not Found Content
 * Slug: carehaven/hidden-404
 * Inserter: no
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:paragraph {"align":"center","className":"carehaven-eyebrow"} -->
<p class="has-text-align-center carehaven-eyebrow"><?php esc_html_e( 'Page Not Found (404)', 'carehaven' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:1rem;margin-bottom:1rem"><?php esc_html_e( 'We couldn’t find that page—but we’re right here to help.', 'carehaven' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"slate-muted"} -->
<p class="has-text-align-center has-slate-muted-color has-text-color"><?php esc_html_e( 'The page you requested may have moved or is no longer available. Use the search bar or return to the homepage below.', 'carehaven' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'carehaven' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search services, articles, or topics…', 'search placeholder', 'carehaven' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'carehaven' ); ?>","style":{"spacing":{"margin":{"top":"1.5rem"}}}} /-->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:2rem">
	<!-- wp:button {"backgroundColor":"sage","textColor":"surface"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-sage-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return to Homepage', 'carehaven' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
