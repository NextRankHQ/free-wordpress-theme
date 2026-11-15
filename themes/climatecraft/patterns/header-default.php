<?php
/**
 * Title: Modern Architectural HVAC Header with Flat Indicator Menu & Dual CTAs
 * Slug: climatecraft/header-default
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"surface","className":"climatecraft-emergency-strip","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull climatecraft-emergency-strip has-surface-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.5rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:0.5rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide has-xs-font-size">
		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( '★ $2,000 FEDERAL 25C HEAT PUMP TAX CREDIT', 'climatecraft' ); ?></strong> &nbsp;•&nbsp; <?php esc_html_e( 'NATE & EPA 608 Certified  •  License #TACLA00000', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Mon – Sat: 7:00 AM – 8:00 PM', 'climatecraft' ); ?> &nbsp;|&nbsp; <strong><?php esc_html_e( '24/7 Emergency HVAC: (000) 000-0000', 'climatecraft' ); ?></strong></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1.05rem","bottom":"1.05rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","textColor":"ink","className":"climatecraft-nav-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull climatecraft-nav-bar has-ink-color has-surface-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:1.05rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:1.05rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.7rem"}},"className":"climatecraft-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group climatecraft-brand">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Home', 'navigation link', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Services', 'navigation link', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Heat Pumps & AC', 'navigation link', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Rebates', 'navigation link', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/#specials' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Contact', 'navigation link', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>"} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.65rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"brass","textColor":"surface","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"1.3rem","right":"1.3rem"}}},"fontSize":"xs"} -->
			<div class="wp-block-button has-custom-font-size has-xs-font-size"><a class="wp-block-button__link has-surface-color has-brass-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-radius:10px;padding-top:0.7rem;padding-right:1.3rem;padding-bottom:0.7rem;padding-left:1.3rem"><?php esc_html_e( 'Book $69 Tune-Up →', 'climatecraft' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
