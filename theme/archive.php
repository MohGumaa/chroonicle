<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chroonicle
 */

get_header();

$banner = get_template_directory_uri() . '/images/hero-banner.webp';
?>

	<main id="main" class="template overflow-x-hidden">

		<section class="hero bg-cover bg-center bg-black snap-center relative after:content-[''] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-br-[50px] after:lg:rounded-br-[100px] overflow-x-hidden z-10"
			style="background-image: url(<?php echo $banner; ?>)">
		>
			<div class="container flexCenter flex-1 flex-col w-full min-h-[300px] md:min-h-[470px] lg:min-h-[550px] relative z-20">
				<h1 class="text-2xl md:text-3xl lg:text-5xl font-semibold	 capitalize">
					<?php single_cat_title(); ?>
				</h1>
			</div>
		</section>

		<div class="container my-8 lg:my-10">

			<?php if ( have_posts() ) :?>

				<section class="grid md:grid-cols-2 lg:grid-cols-3 gap-7 mb-10">

					<?php 
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content/content', 'excerpt' );
						}
					?>

				</section>

				<div>
					<div class="flex justify-center items-center flex-1 md:justify-between">
						<?php chroonicle_the_posts_navigation(); ?>
					</div>
				</div>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content/content', 'none' );?>

			<?php endif; ?>

		</div>

	</main>

<?php
get_footer();
