<?php
/**
 * Title: 3-Tier Annual HVAC Comfort Club Maintenance Plans
 * Slug: climatecraft/membership-plan
 * Categories: climatecraft-conversion
 * Viewport Width: 1400
 * Description: Three preventive heating and cooling maintenance membership tiers covering bi-annual NATE precision tune-ups, coil cleaning, and repair discounts.
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"linen","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-linen-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"align":"center","className":"climatecraft-eyebrow"} -->
		<p class="has-text-align-center climatecraft-eyebrow"><?php esc_html_e( 'Spring AC & Fall Furnace Precision Care', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.75rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0.85rem;margin-bottom:0.75rem"><?php esc_html_e( 'Annual HVAC Comfort Club Maintenance Plans', 'climatecraft' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"slate-muted"} -->
		<p class="has-text-align-center has-slate-muted-color has-text-color"><?php esc_html_e( 'Prevent mid-summer AC breakdowns and winter no-heat emergencies while keeping your manufacturer 10-year parts warranty valid with bi-annual NATE precision tune-ups.', 'climatecraft' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","textColor":"ink","className":"is-style-climatecraft-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-ink-color has-surface-background-color has-text-color has-background" style="padding-top:2.25rem;padding-right:1.85rem;padding-bottom:2.25rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper-dark","fontSize":"xs"} -->
				<p class="has-copper-dark-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'SINGLE-SEASON COOLING OR HEATING', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.35rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.35rem;margin-bottom:0.35rem"><?php esc_html_e( 'Cooling Shield', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink","fontSize":"xx-large"} -->
				<p class="has-ink-color has-text-color has-xx-large-font-size"><strong><?php esc_html_e( '$169', 'climatecraft' ); ?></strong> <span style="font-size:0.95rem;font-weight:400"><?php esc_html_e( '/ year', 'climatecraft' ); ?></span></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"is-style-climatecraft-checks","textColor":"ink","fontSize":"small"} -->
				<ul class="wp-block-list is-style-climatecraft-checks has-ink-color has-text-color has-small-font-size"><!-- wp:list-item -->
				<li><?php esc_html_e( 'Annual 21-Point Spring AC Condenser Tune-Up', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Outdoor Condenser Coil Chemical Wash', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Subcooling, Superheat & Capacitor Load Test', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Condensate Drain Flush & Safety Switch Check', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><strong><?php esc_html_e( '10% off', 'climatecraft' ); ?></strong> <?php esc_html_e( 'any AC or thermostat repair', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --></ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.5rem">
					<!-- wp:button {"width":100,"textColor":"navy","className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Enroll at Your Visit', 'climatecraft' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","textColor":"ink","className":"is-style-climatecraft-card climatecraft-featured-plan","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card climatecraft-featured-plan has-ink-color has-surface-background-color has-text-color has-background" style="padding-top:2.25rem;padding-right:1.85rem;padding-bottom:2.25rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"brass","fontSize":"xs"} -->
				<p class="has-brass-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '★ MOST POPULAR • SPRING AC + FALL FURNACE', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.35rem"}}},"textColor":"ink"} -->
				<h3 class="wp-block-heading has-ink-color has-text-color" style="margin-top:0.35rem;margin-bottom:0.35rem"><?php esc_html_e( 'Dual-Season Comfort', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink","fontSize":"xx-large"} -->
				<p class="has-ink-color has-text-color has-xx-large-font-size"><strong><?php esc_html_e( '$229', 'climatecraft' ); ?></strong> <span style="font-size:0.95rem;font-weight:400"><?php esc_html_e( '/ year', 'climatecraft' ); ?></span></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"is-style-climatecraft-checks","textColor":"ink","fontSize":"small"} -->
				<ul class="wp-block-list is-style-climatecraft-checks has-ink-color has-text-color has-small-font-size"><!-- wp:list-item -->
				<li><?php esc_html_e( 'Spring 21-Point AC & Heat Pump Cooling Tune-Up', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Fall 21-Point Furnace & Heat Exchanger Check', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Carbon Monoxide & Flue Draft Safety Analysis', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Waived After-Hours & Weekend Dispatch Fee', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><strong><?php esc_html_e( '15% off', 'climatecraft' ); ?></strong> <?php esc_html_e( 'all HVAC repairs, coils & IAQ upgrades', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --></ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.5rem">
					<!-- wp:button {"backgroundColor":"brass","textColor":"surface","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-surface-color has-brass-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Join Dual-Season Plan', 'climatecraft' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"1.85rem","right":"1.85rem"}}},"backgroundColor":"surface","textColor":"ink","className":"is-style-climatecraft-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-climatecraft-card has-ink-color has-surface-background-color has-text-color has-background" style="padding-top:2.25rem;padding-right:1.85rem;padding-bottom:2.25rem;padding-left:1.85rem">
				<!-- wp:paragraph {"textColor":"copper-dark","fontSize":"xs"} -->
				<p class="has-copper-dark-color has-text-color has-xs-font-size"><strong><?php esc_html_e( 'MULTI-ZONE & WHOLE-HOME IAQ', 'climatecraft' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.35rem","bottom":"0.35rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.35rem;margin-bottom:0.35rem"><?php esc_html_e( 'Total IAQ & Multi-System', 'climatecraft' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"ink","fontSize":"xx-large"} -->
				<p class="has-ink-color has-text-color has-xx-large-font-size"><strong><?php esc_html_e( '$389', 'climatecraft' ); ?></strong> <span style="font-size:0.95rem;font-weight:400"><?php esc_html_e( '/ year', 'climatecraft' ); ?></span></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"is-style-climatecraft-checks","textColor":"ink","fontSize":"small"} -->
				<ul class="wp-block-list is-style-climatecraft-checks has-ink-color has-text-color has-small-font-size"><!-- wp:list-item -->
				<li><?php esc_html_e( 'Bi-Annual Tune-Ups for up to 2 HVAC Systems', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'Annual MERV 16 HEPA Media Filter Included', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( 'UV-C Lamp & Whole-Home Humidifier Service', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><?php esc_html_e( '100% Waived Diagnostic Fee on All Calls', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --><!-- wp:list-item -->
				<li><strong><?php esc_html_e( '20% off', 'climatecraft' ); ?></strong> <?php esc_html_e( 'repairs, ductwork & system upgrades', 'climatecraft' ); ?></li>
				<!-- /wp:list-item --></ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.5rem">
					<!-- wp:button {"width":100,"textColor":"navy","className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Enroll at Your Visit', 'climatecraft' ); ?></a></div>
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
