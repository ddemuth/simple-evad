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
						<img class="logo" src="<?php echo $uploads['baseurl']; ?>/fit-kids-old-logo.png" alt="<?php bloginfo('name'); ?>" />
						<p>A very good description about what the organization does.</p>
						<p>email@email.com</p>	
					</div>

					<div class="col-sm-5">
						<h2>Webpage Links</h2>
						<div class="menu-host-navigation-container">
							<ul id="menu-host-navigation-1" class="menu">
								<li><a href="#"> Link 1</a></li>
								<li><a href="#"> Link 2</a></li>
								<li><a href="#"> Link 3</a></li>
								<li><a href="#"> Link 4</a></li>
								<li><a href="#"> Link 5</a></li>
								<li><a href="#"> Link 6</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="footer2" class="footer-container">
			<div class="footer-content container">
				<div class="row">
					<div class="col-sm-12">
						<p class="copyright">&copy; <?php echo date('Y'); ?>  Business Name All Rights Reserved. </p>
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