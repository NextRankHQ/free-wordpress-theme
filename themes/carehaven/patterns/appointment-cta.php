<?php
/**
 * Title: Appointment Scheduling & Clinic Hours Split Section
 * Slug: carehaven/appointment-cta
 * Categories: carehaven-conversion
 * Viewport Width: 1400
 * Description: High-converting clinic location, office hours, and appointment scheduling card built with 100% core blocks.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph {"className":"carehaven-eyebrow"} -->
			<p class="carehaven-eyebrow"><?php esc_html_e( 'Reserve Your Appointment', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.85rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:0.85rem"><?php esc_html_e( 'Ready for a calmer dental experience?', 'carehaven' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"slate-muted"} -->
			<p class="has-slate-muted-color has-text-color"><?php esc_html_e( 'Call our front desk directly or request a visit online. Contact our office during regular hours if you need urgent dental evaluation.', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"1.4rem","right":"1.4rem"},"margin":{"top":"1.5rem"}},"border":{"radius":"16px"}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-ivory-background-color has-background" style="border-radius:16px;margin-top:1.5rem;padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.4rem;padding-left:1.4rem">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><strong><?php esc_html_e( 'Location:', 'carehaven' ); ?></strong> <?php esc_html_e( '123 Street Name, Suite 100, City, State 00000', 'carehaven' ); ?><br><strong><?php esc_html_e( 'Access:', 'carehaven' ); ?></strong> <?php esc_html_e( 'On-site parking & step-free entrance', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:table {"hasFixedLayout":true,"className":"carehaven-hours-block carehaven-hours-block--light"} -->
				<figure class="wp-block-table carehaven-hours-block carehaven-hours-block--light"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Monday – Friday', 'carehaven' ); ?></td><td><?php esc_html_e( '9:00 AM – 5:00 PM', 'carehaven' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'carehaven' ); ?></td><td><?php esc_html_e( 'Closed', 'carehaven' ); ?></td></tr><tr><td><?php esc_html_e( 'Sunday', 'carehaven' ); ?></td><td><?php esc_html_e( 'Closed', 'carehaven' ); ?></td></tr></tbody></table></figure>
				<!-- /wp:table -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.4rem","bottom":"2.4rem","left":"2.1rem","right":"2.1rem"}}},"className":"is-style-carehaven-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card" style="padding-top:2.4rem;padding-right:2.1rem;padding-bottom:2.4rem;padding-left:2.1rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'NEW & ESTABLISHED PATIENTS', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.4rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.4rem;margin-bottom:0.65rem"><?php esc_html_e( 'Book Online or Speak With Our Team', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Have your PPO member card handy if using insurance—our benefits coordinator verifies your exact coverage before your visit so there are never billing surprises.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"is-style-carehaven-checks","fontSize":"small"} -->
				<ul class="wp-block-list is-style-carehaven-checks has-small-font-size"><!-- wp:list-item -->
				<li><strong><?php esc_html_e( '60-Minute Unhurried New Patient Exam', 'carehaven' ); ?></strong></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><strong><?php esc_html_e( 'Paperless Digital Intake Forms Sent by Text', 'carehaven' ); ?></strong></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><strong><?php esc_html_e( 'Same-Day Emergency Triage Available Daily', 'carehaven' ); ?></strong></li>
				<!-- /wp:list-item --></ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.6rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-buttons" style="margin-top:1.6rem">
					<!-- wp:button {"backgroundColor":"sage","textColor":"surface"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-sage-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Schedule Appointment', 'carehaven' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Call (000) 000-0000', 'carehaven' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
