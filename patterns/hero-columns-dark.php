<?php
/**
 * Title: Hero Columns Dark
 * Slug: lincoln/hero-columns-dark
 * Categories: lincoln_hero
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"dark-gray","textColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-dark-gray-background-color has-text-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:0px">

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-underlined-heading"} -->
			<h1 class="is-style-underlined-heading" style="margin-top:0px"><?php _e( 'Embrace the future. <br>Use Full Site Editing now.', 'lincoln' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"is-style-default"} -->
			<div class="wp-block-buttons is-style-default">

				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Join now', 'lincoln' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lincoln' ); ?></a></div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
