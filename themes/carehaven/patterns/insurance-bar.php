<?php
/**
 * Title: PPO Insurance & Financing Bar
 * Slug: carehaven/insurance-bar
 * Categories: carehaven-conversion
 * Viewport Width: 1400
 * Description: Dental insurance coverage categories with patient financing and in-house membership callout.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--60);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-text-align-center has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'TRANSPARENT COVERAGE & BILLING', 'carehaven' ); ?></strong> — <?php esc_html_e( 'We assist with PPO insurance claims & offer flexible monthly payment options', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"1.35rem","bottom":"1.25rem"},"blockGap":{"top":"0.85rem","left":"0.85rem"}}}} -->
		<div class="wp-block-columns" style="margin-top:1.35rem;margin-bottom:1.25rem">
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","className":"carehaven-insurance-pill"} --><p class="has-text-align-center carehaven-insurance-pill"><?php esc_html_e( 'Major Employer PPOs', 'carehaven' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","className":"carehaven-insurance-pill"} --><p class="has-text-align-center carehaven-insurance-pill"><?php esc_html_e( 'National Dental PPO', 'carehaven' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","className":"carehaven-insurance-pill"} --><p class="has-text-align-center carehaven-insurance-pill"><?php esc_html_e( 'State & Educator PPO', 'carehaven' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","className":"carehaven-insurance-pill"} --><p class="has-text-align-center carehaven-insurance-pill"><?php esc_html_e( 'Out-of-Network Filing', 'carehaven' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","className":"carehaven-insurance-pill"} --><p class="has-text-align-center carehaven-insurance-pill"><?php esc_html_e( 'HSA & FSA Cards', 'carehaven' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","className":"carehaven-insurance-pill"} --><p class="has-text-align-center carehaven-insurance-pill"><?php esc_html_e( 'Monthly Payment Plans', 'carehaven' ); ?></p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'No dental insurance through work? Explore our', 'carehaven' ); ?> <a href="#"><strong><?php esc_html_e( 'In-House Preventive Membership Plan ($29/mo equivalent)', 'carehaven' ); ?></strong></a> <?php esc_html_e( 'with zero deductibles or waiting periods.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
