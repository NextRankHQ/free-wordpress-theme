<?php
/**
 * Title: Meet Our Doctors
 * Slug: carehaven/doctor-profiles
 * Categories: carehaven-clinical
 * Viewport Width: 1400
 * Description: Three clinical provider bio cards with placeholder names, education, and focus areas.
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
			<!-- wp:paragraph {"className":"carehaven-eyebrow"} -->
			<p class="carehaven-eyebrow"><?php esc_html_e( 'Clinical Team', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0.85rem"><?php esc_html_e( 'Doctors who listen first—and never rush an exam.', 'carehaven' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Read Full Doctor Bios', 'carehaven' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.75rem","left":"1.4rem","right":"1.4rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.75rem;padding-left:1.4rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/doctor-1.svg' ); ?>" alt="<?php esc_attr_e( 'Dr. Jane Doe, DDS', 'carehaven' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.25rem"><?php esc_html_e( 'Dr. Jane Doe, DDS', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Sample University Dental School • General & Restorative Care', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Dedicated to conservative tooth-preserving restorations, natural porcelain aesthetics, and helping anxious patients feel genuinely at ease.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.75rem","left":"1.4rem","right":"1.4rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.75rem;padding-left:1.4rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/doctor-2.svg' ); ?>" alt="<?php esc_attr_e( 'Dr. John Smith, DMD', 'carehaven' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.25rem"><?php esc_html_e( 'Dr. John Smith, DMD', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Sample Dental Institute • Implant & Surgical Dentistry', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Focuses on computer-guided 3D dental implants, gentle extractions, bone preservation, and comprehensive bite rehabilitation.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.75rem","left":"1.4rem","right":"1.4rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.75rem;padding-left:1.4rem">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/doctor-3.svg' ); ?>" alt="<?php esc_attr_e( 'Dr. Alex Rivera, DDS', 'carehaven' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.15rem","bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.15rem;margin-bottom:0.25rem"><?php esc_html_e( 'Dr. Alex Rivera, DDS', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'Sample College of Dentistry • Family & Clear Aligner Care', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Focused on welcoming pediatric checkups, preventive family dentistry, and custom digital clear aligner therapy.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
