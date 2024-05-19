<?php

class newsWidget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'newsWidget',
      __('News', 'nostalgia'),
      array(
        'description' => __('Show and paginate news', 'nostalgia')
      )
    );
  }

  public function widget($args, $instance)
  {
    $numberPost = $instance['numberPost'];
    $args = array(
      'post_type' => 'new',
      'post_status' => 'publish',
      'posts_per_page' => $numberPost,
      'order' => 'DESC',
      'orderby' => 'date',
    );
    $dataNews = new WP_Query($args);
    ?>
    <?php if ($dataNews->have_posts()): ?>
      <div class="grid grid-cols-12 gap-5">
        <?php foreach ($dataNews->posts as $new): ?>
          <?php
          $category = get_the_terms($new->ID, 'new-category');
          $shortDescription = get_post_meta($new->ID, 'nostalgia_fields_new_shortDescription', true);
          $image_id = get_post_meta($new->ID, 'nostalgia_fields_new_image_id', true);
          $image_size = 'new-image';
          $image_src = wp_get_attachment_image_src($image_id, $image_size);
          $timestamp = strtotime($new->post_date);
          $wpDate = new DateTime(date('Y-m-d H:i:s', $timestamp));
          $wpDate->setTimezone(new DateTimeZone('America/Bogota'));
          ?>
          <div class="col-span-12 md:col-span-6 lg:col-span-4">
            <div class="cardNew">
              <a href="<?php echo get_permalink($new->ID); ?>">
                <div class="cardNew__image">
                  <img src="<?php echo $image_src[0]; ?>" alt="<?php echo $new->post_title; ?>">
                </div>
              </a>
              <p class="cardNew__category"><?php echo $category[0]->name; ?></p>
              <p class="cardNew__shortDescription"><?php echo mb_substr($shortDescription, 0, 100) . '...'; ?></p>
              <p class="cardNew__date"><?php echo $wpDate->format('j F, Y'); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php else: ?>
      <div class="text-center text-black-500 text-2xl font-noirPro-semibold">No hay resultados...</div>
    <?php endif; ?>
    <div class="pagination">
      <?php
      echo paginate_links(
        array(
          'total' => $dataNews->max_num_pages,
          'prev_text' => '←',
          'next_text' => '→',
        )
      );
      ?>
    </div>
    <?php
  }

  public function update($new_instance, $old_instance)
  {
    // Update widget options
    $instance['numberPost'] = strip_tags($new_instance['numberPost']);
    return $instance;
  }
  public function form($instance)
  {
    // Retrieve widget options from $instance
    $numberPost = isset($instance['numberPost']) ? $instance['numberPost'] : 9;
    // Display widget settings form
    ?>
    <p>
      <label for=" <?php echo $this->get_field_id('numberPost'); ?>"><?php _e('Number of posts'); ?>:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('numberPost'); ?>"
        name="<?php echo $this->get_field_name('numberPost'); ?>" type="number" min="1" max="12"
        value="<?php echo esc_attr($numberPost); ?>" />
    </p>
    <?php
  }

}


register_widget('newsWidget');


