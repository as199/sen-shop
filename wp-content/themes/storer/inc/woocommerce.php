<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Storer
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function storer_woocommerce_setup()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'storer_woocommerce_setup');

/**
 * Woocommerce Enqueue Scripts.
 */
function storer_woocommerce_scripts() {

	wp_enqueue_style( 'storer-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css' );

}
add_action( 'wp_enqueue_scripts', 'storer_woocommerce_scripts' );


/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function storer_woocommerce_active_body_class($classes)
{
    $classes[] = 'woocommerce-twp-active';

    return $classes;
}

add_filter('body_class', 'storer_woocommerce_active_body_class');

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('wp_footer', 'woocommerce_demo_store', 10);


if (!function_exists('storer_woocommerce_template_hooks')) :

    function storer_woocommerce_template_hooks()
    {

        remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash');
        remove_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title');
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

        add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 20);

        add_action('storer_woocommerce_template_loop_product_link_open', 'woocommerce_template_loop_product_link_open');
        add_action('storer_woocommerce_template_loop_product_link_close', 'woocommerce_template_loop_product_link_close');
        add_action('storer_woocommerce_show_product_loop_sale_flash', 'woocommerce_show_product_loop_sale_flash');
        //add_action('storer_woocommerce_template_loop_product_thumbnail', 'woocommerce_template_loop_product_thumbnail');
        add_action('storer_woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
        add_action('storer_woocommerce_template_loop_rating', 'woocommerce_template_loop_rating', 5);
        add_action('storer_woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price');
        add_action('storer_woocommerce_template_loop_add_to_cart', 'woocommerce_template_loop_add_to_cart');

    }
endif;

add_action('wp_loaded', 'storer_woocommerce_template_hooks');


/**
 * Remove the breadcrumbs
 */
add_action('wp_loaded', 'storer_replace_wc_breadcrumbs');
function storer_replace_wc_breadcrumbs()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
    $enable_breadcrumbs = storer_get_option('woo_enable_breadcrumbs');
    if ($enable_breadcrumbs == 'yes') {
        add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
    }

}


if (!function_exists('woocommerce_after_add_to_cart_hook')) {
    /**
     * Before Content.
     *
     * Wraps all WooCommerce content in wrappers which match the theme markup.
     *
     * @return void
     */
    function woocommerce_after_add_to_cart_hook()
    {
        $iconset = 0;
        $YITH_WCWL = false;
        $yith_wcqv_install = false;
        $YITH_Woocompare = false;

        $icons = array();
        if (class_exists('YITH_WCWL')) {
            $iconset += 1;
            $YITH_WCWL = true;
        }
        if (function_exists('yith_wcqv_install')) {
            $iconset += 1;
            $yith_wcqv_install = true;

        }
        if (class_exists('YITH_Woocompare')) {
            $iconset += 1;
            $YITH_Woocompare = true;
        }
        if ($iconset > 0):
            ?>  
            <div class="twp-quantity-section-icon">
                <?php if ($YITH_WCWL == true): ?>
                    <div class="twp-icon twp-wishlist-icon">
                        <?php do_action('storer_woocommerce_add_to_wishlist_button'); ?>
                    </div>
                <?php endif; ?>
                <?php if ($YITH_Woocompare == true): ?>
                <div class="twp-icon twp-compare-icon">
                    <?php do_action('storer_woocommerce_yith_compare_button'); ?>
                </div>
                <?php endif; ?>
            </div>
        <?php
        endif;
    }
}
add_action('woocommerce_on_add_to_cart_form_custom', 'woocommerce_after_add_to_cart_hook');


if (!function_exists('storer_woocommerce_wrapper_before')) {
    /**
     * Before Content.
     *
     * Wraps all WooCommerce content in wrappers which match the theme markup.
     *
     * @return void
     */
    function storer_woocommerce_wrapper_before()
    {
        ?>
        <main id="primary" class="site-main">
        <?php
    }
}
add_action('woocommerce_before_main_content', 'storer_woocommerce_wrapper_before');

if (!function_exists('storer_woocommerce_wrapper_after')) {
    /**
     * After Content.
     *
     * Closes the wrapping divs.
     *
     * @return void
     */
    function storer_woocommerce_wrapper_after()
    {
        ?>
        </main><!-- #main -->
        <?php
    }
}
add_action('woocommerce_after_main_content', 'storer_woocommerce_wrapper_after');


//Shop page control
if (!function_exists('storer_loop_shop_columns')) {
    function storer_loop_shop_columns($cols)
    {
        // $cols contains the current number of products per page based on the value stored on Options -> Reading
        // Return the number of products you wanna show per page.
        $cols = storer_get_option('woo_product_shop_page_row');
        return $cols;
    }
}
add_filter('loop_shop_columns', 'storer_loop_shop_columns', 20);

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function storer_woocommerce_products_per_page()
{
    $product_loop =  storer_get_option('woo_product_shop_page_product_per_page');
    return $product_loop;
}
add_filter('loop_shop_per_page', 'storer_woocommerce_products_per_page');


if (!function_exists('storer_onsale_product_count')) {
    function storer_onsale_product_count($category_id = 0)
    {
        $args = array(
            'post_type' => 'product',
            'post_status' => 'published',
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'id',
                    'terms' => $category_id
                ),
                array(
                    'taxonomy' => 'product_visibility',
                    'terms' => array('exclude-from-catalog'),
                    'field' => 'name',
                    'operator' => 'NOT IN',
                ),
            ),
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'relation' => 'OR',
                    array(
                        'key' => '_sale_price',
                        'value' => 0,
                        'compare' => '>',
                        'type' => 'numeric'
                    ),
                    array(
                        'key' => '_min_variation_sale_price',
                        'value' => 0,
                        'compare' => '>',
                        'type' => 'numeric'
                    )
                ),
            )
        );

        $query = new WP_Query($args);
        $count = $query->found_posts;
        return absint($count);
    }
}

if (!function_exists('storer_product_count')) {
    function storer_product_count($category_id = 0)
    {

        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            //'no_found_rows' => 1,
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'nopaging' => true,
            'fields' => 'ids',
            'hide_empty' => true,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'term_taxonomy_id',
                    'terms' => $category_id, // Replace with the parent category ID
                    'include_children' => true,

                ),
            ),


        );


        $query = new WP_Query($args);
        $count = $query->found_posts;
        return absint($count);
    }
}


if ( ! function_exists( 'storer_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function storer_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		storer_woocommerce_cart_link();
		$fragments['.woo-cart-total-item'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'storer_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'storer_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function storer_woocommerce_cart_link() { ?>

		<div <?php if( WC()->cart->get_cart_contents_count() <= 0 ){ ?>style="opacity: 0" <?php } ?> class="woo-cart-total-item">
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storer' ); ?>">
				<?php
				$item_count_text = sprintf(
					/* translators: number of items in the mini cart. */
					_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storer' ),
					WC()->cart->get_cart_contents_count()
				);
				?>
				<span class="amount"><?php echo storer_cart_subtotal_escape( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
			</a>
			<span class="item-count"><?php echo absint( WC()->cart->get_cart_contents_count() ); ?></span>
		</div>
	<?php
	}
}

if ( ! function_exists( 'storer_woocommerce_header_cart()' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function storer_woocommerce_header_cart() {
		
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		} ?>
		<a href="javascript:void(0)" class="minicart-title-handle twp-icon-section">
            <span class="twp-icon"><i class="fa fa-shopping-basket"></i></span>
			<span class="twp-caption"><?php echo esc_html__('Cart','storer');?></span>
            <span class="twp-cart-counter">
                <?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?>
            </span>
		</a>

        <div class="minicart-content twp-content twp-cart-content">
            
            <div class="site-header-cart">
                
                <div class="twp-minicart-content">
                    <?php
                    $instance = array(
                        'title' => '',
                    );

                    the_widget( 'WC_Widget_Cart', $instance );
                    ?>
                </div>
            </div>
            <a href="javascript:void(0)" class="skip-link-minicart-end"></a>
        </div>
	
	<?php
	}
}


if ( ! function_exists( 'storer_cart_subtotal_escape' ) ) :
    
    /**
    * Sanitise Cart Subtotal
    */
    function storer_cart_subtotal_escape($input){

        $all_tags = array(
            'span'=>array(
                'class'=>array()
            )
         );
        return wp_kses($input,$all_tags);
        
    }
endif;

if (!function_exists('storer_my_account_dropdown')) :
    /**
     * 
     */
    function storer_my_account_dropdown()
    {


        if (is_user_logged_in()) {
            $current_user = wp_get_current_user();
            $account_texts = $current_user->display_name;
        } else {
            $account_texts = __('Login', 'storer');
            if (get_option('users_can_register')) {
                $account_texts = __('Login/Register', 'storer');
            }
        }
        $myaccount_page_url = '';
        $myaccount_page_id = get_option('woocommerce_myaccount_page_id');
        if ($myaccount_page_id) {
            $myaccount_page_url = get_permalink($myaccount_page_id);
        }

        ?>

        <a href="javascript:void(0)" class="twp-icon-section">
            <span class="twp-icon"><i class="fa fa-user-circle"></i></span>
            <span class="twp-caption"><?php echo esc_html__('Profile','storer');?></span>
        </a>
        <ul class="twp-account-menu twp-content">
                <li>
                    <a class="twp-menu-account-admin" href="<?php echo esc_url($myaccount_page_url); ?>">
                        <span class="twp-account-item-icon"><i class="fa fa-user-circle"></i></span>
                        <span class="twp-account-item-caption"><?php echo esc_html($account_texts); ?></span>
                    </a>
                </li>
            <?php if (is_user_logged_in()):


                $orders = get_option('woocommerce_myaccount_orders_endpoint', 'orders');
                $edit_account = get_option('woocommerce_myaccount_edit_account_endpoint', 'edit-account');
                $customer_logout = get_option('woocommerce_logout_endpoint', 'customer-logout');

                ?>
                <li>
                    <a class="twp-menu-account-order" href="<?php echo esc_url(wc_get_account_endpoint_url($orders)); ?>">
                        <span class="twp-account-item-icon"><i class="fa fa-shopping-basket"></i></span>
                        <span class="twp-account-item-caption"></span><?php echo esc_html_e('My Orders', 'storer'); ?></span>
                    </a>
                </li>
                <li>
                    <a class="twp-menu-account-edit" href="<?php echo esc_url(wc_get_account_endpoint_url($edit_account)); ?>">
                        <span class="twp-account-item-icon"><i class="fa fa-pencil"></i></span>
                        <span class="twp-account-item-caption"><?php echo esc_html_e('Edit Account', 'storer'); ?></span>
                    </a>
                </li>
                <li>
                    <a class="twp-menu-account-log" href="<?php echo esc_url(wc_get_account_endpoint_url($customer_logout)); ?>">
                        <span class="twp-account-item-icon"><i class="fa fa-sign-out"></i></span>
                        <span class="twp-account-item-caption"><?php echo esc_html_e('Logout', 'storer'); ?></span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        
        <?php
    }
endif;


/*Display YITH Wishlist Buttons*/
if (!function_exists('storer_display_yith_wishlist_loop')) {
    /**
     * Display YITH Wishlist Buttons
     *
     */
    function storer_display_yith_wishlist_loop()
    {

        if (!function_exists('YITH_WCWL')) {
            return;
        }

        echo '<div class="yith-btn">';
        echo do_shortcode("[yith_wcwl_add_to_wishlist]");
        echo '</div>';
    }
}
add_action('storer_woocommerce_add_to_wishlist_button', 'storer_display_yith_wishlist_loop', 16);


if (!function_exists('storer_woocommerce_header_wishlist')) {
    /**
     * Display Header Wishlist.
     *
     * @return void
     */
    function storer_woocommerce_header_wishlist()
    {
        ?>
        <!-- <div class="twp-wishlist"> -->
            <div class="twp-wishlist-icon">
                <a class="twp-wishlist-trigger" href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>">
                    <span class="twp-icon"><i class="fa fa-heart"></i></span>
                    <span class="twp-caption"><?php echo esc_html__('Wishlist','storer'); ?></span>
                    <span class="twp-wishlist-counter gbl-bdge-bck-c"><?php echo absint(yith_wcwl_count_all_products()); ?></span>
                </a>
            </div>
        <!-- </div> -->
        <?php
    }
}

if (!function_exists('storer_update_wishlist_count')) {
    /**
     * Return Wishlist product count.
     */
    function storer_update_wishlist_count()
    {
        if (class_exists('YITH_WCWL')) {

            wp_send_json(array(
                'count' => yith_wcwl_count_all_products()
            ));
        }
    }
}
add_action('wp_ajax_storer_update_wishlist_count', 'storer_update_wishlist_count');
add_action('wp_ajax_nopriv_storer_update_wishlist_count', 'storer_update_wishlist_count');

if (!function_exists('storer_display_wishlist_message')) {
    /**
     * Return Wishlist product added message.
     */
    function storer_display_wishlist_message($msg)
    {
        if (class_exists('YITH_WCWL')) {
            if (property_exists('YITH_WCWL', 'details')) {
                $details = YITH_WCWL()->details;
                if (is_array($details) && isset($details['add_to_wishlist'])) {
                    $product_id = $details['add_to_wishlist'];
                    $product = wc_get_product($product_id);
                    if (!is_wp_error($product)) {
                        $product_title = sprintf(__('%s has been added to your wishist.', 'storer'), '<strong>' . $product->get_title() . '</strong>');
                        $product_image = $product->get_image();

                        ob_start();
                        ?>
                        <div class="twp-add-notification-header">
                            <h3><?php _e('WishList Items', 'storer') ?></h3>
                        </div>
                        <div class="twp-notification">
                            <div class="twp-notification-image">
                                <?php echo $product_image; ?>
                            </div>
                            <div class="twp-notification-title">
                                <?php echo $product_title; ?>
                            </div>
                        </div>
                        <div class="twp-notification-button">
                            <a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>">
                                <?php _e('View Wishlist', 'storer') ?>
                            </a>
                        </div>

                        <?php
                        $msg = ob_get_clean();
                    }
                }
            }
        }
        return $msg;
    }
}
add_filter('yith_wcwl_product_added_to_wishlist_message', 'storer_display_wishlist_message');

/*Display YITH Quickview Buttons at shop page*/
if (!function_exists('storer_display_yith_quickview_loop')) {
    /**
     * Display YITH Wishlist Buttons at product archive page
     *
     */
    function storer_display_yith_quickview_loop()
    {
        if (!function_exists('yith_wcqv_install')) {
            return;
        }

        echo '<div class="yith-btn">';
        global $product, $post;
        $product_id = $post->ID;
        $label = 'Quick View';

        if (!$product_id) {
            $product instanceof WC_Product && $product_id = yit_get_prop($product, 'id', true);
        }

        $button = '';
        if ($product_id) {
            // get label


            $button .= '<a href="#" class="button yith-wcqv-button" data-product_id="' . $product_id . '"><div data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a>';
        }
        echo $button;
        echo '</div>';


    }
}

add_action('storer_woocommerce_yith_quick_view_button', 'storer_display_yith_quickview_loop', 16);

/*Display YITH Compare Buttons at shop page*/
if (!function_exists('storer_display_yith_compare_loop')) {
    /**
     * Display YITH Wishlist Buttons at product archive page
     *
     */
    function storer_display_yith_compare_loop()
    {
        if (!class_exists('YITH_Woocompare')) {
            return;
        }


        echo '<div class="yith-btn">';
        global $product, $post;
        $product_id = $post->ID;

        if (!$product_id) {
            $product instanceof WC_Product && $product_id = yit_get_prop($product, 'id', true);
        }

        $button = '';
        if ($product_id) {

            $button = do_shortcode('[yith_compare_button type="link" button_text="<span class="twp-item-tooltip" data-toggle="tooltip" data-placement="top" title="Compare"></span><i class="fa fa-refresh" aria-hidden="true" ></i>"]');

        }
        echo $button;
        echo '</div>';


    }
}


/*Display YITH Compare Buttons at shop page*/
if (!function_exists('storer_display_yith_compare_loop')) {
    /**
     * Display YITH Wishlist Buttons at product archive page
     *
     */
    function storer_display_yith_compare_loop()
    {
        if (!class_exists('YITH_Woocompare')) {
            return;
        }


        echo '<div class="yith-btn">';
        global $product, $post;
        $product_id = $post->ID;

        if (!$product_id) {
            $product instanceof WC_Product && $product_id = yit_get_prop($product, 'id', true);
        }

        $button = '';
        if ($product_id) {

            $button = do_shortcode('[yith_compare_button type="link" button_text="<span class="twp-item-tooltip" data-toggle="tooltip" data-placement="top" title="Compare"></span><i class="fa fa-refresh" aria-hidden="true" ></i>"]');

        }
        echo $button;
        echo '</div>';


    }
}

add_action('storer_woocommerce_yith_compare_button', 'storer_display_yith_compare_loop', 16);

if (!function_exists('storer_product_feature_iconset')) :
    /**
     *
     */
    function storer_product_feature_iconset()
    {

        $iconset = 0;
        $YITH_WCWL = false;
        $yith_wcqv_install = false;
        $YITH_Woocompare = false;

        $icons = array();
        if (class_exists('YITH_WCWL')) {
            $iconset += 1;
            $YITH_WCWL = true;
        }
        if (function_exists('yith_wcqv_install')) {
            $iconset += 1;
            $yith_wcqv_install = true;

        }
        if (class_exists('YITH_Woocompare')) {
            $iconset += 1;
            $YITH_Woocompare = true;
        }
        if ($iconset > 0):
            ?>
            <ul class="twp-product-featured-icon-list">
                <?php if ($YITH_WCWL == true): ?>
                    <li class="twp-product-wishlist-icon"><?php do_action('storer_woocommerce_add_to_wishlist_button'); ?></li>
                <?php endif; ?>
                <?php if ($yith_wcqv_install == true): ?>
                    <li class="twp-quick-view-icon"><?php do_action('storer_woocommerce_yith_quick_view_button'); ?></li>
                <?php endif; ?>
                <?php if ($YITH_Woocompare == true): ?>
                    <li class="twp-compare-icon">
                        <?php do_action('storer_woocommerce_yith_compare_button'); ?>
                    </li>
                <?php endif; ?>
            </ul>
        <?php
        endif;
    }
endif;
