<?php
/**
 * The template for displaying the footer.
 */
?>
<?php include 'custom-variables.php'; ?>
	<footer class="footer-wrap">
		<section id="footer1" class="footer-container">
		  	<div class="footer-content container">
			  	<div class="row">
					<div class="col-sm-7">
						<img class="logo" src="<?php echo $uploads['baseurl']; ?>/fit-kids-old-logo.png" alt="<?php bloginfo('name'); ?>"/>
						<p>Fit Kids America strives to fight childhood obesity by inspiring kids at a young age to find the love of fitness. By incorporating movement at a young age, chances are kids will stay active into adulthood. Fit Kids America offers after-school programs that are convenient for busy families and fun for kids to participate in with all of their schoolmates.</p>
						<p>info@fitkidsamerica.com</p>
					</div>

					<div class="col-sm-5">
						<h2>Webpage Links</h2>
						<div class="menu-host-navigation-container">
							<ul id="menu-host-navigation-1" class="menu">
								<li><a href="#">Host Link 1</a></li>
								<li><a href="#">Host Link 2</a></li>
								<li><a href="#">Host Link 3</a></li>
								<li><a href="#">Host Link 4</a></li>
								<li><a href="#">Host Link 5</a></li>
								<li><a href="#">Host Link 6</a></li>
							</ul>
						</div>
						<!-- <nav><?php wp_nav_menu(array('menu' => 'Host Navigation' )); ?></nav> -->
					</div>
				</div>
			</div>
		</section>
		<section id="footer2" class="footer-container">
			<div class="footer-content container">
				<div class="row">
					<div class="col-sm-12">
						<p class="copyright">&copy; <?php echo date('Y'); ?>  Fit Kids America All Rights Reserved. </p>
						<!-- Site designed and developed by <a href="http://www.evaddesign.com/" title="Carlsbad Web Designer">Evad Design</a> -->
					</div>
				</div>
			</div>
		</section>
	</footer>

</div> <!-- End Site Container -->
<?php wp_footer(); ?>
</body>
</html>