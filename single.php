<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>
<div class="page-wrap">
    <div id="content-container" class="container">
			<div class="row">
			  <div class="post-content col-sm-8">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
		  		 
			<?php /* twentythirteen_post_nav(); */ ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>
				</div> <!-- col-sm-9 -->
				<div class="col-sm-4">
					<?php get_sidebar('right'); ?>
				</div>
			</div>
		  	
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>