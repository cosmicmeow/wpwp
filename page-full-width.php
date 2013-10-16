<?php
/**
 * Template Name: Full-width Page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   
   </div><!--/.row -->
   

      
 <!-- Masthead
      ================================================== -->
      
				<div class="row content">
				  <?php the_content();?>
				<?php endwhile; // end of the loop. ?>
		
				</div><!-- .row content -->
		

<?php get_footer(); ?>