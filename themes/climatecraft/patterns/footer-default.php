<?php
/**
 * Title: 3-Tier Architectural HVAC Footer with Pre-Footer Dispatch Banner & Bento Cards
 * Slug: climatecraft/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"ivory","className":"climatecraft-site-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull climatecraft-site-footer has-ivory-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--60);padding-left:clamp(1.25rem, 4vw, 2.5rem)">

	<!-- wp:group {"align":"wide","style":{"color":{"background":"#111827"},"border":{"radius":"14px","color":"#1E293B","width":"1px","top":{"color":"#0284C7","width":"4px"}},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2.25rem","right":"2.25rem"},"margin":{"bottom":"3.5rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-border-color has-background" style="border-top-color:#0284C7;border-top-width:4px;border-right-color:#1E293B;border-right-width:1px;border-bottom-color:#1E293B;border-bottom-width:1px;border-left-color:#1E293B;border-left-width:1px;border-radius:14px;background-color:#111827;margin-bottom:3.5rem;padding-top:2rem;padding-right:2.25rem;padding-bottom:2rem;padding-left:2.25rem">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"1.5rem","left":"2rem"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%">
				<!-- wp:paragraph {"style":{"color":{"text":"#38BDF8"}},"fontSize":"xs"} -->
				<p class="has-text-color has-xs-font-size" style="color:#38BDF8"><strong><?php esc_html_e( '❄ NO-COOL AC OR 🔥 NO-HEAT FURNACE EMERGENCY?', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.35rem"}},"typography":{"fontSize":"1.55rem"}},"textColor":"surface"} -->
				<h3 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0.35rem;margin-bottom:0.35rem;font-size:1.55rem"><?php esc_html_e( '24/7 NATE-Certified Dispatch — Priority Response Across All Service Zones', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#94A3B8"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#94A3B8"><?php esc_html_e( 'Fully stocked HVAC trucks with universal capacitors, blower motors, igniters, and EPA-certified refrigerant recovery.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"brass","textColor":"surface","style":{"border":{"radius":"10px"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-brass-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-radius:10px"><?php esc_html_e( 'Call (000) 000-0000', 'climatecraft' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"copper-dark","textColor":"surface","style":{"border":{"radius":"10px"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-dark-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/#specials' ) ); ?>" style="border-radius:10px"><?php esc_html_e( 'View Rebates', 'climatecraft' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2.25rem","left":"2.25rem"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">
			<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|surface"}}}}} /-->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.75rem"}},"color":{"text":"#CBD5E1"}},"fontSize":"small"} -->
			<p class="has-text-color has-small-font-size" style="color:#CBD5E1;margin-top:0.75rem"><?php esc_html_e( 'Precision residential and commercial heating, cooling, variable-speed inverter heat pumps, and hospital-grade indoor air quality engineered with ACCA Manual J, S & D load calculations.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"color":{"background":"#111827"},"border":{"radius":"10px","color":"#1E293B","width":"1px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"1rem","right":"1rem"},"margin":{"top":"1.15rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-background" style="border-color:#1E293B;border-width:1px;border-radius:10px;background-color:#111827;margin-top:1.15rem;padding-top:0.9rem;padding-right:1rem;padding-bottom:0.9rem;padding-left:1rem">
				<!-- wp:paragraph {"style":{"color":{"text":"#38BDF8"}},"fontSize":"xs"} -->
				<p class="has-text-color has-xs-font-size" style="color:#38BDF8"><strong><?php esc_html_e( 'LICENSED MECHANICAL CONTRACTOR', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#E2E8F0"},"spacing":{"margin":{"top":"0.25rem"}}},"fontSize":"xs"} -->
				<p class="has-text-color has-xs-font-size" style="color:#E2E8F0;margin-top:0.25rem"><?php esc_html_e( '123 Street Name, Suite 100, City, State 00000', 'climatecraft' ); ?><br><?php esc_html_e( 'State HVAC License #TACLA00000 • NATE & EPA 608', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"surface","iconColorValue":"#FFFFFF","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"0.6rem"},"margin":{"top":"1.25rem"}}},"className":"is-style-logos-only climatecraft-social-links"} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only climatecraft-social-links" style="margin-top:1.25rem">
				<!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"x","label":"X"} /-->
				<!-- wp:social-link {"url":"#","service":"youtube","label":"YouTube"} /-->
				<!-- wp:social-link {"url":"#","service":"yelp","label":"Yelp"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1rem"},"border":{"left":{"color":"#0284C7","width":"3px"}},"spacing":{"padding":{"left":"0.65rem"}}},"textColor":"surface"} -->
			<h3 class="wp-block-heading has-surface-color has-text-color" style="border-left-color:#0284C7;border-left-width:3px;padding-left:0.65rem;font-size:1rem"><?php esc_html_e( 'Cooling & Heat Pumps', 'climatecraft' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( '22-SEER2 Inverter Heat Pumps', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( '24/7 AC Repair & Recharge', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Ductless Mini-Split Zoning', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Aeroseal Ductwork Sealing', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Commercial Rooftop Units', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1rem"},"border":{"left":{"color":"#C2410C","width":"3px"}},"spacing":{"padding":{"left":"0.65rem"}}},"textColor":"surface"} -->
			<h3 class="wp-block-heading has-surface-color has-text-color" style="border-left-color:#C2410C;border-left-width:3px;padding-left:0.65rem;font-size:1rem"><?php esc_html_e( 'Heating & Clean Air', 'climatecraft' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( '98% AFUE Modulating Furnaces', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'MERV 16 HEPA & UV-C Purifiers', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Federal 25C Tax Credit Guide', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Seasonal Rebates & Specials', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/#specials' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact & 24/7 Dispatch', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"28%"} -->
		<div class="wp-block-column" style="flex-basis:28%">
			<!-- wp:group {"style":{"color":{"background":"#111827"},"border":{"radius":"12px","color":"#1E293B","width":"1px"},"spacing":{"padding":{"top":"1.35rem","bottom":"1.35rem","left":"1.35rem","right":"1.35rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-background" style="border-color:#1E293B;border-width:1px;border-radius:12px;background-color:#111827;padding-top:1.35rem;padding-right:1.35rem;padding-bottom:1.35rem;padding-left:1.35rem">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1rem"},"spacing":{"margin":{"top":"0","bottom":"0.65rem"}}},"textColor":"surface"} -->
				<h3 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0;margin-bottom:0.65rem;font-size:1rem"><?php esc_html_e( 'Dispatch & Tune-Up Hours', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:table {"hasFixedLayout":true,"className":"climatecraft-hours-block"} -->
				<figure class="wp-block-table climatecraft-hours-block"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Mon – Fri', 'climatecraft' ); ?></td><td><?php esc_html_e( '7:00 AM – 8:00 PM', 'climatecraft' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'climatecraft' ); ?></td><td><?php esc_html_e( '8:00 AM – 5:00 PM', 'climatecraft' ); ?></td></tr><tr><td><?php esc_html_e( 'No-Cool / No-Heat', 'climatecraft' ); ?></td><td><?php esc_html_e( '24/7 Live On-Call', 'climatecraft' ); ?></td></tr></tbody></table></figure>
				<!-- /wp:table -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.85rem"}},"color":{"background":"#1E293B","text":"#4ADE80"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"0.65rem","right":"0.65rem"}}},"fontSize":"xs"} -->
				<p class="has-text-color has-background has-xs-font-size" style="border-radius:6px;background-color:#1E293B;color:#4ADE80;padding-top:0.4rem;padding-right:0.65rem;padding-bottom:0.4rem;padding-left:0.65rem"><strong><?php esc_html_e( '✓ 0% APR Financing Available for 36 Months', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"2.75rem","bottom":"1.5rem"}}},"backgroundColor":"slate-muted"} -->
	<hr class="wp-block-separator alignwide has-text-color has-slate-muted-color has-alpha-channel-opacity has-slate-muted-background-color has-background" style="margin-top:2.75rem;margin-bottom:1.5rem"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-xs-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"fontSize":"xs","style":{"typography":{"fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|ivory"}}}}} /-->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( '• All rights reserved.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p>
			<?php
			printf(
				/* translators: 1: WordPress.org link, 2: Theme author link. */
				esc_html__( 'Powered by %1$s • ClimateCraft HVAC Theme by %2$s', 'climatecraft' ),
				'<a href="' . esc_url( __( 'https://wordpress.org/', 'climatecraft' ) ) . '" rel="nofollow">WordPress</a>',
				'<a href="https://nextrankhq.com/" rel="nofollow">NextRankHQ.com</a>'
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
