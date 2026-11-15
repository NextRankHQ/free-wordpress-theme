<?php
/**
 * Title: 3-Mode Home Climate Architecture Bar (Cooling, Heating & IAQ)
 * Slug: climatecraft/trust-credentials-bar
 * Categories: climatecraft-heroes
 * Viewport Width: 1400
 * Description: Three-column architectural climate mode strip highlighting Summer Inverter Cooling, Sub-Zero Winter Heating, and Hospital-Grade Indoor Air Quality.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--60);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-climatecraft-card","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-surface-background-color has-background" style="padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem">
				<!-- wp:paragraph {"textColor":"copper-dark","fontSize":"xs"} -->
				<p class="has-copper-dark-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '❄ SUMMER COOLING ARCHITECTURE', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.45rem"}},"typography":{"fontSize":"1.2rem"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.35rem;margin-bottom:0.45rem;font-size:1.2rem"><?php esc_html_e( 'Variable-Speed SEER2 Cooling', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Modulating inverter compressors run at 25%–100% capacity to remove 3x more humidity at a whisper-quiet 54 dB.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-climatecraft-card","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-surface-background-color has-background" style="padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem">
				<!-- wp:paragraph {"textColor":"brass","fontSize":"xs"} -->
				<p class="has-brass-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '🔥 SUB-ZERO HEATING & DUAL-FUEL', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.45rem"}},"typography":{"fontSize":"1.2rem"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.35rem;margin-bottom:0.45rem;font-size:1.2rem"><?php esc_html_e( '98% AFUE & Hyper-Heat Systems', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Cold-climate heat pumps rated down to -13°F paired with sealed-combustion modulating gas furnaces.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-climatecraft-card","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-surface-background-color has-background" style="padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem">
				<!-- wp:paragraph {"textColor":"copper-dark","fontSize":"xs"} -->
				<p class="has-copper-dark-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '🍃 HOSPITAL-GRADE INDOOR AIR', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.45rem"}},"typography":{"fontSize":"1.2rem"}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.35rem;margin-bottom:0.45rem;font-size:1.2rem"><?php esc_html_e( 'MERV 16 HEPA, UV-C & ERV Air', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Whole-home filtration, germicidal coil sanitization, and balanced fresh-air ventilation for allergy-free living.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
