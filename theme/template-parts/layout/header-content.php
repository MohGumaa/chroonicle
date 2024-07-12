<?php
/**
 * Template part for displaying the header content
 *
 * @package chroonicle
 */

?>

<header id="masthead" class="bg-transparent fixed top-4 w-full z-50 px-3 md:px-5 lg:px-20">

	<div class="flexBetween bg-gray-40 rounded-full border gap-x-4 py-3 px-6">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-lg font-semibold" rel="home"><?php echo get_bloginfo( 'description', 'display' ); ?></a>

		<nav id="site-navigation" class="hidden md:block grow" aria-label="<?php esc_attr_e( 'Main Navigation', 'coinbullet' ); ?>">
			<button aria-controls="primary-menu" aria-expanded="false" class="hidden"><?php esc_html_e( 'Primary Menu', 'coinbullet' ); ?></button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex justify-end items-center gap-12 h-full" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav>

	</div>

</header>
