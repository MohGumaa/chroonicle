<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chroonicle
 */

?>
<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<?php dynamic_sidebar( 'footerfull' ); ?>

<?php endif; ?>
