<?php
/**
 * Title: Portfolio Grid
 * Slug: lincoln/portfolio-grid
 * Categories: lincoln_portfolio
*/
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4vw"}}}} -->
<div class="wp-block-group" style="margin-bottom:4vw">

	<!-- wp:heading -->
	<h2><?php _e( 'What we have done', 'lincoln' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Project One', 'lincoln' ); ?></h3>
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

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Project Two', 'lincoln' ); ?></h3>
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

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3><?php _e( 'Project Three', 'lincoln' ); ?></h3>
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
