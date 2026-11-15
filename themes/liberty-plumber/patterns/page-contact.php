<?php
/**
 * Title: Contact & 24/7 Plumbing Dispatch Page Layout
 * Slug: liberty-plumber/page-contact
 * Categories: liberty-plumber-pages
 * Keywords: starter, contact, dispatch
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport Width: 1400
 * Description: Complete Contact Us and 24/7 Plumbing Dispatch page with hero banner, direct contact and office cards, dispatch hours, booking callout, 4-step dispatch process, and FAQs.
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--70);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"3rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">
			<!-- wp:paragraph {"className":"libertyplumber-eyebrow"} -->
			<p class="libertyplumber-eyebrow"><?php esc_html_e( '24/7 Live Dispatch & Same-Day Scheduling', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"1rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:1rem"><?php esc_html_e( 'Contact Our Licensed Plumbing & Dispatch Team', 'liberty-plumber' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"large"} -->
			<p class="has-slate-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Need immediate help with an active leak, backed-up main line, or failed water heater? Call our live 24/7 dispatch desk or schedule a convenient two-hour arrival window with upfront flat-rate pricing.', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.5rem">
				<!-- wp:button {"backgroundColor":"copper","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Call 24/7 Dispatch: (000) 000-0000', 'liberty-plumber' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Plumbing Services', 'liberty-plumber' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/service-fleet.svg' ); ?>" alt="<?php esc_attr_e( 'Licensed plumbing dispatch service truck ready for departure', 'liberty-plumber' ); ?>" style="border-radius:20px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ivory-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--70);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1.75rem","left":"1.75rem"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-libertyplumber-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card has-surface-background-color has-background" style="padding-top:2rem;padding-right:1.85rem;padding-bottom:2rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'DIRECT PHONE & EMERGENCY LINE', 'liberty-plumber' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( '(000) 000-0000', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Speak directly with a local plumbing dispatcher 24 hours a day. We triage burst pipes, main sewer backups, and gas water heater leaks for priority response.', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"is-style-libertyplumber-checks","fontSize":"small"} -->
				<ul class="wp-block-list is-style-libertyplumber-checks has-small-font-size">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Live 24/7 emergency dispatch desk', 'liberty-plumber' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'SMS technician tracking & arrival alerts', 'liberty-plumber' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-libertyplumber-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card has-surface-background-color has-background" style="padding-top:2rem;padding-right:1.85rem;padding-bottom:2rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'SHOP, WAREHOUSE & CREDENTIALS', 'liberty-plumber' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Main Dispatch Office', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( '123 Street Name, Suite 100', 'liberty-plumber' ); ?></strong><br><?php esc_html_e( 'City, State 00000', 'liberty-plumber' ); ?><br><?php esc_html_e( 'Email: service@example.com', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"is-style-libertyplumber-checks","fontSize":"small"} -->
				<ul class="wp-block-list is-style-libertyplumber-checks has-small-font-size">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'State Master Plumber License #000000', 'liberty-plumber' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Fully Bonded & $2M General Liability Insured', 'liberty-plumber' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-libertyplumber-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-libertyplumber-card has-surface-background-color has-background" style="padding-top:2rem;padding-right:1.85rem;padding-bottom:2rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'SERVICE & DISPATCH HOURS', 'liberty-plumber' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Operating Schedule', 'liberty-plumber' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:table {"hasFixedLayout":true,"className":"libertyplumber-hours-block libertyplumber-hours-block--light"} -->
				<figure class="wp-block-table libertyplumber-hours-block libertyplumber-hours-block--light"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Monday – Friday', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '7:00 AM – 8:00 PM', 'liberty-plumber' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '8:00 AM – 5:00 PM', 'liberty-plumber' ); ?></td></tr><tr><td><?php esc_html_e( 'Sunday & After-Hours', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '24/7 Emergency On-Call', 'liberty-plumber' ); ?></td></tr></tbody></table></figure>
				<!-- /wp:table -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.85rem"}}},"textColor":"slate-muted","fontSize":"xs"} -->
				<p class="has-slate-muted-color has-text-color has-xs-font-size" style="margin-top:0.85rem"><?php esc_html_e( 'Same-day 2-hour arrival windows available across all residential and commercial service zones.', 'liberty-plumber' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"liberty-plumber/emergency-cta-banner"} /-->
<!-- wp:pattern {"slug":"liberty-plumber/dispatch-process"} /-->
<!-- wp:pattern {"slug":"liberty-plumber/technician-profiles"} /-->
<!-- wp:pattern {"slug":"liberty-plumber/faq-accordion"} /-->
