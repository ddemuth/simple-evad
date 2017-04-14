<?php get_header(); ?>
<?php
$parent_title = get_the_title($post->post_parent);
?>
<?php if (is_front_page()) { ?>
        <?php include 'homepage.php'; ?>     
<?php } else { ?>
<div class="page-wrap">
    <div id="content-container" class="container-fluid">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page-content col-sm-8">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
        
        <div class="col-sm-4">
            <?php get_sidebar('right'); ?>
        </div>
    </div> <!-- End Content Container -->
</div>
<?php get_footer(); ?>
<?php } ?>