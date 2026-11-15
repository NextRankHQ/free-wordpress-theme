<?php
/**
 * Title: Interactive Before & After Repipe & Tankless Cases
 * Slug: climatecraft/system-before-after
 * Categories: climatecraft-services
 * Viewport Width: 1400
 * Description: Touch, mouse, and keyboard accessible before-and-after plumbing project comparisons.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ivory-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"className":"climatecraft-eyebrow"} -->
		<p class="climatecraft-eyebrow"><?php esc_html_e( 'Sample Project Comparisons', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.75rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:0.75rem"><?php esc_html_e( 'Clean, labeled manifolds built for decades of service.', 'climatecraft' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"slate-muted"} -->
		<p class="has-slate-muted-color has-text-color"><?php esc_html_e( 'Drag or use arrow keys on each sample project below to compare pre-service pipe corrosion with our finished installation.', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.75rem","left":"1.5rem","right":"1.5rem"}}},"className":"is-style-climatecraft-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.75rem;padding-left:1.5rem">
				<!-- wp:html -->
				<div class="climatecraft-ba" role="group" aria-label="<?php esc_attr_e( 'Project 1: Galvanized to Type-L Copper Manifold Repipe Comparison', 'climatecraft' ); ?>">
					<div class="climatecraft-ba__layer climatecraft-ba__after"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-1-after.svg' ); ?>" alt="<?php esc_attr_e( 'After Type-L copper manifold repipe with quarter-turn ball valves', 'climatecraft' ); ?>" /></div>
					<div class="climatecraft-ba__layer climatecraft-ba__before"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-1-before.svg' ); ?>" alt="<?php esc_attr_e( 'Before repipe showing corroded galvanized supply pipes', 'climatecraft' ); ?>" /></div>
					<span class="climatecraft-ba__badge climatecraft-ba__badge--before"><?php esc_html_e( 'Before', 'climatecraft' ); ?></span>
					<span class="climatecraft-ba__badge climatecraft-ba__badge--after"><?php esc_html_e( 'After', 'climatecraft' ); ?></span>
					<div class="climatecraft-ba__divider"><span class="climatecraft-ba__handle" aria-hidden="true">↔</span></div>
					<input type="range" class="climatecraft-ba__range" min="0" max="100" value="50" aria-label="<?php esc_attr_e( 'Slide to compare Project 1 before and after', 'climatecraft' ); ?>" />
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.2rem","bottom":"0.35rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.2rem;margin-bottom:0.35rem"><?php esc_html_e( 'Whole-Home Type-L Copper Manifold Repipe', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Timeline:', 'climatecraft' ); ?></strong> <?php esc_html_e( '2 Days (Water Restored Nightly)', 'climatecraft' ); ?> • <strong><?php esc_html_e( 'Scope:', 'climatecraft' ); ?></strong> <?php esc_html_e( 'Replaced rust-choked 1960s galvanized lines with Type-L copper headers and brass quarter-turn isolation valves.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.75rem","left":"1.5rem","right":"1.5rem"}}},"className":"is-style-climatecraft-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.75rem;padding-left:1.5rem">
				<!-- wp:html -->
				<div class="climatecraft-ba" role="group" aria-label="<?php esc_attr_e( 'Project 2: Rusted Tank to Condensing Tankless Water Heater Comparison', 'climatecraft' ); ?>">
					<div class="climatecraft-ba__layer climatecraft-ba__after"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-2-after.svg' ); ?>" alt="<?php esc_attr_e( 'After wall-mounted condensing tankless water heater conversion', 'climatecraft' ); ?>" /></div>
					<div class="climatecraft-ba__layer climatecraft-ba__before"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-2-before.svg' ); ?>" alt="<?php esc_attr_e( 'Before conversion showing aging rusted atmospheric tank water heater', 'climatecraft' ); ?>" /></div>
					<span class="climatecraft-ba__badge climatecraft-ba__badge--before"><?php esc_html_e( 'Before', 'climatecraft' ); ?></span>
					<span class="climatecraft-ba__badge climatecraft-ba__badge--after"><?php esc_html_e( 'After', 'climatecraft' ); ?></span>
					<div class="climatecraft-ba__divider"><span class="climatecraft-ba__handle" aria-hidden="true">↔</span></div>
					<input type="range" class="climatecraft-ba__range" min="0" max="100" value="50" aria-label="<?php esc_attr_e( 'Slide to compare Project 2 before and after', 'climatecraft' ); ?>" />
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.2rem","bottom":"0.35rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.2rem;margin-bottom:0.35rem"><?php esc_html_e( 'Condensing 19-SEER2 Inverter Heat Pump Upgrade', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Timeline:', 'climatecraft' ); ?></strong> <?php esc_html_e( '1 Day (Same-Day Turnkey)', 'climatecraft' ); ?> • <strong><?php esc_html_e( 'Scope:', 'climatecraft' ); ?></strong> <?php esc_html_e( 'Hauled away leaking 50-gallon tank and installed a 199,000 BTU wall-hung unit with service flush valves.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
