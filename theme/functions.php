<?php
/**
 * chroonicle functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chroonicle
 */

if ( ! defined( 'CHROONICLE_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'CHROONICLE_VERSION', '0.1.0' );
}

if ( ! defined( 'CHROONICLE_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `chroonicle_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'CHROONICLE_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-img:rounded-xl prose-a:no-underline hover:prose-a:underline prose-a:text-blue-500 prose-headings:text-primary prose-blockquote:bg-slate-50 prose-blockquote:border-coinbulletRea prose-blockquote:font-normal prose-blockquote:not-italic prose-blockquote:p-8 prose-blockquote:rounded-md prose-h2:mt-6 prose-h2:mb-1.5 prose-h3:mb-1.5 js-toc-content'
	);
}

if ( ! function_exists( 'chroonicle_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function chroonicle_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on chroonicle, use a find and replace
		 * to change 'chroonicle' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'chroonicle', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'chroonicle' ),
				'menu-2' => __( 'Footer Menu', 'chroonicle' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'chroonicle_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function chroonicle_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'chroonicle' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'chroonicle' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'chroonicle_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function chroonicle_scripts() {
	wp_enqueue_style( 'chroonicle-style', get_stylesheet_uri(), array(), CHROONICLE_VERSION );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'chroonicle-script', get_template_directory_uri() . '/js/script.min.js', array(), CHROONICLE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'chroonicle_scripts' );

/**
 * Enqueue the block editor script.
 */
function chroonicle_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'chroonicle-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			CHROONICLE_VERSION,
			true
		);
		wp_add_inline_script( 'chroonicle-editor', "tailwindTypographyClasses = '" . esc_attr( CHROONICLE_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'chroonicle_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function chroonicle_tinymce_add_class( $settings ) {
	$settings['body_class'] = CHROONICLE_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'chroonicle_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/post-time.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

function phi_theme_support() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'phi_theme_support' );

function altered_post_time_ago_function( $time ) {
	$post_time = get_the_time('U');
	$current_time = current_time('timestamp');
	
	if ( $post_time >= strtotime('-1 day', $current_time) ) {
		$time = sprintf( esc_html__( '%s ago', 'chroonicle' ), human_time_diff( $post_time, $current_time ) );
	} else {
		$time = get_the_date();
	}
	
	return $time;
}
add_filter( 'the_time', 'altered_post_time_ago_function' );

add_filter('jpeg_quality', function($arg){return 100;});

function custom_excerpt_length($length) {
  return 70;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
	background-image: url(https://chroonicle.com/wp-content/uploads/2024/07/favicon.png); 
    border-radius: 50%;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );