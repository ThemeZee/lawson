<?php
/**
 * Title: Portfolio Double Dark
 * Slug: lincoln/portfolio-double-dark
 * Categories: lincoln_portfolio
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"dark-gray","textColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-dark-gray-background-color has-text-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns">

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-style-default">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
		</figure>
		<!-- /wp:image -->

		<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
		<h3 class="is-style-underlined-heading"><?php _e( 'Project One', 'lincoln' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lincoln' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-style-default">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
		</figure>
		<!-- /wp:image -->

		<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
		<h3 class="is-style-underlined-heading"><?php _e( 'Project Two', 'lincoln' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lincoln' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
