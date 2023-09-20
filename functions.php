<?php

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Include File
 *
 */

// Constants
require_once get_parent_theme_file_path() . '/inc/medprosearch-constants.php';

//theme setup
require_once MEDPROSEARCH_DIR_PATH_INC . 'theme-setup.php';

//essential scripts
require_once MEDPROSEARCH_DIR_PATH_INC . 'essential-scripts.php';

// Woo Hooks
require_once MEDPROSEARCH_DIR_PATH_INC . 'woo-hooks/medprosearch-woo-hooks.php';

// Woo Hooks Functions
require_once MEDPROSEARCH_DIR_PATH_INC . 'woo-hooks/medprosearch-woo-hooks-functions.php';

// plugin activation
require_once MEDPROSEARCH_DIR_PATH_FRAM . 'plugins-activation/medprosearch-active-plugins.php';

// meta options
require_once MEDPROSEARCH_DIR_PATH_FRAM . 'medixi-meta/medprosearch-config.php';

// page breadcrumbs
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-breadcrumbs.php';

// sidebar register
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-widgets-reg.php';

//essential functions
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-functions.php';

// helper function
require_once MEDPROSEARCH_DIR_PATH_INC . 'wp-html-helper.php';

// Demo Data
require_once MEDPROSEARCH_DEMO_DIR_PATH . 'demo-import.php';

// pagination
require_once MEDPROSEARCH_DIR_PATH_INC . 'wp_bootstrap_pagination.php';

// medprosearch options
require_once MEDPROSEARCH_DIR_PATH_FRAM . 'medprosearch-options/medprosearch-options.php';

// meta options
require_once MEDPROSEARCH_DIR_PATH_FRAM . 'medprosearch-meta/medprosearch-config.php';

// page breadcrumbs
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-breadcrumbs.php';

// sidebar register
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-widgets-reg.php';

//essential functions
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-functions.php';

// hooks
require_once MEDPROSEARCH_DIR_PATH_HOOKS . 'hooks.php';

// meta options
require_once MEDPROSEARCH_DIR_PATH_FRAM . 'medprosearch-meta/medixi-config.php';

// page breadcrumbs
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-breadcrumbs.php';

// sidebar register
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-widgets-reg.php';

//essential functions
require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-functions.php';

// hooks funtion
require_once MEDPROSEARCH_DIR_PATH_HOOKS . 'hooks-functions.php';


require_once MEDPROSEARCH_DIR_PATH_INC . 'medprosearch-commoncss.php';
