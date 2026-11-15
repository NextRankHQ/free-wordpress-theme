<?php
/**
 * Title: Clinical & Insurance FAQ Accordion
 * Slug: carehaven/faq-clinical
 * Categories: carehaven-conversion
 * Viewport Width: 1400
 * Description: Native WordPress core/details accessible FAQ accordion covering PPO insurance, anxiety, emergencies, and payment options.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"820px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","className":"carehaven-eyebrow"} -->
		<p class="has-text-align-center carehaven-eyebrow"><?php esc_html_e( 'Common Patient Questions', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0.85rem","bottom":"2.25rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0.85rem;margin-bottom:2.25rem"><?php esc_html_e( 'Straightforward answers before you book.', 'carehaven' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:details {"showContent":true,"className":"is-style-carehaven-faq"} -->
		<details class="wp-block-details is-style-carehaven-faq" open><summary><?php esc_html_e( 'Do you accept my PPO dental insurance, and will you verify my coverage ahead of time?', 'carehaven' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Yes. We work with nearly all major employer and national PPO dental carriers. Share your member ID when booking and our benefits coordinator will verify your deductible, preventive coverage, and annual maximum before you arrive.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"className":"is-style-carehaven-faq"} -->
		<details class="wp-block-details is-style-carehaven-faq"><summary><?php esc_html_e( 'What if I have severe dental anxiety or haven’t seen a dentist in years?', 'carehaven' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'You will never receive a lecture here. Your first appointment starts sitting upright in conversation—not reclined with instruments in your mouth. We offer topical numbing prior to any anesthetic, gentle comfort sedation options, and a simple hand-raise stop signal you control at every moment.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"className":"is-style-carehaven-faq"} -->
		<details class="wp-block-details is-style-carehaven-faq"><summary><?php esc_html_e( 'How quickly can I be seen for a toothache, broken crown, or dental emergency?', 'carehaven' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Please call (000) 000-0000 as early in the day as possible so our team can evaluate your symptoms and arrange prompt urgent dental care.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"className":"is-style-carehaven-faq"} -->
		<details class="wp-block-details is-style-carehaven-faq"><summary><?php esc_html_e( 'Do you accept HSA/FSA cards and monthly payment plans?', 'carehaven' ); ?></summary><!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
		<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Yes. You can use eligible HSA or FSA cards toward exams, crowns, implants, nightguards, and clear aligners, and our team can walk you through flexible monthly payment options.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
