<?php
/**
 * Template part for displaying single posts
 *
 * @package chroonicle
 */

$featured_img_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/images/hero-banner.webp';
?>

<article>
  <section class="hero bg-cover bg-center bg-black snap-center relative after:content-[''] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-br-[50px] after:lg:rounded-br-[100px] overflow-x-hidden z-10"
    style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
    <div class="container flexCenter flex-1 flex-col w-full min-h-[300px] md:min-h-[420px] lg:min-h-[470px] relative z-20">
      <?php the_title('<h1 class="text-3xl md:text-4xl lg:text-5xl font-medium capitalize tracking-wide">', '</h1>'); ?>
    </div>
  </section>

  <section class="container my-8">
    <?php if (!is_page()) : ?>
      <div class="hidden items-center gap-1 text-sm entry-meta mb-3">
        <?php chroonicle_entry_meta(); ?>
      </div>
    <?php endif; ?>

    <div <?php chroonicle_content_class('entry-content'); ?>>
      <?php
      the_content(
        sprintf(
          wp_kses(
            __('Continue reading<span class="sr-only"> "%s"</span>', 'chroonicle'),
            ['span' => ['class' => []]]
          ),
          get_the_title()
        )
      );
      ?>
    </div>
  </section>
</article>

<?php get_template_part('template-parts/content/content', 'relatedPost'); ?>
