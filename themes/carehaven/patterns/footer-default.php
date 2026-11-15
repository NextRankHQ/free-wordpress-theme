<?php
/**
 * Title: Default Practice Footer
 * Slug: carehaven/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0"}}},"backgroundColor":"navy","textColor":"ivory","className":"carehaven-site-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull carehaven-site-footer has-ivory-color has-navy-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--60);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|surface"}}}}} /-->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.85rem"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:0.85rem"><?php esc_html_e( 'Preventive, restorative, cosmetic, and family dental care delivered with unhurried appointments and clear treatment estimates.', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|sage-tint"}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size"><strong><?php esc_html_e( '123 Street Name, Suite 100', 'carehaven' ); ?></strong><br><?php esc_html_e( 'City, State 00000', 'carehaven' ); ?><br><a href="#"><?php esc_html_e( '(000) 000-0000', 'carehaven' ); ?></a> • <a href="mailto:info@example.com">info@example.com</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|sans","fontWeight":"600","fontStyle":"normal"}},"textColor":"surface","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-surface-color has-text-color has-medium-font-size" style="font-family:var(--wp--preset--font-family--sans);font-style:normal;font-weight:600"><?php esc_html_e( 'Pages', 'carehaven' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","textColor":"ivory","style":{"spacing":{"blockGap":"0.45rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:page-list /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|sans","fontWeight":"600","fontStyle":"normal"}},"textColor":"surface","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-surface-color has-text-color has-medium-font-size" style="font-family:var(--wp--preset--font-family--sans);font-style:normal;font-weight:600"><?php esc_html_e( 'Quick Links', 'carehaven' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","textColor":"ivory","style":{"spacing":{"blockGap":"0.45rem"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:home-link {"label":"<?php esc_attr_e( 'Home', 'carehaven' ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Services', 'carehaven' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Our Providers', 'carehaven' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Patient Information', 'carehaven' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'carehaven' ); ?>","url":"#"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"26%"} -->
		<div class="wp-block-column" style="flex-basis:26%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|sans","fontWeight":"600","fontStyle":"normal"}},"textColor":"surface","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-surface-color has-text-color has-medium-font-size" style="font-family:var(--wp--preset--font-family--sans);font-style:normal;font-weight:600"><?php esc_html_e( 'Office Hours', 'carehaven' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:table {"hasFixedLayout":true,"className":"carehaven-hours-block"} -->
			<figure class="wp-block-table carehaven-hours-block"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Monday – Friday', 'carehaven' ); ?></td><td><?php esc_html_e( '9:00 AM – 5:00 PM', 'carehaven' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'carehaven' ); ?></td><td><?php esc_html_e( 'Closed', 'carehaven' ); ?></td></tr><tr><td><?php esc_html_e( 'Sunday', 'carehaven' ); ?></td><td><?php esc_html_e( 'Closed', 'carehaven' ); ?></td></tr></tbody></table></figure>
			<!-- /wp:table -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.9rem"}}},"fontSize":"xs"} -->
			<p class="has-xs-font-size" style="margin-top:0.9rem"><?php esc_html_e( 'Update address, phone number, and office hours in the Site Editor.', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"rgba(255,255,255,0.16)","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:rgba(255,255,255,0.16);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group has-xs-font-size">
			<!-- wp:paragraph -->
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontFamily":"var:preset|font-family|sans","fontWeight":"600","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|ivory"}}},"fontSize":"xs"}} /-->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( '• All rights reserved.', 'carehaven' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|sage-tint"}}}},"fontSize":"xs"} -->
		<p class="has-link-color has-xs-font-size"><?php
			printf(
				/* translators: 1: WordPress.org link, 2: Theme author link. */
				esc_html__( 'Powered by %1$s • Carehaven by %2$s', 'carehaven' ),
				'<a href="' . esc_url( __( 'https://wordpress.org/', 'carehaven' ) ) . '" rel="nofollow">WordPress</a>',
				'<a href="' . esc_url( 'https://nextrankhq.com' ) . '" rel="nofollow">NextRankHQ</a>'
			);
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
