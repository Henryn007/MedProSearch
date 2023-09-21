<?php

// Block direct access
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'MEDPROSEARCH_DIR_URI' ) ) {
    define('MEDPROSEARCH_DIR_URI', get_parent_theme_file_uri().'/' );
}

// Assist URI
if ( ! defined( 'MEDPROSEARCH_DIR_ASSIST_URI' ) ) {
    define( 'MEDPROSEARCH_DIR_ASSIST_URI', get_theme_file_uri('/assets/') );
}


// Css File URI
if ( ! defined( 'MEDPROSEARCH_DIR_CSS_URI' ) ) {
    define( 'MEDPROSEARCH_DIR_CSS_URI', get_theme_file_uri('/assets/css/') );
}

// Skin Css File
if ( ! defined( 'MEDPROSEARCH_DIR_SKIN_CSS_URI' ) ) {
    define( 'MEDPROSEARCH_DIR_SKIN_CSS_URI', get_theme_file_uri('/assets/css/skins/') );
}


// Js File URI
if (!defined('MEDPROSEARCH_DIR_JS_URI')) {
    define('MEDPROSEARCH_DIR_JS_URI', get_theme_file_uri('/assets/js/'));
}


// External PLugin File URI
if (!defined('MEDPROSEARCH_DIR_PLUGIN_URI')) {
    define('MEDPROSEARCH_DIR_PLUGIN_URI', get_theme_file_uri( '/assets/plugins/'));
}

// Base Directory
if (!defined('MEDPROSEARCH_DIR_PATH')) {
    define('MEDPROSEARCH_DIR_PATH', get_parent_theme_file_path() . '/');
}

//Inc Folder Directory
if (!defined('MEDPROSEARCH_DIR_PATH_INC')) {
    define('MEDPROSEARCH_DIR_PATH_INC', MEDPROSEARCH_DIR_PATH . 'inc/');
}

//MEDIXI framework Folder Directory
if (!defined('MEDPROSEARCH_DIR_PATH_FRAM')) {
    define('MEDPROSEARCH_DIR_PATH_FRAM', MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-framework/');
}

//Classes Folder Directory
if (!defined('MEDPROSEARCH_DIR_PATH_CLASSES')) {
    define('MEDPROSEARCH_DIR_PATH_CLASSES', MEDPROSEARCH_DIR_PATH_INC . 'classes/');
}

//Hooks Folder Directory
if (!defined('MEDPROSEARCH_DIR_PATH_HOOKS')) {
    define('MEDPROSEARCH_DIR_PATH_HOOKS', MEDPROSEARCH_DIR_PATH_INC . 'hooks/');
}

//Demo Data Folder Directory Path
if( !defined( 'MEDPROSEARCH_DEMO_DIR_PATH' ) ){
    define( 'MEDPROSEARCH_DEMO_DIR_PATH', MEDPROSEARCH_DIR_PATH_INC.'demo-data/' );
}
    
//Demo Data Folder Directory URI
if( !defined( 'MEDPROSEARCH_DEMO_DIR_URI' ) ){
    define( 'MEDPROSEARCH_DEMO_DIR_URI', MEDPROSEARCH_DIR_URI.'inc/demo-data/' );
}
