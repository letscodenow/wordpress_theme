<?php
/**
 * The template for displaying all single posts.
 *
 * @package superheroes
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'single' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
