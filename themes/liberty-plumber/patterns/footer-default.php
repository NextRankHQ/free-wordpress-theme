<?php
/**
 * Title: Plumbing Footer with Dispatch Hours & Social Links
 * Slug: liberty-plumber/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"navy","textColor":"ivory","className":"libertyplumber-site-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull libertyplumber-site-footer has-ivory-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--60);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"2.5rem"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|surface"}}}}} /-->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:1rem"><?php esc_html_e( 'Residential and commercial plumbing, hydro-jetting drain cleaning, tankless water heaters, and whole-home copper or PEX repiping backed by upfront written estimates.', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.25rem"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:1.25rem"><strong><?php esc_html_e( '123 Street Name, Suite 100', 'liberty-plumber' ); ?></strong><br><?php esc_html_e( 'City, State 00000 • License #000000', 'liberty-plumber' ); ?><br><strong><?php esc_html_e( '(000) 000-0000', 'liberty-plumber' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"surface","iconColorValue":"#FFFFFF","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"0.65rem"},"margin":{"top":"1.35rem"}}},"className":"is-style-logos-only libertyplumber-social-links"} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only libertyplumber-social-links" style="margin-top:1.35rem">
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
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem"}},"textColor":"surface"} -->
			<h3 class="wp-block-heading has-surface-color has-text-color" style="font-size:1.05rem"><?php esc_html_e( 'Core Services', 'liberty-plumber' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"0.55rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Emergency Leak Repair', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Drain & Hydro-Jetting', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Tankless Water Heaters', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/water-heaters/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Copper & PEX Repiping', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Sewer Camera Inspection', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem"}},"textColor":"surface"} -->
			<h3 class="wp-block-heading has-surface-color has-text-color" style="font-size:1.05rem"><?php esc_html_e( 'Quick Links', 'liberty-plumber' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"0.55rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Home', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Plumbing Services', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Water Heaters', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/water-heaters/' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Service Specials', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/#specials' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact Dispatch', 'liberty-plumber' ); ?>","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"26%"} -->
		<div class="wp-block-column" style="flex-basis:26%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem"}},"textColor":"surface"} -->
			<h3 class="wp-block-heading has-surface-color has-text-color" style="font-size:1.05rem"><?php esc_html_e( 'Dispatch Hours', 'liberty-plumber' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:table {"hasFixedLayout":true,"className":"libertyplumber-hours-block"} -->
			<figure class="wp-block-table libertyplumber-hours-block"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Monday – Friday', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '7:00 AM – 8:00 PM', 'liberty-plumber' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '8:00 AM – 5:00 PM', 'liberty-plumber' ); ?></td></tr><tr><td><?php esc_html_e( 'Emergency Service', 'liberty-plumber' ); ?></td><td><?php esc_html_e( '24/7 On-Call', 'liberty-plumber' ); ?></td></tr></tbody></table></figure>
			<!-- /wp:table -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}},"fontSize":"xs"} -->
			<p class="has-xs-font-size" style="margin-top:1rem"><?php esc_html_e( 'Update address, license number, phone number, and dispatch hours in the Site Editor.', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"1.75rem"}}},"backgroundColor":"slate-muted"} -->
	<hr class="wp-block-separator alignwide has-text-color has-slate-muted-color has-alpha-channel-opacity has-slate-muted-background-color has-background" style="margin-top:3rem;margin-bottom:1.75rem"/>
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
			<p><?php esc_html_e( '• All rights reserved.', 'liberty-plumber' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p>
			<?php
			printf(
				/* translators: 1: WordPress.org link, 2: Theme author link. */
				esc_html__( 'Powered by %1$s • Liberty Plumbing Theme by %2$s', 'liberty-plumber' ),
				'<a href="' . esc_url( __( 'https://wordpress.org/', 'liberty-plumber' ) ) . '" rel="nofollow">WordPress</a>',
				'<a href="https://nextrankhq.com/" rel="nofollow">NextRankHQ.com</a>'
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
