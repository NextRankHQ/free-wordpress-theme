<?php
/**
 * Title: Default Clinic Header
 * Slug: carehaven/header-default
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.55rem","bottom":"0.55rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"ivory","className":"carehaven-emergency-strip","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull carehaven-emergency-strip has-ivory-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.55rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:0.55rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"fontSize":"xs"} -->
		<p class="has-xs-font-size"><?php esc_html_e( '123 Street Name, Suite 100, City, State 00000', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|ivory"}}}},"fontSize":"xs"} -->
		<p class="has-link-color has-xs-font-size"><?php esc_html_e( 'Mon – Fri: 9:00 AM – 5:00 PM', 'carehaven' ); ?> &nbsp;|&nbsp; <a href="#"><strong><?php esc_html_e( '(000) 000-0000', 'carehaven' ); ?></strong></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","className":"carehaven-nav-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull carehaven-nav-bar has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.9rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:0.9rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"className":"carehaven-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group carehaven-brand">
			<!-- wp:site-logo {"width":120,"shouldSyncIcon":false} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"mobile","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /-->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.65rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"sage","textColor":"surface"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-sage-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Book Appointment', 'carehaven' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
