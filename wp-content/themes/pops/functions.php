<?php

/**
 * Main functions and definitions
 *
 * @package POPS
 */

/**
 * Require helpers
 */
require dirname( __FILE__ ) . '/library/functions/helpers.php';

/**
 * Set theme name which will be referenced from style & script registrations
 * @return WP_Theme
 */
function pops_theme() {
    return wp_get_theme();
}

/**
 * Set custom imagesizes
 *
 * @return array
 */
function pops_set_imagesizes() {
    return [
        [
            'name'   => 'about_img',
            'width'  => 436,
            'height' => 251,
            'crop'   => true
        ]
    ];
}

/**
 * If defined, the feed will be shown on admin dashboard
 */
define( 'FEED_URI', 'http://omnipartners.fi/feed' );

/**
 * Define Translation domain which will be used on WP __() & _e() -functions
 *
 * note: change also the one on style.css also
 */
define( 'TEXT_DOMAIN', 'nord' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640;
}

/**
 * Set up theme defaults and register support for various WordPress features.
 */
if ( ! function_exists( 'pops_setup' ) ) :

    function pops_setup() {

        global $cap, $content_width;

        /**
         * Load textdomain
         */
        load_theme_textdomain( TEXT_DOMAIN, get_template_directory() . '/library/lang' );

        /**
         * Add editor styling
         */
        add_editor_style( asset_uri( 'styles/main.css' ) );

        /**
         * Require some classes
         */
        require_files( dirname( __FILE__ ) . '/library/classes' );

        /**
         * Require custom post types
         */
        require_files( dirname( __FILE__ ) . '/library/custom-posts' );

        /**
         * Require metaboxes
         */
        require_files( dirname( __FILE__ ) . '/library/metaboxes' );

        /**
         * Widgets (nav-menus & widgetized areas)
         */
        require_files( dirname( __FILE__ ) . '/library/widgets' );

        /**
         * Functions and helpers
         */
        require_files( dirname( __FILE__ ) . '/library/functions' );

        /**
         * Hooks
         */
        require_files( dirname( __FILE__ ) . '/library/hooks' );

        /**
         * Theme supports
         */
        if ( function_exists( 'add_theme_support' ) ) {
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'html5', [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'title-tag' );
            //add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
        }

        /**
         * Register custom imagesizes
         */
        if ( ! empty( pops_set_imagesizes() ) ) {
            foreach ( pops_set_imagesizes() as $size ) {
                add_image_size( $size['name'], $size['width'], $size['height'], $size['crop'] );
            }
        }

    }

endif; // pops_setup

add_action( 'after_setup_theme', 'pops_setup' );

/**
 * Add feed (if defined) to dashboard
 */
add_action( 'wp_dashboard_setup', function () {
    if ( defined( 'FEED_URI' ) ) {
        add_meta_box( 'dashboard_custom_feed', 'Feed', 'pops_feed', 'dashboard', 'side', 'low' );
    }

    function pops_feed() {
        echo '<div class="rss-widget">';
        wp_widget_rss_output( [
            'url'          => FEED_URI,
            'title'        => __( 'Title', TEXT_DOMAIN ),
            'items'        => 2,
            'show_title'   => 0,
            'show_summary' => 1,
            'show_author'  => 0,
            'show_date'    => 1
        ] );
        echo "</div>";
    }
} );

/**
 * Add admin scripts & styles
 */
function pops_admin_style() {
    echo '<link rel="stylesheet" href="' . asset_uri( 'styles/admin.css' ) . '" type="text/css" media="all" />';
}

add_action( 'login_head', 'pops_admin_style' );
add_action( 'admin_head', 'pops_admin_style' );

add_action( 'admin_enqueue_scripts', function () {
    wp_enqueue_script(
        'nord-admin',
        asset_uri( 'scripts/admin.min.js' ),
        [ 'jquery' ],
        pops_theme()->get( 'Version' )
    );
} );

/**
 * Add text to theme footer
 */
add_filter( 'admin_footer_text', function () {
    return '<span id="footer-thankyou">' . pops_theme()->Name . ' by: <a href="' . pops_theme()->AuthorURI . '" target="_blank">' . pops_theme()->Author . '</a><span>';
} );

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', function () {

    /**
     * Main scripts file
     */
    wp_enqueue_script(
        'nord-theme',
        asset_uri( 'scripts/main.min.js' ),
        [ 'jquery' ],
        pops_theme()->get( 'Version' ),
        true
    );

    /**
     * Main style
     */
    wp_enqueue_style(
        'nord-style',
        asset_uri( 'styles/main.css' ),
        [],
        pops_theme()->get( 'Version' )
    );
} );

/**
 * Allow svg-uploads
 */
add_filter( 'upload_mimes', function ( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
} );

/**
 * Change default WP-API endpoints
 *
 * @return mixed|void
 */

add_filter( 'rest_url_prefix', function () {
    return 'api';
} );

add_filter( 'json_url_prefix', function () {
    return 'api';
} );

/**
 * Move WP-templates to templates-folder for cleaner experience on dev
 */
add_filter( 'stylesheet', function ( $stylesheet ) {
    return dirname( $stylesheet );
} );

add_action( 'after_switch_theme', function () {
    $stylesheet = get_option( 'stylesheet' );
    if ( basename( $stylesheet ) !== 'templates' ) {
        update_option( 'stylesheet', $stylesheet . '/templates' );
    }
} );