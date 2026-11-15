<?php
/**
 * Title: Plumbing Hero with Upfront Pricing & Tankless Illustration
 * Slug: liberty-plumber/hero-dispatch
 * Categories: liberty-plumber-heroes, banner
 * Viewport Width: 1400
 * Description: Split plumbing contractor hero with upfront pricing highlights, dual CTAs, and custom vector utility installation illustration.
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(3rem, 6vw, 5.25rem)","bottom":"clamp(3.5rem, 6vw, 5.5rem)","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ivory-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:clamp(3rem, 6vw, 5.25rem);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:clamp(3.5rem, 6vw, 5.5rem);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"3rem","left":"3.5rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%">
			<!-- wp:paragraph {"className":"libertyplumber-eyebrow"} -->
			<p class="libertyplumber-eyebrow"><?php esc_html_e( 'Licensed & Insured • Residential & Commercial Plumbing', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1.15rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-top:1rem;margin-bottom:1.15rem"><?php esc_html_e( 'Fast, honest plumbing repairs backed by upfront written estimates.', 'liberty-plumber' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"large"} -->
			<p class="has-slate-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'From emergency burst pipes and hydro-jetting drain clearing to condensing tankless water heaters and whole-home copper repiping—our licensed technicians review every option and flat-rate price in writing before work begins.', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.85rem","bottom":"2rem"},"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.85rem;margin-bottom:2rem">
				<!-- wp:button {"backgroundColor":"copper","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Request Service Estimate', 'liberty-plumber' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Call (000) 000-0000', 'liberty-plumber' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:list {"className":"is-style-libertyplumber-checks","fontSize":"small"} -->
			<ul class="wp-block-list is-style-libertyplumber-checks has-small-font-size"><!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Upfront flat-rate pricing', 'liberty-plumber' ); ?></strong> — <?php esc_html_e( 'written estimate approved before any wrench turns', 'liberty-plumber' ); ?></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Fully stocked service trucks', 'liberty-plumber' ); ?></strong> — <?php esc_html_e( 'equipped for single-visit drain, valve, and heater repairs', 'liberty-plumber' ); ?></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Respectful property protection', 'liberty-plumber' ); ?></strong> — <?php esc_html_e( 'shoe covers, drop cloths, and spotless workspace cleanup', 'liberty-plumber' ); ?></li>
			<!-- /wp:list-item --></ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/plumber-hero.svg' ); ?>" alt="<?php esc_attr_e( 'Modern tankless water heater and copper manifold installation', 'liberty-plumber' ); ?>" style="border-radius:24px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
