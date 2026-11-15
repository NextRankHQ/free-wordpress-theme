<?php
/**
 * Title: Split-Stage Architectural Climate Hero with Dual-Season Cards & Live Telemetry Showcase
 * Slug: climatecraft/hero-dispatch
 * Categories: climatecraft-heroes, banner
 * Viewport Width: 1400
 * Description: Signature HVAC hero section featuring dual-season cooling/heating mode cards, instant dispatch CTAs, and an architectural inverter heat pump & smart thermostat telemetry showcase.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(3.25rem, 6vw, 5.25rem)","bottom":"clamp(3.5rem, 6.5vw, 5.75rem)","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"surface","className":"climatecraft-hero-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull climatecraft-hero-section has-surface-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:clamp(3.25rem, 6vw, 5.25rem);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:clamp(3.5rem, 6.5vw, 5.75rem);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"2.75rem","left":"3.25rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- LEFT COLUMN (54%): EDITORIAL COMMAND & DUAL-SEASON CARDS -->
		<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%">

			<!-- Dual Status Badges -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem","margin":{"bottom":"1.15rem"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-bottom:1.15rem">
				<!-- wp:paragraph {"style":{"color":{"background":"#0C2D48","text":"#38BDF8"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.85rem","right":"0.85rem"}},"border":{"radius":"999px"}},"fontSize":"xs"} -->
				<p class="has-text-color has-background has-xs-font-size" style="border-radius:999px;background-color:#0C2D48;color:#38BDF8;padding-top:0.35rem;padding-right:0.85rem;padding-bottom:0.35rem;padding-left:0.85rem"><strong><?php esc_html_e( '● 24/7 NATE-CERTIFIED DISPATCH', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"color":{"background":"#2A1612","text":"#FB923C"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.85rem","right":"0.85rem"}},"border":{"radius":"999px"}},"fontSize":"xs"} -->
				<p class="has-text-color has-background has-xs-font-size" style="border-radius:999px;background-color:#2A1612;color:#FB923C;padding-top:0.35rem;padding-right:0.85rem;padding-bottom:0.35rem;padding-left:0.85rem"><strong><?php esc_html_e( 'ACCA MANUAL J, S & D VERIFIED', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display Headline -->
			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"1.1rem"}},"typography":{"fontSize":"clamp(2.25rem, 3.8vw, 3.35rem)","lineHeight":"1.08","letterSpacing":"-0.025em"}},"textColor":"surface"} -->
			<h1 class="wp-block-heading has-surface-color has-text-color" style="margin-top:0;margin-bottom:1.1rem;font-size:clamp(2.25rem, 3.8vw, 3.35rem);letter-spacing:-0.025em;line-height:1.08"><?php esc_html_e( 'Precision Home Cooling, Modulating Heat & Pure Indoor Air.', 'climatecraft' ); ?></h1>
			<!-- /wp:heading -->

			<!-- Lead Copy -->
			<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"},"spacing":{"margin":{"bottom":"1.65rem"}}},"fontSize":"medium"} -->
			<p class="has-text-color has-medium-font-size" style="color:#CBD5E1;margin-bottom:1.65rem"><?php esc_html_e( 'Stop settling for noisy, oversized HVAC units and uneven room temperatures. We engineer, install, and repair 22-SEER2 variable-speed inverter heat pumps, 98% AFUE gas furnaces, and hospital-grade HEPA air systems with upfront written pricing.', 'climatecraft' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- Dual-Season Mode Cards -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"},"margin":{"bottom":"1.75rem"}}}} -->
			<div class="wp-block-columns" style="margin-bottom:1.75rem">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"color":{"background":"#111827"},"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"1.2rem","right":"1.2rem"}}},"textColor":"surface","className":"climatecraft-hero-mode climatecraft-hero-mode--cool","layout":{"type":"constrained"}} -->
					<div class="wp-block-group climatecraft-hero-mode climatecraft-hero-mode--cool has-surface-color has-text-color has-background" style="background-color:#111827;padding-top:1.1rem;padding-right:1.2rem;padding-bottom:1.1rem;padding-left:1.2rem">
						<!-- wp:paragraph {"style":{"color":{"text":"#38BDF8"}},"fontSize":"xs"} -->
						<p class="has-text-color has-xs-font-size" style="color:#38BDF8"><strong><?php esc_html_e( '❄ COOLING & HEAT PUMPS', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#F8FAFC"},"spacing":{"margin":{"top":"0.3rem"}}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#F8FAFC;margin-top:0.3rem"><strong><?php esc_html_e( '22-SEER2 Inverter AC, Ductless Zoning & 24/7 Repair', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"color":{"background":"#111827"},"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"1.2rem","right":"1.2rem"}}},"textColor":"surface","className":"climatecraft-hero-mode climatecraft-hero-mode--heat","layout":{"type":"constrained"}} -->
					<div class="wp-block-group climatecraft-hero-mode climatecraft-hero-mode--heat has-surface-color has-text-color has-background" style="background-color:#111827;padding-top:1.1rem;padding-right:1.2rem;padding-bottom:1.1rem;padding-left:1.2rem">
						<!-- wp:paragraph {"style":{"color":{"text":"#FB923C"}},"fontSize":"xs"} -->
						<p class="has-text-color has-xs-font-size" style="color:#FB923C"><strong><?php esc_html_e( '🔥 HEATING & CLEAN AIR', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#F8FAFC"},"spacing":{"margin":{"top":"0.3rem"}}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#F8FAFC;margin-top:0.3rem"><strong><?php esc_html_e( '98% AFUE Modulating Furnaces & MERV-16 HEPA Filtration', 'climatecraft' ); ?></strong></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Action Buttons -->
			<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.9rem","margin":{"bottom":"1.4rem"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-bottom:1.4rem">
				<!-- wp:button {"backgroundColor":"brass","textColor":"surface","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"1.6rem","right":"1.6rem"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-brass-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-radius:10px;padding-top:0.9rem;padding-right:1.6rem;padding-bottom:0.9rem;padding-left:1.6rem"><?php esc_html_e( 'Schedule Instant Dispatch →', 'climatecraft' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"copper","textColor":"surface","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"1.5rem","right":"1.5rem"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-copper-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/heat-pumps/' ) ); ?>" style="border-radius:10px;padding-top:0.9rem;padding-right:1.5rem;padding-bottom:0.9rem;padding-left:1.5rem"><?php esc_html_e( 'Compare SEER2 Heat Pumps', 'climatecraft' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- Live Guarantee Bar -->
			<!-- wp:paragraph {"style":{"color":{"text":"#94A3B8"}},"fontSize":"xs"} -->
			<p class="has-text-color has-xs-font-size" style="color:#94A3B8"><strong><?php esc_html_e( '✓ < 60-Min Emergency Arrival   •   ✓ 10-Year Parts & Labor Warranty   •   ✓ 0% APR Financing for 36 Months', 'climatecraft' ); ?></strong></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- RIGHT COLUMN (46%): ARCHITECTURAL TELEMETRY SHOWCASE CARD -->
		<!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%">
			<!-- wp:group {"style":{"color":{"background":"#111827"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}},"textColor":"surface","className":"climatecraft-hero-showcase","layout":{"type":"constrained"}} -->
			<div class="wp-block-group climatecraft-hero-showcase has-surface-color has-text-color has-background" style="background-color:#111827;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

				<!-- Showcase Top Telemetry Bar -->
				<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0.85rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="margin-bottom:0.85rem">
					<!-- wp:paragraph {"style":{"color":{"text":"#38BDF8"}},"fontSize":"xs"} -->
					<p class="has-text-color has-xs-font-size" style="color:#38BDF8"><strong><?php esc_html_e( '● INVERTER & SMART CLIMATE TELEMETRY', 'climatecraft' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"color":{"text":"#4ADE80"}},"fontSize":"xs"} -->
					<p class="has-text-color has-xs-font-size" style="color:#4ADE80"><strong><?php esc_html_e( '0.36 in. w.c. STATIC ✓', 'climatecraft' ); ?></strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Centerpiece Cutaway Graphic -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hvac-hero.svg' ); ?>" alt="<?php esc_attr_e( 'Variable-speed inverter heat pump condenser, smart dual-zone climate dial, and MERV-16 HEPA filtration telemetry showcase', 'climatecraft' ); ?>" style="border-radius:14px"/></figure>
				<!-- /wp:image -->

				<!-- Bottom 3-Metric Performance Dock -->
				<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0.95rem","bottom":"0"},"blockGap":{"top":"0.65rem","left":"0.65rem"}}}} -->
				<div class="wp-block-columns" style="margin-top:0.95rem;margin-bottom:0">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"color":{"background":"#090D16"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"0.8rem","right":"0.8rem"}}},"textColor":"surface","className":"climatecraft-hero-metric","layout":{"type":"constrained"}} -->
						<div class="wp-block-group climatecraft-hero-metric has-surface-color has-text-color has-background" style="border-radius:10px;background-color:#090D16;padding-top:0.7rem;padding-right:0.8rem;padding-bottom:0.7rem;padding-left:0.8rem">
							<!-- wp:paragraph {"style":{"color":{"text":"#38BDF8"},"typography":{"fontSize":"1.25rem","fontWeight":"800"}}} -->
							<p class="has-text-color" style="color:#38BDF8;font-size:1.25rem;font-weight:800"><?php esc_html_e( '22 SEER2', 'climatecraft' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"},"spacing":{"margin":{"top":"0.1rem"}}},"fontSize":"xs"} -->
							<p class="has-text-color has-xs-font-size" style="color:#CBD5E1;margin-top:0.1rem"><?php esc_html_e( 'Inverter Cooling', 'climatecraft' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"color":{"background":"#090D16"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"0.8rem","right":"0.8rem"}}},"textColor":"surface","className":"climatecraft-hero-metric","layout":{"type":"constrained"}} -->
						<div class="wp-block-group climatecraft-hero-metric has-surface-color has-text-color has-background" style="border-radius:10px;background-color:#090D16;padding-top:0.7rem;padding-right:0.8rem;padding-bottom:0.7rem;padding-left:0.8rem">
							<!-- wp:paragraph {"style":{"color":{"text":"#FB923C"},"typography":{"fontSize":"1.25rem","fontWeight":"800"}}} -->
							<p class="has-text-color" style="color:#FB923C;font-size:1.25rem;font-weight:800"><?php esc_html_e( '98% AFUE', 'climatecraft' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"},"spacing":{"margin":{"top":"0.1rem"}}},"fontSize":"xs"} -->
							<p class="has-text-color has-xs-font-size" style="color:#CBD5E1;margin-top:0.1rem"><?php esc_html_e( 'Modulating Heat', 'climatecraft' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"color":{"background":"#090D16"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"0.8rem","right":"0.8rem"}}},"textColor":"surface","className":"climatecraft-hero-metric","layout":{"type":"constrained"}} -->
						<div class="wp-block-group climatecraft-hero-metric has-surface-color has-text-color has-background" style="border-radius:10px;background-color:#090D16;padding-top:0.7rem;padding-right:0.8rem;padding-bottom:0.7rem;padding-left:0.8rem">
							<!-- wp:paragraph {"style":{"color":{"text":"#4ADE80"},"typography":{"fontSize":"1.25rem","fontWeight":"800"}}} -->
							<p class="has-text-color" style="color:#4ADE80;font-size:1.25rem;font-weight:800"><?php esc_html_e( '$3,200', 'climatecraft' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"style":{"color":{"text":"#CBD5E1"},"spacing":{"margin":{"top":"0.1rem"}}},"fontSize":"xs"} -->
							<p class="has-text-color has-xs-font-size" style="color:#CBD5E1;margin-top:0.1rem"><?php esc_html_e( 'Rebates & Credits', 'climatecraft' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
