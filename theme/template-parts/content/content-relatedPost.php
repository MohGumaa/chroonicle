<?php
/**
 * Template part for displaying related posts
 *
 * @package chroonicle
 */
$orig_post = $post;
global $post;

$tags = wp_get_post_tags($post->ID);
$categories = get_the_category($post->ID);

$args = [
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 4,
  'post__not_in'   => [$post->ID], // Ensure the current post is excluded
];

if ($tags) {
  $tag_ids = array_map(function($tag) {
    return $tag->term_id;
  }, $tags);
  $args['tag__in'] = $tag_ids;
} elseif ($categories) {
  $category_ids = array_map(function($category) {
    return $category->term_id;
  }, $categories);
  $args['category__in'] = $category_ids;
}

$related_post = new WP_Query($args);
if ($related_post->have_posts()) :
?>

  <div class="container my-8">
    <h3 class="font-semibold text-neutral-30 text-[22px] md:text-2xl mb-6 mt-10"><?php esc_html_e('Related posts', 'chroonicle'); ?></h3>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
        while ($related_post->have_posts()) {
          $related_post->the_post();
          get_template_part('template-parts/content/content', 'excerpt');
        }
      ?>
    </div>
  </div>

<?php 
endif;
$post = $orig_post;
wp_reset_postdata();
?>
