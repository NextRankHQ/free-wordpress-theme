<?php
/**
 * Title: Plumbing & Pricing FAQ Accordion
 * Slug: climatecraft/faq-accordion
 * Categories: climatecraft-conversion
 * Viewport Width: 1400
 * Description: Native WordPress core/details accessible FAQ accordion covering upfront pricing, emergency shutoffs, permits, and payment options.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"820px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","className":"climatecraft-eyebrow"} -->
		<p class="has-text-align-center climatecraft-eyebrow"><?php esc_html_e( 'Common Homeowner Questions', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0.85rem","bottom":"2.25rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0.85rem;margin-bottom:2.25rem"><?php esc_html_e( 'Straightforward answers before our truck arrives.', 'climatecraft' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:details {"showContent":true,"className":"is-style-climatecraft-faq"} -->
		<details class="wp-block-details is-style-climatecraft-faq" open><summary><?php esc_html_e( 'Do you charge by the hour or provide upfront flat-rate pricing?', 'climatecraft' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'We provide upfront, written flat-rate pricing before any work begins. After inspecting your plumbing issue, your technician will walk you through clear repair options so you know the exact total cost up front—never an open-ended hourly clock.', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"className":"is-style-climatecraft-faq"} -->
		<details class="wp-block-details is-style-climatecraft-faq"><summary><?php esc_html_e( 'What should I do first if a pipe bursts or my water heater starts leaking?', 'climatecraft' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'First, turn off your home’s main water shutoff valve (usually located near the front foundation, basement perimeter, or garage utility wall). For a leaking water heater, close the cold-water inlet valve on top of the unit and call (000) 000-0000 for priority dispatch.', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"className":"is-style-climatecraft-faq"} -->
		<details class="wp-block-details is-style-climatecraft-faq"><summary><?php esc_html_e( 'Do you pull municipal permits for water heater replacements and repiping?', 'climatecraft' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Yes. Our office coordinates required municipal building and plumbing permits, thermal expansion tanks, seismic strapping, and city code inspections for water heaters, gas lines, sewer replacements, and whole-home repiping.', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"className":"is-style-climatecraft-faq"} -->
		<details class="wp-block-details is-style-climatecraft-faq"><summary><?php esc_html_e( 'Do you offer monthly payment options for larger plumbing projects?', 'climatecraft' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Yes. We accept all major credit and debit cards and can walk you through flexible monthly payment plans for tankless water heater conversions, trenchless sewer repairs, and whole-house copper or PEX repiping.', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
