<?php
/**
 * Title: Flagship Dental & Clinic Hero
 * Slug: carehaven/hero-practice
 * Categories: carehaven-heroes, featured
 * Viewport Width: 1400
 * Description: Warm dental and medical clinic hero with appointment call-to-action buttons and studio illustration.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ivory-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--70);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%">
			<!-- wp:paragraph {"className":"carehaven-eyebrow"} -->
			<p class="carehaven-eyebrow"><?php esc_html_e( 'Accepting New Patients • Family & Cosmetic Dentistry', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1.1rem"}}},"fontSize":"display"} -->
			<h1 class="wp-block-heading has-display-font-size" style="margin-top:1rem;margin-bottom:1.1rem"><?php esc_html_e( 'Thoughtful, unhurried dental care built around your comfort.', 'carehaven' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"large"} -->
			<p class="has-slate-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'From gentle preventive cleanings and pediatric visits to clear aligners, implants, and natural porcelain veneers—experience modern clinical precision with honest, written treatment estimates before we ever begin.', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.75rem","bottom":"1.75rem"},"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.75rem;margin-bottom:1.75rem">
				<!-- wp:button {"backgroundColor":"sage","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-sage-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Schedule Your Visit', 'carehaven' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Call (000) 000-0000', 'carehaven' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:list {"className":"is-style-carehaven-checks","fontSize":"small"} -->
			<ul class="wp-block-list is-style-carehaven-checks has-small-font-size"><!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Most major PPO dental plans welcome', 'carehaven' ); ?></strong> — <?php esc_html_e( 'complimentary benefits check before your appointment', 'carehaven' ); ?></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Judgment-free care', 'carehaven' ); ?></strong> — <?php esc_html_e( 'whether it has been 6 months or 10 years since your last visit', 'carehaven' ); ?></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li><strong><?php esc_html_e( 'Same-day emergency slots', 'carehaven' ); ?></strong> — <?php esc_html_e( 'reserved daily for toothaches, broken crowns, and urgent pain', 'carehaven' ); ?></li>
			<!-- /wp:list-item --></ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/clinic-hero.svg' ); ?>" alt="<?php esc_attr_e( 'Sunlit modern dental operatory studio', 'carehaven' ); ?>" style="border-radius:24px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
