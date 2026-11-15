<?php
/**
 * Title: Comments Section
 * Slug: liberty-plumber/comments
 * Categories: text
 * Block Types: core/comments
 * Inserter: no
 *
 * @package LibertyPlumber
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:comments {"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
<div class="wp-block-comments" style="margin-top:3rem">
	<!-- wp:comments-title {"level":2} /-->

	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"},"margin":{"bottom":"1.25rem"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-surface-background-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:12px;margin-bottom:1.25rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"0.75rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="margin-bottom:0.75rem">
				<!-- wp:avatar {"size":40,"style":{"border":{"radius":"999px"}}} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name {"fontSize":"small"} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group has-xs-font-size">
						<!-- wp:comment-date /-->
						<!-- wp:comment-edit-link /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:comment-content /-->
			<!-- wp:comment-reply-link {"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"1.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"2rem"}}}} /-->
</div>
<!-- /wp:comments -->
