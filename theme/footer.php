<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @package chroonicle
 */

?>

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

	<footer id="colophon" class="bg-gray-30 py-5">
		<div class="container flex flex-col md:flex-row gap-4 justify-between items-center">
			<p class="text-xs md:text-sm"><?php esc_attr_e( 'All Rights Reserved', 'chroonicle' ); ?> <?php echo date( 'Y' ); ?>. <?php esc_attr_e( ' Chronicle is a Registered Trademark.', 'chroonicle' ); ?></p>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-wrap justify-center md:justify-end gap-3" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</div>
	</footer>

</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<?php wp_footer(); ?>

</body>
</html>
