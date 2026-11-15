<?php
/**
 * Title: Heat Pumps, High-SEER2 AC & Tax Credit Page Layout
 * Slug: climatecraft/page-heat-pumps
 * Categories: climatecraft-pages
 * Keywords: starter, heat-pumps, seer2
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport Width: 1400
 * Description: Dedicated Heat Pumps, High-SEER2 Air Conditioning, and Federal 25C Tax Credit page layout with hero banner, SEER2 comparison table, before/after retrofit slider, rebates, and FAQs.
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
			<p class="climatecraft-eyebrow"><?php esc_html_e( '20+ SEER2 Variable-Speed Systems • Federal 25C Tax Credits', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"1rem"}}},"textColor":"surface"} -->
			<h1 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0.85rem;margin-bottom:1rem"><?php esc_html_e( 'Inverter Heat Pumps, Central AC & High-AFUE Furnaces', 'climatecraft' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}},"fontSize":"large"} -->
			<p class="has-text-color has-large-font-size" style="color:#CBD5E1"><?php esc_html_e( 'Upgrade to whisper-quiet modulating comfort engineered with ACCA Manual J load calculations, static duct pressure balancing, and up to $2,000 in Federal 25C tax credit savings.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.5rem">
				<!-- wp:button {"backgroundColor":"copper","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request Free Manual J Estimate', 'climatecraft' ); ?></a></div>
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
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hvac-hero.svg' ); ?>" alt="<?php esc_attr_e( 'High-efficiency inverter heat pump condenser and digital gauges', 'climatecraft' ); ?>" style="border-radius:20px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"climatecraft/trust-credentials-bar"} /-->
<!-- wp:pattern {"slug":"climatecraft/seer-efficiency-comparison"} /-->
<!-- wp:pattern {"slug":"climatecraft/system-before-after"} /-->
<!-- wp:pattern {"slug":"climatecraft/coupons-specials"} /-->
<!-- wp:pattern {"slug":"climatecraft/membership-plan"} /-->
<!-- wp:pattern {"slug":"climatecraft/faq-accordion"} /-->
<!-- wp:pattern {"slug":"climatecraft/emergency-cta-banner"} /-->
