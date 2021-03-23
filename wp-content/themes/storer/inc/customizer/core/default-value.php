<?php
/**
 * Default Values.
 *
 * @package Storer
 */

if ( ! function_exists( 'storer_get_default_theme_options' ) ) :

	/**
	 * Get default theme options
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function storer_get_default_theme_options() {

        $storer_defaults = array();

        // Options.
        $storer_defaults['storer_product_search_placeholder']           = esc_html__( 'Search Products...', 'storer' );
        $storer_defaults['storer_product_search_category_placeholder']   = esc_html__( 'All Categories', 'storer' );
        $storer_defaults['storer_product_search_autocomplete']           = 1;

        //homepage fullwidth slider
        $storer_defaults['show_full_width_slider_section']      		= 1;

        //homepage category
        $storer_defaults['show_featured_categories_section']      		= 1;
        $storer_defaults['show_featured_categories_product_count']      = 'true';
        $storer_defaults['show_featured_categories_product_onsale_count']      = 'true';
        
        $storer_defaults['show_featured_product_section']      = 1;
        $storer_defaults['featured_product_title']      = esc_html__( 'Featured Product', 'storer' );
        $storer_defaults['featured_product_button_text']      = esc_html__( 'View All', 'storer' );
        $storer_defaults['featured_product_button_url']      = '#';
        $storer_defaults['featured_product_categories']      = '';
                
        $storer_defaults['show_latest_blog_section']      = 1;
        $storer_defaults['latest_blog_title']      = esc_html__( 'Latest Blog', 'storer' );
        $storer_defaults['latest_blog_categories']      = '';
        
        $storer_defaults['show_shop_features_section']      = 0;
        $storer_defaults['store_features_title_1']      = esc_html__( 'Free Shipping', 'storer' );
        $storer_defaults['store_features_title_2']      = esc_html__( '24/7 Support', 'storer' );
        $storer_defaults['store_features_title_3']      = esc_html__( 'Best Offer', 'storer' );
        $storer_defaults['store_features_title_4']      = esc_html__( 'Secure Payment', 'storer' );
        $storer_defaults['store_features_icon_1']      = ( 'fa fa-diamond');
        $storer_defaults['store_features_icon_2']      = ( 'fa fa-coffee');
        $storer_defaults['store_features_icon_3']      = ( 'fa fa fa-shopping-basket');
        $storer_defaults['store_features_icon_4']      = ( 'fa fa-anchor');

        // woocommerce setting
        $storer_defaults['woocommerce_global_alignment']      = 'content-align-right';
        $storer_defaults['woo_enable_breadcrumbs']      = 'true';
        $storer_defaults['woo_product_shop_page_row']      = 5;
        $storer_defaults['woo_product_shop_page_product_per_page']      = 20;

        $storer_defaults['show_advertise_feature_section']      = 0;

        // font and color
        $storer_defaults['storer_heading_font']                               = 'Open Sans';
        $storer_defaults['storer_heading_weight']                             = '500';
        $storer_defaults['storer_heading_case']                               = 'uppercase';
        $storer_defaults['storer_content_font']                               = 'Open Sans';

        $storer_defaults['header_color']                                        = '#0e263d';
        $storer_defaults['header_text_color']                                   = '#fff';
        $storer_defaults['primary_color']                                       = '#CA2625';
        $storer_defaults['primary_bg_text_color']                               = '#fff';
        $storer_defaults['secondary_color']                                     = '#F4A51C';
        $storer_defaults['secondary_bg_text_color']                             = '#fff';

        $storer_defaults['home_section_reorder_value']                             =  'full_width_banner_section_settings,storer_featured_categories_section_settings,storer_latest_product_section_settings,storer_latest_blog_section_settings,storer_features_section_settings,storer_advertise_section_settings,sidebar-widgets-front-page-fullwidth-sidebar';

	// Pass through filter.
	$storer_defaults = apply_filters( 'storer_filter_default_theme_options', $storer_defaults );

	return $storer_defaults;

	}

endif;
