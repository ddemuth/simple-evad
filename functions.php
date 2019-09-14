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

//Add Image Sizes
//add_image_size( 'post-main-image', 1200, 370, array( 'center', 'center' ) );
/**
* Enqueue scripts and styles
*/
function evad_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'evad-bootstrapcss', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

	// load Mainstyles
	wp_enqueue_style( 'style', get_stylesheet_uri(), false, '1.0' );

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