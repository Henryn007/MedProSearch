<?php
	// Block direct access
	if( ! defined( 'ABSPATH' ) ){
		exit( );
	}


	if( ! is_active_sidebar( 'medprosearch-woo-sidebar' ) ){
		return;
	}
?>
<div class="col-lg-4">
	<!-- Sidebar Begin -->
	<aside class="sidebar-area">
		<?php
			dynamic_sidebar( 'medprosearch-woo-sidebar' );
		?>
	</aside>
	<!-- Sidebar End -->
</div>
