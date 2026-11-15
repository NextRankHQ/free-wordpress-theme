<?php
/**
 * Title: Patient Testimonials
 * Slug: carehaven/testimonials
 * Categories: carehaven-clinical
 * Viewport Width: 1400
 * Description: Three sample patient testimonial cards with placeholder quotes and attributions.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ivory-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"align":"center","className":"carehaven-eyebrow"} -->
		<p class="has-text-align-center carehaven-eyebrow"><?php esc_html_e( 'Patient Testimonials', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0.85rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0.85rem"><?php esc_html_e( 'What patients appreciate most about their visits.', 'carehaven' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"terracotta","fontSize":"small"} -->
				<p class="has-terracotta-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Sample Quote', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php esc_html_e( '“Replace this placeholder quote with feedback from one of your patients describing a calm, unhurried consultation and clear explanation of treatment options.”', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"xs"} -->
				<p class="has-slate-muted-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Patient Name', 'carehaven' ); ?></strong> • <?php esc_html_e( 'Preventive & Restorative Care', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"terracotta","fontSize":"small"} -->
				<p class="has-terracotta-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Sample Quote', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php esc_html_e( '“Replace this placeholder quote with a patient story highlighting responsive scheduling, gentle emergency care, and helpful front-desk coordination.”', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"xs"} -->
				<p class="has-slate-muted-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Patient Name', 'carehaven' ); ?></strong> • <?php esc_html_e( 'Same-Day Urgent Care', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"terracotta","fontSize":"small"} -->
				<p class="has-terracotta-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Sample Quote', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php esc_html_e( '“Replace this placeholder quote with a testimonial from a local family about transparent pricing, preventive checkups, and welcoming pediatric care.”', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"xs"} -->
				<p class="has-slate-muted-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Patient Name', 'carehaven' ); ?></strong> • <?php esc_html_e( 'Family Dental Care', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
