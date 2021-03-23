<?php
/**
 * function to get different common components .
 *
 * @package Storer
 */

/* Display Product search form with categories*/
if (!function_exists('storer_woo_product_search_form')) :
    /**
     * Display Product search form with categories
     *
     * @since 1.0.0
     *
     * @return void
     */
    function storer_woo_product_search_form(){ ?>
        
        <form role="search" method="get" class="form-inline woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="twp-search-form-wrapper twp-d-flex">
                <?php

                $product_cats = get_terms(array(
                    'taxonomy' => 'product_cat',
                ));

                $search_placeholder = storer_get_option('storer_product_search_placeholder');
                $cat_placeholder = storer_get_option('storer_product_search_category_placeholder');

                $search_autocomplete_class = '';
                $search_autocomplete = storer_get_option('storer_product_search_autocomplete');
                if ($search_autocomplete == 1) {
                    $search_autocomplete_class = ' search-autocomplete';
                }

                if (!empty($product_cats) && !is_wp_error($product_cats)):
                    $selected_product_cat = get_query_var('product_cat');
                    ?>
                    <div class="twp-search-dropdown twp-select2-dropdown">
                        <select name="product_cat" class="cate-dropdown twp-select2">
                            <option value="all"><?php echo esc_html($cat_placeholder); ?></option>
                            <?php
                            foreach ($product_cats as $product_cat) {
                                ?>
                                <option value="<?php echo esc_attr($product_cat->slug) ?>" <?php selected($product_cat->slug, $selected_product_cat) ?>><?php echo esc_html($product_cat->name); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                <?php endif; ?>
                <div class="twp-search-input-field">
                    
                    <label class="screen-reader-text"
                            for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'storer'); ?></label>
                    <input type="search" id="woocommerce-product-search-field"
                            class="search-field<?php echo esc_attr($search_autocomplete_class) ?>"
                            placeholder="<?php echo esc_attr($search_placeholder); ?>"
                            value="<?php echo get_search_query(); ?>" name="s"/>
                </div>
                <div class="twp-btn-section">
                    <button type="submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input type="hidden" name="post_type" value="product"/>
                </div>
            </div>
        </form>

        <?php
    }
endif;


function storer_hex2RGB($hex, $alpha = false) 
{
    $hex      = str_replace('#', '', $hex);
       $length   = strlen($hex);
       $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
       $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
       $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
       if ( $alpha ) {
          $rgb['a'] = $alpha;
       }
       return $rgb;
}
