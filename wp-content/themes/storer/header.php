<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storer
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="twp-m-0">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if( function_exists('wp_body_open') ){
        wp_body_open();
    } ?>

	<!-- store notice -->
    <?php if (class_exists('WooCommerce')) { ?>
	    <div class="woo-store-notice">
	        <?php woocommerce_demo_store(); ?>
	    </div>
    <?php }  ?>

	<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#skip-main-content"><?php esc_html_e( 'Skip to content', 'storer' ); ?></a>
	
	<?php $storer_header_image_url = get_header_image(); ?>
	<header id="masthead" class="site-header twp-header">
		<div class="twp-site-branding bg-image" id="site-branding" style="background-image:url('<?php echo esc_url($storer_header_image_url); ?>')">
			<div class="twp-wrapper">
				<div class="twp-logo">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$storer_description = get_bloginfo( 'description', 'display' );
					if ( $storer_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html($storer_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="twp-search-field">
					<?php storer_woo_product_search_form(); ?>
				</div>
				<div class="twp-site-feature twp-d-flex">
					<?php if ( class_exists('WooCommerce') ) { ?>
						<div class="twp-cart twp-feature" id="header-cart">
							<?php storer_woocommerce_header_cart(); ?>
						</div>
					<?php } ?>
					<?php if (function_exists('YITH_WCWL')){ ?>
						<div class="twp-wishlist twp-feature">
							<?php storer_woocommerce_header_wishlist(); ?>
						</div>
					<?php } ?>
					<?php if ( class_exists('WooCommerce') ) { ?>
					<div class="twp-user twp-feature" id="header-user">
						<?php storer_my_account_dropdown(); ?>
					</div>
					<?php } ?>
					
					<?php if ( is_active_sidebar( 'off-canvas-sidebar' ) ) {?>
						<div class="twp-offcanvas twp-feature" id="twp-offcanvas">
							<button>
								<span class="twp-icon"><i class="fa fa-bars"></i></span>
								<span class="twp-caption"><?php esc_html_e( 'menu', 'storer' ); ?></span>
							</button>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div id="sticky-header" style="height:1px;"></div>
		<nav id="site-navigation" class="main-navigation twp-main-navigation">
			<div class="twp-wrapper twp-d-flex">
				<div class="twp-feature-category">
					<a href="javascript:void(0)" class="twp-feature-category-caption twp-d-flex" id="featured-category">
						<span class="twp-icon twp-feature-menu-icon"><i class="fa fa-reorder"></i></span>
						<span class="twp-caption"><?php esc_html_e( 'Featured category', 'storer' ); ?></span>
						<span class="twp-icon twp-arrow-icon"><i class="fa fa-angle-down"></i></span>
					</a>
					<div class="twp-feature-category-list" id="nav-feature-cat">
						<?php if (class_exists( 'woocommerce' )) {
							$args = array(
								'taxonomy'     => 'product_cat',
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count'   => true,
								'pad_counts'   => false,
								'hierarchical' => true,
								'title_li'     => '',
							);
						} else {
							$args = array(
								'taxonomy'     => 'category',
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count'   => true,
								'pad_counts'   => false,
								'hierarchical' => true,
								'title_li'     => '',
							);
						}?>
						<ul>
							<?php wp_list_categories( $args ); ?>
						</ul>
						<a href="javascript:void(0)" class="skip-link-featured-cat-end screen-reader-text"></a>
					</div>
				</div>
				<div class="twp-nav-menu-section desktop">
					<div class="twp-nav-menu-icon">
						<a href="javascript:void(0)" class="twp-menu-icon" id="menu-icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
					<div class="twp-nav-menu-wrapper">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary-menu',
									'menu_id'        => 'primary-menu',
									'menu_class' => 'twp-nav-menu'
								)
							);
						?>
					</div>
				</div>
				<div class="twp-social-menu-section">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social-menu',
								'menu_id'        => 'social-menu',
								'menu_class' => 'twp-social-menu twp-social-menu-with-bg'
							)
						);
					?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- offcanvas -->
	<?php if ( is_active_sidebar( 'off-canvas-sidebar' ) ) {?>
		<div class="twp-offcanvas-section">
			<div class="twp-close-section" id="offcanvas-close">
				<button>
					<i class="fa fa-close"></i>
				</button>
			</div>
			<?php dynamic_sidebar( 'off-canvas-sidebar' ); ?>

		</div>
	<?php } ?>
	<div class="twp-body-overlay" id="overlay">
	</div>
	<div class="twp-mobile-menu">
		<a href="javascript:void(0)" class="skpi-link-responsive-menu-start"></a>
		<div class="twp-mobile-close-icon" id="mobile-menu-close">
			<button><i class="fa fa-close"></i></button>
		</div>
		<div class="twp-mobile-menu-wraper"></div>
		<a href="javascript:void(0)" class="skpi-link-responsive-menu-end"></a>
	</div>
	<div class="twp-preloader" id="preloader">
		<div class="twp-wrapper" id="preloader-wrapper">
			<div class="twp-icon">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="twp-circle-section">
				<div class="twp-circle twp-circle-1"></div>
				<div class="twp-circle twp-circle-2"></div>
				<div class="twp-circle twp-circle-3"></div>
			</div>
		</div>

	</div>
	<div id="skip-main-content">