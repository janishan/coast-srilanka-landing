<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lsx
 */

?>

			</div><!-- .content -->
		</div><!-- .wrap -->

		<?php // lsx_footer_before(); ?>

		<footer>
			<div class="footer-wrapper container">
				<div class="footer-top">
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<div class="footer-social-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'social',
										'depth' => 1,
									)
								);
							?>
						</div>
					<?php endif; ?>
				</div>
				<div class="footer-bottom">
					<p class="footer-contact-block footer-tel">
						<a href="tel:0719855654">0719855654</a>
					</p>
					<div class="footer-copyright">
						<?php
							printf(
								esc_html__( '&#169; %1$s %2$s All Rights Reserved', 'lsx' ),
								esc_html( date_i18n( 'Y' ) ),
								esc_html( get_bloginfo( 'name' ) )
							);
						?>
					</div>
					<p class="footer-contact-block footer-email">
						<a href="mailto:cutesrilanka@gmail.com">cutesrilanka@gmail.com</a>
					</p>
				</div>
			</div>
		</footer>

		<?php lsx_footer_after(); ?>
		<?php //lsx_body_bottom(); ?>
		<?php wp_footer(); ?>
	</body>
</html>
