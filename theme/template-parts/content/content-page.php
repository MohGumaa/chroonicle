<?php
/**
 * Template part for displaying pages
 *
 * @package chroonicle
 */

if (has_post_thumbnail()) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
} else {
	$featured_img_url = get_template_directory_uri() . '/images/banner.webp';
}

?>
<article>
	<section class="hero bg-cover bg-center bg-black snap-center relative after:content-[''] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-br-[50px] after:lg:rounded-br-[100px] overflow-x-hidden z-10"
		style="background-image: url(<?php echo $featured_img_url; ?>)">
	>
		<div class="container flexCenter flex-1 flex-col w-full min-h-[300px] md:min-h-[470px] lg:min-h-[550px] relative z-20">
			<?php the_title( '<h1 class="text-3xl md:text-4xl lg:text-5xl font-medium	capitalize tracking-wide">', '</h1>' ); ?>
		</div>
	</section>

	<section class="container my-8">
		<?php the_content(); ?>
	</section>

</article>
