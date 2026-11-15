<?php
/**
 * Title: Tank vs. Tankless Water Heater Comparison & Service Fleet
 * Slug: liberty-plumber/water-heater-comparison
 * Categories: liberty-plumber-conversion
 * Viewport Width: 1400
 * Description: Side-by-side comparison table of standard atmospheric tank vs. condensing tankless water heaters paired with a stocked service truck illustration.
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">
			<!-- wp:paragraph {"className":"libertyplumber-eyebrow"} -->
			<p class="libertyplumber-eyebrow"><?php esc_html_e( 'Water Heater Replacement Guide', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.75rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:0.75rem"><?php esc_html_e( 'Standard Tank vs. Condensing Tankless Systems', 'liberty-plumber' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"slate-muted"} -->
			<p class="has-slate-muted-color has-text-color"><?php esc_html_e( 'Compare lifespan, recovery rate, and energy efficiency side by side. Every installation includes code-required expansion tanks, seismic strapping, and haul-away of your old unit.', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:table {"hasFixedLayout":true,"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
			<figure class="wp-block-table" style="margin-top:1.5rem"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Specification', 'liberty-plumber' ); ?></th><th><?php esc_html_e( 'Standard Tank (40–75 Gal)', 'liberty-plumber' ); ?></th><th><?php esc_html_e( 'Condensing Tankless', 'liberty-plumber' ); ?></th></tr></thead><tbody><tr><td><strong><?php esc_html_e( 'Hot Water Supply', 'liberty-plumber' ); ?></strong></td><td><?php esc_html_e( '40–75 Gal Stored', 'liberty-plumber' ); ?></td><td><?php esc_html_e( 'Continuous (Up to 11 GPM)', 'liberty-plumber' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Expected Lifespan', 'liberty-plumber' ); ?></strong></td><td><?php esc_html_e( '8 – 12 Years', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '18 – 22+ Years', 'liberty-plumber' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Energy Factor (UEF)', 'liberty-plumber' ); ?></strong></td><td><?php esc_html_e( '0.64 – 0.70 UEF', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '0.95 – 0.98 UEF', 'liberty-plumber' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Footprint', 'liberty-plumber' ); ?></strong></td><td><?php esc_html_e( 'Floor Closet / Garage', 'liberty-plumber' ); ?></td><td><?php esc_html_e( 'Compact Wall-Mounted', 'liberty-plumber' ); ?></td></tr></tbody></table></figure>
			<!-- /wp:table -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.75rem","left":"1.5rem","right":"1.5rem"}}},"className":"is-style-libertyplumber-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.75rem;padding-left:1.5rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/service-fleet.svg' ); ?>" alt="<?php esc_attr_e( 'Stocked plumbing service truck ready for same-day water heater installation', 'liberty-plumber' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.45rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.45rem"><?php esc_html_e( 'Same-Day Turnkey Replacement', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Our service vehicles stock commercial-grade brass ball valves, thermal expansion tanks, stainless gas flex connectors, and condensate neutralizers for single-day completion.', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
