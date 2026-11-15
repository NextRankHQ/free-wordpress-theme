<?php
/**
 * Title: Meet Our Lead Plumbing Technicians
 * Slug: liberty-plumber/technician-profiles
 * Categories: liberty-plumber-services
 * Viewport Width: 1400
 * Description: Three licensed plumber bio cards with placeholder names, certifications, and specialties.
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"libertyplumber-eyebrow"} -->
			<p class="libertyplumber-eyebrow"><?php esc_html_e( 'Field Leadership', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0.85rem"><?php esc_html_e( 'Licensed technicians who respect your home and schedule.', 'liberty-plumber' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Meet Our Full Team', 'liberty-plumber' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.75rem","left":"1.4rem","right":"1.4rem"}}},"className":"is-style-libertyplumber-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card" style="padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.75rem;padding-left:1.4rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tech-1.svg' ); ?>" alt="<?php esc_attr_e( 'Alex Morgan, Master Plumber', 'liberty-plumber' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.25rem"><?php esc_html_e( 'Alex Morgan', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Master Plumber (License #000000) • Whole-Home Repipe Lead', 'liberty-plumber' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Specializes in Type-L copper and PEX-A manifold repiping, water pressure regulation, and complex slab leak reroutes.', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.75rem","left":"1.4rem","right":"1.4rem"}}},"className":"is-style-libertyplumber-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card" style="padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.75rem;padding-left:1.4rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tech-2.svg' ); ?>" alt="<?php esc_attr_e( 'Jordan Taylor, Hydronic & Tankless Specialist', 'liberty-plumber' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.25rem"><?php esc_html_e( 'Jordan Taylor', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Journeyman Plumber • Tankless & Gas Line Specialist', 'liberty-plumber' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Focuses on high-efficiency condensing tankless water heaters, dedicated recirculation loops, and code-compliant gas piping.', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.75rem","left":"1.4rem","right":"1.4rem"}}},"className":"is-style-libertyplumber-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card" style="padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.75rem;padding-left:1.4rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tech-3.svg' ); ?>" alt="<?php esc_attr_e( 'Sam Rivera, Drain & Sewer Specialist', 'liberty-plumber' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.25rem"><?php esc_html_e( 'Sam Rivera', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Drain & Sewer Lead • Hydro-Jetting & Camera Diagnostics', 'liberty-plumber' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Leads fiber-optic sewer camera inspections, 4,000 PSI hydro-jetting, trenchless spot repairs, and backflow prevention testing.', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
