<?php

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
    /**
    *
    * Hook for Footer Content
    *
    * Hook medprosearch_footer_content
    *
    * @Hooked medprosearch_footer_content_cb 10
    *
    */
    do_action( 'medprosearch_footer_content' );

    if( !is_404(  ) ) {
        /**
        *
        * Hook for Back to Top Button
        *
        * Hook medprosearch_back_to_top
        *
        * @Hooked medprosearch_back_to_top_cb 10
        *
        */
        do_action( 'medprosearch_back_to_top' );
    }

    wp_footer();
    ?>
</body>
</html>
