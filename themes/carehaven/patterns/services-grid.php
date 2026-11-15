<?php
/**
 * Title: Comprehensive Dental & Clinical Services Grid
 * Slug: carehaven/services-grid
 * Categories: carehaven-clinical
 * Viewport Width: 1400
 * Description: Six interactive clinical treatment cards covering preventive, cosmetic, implants, aligners, restorative, and urgent care.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"clamp(1.25rem, 4vw, 2.5rem)","right":"clamp(1.25rem, 4vw, 2.5rem)"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ivory","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ivory-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:clamp(1.25rem, 4vw, 2.5rem);padding-bottom:var(--wp--preset--spacing--80);padding-left:clamp(1.25rem, 4vw, 2.5rem)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"className":"carehaven-eyebrow"} -->
		<p class="carehaven-eyebrow"><?php esc_html_e( 'Complete Care Under One Roof', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0.85rem","bottom":"0.85rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-top:0.85rem;margin-bottom:0.85rem"><?php esc_html_e( 'Modern dentistry designed to preserve natural tooth structure.', 'carehaven' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"slate-muted"} -->
		<p class="has-slate-muted-color has-text-color"><?php esc_html_e( 'We pair conservative clinical judgment with 3D digital diagnostics so your family rarely needs outside specialist referrals across town.', 'carehaven' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card-interactive","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card-interactive" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '01 • PREVENTIVE & HYGIENE', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Gentle Exams & Periodontal Care', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Warm-water ultrasonic cleanings, oral cancer screenings, ultra-low-dose digital X-rays, and tailored gum health therapy.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><strong><?php esc_html_e( 'Explore Preventive Care →', 'carehaven' ); ?></strong></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card-interactive","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card-interactive" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '02 • COSMETIC DENTISTRY', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Porcelain Veneers & Whitening', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Master-ceramist porcelain veneers, conservative composite bonding, and sensitivity-free clinical whitening tailored to your facial symmetry.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><strong><?php esc_html_e( 'View Smile Results →', 'carehaven' ); ?></strong></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card-interactive","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card-interactive" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '03 • IMPLANTOLOGY', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( '3D Guided Dental Implants', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'CBCT 3D-planned single implants, implant-supported bridges, and stable full-arch restorations placed and restored in one familiar office.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><strong><?php esc_html_e( 'Learn About Implants →', 'carehaven' ); ?></strong></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card-interactive","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card-interactive" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '04 • CLEAR ALIGNERS', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Clear Aligner Orthodontics', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Discreet clear aligner therapy for adults and teens using 60-second 3D optical intraoral scans—never messy putty impressions.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><strong><?php esc_html_e( 'See Aligner Options →', 'carehaven' ); ?></strong></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card-interactive","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card-interactive" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"sage","fontSize":"xs"} -->
				<p class="has-sage-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '05 • RESTORATIVE CARE', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Crowns, Bonding & Endodontics', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Metal-free ceramic crowns, biomimetic tooth-colored fillings, nightguards for TMJ/bruxism, and comfortable root canal therapy.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><strong><?php esc_html_e( 'Restorative Treatments →', 'carehaven' ); ?></strong></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}},"className":"is-style-carehaven-card-interactive","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-carehaven-card-interactive" style="padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"terracotta","fontSize":"xs"} -->
				<p class="has-terracotta-color has-text-color has-xs-font-size"><strong><?php esc_html_e( '06 • SAME-DAY URGENT CARE', 'carehaven' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"0.65rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:0.65rem"><?php esc_html_e( 'Emergency & Sedation Dentistry', 'carehaven' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"slate-muted","fontSize":"small"} -->
				<p class="has-slate-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Fast relief for sudden toothaches, chipped front teeth, or lost crowns—with nitrous oxide and oral comfort sedation available.', 'carehaven' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><strong><?php esc_html_e( 'Request Same-Day Triage →', 'carehaven' ); ?></strong></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
