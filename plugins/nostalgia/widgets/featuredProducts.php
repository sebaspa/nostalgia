<?php
class Featured_Products_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'featured_products_widget', // Base ID
            __('Featured Products', 'text_domain'), // Name
            array('description' => __('Displays featured WooCommerce products', 'text_domain'),) // Args
        );
    }

    // The widget form (for the backend)
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

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : '';
        return $instance;
    }

    // The widget front-end
    public function widget($args, $instance) {
        $number = !empty($instance['number']) ? $instance['number'] : 5;

        echo $args['before_widget'];

        if (!empty($number)) {
            $this->get_featured_products($number);
        }

        echo $args['after_widget'];
    }

    // Function to retrieve and display the featured products
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
            echo '<ul class="featured-products">';
            while ($loop->have_posts()) : $loop->the_post();
                global $product;
                echo '<li>';
                echo '<a href="' . get_permalink() . '">';
                echo woocommerce_get_product_thumbnail();
                echo '<h2>' . get_the_title() . '</h2>';
                echo '</a>';
                echo '<span class="price">' . $product->get_price_html() . '</span>';
                echo '</li>';
            endwhile;
            echo '</ul>';
        } else {
            echo __('No products found');
        }

        wp_reset_postdata();
    }
}

// Register the widget
register_widget('Featured_Products_Widget');
?>