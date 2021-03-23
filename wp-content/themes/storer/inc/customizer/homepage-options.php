<?php
/**
 * Home/Front page section settings
 *
 * @package Storer
 */

$default = storer_get_default_theme_options();
// Add Homepage Options Panel.
$wp_customize->add_panel( 'general_setting',
    array(
        'title'      => esc_html__( 'General Settings Options', 'storer' ),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
    )
);
// Add Homepage Options Panel.
$wp_customize->add_panel( 'homepage_option_panel',
    array(
        'title'      => esc_html__( 'HomePage Section Settings', 'storer' ),
        'priority'   => 200,
        'capability' => 'edit_theme_options',
    )
);

// Main Bannner Section.
$wp_customize->add_section( 'full_width_banner_section_settings',
    array(
        'title'      => __( 'Full Width Slider Section', 'storer' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'homepage_option_panel',
    )
);

// Setting - show_full_width_slider_section.
$wp_customize->add_setting( 'show_full_width_slider_section',
    array(
        'default'           => $default['show_full_width_slider_section'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'show_full_width_slider_section',
    array(
        'label'    => __( 'Enable Full Width Slider', 'storer' ),
        'section'  => 'full_width_banner_section_settings',
        'type'     => 'checkbox',
        'priority' => 100,
    )
);


$slider_number = 3;

for ($i = 1; $i <= $slider_number; $i++) {


    $wp_customize->add_setting("storer_slider_page".$i,
        array(
            'sanitize_callback' => 'storer_sanitize_dropdown_pages',
        )
    );
    $wp_customize->add_control("storer_slider_page".$i,
        array(
            'label' => esc_html__('Select Page - ', 'storer').$i,
            'section' => 'full_width_banner_section_settings',
            'type' => 'dropdown-pages',
            'priority' => 100,
        )
    );

    $wp_customize->add_setting("storer_page_caption_position".$i,
        array(
            'default' => 'left',
            'sanitize_callback' => 'storer_sanitize_select',
        )
    );

    $wp_customize->add_control("storer_page_caption_position".$i,
        array(
            'label' => esc_html__('Caption Position - ', 'storer').$i,
            'section' => 'full_width_banner_section_settings',
            'type' => 'select',
            'choices' => array(
                'left' => esc_html__('Left', 'storer'),
                'right' => esc_html__('Right', 'storer'),
                'center' => esc_html__('Center', 'storer'),
            ),
            'priority' => 100,
        )
    );

    // Setting slider readmore text.
    $wp_customize->add_setting("storer_button_text".$i,
        array(
            'default' => esc_html__('Shop Now', 'storer'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control("storer_button_text".$i,
        array(
            'label' => esc_html__('Button Text - ', 'storer').$i,
            'section' => 'full_width_banner_section_settings',
            'type' => 'text',
            'priority' => 100,
        )
    );

    // Setting slider readmore link.
    $wp_customize->add_setting("storer_button_link".$i,
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control("storer_button_link".$i,
        array(
            'label' => esc_html__('Button Link - ', 'storer').$i,
            'section' => 'full_width_banner_section_settings',
            'type' => 'text',
            'priority' => 100,
        )
    );

}



// Featured Category Section.
$wp_customize->add_section('storer_featured_categories_section_settings',
    array(
        'title' => esc_html__('Featured Product Categories', 'storer'),
        'capability' => 'edit_theme_options',
        'panel' => 'homepage_option_panel',
    )
);


// Setting - featured category post.
$wp_customize->add_setting('show_featured_categories_section',
    array(
        'default' => $default['show_featured_categories_section'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_featured_categories_section',
    array(
        'label' => esc_html__('Enable Featured Category Section', 'storer'),
        'section' => 'storer_featured_categories_section_settings',
        'type' => 'checkbox',
        'priority' => 22,

    )
);

$wp_customize->add_setting('storer_featured_categories_section_title',
    array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('storer_featured_categories_section_title',
    array(
        'label' => esc_html__('Featured Category Section Title', 'storer'),
        'section' => 'storer_featured_categories_section_settings',
        'type' => 'text',
        'priority' => 100,

    )
);


for ($i = 1; $i <= 6; $i++) {
    //Slide Details
    $wp_customize->add_setting("featured_categories_" . $i,
        array(
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(new Storer_Dropdown_Taxonomies_Control($wp_customize, 'featured_categories_' . $i,
        array(
            'label' => esc_html__('Product Category - ', 'storer'). $i,
            'section' => 'storer_featured_categories_section_settings',
            'type' => 'dropdown-taxonomies',
            'taxonomy' => 'product_cat',
            'priority' => 100,
        )));
}


// Setting - select_main_slider_section_mode.
$wp_customize->add_setting('show_featured_categories_product_count',
    array(
        'default' => $default['show_featured_categories_product_count'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('show_featured_categories_product_count',
    array(
        'label' => esc_html__('Show Product Count', 'storer'),
        'section' => 'storer_featured_categories_section_settings',
        'type' => 'select',
        'choices' => array(
            'true' => esc_html__("Yes", 'storer'),
            'false' => esc_html__("No", 'storer'),
        ),
        'priority' => 100,
    ));

// Setting - select_main_slider_section_mode.
$wp_customize->add_setting('show_featured_categories_product_onsale_count',
    array(
        'default' => $default['show_featured_categories_product_onsale_count'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_select',
    )
);

$wp_customize->add_control('show_featured_categories_product_onsale_count',
    array(
        'label' => esc_html__('Show On-sale Product Count', 'storer'),
        'section' => 'storer_featured_categories_section_settings',
        'type' => 'select',
        'choices' => array(
            'true' => esc_html__("Yes", 'storer'),
            'false' => esc_html__("No", 'storer'),
        ),
        'priority' => 100,
    ));



// Featured Products Section
$wp_customize->add_section('storer_latest_product_section_settings',
    array(
        'title' => esc_html__('Featured Products', 'storer'),
        'capability' => 'edit_theme_options',
        'panel' => 'homepage_option_panel',
    )
);

$wp_customize->add_setting('show_featured_product_section',
    array(
        'default' => $default['show_featured_product_section'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_featured_product_section',
    array(
        'label' => esc_html__('Enable Featured Product Section', 'storer'),
        'section' => 'storer_latest_product_section_settings',
        'type' => 'checkbox',
        'priority' => 22,

    )
);


$wp_customize->add_setting( 'featured_product_title',
    array(
        'default'           => $default['featured_product_title'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'featured_product_title',
    array(
        'label'    => __( 'Featured Product Section Title', 'storer' ),
        'section'  => 'storer_latest_product_section_settings',
        'type'     => 'text',
        'priority' => 100,
    )
);


$wp_customize->add_setting( 'featured_product_button_text',
    array(
        'default'           => $default['featured_product_button_text'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'featured_product_button_text',
    array(
        'label'    => __( 'Featured Product Button Title', 'storer' ),
        'section'  => 'storer_latest_product_section_settings',
        'type'     => 'text',
        'priority' => 100,
    )
);

$wp_customize->add_setting( 'featured_product_button_url',
    array(
        'default'           => $default['featured_product_button_url'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'featured_product_button_url',
    array(
        'label'    => __( 'Featured Product Button URL', 'storer' ),
        'section'  => 'storer_latest_product_section_settings',
        'type'     => 'text',
        'priority' => 100,
    )
);



$wp_customize->add_setting("featured_product_categories",
    array(
        'default' => $default["featured_product_categories"],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(new Storer_Dropdown_Taxonomies_Control($wp_customize, 'featured_product_categories',
    array(
        'label' => esc_html__('Select Featured Product Categories', 'storer'),
        'section' => 'storer_latest_product_section_settings',
        'type' => 'dropdown-taxonomies',
        'taxonomy' => 'product_cat',
        'priority' => 100,
    )));


// Latest Blog Section
$wp_customize->add_section('storer_latest_blog_section_settings',
    array(
        'title' => esc_html__('Latest Blog', 'storer'),
        'capability' => 'edit_theme_options',
        'panel' => 'homepage_option_panel',
    )
);

$wp_customize->add_setting('show_latest_blog_section',
    array(
        'default' => $default['show_latest_blog_section'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_latest_blog_section',
    array(
        'label' => esc_html__('Enable Latest Blog Section', 'storer'),
        'section' => 'storer_latest_blog_section_settings',
        'type' => 'checkbox',
        'priority' => 22,

    )
);


$wp_customize->add_setting( 'latest_blog_title',
    array(
        'default'           => $default['latest_blog_title'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'latest_blog_title',
    array(
        'label'    => __( 'Latest Blog Section Title', 'storer' ),
        'section'  => 'storer_latest_blog_section_settings',
        'type'     => 'text',
        'priority' => 100,
    )
);


$wp_customize->add_setting("latest_blog_categories",
    array(
        'default' => $default["latest_blog_categories"],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(new Storer_Dropdown_Taxonomies_Control($wp_customize, 'latest_blog_categories',
    array(
        'label' => esc_html__('Select Featured Product Categories', 'storer'),
        'section' => 'storer_latest_blog_section_settings',
        'type'            => 'dropdown-taxonomies',
        'taxonomy'        => 'category',
        'priority' => 100,
    )));


// Storer feature section
$wp_customize->add_section('storer_features_section_settings',
    array(
        'title' => esc_html__('Store Features', 'storer'),
        'capability' => 'edit_theme_options',
        'panel' => 'homepage_option_panel',
    )
);


// Setting - show shop feature.
$wp_customize->add_setting('show_shop_features_section',
    array(
        'default' => $default['show_shop_features_section'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_shop_features_section',
    array(
        'label' => esc_html__('Enable Features Section', 'storer'),
        'section' => 'storer_features_section_settings',
        'type' => 'checkbox',
        'priority' => 100,

    )
);

$features_number = 4;

for ($i = 1; $i <= $features_number; $i++) {

    //Slide Details
    $wp_customize->add_setting('store_features_' . $i . '_section_title',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        new Storer_Section_Title(
            $wp_customize,
            'store_features_' . $i . '_section_title',
            array(
                'label' => esc_html__('Set Features ', 'storer') . ' - ' . $i,
                'section' => 'storer_features_section_settings',
                'priority' => 100,

            )
        )
    );

    $wp_customize->add_setting("store_features_title_" . $i,
        array(
            'default' => $default["store_features_title_" . $i],
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control("store_features_title_" . $i,
        array(
            'label' => esc_html__('Feature Title', 'storer'),
            'section' => 'storer_features_section_settings',
            'type' => 'text',
            'priority' => 100,

        )
    );

    $wp_customize->add_setting("store_features_icon_" . $i,
        array(
            'default' => $default["store_features_icon_" . $i],
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control("store_features_icon_" . $i,
        array(
            'label' => esc_html__('Feature icon (Font Awesome)', 'storer'),
            'section' => 'storer_features_section_settings',
            'type' => 'text',
            'priority' => 100,

        )
    );

    $wp_customize->add_setting("store_features_desc_" . $i,
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control("store_features_desc_" . $i,
        array(
            'label' => esc_html__('Feature descriptions', 'storer'),
            'section' => 'storer_features_section_settings',
            'type' => 'text',
            'priority' => 100,

        )
    );

}


// Storer advertise section
$wp_customize->add_section('storer_advertise_section_settings',
    array(
        'title' => esc_html__('Store Advertise Section', 'storer'),
        'capability' => 'edit_theme_options',
        'panel' => 'homepage_option_panel',
    )
);


// Setting - show add section feature.
$wp_customize->add_setting('show_advertise_feature_section',
    array(
        'default' => $default['show_advertise_feature_section'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'storer_sanitize_checkbox',
    )
);

$wp_customize->add_control('show_advertise_feature_section',
    array(
        'label' => esc_html__('Enable Advertise Section', 'storer'),
        'section' => 'storer_advertise_section_settings',
        'type' => 'checkbox',
        'priority' => 100,

    )
);

for ($add = 1; $add <= 3; $add++) {

    $wp_customize->add_setting('show_advertise_image_section_'. $add,
        array(
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'storer_sanitize_image',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'show_advertise_image_section_'.$add,
            array(
                'label'       => esc_html__('Upload Advertise Image - ', 'storer'). $add,
                'section'     => 'storer_advertise_section_settings',
                'priority'    => 120,
            )
        )
    );

    $wp_customize->add_setting( 'advertise_section_title_'. $add,
        array(
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'advertise_section_title_'. $add,
        array(
            'label'    => __( 'Advertise Section Title - ', 'storer' ). $add,
            'section'  => 'storer_advertise_section_settings',
            'type'     => 'text',
            'priority' => 120,
        )
    );


    // Setting slider readmore link.
    $wp_customize->add_setting("storer_advertise_link_".$add,
        array(
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control("storer_advertise_link_".$add,
        array(
            'label' => esc_html__('Advertise Link - ', 'storer').$add,
            'section' => 'storer_advertise_section_settings',
            'type' => 'text',
            'priority' => 120,
        )
    );
}


$home_section_reorder_value = storer_get_option( 'home_section_reorder_value', $default['home_section_reorder_value'] );
$home_section_reorder_value = explode(",",$home_section_reorder_value );

$j = 1;
foreach( $home_section_reorder_value as $home_section_reorder ){

    if(  $home_section_reorder != 'sidebar-widgets-front-page-fullwidth-sidebar' ){

        $wp_customize->get_section( $home_section_reorder )->priority = $j;

    }
    
    $j ++;
}



