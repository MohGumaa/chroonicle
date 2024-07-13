<?php
/**
 * Template part for displaying a message when posts are not found
 *
 *
 * @package chroonicle
 */

?>

<section>

	<?php if ( is_search() ) : ?>
		<?php
			printf(
				/* translators: 1: search result title. 2: search term. */
				'<h1 class="text-2xl md:text-3xl text-black font-semibold mb-3">%1$s <span>%2$s</span></h1>',
				esc_html__( 'Search results for:', 'chroonicle' ),
				get_search_query()
			);
		?>
	<?php else : ?>
		<h1 class="text-2xl md:text-3xl text-black font-semibold mb-3"><?php esc_html_e( 'Nothing Found', 'chroonicle' ); ?></h1>
	<?php endif; ?>

	<div <?php chroonicle_content_class( 'page-content' ); ?>>
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			?>

			<p class="text-neutral text-sm md:text-base">
				<?php esc_html_e( 'Your site is set to show the most recent posts on your homepage, but you haven&rsquo;t published any posts.', 'chroonicle' ); ?>
			</p>

			<p class="text-neutral text-sm md:text-base">
				<a href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>">
					<?php
					esc_html_e( 'Add or publish posts', 'chroonicle' );
					?>
				</a>
			</p>

			<?php
		elseif ( is_search() ) :
			?>

			<p class="text-neutral text-sm md:text-base">
				<?php esc_html_e( 'Your search generated no results. Please try a different search.', 'chroonicle' ); ?>
			</p>

			<?php
			get_search_form();
		else :
			?>

			<p class="text-neutral text-sm md:text-base">
				<?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'chroonicle' ); ?>
			</p>

			<?php
			get_search_form();
		endif;
		?>
	</div>

</section>
