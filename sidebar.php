<?php

/**
 * @Packge     : Medixi
 * @Version    : 1.0
 * @Author     : Vecurosoft
 * @Author URI : https://www.templatemonster.com/authors/vecuro/
 *
 */


// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit;
}

if ( ! is_active_sidebar( 'medixi-blog-sidebar' ) ) {
    return;
}
?>

<div class="col-lg-4">
    <aside class="sidebar-area pl-30">
	    <?php dynamic_sidebar( 'medixi-blog-sidebar' ); ?>
	</aside>
</div>