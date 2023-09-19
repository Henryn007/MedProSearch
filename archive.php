<?php


// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
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

    /**
    * 
    * Hook for Blog Content
    *
    * Hook medprosearch_blog_content
    *
    * @Hooked medprosearch_blog_content_cb 10
    *  
    */
    do_action( 'medprosearch_blog_content' );

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
