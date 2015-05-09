<?php
/**
 * Simpel functions and definitions
 *
 * @package Simpel
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'simpel_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simpel_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Simpel, use a find and replace
	 * to change 'simpel' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'simpel', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'featured-thumb', 800,600, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'simpel' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
	
	add_theme_support('custom-header');
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'simpel_custom_background_args', array(
		'default-color' => '#ffffff',
		'default-image' => '',
	) ) );
}
endif; // simpel_setup
add_action( 'after_setup_theme', 'simpel_setup' );


/* 
 *  Adding title tag
*/

add_theme_support( 'title-tag' );

/*
 *  Enqueuing Google fonts
*/

function simpel_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Hammersmith One, translate this to 'off'. Do not translate
    * into your own language.
    */
    $hammersmith_one = _x( 'on', 'Hammersmith One font: on or off', 'simpel' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $merriweather_sans = _x( 'on', 'Merriweather Sans font: on or off', 'simpel' );
 
    if ( 'off' !== $hammersmith_one || 'off' !== $merriweather_sans ) {
        $font_families = array();
 
        if ( 'off' !== $hammersmith_one ) {
            $font_families[] = 'Hammersmith One';
        }
 
        if ( 'off' !== $merriweather_sans ) {
            $font_families[] = 'Merriweather Sans:300,400';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}

function simpel_scripts_styles() {
    wp_enqueue_style( 'simpel-fonts', simpel_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'simpel_scripts_styles' );


function simpel_customizer($wp_customize) {

	$wp_customize-> add_section(
	'layout_section',
	array(
		'title'	=> 'Layout Settings',
		'priority' => 1,
		)
	);
	
	$wp_customize-> add_setting(
	'page_layout',
	array(
		'default'	=> 'right',
		'transport' => 'refresh',
		'sanitize_callback'	=> 'simpel_sanitize_radio',
		)
	);
	
	$wp_customize->add_control(
    'page_layout',
    array(
        'type' => 'radio',
        'label' => 'Sidebar Layout',
        'section' => 'layout_section',
        'choices' => array(
            'left' => 'Left Sidebar',
            'right' => 'Right Sidebar',
             ),
         )
    );


	$wp_customize-> add_setting('logo');
    
    $wp_customize-> add_control(
	new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label' => __('OR Logo Upload', 'simpel'),
            'section' => 'title_tagline',
            'settings' => 'logo'
            )
        )
    );
    
	$wp_customize-> add_section(
    'simpel_social',
    array(
    	'title'			=> __('Social Settings','simpel'),
    	'description'	=> __('Manage the Social Icon Setings of your site.','simpel'),
    	'priority'		=> 3,
    	)
    );
    
    $wp_customize-> add_setting(
    'social',
    array(
    	'priority'	=> 'simpel_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'social',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Enable Social Icons','simpel'),
    	'section'	=> 'simpel_social',
    	'priority'	=> 1,
    	)
    );

    $wp_customize-> add_setting(
    'facebook',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'facebook',
    array(
    	'label'		=> __('Facebook URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'twitter',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'twitter',
    array(
    	'label'		=> __('Twitter URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'google-plus',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'google-plus',
    array(
    	'label'		=> __('Google Plus URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'instagram',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'instagram',
    array(
    	'label'		=> __('Instagram URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'pinterest-p',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'pinterest-p',
    array(
    	'label'		=> __('Pinterest URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'youtube',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'youtube',
    array(
    	'label'		=> __('Youtube URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'vimeo-square',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'vimeo-square',
    array(
    	'label'		=> __('Vimeo URL','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'envelope',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'envelope',
    array(
    	'label'		=> __('Your E-Mail Info','simpel'),
    	'section'	=> 'simpel_social',
    	'type'		=> 'text',
    	)
    );
     
     function simpel_sanitize_checkbox( $i ) {
    if ( $i == 1 ) {
        return 1;
    } else {
        return '';
    }
}

	function simpel_sanitize_radio($a) {
		$valid = array(
			'left' => 'Left Sidebar',
	        'right' => 'Right Sidebar',
	        );
	        
	        if (array_key_exists($a, $valid)) {
		        return $a;
		        } 
		        else {
		        return '';
		        }
	    }
}

add_action('customize_register', 'simpel_customizer');


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function simpel_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'simpel' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'simpel' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'simpel' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'simpel' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'simpel' ),
		'id'            => 'sidebar-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'simpel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function simpel_scripts() {
	wp_enqueue_style( 'simpel-style', get_stylesheet_uri() );

	wp_enqueue_style('simpel-bootstrap-style',get_template_directory_uri()."/assets/bootstrap/bootstrap.min.css", array('simpel-style'));
	
	wp_enqueue_style('simpel-main-skin',get_template_directory_uri()."/assets/skins/main.css", array('simpel-bootstrap-style'));
	
	 wp_enqueue_style('simpel-font-awesome', get_template_directory_uri()."/assets/font-awesome/css/font-awesome.min.css", array('simpel-main-skin')); 
	
	$pl = get_theme_mod('page_layout');	
		switch($pl) {
			case 'left':
				wp_enqueue_style('simpel-layout', get_template_directory_uri()."/layouts/sidebar-content.css");
				break;
			case 'right':
				wp_enqueue_style('simpel-layout', get_template_directory_uri()."/layouts/content-sidebar.css");
				break;
		}
	
	wp_enqueue_script( 'simpel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'simpel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'simpel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
