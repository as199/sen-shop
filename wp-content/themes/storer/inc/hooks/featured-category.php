<?php
if (!function_exists('storer_featured_category')) :
    /**
     * Featured Category
     *
     * @since Storer 1.0.0
     *
     */
    function storer_featured_category()
    {
        if (1 != storer_get_option('show_featured_categories_section')) {
            return null;
        }

        $categories = array();
        for ($i = 1; $i <= 6; $i++) {
            $category_id = storer_get_option('featured_categories_' . $i);
            if (!empty($category_id)) {
                $categories[] = $category_id;
            }
        }
        $cat_product_count = storer_get_option('show_featured_categories_product_count');
        $cat_onsale_product_count = storer_get_option('show_featured_categories_product_onsale_count');

    ?>
    <div class="twp-category-product-section">
        <div class="twp-container">
            <?php if (!empty(storer_get_option('storer_featured_categories_section_title'))) { ?>
                <h2 class="twp-section-title">
                    <?php echo esc_html(storer_get_option('storer_featured_categories_section_title')); ?>
                </h2>
            <?php } ?>
            <div class="twp-post-list">
                <div class="twp-row">
                    <?php if (isset($categories)):
                        $count = 0;
                        foreach ($categories as $category):
                            if (0 != absint($category)):
                                $term = get_term_by('id', $category, 'product_cat');
                                if ($term):
                                    $term_name = $term->name;
                                    $term_link = get_term_link($term);
                                    $products_count = storer_product_count($term->term_id);
                                    $products_count = ($cat_product_count == 'true') ? $products_count : 0;
                                    $product_onsale = storer_onsale_product_count($term->term_id);
                                    $product_onsale = ($cat_onsale_product_count == 'true') ? $product_onsale : 0;
                                    $meta = get_term_meta($category);
    
                                    if (isset($meta['thumbnail_id'])) {
                                        $thumb_id = $meta['thumbnail_id'][0];
                                        $thumb_url = wp_get_attachment_image_src($thumb_id, 'full');
                                        $url = $thumb_url[0];
                                    } else {
                                        $url = '';
                                    }
                                    ?>
                                    <div class="twp-col twp-col-6 twp-col-md-4">
                                        <div class="twp-post twp-post-style-2">
                                            <div class="twp-image-section image-450 twp-bg-hover-effect">
                                                <a href="<?php echo esc_url($term_link); ?>"></a>
                                                <div class="twp-image bg-image" style="background-image:url('<?php echo esc_url($url); ?>')">
                                                        
                                                </div>
                                            </div>
                                            <div class="twp-desc twp-text-center">
                                                <!-- product count -->
                                                <?php if (absint($products_count) > 0): ?>
                                                    <div class="twp-product-count">
                                                        <span class="twp-product-count-wrapper">
                                                            <span class="twp-caption">Total : </span>
                                                            <?php 
                                                            printf(_n('<span class="twp-item-count">%s</span><span class="twp-item-texts">item</span>', '<span class="twp-item-count">%s</span><span class="twp-item-texts">items</span>', $products_count, 'storer'), number_format_i18n($products_count)); ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                                <h3 class="twp-post-title twp-post-title-md twp-text-uppercase"><a href="<?php echo esc_url($term_link); ?>"><?php echo esc_html($term_name); ?></a></h3>
    
                                                <!-- prodcut on sale -->
                                                <?php if (absint($product_onsale) > 0): ?>
                                                <div class="twp-product-sale twp-text-center">
                                                    <span class="twp-sale">
                                                        <span class="item-count">
                                                            <?php echo absint($product_onsale); ?>
                                                        </span>
                                                        <span class="item-texts-onsale">
                                                            <?php echo esc_html('On Sale','storer'); ?>
                                                        </span>
                                                    </span>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endif;
                            endif; ?>
    
    
                            <?php
                        endforeach;
                    endif; ?>
    
                </div>
            </div>
        </div><!--/twp-container-->
    </div><!--/twp-category-product-section-->
<?php
    }
endif;
add_action('storer_action_featured_category', 'storer_featured_category', 10);