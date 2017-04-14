<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
  	<link rel="shortcut icon" href="/favicon.png" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>	
</head>
<?php include 'custom-variables.php'; ?>
<body <?php body_class(); ?> >
<?php include 'analytics.php' ; ?>
<div class="site-wrap">
	<header class="header-wrap">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
						<img class="logo" src="<?php echo $uploads['baseurl']; ?>/fit-kids-old-logo.png" alt="<?php bloginfo('name'); ?>"/>
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <?php  
			      	wp_nav_menu( array(
					  'menu' => 'Main Navigation',
					  'depth' => 2,
					  'menu_class' => 'menu nav navbar-nav',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker())
					);?>

					<div class="col-sm-3 col-md-5 col-md-push-2 search-container">
						<form class="navbar-form school-search fka-search" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for your school..." name="s" id="srch-term" value="<?php echo get_search_query(); ?>">
								<input type="hidden" name="post_type" value="fka_schools" />
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>

					<?php  
			      	wp_nav_menu( array(
					  'menu' => 'Main Cart Navigation',
					  'depth' => 2,
					  'menu_class' => 'nav navbar-nav navbar-right',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker())
					);?>
				</div><!--/.nav-collapse -->
			</div>
    	</nav>
	</header>
