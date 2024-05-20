<?php

get_header();

$new = new WP_Query(
  array(
    'post_type' => 'new',
    'p' => get_the_ID()
  )
);
function get_custom_post_type_category($postId)
{
  $categories = get_the_terms($postId, 'new-category');  // Replace 'your_taxonomy_slug' with your actual taxonomy slug
  if (!empty($categories)) {
    $categoryName = $categories[0]->name; // Get the name of the first category
    return $categoryName;
  } else {
    return 'Uncategorized';  // You can customize this default message
  }
}
$postId = get_the_ID();
$categoryName = get_custom_post_type_category($postId);

$imageId = get_post_meta(get_the_ID(), 'nostalgia_fields_new_image_id', true);
$imageSize = 'full';
$imageSrc = wp_get_attachment_image_src($imageId, $imageSize);
$description = get_post_meta(get_the_ID(), 'nostalgia_fields_new_description', true);
$shortDescription = get_post_meta(get_the_ID(), 'nostalgia_fields_new_shortDescription', true);
?>

<div class="container max-w-7xl px-4 mx-auto">
  <div class="grid grid-cols-12 gap-5">
    <div class="col-span-12 md:col-span-8">
      <div class="pageNew">
        <div class="pageNew__image">
          <img src="<?php echo $imageSrc[0]; ?>" alt="<?php echo get_the_title(); ?>" clas="w-full object-cover">
        </div>
      </div>
    </div>
    <div class="col-span-12 md:col-span-4">
      <p class="text-black-500 font-noirPro-semiBold text-3xl mb-5"><?php echo the_title(); ?></p>
      <p class="text-light-gray-700 font-noirPro-regular text-sm mb-5"><?php echo $categoryName; ?></p>
      <p class="text-black-500 font-noirPro-regular text-base mb-5"><?php echo $shortDescription; ?></p>
    </div>
  </div>
  <div class="new__description prose max-w-none py-8">
    <?php echo $description; ?>
  </div>
</div>

<? get_footer(); ?>
