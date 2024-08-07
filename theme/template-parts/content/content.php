<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chroonicle
 */

$id = get_the_ID();
[$published_time, $published_date_time, $modified_time, $modified_date_time, $is_updated] = chroonicle_post_time($id);
$banner = get_template_directory_uri() . '/images/hero-banner.webp';
?>
<article class="card">
	<div class="shrink-0 w-full">
		<a href="<?php the_permalink(); ?>" class="block max-w-full max-h-full">
			<?php  if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large', ['class' => 'object-cover aspect-video w-full', 'alt' => esc_attr(get_the_title())]);?>
			<?php else : ?>
				<img width="768" height="472" src="<?php echo $banner; ?>" class="object-cover aspect-video w-full wp-post-image" alt="<?php the_title();?>"/>
			<?php endif; ?>
		</a>
	</div>
	<div class="flex justify-between flex-col h-full p-3 md:p-4 pb-3">
		<?php the_title( sprintf( '<h2 class="font-semibold text-lg text-neutral-30 mb-2"><a href="%s" class="hover:text-blue-500 line-clamp-3" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="text-zinc-500 text-sm mb-4">
			<?php the_excerpt();?>
		</div>
		<time datetime="<?php echo !$is_updated ? $published_date_time : $modified_date_time;?>" class="block text-xs text-zinc-400 capitalize">
			<?php the_time();?>
		</time>
	</div>
</article>