<?php
/**
 * Storer Carousel Product Widgets.
 *
 * @package Storer
 */


if ( !function_exists('storer_carousel_product_widget') ) :

    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function storer_carousel_product_widget(){
        // Recent Post widget.
        register_widget('Storer_Carousel_Product_Widget_Reg');

    }

endif;
add_action('widgets_init', 'storer_carousel_product_widget');

// Recent Post widget
if ( !class_exists('Storer_Carousel_Product_Widget_Reg') ) :

    /**
     * storer widget class
     *
     * @since 1.0.0
     */
    class Storer_Carousel_Product_Widget_Reg extends storer_Widget_Base
    {

        /**
         * Sets up a new widget instance.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
            $opts = array(
                'classname' => 'twp-carousel-widget-section',
                'description' => esc_html__('Displays post form selected category on carousel style.', 'storer'),
                'customize_selective_refresh' => true,
            );

            $fields = array(
                'title' => array(
                    'label' => esc_html__('Title:', 'storer'),
                    'type' => 'text',
                    'class' => 'widefat',
                ),
                'product_category' => array(
                    'label' => esc_html__('Product Category:', 'storer'),
                    'type' => 'product_select',
                ),
                'product_short' => array(
                    'label' => esc_html__('Product Shorting:', 'storer'),
                    'type' => 'select',
                    'options' => array( 
                        'latest-product' => esc_html__('Latest Product','storer'),
                        'best-sellers' => esc_html__('Best Sellers','storer'),
                        'best-deals' => esc_html__('Best Deals','storer'),
                    ),
                ),
                'post_number' => array(
                    'label' => esc_html__('Number of Products:', 'storer'),
                    'type' => 'number',
                    'default' => 4,
                    'css' => 'max-width:60px;',
                    'min' => 1,
                    'max' => 10,
                ),
            );

            parent::__construct( 'storer-carousel-products-sidebar', esc_html__('TWP: carousel Product Style', 'storer'), $opts, array(), $fields );
        }

        /**
         * Outputs the content for the current widget instance.
         *
         * @since 1.0.0
         *
         * @param array $args Display arguments.
         * @param array $instance Settings for the current widget instance.
         */
        function widget( $args, $instance )
        {

            $params = $this->get_params( $instance );

            echo $args['before_widget'];

            $product_category = $params['product_category'];

            $product_short = $params['product_short'];

            if( $product_short == 'best-sellers' ){

                if( $product_category ){

                    $product_query = new WP_Query(
                        array( 
                            'post_type' => 'product',
                            'posts_per_page' => $params['post_number'],
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                            'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'slug',
                                        'terms'    => $product_category,
                                    ),
                                ),
                        ) 
                    );
                }else{

                    $product_query = new WP_Query(
                        array( 
                            'post_type' => 'product',
                            'posts_per_page' => $params['post_number'],
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                        ) 
                    );

                }

            }elseif( $product_short == 'best-deals' ){

                if( $product_category ){

                    $product_query = new WP_Query(
                        array( 
                            'post_type'      => 'product',
                            'posts_per_page' => $params['post_number'],
                            'meta_query'     => array(
                                'relation' => 'OR',
                                array( // Simple products type
                                    'key'           => '_sale_price',
                                    'value'         => 0,
                                    'compare'       => '>',
                                    'type'          => 'numeric'
                                ),
                                array( // Variable products type
                                    'key'           => '_min_variation_sale_price',
                                    'value'         => 0,
                                    'compare'       => '>',
                                    'type'          => 'numeric'
                                )
                            ),
                            'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'slug',
                                        'terms'    => $product_category,
                                    ),
                                ),
                        ) 
                    );
                }else{

                     $product_query = new WP_Query(
                        array( 
                            'post_type'      => 'product',
                            'posts_per_page' => $params['post_number'],
                            'meta_query'     => array(
                                'relation' => 'OR',
                                array( // Simple products type
                                    'key'           => '_sale_price',
                                    'value'         => 0,
                                    'compare'       => '>',
                                    'type'          => 'numeric'
                                ),
                                array( // Variable products type
                                    'key'           => '_min_variation_sale_price',
                                    'value'         => 0,
                                    'compare'       => '>',
                                    'type'          => 'numeric'
                                )
                            ),
                        )
                    );

                }

            }else{

                if( $product_category ){

                    $product_query = new WP_Query(
                        array( 
                            'post_type' => 'product',
                            'posts_per_page' => $params['post_number'],
                            'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'slug',
                                        'terms'    => $product_category,
                                    ),
                                ),
                        ) 
                    );

                }else{

                     $product_query = new WP_Query(
                        array( 
                            'post_type' => 'product',
                            'posts_per_page' => $params['post_number'],
                        ) 
                    );

                }

            }

            if ( $product_query->have_posts() ) : ?>
                <div class="twp-container-fluid"> 
                    <div class="twp-title-style-1"> 
                        <?php if ( !empty( $params['title'] ) ) {
                            echo $args['before_title'].$params['title'].$args['after_title'];
                        } ?>
                        <div class="twp-right-content">
                            <div class="twp-carousel-arrow twp-arrow">
                                <button class="twp-carousel-prev slick-arrow"><i class="fa fa-chevron-left"></i></button>
                                <button class="twp-carousel-next slick-arrow"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="twp-product-list">
                        <div class="twp-carosuel-widget-slider twp-slick">
                            <?php
                            while ( $product_query->have_posts() ) :
    
                                $product_query->the_post(); ?>
                                <div class="twp-slider-wrapper">
                                    <div class="twp-product twp-product-style-1">
                                        <div class="twp-product-image-section twp-image-hover-effect twp-image-overlay">
                                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'midium'); ?>
                                            <a href="<?php the_permalink();?>"></a>
                                            <div class="twp-image">
                                                <img src="<?php echo esc_url( $image[0] ); ?>">
                                            </div>
                                            <?php storer_product_feature_iconset(); ?>
                                            <div class="twp-sale-badge">
                                                <?php do_action('storer_woocommerce_show_product_loop_sale_flash'); ?>
                                            </div>
                                        </div>
                                        <div class="twp-product-desc">
                                            
                                            <h3 class="twp-product-title twp-product-title-sm">
                                                <a href="<?php the_permalink();?>">
                                                    <?php the_title();?>
                                                </a>
                                            </h3>
            
                                            <div class="twp-product-ratings">
                                                <?php //woocommerce_template_loop_rating(); ?>
                                            </div>
                                            <div class="twp-price-section twp-price">
                                                <?php woocommerce_template_loop_price(); ?>
                                            </div>
                                            <div class="twp-btn-section">
                                                <?php do_action('storer_woocommerce_template_loop_add_to_cart'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile; ?>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        <?php echo $args['after_widget'];
        }
    }
endif;