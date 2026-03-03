<?php

/**
 * The Template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<main id="site-content" role="main">
    <?php
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', get_post_type() );
        the_post_navigation();
    endwhile; // End of the loop.
    ?>
</main><!-- #site-content -->

<?php
get_footer();
?>
