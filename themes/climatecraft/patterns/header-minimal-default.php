<?php
/**
 * Title: Minimal Funnel Header
 * Slug: climatecraft/header-minimal-default
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package ClimateCraft
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","className":"climatecraft-nav-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull climatecraft-nav-bar has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:1.1rem;padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:1.1rem;padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0} /-->

		<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"navy","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color wp-element-button" href="#"><?php esc_html_e( 'Call (000) 000-0000', 'climatecraft' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
