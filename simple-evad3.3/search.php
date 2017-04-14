<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="page-wrap">
    <div id="content-container" class="container-fluid">
			
			<?php if ( have_posts() ) : ?>
			<?php 
			// echo '<pre>';print_r($wp_query);exit; 
			?>
			<div id="search-filter" class="row">
				<div class="col-sm-6 col-md-5">
                <?php get_template_part( 'searchform', 'school' ); ?>
                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
	            </div>
	            <div class="col-sm-6 col-md-6 col-md-push-1">
	                <form id="dropdown-search" class="school-search fka-search" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	                <?php do_action( 'fka_school_list_dropdown' ); ?>
	                <!-- <input type="hidden" name="post_type" value="fka_schools" /> -->
	                <button class="btn btn-default" type="submit">Find</button>
	                        
	                </form>
	                 
	            </div>
			</div>
			<div class="row">
			
			<?php
			
			$search_results_posts = $wp_query->posts;
			$search_results_posts_ids = array();
			// Start the loop.
			while ( have_posts() ) : the_post(); 
			$search_results_posts_ids[] = $post->ID;
			// echo '<pre>';print_r($wp_query);exit;
			?>
			
			
				<?php
				/*
				 * Run the loop for the search to output the results.
				 * 
				 */
				get_template_part( 'content', 'search-school' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content', 'none' ); ?>
			</div>
			<?php endif; ?>
		
	</div> <!-- End Container -->
</div><!-- Page Wrap -->
		

<?php get_footer(); ?>