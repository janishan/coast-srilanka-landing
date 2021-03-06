<?php
/**
 * Tour Archive
 *
 * @package  tour-operator
 * @category tour
 */

get_header(); ?>

	<?php lsx_content_wrap_before(); ?>

	<div id="primary">

		<?php lsx_content_before(); ?>

		<main id="main" class="site-main" role="main">
			
		<div class="search-wrapper">
			<div class="search-inner-wrapper">
				<div class="search-box">
					<label for="">Select Tour</label>
					<div class="search-filed">
						<select name="tours" id="tours" class="search-select">
							<option value="">Search Tours...</option>
						</select>
					</div>
				</div>
				<div class="search-btn-wrapper">
					<button class="srch-btn bttn primary-btn">Search</button>
				</div>
			</div>
		</div>

			<?php lsx_content_top(); ?>

			<?php if ( have_posts() ) : ?>

				<div class="row lsx-to-archive-items lsx-to-archive-template-<?php echo esc_attr( tour_operator()->archive_layout ); ?> lsx-to-archive-template-image-<?php echo esc_attr( tour_operator()->archive_list_layout_image_style ); ?>">

					<?php 
                    while ( have_posts() ) :
the_post(); 
?>

						<div class="<?php echo esc_attr( lsx_to_archive_class( 'lsx-to-archive-item' ) ); ?>">
							<?php lsx_to_content( 'content', 'tour' ); ?>
						</div>

					<?php endwhile; ?>

				</div>

			<?php else : ?>

				<?php get_template_part( 'partials/content', 'none' ); ?>

			<?php endif; ?>

			<?php lsx_content_bottom(); ?>

		</main><!-- #main -->

		<?php lsx_content_after(); ?>

	</div><!-- #primary -->

	<?php lsx_content_wrap_after(); ?>

<?php //get_sidebar(); ?>

<?php 
get_footer();
