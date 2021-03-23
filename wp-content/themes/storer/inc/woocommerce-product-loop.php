<?php
if (!function_exists('storer_woocommerce_product_loop')) :
    /**
     * woocommerce product loop
     *
     * @since Storer 1.0.0
     *
     */
    function storer_woocommerce_product_loop()
    { ?>
        <div class="twp-wrapper">
            <?php
                global $post, $product;
                if (has_post_thumbnail()) {
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'storer-medium-product');
                    $url = $thumb['0'];
                } else {
                    $url = NULL;
                }
            ?>
            <div class="twp-product-image-section twp-image-hover-effect twp-image-overlay">
                <?php if ($url): ?>
                    <a href="<?php the_permalink(); ?>"></a>
                    <div class="twp-image">
                        <img src="<?php echo esc_url($url); ?>">
                    </div>
                <?php endif; ?>
                <?php storer_product_feature_iconset(); ?>
                <div class="twp-sale-badge">
                    <?php do_action('storer_woocommerce_show_product_loop_sale_flash'); ?>
                </div>
            </div>
            <div class="twp-product-desc">
                <div class="product-category">
                    <?php storer_posted_categories(); ?>
                </div>
                <h3 class="twp-product-title twp-product-title-sm">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="twp-price-section twp-price">
                    <?php do_action('storer_woocommerce_after_shop_loop_item_title'); ?>
                </div>
                <div class="twp-btn-section">
                    <?php do_action('storer_woocommerce_template_loop_add_to_cart'); ?>
                </div>
            </div>
        </div>
    <?php }
endif;

add_action('storer_woocommerce_product_loop_action', 'storer_woocommerce_product_loop', 10);