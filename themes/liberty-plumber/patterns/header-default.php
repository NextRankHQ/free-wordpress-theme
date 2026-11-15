<?php
/**
 * Title: Plumbing Header with Dispatch Bar
 * Slug: liberty-plumber/header-default
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.55rem","bottom":"0.55rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"ivory","className":"libertyplumber-emergency-strip","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull libertyplumber-emergency-strip has-ivory-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.55rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:0.55rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-xs-font-size">
		<!-- wp:paragraph -->
		<p><?php esc_html_e( '123 Street Name, Suite 100, City, State 00000 • License #000000', 'liberty-plumber' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Mon – Sat: 7:00 AM – 8:00 PM', 'liberty-plumber' ); ?> &nbsp;|&nbsp; <strong><?php esc_html_e( '24/7 Dispatch: (000) 000-0000', 'liberty-plumber' ); ?></strong></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.95rem","bottom":"0.95rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","className":"libertyplumber-nav-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull libertyplumber-nav-bar has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.95rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:0.95rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.65rem"}},"className":"libertyplumber-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group libertyplumber-brand">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Home', 'navigation link', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Services', 'navigation link', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Water Heaters', 'navigation link', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/water-heaters/' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Specials', 'navigation link', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/#specials' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Contact', 'navigation link', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>"} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"copper","textColor":"surface","style":{"spacing":{"padding":{"top":"0.68rem","bottom":"0.68rem","left":"1.25rem","right":"1.25rem"}}},"fontSize":"xs"} -->
			<div class="wp-block-button has-custom-font-size has-xs-font-size"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="padding-top:0.68rem;padding-right:1.25rem;padding-bottom:0.68rem;padding-left:1.25rem"><?php esc_html_e( 'Schedule Service', 'liberty-plumber' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
