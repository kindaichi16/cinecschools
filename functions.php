<?php 
load_theme_textdomain('cinec_school_theme', get_template_directory() .'/languages' );

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ($_SERVER['HTTP_HOST'] == "192.168.7.107:81") {
	include_once($_SERVER['DOCUMENT_ROOT'].'/news_fetch/cinec_newsletter.php');
} else {
	include_once('/home/thazel/public_html/news_fetch/cinec_newsletter.php');
}
include_once('scripts/breadcrumbs.php');
include_once('scripts/theme-customizer.php');
//include_once('scripts/attachments.php');
//include_once('scripts/contact-submit.php');

function cinecschools_register_my_menus() {
	register_nav_menus(
	array( 'primary' => __( 'Header Menu' ) )
	);
	register_nav_menus(
	array( 'footer-menu' => __( 'Footer Menu' ) )
	);
	register_nav_menus(
	array( 'left-side-menu' => __( 'Left Side Menu' ) )
	);
}
add_action( 'init', 'cinecschools_register_my_menus' );

// Register custom navigation walker
require_once('scripts/wp_bootstrap_navwalker.php');
//thumbnail support on theme
add_theme_support( 'post-thumbnails' );

//Register widgets
function cinecschools_widgets_init() {
register_sidebar (array(
'name' => __('Header-Language','cinec'),
'id' => "header-language-widget-area",
/*'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',*/
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>' )
);
/*register_sidebar (array(
'name' => __('Footer-Address','cinec'),
'id' => "footer-address-widget-area",
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>' )
);*/
}
add_action('init', 'cinecschools_widgets_init');

function cinecschools_check_thumbnail($width) {
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail(array( $width,$width,'class' => ' thumb-news img-responsive'));
	} else {
	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png" class="img-responsive thumb-news" width="'.$width.'" height="'.$width.'" />';
	}
}

function cinecschools_check_thumbnail_link($width) {
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
		echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
		the_post_thumbnail(array( $width,$width,'class' => ' thumb-news img-responsive'));
		echo '</a>';
	} else {
	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png" class="img-responsive thumb-news" width="'.$width.'" height="'.$width.'" />';
	}	
}

// Enqueue Scripts/Styles for fancybox
function cinecschools_add_lightbox() {
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
		//wp_enqueue_script( 'cinecschools', get_template_directory_uri() . '/js/cinecschools.js', array( 'jquery' ), false, true );
    wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css' );
}
add_action( 'wp_enqueue_scripts', 'cinecschools_add_lightbox' );

function cinecschools_add_js() {
    wp_enqueue_script( 'cinecschools', get_template_directory_uri() . '/js/cinecschools.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'cinecschools_add_js' );

function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
}

/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

/*function pdf_add_link( $content ) {
	global $post;
	
	if ( !is_single() ) return $content;
	$args = array(
		'numberposts' => 1,
		'order' => 'ASC',
		'post_mime_type' => 'application/pdf',
		'post_parent' => $post->ID,
		'post_status' => null,
		'post_type' => 'attachment',
	);
	$attachments = get_children( $args );
	if ( $attachments ) {
		foreach ( $attachments as $attachment ) {
			$content = '<div class="pdf_download"><a href="' . wp_get_attachment_url( $attachment->ID ) . '" target="_blank" >[:en]Download article as PDF[:zh]附件[:]</a></div>' . $content;			
		}
	}
	
	return $content;
	
}*/
//add_filter( 'the_content' , 'pdf_add_link' );

function wpbg_add_filters_front() {

	$use_filters = array(

		/* one-argument filters */
		'next' => 20,
		'prev' => 20,
	);

	foreach ( $use_filters as $name => $priority ) {
		add_filter( $name, 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', $priority );
	}
}
wpbg_add_filters_front();

function cinecschools_remove_menus(){
  if ( !current_user_can( 'manage_options' ) ) {

		//remove_menu_page( 'index.php' );                  //Dashboard
		//remove_menu_page( 'jetpack' );                    //Jetpack* 
		//remove_menu_page( 'edit.php' );                   //Posts
		//remove_menu_page( 'upload.php' );                 //Media
		//remove_menu_page( 'edit.php?post_type=page' );    //Pages
		//remove_menu_page( 'edit-comments.php' );          //Comments
		//remove_menu_page( 'themes.php' );                 //Appearance
		remove_menu_page( 'plugins.php' );                //Plugins
		remove_menu_page( 'users.php' );                  //Users
		remove_menu_page( 'tools.php' );                  //Tools
		remove_menu_page( 'options-general.php' );        //Settings
	}
}
add_action( 'admin_menu', 'cinecschools_remove_menus' );

function cinecschools_add_theme_menus(){
  if ( current_user_can( 'edit_others_pages' ) ) {

		add_menu_page( 'themes.php' );                 //Appearance

	}
}
//add_action( 'admin_menu', 'cinecschools_add_theme_menus' );

function cinecschools_add_theme_caps(){
  global $pagenow;

  // gets the author role
  $editor_role = get_role( 'editor' );

  if ( 'themes.php' == $pagenow && isset( $_GET['activated'] ) ){ // Test if theme is activated
    // Theme is activated

		//$role->add_menu_page( 'themes.php' );

    // This only works, because it accesses the class instance.
    // would allow the author to edit others' posts for current theme only
    $editor_role->add_cap( 'edit_theme_options', true ); 
  }
  else {
    // Theme is deactivated
    // Remove the capacity when theme is deactivated
    $editor_role->remove_cap( 'edit_theme_options' ); 
  }
}
add_action( 'load-themes.php', 'cinecschools_add_theme_caps' );
?>