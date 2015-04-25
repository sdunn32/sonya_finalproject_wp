<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * 
 */

<?php get_header(); ?>

<div id="content">
	
	<?php if(have_posts() ) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
<?php the_content(''); ?>

<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>		

?>