
<?php
/**
 * siboney functions and definitions
 *
 * @package siboney
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 700; /* pixels */

if ( ! function_exists( 'siboney_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function siboney_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( 'siboney_custom_background_args', array(
		'default-color' => '#fdfdfd',
		'default-image' => '',
	) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on siboney, use a find and replace
	 * to change 'siboney' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'siboney', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', 'siboney' ),
	) );

}
endif; // siboney_setup
add_action( 'after_setup_theme', 'siboney_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function siboney_widgets_init($name, $id, $description ) {
	register_sidebar( array(
		'name'          => __( $name, 'siboney' ),
		'id'            => $id,
		'description'	=> $description,
		'before_widget' => '<aside id="sidebar">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
//add_action( 'widgets_init', 'siboney_widgets_init' );
siboney_widgets_init( 'Front Sidebar', 'front', 'Displays on the side of home page' );
siboney_widgets_init( 'Blog Sidebar', 'blog', 'Displays on the side of blog listing page' );

/**
 * Enqueue scripts and styles
 */
function siboney_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( 'siboney-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( 'siboney-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( 'siboney-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	//Add Amatic SC, Josefin Sans, and Open Sans google fonts
	wp_enqueue_style( 'siboney-google-fonts', 'https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Josefin+Sans:400,600italic|Open+Sans');

	// load siboney styles
	wp_enqueue_style( 'siboney-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('siboney-bootstrapjs', get_template_directory_uri() . '/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );

	// load bootstrap wp js
	wp_enqueue_script( 'siboney-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery'), '', true );

	wp_enqueue_script( 'siboney-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'siboney-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	wp_enqueue_script( 'siboney-scriptsjs', get_template_directory_uri() . '/includes/js/scripts.js', array('jquery', 'siboney-bootstrapjs'), '', true );

	// load HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
	wp_enqueue_script( 'siboney-htm5shivjs', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');
	wp_script_add_data( 'siboney-htm5shivjs', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'siboney-respondjs', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
	wp_script_add_data( 'siboney-respondjs', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'siboney_scripts' );

/**
 * Add editor style (see http://www.wpbeginner.com/wp-tutorials/how-to-add-custom-styles-to-wordpress-visual-editor/)
 */

function siboney_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'siboney_add_editor_styles' );

/**
 * Exclude category from archive
 */
define("EXCLUDED_CATEGORIES", '3');

add_filter( 'getarchives_join' , 'getarchives_join_filter');
function getarchives_join_filter( $join ) {
	global $wpdb;
	return $join . " INNER JOIN {$wpdb->term_relationships} tr ON ($wpdb->posts.ID = tr.object_id) INNER JOIN {$wpdb->term_taxonomy} tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id)";
}

add_filter( 'getarchives_where' , 'getarchives_where_filter');
function getarchives_where_filter( $where ) {
	global $wpdb;

	$exclude = EXCLUDED_CATEGORIES; // category ids to exclude
	return $where . " AND tt.taxonomy = 'category' AND tt.term_id NOT IN ($exclude)";

	}

// exclude categories on monthly archive pages
function my_post_queries( $query ) {
	// do not alter the query on wp-admin pages and only alter it if it's the main query
	if (!is_admin() && $query->is_main_query()){

		// alter the query for monthly archive pages
		if(is_archive() && is_month()){
			$query->set('category__not_in', array(EXCLUDED_CATEGORIES));
		}
	}
}

add_action( 'pre_get_posts', 'my_post_queries' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
