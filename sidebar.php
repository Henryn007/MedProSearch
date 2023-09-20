<?php



// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit;
}

if ( ! is_active_sidebar( 'medprosearch-blog-sidebar' ) ) {
    return;
}
?>

<div class="col-lg-4">
    <aside class="sidebar-area pl-30">
	    <?php dynamic_sidebar( 'medprosearch-blog-sidebar' ); ?>
	</aside>
</div>
