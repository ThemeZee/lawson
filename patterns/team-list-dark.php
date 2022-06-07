<?php
/**
 * Title: Team List Dark
 * Slug: lincoln/team-list-dark
 * Categories: lincoln_team
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"dark-gray","textColor":"white","layout":{"contentSize":"800px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-color has-dark-gray-background-color has-text-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"className":"is-style-underlined-heading"} -->
			<h2 class="is-style-underlined-heading"><?php _e( 'Our Team', 'lincoln' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Meet our professionals and experts.', 'lincoln' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph {"placeholder":"Content…","fontSize":"medium"} -->
					<p class="has-medium-font-size"><strong>John Doe</strong><br>Founder &amp; CEO</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph {"placeholder":"Content…","fontSize":"medium"} -->
					<p class="has-medium-font-size"><strong>Jane Smith</strong><br>Web Developer</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph {"placeholder":"Content…","fontSize":"medium"} -->
					<p class="has-medium-font-size"><strong>Mark Miller</strong><br>Online Marketing</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
