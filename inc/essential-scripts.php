<?php

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue scripts and styles.
 */
function medprosearch_essential_scripts() {

    wp_enqueue_style( 'medprosearch-style', get_stylesheet_uri() ,array(), wp_get_theme()->get( 'Version' ) );

    // google font
    wp_enqueue_style( 'medprosearch-fonts', medprosearch_google_fonts() ,array(), null );

    // animate
    wp_enqueue_style( 'animate-css', get_theme_file_uri( '/assets/css/animate.min.css' ) ,array(), '4.3.1' );

    // Bootstrap Min
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ) ,array(), '4.3.1' );

    // Font Awesome Five
    wp_enqueue_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.min.css' ) ,array(), '5.9.0' );

    // Date Picker Css
    wp_enqueue_style( 'medprosearch-jquery-datetimepicker', get_theme_file_uri( '/assets/css/jquery.datetimepicker.min.css' ) ,array(), '1.0' );

    // Magnific Popup
    wp_enqueue_style( 'magnific-popup', get_theme_file_uri( '/assets/css/magnific-popup.min.css' ), array(), '1.0' );

    // Slick css
    wp_enqueue_style( 'slick', get_theme_file_uri( '/assets/css/slick.min.css' ) ,array(), '4.0.13' );

    // medprosearch app style
    wp_enqueue_style( 'medprosearch-main-style', get_theme_file_uri('/assets/css/style.css') ,array(), wp_get_theme()->get( 'Version' ) );

    // Load Js

    // Bootstrap
    wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ), '4.3.1', true );

    // Isotope
    wp_enqueue_script( 'isototpe-pkgd', get_theme_file_uri( '/assets/js/isotope.pkgd.min.js' ), array( 'jquery' ), '1.0.0', true );

    // Datetimepicker
    wp_enqueue_script( 'medprosearch-jquery-datetimepicker', get_theme_file_uri( '/assets/js/jquery.datetimepicker.min.js' ), array( 'jquery' ), '4.3.1', true );

    // magnific popup
    wp_enqueue_script( 'medprosearch-jquery-magnific-popup', get_theme_file_uri( '/assets/js/jquery.magnific-popup.min.js' ), array('jquery'), '1.0.0', true );

    // Slick
    wp_enqueue_script( 'slick', get_theme_file_uri( '/assets/js/slick.min.js' ), array('jquery'), '1.0.0', true );

    // parallax
    wp_enqueue_script( 'universal-parallax', get_theme_file_uri( '/assets/js/universal-parallax.min.js' ), array('jquery'), '1.0.0', true );


    // cursor Menu
    wp_enqueue_script( 'vscustom-carousel', get_theme_file_uri( '/assets/js/vscustom-carousel.min.js' ), array('jquery'), '1.0.0', true );


    // wow script
    wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.min.js' ), array('jquery'), '1.0.0', true );

    // main script
    wp_enqueue_script( 'medprosearch-main-script', get_theme_file_uri( '/assets/js/main.js' ), array('jquery'), wp_get_theme()->get( 'Version' ), true );

    // comment reply
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'medprosearch_essential_scripts',99 );


function medprosearch_block_editor_assets( ) {
    // Add custom fonts.
    wp_enqueue_style( 'medprosearch-editor-fonts', medprosearch_google_fonts(), array(), null );
}

add_action( 'enqueue_block_editor_assets', 'medprosearch_block_editor_assets' );

/*
Register Fonts
*/
function medprosearch_google_fonts() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
     
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'medixi' ) ) {
        $font_url =  'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Quicksand:wght@400;700&family=Roboto:wght@400;500;700&display=swap';
    }
    return $font_url;
}
