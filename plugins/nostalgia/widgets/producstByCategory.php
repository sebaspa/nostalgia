<?php
class Producs_By_Category_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'Producs_By_Category_Widget',
            'Products By Category',
            array('description' => __('Displays products from a selected category', 'nostalgia'),)
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $category_id = !empty($instance['category']) ? $instance['category'] : 0;
        if ($category_id) {
            $this->display_products($category_id);
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Products', 'nostalgia');
        $category = !empty($instance['category']) ? $instance['category'] : '';
        $categories = get_terms('product_cat', array('hide_empty' => false));

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('category')); ?>"><?php _e('Select Category:'); ?></label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('category')); ?>" name="<?php echo esc_attr($this->get_field_name('category')); ?>">
                <?php foreach ($categories as $cat): ?>
                    <option value="<?php echo esc_attr($cat->term_id); ?>" <?php selected($category, $cat->term_id); ?>><?php echo esc_html($cat->name); ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['category'] = (!empty($new_instance['category'])) ? strip_tags($new_instance['category']) : '';
        return $instance;
    }

    private function display_products($category_id) {
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $category_id,
                ),
            ),
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) {
            echo '<ul class="custom-category-products">';
            while ($loop->have_posts()) {
                $loop->the_post();
                global $product;
                echo '<li>';
                echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
                echo '<p>' . $product->get_price_html() . '</p>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo __('No products found', 'nostalgia');
        }

        wp_reset_postdata();
    }
}

register_widget('Producs_By_Category_Widget');
?>