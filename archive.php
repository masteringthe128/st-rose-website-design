<?php
/**
 *  * The archive template for displaying archive pages.
 *   *
 *    * @link https://codex.wordpress.org/Template_Hierarchy
 *     *
 *      * @package Your_Theme_Name
 *       */

get_header();

if ( have_posts() ) :
	    echo '<h1>' . get_the_archive_title() . '</h1>';
    echo '<div class="archive-content">';

    while ( have_posts() ) : the_post();
	        get_template_part( 'template-parts/content', get_post_type() );
	    endwhile;

	    the_posts_pagination();
		    echo '</div>';
else :
	    get_template_part( 'template-parts/content', 'none' );
endif;

get_footer();

