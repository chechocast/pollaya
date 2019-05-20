<?php
/**
 * Tresse Creativos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tresse_Creativos
 */

if ( ! function_exists( 'tresse_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tresse_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Tresse Creativos, use a find and replace
		 * to change 'tresse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tresse', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size('mini-proyecto', 677, 533, true);
		add_image_size('img-proyecto', 1024, 806, true);
		add_image_size('mini-blog', 329, 220, true);
		add_image_size('img-blog', 1024, 512, true);
		add_image_size('foto-testimonial', 110, 110, true);
		add_image_size('logo-cliente', 200, 200, true);
		add_image_size('us-1', 800, 506, true);
		add_image_size('us-2', 800, 454, true);
		add_image_size('banner-desk', 1400, 460, true);
		add_image_size('banner-movil', 600, 400, true);


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tresse' ),
			'social-menu' => esc_html__( 'Social Menu', 'tresse' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tresse_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		//aqui van los proyectos
		add_action( 'init', 'tresse_proyectos' );
		function tresse_proyectos() {
		  $labels = array(
		    'name'               => _x( 'Proyectos', 'Tresse' ),
		    'singular_name'      => _x( 'Proyectos', 'post type singular name', 'Tresse' ),
		    'menu_name'          => _x( 'Proyectos', 'admin menu', 'Tresse' ),
		    'name_admin_bar'     => _x( 'Proyectos', 'add new on admin bar', 'Tresse' ),
		    'add_new'            => _x( 'Add New', 'book', 'Tresse' ),
		    'add_new_item'       => __( 'Add New Proyectos', 'Tresse' ),
		    'new_item'           => __( 'New Proyectos', 'Tresse' ),
		    'edit_item'          => __( 'Edit Proyectos', 'Tresse' ),
		    'view_item'          => __( 'View Proyectos', 'Tresse' ),
		    'all_items'          => __( 'All Proyectos', 'Tresse' ),
		    'search_items'       => __( 'Search Proyectos', 'Tresse' ),
		    'parent_item_colon'  => __( 'Parent Proyectos:', 'Tresse' ),
		    'not_found'          => __( 'No Proyectos found.', 'Tresse' ),
		    'not_found_in_trash' => __( 'No Proyectos found in Trash.', 'Tresse' )
		  );

		  $args = array(
		    'labels'             => $labels,
		    'description'        => __( 'Description.', 'Tresse' ),
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'proyectos' ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
		    'menu_position'      => 6,
		    'supports'           => array( 'title', 'editor', 'thumbnail' ),
		    'taxonomies'          => array( 'category' ),
		  );

		  register_post_type( 'proyectos', $args );
		}

		//aqui clientes
		add_action( 'init', 'tresse_clientes' );
		function tresse_clientes() {
		  $labels = array(
		    'name'               => _x( 'Clientes', 'Tresse' ),
		    'singular_name'      => _x( 'Clientes', 'post type singular name', 'Tresse' ),
		    'menu_name'          => _x( 'Clientes', 'admin menu', 'Tresse' ),
		    'name_admin_bar'     => _x( 'Clientes', 'add new on admin bar', 'Tresse' ),
		    'add_new'            => _x( 'Add New', 'book', 'Tresse' ),
		    'add_new_item'       => __( 'Add New Clientes', 'Tresse' ),
		    'new_item'           => __( 'New Clientes', 'Tresse' ),
		    'edit_item'          => __( 'Edit Clientes', 'Tresse' ),
		    'view_item'          => __( 'View Clientes', 'Tresse' ),
		    'all_items'          => __( 'All Clientes', 'Tresse' ),
		    'search_items'       => __( 'Search Clientes', 'Tresse' ),
		    'parent_item_colon'  => __( 'Parent Clientes:', 'Tresse' ),
		    'not_found'          => __( 'No Clientes found.', 'Tresse' ),
		    'not_found_in_trash' => __( 'No Clientes found in Trash.', 'Tresse' )
		  );

		  $args = array(
		    'labels'             => $labels,
		    'description'        => __( 'Description.', 'Tresse' ),
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'clientes' ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
		    'menu_position'      => 6,
		    'supports'           => array( 'title', 'editor', 'thumbnail' ),
		  );

		  register_post_type( 'clientes', $args );
		}

		//aqui testimoniales
		add_action( 'init', 'tresse_testimonial' );
		function tresse_testimonial() {
		  $labels = array(
		    'name'               => _x( 'Testimonial', 'Tresse' ),
		    'singular_name'      => _x( 'Testimonial', 'post type singular name', 'Tresse' ),
		    'menu_name'          => _x( 'Testimoniales', 'admin menu', 'Tresse' ),
		    'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'Tresse' ),
		    'add_new'            => _x( 'Add New', 'book', 'Tresse' ),
		    'add_new_item'       => __( 'Add New Testimonial', 'Tresse' ),
		    'new_item'           => __( 'New Testimonial', 'Tresse' ),
		    'edit_item'          => __( 'Edit Testimonial', 'Tresse' ),
		    'view_item'          => __( 'View Testimonial', 'Tresse' ),
		    'all_items'          => __( 'All Testimonial', 'Tresse' ),
		    'search_items'       => __( 'Search Testimonial', 'Tresse' ),
		    'parent_item_colon'  => __( 'Parent Testimonial:', 'Tresse' ),
		    'not_found'          => __( 'No Testimoniales found.', 'Tresse' ),
		    'not_found_in_trash' => __( 'No Testimoniales found in Trash.', 'Tresse' )
		  );

		  $args = array(
		    'labels'             => $labels,
		    'description'        => __( 'Description.', 'Tresse' ),
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'testimonial' ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
		    'menu_position'      => 6,
		    'supports'           => array( 'title', 'thumbnail' ),
		  );

		  register_post_type( 'testimonial', $args );
		}
		//aqui banners home
		add_action( 'init', 'tresse_banners' );
		function tresse_banners() {
		  $labels = array(
		    'name'               => _x( 'Banners', 'Tresse' ),
		    'singular_name'      => _x( 'Banners', 'post type singular name', 'Tresse' ),
		    'menu_name'          => _x( 'Banners', 'admin menu', 'Tresse' ),
		    'name_admin_bar'     => _x( 'Banners', 'add new on admin bar', 'Tresse' ),
		    'add_new'            => _x( 'Add New', 'book', 'Tresse' ),
		    'add_new_item'       => __( 'Add New Banners', 'Tresse' ),
		    'new_item'           => __( 'New Banners', 'Tresse' ),
		    'edit_item'          => __( 'Edit Banners', 'Tresse' ),
		    'view_item'          => __( 'View Banners', 'Tresse' ),
		    'all_items'          => __( 'All Banners', 'Tresse' ),
		    'search_items'       => __( 'Search Banners', 'Tresse' ),
		    'parent_item_colon'  => __( 'Parent Banners:', 'Tresse' ),
		    'not_found'          => __( 'No Banners found.', 'Tresse' ),
		    'not_found_in_trash' => __( 'No Banners found in Trash.', 'Tresse' )
		  );

		  $args = array(
		    'labels'             => $labels,
		    'description'        => __( 'Description.', 'Tresse' ),
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'banners' ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
		    'menu_position'      => 6,
		    'supports'           => array( 'title' ),
		  );

		  register_post_type( 'banners', $args );
		}
	}
endif;
add_action( 'after_setup_theme', 'tresse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tresse_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tresse_content_width', 640 );
}
add_action( 'after_setup_theme', 'tresse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tresse_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tresse' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tresse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tresse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tresse_scripts() {
	wp_enqueue_style( 'tresse-style', get_stylesheet_uri() );

	wp_enqueue_style( 'tresse-css', get_template_directory_uri() . '/css/styles.css', '1.0' );

	wp_enqueue_script( 'tresse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tresse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'tresse-js', get_template_directory_uri() . '/js/app.js', array(), '', true );

	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.1'); // Custom scripts borrar cuando arregle el llamado desde app.js


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tresse_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

