<?php
/*
 *  * Sidebar Template
 *   *
 *    * This template is used to display the sidebar on all pages.
 *     */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
}

?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>


