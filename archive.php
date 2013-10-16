<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.6
 */

get_header();
if (have_posts() ) ;?>
<div class="row">
	<div class="container">
		<?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
	</div><!--/.container -->
</div><!--/.row -->
<div class="container">
	

<div class="row content">
		<div class="span8">
			<?php while ( have_posts() ) : the_post(); ?>
			<div <?php post_class(); ?>>
					
				<div class="contest-row">
					<div class="row">
						<div class="col-lg-5">
							<div class="image">
								<div class="span2"><?php // Checking for a post thumbnail
									if ( has_post_thumbnail() ) ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<?php the_post_thumbnail();?></a>
								</div><!-- /.span2 -->
							</div>
						</div> <!-- end of thumbnail col -->
							
						<div class="span6">
							<div class="col-lg-10">
								<div class="info">
									<a href="<?php the_permalink(); ?>"><h1><?php the_title();?></h1></a>
									<?php the_excerpt();?>
								</div> <!-- end of info -->

								<div class="stats">
									<div class="row">
										<div class="col-lg-5">
											<img src="img/icons_tiny/prize.png"> <?php single_cat_title(''); ?>
										</div>

										<div class="col-lg-5">
											<img src="img/icons_tiny/time.png"> 10 DAYS LEFT
										</div>

										<div class="col-lg-5">
											<img src="img/icons_tiny/sound.png">
											<?php
												$category = get_the_category(); 
												echo $category[1]->cat_name;
											?>
										</div>

									</div> <!-- end of inner row -->
								</div> <!-- end of stats -->
							</div> <!-- end of info column -->
									
						</div><!-- /.span6 -->
					</div>
				</div> <!-- end of contest-row -->
			
				<hr />
					
			</div><!-- /.post_class -->
			<?php endwhile; ?>
			<?php bootstrapwp_content_nav('nav-below');?>

		</div><!-- /.span8 -->
		<?php get_sidebar('blog'); ?>

		<?php get_footer(); ?>