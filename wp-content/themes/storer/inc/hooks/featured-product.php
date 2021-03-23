<?php
if (!function_exists('storer_featured_product')) :
    /**
     * Featured Product
     *
     * @since Storer 1.0.0
     *
     */
    function storer_featured_product()
    {
        if (1 != storer_get_option('show_featured_product_section')) {
            return null;
        }
        $product_category = storer_get_option('featured_product_categories');
        if( $product_category ){
            $featured_product_query = new WP_Query(
                array( 
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                    'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'term_id',
                                'terms'    => absint($product_category),
                            ),
                        ),
                ) 
            );
        }else{
            $featured_product_query = new WP_Query(
                array( 
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                ) 
            );
        } ?>
    <?php 
    if( $featured_product_query->have_posts() ){ ?>

        <div class="twp-popular-product-section twp-section-bg">
            <div class="twp-container">
                <div class="twp-title-section twp-title-style-1">
                    <h2 class="twp-section-title"><?php echo esc_html(storer_get_option('featured_product_title')); ?></h2>
                    <div class="twp-btn-section">
                        <a href="<?php echo esc_url(storer_get_option('featured_product_button_url')); ?>"><?php echo esc_html(storer_get_option('featured_product_button_text')); ?></a>
                    </div>
                </div>
                <ul class="twp-product-list">
                    <?php if (class_exists( 'woocommerce' )) {
                       while( $featured_product_query->have_posts() ){
                           $featured_product_query->the_post();

                           wc_get_template_part( 'content', 'product' );

                       } 
                    } else {
                        echo esc_html__('Please activate Woocommerce plugin to use this section','storer');
                    } ?>
                </ul>
            </div>
        </div>
    <?php wp_reset_postdata();
    } ?>

<?php
    }
endif;
add_action('storer_action_featured_product', 'storer_featured_product', 10);