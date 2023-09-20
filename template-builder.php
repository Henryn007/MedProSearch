<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit( );
}

//Header
get_header();

// Container or wrapper div
$medprosearch_layout = medprosearch_meta( 'custom_page_layout' );

if( $medprosearch_layout == '1' ){
	echo '<div class="medprosearch-main-wrapper">';
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
}elseif( $medprosearch_layout == '2' ){
    echo '<div class="medprosearch-main-wrapper">';
		echo '<div class="container-fluid">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
}else{
	echo '<div class="medprosearch-fluid">';
}
	echo '<div class="builder-page-wrapper">';
	// Query
	if( have_posts() ){
		while( have_posts() ){
			the_post();
			the_content();
		}
        wp_reset_postdata();
	}

	echo '</div>';
if( $medprosearch_layout == '1' ){
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}elseif( $medprosearch_layout == '2' ){
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}else{
	echo '</div>';
}

//footer
get_footer();
