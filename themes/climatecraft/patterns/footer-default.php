<?php
/**
 * Title: Split-Stage Architectural HVAC Command Footer with Live Schedule & Rebate Deck
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(3.5rem, 6vw, 5.5rem)","bottom":"clamp(2.25rem, 4vw, 3.25rem)","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"surface","className":"climatecraft-site-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull climatecraft-site-footer has-surface-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:clamp(3.5rem, 6vw, 5.5rem);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:clamp(2.25rem, 4vw, 3.25rem);padding-left:clamp(1.25rem, 4vw, 2.5rem)">

	<!-- TIER 1: ASYMMETRIC DUAL-ZONE THERMAL COMMAND DECK -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"},"margin":{"bottom":"3.5rem"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-bottom:3.5rem">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:group {"style":{"color":{"background":"#111827"},"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"2.25rem","right":"2.25rem"}}},"textColor":"surface","className":"climatecraft-footer-deck-card climatecraft-footer-deck-card--dispatch","layout":{"type":"constrained"}} -->
			<div class="wp-block-group climatecraft-footer-deck-card climatecraft-footer-deck-card--dispatch has-surface-color has-text-color has-background" style="background-color:#111827;padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem">
				<!-- wp:paragraph {"style":{"color":{"background":"#0C2D48","text":"#38BDF8"},"spacing":{"padding":{"top":"0.3rem","bottom":"0.3rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"999px"}},"fontSize":"xs"} -->
				<p class="has-text-color has-background has-xs-font-size" style="border-radius:999px;background-color:#0C2D48;color:#38BDF8;padding-top:0.3rem;padding-right:0.75rem;padding-bottom:0.3rem;padding-left:0.75rem"><strong><?php esc_html_e( '● LIVE 24/7 NATE-CERTIFIED DISPATCH • < 60 MIN RESPONSE', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"0.9rem","bottom":"0.65rem"}},"typography":{"fontSize":"clamp(1.45rem, 2.3vw, 1.9rem)","lineHeight":"1.2"}},"textColor":"surface"} -->
				<h2 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0.9rem;margin-bottom:0.65rem;font-size:clamp(1.45rem, 2.3vw, 1.9rem);line-height:1.2"><?php esc_html_e( 'No-Cool AC or No-Heat Furnace? Speak With a Senior HVAC Engineer Now.', 'climatecraft' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#CBD5E1"><?php esc_html_e( 'Fully stocked diagnostic trucks carrying universal ECM blower motors, run capacitors, hot-surface igniters, and EPA-certified refrigerant recovery cylinders.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.4rem"},"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-buttons" style="margin-top:1.4rem">
					<!-- wp:button {"backgroundColor":"brass","textColor":"surface","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.4rem","right":"1.4rem"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-brass-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-radius:10px;padding-top:0.8rem;padding-right:1.4rem;padding-bottom:0.8rem;padding-left:1.4rem"><?php esc_html_e( 'Call Dispatch: (000) 000-0000', 'climatecraft' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"copper","textColor":"surface","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.4rem","right":"1.4rem"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/emergency/' ) ); ?>" style="border-radius:10px;padding-top:0.8rem;padding-right:1.4rem;padding-bottom:0.8rem;padding-left:1.4rem"><?php esc_html_e( '24/7 Emergency Triage →', 'climatecraft' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:group {"style":{"color":{"background":"#111827"},"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"2.1rem","right":"2.1rem"}}},"textColor":"surface","className":"climatecraft-footer-deck-card climatecraft-footer-deck-card--rebates","layout":{"type":"constrained"}} -->
			<div class="wp-block-group climatecraft-footer-deck-card climatecraft-footer-deck-card--rebates has-surface-color has-text-color has-background" style="background-color:#111827;padding-top:2.25rem;padding-right:2.1rem;padding-bottom:2.25rem;padding-left:2.1rem">
				<!-- wp:paragraph {"style":{"color":{"background":"#142E24","text":"#4ADE80"},"spacing":{"padding":{"top":"0.3rem","bottom":"0.3rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"999px"}},"fontSize":"xs"} -->
				<p class="has-text-color has-background has-xs-font-size" style="border-radius:999px;background-color:#142E24;color:#4ADE80;padding-top:0.3rem;padding-right:0.75rem;padding-bottom:0.3rem;padding-left:0.75rem"><strong><?php esc_html_e( '✓ 2026 FEDERAL 25C & UTILITY INCENTIVES', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.9rem","bottom":"0.55rem"}},"typography":{"fontSize":"1.35rem","lineHeight":"1.25"}},"textColor":"surface"} -->
				<h3 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0.9rem;margin-bottom:0.55rem;font-size:1.35rem;line-height:1.25"><?php esc_html_e( 'Up to $3,200 in Instant Heat Pump Rebates & Tax Credits', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#CBD5E1"><?php esc_html_e( 'Upgrade to a 22-SEER2 variable-speed inverter system with 0% APR financing for 36 months and full Manual J load certification.', 'climatecraft' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.25rem"},"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group" style="margin-top:1.25rem">
					<!-- wp:paragraph {"style":{"color":{"background":"#1E293B","text":"#F8FAFC"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.7rem","right":"0.7rem"}},"border":{"radius":"6px"}},"fontSize":"xs"} -->
					<p class="has-text-color has-background has-xs-font-size" style="border-radius:6px;background-color:#1E293B;color:#F8FAFC;padding-top:0.35rem;padding-right:0.7rem;padding-bottom:0.35rem;padding-left:0.7rem"><strong><?php esc_html_e( '$2,000 IRS 25C Credit', 'climatecraft' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"color":{"background":"#1E293B","text":"#38BDF8"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.7rem","right":"0.7rem"}},"border":{"radius":"6px"}},"fontSize":"xs"} -->
					<p class="has-text-color has-background has-xs-font-size" style="border-radius:6px;background-color:#1E293B;color:#38BDF8;padding-top:0.35rem;padding-right:0.7rem;padding-bottom:0.35rem;padding-left:0.7rem"><strong><?php esc_html_e( '$1,200 Utility Rebate', 'climatecraft' ); ?></strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- TIER 2: RE-ORDERED 3-ZONE ARCHITECTURAL SCHEDULE, DIRECTORY & BRAND HUB -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2.25rem","left":"2.5rem"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- ZONE 1 (LEFT 36%): PROMINENT DISPATCH & TUNE-UP SCHEDULE BOARD -->
		<!-- wp:column {"width":"36%"} -->
		<div class="wp-block-column" style="flex-basis:36%">
			<!-- wp:group {"style":{"color":{"background":"#111827"},"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}}},"textColor":"surface","className":"climatecraft-schedule-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group climatecraft-schedule-card has-surface-color has-text-color has-background" style="background-color:#111827;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem","letterSpacing":"0.02em"},"spacing":{"margin":{"top":"0","bottom":"1rem"}}},"textColor":"surface"} -->
				<h3 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0;margin-bottom:1rem;font-size:1.05rem;letter-spacing:0.02em"><?php esc_html_e( 'Dispatch & Tune-Up Hours', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.65rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"color":{"background":"#1E293B"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"0.9rem","right":"0.9rem"}}},"className":"climatecraft-schedule-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group climatecraft-schedule-row has-background" style="border-radius:8px;background-color:#1E293B;padding-top:0.65rem;padding-right:0.9rem;padding-bottom:0.65rem;padding-left:0.9rem">
						<!-- wp:paragraph {"style":{"color":{"text":"#E2E8F0"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#E2E8F0"><?php esc_html_e( 'Mon – Fri', 'climatecraft' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#FFFFFF"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#FFFFFF"><strong><?php esc_html_e( '7:00 AM – 8:00 PM', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"color":{"background":"#1E293B"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"0.9rem","right":"0.9rem"}}},"className":"climatecraft-schedule-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group climatecraft-schedule-row has-background" style="border-radius:8px;background-color:#1E293B;padding-top:0.65rem;padding-right:0.9rem;padding-bottom:0.65rem;padding-left:0.9rem">
						<!-- wp:paragraph {"style":{"color":{"text":"#E2E8F0"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#E2E8F0"><?php esc_html_e( 'Saturday', 'climatecraft' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#FFFFFF"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#FFFFFF"><strong><?php esc_html_e( '8:00 AM – 5:00 PM', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"color":{"background":"#0C2D48"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"0.9rem","right":"0.9rem"}}},"className":"climatecraft-schedule-row climatecraft-schedule-row--live","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group climatecraft-schedule-row climatecraft-schedule-row--live has-background" style="border-radius:8px;background-color:#0C2D48;padding-top:0.65rem;padding-right:0.9rem;padding-bottom:0.65rem;padding-left:0.9rem">
						<!-- wp:paragraph {"style":{"color":{"text":"#F8FAFC"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#F8FAFC"><strong><?php esc_html_e( 'No-Cool / No-Heat', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#38BDF8"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#38BDF8"><strong><?php esc_html_e( '24/7 Live On-Call', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- ZONE 2 (CENTER 36%): DUAL-COLUMN ENGINEERING DIRECTORY -->
		<!-- wp:column {"width":"36%"} -->
		<div class="wp-block-column" style="flex-basis:36%">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"0.95rem","textTransform":"uppercase","letterSpacing":"0.06em"},"spacing":{"margin":{"top":"0","bottom":"0.85rem"}}},"textColor":"surface"} -->
					<h3 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0;margin-bottom:0.85rem;font-size:0.95rem;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Cooling & Heat Pumps', 'climatecraft' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"0.55rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( '22-SEER2 Inverter Heat Pumps', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( '24/7 AC Repair & Recharge', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Ductless Mini-Split Zoning', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Aeroseal Ductwork Sealing', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Commercial Rooftop Units', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"0.95rem","textTransform":"uppercase","letterSpacing":"0.06em"},"spacing":{"margin":{"top":"0","bottom":"0.85rem"}}},"textColor":"surface"} -->
					<h3 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0;margin-bottom:0.85rem;font-size:0.95rem;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Heating & Clean Air', 'climatecraft' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"0.55rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( '98% AFUE Gas Furnaces', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'MERV 16 HEPA & UV-C Air', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'ACCA Manual J Load Audits', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Seasonal Rebates & Offers', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/#specials' ) ); ?>"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact & Service Map', 'climatecraft' ); ?>","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- ZONE 3 (RIGHT 28%): BRAND HEADQUARTERS & CREDENTIALS -->
		<!-- wp:column {"width":"28%"} -->
		<div class="wp-block-column" style="flex-basis:28%">
			<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|surface"}}}}} /-->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.65rem","bottom":"1rem"}},"color":{"text":"#CBD5E1"}},"fontSize":"small"} -->
			<p class="has-text-color has-small-font-size" style="color:#CBD5E1;margin-top:0.65rem;margin-bottom:1rem"><?php esc_html_e( 'Precision residential and light-commercial heating, cooling, and indoor air quality engineered with ACCA Manual J, S & D protocols.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"color":{"text":"#F8FAFC"}},"fontSize":"xs"} -->
			<p class="has-text-color has-xs-font-size" style="color:#F8FAFC"><strong><?php esc_html_e( 'HQ & TRAINING LAB:', 'climatecraft' ); ?></strong> <?php esc_html_e( '123 Street Name, Suite 100, City, State 00000 • State HVAC Lic #TACLA00000', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"surface","iconColorValue":"#FFFFFF","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"0.6rem"},"margin":{"top":"1.15rem"}}},"className":"is-style-logos-only climatecraft-social-links"} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only climatecraft-social-links" style="margin-top:1.15rem">
				<!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"x","label":"X"} /-->
				<!-- wp:social-link {"url":"#","service":"youtube","label":"YouTube"} /-->
				<!-- wp:social-link {"url":"#","service":"yelp","label":"Yelp"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- TIER 3: BOTTOM LEGAL & TELEMETRY BAR -->
	<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"1.5rem"}}},"backgroundColor":"slate-muted"} -->
	<hr class="wp-block-separator alignwide has-text-color has-slate-muted-color has-alpha-channel-opacity has-slate-muted-background-color has-background" style="margin-top:3rem;margin-bottom:1.5rem"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-xs-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}}} -->
			<p class="has-text-color" style="color:#CBD5E1">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"fontSize":"xs","style":{"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|surface"}}}}} /-->
			<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}}} -->
			<p class="has-text-color" style="color:#CBD5E1"><?php esc_html_e( '• All rights reserved. NATE & EPA Section 608 Certified.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"}}} -->
		<p class="has-text-color" style="color:#CBD5E1">
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
