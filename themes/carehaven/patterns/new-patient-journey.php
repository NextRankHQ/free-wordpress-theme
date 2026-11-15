<?php
/**
 * Title: New Patient 4-Step Visit Experience
 * Slug: carehaven/new-patient-journey
 * Categories: carehaven-clinical
 * Viewport Width: 1400
 * Description: Reassuring 4-step walkthrough designed to reduce dental anxiety for US first-time patients.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"className":"carehaven-eyebrow"} -->
		<p class="carehaven-eyebrow"><?php esc_html_e( 'Your First 60-Minute Visit', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.75rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:0.75rem"><?php esc_html_e( 'Zero lectures. Zero surprises. Just clear answers.', 'carehaven' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"slate-muted"} -->
		<p class="has-slate-muted-color has-text-color"><?php esc_html_e( 'Many patients put off dental visits due to stress or past experiences. Here is a clear walkthrough of how a typical first appointment unfolds.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"16px"}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-ivory-background-color has-background" style="border-radius:16px;padding-top:1.6rem;padding-right:1.5rem;padding-bottom:1.6rem;padding-left:1.5rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'STEP 01', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.45rem","bottom":"0.5rem"}},"typography":{"fontFamily":"var:preset|font-family|sans","fontSize":"1.125rem","fontWeight":"600","fontStyle":"normal"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.45rem;margin-bottom:0.5rem;font-family:var(--wp--preset--font-family--sans);font-size:1.125rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Paperless Check-In', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Complete secure intake forms on your phone in 4 minutes—no clipboard waiting room marathons.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"16px"}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-ivory-background-color has-background" style="border-radius:16px;padding-top:1.6rem;padding-right:1.5rem;padding-bottom:1.6rem;padding-left:1.5rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'STEP 02', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.45rem","bottom":"0.5rem"}},"typography":{"fontFamily":"var:preset|font-family|sans","fontSize":"1.125rem","fontWeight":"600","fontStyle":"normal"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.45rem;margin-bottom:0.5rem;font-family:var(--wp--preset--font-family--sans);font-size:1.125rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Comfort Menu & 3D Scan', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Choose a warm blanket or noise-canceling headphones while we capture HD photos and low-dose digital imaging.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"16px"}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-ivory-background-color has-background" style="border-radius:16px;padding-top:1.6rem;padding-right:1.5rem;padding-bottom:1.6rem;padding-left:1.5rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'STEP 03', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.45rem","bottom":"0.5rem"}},"typography":{"fontFamily":"var:preset|font-family|sans","fontSize":"1.125rem","fontWeight":"600","fontStyle":"normal"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.45rem;margin-bottom:0.5rem;font-family:var(--wp--preset--font-family--sans);font-size:1.125rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Side-by-Side Review', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Your doctor walks you through every image on screen in plain English—distinguishing urgent needs from watch-and-wait items.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"16px"}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-ivory-background-color has-background" style="border-radius:16px;padding-top:1.6rem;padding-right:1.5rem;padding-bottom:1.6rem;padding-left:1.5rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'STEP 04', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.45rem","bottom":"0.5rem"}},"typography":{"fontFamily":"var:preset|font-family|sans","fontSize":"1.125rem","fontWeight":"600","fontStyle":"normal"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.45rem;margin-bottom:0.5rem;font-family:var(--wp--preset--font-family--sans);font-size:1.125rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Written PPO Estimate', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Before scheduling any treatment, our coordinator hands you an exact insurance copay & out-of-pocket breakdown.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
