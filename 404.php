<?php
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit();
    }

    if( class_exists( 'ReduxFramework' ) ) {
        $medprosearch404title     = medprosearch_opt( 'medprosearch_fof_title' );
        $medprosearch404subtitle  = medprosearch_opt( 'medprosearch_fof_subtitle' );
        $medprosearch404btntext   = medprosearch_opt( 'medprosearch_fof_btn_text' );
        $medprosearch_404_image   = medprosearch_opt( 'medprosearch_404_image','url' );
    } else {
        $medprosearch404title     = __( 'Oops! That page can\'t be found', 'medprosearch' );
        $medprosearch404subtitle  = __( 'Unfortunately, something went wrong and this page does not exist. Try using the search or return to the previous page.', 'medprosearch' );
        $medprosearch404btntext   = __( 'Go Back Home', 'medprosearch');
        $medprosearch_404_image   = get_template_directory_uri().'/assets/img/error.png';
    }

    // get header
    get_header();
    echo '<section class="vs-error-wrapper space">';
        echo '<div class="container">';
            echo '<div class="error-content text-center">';
                echo '<h2 class="h1 mt-n3">'.esc_html( $medprosearch404title ).'</h2>';
                echo '<div class="row justify-content-center">';
                    
                    echo '<div class="col-md-8 col-lg-7 col-xl-5">';
                        echo '<p class="px-xl-2 mb-4 pb-xl-2">'.esc_html( $medprosearch404subtitle ).'</p>';
                        echo '<a href="'.esc_url( home_url('/') ).'" class="vs-btn style2">'.esc_html( $medprosearch404btntext ).'</a>';
                    echo '</div>';

                    if( ! empty( $medprosearch_404_image ) ){
                        echo '<div class="col-xl-10 mt-3 mt-lg-0">';
                            echo medprosearch_img_tag( array(
                                    'url'       => esc_url( $medprosearch_404_image ),
                                ) );
                        echo '</div>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</section>';
    //footer
    get_footer();
