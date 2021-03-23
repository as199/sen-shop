<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Storer
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function storer_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

    if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
        $classes[] = 'no-sidebar';
    }

    $woocommerce_global_alignment = storer_get_option( 'woocommerce_global_alignment' );

    if ($woocommerce_global_alignment == 'content-align-left') {
        $classes[]= 'left-sidebar';
    }
    elseif ($woocommerce_global_alignment == 'width-full-content') {
        $classes[]= 'no-sidebar';
    }
    else{
        $classes[]= 'right-sidebar';

    }

	return $classes;
}
add_filter( 'body_class', 'storer_body_classes' );



/**
 * Descriptions on Header Menu
 * @param object $args , arguments passed to wp_nav_menu()
 * @return string $item_output
 */
function storer_primary_menu_desc($item_output, $item, $depth, $args)
{

    if ('primary-menu' == $args->theme_location && $item->description)
        $item_output = str_replace('</a>', '<span class="twp-menu-description">' . $item->description . '</span></a>', $item_output);

    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'storer_primary_menu_desc', 10, 4);


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function storer_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'storer_pingback_header' );


/**
 * Check if given term has child terms
 *
 * @param Integer $term_id
 * @param String $taxonomy
 *
 * @return Boolean
 */
function storer_list_popular_taxonomies($taxonomy = 'product_tag', $title = "Popular Tags")
{
    $popular_taxonomies = get_terms(array(
        'taxonomy' => $taxonomy,
        'number' => 5,
        'orderby' => 'count',
        'order' => 'DESC',
        'hide_empty' => true,
    ));

    $html = '';
    if (isset($popular_taxonomies) && !empty($popular_taxonomies)):
        $html .= '<div class="woo-popular-taxonomies-lists clearfix">';
        $html .= '<strong>';
        $html .= $title;
        $html .= ':</strong>';
        $html .= '<ul>';
        foreach ($popular_taxonomies as $tax_term):
            $html .= '<li>';
            $html .= '<a href="' . esc_url(get_term_link($tax_term)) . '">';
            $html .= $tax_term->name;
            $html .= '</a>';
            $html .= '</li>';
        endforeach;
        $html .= '</ul>';
        $html .= '</div>';
    endif;
    echo wp_kses($html);
}

