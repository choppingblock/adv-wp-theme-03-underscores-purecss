<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package adv-wp-theme-04-underscores-purecss
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
