<?php
/**
 * The main template file.
 */

get_header(); ?>

<div class="page-wrap">
    <div id="content-container" class="container-fluid">
    	<div class="row">
			<div class="post-content col-sm-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; endif; ?>
			</div> <!-- col-sm-8 -->
			<div class="col-sm-4">
				<?php get_sidebar('right'); ?>
			</div>
		</div>
	</div> <!-- End Container -->
</div><!-- Page Wrap -->

<?php get_footer(); ?>