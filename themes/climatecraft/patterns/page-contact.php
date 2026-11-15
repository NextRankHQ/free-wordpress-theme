<?php
/**
 * Title: Contact & 24/7 HVAC Dispatch Page Layout
 * Slug: climatecraft/page-contact
 * Categories: climatecraft-pages
 * Keywords: starter, contact, dispatch
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport Width: 1400
 * Description: Complete Contact Us and 24/7 Plumbing Dispatch page with hero banner, direct contact and office cards, dispatch hours, booking callout, 4-step dispatch process, and FAQs.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"backgroundColor":"navy","textColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-color has-navy-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--70);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"3rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">
			<!-- wp:paragraph {"className":"climatecraft-eyebrow"} -->
			<p class="climatecraft-eyebrow"><?php esc_html_e( '24/7 Live Dispatch & Same-Day Scheduling', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"1rem"}}},"textColor":"surface"} -->
			<h1 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0.85rem;margin-bottom:1rem"><?php esc_html_e( 'Contact Our NATE-Certified HVAC & Dispatch Team', 'climatecraft' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}},"fontSize":"large"} -->
			<p class="has-text-color has-large-font-size" style="color:#CBD5E1"><?php esc_html_e( 'Need immediate help with a no-cool AC breakdown, winter furnace failure, or new SEER2 heat pump estimate? Call our live 24/7 dispatch desk or book a two-hour arrival window with upfront flat-rate pricing.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.5rem">
				<!-- wp:button {"backgroundColor":"copper","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Call 24/7 Dispatch: (000) 000-0000', 'climatecraft' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"copper-dark","textColor":"surface"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-dark-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Heating & Cooling Services', 'climatecraft' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hvac-fleet.svg' ); ?>" alt="<?php esc_attr_e( 'NATE-certified HVAC dispatch service van ready for departure', 'climatecraft' ); ?>" style="border-radius:20px"/></figure>
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
			<!-- wp:group {"className":"is-style-climatecraft-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-surface-background-color has-background" style="padding-top:2rem;padding-right:1.85rem;padding-bottom:2rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'DIRECT PHONE & EMERGENCY LINE', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( '(000) 000-0000', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Speak directly with a local HVAC dispatcher 24 hours a day. We triage summer AC failures, winter no-heat calls, and refrigerant or carbon monoxide alerts for priority response.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"is-style-climatecraft-checks","fontSize":"small"} -->
				<ul class="wp-block-list is-style-climatecraft-checks has-small-font-size">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Live 24/7 emergency dispatch desk', 'climatecraft' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'SMS technician tracking & arrival alerts', 'climatecraft' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-climatecraft-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-surface-background-color has-background" style="padding-top:2rem;padding-right:1.85rem;padding-bottom:2rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'SHOP, WAREHOUSE & CREDENTIALS', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Main Dispatch Office', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><strong><?php esc_html_e( '123 Street Name, Suite 100', 'climatecraft' ); ?></strong><br><?php esc_html_e( 'City, State 00000', 'climatecraft' ); ?><br><?php esc_html_e( 'Email: service@example.com', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"is-style-climatecraft-checks","fontSize":"small"} -->
				<ul class="wp-block-list is-style-climatecraft-checks has-small-font-size">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'State Master Plumber HVAC License #TACLA00000 • NATE & EPA 608 Certified', 'climatecraft' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Fully Bonded & $2M General Liability Insured', 'climatecraft' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-climatecraft-card","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-surface-background-color has-background" style="padding-top:2rem;padding-right:1.85rem;padding-bottom:2rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper","fontSize":"xs"} -->
				<p class="has-copper-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'SERVICE & DISPATCH HOURS', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Operating Schedule', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:table {"hasFixedLayout":true,"className":"climatecraft-hours-block climatecraft-hours-block--light"} -->
				<figure class="wp-block-table climatecraft-hours-block climatecraft-hours-block--light"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Monday – Friday', 'climatecraft' ); ?></td><td><?php esc_html_e( '7:00 AM – 8:00 PM', 'climatecraft' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'climatecraft' ); ?></td><td><?php esc_html_e( '8:00 AM – 5:00 PM', 'climatecraft' ); ?></td></tr><tr><td><?php esc_html_e( 'Sunday & After-Hours', 'climatecraft' ); ?></td><td><?php esc_html_e( '24/7 Emergency On-Call', 'climatecraft' ); ?></td></tr></tbody></table></figure>
				<!-- /wp:table -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.85rem"}}},"textColor":"slate-muted","fontSize":"xs"} -->
				<p class="has-slate-muted-color has-text-color has-xs-font-size" style="margin-top:0.85rem"><?php esc_html_e( 'Same-day 2-hour arrival windows available across all residential and commercial service zones.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"climatecraft/emergency-cta-banner"} /-->
<!-- wp:pattern {"slug":"climatecraft/dispatch-process"} /-->
<!-- wp:pattern {"slug":"climatecraft/technician-profiles"} /-->
<!-- wp:pattern {"slug":"climatecraft/faq-accordion"} /-->
