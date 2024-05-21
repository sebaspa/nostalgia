<?php
// Start the session for guest users
function custom_start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'custom_start_session', 1);

// Handle add to wishlist
function custom_add_to_wishlist() {
    if (isset($_GET['add_to_wishlist'])) {
        $product_id = intval($_GET['add_to_wishlist']);
        
        if ($product_id) {
            if (is_user_logged_in()) {
                $user_id = get_current_user_id();
                $wishlist = get_user_meta($user_id, '_wishlist', true);
                
                if (!is_array($wishlist)) {
                    $wishlist = array();
                }
                
                if (!in_array($product_id, $wishlist)) {
                    $wishlist[] = $product_id;
                    update_user_meta($user_id, '_wishlist', $wishlist);
                }
            } else {
                if (!isset($_SESSION['wishlist']) || !is_array($_SESSION['wishlist'])) {
                    $_SESSION['wishlist'] = array();
                }
                
                if (!in_array($product_id, $_SESSION['wishlist'])) {
                    $_SESSION['wishlist'][] = $product_id;
                }
            }
        }

        wp_redirect(get_permalink($product_id));
        exit;
    }
}
add_action('wp', 'custom_add_to_wishlist');

// Define the Featured Products Widget
class Featured_Products_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'featured_products_widget',
            __('Featured Products', 'text_domain'),
            array('description' => __('Displays featured WooCommerce products', 'text_domain'),)
        );
    }

    public function form($instance) {
        $number = !empty($instance['number']) ? $instance['number'] : 5;
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('number')); ?>">
            <?php esc_attr_e('Number of products:', 'text_domain'); ?>
        </label> 
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="number" value="<?php echo esc_attr($number); ?>">
        </p>
        <?php 
    }

    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : '';
        return $instance;
    }

    
    public function widget($args, $instance) {
        $number = !empty($instance['number']) ? $instance['number'] : 5;

        echo $args['before_widget'];

        if (!empty($number)) {
            $this->get_featured_products($number);
        }

        echo $args['after_widget'];
    }

    
    private function get_featured_products($number) {
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => $number,
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field' => 'name',
                    'terms' => 'featured',
                    'operator' => 'IN'
                )
            )
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) {
            echo '<div class="featured-products flex flex-wrap justify-around">';
            while ($loop->have_posts()) : $loop->the_post();
                global $product;
                echo '<div class="relative mt-10">';
                    echo woocommerce_get_product_thumbnail();
                
                    echo '<div class="footer bg-white p-4">';
                        $categories = wp_get_post_terms($product->get_id(), 'product_cat');
                        if (!empty($categories) && !is_wp_error($categories)) {
                            $first_category = $categories[0];
                            echo '<span class="text-gray-400 text-xs">' . esc_html($first_category->name) . '</span>';
                        }

                        echo '<h2 class="font-semibold">' . esc_html(get_the_title()) . '</h2>';
                        echo '<span class="price">Desde: ' . $product->get_price_html() . '</span>';
                    echo '</div>';
                    // Overlay on hover
                    echo '<div class="overlay absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-50 transition-opacity duration-300 ease-in-out flex opacity-0 hover:opacity-100 flex items-center justify-center">';
                        echo '<div class="icons space-x-4 text-white text-2xl flex">';
                            // Like icon with add to wishlist functionality
                            $wishlist_url = add_query_arg('add_to_wishlist', $product->get_id(), home_url());
                            echo '<a href="' . esc_url($wishlist_url) . '">';
                            echo '<img src="' . get_template_directory_uri() . '/images/like_product_icon.png" alt="like icon">';
                            echo '</a>';
                            // Add to cart icon
                            echo '<a href="' . esc_url(add_query_arg('add-to-cart', $product->get_id())) . '">';
                            echo '<img src="' . get_template_directory_uri() . '/images/add_product_icon.png" alt="add to cart icon">';
                            echo '</a>';
                            // Open product icon
                            echo '<a href="' . esc_url(get_permalink()) . '">';
                            echo '<img src="' . get_template_directory_uri() . '/images/open_product_icon.png" alt="open product icon">';
                            echo '</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            endwhile;
            echo '</div>';
        } else {
            echo esc_html__('No products found', 'text_domain');
        }

        wp_reset_postdata();
    }
}

register_widget('Featured_Products_Widget');
?>