<?php
/**
 * Facility Taxonomy Type Part
 *
 * @package  tour-operator
 * @category facility
 */
?>

<?php
	$description = term_description();
	if ( ! empty( $description ) ) :
?>

	<div class="main-content">
		<h1 class="page-heading"><?php echo wp_kses_post( $title ); ?></h1>
		<div class="page-intro">
			<?php echo wp_kses_post( $description ); ?>
		</div>

		<?php if ( lsx_to_has_enquiry_contact() ) : ?>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="lsx-to-contact-widget">
					<?php
						if ( function_exists( 'lsx_to_has_team_member' ) && lsx_to_has_team_member() ) {
							lsx_to_team_member_panel( '<div class="lsx-to-contact">', '</div>' );
						} else {
							lsx_to_enquiry_contact( '<div class="lsx-to-contact">', '</div>' );
						}

						lsx_to_enquire_modal();
					?>
				</div>
			</div>
		<?php endif ?>
	</div>

<?php endif ?>
