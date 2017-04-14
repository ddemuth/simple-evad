<?php $parent_title = get_the_title($post->post_parent); ?>
<?php if (is_page('archives')) { ?>
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Archive Sidebar') ) : ?> <?php endif; ?>
  
  <?php } elseif (is_home() || is_single() || is_archive())
 	{ ?>
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Blog Sidebar') ) : ?> <?php endif; ?>

<?php } else { ?>
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Default Sidebar') ) : ?> <?php endif; ?>
<?php } ?>
			 

	</div><!-- sidebar container and col -->