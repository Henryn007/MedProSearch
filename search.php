<?php


// Block direct access
if ( ! defined('ABSPATH') ) {
    exit;
}   
    // Header
    get_header();

    /**
    * 
    * Hook for Blog Start Wrapper
    *
    * Hook medprosearch_blog_start_wrap
    *
    * @Hooked medprosearch_blog_start_wrap_cb 10
    *  
    */
    do_action( 'medprosearch_blog_start_wrap' );

    /**
    * 
    * Hook for Blog Column Start Wrapper
    *
    * Hook medprosearch_blog_col_start_wrap
    *
    * @Hooked medprosearch_blog_col_start_wrap_cb 10
    *  
    */
    do_action( 'medprosearch_blog_col_start_wrap' );

    echo '<div class="row filter-active">';
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                if ( is_active_sidebar( 'medprosearch-blog-sidebar' ) ) {
                    $column_class = 'col-md-6 filter-item';
                }else{
                    $column_class = 'col-md-4 filter-item';
                }
                echo '<div class="'.esc_attr( $column_class ).'">';
                    echo '<div class="search-card">';
                        if( has_post_thumbnail() ){
                            echo '<div class="search-card-img image-scale-hover">';
                                echo '<a href="'.esc_url( get_the_permalink() ).'">';
                                    the_post_thumbnail( );
                                echo '</a>';
                            echo '</div>';
                        }
                        echo '<div class="search-card-content">';

                            if( get_the_title() ){
                                echo '<!-- Post Title -->';
                                echo '<h4 class="search-card-title fw-semibold"><a href="'.esc_url( get_permalink() ).'">'.esc_html( get_the_title( ) ).'</a></h4>';
                                echo '<!-- End Post Title -->';
                            }

                            echo '<div class="search-card-meta">';
                                echo '<a href="'.esc_url( medprosearch_blog_date_permalink() ).'"><i class="fal fa-calendar-alt"></i>';
                                    echo '<time datetime="'.esc_attr( get_the_date( DATE_W3C ) ).'">'.esc_html( get_the_date() ).'</time>';
                                echo '</a>';
                                echo '<span><i class="fal fa-eye"></i>';
                                echo medprosearch_getPostViews( get_the_ID() );
                                echo esc_html__( ' Views', 'medprosearch' );
                                echo '</span>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            wp_reset_postdata();
        } else{
            get_template_part('templates/content','none');
        }
    echo '</div>';

    /**
    * 
    * Hook for Blog Pagination
    *
    * Hook medprosearch_blog_pagination
    *
    * @Hooked medprosearch_blog_pagination_cb 10
    *  
    */
    do_action( 'medprosearch_blog_pagination' ); 

    /**
    * 
    * Hook for Blog Column End Wrapper
    *
    * Hook medprosearch_blog_col_end_wrap
    *
    * @Hooked medprosearch_blog_col_end_wrap_cb 10
    *  
    */
    do_action( 'medprosearch_blog_col_end_wrap' ); 

    /**
    * 
    * Hook for Blog Sidebar
    *
    * Hook medprosearch_blog_sidebar
    *
    * @Hooked medprosearch_blog_sidebar_cb 10
    *  
    */
    do_action( 'medprosearch_blog_sidebar' );     
        
    /**
    * 
    * Hook for Blog End Wrapper
    *
    * Hook medprosearch_blog_end_wrap
    *
    * @Hooked medprosearch_blog_end_wrap_cb 10
    *  
    */
    do_action( 'medprosearch_blog_end_wrap' );

    //footer
    get_footer();
