<?php
/**
 * Evad functions and definitions.
 */

// function woocommerce_support() {
// 	    add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'woocommerce_support');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 
/**
* Enqueue scripts and styles
*/
function evad_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'evad-bootstrapcss', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

	// load Mainstyles
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('evad-bootstrapjs', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array('jquery'), false, true );

	// load js for cookie tracking. From plugin https://github.com/js-cookie/js-cookie
	// wp_enqueue_script('evad-cookiejs', get_stylesheet_directory_uri().'/js/js.cookie.js', array(), false, true );

	//Load TypeKit
	wp_enqueue_script( 'fka_typekit', '//use.typekit.net/xrr5fxy.js', array(), null, false);
}
add_action( 'wp_enqueue_scripts', 'evad_scripts' );

function fka_typekit_inline() {
  if ( wp_script_is( 'fka_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_footer', 'fka_typekit_inline' );
/**
 * Registers widget areas.
 *
 * @since Simple Evad 1.0
 *
 * @return void
 */



function evad_widgets() {
 
 	register_sidebar( array(
		'name'          => __( 'Blog SideBar', 'twentythirteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Blog Sidebar', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
 	

}
add_action( 'widgets_init', 'evad_widgets' );




if ( ! function_exists( 'twentythirteen_post_nav' ) ) :
/**
 * Displays navigation to next/previous post when applicable.
*
* @since Twenty Thirteen 1.0
*
* @return void
*/
function twentythirteen_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'twentythirteen' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'twentythirteen' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
<?php } 
endif;

if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentythirteen_entry_meta() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function twentythirteen_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . __( 'Sticky', 'twentythirteen' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		twentythirteen_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentythirteen' ) );
  /*if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
		}*/

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;

//Login Page Customization
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/login-logo.png');
            padding-bottom: 30px;
            background-size: auto;
            width: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
	$evaddesign_url = "http://www.evaddesign.com";
    return $evaddesign_url;
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Created with Evad Design';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* 
 * Enable the WordPress Admin Bar for admins only 
 */  
if ( !current_user_can( 'manage_options' ) ) {  
    remove_action( 'init', '_wp_admin_bar_init' );  
} 


/**  ---------  BOOTSTRAP NAVIGATION ---   **/

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

?>