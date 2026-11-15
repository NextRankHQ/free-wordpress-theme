<?php
/**
 * Title: Heating & Cooling Services & Repipe Showcase Page Layout
 * Slug: climatecraft/page-services
 * Categories: climatecraft-pages
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport Width: 1400
 * Description: Complete interior services directory page with hero banner, service cards, interactive before/after repipe & tankless project comparisons, water heater guide, coupons, and booking CTA.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"backgroundColor":"navy","textColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-color has-navy-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--70);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"3rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">
			<!-- wp:paragraph {"className":"climatecraft-eyebrow"} -->
			<p class="climatecraft-eyebrow"><?php esc_html_e( 'Residential & Commercial HVAC Directory', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"1rem"}}},"textColor":"surface"} -->
			<h1 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0.85rem;margin-bottom:1rem"><?php esc_html_e( 'Complete Heating, Cooling, Heat Pump & IAQ Services', 'climatecraft' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}},"fontSize":"large"} -->
			<p class="has-text-color has-large-font-size" style="color:#CBD5E1"><?php esc_html_e( 'Every heating and cooling call includes 21-point digital diagnostics, ACCA Manual J sizing on replacements, upfront flat-rate pricing, and a 10-year parts and labor guarantee.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.5rem">
				<!-- wp:button {"backgroundColor":"copper","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a Service Visit', 'climatecraft' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"copper-dark","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-dark-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Call (000) 000-0000', 'climatecraft' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hvac-fleet.svg' ); ?>" alt="<?php esc_attr_e( 'Fully stocked commercial HVAC service van and ductwork equipment', 'climatecraft' ); ?>" style="border-radius:20px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"climatecraft/trust-credentials-bar"} /-->
<!-- wp:pattern {"slug":"climatecraft/services-grid"} /-->
<!-- wp:pattern {"slug":"climatecraft/system-before-after"} /-->
<!-- wp:pattern {"slug":"climatecraft/seer-efficiency-comparison"} /-->
<!-- wp:pattern {"slug":"climatecraft/dispatch-process"} /-->
<!-- wp:pattern {"slug":"climatecraft/coupons-specials"} /-->
<!-- wp:pattern {"slug":"climatecraft/faq-accordion"} /-->
<!-- wp:pattern {"slug":"climatecraft/emergency-cta-banner"} /-->
