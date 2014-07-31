<?php
/**
 * The homepage file.
 *
 * @package wordpress-dealership
 */

get_header( 'home' ); ?>

	<div class="row" data-equalizer><!-- Foundation .row start -->
		<div class="small-12 columns" data-equalizer-watch><!-- Foundation .columns start -->
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php if ( have_posts() ) : ?>

						<ul class="large-block-grid-2"><!-- Foundation block grid start -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<li><!-- Foundation block grid item start -->
							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>
							</li><!-- Foundation block grid item end -->

						<?php endwhile; ?>

						</ul><!-- Foundation block grid end -->

						<?php wordpress_dealership_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- Foundation .columns end -->
	</div><!-- Foundation .row end -->

<?php get_footer(); ?>