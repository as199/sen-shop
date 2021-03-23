<?php
if (!function_exists('storer_feature_section')) :
    /**
     * storer feature section
     *
     * @since Storer 1.0.0
     *
     */
    function storer_feature_section() {
        if (1 != storer_get_option('show_shop_features_section')) {
            return null;
        }
        
        $features = array();

        for ($i = 0; $i <= 4; $i++) {
            $title = storer_get_option('store_features_title_' . $i);
            if (!empty($title)) {
                $features['features_' . $i][] = $title;
                $features['features_' . $i][] = storer_get_option('store_features_icon_' . $i);
                $features['features_' . $i][] = storer_get_option('store_features_desc_' . $i);

            }
        }

        ?>
            <div class="twp-store-feature-section">
                <div class="twp-container">
                    <div class="twp-row twp-wrapper">
                        <?php if (isset($features)):
                            $col = count($features);
                            $count = 1;
                            foreach ($features as $feature):

                                ?>
                                <div class="twp-col twp-col-6 twp-col-md-4 twp-col-lg-3">
                                    <div class="twp-store-feature-post twp-d-flex">
                                        <?php if(!empty($feature[1])): ?>
                                        <div class="twp-icon">
                                            <i class="<?php echo esc_attr($feature[1]); ?>"></i>
                                        </div>
                                        <?php endif; ?>
                                        <div class="twp-desc">
                                            <h3 class="twp-post-title"><?php echo esc_html($feature[0]); ?></h3>
                                            <p><?php echo esc_html($feature[2]); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $count++;
                            endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        <?php
    }
endif;

add_action('storer_action_featrure_section', 'storer_feature_section', 10);
