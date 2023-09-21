<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit();
}

// enqueue css
function medprosearch_common_custom_css(){
	wp_enqueue_style( 'medprosearch-color-schemes', get_template_directory_uri().'/assets/css/color.schemes.css' );

    $CustomCssOpt  = medprosearch_opt( 'medprosearch_css_editor' );
	if( $CustomCssOpt ){
		$CustomCssOpt = $CustomCssOpt;
	}else{
		$CustomCssOpt = '';
	}

    $customcss = "";

    if( get_header_image() ){
        $medprosearch_header_bg =  get_header_image();
    }else{
        if( medprosearch_meta( 'page_breadcrumb_settings' ) == 'page' && is_page() ){
            if( ! empty( medprosearch_meta( 'breadcumb_image' ) ) ){
                $medprosearch_header_bg = medprosearch_meta( 'breadcumb_image' );
            }
        }
    }

    if( !empty( $medprosearch_header_bg ) ){
        $customcss .= ".breadcumb-wrapper{
            background-image:url('{$medprosearch_header_bg}')!important;
        }";
    }

	// theme color
	$medprosearchthemecolor  = medprosearch_opt('medprosearch_theme_color');
	$medprosearchsecondcolor = medprosearch_opt('medprosearch_secondary_color');

	if( !empty( $medprosearchthemecolor ) ) {
		$customcss .= ":root {
		  --theme-color: {$medprosearchthemecolor};
		}";
	}

	if( !empty( $medprosearchsecondcolor ) ) {
		$customcss .= ":root {
			--title-color: {$medprosearchsecondcolor};
		}";
	}


	if( !empty( $CustomCssOpt ) ){
		$customcss .= $CustomCssOpt;
	}

    wp_add_inline_style( 'medprosearch-color-schemes', $customcss );
}
add_action( 'wp_enqueue_scripts', 'medprosearch_common_custom_css', 100 );
