<?php
/**
 * CSS related hooks.
 *
 * This file contains hook functions which are related to CSS.
 *
 * @package Storer
 */

if (!function_exists('storer_trigger_custom_css_action')) :

    /**
     * Do action theme custom CSS.
     *
     * @since 1.0.0
     */
function storer_trigger_custom_css_action()
{
    $storer_default = storer_get_default_theme_options();

    $storer_header_color = storer_get_option('header_color');
    $storer_header_text_color = storer_get_option('header_text_color');
    $storer_primary_color = storer_get_option('primary_color');
    $storer_primary_bg_text_color = storer_get_option('primary_bg_text_color');
    $storer_secondary_color = storer_get_option('secondary_color');
    $storer_secondary_bg_text_color = storer_get_option('secondary_bg_text_color');



    // $storer_header_color_rgb = storer_hex2RGB($storer_header_color);
    // $storer_primary_color_rgb = storer_hex2RGB($storer_primary_color);
    // $storer_secondary_color_rgb = storer_hex2RGB($storer_secondary_color);

    // $header_color_rgb = ($storer_header_color_rgb['r'] . ", " . $storer_header_color_rgb['g'].", " . $storer_header_color_rgb['g']);
    // $primary_color_rgb = ($storer_primary_color_rgb['r'] . ", " . $storer_primary_color_rgb['g'].", " . $storer_primary_color_rgb['g']);
    // $secondary_color_rgb = ($storer_secondary_color_rgb['r'] . ", " . $storer_secondary_color_rgb['g'].", " . $storer_secondary_color_rgb['g']);
    

    $storer_root_font =  storer_get_option( 'storer_content_font', $storer_default['storer_content_font'] );
    $storer_heading_font =  storer_get_option( 'storer_heading_font', $storer_default['storer_heading_font'] );
    $storer_heading_weight =  storer_get_option( 'storer_heading_weight', $storer_default['storer_heading_weight'] );
    $storer_heading_case =  storer_get_option( 'storer_heading_case', $storer_default['storer_heading_case'] );
    ?>
        <style type="text/css">
            /* root font */
            <?php if(!empty($storer_root_font)){ ?>
                html body{
                    font-family: <?php echo esc_html($storer_root_font); ?>;
                }
            <?php } ?>
            /* title */
            <?php if(!empty($storer_heading_font)){ ?>
                body h1,
                body h2,
                body h3,
                body h4,
                body h5{
                    font-family: <?php echo esc_html($storer_heading_font); ?>;
                }
            <?php } ?>
            <?php if(!empty($storer_heading_weight)){ ?>
                body h2,
                body h3,
                body h4,
                body h5{
                    font-weight: <?php echo esc_html($storer_heading_weight); ?>;
                }
            <?php } ?>
            <?php if(!empty($storer_heading_case)){ ?>
                body .twp-section-title{
                    text-transform: <?php echo esc_html($storer_heading_case); ?>;
                }
            <?php } ?>
            /* HEADER COLOR */
            <?php if(!empty( $storer_header_color)){ ?>
                body .twp-preloader,
                body .twp-site-footer,
                body .twp-footer-widget-section,
                body .twp-header,
                body .twp-site-branding.sticky,
                body .twp-main-navigation .twp-feature-category-list{
                    background-color: <?php echo esc_html($storer_header_color); ?>;
                }
                
            <?php } ?>
            /* Header bg text color*/
            <?php if(!empty($storer_header_text_color)){ ?>
                body .twp-preloader,
                body .twp-site-footer,
                body .twp-header,
                body .twp-site-footer div.site-info a:hover,
                body .twp-site-footer ul a,
                body .twp-site-footer ul a:visited,
                body .twp-header a,
                body .twp-header button,
                body .twp-header a:visited,
                body .twp-header button:visited,
                body .twp-main-navigation .twp-feature-category-list a,
                body .twp-footer-widget-section,
                body .twp-footer-widget-section a,
                body .twp-footer-widget-section a:visited,
                body .twp-footer-widget-section .twp-btn-section .button,
                body .twp-footer-widget-section .twp-btn-section .button:visited,
                .twp-footer-widget-section .twp-price .price del,
                .twp-footer-widget-section .woocommerce ul.products li.product .twp-price .price del{
                    color: <?php echo esc_html($storer_header_text_color); ?>;
                }
                
                body .twp-menu-icon span:before,
                body .twp-menu-icon span:after,
                body .twp-preloader .twp-circle{
                    background-color: <?php echo esc_html($storer_header_text_color); ?>;
                }
                

                
            <?php } ?>
            /* primary color */
            <?php if(!empty($storer_primary_color)){ ?>
                
                body .twp-sale,
                body .onsale,
                body .twp-sale-badge span.onsale,
                body .product span.onsale,
                body .twp-category a,
                body .post-navigation a,
                body .posts-navigation a,
                body .twp-search-field button[type=submit]:hover,
                body .twp-search-field button[type=submit]:focus,
                body .wp-block-gallery .slick-dots .slick-active button,
                body .widget_media_gallery .slick-dots .slick-active button,
                body .twp-slick .slick-dots .slick-active button,
                body .twp-page-title::after,
                body .twp-btn.twp-primary-btn,
                body #scroll-top:hover,
                body .twp-nav-menu .twp-menu-description,
                body .widget .search-form .search-submit,
                body .widget .tagcloud a,
                body #yith-wcwl-popup-message,
                body .twp-404-section .search-form .search-submit,
                body .twp-minicart-content .woocommerce .widget_shopping_cart .buttons .button,
                body .twp-minicart-content .woocommerce.widget_shopping_cart .buttons .button,
                .woocommerce div .wishlist_table .product-name .button:hover,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a,
                .woocommerce div.twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-button,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button:hover,
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit],
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit],
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a,
                body .widget.twp-woocommerce-widget.widget_price_filter button:hover,
                body .twp-footer-widget-section .widget.widget_price_filter button:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget a.button:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget a.button:hover,
                .woocommerce div .product div.woocommerce-product-gallery a.woocommerce-product-gallery__trigger:after,
                .woocommerce div .product .summary form.cart button,
                .woocommerce div .product .summary .woocommerce-variation-add-to-cart button,
                .woocommerce div .product .twp-product-summary form.cart button,
                .woocommerce div .product .twp-product-summary .woocommerce-variation-add-to-cart button{
                    background-color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body a:hover,
                body .twp-post-title-md a:hover,
                body .twp-meta-tag .twp-icon,
                body .twp-meta-tag-secondary a:hover,
                body .twp-archive-post .entry-footer .cat-links a,
                body .twp-archive-post .entry-footer .tags-links a,
                body .twp-archive-post .entry-footer .cat-links a:visited,
                body .twp-archive-post .entry-footer .tags-links a:visited,
                body .twp-compare-icon a.button:hover,
                body .twp-compare-icon a.button.alt:hover,
                body .twp-compare-icon a.compare:hover,
                body .twp-quick-view-icon a.button:hover,
                body .twp-quick-view-icon a.button.alt:hover,
                body .twp-quick-view-icon a.compare:hover,
                body .twp-product-wishlist-icon a.button:hover,
                body .twp-product-wishlist-icon a.button.alt:hover,
                body .twp-product-wishlist-icon a.compare:hover,
                body .twp-product .twp-btn-section a:hover,
                body .twp-site-feature .twp-user .twp-content a:hover,
                body .twp-site-feature .twp-cart .twp-content a:hover,
                body .twp-site-feature .twp-cart .twp-cart-counter,
                body .twp-site-feature .twp-cart .twp-wishlist-counter,
                body .twp-site-feature .twp-wishlist .twp-cart-counter,
                body .twp-site-feature .twp-wishlist .twp-wishlist-counter,
                body .twp-arrow .slick-arrow,
                body .wp-block-gallery .slick-arrow,
                body .widget_media_gallery .slick-arrow,
                body .twp-slick .slick-arrow,
                body .twp-title-style-1 a,
                body .mfp-container .mfp-arrow-left:hover:before,
                body .mfp-container .mfp-arrow-right:hover:before,
                body .desktop ul.twp-nav-menu > li .sub-menu a:hover,
                body .desktop div.twp-nav-menu > ul > li .children a:hover,
                body .desktop ul.twp-nav-menu > li > a:hover,
                body .desktop div.twp-nav-menu > ul > li > a:hover,
                body .twp-single-post .entry-footer .twp-icon,
                body .twp-single-post .entry-footer i,
                body .twp-single-post blockquote p:before,
                body .twp-single-post blockquote p:after,
                body .twp-single-post blockquote cite,
                body .widget.widget_calendar a,
                body .widget.widget_calendar a:visited,
                body .twp-header a:hover,
                body .twp-header a:focus,
                body .twp-header button:hover,
                body .twp-header button:focus,
                body .twp-header .twp-feature:hover,
                body .twp-header .twp-feature:focus,
                .woocommerce div div .woocommerce-breadcrumb a:hover,
                .woocommerce div .product .stock.out-of-stock,
                body .twp-404-section .page-title,
                div.woocommerce ul.shop_table .product-remove a:before,
                div.woocommerce table.shop_table .product-remove a:before,
                div.woocommerce table.twp-cart-table tfoot .twp-icon,
                body .twp-minicart-content .woocommerce ul.cart_list li .remove:before,
                body .twp-minicart-content .woocommerce ul.product_list_widget li .remove:before,
                body .widget.twp-woocommerce-widget li .count,
                body .twp-footer-widget-section .widget li .count,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget .clear-all:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget .clear-all:hover,
                .woocommerce div .twp-single-product .twp-product-summary form .twp-quantity-section-icon .button:hover,
                .woocommerce div .twp-single-product .twp-product-summary form .twp-quantity-section-icon .compare:hover,
                .woocommerce div .product .summary .product_meta span a:hover,
                .woocommerce div .product .twp-product-summary .product_meta span a:hover,
                .woocommerce div ul.products .twp-product .twp-btn-section .button:hover,
                body #yith-quick-view-modal #yith-quick-view-close ,
                body .return-to-shop-- a.button  {
                    color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body .widget.twp-woocommerce-widget ul.product_list_widget li .remove,
                body .twp-footer-widget-section .widget ul.product_list_widget li .remove,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget ul.products-list .remove,
                body .twp-footer-widget-section .widget.yith-woocompare-widget ul.products-list .remove{
                    color: <?php echo esc_html($storer_primary_color); ?> !important;
                }
                body .post-navigation a,
                body .posts-navigation a,
                body .twp-title-style-1 a,
                body .twp-btn.twp-primary-btn,
                .woocommerce div .product div.woocommerce-product-gallery a.woocommerce-product-gallery__trigger:before,
                .woocommerce div .product .summary form.cart button,
                .woocommerce div .product .summary .woocommerce-variation-add-to-cart button,
                .woocommerce div .product .twp-product-summary form.cart button,
                .woocommerce div .product .twp-product-summary .woocommerce-variation-add-to-cart button,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button:hover{
                    border-color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body .desktop .twp-nav-menu .twp-menu-description:before{
                    border-top-color: <?php echo esc_html($storer_primary_color); ?>;
                }
                
                

            <?php } ?>
            /* primary bg text color */
            <?php if(!empty($storer_primary_bg_text_color)){ ?>
                body .twp-sale,
                body .onsale,
                body .twp-sale-badge span.onsale,
                body .product span.onsale,
                body .twp-category a, 
                body .twp-category a:visited,
                body .post-navigation a,
                body .posts-navigation a,
                body .post-navigation a:visited,
                body .posts-navigation a:visited ,
                body .twp-search-field button[type=submit]:hover,
                body .twp-search-field button[type=submit]:focus,
                body .twp-btn.twp-primary-btn,
                body #scroll-top:hover,
                body .twp-nav-menu .twp-menu-description,
                body .widget .search-form .search-submit,
                body .widget .tagcloud a,
                body .widget .tagcloud a:visited,
                body #yith-wcwl-popup-message,
                body .twp-404-section .search-form .search-submit,
                body .twp-minicart-content .woocommerce .widget_shopping_cart .buttons .button,
                body .twp-minicart-content .woocommerce.widget_shopping_cart .buttons .button,
                .woocommerce div .wishlist_table .product-name .button:hover,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a,
                .woocommerce div.twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-button 
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button:hover,
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit],
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit],
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a,
                body .widget.twp-woocommerce-widget.widget_price_filter button:hover,
                body .twp-footer-widget-section .widget.widget_price_filter button:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget a.button:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget a.button:hover,
                .woocommerce div .product .summary form.cart button,
                .woocommerce div .product .summary .woocommerce-variation-add-to-cart button,
                .woocommerce div .product .twp-product-summary form.cart button,
                .woocommerce div .product .twp-product-summary .woocommerce-variation-add-to-cart button{
                    color: <?php echo esc_html($storer_primary_bg_text_color)?>;
                }
            <?php } ?>

            /* SECONDARY COLOR */
           
            <?php if(!empty($storer_secondary_color)){ ?>
                body .twp-meta-tag-secondary,
                body .twp-meta-tag-secondary .twp-icon,
                body .twp-meta-tag-secondary a,
                body .twp-meta-tag-secondary a:visited,
                body .twp-store-feature-post .twp-icon,
                body .twp-archive-post .entry-footer .cat-links a:hover,
                body .twp-archive-post .entry-footer .tags-links a:hover,
                body .twp-price .price,
                .woocommerce div ul.products li.product .twp-price .price,
                body .twp-mobile-menu .twp-mobile-close-icon button,
                body .comments-area .comment-respond .comment-form .logged-in-as a,
                body .comments-area .comment-list li .comment-reply-link,
                body .comments-area .comment-respond .comment-form .logged-in-as a:visited,
                body .comments-area .comment-list li .comment-reply-link:visited,
                body .comments-area #respond input#submit:hover,
                body .comments-area .comment-list li .comment-meta,
                body .widget.widget_calendar a:hover,
                body .twp-site-footer .site-info a,
                body .twp-site-footer .site-info a:visited,
                body .twp-site-footer ul a:hover,
                body .twp-main-navigation .twp-feature-category-list a:hover,
                body .twp-offcanvas-section .twp-close-section button,
                body .twp-footer-widget-section a:hover,
                .woocommerce div .woocommerce-breadcrumb a,
                .woocommerce div .woocommerce-breadcrumb a:visited,
                div.woocommerce ul.shop_table .product-remove a:hover:before,
                div.woocommerce table.shop_table .product-remove a:hover:before,
                body .twp-minicart-content .woocommerce ul.cart_list li .remove:hover:before,
                body .twp-minicart-content .woocommerce ul.product_list_widget li .remove:hover:before,
                body .widget.twp-woocommerce-widget ul.product_list_widget li .star-rating,
                body .twp-footer-widget-section .widget ul.product_list_widget li .star-rating,
                body .widget.twp-woocommerce-widget ul.product_list_widget li ins,
                body .twp-footer-widget-section .widget ul.product_list_widget li ins,
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .total span,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .total span,
                body .widget.twp-woocommerce-widget .star-rating:before,
                body .twp-footer-widget-section .widget .star-rating:before,
                body .widget.twp-woocommerce-widget .star-rating span:before,
                body .twp-footer-widget-section .widget .star-rating span:before,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget .clear-all,
                body .twp-footer-widget-section .widget.yith-woocompare-widget .clear-all,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget .clear-all:visited,
                body .twp-footer-widget-section .widget.yith-woocompare-widget .clear-all:visited,
                body .twp-footer-widget-section .twp-btn-section .button:hover,
                .woocommerce div .product .summary .price,
                .woocommerce div .product .twp-product-summary .price,
                .woocommerce div .product .twp-product-summary .woocommerce-grouped-product-list-item__price,
                .woocommerce div .product .summary .product_meta span,
                .woocommerce div .product .twp-product-summary .product_meta span,
                .woocommerce div .product div.woocommerce-tabs ul.tabs li a:active,
                body #yith-quick-view-modal #yith-quick-view-close:hover,
                body .return-to-shop-- a.button:hover,
                body .twp-arrow .slick-arrow:hover,
                body .wp-block-gallery .slick-arrow:hover,
                body .widget_media_gallery .slick-arrow:hover,
                body .twp-slick .slick-arrow:hover{
                    color: <?php echo esc_html($storer_secondary_color)?>;
                }
                body .widget.twp-woocommerce-widget ul.product_list_widget li .remove:hover,
                body .twp-footer-widget-section .widget ul.product_list_widget li .remove:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget ul.products-list .remove:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget ul.products-list .remove:hover{
                    color: <?php echo esc_html($storer_secondary_color)?> !important;
                }

                /* Background Color */
                body .twp-category a:hover,
                body .post-navigation a:hover,
                body .posts-navigation a:hover,
                body .twp-search-field button[type=submit],
                body .twp-btn.twp-primary-btn:hover,
                body .comments-area .comment-respond .comment-form .logged-in-as a:hover,
                body .comments-area .comment-list li .comment-reply-link:hover,
                body .comments-area #respond input#submit,
                body .widget .search-form .search-submit:hover,
                body .widget .tagcloud a:hover,
                body .twp-404-section .search-form .search-submit:hover,
                body .twp-minicart-content .woocommerce .widget_shopping_cart .buttons .button:hover,
                body .twp-minicart-content .woocommerce.widget_shopping_cart .buttons .button:hover,
                .woocommerce div .wishlist_table .product-name .button,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button,
                .woocommerce div.twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-form button,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a:hover,
                .woocommerce div.twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-button:hover,
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit]:hover,
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit]:hover,
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a:hover,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a:hover,
                body .widget.twp-woocommerce-widget.widget_price_filter .ui-slider-range,
                body .widget.twp-woocommerce-widget.widget_price_filter .ui-slider-handle,
                body .twp-footer-widget-section .widget.widget_price_filter .ui-slider-range,
                body .twp-footer-widget-section .widget.widget_price_filter .ui-slider-handle,
                .woocommerce div .product .summary form.cart button:hover,
                .woocommerce div .product .summary .woocommerce-variation-add-to-cart button:hover,
                .woocommerce div .product .twp-product-summary form.cart button:hover,
                .woocommerce div .product .twp-product-summary .woocommerce-variation-add-to-cart button:hover{
                  background-color: <?php echo esc_html($storer_secondary_color)?>;  
                }
                body .twp-product-count .twp-product-count-wrapper,
                body .twp-search-field button[type=submit],
                body .twp-btn.twp-primary-btn:hover,
                body .comments-area .comment-respond .comment-form .logged-in-as a,
                body .comments-area .comment-list li .comment-reply-link,
                body .comments-area #respond input#submit ,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button,
                .woocommerce .twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a:hover,
                .woocommerce div .product .summary form.cart button:hover,
                .woocommerce div .product .summary .woocommerce-variation-add-to-cart button:hover,
                .woocommerce div .product .twp-product-summary form.cart button:hover,
                .woocommerce div .product .twp-product-summary .woocommerce-variation-add-to-cart button:hover{
                    border-color: <?php echo esc_html($storer_secondary_color)?>;
                }

                
                
            <?php } ?>

            /*SECONDARY BG TEXT COLOR  */
            <?php if(!empty($storer_primary_bg_text_color)){ ?>
                body .twp-category a:hover,
                body .post-navigation a:hover,
                body .posts-navigation a:hover,
                body .twp-search-field button[type=submit],
                body .twp-search-field button[type=submit]:visited,
                body .twp-btn.twp-primary-btn:hover,
                body .comments-area .comment-respond .comment-form .logged-in-as a:hover,
                body .comments-area .comment-list li .comment-reply-link:hover,
                body .comments-area #respond input#submit,
                body .comments-area #respond input#submit:visited,
                body .widget .search-form .search-submit:hover,
                body .widget .tagcloud a:hover,
                body .twp-404-section .search-form .search-submit:hover,
                body .twp-minicart-content .woocommerce .widget_shopping_cart .buttons .button:hover,
                body .twp-minicart-content .woocommerce.widget_shopping_cart .buttons .button:hover,
                .woocommerce div .wishlist_table .product-name .button,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button,
                .woocommerce div.twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-form button,
                .woocommerce div.twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a:hover,
                .woocommerce div.twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-button:hover,
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit]:hover,
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit]:hover,
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a:hover,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a:hover,
                .woocommerce div .product .summary form.cart button:hover,
                .woocommerce div .product .summary .woocommerce-variation-add-to-cart button:hover,
                .woocommerce div .product .twp-product-summary form.cart button:hover,
                .woocommerce div .product .twp-product-summary .woocommerce-variation-add-to-cart button:hover{
                    color: <?php echo esc_html($storer_secondary_bg_text_color); ?>;
                }
                
            <?php } ?>


        </style>
<?php }
endif;
 