<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storer
 */

?>
</div><!-- skip-main-content close -->
<?php
if ( is_active_sidebar('storer-footer-widget-0') || is_active_sidebar('storer-footer-widget-1') || is_active_sidebar('storer-footer-widget-2') ):
    $footer_column_layout = 3; ?>
    <div class="twp-footer-widget-section">
        <div class="twp-container">
            <div class="twp-c-row twp-wrapper">
                <?php if ( is_active_sidebar('storer-footer-widget-0') ): ?>
                    <div class="twp-col twp-col-md-4">
                        <?php dynamic_sidebar('storer-footer-widget-0'); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar('storer-footer-widget-1') ): ?>
                    <div class="twp-col twp-col-md-4">
                        <?php dynamic_sidebar('storer-footer-widget-1'); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar('storer-footer-widget-2') ): ?>
                    <div class="twp-col twp-col-md-4">
                        <?php dynamic_sidebar('storer-footer-widget-2'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

	<footer id="colophon" class="site-footer twp-site-footer">
		<div class="twp-container">
			<div class="twp-row twp-wrapper">
				<div class="twp-col twp-col-6">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'storer' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'storer' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'storer' ), 'storer', '<a href="https://www.themeinwp.com">ThemeInWP</a>' );
							?>
					</div><!-- .site-info -->
				</div>
				<div class="twp-col twp-col-6">
					<div class="twp-footer-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
									'menu_id'        => 'footer-menu',
									'menu_class' => 'twp-footer-nav-menu',
									'depth' => 1,
								)
							);
						?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div id="scroll-top">
		<i class="fa fa-angle-up"></i>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
