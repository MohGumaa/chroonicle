<?php
/**
 * Template part for displaying the header content
 *
 * @package chroonicle
 */

?>

<header id="masthead" class="bg-transparent fixed top-4 left-1/2 translate-x-[-50%] container z-50">

	<div class="flexBetween bg-gray-40 rounded-full border gap-x-4 py-2 md:py-3 px-4 md:px-6 shadow-2xl">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block w-36 sm:w-44 md:w-44 lg:w-[160px] xl:w-48 h-auto" rel="home">
			<img alt="Logo" loading="lazy" width="195" height="40" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"/>
		</a>

		<nav id="site-navigation" class="grow relative" aria-label="<?php esc_attr_e( 'Main Navigation', 'coinbullet' ); ?>">
			<button 
				id="btn-menu-toggler" 
				aria-controls="primary-menu" 
				aria-expanded="false" 
				class="ml-auto flex flex-col items-end gap-1 lg:hidden border-0 bg-transparent cursor-pointer menu_toggler"
			>
				<span class="block bg-green-50 rounded h-0.5 w-7"></span>
				<span class="block bg-green-50 rounded h-0.5 w-5"></span>
				<span class="block bg-green-50 rounded h-0.5 w-3"></span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'menu-1',
					'menu_id'         => 'primary-menu',
					'container_id'    => 'header-menu',
					'container_class' => 'hidden absolute w-full left-0 top-[32px] bg-white rounded-md lg:rounded-none lg:relative lg:left-[initial] md:top-[36px] lg:top-[initial] lg:block lg:bg-transparent',
					'items_wrap'      => '<ul id="%1$s" class="%2$s flex flex-col justify-end items-center gap-6 h-full p-3 lg:flex-row lg:p-0 lg:gap-10" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav>

	</div>

</header>
