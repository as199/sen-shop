<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function storer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'storer' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'storer' ),
			'before_widget' => '<section id="%1$s" class="widget twp-woocommerce-widget  storer-twp-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Off-Canvas Sidebar', 'storer' ),
			'id'            => 'off-canvas-sidebar',
			'description'   => esc_html__( 'Add widgets for offcanvas-sidebar.', 'storer' ),
			'before_widget' => '<section id="%1$s" class="widget twp-woocommerce-widget storer-twp-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Front Page Fullwidth Sidebar', 'storer' ),
			'id'            => 'front-page-fullwidth-sidebar',
			'description'   => esc_html__( 'Add widgets for offcanvas-sidebar.', 'storer' ),
			'before_widget' => '<section id="%1$s" class="twp-home-widget-section twp-section-border-top %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title twp-section-title">',
			'after_title'   => '</h2>',
		)
	);


    register_sidebar(array(
        'name' => esc_html__('Shop Sidebar', 'storer'),
        'id' => 'shop-sidebar',
        'description' => esc_html__('Add widgets to shop sidebar section.', 'storer'),
        'before_widget' => '<div id="%1$s" class="widget storer-widget twp-woocommerce-widget storer-twp-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title widget-title-1"><span>',
        'after_title' => '</span></h2>',
    ));


    $footer_column_layout = 3;

    for( $i = 0; $i < $footer_column_layout; $i++ ){
    	
    	if( $i == 0 ){ $count = esc_html__('One','storer'); }
    	if( $i == 1 ){ $count = esc_html__('Two','storer'); }
    	if( $i == 2 ){ $count = esc_html__('Three','storer'); }

	    register_sidebar( array(
	        'name' => esc_html__('Footer Widget ', 'storer').$count,
	        'id' => 'storer-footer-widget-'.$i,
	        'description' => esc_html__('Add widgets here.', 'storer'),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widget-title">',
	        'after_title' => '</h2>',
	    ));
	}

}
add_action( 'widgets_init', 'storer_widgets_init' );


/**
 * widget-base.
 */
require get_template_directory() . '/inc/widgets/widget-base.php';
if (class_exists( 'woocommerce' )) {
	require get_template_directory() . '/inc/widgets/grid-product.php';
	require get_template_directory() . '/inc/widgets/product-carousel.php';
}