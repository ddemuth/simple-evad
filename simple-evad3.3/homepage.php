<?php include 'engagement-area.php'; ?>
<?php include 'custom-variables.php'; ?>
<div class="page-wrap">
    <div id="content-container" class="home-container container">
        <section id="service-container" class="row">
            <h1>Featured Shows</h1>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="box">
                    <img src="<?php echo $uploads['baseurl']; ?>/show-1.png" alt="Featured Show" />
                    <h3>Show 1</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim eros, tempus ac metus sed, aliquam ornare augue. Donec rutrum tellus id enim molestie, vel sollicitudin sem bibendum. Phasellus commodo pellentesque viverra. Vivamus hendrerit tristique faucibus. </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="box">
                    <img src="<?php echo $uploads['baseurl']; ?>/show-2.png" alt="Featured Show" />
                    <h3>Show 2</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim eros, tempus ac metus sed, aliquam ornare augue. Donec rutrum tellus id enim molestie, vel sollicitudin sem bibendum. Phasellus commodo pellentesque viverra. Vivamus hendrerit tristique faucibus. </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="box">
                    <img src="<?php echo $uploads['baseurl']; ?>/show-3.png" alt="Featured Show" />
                    <h3>Show 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim eros, tempus ac metus sed, aliquam ornare augue. Donec rutrum tellus id enim molestie, vel sollicitudin sem bibendum. Phasellus commodo pellentesque viverra. Vivamus hendrerit tristique faucibus. </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="box">
                    <img src="<?php echo $uploads['baseurl']; ?>/show-4.png" alt="Featured Show" />
                    <h3>Show 4</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim eros, tempus ac metus sed, aliquam ornare augue. Donec rutrum tellus id enim molestie, vel sollicitudin sem bibendum. Phasellus commodo pellentesque viverra. Vivamus hendrerit tristique faucibus. </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="box">
                    <img src="<?php echo $uploads['baseurl']; ?>/show-5.png" alt="Featured Show" />
                    <h3>Show 5</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim eros, tempus ac metus sed, aliquam ornare augue. Donec rutrum tellus id enim molestie, vel sollicitudin sem bibendum. Phasellus commodo pellentesque viverra. Vivamus hendrerit tristique faucibus. </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="box">
                    <img src="<?php echo $uploads['baseurl']; ?>/show-6.png" alt="Featured Show" />
                    <h3>Show 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim eros, tempus ac metus sed, aliquam ornare augue. Donec rutrum tellus id enim molestie, vel sollicitudin sem bibendum. Phasellus commodo pellentesque viverra. Vivamus hendrerit tristique faucibus. </p>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="newsletter col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="head col-sm-4">
                        <h2>Special Event Access</h2>
                        <p>Sign up for our newsletter to receive free special content and have access to discounts on special events.</p>
                    </div>
                    <div class="col-sm-8">
                        <?php echo do_shortcode('[gravityform id="1" name="Newsletter Signup" title="false" description="false" ajax="true"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div> <!-- End Content Container -->
</div>
<?php get_footer(); ?>