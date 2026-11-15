<?php
/**
 * Title: Interactive Before & After Smile Cases
 * Slug: carehaven/smile-before-after
 * Categories: carehaven-clinical
 * Viewport Width: 1400
 * Description: Touch, mouse, and keyboard accessible before-and-after clinical case showcase with treatment parameters.
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
		<!-- wp:paragraph {"className":"carehaven-eyebrow"} -->
		<p class="carehaven-eyebrow"><?php esc_html_e( 'Sample Case Comparisons', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.75rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:0.75rem"><?php esc_html_e( 'Natural proportions—never artificial "chiclet" teeth.', 'carehaven' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"slate-muted"} -->
		<p class="has-slate-muted-color has-text-color"><?php esc_html_e( 'Drag or use arrow keys on each sample case below to compare pre-treatment condition and conservative restoration.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.75rem","left":"1.5rem","right":"1.5rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.75rem;padding-left:1.5rem">
				<!-- wp:html -->
				<div class="carehaven-ba" role="group" aria-label="<?php esc_attr_e( 'Case 1: Porcelain Veneers and Diastema Closure Comparison', 'carehaven' ); ?>">
					<div class="carehaven-ba__layer carehaven-ba__after"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-1-after.svg' ); ?>" alt="<?php esc_attr_e( 'After minimal-prep porcelain veneers', 'carehaven' ); ?>" /></div>
					<div class="carehaven-ba__layer carehaven-ba__before"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-1-before.svg' ); ?>" alt="<?php esc_attr_e( 'Before minimal-prep porcelain veneers', 'carehaven' ); ?>" /></div>
					<span class="carehaven-ba__badge carehaven-ba__badge--before"><?php esc_html_e( 'Before', 'carehaven' ); ?></span>
					<span class="carehaven-ba__badge carehaven-ba__badge--after"><?php esc_html_e( 'After', 'carehaven' ); ?></span>
					<div class="carehaven-ba__divider"><span class="carehaven-ba__handle" aria-hidden="true">↔</span></div>
					<input type="range" class="carehaven-ba__range" min="0" max="100" value="50" aria-label="<?php esc_attr_e( 'Slide to compare Case 1 before and after', 'carehaven' ); ?>" />
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.2rem","bottom":"0.35rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.2rem;margin-bottom:0.35rem"><?php esc_html_e( 'Minimal-Prep Porcelain Veneers (6 Units)', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Timeline:', 'carehaven' ); ?></strong> <?php esc_html_e( '2 Visits (3 Weeks)', 'carehaven' ); ?> • <strong><?php esc_html_e( 'Clinician:', 'carehaven' ); ?></strong> <?php esc_html_e( 'Dr. Jane Doe, DDS • Closed midline diastema and repaired worn incisal edges while preserving healthy enamel.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.75rem","left":"1.5rem","right":"1.5rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.75rem;padding-left:1.5rem">
				<!-- wp:html -->
				<div class="carehaven-ba" role="group" aria-label="<?php esc_attr_e( 'Case 2: Clear Aligner Alignment and Clinical Whitening Comparison', 'carehaven' ); ?>">
					<div class="carehaven-ba__layer carehaven-ba__after"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-2-after.svg' ); ?>" alt="<?php esc_attr_e( 'After clear aligner therapy and whitening', 'carehaven' ); ?>" /></div>
					<div class="carehaven-ba__layer carehaven-ba__before"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-2-before.svg' ); ?>" alt="<?php esc_attr_e( 'Before clear aligner therapy and whitening', 'carehaven' ); ?>" /></div>
					<span class="carehaven-ba__badge carehaven-ba__badge--before"><?php esc_html_e( 'Before', 'carehaven' ); ?></span>
					<span class="carehaven-ba__badge carehaven-ba__badge--after"><?php esc_html_e( 'After', 'carehaven' ); ?></span>
					<div class="carehaven-ba__divider"><span class="carehaven-ba__handle" aria-hidden="true">↔</span></div>
					<input type="range" class="carehaven-ba__range" min="0" max="100" value="50" aria-label="<?php esc_attr_e( 'Slide to compare Case 2 before and after', 'carehaven' ); ?>" />
				</div>
				<!-- /wp:html -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.2rem","bottom":"0.35rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.2rem;margin-bottom:0.35rem"><?php esc_html_e( 'Clear Aligner Arch Therapy + Edge Bonding', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Timeline:', 'carehaven' ); ?></strong> <?php esc_html_e( '6 Months', 'carehaven' ); ?> • <strong><?php esc_html_e( 'Clinician:', 'carehaven' ); ?></strong> <?php esc_html_e( 'Dr. Alex Rivera, DDS • Corrected adult crowding after childhood braces relapse, finished with conservative whitening.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
