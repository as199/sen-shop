<?php
/**
 * Option Panel
 *
 * @package Storer
 */
$default = storer_get_default_theme_options();

// Product Global Section.
$wp_customize->add_section('store_global_options_settings',
    array(
        'title'      => esc_html__('woocommerce Global Options', 'storer'),
        'priority'   => 9,
        'capability' => 'edit_theme_options',
        'panel'      => 'woocommerce',
    )
);

// Setting - show_site_title_section.
$wp_customize->add_setting('woocommerce_global_alignment',
    array(
        'default'           => $default['woocommerce_global_alignment'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('woocommerce_global_alignment',
    array(
        'label'    => esc_html__('Content Alignment', 'storer'),
        'section'  => 'store_global_options_settings',
        'type'        => 'select',
        'choices'     => array(
            'content-align-left' => esc_html__( 'Content - Store Sidebar', 'storer' ),
            'content-align-right' => esc_html__( 'Store Sidebar - Content', 'storer' ),
            'width-full-content' => esc_html__( 'Full Width Content', 'storer' )
        ),
    )
);


// Setting - show_site_title_section.
$wp_customize->add_setting('woo_enable_breadcrumbs',
    array(
        'default'           => $default['woo_enable_breadcrumbs'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('woo_enable_breadcrumbs',
    array(
        'label'    => esc_html__('Enable Breadcrumbs', 'storer'),
        'section'  => 'store_global_options_settings',
        'type'        => 'select',
        'choices'     => array(
            'yes'              => __( 'Yes', 'storer' ),
            'no' => __( 'No', 'storer' ),
        ),
    )
);



//=====================================================
//================== Shop Options ===================
//=====================================================

// Shop Section.
$wp_customize->add_section('store_product_shop_page_settings',
    array(
        'title'      => esc_html__('Shop Page', 'storer'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'panel'      => 'woocommerce',
    )
);


// Setting - show_site_title_section.
$wp_customize->add_setting('woo_product_shop_page_row',
    array(
        'default'           => $default['woo_product_shop_page_row'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('woo_product_shop_page_row',
    array(
        'label'    => esc_html__('Shop Product Columns', 'storer'),
        'section'  => 'store_product_shop_page_settings',
        'type'        => 'select',
        'choices'     => array(
            '2' => __( 'Two', 'storer' ),
            '3' => __( 'Three', 'storer' ),
            '4' => __( 'Four', 'storer' ),
            '5' => __( 'Five', 'storer' ),

        ),
    )
);

/*store_product_search_placeholder*/
$wp_customize->add_setting('woo_product_shop_page_product_per_page',
    array(
        'default'           => $default['woo_product_shop_page_product_per_page'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('woo_product_shop_page_product_per_page',
    array(
        'label'    => esc_html__('Products per Page', 'storer'),
        'section'  => 'store_product_shop_page_settings',
        'type'     => 'number',
        'priority' => 10,
    )
);


// Shop Section.
$wp_customize->add_section('store_product_page_settings',
    array(
        'title'      => esc_html__('Product Page', 'storer'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'panel'      => 'woocommerce',
    )
);

// Setting - show_site_title_section.
$wp_customize->add_setting('store_product_page_product_zoom',
    array(
        //'default'           => $default['store_product_page_product_zoom'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('store_product_page_product_zoom',
    array(
        'label'    => esc_html__('Enable Product Zoom', 'storer'),
        'section'  => 'store_product_page_settings',
        'type'        => 'select',
        'choices'     => array(
            'yes'              => __( 'Yes', 'storer' ),
            'no' => __( 'No', 'storer' ),
        ),
    )
);



// Setting - show_site_title_section.
$wp_customize->add_setting('store_product_page_related_products',
    array(
        //'default'           => $default['store_product_page_related_products'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('store_product_page_related_products',
    array(
        'label'    => esc_html__('Show Related Products', 'storer'),
        'section'  => 'store_product_page_settings',
        'type'        => 'select',
        'choices'     => array(
            'yes'              => __( 'Yes', 'storer' ),
            'no' => __( 'No', 'storer' ),
        ),
    )
);


// Setting - show_site_title_section.
$wp_customize->add_setting('store_product_page_related_products_per_row',
    array(
        //'default'           => $default['store_product_page_related_products_per_row'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('store_product_page_related_products_per_row',
    array(
        'label'    => esc_html__('Related Products per Rows', 'storer'),
        'section'  => 'store_product_page_settings',
        'type'        => 'select',
        'choices'     => array(
            '2' => __( 'Two', 'storer' ),
            '3' => __( 'Three', 'storer' ),
            '4' => __( 'Four', 'storer' ),
            '5' => __( 'Five', 'storer' ),
        ),
    )
);